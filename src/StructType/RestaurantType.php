<?php

namespace Ammonkc\Otaehi\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for RestaurantType StructType
 * @subpackage Structs
 */
class RestaurantType extends AbstractStructBase
{
    /**
     * The MultimediaDescriptions
     * @var \Ammonkc\Otaehi\StructType\MultimediaDescriptions
     */
    public $MultimediaDescriptions;
    /**
     * The RelativePosition
     * @var mixed
     */
    public $RelativePosition;
    /**
     * The OperationSchedules
     * @var mixed
     */
    public $OperationSchedules;
    /**
     * The InfoCodes
     * @var \Ammonkc\Otaehi\StructType\InfoCodes
     */
    public $InfoCodes;
    /**
     * The CuisineCodes
     * @var \Ammonkc\Otaehi\StructType\CuisineCodes
     */
    public $CuisineCodes;
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
     * The RestaurantName
     * @var string
     */
    public $RestaurantName;
    /**
     * The MaxSeatingCapacity
     * @var int
     */
    public $MaxSeatingCapacity;
    /**
     * The MaxSingleParty
     * @var int
     */
    public $MaxSingleParty;
    /**
     * The InvCode
     * @var string
     */
    public $InvCode;
    /**
     * The OfferBreakfast
     * @var bool
     */
    public $OfferBreakfast;
    /**
     * The OfferLunch
     * @var bool
     */
    public $OfferLunch;
    /**
     * The OfferDinner
     * @var bool
     */
    public $OfferDinner;
    /**
     * The OfferBrunch
     * @var bool
     */
    public $OfferBrunch;
    /**
     * The ProximityCode
     * @var
     */
    public $ProximityCode;
    /**
     * The Sort
     * @var int
     */
    public $Sort;
    /**
     * The ReservationReqInd
     * @var bool
     */
    public $ReservationReqInd;
    /**
     * The FeaturedInd
     * @var bool
     */
    public $FeaturedInd;
    /**
     * Constructor method for RestaurantType
     * @uses RestaurantType::setMultimediaDescriptions()
     * @uses RestaurantType::setRelativePosition()
     * @uses RestaurantType::setOperationSchedules()
     * @uses RestaurantType::setInfoCodes()
     * @uses RestaurantType::setCuisineCodes()
     * @uses RestaurantType::setDescriptiveText()
     * @uses RestaurantType::setTPA_Extensions()
     * @uses RestaurantType::setRestaurantName()
     * @uses RestaurantType::setMaxSeatingCapacity()
     * @uses RestaurantType::setMaxSingleParty()
     * @uses RestaurantType::setInvCode()
     * @uses RestaurantType::setOfferBreakfast()
     * @uses RestaurantType::setOfferLunch()
     * @uses RestaurantType::setOfferDinner()
     * @uses RestaurantType::setOfferBrunch()
     * @uses RestaurantType::setProximityCode()
     * @uses RestaurantType::setSort()
     * @uses RestaurantType::setReservationReqInd()
     * @uses RestaurantType::setFeaturedInd()
     * @param \Ammonkc\Otaehi\StructType\MultimediaDescriptions $multimediaDescriptions
     * @param mixed $relativePosition
     * @param mixed $operationSchedules
     * @param \Ammonkc\Otaehi\StructType\InfoCodes $infoCodes
     * @param \Ammonkc\Otaehi\StructType\CuisineCodes $cuisineCodes
     * @param DescriptiveText $descriptiveText
     * @param mixed $tPA_Extensions
     * @param string $restaurantName
     * @param int $maxSeatingCapacity
     * @param int $maxSingleParty
     * @param string $invCode
     * @param bool $offerBreakfast
     * @param bool $offerLunch
     * @param bool $offerDinner
     * @param bool $offerBrunch
     * @param  $proximityCode
     * @param int $sort
     * @param bool $reservationReqInd
     * @param bool $featuredInd
     */
    public function __construct(\Ammonkc\Otaehi\StructType\MultimediaDescriptions $multimediaDescriptions = null, $relativePosition = null, $operationSchedules = null, \Ammonkc\Otaehi\StructType\InfoCodes $infoCodes = null, \Ammonkc\Otaehi\StructType\CuisineCodes $cuisineCodes = null, DescriptiveText $descriptiveText = null, $tPA_Extensions = null, $restaurantName = null, $maxSeatingCapacity = null, $maxSingleParty = null, $invCode = null, $offerBreakfast = null, $offerLunch = null, $offerDinner = null, $offerBrunch = null,  $proximityCode = null, $sort = null, $reservationReqInd = null, $featuredInd = null)
    {
        $this
            ->setMultimediaDescriptions($multimediaDescriptions)
            ->setRelativePosition($relativePosition)
            ->setOperationSchedules($operationSchedules)
            ->setInfoCodes($infoCodes)
            ->setCuisineCodes($cuisineCodes)
            ->setDescriptiveText($descriptiveText)
            ->setTPA_Extensions($tPA_Extensions)
            ->setRestaurantName($restaurantName)
            ->setMaxSeatingCapacity($maxSeatingCapacity)
            ->setMaxSingleParty($maxSingleParty)
            ->setInvCode($invCode)
            ->setOfferBreakfast($offerBreakfast)
            ->setOfferLunch($offerLunch)
            ->setOfferDinner($offerDinner)
            ->setOfferBrunch($offerBrunch)
            ->setProximityCode($proximityCode)
            ->setSort($sort)
            ->setReservationReqInd($reservationReqInd)
            ->setFeaturedInd($featuredInd);
    }
    /**
     * Get MultimediaDescriptions value
     * @return \Ammonkc\Otaehi\StructType\MultimediaDescriptions|null
     */
    public function getMultimediaDescriptions()
    {
        return $this->MultimediaDescriptions;
    }
    /**
     * Set MultimediaDescriptions value
     * @param \Ammonkc\Otaehi\StructType\MultimediaDescriptions $multimediaDescriptions
     * @return \Ammonkc\Otaehi\StructType\RestaurantType
     */
    public function setMultimediaDescriptions(\Ammonkc\Otaehi\StructType\MultimediaDescriptions $multimediaDescriptions = null)
    {
        $this->MultimediaDescriptions = $multimediaDescriptions;
        return $this;
    }
    /**
     * Get RelativePosition value
     * @return mixed|null
     */
    public function getRelativePosition()
    {
        return $this->RelativePosition;
    }
    /**
     * Set RelativePosition value
     * @param mixed $relativePosition
     * @return \Ammonkc\Otaehi\StructType\RestaurantType
     */
    public function setRelativePosition($relativePosition = null)
    {
        $this->RelativePosition = $relativePosition;
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
     * @return \Ammonkc\Otaehi\StructType\RestaurantType
     */
    public function setOperationSchedules($operationSchedules = null)
    {
        $this->OperationSchedules = $operationSchedules;
        return $this;
    }
    /**
     * Get InfoCodes value
     * @return \Ammonkc\Otaehi\StructType\InfoCodes|null
     */
    public function getInfoCodes()
    {
        return $this->InfoCodes;
    }
    /**
     * Set InfoCodes value
     * @param \Ammonkc\Otaehi\StructType\InfoCodes $infoCodes
     * @return \Ammonkc\Otaehi\StructType\RestaurantType
     */
    public function setInfoCodes(\Ammonkc\Otaehi\StructType\InfoCodes $infoCodes = null)
    {
        $this->InfoCodes = $infoCodes;
        return $this;
    }
    /**
     * Get CuisineCodes value
     * @return \Ammonkc\Otaehi\StructType\CuisineCodes|null
     */
    public function getCuisineCodes()
    {
        return $this->CuisineCodes;
    }
    /**
     * Set CuisineCodes value
     * @param \Ammonkc\Otaehi\StructType\CuisineCodes $cuisineCodes
     * @return \Ammonkc\Otaehi\StructType\RestaurantType
     */
    public function setCuisineCodes(\Ammonkc\Otaehi\StructType\CuisineCodes $cuisineCodes = null)
    {
        $this->CuisineCodes = $cuisineCodes;
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
     * @return \Ammonkc\Otaehi\StructType\RestaurantType
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
     * @return \Ammonkc\Otaehi\StructType\RestaurantType
     */
    public function setTPA_Extensions($tPA_Extensions = null)
    {
        $this->TPA_Extensions = $tPA_Extensions;
        return $this;
    }
    /**
     * Get RestaurantName value
     * @return string|null
     */
    public function getRestaurantName()
    {
        return $this->RestaurantName;
    }
    /**
     * Set RestaurantName value
     * @param string $restaurantName
     * @return \Ammonkc\Otaehi\StructType\RestaurantType
     */
    public function setRestaurantName($restaurantName = null)
    {
        // validation for constraint: string
        if (!is_null($restaurantName) && !is_string($restaurantName)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($restaurantName)), __LINE__);
        }
        $this->RestaurantName = $restaurantName;
        return $this;
    }
    /**
     * Get MaxSeatingCapacity value
     * @return int|null
     */
    public function getMaxSeatingCapacity()
    {
        return $this->MaxSeatingCapacity;
    }
    /**
     * Set MaxSeatingCapacity value
     * @param int $maxSeatingCapacity
     * @return \Ammonkc\Otaehi\StructType\RestaurantType
     */
    public function setMaxSeatingCapacity($maxSeatingCapacity = null)
    {
        // validation for constraint: int
        if (!is_null($maxSeatingCapacity) && !is_numeric($maxSeatingCapacity)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($maxSeatingCapacity)), __LINE__);
        }
        $this->MaxSeatingCapacity = $maxSeatingCapacity;
        return $this;
    }
    /**
     * Get MaxSingleParty value
     * @return int|null
     */
    public function getMaxSingleParty()
    {
        return $this->MaxSingleParty;
    }
    /**
     * Set MaxSingleParty value
     * @param int $maxSingleParty
     * @return \Ammonkc\Otaehi\StructType\RestaurantType
     */
    public function setMaxSingleParty($maxSingleParty = null)
    {
        // validation for constraint: int
        if (!is_null($maxSingleParty) && !is_numeric($maxSingleParty)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($maxSingleParty)), __LINE__);
        }
        $this->MaxSingleParty = $maxSingleParty;
        return $this;
    }
    /**
     * Get InvCode value
     * @return string|null
     */
    public function getInvCode()
    {
        return $this->InvCode;
    }
    /**
     * Set InvCode value
     * @param string $invCode
     * @return \Ammonkc\Otaehi\StructType\RestaurantType
     */
    public function setInvCode($invCode = null)
    {
        // validation for constraint: string
        if (!is_null($invCode) && !is_string($invCode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($invCode)), __LINE__);
        }
        $this->InvCode = $invCode;
        return $this;
    }
    /**
     * Get OfferBreakfast value
     * @return bool|null
     */
    public function getOfferBreakfast()
    {
        return $this->OfferBreakfast;
    }
    /**
     * Set OfferBreakfast value
     * @param bool $offerBreakfast
     * @return \Ammonkc\Otaehi\StructType\RestaurantType
     */
    public function setOfferBreakfast($offerBreakfast = null)
    {
        $this->OfferBreakfast = $offerBreakfast;
        return $this;
    }
    /**
     * Get OfferLunch value
     * @return bool|null
     */
    public function getOfferLunch()
    {
        return $this->OfferLunch;
    }
    /**
     * Set OfferLunch value
     * @param bool $offerLunch
     * @return \Ammonkc\Otaehi\StructType\RestaurantType
     */
    public function setOfferLunch($offerLunch = null)
    {
        $this->OfferLunch = $offerLunch;
        return $this;
    }
    /**
     * Get OfferDinner value
     * @return bool|null
     */
    public function getOfferDinner()
    {
        return $this->OfferDinner;
    }
    /**
     * Set OfferDinner value
     * @param bool $offerDinner
     * @return \Ammonkc\Otaehi\StructType\RestaurantType
     */
    public function setOfferDinner($offerDinner = null)
    {
        $this->OfferDinner = $offerDinner;
        return $this;
    }
    /**
     * Get OfferBrunch value
     * @return bool|null
     */
    public function getOfferBrunch()
    {
        return $this->OfferBrunch;
    }
    /**
     * Set OfferBrunch value
     * @param bool $offerBrunch
     * @return \Ammonkc\Otaehi\StructType\RestaurantType
     */
    public function setOfferBrunch($offerBrunch = null)
    {
        $this->OfferBrunch = $offerBrunch;
        return $this;
    }
    /**
     * Get ProximityCode value
     * @return |null
     */
    public function getProximityCode()
    {
        return $this->ProximityCode;
    }
    /**
     * Set ProximityCode value
     * @param  $proximityCode
     * @return \Ammonkc\Otaehi\StructType\RestaurantType
     */
    public function setProximityCode( $proximityCode = null)
    {
        $this->ProximityCode = $proximityCode;
        return $this;
    }
    /**
     * Get Sort value
     * @return int|null
     */
    public function getSort()
    {
        return $this->Sort;
    }
    /**
     * Set Sort value
     * @param int $sort
     * @return \Ammonkc\Otaehi\StructType\RestaurantType
     */
    public function setSort($sort = null)
    {
        // validation for constraint: int
        if (!is_null($sort) && !is_numeric($sort)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($sort)), __LINE__);
        }
        $this->Sort = $sort;
        return $this;
    }
    /**
     * Get ReservationReqInd value
     * @return bool|null
     */
    public function getReservationReqInd()
    {
        return $this->ReservationReqInd;
    }
    /**
     * Set ReservationReqInd value
     * @param bool $reservationReqInd
     * @return \Ammonkc\Otaehi\StructType\RestaurantType
     */
    public function setReservationReqInd($reservationReqInd = null)
    {
        $this->ReservationReqInd = $reservationReqInd;
        return $this;
    }
    /**
     * Get FeaturedInd value
     * @return bool|null
     */
    public function getFeaturedInd()
    {
        return $this->FeaturedInd;
    }
    /**
     * Set FeaturedInd value
     * @param bool $featuredInd
     * @return \Ammonkc\Otaehi\StructType\RestaurantType
     */
    public function setFeaturedInd($featuredInd = null)
    {
        $this->FeaturedInd = $featuredInd;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Ammonkc\Otaehi\StructType\RestaurantType
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
