<?php

namespace Ammonkc\Otaehi\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for UniqueID_Type StructType
 * @subpackage Structs
 */
class UniqueID_Type extends AbstractStructBase
{
    /**
     * URL that identifies the location associated with the record identified by the
     * UniqueID.
     *
     * @property string $URL
     */
    protected $URL = null;

    /**
     * A reference to the Type of object defined by the UniqueID element. Refer to
     * OpenTravel Code List Unique ID Type (UIT).
     *
     * @property string $Type
     */
    protected $Type = null;

    /**
     * The identification of a record as it exists at a point in time. An Instance is
     * used in update messages where the sender must assure the server that the update
     * sent refers to the most recent modification level of the object being updated.
     *
     * @property string $Instance
     */
    protected $Instance = null;

    /**
     * A unique identifying value assigned by the creating system. The ID attribute may
     * be used to reference a primary-key value within a database or in a particular
     * implementation.
     *
     * @property string $ID
     */
    protected $ID = null;

    /**
     * Used to identify the source of the identifier (e.g., IATA, ABTA).
     *
     * @property string $IDContext
     */
    protected $IDContext = null;

    /**
     * The CompanyName
     * @var mixed
     */
    public $CompanyName;
    /**
     * The TPA_Extensions
     * @var mixed
     */
    public $TPA_Extensions;
    /**
     * Constructor method for UniqueID_Type
     * @uses UniqueID_Type::setCompanyName()
     * @uses UniqueID_Type::setTPA_Extensions()
     * @param mixed $companyName
     * @param mixed $tPA_Extensions
     */
    public function __construct($url = null, $type = null, $instance = null, $id = null, $idContext = null, $companyName = null, $tPA_Extensions = null)
    {
        $this->setURL($url)
             ->setType($type)
             ->setInstance($instance)
             ->setID($id)
             ->setIDContext($idContext)
             ->setCompanyName($companyName)
             ->setTPA_Extensions($tPA_Extensions);
    }
    /**
     * Gets as URL
     *
     * URL that identifies the location associated with the record identified by the
     * UniqueID.
     *
     * @return string
     */
    public function getURL()
    {
        return $this->URL;
    }

    /**
     * Sets a new URL
     *
     * URL that identifies the location associated with the record identified by the
     * UniqueID.
     *
     * @param string $URL
     * @return self
     */
    public function setURL($URL)
    {
        $this->URL = $URL;
        return $this;
    }

    /**
     * Gets as Type
     *
     * A reference to the Type of object defined by the UniqueID element. Refer to
     * OpenTravel Code List Unique ID Type (UIT).
     *
     * @return string
     */
    public function getType()
    {
        return $this->Type;
    }

    /**
     * Sets a new Type
     *
     * A reference to the Type of object defined by the UniqueID element. Refer to
     * OpenTravel Code List Unique ID Type (UIT).
     *
     * @param string $Type
     * @return self
     */
    public function setType($Type)
    {
        $this->Type = $Type;
        return $this;
    }

    /**
     * Gets as Instance
     *
     * The identification of a record as it exists at a point in time. An Instance is
     * used in update messages where the sender must assure the server that the update
     * sent refers to the most recent modification level of the object being updated.
     *
     * @return string
     */
    public function getInstance()
    {
        return $this->Instance;
    }

    /**
     * Sets a new Instance
     *
     * The identification of a record as it exists at a point in time. An Instance is
     * used in update messages where the sender must assure the server that the update
     * sent refers to the most recent modification level of the object being updated.
     *
     * @param string $Instance
     * @return self
     */
    public function setInstance($Instance)
    {
        $this->Instance = $Instance;
        return $this;
    }

    /**
     * Gets as ID
     *
     * A unique identifying value assigned by the creating system. The ID attribute may
     * be used to reference a primary-key value within a database or in a particular
     * implementation.
     *
     * @return string
     */
    public function getID()
    {
        return $this->ID;
    }

    /**
     * Sets a new ID
     *
     * A unique identifying value assigned by the creating system. The ID attribute may
     * be used to reference a primary-key value within a database or in a particular
     * implementation.
     *
     * @param string $ID
     * @return self
     */
    public function setID($ID)
    {
        $this->ID = $ID;
        return $this;
    }

    /**
     * Gets as IDContext
     *
     * Used to identify the source of the identifier (e.g., IATA, ABTA).
     *
     * @return string
     */
    public function getIDContext()
    {
        return $this->IDContext;
    }

    /**
     * Sets a new IDContext
     *
     * Used to identify the source of the identifier (e.g., IATA, ABTA).
     *
     * @param string $IDContext
     * @return self
     */
    public function setIDContext($IDContext)
    {
        $this->IDContext = $IDContext;
        return $this;
    }
    /**
     * Get CompanyName value
     * @return mixed|null
     */
    public function getCompanyName()
    {
        return $this->CompanyName;
    }
    /**
     * Set CompanyName value
     * @param mixed $companyName
     * @return \Ammonkc\Otaehi\StructType\UniqueID_Type
     */
    public function setCompanyName($companyName = null)
    {
        $this->CompanyName = $companyName;
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
     * @return \Ammonkc\Otaehi\StructType\UniqueID_Type
     */
    public function setTPA_Extensions($tPA_Extensions = null)
    {
        $this->TPA_Extensions = $tPA_Extensions;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Ammonkc\Otaehi\StructType\UniqueID_Type
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
