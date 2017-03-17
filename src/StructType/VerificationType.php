<?php

namespace ammonkc\otaehi\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for VerificationType StructType
 * @subpackage Structs
 */
class VerificationType extends AbstractStructBase
{
    /**
     * The PersonName
     * @var \ammonkc\otaehi\StructType\PersonName
     */
    public $PersonName;
    /**
     * The Email
     * @var mixed
     */
    public $Email;
    /**
     * The TelephoneInfo
     * @var \ammonkc\otaehi\StructType\TelephoneInfo
     */
    public $TelephoneInfo;
    /**
     * The PaymentCard
     * @var mixed
     */
    public $PaymentCard;
    /**
     * The AddressInfo
     * @var mixed
     */
    public $AddressInfo;
    /**
     * The CustLoyalty
     * @var \ammonkc\otaehi\StructType\CustLoyalty
     */
    public $CustLoyalty;
    /**
     * The Vendor
     * @var mixed
     */
    public $Vendor;
    /**
     * The ReservationTimeSpan
     * @var \ammonkc\otaehi\StructType\ReservationTimeSpan
     */
    public $ReservationTimeSpan;
    /**
     * The AssociatedQuantity
     * @var \ammonkc\otaehi\StructType\AssociatedQuantity
     */
    public $AssociatedQuantity;
    /**
     * The StartLocation
     * @var \ammonkc\otaehi\StructType\StartLocation
     */
    public $StartLocation;
    /**
     * The EndLocation
     * @var \ammonkc\otaehi\StructType\EndLocation
     */
    public $EndLocation;
    /**
     * The TPA_Extensions
     * @var mixed
     */
    public $TPA_Extensions;
    /**
     * Constructor method for VerificationType
     * @uses VerificationType::setPersonName()
     * @uses VerificationType::setEmail()
     * @uses VerificationType::setTelephoneInfo()
     * @uses VerificationType::setPaymentCard()
     * @uses VerificationType::setAddressInfo()
     * @uses VerificationType::setCustLoyalty()
     * @uses VerificationType::setVendor()
     * @uses VerificationType::setReservationTimeSpan()
     * @uses VerificationType::setAssociatedQuantity()
     * @uses VerificationType::setStartLocation()
     * @uses VerificationType::setEndLocation()
     * @uses VerificationType::setTPA_Extensions()
     * @param \ammonkc\otaehi\StructType\PersonName $personName
     * @param mixed $email
     * @param \ammonkc\otaehi\StructType\TelephoneInfo $telephoneInfo
     * @param mixed $paymentCard
     * @param mixed $addressInfo
     * @param \ammonkc\otaehi\StructType\CustLoyalty $custLoyalty
     * @param mixed $vendor
     * @param \ammonkc\otaehi\StructType\ReservationTimeSpan $reservationTimeSpan
     * @param \ammonkc\otaehi\StructType\AssociatedQuantity $associatedQuantity
     * @param \ammonkc\otaehi\StructType\StartLocation $startLocation
     * @param \ammonkc\otaehi\StructType\EndLocation $endLocation
     * @param mixed $tPA_Extensions
     */
    public function __construct(\ammonkc\otaehi\StructType\PersonName $personName = null, $email = null, \ammonkc\otaehi\StructType\TelephoneInfo $telephoneInfo = null, $paymentCard = null, $addressInfo = null, \ammonkc\otaehi\StructType\CustLoyalty $custLoyalty = null, $vendor = null, \ammonkc\otaehi\StructType\ReservationTimeSpan $reservationTimeSpan = null, \ammonkc\otaehi\StructType\AssociatedQuantity $associatedQuantity = null, \ammonkc\otaehi\StructType\StartLocation $startLocation = null, \ammonkc\otaehi\StructType\EndLocation $endLocation = null, $tPA_Extensions = null)
    {
        $this
            ->setPersonName($personName)
            ->setEmail($email)
            ->setTelephoneInfo($telephoneInfo)
            ->setPaymentCard($paymentCard)
            ->setAddressInfo($addressInfo)
            ->setCustLoyalty($custLoyalty)
            ->setVendor($vendor)
            ->setReservationTimeSpan($reservationTimeSpan)
            ->setAssociatedQuantity($associatedQuantity)
            ->setStartLocation($startLocation)
            ->setEndLocation($endLocation)
            ->setTPA_Extensions($tPA_Extensions);
    }
    /**
     * Get PersonName value
     * @return \ammonkc\otaehi\StructType\PersonName|null
     */
    public function getPersonName()
    {
        return $this->PersonName;
    }
    /**
     * Set PersonName value
     * @param \ammonkc\otaehi\StructType\PersonName $personName
     * @return \ammonkc\otaehi\StructType\VerificationType
     */
    public function setPersonName(\ammonkc\otaehi\StructType\PersonName $personName = null)
    {
        $this->PersonName = $personName;
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
     * @return \ammonkc\otaehi\StructType\VerificationType
     */
    public function setEmail($email = null)
    {
        $this->Email = $email;
        return $this;
    }
    /**
     * Get TelephoneInfo value
     * @return \ammonkc\otaehi\StructType\TelephoneInfo|null
     */
    public function getTelephoneInfo()
    {
        return $this->TelephoneInfo;
    }
    /**
     * Set TelephoneInfo value
     * @param \ammonkc\otaehi\StructType\TelephoneInfo $telephoneInfo
     * @return \ammonkc\otaehi\StructType\VerificationType
     */
    public function setTelephoneInfo(\ammonkc\otaehi\StructType\TelephoneInfo $telephoneInfo = null)
    {
        $this->TelephoneInfo = $telephoneInfo;
        return $this;
    }
    /**
     * Get PaymentCard value
     * @return mixed|null
     */
    public function getPaymentCard()
    {
        return $this->PaymentCard;
    }
    /**
     * Set PaymentCard value
     * @param mixed $paymentCard
     * @return \ammonkc\otaehi\StructType\VerificationType
     */
    public function setPaymentCard($paymentCard = null)
    {
        $this->PaymentCard = $paymentCard;
        return $this;
    }
    /**
     * Get AddressInfo value
     * @return mixed|null
     */
    public function getAddressInfo()
    {
        return $this->AddressInfo;
    }
    /**
     * Set AddressInfo value
     * @param mixed $addressInfo
     * @return \ammonkc\otaehi\StructType\VerificationType
     */
    public function setAddressInfo($addressInfo = null)
    {
        $this->AddressInfo = $addressInfo;
        return $this;
    }
    /**
     * Get CustLoyalty value
     * @return \ammonkc\otaehi\StructType\CustLoyalty|null
     */
    public function getCustLoyalty()
    {
        return $this->CustLoyalty;
    }
    /**
     * Set CustLoyalty value
     * @param \ammonkc\otaehi\StructType\CustLoyalty $custLoyalty
     * @return \ammonkc\otaehi\StructType\VerificationType
     */
    public function setCustLoyalty(\ammonkc\otaehi\StructType\CustLoyalty $custLoyalty = null)
    {
        $this->CustLoyalty = $custLoyalty;
        return $this;
    }
    /**
     * Get Vendor value
     * @return mixed|null
     */
    public function getVendor()
    {
        return $this->Vendor;
    }
    /**
     * Set Vendor value
     * @param mixed $vendor
     * @return \ammonkc\otaehi\StructType\VerificationType
     */
    public function setVendor($vendor = null)
    {
        $this->Vendor = $vendor;
        return $this;
    }
    /**
     * Get ReservationTimeSpan value
     * @return \ammonkc\otaehi\StructType\ReservationTimeSpan|null
     */
    public function getReservationTimeSpan()
    {
        return $this->ReservationTimeSpan;
    }
    /**
     * Set ReservationTimeSpan value
     * @param \ammonkc\otaehi\StructType\ReservationTimeSpan $reservationTimeSpan
     * @return \ammonkc\otaehi\StructType\VerificationType
     */
    public function setReservationTimeSpan(\ammonkc\otaehi\StructType\ReservationTimeSpan $reservationTimeSpan = null)
    {
        $this->ReservationTimeSpan = $reservationTimeSpan;
        return $this;
    }
    /**
     * Get AssociatedQuantity value
     * @return \ammonkc\otaehi\StructType\AssociatedQuantity|null
     */
    public function getAssociatedQuantity()
    {
        return $this->AssociatedQuantity;
    }
    /**
     * Set AssociatedQuantity value
     * @param \ammonkc\otaehi\StructType\AssociatedQuantity $associatedQuantity
     * @return \ammonkc\otaehi\StructType\VerificationType
     */
    public function setAssociatedQuantity(\ammonkc\otaehi\StructType\AssociatedQuantity $associatedQuantity = null)
    {
        $this->AssociatedQuantity = $associatedQuantity;
        return $this;
    }
    /**
     * Get StartLocation value
     * @return \ammonkc\otaehi\StructType\StartLocation|null
     */
    public function getStartLocation()
    {
        return $this->StartLocation;
    }
    /**
     * Set StartLocation value
     * @param \ammonkc\otaehi\StructType\StartLocation $startLocation
     * @return \ammonkc\otaehi\StructType\VerificationType
     */
    public function setStartLocation(\ammonkc\otaehi\StructType\StartLocation $startLocation = null)
    {
        $this->StartLocation = $startLocation;
        return $this;
    }
    /**
     * Get EndLocation value
     * @return \ammonkc\otaehi\StructType\EndLocation|null
     */
    public function getEndLocation()
    {
        return $this->EndLocation;
    }
    /**
     * Set EndLocation value
     * @param \ammonkc\otaehi\StructType\EndLocation $endLocation
     * @return \ammonkc\otaehi\StructType\VerificationType
     */
    public function setEndLocation(\ammonkc\otaehi\StructType\EndLocation $endLocation = null)
    {
        $this->EndLocation = $endLocation;
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
     * @return \ammonkc\otaehi\StructType\VerificationType
     */
    public function setTPA_Extensions($tPA_Extensions = null)
    {
        $this->TPA_Extensions = $tPA_Extensions;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \ammonkc\otaehi\StructType\VerificationType
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
