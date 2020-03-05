# Docker Container

## Supprimer tous le containeurs en cour d'exécution

```sh
docker rm -f $(docker ps -aq)
```
