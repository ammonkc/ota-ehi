<?php

namespace ammonkc\otaehi\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for DirectBillType StructType
 * @subpackage Structs
 */
class DirectBillType extends AbstractStructBase
{
    /**
     * The CompanyName
     * @var \ammonkc\otaehi\StructType\CompanyName
     */
    public $CompanyName;
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
     * The Telephone
     * @var \ammonkc\otaehi\StructType\Telephone
     */
    public $Telephone;
    /**
     * The DirectBill_ID
     * @var UNKNOWN
     */
    public $DirectBill_ID;
    /**
     * The BillingNumber
     * @var UNKNOWN
     */
    public $BillingNumber;
    /**
     * Constructor method for DirectBillType
     * @uses DirectBillType::setCompanyName()
     * @uses DirectBillType::setAddress()
     * @uses DirectBillType::setEmail()
     * @uses DirectBillType::setTelephone()
     * @uses DirectBillType::setDirectBill_ID()
     * @uses DirectBillType::setBillingNumber()
     * @param \ammonkc\otaehi\StructType\CompanyName $companyName
     * @param mixed $address
     * @param mixed $email
     * @param \ammonkc\otaehi\StructType\Telephone $telephone
     * @param UNKNOWN $directBill_ID
     * @param UNKNOWN $billingNumber
     */
    public function __construct(\ammonkc\otaehi\StructType\CompanyName $companyName = null, $address = null, $email = null, \ammonkc\otaehi\StructType\Telephone $telephone = null, UNKNOWN $directBill_ID = null, UNKNOWN $billingNumber = null)
    {
        $this
            ->setCompanyName($companyName)
            ->setAddress($address)
            ->setEmail($email)
            ->setTelephone($telephone)
            ->setDirectBill_ID($directBill_ID)
            ->setBillingNumber($billingNumber);
    }
    /**
     * Get CompanyName value
     * @return \ammonkc\otaehi\StructType\CompanyName|null
     */
    public function getCompanyName()
    {
        return $this->CompanyName;
    }
    /**
     * Set CompanyName value
     * @param \ammonkc\otaehi\StructType\CompanyName $companyName
     * @return \ammonkc\otaehi\StructType\DirectBillType
     */
    public function setCompanyName(\ammonkc\otaehi\StructType\CompanyName $companyName = null)
    {
        $this->CompanyName = $companyName;
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
     * @return \ammonkc\otaehi\StructType\DirectBillType
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
     * @return \ammonkc\otaehi\StructType\DirectBillType
     */
    public function setEmail($email = null)
    {
        $this->Email = $email;
        return $this;
    }
    /**
     * Get Telephone value
     * @return \ammonkc\otaehi\StructType\Telephone|null
     */
    public function getTelephone()
    {
        return $this->Telephone;
    }
    /**
     * Set Telephone value
     * @param \ammonkc\otaehi\StructType\Telephone $telephone
     * @return \ammonkc\otaehi\StructType\DirectBillType
     */
    public function setTelephone(\ammonkc\otaehi\StructType\Telephone $telephone = null)
    {
        $this->Telephone = $telephone;
        return $this;
    }
    /**
     * Get DirectBill_ID value
     * @return UNKNOWN|null
     */
    public function getDirectBill_ID()
    {
        return $this->DirectBill_ID;
    }
    /**
     * Set DirectBill_ID value
     * @param UNKNOWN $directBill_ID
     * @return \ammonkc\otaehi\StructType\DirectBillType
     */
    public function setDirectBill_ID(UNKNOWN $directBill_ID = null)
    {
        $this->DirectBill_ID = $directBill_ID;
        return $this;
    }
    /**
     * Get BillingNumber value
     * @return UNKNOWN|null
     */
    public function getBillingNumber()
    {
        return $this->BillingNumber;
    }
    /**
     * Set BillingNumber value
     * @param UNKNOWN $billingNumber
     * @return \ammonkc\otaehi\StructType\DirectBillType
     */
    public function setBillingNumber(UNKNOWN $billingNumber = null)
    {
        $this->BillingNumber = $billingNumber;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \ammonkc\otaehi\StructType\DirectBillType
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
