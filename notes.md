<!-- https://youtu.be/MG1kt_wiIz0
?t=7693 -->

<!-- flobite -->
https://flowbite.com/docs/getting-started/introduction/

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

slots is anything between opening and closing component tags


1. Navigate to the Project Folder
cd your-project-name

2. Install PHP Dependencies
composer install

3. Create the Environment File. Duplicate the example configuration file to create your active .env file
cp .env.example .env

4. Generate the Application Key
php artisan key:generate

5. Configure Your Database. Open your newly created .env file in a code editor and update the following lines to match your local database settings

DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=your_local_db_name
DB_USERNAME=root
DB_PASSWORD=your_password

6. Run Database Migrations and Seeders
php artisan migrate --seed

7. Install Frontend Assets
npm install
npm run dev

8. Link Storage (Optional). If your application handles file uploads or images, link the public storage directory:
php artisan storage:link

9. Serve the Application.
php artisan serve
http://127.0.0.1:8000.