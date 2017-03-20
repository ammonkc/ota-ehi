<?php

namespace Ammonkc\Otaehi\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ContactPersonType StructType
 * @subpackage Structs
 */
class ContactPersonType extends AbstractStructBase
{
    /**
     * The PersonName
     * @var mixed
     */
    public $PersonName;
    /**
     * The Telephone
     * @var \Ammonkc\Otaehi\StructType\Telephone
     */
    public $Telephone;
    /**
     * The Address
     * @var mixed
     */
    public $Address;
    /**
     * The Email
     * @var mixed
     */
    public $Email;
    /**
     * The URL
     * @var mixed
     */
    public $URL;
    /**
     * The CompanyName
     * @var mixed
     */
    public $CompanyName;
    /**
     * The EmployeeInfo
     * @var mixed
     */
    public $EmployeeInfo;
    /**
     * The TPA_Extensions
     * @var mixed
     */
    public $TPA_Extensions;
    /**
     * The ContactType
     * @var
     */
    public $ContactType;
    /**
     * The Relation
     * @var
     */
    public $Relation;
    /**
     * The EmergencyFlag
     * @var bool
     */
    public $EmergencyFlag;
    /**
     * The RPH
     * @var
     */
    public $RPH;
    /**
     * The CommunicationMethodCode
     * @var
     */
    public $CommunicationMethodCode;
    /**
     * The DocumentDistribMethodCode
     * @var
     */
    public $DocumentDistribMethodCode;
    /**
     * Constructor method for ContactPersonType
     * @uses ContactPersonType::setPersonName()
     * @uses ContactPersonType::setTelephone()
     * @uses ContactPersonType::setAddress()
     * @uses ContactPersonType::setEmail()
     * @uses ContactPersonType::setURL()
     * @uses ContactPersonType::setCompanyName()
     * @uses ContactPersonType::setEmployeeInfo()
     * @uses ContactPersonType::setTPA_Extensions()
     * @uses ContactPersonType::setContactType()
     * @uses ContactPersonType::setRelation()
     * @uses ContactPersonType::setEmergencyFlag()
     * @uses ContactPersonType::setRPH()
     * @uses ContactPersonType::setCommunicationMethodCode()
     * @uses ContactPersonType::setDocumentDistribMethodCode()
     * @param mixed $personName
     * @param \Ammonkc\Otaehi\StructType\Telephone $telephone
     * @param mixed $address
     * @param mixed $email
     * @param mixed $uRL
     * @param mixed $companyName
     * @param mixed $employeeInfo
     * @param mixed $tPA_Extensions
     * @param  $contactType
     * @param  $relation
     * @param bool $emergencyFlag
     * @param  $rPH
     * @param  $communicationMethodCode
     * @param  $documentDistribMethodCode
     */
    public function __construct($personName = null, \Ammonkc\Otaehi\StructType\Telephone $telephone = null, $address = null, $email = null, $uRL = null, $companyName = null, $employeeInfo = null, $tPA_Extensions = null,  $contactType = null,  $relation = null, $emergencyFlag = null,  $rPH = null,  $communicationMethodCode = null,  $documentDistribMethodCode = null)
    {
        $this
            ->setPersonName($personName)
            ->setTelephone($telephone)
            ->setAddress($address)
            ->setEmail($email)
            ->setURL($uRL)
            ->setCompanyName($companyName)
            ->setEmployeeInfo($employeeInfo)
            ->setTPA_Extensions($tPA_Extensions)
            ->setContactType($contactType)
            ->setRelation($relation)
            ->setEmergencyFlag($emergencyFlag)
            ->setRPH($rPH)
            ->setCommunicationMethodCode($communicationMethodCode)
            ->setDocumentDistribMethodCode($documentDistribMethodCode);
    }
    /**
     * Get PersonName value
     * @return mixed|null
     */
    public function getPersonName()
    {
        return $this->PersonName;
    }
    /**
     * Set PersonName value
     * @param mixed $personName
     * @return \Ammonkc\Otaehi\StructType\ContactPersonType
     */
    public function setPersonName($personName = null)
    {
        $this->PersonName = $personName;
        return $this;
    }
    /**
     * Get Telephone value
     * @return \Ammonkc\Otaehi\StructType\Telephone|null
     */
    public function getTelephone()
    {
        return $this->Telephone;
    }
    /**
     * Set Telephone value
     * @param \Ammonkc\Otaehi\StructType\Telephone $telephone
     * @return \Ammonkc\Otaehi\StructType\ContactPersonType
     */
    public function setTelephone(\Ammonkc\Otaehi\StructType\Telephone $telephone = null)
    {
        $this->Telephone = $telephone;
        return $this;
    }
    /**
     * Get Address value
     * @return mixed|null
     */
    public function getAddress()
    {
        return $this->Address;
    }
    /**
     * Set Address value
     * @param mixed $address
     * @return \Ammonkc\Otaehi\StructType\ContactPersonType
     */
    public function setAddress($address = null)
    {
        $this->Address = $address;
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
     * @return \Ammonkc\Otaehi\StructType\ContactPersonType
     */
    public function setEmail($email = null)
    {
        $this->Email = $email;
        return $this;
    }
    /**
     * Get URL value
     * @return mixed|null
     */
    public function getURL()
    {
        return $this->URL;
    }
    /**
     * Set URL value
     * @param mixed $uRL
     * @return \Ammonkc\Otaehi\StructType\ContactPersonType
     */
    public function setURL($uRL = null)
    {
        $this->URL = $uRL;
        return $this;
    }
    /**
     * Get CompanyName value
     * @return mixed|null
     */
    public function getCompanyName()
    {
        return $this->CompanyName;
    }
    /**
     * Set CompanyName value
     * @param mixed $companyName
     * @return \Ammonkc\Otaehi\StructType\ContactPersonType
     */
    public function setCompanyName($companyName = null)
    {
        $this->CompanyName = $companyName;
        return $this;
    }
    /**
     * Get EmployeeInfo value
     * @return mixed|null
     */
    public function getEmployeeInfo()
    {
        return $this->EmployeeInfo;
    }
    /**
     * Set EmployeeInfo value
     * @param mixed $employeeInfo
     * @return \Ammonkc\Otaehi\StructType\ContactPersonType
     */
    public function setEmployeeInfo($employeeInfo = null)
    {
        $this->EmployeeInfo = $employeeInfo;
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
     * @return \Ammonkc\Otaehi\StructType\ContactPersonType
     */
    public function setTPA_Extensions($tPA_Extensions = null)
    {
        $this->TPA_Extensions = $tPA_Extensions;
        return $this;
    }
    /**
     * Get ContactType value
     * @return |null
     */
    public function getContactType()
    {
        return $this->ContactType;
    }
    /**
     * Set ContactType value
     * @param  $contactType
     * @return \Ammonkc\Otaehi\StructType\ContactPersonType
     */
    public function setContactType( $contactType = null)
    {
        $this->ContactType = $contactType;
        return $this;
    }
    /**
     * Get Relation value
     * @return |null
     */
    public function getRelation()
    {
        return $this->Relation;
    }
    /**
     * Set Relation value
     * @param  $relation
     * @return \Ammonkc\Otaehi\StructType\ContactPersonType
     */
    public function setRelation( $relation = null)
    {
        $this->Relation = $relation;
        return $this;
    }
    /**
     * Get EmergencyFlag value
     * @return bool|null
     */
    public function getEmergencyFlag()
    {
        return $this->EmergencyFlag;
    }
    /**
     * Set EmergencyFlag value
     * @param bool $emergencyFlag
     * @return \Ammonkc\Otaehi\StructType\ContactPersonType
     */
    public function setEmergencyFlag($emergencyFlag = null)
    {
        $this->EmergencyFlag = $emergencyFlag;
        return $this;
    }
    /**
     * Get RPH value
     * @return |null
     */
    public function getRPH()
    {
        return $this->RPH;
    }
    /**
     * Set RPH value
     * @param  $rPH
     * @return \Ammonkc\Otaehi\StructType\ContactPersonType
     */
    public function setRPH( $rPH = null)
    {
        $this->RPH = $rPH;
        return $this;
    }
    /**
     * Get CommunicationMethodCode value
     * @return |null
     */
    public function getCommunicationMethodCode()
    {
        return $this->CommunicationMethodCode;
    }
    /**
     * Set CommunicationMethodCode value
     * @param  $communicationMethodCode
     * @return \Ammonkc\Otaehi\StructType\ContactPersonType
     */
    public function setCommunicationMethodCode( $communicationMethodCode = null)
    {
        $this->CommunicationMethodCode = $communicationMethodCode;
        return $this;
    }
    /**
     * Get DocumentDistribMethodCode value
     * @return |null
     */
    public function getDocumentDistribMethodCode()
    {
        return $this->DocumentDistribMethodCode;
    }
    /**
     * Set DocumentDistribMethodCode value
     * @param  $documentDistribMethodCode
     * @return \Ammonkc\Otaehi\StructType\ContactPersonType
     */
    public function setDocumentDistribMethodCode( $documentDistribMethodCode = null)
    {
        $this->DocumentDistribMethodCode = $documentDistribMethodCode;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Ammonkc\Otaehi\StructType\ContactPersonType
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
