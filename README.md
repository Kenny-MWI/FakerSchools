[![Unit Tests](https://github.com/Kenny-MWI/FakerSchools/actions/workflows/php.yml/badge.svg?branch=main)](https://github.com/Kenny-MWI/FakerSchools/actions/workflows/php.yml)
![Packagist PHP Version](https://img.shields.io/packagist/dependency-v/kenny-mwi/faker-schools/php?logo=php&color=%230057B8)
![Packagist Downloads (custom server)](https://img.shields.io/packagist/dt/kenny-mwi/faker-schools?server=https%3A%2F%2Fpackagist.org&style=flat&logo=packagist&color=%23FFD700&link=https%3A%2F%2Fpackagist.org%2Fpackages%2Fkenny-mwi%2Ffaker-schools)
[![StandWithUkraine](https://raw.githubusercontent.com/vshymanskyy/StandWithUkraine/main/badges/StandWithUkraine.svg)](https://stand-with-ukraine.pp.ua)

# FakerSchools
University, College, and High School name generator using fakerphp/faker

## Installation

Add the FakerSchools library to your `composer.json` file:

```
composer require kenny-mwi/faker-schools --dev
```

Remove the `--dev` flag if you need it in production.

## Usage

This is a third-party library for [Faker](https://github.com/FakerPHP/Faker). You'll need to add the `Schools` class to the Faker generator in your setup somewhere:

```php
<?php

$faker = \Faker\Factory::create();
$faker->addProvider(new \FakerSchools\Provider\en_US\Schools($faker)); // To use the US English locale
$faker->addProvider(new \FakerSchools\Provider\sv_SE\Schools($faker)); // To use the Swedish locale

// Generator
$faker->school(); // A randomly generated high school, college, or university school name
$faker->highSchool(); // A randomly generated high school name
$faker->college(); // A randomly generated college name
$faker->university(); // A randomly generated university name
$faker->realCollege(); // A real college name
$faker->realUniversity(); // A real university name
```

Make sure your faker locale matches the FakerSchools locale you pick or you may see some mismatched names generated. In Laravel projects this is defined in `config/app.php`.

### Laravel
If you're using this in a Laravel database factory, you can create a custom `FakerServiceProvider` and add the provider there.

```php
<?php

namespace App\Providers;

use Faker\Factory;
use Faker\Generator;
use FakerSchools\Provider\en_US\Schools;
use Illuminate\Contracts\Support\DeferrableProvider;
use Illuminate\Support\ServiceProvider;

class FakerServiceProvider extends ServiceProvider implements DeferrableProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        $this->app->singleton(Generator::class, function () {
            $faker = Factory::create();
            $faker->addProvider(new Schools($faker));
            return $faker;
        });
    }

    public function provides(): array
    {
        return [Generator::class];
    }
}
```

Next, register the provider in `config/app.php` where your other custom service providers are registered.

```php
'providers' => ServiceProvider::defaultProviders()->merge([
    App\Providers\FakerServiceProvider::class,
    App\Providers\SomeOtherProvider::class,
    // etc
]);
```

Now you should be able to use any of the FakerSchools methods anywhere you're using faker in your project.

## Contributing

Feel free to create localized providers for your own locale and submit a PR! I'm also always open to suggestions for new features to add.
