<?php

namespace Ammonkc\Otaehi\StructType;

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
     * @var \Ammonkc\Otaehi\StructType\ShippingInfo
     */
    public $ShippingInfo;
    /**
     * The Comments
     * @var \Ammonkc\Otaehi\StructType\Comments
     */
    public $Comments;
    /**
     * Constructor method for RecipientInfo
     * @uses RecipientInfo::setReservationID()
     * @uses RecipientInfo::setShippingInfo()
     * @uses RecipientInfo::setComments()
     * @param mixed $reservationID
     * @param \Ammonkc\Otaehi\StructType\ShippingInfo $shippingInfo
     * @param \Ammonkc\Otaehi\StructType\Comments $comments
     */
    public function __construct($reservationID = null, \Ammonkc\Otaehi\StructType\ShippingInfo $shippingInfo = null, \Ammonkc\Otaehi\StructType\Comments $comments = null)
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
     * @return \Ammonkc\Otaehi\StructType\RecipientInfo
     */
    public function setReservationID($reservationID = null)
    {
        $this->ReservationID = $reservationID;
        return $this;
    }
    /**
     * Get ShippingInfo value
     * @return \Ammonkc\Otaehi\StructType\ShippingInfo|null
     */
    public function getShippingInfo()
    {
        return $this->ShippingInfo;
    }
    /**
     * Set ShippingInfo value
     * @param \Ammonkc\Otaehi\StructType\ShippingInfo $shippingInfo
     * @return \Ammonkc\Otaehi\StructType\RecipientInfo
     */
    public function setShippingInfo(\Ammonkc\Otaehi\StructType\ShippingInfo $shippingInfo = null)
    {
        $this->ShippingInfo = $shippingInfo;
        return $this;
    }
    /**
     * Get Comments value
     * @return \Ammonkc\Otaehi\StructType\Comments|null
     */
    public function getComments()
    {
        return $this->Comments;
    }
    /**
     * Set Comments value
     * @param \Ammonkc\Otaehi\StructType\Comments $comments
     * @return \Ammonkc\Otaehi\StructType\RecipientInfo
     */
    public function setComments(\Ammonkc\Otaehi\StructType\Comments $comments = null)
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
     * @return \Ammonkc\Otaehi\StructType\RecipientInfo
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
