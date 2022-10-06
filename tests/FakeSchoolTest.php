<?php

namespace FakerSchools\Tests;

use Faker\Factory;
use FakerSchools\Interface\SchoolInterface;
use FakerSchools\Provider\en_US\Schools as en_US_Schools;
use PHPUnit\Framework\TestCase;
use Faker\Generator as FakerGenerator;

class FakeSchoolTest extends TestCase
{
    private FakerGenerator $faker;

    public function setUp(): void
    {
        $this->faker = Factory::create();
    }

    /**
     * Data Provider for these tests
     * @see https://phpunit.readthedocs.io/en/9.5/writing-tests-for-phpunit.html#writing-tests-for-phpunit-data-providers
     */
    protected function locales(): array
    {
        return [
            'English (United States)' => ['en_US'],
            'Swedish' => ['sv_SE'],
        ];
    }

    /**
     * @dataProvider locales
     */
    public function testProviderImplementsSchoolInterface($locale)
    {
        $class = 'FakerSchools\Provider\\' . $locale . '\Schools';
        $this->assertInstanceOf(SchoolInterface::class, new $class($this->faker));
    }

    /**
     * @dataProvider locales
     */
    public function testCanGetRandomHighSchool($locale)
    {
            $class = 'FakerSchools\Provider\\' . $locale . '\Schools';
            $this->faker->addProvider(new $class($this->faker));
            $this->assertIsString($this->faker->highSchool);
            $this->assertNotEmpty($this->faker->highSchool);
    }

    /**
     * @dataProvider locales
     */
    public function testCanGetRandomCollege($locale)
    {
            $class = 'FakerSchools\Provider\\' . $locale . '\Schools';
            $this->faker->addProvider(new $class($this->faker));
            $this->assertIsString($this->faker->college);
            $this->assertNotEmpty($this->faker->college);
    }

    /**
     * @dataProvider locales
     */
    public function testCanGetRandomUniversity($locale)
    {
            $class = 'FakerSchools\Provider\\' . $locale . '\Schools';
            $this->faker->addProvider(new $class($this->faker));
            $this->assertIsString($this->faker->university);
            $this->assertNotEmpty($this->faker->university);
    }

    /**
     * @dataProvider locales
     */
    public function testCanGetRandomSchool($locale)
    {
            $class = 'FakerSchools\Provider\\' . $locale . '\Schools';
            $this->faker->addProvider(new $class($this->faker));
            $this->assertIsString($this->faker->school);
            $this->assertNotEmpty($this->faker->school);
    }

    /**
     * @dataProvider locales
     */
    public function testCanGetRandomRealHighSchool($locale)
    {
            $class = 'FakerSchools\Provider\\' . $locale . '\Schools';
            $this->faker->addProvider(new $class($this->faker));
            $school = $this->faker->realHighSchool;
            $this->assertIsString($school);
            $this->assertNotEmpty($school);
            $this->assertContains($school, $this->getProtectedProperty('realHighSchools', new $class($this->faker)));
    }

    /**
     * @dataProvider locales
     */
    public function testCanGetRandomRealCollege($locale)
    {
            $class = 'FakerSchools\Provider\\' . $locale . '\Schools';
            $this->faker->addProvider(new $class($this->faker));
            $school = $this->faker->realCollege;
            $this->assertIsString($school);
            $this->assertNotEmpty($school);
            $this->assertContains($school, $this->getProtectedProperty('realColleges', new $class($this->faker)));
    }

    /**
     * @dataProvider locales
     */
    public function testCanGetRandomRealUniversity($locale)
    {
            $class = 'FakerSchools\Provider\\' . $locale . '\Schools';
            $this->faker->addProvider(new $class($this->faker));
            $school = $this->faker->realUniversity;
            $this->assertIsString($school);
            $this->assertNotEmpty($school);
            $this->assertContains($school, $this->getProtectedProperty('realUniversities', new $class($this->faker)));
    }

    /**
     * @dataProvider locales
     */
    public function testCanGetRandomRealSchool($locale)
    {
            $class = 'FakerSchools\Provider\\' . $locale . '\Schools';
            $this->faker->addProvider(new $class($this->faker));
            $school = $this->faker->realSchool;
            $this->assertIsString($school);
            $this->assertNotEmpty($school);
            $this->assertContains($school, array_merge(
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

        $reflection = new \ReflectionClass($class);
        $reflection_property = $reflection->getProperty($property);
        $reflection_property->setAccessible(true);

        return $reflection_property->getValue($class);
    }
}
