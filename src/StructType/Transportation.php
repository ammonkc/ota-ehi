<?php

namespace Ammonkc\Otaehi\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

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
     * @var
     */
    public $NotificationRequired;
    /**
     * The TransportationCode
     * @var
     */
    public $TransportationCode;
    /**
     * The ChargeUnit
     * @var
     */
    public $ChargeUnit;
    /**
     * The Included
     * @var bool
     */
    public $Included;
    /**
     * The Description
     * @var
     */
    public $Description;
    /**
     * The TypicalTravelTime
     * @var string
     */
    public $TypicalTravelTime;
    /**
     * The ExistsCode
     * @var
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
     * @param  $notificationRequired
     * @param  $transportationCode
     * @param  $chargeUnit
     * @param bool $included
     * @param  $description
     * @param string $typicalTravelTime
     * @param  $existsCode
     */
    public function __construct($multimediaDescriptions = null, $operationSchedules = null, DescriptiveText $descriptiveText = null, $tPA_Extensions = null,  $notificationRequired = null,  $transportationCode = null,  $chargeUnit = null, $included = null,  $description = null, $typicalTravelTime = null,  $existsCode = null)
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
     * @return \Ammonkc\Otaehi\StructType\Transportation
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
     * @return \Ammonkc\Otaehi\StructType\Transportation
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
     * @return \Ammonkc\Otaehi\StructType\Transportation
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
     * @return \Ammonkc\Otaehi\StructType\Transportation
     */
    public function setTPA_Extensions($tPA_Extensions = null)
    {
        $this->TPA_Extensions = $tPA_Extensions;
        return $this;
    }
    /**
     * Get NotificationRequired value
     * @return |null
     */
    public function getNotificationRequired()
    {
        return $this->NotificationRequired;
    }
    /**
     * Set NotificationRequired value
     * @param  $notificationRequired
     * @return \Ammonkc\Otaehi\StructType\Transportation
     */
    public function setNotificationRequired( $notificationRequired = null)
    {
        $this->NotificationRequired = $notificationRequired;
        return $this;
    }
    /**
     * Get TransportationCode value
     * @return |null
     */
    public function getTransportationCode()
    {
        return $this->TransportationCode;
    }
    /**
     * Set TransportationCode value
     * @param  $transportationCode
     * @return \Ammonkc\Otaehi\StructType\Transportation
     */
    public function setTransportationCode( $transportationCode = null)
    {
        $this->TransportationCode = $transportationCode;
        return $this;
    }
    /**
     * Get ChargeUnit value
     * @return |null
     */
    public function getChargeUnit()
    {
        return $this->ChargeUnit;
    }
    /**
     * Set ChargeUnit value
     * @param  $chargeUnit
     * @return \Ammonkc\Otaehi\StructType\Transportation
     */
    public function setChargeUnit( $chargeUnit = null)
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
     * @return \Ammonkc\Otaehi\StructType\Transportation
     */
    public function setIncluded($included = null)
    {
        $this->Included = $included;
        return $this;
    }
    /**
     * Get Description value
     * @return |null
     */
    public function getDescription()
    {
        return $this->Description;
    }
    /**
     * Set Description value
     * @param  $description
     * @return \Ammonkc\Otaehi\StructType\Transportation
     */
    public function setDescription( $description = null)
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
     * @return \Ammonkc\Otaehi\StructType\Transportation
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
     * @return |null
     */
    public function getExistsCode()
    {
        return $this->ExistsCode;
    }
    /**
     * Set ExistsCode value
     * @param  $existsCode
     * @return \Ammonkc\Otaehi\StructType\Transportation
     */
    public function setExistsCode( $existsCode = null)
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
     * @return \Ammonkc\Otaehi\StructType\Transportation
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
