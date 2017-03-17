<?php

namespace Ammonkc\Otaehi\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for TextItemsType StructType
 * @subpackage Structs
 */
class TextItemsType extends AbstractStructBase
{
    /**
     * The TextItem
     * @var \Ammonkc\Otaehi\StructType\TextItem
     */
    public $TextItem;
    /**
     * Constructor method for TextItemsType
     * @uses TextItemsType::setTextItem()
     * @param \Ammonkc\Otaehi\StructType\TextItem $textItem
     */
    public function __construct(\Ammonkc\Otaehi\StructType\TextItem $textItem = null)
    {
        $this
            ->setTextItem($textItem);
    }
    /**
     * Get TextItem value
     * @return \Ammonkc\Otaehi\StructType\TextItem|null
     */
    public function getTextItem()
    {
        return $this->TextItem;
    }
    /**
     * Set TextItem value
     * @param \Ammonkc\Otaehi\StructType\TextItem $textItem
     * @return \Ammonkc\Otaehi\StructType\TextItemsType
     */
    public function setTextItem(\Ammonkc\Otaehi\StructType\TextItem $textItem = null)
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
     * @return \Ammonkc\Otaehi\StructType\TextItemsType
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
