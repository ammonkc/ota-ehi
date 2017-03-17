<?php

namespace Ammonkc\Otaehi\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for AdditionalPersonNames StructType
 * @subpackage Structs
 */
class AdditionalPersonNames extends AbstractStructBase
{
    /**
     * The AdditionalPersonName
     * @var mixed
     */
    public $AdditionalPersonName;
    /**
     * Constructor method for AdditionalPersonNames
     * @uses AdditionalPersonNames::setAdditionalPersonName()
     * @param mixed $additionalPersonName
     */
    public function __construct($additionalPersonName = null)
    {
        $this
            ->setAdditionalPersonName($additionalPersonName);
    }
    /**
     * Get AdditionalPersonName value
     * @return mixed|null
     */
    public function getAdditionalPersonName()
    {
        return $this->AdditionalPersonName;
    }
    /**
     * Set AdditionalPersonName value
     * @param mixed $additionalPersonName
     * @return \Ammonkc\Otaehi\StructType\AdditionalPersonNames
     */
    public function setAdditionalPersonName($additionalPersonName = null)
    {
        $this->AdditionalPersonName = $additionalPersonName;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Ammonkc\Otaehi\StructType\AdditionalPersonNames
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
