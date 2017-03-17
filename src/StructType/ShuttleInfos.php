<?php

namespace ammonkc\otaehi\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ShuttleInfos StructType
 * @subpackage Structs
 */
class ShuttleInfos extends AbstractStructBase
{
    /**
     * The ShuttleInfo
     * @var \ammonkc\otaehi\StructType\ShuttleInfo
     */
    public $ShuttleInfo;
    /**
     * Constructor method for ShuttleInfos
     * @uses ShuttleInfos::setShuttleInfo()
     * @param \ammonkc\otaehi\StructType\ShuttleInfo $shuttleInfo
     */
    public function __construct(\ammonkc\otaehi\StructType\ShuttleInfo $shuttleInfo = null)
    {
        $this
            ->setShuttleInfo($shuttleInfo);
    }
    /**
     * Get ShuttleInfo value
     * @return \ammonkc\otaehi\StructType\ShuttleInfo|null
     */
    public function getShuttleInfo()
    {
        return $this->ShuttleInfo;
    }
    /**
     * Set ShuttleInfo value
     * @param \ammonkc\otaehi\StructType\ShuttleInfo $shuttleInfo
     * @return \ammonkc\otaehi\StructType\ShuttleInfos
     */
    public function setShuttleInfo(\ammonkc\otaehi\StructType\ShuttleInfo $shuttleInfo = null)
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
     * @return \ammonkc\otaehi\StructType\ShuttleInfos
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
