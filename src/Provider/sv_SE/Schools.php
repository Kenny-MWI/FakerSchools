<?php

namespace FakerSchools\Provider\sv_SE;

use Faker\Provider\Base as FakerBase;

class Schools extends FakerBase
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
    public function realUniversity()
    {
        return static::randomElement(static::$realUniversities);
    }

    /**
     * Ett påhittad universitetsnamn.
     * @example 'Helsingborg universitet'
     * @return string
     */
    public function university()
    {
        $format = static::randomElement(static::$universityFormats);

        return $this->generator->parse($format);
    }
}
