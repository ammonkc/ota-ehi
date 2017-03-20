<?php

namespace Ammonkc\Otaehi\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for WarningType StructType
 * @subpackage Structs
 */
class WarningType extends AbstractStructBase
{
    /**
     * The Type
     * @var
     */
    public $Type;
    /**
     * The RPH
     * @var
     */
    public $RPH;
    /**
     * Constructor method for WarningType
     * @uses WarningType::setType()
     * @uses WarningType::setRPH()
     * @param  $type
     * @param  $rPH
     */
    public function __construct( $type = null,  $rPH = null)
    {
        $this
            ->setType($type)
            ->setRPH($rPH);
    }
    /**
     * Get Type value
     * @return |null
     */
    public function getType()
    {
        return $this->Type;
    }
    /**
     * Set Type value
     * @param  $type
     * @return \Ammonkc\Otaehi\StructType\WarningType
     */
    public function setType( $type = null)
    {
        $this->Type = $type;
        return $this;
    }
    /**
     * Get RPH value
     * @return |null
     */
    public function getRPH()
    {
        return $this->RPH;
    }
    /**
     * Set RPH value
     * @param  $rPH
     * @return \Ammonkc\Otaehi\StructType\WarningType
     */
    public function setRPH( $rPH = null)
    {
        $this->RPH = $rPH;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Ammonkc\Otaehi\StructType\WarningType
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
