<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for EmployeeViewFieldMetadata StructType
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:EmployeeViewFieldMetadata
 * @subpackage Structs
 */
class EmployeeViewFieldMetadata extends AbstractStructBase
{
    /**
     * The FieldDBType
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $FieldDBType = null;
    /**
     * The FieldName
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $FieldName = null;
    /**
     * The FieldType
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $FieldType = null;
    /**
     * Constructor method for EmployeeViewFieldMetadata
     * @uses EmployeeViewFieldMetadata::setFieldDBType()
     * @uses EmployeeViewFieldMetadata::setFieldName()
     * @uses EmployeeViewFieldMetadata::setFieldType()
     * @param string $fieldDBType
     * @param string $fieldName
     * @param string $fieldType
     */
    public function __construct(?string $fieldDBType = null, ?string $fieldName = null, ?string $fieldType = null)
    {
        $this
            ->setFieldDBType($fieldDBType)
            ->setFieldName($fieldName)
            ->setFieldType($fieldType);
    }
    /**
     * Get FieldDBType value
     * @return string|null
     */
    public function getFieldDBType(): ?string
    {
        return $this->FieldDBType;
    }
    /**
     * Set FieldDBType value
     * @uses \EnumType\SqlDbType::valueIsValid()
     * @uses \EnumType\SqlDbType::getValidValues()
     * @throws InvalidArgumentException
     * @param string $fieldDBType
     * @return \StructType\EmployeeViewFieldMetadata
     */
    public function setFieldDBType(?string $fieldDBType = null): self
    {
        // validation for constraint: enumeration
        if (!\EnumType\SqlDbType::valueIsValid($fieldDBType)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \EnumType\SqlDbType', is_array($fieldDBType) ? implode(', ', $fieldDBType) : var_export($fieldDBType, true), implode(', ', \EnumType\SqlDbType::getValidValues())), __LINE__);
        }
        $this->FieldDBType = $fieldDBType;
        
        return $this;
    }
    /**
     * Get FieldName value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getFieldName(): ?string
    {
        return isset($this->FieldName) ? $this->FieldName : null;
    }
    /**
     * Set FieldName value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $fieldName
     * @return \StructType\EmployeeViewFieldMetadata
     */
    public function setFieldName(?string $fieldName = null): self
    {
        // validation for constraint: string
        if (!is_null($fieldName) && !is_string($fieldName)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($fieldName, true), gettype($fieldName)), __LINE__);
        }
        if (is_null($fieldName) || (is_array($fieldName) && empty($fieldName))) {
            unset($this->FieldName);
        } else {
            $this->FieldName = $fieldName;
        }
        
        return $this;
    }
    /**
     * Get FieldType value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getFieldType(): ?string
    {
        return isset($this->FieldType) ? $this->FieldType : null;
    }
    /**
     * Set FieldType value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $fieldType
     * @return \StructType\EmployeeViewFieldMetadata
     */
    public function setFieldType(?string $fieldType = null): self
    {
        // validation for constraint: string
        if (!is_null($fieldType) && !is_string($fieldType)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($fieldType, true), gettype($fieldType)), __LINE__);
        }
        if (is_null($fieldType) || (is_array($fieldType) && empty($fieldType))) {
            unset($this->FieldType);
        } else {
            $this->FieldType = $fieldType;
        }
        
        return $this;
    }
}
