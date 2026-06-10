<!-- https://youtu.be/MG1kt_wiIz0
?t=4002 -->

composer require laravel/installer
<!-- installs laravel -->

composer require laravel/breeze
<!-- installs breeze  -->

php artisan breeze:install
<!-- merge code with laravel -->

laravel new medium-clone
<!-- create new project -->

cd medium-clone/
<!-- move to project -->

php artisan serve
<!-- start server -->

php artisan migrate
<!-- make databases -->

php artisan tinker
<!-- REPL tool -->

php artisan migrate:rollback --step=1
<!-- rollback last commit -->

php artisan make:factory PostFactory
<!-- create factory -->

php artisan db:seed
<!-- seed data to db -->

php artisan make:seeder PostSeeder
php artisan make:seeder UserSeeder
<!-- create seeder -->

php artisan db:seed --class=UserSeeder
<!-- seed specific seeder to db -->

php artisan db:seed 
<!-- seed main DatabaseSeeder.php to db -->

php artisan config:clear
php artisan cache:clear
<!-- cache clear  -->

php artisan key:generate
<!-- generate APP_KEY in .env -->

php artisan make:controller {{controller_name}} --resource
<!-- resource is special flag that give predefined methods like index, show etc -->