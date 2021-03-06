<?php

namespace Ammonkc\Otaehi\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Additional StructType
 * @subpackage Structs
 */
class Additional extends AbstractStructBase
{
    /**
     * The CorpDiscountName
     * @var
     */
    public $CorpDiscountName;
    /**
     * The CorpDiscountNmbr
     * @var
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
     * @param  $corpDiscountName
     * @param  $corpDiscountNmbr
     * @param string $qualificationMethod
     */
    public function __construct( $corpDiscountName = null,  $corpDiscountNmbr = null, $qualificationMethod = null)
    {
        $this
            ->setCorpDiscountName($corpDiscountName)
            ->setCorpDiscountNmbr($corpDiscountNmbr)
            ->setQualificationMethod($qualificationMethod);
    }
    /**
     * Get CorpDiscountName value
     * @return |null
     */
    public function getCorpDiscountName()
    {
        return $this->CorpDiscountName;
    }
    /**
     * Set CorpDiscountName value
     * @param  $corpDiscountName
     * @return \Ammonkc\Otaehi\StructType\Additional
     */
    public function setCorpDiscountName( $corpDiscountName = null)
    {
        $this->CorpDiscountName = $corpDiscountName;
        return $this;
    }
    /**
     * Get CorpDiscountNmbr value
     * @return |null
     */
    public function getCorpDiscountNmbr()
    {
        return $this->CorpDiscountNmbr;
    }
    /**
     * Set CorpDiscountNmbr value
     * @param  $corpDiscountNmbr
     * @return \Ammonkc\Otaehi\StructType\Additional
     */
    public function setCorpDiscountNmbr( $corpDiscountNmbr = null)
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
     * @return \Ammonkc\Otaehi\StructType\Additional
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
     * @return \Ammonkc\Otaehi\StructType\Additional
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
