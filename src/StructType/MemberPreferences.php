<?php

namespace Ammonkc\Otaehi\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for MemberPreferences StructType
 * @subpackage Structs
 */
class MemberPreferences extends AbstractStructBase
{
    /**
     * The AdditionalReward
     * @var \Ammonkc\Otaehi\StructType\AdditionalReward
     */
    public $AdditionalReward;
    /**
     * The Offer
     * @var \Ammonkc\Otaehi\StructType\Offer
     */
    public $Offer;
    /**
     * The Awareness
     * @var
     */
    public $Awareness;
    /**
     * The AwardsPreference
     * @var string
     */
    public $AwardsPreference;
    /**
     * Constructor method for MemberPreferences
     * @uses MemberPreferences::setAdditionalReward()
     * @uses MemberPreferences::setOffer()
     * @uses MemberPreferences::setAwareness()
     * @uses MemberPreferences::setAwardsPreference()
     * @param \Ammonkc\Otaehi\StructType\AdditionalReward $additionalReward
     * @param \Ammonkc\Otaehi\StructType\Offer $offer
     * @param  $awareness
     * @param string $awardsPreference
     */
    public function __construct(\Ammonkc\Otaehi\StructType\AdditionalReward $additionalReward = null, \Ammonkc\Otaehi\StructType\Offer $offer = null,  $awareness = null, $awardsPreference = null)
    {
        $this
            ->setAdditionalReward($additionalReward)
            ->setOffer($offer)
            ->setAwareness($awareness)
            ->setAwardsPreference($awardsPreference);
    }
    /**
     * Get AdditionalReward value
     * @return \Ammonkc\Otaehi\StructType\AdditionalReward|null
     */
    public function getAdditionalReward()
    {
        return $this->AdditionalReward;
    }
    /**
     * Set AdditionalReward value
     * @param \Ammonkc\Otaehi\StructType\AdditionalReward $additionalReward
     * @return \Ammonkc\Otaehi\StructType\MemberPreferences
     */
    public function setAdditionalReward(\Ammonkc\Otaehi\StructType\AdditionalReward $additionalReward = null)
    {
        $this->AdditionalReward = $additionalReward;
        return $this;
    }
    /**
     * Get Offer value
     * @return \Ammonkc\Otaehi\StructType\Offer|null
     */
    public function getOffer()
    {
        return $this->Offer;
    }
    /**
     * Set Offer value
     * @param \Ammonkc\Otaehi\StructType\Offer $offer
     * @return \Ammonkc\Otaehi\StructType\MemberPreferences
     */
    public function setOffer(\Ammonkc\Otaehi\StructType\Offer $offer = null)
    {
        $this->Offer = $offer;
        return $this;
    }
    /**
     * Get Awareness value
     * @return |null
     */
    public function getAwareness()
    {
        return $this->Awareness;
    }
    /**
     * Set Awareness value
     * @param  $awareness
     * @return \Ammonkc\Otaehi\StructType\MemberPreferences
     */
    public function setAwareness( $awareness = null)
    {
        $this->Awareness = $awareness;
        return $this;
    }
    /**
     * Get AwardsPreference value
     * @return string|null
     */
    public function getAwardsPreference()
    {
        return $this->AwardsPreference;
    }
    /**
     * Set AwardsPreference value
     * @param string $awardsPreference
     * @return \Ammonkc\Otaehi\StructType\MemberPreferences
     */
    public function setAwardsPreference($awardsPreference = null)
    {
        // validation for constraint: string
        if (!is_null($awardsPreference) && !is_string($awardsPreference)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($awardsPreference)), __LINE__);
        }
        $this->AwardsPreference = $awardsPreference;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Ammonkc\Otaehi\StructType\MemberPreferences
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
