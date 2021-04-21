<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for DeviceDriverInfo StructType
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:DeviceDriverInfo
 * @subpackage Structs
 */
class DeviceDriverInfo extends AbstractStructBase
{
    /**
     * The ArrayChilds
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \ArrayType\ArrayOfDeviceDriverInfo|null
     */
    protected ?\ArrayType\ArrayOfDeviceDriverInfo $ArrayChilds = null;
    /**
     * The ArrayProperties
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \ArrayType\ArrayOfPropertyValue|null
     */
    protected ?\ArrayType\ArrayOfPropertyValue $ArrayProperties = null;
    /**
     * The Cameras
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \ArrayType\ArrayOfAccessPoint2CameraChain|null
     */
    protected ?\ArrayType\ArrayOfAccessPoint2CameraChain $Cameras = null;
    /**
     * The ChangeVersion
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var int|null
     */
    protected ?int $ChangeVersion = null;
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
     * The DirtyArrayProperties
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \ArrayType\ArrayOfPropertyValue|null
     */
    protected ?\ArrayType\ArrayOfPropertyValue $DirtyArrayProperties = null;
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
     * The Name
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $Name = null;
    /**
     * The ParentPropertyName
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $ParentPropertyName = null;
    /**
     * The State
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $State = null;
    /**
     * The TagIds
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \ArrayType\ArrayOfguid|null
     */
    protected ?\ArrayType\ArrayOfguid $TagIds = null;
    /**
     * Constructor method for DeviceDriverInfo
     * @uses DeviceDriverInfo::setArrayChilds()
     * @uses DeviceDriverInfo::setArrayProperties()
     * @uses DeviceDriverInfo::setCameras()
     * @uses DeviceDriverInfo::setChangeVersion()
     * @uses DeviceDriverInfo::setDeviceServerId()
     * @uses DeviceDriverInfo::setDirtyArrayProperties()
     * @uses DeviceDriverInfo::setDriverType()
     * @uses DeviceDriverInfo::setFilterTagIds()
     * @uses DeviceDriverInfo::setID()
     * @uses DeviceDriverInfo::setName()
     * @uses DeviceDriverInfo::setParentPropertyName()
     * @uses DeviceDriverInfo::setState()
     * @uses DeviceDriverInfo::setTagIds()
     * @param \ArrayType\ArrayOfDeviceDriverInfo $arrayChilds
     * @param \ArrayType\ArrayOfPropertyValue $arrayProperties
     * @param \ArrayType\ArrayOfAccessPoint2CameraChain $cameras
     * @param int $changeVersion
     * @param string $deviceServerId
     * @param \ArrayType\ArrayOfPropertyValue $dirtyArrayProperties
     * @param string $driverType
     * @param \ArrayType\ArrayOfguid $filterTagIds
     * @param string $iD
     * @param string $name
     * @param string $parentPropertyName
     * @param string $state
     * @param \ArrayType\ArrayOfguid $tagIds
     */
    public function __construct(?\ArrayType\ArrayOfDeviceDriverInfo $arrayChilds = null, ?\ArrayType\ArrayOfPropertyValue $arrayProperties = null, ?\ArrayType\ArrayOfAccessPoint2CameraChain $cameras = null, ?int $changeVersion = null, ?string $deviceServerId = null, ?\ArrayType\ArrayOfPropertyValue $dirtyArrayProperties = null, ?string $driverType = null, ?\ArrayType\ArrayOfguid $filterTagIds = null, ?string $iD = null, ?string $name = null, ?string $parentPropertyName = null, ?string $state = null, ?\ArrayType\ArrayOfguid $tagIds = null)
    {
        $this
            ->setArrayChilds($arrayChilds)
            ->setArrayProperties($arrayProperties)
            ->setCameras($cameras)
            ->setChangeVersion($changeVersion)
            ->setDeviceServerId($deviceServerId)
            ->setDirtyArrayProperties($dirtyArrayProperties)
            ->setDriverType($driverType)
            ->setFilterTagIds($filterTagIds)
            ->setID($iD)
            ->setName($name)
            ->setParentPropertyName($parentPropertyName)
            ->setState($state)
            ->setTagIds($tagIds);
    }
    /**
     * Get ArrayChilds value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \ArrayType\ArrayOfDeviceDriverInfo|null
     */
    public function getArrayChilds(): ?\ArrayType\ArrayOfDeviceDriverInfo
    {
        return isset($this->ArrayChilds) ? $this->ArrayChilds : null;
    }
    /**
     * Set ArrayChilds value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \ArrayType\ArrayOfDeviceDriverInfo $arrayChilds
     * @return \StructType\DeviceDriverInfo
     */
    public function setArrayChilds(?\ArrayType\ArrayOfDeviceDriverInfo $arrayChilds = null): self
    {
        if (is_null($arrayChilds) || (is_array($arrayChilds) && empty($arrayChilds))) {
            unset($this->ArrayChilds);
        } else {
            $this->ArrayChilds = $arrayChilds;
        }
        
        return $this;
    }
    /**
     * Get ArrayProperties value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \ArrayType\ArrayOfPropertyValue|null
     */
    public function getArrayProperties(): ?\ArrayType\ArrayOfPropertyValue
    {
        return isset($this->ArrayProperties) ? $this->ArrayProperties : null;
    }
    /**
     * Set ArrayProperties value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \ArrayType\ArrayOfPropertyValue $arrayProperties
     * @return \StructType\DeviceDriverInfo
     */
    public function setArrayProperties(?\ArrayType\ArrayOfPropertyValue $arrayProperties = null): self
    {
        if (is_null($arrayProperties) || (is_array($arrayProperties) && empty($arrayProperties))) {
            unset($this->ArrayProperties);
        } else {
            $this->ArrayProperties = $arrayProperties;
        }
        
        return $this;
    }
    /**
     * Get Cameras value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \ArrayType\ArrayOfAccessPoint2CameraChain|null
     */
    public function getCameras(): ?\ArrayType\ArrayOfAccessPoint2CameraChain
    {
        return isset($this->Cameras) ? $this->Cameras : null;
    }
    /**
     * Set Cameras value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \ArrayType\ArrayOfAccessPoint2CameraChain $cameras
     * @return \StructType\DeviceDriverInfo
     */
    public function setCameras(?\ArrayType\ArrayOfAccessPoint2CameraChain $cameras = null): self
    {
        if (is_null($cameras) || (is_array($cameras) && empty($cameras))) {
            unset($this->Cameras);
        } else {
            $this->Cameras = $cameras;
        }
        
        return $this;
    }
    /**
     * Get ChangeVersion value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return int|null
     */
    public function getChangeVersion(): ?int
    {
        return isset($this->ChangeVersion) ? $this->ChangeVersion : null;
    }
    /**
     * Set ChangeVersion value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param int $changeVersion
     * @return \StructType\DeviceDriverInfo
     */
    public function setChangeVersion(?int $changeVersion = null): self
    {
        // validation for constraint: int
        if (!is_null($changeVersion) && !(is_int($changeVersion) || ctype_digit($changeVersion))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($changeVersion, true), gettype($changeVersion)), __LINE__);
        }
        if (is_null($changeVersion) || (is_array($changeVersion) && empty($changeVersion))) {
            unset($this->ChangeVersion);
        } else {
            $this->ChangeVersion = $changeVersion;
        }
        
        return $this;
    }
    /**
     * Get DeviceServerId value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getDeviceServerId(): ?string
    {
        return isset($this->DeviceServerId) ? $this->DeviceServerId : null;
    }
    /**
     * Set DeviceServerId value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $deviceServerId
     * @return \StructType\DeviceDriverInfo
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
        if (is_null($deviceServerId) || (is_array($deviceServerId) && empty($deviceServerId))) {
            unset($this->DeviceServerId);
        } else {
            $this->DeviceServerId = $deviceServerId;
        }
        
        return $this;
    }
    /**
     * Get DirtyArrayProperties value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \ArrayType\ArrayOfPropertyValue|null
     */
    public function getDirtyArrayProperties(): ?\ArrayType\ArrayOfPropertyValue
    {
        return isset($this->DirtyArrayProperties) ? $this->DirtyArrayProperties : null;
    }
    /**
     * Set DirtyArrayProperties value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \ArrayType\ArrayOfPropertyValue $dirtyArrayProperties
     * @return \StructType\DeviceDriverInfo
     */
    public function setDirtyArrayProperties(?\ArrayType\ArrayOfPropertyValue $dirtyArrayProperties = null): self
    {
        if (is_null($dirtyArrayProperties) || (is_array($dirtyArrayProperties) && empty($dirtyArrayProperties))) {
            unset($this->DirtyArrayProperties);
        } else {
            $this->DirtyArrayProperties = $dirtyArrayProperties;
        }
        
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
     * @return \StructType\DeviceDriverInfo
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
     * @return \StructType\DeviceDriverInfo
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
     * Get ID value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getID(): ?string
    {
        return isset($this->ID) ? $this->ID : null;
    }
    /**
     * Set ID value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $iD
     * @return \StructType\DeviceDriverInfo
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
        if (is_null($iD) || (is_array($iD) && empty($iD))) {
            unset($this->ID);
        } else {
            $this->ID = $iD;
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
     * @return \StructType\DeviceDriverInfo
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
     * @return \StructType\DeviceDriverInfo
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
     * Get State value
     * @return string|null
     */
    public function getState(): ?string
    {
        return $this->State;
    }
    /**
     * Set State value
     * @uses \EnumType\StateType::valueIsValid()
     * @uses \EnumType\StateType::getValidValues()
     * @throws InvalidArgumentException
     * @param string $state
     * @return \StructType\DeviceDriverInfo
     */
    public function setState(?string $state = null): self
    {
        // validation for constraint: enumeration
        if (!\EnumType\StateType::valueIsValid($state)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \EnumType\StateType', is_array($state) ? implode(', ', $state) : var_export($state, true), implode(', ', \EnumType\StateType::getValidValues())), __LINE__);
        }
        $this->State = $state;
        
        return $this;
    }
    /**
     * Get TagIds value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \ArrayType\ArrayOfguid|null
     */
    public function getTagIds(): ?\ArrayType\ArrayOfguid
    {
        return isset($this->TagIds) ? $this->TagIds : null;
    }
    /**
     * Set TagIds value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \ArrayType\ArrayOfguid $tagIds
     * @return \StructType\DeviceDriverInfo
     */
    public function setTagIds(?\ArrayType\ArrayOfguid $tagIds = null): self
    {
        if (is_null($tagIds) || (is_array($tagIds) && empty($tagIds))) {
            unset($this->TagIds);
        } else {
            $this->TagIds = $tagIds;
        }
        
        return $this;
    }
}
