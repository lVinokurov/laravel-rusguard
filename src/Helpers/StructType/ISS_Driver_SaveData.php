<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ISS_Driver_SaveData StructType
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:ISS_Driver_SaveData
 * @subpackage Structs
 */
class ISS_Driver_SaveData extends AbstractStructBase
{
    /**
     * The DriverID
     * Meta information extracted from the WSDL
     * - base: xs:string
     * - minOccurs: 0
     * - nillable: true
     * - pattern: [\da-fA-F]{8}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{12}
     * - type: tns:guid
     * @var string|null
     */
    protected ?string $DriverID = null;
    /**
     * The ISS_RusGuardIntegrationPoint_ID
     * Meta information extracted from the WSDL
     * - base: xs:string
     * - minOccurs: 0
     * - nillable: true
     * - pattern: [\da-fA-F]{8}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{12}
     * - type: tns:guid
     * @var string|null
     */
    protected ?string $ISS_RusGuardIntegrationPoint_ID = null;
    /**
     * Constructor method for ISS_Driver_SaveData
     * @uses ISS_Driver_SaveData::setDriverID()
     * @uses ISS_Driver_SaveData::setISS_RusGuardIntegrationPoint_ID()
     * @param string $driverID
     * @param string $iSS_RusGuardIntegrationPoint_ID
     */
    public function __construct(?string $driverID = null, ?string $iSS_RusGuardIntegrationPoint_ID = null)
    {
        $this
            ->setDriverID($driverID)
            ->setISS_RusGuardIntegrationPoint_ID($iSS_RusGuardIntegrationPoint_ID);
    }
    /**
     * Get DriverID value
     * @return string|null
     */
    public function getDriverID(): ?string
    {
        return $this->DriverID;
    }
    /**
     * Set DriverID value
     * @param string $driverID
     * @return \StructType\ISS_Driver_SaveData
     */
    public function setDriverID(?string $driverID = null): self
    {
        // validation for constraint: string
        if (!is_null($driverID) && !is_string($driverID)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($driverID, true), gettype($driverID)), __LINE__);
        }
        // validation for constraint: pattern([\da-fA-F]{8}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{12})
        if (!is_null($driverID) && !preg_match('/[\\da-fA-F]{8}-[\\da-fA-F]{4}-[\\da-fA-F]{4}-[\\da-fA-F]{4}-[\\da-fA-F]{12}/', $driverID)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a literal that is among the set of character sequences denoted by the regular expression /[\\da-fA-F]{8}-[\\da-fA-F]{4}-[\\da-fA-F]{4}-[\\da-fA-F]{4}-[\\da-fA-F]{12}/', var_export($driverID, true)), __LINE__);
        }
        $this->DriverID = $driverID;
        
        return $this;
    }
    /**
     * Get ISS_RusGuardIntegrationPoint_ID value
     * @return string|null
     */
    public function getISS_RusGuardIntegrationPoint_ID(): ?string
    {
        return $this->ISS_RusGuardIntegrationPoint_ID;
    }
    /**
     * Set ISS_RusGuardIntegrationPoint_ID value
     * @param string $iSS_RusGuardIntegrationPoint_ID
     * @return \StructType\ISS_Driver_SaveData
     */
    public function setISS_RusGuardIntegrationPoint_ID(?string $iSS_RusGuardIntegrationPoint_ID = null): self
    {
        // validation for constraint: string
        if (!is_null($iSS_RusGuardIntegrationPoint_ID) && !is_string($iSS_RusGuardIntegrationPoint_ID)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($iSS_RusGuardIntegrationPoint_ID, true), gettype($iSS_RusGuardIntegrationPoint_ID)), __LINE__);
        }
        // validation for constraint: pattern([\da-fA-F]{8}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{12})
        if (!is_null($iSS_RusGuardIntegrationPoint_ID) && !preg_match('/[\\da-fA-F]{8}-[\\da-fA-F]{4}-[\\da-fA-F]{4}-[\\da-fA-F]{4}-[\\da-fA-F]{12}/', $iSS_RusGuardIntegrationPoint_ID)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a literal that is among the set of character sequences denoted by the regular expression /[\\da-fA-F]{8}-[\\da-fA-F]{4}-[\\da-fA-F]{4}-[\\da-fA-F]{4}-[\\da-fA-F]{12}/', var_export($iSS_RusGuardIntegrationPoint_ID, true)), __LINE__);
        }
        $this->ISS_RusGuardIntegrationPoint_ID = $iSS_RusGuardIntegrationPoint_ID;
        
        return $this;
    }
}
