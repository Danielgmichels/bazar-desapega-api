FROM php:8.3-fpm-alpine

# Instala dependências do sistema e bibliotecas para extensões PHP
RUN apk add --no-cache \
    bash \
    curl \
    git \
    unzip \
    libzip-dev \
    libpng-dev \
    libjpeg-turbo-dev \
    freetype-dev \
    icu-dev \
    oniguruma-dev

# Configura e instala as extensões essenciais para Laravel 13, MySQL e upload/processamento de imagens
RUN docker-php-ext-configure gd --with-freetype --with-jpeg && \
    docker-php-ext-install -j$(nproc) \
    pdo_mysql \
    mbstring \
    exif \
    pcntl \
    bcmath \
    gd \
    intl \
    zip \
    opcache

# Instala o Composer a partir da imagem oficial
COPY --from=composer:2 /usr/bin/composer /usr/bin/composer

# Copia configurações personalizadas de PHP e Opcache
COPY docker/php/local.ini /usr/local/etc/php/conf.d/local.ini
COPY docker/php/opcache.ini /usr/local/etc/php/conf.d/opcache.ini

WORKDIR /var/www/html

# Copia manifestos de dependência primeiro para aproveitar o cache de camadas do Docker
COPY composer.json composer.lock ./

# Instala dependências de produção sem rodar scripts que dependem do código da aplicação
RUN composer install --no-dev --no-scripts --no-autoloader --prefer-dist --no-interaction

# Copia o restante do código-fonte da aplicação
COPY . .

# Gera o autoloader otimizado de produção
RUN composer dump-autoload --optimize --no-dev

# Copia o script de entrypoint e dá permissão de execução
COPY docker/entrypoint.sh /usr/local/bin/entrypoint.sh
RUN chmod +x /usr/local/bin/entrypoint.sh

# Garante a posse de arquivos para o usuário www-data
RUN chown -R www-data:www-data /var/www/html/storage /var/www/html/bootstrap/cache

EXPOSE 9000

ENTRYPOINT ["/usr/local/bin/entrypoint.sh"]
CMD ["php-fpm"]
