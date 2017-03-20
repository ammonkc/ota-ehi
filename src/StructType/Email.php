<?php

namespace Ammonkc\Otaehi\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Email StructType
 * @subpackage Structs
 */
class Email extends AbstractStructBase
{
    /**
     * The TransferAction
     * @var
     */
    public $TransferAction;
    /**
     * The ParentCompanyRef
     * @var
     */
    public $ParentCompanyRef;
    /**
     * The _
     * @var string
     */
    public $_;
    /**
     * The OntologyRefID
     * @var string
     */
    public $OntologyRefID;
    /**
     * Constructor method for Email
     * @uses Email::setTransferAction()
     * @uses Email::setParentCompanyRef()
     * @uses Email::set_()
     * @uses Email::setOntologyRefID()
     * @param  $transferAction
     * @param  $parentCompanyRef
     * @param string $_
     * @param string $ontologyRefID
     */
    public function __construct( $transferAction = null,  $parentCompanyRef = null, $_ = null, $ontologyRefID = null)
    {
        $this
            ->setTransferAction($transferAction)
            ->setParentCompanyRef($parentCompanyRef)
            ->set_($_)
            ->setOntologyRefID($ontologyRefID);
    }
    /**
     * Get TransferAction value
     * @return |null
     */
    public function getTransferAction()
    {
        return $this->TransferAction;
    }
    /**
     * Set TransferAction value
     * @param  $transferAction
     * @return \Ammonkc\Otaehi\StructType\Email
     */
    public function setTransferAction( $transferAction = null)
    {
        $this->TransferAction = $transferAction;
        return $this;
    }
    /**
     * Get ParentCompanyRef value
     * @return |null
     */
    public function getParentCompanyRef()
    {
        return $this->ParentCompanyRef;
    }
    /**
     * Set ParentCompanyRef value
     * @param  $parentCompanyRef
     * @return \Ammonkc\Otaehi\StructType\Email
     */
    public function setParentCompanyRef( $parentCompanyRef = null)
    {
        $this->ParentCompanyRef = $parentCompanyRef;
        return $this;
    }
    /**
     * Get _ value
     * @return string|null
     */
    public function get_()
    {
        return $this->_;
    }
    /**
     * Set _ value
     * @param string $_
     * @return \Ammonkc\Otaehi\StructType\Email
     */
    public function set_($_ = null)
    {
        // validation for constraint: string
        if (!is_null($_) && !is_string($_)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($_)), __LINE__);
        }
        $this->_ = $_;
        return $this;
    }
    /**
     * Get OntologyRefID value
     * @return string|null
     */
    public function getOntologyRefID()
    {
        return $this->OntologyRefID;
    }
    /**
     * Set OntologyRefID value
     * @param string $ontologyRefID
     * @return \Ammonkc\Otaehi\StructType\Email
     */
    public function setOntologyRefID($ontologyRefID = null)
    {
        // validation for constraint: string
        if (!is_null($ontologyRefID) && !is_string($ontologyRefID)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($ontologyRefID)), __LINE__);
        }
        $this->OntologyRefID = $ontologyRefID;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Ammonkc\Otaehi\StructType\Email
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
