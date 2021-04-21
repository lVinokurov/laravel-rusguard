<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetEventsByDeviceIDs StructType
 * @subpackage Structs
 */
class GetEventsByDeviceIDs extends AbstractStructBase
{
    /**
     * The fromMessageId
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var int|null
     */
    protected ?int $fromMessageId = null;
    /**
     * The fromDateTime
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $fromDateTime = null;
    /**
     * The toDateTime
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $toDateTime = null;
    /**
     * The msgTypes
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \ArrayType\ArrayOfLogMsgType|null
     */
    protected ?\ArrayType\ArrayOfLogMsgType $msgTypes = null;
    /**
     * The msgSubTypes
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \ArrayType\ArrayOfLogMsgSubType|null
     */
    protected ?\ArrayType\ArrayOfLogMsgSubType $msgSubTypes = null;
    /**
     * The deviceIDs
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \ArrayType\ArrayOfguid|null
     */
    protected ?\ArrayType\ArrayOfguid $deviceIDs = null;
    /**
     * The subjectIDs
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \ArrayType\ArrayOfguid|null
     */
    protected ?\ArrayType\ArrayOfguid $subjectIDs = null;
    /**
     * The subjectType
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $subjectType = null;
    /**
     * The pageNumber
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var int|null
     */
    protected ?int $pageNumber = null;
    /**
     * The pageSize
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var int|null
     */
    protected ?int $pageSize = null;
    /**
     * The sortedColumn
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $sortedColumn = null;
    /**
     * The sortOrder
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $sortOrder = null;
    /**
     * Constructor method for GetEventsByDeviceIDs
     * @uses GetEventsByDeviceIDs::setFromMessageId()
     * @uses GetEventsByDeviceIDs::setFromDateTime()
     * @uses GetEventsByDeviceIDs::setToDateTime()
     * @uses GetEventsByDeviceIDs::setMsgTypes()
     * @uses GetEventsByDeviceIDs::setMsgSubTypes()
     * @uses GetEventsByDeviceIDs::setDeviceIDs()
     * @uses GetEventsByDeviceIDs::setSubjectIDs()
     * @uses GetEventsByDeviceIDs::setSubjectType()
     * @uses GetEventsByDeviceIDs::setPageNumber()
     * @uses GetEventsByDeviceIDs::setPageSize()
     * @uses GetEventsByDeviceIDs::setSortedColumn()
     * @uses GetEventsByDeviceIDs::setSortOrder()
     * @param int $fromMessageId
     * @param string $fromDateTime
     * @param string $toDateTime
     * @param \ArrayType\ArrayOfLogMsgType $msgTypes
     * @param \ArrayType\ArrayOfLogMsgSubType $msgSubTypes
     * @param \ArrayType\ArrayOfguid $deviceIDs
     * @param \ArrayType\ArrayOfguid $subjectIDs
     * @param string $subjectType
     * @param int $pageNumber
     * @param int $pageSize
     * @param string $sortedColumn
     * @param string $sortOrder
     */
    public function __construct(?int $fromMessageId = null, ?string $fromDateTime = null, ?string $toDateTime = null, ?\ArrayType\ArrayOfLogMsgType $msgTypes = null, ?\ArrayType\ArrayOfLogMsgSubType $msgSubTypes = null, ?\ArrayType\ArrayOfguid $deviceIDs = null, ?\ArrayType\ArrayOfguid $subjectIDs = null, ?string $subjectType = null, ?int $pageNumber = null, ?int $pageSize = null, ?string $sortedColumn = null, ?string $sortOrder = null)
    {
        $this
            ->setFromMessageId($fromMessageId)
            ->setFromDateTime($fromDateTime)
            ->setToDateTime($toDateTime)
            ->setMsgTypes($msgTypes)
            ->setMsgSubTypes($msgSubTypes)
            ->setDeviceIDs($deviceIDs)
            ->setSubjectIDs($subjectIDs)
            ->setSubjectType($subjectType)
            ->setPageNumber($pageNumber)
            ->setPageSize($pageSize)
            ->setSortedColumn($sortedColumn)
            ->setSortOrder($sortOrder);
    }
    /**
     * Get fromMessageId value
     * @return int|null
     */
    public function getFromMessageId(): ?int
    {
        return $this->fromMessageId;
    }
    /**
     * Set fromMessageId value
     * @param int $fromMessageId
     * @return \StructType\GetEventsByDeviceIDs
     */
    public function setFromMessageId(?int $fromMessageId = null): self
    {
        // validation for constraint: int
        if (!is_null($fromMessageId) && !(is_int($fromMessageId) || ctype_digit($fromMessageId))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($fromMessageId, true), gettype($fromMessageId)), __LINE__);
        }
        $this->fromMessageId = $fromMessageId;
        
        return $this;
    }
    /**
     * Get fromDateTime value
     * @return string|null
     */
    public function getFromDateTime(): ?string
    {
        return $this->fromDateTime;
    }
    /**
     * Set fromDateTime value
     * @param string $fromDateTime
     * @return \StructType\GetEventsByDeviceIDs
     */
    public function setFromDateTime(?string $fromDateTime = null): self
    {
        // validation for constraint: string
        if (!is_null($fromDateTime) && !is_string($fromDateTime)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($fromDateTime, true), gettype($fromDateTime)), __LINE__);
        }
        $this->fromDateTime = $fromDateTime;
        
        return $this;
    }
    /**
     * Get toDateTime value
     * @return string|null
     */
    public function getToDateTime(): ?string
    {
        return $this->toDateTime;
    }
    /**
     * Set toDateTime value
     * @param string $toDateTime
     * @return \StructType\GetEventsByDeviceIDs
     */
    public function setToDateTime(?string $toDateTime = null): self
    {
        // validation for constraint: string
        if (!is_null($toDateTime) && !is_string($toDateTime)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($toDateTime, true), gettype($toDateTime)), __LINE__);
        }
        $this->toDateTime = $toDateTime;
        
        return $this;
    }
    /**
     * Get msgTypes value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \ArrayType\ArrayOfLogMsgType|null
     */
    public function getMsgTypes(): ?\ArrayType\ArrayOfLogMsgType
    {
        return isset($this->msgTypes) ? $this->msgTypes : null;
    }
    /**
     * Set msgTypes value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \ArrayType\ArrayOfLogMsgType $msgTypes
     * @return \StructType\GetEventsByDeviceIDs
     */
    public function setMsgTypes(?\ArrayType\ArrayOfLogMsgType $msgTypes = null): self
    {
        if (is_null($msgTypes) || (is_array($msgTypes) && empty($msgTypes))) {
            unset($this->msgTypes);
        } else {
            $this->msgTypes = $msgTypes;
        }
        
        return $this;
    }
    /**
     * Get msgSubTypes value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \ArrayType\ArrayOfLogMsgSubType|null
     */
    public function getMsgSubTypes(): ?\ArrayType\ArrayOfLogMsgSubType
    {
        return isset($this->msgSubTypes) ? $this->msgSubTypes : null;
    }
    /**
     * Set msgSubTypes value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \ArrayType\ArrayOfLogMsgSubType $msgSubTypes
     * @return \StructType\GetEventsByDeviceIDs
     */
    public function setMsgSubTypes(?\ArrayType\ArrayOfLogMsgSubType $msgSubTypes = null): self
    {
        if (is_null($msgSubTypes) || (is_array($msgSubTypes) && empty($msgSubTypes))) {
            unset($this->msgSubTypes);
        } else {
            $this->msgSubTypes = $msgSubTypes;
        }
        
        return $this;
    }
    /**
     * Get deviceIDs value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \ArrayType\ArrayOfguid|null
     */
    public function getDeviceIDs(): ?\ArrayType\ArrayOfguid
    {
        return isset($this->deviceIDs) ? $this->deviceIDs : null;
    }
    /**
     * Set deviceIDs value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \ArrayType\ArrayOfguid $deviceIDs
     * @return \StructType\GetEventsByDeviceIDs
     */
    public function setDeviceIDs(?\ArrayType\ArrayOfguid $deviceIDs = null): self
    {
        if (is_null($deviceIDs) || (is_array($deviceIDs) && empty($deviceIDs))) {
            unset($this->deviceIDs);
        } else {
            $this->deviceIDs = $deviceIDs;
        }
        
        return $this;
    }
    /**
     * Get subjectIDs value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \ArrayType\ArrayOfguid|null
     */
    public function getSubjectIDs(): ?\ArrayType\ArrayOfguid
    {
        return isset($this->subjectIDs) ? $this->subjectIDs : null;
    }
    /**
     * Set subjectIDs value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \ArrayType\ArrayOfguid $subjectIDs
     * @return \StructType\GetEventsByDeviceIDs
     */
    public function setSubjectIDs(?\ArrayType\ArrayOfguid $subjectIDs = null): self
    {
        if (is_null($subjectIDs) || (is_array($subjectIDs) && empty($subjectIDs))) {
            unset($this->subjectIDs);
        } else {
            $this->subjectIDs = $subjectIDs;
        }
        
        return $this;
    }
    /**
     * Get subjectType value
     * @return string|null
     */
    public function getSubjectType(): ?string
    {
        return $this->subjectType;
    }
    /**
     * Set subjectType value
     * @uses \EnumType\LogSubjectType::valueIsValid()
     * @uses \EnumType\LogSubjectType::getValidValues()
     * @throws InvalidArgumentException
     * @param string $subjectType
     * @return \StructType\GetEventsByDeviceIDs
     */
    public function setSubjectType(?string $subjectType = null): self
    {
        // validation for constraint: enumeration
        if (!\EnumType\LogSubjectType::valueIsValid($subjectType)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \EnumType\LogSubjectType', is_array($subjectType) ? implode(', ', $subjectType) : var_export($subjectType, true), implode(', ', \EnumType\LogSubjectType::getValidValues())), __LINE__);
        }
        $this->subjectType = $subjectType;
        
        return $this;
    }
    /**
     * Get pageNumber value
     * @return int|null
     */
    public function getPageNumber(): ?int
    {
        return $this->pageNumber;
    }
    /**
     * Set pageNumber value
     * @param int $pageNumber
     * @return \StructType\GetEventsByDeviceIDs
     */
    public function setPageNumber(?int $pageNumber = null): self
    {
        // validation for constraint: int
        if (!is_null($pageNumber) && !(is_int($pageNumber) || ctype_digit($pageNumber))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($pageNumber, true), gettype($pageNumber)), __LINE__);
        }
        $this->pageNumber = $pageNumber;
        
        return $this;
    }
    /**
     * Get pageSize value
     * @return int|null
     */
    public function getPageSize(): ?int
    {
        return $this->pageSize;
    }
    /**
     * Set pageSize value
     * @param int $pageSize
     * @return \StructType\GetEventsByDeviceIDs
     */
    public function setPageSize(?int $pageSize = null): self
    {
        // validation for constraint: int
        if (!is_null($pageSize) && !(is_int($pageSize) || ctype_digit($pageSize))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($pageSize, true), gettype($pageSize)), __LINE__);
        }
        $this->pageSize = $pageSize;
        
        return $this;
    }
    /**
     * Get sortedColumn value
     * @return string|null
     */
    public function getSortedColumn(): ?string
    {
        return $this->sortedColumn;
    }
    /**
     * Set sortedColumn value
     * @uses \EnumType\LogMessageSortedColumn::valueIsValid()
     * @uses \EnumType\LogMessageSortedColumn::getValidValues()
     * @throws InvalidArgumentException
     * @param string $sortedColumn
     * @return \StructType\GetEventsByDeviceIDs
     */
    public function setSortedColumn(?string $sortedColumn = null): self
    {
        // validation for constraint: enumeration
        if (!\EnumType\LogMessageSortedColumn::valueIsValid($sortedColumn)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \EnumType\LogMessageSortedColumn', is_array($sortedColumn) ? implode(', ', $sortedColumn) : var_export($sortedColumn, true), implode(', ', \EnumType\LogMessageSortedColumn::getValidValues())), __LINE__);
        }
        $this->sortedColumn = $sortedColumn;
        
        return $this;
    }
    /**
     * Get sortOrder value
     * @return string|null
     */
    public function getSortOrder(): ?string
    {
        return $this->sortOrder;
    }
    /**
     * Set sortOrder value
     * @uses \EnumType\SortOrder::valueIsValid()
     * @uses \EnumType\SortOrder::getValidValues()
     * @throws InvalidArgumentException
     * @param string $sortOrder
     * @return \StructType\GetEventsByDeviceIDs
     */
    public function setSortOrder(?string $sortOrder = null): self
    {
        // validation for constraint: enumeration
        if (!\EnumType\SortOrder::valueIsValid($sortOrder)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \EnumType\SortOrder', is_array($sortOrder) ? implode(', ', $sortOrder) : var_export($sortOrder, true), implode(', ', \EnumType\SortOrder::getValidValues())), __LINE__);
        }
        $this->sortOrder = $sortOrder;
        
        return $this;
    }
}
