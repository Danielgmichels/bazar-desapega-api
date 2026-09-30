# DOCUMENTO DE ESPECIFICAÇÃO DE SOFTWARE (SDD) - API BAZAR DESAPEGA

**Versão 1.1 • Final de Implementação e Extensões • Setembro de 2026**

---

## 1. ARQUITETURA GERAL DO SISTEMA

O sistema do **Bazar Desapega** utiliza uma arquitetura desacoplada (**Headless / API-First**), dividida em duas camadas completamente independentes que se comunicam através do protocolo HTTP/HTTPS utilizando o padrão REST:

* **Backend**: Laravel 13 (PHP 8.3+), MySQL 8.0+, autenticação stateless via Laravel Sanctum (Bearer Token).
* **Frontend**: Next.js 16.3 (App Router), React 19, TypeScript, Tailwind CSS 4, TanStack Query.

### 1.1. Diretrizes Técnicas do Backend

- **Linguagem**: PHP 8.3+ (otimizações e tipagem estrita).
- **Framework**: Laravel 13.x (configuração de rotas em `routes/api.php` e middlewares via `bootstrap/app.php`).
- **Banco de Dados**: MySQL 8.0+ com InnoDB e suporte a transações ACID (`DB::transaction`).
- **Autenticação**: Stateless via Laravel Sanctum com Bearer Tokens associados a `usuarios.id_usuario`.
- **Armazenamento de Imagens**: Abstração `Storage::disk('public')`, gerando links acessíveis via `asset('storage/...')`. Compatível com migrações para AWS S3, Google Cloud Storage ou Cloudinary via driver `.env`.
- **Controle de Acesso (RBAC)**: Middleware `CheckAdmin` verificando se o usuário autenticado possui `is_admin == true` em todas as rotas `/api/admin/*`.
- **Respostas Padronizadas**: Formato JSON com status HTTP semânticos (200 OK, 201 Created, 401 Unauthorized, 403 Forbidden, 404 Not Found, 422 Unprocessable Entity, 500 Internal Error).

---

## 2. MODELAGEM RELACIONAL E DICIONÁRIO DE DADOS (MYSQL)

### 2.1. Tabelas de Domínio e Apoio

#### `estados`
- `id_estado` (INT, PK, AUTO_INCREMENT)
- `uf` (CHAR(2), NOT NULL, UNIQUE) - Ex: "PR", "SP", "SC"
- `nome` (VARCHAR(50), NOT NULL)
- `timestamps`

#### `cidades`
- `id_cidade` (INT, PK, AUTO_INCREMENT)
- `id_estado` (INT, FK -> estados.id_estado, ON DELETE RESTRICT)
- `nome` (VARCHAR(100), NOT NULL)
- `timestamps`

#### `tipos_produto` (Categorias)
- `id_tipo` (INT, PK, AUTO_INCREMENT)
- `nome` (VARCHAR(50), NOT NULL, UNIQUE) - Ex: "Jaqueta/Casaco", "Calça", "Vestido", "Camiseta/Blusa", "Calçado"
- `timestamps`

#### `generos`
- `id_genero` (INT, PK, AUTO_INCREMENT)
- `nome` (VARCHAR(30), NOT NULL, UNIQUE) - "Feminino", "Masculino", "Unissex", "Infantil"
- `timestamps`

#### `status_disponibilidades`
- `id_status_disp` (INT, PK, AUTO_INCREMENT)
- `nome` (VARCHAR(50), NOT NULL, UNIQUE) - Valores canônicos: `1` = "Disponível", `2` = "Reservado", `3` = "Vendido"
- `timestamps`

#### `status_pedidos`
- `id_status_pedido` (INT, PK, AUTO_INCREMENT)
- `nome` (VARCHAR(50), NOT NULL, UNIQUE) - "Aguardando Pagamento", "Pagamento Aprovado", "Em Separação", "Enviado", "Entregue", "Cancelado"
- `timestamps`

#### `tipos_entrega`
- `id_tipo_entrega` (INT, PK, AUTO_INCREMENT)
- `nome` (VARCHAR(50), NOT NULL, UNIQUE) - "Retirada no Local", "Correios - PAC", "Correios - SEDEX", "Transportadora"
- `timestamps`

