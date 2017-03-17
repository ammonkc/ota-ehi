<?php

namespace Ammonkc\Otaehi\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for OntologyAddressType StructType
 * @subpackage Structs
 */
class OntologyAddressType extends AbstractStructBase
{
    /**
     * The Street
     * @var \Ammonkc\Otaehi\StructType\Street
     */
    public $Street;
    /**
     * The City
     * @var \Ammonkc\Otaehi\StructType\City
     */
    public $City;
    /**
     * The StateProvince
     * @var \Ammonkc\Otaehi\StructType\StateProvince
     */
    public $StateProvince;
    /**
     * The Postal
     * @var \Ammonkc\Otaehi\StructType\Postal
     */
    public $Postal;
    /**
     * The Country
     * @var \Ammonkc\Otaehi\StructType\Country
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
     * @param \Ammonkc\Otaehi\StructType\Street $street
     * @param \Ammonkc\Otaehi\StructType\City $city
     * @param \Ammonkc\Otaehi\StructType\StateProvince $stateProvince
     * @param \Ammonkc\Otaehi\StructType\Postal $postal
     * @param \Ammonkc\Otaehi\StructType\Country $country
     * @param mixed $ontologyExtension
     * @param bool $privacyInd
     */
    public function __construct(\Ammonkc\Otaehi\StructType\Street $street = null, \Ammonkc\Otaehi\StructType\City $city = null, \Ammonkc\Otaehi\StructType\StateProvince $stateProvince = null, \Ammonkc\Otaehi\StructType\Postal $postal = null, \Ammonkc\Otaehi\StructType\Country $country = null, $ontologyExtension = null, $privacyInd = null)
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
     * @return \Ammonkc\Otaehi\StructType\Street|null
     */
    public function getStreet()
    {
        return $this->Street;
    }
    /**
     * Set Street value
     * @param \Ammonkc\Otaehi\StructType\Street $street
     * @return \Ammonkc\Otaehi\StructType\OntologyAddressType
     */
    public function setStreet(\Ammonkc\Otaehi\StructType\Street $street = null)
    {
        $this->Street = $street;
        return $this;
    }
    /**
     * Get City value
     * @return \Ammonkc\Otaehi\StructType\City|null
     */
    public function getCity()
    {
        return $this->City;
    }
    /**
     * Set City value
     * @param \Ammonkc\Otaehi\StructType\City $city
     * @return \Ammonkc\Otaehi\StructType\OntologyAddressType
     */
    public function setCity(\Ammonkc\Otaehi\StructType\City $city = null)
    {
        $this->City = $city;
        return $this;
    }
    /**
     * Get StateProvince value
     * @return \Ammonkc\Otaehi\StructType\StateProvince|null
     */
    public function getStateProvince()
    {
        return $this->StateProvince;
    }
    /**
     * Set StateProvince value
     * @param \Ammonkc\Otaehi\StructType\StateProvince $stateProvince
     * @return \Ammonkc\Otaehi\StructType\OntologyAddressType
     */
    public function setStateProvince(\Ammonkc\Otaehi\StructType\StateProvince $stateProvince = null)
    {
        $this->StateProvince = $stateProvince;
        return $this;
    }
    /**
     * Get Postal value
     * @return \Ammonkc\Otaehi\StructType\Postal|null
     */
    public function getPostal()
    {
        return $this->Postal;
    }
    /**
     * Set Postal value
     * @param \Ammonkc\Otaehi\StructType\Postal $postal
     * @return \Ammonkc\Otaehi\StructType\OntologyAddressType
     */
    public function setPostal(\Ammonkc\Otaehi\StructType\Postal $postal = null)
    {
        $this->Postal = $postal;
        return $this;
    }
    /**
     * Get Country value
     * @return \Ammonkc\Otaehi\StructType\Country|null
     */
    public function getCountry()
    {
        return $this->Country;
    }
    /**
     * Set Country value
     * @param \Ammonkc\Otaehi\StructType\Country $country
     * @return \Ammonkc\Otaehi\StructType\OntologyAddressType
     */
    public function setCountry(\Ammonkc\Otaehi\StructType\Country $country = null)
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
     * @return \Ammonkc\Otaehi\StructType\OntologyAddressType
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
     * @return \Ammonkc\Otaehi\StructType\OntologyAddressType
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
     * @return \Ammonkc\Otaehi\StructType\OntologyAddressType
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
