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

To  use this with [Faker](https://github.com/FakerPHP/Faker), you must add the `Schools` class to the Faker generator:

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
If you're using this in a Laravel database factory, you can add the provider in your `definition()` method or other method where you need it:
```php
use FakerSchools\Provider\en_US\Schools;

class SchoolFactory extends Factory {

    public function definition()
    {
        $this->faker->addProvider(new Schools($this->faker));
        return [
            'name' => $this->faker->college()
        ];
    }
}
```

See [this article](https://hofmannsven.com/2021/faker-provider-in-laravel) for an alternative way to use custom providers in a Laravel project if you don't want to use the above method.

## Contributing

Feel free to create localized providers for your own locale and submit a PR!
