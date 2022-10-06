<?php

namespace FakerSchools\Provider\en_US;

use Faker\Provider\Base as FakerBase;
use FakerSchools\Interface\SchoolInterface;

class Schools extends FakerBase implements SchoolInterface
{
    /**
     * @var array
     */
    protected static $universityFormats = [
        '{{state}} University',
        '{{state}} State University',
        '{{state}} Institute of Technology',
        'University of {{state}}',
        'University of {{state}} at {{city}}',
    ];

    /**
     * @var array
     */
    protected static $collegeFormats = [
        '{{state}} College',
        '{{state}} State College',
        '{{city}} Community College',
        '{{city}} Junior College',
        '{{city}} Technical College'
    ];

    /**
     * @var array
     */
    protected static $highSchoolFormats = [
        '{{city}} High School',
        '{{city}} County High School',
        '{{lastName}} High School',
    ];

    /**
     * @var array
     */
    protected static $realHighSchools = [
        'Brooklyn Technical High School',
        'Fort Hamilton High School',
        'Tottenville High School',
        'Edward R Murrow High School',
        'Stuyvesant High School',
        'Bayside High School',
        'Thomas Jefferson High School',
        'Bronx High School',
        'Francis Lewis High School',
        'Benjamin N Cardozo High School',
        'Midwood High School',
        'Polytechnic High School',
        'Reading High School',
        'Herbert H Lehman High School',
        'Paramount High School',
        'Skyline High School',
        'Dewitt Clinton High School',
        'John C. Fremont Senior High School',
        'North Shore Senior High School',
        'Neuqua Valley High School',
        'Brentwood High School',
        'Wilson High School',
        'Lakewood High School',
        'Neosho High School',
        'Webb City High School',
        'Joplin High School',
        'Parkway Central High School',
        'Springfield High School',
        'Columbia High School',
        'East Newton High School',
        'McDonald County High School',
        'Carl Junction High School',
        'Cartervile High School',
        'Diamond High School',
        'Harrisonville High School',
        'Carthage High School',
        'Cherry Creek High School',
        'Rock Canyon High School',
        'Mesa High School',
        'Perry High School',
    ];

    /**
     * @var array
     */
    protected static $realColleges = [
        'Crowder College',
        'Jefferson College',
        'Mineral Area College',
        'East Central College',
        'Ozarks Technical Community College',
        'St. Charles Community College',
        'St. Louis Community College',
        'State Fair Community College',
        'Three Rivers Community College',
        'Maricopa County Community College',
        'Mohave Community College',
        'Cochise College',
        'Pima Community College',
        'Yavapai College',
        'Collins College',
        'Vatterott College',
        'Brunswick Community College',
        'Potomac State College',
        'Northern Virginia Community College',
        'Delaware Technical Community College',
        'Delaware College of Art and Design',
        'East Los Angeles College',
        'Jamestown Community College',
        'Booker T. Washington Junior College',
    ];

    /**
     * @var array
     */
    protected static $realUniversities = [
        'Ohio State University',
        'Alabama State University',
        'University of Georgia',
        'Princeton University',
        'University of Florida',
        'Stanford University',
        'University of Michigan',
        'University of California',
        'University of North Carolina',
        'Georgia Institute of Technology',
        'Florida State University',
        'Ohio State University',
        'Vanderbilt University',
        'Harvard University',
        'University of Texas',
        'University of Wisconsin',
        'University of Washington',
        'University of Virginia',
        'Duke University',
        'Yale University',
        'Rice University',
        'University of Notre Dame',
        'Purdue University',
        'Northwestern University',
        'University of Illinois',
        'Texas A&M University',
        'Virginia Tech',
        'Wake Forest University',
        'Dartmouth College',
        'Cornell University',
        'Brown University',
        'Penn State University',
        'Baylor University',
        'Massachusetts Institute of Technology',
        'University of Missouri',
        'University of Colorado',
        'Oklahoma University'
    ];

    /**
     * A fictional university name. Any resemblance to real universities is purely coincidental.
     * @example 'Missouri Institute of Technology'
     * @return string
     */
    public function university(): string
    {
        $format = static::randomElement(static::$universityFormats);

        return $this->generator->parse($format);
    }

    /**
     * A fictional college name. Any resemblance to real colleges is purely coincidental.
     * @example 'Springfield Community College'
     * @return string
     */
    public function college(): string
    {
        $format = static::randomElement(static::$collegeFormats);

        return $this->generator->parse($format);
    }

    /**
     * A fictional high school name. Any resemblance to real high schools is purely coincidental.
     * @example 'Zulauf High School'
     * @return string
     */
    public function highSchool(): string
    {
        $format = static::randomElement(static::$highSchoolFormats);

        return $this->generator->parse($format);
    }

    /**
     * A fictional university, college, or high school name. Any resemblance to a real school's name is purely coincidental.
     * @example 'University of Missouri'
     * @return string
     */
    public function school(): string
    {
        $format = static::randomElement(array_merge(static::$universityFormats, static::$collegeFormats, static::$highSchoolFormats));

        return $this->generator->parse($format);
    }

    /**
     * A real high school name.
     * @return string
     */
    public function realHighSchool(): string
    {
        return static::randomElement(static::$realHighSchools);
    }

    /**
     * A real college name.
     * @return string
     */
    public function realCollege(): string
    {
        return static::randomElement(static::$realColleges);
    }

    /**
     * A real university name.
     * @return string
     */
    public function realUniversity(): string
    {
        return static::randomElement(static::$realUniversities);
    }

    /**
     * A real university, college, or high school name.
     * @return string
     */
    public function realSchool(): string
    {
        return static::randomElement(array_merge(static::$realHighSchools, static::$realColleges, static::$realUniversities));
    }
}
