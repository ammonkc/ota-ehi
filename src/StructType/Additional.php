<?php

namespace ammonkc\otaehi\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Additional StructType
 * @subpackage Structs
 */
class Additional extends AbstractStructBase
{
    /**
     * The CorpDiscountName
     * @var UNKNOWN
     */
    public $CorpDiscountName;
    /**
     * The CorpDiscountNmbr
     * @var UNKNOWN
     */
    public $CorpDiscountNmbr;
    /**
     * The QualificationMethod
     * @var string
     */
    public $QualificationMethod;
    /**
     * Constructor method for Additional
     * @uses Additional::setCorpDiscountName()
     * @uses Additional::setCorpDiscountNmbr()
     * @uses Additional::setQualificationMethod()
     * @param UNKNOWN $corpDiscountName
     * @param UNKNOWN $corpDiscountNmbr
     * @param string $qualificationMethod
     */
    public function __construct(UNKNOWN $corpDiscountName = null, UNKNOWN $corpDiscountNmbr = null, $qualificationMethod = null)
    {
        $this
            ->setCorpDiscountName($corpDiscountName)
            ->setCorpDiscountNmbr($corpDiscountNmbr)
            ->setQualificationMethod($qualificationMethod);
    }
    /**
     * Get CorpDiscountName value
     * @return UNKNOWN|null
     */
    public function getCorpDiscountName()
    {
        return $this->CorpDiscountName;
    }
    /**
     * Set CorpDiscountName value
     * @param UNKNOWN $corpDiscountName
     * @return \ammonkc\otaehi\StructType\Additional
     */
    public function setCorpDiscountName(UNKNOWN $corpDiscountName = null)
    {
        $this->CorpDiscountName = $corpDiscountName;
        return $this;
    }
    /**
     * Get CorpDiscountNmbr value
     * @return UNKNOWN|null
     */
    public function getCorpDiscountNmbr()
    {
        return $this->CorpDiscountNmbr;
    }
    /**
     * Set CorpDiscountNmbr value
     * @param UNKNOWN $corpDiscountNmbr
     * @return \ammonkc\otaehi\StructType\Additional
     */
    public function setCorpDiscountNmbr(UNKNOWN $corpDiscountNmbr = null)
    {
        $this->CorpDiscountNmbr = $corpDiscountNmbr;
        return $this;
    }
    /**
     * Get QualificationMethod value
     * @return string|null
     */
    public function getQualificationMethod()
    {
        return $this->QualificationMethod;
    }
    /**
     * Set QualificationMethod value
     * @param string $qualificationMethod
     * @return \ammonkc\otaehi\StructType\Additional
     */
    public function setQualificationMethod($qualificationMethod = null)
    {
        // validation for constraint: string
        if (!is_null($qualificationMethod) && !is_string($qualificationMethod)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($qualificationMethod)), __LINE__);
        }
        $this->QualificationMethod = $qualificationMethod;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \ammonkc\otaehi\StructType\Additional
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
