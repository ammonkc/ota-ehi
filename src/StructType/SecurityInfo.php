<?php

namespace ammonkc\otaehi\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SecurityInfo StructType
 * @subpackage Structs
 */
class SecurityInfo extends AbstractStructBase
{
    /**
     * The PasswordHint
     * @var \ammonkc\otaehi\StructType\PasswordHint
     */
    public $PasswordHint;
    /**
     * The Username
     * @var UNKNOWN
     */
    public $Username;
    /**
     * The Password
     * @var UNKNOWN
     */
    public $Password;
    /**
     * Constructor method for SecurityInfo
     * @uses SecurityInfo::setPasswordHint()
     * @uses SecurityInfo::setUsername()
     * @uses SecurityInfo::setPassword()
     * @param \ammonkc\otaehi\StructType\PasswordHint $passwordHint
     * @param UNKNOWN $username
     * @param UNKNOWN $password
     */
    public function __construct(\ammonkc\otaehi\StructType\PasswordHint $passwordHint = null, UNKNOWN $username = null, UNKNOWN $password = null)
    {
        $this
            ->setPasswordHint($passwordHint)
            ->setUsername($username)
            ->setPassword($password);
    }
    /**
     * Get PasswordHint value
     * @return \ammonkc\otaehi\StructType\PasswordHint|null
     */
    public function getPasswordHint()
    {
        return $this->PasswordHint;
    }
    /**
     * Set PasswordHint value
     * @param \ammonkc\otaehi\StructType\PasswordHint $passwordHint
     * @return \ammonkc\otaehi\StructType\SecurityInfo
     */
    public function setPasswordHint(\ammonkc\otaehi\StructType\PasswordHint $passwordHint = null)
    {
        $this->PasswordHint = $passwordHint;
        return $this;
    }
    /**
     * Get Username value
     * @return UNKNOWN|null
     */
    public function getUsername()
    {
        return $this->Username;
    }
    /**
     * Set Username value
     * @param UNKNOWN $username
     * @return \ammonkc\otaehi\StructType\SecurityInfo
     */
    public function setUsername(UNKNOWN $username = null)
    {
        $this->Username = $username;
        return $this;
    }
    /**
     * Get Password value
     * @return UNKNOWN|null
     */
    public function getPassword()
    {
        return $this->Password;
    }
    /**
     * Set Password value
     * @param UNKNOWN $password
     * @return \ammonkc\otaehi\StructType\SecurityInfo
     */
    public function setPassword(UNKNOWN $password = null)
    {
        $this->Password = $password;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \ammonkc\otaehi\StructType\SecurityInfo
     */
    public static function __set_state(array $array)
    {
        return parent::__set_state($array);
    }
    /**
     * Method returning the class name
     * @return string __CLASS__
     */
    public function __toString()
    {
        return __CLASS__;
    }
}
