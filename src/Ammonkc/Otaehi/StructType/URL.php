<?php

namespace Ammonkc\Otaehi\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for URL StructType
 * @subpackage Structs
 */
class URL extends AbstractStructBase
{
    /**
     * The TransferAction
     * @var UNKNOWN
     */
    public $TransferAction;
    /**
     * Constructor method for URL
     * @uses URL::setTransferAction()
     * @param UNKNOWN $transferAction
     */
    public function __construct(UNKNOWN $transferAction = null)
    {
        $this
            ->setTransferAction($transferAction);
    }
    /**
     * Get TransferAction value
     * @return UNKNOWN|null
     */
    public function getTransferAction()
    {
        return $this->TransferAction;
    }
    /**
     * Set TransferAction value
     * @param UNKNOWN $transferAction
     * @return \Ammonkc\Otaehi\StructType\URL
     */
    public function setTransferAction(UNKNOWN $transferAction = null)
    {
        $this->TransferAction = $transferAction;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Ammonkc\Otaehi\StructType\URL
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
