<?php

namespace Ammonkc\Otaehi\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for MemberInfo StructType
 * @subpackage Structs
 */
class MemberInfo extends AbstractStructBase
{
    /**
     * The OntologyExtension
     * @var mixed
     */
    public $OntologyExtension;
    /**
     * The PrivacyInd
     * @var bool
     */
    public $PrivacyInd;
    /**
     * The ID
     * @var string
     */
    public $ID;
    /**
     * The SignupDate
     * @var string
     */
    public $SignupDate;
    /**
     * The OntologyRefID
     * @var string
     */
    public $OntologyRefID;
    /**
     * Constructor method for MemberInfo
     * @uses MemberInfo::setOntologyExtension()
     * @uses MemberInfo::setPrivacyInd()
     * @uses MemberInfo::setID()
     * @uses MemberInfo::setSignupDate()
     * @uses MemberInfo::setOntologyRefID()
     * @param mixed $ontologyExtension
     * @param bool $privacyInd
     * @param string $iD
     * @param string $signupDate
     * @param string $ontologyRefID
     */
    public function __construct($ontologyExtension = null, $privacyInd = null, $iD = null, $signupDate = null, $ontologyRefID = null)
    {
        $this
            ->setOntologyExtension($ontologyExtension)
            ->setPrivacyInd($privacyInd)
            ->setID($iD)
            ->setSignupDate($signupDate)
            ->setOntologyRefID($ontologyRefID);
    }
    /**
     * Get OntologyExtension value
     * @return mixed|null
     */
    public function getOntologyExtension()
    {
        return $this->OntologyExtension;
    }
    /**
     * Set OntologyExtension value
     * @param mixed $ontologyExtension
     * @return \Ammonkc\Otaehi\StructType\MemberInfo
     */
    public function setOntologyExtension($ontologyExtension = null)
    {
        $this->OntologyExtension = $ontologyExtension;
        return $this;
    }
    /**
     * Get PrivacyInd value
     * @return bool|null
     */
    public function getPrivacyInd()
    {
        return $this->PrivacyInd;
    }
    /**
     * Set PrivacyInd value
     * @param bool $privacyInd
     * @return \Ammonkc\Otaehi\StructType\MemberInfo
     */
    public function setPrivacyInd($privacyInd = null)
    {
        $this->PrivacyInd = $privacyInd;
        return $this;
    }
    /**
     * Get ID value
     * @return string|null
     */
    public function getID()
    {
        return $this->ID;
    }
    /**
     * Set ID value
     * @param string $iD
     * @return \Ammonkc\Otaehi\StructType\MemberInfo
     */
    public function setID($iD = null)
    {
        // validation for constraint: string
        if (!is_null($iD) && !is_string($iD)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($iD)), __LINE__);
        }
        $this->ID = $iD;
        return $this;
    }
    /**
     * Get SignupDate value
     * @return string|null
     */
    public function getSignupDate()
    {
        return $this->SignupDate;
    }
    /**
     * Set SignupDate value
     * @param string $signupDate
     * @return \Ammonkc\Otaehi\StructType\MemberInfo
     */
    public function setSignupDate($signupDate = null)
    {
        // validation for constraint: string
        if (!is_null($signupDate) && !is_string($signupDate)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($signupDate)), __LINE__);
        }
        $this->SignupDate = $signupDate;
        return $this;
    }
    /**
     * Get OntologyRefID value
     * @return string|null
     */
    public function getOntologyRefID()
    {
        return $this->OntologyRefID;
    }
    /**
     * Set OntologyRefID value
     * @param string $ontologyRefID
     * @return \Ammonkc\Otaehi\StructType\MemberInfo
     */
    public function setOntologyRefID($ontologyRefID = null)
    {
        // validation for constraint: string
        if (!is_null($ontologyRefID) && !is_string($ontologyRefID)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($ontologyRefID)), __LINE__);
        }
        $this->OntologyRefID = $ontologyRefID;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Ammonkc\Otaehi\StructType\MemberInfo
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
