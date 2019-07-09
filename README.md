# dragon_crew
Base de donnée des lancements de fusées dans le monde

## Installation

```shell
composer install
```

Créer un fichier .env.local et définir la connexion à la base de données.

```shell
php bin/console doctrine:database:drop --force
php bin/console doctrine:database:create
php bin/console doctrine:migration:migrate
php bin/console doctrine:fixtures:load
```

## Démarrer le projet

```shell
php bin/console server:run
npm run watch
```