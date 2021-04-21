<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SyncFaceX StructType
 * @subpackage Structs
 */
class SyncFaceX extends AbstractStructBase
{
    /**
     * The address
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $address = null;
    /**
     * The port
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var int|null
     */
    protected ?int $port = null;
    /**
     * Constructor method for SyncFaceX
     * @uses SyncFaceX::setAddress()
     * @uses SyncFaceX::setPort()
     * @param string $address
     * @param int $port
     */
    public function __construct(?string $address = null, ?int $port = null)
    {
        $this
            ->setAddress($address)
            ->setPort($port);
    }
    /**
     * Get address value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getAddress(): ?string
    {
        return isset($this->address) ? $this->address : null;
    }
    /**
     * Set address value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $address
     * @return \StructType\SyncFaceX
     */
    public function setAddress(?string $address = null): self
    {
        // validation for constraint: string
        if (!is_null($address) && !is_string($address)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($address, true), gettype($address)), __LINE__);
        }
        if (is_null($address) || (is_array($address) && empty($address))) {
            unset($this->address);
        } else {
            $this->address = $address;
        }
        
        return $this;
    }
    /**
     * Get port value
     * @return int|null
     */
    public function getPort(): ?int
    {
        return $this->port;
    }
    /**
     * Set port value
     * @param int $port
     * @return \StructType\SyncFaceX
     */
    public function setPort(?int $port = null): self
    {
        // validation for constraint: int
        if (!is_null($port) && !(is_int($port) || ctype_digit($port))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($port, true), gettype($port)), __LINE__);
        }
        $this->port = $port;
        
        return $this;
    }
}
