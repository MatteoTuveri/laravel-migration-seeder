<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400"></a></p>

<p align="center">
<a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

## Installazione Laravel

```bash
cd your parent_folder_path

composer create-project --prefer-dist laravel/laravel:^9.2 your_project_name_here

cd your_project_name_here

code . -r

php artisan serve

ctrl + c

```
## Configurazione Laravel
```bash
composer require pacificdev/laravel_9_preset

php artisan preset:ui bootstrap

npm install

npm install --save @fortawesome/fontawesome-free

#in vite config aggiungo agli alias
'~@fortawesome': path.resolve(__dirname, 'node_modules/@fortawesome'),

#copio la cartella dei webfont e se voglio la rinomino

#installo dbal per migration e seeder
composer require doctrine/dbal:^3.3


#comandi git

git init
git add .
git commit -m "first commit"
git branch -M main
git remote add origin your_git_url 
git push -u origin main

```
## Clono progetto da github 

```bash
# copio file .env.example e lo rinomino in .env

composer install

php artisan key:generate

npm install

# creo il database da phpmyadmin

# inserisco i dati per il collegamento al db in env

#creo migration
php artisan make:migration create_nome_tabella_table
#aggiorno migration
php artisan make:migration update_users_table --table=users
#aggiungo un campo alla tabella
php artisan make:migration add_phone_number_to_users_table

#lanciare migration
php artisan migrate

#revert migration
php artisan migrate:rollback

#creare il model (necessario per salvare dati su db con seeder)
php artisan make:model Nome

#popolare il db  es.
php artisan make:seeder UsersTableSeeder

php artisan db:seed --class=UsersTableSeeder

# preparo le rotte file web.php es. 
Route::get('/books', [BookController::class, 'index'])->name('books.index');

# creo controller
php artisan make:controller NomeController


# creo le views relative
#cut and paste the code in welcome.blade.php in app.blade.php

#add yields in app and rename 'welcome' to 'home'
```

## Esercizio
>Creaiamo un database da phpmyadmin (es train_db)
>Creiamo una tabella trains e relativa Migration
>Ogni treno dovrà avere:
```bash
#Azienda
#Stazione di partenza
#Stazione di arrivo
#Orario di partenza
#Orario di arrivo
#Codice Treno
#Numero Carrozze
#In orario
#Cancellato
```
>È probabile che siano necessarie altre colonne per far funzionare la tabella nel modo corretto
>Create il Model Train e aggiungete un seeder per la classe Train usando FakerPHP.