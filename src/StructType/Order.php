<?php

namespace ammonkc\otaehi\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Order StructType
 * @subpackage Structs
 */
class Order extends AbstractStructBase
{
    /**
     * The Products
     * @var \ammonkc\otaehi\StructType\Products
     */
    public $Products;
    /**
     * The OrderType
     * @var UNKNOWN
     */
    public $OrderType;
    /**
     * The OrderID
     * @var UNKNOWN
     */
    public $OrderID;
    /**
     * The ListOfRecipientRPH
     * @var UNKNOWN
     */
    public $ListOfRecipientRPH;
    /**
     * Constructor method for Order
     * @uses Order::setProducts()
     * @uses Order::setOrderType()
     * @uses Order::setOrderID()
     * @uses Order::setListOfRecipientRPH()
     * @param \ammonkc\otaehi\StructType\Products $products
     * @param UNKNOWN $orderType
     * @param UNKNOWN $orderID
     * @param UNKNOWN $listOfRecipientRPH
     */
    public function __construct(\ammonkc\otaehi\StructType\Products $products = null, UNKNOWN $orderType = null, UNKNOWN $orderID = null, UNKNOWN $listOfRecipientRPH = null)
    {
        $this
            ->setProducts($products)
            ->setOrderType($orderType)
            ->setOrderID($orderID)
            ->setListOfRecipientRPH($listOfRecipientRPH);
    }
    /**
     * Get Products value
     * @return \ammonkc\otaehi\StructType\Products|null
     */
    public function getProducts()
    {
        return $this->Products;
    }
    /**
     * Set Products value
     * @param \ammonkc\otaehi\StructType\Products $products
     * @return \ammonkc\otaehi\StructType\Order
     */
    public function setProducts(\ammonkc\otaehi\StructType\Products $products = null)
    {
        $this->Products = $products;
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
     * @return \ammonkc\otaehi\StructType\Order
     */
    public function setOrderType(UNKNOWN $orderType = null)
    {
        $this->OrderType = $orderType;
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
     * @return \ammonkc\otaehi\StructType\Order
     */
    public function setOrderID(UNKNOWN $orderID = null)
    {
        $this->OrderID = $orderID;
        return $this;
    }
    /**
     * Get ListOfRecipientRPH value
     * @return UNKNOWN|null
     */
    public function getListOfRecipientRPH()
    {
        return $this->ListOfRecipientRPH;
    }
    /**
     * Set ListOfRecipientRPH value
     * @param UNKNOWN $listOfRecipientRPH
     * @return \ammonkc\otaehi\StructType\Order
     */
    public function setListOfRecipientRPH(UNKNOWN $listOfRecipientRPH = null)
    {
        $this->ListOfRecipientRPH = $listOfRecipientRPH;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \ammonkc\otaehi\StructType\Order
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
