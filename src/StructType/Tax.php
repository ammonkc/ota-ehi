<?php

namespace Ammonkc\Otaehi\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Tax StructType
 * @subpackage Structs
 */
class Tax extends AbstractStructBase
{
    /**
     * The Info
     * @var mixed
     */
    public $Info;
    /**
     * The TaxCode
     * @var UNKNOWN
     */
    public $TaxCode;
    /**
     * The Percentage
     * @var UNKNOWN
     */
    public $Percentage;
    /**
     * Constructor method for Tax
     * @uses Tax::setInfo()
     * @uses Tax::setTaxCode()
     * @uses Tax::setPercentage()
     * @param mixed $info
     * @param UNKNOWN $taxCode
     * @param UNKNOWN $percentage
     */
    public function __construct($info = null, UNKNOWN $taxCode = null, UNKNOWN $percentage = null)
    {
        $this
            ->setInfo($info)
            ->setTaxCode($taxCode)
            ->setPercentage($percentage);
    }
    /**
     * Get Info value
     * @return mixed|null
     */
    public function getInfo()
    {
        return $this->Info;
    }
    /**
     * Set Info value
     * @param mixed $info
     * @return \Ammonkc\Otaehi\StructType\Tax
     */
    public function setInfo($info = null)
    {
        $this->Info = $info;
        return $this;
    }
    /**
     * Get TaxCode value
     * @return UNKNOWN|null
     */
    public function getTaxCode()
    {
        return $this->TaxCode;
    }
    /**
     * Set TaxCode value
     * @param UNKNOWN $taxCode
     * @return \Ammonkc\Otaehi\StructType\Tax
     */
    public function setTaxCode(UNKNOWN $taxCode = null)
    {
        $this->TaxCode = $taxCode;
        return $this;
    }
    /**
     * Get Percentage value
     * @return UNKNOWN|null
     */
    public function getPercentage()
    {
        return $this->Percentage;
    }
    /**
     * Set Percentage value
     * @param UNKNOWN $percentage
     * @return \Ammonkc\Otaehi\StructType\Tax
     */
    public function setPercentage(UNKNOWN $percentage = null)
    {
        $this->Percentage = $percentage;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Ammonkc\Otaehi\StructType\Tax
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
