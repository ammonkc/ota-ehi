<?php

namespace ammonkc\otaehi\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SignatureOnFile StructType
 * @subpackage Structs
 */
class SignatureOnFile extends AbstractStructBase
{
    /**
     * The SignatureOnFileInd
     * @var bool
     */
    public $SignatureOnFileInd;
    /**
     * Constructor method for SignatureOnFile
     * @uses SignatureOnFile::setSignatureOnFileInd()
     * @param bool $signatureOnFileInd
     */
    public function __construct($signatureOnFileInd = null)
    {
        $this
            ->setSignatureOnFileInd($signatureOnFileInd);
    }
    /**
     * Get SignatureOnFileInd value
     * @return bool|null
     */
    public function getSignatureOnFileInd()
    {
        return $this->SignatureOnFileInd;
    }
    /**
     * Set SignatureOnFileInd value
     * @param bool $signatureOnFileInd
     * @return \ammonkc\otaehi\StructType\SignatureOnFile
     */
    public function setSignatureOnFileInd($signatureOnFileInd = null)
    {
        $this->SignatureOnFileInd = $signatureOnFileInd;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \ammonkc\otaehi\StructType\SignatureOnFile
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
