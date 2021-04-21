<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetLastEventByDeviceTypes StructType
 * @subpackage Structs
 */
class GetLastEventByDeviceTypes extends AbstractStructBase
{
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
     * The deviceTypes
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \ArrayType\ArrayOfstring|null
     */
    protected ?\ArrayType\ArrayOfstring $deviceTypes = null;
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
     * Constructor method for GetLastEventByDeviceTypes
     * @uses GetLastEventByDeviceTypes::setMsgTypes()
     * @uses GetLastEventByDeviceTypes::setMsgSubTypes()
     * @uses GetLastEventByDeviceTypes::setDeviceTypes()
     * @uses GetLastEventByDeviceTypes::setSubjectIDs()
     * @uses GetLastEventByDeviceTypes::setSubjectType()
     * @param \ArrayType\ArrayOfLogMsgType $msgTypes
     * @param \ArrayType\ArrayOfLogMsgSubType $msgSubTypes
     * @param \ArrayType\ArrayOfstring $deviceTypes
     * @param \ArrayType\ArrayOfguid $subjectIDs
     * @param string $subjectType
     */
    public function __construct(?\ArrayType\ArrayOfLogMsgType $msgTypes = null, ?\ArrayType\ArrayOfLogMsgSubType $msgSubTypes = null, ?\ArrayType\ArrayOfstring $deviceTypes = null, ?\ArrayType\ArrayOfguid $subjectIDs = null, ?string $subjectType = null)
    {
        $this
            ->setMsgTypes($msgTypes)
            ->setMsgSubTypes($msgSubTypes)
            ->setDeviceTypes($deviceTypes)
            ->setSubjectIDs($subjectIDs)
            ->setSubjectType($subjectType);
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
     * @return \StructType\GetLastEventByDeviceTypes
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
     * @return \StructType\GetLastEventByDeviceTypes
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
     * Get deviceTypes value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \ArrayType\ArrayOfstring|null
     */
    public function getDeviceTypes(): ?\ArrayType\ArrayOfstring
    {
        return isset($this->deviceTypes) ? $this->deviceTypes : null;
    }
    /**
     * Set deviceTypes value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \ArrayType\ArrayOfstring $deviceTypes
     * @return \StructType\GetLastEventByDeviceTypes
     */
    public function setDeviceTypes(?\ArrayType\ArrayOfstring $deviceTypes = null): self
    {
        if (is_null($deviceTypes) || (is_array($deviceTypes) && empty($deviceTypes))) {
            unset($this->deviceTypes);
        } else {
            $this->deviceTypes = $deviceTypes;
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
     * @return \StructType\GetLastEventByDeviceTypes
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
     * @return \StructType\GetLastEventByDeviceTypes
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
}
