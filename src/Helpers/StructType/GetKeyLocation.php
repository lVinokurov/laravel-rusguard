<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetKeyLocation StructType
 * @subpackage Structs
 */
class GetKeyLocation extends AbstractStructBase
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
     * The keyNumber
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var int|null
     */
    protected ?int $keyNumber = null;
    /**
     * Constructor method for GetKeyLocation
     * @uses GetKeyLocation::setDeviceServerId()
     * @uses GetKeyLocation::setKeyNumber()
     * @param string $deviceServerId
     * @param int $keyNumber
     */
    public function __construct(?string $deviceServerId = null, ?int $keyNumber = null)
    {
        $this
            ->setDeviceServerId($deviceServerId)
            ->setKeyNumber($keyNumber);
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
     * @return \StructType\GetKeyLocation
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
     * Get keyNumber value
     * @return int|null
     */
    public function getKeyNumber(): ?int
    {
        return $this->keyNumber;
    }
    /**
     * Set keyNumber value
     * @param int $keyNumber
     * @return \StructType\GetKeyLocation
     */
    public function setKeyNumber(?int $keyNumber = null): self
    {
        // validation for constraint: int
        if (!is_null($keyNumber) && !(is_int($keyNumber) || ctype_digit($keyNumber))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($keyNumber, true), gettype($keyNumber)), __LINE__);
        }
        $this->keyNumber = $keyNumber;
        
        return $this;
    }
}
