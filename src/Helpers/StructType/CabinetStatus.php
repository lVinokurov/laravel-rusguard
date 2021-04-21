<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for CabinetStatus StructType
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:CabinetStatus
 * @subpackage Structs
 */
class CabinetStatus extends AbstractStructBase
{
    /**
     * The IsConnected
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var bool|null
     */
    protected ?bool $IsConnected = null;
    /**
     * The IsOpened
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var bool|null
     */
    protected ?bool $IsOpened = null;
    /**
     * The SlotsCount
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var int|null
     */
    protected ?int $SlotsCount = null;
    /**
     * The SlotsStatus
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \ArrayType\ArrayOfSlotInfo|null
     */
    protected ?\ArrayType\ArrayOfSlotInfo $SlotsStatus = null;
    /**
     * Constructor method for CabinetStatus
     * @uses CabinetStatus::setIsConnected()
     * @uses CabinetStatus::setIsOpened()
     * @uses CabinetStatus::setSlotsCount()
     * @uses CabinetStatus::setSlotsStatus()
     * @param bool $isConnected
     * @param bool $isOpened
     * @param int $slotsCount
     * @param \ArrayType\ArrayOfSlotInfo $slotsStatus
     */
    public function __construct(?bool $isConnected = null, ?bool $isOpened = null, ?int $slotsCount = null, ?\ArrayType\ArrayOfSlotInfo $slotsStatus = null)
    {
        $this
            ->setIsConnected($isConnected)
            ->setIsOpened($isOpened)
            ->setSlotsCount($slotsCount)
            ->setSlotsStatus($slotsStatus);
    }
    /**
     * Get IsConnected value
     * @return bool|null
     */
    public function getIsConnected(): ?bool
    {
        return $this->IsConnected;
    }
    /**
     * Set IsConnected value
     * @param bool $isConnected
     * @return \StructType\CabinetStatus
     */
    public function setIsConnected(?bool $isConnected = null): self
    {
        // validation for constraint: boolean
        if (!is_null($isConnected) && !is_bool($isConnected)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($isConnected, true), gettype($isConnected)), __LINE__);
        }
        $this->IsConnected = $isConnected;
        
        return $this;
    }
    /**
     * Get IsOpened value
     * @return bool|null
     */
    public function getIsOpened(): ?bool
    {
        return $this->IsOpened;
    }
    /**
     * Set IsOpened value
     * @param bool $isOpened
     * @return \StructType\CabinetStatus
     */
    public function setIsOpened(?bool $isOpened = null): self
    {
        // validation for constraint: boolean
        if (!is_null($isOpened) && !is_bool($isOpened)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($isOpened, true), gettype($isOpened)), __LINE__);
        }
        $this->IsOpened = $isOpened;
        
        return $this;
    }
    /**
     * Get SlotsCount value
     * @return int|null
     */
    public function getSlotsCount(): ?int
    {
        return $this->SlotsCount;
    }
    /**
     * Set SlotsCount value
     * @param int $slotsCount
     * @return \StructType\CabinetStatus
     */
    public function setSlotsCount(?int $slotsCount = null): self
    {
        // validation for constraint: int
        if (!is_null($slotsCount) && !(is_int($slotsCount) || ctype_digit($slotsCount))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($slotsCount, true), gettype($slotsCount)), __LINE__);
        }
        $this->SlotsCount = $slotsCount;
        
        return $this;
    }
    /**
     * Get SlotsStatus value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \ArrayType\ArrayOfSlotInfo|null
     */
    public function getSlotsStatus(): ?\ArrayType\ArrayOfSlotInfo
    {
        return isset($this->SlotsStatus) ? $this->SlotsStatus : null;
    }
    /**
     * Set SlotsStatus value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \ArrayType\ArrayOfSlotInfo $slotsStatus
     * @return \StructType\CabinetStatus
     */
    public function setSlotsStatus(?\ArrayType\ArrayOfSlotInfo $slotsStatus = null): self
    {
        if (is_null($slotsStatus) || (is_array($slotsStatus) && empty($slotsStatus))) {
            unset($this->SlotsStatus);
        } else {
            $this->SlotsStatus = $slotsStatus;
        }
        
        return $this;
    }
}
