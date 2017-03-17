<?php

namespace ammonkc\otaehi\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for OntologyContactType StructType
 * @subpackage Structs
 */
class OntologyContactType extends AbstractStructBase
{
    /**
     * The Email
     * @var \ammonkc\otaehi\StructType\Email
     */
    public $Email;
    /**
     * The Phone
     * @var \ammonkc\otaehi\StructType\Phone
     */
    public $Phone;
    /**
     * The OntologyExtension
     * @var mixed
     */
    public $OntologyExtension;
    /**
     * Constructor method for OntologyContactType
     * @uses OntologyContactType::setEmail()
     * @uses OntologyContactType::setPhone()
     * @uses OntologyContactType::setOntologyExtension()
     * @param \ammonkc\otaehi\StructType\Email $email
     * @param \ammonkc\otaehi\StructType\Phone $phone
     * @param mixed $ontologyExtension
     */
    public function __construct(\ammonkc\otaehi\StructType\Email $email = null, \ammonkc\otaehi\StructType\Phone $phone = null, $ontologyExtension = null)
    {
        $this
            ->setEmail($email)
            ->setPhone($phone)
            ->setOntologyExtension($ontologyExtension);
    }
    /**
     * Get Email value
     * @return \ammonkc\otaehi\StructType\Email|null
     */
    public function getEmail()
    {
        return $this->Email;
    }
    /**
     * Set Email value
     * @param \ammonkc\otaehi\StructType\Email $email
     * @return \ammonkc\otaehi\StructType\OntologyContactType
     */
    public function setEmail(\ammonkc\otaehi\StructType\Email $email = null)
    {
        $this->Email = $email;
        return $this;
    }
    /**
     * Get Phone value
     * @return \ammonkc\otaehi\StructType\Phone|null
     */
    public function getPhone()
    {
        return $this->Phone;
    }
    /**
     * Set Phone value
     * @param \ammonkc\otaehi\StructType\Phone $phone
     * @return \ammonkc\otaehi\StructType\OntologyContactType
     */
    public function setPhone(\ammonkc\otaehi\StructType\Phone $phone = null)
    {
        $this->Phone = $phone;
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
     * @return \ammonkc\otaehi\StructType\OntologyContactType
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
     * @return \ammonkc\otaehi\StructType\OntologyContactType
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
