<?php

namespace Ammonkc\Otaehi\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for OntologyCurrencyType StructType
 * @subpackage Structs
 */
class OntologyCurrencyType extends AbstractStructBase
{
    /**
     * The CurrencyCode
     * @var string
     */
    public $CurrencyCode;
    /**
     * The CurrencyDecimal
     * @var string
     */
    public $CurrencyDecimal;
    /**
     * The Amount
     * @var int
     */
    public $Amount;
    /**
     * The Context
     * @var string
     */
    public $Context;
    /**
     * The OntologyRefID
     * @var string
     */
    public $OntologyRefID;
    /**
     * Constructor method for OntologyCurrencyType
     * @uses OntologyCurrencyType::setCurrencyCode()
     * @uses OntologyCurrencyType::setCurrencyDecimal()
     * @uses OntologyCurrencyType::setAmount()
     * @uses OntologyCurrencyType::setContext()
     * @uses OntologyCurrencyType::setOntologyRefID()
     * @param string $currencyCode
     * @param string $currencyDecimal
     * @param int $amount
     * @param string $context
     * @param string $ontologyRefID
     */
    public function __construct($currencyCode = null, $currencyDecimal = null, $amount = null, $context = null, $ontologyRefID = null)
    {
        $this
            ->setCurrencyCode($currencyCode)
            ->setCurrencyDecimal($currencyDecimal)
            ->setAmount($amount)
            ->setContext($context)
            ->setOntologyRefID($ontologyRefID);
    }
    /**
     * Get CurrencyCode value
     * @return string|null
     */
    public function getCurrencyCode()
    {
        return $this->CurrencyCode;
    }
    /**
     * Set CurrencyCode value
     * @param string $currencyCode
     * @return \Ammonkc\Otaehi\StructType\OntologyCurrencyType
     */
    public function setCurrencyCode($currencyCode = null)
    {
        // validation for constraint: string
        if (!is_null($currencyCode) && !is_string($currencyCode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($currencyCode)), __LINE__);
        }
        $this->CurrencyCode = $currencyCode;
        return $this;
    }
    /**
     * Get CurrencyDecimal value
     * @return string|null
     */
    public function getCurrencyDecimal()
    {
        return $this->CurrencyDecimal;
    }
    /**
     * Set CurrencyDecimal value
     * @param string $currencyDecimal
     * @return \Ammonkc\Otaehi\StructType\OntologyCurrencyType
     */
    public function setCurrencyDecimal($currencyDecimal = null)
    {
        // validation for constraint: string
        if (!is_null($currencyDecimal) && !is_string($currencyDecimal)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($currencyDecimal)), __LINE__);
        }
        $this->CurrencyDecimal = $currencyDecimal;
        return $this;
    }
    /**
     * Get Amount value
     * @return int|null
     */
    public function getAmount()
    {
        return $this->Amount;
    }
    /**
     * Set Amount value
     * @param int $amount
     * @return \Ammonkc\Otaehi\StructType\OntologyCurrencyType
     */
    public function setAmount($amount = null)
    {
        // validation for constraint: int
        if (!is_null($amount) && !is_numeric($amount)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($amount)), __LINE__);
        }
        $this->Amount = $amount;
        return $this;
    }
    /**
     * Get Context value
     * @return string|null
     */
    public function getContext()
    {
        return $this->Context;
    }
    /**
     * Set Context value
     * @param string $context
     * @return \Ammonkc\Otaehi\StructType\OntologyCurrencyType
     */
    public function setContext($context = null)
    {
        // validation for constraint: string
        if (!is_null($context) && !is_string($context)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($context)), __LINE__);
        }
        $this->Context = $context;
        return $this;
    }
    /**
     * Get OntologyRefID value
     * @return string|null
     */
    public function getOntologyRefID()
    {
        return $this->OntologyRefID;
    }
    /**
     * Set OntologyRefID value
     * @param string $ontologyRefID
     * @return \Ammonkc\Otaehi\StructType\OntologyCurrencyType
     */
    public function setOntologyRefID($ontologyRefID = null)
    {
        // validation for constraint: string
        if (!is_null($ontologyRefID) && !is_string($ontologyRefID)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($ontologyRefID)), __LINE__);
        }
        $this->OntologyRefID = $ontologyRefID;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Ammonkc\Otaehi\StructType\OntologyCurrencyType
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
