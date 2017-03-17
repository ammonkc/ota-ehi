<?php

namespace ammonkc\otaehi\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for LuggageItem StructType
 * @subpackage Structs
 */
class LuggageItem extends AbstractStructBase
{
    /**
     * The LuggageDescription
     * @var mixed
     */
    public $LuggageDescription;
    /**
     * The ItemDeclaredValue
     * @var \ammonkc\otaehi\StructType\ItemDeclaredValue
     */
    public $ItemDeclaredValue;
    /**
     * The LuggagePremium
     * @var \ammonkc\otaehi\StructType\LuggagePremium
     */
    public $LuggagePremium;
    /**
     * The LuggageType
     * @var UNKNOWN
     */
    public $LuggageType;
    /**
     * Constructor method for LuggageItem
     * @uses LuggageItem::setLuggageDescription()
     * @uses LuggageItem::setItemDeclaredValue()
     * @uses LuggageItem::setLuggagePremium()
     * @uses LuggageItem::setLuggageType()
     * @param mixed $luggageDescription
     * @param \ammonkc\otaehi\StructType\ItemDeclaredValue $itemDeclaredValue
     * @param \ammonkc\otaehi\StructType\LuggagePremium $luggagePremium
     * @param UNKNOWN $luggageType
     */
    public function __construct($luggageDescription = null, \ammonkc\otaehi\StructType\ItemDeclaredValue $itemDeclaredValue = null, \ammonkc\otaehi\StructType\LuggagePremium $luggagePremium = null, UNKNOWN $luggageType = null)
    {
        $this
            ->setLuggageDescription($luggageDescription)
            ->setItemDeclaredValue($itemDeclaredValue)
            ->setLuggagePremium($luggagePremium)
            ->setLuggageType($luggageType);
    }
    /**
     * Get LuggageDescription value
     * @return mixed|null
     */
    public function getLuggageDescription()
    {
        return $this->LuggageDescription;
    }
    /**
     * Set LuggageDescription value
     * @param mixed $luggageDescription
     * @return \ammonkc\otaehi\StructType\LuggageItem
     */
    public function setLuggageDescription($luggageDescription = null)
    {
        $this->LuggageDescription = $luggageDescription;
        return $this;
    }
    /**
     * Get ItemDeclaredValue value
     * @return \ammonkc\otaehi\StructType\ItemDeclaredValue|null
     */
    public function getItemDeclaredValue()
    {
        return $this->ItemDeclaredValue;
    }
    /**
     * Set ItemDeclaredValue value
     * @param \ammonkc\otaehi\StructType\ItemDeclaredValue $itemDeclaredValue
     * @return \ammonkc\otaehi\StructType\LuggageItem
     */
    public function setItemDeclaredValue(\ammonkc\otaehi\StructType\ItemDeclaredValue $itemDeclaredValue = null)
    {
        $this->ItemDeclaredValue = $itemDeclaredValue;
        return $this;
    }
    /**
     * Get LuggagePremium value
     * @return \ammonkc\otaehi\StructType\LuggagePremium|null
     */
    public function getLuggagePremium()
    {
        return $this->LuggagePremium;
    }
    /**
     * Set LuggagePremium value
     * @param \ammonkc\otaehi\StructType\LuggagePremium $luggagePremium
     * @return \ammonkc\otaehi\StructType\LuggageItem
     */
    public function setLuggagePremium(\ammonkc\otaehi\StructType\LuggagePremium $luggagePremium = null)
    {
        $this->LuggagePremium = $luggagePremium;
        return $this;
    }
    /**
     * Get LuggageType value
     * @return UNKNOWN|null
     */
    public function getLuggageType()
    {
        return $this->LuggageType;
    }
    /**
     * Set LuggageType value
     * @param UNKNOWN $luggageType
     * @return \ammonkc\otaehi\StructType\LuggageItem
     */
    public function setLuggageType(UNKNOWN $luggageType = null)
    {
        $this->LuggageType = $luggageType;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \ammonkc\otaehi\StructType\LuggageItem
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
