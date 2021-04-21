<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ISS_Entity_Base StructType
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:ISS_Entity_Base
 * @subpackage Structs
 */
class ISS_Entity_Base extends AbstractStructBase
{
    /**
     * The ID
     * Meta information extracted from the WSDL
     * - base: xs:string
     * - minOccurs: 0
     * - nillable: true
     * - pattern: [\da-fA-F]{8}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{12}
     * - type: tns:guid
     * @var string|null
     */
    protected ?string $ID = null;
    /**
     * The ISS_OBJ_ID
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $ISS_OBJ_ID = null;
    /**
     * The Name
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $Name = null;
    /**
     * Constructor method for ISS_Entity_Base
     * @uses ISS_Entity_Base::setID()
     * @uses ISS_Entity_Base::setISS_OBJ_ID()
     * @uses ISS_Entity_Base::setName()
     * @param string $iD
     * @param string $iSS_OBJ_ID
     * @param string $name
     */
    public function __construct(?string $iD = null, ?string $iSS_OBJ_ID = null, ?string $name = null)
    {
        $this
            ->setID($iD)
            ->setISS_OBJ_ID($iSS_OBJ_ID)
            ->setName($name);
    }
    /**
     * Get ID value
     * @return string|null
     */
    public function getID(): ?string
    {
        return $this->ID;
    }
    /**
     * Set ID value
     * @param string $iD
     * @return \StructType\ISS_Entity_Base
     */
    public function setID(?string $iD = null): self
    {
        // validation for constraint: string
        if (!is_null($iD) && !is_string($iD)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($iD, true), gettype($iD)), __LINE__);
        }
        // validation for constraint: pattern([\da-fA-F]{8}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{12})
        if (!is_null($iD) && !preg_match('/[\\da-fA-F]{8}-[\\da-fA-F]{4}-[\\da-fA-F]{4}-[\\da-fA-F]{4}-[\\da-fA-F]{12}/', $iD)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a literal that is among the set of character sequences denoted by the regular expression /[\\da-fA-F]{8}-[\\da-fA-F]{4}-[\\da-fA-F]{4}-[\\da-fA-F]{4}-[\\da-fA-F]{12}/', var_export($iD, true)), __LINE__);
        }
        $this->ID = $iD;
        
        return $this;
    }
    /**
     * Get ISS_OBJ_ID value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getISS_OBJ_ID(): ?string
    {
        return isset($this->ISS_OBJ_ID) ? $this->ISS_OBJ_ID : null;
    }
    /**
     * Set ISS_OBJ_ID value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $iSS_OBJ_ID
     * @return \StructType\ISS_Entity_Base
     */
    public function setISS_OBJ_ID(?string $iSS_OBJ_ID = null): self
    {
        // validation for constraint: string
        if (!is_null($iSS_OBJ_ID) && !is_string($iSS_OBJ_ID)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($iSS_OBJ_ID, true), gettype($iSS_OBJ_ID)), __LINE__);
        }
        if (is_null($iSS_OBJ_ID) || (is_array($iSS_OBJ_ID) && empty($iSS_OBJ_ID))) {
            unset($this->ISS_OBJ_ID);
        } else {
            $this->ISS_OBJ_ID = $iSS_OBJ_ID;
        }
        
        return $this;
    }
    /**
     * Get Name value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getName(): ?string
    {
        return isset($this->Name) ? $this->Name : null;
    }
    /**
     * Set Name value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $name
     * @return \StructType\ISS_Entity_Base
     */
    public function setName(?string $name = null): self
    {
        // validation for constraint: string
        if (!is_null($name) && !is_string($name)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($name, true), gettype($name)), __LINE__);
        }
        if (is_null($name) || (is_array($name) && empty($name))) {
            unset($this->Name);
        } else {
            $this->Name = $name;
        }
        
        return $this;
    }
}
