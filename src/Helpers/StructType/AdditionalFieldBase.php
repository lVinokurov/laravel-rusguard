<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for AdditionalFieldBase StructType
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:AdditionalFieldBase
 * @subpackage Structs
 */
class AdditionalFieldBase extends AbstractStructBase
{
    /**
     * The FieldType
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $FieldType = null;
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
     * The IsForEmployee
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var bool|null
     */
    protected ?bool $IsForEmployee = null;
    /**
     * The IsForEmployeeGroup
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var bool|null
     */
    protected ?bool $IsForEmployeeGroup = null;
    /**
     * The IsNotForShow
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var bool|null
     */
    protected ?bool $IsNotForShow = null;
    /**
     * The IsRequired
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var bool|null
     */
    protected ?bool $IsRequired = null;
    /**
     * The Name
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $Name = null;
    /**
     * The Order
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var int|null
     */
    protected ?int $Order = null;
    /**
     * The OwnerType
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $OwnerType = null;
    /**
     * Constructor method for AdditionalFieldBase
     * @uses AdditionalFieldBase::setFieldType()
     * @uses AdditionalFieldBase::setID()
     * @uses AdditionalFieldBase::setIsForEmployee()
     * @uses AdditionalFieldBase::setIsForEmployeeGroup()
     * @uses AdditionalFieldBase::setIsNotForShow()
     * @uses AdditionalFieldBase::setIsRequired()
     * @uses AdditionalFieldBase::setName()
     * @uses AdditionalFieldBase::setOrder()
     * @uses AdditionalFieldBase::setOwnerType()
     * @param string $fieldType
     * @param string $iD
     * @param bool $isForEmployee
     * @param bool $isForEmployeeGroup
     * @param bool $isNotForShow
     * @param bool $isRequired
     * @param string $name
     * @param int $order
     * @param string $ownerType
     */
    public function __construct(?string $fieldType = null, ?string $iD = null, ?bool $isForEmployee = null, ?bool $isForEmployeeGroup = null, ?bool $isNotForShow = null, ?bool $isRequired = null, ?string $name = null, ?int $order = null, ?string $ownerType = null)
    {
        $this
            ->setFieldType($fieldType)
            ->setID($iD)
            ->setIsForEmployee($isForEmployee)
            ->setIsForEmployeeGroup($isForEmployeeGroup)
            ->setIsNotForShow($isNotForShow)
            ->setIsRequired($isRequired)
            ->setName($name)
            ->setOrder($order)
            ->setOwnerType($ownerType);
    }
    /**
     * Get FieldType value
     * @return string|null
     */
    public function getFieldType(): ?string
    {
        return $this->FieldType;
    }
    /**
     * Set FieldType value
     * @uses \EnumType\FieldType::valueIsValid()
     * @uses \EnumType\FieldType::getValidValues()
     * @throws InvalidArgumentException
     * @param string $fieldType
     * @return \StructType\AdditionalFieldBase
     */
    public function setFieldType(?string $fieldType = null): self
    {
        // validation for constraint: enumeration
        if (!\EnumType\FieldType::valueIsValid($fieldType)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \EnumType\FieldType', is_array($fieldType) ? implode(', ', $fieldType) : var_export($fieldType, true), implode(', ', \EnumType\FieldType::getValidValues())), __LINE__);
        }
        $this->FieldType = $fieldType;
        
        return $this;
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
     * @return \StructType\AdditionalFieldBase
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
     * Get IsForEmployee value
     * @return bool|null
     */
    public function getIsForEmployee(): ?bool
    {
        return $this->IsForEmployee;
    }
    /**
     * Set IsForEmployee value
     * @param bool $isForEmployee
     * @return \StructType\AdditionalFieldBase
     */
    public function setIsForEmployee(?bool $isForEmployee = null): self
    {
        // validation for constraint: boolean
        if (!is_null($isForEmployee) && !is_bool($isForEmployee)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($isForEmployee, true), gettype($isForEmployee)), __LINE__);
        }
        $this->IsForEmployee = $isForEmployee;
        
        return $this;
    }
    /**
     * Get IsForEmployeeGroup value
     * @return bool|null
     */
    public function getIsForEmployeeGroup(): ?bool
    {
        return $this->IsForEmployeeGroup;
    }
    /**
     * Set IsForEmployeeGroup value
     * @param bool $isForEmployeeGroup
     * @return \StructType\AdditionalFieldBase
     */
    public function setIsForEmployeeGroup(?bool $isForEmployeeGroup = null): self
    {
        // validation for constraint: boolean
        if (!is_null($isForEmployeeGroup) && !is_bool($isForEmployeeGroup)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($isForEmployeeGroup, true), gettype($isForEmployeeGroup)), __LINE__);
        }
        $this->IsForEmployeeGroup = $isForEmployeeGroup;
        
        return $this;
    }
    /**
     * Get IsNotForShow value
     * @return bool|null
     */
    public function getIsNotForShow(): ?bool
    {
        return $this->IsNotForShow;
    }
    /**
     * Set IsNotForShow value
     * @param bool $isNotForShow
     * @return \StructType\AdditionalFieldBase
     */
    public function setIsNotForShow(?bool $isNotForShow = null): self
    {
        // validation for constraint: boolean
        if (!is_null($isNotForShow) && !is_bool($isNotForShow)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($isNotForShow, true), gettype($isNotForShow)), __LINE__);
        }
        $this->IsNotForShow = $isNotForShow;
        
        return $this;
    }
    /**
     * Get IsRequired value
     * @return bool|null
     */
    public function getIsRequired(): ?bool
    {
        return $this->IsRequired;
    }
    /**
     * Set IsRequired value
     * @param bool $isRequired
     * @return \StructType\AdditionalFieldBase
     */
    public function setIsRequired(?bool $isRequired = null): self
    {
        // validation for constraint: boolean
        if (!is_null($isRequired) && !is_bool($isRequired)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($isRequired, true), gettype($isRequired)), __LINE__);
        }
        $this->IsRequired = $isRequired;
        
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
     * @return \StructType\AdditionalFieldBase
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
    /**
     * Get Order value
     * @return int|null
     */
    public function getOrder(): ?int
    {
        return $this->Order;
    }
    /**
     * Set Order value
     * @param int $order
     * @return \StructType\AdditionalFieldBase
     */
    public function setOrder(?int $order = null): self
    {
        // validation for constraint: int
        if (!is_null($order) && !(is_int($order) || ctype_digit($order))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($order, true), gettype($order)), __LINE__);
        }
        $this->Order = $order;
        
        return $this;
    }
    /**
     * Get OwnerType value
     * @return string|null
     */
    public function getOwnerType(): ?string
    {
        return $this->OwnerType;
    }
    /**
     * Set OwnerType value
     * @uses \EnumType\OwnerFieldType::valueIsValid()
     * @uses \EnumType\OwnerFieldType::getValidValues()
     * @throws InvalidArgumentException
     * @param string $ownerType
     * @return \StructType\AdditionalFieldBase
     */
    public function setOwnerType(?string $ownerType = null): self
    {
        // validation for constraint: enumeration
        if (!\EnumType\OwnerFieldType::valueIsValid($ownerType)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \EnumType\OwnerFieldType', is_array($ownerType) ? implode(', ', $ownerType) : var_export($ownerType, true), implode(', ', \EnumType\OwnerFieldType::getValidValues())), __LINE__);
        }
        $this->OwnerType = $ownerType;
        
        return $this;
    }
}
