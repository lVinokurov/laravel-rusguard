<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for AcsAccessPointSlimInfo StructType
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:AcsAccessPointSlimInfo
 * @subpackage Structs
 */
class AcsAccessPointSlimInfo extends AcsAccessPointBase
{
    /**
     * The AcsAccessLevelId
     * Meta information extracted from the WSDL
     * - base: xs:string
     * - minOccurs: 0
     * - nillable: true
     * - pattern: [\da-fA-F]{8}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{12}
     * - type: tns:guid
     * @var string|null
     */
    protected ?string $AcsAccessLevelId = null;
    /**
     * The AcsAccessPointDriverInfo
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \StructType\AcsAccessPointDriverInfo|null
     */
    protected ?\StructType\AcsAccessPointDriverInfo $AcsAccessPointDriverInfo = null;
    /**
     * The BoxAccessLevel
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \StructType\AcsBoxAccessLevelSlimInfo|null
     */
    protected ?\StructType\AcsBoxAccessLevelSlimInfo $BoxAccessLevel = null;
    /**
     * The Id
     * Meta information extracted from the WSDL
     * - base: xs:string
     * - minOccurs: 0
     * - nillable: true
     * - pattern: [\da-fA-F]{8}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{12}
     * - type: tns:guid
     * @var string|null
     */
    protected ?string $Id = null;
    /**
     * The IsRemoved
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var bool|null
     */
    protected ?bool $IsRemoved = null;
    /**
     * The Schedule
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \StructType\AcsScheduleSlimInfo|null
     */
    protected ?\StructType\AcsScheduleSlimInfo $Schedule = null;
    /**
     * Constructor method for AcsAccessPointSlimInfo
     * @uses AcsAccessPointSlimInfo::setAcsAccessLevelId()
     * @uses AcsAccessPointSlimInfo::setAcsAccessPointDriverInfo()
     * @uses AcsAccessPointSlimInfo::setBoxAccessLevel()
     * @uses AcsAccessPointSlimInfo::setId()
     * @uses AcsAccessPointSlimInfo::setIsRemoved()
     * @uses AcsAccessPointSlimInfo::setSchedule()
     * @param string $acsAccessLevelId
     * @param \StructType\AcsAccessPointDriverInfo $acsAccessPointDriverInfo
     * @param \StructType\AcsBoxAccessLevelSlimInfo $boxAccessLevel
     * @param string $id
     * @param bool $isRemoved
     * @param \StructType\AcsScheduleSlimInfo $schedule
     */
    public function __construct(?string $acsAccessLevelId = null, ?\StructType\AcsAccessPointDriverInfo $acsAccessPointDriverInfo = null, ?\StructType\AcsBoxAccessLevelSlimInfo $boxAccessLevel = null, ?string $id = null, ?bool $isRemoved = null, ?\StructType\AcsScheduleSlimInfo $schedule = null)
    {
        $this
            ->setAcsAccessLevelId($acsAccessLevelId)
            ->setAcsAccessPointDriverInfo($acsAccessPointDriverInfo)
            ->setBoxAccessLevel($boxAccessLevel)
            ->setId($id)
            ->setIsRemoved($isRemoved)
            ->setSchedule($schedule);
    }
    /**
     * Get AcsAccessLevelId value
     * @return string|null
     */
    public function getAcsAccessLevelId(): ?string
    {
        return $this->AcsAccessLevelId;
    }
    /**
     * Set AcsAccessLevelId value
     * @param string $acsAccessLevelId
     * @return \StructType\AcsAccessPointSlimInfo
     */
    public function setAcsAccessLevelId(?string $acsAccessLevelId = null): self
    {
        // validation for constraint: string
        if (!is_null($acsAccessLevelId) && !is_string($acsAccessLevelId)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($acsAccessLevelId, true), gettype($acsAccessLevelId)), __LINE__);
        }
        // validation for constraint: pattern([\da-fA-F]{8}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{12})
        if (!is_null($acsAccessLevelId) && !preg_match('/[\\da-fA-F]{8}-[\\da-fA-F]{4}-[\\da-fA-F]{4}-[\\da-fA-F]{4}-[\\da-fA-F]{12}/', $acsAccessLevelId)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a literal that is among the set of character sequences denoted by the regular expression /[\\da-fA-F]{8}-[\\da-fA-F]{4}-[\\da-fA-F]{4}-[\\da-fA-F]{4}-[\\da-fA-F]{12}/', var_export($acsAccessLevelId, true)), __LINE__);
        }
        $this->AcsAccessLevelId = $acsAccessLevelId;
        
        return $this;
    }
    /**
     * Get AcsAccessPointDriverInfo value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \StructType\AcsAccessPointDriverInfo|null
     */
    public function getAcsAccessPointDriverInfo(): ?\StructType\AcsAccessPointDriverInfo
    {
        return isset($this->AcsAccessPointDriverInfo) ? $this->AcsAccessPointDriverInfo : null;
    }
    /**
     * Set AcsAccessPointDriverInfo value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \StructType\AcsAccessPointDriverInfo $acsAccessPointDriverInfo
     * @return \StructType\AcsAccessPointSlimInfo
     */
    public function setAcsAccessPointDriverInfo(?\StructType\AcsAccessPointDriverInfo $acsAccessPointDriverInfo = null): self
    {
        if (is_null($acsAccessPointDriverInfo) || (is_array($acsAccessPointDriverInfo) && empty($acsAccessPointDriverInfo))) {
            unset($this->AcsAccessPointDriverInfo);
        } else {
            $this->AcsAccessPointDriverInfo = $acsAccessPointDriverInfo;
        }
        
        return $this;
    }
    /**
     * Get BoxAccessLevel value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \StructType\AcsBoxAccessLevelSlimInfo|null
     */
    public function getBoxAccessLevel(): ?\StructType\AcsBoxAccessLevelSlimInfo
    {
        return isset($this->BoxAccessLevel) ? $this->BoxAccessLevel : null;
    }
    /**
     * Set BoxAccessLevel value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \StructType\AcsBoxAccessLevelSlimInfo $boxAccessLevel
     * @return \StructType\AcsAccessPointSlimInfo
     */
    public function setBoxAccessLevel(?\StructType\AcsBoxAccessLevelSlimInfo $boxAccessLevel = null): self
    {
        if (is_null($boxAccessLevel) || (is_array($boxAccessLevel) && empty($boxAccessLevel))) {
            unset($this->BoxAccessLevel);
        } else {
            $this->BoxAccessLevel = $boxAccessLevel;
        }
        
        return $this;
    }
    /**
     * Get Id value
     * @return string|null
     */
    public function getId(): ?string
    {
        return $this->Id;
    }
    /**
     * Set Id value
     * @param string $id
     * @return \StructType\AcsAccessPointSlimInfo
     */
    public function setId(?string $id = null): self
    {
        // validation for constraint: string
        if (!is_null($id) && !is_string($id)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($id, true), gettype($id)), __LINE__);
        }
        // validation for constraint: pattern([\da-fA-F]{8}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{12})
        if (!is_null($id) && !preg_match('/[\\da-fA-F]{8}-[\\da-fA-F]{4}-[\\da-fA-F]{4}-[\\da-fA-F]{4}-[\\da-fA-F]{12}/', $id)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a literal that is among the set of character sequences denoted by the regular expression /[\\da-fA-F]{8}-[\\da-fA-F]{4}-[\\da-fA-F]{4}-[\\da-fA-F]{4}-[\\da-fA-F]{12}/', var_export($id, true)), __LINE__);
        }
        $this->Id = $id;
        
        return $this;
    }
    /**
     * Get IsRemoved value
     * @return bool|null
     */
    public function getIsRemoved(): ?bool
    {
        return $this->IsRemoved;
    }
    /**
     * Set IsRemoved value
     * @param bool $isRemoved
     * @return \StructType\AcsAccessPointSlimInfo
     */
    public function setIsRemoved(?bool $isRemoved = null): self
    {
        // validation for constraint: boolean
        if (!is_null($isRemoved) && !is_bool($isRemoved)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($isRemoved, true), gettype($isRemoved)), __LINE__);
        }
        $this->IsRemoved = $isRemoved;
        
        return $this;
    }
    /**
     * Get Schedule value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \StructType\AcsScheduleSlimInfo|null
     */
    public function getSchedule(): ?\StructType\AcsScheduleSlimInfo
    {
        return isset($this->Schedule) ? $this->Schedule : null;
    }
    /**
     * Set Schedule value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \StructType\AcsScheduleSlimInfo $schedule
     * @return \StructType\AcsAccessPointSlimInfo
     */
    public function setSchedule(?\StructType\AcsScheduleSlimInfo $schedule = null): self
    {
        if (is_null($schedule) || (is_array($schedule) && empty($schedule))) {
            unset($this->Schedule);
        } else {
            $this->Schedule = $schedule;
        }
        
        return $this;
    }
}
