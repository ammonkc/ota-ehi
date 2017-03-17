<?php

namespace Ammonkc\Otaehi\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for RateComments StructType
 * @subpackage Structs
 */
class RateComments extends AbstractStructBase
{
    /**
     * The RateComment
     * @var \Ammonkc\Otaehi\StructType\RateComment
     */
    public $RateComment;
    /**
     * Constructor method for RateComments
     * @uses RateComments::setRateComment()
     * @param \Ammonkc\Otaehi\StructType\RateComment $rateComment
     */
    public function __construct(\Ammonkc\Otaehi\StructType\RateComment $rateComment = null)
    {
        $this
            ->setRateComment($rateComment);
    }
    /**
     * Get RateComment value
     * @return \Ammonkc\Otaehi\StructType\RateComment|null
     */
    public function getRateComment()
    {
        return $this->RateComment;
    }
    /**
     * Set RateComment value
     * @param \Ammonkc\Otaehi\StructType\RateComment $rateComment
     * @return \Ammonkc\Otaehi\StructType\RateComments
     */
    public function setRateComment(\Ammonkc\Otaehi\StructType\RateComment $rateComment = null)
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
     * @return \Ammonkc\Otaehi\StructType\RateComments
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
