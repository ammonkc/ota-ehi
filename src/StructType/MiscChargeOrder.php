<?php

namespace ammonkc\otaehi\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for MiscChargeOrder StructType
 * @subpackage Structs
 */
class MiscChargeOrder extends AbstractStructBase
{
    /**
     * The TicketNumber
     * @var UNKNOWN
     */
    public $TicketNumber;
    /**
     * The PaperMCO_ExistInd
     * @var bool
     */
    public $PaperMCO_ExistInd;
    /**
     * The Info
     * @var \ammonkc\otaehi\StructType\FormattedTextType
     */
    public $Info;
    /**
     * Constructor method for MiscChargeOrder
     * @uses MiscChargeOrder::setTicketNumber()
     * @uses MiscChargeOrder::setPaperMCO_ExistInd()
     * @uses MiscChargeOrder::setInfo()
     * @param UNKNOWN $ticketNumber
     * @param bool $paperMCO_ExistInd
     * @param \ammonkc\otaehi\StructType\FormattedTextType $info
     */
    public function __construct(UNKNOWN $ticketNumber = null, $paperMCO_ExistInd = null, \ammonkc\otaehi\StructType\FormattedTextType $info = null)
    {
        $this
            ->setTicketNumber($ticketNumber)
            ->setPaperMCO_ExistInd($paperMCO_ExistInd)
            ->setInfo($info);
    }
    /**
     * Get TicketNumber value
     * @return UNKNOWN|null
     */
    public function getTicketNumber()
    {
        return $this->TicketNumber;
    }
    /**
     * Set TicketNumber value
     * @param UNKNOWN $ticketNumber
     * @return \ammonkc\otaehi\StructType\MiscChargeOrder
     */
    public function setTicketNumber(UNKNOWN $ticketNumber = null)
    {
        $this->TicketNumber = $ticketNumber;
        return $this;
    }
    /**
     * Get PaperMCO_ExistInd value
     * @return bool|null
     */
    public function getPaperMCO_ExistInd()
    {
        return $this->PaperMCO_ExistInd;
    }
    /**
     * Set PaperMCO_ExistInd value
     * @param bool $paperMCO_ExistInd
     * @return \ammonkc\otaehi\StructType\MiscChargeOrder
     */
    public function setPaperMCO_ExistInd($paperMCO_ExistInd = null)
    {
        $this->PaperMCO_ExistInd = $paperMCO_ExistInd;
        return $this;
    }
    /**
     * Get Info value
     * @return \ammonkc\otaehi\StructType\FormattedTextType|null
     */
    public function getInfo()
    {
        return $this->Info;
    }
    /**
     * Set Info value
     * @param \ammonkc\otaehi\StructType\FormattedTextType $info
     * @return \ammonkc\otaehi\StructType\MiscChargeOrder
     */
    public function setInfo(\ammonkc\otaehi\StructType\FormattedTextType $info = null)
    {
        $this->Info = $info;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \ammonkc\otaehi\StructType\MiscChargeOrder
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
