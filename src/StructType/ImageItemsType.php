<?php

namespace ammonkc\otaehi\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ImageItemsType StructType
 * @subpackage Structs
 */
class ImageItemsType extends AbstractStructBase
{
    /**
     * The ImageItem
     * @var \ammonkc\otaehi\StructType\ImageItem
     */
    public $ImageItem;
    /**
     * Constructor method for ImageItemsType
     * @uses ImageItemsType::setImageItem()
     * @param \ammonkc\otaehi\StructType\ImageItem $imageItem
     */
    public function __construct(\ammonkc\otaehi\StructType\ImageItem $imageItem = null)
    {
        $this
            ->setImageItem($imageItem);
    }
    /**
     * Get ImageItem value
     * @return \ammonkc\otaehi\StructType\ImageItem|null
     */
    public function getImageItem()
    {
        return $this->ImageItem;
    }
    /**
     * Set ImageItem value
     * @param \ammonkc\otaehi\StructType\ImageItem $imageItem
     * @return \ammonkc\otaehi\StructType\ImageItemsType
     */
    public function setImageItem(\ammonkc\otaehi\StructType\ImageItem $imageItem = null)
    {
        $this->ImageItem = $imageItem;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \ammonkc\otaehi\StructType\ImageItemsType
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
