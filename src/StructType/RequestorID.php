<?php

namespace ammonkc\otaehi\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for RequestorID StructType
 * @subpackage Structs
 */
class RequestorID extends AbstractStructBase
{
    /**
     * The MessagePassword
     * @var UNKNOWN
     */
    public $MessagePassword;
    /**
     * Constructor method for RequestorID
     * @uses RequestorID::setMessagePassword()
     * @param UNKNOWN $messagePassword
     */
    public function __construct(UNKNOWN $messagePassword = null)
    {
        $this
            ->setMessagePassword($messagePassword);
    }
    /**
     * Get MessagePassword value
     * @return UNKNOWN|null
     */
    public function getMessagePassword()
    {
        return $this->MessagePassword;
    }
    /**
     * Set MessagePassword value
     * @param UNKNOWN $messagePassword
     * @return \ammonkc\otaehi\StructType\RequestorID
     */
    public function setMessagePassword(UNKNOWN $messagePassword = null)
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
     * @return \ammonkc\otaehi\StructType\RequestorID
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
