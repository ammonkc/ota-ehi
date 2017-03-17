<?php

namespace Ammonkc\Otaehi\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for VehicleType StructType
 * @subpackage Structs
 */
class VehicleType extends AbstractStructBase
{
    /**
     * The VehMakeModel
     * @var \Ammonkc\Otaehi\StructType\VehMakeModel
     */
    public $VehMakeModel;
    /**
     * The PictureURL
     * @var string
     */
    public $PictureURL;
    /**
     * The VehIdentity
     * @var \Ammonkc\Otaehi\StructType\VehIdentity
     */
    public $VehIdentity;
    /**
     * The PassengerQuantity
     * @var UNKNOWN
     */
    public $PassengerQuantity;
    /**
     * The BaggageQuantity
     * @var int
     */
    public $BaggageQuantity;
    /**
     * The VendorCarType
     * @var UNKNOWN
     */
    public $VendorCarType;
    /**
     * The OdometerUnitOfMeasure
     * @var UNKNOWN
     */
    public $OdometerUnitOfMeasure;
    /**
     * The Description
     * @var UNKNOWN
     */
    public $Description;
    /**
     * Constructor method for VehicleType
     * @uses VehicleType::setVehMakeModel()
     * @uses VehicleType::setPictureURL()
     * @uses VehicleType::setVehIdentity()
     * @uses VehicleType::setPassengerQuantity()
     * @uses VehicleType::setBaggageQuantity()
     * @uses VehicleType::setVendorCarType()
     * @uses VehicleType::setOdometerUnitOfMeasure()
     * @uses VehicleType::setDescription()
     * @param \Ammonkc\Otaehi\StructType\VehMakeModel $vehMakeModel
     * @param string $pictureURL
     * @param \Ammonkc\Otaehi\StructType\VehIdentity $vehIdentity
     * @param UNKNOWN $passengerQuantity
     * @param int $baggageQuantity
     * @param UNKNOWN $vendorCarType
     * @param UNKNOWN $odometerUnitOfMeasure
     * @param UNKNOWN $description
     */
    public function __construct(\Ammonkc\Otaehi\StructType\VehMakeModel $vehMakeModel = null, $pictureURL = null, \Ammonkc\Otaehi\StructType\VehIdentity $vehIdentity = null, UNKNOWN $passengerQuantity = null, $baggageQuantity = null, UNKNOWN $vendorCarType = null, UNKNOWN $odometerUnitOfMeasure = null, UNKNOWN $description = null)
    {
        $this
            ->setVehMakeModel($vehMakeModel)
            ->setPictureURL($pictureURL)
            ->setVehIdentity($vehIdentity)
            ->setPassengerQuantity($passengerQuantity)
            ->setBaggageQuantity($baggageQuantity)
            ->setVendorCarType($vendorCarType)
            ->setOdometerUnitOfMeasure($odometerUnitOfMeasure)
            ->setDescription($description);
    }
    /**
     * Get VehMakeModel value
     * @return \Ammonkc\Otaehi\StructType\VehMakeModel|null
     */
    public function getVehMakeModel()
    {
        return $this->VehMakeModel;
    }
    /**
     * Set VehMakeModel value
     * @param \Ammonkc\Otaehi\StructType\VehMakeModel $vehMakeModel
     * @return \Ammonkc\Otaehi\StructType\VehicleType
     */
    public function setVehMakeModel(\Ammonkc\Otaehi\StructType\VehMakeModel $vehMakeModel = null)
    {
        $this->VehMakeModel = $vehMakeModel;
        return $this;
    }
    /**
     * Get PictureURL value
     * @return string|null
     */
    public function getPictureURL()
    {
        return $this->PictureURL;
    }
    /**
     * Set PictureURL value
     * @param string $pictureURL
     * @return \Ammonkc\Otaehi\StructType\VehicleType
     */
    public function setPictureURL($pictureURL = null)
    {
        // validation for constraint: string
        if (!is_null($pictureURL) && !is_string($pictureURL)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($pictureURL)), __LINE__);
        }
        $this->PictureURL = $pictureURL;
        return $this;
    }
    /**
     * Get VehIdentity value
     * @return \Ammonkc\Otaehi\StructType\VehIdentity|null
     */
    public function getVehIdentity()
    {
        return $this->VehIdentity;
    }
    /**
     * Set VehIdentity value
     * @param \Ammonkc\Otaehi\StructType\VehIdentity $vehIdentity
     * @return \Ammonkc\Otaehi\StructType\VehicleType
     */
    public function setVehIdentity(\Ammonkc\Otaehi\StructType\VehIdentity $vehIdentity = null)
    {
        $this->VehIdentity = $vehIdentity;
        return $this;
    }
    /**
     * Get PassengerQuantity value
     * @return UNKNOWN|null
     */
    public function getPassengerQuantity()
    {
        return $this->PassengerQuantity;
    }
    /**
     * Set PassengerQuantity value
     * @param UNKNOWN $passengerQuantity
     * @return \Ammonkc\Otaehi\StructType\VehicleType
     */
    public function setPassengerQuantity(UNKNOWN $passengerQuantity = null)
    {
        $this->PassengerQuantity = $passengerQuantity;
        return $this;
    }
    /**
     * Get BaggageQuantity value
     * @return int|null
     */
    public function getBaggageQuantity()
    {
        return $this->BaggageQuantity;
    }
    /**
     * Set BaggageQuantity value
     * @param int $baggageQuantity
     * @return \Ammonkc\Otaehi\StructType\VehicleType
     */
    public function setBaggageQuantity($baggageQuantity = null)
    {
        // validation for constraint: int
        if (!is_null($baggageQuantity) && !is_numeric($baggageQuantity)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($baggageQuantity)), __LINE__);
        }
        $this->BaggageQuantity = $baggageQuantity;
        return $this;
    }
    /**
     * Get VendorCarType value
     * @return UNKNOWN|null
     */
    public function getVendorCarType()
    {
        return $this->VendorCarType;
    }
    /**
     * Set VendorCarType value
     * @param UNKNOWN $vendorCarType
     * @return \Ammonkc\Otaehi\StructType\VehicleType
     */
    public function setVendorCarType(UNKNOWN $vendorCarType = null)
    {
        $this->VendorCarType = $vendorCarType;
        return $this;
    }
    /**
     * Get OdometerUnitOfMeasure value
     * @return UNKNOWN|null
     */
    public function getOdometerUnitOfMeasure()
    {
        return $this->OdometerUnitOfMeasure;
    }
    /**
     * Set OdometerUnitOfMeasure value
     * @param UNKNOWN $odometerUnitOfMeasure
     * @return \Ammonkc\Otaehi\StructType\VehicleType
     */
    public function setOdometerUnitOfMeasure(UNKNOWN $odometerUnitOfMeasure = null)
    {
        $this->OdometerUnitOfMeasure = $odometerUnitOfMeasure;
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
     * @return \Ammonkc\Otaehi\StructType\VehicleType
     */
    public function setDescription(UNKNOWN $description = null)
    {
        $this->Description = $description;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Ammonkc\Otaehi\StructType\VehicleType
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
