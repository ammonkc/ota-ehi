<?php

namespace ammonkc\otaehi\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for RecipientInfo StructType
 * @subpackage Structs
 */
class RecipientInfo extends AbstractStructBase
{
    /**
     * The ReservationID
     * @var mixed
     */
    public $ReservationID;
    /**
     * The ShippingInfo
     * @var \ammonkc\otaehi\StructType\ShippingInfo
     */
    public $ShippingInfo;
    /**
     * The Comments
     * @var \ammonkc\otaehi\StructType\Comments
     */
    public $Comments;
    /**
     * Constructor method for RecipientInfo
     * @uses RecipientInfo::setReservationID()
     * @uses RecipientInfo::setShippingInfo()
     * @uses RecipientInfo::setComments()
     * @param mixed $reservationID
     * @param \ammonkc\otaehi\StructType\ShippingInfo $shippingInfo
     * @param \ammonkc\otaehi\StructType\Comments $comments
     */
    public function __construct($reservationID = null, \ammonkc\otaehi\StructType\ShippingInfo $shippingInfo = null, \ammonkc\otaehi\StructType\Comments $comments = null)
    {
        $this
            ->setReservationID($reservationID)
            ->setShippingInfo($shippingInfo)
            ->setComments($comments);
    }
    /**
     * Get ReservationID value
     * @return mixed|null
     */
    public function getReservationID()
    {
        return $this->ReservationID;
    }
    /**
     * Set ReservationID value
     * @param mixed $reservationID
     * @return \ammonkc\otaehi\StructType\RecipientInfo
     */
    public function setReservationID($reservationID = null)
    {
        $this->ReservationID = $reservationID;
        return $this;
    }
    /**
     * Get ShippingInfo value
     * @return \ammonkc\otaehi\StructType\ShippingInfo|null
     */
    public function getShippingInfo()
    {
        return $this->ShippingInfo;
    }
    /**
     * Set ShippingInfo value
     * @param \ammonkc\otaehi\StructType\ShippingInfo $shippingInfo
     * @return \ammonkc\otaehi\StructType\RecipientInfo
     */
    public function setShippingInfo(\ammonkc\otaehi\StructType\ShippingInfo $shippingInfo = null)
    {
        $this->ShippingInfo = $shippingInfo;
        return $this;
    }
    /**
     * Get Comments value
     * @return \ammonkc\otaehi\StructType\Comments|null
     */
    public function getComments()
    {
        return $this->Comments;
    }
    /**
     * Set Comments value
     * @param \ammonkc\otaehi\StructType\Comments $comments
     * @return \ammonkc\otaehi\StructType\RecipientInfo
     */
    public function setComments(\ammonkc\otaehi\StructType\Comments $comments = null)
    {
        $this->Comments = $comments;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \ammonkc\otaehi\StructType\RecipientInfo
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
