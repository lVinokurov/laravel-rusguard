<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SyncFindFace StructType
 * @subpackage Structs
 */
class SyncFindFace extends AbstractStructBase
{
    /**
     * The driverId
     * Meta information extracted from the WSDL
     * - base: xs:string
     * - minOccurs: 0
     * - nillable: true
     * - pattern: [\da-fA-F]{8}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{12}
     * - type: tns:guid
     * @var string|null
     */
    protected ?string $driverId = null;
    /**
     * Constructor method for SyncFindFace
     * @uses SyncFindFace::setDriverId()
     * @param string $driverId
     */
    public function __construct(?string $driverId = null)
    {
        $this
            ->setDriverId($driverId);
    }
    /**
     * Get driverId value
     * @return string|null
     */
    public function getDriverId(): ?string
    {
        return $this->driverId;
    }
    /**
     * Set driverId value
     * @param string $driverId
     * @return \StructType\SyncFindFace
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
        $this->driverId = $driverId;
        
        return $this;
    }
}
