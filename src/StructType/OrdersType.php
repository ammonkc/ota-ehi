<?php

namespace ammonkc\otaehi\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for OrdersType StructType
 * @subpackage Structs
 */
class OrdersType extends AbstractStructBase
{
    /**
     * The Order
     * @var \ammonkc\otaehi\StructType\Order
     */
    public $Order;
    /**
     * The TPA_Extensions
     * @var mixed
     */
    public $TPA_Extensions;
    /**
     * The OrderType
     * @var UNKNOWN
     */
    public $OrderType;
    /**
     * The DiscountCode
     * @var UNKNOWN
     */
    public $DiscountCode;
    /**
     * The VendorPurchaseOrderID
     * @var UNKNOWN
     */
    public $VendorPurchaseOrderID;
    /**
     * The OrderID
     * @var UNKNOWN
     */
    public $OrderID;
    /**
     * Constructor method for OrdersType
     * @uses OrdersType::setOrder()
     * @uses OrdersType::setTPA_Extensions()
     * @uses OrdersType::setOrderType()
     * @uses OrdersType::setDiscountCode()
     * @uses OrdersType::setVendorPurchaseOrderID()
     * @uses OrdersType::setOrderID()
     * @param \ammonkc\otaehi\StructType\Order $order
     * @param mixed $tPA_Extensions
     * @param UNKNOWN $orderType
     * @param UNKNOWN $discountCode
     * @param UNKNOWN $vendorPurchaseOrderID
     * @param UNKNOWN $orderID
     */
    public function __construct(\ammonkc\otaehi\StructType\Order $order = null, $tPA_Extensions = null, UNKNOWN $orderType = null, UNKNOWN $discountCode = null, UNKNOWN $vendorPurchaseOrderID = null, UNKNOWN $orderID = null)
    {
        $this
            ->setOrder($order)
            ->setTPA_Extensions($tPA_Extensions)
            ->setOrderType($orderType)
            ->setDiscountCode($discountCode)
            ->setVendorPurchaseOrderID($vendorPurchaseOrderID)
            ->setOrderID($orderID);
    }
    /**
     * Get Order value
     * @return \ammonkc\otaehi\StructType\Order|null
     */
    public function getOrder()
    {
        return $this->Order;
    }
    /**
     * Set Order value
     * @param \ammonkc\otaehi\StructType\Order $order
     * @return \ammonkc\otaehi\StructType\OrdersType
     */
    public function setOrder(\ammonkc\otaehi\StructType\Order $order = null)
    {
        $this->Order = $order;
        return $this;
    }
    /**
     * Get TPA_Extensions value
     * @return mixed|null
     */
    public function getTPA_Extensions()
    {
        return $this->TPA_Extensions;
    }
    /**
     * Set TPA_Extensions value
     * @param mixed $tPA_Extensions
     * @return \ammonkc\otaehi\StructType\OrdersType
     */
    public function setTPA_Extensions($tPA_Extensions = null)
    {
        $this->TPA_Extensions = $tPA_Extensions;
        return $this;
    }
    /**
     * Get OrderType value
     * @return UNKNOWN|null
     */
    public function getOrderType()
    {
        return $this->OrderType;
    }
    /**
     * Set OrderType value
     * @param UNKNOWN $orderType
     * @return \ammonkc\otaehi\StructType\OrdersType
     */
    public function setOrderType(UNKNOWN $orderType = null)
    {
        $this->OrderType = $orderType;
        return $this;
    }
    /**
     * Get DiscountCode value
     * @return UNKNOWN|null
     */
    public function getDiscountCode()
    {
        return $this->DiscountCode;
    }
    /**
     * Set DiscountCode value
     * @param UNKNOWN $discountCode
     * @return \ammonkc\otaehi\StructType\OrdersType
     */
    public function setDiscountCode(UNKNOWN $discountCode = null)
    {
        $this->DiscountCode = $discountCode;
        return $this;
    }
    /**
     * Get VendorPurchaseOrderID value
     * @return UNKNOWN|null
     */
    public function getVendorPurchaseOrderID()
    {
        return $this->VendorPurchaseOrderID;
    }
    /**
     * Set VendorPurchaseOrderID value
     * @param UNKNOWN $vendorPurchaseOrderID
     * @return \ammonkc\otaehi\StructType\OrdersType
     */
    public function setVendorPurchaseOrderID(UNKNOWN $vendorPurchaseOrderID = null)
    {
        $this->VendorPurchaseOrderID = $vendorPurchaseOrderID;
        return $this;
    }
    /**
     * Get OrderID value
     * @return UNKNOWN|null
     */
    public function getOrderID()
    {
        return $this->OrderID;
    }
    /**
     * Set OrderID value
     * @param UNKNOWN $orderID
     * @return \ammonkc\otaehi\StructType\OrdersType
     */
    public function setOrderID(UNKNOWN $orderID = null)
    {
        $this->OrderID = $orderID;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \ammonkc\otaehi\StructType\OrdersType
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
