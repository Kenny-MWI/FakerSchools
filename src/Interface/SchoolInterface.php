<?php

namespace FakerSchools\Interface;

interface SchoolInterface
{
    /**
     * @return string
     */
    public function highSchool(): string;

    /**
     * @return string
     */
    public function college(): string;

    /**
     * @return string
     */
    public function university(): string;

    /**
     * @return string
     */
    public function school(): string;

    /**
     * @return string
     */
    public function realHighSchool(): string;

    /**
     * @return string
     */
    public function realCollege(): string;

    /**
     * @return string
     */
    public function realUniversity(): string;

    /**
     * @return string
     */
    public function realSchool(): string;
}