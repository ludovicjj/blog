## How to use this project :

[![Codacy Badge](https://api.codacy.com/project/badge/Grade/c9dc68123c444662a7617203465e72df)](https://app.codacy.com/app/ludovicjj/blog?utm_source=github.com&utm_medium=referral&utm_content=ludovicjj/blog&utm_campaign=Badge_Grade_Dashboard)

- Download all files and folders.
- Follow the instructions to set the database.

## Instructions to set databasa

1. Create a new database with the name of your choise.
2. Into this your databse importe the file "blog.sql".
3. In the folder "config", rename the file "config-default.php" to "config.php".
4. Then open this renamed file.
5. You should have an array with the following fields and change the default values to yours  :
	
 - 'db_user' => 'root',
 - 'db_pass' => '',
 - 'db_host' => 'localhost',
 - 'db_name' => 'blog'

## How to connect to admin pages

1. Click on button "connexion".
2. Complete the following fields with these username and password values :
 - Username = admin
 - Password = admin
 - Then click on the botton "envoyer".
4. It is strongly recommended to change the password value in your database.

## Posts

### Add a post

1. You must be connected (follow procedures stipulated)
2. Click on the button "Administraion" into navbar.
3. Choose option "articles".
4. than click on the button "ajouter".
5. Complete the following fields
 - titre
 - introduction
 - contenu
 - auteur (you can let the default value)
 - image
6. Click on the button "envoyer".

### Update a post

1. You must be connected (follow procedures stipulated)
2. Click on the button "Administraion" into navbar.
3. Choose option "articles".
4. than click on the button "modifier".
5. Change as you like.
6. Click on the button "envoyer".

### Delete a post

1. You must be connected (follow procedures stipulated)
2. Click on the button "Administraion" into navbar.
3. Choose option "articles".
4. than click on the button "supprimer".

## Comments

### Confirm or delete a comment awaiting validation

1. You must be connected (follow procedures stipulated)
2. Click on the button "Administraion" into navbar.
3. Choise option "commentaires".
4. You will got a list of comments awwaiting validation by post.
5. Choose one post and click on the button "voir plus"
6. You have the choise to confirm (button "valider) or delete (button "supprimer")

## Users

### Change users status

1. You must be connected (follow procedures stipulated)
2. Click on the button "Administraion" into navbar.
3. Choise option "membres".
4. You got a list of users.
5. you choise the status you want :
 - buttom "administrateur" = admin
 - buttom "membre" = simple user