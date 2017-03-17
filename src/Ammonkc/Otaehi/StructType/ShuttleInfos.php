<?php

namespace Ammonkc\Otaehi\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ShuttleInfos StructType
 * @subpackage Structs
 */
class ShuttleInfos extends AbstractStructBase
{
    /**
     * The ShuttleInfo
     * @var \Ammonkc\Otaehi\StructType\ShuttleInfo
     */
    public $ShuttleInfo;
    /**
     * Constructor method for ShuttleInfos
     * @uses ShuttleInfos::setShuttleInfo()
     * @param \Ammonkc\Otaehi\StructType\ShuttleInfo $shuttleInfo
     */
    public function __construct(\Ammonkc\Otaehi\StructType\ShuttleInfo $shuttleInfo = null)
    {
        $this
            ->setShuttleInfo($shuttleInfo);
    }
    /**
     * Get ShuttleInfo value
     * @return \Ammonkc\Otaehi\StructType\ShuttleInfo|null
     */
    public function getShuttleInfo()
    {
        return $this->ShuttleInfo;
    }
    /**
     * Set ShuttleInfo value
     * @param \Ammonkc\Otaehi\StructType\ShuttleInfo $shuttleInfo
     * @return \Ammonkc\Otaehi\StructType\ShuttleInfos
     */
    public function setShuttleInfo(\Ammonkc\Otaehi\StructType\ShuttleInfo $shuttleInfo = null)
    {
        $this->ShuttleInfo = $shuttleInfo;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Ammonkc\Otaehi\StructType\ShuttleInfos
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
