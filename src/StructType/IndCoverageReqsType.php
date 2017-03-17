<?php

namespace ammonkc\otaehi\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for IndCoverageReqsType StructType
 * @subpackage Structs
 */
class IndCoverageReqsType extends AbstractStructBase
{
    /**
     * The IndTripCost
     * @var \ammonkc\otaehi\StructType\IndTripCost
     */
    public $IndTripCost;
    /**
     * The FlightAccidentAmount
     * @var \ammonkc\otaehi\StructType\FlightAccidentAmount
     */
    public $FlightAccidentAmount;
    /**
     * The CoveredLuggage
     * @var \ammonkc\otaehi\StructType\CoveredLuggage
     */
    public $CoveredLuggage;
    /**
     * The PreexistingConditions
     * @var \ammonkc\otaehi\StructType\PreexistingConditions
     */
    public $PreexistingConditions;
    /**
     * Constructor method for IndCoverageReqsType
     * @uses IndCoverageReqsType::setIndTripCost()
     * @uses IndCoverageReqsType::setFlightAccidentAmount()
     * @uses IndCoverageReqsType::setCoveredLuggage()
     * @uses IndCoverageReqsType::setPreexistingConditions()
     * @param \ammonkc\otaehi\StructType\IndTripCost $indTripCost
     * @param \ammonkc\otaehi\StructType\FlightAccidentAmount $flightAccidentAmount
     * @param \ammonkc\otaehi\StructType\CoveredLuggage $coveredLuggage
     * @param \ammonkc\otaehi\StructType\PreexistingConditions $preexistingConditions
     */
    public function __construct(\ammonkc\otaehi\StructType\IndTripCost $indTripCost = null, \ammonkc\otaehi\StructType\FlightAccidentAmount $flightAccidentAmount = null, \ammonkc\otaehi\StructType\CoveredLuggage $coveredLuggage = null, \ammonkc\otaehi\StructType\PreexistingConditions $preexistingConditions = null)
    {
        $this
            ->setIndTripCost($indTripCost)
            ->setFlightAccidentAmount($flightAccidentAmount)
            ->setCoveredLuggage($coveredLuggage)
            ->setPreexistingConditions($preexistingConditions);
    }
    /**
     * Get IndTripCost value
     * @return \ammonkc\otaehi\StructType\IndTripCost|null
     */
    public function getIndTripCost()
    {
        return $this->IndTripCost;
    }
    /**
     * Set IndTripCost value
     * @param \ammonkc\otaehi\StructType\IndTripCost $indTripCost
     * @return \ammonkc\otaehi\StructType\IndCoverageReqsType
     */
    public function setIndTripCost(\ammonkc\otaehi\StructType\IndTripCost $indTripCost = null)
    {
        $this->IndTripCost = $indTripCost;
        return $this;
    }
    /**
     * Get FlightAccidentAmount value
     * @return \ammonkc\otaehi\StructType\FlightAccidentAmount|null
     */
    public function getFlightAccidentAmount()
    {
        return $this->FlightAccidentAmount;
    }
    /**
     * Set FlightAccidentAmount value
     * @param \ammonkc\otaehi\StructType\FlightAccidentAmount $flightAccidentAmount
     * @return \ammonkc\otaehi\StructType\IndCoverageReqsType
     */
    public function setFlightAccidentAmount(\ammonkc\otaehi\StructType\FlightAccidentAmount $flightAccidentAmount = null)
    {
        $this->FlightAccidentAmount = $flightAccidentAmount;
        return $this;
    }
    /**
     * Get CoveredLuggage value
     * @return \ammonkc\otaehi\StructType\CoveredLuggage|null
     */
    public function getCoveredLuggage()
    {
        return $this->CoveredLuggage;
    }
    /**
     * Set CoveredLuggage value
     * @param \ammonkc\otaehi\StructType\CoveredLuggage $coveredLuggage
     * @return \ammonkc\otaehi\StructType\IndCoverageReqsType
     */
    public function setCoveredLuggage(\ammonkc\otaehi\StructType\CoveredLuggage $coveredLuggage = null)
    {
        $this->CoveredLuggage = $coveredLuggage;
        return $this;
    }
    /**
     * Get PreexistingConditions value
     * @return \ammonkc\otaehi\StructType\PreexistingConditions|null
     */
    public function getPreexistingConditions()
    {
        return $this->PreexistingConditions;
    }
    /**
     * Set PreexistingConditions value
     * @param \ammonkc\otaehi\StructType\PreexistingConditions $preexistingConditions
     * @return \ammonkc\otaehi\StructType\IndCoverageReqsType
     */
    public function setPreexistingConditions(\ammonkc\otaehi\StructType\PreexistingConditions $preexistingConditions = null)
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
     * @return \ammonkc\otaehi\StructType\IndCoverageReqsType
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
