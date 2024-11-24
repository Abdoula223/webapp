# Utiliser une image de base PHP avec Apache
FROM php:8.2-apache

# Installer les extensions PHP nécessaires (si besoin)
RUN docker-php-ext-install mysqli pdo pdo_mysql

# Copier les fichiers de l'application dans le conteneur
COPY app/ /var/www/html/

# Donner les permissions correctes
RUN chown -R www-data:www-data /var/www/html && chmod -R 755 /var/www/html

# Exposer le port 80 pour Apache
EXPOSE 80

