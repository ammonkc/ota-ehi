<?php

namespace ammonkc\otaehi\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Document StructType
 * @subpackage Structs
 */
class Document extends AbstractStructBase
{
    /**
     * The DocID
     * @var UNKNOWN
     */
    public $DocID;
    /**
     * The DocType
     * @var UNKNOWN
     */
    public $DocType;
    /**
     * Constructor method for Document
     * @uses Document::setDocID()
     * @uses Document::setDocType()
     * @param UNKNOWN $docID
     * @param UNKNOWN $docType
     */
    public function __construct(UNKNOWN $docID = null, UNKNOWN $docType = null)
    {
        $this
            ->setDocID($docID)
            ->setDocType($docType);
    }
    /**
     * Get DocID value
     * @return UNKNOWN|null
     */
    public function getDocID()
    {
        return $this->DocID;
    }
    /**
     * Set DocID value
     * @param UNKNOWN $docID
     * @return \ammonkc\otaehi\StructType\Document
     */
    public function setDocID(UNKNOWN $docID = null)
    {
        $this->DocID = $docID;
        return $this;
    }
    /**
     * Get DocType value
     * @return UNKNOWN|null
     */
    public function getDocType()
    {
        return $this->DocType;
    }
    /**
     * Set DocType value
     * @param UNKNOWN $docType
     * @return \ammonkc\otaehi\StructType\Document
     */
    public function setDocType(UNKNOWN $docType = null)
    {
        $this->DocType = $docType;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \ammonkc\otaehi\StructType\Document
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
