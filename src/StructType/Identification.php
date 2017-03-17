<?php

namespace ammonkc\otaehi\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Identification StructType
 * @subpackage Structs
 */
class Identification extends AbstractStructBase
{
    /**
     * The Name
     * @var mixed
     */
    public $Name;
    /**
     * The Age
     * @var mixed
     */
    public $Age;
    /**
     * The Address
     * @var mixed
     */
    public $Address;
    /**
     * The Contact
     * @var mixed
     */
    public $Contact;
    /**
     * The LoyaltyProgram
     * @var mixed
     */
    public $LoyaltyProgram;
    /**
     * The OntologyExtension
     * @var mixed
     */
    public $OntologyExtension;
    /**
     * Constructor method for Identification
     * @uses Identification::setName()
     * @uses Identification::setAge()
     * @uses Identification::setAddress()
     * @uses Identification::setContact()
     * @uses Identification::setLoyaltyProgram()
     * @uses Identification::setOntologyExtension()
     * @param mixed $name
     * @param mixed $age
     * @param mixed $address
     * @param mixed $contact
     * @param mixed $loyaltyProgram
     * @param mixed $ontologyExtension
     */
    public function __construct($name = null, $age = null, $address = null, $contact = null, $loyaltyProgram = null, $ontologyExtension = null)
    {
        $this
            ->setName($name)
            ->setAge($age)
            ->setAddress($address)
            ->setContact($contact)
            ->setLoyaltyProgram($loyaltyProgram)
            ->setOntologyExtension($ontologyExtension);
    }
    /**
     * Get Name value
     * @return mixed|null
     */
    public function getName()
    {
        return $this->Name;
    }
    /**
     * Set Name value
     * @param mixed $name
     * @return \ammonkc\otaehi\StructType\Identification
     */
    public function setName($name = null)
    {
        $this->Name = $name;
        return $this;
    }
    /**
     * Get Age value
     * @return mixed|null
     */
    public function getAge()
    {
        return $this->Age;
    }
    /**
     * Set Age value
     * @param mixed $age
     * @return \ammonkc\otaehi\StructType\Identification
     */
    public function setAge($age = null)
    {
        $this->Age = $age;
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
     * @return \ammonkc\otaehi\StructType\Identification
     */
    public function setAddress($address = null)
    {
        $this->Address = $address;
        return $this;
    }
    /**
     * Get Contact value
     * @return mixed|null
     */
    public function getContact()
    {
        return $this->Contact;
    }
    /**
     * Set Contact value
     * @param mixed $contact
     * @return \ammonkc\otaehi\StructType\Identification
     */
    public function setContact($contact = null)
    {
        $this->Contact = $contact;
        return $this;
    }
    /**
     * Get LoyaltyProgram value
     * @return mixed|null
     */
    public function getLoyaltyProgram()
    {
        return $this->LoyaltyProgram;
    }
    /**
     * Set LoyaltyProgram value
     * @param mixed $loyaltyProgram
     * @return \ammonkc\otaehi\StructType\Identification
     */
    public function setLoyaltyProgram($loyaltyProgram = null)
    {
        $this->LoyaltyProgram = $loyaltyProgram;
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
     * @return \ammonkc\otaehi\StructType\Identification
     */
    public function setOntologyExtension($ontologyExtension = null)
    {
        $this->OntologyExtension = $ontologyExtension;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \ammonkc\otaehi\StructType\Identification
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
