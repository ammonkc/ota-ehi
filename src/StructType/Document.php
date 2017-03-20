<?php

namespace Ammonkc\Otaehi\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Document StructType
 * @subpackage Structs
 */
class Document extends AbstractStructBase
{
    /**
     * The DocID
     * @var
     */
    public $DocID;
    /**
     * The DocType
     * @var
     */
    public $DocType;
    /**
     * Constructor method for Document
     * @uses Document::setDocID()
     * @uses Document::setDocType()
     * @param  $docID
     * @param  $docType
     */
    public function __construct( $docID = null,  $docType = null)
    {
        $this
            ->setDocID($docID)
            ->setDocType($docType);
    }
    /**
     * Get DocID value
     * @return |null
     */
    public function getDocID()
    {
        return $this->DocID;
    }
    /**
     * Set DocID value
     * @param  $docID
     * @return \Ammonkc\Otaehi\StructType\Document
     */
    public function setDocID( $docID = null)
    {
        $this->DocID = $docID;
        return $this;
    }
    /**
     * Get DocType value
     * @return |null
     */
    public function getDocType()
    {
        return $this->DocType;
    }
    /**
     * Set DocType value
     * @param  $docType
     * @return \Ammonkc\Otaehi\StructType\Document
     */
    public function setDocType( $docType = null)
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
     * @return \Ammonkc\Otaehi\StructType\Document
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
