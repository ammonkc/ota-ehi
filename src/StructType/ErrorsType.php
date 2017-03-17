<?php

namespace ammonkc\otaehi\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ErrorsType StructType
 * @subpackage Structs
 */
class ErrorsType extends AbstractStructBase
{
    /**
     * The Error
     * @var mixed
     */
    public $Error;
    /**
     * Constructor method for ErrorsType
     * @uses ErrorsType::setError()
     * @param mixed $error
     */
    public function __construct($error = null)
    {
        $this
            ->setError($error);
    }
    /**
     * Get Error value
     * @return mixed|null
     */
    public function getError()
    {
        return $this->Error;
    }
    /**
     * Set Error value
     * @param mixed $error
     * @return \ammonkc\otaehi\StructType\ErrorsType
     */
    public function setError($error = null)
    {
        $this->Error = $error;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \ammonkc\otaehi\StructType\ErrorsType
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
