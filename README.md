# Music Mood Website

A simple web application built with CodeIgniter that recommends songs based on the user's mood.


## Features

- Choose a mood (Happy, Sad, Love, Instrumental)
- Get song suggestions from MySQL database
- Music facts section
- Contact form with message storage in database
- MVC architecture (Model-View-Controller)


## Technologies

- PHP
- CodeIgniter 3
- MySQL (phpMyAdmin)
- HTML, CSS


## Project Structure

- application/ → Main code (controllers, models, views)
- assets/ → CSS and JS files
- index.php → Entry point


## Installation

1. Copy the project to htdocs.
2. Create music_db database with songs and messages tables.
3. Update database config in application/config/database.php.
4. Open localhost/your-folder-name in browser.


## Database Setup

1. Create a database named music_blog.
2. Import the database.sql file.
3. Update database credentials in application/config/database.php:

`php
'hostname' => 'localhost',
'username' => 'root',
'password' => '', //
'database' => 'music_db',