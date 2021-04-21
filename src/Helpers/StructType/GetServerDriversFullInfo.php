<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetServerDriversFullInfo StructType
 * @subpackage Structs
 */
class GetServerDriversFullInfo extends AbstractStructBase
{
    /**
     * The serverID
     * Meta information extracted from the WSDL
     * - base: xs:string
     * - minOccurs: 0
     * - nillable: true
     * - pattern: [\da-fA-F]{8}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{12}
     * - type: tns:guid
     * @var string|null
     */
    protected ?string $serverID = null;
    /**
     * The workplaceModuleId
     * Meta information extracted from the WSDL
     * - base: xs:string
     * - minOccurs: 0
     * - nillable: true
     * - pattern: [\da-fA-F]{8}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{12}
     * - type: tns:guid
     * @var string|null
     */
    protected ?string $workplaceModuleId = null;
    /**
     * Constructor method for GetServerDriversFullInfo
     * @uses GetServerDriversFullInfo::setServerID()
     * @uses GetServerDriversFullInfo::setWorkplaceModuleId()
     * @param string $serverID
     * @param string $workplaceModuleId
     */
    public function __construct(?string $serverID = null, ?string $workplaceModuleId = null)
    {
        $this
            ->setServerID($serverID)
            ->setWorkplaceModuleId($workplaceModuleId);
    }
    /**
     * Get serverID value
     * @return string|null
     */
    public function getServerID(): ?string
    {
        return $this->serverID;
    }
    /**
     * Set serverID value
     * @param string $serverID
     * @return \StructType\GetServerDriversFullInfo
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
        $this->serverID = $serverID;
        
        return $this;
    }
    /**
     * Get workplaceModuleId value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getWorkplaceModuleId(): ?string
    {
        return isset($this->workplaceModuleId) ? $this->workplaceModuleId : null;
    }
    /**
     * Set workplaceModuleId value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $workplaceModuleId
     * @return \StructType\GetServerDriversFullInfo
     */
    public function setWorkplaceModuleId(?string $workplaceModuleId = null): self
    {
        // validation for constraint: string
        if (!is_null($workplaceModuleId) && !is_string($workplaceModuleId)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($workplaceModuleId, true), gettype($workplaceModuleId)), __LINE__);
        }
        // validation for constraint: pattern([\da-fA-F]{8}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{12})
        if (!is_null($workplaceModuleId) && !preg_match('/[\\da-fA-F]{8}-[\\da-fA-F]{4}-[\\da-fA-F]{4}-[\\da-fA-F]{4}-[\\da-fA-F]{12}/', $workplaceModuleId)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a literal that is among the set of character sequences denoted by the regular expression /[\\da-fA-F]{8}-[\\da-fA-F]{4}-[\\da-fA-F]{4}-[\\da-fA-F]{4}-[\\da-fA-F]{12}/', var_export($workplaceModuleId, true)), __LINE__);
        }
        if (is_null($workplaceModuleId) || (is_array($workplaceModuleId) && empty($workplaceModuleId))) {
            unset($this->workplaceModuleId);
        } else {
            $this->workplaceModuleId = $workplaceModuleId;
        }
        
        return $this;
    }
}
