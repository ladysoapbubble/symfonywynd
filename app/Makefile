
db:
    php bin/console  doctrine:database:drop --force
    php bin/console  doctrine:database:create
    php bin/console doctrine:migrations:migrate
    php bin/console doctrine:fixtures:load

jwt:
    rm -Rf config/jwt
    mkdir -p config/jwt

    openssl genpkey -out config/jwt/private.pem -aes256 -algorithm rsa -pkeyopt rsa_keygen_bits:4096
    openssl pkey -in config/jwt/private.pem -out config/jwt/public.pem -pubout

    chmod 777 -R config/jwt

    curl -X POST -H "Content-Type: application/json" http://localhost/api/login_check -d '{"username":"first@example.com","password":"firstpwd"}'