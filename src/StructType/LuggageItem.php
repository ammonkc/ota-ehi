<?php

namespace Ammonkc\Otaehi\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

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
     * @var \Ammonkc\Otaehi\StructType\ItemDeclaredValue
     */
    public $ItemDeclaredValue;
    /**
     * The LuggagePremium
     * @var \Ammonkc\Otaehi\StructType\LuggagePremium
     */
    public $LuggagePremium;
    /**
     * The LuggageType
     * @var
     */
    public $LuggageType;
    /**
     * Constructor method for LuggageItem
     * @uses LuggageItem::setLuggageDescription()
     * @uses LuggageItem::setItemDeclaredValue()
     * @uses LuggageItem::setLuggagePremium()
     * @uses LuggageItem::setLuggageType()
     * @param mixed $luggageDescription
     * @param \Ammonkc\Otaehi\StructType\ItemDeclaredValue $itemDeclaredValue
     * @param \Ammonkc\Otaehi\StructType\LuggagePremium $luggagePremium
     * @param  $luggageType
     */
    public function __construct($luggageDescription = null, \Ammonkc\Otaehi\StructType\ItemDeclaredValue $itemDeclaredValue = null, \Ammonkc\Otaehi\StructType\LuggagePremium $luggagePremium = null,  $luggageType = null)
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
     * @return \Ammonkc\Otaehi\StructType\LuggageItem
     */
    public function setLuggageDescription($luggageDescription = null)
    {
        $this->LuggageDescription = $luggageDescription;
        return $this;
    }
    /**
     * Get ItemDeclaredValue value
     * @return \Ammonkc\Otaehi\StructType\ItemDeclaredValue|null
     */
    public function getItemDeclaredValue()
    {
        return $this->ItemDeclaredValue;
    }
    /**
     * Set ItemDeclaredValue value
     * @param \Ammonkc\Otaehi\StructType\ItemDeclaredValue $itemDeclaredValue
     * @return \Ammonkc\Otaehi\StructType\LuggageItem
     */
    public function setItemDeclaredValue(\Ammonkc\Otaehi\StructType\ItemDeclaredValue $itemDeclaredValue = null)
    {
        $this->ItemDeclaredValue = $itemDeclaredValue;
        return $this;
    }
    /**
     * Get LuggagePremium value
     * @return \Ammonkc\Otaehi\StructType\LuggagePremium|null
     */
    public function getLuggagePremium()
    {
        return $this->LuggagePremium;
    }
    /**
     * Set LuggagePremium value
     * @param \Ammonkc\Otaehi\StructType\LuggagePremium $luggagePremium
     * @return \Ammonkc\Otaehi\StructType\LuggageItem
     */
    public function setLuggagePremium(\Ammonkc\Otaehi\StructType\LuggagePremium $luggagePremium = null)
    {
        $this->LuggagePremium = $luggagePremium;
        return $this;
    }
    /**
     * Get LuggageType value
     * @return |null
     */
    public function getLuggageType()
    {
        return $this->LuggageType;
    }
    /**
     * Set LuggageType value
     * @param  $luggageType
     * @return \Ammonkc\Otaehi\StructType\LuggageItem
     */
    public function setLuggageType( $luggageType = null)
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
     * @return \Ammonkc\Otaehi\StructType\LuggageItem
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
