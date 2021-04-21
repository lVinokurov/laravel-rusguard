<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for RemoveDriver StructType
 * @subpackage Structs
 */
class RemoveDriver extends AbstractStructBase
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
     * The isProcessing
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var bool|null
     */
    protected ?bool $isProcessing = null;
    /**
     * The isProcessingAccessPoint
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var bool|null
     */
    protected ?bool $isProcessingAccessPoint = null;
    /**
     * Constructor method for RemoveDriver
     * @uses RemoveDriver::setDriverId()
     * @uses RemoveDriver::setIsProcessing()
     * @uses RemoveDriver::setIsProcessingAccessPoint()
     * @param string $driverId
     * @param bool $isProcessing
     * @param bool $isProcessingAccessPoint
     */
    public function __construct(?string $driverId = null, ?bool $isProcessing = null, ?bool $isProcessingAccessPoint = null)
    {
        $this
            ->setDriverId($driverId)
            ->setIsProcessing($isProcessing)
            ->setIsProcessingAccessPoint($isProcessingAccessPoint);
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
     * @return \StructType\RemoveDriver
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
    /**
     * Get isProcessing value
     * @return bool|null
     */
    public function getIsProcessing(): ?bool
    {
        return $this->isProcessing;
    }
    /**
     * Set isProcessing value
     * @param bool $isProcessing
     * @return \StructType\RemoveDriver
     */
    public function setIsProcessing(?bool $isProcessing = null): self
    {
        // validation for constraint: boolean
        if (!is_null($isProcessing) && !is_bool($isProcessing)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($isProcessing, true), gettype($isProcessing)), __LINE__);
        }
        $this->isProcessing = $isProcessing;
        
        return $this;
    }
    /**
     * Get isProcessingAccessPoint value
     * @return bool|null
     */
    public function getIsProcessingAccessPoint(): ?bool
    {
        return $this->isProcessingAccessPoint;
    }
    /**
     * Set isProcessingAccessPoint value
     * @param bool $isProcessingAccessPoint
     * @return \StructType\RemoveDriver
     */
    public function setIsProcessingAccessPoint(?bool $isProcessingAccessPoint = null): self
    {
        // validation for constraint: boolean
        if (!is_null($isProcessingAccessPoint) && !is_bool($isProcessingAccessPoint)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($isProcessingAccessPoint, true), gettype($isProcessingAccessPoint)), __LINE__);
        }
        $this->isProcessingAccessPoint = $isProcessingAccessPoint;
        
        return $this;
    }
}
