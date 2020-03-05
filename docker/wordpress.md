# Wordpress

### MySQL

```sh
docker run --network aston_network \
    -v dbstore:/var/lib/mysql \
    -p 3306:3306 \
    -e MYSQL_ROOT_PASSWORD=root \
    -e MYSQL_DATABASE=blog \
    -d \
    --name mydb \
    mysql --default-authentication-plugin=mysql_native_password
```

### Wordpress

```sh
docker run --name wp \
    --network aston_network \
    -v wp_volume:/var/www/html \
    -p 8080:80 \
    -d \
    wordpress
```

### PHPMyAdmin

```sh
docker run \
    --name myadmin -d \
    --network aston_network \
    -e PMA_HOST=mydb \
    -p 8000:80 \
    phpmyadmin/phpmyadmin
```

```sh
docker run \
    --name myadmin -d \
    --network aston_network \
    -e PMA_ARBITRARY=1 \
    -p 8000:80 \
    phpmyadmin/phpmyadmin
```