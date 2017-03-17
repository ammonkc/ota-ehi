<?php

namespace Ammonkc\Otaehi\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for VerificationType StructType
 * @subpackage Structs
 */
class VerificationType extends AbstractStructBase
{
    /**
     * The PersonName
     * @var \Ammonkc\Otaehi\StructType\PersonName
     */
    public $PersonName;
    /**
     * The Email
     * @var mixed
     */
    public $Email;
    /**
     * The TelephoneInfo
     * @var \Ammonkc\Otaehi\StructType\TelephoneInfo
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
     * @var \Ammonkc\Otaehi\StructType\CustLoyalty
     */
    public $CustLoyalty;
    /**
     * The Vendor
     * @var mixed
     */
    public $Vendor;
    /**
     * The ReservationTimeSpan
     * @var \Ammonkc\Otaehi\StructType\ReservationTimeSpan
     */
    public $ReservationTimeSpan;
    /**
     * The AssociatedQuantity
     * @var \Ammonkc\Otaehi\StructType\AssociatedQuantity
     */
    public $AssociatedQuantity;
    /**
     * The StartLocation
     * @var \Ammonkc\Otaehi\StructType\StartLocation
     */
    public $StartLocation;
    /**
     * The EndLocation
     * @var \Ammonkc\Otaehi\StructType\EndLocation
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
     * @param \Ammonkc\Otaehi\StructType\PersonName $personName
     * @param mixed $email
     * @param \Ammonkc\Otaehi\StructType\TelephoneInfo $telephoneInfo
     * @param mixed $paymentCard
     * @param mixed $addressInfo
     * @param \Ammonkc\Otaehi\StructType\CustLoyalty $custLoyalty
     * @param mixed $vendor
     * @param \Ammonkc\Otaehi\StructType\ReservationTimeSpan $reservationTimeSpan
     * @param \Ammonkc\Otaehi\StructType\AssociatedQuantity $associatedQuantity
     * @param \Ammonkc\Otaehi\StructType\StartLocation $startLocation
     * @param \Ammonkc\Otaehi\StructType\EndLocation $endLocation
     * @param mixed $tPA_Extensions
     */
    public function __construct(\Ammonkc\Otaehi\StructType\PersonName $personName = null, $email = null, \Ammonkc\Otaehi\StructType\TelephoneInfo $telephoneInfo = null, $paymentCard = null, $addressInfo = null, \Ammonkc\Otaehi\StructType\CustLoyalty $custLoyalty = null, $vendor = null, \Ammonkc\Otaehi\StructType\ReservationTimeSpan $reservationTimeSpan = null, \Ammonkc\Otaehi\StructType\AssociatedQuantity $associatedQuantity = null, \Ammonkc\Otaehi\StructType\StartLocation $startLocation = null, \Ammonkc\Otaehi\StructType\EndLocation $endLocation = null, $tPA_Extensions = null)
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
     * @return \Ammonkc\Otaehi\StructType\PersonName|null
     */
    public function getPersonName()
    {
        return $this->PersonName;
    }
    /**
     * Set PersonName value
     * @param \Ammonkc\Otaehi\StructType\PersonName $personName
     * @return \Ammonkc\Otaehi\StructType\VerificationType
     */
    public function setPersonName(\Ammonkc\Otaehi\StructType\PersonName $personName = null)
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
     * @return \Ammonkc\Otaehi\StructType\VerificationType
     */
    public function setEmail($email = null)
    {
        $this->Email = $email;
        return $this;
    }
    /**
     * Get TelephoneInfo value
     * @return \Ammonkc\Otaehi\StructType\TelephoneInfo|null
     */
    public function getTelephoneInfo()
    {
        return $this->TelephoneInfo;
    }
    /**
     * Set TelephoneInfo value
     * @param \Ammonkc\Otaehi\StructType\TelephoneInfo $telephoneInfo
     * @return \Ammonkc\Otaehi\StructType\VerificationType
     */
    public function setTelephoneInfo(\Ammonkc\Otaehi\StructType\TelephoneInfo $telephoneInfo = null)
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
     * @return \Ammonkc\Otaehi\StructType\VerificationType
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
     * @return \Ammonkc\Otaehi\StructType\VerificationType
     */
    public function setAddressInfo($addressInfo = null)
    {
        $this->AddressInfo = $addressInfo;
        return $this;
    }
    /**
     * Get CustLoyalty value
     * @return \Ammonkc\Otaehi\StructType\CustLoyalty|null
     */
    public function getCustLoyalty()
    {
        return $this->CustLoyalty;
    }
    /**
     * Set CustLoyalty value
     * @param \Ammonkc\Otaehi\StructType\CustLoyalty $custLoyalty
     * @return \Ammonkc\Otaehi\StructType\VerificationType
     */
    public function setCustLoyalty(\Ammonkc\Otaehi\StructType\CustLoyalty $custLoyalty = null)
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
     * @return \Ammonkc\Otaehi\StructType\VerificationType
     */
    public function setVendor($vendor = null)
    {
        $this->Vendor = $vendor;
        return $this;
    }
    /**
     * Get ReservationTimeSpan value
     * @return \Ammonkc\Otaehi\StructType\ReservationTimeSpan|null
     */
    public function getReservationTimeSpan()
    {
        return $this->ReservationTimeSpan;
    }
    /**
     * Set ReservationTimeSpan value
     * @param \Ammonkc\Otaehi\StructType\ReservationTimeSpan $reservationTimeSpan
     * @return \Ammonkc\Otaehi\StructType\VerificationType
     */
    public function setReservationTimeSpan(\Ammonkc\Otaehi\StructType\ReservationTimeSpan $reservationTimeSpan = null)
    {
        $this->ReservationTimeSpan = $reservationTimeSpan;
        return $this;
    }
    /**
     * Get AssociatedQuantity value
     * @return \Ammonkc\Otaehi\StructType\AssociatedQuantity|null
     */
    public function getAssociatedQuantity()
    {
        return $this->AssociatedQuantity;
    }
    /**
     * Set AssociatedQuantity value
     * @param \Ammonkc\Otaehi\StructType\AssociatedQuantity $associatedQuantity
     * @return \Ammonkc\Otaehi\StructType\VerificationType
     */
    public function setAssociatedQuantity(\Ammonkc\Otaehi\StructType\AssociatedQuantity $associatedQuantity = null)
    {
        $this->AssociatedQuantity = $associatedQuantity;
        return $this;
    }
    /**
     * Get StartLocation value
     * @return \Ammonkc\Otaehi\StructType\StartLocation|null
     */
    public function getStartLocation()
    {
        return $this->StartLocation;
    }
    /**
     * Set StartLocation value
     * @param \Ammonkc\Otaehi\StructType\StartLocation $startLocation
     * @return \Ammonkc\Otaehi\StructType\VerificationType
     */
    public function setStartLocation(\Ammonkc\Otaehi\StructType\StartLocation $startLocation = null)
    {
        $this->StartLocation = $startLocation;
        return $this;
    }
    /**
     * Get EndLocation value
     * @return \Ammonkc\Otaehi\StructType\EndLocation|null
     */
    public function getEndLocation()
    {
        return $this->EndLocation;
    }
    /**
     * Set EndLocation value
     * @param \Ammonkc\Otaehi\StructType\EndLocation $endLocation
     * @return \Ammonkc\Otaehi\StructType\VerificationType
     */
    public function setEndLocation(\Ammonkc\Otaehi\StructType\EndLocation $endLocation = null)
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
     * @return \Ammonkc\Otaehi\StructType\VerificationType
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
     * @return \Ammonkc\Otaehi\StructType\VerificationType
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
