FROM nginx:stable-alpine

ARG user
ARG UID
ARG GID

ENV user=${user}
ENV UID=${UID}
ENV GID=${GID}

# MacOS staff group's gid is 20, so is the dialout group in alpine linux. We're not using it, let's just remove it.
RUN delgroup dialout

RUN addgroup -g ${GID} --system laravel
RUN adduser -G laravel --system -D -s /bin/sh -u ${UID} laravel
RUN sed -i "s/user  nginx/user laravel/g" /etc/nginx/nginx.conf




ADD ./nginx/default.conf /etc/nginx/conf.d/

RUN mkdir -p /var/www/html

# Set working directory
WORKDIR /var/www/html

RUN chown -R laravel:laravel /var/www


