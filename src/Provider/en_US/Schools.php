<?php

namespace FakerSchools\Provider\en_US;

class Schools extends \Faker\Provider\Base
{
    /**
     * @var array
     */
    protected static $highSchools = [
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
    protected static $colleges = [
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
    protected static $universities = [
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
     * A random high school name.
     * @return string
     */
    public function highSchool()
    {
        return static::randomElement(static::$highSchools);
    }

    /**
     * A random college name.
     * @return string
     */
    public function college()
    {
        return static::randomElement(static::$colleges);
    }

    /**
     * A random university name.
     * @return string
     */
    public function university()
    {
        return static::randomElement(static::$universities);
    }

    /**
     * A random school name.
     * @return string
     */
    public function school()
    {
        return static::randomElement(array_merge(static::$highSchools, static::$colleges, static::$universities));
    }
}
