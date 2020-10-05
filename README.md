# Firebase Authentication package for Laravel PHP framework

[![Discuss Group](https://img.shields.io/badge/discuss.group-vinkas-blue.svg?style=flat-square)](http://vinkas.discuss.group/c/firebase-auth-laravel)
[![Latest Stable Version](https://poser.pugx.org/vinkas/firebase-auth-laravel/v/stable.svg?format=flat-square)](https://packagist.org/packages/vinkas/firebase-auth-laravel)
[![Latest Unstable Version](https://poser.pugx.org/vinkas/firebase-auth-laravel/v/unstable.svg?format=flat-square)](https://packagist.org/packages/vinkas/firebase-auth-laravel)
[![Total Downloads](https://img.shields.io/packagist/dt/vinkas/firebase-auth-laravel.svg?style=flat-square)](https://packagist.org/packages/vinkas/firebase-auth-laravel)

## Installation

#### Via Composer Require

You may install by running the `composer require` command in your terminal:
```
composer require vinkas/firebase-auth-laravel
```

**Add Service Provider to your `config/app.php` file**

```
Vinkas\Firebase\Auth\ServiceProvider::class,
```

**Run `php artisan` command to publish package files into your app**

```
php artisan vendor:publish --provider="Vinkas\Firebase\Auth\ServiceProvider"
```

**Add your firebase project id, api key and auth domain in `.env` file**

```
FIREBASE_PROJECT_ID=__________
FIREBASE_API_KEY=__________
FIREBASE_AUTH_DOMAIN=__________
```


## Configuration

* [Override Laravel's existing authentication method](http://vinkas.discuss.group/t/Override-Laravels-existing-authentication-method/81).
* [Add as additional authentication option](http://vinkas.discuss.group/t/Add-as-additional-authentication-option/80). Without modifying Laravel's existing methods.

## Screenshots

![FirebaseUI Web](/screenshots/sign-in-providers.png)

## Dependencies

* [Firebase php JWT](https://github.com/firebase/php-jwt)
* [FirebaseUI Web](https://github.com/firebase/firebaseui-web)

this is very useful repo for my web-app
