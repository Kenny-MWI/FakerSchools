<?php

namespace FakerSchools\Provider\sv_SE;

use Faker\Provider\Base as FakerBase;
use FakerSchools\SchoolInterface;

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
    protected static $collegeFormats = [
        '{{city}} högskola',
        '{{city}} konstnärliga högskola',
        '{{city}} tekniska högskola',
        'Högskolan {{city}}',
        'Högskolan i {{city}}',
    ];

    /**
     * @var array
     */
    protected static $highSchoolFormats = [
        '{{city}} Högstadiet',
        '{{city}} Skola',
    ];

    /**
     * @var array
     */
    protected static $realHighSchools = [
        'Skeppsholmens Folkhögskola',
        'Östra Reals Gymnasium',
        'Enskilda Gymnasiet',
    ];

    /**
     * @see https://sv.wikipedia.org/wiki/Lista_%C3%B6ver_universitet_och_h%C3%B6gskolor_i_Sverige#Statliga_h%C3%B6gskolor_med_r%C3%A4tt_att_utf%C3%A4rda_examina_inom_forskarutbildning
     * @see https://en.wikipedia.org/wiki/List_of_universities_and_colleges_in_Sweden#Public_university_colleges
     * @var array
     */
    protected static $realColleges = [
        'Blekinge tekniska högskola',
        'Gymnastik- och idrottshögskolan',
        'Högskolan i Borås',
        'Högskolan i Halmstad',
        'Högskolan i Skövde',
        'Högskolan Kristianstad',
        'Högskolan Väst',
        'Södertörns högskola',
        'Högskolan i Gävle',
        'Högskolan Dalarna',
        'Försvarshögskolan',
        'Stockholms konstnärliga högskola'
    ];

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
