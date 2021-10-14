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
	    
    https://documenter.postman.com/preview/5943399-1e01b199-9942-418f-91da-6123c8b421fd?environment=&versionTag=latest&apiName=CURRENT&version=latest&documentationLayout=classic-double-column&right-sidebar=303030&top-bar=FFFFFF&highlight=EF5B25#d779ebff-0476-4aba-b392-3466bc8073d0
<hr />





