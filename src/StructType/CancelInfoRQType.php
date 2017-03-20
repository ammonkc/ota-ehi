<?php

namespace Ammonkc\Otaehi\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for CancelInfoRQType StructType
 * @subpackage Structs
 */
class CancelInfoRQType extends AbstractStructBase
{
    /**
     * The UniqueID
     * @var mixed
     */
    public $UniqueID;
    /**
     * The PersonName
     * @var mixed
     */
    public $PersonName;
    /**
     * The TPA_Extensions
     * @var mixed
     */
    public $TPA_Extensions;
    /**
     * The CancelType
     * @var
     */
    public $CancelType;
    /**
     * Constructor method for CancelInfoRQType
     * @uses CancelInfoRQType::setUniqueID()
     * @uses CancelInfoRQType::setPersonName()
     * @uses CancelInfoRQType::setTPA_Extensions()
     * @uses CancelInfoRQType::setCancelType()
     * @param mixed $uniqueID
     * @param mixed $personName
     * @param mixed $tPA_Extensions
     * @param  $cancelType
     */
    public function __construct($uniqueID = null, $personName = null, $tPA_Extensions = null,  $cancelType = null)
    {
        $this
            ->setUniqueID($uniqueID)
            ->setPersonName($personName)
            ->setTPA_Extensions($tPA_Extensions)
            ->setCancelType($cancelType);
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
     * @return \Ammonkc\Otaehi\StructType\CancelInfoRQType
     */
    public function setUniqueID($uniqueID = null)
    {
        $this->UniqueID = $uniqueID;
        return $this;
    }
    /**
     * Get PersonName value
     * @return mixed|null
     */
    public function getPersonName()
    {
        return $this->PersonName;
    }
    /**
     * Set PersonName value
     * @param mixed $personName
     * @return \Ammonkc\Otaehi\StructType\CancelInfoRQType
     */
    public function setPersonName($personName = null)
    {
        $this->PersonName = $personName;
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
     * @return \Ammonkc\Otaehi\StructType\CancelInfoRQType
     */
    public function setTPA_Extensions($tPA_Extensions = null)
    {
        $this->TPA_Extensions = $tPA_Extensions;
        return $this;
    }
    /**
     * Get CancelType value
     * @return |null
     */
    public function getCancelType()
    {
        return $this->CancelType;
    }
    /**
     * Set CancelType value
     * @param  $cancelType
     * @return \Ammonkc\Otaehi\StructType\CancelInfoRQType
     */
    public function setCancelType( $cancelType = null)
    {
        $this->CancelType = $cancelType;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Ammonkc\Otaehi\StructType\CancelInfoRQType
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
