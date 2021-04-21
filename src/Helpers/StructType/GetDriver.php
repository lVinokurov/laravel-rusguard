<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetDriver StructType
 * @subpackage Structs
 */
class GetDriver extends AbstractStructBase
{
    /**
     * The driverID
     * Meta information extracted from the WSDL
     * - base: xs:string
     * - minOccurs: 0
     * - nillable: true
     * - pattern: [\da-fA-F]{8}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{12}
     * - type: tns:guid
     * @var string|null
     */
    protected ?string $driverID = null;
    /**
     * Constructor method for GetDriver
     * @uses GetDriver::setDriverID()
     * @param string $driverID
     */
    public function __construct(?string $driverID = null)
    {
        $this
            ->setDriverID($driverID);
    }
    /**
     * Get driverID value
     * @return string|null
     */
    public function getDriverID(): ?string
    {
        return $this->driverID;
    }
    /**
     * Set driverID value
     * @param string $driverID
     * @return \StructType\GetDriver
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
        $this->driverID = $driverID;
        
        return $this;
    }
}
