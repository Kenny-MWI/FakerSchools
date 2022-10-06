<?php

namespace FakerSchools\Tests;

use Faker\Factory;
use FakerSchools\Interface\SchoolInterface;
use FakerSchools\Provider\en_US\Schools as en_US_Schools;
use PHPUnit\Framework\TestCase;

class FakeSchoolTest extends TestCase
{
    /**
     * @var \Faker\Generator
     */
    private $faker;

    // setup
    public function setUp(): void
    {
        $this->faker = Factory::create();
    }

    /**
     * @dataProvider locales
     */
    public function testCanGetRandomHighSchool($locale)
    {
            $class = 'FakerSchools\Provider\\' . $locale . '\Schools';
            $this->faker->addProvider(new $class($this->faker));
            $this->assertIsString($this->faker->highSchool);
    }

    /**
     * @dataProvider locales
     */
    public function testCanGetRandomCollege($locale)
    {
            $class = 'FakerSchools\Provider\\' . $locale . '\Schools';
            $this->faker->addProvider(new $class($this->faker));
            $this->assertIsString($this->faker->college);
    }

    /**
     * @dataProvider locales
     */
    public function testCanGetRandomUniversity($locale)
    {
            $class = 'FakerSchools\Provider\\' . $locale . '\Schools';
            $this->faker->addProvider(new $class($this->faker));
            $this->assertIsString($this->faker->university);
    }

    /**
     * @dataProvider locales
     */
    public function testCanGetRandomSchool($locale)
    {
            $class = 'FakerSchools\Provider\\' . $locale . '\Schools';
            $this->faker->addProvider(new $class($this->faker));
            $this->assertIsString($this->faker->school);
    }

    /**
     * @dataProvider locales
     */
    public function testCanGetRandomRealHighSchool($locale)
    {
            $class = 'FakerSchools\Provider\\' . $locale . '\Schools';
            $this->faker->addProvider(new $class($this->faker));
            $this->assertContains(
                $this->faker->realHighSchool,
                $this->getProtectedProperty('realHighSchools', new $class($this->faker))
            );
    }

    /**
     * @dataProvider locales
     */
    public function testCanGetRandomRealCollege($locale)
    {
            $class = 'FakerSchools\Provider\\' . $locale . '\Schools';
            $this->faker->addProvider(new $class($this->faker));
            $this->assertContains(
                $this->faker->realCollege,
                $this->getProtectedProperty('realColleges', new $class($this->faker))
            );
    }

    /**
     * @dataProvider locales
     */
    public function testCanGetRandomRealUniversity($locale)
    {
            $class = 'FakerSchools\Provider\\' . $locale . '\Schools';
            $this->faker->addProvider(new $class($this->faker));
            $this->assertContains(
                $this->faker->realUniversity,
                $this->getProtectedProperty('realUniversities', new $class($this->faker))
            );
    }

    /**
     * @dataProvider locales
     */
    public function testCanGetRandomRealSchool($locale)
    {
            $class = 'FakerSchools\Provider\\' . $locale . '\Schools';
            $this->faker->addProvider(new $class($this->faker));
            $this->assertContains($this->faker->realSchool, array_merge(
                $this->getProtectedProperty('realHighSchools', new $class($this->faker)),
                $this->getProtectedProperty('realColleges', new $class($this->faker)),
                $this->getProtectedProperty('realUniversities', new $class($this->faker))
            ));
    }

    private function getProtectedProperty($property, $class = null)
    {
        if (is_null($class)) {
            $class = new en_US_Schools($this->faker);
        }

        if ($class instanceof SchoolInterface) {
            $reflection = new \ReflectionClass($class);
            $reflection_property = $reflection->getProperty($property);
            $reflection_property->setAccessible(true);

            return $reflection_property->getValue($class);
        }

        return null;
    }

    protected function locales()
    {
        return [
            'English (United States)' => ['en_US'],
            'Swedish' => ['sv_SE'],
        ];
    }
}
