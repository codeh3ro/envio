FROM php:8.3-fpm

### apt-utils é um extensão de recursos do gerenciador de pacotes APT
RUN apt-get update -y && apt-get install -y --no-install-recommends \
    apt-utils \
    supervisor

# Install system dependencies
RUN apt-get update && apt-get install -y \
    bash \
    curl \
    libpng-dev \
    libzip-dev \
    zlib1g-dev \
    gcc \
    make \
    autoconf \
    unixodbc-dev \
    gnupg \
    libxml2-dev \
    && apt-get clean \
    && rm -rf /var/lib/apt/lists/*

# Install PHP extensions
RUN docker-php-ext-install gd pdo_mysql session xml \
    && docker-php-ext-install pcntl \
    && pecl install redis \
    && docker-php-ext-enable redis \
    && docker-php-ext-install zip

# Get latest Composer
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

COPY ./docker/supervisord/supervisord.conf /etc/supervisor/conf.d/supervisord.conf
COPY ./docker/supervisord/supervisord.conf /etc/supervisord.d/
### Supervisor permite monitorar e controlar vários processos (LINUX)
### Bastante utilizado para manter processos em Daemon, ou seja, executando em segundo plano

# Install node and npm
RUN apt-get update && apt-get install -y nodejs npm \
    && apt-get clean \
    && rm -rf /var/lib/apt/lists/*

# Add repository ODBC and Install the Microsoft ODBC driver for SQL Server
RUN curl -o /etc/apt/trusted.gpg.d/microsoft.asc https://packages.microsoft.com/keys/microsoft.asc \
    && curl https://packages.microsoft.com/config/ubuntu/22.04/prod.list > /etc/apt/sources.list.d/mssql-release.list \
    && apt-get update \
    && apt-get install -y unixodbc-dev \
    && ACCEPT_EULA=Y apt-get install -y msodbcsql18 \
    && ACCEPT_EULA=Y apt-get install -y mssql-tools \
    && apt-get install -y gcc musl-dev make

# Install the PHP drivers for Microsoft SQL Server
RUN curl -O https://pear.php.net/go-pear.phar \
    && php go-pear.phar

# Install SQLSRV and PDO_SQLSRV extensions
RUN pecl channel-update pecl.php.net \
    && pecl install sqlsrv pdo_sqlsrv \
    && printf "; priority=20\nextension=sqlsrv.so\n" > /usr/local/etc/php/conf.d/sqlsrv.ini \
    && printf "; priority=30\nextension=pdo_sqlsrv.so\n" > /usr/local/etc/php/conf.d/pdo_sqlsrv.ini \
    && pecl clear-cache \
    && rm -rf /tmp/* /var/tmp/*

# Set working directory
WORKDIR /var/www

# Expose the PHP-FPM port
EXPOSE 9000

CMD ["/usr/bin/supervisord", "-c", "/etc/supervisor/supervisord.conf"]
