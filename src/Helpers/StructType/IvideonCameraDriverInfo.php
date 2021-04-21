<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for IvideonCameraDriverInfo StructType
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:IvideonCameraDriverInfo
 * @subpackage Structs
 */
class IvideonCameraDriverInfo extends AbstractStructBase
{
    /**
     * The CameraType
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $CameraType = null;
    /**
     * The DriverId
     * Meta information extracted from the WSDL
     * - base: xs:string
     * - minOccurs: 0
     * - nillable: true
     * - pattern: [\da-fA-F]{8}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{12}
     * - type: tns:guid
     * @var string|null
     */
    protected ?string $DriverId = null;
    /**
     * The Name
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $Name = null;
    /**
     * The Path
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $Path = null;
    /**
     * The ServerID
     * Meta information extracted from the WSDL
     * - base: xs:string
     * - minOccurs: 0
     * - nillable: true
     * - pattern: [\da-fA-F]{8}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{12}
     * - type: tns:guid
     * @var string|null
     */
    protected ?string $ServerID = null;
    /**
     * The ServerType
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $ServerType = null;
    /**
     * Constructor method for IvideonCameraDriverInfo
     * @uses IvideonCameraDriverInfo::setCameraType()
     * @uses IvideonCameraDriverInfo::setDriverId()
     * @uses IvideonCameraDriverInfo::setName()
     * @uses IvideonCameraDriverInfo::setPath()
     * @uses IvideonCameraDriverInfo::setServerID()
     * @uses IvideonCameraDriverInfo::setServerType()
     * @param string $cameraType
     * @param string $driverId
     * @param string $name
     * @param string $path
     * @param string $serverID
     * @param string $serverType
     */
    public function __construct(?string $cameraType = null, ?string $driverId = null, ?string $name = null, ?string $path = null, ?string $serverID = null, ?string $serverType = null)
    {
        $this
            ->setCameraType($cameraType)
            ->setDriverId($driverId)
            ->setName($name)
            ->setPath($path)
            ->setServerID($serverID)
            ->setServerType($serverType);
    }
    /**
     * Get CameraType value
     * @return string|null
     */
    public function getCameraType(): ?string
    {
        return $this->CameraType;
    }
    /**
     * Set CameraType value
     * @uses \EnumType\CameraProductType::valueIsValid()
     * @uses \EnumType\CameraProductType::getValidValues()
     * @throws InvalidArgumentException
     * @param string $cameraType
     * @return \StructType\IvideonCameraDriverInfo
     */
    public function setCameraType(?string $cameraType = null): self
    {
        // validation for constraint: enumeration
        if (!\EnumType\CameraProductType::valueIsValid($cameraType)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \EnumType\CameraProductType', is_array($cameraType) ? implode(', ', $cameraType) : var_export($cameraType, true), implode(', ', \EnumType\CameraProductType::getValidValues())), __LINE__);
        }
        $this->CameraType = $cameraType;
        
        return $this;
    }
    /**
     * Get DriverId value
     * @return string|null
     */
    public function getDriverId(): ?string
    {
        return $this->DriverId;
    }
    /**
     * Set DriverId value
     * @param string $driverId
     * @return \StructType\IvideonCameraDriverInfo
     */
    public function setDriverId(?string $driverId = null): self
    {
        // validation for constraint: string
        if (!is_null($driverId) && !is_string($driverId)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($driverId, true), gettype($driverId)), __LINE__);
        }
        // validation for constraint: pattern([\da-fA-F]{8}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{12})
        if (!is_null($driverId) && !preg_match('/[\\da-fA-F]{8}-[\\da-fA-F]{4}-[\\da-fA-F]{4}-[\\da-fA-F]{4}-[\\da-fA-F]{12}/', $driverId)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a literal that is among the set of character sequences denoted by the regular expression /[\\da-fA-F]{8}-[\\da-fA-F]{4}-[\\da-fA-F]{4}-[\\da-fA-F]{4}-[\\da-fA-F]{12}/', var_export($driverId, true)), __LINE__);
        }
        $this->DriverId = $driverId;
        
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
     * @return \StructType\IvideonCameraDriverInfo
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
     * Get Path value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getPath(): ?string
    {
        return isset($this->Path) ? $this->Path : null;
    }
    /**
     * Set Path value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $path
     * @return \StructType\IvideonCameraDriverInfo
     */
    public function setPath(?string $path = null): self
    {
        // validation for constraint: string
        if (!is_null($path) && !is_string($path)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($path, true), gettype($path)), __LINE__);
        }
        if (is_null($path) || (is_array($path) && empty($path))) {
            unset($this->Path);
        } else {
            $this->Path = $path;
        }
        
        return $this;
    }
    /**
     * Get ServerID value
     * @return string|null
     */
    public function getServerID(): ?string
    {
        return $this->ServerID;
    }
    /**
     * Set ServerID value
     * @param string $serverID
     * @return \StructType\IvideonCameraDriverInfo
     */
    public function setServerID(?string $serverID = null): self
    {
        // validation for constraint: string
        if (!is_null($serverID) && !is_string($serverID)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($serverID, true), gettype($serverID)), __LINE__);
        }
        // validation for constraint: pattern([\da-fA-F]{8}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{12})
        if (!is_null($serverID) && !preg_match('/[\\da-fA-F]{8}-[\\da-fA-F]{4}-[\\da-fA-F]{4}-[\\da-fA-F]{4}-[\\da-fA-F]{12}/', $serverID)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a literal that is among the set of character sequences denoted by the regular expression /[\\da-fA-F]{8}-[\\da-fA-F]{4}-[\\da-fA-F]{4}-[\\da-fA-F]{4}-[\\da-fA-F]{12}/', var_export($serverID, true)), __LINE__);
        }
        $this->ServerID = $serverID;
        
        return $this;
    }
    /**
     * Get ServerType value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getServerType(): ?string
    {
        return isset($this->ServerType) ? $this->ServerType : null;
    }
    /**
     * Set ServerType value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $serverType
     * @return \StructType\IvideonCameraDriverInfo
     */
    public function setServerType(?string $serverType = null): self
    {
        // validation for constraint: string
        if (!is_null($serverType) && !is_string($serverType)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($serverType, true), gettype($serverType)), __LINE__);
        }
        if (is_null($serverType) || (is_array($serverType) && empty($serverType))) {
            unset($this->ServerType);
        } else {
            $this->ServerType = $serverType;
        }
        
        return $this;
    }
}
