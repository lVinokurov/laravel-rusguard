<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for OwnerAdditionalFieldsValue StructType
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:OwnerAdditionalFieldsValue
 * @subpackage Structs
 */
class OwnerAdditionalFieldsValue extends AbstractStructBase
{
    /**
     * The Fields
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \ArrayType\ArrayOfAdditionalFieldValue|null
     */
    protected ?\ArrayType\ArrayOfAdditionalFieldValue $Fields = null;
    /**
     * The OwnerID
     * Meta information extracted from the WSDL
     * - base: xs:string
     * - minOccurs: 0
     * - nillable: true
     * - pattern: [\da-fA-F]{8}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{12}
     * - type: tns:guid
     * @var string|null
     */
    protected ?string $OwnerID = null;
    /**
     * Constructor method for OwnerAdditionalFieldsValue
     * @uses OwnerAdditionalFieldsValue::setFields()
     * @uses OwnerAdditionalFieldsValue::setOwnerID()
     * @param \ArrayType\ArrayOfAdditionalFieldValue $fields
     * @param string $ownerID
     */
    public function __construct(?\ArrayType\ArrayOfAdditionalFieldValue $fields = null, ?string $ownerID = null)
    {
        $this
            ->setFields($fields)
            ->setOwnerID($ownerID);
    }
    /**
     * Get Fields value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \ArrayType\ArrayOfAdditionalFieldValue|null
     */
    public function getFields(): ?\ArrayType\ArrayOfAdditionalFieldValue
    {
        return isset($this->Fields) ? $this->Fields : null;
    }
    /**
     * Set Fields value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \ArrayType\ArrayOfAdditionalFieldValue $fields
     * @return \StructType\OwnerAdditionalFieldsValue
     */
    public function setFields(?\ArrayType\ArrayOfAdditionalFieldValue $fields = null): self
    {
        if (is_null($fields) || (is_array($fields) && empty($fields))) {
            unset($this->Fields);
        } else {
            $this->Fields = $fields;
        }
        
        return $this;
    }
    /**
     * Get OwnerID value
     * @return string|null
     */
    public function getOwnerID(): ?string
    {
        return $this->OwnerID;
    }
    /**
     * Set OwnerID value
     * @param string $ownerID
     * @return \StructType\OwnerAdditionalFieldsValue
     */
    public function setOwnerID(?string $ownerID = null): self
    {
        // validation for constraint: string
        if (!is_null($ownerID) && !is_string($ownerID)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($ownerID, true), gettype($ownerID)), __LINE__);
        }
        // validation for constraint: pattern([\da-fA-F]{8}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{12})
        if (!is_null($ownerID) && !preg_match('/[\\da-fA-F]{8}-[\\da-fA-F]{4}-[\\da-fA-F]{4}-[\\da-fA-F]{4}-[\\da-fA-F]{12}/', $ownerID)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a literal that is among the set of character sequences denoted by the regular expression /[\\da-fA-F]{8}-[\\da-fA-F]{4}-[\\da-fA-F]{4}-[\\da-fA-F]{4}-[\\da-fA-F]{12}/', var_export($ownerID, true)), __LINE__);
        }
        $this->OwnerID = $ownerID;
        
        return $this;
    }
}
