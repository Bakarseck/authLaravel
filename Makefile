# Makefile pour un projet Laravel

# Démarrer le serveur de développement Laravel
start:
	php artisan serve

# Exécuter les migrations de base de données
migrate:
	php artisan migrate

# Créer une nouvelle migration
make-migration:
	php artisan make:migration $(name)

# Exécuter les seeders de base de données
db-seed:
	php artisan db:seed

# Rafraîchir les migrations (annuler et relancer toutes les migrations)
migrate-refresh:
	php artisan migrate:refresh

# Effacer le cache de configuration
config-clear:
	php artisan config:clear

# Mettre en cache la configuration (pour la production)
config-cache:
	php artisan config:cache

# Effacer le cache de vue
view-clear:
	php artisan view:clear

# Effacer le cache des routes
route-clear:
	php artisan route:clear

# Mettre en cache les routes (pour la production)
route-cache:
	php artisan route:cache

# Effacer le cache des événements
event-clear:
	php artisan event:clear

# Lancer les tests
test:
	php artisan test

# Installer les dépendances Composer
composer-install:
	composer install

# Mettre à jour les dépendances Composer
composer-update:
	composer update

# Créer un nouveau contrôleur
make-controller:
	php artisan make:controller $(name)

# Créer un nouveau modèle
make-model:
	php artisan make:model $(name)

# Créer un nouveau seeder
make-seeder:
	php artisan make:seeder $(name)

# Créer un nouveau middleware
make-middleware:
	php artisan make:middleware $(name)
