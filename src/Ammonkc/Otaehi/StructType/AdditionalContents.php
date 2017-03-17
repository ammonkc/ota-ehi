<?php

namespace Ammonkc\Otaehi\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for AdditionalContents StructType
 * @subpackage Structs
 */
class AdditionalContents extends AbstractStructBase
{
    /**
     * The AdditionalContent
     * @var \Ammonkc\Otaehi\StructType\AdditionalContent
     */
    public $AdditionalContent;
    /**
     * Constructor method for AdditionalContents
     * @uses AdditionalContents::setAdditionalContent()
     * @param \Ammonkc\Otaehi\StructType\AdditionalContent $additionalContent
     */
    public function __construct(\Ammonkc\Otaehi\StructType\AdditionalContent $additionalContent = null)
    {
        $this
            ->setAdditionalContent($additionalContent);
    }
    /**
     * Get AdditionalContent value
     * @return \Ammonkc\Otaehi\StructType\AdditionalContent|null
     */
    public function getAdditionalContent()
    {
        return $this->AdditionalContent;
    }
    /**
     * Set AdditionalContent value
     * @param \Ammonkc\Otaehi\StructType\AdditionalContent $additionalContent
     * @return \Ammonkc\Otaehi\StructType\AdditionalContents
     */
    public function setAdditionalContent(\Ammonkc\Otaehi\StructType\AdditionalContent $additionalContent = null)
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
     * @return \Ammonkc\Otaehi\StructType\AdditionalContents
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
