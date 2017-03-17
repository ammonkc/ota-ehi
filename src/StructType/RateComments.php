<?php

namespace ammonkc\otaehi\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for RateComments StructType
 * @subpackage Structs
 */
class RateComments extends AbstractStructBase
{
    /**
     * The RateComment
     * @var \ammonkc\otaehi\StructType\RateComment
     */
    public $RateComment;
    /**
     * Constructor method for RateComments
     * @uses RateComments::setRateComment()
     * @param \ammonkc\otaehi\StructType\RateComment $rateComment
     */
    public function __construct(\ammonkc\otaehi\StructType\RateComment $rateComment = null)
    {
        $this
            ->setRateComment($rateComment);
    }
    /**
     * Get RateComment value
     * @return \ammonkc\otaehi\StructType\RateComment|null
     */
    public function getRateComment()
    {
        return $this->RateComment;
    }
    /**
     * Set RateComment value
     * @param \ammonkc\otaehi\StructType\RateComment $rateComment
     * @return \ammonkc\otaehi\StructType\RateComments
     */
    public function setRateComment(\ammonkc\otaehi\StructType\RateComment $rateComment = null)
    {
        $this->RateComment = $rateComment;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \ammonkc\otaehi\StructType\RateComments
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
