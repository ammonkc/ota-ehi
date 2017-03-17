<?php

namespace ammonkc\otaehi\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for AdditionalContents StructType
 * @subpackage Structs
 */
class AdditionalContents extends AbstractStructBase
{
    /**
     * The AdditionalContent
     * @var \ammonkc\otaehi\StructType\AdditionalContent
     */
    public $AdditionalContent;
    /**
     * Constructor method for AdditionalContents
     * @uses AdditionalContents::setAdditionalContent()
     * @param \ammonkc\otaehi\StructType\AdditionalContent $additionalContent
     */
    public function __construct(\ammonkc\otaehi\StructType\AdditionalContent $additionalContent = null)
    {
        $this
            ->setAdditionalContent($additionalContent);
    }
    /**
     * Get AdditionalContent value
     * @return \ammonkc\otaehi\StructType\AdditionalContent|null
     */
    public function getAdditionalContent()
    {
        return $this->AdditionalContent;
    }
    /**
     * Set AdditionalContent value
     * @param \ammonkc\otaehi\StructType\AdditionalContent $additionalContent
     * @return \ammonkc\otaehi\StructType\AdditionalContents
     */
    public function setAdditionalContent(\ammonkc\otaehi\StructType\AdditionalContent $additionalContent = null)
    {
        $this->AdditionalContent = $additionalContent;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \ammonkc\otaehi\StructType\AdditionalContents
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
