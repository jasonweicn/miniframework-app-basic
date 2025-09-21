FROM php:7.4-fpm-alpine

# 安装依赖包和PHP扩展
RUN apk add --no-cache \
    git \
    zip \
    unzip \
    libzip-dev \
    && docker-php-ext-install zip pdo pdo_mysql

# 安装Composer
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

# 设置工作目录
WORKDIR /var/www/app

# 先复制composer文件，利用Docker缓存
COPY composer.json composer.lock ./

# 安装依赖
RUN composer install --optimize-autoloader --prefer-dist

# 再复制其他项目文件
COPY . .

# 设置权限 - 为日志目录、上传目录和依赖目录添加写权限
RUN chown -R www-data:www-data /var/www/app/Cache /var/www/app/Log /var/www/app/Public/uploads /var/www/app/vendor


EXPOSE 9000

CMD ["php-fpm"]
