<?php

namespace FakerSchools\Provider\en_US;

use FakerSchools\Provider\Schools as BaseSchools;

/**
 * Class Schools
 * @package FakerSchools\Provider\en_US
 */
class Schools extends BaseSchools
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
}
