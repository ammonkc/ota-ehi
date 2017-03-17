<?php

namespace Ammonkc\Otaehi\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for OntologyContactType StructType
 * @subpackage Structs
 */
class OntologyContactType extends AbstractStructBase
{
    /**
     * The Email
     * @var \Ammonkc\Otaehi\StructType\Email
     */
    public $Email;
    /**
     * The Phone
     * @var \Ammonkc\Otaehi\StructType\Phone
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
     * @param \Ammonkc\Otaehi\StructType\Email $email
     * @param \Ammonkc\Otaehi\StructType\Phone $phone
     * @param mixed $ontologyExtension
     */
    public function __construct(\Ammonkc\Otaehi\StructType\Email $email = null, \Ammonkc\Otaehi\StructType\Phone $phone = null, $ontologyExtension = null)
    {
        $this
            ->setEmail($email)
            ->setPhone($phone)
            ->setOntologyExtension($ontologyExtension);
    }
    /**
     * Get Email value
     * @return \Ammonkc\Otaehi\StructType\Email|null
     */
    public function getEmail()
    {
        return $this->Email;
    }
    /**
     * Set Email value
     * @param \Ammonkc\Otaehi\StructType\Email $email
     * @return \Ammonkc\Otaehi\StructType\OntologyContactType
     */
    public function setEmail(\Ammonkc\Otaehi\StructType\Email $email = null)
    {
        $this->Email = $email;
        return $this;
    }
    /**
     * Get Phone value
     * @return \Ammonkc\Otaehi\StructType\Phone|null
     */
    public function getPhone()
    {
        return $this->Phone;
    }
    /**
     * Set Phone value
     * @param \Ammonkc\Otaehi\StructType\Phone $phone
     * @return \Ammonkc\Otaehi\StructType\OntologyContactType
     */
    public function setPhone(\Ammonkc\Otaehi\StructType\Phone $phone = null)
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
     * @return \Ammonkc\Otaehi\StructType\OntologyContactType
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
     * @return \Ammonkc\Otaehi\StructType\OntologyContactType
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
