<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for WorkSchedulesData StructType
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:WorkSchedulesData
 * @subpackage Structs
 */
class WorkSchedulesData extends AbstractStructBase
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
     * The UseParentWorkSchedule
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var bool|null
     */
    protected ?bool $UseParentWorkSchedule = null;
    /**
     * The WorkSchedulesSlimInfo
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \ArrayType\ArrayOfWorkScheduleSlimInfo|null
     */
    protected ?\ArrayType\ArrayOfWorkScheduleSlimInfo $WorkSchedulesSlimInfo = null;
    /**
     * Constructor method for WorkSchedulesData
     * @uses WorkSchedulesData::setCount()
     * @uses WorkSchedulesData::setIsRootOwner()
     * @uses WorkSchedulesData::setUseParentWorkSchedule()
     * @uses WorkSchedulesData::setWorkSchedulesSlimInfo()
     * @param int $count
     * @param bool $isRootOwner
     * @param bool $useParentWorkSchedule
     * @param \ArrayType\ArrayOfWorkScheduleSlimInfo $workSchedulesSlimInfo
     */
    public function __construct(?int $count = null, ?bool $isRootOwner = null, ?bool $useParentWorkSchedule = null, ?\ArrayType\ArrayOfWorkScheduleSlimInfo $workSchedulesSlimInfo = null)
    {
        $this
            ->setCount($count)
            ->setIsRootOwner($isRootOwner)
            ->setUseParentWorkSchedule($useParentWorkSchedule)
            ->setWorkSchedulesSlimInfo($workSchedulesSlimInfo);
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
     * @return \StructType\WorkSchedulesData
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
     * @return \StructType\WorkSchedulesData
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
     * Get UseParentWorkSchedule value
     * @return bool|null
     */
    public function getUseParentWorkSchedule(): ?bool
    {
        return $this->UseParentWorkSchedule;
    }
    /**
     * Set UseParentWorkSchedule value
     * @param bool $useParentWorkSchedule
     * @return \StructType\WorkSchedulesData
     */
    public function setUseParentWorkSchedule(?bool $useParentWorkSchedule = null): self
    {
        // validation for constraint: boolean
        if (!is_null($useParentWorkSchedule) && !is_bool($useParentWorkSchedule)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($useParentWorkSchedule, true), gettype($useParentWorkSchedule)), __LINE__);
        }
        $this->UseParentWorkSchedule = $useParentWorkSchedule;
        
        return $this;
    }
    /**
     * Get WorkSchedulesSlimInfo value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \ArrayType\ArrayOfWorkScheduleSlimInfo|null
     */
    public function getWorkSchedulesSlimInfo(): ?\ArrayType\ArrayOfWorkScheduleSlimInfo
    {
        return isset($this->WorkSchedulesSlimInfo) ? $this->WorkSchedulesSlimInfo : null;
    }
    /**
     * Set WorkSchedulesSlimInfo value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \ArrayType\ArrayOfWorkScheduleSlimInfo $workSchedulesSlimInfo
     * @return \StructType\WorkSchedulesData
     */
    public function setWorkSchedulesSlimInfo(?\ArrayType\ArrayOfWorkScheduleSlimInfo $workSchedulesSlimInfo = null): self
    {
        if (is_null($workSchedulesSlimInfo) || (is_array($workSchedulesSlimInfo) && empty($workSchedulesSlimInfo))) {
            unset($this->WorkSchedulesSlimInfo);
        } else {
            $this->WorkSchedulesSlimInfo = $workSchedulesSlimInfo;
        }
        
        return $this;
    }
}
