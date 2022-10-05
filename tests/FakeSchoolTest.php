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
        $this->assertIsString($this->faker->highSchool);
    }

    public function testCanGetRandomCollege()
    {
        $this->assertIsString($this->faker->college);
    }

    public function testCanGetRandomUniversity()
    {
        $this->assertIsString($this->faker->university);
    }

    public function testCanGetRandomSchool()
    {
        $this->assertIsString($this->faker->school);
    }

    public function testCanGetRandomRealHighSchool()
    {
        $this->assertContains($this->faker->realHighSchool, $this->getProtectedProperty('realHighSchools'));
    }

    public function testCanGetRandomRealCollege()
    {
        $this->assertContains($this->faker->realCollege, $this->getProtectedProperty('realColleges'));
    }

    public function testCanGetRandomRealUniversity()
    {
        $this->assertContains($this->faker->realUniversity, $this->getProtectedProperty('realUniversities'));
    }

    public function testCanGetRandomRealSchool()
    {
        $this->assertContains($this->faker->realSchool, array_merge(
            $this->getProtectedProperty('realHighSchools'),
            $this->getProtectedProperty('realColleges'),
            $this->getProtectedProperty('realUniversities')
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
