<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for EmployeePassageNotification StructType
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:EmployeePassageNotification
 * @subpackage Structs
 */
class EmployeePassageNotification extends DriverEventNotification
{
    /**
     * The AddFields
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \StructType\OwnerAdditionalFieldsValue|null
     */
    protected ?\StructType\OwnerAdditionalFieldsValue $AddFields = null;
    /**
     * The EmployeeComment
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $EmployeeComment = null;
    /**
     * The EmployeeFirstName
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $EmployeeFirstName = null;
    /**
     * The EmployeeGroupFullPath
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $EmployeeGroupFullPath = null;
    /**
     * The EmployeeLastName
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $EmployeeLastName = null;
    /**
     * The EmployeeNumber
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var int|null
     */
    protected ?int $EmployeeNumber = null;
    /**
     * The EmployeePosition
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $EmployeePosition = null;
    /**
     * The EmployeeSecondName
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $EmployeeSecondName = null;
    /**
     * Constructor method for EmployeePassageNotification
     * @uses EmployeePassageNotification::setAddFields()
     * @uses EmployeePassageNotification::setEmployeeComment()
     * @uses EmployeePassageNotification::setEmployeeFirstName()
     * @uses EmployeePassageNotification::setEmployeeGroupFullPath()
     * @uses EmployeePassageNotification::setEmployeeLastName()
     * @uses EmployeePassageNotification::setEmployeeNumber()
     * @uses EmployeePassageNotification::setEmployeePosition()
     * @uses EmployeePassageNotification::setEmployeeSecondName()
     * @param \StructType\OwnerAdditionalFieldsValue $addFields
     * @param string $employeeComment
     * @param string $employeeFirstName
     * @param string $employeeGroupFullPath
     * @param string $employeeLastName
     * @param int $employeeNumber
     * @param string $employeePosition
     * @param string $employeeSecondName
     */
    public function __construct(?\StructType\OwnerAdditionalFieldsValue $addFields = null, ?string $employeeComment = null, ?string $employeeFirstName = null, ?string $employeeGroupFullPath = null, ?string $employeeLastName = null, ?int $employeeNumber = null, ?string $employeePosition = null, ?string $employeeSecondName = null)
    {
        $this
            ->setAddFields($addFields)
            ->setEmployeeComment($employeeComment)
            ->setEmployeeFirstName($employeeFirstName)
            ->setEmployeeGroupFullPath($employeeGroupFullPath)
            ->setEmployeeLastName($employeeLastName)
            ->setEmployeeNumber($employeeNumber)
            ->setEmployeePosition($employeePosition)
            ->setEmployeeSecondName($employeeSecondName);
    }
    /**
     * Get AddFields value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \StructType\OwnerAdditionalFieldsValue|null
     */
    public function getAddFields(): ?\StructType\OwnerAdditionalFieldsValue
    {
        return isset($this->AddFields) ? $this->AddFields : null;
    }
    /**
     * Set AddFields value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \StructType\OwnerAdditionalFieldsValue $addFields
     * @return \StructType\EmployeePassageNotification
     */
    public function setAddFields(?\StructType\OwnerAdditionalFieldsValue $addFields = null): self
    {
        if (is_null($addFields) || (is_array($addFields) && empty($addFields))) {
            unset($this->AddFields);
        } else {
            $this->AddFields = $addFields;
        }
        
        return $this;
    }
    /**
     * Get EmployeeComment value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getEmployeeComment(): ?string
    {
        return isset($this->EmployeeComment) ? $this->EmployeeComment : null;
    }
    /**
     * Set EmployeeComment value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $employeeComment
     * @return \StructType\EmployeePassageNotification
     */
    public function setEmployeeComment(?string $employeeComment = null): self
    {
        // validation for constraint: string
        if (!is_null($employeeComment) && !is_string($employeeComment)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($employeeComment, true), gettype($employeeComment)), __LINE__);
        }
        if (is_null($employeeComment) || (is_array($employeeComment) && empty($employeeComment))) {
            unset($this->EmployeeComment);
        } else {
            $this->EmployeeComment = $employeeComment;
        }
        
        return $this;
    }
    /**
     * Get EmployeeFirstName value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getEmployeeFirstName(): ?string
    {
        return isset($this->EmployeeFirstName) ? $this->EmployeeFirstName : null;
    }
    /**
     * Set EmployeeFirstName value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $employeeFirstName
     * @return \StructType\EmployeePassageNotification
     */
    public function setEmployeeFirstName(?string $employeeFirstName = null): self
    {
        // validation for constraint: string
        if (!is_null($employeeFirstName) && !is_string($employeeFirstName)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($employeeFirstName, true), gettype($employeeFirstName)), __LINE__);
        }
        if (is_null($employeeFirstName) || (is_array($employeeFirstName) && empty($employeeFirstName))) {
            unset($this->EmployeeFirstName);
        } else {
            $this->EmployeeFirstName = $employeeFirstName;
        }
        
        return $this;
    }
    /**
     * Get EmployeeGroupFullPath value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getEmployeeGroupFullPath(): ?string
    {
        return isset($this->EmployeeGroupFullPath) ? $this->EmployeeGroupFullPath : null;
    }
    /**
     * Set EmployeeGroupFullPath value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $employeeGroupFullPath
     * @return \StructType\EmployeePassageNotification
     */
    public function setEmployeeGroupFullPath(?string $employeeGroupFullPath = null): self
    {
        // validation for constraint: string
        if (!is_null($employeeGroupFullPath) && !is_string($employeeGroupFullPath)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($employeeGroupFullPath, true), gettype($employeeGroupFullPath)), __LINE__);
        }
        if (is_null($employeeGroupFullPath) || (is_array($employeeGroupFullPath) && empty($employeeGroupFullPath))) {
            unset($this->EmployeeGroupFullPath);
        } else {
            $this->EmployeeGroupFullPath = $employeeGroupFullPath;
        }
        
        return $this;
    }
    /**
     * Get EmployeeLastName value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getEmployeeLastName(): ?string
    {
        return isset($this->EmployeeLastName) ? $this->EmployeeLastName : null;
    }
    /**
     * Set EmployeeLastName value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $employeeLastName
     * @return \StructType\EmployeePassageNotification
     */
    public function setEmployeeLastName(?string $employeeLastName = null): self
    {
        // validation for constraint: string
        if (!is_null($employeeLastName) && !is_string($employeeLastName)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($employeeLastName, true), gettype($employeeLastName)), __LINE__);
        }
        if (is_null($employeeLastName) || (is_array($employeeLastName) && empty($employeeLastName))) {
            unset($this->EmployeeLastName);
        } else {
            $this->EmployeeLastName = $employeeLastName;
        }
        
        return $this;
    }
    /**
     * Get EmployeeNumber value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return int|null
     */
    public function getEmployeeNumber(): ?int
    {
        return isset($this->EmployeeNumber) ? $this->EmployeeNumber : null;
    }
    /**
     * Set EmployeeNumber value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param int $employeeNumber
     * @return \StructType\EmployeePassageNotification
     */
    public function setEmployeeNumber(?int $employeeNumber = null): self
    {
        // validation for constraint: int
        if (!is_null($employeeNumber) && !(is_int($employeeNumber) || ctype_digit($employeeNumber))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($employeeNumber, true), gettype($employeeNumber)), __LINE__);
        }
        if (is_null($employeeNumber) || (is_array($employeeNumber) && empty($employeeNumber))) {
            unset($this->EmployeeNumber);
        } else {
            $this->EmployeeNumber = $employeeNumber;
        }
        
        return $this;
    }
    /**
     * Get EmployeePosition value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getEmployeePosition(): ?string
    {
        return isset($this->EmployeePosition) ? $this->EmployeePosition : null;
    }
    /**
     * Set EmployeePosition value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $employeePosition
     * @return \StructType\EmployeePassageNotification
     */
    public function setEmployeePosition(?string $employeePosition = null): self
    {
        // validation for constraint: string
        if (!is_null($employeePosition) && !is_string($employeePosition)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($employeePosition, true), gettype($employeePosition)), __LINE__);
        }
        if (is_null($employeePosition) || (is_array($employeePosition) && empty($employeePosition))) {
            unset($this->EmployeePosition);
        } else {
            $this->EmployeePosition = $employeePosition;
        }
        
        return $this;
    }
    /**
     * Get EmployeeSecondName value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getEmployeeSecondName(): ?string
    {
        return isset($this->EmployeeSecondName) ? $this->EmployeeSecondName : null;
    }
    /**
     * Set EmployeeSecondName value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $employeeSecondName
     * @return \StructType\EmployeePassageNotification
     */
    public function setEmployeeSecondName(?string $employeeSecondName = null): self
    {
        // validation for constraint: string
        if (!is_null($employeeSecondName) && !is_string($employeeSecondName)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($employeeSecondName, true), gettype($employeeSecondName)), __LINE__);
        }
        if (is_null($employeeSecondName) || (is_array($employeeSecondName) && empty($employeeSecondName))) {
            unset($this->EmployeeSecondName);
        } else {
            $this->EmployeeSecondName = $employeeSecondName;
        }
        
        return $this;
    }
}