---

### 2.2. Gestão de Usuários (Herança EER 1:1)

```
        +--------------------------------+
        |            USUARIOS            |
        | id_usuario (PK)                |
        | nome, email, telefone, etc.    |
        | is_admin (boolean)             |
        +--------------------------------+
                     /      \
                    /        \
                   v          v
   +--------------------+    +--------------------+
   |      CLIENTES      |    |    FORNECEDORES    |
   | id_usuario (PK/FK) |    | id_usuario (PK/FK) |
   | senha (hasheada)   |    +--------------------+
   +--------------------+
```

#### `usuarios` (Superclasse)
- `id_usuario` (INT, PK, AUTO_INCREMENT)
- `id_cidade` (INT, FK -> cidades.id_cidade)
- `nome` (VARCHAR(100), NOT NULL)
- `data_nascimento` (DATE, NULLABLE)
- `telefone` (VARCHAR(20), NULLABLE)
- `email` (VARCHAR(100), NOT NULL, UNIQUE)
- `endereco` (VARCHAR(150), NULLABLE)
- `is_admin` (BOOLEAN, DEFAULT FALSE, NOT NULL)
- `timestamps`

#### `clientes` (Subclasse)
- `id_usuario` (INT, PK, FK -> usuarios.id_usuario, ON DELETE CASCADE)
- `senha` (VARCHAR(255), NOT NULL)
- `timestamps`

#### `fornecedores` (Subclasse)
- `id_usuario` (INT, PK, FK -> usuarios.id_usuario, ON DELETE CASCADE)
- `timestamps`

---

### 2.3. Inventário e Peças Únicas

#### `produtos`
- `id_produto` (INT, PK, AUTO_INCREMENT)
- `id_fornecedor` (INT, NOT NULL, FK -> fornecedores.id_usuario)
- `id_tipo` (INT, NOT NULL, FK -> tipos_produto.id_tipo)
- `id_genero` (INT, NOT NULL, FK -> generos.id_genero)
- `id_status_disp` (INT, NOT NULL, DEFAULT 1, FK -> status_disponibilidades.id_status_disp)
- `data_entrada` (DATE, NOT NULL)
- `marca` (VARCHAR(50), NULLABLE)
- `tamanho` (VARCHAR(10), NOT NULL) - Ex: P, M, G, 38, 40, 42
- `cor` (VARCHAR(30), NOT NULL)
- `preco_custo` (DECIMAL(10,2), NOT NULL) - Custo de aquisição do brechó
- `preco_venda` (DECIMAL(10,2), NOT NULL) - Preço de venda ao público
- `timestamps`

#### `foto_produtos`
- `id_foto` (INT, PK, AUTO_INCREMENT)
- `id_produto` (INT, NOT NULL, FK -> produtos.id_produto, ON DELETE CASCADE)
- `caminho_arquivo` (VARCHAR(255), NOT NULL)
- `is_principal` (BOOLEAN, DEFAULT FALSE)
- `timestamps`

---

### 2.4. Vendas, Pedidos e Itens

#### `pedidos`
- `id_pedido` (INT, PK, AUTO_INCREMENT)
- `id_cliente` (INT, NOT NULL, FK -> clientes.id_usuario)
- `id_status_pedido` (INT, NOT NULL, FK -> status_pedidos.id_status_pedido)
- `id_tipo_entrega` (INT, NOT NULL, FK -> tipos_entrega.id_tipo_entrega)
- `data_pedido` (DATETIME, NOT NULL)
- `valor_total` (DECIMAL(10,2), NOT NULL)
- `timestamps`

#### `item_pedidos`
- `id_item_pedido` (INT, PK, AUTO_INCREMENT)
- `id_pedido` (INT, NOT NULL, FK -> pedidos.id_pedido, ON DELETE CASCADE)
- `id_produto` (INT, NOT NULL, UNIQUE, FK -> produtos.id_produto)
  - **Restrição de integridade**: O índice `UNIQUE(id_produto)` impede no nível físico do banco que qualquer peça unitária de brechó seja vendida mais de uma vez.
