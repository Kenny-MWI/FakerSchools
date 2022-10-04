<?php

namespace FakerSchools\Tests;

use Faker\Factory;
use FakerSchools\Provider\en_US\Schools;
use PHPUnit\Framework\TestCase;

class FakeSchoolTest extends TestCase
{
    /**
     * @var \Faker\Generator
     */
    private $faker;

    protected function setUp(): void
    {
        $this->faker = Factory::create();
        $this->faker->addProvider(new Schools($this->faker));
    }

    public function testCanGetRandomHighSchool()
    {
        $this->assertContains($this->faker->highSchool, $this->getProtectedProperty('highSchools'));
    }

    public function testCanGetRandomCollege()
    {
        $this->assertContains($this->faker->college, $this->getProtectedProperty('colleges'));
    }

    public function testCanGetRandomUniversity()
    {
        $this->assertContains($this->faker->university, $this->getProtectedProperty('universities'));
    }

    public function testCanGetRandomSchool()
    {
        $this->assertContains($this->faker->school, array_merge(
            $this->getProtectedProperty('highSchools'),
            $this->getProtectedProperty('colleges'),
            $this->getProtectedProperty('universities')
        ));
    }

    private function getProtectedProperty($property, $class = null)
    {
        if (is_null($class)) {
            $class = new Schools($this->faker);
        }

        $reflection = new \ReflectionClass($class);
        $reflection_property = $reflection->getProperty($property);
        $reflection_property->setAccessible(true);

        return $reflection_property->getValue($class);
    }
}
