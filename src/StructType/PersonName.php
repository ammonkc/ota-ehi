<?php

namespace Ammonkc\Otaehi\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for PersonName StructType
 * @subpackage Structs
 */
class PersonName extends AbstractStructBase
{
    /**
     * The PartialName
     * @var bool
     */
    public $PartialName;
    /**
     * Constructor method for PersonName
     * @uses PersonName::setPartialName()
     * @param bool $partialName
     */
    public function __construct($partialName = null)
    {
        $this
            ->setPartialName($partialName);
    }
    /**
     * Get PartialName value
     * @return bool|null
     */
    public function getPartialName()
    {
        return $this->PartialName;
    }
    /**
     * Set PartialName value
     * @param bool $partialName
     * @return \Ammonkc\Otaehi\StructType\PersonName
     */
    public function setPartialName($partialName = null)
    {
        $this->PartialName = $partialName;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Ammonkc\Otaehi\StructType\PersonName
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
