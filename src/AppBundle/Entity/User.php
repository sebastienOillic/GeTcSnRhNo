<?php

namespace AppBundle\Entity;

use FOS\UserBundle\Entity\User as BaseUser;
use Doctrine\ORM\Mapping as ORM;

/**
 * User
 */
class User extends BaseUser
{
    /**
     * @var int
     */
    protected $id;


    
}

    /**
     * @var string
     */
//    private $firstname;
//
//    /**
//     * @var string
//     */
//    private $lastName;
//
//    /**
//     * @var string
//     */
//    private $email;
//
//    /**
//     * @var string
//     */
//    private $password;
//
//
//    /**
//     * Get id
//     *
//     * @return integer
//     */
//    public function getId()
//    {
//        return $this->id;
//    }
//
//    /**
//     * Set firstname
//     *
//     * @param string $firstname
//     * @return User
//     */
//    public function setFirstname($firstname)
//    {
//        $this->firstname = $firstname;
//
//        return $this;
//    }
//
//    /**
//     * Get firstname
//     *
//     * @return string
//     */
//    public function getFirstname()
//    {
//        return $this->firstname;
//    }
//
//    /**
//     * Set lastName
//     *
//     * @param string $lastName
//     * @return User
//     */
//    public function setLastName($lastName)
//    {
//        $this->lastName = $lastName;
//
//        return $this;
//    }
//
//    /**
//     * Get lastName
//     *
//     * @return string
//     */
//    public function getLastName()
//    {
//        return $this->lastName;
//    }
//
//    /**
//     * Set email
//     *
//     * @param string $email
//     * @return User
//     */
//    public function setEmail($email)
//    {
//        $this->email = $email;
//
//        return $this;
//    }
//
//    /**
//     * Get email
//     *
//     * @return string
//     */
//    public function getEmail()
//    {
//        return $this->email;
//    }
//
//    /**
//     * Set password
//     *
//     * @param string $password
//     * @return User
//     */
//    public function setPassword($password)
//    {
//        $this->password = $password;
//
//        return $this;
//    }
//
//    /**
//     * Get password
//     *
//     * @return string
//     */
//    public function getPassword()
//    {
//        return $this->password;
//    }
//}
