<?php

namespace Ammonkc\Otaehi\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for PaymentForm StructType
 * @subpackage Structs
 */
class PaymentForm extends AbstractStructBase
{
    /**
     * The AssociatedSupplier
     * @var \Ammonkc\Otaehi\StructType\AssociatedSupplier
     */
    public $AssociatedSupplier;
    /**
     * The TransferAction
     * @var
     */
    public $TransferAction;
    /**
     * The DefaultInd
     * @var bool
     */
    public $DefaultInd;
    /**
     * The ParentCompanyRef
     * @var
     */
    public $ParentCompanyRef;
    /**
     * Constructor method for PaymentForm
     * @uses PaymentForm::setAssociatedSupplier()
     * @uses PaymentForm::setTransferAction()
     * @uses PaymentForm::setDefaultInd()
     * @uses PaymentForm::setParentCompanyRef()
     * @param \Ammonkc\Otaehi\StructType\AssociatedSupplier $associatedSupplier
     * @param  $transferAction
     * @param bool $defaultInd
     * @param  $parentCompanyRef
     */
    public function __construct(\Ammonkc\Otaehi\StructType\AssociatedSupplier $associatedSupplier = null,  $transferAction = null, $defaultInd = null,  $parentCompanyRef = null)
    {
        $this
            ->setAssociatedSupplier($associatedSupplier)
            ->setTransferAction($transferAction)
            ->setDefaultInd($defaultInd)
            ->setParentCompanyRef($parentCompanyRef);
    }
    /**
     * Get AssociatedSupplier value
     * @return \Ammonkc\Otaehi\StructType\AssociatedSupplier|null
     */
    public function getAssociatedSupplier()
    {
        return $this->AssociatedSupplier;
    }
    /**
     * Set AssociatedSupplier value
     * @param \Ammonkc\Otaehi\StructType\AssociatedSupplier $associatedSupplier
     * @return \Ammonkc\Otaehi\StructType\PaymentForm
     */
    public function setAssociatedSupplier(\Ammonkc\Otaehi\StructType\AssociatedSupplier $associatedSupplier = null)
    {
        $this->AssociatedSupplier = $associatedSupplier;
        return $this;
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
     * @return \Ammonkc\Otaehi\StructType\PaymentForm
     */
    public function setTransferAction( $transferAction = null)
    {
        $this->TransferAction = $transferAction;
        return $this;
    }
    /**
     * Get DefaultInd value
     * @return bool|null
     */
    public function getDefaultInd()
    {
        return $this->DefaultInd;
    }
    /**
     * Set DefaultInd value
     * @param bool $defaultInd
     * @return \Ammonkc\Otaehi\StructType\PaymentForm
     */
    public function setDefaultInd($defaultInd = null)
    {
        $this->DefaultInd = $defaultInd;
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
     * @return \Ammonkc\Otaehi\StructType\PaymentForm
     */
    public function setParentCompanyRef( $parentCompanyRef = null)
    {
        $this->ParentCompanyRef = $parentCompanyRef;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Ammonkc\Otaehi\StructType\PaymentForm
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