- `timestamps`

---

## 3. CONTRATOS COMPLETOS DE ROTAS E ENDPOINTS (API REST)

Todas as rotas estão registradas em `routes/api.php`.

### 3.1. Autenticação e Sessão (Pública e Protegida)

#### `POST /api/register`
Cadastra um novo cliente e inicia a sessão gerando token Sanctum.
- **Request Body (JSON)**:
  ```json
  {
    "nome": "Daniela Michels",
    "email": "daniela@email.com",
    "password": "senha_segura_123",
    "telefone": "(41) 99999-8888",
    "id_cidade": 4007,
    "endereco": "Rua XV de Novembro, 450",
    "data_nascimento": "1995-05-15"
  }
  ```
- **Response (201 Created)**:
  ```json
  {
    "message": "Cliente cadastrado com sucesso!",
    "token": "1|yH2p9K...",
    "user": {
      "id_usuario": 101,
      "nome": "Daniela Michels",
      "email": "daniela@email.com",
      "is_admin": false
    }
  }
  ```

#### `POST /api/login`
Autentica o usuário e retorna o token Sanctum e o objeto de usuário com a flag `is_admin`.
- **Request Body (JSON)**:
  ```json
  {
    "email": "michele@bazardesapega.com.br",
    "password": "senha_segura"
  }
  ```
- **Response (200 OK)**:
  ```json
  {
    "message": "Autenticado com sucesso",
    "token": "2|9La3kP...",
    "user": {
      "id_usuario": 1,
      "nome": "Michele Admin",
      "email": "michele@bazardesapega.com.br",
      "is_admin": true
    }
  }
  ```

#### `POST /api/logout` (Requer Bearer Token)
Revoga o token atual do usuário.
- **Response (200 OK)**:
  ```json
  { "message": "Sessão encerrada com sucesso." }
  ```

---

### 3.2. Vitrine Pública (Sem autenticação)

#### `GET /api/produtos`
Lista as peças disponíveis para venda (`id_status_disp = 1`).
- **Query Params opcionais**:
  - `?tipo=2` (ID da categoria)
  - `?genero=1` (ID do gênero)
  - `?tamanho=M` (Filtro por tamanho)
  - `?busca=zara` (Busca textual por marca ou características)
- **Response (200 OK)**:
  ```json
  [
    {
      "id_produto": 25,
      "marca": "Zara",
      "tamanho": "M",
      "cor": "Caramelo",
      "preco_venda": 189.90,
      "tipo": "Casaco de Lã",
      "genero": "Feminino",
      "foto_principal": "http://127.0.0.1:8000/storage/produtos/foto_1.jpg",
      "fotos": [
        { "caminho_arquivo": "http://127.0.0.1:8000/storage/produtos/foto_1.jpg", "is_principal": true }
      ]
    }
  ]
  ```

#### `GET /api/produtos/{id}`
Exibe todas as informações e galeria completa da peça.
- **Response (200 OK)**: Retorna o objeto do produto com galeria completa de fotos e status de disponibilidade.

---

### 3.3. Área do Cliente (Requer Bearer Token)

#### `POST /api/pedidos`
Criação de pedido pelo checkout da loja online.
- **Request Body (JSON)**:
  ```json
  {
    "id_tipo_entrega": 2,
    "produtos": [25, 32]
  }
  ```
- **Regras de Negócio**:
  1. Verifica se todas as peças possuem `id_status_disp = 1`. Se alguma foi vendida, retorna HTTP 422 imediatamente.
  2. Cria o pedido, vincula os itens e atualiza as peças para `id_status_disp = 3` (Vendido).
- **Response (201 Created)**:
  ```json
  {
    "message": "Pedido realizado com sucesso!",
    "id_pedido": 14,
    "valor_total": 209.80,
    "status": "Aguardando Pagamento"
  }
  ```

#### `GET /api/meus-pedidos`
Retorna todos os pedidos realizados pelo cliente logado com os itens, status e modalidade de entrega.

---

### 3.4. Painel de Controle Administrativo (Requer Sanctum + `is_admin == true`)

