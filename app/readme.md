**Symfony wynd training**

Run docker containers
`docker-compose up -d`

Для установки проекта нужно выполнить следующие команды:
`docker exec symfony_app-php-cli composer install`

Запуск миграции и загрузка фикстур:

`docker exec -it symfony_app-php-cli php bin/console doctrine:migrations:migrate`
`docker exec -it symfony_app-php-cli php bin/console doctrine:fixtures:load`

Генерация ключей JWT:

`mkdir -p config/jwt`
`docker exec -it symfony_app-php-cli openssl genpkey -out config/jwt/private.pem -aes256 -algorithm rsa -pkeyopt rsa_keygen_bits:4096`
`docker exec -it symfony_app-php-cli  openssl pkey -in config/jwt/private.pem -out config/jwt/public.pem -pubout`
`docker exec -it symfony_app-php-cli chmod 777 -R config/jwt`

Получение токена:
`curl -X POST -H "Content-Type: application/json" http://localhost/api/login_check -d '{"username":"first@example.com","password":"firstpwd"}'`

Список страниц:

http://localhost




