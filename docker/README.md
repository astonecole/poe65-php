# Docker

## Install Wordpress

## Supprimer tous le containeurs en cour d'exécution

```sh
docker rm -f $(docker ps -aq)
```

### MySQL

```sh
docker run --network aston_network \
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
    -p 8080:80 \
    -d \
    wordpress
```