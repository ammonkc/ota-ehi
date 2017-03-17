<?php

namespace Ammonkc\Otaehi\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for InfoCode StructType
 * @subpackage Structs
 */
class InfoCode extends AbstractStructBase
{
    /**
     * The Name
     * @var string
     */
    public $Name;
    /**
     * The Code
     * @var UNKNOWN
     */
    public $Code;
    /**
     * Constructor method for InfoCode
     * @uses InfoCode::setName()
     * @uses InfoCode::setCode()
     * @param string $name
     * @param UNKNOWN $code
     */
    public function __construct($name = null, UNKNOWN $code = null)
    {
        $this
            ->setName($name)
            ->setCode($code);
    }
    /**
     * Get Name value
     * @return string|null
     */
    public function getName()
    {
        return $this->Name;
    }
    /**
     * Set Name value
     * @param string $name
     * @return \Ammonkc\Otaehi\StructType\InfoCode
     */
    public function setName($name = null)
    {
        // validation for constraint: string
        if (!is_null($name) && !is_string($name)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($name)), __LINE__);
        }
        $this->Name = $name;
        return $this;
    }
    /**
     * Get Code value
     * @return UNKNOWN|null
     */
    public function getCode()
    {
        return $this->Code;
    }
    /**
     * Set Code value
     * @param UNKNOWN $code
     * @return \Ammonkc\Otaehi\StructType\InfoCode
     */
    public function setCode(UNKNOWN $code = null)
    {
        $this->Code = $code;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Ammonkc\Otaehi\StructType\InfoCode
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
