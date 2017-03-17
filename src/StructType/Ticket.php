<?php

namespace Ammonkc\Otaehi\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Ticket StructType
 * @subpackage Structs
 */
class Ticket extends AbstractStructBase
{
    /**
     * The ConjunctionTicketNbr
     * @var \Ammonkc\Otaehi\StructType\ConjunctionTicketNbr
     */
    public $ConjunctionTicketNbr;
    /**
     * The TicketNumber
     * @var UNKNOWN
     */
    public $TicketNumber;
    /**
     * The ReroutingType
     * @var string
     */
    public $ReroutingType;
    /**
     * The ReasonForReroute
     * @var UNKNOWN
     */
    public $ReasonForReroute;
    /**
     * Constructor method for Ticket
     * @uses Ticket::setConjunctionTicketNbr()
     * @uses Ticket::setTicketNumber()
     * @uses Ticket::setReroutingType()
     * @uses Ticket::setReasonForReroute()
     * @param \Ammonkc\Otaehi\StructType\ConjunctionTicketNbr $conjunctionTicketNbr
     * @param UNKNOWN $ticketNumber
     * @param string $reroutingType
     * @param UNKNOWN $reasonForReroute
     */
    public function __construct(\Ammonkc\Otaehi\StructType\ConjunctionTicketNbr $conjunctionTicketNbr = null, UNKNOWN $ticketNumber = null, $reroutingType = null, UNKNOWN $reasonForReroute = null)
    {
        $this
            ->setConjunctionTicketNbr($conjunctionTicketNbr)
            ->setTicketNumber($ticketNumber)
            ->setReroutingType($reroutingType)
            ->setReasonForReroute($reasonForReroute);
    }
    /**
     * Get ConjunctionTicketNbr value
     * @return \Ammonkc\Otaehi\StructType\ConjunctionTicketNbr|null
     */
    public function getConjunctionTicketNbr()
    {
        return $this->ConjunctionTicketNbr;
    }
    /**
     * Set ConjunctionTicketNbr value
     * @param \Ammonkc\Otaehi\StructType\ConjunctionTicketNbr $conjunctionTicketNbr
     * @return \Ammonkc\Otaehi\StructType\Ticket
     */
    public function setConjunctionTicketNbr(\Ammonkc\Otaehi\StructType\ConjunctionTicketNbr $conjunctionTicketNbr = null)
    {
        $this->ConjunctionTicketNbr = $conjunctionTicketNbr;
        return $this;
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
     * @return \Ammonkc\Otaehi\StructType\Ticket
     */
    public function setTicketNumber(UNKNOWN $ticketNumber = null)
    {
        $this->TicketNumber = $ticketNumber;
        return $this;
    }
    /**
     * Get ReroutingType value
     * @return string|null
     */
    public function getReroutingType()
    {
        return $this->ReroutingType;
    }
    /**
     * Set ReroutingType value
     * @param string $reroutingType
     * @return \Ammonkc\Otaehi\StructType\Ticket
     */
    public function setReroutingType($reroutingType = null)
    {
        // validation for constraint: string
        if (!is_null($reroutingType) && !is_string($reroutingType)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($reroutingType)), __LINE__);
        }
        $this->ReroutingType = $reroutingType;
        return $this;
    }
    /**
     * Get ReasonForReroute value
     * @return UNKNOWN|null
     */
    public function getReasonForReroute()
    {
        return $this->ReasonForReroute;
    }
    /**
     * Set ReasonForReroute value
     * @param UNKNOWN $reasonForReroute
     * @return \Ammonkc\Otaehi\StructType\Ticket
     */
    public function setReasonForReroute(UNKNOWN $reasonForReroute = null)
    {
        $this->ReasonForReroute = $reasonForReroute;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Ammonkc\Otaehi\StructType\Ticket
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
