# Bilemo
Un web service exposant une API

<p>Projet 7 du parcours développeur d'application PHP/Symfony chez OpenClassrooms : Créez un web service exposant une API</p>
<p>Réalisé en PHP 7.3.21 et Symfony 4.26.5</p>

Installer l'application

    - Clonez le repository GitHub
    
    - Configurez vos variables d'environnement dans le fichier .env :    
      
      => DATABASE_URL=mysql://root:@127.0.0.1:3306/bilemo?serverVersion=5.7 pour la base de données
      
    - Téléchargez et installez les dépendances du projet avec la commande Composer suivante : composer install
    
    - Créez la base de données en utilisant la commande suivante : php bin/console doctrine:database:create
    
    - Créez la structure de la base de données en utilisant la commande : php bin/console doctrine:migrations:migrate
    
    - Installer les fixtures pour avoir un jeu de données fictives avec la commande suivante : php bin/console doctrine:fixtures:load


<hr />

Genérer les clés SSH

    - mkdir -p config/jwt
    
    - openssl genpkey -out config/jwt/private.pem -aes256 -algorithm rsa -pkeyopt rsa_keygen_bits:4096 
     
    - openssl pkey -in config/jwt/private.pem -out config/jwt/public.pem -pubout

<hr />

Lancer L'application
	    
    - Lancez le serveur à l'aide de la commande suivante : symfony serve -d
    
    - Vous pouvez désormais commencer à utiliser l'appication Bilemo sur http://localhost:8000/api
    
    - Vous pouvez effectuer Des requetes HTTP à l'aide du logiciel Postman  
    
<hr />

Documentation API 
	    
    http://localhost:8000/api

<hr />

Inscription

    POST /api/Customers

    Les détails de l’inscription devront être envoyés en format JSON. Les champs email et password sont obligatoires.

    Exemple :

    { 
        "name": "Société 1", 
        "email": "test.societe01@gmail.com", 
        "password": "password" 
    }

<hr />

Authentification

    L’authentification est obligatoire pour accéder à l’ensemble des fonctionnalités de l’API

    Pour s’authentifier :

    POST /api/login_check

    Les détails du login devront être envoyés en format JSON. L’ensemble des champs (username, password) est obligatoire. L’username correspond en fait à l’email du client.

    Exemple :

    { 
        "username": "test.societe01@gmail.com", 
        "password": "password"
    }

    L’authentification nous permet de récupérer un token, qu’il faudra transmettre à chaque requête, en type Bearer Token.

<hr />





