# Firebase Authentication package for Laravel PHP framework

[![Latest Stable Version](https://poser.pugx.org/vinkas/firebase-auth-laravel/v/stable.svg)](https://packagist.org/packages/vinkas/firebase-auth-laravel)
[![Latest Unstable Version](https://poser.pugx.org/vinkas/firebase-auth-laravel/v/unstable.svg)](https://packagist.org/packages/vinkas/firebase-auth-laravel)
[![License](https://poser.pugx.org/vinkas/firebase-auth-laravel/license.svg)](https://packagist.org/packages/vinkas/firebase-auth-laravel)

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

* [Override Laravel's existing authentication method](https://community.vinkas.com/t/firebase-authentication-package-for-laravel-php-framework/19/5?u=vinothkannans).
* [Add as additional authentication option](https://community.vinkas.com/t/firebase-authentication-package-for-laravel-php-framework/19/4?u=vinothkannans). Without modifying Laravel's existing methods.

## Screenshots

![FirebaseUI Web](/screenshots/sign-in-providers.png)

## Dependencies

* [Firebase php JWT](https://github.com/firebase/php-jwt)
* [FirebaseUI Web](https://github.com/firebase/firebaseui-web)
