<?php

namespace Ammonkc\Otaehi\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for OrdersType StructType
 * @subpackage Structs
 */
class OrdersType extends AbstractStructBase
{
    /**
     * The Order
     * @var \Ammonkc\Otaehi\StructType\Order
     */
    public $Order;
    /**
     * The TPA_Extensions
     * @var mixed
     */
    public $TPA_Extensions;
    /**
     * The OrderType
     * @var
     */
    public $OrderType;
    /**
     * The DiscountCode
     * @var
     */
    public $DiscountCode;
    /**
     * The VendorPurchaseOrderID
     * @var
     */
    public $VendorPurchaseOrderID;
    /**
     * The OrderID
     * @var
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
     * @param \Ammonkc\Otaehi\StructType\Order $order
     * @param mixed $tPA_Extensions
     * @param  $orderType
     * @param  $discountCode
     * @param  $vendorPurchaseOrderID
     * @param  $orderID
     */
    public function __construct(\Ammonkc\Otaehi\StructType\Order $order = null, $tPA_Extensions = null,  $orderType = null,  $discountCode = null,  $vendorPurchaseOrderID = null,  $orderID = null)
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
     * @return \Ammonkc\Otaehi\StructType\Order|null
     */
    public function getOrder()
    {
        return $this->Order;
    }
    /**
     * Set Order value
     * @param \Ammonkc\Otaehi\StructType\Order $order
     * @return \Ammonkc\Otaehi\StructType\OrdersType
     */
    public function setOrder(\Ammonkc\Otaehi\StructType\Order $order = null)
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
     * @return \Ammonkc\Otaehi\StructType\OrdersType
     */
    public function setTPA_Extensions($tPA_Extensions = null)
    {
        $this->TPA_Extensions = $tPA_Extensions;
        return $this;
    }
    /**
     * Get OrderType value
     * @return |null
     */
    public function getOrderType()
    {
        return $this->OrderType;
    }
    /**
     * Set OrderType value
     * @param  $orderType
     * @return \Ammonkc\Otaehi\StructType\OrdersType
     */
    public function setOrderType( $orderType = null)
    {
        $this->OrderType = $orderType;
        return $this;
    }
    /**
     * Get DiscountCode value
     * @return |null
     */
    public function getDiscountCode()
    {
        return $this->DiscountCode;
    }
    /**
     * Set DiscountCode value
     * @param  $discountCode
     * @return \Ammonkc\Otaehi\StructType\OrdersType
     */
    public function setDiscountCode( $discountCode = null)
    {
        $this->DiscountCode = $discountCode;
        return $this;
    }
    /**
     * Get VendorPurchaseOrderID value
     * @return |null
     */
    public function getVendorPurchaseOrderID()
    {
        return $this->VendorPurchaseOrderID;
    }
    /**
     * Set VendorPurchaseOrderID value
     * @param  $vendorPurchaseOrderID
     * @return \Ammonkc\Otaehi\StructType\OrdersType
     */
    public function setVendorPurchaseOrderID( $vendorPurchaseOrderID = null)
    {
        $this->VendorPurchaseOrderID = $vendorPurchaseOrderID;
        return $this;
    }
    /**
     * Get OrderID value
     * @return |null
     */
    public function getOrderID()
    {
        return $this->OrderID;
    }
    /**
     * Set OrderID value
     * @param  $orderID
     * @return \Ammonkc\Otaehi\StructType\OrdersType
     */
    public function setOrderID( $orderID = null)
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
     * @return \Ammonkc\Otaehi\StructType\OrdersType
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
