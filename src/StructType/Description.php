<?php

namespace Ammonkc\Otaehi\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Description StructType
 * @subpackage Structs
 */
class Description extends AbstractStructBase
{
    /**
     * The Caption
     * @var UNKNOWN
     */
    public $Caption;
    /**
     * The ListItem
     * @var int
     */
    public $ListItem;
    /**
     * Constructor method for Description
     * @uses Description::setCaption()
     * @uses Description::setListItem()
     * @param UNKNOWN $caption
     * @param int $listItem
     */
    public function __construct(UNKNOWN $caption = null, $listItem = null)
    {
        $this
            ->setCaption($caption)
            ->setListItem($listItem);
    }
    /**
     * Get Caption value
     * @return UNKNOWN|null
     */
    public function getCaption()
    {
        return $this->Caption;
    }
    /**
     * Set Caption value
     * @param UNKNOWN $caption
     * @return \Ammonkc\Otaehi\StructType\Description
     */
    public function setCaption(UNKNOWN $caption = null)
    {
        $this->Caption = $caption;
        return $this;
    }
    /**
     * Get ListItem value
     * @return int|null
     */
    public function getListItem()
    {
        return $this->ListItem;
    }
    /**
     * Set ListItem value
     * @param int $listItem
     * @return \Ammonkc\Otaehi\StructType\Description
     */
    public function setListItem($listItem = null)
    {
        // validation for constraint: int
        if (!is_null($listItem) && !is_numeric($listItem)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($listItem)), __LINE__);
        }
        $this->ListItem = $listItem;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Ammonkc\Otaehi\StructType\Description
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
