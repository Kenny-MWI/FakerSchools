<?php

namespace FakerSchools\Provider;

use Faker\Provider\Base as FakerBase;

/**
 * Class Schools
 * @package FakerSchools\Provider
 * @see src/Provider/en_US/Schools.php for locale specific implementations
 */
class Schools extends FakerBase
{
    /**
     * @var array
     */
    protected static $universityFormats = [
        '{{state}} University'
    ];

    /**
     * @var array
     */
    protected static $collegeFormats = [
        '{{state}} College'
    ];

    /**
     * @var array
     */
    protected static $highSchoolFormats = [
        '{{city}} High School'
    ];

    /**
     * @var array
     */
    protected static $realHighSchools = [
        'Bronx High School'
    ];

    /**
     * @var array
     */
    protected static $realColleges = [
        'Crowder College'
    ];

    /**
     * @var array
     */
    protected static $realUniversities = [
        'University of Missouri'
    ];

    public function __construct($locale = 'en_US')
    {
        $providerClass = 'FakerSchools\\' . ($locale ? sprintf('Provider\%s\%s', $locale, 'Schools') : 'Provider\Schools');

        if (class_exists($providerClass)) {
            $this->generator->addProvider(new $providerClass($this->generator));
        }
    }

    /**
     * A fictional university name. Any resemblance to real universities is purely coincidental.
     * @example 'Missouri Institute of Technology'
     * @return string
     */
    public function university()
    {
        $format = static::randomElement(static::$universityFormats);

        return $this->generator->parse($format);
    }

    /**
     * A fictional college name. Any resemblance to real colleges is purely coincidental.
     * @example 'Springfield Community College'
     * @return string
     */
    public function college()
    {
        $format = static::randomElement(static::$collegeFormats);

        return $this->generator->parse($format);
    }

    /**
     * A fictional high school name. Any resemblance to real high schools is purely coincidental.
     * @example 'Zulauf High School'
     * @return string
     */
    public function highSchool()
    {
        $format = static::randomElement(static::$highSchoolFormats);

        return $this->generator->parse($format);
    }

    /**
     * A real high school name.
     * @return string
     */
    public function realHighSchool()
    {
        return static::randomElement(static::$realHighSchools);
    }

    /**
     * A real college name.
     * @return string
     */
    public function realCollege()
    {
        return static::randomElement(static::$realColleges);
    }

    /**
     * A real university name.
     * @return string
     */
    public function realUniversity()
    {
        return static::randomElement(static::$realUniversities);
    }

    /**
     * A real university, college, or high school name.
     * @return string
     */
    public function realSchool()
    {
        return static::randomElement(array_merge(static::$realHighSchools, static::$realColleges, static::$realUniversities));
    }
}