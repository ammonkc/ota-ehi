<?php

namespace ammonkc\otaehi\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for VehModifyRQCore StructType
 * @subpackage Structs
 */
class VehModifyRQCore extends AbstractStructBase
{
    /**
     * The ModifyType
     * @var string
     */
    public $ModifyType;
    /**
     * The IndexNumber
     * @var Numeric1to999
     */
    public $IndexNumber;
    /**
     * The Action
     * @var ActionType
     */
    public $Action;
    /**
     * The OptionChangeIndicator
     * @var bool
     */
    public $OptionChangeIndicator;
    /**
     * Constructor method for VehModifyRQCore
     * @uses VehModifyRQCore::setModifyType()
     * @uses VehModifyRQCore::setIndexNumber()
     * @uses VehModifyRQCore::setAction()
     * @uses VehModifyRQCore::setOptionChangeIndicator()
     * @param string $modifyType
     * @param Numeric1to999 $indexNumber
     * @param ActionType $action
     * @param bool $optionChangeIndicator
     */
    public function __construct($modifyType = null, Numeric1to999 $indexNumber = null, ActionType $action = null, $optionChangeIndicator = null)
    {
        $this
            ->setModifyType($modifyType)
            ->setIndexNumber($indexNumber)
            ->setAction($action)
            ->setOptionChangeIndicator($optionChangeIndicator);
    }
    /**
     * Get ModifyType value
     * @return string|null
     */
    public function getModifyType()
    {
        return $this->ModifyType;
    }
    /**
     * Set ModifyType value
     * @param string $modifyType
     * @return \ammonkc\otaehi\StructType\VehModifyRQCore
     */
    public function setModifyType($modifyType = null)
    {
        // validation for constraint: string
        if (!is_null($modifyType) && !is_string($modifyType)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($modifyType)), __LINE__);
        }
        $this->ModifyType = $modifyType;
        return $this;
    }
    /**
     * Get IndexNumber value
     * @return Numeric1to999|null
     */
    public function getIndexNumber()
    {
        return $this->IndexNumber;
    }
    /**
     * Set IndexNumber value
     * @param Numeric1to999 $indexNumber
     * @return \ammonkc\otaehi\StructType\VehModifyRQCore
     */
    public function setIndexNumber(Numeric1to999 $indexNumber = null)
    {
        $this->IndexNumber = $indexNumber;
        return $this;
    }
    /**
     * Get Action value
     * @return ActionType|null
     */
    public function getAction()
    {
        return $this->Action;
    }
    /**
     * Set Action value
     * @param ActionType $action
     * @return \ammonkc\otaehi\StructType\VehModifyRQCore
     */
    public function setAction(ActionType $action = null)
    {
        $this->Action = $action;
        return $this;
    }
    /**
     * Get OptionChangeIndicator value
     * @return bool|null
     */
    public function getOptionChangeIndicator()
    {
        return $this->OptionChangeIndicator;
    }
    /**
     * Set OptionChangeIndicator value
     * @param bool $optionChangeIndicator
     * @return \ammonkc\otaehi\StructType\VehModifyRQCore
     */
    public function setOptionChangeIndicator($optionChangeIndicator = null)
    {
        $this->OptionChangeIndicator = $optionChangeIndicator;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \ammonkc\otaehi\StructType\VehModifyRQCore
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
