<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetKeyKeeperSlotsStatus StructType
 * @subpackage Structs
 */
class GetKeyKeeperSlotsStatus extends AbstractStructBase
{
    /**
     * The deviceServerId
     * Meta information extracted from the WSDL
     * - base: xs:string
     * - minOccurs: 0
     * - nillable: true
     * - pattern: [\da-fA-F]{8}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{12}
     * - type: tns:guid
     * @var string|null
     */
    protected ?string $deviceServerId = null;
    /**
     * The keyKeeperControllerId
     * Meta information extracted from the WSDL
     * - base: xs:string
     * - minOccurs: 0
     * - nillable: true
     * - pattern: [\da-fA-F]{8}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{12}
     * - type: tns:guid
     * @var string|null
     */
    protected ?string $keyKeeperControllerId = null;
    /**
     * The cabinetID
     * Meta information extracted from the WSDL
     * - base: xs:string
     * - minOccurs: 0
     * - nillable: true
     * - pattern: [\da-fA-F]{8}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{12}
     * - type: tns:guid
     * @var string|null
     */
    protected ?string $cabinetID = null;
    /**
     * Constructor method for GetKeyKeeperSlotsStatus
     * @uses GetKeyKeeperSlotsStatus::setDeviceServerId()
     * @uses GetKeyKeeperSlotsStatus::setKeyKeeperControllerId()
     * @uses GetKeyKeeperSlotsStatus::setCabinetID()
     * @param string $deviceServerId
     * @param string $keyKeeperControllerId
     * @param string $cabinetID
     */
    public function __construct(?string $deviceServerId = null, ?string $keyKeeperControllerId = null, ?string $cabinetID = null)
    {
        $this
            ->setDeviceServerId($deviceServerId)
            ->setKeyKeeperControllerId($keyKeeperControllerId)
            ->setCabinetID($cabinetID);
    }
    /**
     * Get deviceServerId value
     * @return string|null
     */
    public function getDeviceServerId(): ?string
    {
        return $this->deviceServerId;
    }
    /**
     * Set deviceServerId value
     * @param string $deviceServerId
     * @return \StructType\GetKeyKeeperSlotsStatus
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
        $this->deviceServerId = $deviceServerId;
        
        return $this;
    }
    /**
     * Get keyKeeperControllerId value
     * @return string|null
     */
    public function getKeyKeeperControllerId(): ?string
    {
        return $this->keyKeeperControllerId;
    }
    /**
     * Set keyKeeperControllerId value
     * @param string $keyKeeperControllerId
     * @return \StructType\GetKeyKeeperSlotsStatus
     */
    public function setKeyKeeperControllerId(?string $keyKeeperControllerId = null): self
    {
        // validation for constraint: string
        if (!is_null($keyKeeperControllerId) && !is_string($keyKeeperControllerId)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($keyKeeperControllerId, true), gettype($keyKeeperControllerId)), __LINE__);
        }
        // validation for constraint: pattern([\da-fA-F]{8}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{12})
        if (!is_null($keyKeeperControllerId) && !preg_match('/[\\da-fA-F]{8}-[\\da-fA-F]{4}-[\\da-fA-F]{4}-[\\da-fA-F]{4}-[\\da-fA-F]{12}/', $keyKeeperControllerId)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a literal that is among the set of character sequences denoted by the regular expression /[\\da-fA-F]{8}-[\\da-fA-F]{4}-[\\da-fA-F]{4}-[\\da-fA-F]{4}-[\\da-fA-F]{12}/', var_export($keyKeeperControllerId, true)), __LINE__);
        }
        $this->keyKeeperControllerId = $keyKeeperControllerId;
        
        return $this;
    }
    /**
     * Get cabinetID value
     * @return string|null
     */
    public function getCabinetID(): ?string
    {
        return $this->cabinetID;
    }
    /**
     * Set cabinetID value
     * @param string $cabinetID
     * @return \StructType\GetKeyKeeperSlotsStatus
     */
    public function setCabinetID(?string $cabinetID = null): self
    {
        // validation for constraint: string
        if (!is_null($cabinetID) && !is_string($cabinetID)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($cabinetID, true), gettype($cabinetID)), __LINE__);
        }
        // validation for constraint: pattern([\da-fA-F]{8}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{12})
        if (!is_null($cabinetID) && !preg_match('/[\\da-fA-F]{8}-[\\da-fA-F]{4}-[\\da-fA-F]{4}-[\\da-fA-F]{4}-[\\da-fA-F]{12}/', $cabinetID)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a literal that is among the set of character sequences denoted by the regular expression /[\\da-fA-F]{8}-[\\da-fA-F]{4}-[\\da-fA-F]{4}-[\\da-fA-F]{4}-[\\da-fA-F]{12}/', var_export($cabinetID, true)), __LINE__);
        }
        $this->cabinetID = $cabinetID;
        
        return $this;
    }
}
