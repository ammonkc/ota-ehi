<?php

namespace ammonkc\otaehi\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Remarks StructType
 * @subpackage Structs
 */
class Remarks extends AbstractStructBase
{
    /**
     * The Remark
     * @var \ammonkc\otaehi\StructType\ParagraphType
     */
    public $Remark;
    /**
     * Constructor method for Remarks
     * @uses Remarks::setRemark()
     * @param \ammonkc\otaehi\StructType\ParagraphType $remark
     */
    public function __construct(\ammonkc\otaehi\StructType\ParagraphType $remark = null)
    {
        $this
            ->setRemark($remark);
    }
    /**
     * Get Remark value
     * @return \ammonkc\otaehi\StructType\ParagraphType|null
     */
    public function getRemark()
    {
        return $this->Remark;
    }
    /**
     * Set Remark value
     * @param \ammonkc\otaehi\StructType\ParagraphType $remark
     * @return \ammonkc\otaehi\StructType\Remarks
     */
    public function setRemark(\ammonkc\otaehi\StructType\ParagraphType $remark = null)
    {
        $this->Remark = $remark;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \ammonkc\otaehi\StructType\Remarks
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
