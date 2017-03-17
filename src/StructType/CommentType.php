<?php

namespace ammonkc\otaehi\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for CommentType StructType
 * @subpackage Structs
 */
class CommentType extends AbstractStructBase
{
    /**
     * The Comment
     * @var \ammonkc\otaehi\StructType\Comment
     */
    public $Comment;
    /**
     * Constructor method for CommentType
     * @uses CommentType::setComment()
     * @param \ammonkc\otaehi\StructType\Comment $comment
     */
    public function __construct(\ammonkc\otaehi\StructType\Comment $comment = null)
    {
        $this
            ->setComment($comment);
    }
    /**
     * Get Comment value
     * @return \ammonkc\otaehi\StructType\Comment|null
     */
    public function getComment()
    {
        return $this->Comment;
    }
    /**
     * Set Comment value
     * @param \ammonkc\otaehi\StructType\Comment $comment
     * @return \ammonkc\otaehi\StructType\CommentType
     */
    public function setComment(\ammonkc\otaehi\StructType\Comment $comment = null)
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
     * @return \ammonkc\otaehi\StructType\CommentType
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
