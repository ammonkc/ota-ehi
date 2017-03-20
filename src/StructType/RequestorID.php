<?php

namespace Ammonkc\Otaehi\StructType;

use Ammonkc\Otaehi\StructType\UniqueID_Type;

/**
 * This class stands for RequestorID StructType
 * @subpackage Structs
 */
class RequestorID extends UniqueID_Type
{
    /**
     * The MessagePassword
     * @var
     */
    public $MessagePassword;
    /**
     * Constructor method for RequestorID
     * @uses RequestorID::setMessagePassword()
     * @param  $messagePassword
     */
    public function __construct( $messagePassword = null)
    {
        $this->setMessagePassword($messagePassword);
    }
    /**
     * Get MessagePassword value
     * @return |null
     */
    public function getMessagePassword()
    {
        return $this->MessagePassword;
    }
    /**
     * Set MessagePassword value
     * @param  $messagePassword
     * @return \Ammonkc\Otaehi\StructType\RequestorID
     */
    public function setMessagePassword( $messagePassword = null)
    {
        $this->MessagePassword = $messagePassword;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Ammonkc\Otaehi\StructType\RequestorID
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
