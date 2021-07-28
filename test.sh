rm -Rf pulsar-back-v3

git clone https://github.com/webboy-fr/pulsar-back-v3.git

cd pulsar-back-v3
composer install


cp ../.env .




php spark migrate:refresh

#php spark serve

#php spark db:seed MemberSeeder
./vendor/bin/phpunit tests
