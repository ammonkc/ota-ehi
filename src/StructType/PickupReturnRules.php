<?php

namespace Ammonkc\Otaehi\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for PickupReturnRules StructType
 * @subpackage Structs
 */
class PickupReturnRules extends AbstractStructBase
{
    /**
     * The EarliestPickup
     * @var \Ammonkc\Otaehi\StructType\EarliestPickup
     */
    public $EarliestPickup;
    /**
     * The LatestPickup
     * @var \Ammonkc\Otaehi\StructType\LatestPickup
     */
    public $LatestPickup;
    /**
     * The LatestReturn
     * @var \Ammonkc\Otaehi\StructType\LatestReturn
     */
    public $LatestReturn;
    /**
     * The EarliestReturn
     * @var \Ammonkc\Otaehi\StructType\EarliestReturn
     */
    public $EarliestReturn;
    /**
     * The DayOfWeek
     * @var UNKNOWN
     */
    public $DayOfWeek;
    /**
     * The MinimumKeep
     * @var string
     */
    public $MinimumKeep;
    /**
     * The MaximumKeep
     * @var string
     */
    public $MaximumKeep;
    /**
     * The MaximumRental
     * @var string
     */
    public $MaximumRental;
    /**
     * The OvernightInd
     * @var bool
     */
    public $OvernightInd;
    /**
     * The ReturnAllowedInd
     * @var bool
     */
    public $ReturnAllowedInd;
    /**
     * Constructor method for PickupReturnRules
     * @uses PickupReturnRules::setEarliestPickup()
     * @uses PickupReturnRules::setLatestPickup()
     * @uses PickupReturnRules::setLatestReturn()
     * @uses PickupReturnRules::setEarliestReturn()
     * @uses PickupReturnRules::setDayOfWeek()
     * @uses PickupReturnRules::setMinimumKeep()
     * @uses PickupReturnRules::setMaximumKeep()
     * @uses PickupReturnRules::setMaximumRental()
     * @uses PickupReturnRules::setOvernightInd()
     * @uses PickupReturnRules::setReturnAllowedInd()
     * @param \Ammonkc\Otaehi\StructType\EarliestPickup $earliestPickup
     * @param \Ammonkc\Otaehi\StructType\LatestPickup $latestPickup
     * @param \Ammonkc\Otaehi\StructType\LatestReturn $latestReturn
     * @param \Ammonkc\Otaehi\StructType\EarliestReturn $earliestReturn
     * @param UNKNOWN $dayOfWeek
     * @param string $minimumKeep
     * @param string $maximumKeep
     * @param string $maximumRental
     * @param bool $overnightInd
     * @param bool $returnAllowedInd
     */
    public function __construct(\Ammonkc\Otaehi\StructType\EarliestPickup $earliestPickup = null, \Ammonkc\Otaehi\StructType\LatestPickup $latestPickup = null, \Ammonkc\Otaehi\StructType\LatestReturn $latestReturn = null, \Ammonkc\Otaehi\StructType\EarliestReturn $earliestReturn = null, UNKNOWN $dayOfWeek = null, $minimumKeep = null, $maximumKeep = null, $maximumRental = null, $overnightInd = null, $returnAllowedInd = null)
    {
        $this
            ->setEarliestPickup($earliestPickup)
            ->setLatestPickup($latestPickup)
            ->setLatestReturn($latestReturn)
            ->setEarliestReturn($earliestReturn)
            ->setDayOfWeek($dayOfWeek)
            ->setMinimumKeep($minimumKeep)
            ->setMaximumKeep($maximumKeep)
            ->setMaximumRental($maximumRental)
            ->setOvernightInd($overnightInd)
            ->setReturnAllowedInd($returnAllowedInd);
    }
    /**
     * Get EarliestPickup value
     * @return \Ammonkc\Otaehi\StructType\EarliestPickup|null
     */
    public function getEarliestPickup()
    {
        return $this->EarliestPickup;
    }
    /**
     * Set EarliestPickup value
     * @param \Ammonkc\Otaehi\StructType\EarliestPickup $earliestPickup
     * @return \Ammonkc\Otaehi\StructType\PickupReturnRules
     */
    public function setEarliestPickup(\Ammonkc\Otaehi\StructType\EarliestPickup $earliestPickup = null)
    {
        $this->EarliestPickup = $earliestPickup;
        return $this;
    }
    /**
     * Get LatestPickup value
     * @return \Ammonkc\Otaehi\StructType\LatestPickup|null
     */
    public function getLatestPickup()
    {
        return $this->LatestPickup;
    }
    /**
     * Set LatestPickup value
     * @param \Ammonkc\Otaehi\StructType\LatestPickup $latestPickup
     * @return \Ammonkc\Otaehi\StructType\PickupReturnRules
     */
    public function setLatestPickup(\Ammonkc\Otaehi\StructType\LatestPickup $latestPickup = null)
    {
        $this->LatestPickup = $latestPickup;
        return $this;
    }
    /**
     * Get LatestReturn value
     * @return \Ammonkc\Otaehi\StructType\LatestReturn|null
     */
    public function getLatestReturn()
    {
        return $this->LatestReturn;
    }
    /**
     * Set LatestReturn value
     * @param \Ammonkc\Otaehi\StructType\LatestReturn $latestReturn
     * @return \Ammonkc\Otaehi\StructType\PickupReturnRules
     */
    public function setLatestReturn(\Ammonkc\Otaehi\StructType\LatestReturn $latestReturn = null)
    {
        $this->LatestReturn = $latestReturn;
        return $this;
    }
    /**
     * Get EarliestReturn value
     * @return \Ammonkc\Otaehi\StructType\EarliestReturn|null
     */
    public function getEarliestReturn()
    {
        return $this->EarliestReturn;
    }
    /**
     * Set EarliestReturn value
     * @param \Ammonkc\Otaehi\StructType\EarliestReturn $earliestReturn
     * @return \Ammonkc\Otaehi\StructType\PickupReturnRules
     */
    public function setEarliestReturn(\Ammonkc\Otaehi\StructType\EarliestReturn $earliestReturn = null)
    {
        $this->EarliestReturn = $earliestReturn;
        return $this;
    }
    /**
     * Get DayOfWeek value
     * @return UNKNOWN|null
     */
    public function getDayOfWeek()
    {
        return $this->DayOfWeek;
    }
    /**
     * Set DayOfWeek value
     * @param UNKNOWN $dayOfWeek
     * @return \Ammonkc\Otaehi\StructType\PickupReturnRules
     */
    public function setDayOfWeek(UNKNOWN $dayOfWeek = null)
    {
        $this->DayOfWeek = $dayOfWeek;
        return $this;
    }
    /**
     * Get MinimumKeep value
     * @return string|null
     */
    public function getMinimumKeep()
    {
        return $this->MinimumKeep;
    }
    /**
     * Set MinimumKeep value
     * @param string $minimumKeep
     * @return \Ammonkc\Otaehi\StructType\PickupReturnRules
     */
    public function setMinimumKeep($minimumKeep = null)
    {
        // validation for constraint: string
        if (!is_null($minimumKeep) && !is_string($minimumKeep)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($minimumKeep)), __LINE__);
        }
        $this->MinimumKeep = $minimumKeep;
        return $this;
    }
    /**
     * Get MaximumKeep value
     * @return string|null
     */
    public function getMaximumKeep()
    {
        return $this->MaximumKeep;
    }
    /**
     * Set MaximumKeep value
     * @param string $maximumKeep
     * @return \Ammonkc\Otaehi\StructType\PickupReturnRules
     */
    public function setMaximumKeep($maximumKeep = null)
    {
        // validation for constraint: string
        if (!is_null($maximumKeep) && !is_string($maximumKeep)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($maximumKeep)), __LINE__);
        }
        $this->MaximumKeep = $maximumKeep;
        return $this;
    }
    /**
     * Get MaximumRental value
     * @return string|null
     */
    public function getMaximumRental()
    {
        return $this->MaximumRental;
    }
    /**
     * Set MaximumRental value
     * @param string $maximumRental
     * @return \Ammonkc\Otaehi\StructType\PickupReturnRules
     */
    public function setMaximumRental($maximumRental = null)
    {
        // validation for constraint: string
        if (!is_null($maximumRental) && !is_string($maximumRental)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($maximumRental)), __LINE__);
        }
        $this->MaximumRental = $maximumRental;
        return $this;
    }
    /**
     * Get OvernightInd value
     * @return bool|null
     */
    public function getOvernightInd()
    {
        return $this->OvernightInd;
    }
    /**
     * Set OvernightInd value
     * @param bool $overnightInd
     * @return \Ammonkc\Otaehi\StructType\PickupReturnRules
     */
    public function setOvernightInd($overnightInd = null)
    {
        $this->OvernightInd = $overnightInd;
        return $this;
    }
    /**
     * Get ReturnAllowedInd value
     * @return bool|null
     */
    public function getReturnAllowedInd()
    {
        return $this->ReturnAllowedInd;
    }
    /**
     * Set ReturnAllowedInd value
     * @param bool $returnAllowedInd
     * @return \Ammonkc\Otaehi\StructType\PickupReturnRules
     */
    public function setReturnAllowedInd($returnAllowedInd = null)
    {
        $this->ReturnAllowedInd = $returnAllowedInd;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Ammonkc\Otaehi\StructType\PickupReturnRules
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
