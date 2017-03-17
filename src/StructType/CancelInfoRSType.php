<?php

namespace Ammonkc\Otaehi\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for CancelInfoRSType StructType
 * @subpackage Structs
 */
class CancelInfoRSType extends AbstractStructBase
{
    /**
     * The CancelRules
     * @var \Ammonkc\Otaehi\StructType\CancelRules
     */
    public $CancelRules;
    /**
     * The UniqueID
     * @var mixed
     */
    public $UniqueID;
    /**
     * The TPA_Extensions
     * @var mixed
     */
    public $TPA_Extensions;
    /**
     * Constructor method for CancelInfoRSType
     * @uses CancelInfoRSType::setCancelRules()
     * @uses CancelInfoRSType::setUniqueID()
     * @uses CancelInfoRSType::setTPA_Extensions()
     * @param \Ammonkc\Otaehi\StructType\CancelRules $cancelRules
     * @param mixed $uniqueID
     * @param mixed $tPA_Extensions
     */
    public function __construct(\Ammonkc\Otaehi\StructType\CancelRules $cancelRules = null, $uniqueID = null, $tPA_Extensions = null)
    {
        $this
            ->setCancelRules($cancelRules)
            ->setUniqueID($uniqueID)
            ->setTPA_Extensions($tPA_Extensions);
    }
    /**
     * Get CancelRules value
     * @return \Ammonkc\Otaehi\StructType\CancelRules|null
     */
    public function getCancelRules()
    {
        return $this->CancelRules;
    }
    /**
     * Set CancelRules value
     * @param \Ammonkc\Otaehi\StructType\CancelRules $cancelRules
     * @return \Ammonkc\Otaehi\StructType\CancelInfoRSType
     */
    public function setCancelRules(\Ammonkc\Otaehi\StructType\CancelRules $cancelRules = null)
    {
        $this->CancelRules = $cancelRules;
        return $this;
    }
    /**
     * Get UniqueID value
     * @return mixed|null
     */
    public function getUniqueID()
    {
        return $this->UniqueID;
    }
    /**
     * Set UniqueID value
     * @param mixed $uniqueID
     * @return \Ammonkc\Otaehi\StructType\CancelInfoRSType
     */
    public function setUniqueID($uniqueID = null)
    {
        $this->UniqueID = $uniqueID;
        return $this;
    }
    /**
     * Get TPA_Extensions value
     * @return mixed|null
     */
    public function getTPA_Extensions()
    {
        return $this->TPA_Extensions;
    }
    /**
     * Set TPA_Extensions value
     * @param mixed $tPA_Extensions
     * @return \Ammonkc\Otaehi\StructType\CancelInfoRSType
     */
    public function setTPA_Extensions($tPA_Extensions = null)
    {
        $this->TPA_Extensions = $tPA_Extensions;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Ammonkc\Otaehi\StructType\CancelInfoRSType
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
