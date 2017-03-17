<?php

namespace Ammonkc\Otaehi\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for WrittenConfInstType StructType
 * @subpackage Structs
 */
class WrittenConfInstType extends AbstractStructBase
{
    /**
     * The SupplementalData
     * @var mixed
     */
    public $SupplementalData;
    /**
     * The Email
     * @var mixed
     */
    public $Email;
    /**
     * The TPA_Extensions
     * @var mixed
     */
    public $TPA_Extensions;
    /**
     * The LanguageID
     * @var string
     */
    public $LanguageID;
    /**
     * The AddresseeName
     * @var string
     */
    public $AddresseeName;
    /**
     * The Address
     * @var string
     */
    public $Address;
    /**
     * The Telephone
     * @var string
     */
    public $Telephone;
    /**
     * The ConfirmInd
     * @var bool
     */
    public $ConfirmInd;
    /**
     * Constructor method for WrittenConfInstType
     * @uses WrittenConfInstType::setSupplementalData()
     * @uses WrittenConfInstType::setEmail()
     * @uses WrittenConfInstType::setTPA_Extensions()
     * @uses WrittenConfInstType::setLanguageID()
     * @uses WrittenConfInstType::setAddresseeName()
     * @uses WrittenConfInstType::setAddress()
     * @uses WrittenConfInstType::setTelephone()
     * @uses WrittenConfInstType::setConfirmInd()
     * @param mixed $supplementalData
     * @param mixed $email
     * @param mixed $tPA_Extensions
     * @param string $languageID
     * @param string $addresseeName
     * @param string $address
     * @param string $telephone
     * @param bool $confirmInd
     */
    public function __construct($supplementalData = null, $email = null, $tPA_Extensions = null, $languageID = null, $addresseeName = null, $address = null, $telephone = null, $confirmInd = null)
    {
        $this
            ->setSupplementalData($supplementalData)
            ->setEmail($email)
            ->setTPA_Extensions($tPA_Extensions)
            ->setLanguageID($languageID)
            ->setAddresseeName($addresseeName)
            ->setAddress($address)
            ->setTelephone($telephone)
            ->setConfirmInd($confirmInd);
    }
    /**
     * Get SupplementalData value
     * @return mixed|null
     */
    public function getSupplementalData()
    {
        return $this->SupplementalData;
    }
    /**
     * Set SupplementalData value
     * @param mixed $supplementalData
     * @return \Ammonkc\Otaehi\StructType\WrittenConfInstType
     */
    public function setSupplementalData($supplementalData = null)
    {
        $this->SupplementalData = $supplementalData;
        return $this;
    }
    /**
     * Get Email value
     * @return mixed|null
     */
    public function getEmail()
    {
        return $this->Email;
    }
    /**
     * Set Email value
     * @param mixed $email
     * @return \Ammonkc\Otaehi\StructType\WrittenConfInstType
     */
    public function setEmail($email = null)
    {
        $this->Email = $email;
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
     * @return \Ammonkc\Otaehi\StructType\WrittenConfInstType
     */
    public function setTPA_Extensions($tPA_Extensions = null)
    {
        $this->TPA_Extensions = $tPA_Extensions;
        return $this;
    }
    /**
     * Get LanguageID value
     * @return string|null
     */
    public function getLanguageID()
    {
        return $this->LanguageID;
    }
    /**
     * Set LanguageID value
     * @param string $languageID
     * @return \Ammonkc\Otaehi\StructType\WrittenConfInstType
     */
    public function setLanguageID($languageID = null)
    {
        // validation for constraint: string
        if (!is_null($languageID) && !is_string($languageID)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($languageID)), __LINE__);
        }
        $this->LanguageID = $languageID;
        return $this;
    }
    /**
     * Get AddresseeName value
     * @return string|null
     */
    public function getAddresseeName()
    {
        return $this->AddresseeName;
    }
    /**
     * Set AddresseeName value
     * @param string $addresseeName
     * @return \Ammonkc\Otaehi\StructType\WrittenConfInstType
     */
    public function setAddresseeName($addresseeName = null)
    {
        // validation for constraint: string
        if (!is_null($addresseeName) && !is_string($addresseeName)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($addresseeName)), __LINE__);
        }
        $this->AddresseeName = $addresseeName;
        return $this;
    }
    /**
     * Get Address value
     * @return string|null
     */
    public function getAddress()
    {
        return $this->Address;
    }
    /**
     * Set Address value
     * @param string $address
     * @return \Ammonkc\Otaehi\StructType\WrittenConfInstType
     */
    public function setAddress($address = null)
    {
        // validation for constraint: string
        if (!is_null($address) && !is_string($address)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($address)), __LINE__);
        }
        $this->Address = $address;
        return $this;
    }
    /**
     * Get Telephone value
     * @return string|null
     */
    public function getTelephone()
    {
        return $this->Telephone;
    }
    /**
     * Set Telephone value
     * @param string $telephone
     * @return \Ammonkc\Otaehi\StructType\WrittenConfInstType
     */
    public function setTelephone($telephone = null)
    {
        // validation for constraint: string
        if (!is_null($telephone) && !is_string($telephone)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($telephone)), __LINE__);
        }
        $this->Telephone = $telephone;
        return $this;
    }
    /**
     * Get ConfirmInd value
     * @return bool|null
     */
    public function getConfirmInd()
    {
        return $this->ConfirmInd;
    }
    /**
     * Set ConfirmInd value
     * @param bool $confirmInd
     * @return \Ammonkc\Otaehi\StructType\WrittenConfInstType
     */
    public function setConfirmInd($confirmInd = null)
    {
        $this->ConfirmInd = $confirmInd;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Ammonkc\Otaehi\StructType\WrittenConfInstType
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
