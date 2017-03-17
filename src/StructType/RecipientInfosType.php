<?php

namespace ammonkc\otaehi\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for RecipientInfosType StructType
 * @subpackage Structs
 */
class RecipientInfosType extends AbstractStructBase
{
    /**
     * The RecipientInfo
     * @var \ammonkc\otaehi\StructType\RecipientInfo
     */
    public $RecipientInfo;
    /**
     * Constructor method for RecipientInfosType
     * @uses RecipientInfosType::setRecipientInfo()
     * @param \ammonkc\otaehi\StructType\RecipientInfo $recipientInfo
     */
    public function __construct(\ammonkc\otaehi\StructType\RecipientInfo $recipientInfo = null)
    {
        $this
            ->setRecipientInfo($recipientInfo);
    }
    /**
     * Get RecipientInfo value
     * @return \ammonkc\otaehi\StructType\RecipientInfo|null
     */
    public function getRecipientInfo()
    {
        return $this->RecipientInfo;
    }
    /**
     * Set RecipientInfo value
     * @param \ammonkc\otaehi\StructType\RecipientInfo $recipientInfo
     * @return \ammonkc\otaehi\StructType\RecipientInfosType
     */
    public function setRecipientInfo(\ammonkc\otaehi\StructType\RecipientInfo $recipientInfo = null)
    {
        $this->RecipientInfo = $recipientInfo;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \ammonkc\otaehi\StructType\RecipientInfosType
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
