<?php

namespace FakerSchools\Provider\sv_SE;

use Faker\Provider\Base as FakerBase;
use FakerSchools\Interface\SchoolInterface;

class Schools extends FakerBase implements SchoolInterface
{
    /**
     * @var array
     */
    protected static $universityFormats = [
        '{{city}} universitet',
        '{{city}} Högskola',
        '{{city}} tekniska universitet'
    ];

    /**
     * @todo
     * @var array
     */
    protected static $collegeFormats = [];

    /**
     * @var array
     */
    protected static $highSchoolFormats = [
        '{{city}} Högstadiet',
        '{{city}} Skola',
    ];

    /**
     * @todo
     * @var array
     */
    protected static $realHighSchools = [];

    /**
     * @todo
     * @var array
     */
    protected static $realColleges = [];

    /**
     * @see https://www.rocapply.com/study-in-sweden/sweden-universities/
     * @var array
     */
    protected static $realUniversities = [
        'Kungliga Tekniska Högskolan',
        'Stockholms universitet',
        'Karolinska Institutet',
        'Högskolan Väst',
        'Malmö Högskola',
        'Linnéuniversitetet',
        'Högskolan Dalarnas',
        'Högskolan i Borås',
        'Luleå tekniska universitet',
        'Högskolan i Skövde',
        'Göteborgs universitet',
        'Lunds universitet',
        'Uppsalas universitet',
        'Chalmers tekniska högskola',
        'Umeå universitet',
        'Örebro universitet',
        'Högskolan i Jönköping',
        'Mittuniversitetet',
    ];

    /**
     * Ett äkta universitetsnamn.
     * @return string
     */
    public function realUniversity(): string
    {
        return static::randomElement(static::$realUniversities);
    }

    /**
     * Ett påhittad universitetsnamn.
     * @example 'Helsingborg universitet'
     * @return string
     */
    public function university(): string
    {
        $format = static::randomElement(static::$universityFormats);

        return $this->generator->parse($format);
    }

    /**
     * Ett äkta högstadiets namn.
     * @return string
     */
    public function realHighSchool(): string
    {
        return static::randomElement(static::$realHighSchools);
    }

    /**
     * Ett påhittad högstadiets namn.
     * @example 'Helsingborg högstadiet'
     * @return string
     */
    public function highSchool(): string
    {
        $format = static::randomElement(static::$highSchoolFormats);

        return $this->generator->parse($format);
    }

    /**
     * Ett äkta högskolans namn.
     * @return string
     */
    public function realCollege(): string
    {
        return static::randomElement(static::$realColleges);
    }

    /**
     * Ett påhittad högskolans namn.
     * @example 'Helsingborg högskola'
     * @return string
     */
    public function college(): string
    {
        $format = static::randomElement(static::$collegeFormats);

        return $this->generator->parse($format);
    }

    /**
     * Ett äkta universitetsnamn, högskolans namn eller högstadiets namn.
     * @return string
     */
    public function realSchool(): string
    {
        return static::randomElement(array_merge(static::$realUniversities, static::$realColleges, static::$realHighSchools));
    }

    /**
     * Ett påhittad universitetsnamn, högskolans namn eller högstadiets namn.
     * @example 'Helsingborg högskola'
     * @return string
     */
    public function school(): string
    {
        return static::randomElement(array_merge(static::$universityFormats, static::$collegeFormats, static::$highSchoolFormats));
    }
}
