<?php

namespace Ammonkc\Otaehi\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for POS_Type StructType
 * @subpackage Structs
 */
class POS_Type extends AbstractStructBase
{
    /**
     * The Source
     * @var mixed
     */
    public $Source;
    /**
     * Constructor method for POS_Type
     * @uses POS_Type::setSource()
     * @param mixed $source
     */
    public function __construct($source = null)
    {
        $this
            ->setSource($source);
    }
    /**
     * Get Source value
     * @return mixed|null
     */
    public function getSource()
    {
        return $this->Source;
    }
    /**
     * Set Source value
     * @param mixed $source
     * @return \Ammonkc\Otaehi\StructType\POS_Type
     */
    public function setSource($source = null)
    {
        $this->Source = $source;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Ammonkc\Otaehi\StructType\POS_Type
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
