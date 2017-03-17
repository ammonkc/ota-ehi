<?php

namespace Ammonkc\Otaehi\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for IndCoverageReqsType StructType
 * @subpackage Structs
 */
class IndCoverageReqsType extends AbstractStructBase
{
    /**
     * The IndTripCost
     * @var \Ammonkc\Otaehi\StructType\IndTripCost
     */
    public $IndTripCost;
    /**
     * The FlightAccidentAmount
     * @var \Ammonkc\Otaehi\StructType\FlightAccidentAmount
     */
    public $FlightAccidentAmount;
    /**
     * The CoveredLuggage
     * @var \Ammonkc\Otaehi\StructType\CoveredLuggage
     */
    public $CoveredLuggage;
    /**
     * The PreexistingConditions
     * @var \Ammonkc\Otaehi\StructType\PreexistingConditions
     */
    public $PreexistingConditions;
    /**
     * Constructor method for IndCoverageReqsType
     * @uses IndCoverageReqsType::setIndTripCost()
     * @uses IndCoverageReqsType::setFlightAccidentAmount()
     * @uses IndCoverageReqsType::setCoveredLuggage()
     * @uses IndCoverageReqsType::setPreexistingConditions()
     * @param \Ammonkc\Otaehi\StructType\IndTripCost $indTripCost
     * @param \Ammonkc\Otaehi\StructType\FlightAccidentAmount $flightAccidentAmount
     * @param \Ammonkc\Otaehi\StructType\CoveredLuggage $coveredLuggage
     * @param \Ammonkc\Otaehi\StructType\PreexistingConditions $preexistingConditions
     */
    public function __construct(\Ammonkc\Otaehi\StructType\IndTripCost $indTripCost = null, \Ammonkc\Otaehi\StructType\FlightAccidentAmount $flightAccidentAmount = null, \Ammonkc\Otaehi\StructType\CoveredLuggage $coveredLuggage = null, \Ammonkc\Otaehi\StructType\PreexistingConditions $preexistingConditions = null)
    {
        $this
            ->setIndTripCost($indTripCost)
            ->setFlightAccidentAmount($flightAccidentAmount)
            ->setCoveredLuggage($coveredLuggage)
            ->setPreexistingConditions($preexistingConditions);
    }
    /**
     * Get IndTripCost value
     * @return \Ammonkc\Otaehi\StructType\IndTripCost|null
     */
    public function getIndTripCost()
    {
        return $this->IndTripCost;
    }
    /**
     * Set IndTripCost value
     * @param \Ammonkc\Otaehi\StructType\IndTripCost $indTripCost
     * @return \Ammonkc\Otaehi\StructType\IndCoverageReqsType
     */
    public function setIndTripCost(\Ammonkc\Otaehi\StructType\IndTripCost $indTripCost = null)
    {
        $this->IndTripCost = $indTripCost;
        return $this;
    }
    /**
     * Get FlightAccidentAmount value
     * @return \Ammonkc\Otaehi\StructType\FlightAccidentAmount|null
     */
    public function getFlightAccidentAmount()
    {
        return $this->FlightAccidentAmount;
    }
    /**
     * Set FlightAccidentAmount value
     * @param \Ammonkc\Otaehi\StructType\FlightAccidentAmount $flightAccidentAmount
     * @return \Ammonkc\Otaehi\StructType\IndCoverageReqsType
     */
    public function setFlightAccidentAmount(\Ammonkc\Otaehi\StructType\FlightAccidentAmount $flightAccidentAmount = null)
    {
        $this->FlightAccidentAmount = $flightAccidentAmount;
        return $this;
    }
    /**
     * Get CoveredLuggage value
     * @return \Ammonkc\Otaehi\StructType\CoveredLuggage|null
     */
    public function getCoveredLuggage()
    {
        return $this->CoveredLuggage;
    }
    /**
     * Set CoveredLuggage value
     * @param \Ammonkc\Otaehi\StructType\CoveredLuggage $coveredLuggage
     * @return \Ammonkc\Otaehi\StructType\IndCoverageReqsType
     */
    public function setCoveredLuggage(\Ammonkc\Otaehi\StructType\CoveredLuggage $coveredLuggage = null)
    {
        $this->CoveredLuggage = $coveredLuggage;
        return $this;
    }
    /**
     * Get PreexistingConditions value
     * @return \Ammonkc\Otaehi\StructType\PreexistingConditions|null
     */
    public function getPreexistingConditions()
    {
        return $this->PreexistingConditions;
    }
    /**
     * Set PreexistingConditions value
     * @param \Ammonkc\Otaehi\StructType\PreexistingConditions $preexistingConditions
     * @return \Ammonkc\Otaehi\StructType\IndCoverageReqsType
     */
    public function setPreexistingConditions(\Ammonkc\Otaehi\StructType\PreexistingConditions $preexistingConditions = null)
    {
        $this->PreexistingConditions = $preexistingConditions;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Ammonkc\Otaehi\StructType\IndCoverageReqsType
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
