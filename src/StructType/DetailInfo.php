<?php

namespace Ammonkc\Otaehi\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for DetailInfo StructType
 * @subpackage Structs
 */
class DetailInfo extends AbstractStructBase
{
    /**
     * The Identification
     * @var \Ammonkc\Otaehi\StructType\Identification
     */
    public $Identification;
    /**
     * The CustomerValue
     * @var mixed
     */
    public $CustomerValue;
    /**
     * The ServiceAnimalInd
     * @var bool
     */
    public $ServiceAnimalInd;
    /**
     * The DisabledInd
     * @var bool
     */
    public $DisabledInd;
    /**
     * The FemaleInd
     * @var bool
     */
    public $FemaleInd;
    /**
     * The MaleInd
     * @var bool
     */
    public $MaleInd;
    /**
     * Constructor method for DetailInfo
     * @uses DetailInfo::setIdentification()
     * @uses DetailInfo::setCustomerValue()
     * @uses DetailInfo::setServiceAnimalInd()
     * @uses DetailInfo::setDisabledInd()
     * @uses DetailInfo::setFemaleInd()
     * @uses DetailInfo::setMaleInd()
     * @param \Ammonkc\Otaehi\StructType\Identification $identification
     * @param mixed $customerValue
     * @param bool $serviceAnimalInd
     * @param bool $disabledInd
     * @param bool $femaleInd
     * @param bool $maleInd
     */
    public function __construct(\Ammonkc\Otaehi\StructType\Identification $identification = null, $customerValue = null, $serviceAnimalInd = null, $disabledInd = null, $femaleInd = null, $maleInd = null)
    {
        $this
            ->setIdentification($identification)
            ->setCustomerValue($customerValue)
            ->setServiceAnimalInd($serviceAnimalInd)
            ->setDisabledInd($disabledInd)
            ->setFemaleInd($femaleInd)
            ->setMaleInd($maleInd);
    }
    /**
     * Get Identification value
     * @return \Ammonkc\Otaehi\StructType\Identification|null
     */
    public function getIdentification()
    {
        return $this->Identification;
    }
    /**
     * Set Identification value
     * @param \Ammonkc\Otaehi\StructType\Identification $identification
     * @return \Ammonkc\Otaehi\StructType\DetailInfo
     */
    public function setIdentification(\Ammonkc\Otaehi\StructType\Identification $identification = null)
    {
        $this->Identification = $identification;
        return $this;
    }
    /**
     * Get CustomerValue value
     * @return mixed|null
     */
    public function getCustomerValue()
    {
        return $this->CustomerValue;
    }
    /**
     * Set CustomerValue value
     * @param mixed $customerValue
     * @return \Ammonkc\Otaehi\StructType\DetailInfo
     */
    public function setCustomerValue($customerValue = null)
    {
        $this->CustomerValue = $customerValue;
        return $this;
    }
    /**
     * Get ServiceAnimalInd value
     * @return bool|null
     */
    public function getServiceAnimalInd()
    {
        return $this->ServiceAnimalInd;
    }
    /**
     * Set ServiceAnimalInd value
     * @param bool $serviceAnimalInd
     * @return \Ammonkc\Otaehi\StructType\DetailInfo
     */
    public function setServiceAnimalInd($serviceAnimalInd = null)
    {
        $this->ServiceAnimalInd = $serviceAnimalInd;
        return $this;
    }
    /**
     * Get DisabledInd value
     * @return bool|null
     */
    public function getDisabledInd()
    {
        return $this->DisabledInd;
    }
    /**
     * Set DisabledInd value
     * @param bool $disabledInd
     * @return \Ammonkc\Otaehi\StructType\DetailInfo
     */
    public function setDisabledInd($disabledInd = null)
    {
        $this->DisabledInd = $disabledInd;
        return $this;
    }
    /**
     * Get FemaleInd value
     * @return bool|null
     */
    public function getFemaleInd()
    {
        return $this->FemaleInd;
    }
    /**
     * Set FemaleInd value
     * @param bool $femaleInd
     * @return \Ammonkc\Otaehi\StructType\DetailInfo
     */
    public function setFemaleInd($femaleInd = null)
    {
        $this->FemaleInd = $femaleInd;
        return $this;
    }
    /**
     * Get MaleInd value
     * @return bool|null
     */
    public function getMaleInd()
    {
        return $this->MaleInd;
    }
    /**
     * Set MaleInd value
     * @param bool $maleInd
     * @return \Ammonkc\Otaehi\StructType\DetailInfo
     */
    public function setMaleInd($maleInd = null)
    {
        $this->MaleInd = $maleInd;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Ammonkc\Otaehi\StructType\DetailInfo
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
