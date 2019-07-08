# dragon_crew
Base de donnée des lancements de fusées dans le monde

## Installation

```shell
composer install
```

Créer un fichier .env.local et définir la connexion à la base de données.
DATABASE_URL=mysql://root:root@127.0.0.1:8889/dragon_crew
```shell
php bin/console doctrine:database:drop --force
php bin/console doctrine:database:create
php bin/console doctrine:migration:migrate
php bin/console doctrine:fixtures:load
```