<?php

namespace Ammonkc\Otaehi\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for FeeType StructType
 * @subpackage Structs
 */
class FeeType extends AbstractStructBase
{
    /**
     * The Taxes
     * @var mixed
     */
    public $Taxes;
    /**
     * The Description
     * @var mixed
     */
    public $Description;
    /**
     * The TPA_Extensions
     * @var mixed
     */
    public $TPA_Extensions;
    /**
     * The TaxInclusiveInd
     * @var bool
     */
    public $TaxInclusiveInd;
    /**
     * The MandatoryInd
     * @var bool
     */
    public $MandatoryInd;
    /**
     * The RPH
     * @var UNKNOWN
     */
    public $RPH;
    /**
     * The TaxableIndicator
     * @var bool
     */
    public $TaxableIndicator;
    /**
     * The MinAge
     * @var UNKNOWN
     */
    public $MinAge;
    /**
     * The MaxAge
     * @var UNKNOWN
     */
    public $MaxAge;
    /**
     * Constructor method for FeeType
     * @uses FeeType::setTaxes()
     * @uses FeeType::setDescription()
     * @uses FeeType::setTPA_Extensions()
     * @uses FeeType::setTaxInclusiveInd()
     * @uses FeeType::setMandatoryInd()
     * @uses FeeType::setRPH()
     * @uses FeeType::setTaxableIndicator()
     * @uses FeeType::setMinAge()
     * @uses FeeType::setMaxAge()
     * @param mixed $taxes
     * @param mixed $description
     * @param mixed $tPA_Extensions
     * @param bool $taxInclusiveInd
     * @param bool $mandatoryInd
     * @param UNKNOWN $rPH
     * @param bool $taxableIndicator
     * @param UNKNOWN $minAge
     * @param UNKNOWN $maxAge
     */
    public function __construct($taxes = null, $description = null, $tPA_Extensions = null, $taxInclusiveInd = null, $mandatoryInd = null, UNKNOWN $rPH = null, $taxableIndicator = null, UNKNOWN $minAge = null, UNKNOWN $maxAge = null)
    {
        $this
            ->setTaxes($taxes)
            ->setDescription($description)
            ->setTPA_Extensions($tPA_Extensions)
            ->setTaxInclusiveInd($taxInclusiveInd)
            ->setMandatoryInd($mandatoryInd)
            ->setRPH($rPH)
            ->setTaxableIndicator($taxableIndicator)
            ->setMinAge($minAge)
            ->setMaxAge($maxAge);
    }
    /**
     * Get Taxes value
     * @return mixed|null
     */
    public function getTaxes()
    {
        return $this->Taxes;
    }
    /**
     * Set Taxes value
     * @param mixed $taxes
     * @return \Ammonkc\Otaehi\StructType\FeeType
     */
    public function setTaxes($taxes = null)
    {
        $this->Taxes = $taxes;
        return $this;
    }
    /**
     * Get Description value
     * @return mixed|null
     */
    public function getDescription()
    {
        return $this->Description;
    }
    /**
     * Set Description value
     * @param mixed $description
     * @return \Ammonkc\Otaehi\StructType\FeeType
     */
    public function setDescription($description = null)
    {
        $this->Description = $description;
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
     * @return \Ammonkc\Otaehi\StructType\FeeType
     */
    public function setTPA_Extensions($tPA_Extensions = null)
    {
        $this->TPA_Extensions = $tPA_Extensions;
        return $this;
    }
    /**
     * Get TaxInclusiveInd value
     * @return bool|null
     */
    public function getTaxInclusiveInd()
    {
        return $this->TaxInclusiveInd;
    }
    /**
     * Set TaxInclusiveInd value
     * @param bool $taxInclusiveInd
     * @return \Ammonkc\Otaehi\StructType\FeeType
     */
    public function setTaxInclusiveInd($taxInclusiveInd = null)
    {
        $this->TaxInclusiveInd = $taxInclusiveInd;
        return $this;
    }
    /**
     * Get MandatoryInd value
     * @return bool|null
     */
    public function getMandatoryInd()
    {
        return $this->MandatoryInd;
    }
    /**
     * Set MandatoryInd value
     * @param bool $mandatoryInd
     * @return \Ammonkc\Otaehi\StructType\FeeType
     */
    public function setMandatoryInd($mandatoryInd = null)
    {
        $this->MandatoryInd = $mandatoryInd;
        return $this;
    }
    /**
     * Get RPH value
     * @return UNKNOWN|null
     */
    public function getRPH()
    {
        return $this->RPH;
    }
    /**
     * Set RPH value
     * @param UNKNOWN $rPH
     * @return \Ammonkc\Otaehi\StructType\FeeType
     */
    public function setRPH(UNKNOWN $rPH = null)
    {
        $this->RPH = $rPH;
        return $this;
    }
    /**
     * Get TaxableIndicator value
     * @return bool|null
     */
    public function getTaxableIndicator()
    {
        return $this->TaxableIndicator;
    }
    /**
     * Set TaxableIndicator value
     * @param bool $taxableIndicator
     * @return \Ammonkc\Otaehi\StructType\FeeType
     */
    public function setTaxableIndicator($taxableIndicator = null)
    {
        $this->TaxableIndicator = $taxableIndicator;
        return $this;
    }
    /**
     * Get MinAge value
     * @return UNKNOWN|null
     */
    public function getMinAge()
    {
        return $this->MinAge;
    }
    /**
     * Set MinAge value
     * @param UNKNOWN $minAge
     * @return \Ammonkc\Otaehi\StructType\FeeType
     */
    public function setMinAge(UNKNOWN $minAge = null)
    {
        $this->MinAge = $minAge;
        return $this;
    }
    /**
     * Get MaxAge value
     * @return UNKNOWN|null
     */
    public function getMaxAge()
    {
        return $this->MaxAge;
    }
    /**
     * Set MaxAge value
     * @param UNKNOWN $maxAge
     * @return \Ammonkc\Otaehi\StructType\FeeType
     */
    public function setMaxAge(UNKNOWN $maxAge = null)
    {
        $this->MaxAge = $maxAge;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Ammonkc\Otaehi\StructType\FeeType
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
