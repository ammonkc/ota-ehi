<?php

namespace Ammonkc\Otaehi\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Comments StructType
 * @subpackage Structs
 */
class Comments extends AbstractStructBase
{
    /**
     * The Comment
     * @var mixed
     */
    public $Comment;
    /**
     * Constructor method for Comments
     * @uses Comments::setComment()
     * @param mixed $comment
     */
    public function __construct($comment = null)
    {
        $this
            ->setComment($comment);
    }
    /**
     * Get Comment value
     * @return mixed|null
     */
    public function getComment()
    {
        return $this->Comment;
    }
    /**
     * Set Comment value
     * @param mixed $comment
     * @return \Ammonkc\Otaehi\StructType\Comments
     */
    public function setComment($comment = null)
    {
        $this->Comment = $comment;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Ammonkc\Otaehi\StructType\Comments
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
