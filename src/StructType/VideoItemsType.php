<?php

namespace ammonkc\otaehi\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for VideoItemsType StructType
 * @subpackage Structs
 */
class VideoItemsType extends AbstractStructBase
{
    /**
     * The VideoItem
     * @var \ammonkc\otaehi\StructType\VideoItem
     */
    public $VideoItem;
    /**
     * Constructor method for VideoItemsType
     * @uses VideoItemsType::setVideoItem()
     * @param \ammonkc\otaehi\StructType\VideoItem $videoItem
     */
    public function __construct(\ammonkc\otaehi\StructType\VideoItem $videoItem = null)
    {
        $this
            ->setVideoItem($videoItem);
    }
    /**
     * Get VideoItem value
     * @return \ammonkc\otaehi\StructType\VideoItem|null
     */
    public function getVideoItem()
    {
        return $this->VideoItem;
    }
    /**
     * Set VideoItem value
     * @param \ammonkc\otaehi\StructType\VideoItem $videoItem
     * @return \ammonkc\otaehi\StructType\VideoItemsType
     */
    public function setVideoItem(\ammonkc\otaehi\StructType\VideoItem $videoItem = null)
    {
        $this->VideoItem = $videoItem;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \ammonkc\otaehi\StructType\VideoItemsType
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
