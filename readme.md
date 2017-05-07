## Attendance

[![Build Status](https://travis-ci.org/jpagov/attendance.svg?branch=master)](https://travis-ci.org/jpagov/attendance) [![StyleCI](https://styleci.io/repos/90129090/shield?style=plastic)](https://styleci.io/repos/90129090/shield?style=plastic)

## Installation

### 1. Download

[Download](https://github.com/jpagov/attendance/archive/master.zip) or clone using Git:

```bash
git clone https://github.com/jpagov/attendance.git
```

### 2. Environment / Configuration

**2.1. Development**

This project use [Laravel 5 Boilerplate](https://github.com/rappasoft/laravel-5-boilerplate) as boilerplate and developed on [Laravel Homestead](https://laravel.com/docs/master/homestead) and I highly :+1: you use either that or [Laravel Valet](https://laravel.com/docs/master/valet) for Mac user only, to get the optimal server configuration and no errors through installation.

**2.2. Environment**

This package ships with a `.env.example` file in the root of the project. You must rename this file to just `.env`

```bash
cp .env.example .env
```

**Note**:
- Make sure you have hidden files shown on your system.
- If you want to use Travis CI, you can use `.env.example` and rename to `.env.travis`

**2.3. Database**

You must create your database on your server and on your `.env` file update the following lines:

```
DB_DATABASE=attendance
```

### 4. Composer

Project dependencies are managed through the [PHP Composer tool](http://getcomposer.org/). The first step is to install the depencencies by navigating into your project in terminal and typing this command:

```bash
composer install
```

### 5. NPM/Yarn (optional)

In order to install the Javascript packages for frontend development, you will need the [Node Package Manager (NPM)](https://www.npmjs.com/), and optionally the [Yarn Package Manager (Yarn)](https://code.facebook.com/posts/1840075619545360) by Facebook (Recommended)

If you only have NPM installed you have to run this command from the root of the project:

```bash
npm install
```

If you have Yarn installed, run this instead from the root of the project:

```bash
yarn
```

### 6. Artisan Commands

Set the key that Laravel will use when doing encryption, run the built in migrations to create the database tables and dummy data:

```bash
php artisan key:generate
php artisan migrate --seed
```

You should see the information in your database tables.

## Issues

If you come across any issues please [report them here](https://github.com/jpagov/attendance/issues).

## Contributing

Thank you for considering contributing to the Laravel Attendance project! Please feel free to make any pull requests. appreciated.