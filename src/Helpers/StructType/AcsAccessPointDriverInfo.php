<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for AcsAccessPointDriverInfo StructType
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:AcsAccessPointDriverInfo
 * @subpackage Structs
 */
class AcsAccessPointDriverInfo extends AbstractStructBase
{
    /**
     * The AccessPointType
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $AccessPointType = null;
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
     * The DriverType
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $DriverType = null;
    /**
     * The IsVirtual
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var bool|null
     */
    protected ?bool $IsVirtual = null;
    /**
     * The Name
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $Name = null;
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
     * Constructor method for AcsAccessPointDriverInfo
     * @uses AcsAccessPointDriverInfo::setAccessPointType()
     * @uses AcsAccessPointDriverInfo::setDriverId()
     * @uses AcsAccessPointDriverInfo::setDriverType()
     * @uses AcsAccessPointDriverInfo::setIsVirtual()
     * @uses AcsAccessPointDriverInfo::setName()
     * @uses AcsAccessPointDriverInfo::setServerID()
     * @param string $accessPointType
     * @param string $driverId
     * @param string $driverType
     * @param bool $isVirtual
     * @param string $name
     * @param string $serverID
     */
    public function __construct(?string $accessPointType = null, ?string $driverId = null, ?string $driverType = null, ?bool $isVirtual = null, ?string $name = null, ?string $serverID = null)
    {
        $this
            ->setAccessPointType($accessPointType)
            ->setDriverId($driverId)
            ->setDriverType($driverType)
            ->setIsVirtual($isVirtual)
            ->setName($name)
            ->setServerID($serverID);
    }
    /**
     * Get AccessPointType value
     * @return string|null
     */
    public function getAccessPointType(): ?string
    {
        return $this->AccessPointType;
    }
    /**
     * Set AccessPointType value
     * @uses \EnumType\AcsAccessPointType::valueIsValid()
     * @uses \EnumType\AcsAccessPointType::getValidValues()
     * @throws InvalidArgumentException
     * @param string $accessPointType
     * @return \StructType\AcsAccessPointDriverInfo
     */
    public function setAccessPointType(?string $accessPointType = null): self
    {
        // validation for constraint: enumeration
        if (!\EnumType\AcsAccessPointType::valueIsValid($accessPointType)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \EnumType\AcsAccessPointType', is_array($accessPointType) ? implode(', ', $accessPointType) : var_export($accessPointType, true), implode(', ', \EnumType\AcsAccessPointType::getValidValues())), __LINE__);
        }
        $this->AccessPointType = $accessPointType;
        
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
     * @return \StructType\AcsAccessPointDriverInfo
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
     * @return \StructType\AcsAccessPointDriverInfo
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
     * Get IsVirtual value
     * @return bool|null
     */
    public function getIsVirtual(): ?bool
    {
        return $this->IsVirtual;
    }
    /**
     * Set IsVirtual value
     * @param bool $isVirtual
     * @return \StructType\AcsAccessPointDriverInfo
     */
    public function setIsVirtual(?bool $isVirtual = null): self
    {
        // validation for constraint: boolean
        if (!is_null($isVirtual) && !is_bool($isVirtual)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($isVirtual, true), gettype($isVirtual)), __LINE__);
        }
        $this->IsVirtual = $isVirtual;
        
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
     * @return \StructType\AcsAccessPointDriverInfo
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
     * @return \StructType\AcsAccessPointDriverInfo
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
}
