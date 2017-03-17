<?php

namespace Ammonkc\Otaehi\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Shuttle StructType
 * @subpackage Structs
 */
class Shuttle extends AbstractStructBase
{
    /**
     * The ShuttleInfos
     * @var \Ammonkc\Otaehi\StructType\ShuttleInfos
     */
    public $ShuttleInfos;
    /**
     * The OperationSchedules
     * @var mixed
     */
    public $OperationSchedules;
    /**
     * Constructor method for Shuttle
     * @uses Shuttle::setShuttleInfos()
     * @uses Shuttle::setOperationSchedules()
     * @param \Ammonkc\Otaehi\StructType\ShuttleInfos $shuttleInfos
     * @param mixed $operationSchedules
     */
    public function __construct(\Ammonkc\Otaehi\StructType\ShuttleInfos $shuttleInfos = null, $operationSchedules = null)
    {
        $this
            ->setShuttleInfos($shuttleInfos)
            ->setOperationSchedules($operationSchedules);
    }
    /**
     * Get ShuttleInfos value
     * @return \Ammonkc\Otaehi\StructType\ShuttleInfos|null
     */
    public function getShuttleInfos()
    {
        return $this->ShuttleInfos;
    }
    /**
     * Set ShuttleInfos value
     * @param \Ammonkc\Otaehi\StructType\ShuttleInfos $shuttleInfos
     * @return \Ammonkc\Otaehi\StructType\Shuttle
     */
    public function setShuttleInfos(\Ammonkc\Otaehi\StructType\ShuttleInfos $shuttleInfos = null)
    {
        $this->ShuttleInfos = $shuttleInfos;
        return $this;
    }
    /**
     * Get OperationSchedules value
     * @return mixed|null
     */
    public function getOperationSchedules()
    {
        return $this->OperationSchedules;
    }
    /**
     * Set OperationSchedules value
     * @param mixed $operationSchedules
     * @return \Ammonkc\Otaehi\StructType\Shuttle
     */
    public function setOperationSchedules($operationSchedules = null)
    {
        $this->OperationSchedules = $operationSchedules;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Ammonkc\Otaehi\StructType\Shuttle
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
