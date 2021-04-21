<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for WorkZonesData StructType
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:WorkZonesData
 * @subpackage Structs
 */
class WorkZonesData extends AbstractStructBase
{
    /**
     * The Count
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var int|null
     */
    protected ?int $Count = null;
    /**
     * The IsRootOwner
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var bool|null
     */
    protected ?bool $IsRootOwner = null;
    /**
     * The UseParentWorkZone
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var bool|null
     */
    protected ?bool $UseParentWorkZone = null;
    /**
     * The WorkZonesSlimInfo
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \ArrayType\ArrayOfWorkZoneSlimInfo|null
     */
    protected ?\ArrayType\ArrayOfWorkZoneSlimInfo $WorkZonesSlimInfo = null;
    /**
     * Constructor method for WorkZonesData
     * @uses WorkZonesData::setCount()
     * @uses WorkZonesData::setIsRootOwner()
     * @uses WorkZonesData::setUseParentWorkZone()
     * @uses WorkZonesData::setWorkZonesSlimInfo()
     * @param int $count
     * @param bool $isRootOwner
     * @param bool $useParentWorkZone
     * @param \ArrayType\ArrayOfWorkZoneSlimInfo $workZonesSlimInfo
     */
    public function __construct(?int $count = null, ?bool $isRootOwner = null, ?bool $useParentWorkZone = null, ?\ArrayType\ArrayOfWorkZoneSlimInfo $workZonesSlimInfo = null)
    {
        $this
            ->setCount($count)
            ->setIsRootOwner($isRootOwner)
            ->setUseParentWorkZone($useParentWorkZone)
            ->setWorkZonesSlimInfo($workZonesSlimInfo);
    }
    /**
     * Get Count value
     * @return int|null
     */
    public function getCount(): ?int
    {
        return $this->Count;
    }
    /**
     * Set Count value
     * @param int $count
     * @return \StructType\WorkZonesData
     */
    public function setCount(?int $count = null): self
    {
        // validation for constraint: int
        if (!is_null($count) && !(is_int($count) || ctype_digit($count))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($count, true), gettype($count)), __LINE__);
        }
        $this->Count = $count;
        
        return $this;
    }
    /**
     * Get IsRootOwner value
     * @return bool|null
     */
    public function getIsRootOwner(): ?bool
    {
        return $this->IsRootOwner;
    }
    /**
     * Set IsRootOwner value
     * @param bool $isRootOwner
     * @return \StructType\WorkZonesData
     */
    public function setIsRootOwner(?bool $isRootOwner = null): self
    {
        // validation for constraint: boolean
        if (!is_null($isRootOwner) && !is_bool($isRootOwner)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($isRootOwner, true), gettype($isRootOwner)), __LINE__);
        }
        $this->IsRootOwner = $isRootOwner;
        
        return $this;
    }
    /**
     * Get UseParentWorkZone value
     * @return bool|null
     */
    public function getUseParentWorkZone(): ?bool
    {
        return $this->UseParentWorkZone;
    }
    /**
     * Set UseParentWorkZone value
     * @param bool $useParentWorkZone
     * @return \StructType\WorkZonesData
     */
    public function setUseParentWorkZone(?bool $useParentWorkZone = null): self
    {
        // validation for constraint: boolean
        if (!is_null($useParentWorkZone) && !is_bool($useParentWorkZone)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($useParentWorkZone, true), gettype($useParentWorkZone)), __LINE__);
        }
        $this->UseParentWorkZone = $useParentWorkZone;
        
        return $this;
    }
    /**
     * Get WorkZonesSlimInfo value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \ArrayType\ArrayOfWorkZoneSlimInfo|null
     */
    public function getWorkZonesSlimInfo(): ?\ArrayType\ArrayOfWorkZoneSlimInfo
    {
        return isset($this->WorkZonesSlimInfo) ? $this->WorkZonesSlimInfo : null;
    }
    /**
     * Set WorkZonesSlimInfo value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \ArrayType\ArrayOfWorkZoneSlimInfo $workZonesSlimInfo
     * @return \StructType\WorkZonesData
     */
    public function setWorkZonesSlimInfo(?\ArrayType\ArrayOfWorkZoneSlimInfo $workZonesSlimInfo = null): self
    {
        if (is_null($workZonesSlimInfo) || (is_array($workZonesSlimInfo) && empty($workZonesSlimInfo))) {
            unset($this->WorkZonesSlimInfo);
        } else {
            $this->WorkZonesSlimInfo = $workZonesSlimInfo;
        }
        
        return $this;
    }
}
