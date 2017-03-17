<?php

namespace ammonkc\otaehi\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Transportation StructType
 * @subpackage Structs
 */
class Transportation extends AbstractStructBase
{
    /**
     * The MultimediaDescriptions
     * @var mixed
     */
    public $MultimediaDescriptions;
    /**
     * The OperationSchedules
     * @var mixed
     */
    public $OperationSchedules;
    /**
     * The DescriptiveText
     * @var DescriptiveText
     */
    public $DescriptiveText;
    /**
     * The TPA_Extensions
     * @var mixed
     */
    public $TPA_Extensions;
    /**
     * The NotificationRequired
     * @var UNKNOWN
     */
    public $NotificationRequired;
    /**
     * The TransportationCode
     * @var UNKNOWN
     */
    public $TransportationCode;
    /**
     * The ChargeUnit
     * @var UNKNOWN
     */
    public $ChargeUnit;
    /**
     * The Included
     * @var bool
     */
    public $Included;
    /**
     * The Description
     * @var UNKNOWN
     */
    public $Description;
    /**
     * The TypicalTravelTime
     * @var string
     */
    public $TypicalTravelTime;
    /**
     * The ExistsCode
     * @var UNKNOWN
     */
    public $ExistsCode;
    /**
     * Constructor method for Transportation
     * @uses Transportation::setMultimediaDescriptions()
     * @uses Transportation::setOperationSchedules()
     * @uses Transportation::setDescriptiveText()
     * @uses Transportation::setTPA_Extensions()
     * @uses Transportation::setNotificationRequired()
     * @uses Transportation::setTransportationCode()
     * @uses Transportation::setChargeUnit()
     * @uses Transportation::setIncluded()
     * @uses Transportation::setDescription()
     * @uses Transportation::setTypicalTravelTime()
     * @uses Transportation::setExistsCode()
     * @param mixed $multimediaDescriptions
     * @param mixed $operationSchedules
     * @param DescriptiveText $descriptiveText
     * @param mixed $tPA_Extensions
     * @param UNKNOWN $notificationRequired
     * @param UNKNOWN $transportationCode
     * @param UNKNOWN $chargeUnit
     * @param bool $included
     * @param UNKNOWN $description
     * @param string $typicalTravelTime
     * @param UNKNOWN $existsCode
     */
    public function __construct($multimediaDescriptions = null, $operationSchedules = null, DescriptiveText $descriptiveText = null, $tPA_Extensions = null, UNKNOWN $notificationRequired = null, UNKNOWN $transportationCode = null, UNKNOWN $chargeUnit = null, $included = null, UNKNOWN $description = null, $typicalTravelTime = null, UNKNOWN $existsCode = null)
    {
        $this
            ->setMultimediaDescriptions($multimediaDescriptions)
            ->setOperationSchedules($operationSchedules)
            ->setDescriptiveText($descriptiveText)
            ->setTPA_Extensions($tPA_Extensions)
            ->setNotificationRequired($notificationRequired)
            ->setTransportationCode($transportationCode)
            ->setChargeUnit($chargeUnit)
            ->setIncluded($included)
            ->setDescription($description)
            ->setTypicalTravelTime($typicalTravelTime)
            ->setExistsCode($existsCode);
    }
    /**
     * Get MultimediaDescriptions value
     * @return mixed|null
     */
    public function getMultimediaDescriptions()
    {
        return $this->MultimediaDescriptions;
    }
    /**
     * Set MultimediaDescriptions value
     * @param mixed $multimediaDescriptions
     * @return \ammonkc\otaehi\StructType\Transportation
     */
    public function setMultimediaDescriptions($multimediaDescriptions = null)
    {
        $this->MultimediaDescriptions = $multimediaDescriptions;
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
     * @return \ammonkc\otaehi\StructType\Transportation
     */
    public function setOperationSchedules($operationSchedules = null)
    {
        $this->OperationSchedules = $operationSchedules;
        return $this;
    }
    /**
     * Get DescriptiveText value
     * @return DescriptiveText|null
     */
    public function getDescriptiveText()
    {
        return $this->DescriptiveText;
    }
    /**
     * Set DescriptiveText value
     * @param DescriptiveText $descriptiveText
     * @return \ammonkc\otaehi\StructType\Transportation
     */
    public function setDescriptiveText(DescriptiveText $descriptiveText = null)
    {
        $this->DescriptiveText = $descriptiveText;
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
     * @return \ammonkc\otaehi\StructType\Transportation
     */
    public function setTPA_Extensions($tPA_Extensions = null)
    {
        $this->TPA_Extensions = $tPA_Extensions;
        return $this;
    }
    /**
     * Get NotificationRequired value
     * @return UNKNOWN|null
     */
    public function getNotificationRequired()
    {
        return $this->NotificationRequired;
    }
    /**
     * Set NotificationRequired value
     * @param UNKNOWN $notificationRequired
     * @return \ammonkc\otaehi\StructType\Transportation
     */
    public function setNotificationRequired(UNKNOWN $notificationRequired = null)
    {
        $this->NotificationRequired = $notificationRequired;
        return $this;
    }
    /**
     * Get TransportationCode value
     * @return UNKNOWN|null
     */
    public function getTransportationCode()
    {
        return $this->TransportationCode;
    }
    /**
     * Set TransportationCode value
     * @param UNKNOWN $transportationCode
     * @return \ammonkc\otaehi\StructType\Transportation
     */
    public function setTransportationCode(UNKNOWN $transportationCode = null)
    {
        $this->TransportationCode = $transportationCode;
        return $this;
    }
    /**
     * Get ChargeUnit value
     * @return UNKNOWN|null
     */
    public function getChargeUnit()
    {
        return $this->ChargeUnit;
    }
    /**
     * Set ChargeUnit value
     * @param UNKNOWN $chargeUnit
     * @return \ammonkc\otaehi\StructType\Transportation
     */
    public function setChargeUnit(UNKNOWN $chargeUnit = null)
    {
        $this->ChargeUnit = $chargeUnit;
        return $this;
    }
    /**
     * Get Included value
     * @return bool|null
     */
    public function getIncluded()
    {
        return $this->Included;
    }
    /**
     * Set Included value
     * @param bool $included
     * @return \ammonkc\otaehi\StructType\Transportation
     */
    public function setIncluded($included = null)
    {
        $this->Included = $included;
        return $this;
    }
    /**
     * Get Description value
     * @return UNKNOWN|null
     */
    public function getDescription()
    {
        return $this->Description;
    }
    /**
     * Set Description value
     * @param UNKNOWN $description
     * @return \ammonkc\otaehi\StructType\Transportation
     */
    public function setDescription(UNKNOWN $description = null)
    {
        $this->Description = $description;
        return $this;
    }
    /**
     * Get TypicalTravelTime value
     * @return string|null
     */
    public function getTypicalTravelTime()
    {
        return $this->TypicalTravelTime;
    }
    /**
     * Set TypicalTravelTime value
     * @param string $typicalTravelTime
     * @return \ammonkc\otaehi\StructType\Transportation
     */
    public function setTypicalTravelTime($typicalTravelTime = null)
    {
        // validation for constraint: string
        if (!is_null($typicalTravelTime) && !is_string($typicalTravelTime)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($typicalTravelTime)), __LINE__);
        }
        $this->TypicalTravelTime = $typicalTravelTime;
        return $this;
    }
    /**
     * Get ExistsCode value
     * @return UNKNOWN|null
     */
    public function getExistsCode()
    {
        return $this->ExistsCode;
    }
    /**
     * Set ExistsCode value
     * @param UNKNOWN $existsCode
     * @return \ammonkc\otaehi\StructType\Transportation
     */
    public function setExistsCode(UNKNOWN $existsCode = null)
    {
        $this->ExistsCode = $existsCode;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \ammonkc\otaehi\StructType\Transportation
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
