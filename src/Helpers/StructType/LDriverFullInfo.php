<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for LDriverFullInfo StructType
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:LDriverFullInfo
 * @subpackage Structs
 */
class LDriverFullInfo extends AbstractStructBase
{
    /**
     * The DeviceServerId
     * Meta information extracted from the WSDL
     * - base: xs:string
     * - minOccurs: 0
     * - nillable: true
     * - pattern: [\da-fA-F]{8}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{12}
     * - type: tns:guid
     * @var string|null
     */
    protected ?string $DeviceServerId = null;
    /**
     * The DriverType
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $DriverType = null;
    /**
     * The FilterTagIds
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \ArrayType\ArrayOfguid|null
     */
    protected ?\ArrayType\ArrayOfguid $FilterTagIds = null;
    /**
     * The Id
     * Meta information extracted from the WSDL
     * - base: xs:string
     * - minOccurs: 0
     * - nillable: true
     * - pattern: [\da-fA-F]{8}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{12}
     * - type: tns:guid
     * @var string|null
     */
    protected ?string $Id = null;
    /**
     * The IsActive
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var bool|null
     */
    protected ?bool $IsActive = null;
    /**
     * The IsUnknownID
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var bool|null
     */
    protected ?bool $IsUnknownID = null;
    /**
     * The Name
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $Name = null;
    /**
     * The ParentId
     * Meta information extracted from the WSDL
     * - base: xs:string
     * - minOccurs: 0
     * - nillable: true
     * - pattern: [\da-fA-F]{8}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{12}
     * - type: tns:guid
     * @var string|null
     */
    protected ?string $ParentId = null;
    /**
     * The ParentPropertyName
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $ParentPropertyName = null;
    /**
     * The Properties
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \ArrayType\ArrayOfLResourcePropertyValue|null
     */
    protected ?\ArrayType\ArrayOfLResourcePropertyValue $Properties = null;
    /**
     * The State
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $State = null;
    /**
     * The States
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \ArrayType\ArrayOfLResourcePropertyValue|null
     */
    protected ?\ArrayType\ArrayOfLResourcePropertyValue $States = null;
    /**
     * Constructor method for LDriverFullInfo
     * @uses LDriverFullInfo::setDeviceServerId()
     * @uses LDriverFullInfo::setDriverType()
     * @uses LDriverFullInfo::setFilterTagIds()
     * @uses LDriverFullInfo::setId()
     * @uses LDriverFullInfo::setIsActive()
     * @uses LDriverFullInfo::setIsUnknownID()
     * @uses LDriverFullInfo::setName()
     * @uses LDriverFullInfo::setParentId()
     * @uses LDriverFullInfo::setParentPropertyName()
     * @uses LDriverFullInfo::setProperties()
     * @uses LDriverFullInfo::setState()
     * @uses LDriverFullInfo::setStates()
     * @param string $deviceServerId
     * @param string $driverType
     * @param \ArrayType\ArrayOfguid $filterTagIds
     * @param string $id
     * @param bool $isActive
     * @param bool $isUnknownID
     * @param string $name
     * @param string $parentId
     * @param string $parentPropertyName
     * @param \ArrayType\ArrayOfLResourcePropertyValue $properties
     * @param string $state
     * @param \ArrayType\ArrayOfLResourcePropertyValue $states
     */
    public function __construct(?string $deviceServerId = null, ?string $driverType = null, ?\ArrayType\ArrayOfguid $filterTagIds = null, ?string $id = null, ?bool $isActive = null, ?bool $isUnknownID = null, ?string $name = null, ?string $parentId = null, ?string $parentPropertyName = null, ?\ArrayType\ArrayOfLResourcePropertyValue $properties = null, ?string $state = null, ?\ArrayType\ArrayOfLResourcePropertyValue $states = null)
    {
        $this
            ->setDeviceServerId($deviceServerId)
            ->setDriverType($driverType)
            ->setFilterTagIds($filterTagIds)
            ->setId($id)
            ->setIsActive($isActive)
            ->setIsUnknownID($isUnknownID)
            ->setName($name)
            ->setParentId($parentId)
            ->setParentPropertyName($parentPropertyName)
            ->setProperties($properties)
            ->setState($state)
            ->setStates($states);
    }
    /**
     * Get DeviceServerId value
     * @return string|null
     */
    public function getDeviceServerId(): ?string
    {
        return $this->DeviceServerId;
    }
    /**
     * Set DeviceServerId value
     * @param string $deviceServerId
     * @return \StructType\LDriverFullInfo
     */
    public function setDeviceServerId(?string $deviceServerId = null): self
    {
        // validation for constraint: string
        if (!is_null($deviceServerId) && !is_string($deviceServerId)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($deviceServerId, true), gettype($deviceServerId)), __LINE__);
        }
        // validation for constraint: pattern([\da-fA-F]{8}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{12})
        if (!is_null($deviceServerId) && !preg_match('/[\\da-fA-F]{8}-[\\da-fA-F]{4}-[\\da-fA-F]{4}-[\\da-fA-F]{4}-[\\da-fA-F]{12}/', $deviceServerId)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a literal that is among the set of character sequences denoted by the regular expression /[\\da-fA-F]{8}-[\\da-fA-F]{4}-[\\da-fA-F]{4}-[\\da-fA-F]{4}-[\\da-fA-F]{12}/', var_export($deviceServerId, true)), __LINE__);
        }
        $this->DeviceServerId = $deviceServerId;
        
        return $this;
    }
    /**
     * Get DriverType value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getDriverType(): ?string
    {
        return isset($this->DriverType) ? $this->DriverType : null;
    }
    /**
     * Set DriverType value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $driverType
     * @return \StructType\LDriverFullInfo
     */
    public function setDriverType(?string $driverType = null): self
    {
        // validation for constraint: string
        if (!is_null($driverType) && !is_string($driverType)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($driverType, true), gettype($driverType)), __LINE__);
        }
        if (is_null($driverType) || (is_array($driverType) && empty($driverType))) {
            unset($this->DriverType);
        } else {
            $this->DriverType = $driverType;
        }
        
        return $this;
    }
    /**
     * Get FilterTagIds value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \ArrayType\ArrayOfguid|null
     */
    public function getFilterTagIds(): ?\ArrayType\ArrayOfguid
    {
        return isset($this->FilterTagIds) ? $this->FilterTagIds : null;
    }
    /**
     * Set FilterTagIds value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \ArrayType\ArrayOfguid $filterTagIds
     * @return \StructType\LDriverFullInfo
     */
    public function setFilterTagIds(?\ArrayType\ArrayOfguid $filterTagIds = null): self
    {
        if (is_null($filterTagIds) || (is_array($filterTagIds) && empty($filterTagIds))) {
            unset($this->FilterTagIds);
        } else {
            $this->FilterTagIds = $filterTagIds;
        }
        
        return $this;
    }
    /**
     * Get Id value
     * @return string|null
     */
    public function getId(): ?string
    {
        return $this->Id;
    }
    /**
     * Set Id value
     * @param string $id
     * @return \StructType\LDriverFullInfo
     */
    public function setId(?string $id = null): self
    {
        // validation for constraint: string
        if (!is_null($id) && !is_string($id)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($id, true), gettype($id)), __LINE__);
        }
        // validation for constraint: pattern([\da-fA-F]{8}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{12})
        if (!is_null($id) && !preg_match('/[\\da-fA-F]{8}-[\\da-fA-F]{4}-[\\da-fA-F]{4}-[\\da-fA-F]{4}-[\\da-fA-F]{12}/', $id)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a literal that is among the set of character sequences denoted by the regular expression /[\\da-fA-F]{8}-[\\da-fA-F]{4}-[\\da-fA-F]{4}-[\\da-fA-F]{4}-[\\da-fA-F]{12}/', var_export($id, true)), __LINE__);
        }
        $this->Id = $id;
        
        return $this;
    }
    /**
     * Get IsActive value
     * @return bool|null
     */
    public function getIsActive(): ?bool
    {
        return $this->IsActive;
    }
    /**
     * Set IsActive value
     * @param bool $isActive
     * @return \StructType\LDriverFullInfo
     */
    public function setIsActive(?bool $isActive = null): self
    {
        // validation for constraint: boolean
        if (!is_null($isActive) && !is_bool($isActive)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($isActive, true), gettype($isActive)), __LINE__);
        }
        $this->IsActive = $isActive;
        
        return $this;
    }
    /**
     * Get IsUnknownID value
     * @return bool|null
     */
    public function getIsUnknownID(): ?bool
    {
        return $this->IsUnknownID;
    }
    /**
     * Set IsUnknownID value
     * @param bool $isUnknownID
     * @return \StructType\LDriverFullInfo
     */
    public function setIsUnknownID(?bool $isUnknownID = null): self
    {
        // validation for constraint: boolean
        if (!is_null($isUnknownID) && !is_bool($isUnknownID)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($isUnknownID, true), gettype($isUnknownID)), __LINE__);
        }
        $this->IsUnknownID = $isUnknownID;
        
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
     * @return \StructType\LDriverFullInfo
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
     * Get ParentId value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getParentId(): ?string
    {
        return isset($this->ParentId) ? $this->ParentId : null;
    }
    /**
     * Set ParentId value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $parentId
     * @return \StructType\LDriverFullInfo
     */
    public function setParentId(?string $parentId = null): self
    {
        // validation for constraint: string
        if (!is_null($parentId) && !is_string($parentId)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($parentId, true), gettype($parentId)), __LINE__);
        }
        // validation for constraint: pattern([\da-fA-F]{8}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{12})
        if (!is_null($parentId) && !preg_match('/[\\da-fA-F]{8}-[\\da-fA-F]{4}-[\\da-fA-F]{4}-[\\da-fA-F]{4}-[\\da-fA-F]{12}/', $parentId)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a literal that is among the set of character sequences denoted by the regular expression /[\\da-fA-F]{8}-[\\da-fA-F]{4}-[\\da-fA-F]{4}-[\\da-fA-F]{4}-[\\da-fA-F]{12}/', var_export($parentId, true)), __LINE__);
        }
        if (is_null($parentId) || (is_array($parentId) && empty($parentId))) {
            unset($this->ParentId);
        } else {
            $this->ParentId = $parentId;
        }
        
        return $this;
    }
    /**
     * Get ParentPropertyName value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getParentPropertyName(): ?string
    {
        return isset($this->ParentPropertyName) ? $this->ParentPropertyName : null;
    }
    /**
     * Set ParentPropertyName value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $parentPropertyName
     * @return \StructType\LDriverFullInfo
     */
    public function setParentPropertyName(?string $parentPropertyName = null): self
    {
        // validation for constraint: string
        if (!is_null($parentPropertyName) && !is_string($parentPropertyName)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($parentPropertyName, true), gettype($parentPropertyName)), __LINE__);
        }
        if (is_null($parentPropertyName) || (is_array($parentPropertyName) && empty($parentPropertyName))) {
            unset($this->ParentPropertyName);
        } else {
            $this->ParentPropertyName = $parentPropertyName;
        }
        
        return $this;
    }
    /**
     * Get Properties value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \ArrayType\ArrayOfLResourcePropertyValue|null
     */
    public function getProperties(): ?\ArrayType\ArrayOfLResourcePropertyValue
    {
        return isset($this->Properties) ? $this->Properties : null;
    }
    /**
     * Set Properties value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \ArrayType\ArrayOfLResourcePropertyValue $properties
     * @return \StructType\LDriverFullInfo
     */
    public function setProperties(?\ArrayType\ArrayOfLResourcePropertyValue $properties = null): self
    {
        if (is_null($properties) || (is_array($properties) && empty($properties))) {
            unset($this->Properties);
        } else {
            $this->Properties = $properties;
        }
        
        return $this;
    }
    /**
     * Get State value
     * @return string|null
     */
    public function getState(): ?string
    {
        return $this->State;
    }
    /**
     * Set State value
     * @uses \EnumType\DeviceStateEnum::valueIsValid()
     * @uses \EnumType\DeviceStateEnum::getValidValues()
     * @throws InvalidArgumentException
     * @param string $state
     * @return \StructType\LDriverFullInfo
     */
    public function setState(?string $state = null): self
    {
        // validation for constraint: enumeration
        if (!\EnumType\DeviceStateEnum::valueIsValid($state)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \EnumType\DeviceStateEnum', is_array($state) ? implode(', ', $state) : var_export($state, true), implode(', ', \EnumType\DeviceStateEnum::getValidValues())), __LINE__);
        }
        $this->State = $state;
        
        return $this;
    }
    /**
     * Get States value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \ArrayType\ArrayOfLResourcePropertyValue|null
     */
    public function getStates(): ?\ArrayType\ArrayOfLResourcePropertyValue
    {
        return isset($this->States) ? $this->States : null;
    }
    /**
     * Set States value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \ArrayType\ArrayOfLResourcePropertyValue $states
     * @return \StructType\LDriverFullInfo
     */
    public function setStates(?\ArrayType\ArrayOfLResourcePropertyValue $states = null): self
    {
        if (is_null($states) || (is_array($states) && empty($states))) {
            unset($this->States);
        } else {
            $this->States = $states;
        }
        
        return $this;
    }
}
