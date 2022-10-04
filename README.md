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
$faker->addProvider(new \FakerSchools\Provider\en_US\Schools($faker));

// Generator
$faker->school();      // A random high school, college, or university school name
$fake->highSchool();   // A random high school name
$faker->college();     // A random college name
$faker->university();  // A random university name
```

### Laravel

See [this article](https://hofmannsven.com/2021/faker-provider-in-laravel) for an alternative way to implement FakerSchools in a Laravel project.