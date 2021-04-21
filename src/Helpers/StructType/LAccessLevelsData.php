<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for LAccessLevelsData StructType
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:LAccessLevelsData
 * @subpackage Structs
 */
class LAccessLevelsData extends AbstractStructBase
{
    /**
     * The AccessLevelsSlimInfo
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \ArrayType\ArrayOfAcsAccessLevelSlimInfo|null
     */
    protected ?\ArrayType\ArrayOfAcsAccessLevelSlimInfo $AccessLevelsSlimInfo = null;
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
     * The UseParentAccessLevel
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var bool|null
     */
    protected ?bool $UseParentAccessLevel = null;
    /**
     * Constructor method for LAccessLevelsData
     * @uses LAccessLevelsData::setAccessLevelsSlimInfo()
     * @uses LAccessLevelsData::setCount()
     * @uses LAccessLevelsData::setIsRootOwner()
     * @uses LAccessLevelsData::setUseParentAccessLevel()
     * @param \ArrayType\ArrayOfAcsAccessLevelSlimInfo $accessLevelsSlimInfo
     * @param int $count
     * @param bool $isRootOwner
     * @param bool $useParentAccessLevel
     */
    public function __construct(?\ArrayType\ArrayOfAcsAccessLevelSlimInfo $accessLevelsSlimInfo = null, ?int $count = null, ?bool $isRootOwner = null, ?bool $useParentAccessLevel = null)
    {
        $this
            ->setAccessLevelsSlimInfo($accessLevelsSlimInfo)
            ->setCount($count)
            ->setIsRootOwner($isRootOwner)
            ->setUseParentAccessLevel($useParentAccessLevel);
    }
    /**
     * Get AccessLevelsSlimInfo value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \ArrayType\ArrayOfAcsAccessLevelSlimInfo|null
     */
    public function getAccessLevelsSlimInfo(): ?\ArrayType\ArrayOfAcsAccessLevelSlimInfo
    {
        return isset($this->AccessLevelsSlimInfo) ? $this->AccessLevelsSlimInfo : null;
    }
    /**
     * Set AccessLevelsSlimInfo value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \ArrayType\ArrayOfAcsAccessLevelSlimInfo $accessLevelsSlimInfo
     * @return \StructType\LAccessLevelsData
     */
    public function setAccessLevelsSlimInfo(?\ArrayType\ArrayOfAcsAccessLevelSlimInfo $accessLevelsSlimInfo = null): self
    {
        if (is_null($accessLevelsSlimInfo) || (is_array($accessLevelsSlimInfo) && empty($accessLevelsSlimInfo))) {
            unset($this->AccessLevelsSlimInfo);
        } else {
            $this->AccessLevelsSlimInfo = $accessLevelsSlimInfo;
        }
        
        return $this;
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
     * @return \StructType\LAccessLevelsData
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
     * @return \StructType\LAccessLevelsData
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
     * Get UseParentAccessLevel value
     * @return bool|null
     */
    public function getUseParentAccessLevel(): ?bool
    {
        return $this->UseParentAccessLevel;
    }
    /**
     * Set UseParentAccessLevel value
     * @param bool $useParentAccessLevel
     * @return \StructType\LAccessLevelsData
     */
    public function setUseParentAccessLevel(?bool $useParentAccessLevel = null): self
    {
        // validation for constraint: boolean
        if (!is_null($useParentAccessLevel) && !is_bool($useParentAccessLevel)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($useParentAccessLevel, true), gettype($useParentAccessLevel)), __LINE__);
        }
        $this->UseParentAccessLevel = $useParentAccessLevel;
        
        return $this;
    }
}
