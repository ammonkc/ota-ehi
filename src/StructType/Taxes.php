<?php

namespace ammonkc\otaehi\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Taxes StructType
 * @subpackage Structs
 */
class Taxes extends AbstractStructBase
{
    /**
     * The Amount
     * @var \ammonkc\otaehi\StructType\Amount
     */
    public $Amount;
    /**
     * The Type
     * @var mixed
     */
    public $Type;
    /**
     * The Description
     * @var string
     */
    public $Description;
    /**
     * The Qualifiers
     * @var \ammonkc\otaehi\StructType\Qualifiers
     */
    public $Qualifiers;
    /**
     * The MandatoryInd
     * @var bool
     */
    public $MandatoryInd;
    /**
     * The TaxRPH
     * @var string
     */
    public $TaxRPH;
    /**
     * The Tax
     * @var \ammonkc\otaehi\StructType\Tax
     */
    public $Tax;
    /**
     * The Info
     * @var mixed
     */
    public $Info;
    /**
     * Constructor method for Taxes
     * @uses Taxes::setAmount()
     * @uses Taxes::setType()
     * @uses Taxes::setDescription()
     * @uses Taxes::setQualifiers()
     * @uses Taxes::setMandatoryInd()
     * @uses Taxes::setTaxRPH()
     * @uses Taxes::setTax()
     * @uses Taxes::setInfo()
     * @param \ammonkc\otaehi\StructType\Amount $amount
     * @param mixed $type
     * @param string $description
     * @param \ammonkc\otaehi\StructType\Qualifiers $qualifiers
     * @param bool $mandatoryInd
     * @param string $taxRPH
     * @param \ammonkc\otaehi\StructType\Tax $tax
     * @param mixed $info
     */
    public function __construct(\ammonkc\otaehi\StructType\Amount $amount = null, $type = null, $description = null, \ammonkc\otaehi\StructType\Qualifiers $qualifiers = null, $mandatoryInd = null, $taxRPH = null, \ammonkc\otaehi\StructType\Tax $tax = null, $info = null)
    {
        $this
            ->setAmount($amount)
            ->setType($type)
            ->setDescription($description)
            ->setQualifiers($qualifiers)
            ->setMandatoryInd($mandatoryInd)
            ->setTaxRPH($taxRPH)
            ->setTax($tax)
            ->setInfo($info);
    }
    /**
     * Get Amount value
     * @return \ammonkc\otaehi\StructType\Amount|null
     */
    public function getAmount()
    {
        return $this->Amount;
    }
    /**
     * Set Amount value
     * @param \ammonkc\otaehi\StructType\Amount $amount
     * @return \ammonkc\otaehi\StructType\Taxes
     */
    public function setAmount(\ammonkc\otaehi\StructType\Amount $amount = null)
    {
        $this->Amount = $amount;
        return $this;
    }
    /**
     * Get Type value
     * @return mixed|null
     */
    public function getType()
    {
        return $this->Type;
    }
    /**
     * Set Type value
     * @param mixed $type
     * @return \ammonkc\otaehi\StructType\Taxes
     */
    public function setType($type = null)
    {
        $this->Type = $type;
        return $this;
    }
    /**
     * Get Description value
     * @return string|null
     */
    public function getDescription()
    {
        return $this->Description;
    }
    /**
     * Set Description value
     * @param string $description
     * @return \ammonkc\otaehi\StructType\Taxes
     */
    public function setDescription($description = null)
    {
        // validation for constraint: string
        if (!is_null($description) && !is_string($description)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($description)), __LINE__);
        }
        $this->Description = $description;
        return $this;
    }
    /**
     * Get Qualifiers value
     * @return \ammonkc\otaehi\StructType\Qualifiers|null
     */
    public function getQualifiers()
    {
        return $this->Qualifiers;
    }
    /**
     * Set Qualifiers value
     * @param \ammonkc\otaehi\StructType\Qualifiers $qualifiers
     * @return \ammonkc\otaehi\StructType\Taxes
     */
    public function setQualifiers(\ammonkc\otaehi\StructType\Qualifiers $qualifiers = null)
    {
        $this->Qualifiers = $qualifiers;
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
     * @return \ammonkc\otaehi\StructType\Taxes
     */
    public function setMandatoryInd($mandatoryInd = null)
    {
        $this->MandatoryInd = $mandatoryInd;
        return $this;
    }
    /**
     * Get TaxRPH value
     * @return string|null
     */
    public function getTaxRPH()
    {
        return $this->TaxRPH;
    }
    /**
     * Set TaxRPH value
     * @param string $taxRPH
     * @return \ammonkc\otaehi\StructType\Taxes
     */
    public function setTaxRPH($taxRPH = null)
    {
        // validation for constraint: string
        if (!is_null($taxRPH) && !is_string($taxRPH)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($taxRPH)), __LINE__);
        }
        $this->TaxRPH = $taxRPH;
        return $this;
    }
    /**
     * Get Tax value
     * @return \ammonkc\otaehi\StructType\Tax|null
     */
    public function getTax()
    {
        return $this->Tax;
    }
    /**
     * Set Tax value
     * @param \ammonkc\otaehi\StructType\Tax $tax
     * @return \ammonkc\otaehi\StructType\Taxes
     */
    public function setTax(\ammonkc\otaehi\StructType\Tax $tax = null)
    {
        $this->Tax = $tax;
        return $this;
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
     * @return \ammonkc\otaehi\StructType\Taxes
     */
    public function setInfo($info = null)
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
     * @return \ammonkc\otaehi\StructType\Taxes
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
