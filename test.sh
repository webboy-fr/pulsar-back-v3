#Suppression de l'ancien dossier au cas ou
rm -Rf pulsar-back-v3

#Clonage du repo officiel
git clone https://github.com/webboy-fr/pulsar-back-v3.git

#Positionnement dans le dossier du projet
cd pulsar-back-v3

#Installation du projet via composer
composer install

#Déplacement du fichier des variables d'environnement
cp ../.env .

#Refresh des migration
php spark migrate:refresh

#Lancement des tests
./vendor/bin/phpunit tests
