<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for AcsEmployeeSlim StructType
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:AcsEmployeeSlim
 * @subpackage Structs
 */
class AcsEmployeeSlim extends AcsEmployeeSlimBase
{
    /**
     * The AccessLevels
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \ArrayType\ArrayOfAcsAccessLevelSlimInfo|null
     */
    protected ?\ArrayType\ArrayOfAcsAccessLevelSlimInfo $AccessLevels = null;
    /**
     * The CreationDateTime
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $CreationDateTime = null;
    /**
     * The EmployeeGroupID
     * Meta information extracted from the WSDL
     * - base: xs:string
     * - minOccurs: 0
     * - nillable: true
     * - pattern: [\da-fA-F]{8}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{12}
     * - type: tns:guid
     * @var string|null
     */
    protected ?string $EmployeeGroupID = null;
    /**
     * The EmployeeGroupPath
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $EmployeeGroupPath = null;
    /**
     * The GroupCode
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $GroupCode = null;
    /**
     * The ID
     * Meta information extracted from the WSDL
     * - base: xs:string
     * - minOccurs: 0
     * - nillable: true
     * - pattern: [\da-fA-F]{8}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{12}
     * - type: tns:guid
     * @var string|null
     */
    protected ?string $ID = null;
    /**
     * The IsAccessLevelsInherited
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var bool|null
     */
    protected ?bool $IsAccessLevelsInherited = null;
    /**
     * The IsPhotoAny
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var bool|null
     */
    protected ?bool $IsPhotoAny = null;
    /**
     * The IsRemoved
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var bool|null
     */
    protected ?bool $IsRemoved = null;
    /**
     * The IsWorkSchedulesInherited
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var bool|null
     */
    protected ?bool $IsWorkSchedulesInherited = null;
    /**
     * The IsWorkZonesInherited
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var bool|null
     */
    protected ?bool $IsWorkZonesInherited = null;
    /**
     * The Keys
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \ArrayType\ArrayOfAcsKeyInfo|null
     */
    protected ?\ArrayType\ArrayOfAcsKeyInfo $Keys = null;
    /**
     * The ModificationDateTime
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $ModificationDateTime = null;
    /**
     * The Position
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \StructType\LEmployeePositionInfo|null
     */
    protected ?\StructType\LEmployeePositionInfo $Position = null;
    /**
     * The RowNumber
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var int|null
     */
    protected ?int $RowNumber = null;
    /**
     * The WorkSchedules
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \ArrayType\ArrayOfWorkScheduleSlimInfo|null
     */
    protected ?\ArrayType\ArrayOfWorkScheduleSlimInfo $WorkSchedules = null;
    /**
     * The WorkZones
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \ArrayType\ArrayOfWorkZoneSlimInfo|null
     */
    protected ?\ArrayType\ArrayOfWorkZoneSlimInfo $WorkZones = null;
    /**
     * Constructor method for AcsEmployeeSlim
     * @uses AcsEmployeeSlim::setAccessLevels()
     * @uses AcsEmployeeSlim::setCreationDateTime()
     * @uses AcsEmployeeSlim::setEmployeeGroupID()
     * @uses AcsEmployeeSlim::setEmployeeGroupPath()
     * @uses AcsEmployeeSlim::setGroupCode()
     * @uses AcsEmployeeSlim::setID()
     * @uses AcsEmployeeSlim::setIsAccessLevelsInherited()
     * @uses AcsEmployeeSlim::setIsPhotoAny()
     * @uses AcsEmployeeSlim::setIsRemoved()
     * @uses AcsEmployeeSlim::setIsWorkSchedulesInherited()
     * @uses AcsEmployeeSlim::setIsWorkZonesInherited()
     * @uses AcsEmployeeSlim::setKeys()
     * @uses AcsEmployeeSlim::setModificationDateTime()
     * @uses AcsEmployeeSlim::setPosition()
     * @uses AcsEmployeeSlim::setRowNumber()
     * @uses AcsEmployeeSlim::setWorkSchedules()
     * @uses AcsEmployeeSlim::setWorkZones()
     * @param \ArrayType\ArrayOfAcsAccessLevelSlimInfo $accessLevels
     * @param string $creationDateTime
     * @param string $employeeGroupID
     * @param string $employeeGroupPath
     * @param string $groupCode
     * @param string $iD
     * @param bool $isAccessLevelsInherited
     * @param bool $isPhotoAny
     * @param bool $isRemoved
     * @param bool $isWorkSchedulesInherited
     * @param bool $isWorkZonesInherited
     * @param \ArrayType\ArrayOfAcsKeyInfo $keys
     * @param string $modificationDateTime
     * @param \StructType\LEmployeePositionInfo $position
     * @param int $rowNumber
     * @param \ArrayType\ArrayOfWorkScheduleSlimInfo $workSchedules
     * @param \ArrayType\ArrayOfWorkZoneSlimInfo $workZones
     */
    public function __construct(?\ArrayType\ArrayOfAcsAccessLevelSlimInfo $accessLevels = null, ?string $creationDateTime = null, ?string $employeeGroupID = null, ?string $employeeGroupPath = null, ?string $groupCode = null, ?string $iD = null, ?bool $isAccessLevelsInherited = null, ?bool $isPhotoAny = null, ?bool $isRemoved = null, ?bool $isWorkSchedulesInherited = null, ?bool $isWorkZonesInherited = null, ?\ArrayType\ArrayOfAcsKeyInfo $keys = null, ?string $modificationDateTime = null, ?\StructType\LEmployeePositionInfo $position = null, ?int $rowNumber = null, ?\ArrayType\ArrayOfWorkScheduleSlimInfo $workSchedules = null, ?\ArrayType\ArrayOfWorkZoneSlimInfo $workZones = null)
    {
        $this
            ->setAccessLevels($accessLevels)
            ->setCreationDateTime($creationDateTime)
            ->setEmployeeGroupID($employeeGroupID)
            ->setEmployeeGroupPath($employeeGroupPath)
            ->setGroupCode($groupCode)
            ->setID($iD)
            ->setIsAccessLevelsInherited($isAccessLevelsInherited)
            ->setIsPhotoAny($isPhotoAny)
            ->setIsRemoved($isRemoved)
            ->setIsWorkSchedulesInherited($isWorkSchedulesInherited)
            ->setIsWorkZonesInherited($isWorkZonesInherited)
            ->setKeys($keys)
            ->setModificationDateTime($modificationDateTime)
            ->setPosition($position)
            ->setRowNumber($rowNumber)
            ->setWorkSchedules($workSchedules)
            ->setWorkZones($workZones);
    }
    /**
     * Get AccessLevels value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \ArrayType\ArrayOfAcsAccessLevelSlimInfo|null
     */
    public function getAccessLevels(): ?\ArrayType\ArrayOfAcsAccessLevelSlimInfo
    {
        return isset($this->AccessLevels) ? $this->AccessLevels : null;
    }
    /**
     * Set AccessLevels value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \ArrayType\ArrayOfAcsAccessLevelSlimInfo $accessLevels
     * @return \StructType\AcsEmployeeSlim
     */
    public function setAccessLevels(?\ArrayType\ArrayOfAcsAccessLevelSlimInfo $accessLevels = null): self
    {
        if (is_null($accessLevels) || (is_array($accessLevels) && empty($accessLevels))) {
            unset($this->AccessLevels);
        } else {
            $this->AccessLevels = $accessLevels;
        }
        
        return $this;
    }
    /**
     * Get CreationDateTime value
     * @return string|null
     */
    public function getCreationDateTime(): ?string
    {
        return $this->CreationDateTime;
    }
    /**
     * Set CreationDateTime value
     * @param string $creationDateTime
     * @return \StructType\AcsEmployeeSlim
     */
    public function setCreationDateTime(?string $creationDateTime = null): self
    {
        // validation for constraint: string
        if (!is_null($creationDateTime) && !is_string($creationDateTime)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($creationDateTime, true), gettype($creationDateTime)), __LINE__);
        }
        $this->CreationDateTime = $creationDateTime;
        
        return $this;
    }
    /**
     * Get EmployeeGroupID value
     * @return string|null
     */
    public function getEmployeeGroupID(): ?string
    {
        return $this->EmployeeGroupID;
    }
    /**
     * Set EmployeeGroupID value
     * @param string $employeeGroupID
     * @return \StructType\AcsEmployeeSlim
     */
    public function setEmployeeGroupID(?string $employeeGroupID = null): self
    {
        // validation for constraint: string
        if (!is_null($employeeGroupID) && !is_string($employeeGroupID)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($employeeGroupID, true), gettype($employeeGroupID)), __LINE__);
        }
        // validation for constraint: pattern([\da-fA-F]{8}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{12})
        if (!is_null($employeeGroupID) && !preg_match('/[\\da-fA-F]{8}-[\\da-fA-F]{4}-[\\da-fA-F]{4}-[\\da-fA-F]{4}-[\\da-fA-F]{12}/', $employeeGroupID)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a literal that is among the set of character sequences denoted by the regular expression /[\\da-fA-F]{8}-[\\da-fA-F]{4}-[\\da-fA-F]{4}-[\\da-fA-F]{4}-[\\da-fA-F]{12}/', var_export($employeeGroupID, true)), __LINE__);
        }
        $this->EmployeeGroupID = $employeeGroupID;
        
        return $this;
    }
    /**
     * Get EmployeeGroupPath value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getEmployeeGroupPath(): ?string
    {
        return isset($this->EmployeeGroupPath) ? $this->EmployeeGroupPath : null;
    }
    /**
     * Set EmployeeGroupPath value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $employeeGroupPath
     * @return \StructType\AcsEmployeeSlim
     */
    public function setEmployeeGroupPath(?string $employeeGroupPath = null): self
    {
        // validation for constraint: string
        if (!is_null($employeeGroupPath) && !is_string($employeeGroupPath)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($employeeGroupPath, true), gettype($employeeGroupPath)), __LINE__);
        }
        if (is_null($employeeGroupPath) || (is_array($employeeGroupPath) && empty($employeeGroupPath))) {
            unset($this->EmployeeGroupPath);
        } else {
            $this->EmployeeGroupPath = $employeeGroupPath;
        }
        
        return $this;
    }
    /**
     * Get GroupCode value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getGroupCode(): ?string
    {
        return isset($this->GroupCode) ? $this->GroupCode : null;
    }
    /**
     * Set GroupCode value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $groupCode
     * @return \StructType\AcsEmployeeSlim
     */
    public function setGroupCode(?string $groupCode = null): self
    {
        // validation for constraint: string
        if (!is_null($groupCode) && !is_string($groupCode)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($groupCode, true), gettype($groupCode)), __LINE__);
        }
        if (is_null($groupCode) || (is_array($groupCode) && empty($groupCode))) {
            unset($this->GroupCode);
        } else {
            $this->GroupCode = $groupCode;
        }
        
        return $this;
    }
    /**
     * Get ID value
     * @return string|null
     */
    public function getID(): ?string
    {
        return $this->ID;
    }
    /**
     * Set ID value
     * @param string $iD
     * @return \StructType\AcsEmployeeSlim
     */
    public function setID(?string $iD = null): self
    {
        // validation for constraint: string
        if (!is_null($iD) && !is_string($iD)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($iD, true), gettype($iD)), __LINE__);
        }
        // validation for constraint: pattern([\da-fA-F]{8}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{12})
        if (!is_null($iD) && !preg_match('/[\\da-fA-F]{8}-[\\da-fA-F]{4}-[\\da-fA-F]{4}-[\\da-fA-F]{4}-[\\da-fA-F]{12}/', $iD)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a literal that is among the set of character sequences denoted by the regular expression /[\\da-fA-F]{8}-[\\da-fA-F]{4}-[\\da-fA-F]{4}-[\\da-fA-F]{4}-[\\da-fA-F]{12}/', var_export($iD, true)), __LINE__);
        }
        $this->ID = $iD;
        
        return $this;
    }
    /**
     * Get IsAccessLevelsInherited value
     * @return bool|null
     */
    public function getIsAccessLevelsInherited(): ?bool
    {
        return $this->IsAccessLevelsInherited;
    }
    /**
     * Set IsAccessLevelsInherited value
     * @param bool $isAccessLevelsInherited
     * @return \StructType\AcsEmployeeSlim
     */
    public function setIsAccessLevelsInherited(?bool $isAccessLevelsInherited = null): self
    {
        // validation for constraint: boolean
        if (!is_null($isAccessLevelsInherited) && !is_bool($isAccessLevelsInherited)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($isAccessLevelsInherited, true), gettype($isAccessLevelsInherited)), __LINE__);
        }
        $this->IsAccessLevelsInherited = $isAccessLevelsInherited;
        
        return $this;
    }
    /**
     * Get IsPhotoAny value
     * @return bool|null
     */
    public function getIsPhotoAny(): ?bool
    {
        return $this->IsPhotoAny;
    }
    /**
     * Set IsPhotoAny value
     * @param bool $isPhotoAny
     * @return \StructType\AcsEmployeeSlim
     */
    public function setIsPhotoAny(?bool $isPhotoAny = null): self
    {
        // validation for constraint: boolean
        if (!is_null($isPhotoAny) && !is_bool($isPhotoAny)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($isPhotoAny, true), gettype($isPhotoAny)), __LINE__);
        }
        $this->IsPhotoAny = $isPhotoAny;
        
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
     * @return \StructType\AcsEmployeeSlim
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
     * Get IsWorkSchedulesInherited value
     * @return bool|null
     */
    public function getIsWorkSchedulesInherited(): ?bool
    {
        return $this->IsWorkSchedulesInherited;
    }
    /**
     * Set IsWorkSchedulesInherited value
     * @param bool $isWorkSchedulesInherited
     * @return \StructType\AcsEmployeeSlim
     */
    public function setIsWorkSchedulesInherited(?bool $isWorkSchedulesInherited = null): self
    {
        // validation for constraint: boolean
        if (!is_null($isWorkSchedulesInherited) && !is_bool($isWorkSchedulesInherited)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($isWorkSchedulesInherited, true), gettype($isWorkSchedulesInherited)), __LINE__);
        }
        $this->IsWorkSchedulesInherited = $isWorkSchedulesInherited;
        
        return $this;
    }
    /**
     * Get IsWorkZonesInherited value
     * @return bool|null
     */
    public function getIsWorkZonesInherited(): ?bool
    {
        return $this->IsWorkZonesInherited;
    }
    /**
     * Set IsWorkZonesInherited value
     * @param bool $isWorkZonesInherited
     * @return \StructType\AcsEmployeeSlim
     */
    public function setIsWorkZonesInherited(?bool $isWorkZonesInherited = null): self
    {
        // validation for constraint: boolean
        if (!is_null($isWorkZonesInherited) && !is_bool($isWorkZonesInherited)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($isWorkZonesInherited, true), gettype($isWorkZonesInherited)), __LINE__);
        }
        $this->IsWorkZonesInherited = $isWorkZonesInherited;
        
        return $this;
    }
    /**
     * Get Keys value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \ArrayType\ArrayOfAcsKeyInfo|null
     */
    public function getKeys(): ?\ArrayType\ArrayOfAcsKeyInfo
    {
        return isset($this->Keys) ? $this->Keys : null;
    }
    /**
     * Set Keys value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \ArrayType\ArrayOfAcsKeyInfo $keys
     * @return \StructType\AcsEmployeeSlim
     */
    public function setKeys(?\ArrayType\ArrayOfAcsKeyInfo $keys = null): self
    {
        if (is_null($keys) || (is_array($keys) && empty($keys))) {
            unset($this->Keys);
        } else {
            $this->Keys = $keys;
        }
        
        return $this;
    }
    /**
     * Get ModificationDateTime value
     * @return string|null
     */
    public function getModificationDateTime(): ?string
    {
        return $this->ModificationDateTime;
    }
    /**
     * Set ModificationDateTime value
     * @param string $modificationDateTime
     * @return \StructType\AcsEmployeeSlim
     */
    public function setModificationDateTime(?string $modificationDateTime = null): self
    {
        // validation for constraint: string
        if (!is_null($modificationDateTime) && !is_string($modificationDateTime)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($modificationDateTime, true), gettype($modificationDateTime)), __LINE__);
        }
        $this->ModificationDateTime = $modificationDateTime;
        
        return $this;
    }
    /**
     * Get Position value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \StructType\LEmployeePositionInfo|null
     */
    public function getPosition(): ?\StructType\LEmployeePositionInfo
    {
        return isset($this->Position) ? $this->Position : null;
    }
    /**
     * Set Position value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \StructType\LEmployeePositionInfo $position
     * @return \StructType\AcsEmployeeSlim
     */
    public function setPosition(?\StructType\LEmployeePositionInfo $position = null): self
    {
        if (is_null($position) || (is_array($position) && empty($position))) {
            unset($this->Position);
        } else {
            $this->Position = $position;
        }
        
        return $this;
    }
    /**
     * Get RowNumber value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return int|null
     */
    public function getRowNumber(): ?int
    {
        return isset($this->RowNumber) ? $this->RowNumber : null;
    }
    /**
     * Set RowNumber value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param int $rowNumber
     * @return \StructType\AcsEmployeeSlim
     */
    public function setRowNumber(?int $rowNumber = null): self
    {
        // validation for constraint: int
        if (!is_null($rowNumber) && !(is_int($rowNumber) || ctype_digit($rowNumber))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($rowNumber, true), gettype($rowNumber)), __LINE__);
        }
        if (is_null($rowNumber) || (is_array($rowNumber) && empty($rowNumber))) {
            unset($this->RowNumber);
        } else {
            $this->RowNumber = $rowNumber;
        }
        
        return $this;
    }
    /**
     * Get WorkSchedules value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \ArrayType\ArrayOfWorkScheduleSlimInfo|null
     */
    public function getWorkSchedules(): ?\ArrayType\ArrayOfWorkScheduleSlimInfo
    {
        return isset($this->WorkSchedules) ? $this->WorkSchedules : null;
    }
    /**
     * Set WorkSchedules value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \ArrayType\ArrayOfWorkScheduleSlimInfo $workSchedules
     * @return \StructType\AcsEmployeeSlim
     */
    public function setWorkSchedules(?\ArrayType\ArrayOfWorkScheduleSlimInfo $workSchedules = null): self
    {
        if (is_null($workSchedules) || (is_array($workSchedules) && empty($workSchedules))) {
            unset($this->WorkSchedules);
        } else {
            $this->WorkSchedules = $workSchedules;
        }
        
        return $this;
    }
    /**
     * Get WorkZones value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \ArrayType\ArrayOfWorkZoneSlimInfo|null
     */
    public function getWorkZones(): ?\ArrayType\ArrayOfWorkZoneSlimInfo
    {
        return isset($this->WorkZones) ? $this->WorkZones : null;
    }
    /**
     * Set WorkZones value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \ArrayType\ArrayOfWorkZoneSlimInfo $workZones
     * @return \StructType\AcsEmployeeSlim
     */
    public function setWorkZones(?\ArrayType\ArrayOfWorkZoneSlimInfo $workZones = null): self
    {
        if (is_null($workZones) || (is_array($workZones) && empty($workZones))) {
            unset($this->WorkZones);
        } else {
            $this->WorkZones = $workZones;
        }
        
        return $this;
    }
}
