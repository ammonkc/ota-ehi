<?php

namespace Ammonkc\Otaehi\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SecurityInfo StructType
 * @subpackage Structs
 */
class SecurityInfo extends AbstractStructBase
{
    /**
     * The PasswordHint
     * @var \Ammonkc\Otaehi\StructType\PasswordHint
     */
    public $PasswordHint;
    /**
     * The Username
     * @var
     */
    public $Username;
    /**
     * The Password
     * @var
     */
    public $Password;
    /**
     * Constructor method for SecurityInfo
     * @uses SecurityInfo::setPasswordHint()
     * @uses SecurityInfo::setUsername()
     * @uses SecurityInfo::setPassword()
     * @param \Ammonkc\Otaehi\StructType\PasswordHint $passwordHint
     * @param  $username
     * @param  $password
     */
    public function __construct(\Ammonkc\Otaehi\StructType\PasswordHint $passwordHint = null,  $username = null,  $password = null)
    {
        $this
            ->setPasswordHint($passwordHint)
            ->setUsername($username)
            ->setPassword($password);
    }
    /**
     * Get PasswordHint value
     * @return \Ammonkc\Otaehi\StructType\PasswordHint|null
     */
    public function getPasswordHint()
    {
        return $this->PasswordHint;
    }
    /**
     * Set PasswordHint value
     * @param \Ammonkc\Otaehi\StructType\PasswordHint $passwordHint
     * @return \Ammonkc\Otaehi\StructType\SecurityInfo
     */
    public function setPasswordHint(\Ammonkc\Otaehi\StructType\PasswordHint $passwordHint = null)
    {
        $this->PasswordHint = $passwordHint;
        return $this;
    }
    /**
     * Get Username value
     * @return |null
     */
    public function getUsername()
    {
        return $this->Username;
    }
    /**
     * Set Username value
     * @param  $username
     * @return \Ammonkc\Otaehi\StructType\SecurityInfo
     */
    public function setUsername( $username = null)
    {
        $this->Username = $username;
        return $this;
    }
    /**
     * Get Password value
     * @return |null
     */
    public function getPassword()
    {
        return $this->Password;
    }
    /**
     * Set Password value
     * @param  $password
     * @return \Ammonkc\Otaehi\StructType\SecurityInfo
     */
    public function setPassword( $password = null)
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
     * @return \Ammonkc\Otaehi\StructType\SecurityInfo
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
