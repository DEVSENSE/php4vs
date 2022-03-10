FROM php:8.0-cli

ENV APP_DIR /var/www/html

RUN mkdir -p $APP_DIR
WORKDIR $APP_DIR
EXPOSE 80
VOLUME $APP_DIR

# Xdebug
RUN pecl install xdebug && docker-php-ext-enable xdebug;

# append to end of php.ini the xdebug section
RUN echo "xdebug.client_host=host.docker.internal" >> "$PHP_INI_DIR/conf.d/xdebug.ini" \
    && echo "xdebug.mode=debug" >> "$PHP_INI_DIR/conf.d/xdebug.ini" \
    && echo "xdebug.client_port=9003" >> "$PHP_INI_DIR/conf.d/xdebug.ini" \
    && echo "xdebug.start_with_request=yes" >> "$PHP_INI_DIR/conf.d/xdebug.ini" \
    && echo "xdebug.idekey=10F3DA6B" >> "$PHP_INI_DIR/conf.d/xdebug.ini";


CMD ["php", "-S", "0.0.0.0:80", "-t", "."]