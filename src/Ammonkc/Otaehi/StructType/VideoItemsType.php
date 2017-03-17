<?php

namespace Ammonkc\Otaehi\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for VideoItemsType StructType
 * @subpackage Structs
 */
class VideoItemsType extends AbstractStructBase
{
    /**
     * The VideoItem
     * @var \Ammonkc\Otaehi\StructType\VideoItem
     */
    public $VideoItem;
    /**
     * Constructor method for VideoItemsType
     * @uses VideoItemsType::setVideoItem()
     * @param \Ammonkc\Otaehi\StructType\VideoItem $videoItem
     */
    public function __construct(\Ammonkc\Otaehi\StructType\VideoItem $videoItem = null)
    {
        $this
            ->setVideoItem($videoItem);
    }
    /**
     * Get VideoItem value
     * @return \Ammonkc\Otaehi\StructType\VideoItem|null
     */
    public function getVideoItem()
    {
        return $this->VideoItem;
    }
    /**
     * Set VideoItem value
     * @param \Ammonkc\Otaehi\StructType\VideoItem $videoItem
     * @return \Ammonkc\Otaehi\StructType\VideoItemsType
     */
    public function setVideoItem(\Ammonkc\Otaehi\StructType\VideoItem $videoItem = null)
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
     * @return \Ammonkc\Otaehi\StructType\VideoItemsType
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
