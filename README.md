## General info
An IMDB inspired app where users can search for movies, sign up and save favourite movies in a watchlist. User can also add reviews. An admin panel is available at /admin where movies, genres, reviews etc can be managed.

## Deployment
Site deployed to https://imdb-clone-chas.herokuapp.com.

## Technologies
* Laravel / PHP
* Laravel Backpack
* MySQL Database
* Tailwind

## Setup
Clone the repo. Install the dependencies with `composer install`. Migrate the database with `artisan migrate`.

## Dummy data
Seed the database with `artisan db:seed`. It will generate 50 users, default movies, genres, empty watchlists and fake reviews.