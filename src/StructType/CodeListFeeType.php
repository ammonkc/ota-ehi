<?php

namespace ammonkc\otaehi\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for CodeListFeeType StructType
 * @subpackage Structs
 */
class CodeListFeeType extends AbstractStructBase
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
     * The Taxes
     * @var \ammonkc\otaehi\StructType\Taxes
     */
    public $Taxes;
    /**
     * The MandatoryInd
     * @var bool
     */
    public $MandatoryInd;
    /**
     * The TaxInclusiveInd
     * @var bool
     */
    public $TaxInclusiveInd;
    /**
     * The TaxableInd
     * @var bool
     */
    public $TaxableInd;
    /**
     * The DeterminationMethod
     * @var string
     */
    public $DeterminationMethod;
    /**
     * The FeeRPH
     * @var string
     */
    public $FeeRPH;
    /**
     * Constructor method for CodeListFeeType
     * @uses CodeListFeeType::setAmount()
     * @uses CodeListFeeType::setType()
     * @uses CodeListFeeType::setDescription()
     * @uses CodeListFeeType::setQualifiers()
     * @uses CodeListFeeType::setTaxes()
     * @uses CodeListFeeType::setMandatoryInd()
     * @uses CodeListFeeType::setTaxInclusiveInd()
     * @uses CodeListFeeType::setTaxableInd()
     * @uses CodeListFeeType::setDeterminationMethod()
     * @uses CodeListFeeType::setFeeRPH()
     * @param \ammonkc\otaehi\StructType\Amount $amount
     * @param mixed $type
     * @param string $description
     * @param \ammonkc\otaehi\StructType\Qualifiers $qualifiers
     * @param \ammonkc\otaehi\StructType\Taxes $taxes
     * @param bool $mandatoryInd
     * @param bool $taxInclusiveInd
     * @param bool $taxableInd
     * @param string $determinationMethod
     * @param string $feeRPH
     */
    public function __construct(\ammonkc\otaehi\StructType\Amount $amount = null, $type = null, $description = null, \ammonkc\otaehi\StructType\Qualifiers $qualifiers = null, \ammonkc\otaehi\StructType\Taxes $taxes = null, $mandatoryInd = null, $taxInclusiveInd = null, $taxableInd = null, $determinationMethod = null, $feeRPH = null)
    {
        $this
            ->setAmount($amount)
            ->setType($type)
            ->setDescription($description)
            ->setQualifiers($qualifiers)
            ->setTaxes($taxes)
            ->setMandatoryInd($mandatoryInd)
            ->setTaxInclusiveInd($taxInclusiveInd)
            ->setTaxableInd($taxableInd)
            ->setDeterminationMethod($determinationMethod)
            ->setFeeRPH($feeRPH);
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
     * @return \ammonkc\otaehi\StructType\CodeListFeeType
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
     * @return \ammonkc\otaehi\StructType\CodeListFeeType
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
     * @return \ammonkc\otaehi\StructType\CodeListFeeType
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
     * @return \ammonkc\otaehi\StructType\CodeListFeeType
     */
    public function setQualifiers(\ammonkc\otaehi\StructType\Qualifiers $qualifiers = null)
    {
        $this->Qualifiers = $qualifiers;
        return $this;
    }
    /**
     * Get Taxes value
     * @return \ammonkc\otaehi\StructType\Taxes|null
     */
    public function getTaxes()
    {
        return $this->Taxes;
    }
    /**
     * Set Taxes value
     * @param \ammonkc\otaehi\StructType\Taxes $taxes
     * @return \ammonkc\otaehi\StructType\CodeListFeeType
     */
    public function setTaxes(\ammonkc\otaehi\StructType\Taxes $taxes = null)
    {
        $this->Taxes = $taxes;
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
     * @return \ammonkc\otaehi\StructType\CodeListFeeType
     */
    public function setMandatoryInd($mandatoryInd = null)
    {
        $this->MandatoryInd = $mandatoryInd;
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
     * @return \ammonkc\otaehi\StructType\CodeListFeeType
     */
    public function setTaxInclusiveInd($taxInclusiveInd = null)
    {
        $this->TaxInclusiveInd = $taxInclusiveInd;
        return $this;
    }
    /**
     * Get TaxableInd value
     * @return bool|null
     */
    public function getTaxableInd()
    {
        return $this->TaxableInd;
    }
    /**
     * Set TaxableInd value
     * @param bool $taxableInd
     * @return \ammonkc\otaehi\StructType\CodeListFeeType
     */
    public function setTaxableInd($taxableInd = null)
    {
        $this->TaxableInd = $taxableInd;
        return $this;
    }
    /**
     * Get DeterminationMethod value
     * @return string|null
     */
    public function getDeterminationMethod()
    {
        return $this->DeterminationMethod;
    }
    /**
     * Set DeterminationMethod value
     * @param string $determinationMethod
     * @return \ammonkc\otaehi\StructType\CodeListFeeType
     */
    public function setDeterminationMethod($determinationMethod = null)
    {
        // validation for constraint: string
        if (!is_null($determinationMethod) && !is_string($determinationMethod)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($determinationMethod)), __LINE__);
        }
        $this->DeterminationMethod = $determinationMethod;
        return $this;
    }
    /**
     * Get FeeRPH value
     * @return string|null
     */
    public function getFeeRPH()
    {
        return $this->FeeRPH;
    }
    /**
     * Set FeeRPH value
     * @param string $feeRPH
     * @return \ammonkc\otaehi\StructType\CodeListFeeType
     */
    public function setFeeRPH($feeRPH = null)
    {
        // validation for constraint: string
        if (!is_null($feeRPH) && !is_string($feeRPH)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($feeRPH)), __LINE__);
        }
        $this->FeeRPH = $feeRPH;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \ammonkc\otaehi\StructType\CodeListFeeType
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
