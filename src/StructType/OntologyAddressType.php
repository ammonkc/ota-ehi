<?php

namespace ammonkc\otaehi\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for OntologyAddressType StructType
 * @subpackage Structs
 */
class OntologyAddressType extends AbstractStructBase
{
    /**
     * The Street
     * @var \ammonkc\otaehi\StructType\Street
     */
    public $Street;
    /**
     * The City
     * @var \ammonkc\otaehi\StructType\City
     */
    public $City;
    /**
     * The StateProvince
     * @var \ammonkc\otaehi\StructType\StateProvince
     */
    public $StateProvince;
    /**
     * The Postal
     * @var \ammonkc\otaehi\StructType\Postal
     */
    public $Postal;
    /**
     * The Country
     * @var \ammonkc\otaehi\StructType\Country
     */
    public $Country;
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
     * Constructor method for OntologyAddressType
     * @uses OntologyAddressType::setStreet()
     * @uses OntologyAddressType::setCity()
     * @uses OntologyAddressType::setStateProvince()
     * @uses OntologyAddressType::setPostal()
     * @uses OntologyAddressType::setCountry()
     * @uses OntologyAddressType::setOntologyExtension()
     * @uses OntologyAddressType::setPrivacyInd()
     * @param \ammonkc\otaehi\StructType\Street $street
     * @param \ammonkc\otaehi\StructType\City $city
     * @param \ammonkc\otaehi\StructType\StateProvince $stateProvince
     * @param \ammonkc\otaehi\StructType\Postal $postal
     * @param \ammonkc\otaehi\StructType\Country $country
     * @param mixed $ontologyExtension
     * @param bool $privacyInd
     */
    public function __construct(\ammonkc\otaehi\StructType\Street $street = null, \ammonkc\otaehi\StructType\City $city = null, \ammonkc\otaehi\StructType\StateProvince $stateProvince = null, \ammonkc\otaehi\StructType\Postal $postal = null, \ammonkc\otaehi\StructType\Country $country = null, $ontologyExtension = null, $privacyInd = null)
    {
        $this
            ->setStreet($street)
            ->setCity($city)
            ->setStateProvince($stateProvince)
            ->setPostal($postal)
            ->setCountry($country)
            ->setOntologyExtension($ontologyExtension)
            ->setPrivacyInd($privacyInd);
    }
    /**
     * Get Street value
     * @return \ammonkc\otaehi\StructType\Street|null
     */
    public function getStreet()
    {
        return $this->Street;
    }
    /**
     * Set Street value
     * @param \ammonkc\otaehi\StructType\Street $street
     * @return \ammonkc\otaehi\StructType\OntologyAddressType
     */
    public function setStreet(\ammonkc\otaehi\StructType\Street $street = null)
    {
        $this->Street = $street;
        return $this;
    }
    /**
     * Get City value
     * @return \ammonkc\otaehi\StructType\City|null
     */
    public function getCity()
    {
        return $this->City;
    }
    /**
     * Set City value
     * @param \ammonkc\otaehi\StructType\City $city
     * @return \ammonkc\otaehi\StructType\OntologyAddressType
     */
    public function setCity(\ammonkc\otaehi\StructType\City $city = null)
    {
        $this->City = $city;
        return $this;
    }
    /**
     * Get StateProvince value
     * @return \ammonkc\otaehi\StructType\StateProvince|null
     */
    public function getStateProvince()
    {
        return $this->StateProvince;
    }
    /**
     * Set StateProvince value
     * @param \ammonkc\otaehi\StructType\StateProvince $stateProvince
     * @return \ammonkc\otaehi\StructType\OntologyAddressType
     */
    public function setStateProvince(\ammonkc\otaehi\StructType\StateProvince $stateProvince = null)
    {
        $this->StateProvince = $stateProvince;
        return $this;
    }
    /**
     * Get Postal value
     * @return \ammonkc\otaehi\StructType\Postal|null
     */
    public function getPostal()
    {
        return $this->Postal;
    }
    /**
     * Set Postal value
     * @param \ammonkc\otaehi\StructType\Postal $postal
     * @return \ammonkc\otaehi\StructType\OntologyAddressType
     */
    public function setPostal(\ammonkc\otaehi\StructType\Postal $postal = null)
    {
        $this->Postal = $postal;
        return $this;
    }
    /**
     * Get Country value
     * @return \ammonkc\otaehi\StructType\Country|null
     */
    public function getCountry()
    {
        return $this->Country;
    }
    /**
     * Set Country value
     * @param \ammonkc\otaehi\StructType\Country $country
     * @return \ammonkc\otaehi\StructType\OntologyAddressType
     */
    public function setCountry(\ammonkc\otaehi\StructType\Country $country = null)
    {
        $this->Country = $country;
        return $this;
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
     * @return \ammonkc\otaehi\StructType\OntologyAddressType
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
     * @return \ammonkc\otaehi\StructType\OntologyAddressType
     */
    public function setPrivacyInd($privacyInd = null)
    {
        $this->PrivacyInd = $privacyInd;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \ammonkc\otaehi\StructType\OntologyAddressType
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
