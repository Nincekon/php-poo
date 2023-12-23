<?php

class Club
{
    /**
     * Name of this club
     *
     * @var string
     */
    private string $name;

    /**
     * Club constructor
     *
     * @param string $name
     * @return void
     */
    public function __construct(string $name)
    {
        $this->name = $name;
    }
}

class User
{
    /**
     * Firstname of this User
     *
     * @var string
     */
    private string $firstname;

    /**
     * Lastname of this User
     *
     * @var string
     */
    private string $lastname;

    /**
     * The club that he belongs to
     *
     * @var Club|null
     */
    private ?Club $club = null;

    /**
     * User constructor
     *
     * @param string $firstname
     * @param string $lastname
     * @return void
     */
    public function __construct(string $firstname, string $lastname)
    {
        $this->firstname = $firstname;
        $this->lastname = $lastname;
    }
}
