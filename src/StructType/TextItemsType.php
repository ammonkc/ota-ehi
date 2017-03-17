<?php

namespace ammonkc\otaehi\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for TextItemsType StructType
 * @subpackage Structs
 */
class TextItemsType extends AbstractStructBase
{
    /**
     * The TextItem
     * @var \ammonkc\otaehi\StructType\TextItem
     */
    public $TextItem;
    /**
     * Constructor method for TextItemsType
     * @uses TextItemsType::setTextItem()
     * @param \ammonkc\otaehi\StructType\TextItem $textItem
     */
    public function __construct(\ammonkc\otaehi\StructType\TextItem $textItem = null)
    {
        $this
            ->setTextItem($textItem);
    }
    /**
     * Get TextItem value
     * @return \ammonkc\otaehi\StructType\TextItem|null
     */
    public function getTextItem()
    {
        return $this->TextItem;
    }
    /**
     * Set TextItem value
     * @param \ammonkc\otaehi\StructType\TextItem $textItem
     * @return \ammonkc\otaehi\StructType\TextItemsType
     */
    public function setTextItem(\ammonkc\otaehi\StructType\TextItem $textItem = null)
    {
        $this->TextItem = $textItem;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \ammonkc\otaehi\StructType\TextItemsType
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
