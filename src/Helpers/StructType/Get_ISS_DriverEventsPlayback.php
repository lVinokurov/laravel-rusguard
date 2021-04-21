<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Get_ISS_DriverEventsPlayback StructType
 * @subpackage Structs
 */
class Get_ISS_DriverEventsPlayback extends AbstractStructBase
{
    /**
     * The driverId
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var int|null
     */
    protected ?int $driverId = null;
    /**
     * Constructor method for Get_ISS_DriverEventsPlayback
     * @uses Get_ISS_DriverEventsPlayback::setDriverId()
     * @param int $driverId
     */
    public function __construct(?int $driverId = null)
    {
        $this
            ->setDriverId($driverId);
    }
    /**
     * Get driverId value
     * @return int|null
     */
    public function getDriverId(): ?int
    {
        return $this->driverId;
    }
    /**
     * Set driverId value
     * @param int $driverId
     * @return \StructType\Get_ISS_DriverEventsPlayback
     */
    public function setDriverId(?int $driverId = null): self
    {
        // validation for constraint: int
        if (!is_null($driverId) && !(is_int($driverId) || ctype_digit($driverId))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($driverId, true), gettype($driverId)), __LINE__);
        }
        $this->driverId = $driverId;
        
        return $this;
    }
}
