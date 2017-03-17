<?php

namespace Ammonkc\Otaehi\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Cash StructType
 * @subpackage Structs
 */
class Cash extends AbstractStructBase
{
    /**
     * The CashIndicator
     * @var bool
     */
    public $CashIndicator;
    /**
     * The Info
     * @var \Ammonkc\Otaehi\StructType\FormattedTextType
     */
    public $Info;
    /**
     * Constructor method for Cash
     * @uses Cash::setCashIndicator()
     * @uses Cash::setInfo()
     * @param bool $cashIndicator
     * @param \Ammonkc\Otaehi\StructType\FormattedTextType $info
     */
    public function __construct($cashIndicator = null, \Ammonkc\Otaehi\StructType\FormattedTextType $info = null)
    {
        $this
            ->setCashIndicator($cashIndicator)
            ->setInfo($info);
    }
    /**
     * Get CashIndicator value
     * @return bool|null
     */
    public function getCashIndicator()
    {
        return $this->CashIndicator;
    }
    /**
     * Set CashIndicator value
     * @param bool $cashIndicator
     * @return \Ammonkc\Otaehi\StructType\Cash
     */
    public function setCashIndicator($cashIndicator = null)
    {
        $this->CashIndicator = $cashIndicator;
        return $this;
    }
    /**
     * Get Info value
     * @return \Ammonkc\Otaehi\StructType\FormattedTextType|null
     */
    public function getInfo()
    {
        return $this->Info;
    }
    /**
     * Set Info value
     * @param \Ammonkc\Otaehi\StructType\FormattedTextType $info
     * @return \Ammonkc\Otaehi\StructType\Cash
     */
    public function setInfo(\Ammonkc\Otaehi\StructType\FormattedTextType $info = null)
    {
        $this->Info = $info;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Ammonkc\Otaehi\StructType\Cash
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
