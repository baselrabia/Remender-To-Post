# Remender-To-Post-
Automatic check if user publish posts at last 7 days or not, and if he not posted anything send email to him

## Setting up


### Requirements
- [PHP >= 7.2](http://php.net/)
- [Composer](https://getcomposer.org/)
- [Xampp](https://www.apachefriends.org/)
- [Git](https://git-scm.com/)


### Clone GitHub repo for this project locally

`git clone https://github.com/baselrabia/Remender-To-Post.git`

- `cd Remender-To-Post`
- `composer install`
- `cp .env.example .env`
- `php artisan key:generate`

## Linking Mysql Database to the Project

- Open your local `PhpMyAdmin` 
- create new database for the application 
- edit the configration of the database in the `.env` file 
- Run the command line for making the migration of the database -> `php artisan migrate`

## starting the application 

now everthing is almost done just one step more to start your App
-  Run this command line for serveing the App to your localhost ->  `php artisan serve` 
-  another command to notify users in the current time -> `php artisan notify:users`
-  if you want to start your schedule and notify users automatically every week with email use this one --> `php artisan schedule:run
 `
##