#### Gestão de Produtos (`/api/admin/produtos`)
- `GET /api/admin/produtos`: Retorna o acervo completo incluindo peças vendidas, custos, fornecedores e datas de entrada.
- `POST /api/admin/produtos` (`multipart/form-data`):
  - Campos: `id_fornecedor`, `id_tipo`, `id_genero`, `data_entrada`, `marca`, `tamanho`, `cor`, `preco_custo`, `preco_venda`.
  - Arquivos: `foto_principal` (arquivo binário) e `fotos_secundarias[]` ou `fotos[]`.
- `GET /api/admin/produtos/{id}`: Detalhe administrativo da peça.
- `PUT /api/admin/produtos/{id}`: Atualização de preço, fornecedor, categoria, tamanho e status de disponibilidade.
- `DELETE /api/admin/produtos/{id}`: Exclusão da peça do acervo.

#### Gestão de Pedidos e Vendas Diretas (`/api/admin/pedidos`)
- `GET /api/admin/pedidos`: Lista todas as vendas da loja com dados do cliente, modalidade de entrega, valores e status.
- `POST /api/admin/pedidos` (Venda Manual / Direta):
  - Permite criar pedidos manuais para vendas originadas no Instagram, WhatsApp ou balcão físico.
  - Campos aceitos: `id_tipo_entrega`, `produtos[]`, `id_cliente` (opcional, assume o admin ou cliente criado) e `id_status_pedido` (ex: 2 = Pagamento Aprovado).
  - Dá baixa automática nas peças vendidas.
- `GET /api/admin/pedidos/{id}`: Detalhes completos do pedido, itens e comprador.
- `PUT /api/admin/pedidos/{id}`:
  - Atualização do status do pedido (ex: de "Em Separação" para "Enviado" ou "Entregue").
  - **Devolução Inteligente de Estoque**: Se o status for alterado para "Cancelado", as peças voltam automaticamente a ter `id_status_disp = 1` (Disponível).

#### Gestão de Clientes (`/api/admin/clientes`)
- `GET /api/admin/clientes`: Lista os clientes cadastrados com total de pedidos e gastos.
- `POST /api/admin/clientes`: Criação rápida de cliente (nome, telefone, e-mail opcional, cidade, endereço) para vincular a vendas manuais de WhatsApp/Instagram.
- `GET /api/admin/clientes/{id}`: Ficha do cliente com histórico completo de compras.

#### Gestão de Fornecedores (`/api/admin/fornecedores`)
- `GET /api/admin/fornecedores`: Lista todos os fornecedores cadastrados e contagem de peças associadas.
- `POST /api/admin/fornecedores`: Criação atômica de usuário + fornecedor (usada tanto na tela de fornecedores quanto pelo modal de criação rápida na tela de Novo Produto).
- `GET /api/admin/fornecedores/{id}` e `PUT /api/admin/fornecedores/{id}`: Edição de dados cadastrais.

#### Configurações Dinâmicas e Tabelas Auxiliares (`/api/admin/configuracoes`)
- `GET /api/admin/configuracoes`: Retorna simultaneamente todas as modalidades de entrega, categorias de peças, gêneros e status de pedidos.
- `POST /api/admin/configuracoes/{grupo}`: Adiciona um novo item ao grupo (`tipos_entrega`, `tipos_produto`, `generos`, `status_pedidos`).
- `PUT /api/admin/configuracoes/{grupo}/{id}`: Edita o nome de um item existente.
- `DELETE /api/admin/configuracoes/{grupo}/{id}`: Remove um item auxiliar (protegido contra exclusão de registros com chaves estrangeiras vinculadas).

---

## 4. SEGURANÇA E CORS

No arquivo `config/cors.php`, as origens do frontend estão devidamente autorizadas:
```php
'paths' => ['api/*', 'sanctum/csrf-cookie'],
'allowed_methods' => ['*'],
'allowed_origins' => ['http://localhost:3000', 'http://127.0.0.1:3000', 'http://localhost:5173'],
'allowed_headers' => ['*'],
'supports_credentials' => true,
```
