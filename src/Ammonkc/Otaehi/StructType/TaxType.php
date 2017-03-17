<?php

namespace Ammonkc\Otaehi\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for TaxType StructType
 * @subpackage Structs
 */
class TaxType extends AbstractStructBase
{
    /**
     * The TaxDescription
     * @var mixed
     */
    public $TaxDescription;
    /**
     * The TPA_Extensions
     * @var mixed
     */
    public $TPA_Extensions;
    /**
     * Constructor method for TaxType
     * @uses TaxType::setTaxDescription()
     * @uses TaxType::setTPA_Extensions()
     * @param mixed $taxDescription
     * @param mixed $tPA_Extensions
     */
    public function __construct($taxDescription = null, $tPA_Extensions = null)
    {
        $this
            ->setTaxDescription($taxDescription)
            ->setTPA_Extensions($tPA_Extensions);
    }
    /**
     * Get TaxDescription value
     * @return mixed|null
     */
    public function getTaxDescription()
    {
        return $this->TaxDescription;
    }
    /**
     * Set TaxDescription value
     * @param mixed $taxDescription
     * @return \Ammonkc\Otaehi\StructType\TaxType
     */
    public function setTaxDescription($taxDescription = null)
    {
        $this->TaxDescription = $taxDescription;
        return $this;
    }
    /**
     * Get TPA_Extensions value
     * @return mixed|null
     */
    public function getTPA_Extensions()
    {
        return $this->TPA_Extensions;
    }
    /**
     * Set TPA_Extensions value
     * @param mixed $tPA_Extensions
     * @return \Ammonkc\Otaehi\StructType\TaxType
     */
    public function setTPA_Extensions($tPA_Extensions = null)
    {
        $this->TPA_Extensions = $tPA_Extensions;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Ammonkc\Otaehi\StructType\TaxType
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
