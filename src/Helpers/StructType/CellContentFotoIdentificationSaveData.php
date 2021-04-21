<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for CellContentFotoIdentificationSaveData StructType
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:CellContentFotoIdentificationSaveData
 * @subpackage Structs
 */
class CellContentFotoIdentificationSaveData extends AbstractStructBase
{
    /**
     * The AccessPointDriverId
     * Meta information extracted from the WSDL
     * - base: xs:string
     * - minOccurs: 0
     * - nillable: true
     * - pattern: [\da-fA-F]{8}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{12}
     * - type: tns:guid
     * @var string|null
     */
    protected ?string $AccessPointDriverId = null;
    /**
     * The AutoAllowEntryTime
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var int|null
     */
    protected ?int $AutoAllowEntryTime = null;
    /**
     * The AutoAllowExitTime
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var int|null
     */
    protected ?int $AutoAllowExitTime = null;
    /**
     * The ColorFieldID
     * Meta information extracted from the WSDL
     * - base: xs:string
     * - minOccurs: 0
     * - nillable: true
     * - pattern: [\da-fA-F]{8}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{12}
     * - type: tns:guid
     * @var string|null
     */
    protected ?string $ColorFieldID = null;
    /**
     * The DecisionHotKey
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var int|null
     */
    protected ?int $DecisionHotKey = null;
    /**
     * The DecisionHotKeyCancel
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var int|null
     */
    protected ?int $DecisionHotKeyCancel = null;
    /**
     * The DecisionHotKeyModifier
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var int|null
     */
    protected ?int $DecisionHotKeyModifier = null;
    /**
     * The DecisionHotKeyModifierCancel
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var int|null
     */
    protected ?int $DecisionHotKeyModifierCancel = null;
    /**
     * The EnableOperatorDecisionEntryState
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var bool|null
     */
    protected ?bool $EnableOperatorDecisionEntryState = null;
    /**
     * The EnableOperatorDecisionExitState
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var bool|null
     */
    protected ?bool $EnableOperatorDecisionExitState = null;
    /**
     * The EnableOperatorReactionTimeEntry
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var bool|null
     */
    protected ?bool $EnableOperatorReactionTimeEntry = null;
    /**
     * The EnableOperatorReactionTimeExit
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var bool|null
     */
    protected ?bool $EnableOperatorReactionTimeExit = null;
    /**
     * The HidePhotoAfterTime
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var int|null
     */
    protected ?int $HidePhotoAfterTime = null;
    /**
     * The IsAutoAllowEntry
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var bool|null
     */
    protected ?bool $IsAutoAllowEntry = null;
    /**
     * The IsAutoAllowExit
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var bool|null
     */
    protected ?bool $IsAutoAllowExit = null;
    /**
     * The IsHidePhotoAfterTime
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var bool|null
     */
    protected ?bool $IsHidePhotoAfterTime = null;
    /**
     * The PersonalData
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \ArrayType\ArrayOfPhotoidentificationPersonalData|null
     */
    protected ?\ArrayType\ArrayOfPhotoidentificationPersonalData $PersonalData = null;
    /**
     * The PhotoContentId
     * Meta information extracted from the WSDL
     * - base: xs:string
     * - minOccurs: 0
     * - nillable: true
     * - pattern: [\da-fA-F]{8}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{12}
     * - type: tns:guid
     * @var string|null
     */
    protected ?string $PhotoContentId = null;
    /**
     * The ShowOnOffButtonEnterPermitMode
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var bool|null
     */
    protected ?bool $ShowOnOffButtonEnterPermitMode = null;
    /**
     * The ShowOnOffButtonExitPermitMode
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var bool|null
     */
    protected ?bool $ShowOnOffButtonExitPermitMode = null;
    /**
     * The ShowPersonalData
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var bool|null
     */
    protected ?bool $ShowPersonalData = null;
    /**
     * The ShowPreviousVisitorMode
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $ShowPreviousVisitorMode = null;
    /**
     * Constructor method for CellContentFotoIdentificationSaveData
     * @uses CellContentFotoIdentificationSaveData::setAccessPointDriverId()
     * @uses CellContentFotoIdentificationSaveData::setAutoAllowEntryTime()
     * @uses CellContentFotoIdentificationSaveData::setAutoAllowExitTime()
     * @uses CellContentFotoIdentificationSaveData::setColorFieldID()
     * @uses CellContentFotoIdentificationSaveData::setDecisionHotKey()
     * @uses CellContentFotoIdentificationSaveData::setDecisionHotKeyCancel()
     * @uses CellContentFotoIdentificationSaveData::setDecisionHotKeyModifier()
     * @uses CellContentFotoIdentificationSaveData::setDecisionHotKeyModifierCancel()
     * @uses CellContentFotoIdentificationSaveData::setEnableOperatorDecisionEntryState()
     * @uses CellContentFotoIdentificationSaveData::setEnableOperatorDecisionExitState()
     * @uses CellContentFotoIdentificationSaveData::setEnableOperatorReactionTimeEntry()
     * @uses CellContentFotoIdentificationSaveData::setEnableOperatorReactionTimeExit()
     * @uses CellContentFotoIdentificationSaveData::setHidePhotoAfterTime()
     * @uses CellContentFotoIdentificationSaveData::setIsAutoAllowEntry()
     * @uses CellContentFotoIdentificationSaveData::setIsAutoAllowExit()
     * @uses CellContentFotoIdentificationSaveData::setIsHidePhotoAfterTime()
     * @uses CellContentFotoIdentificationSaveData::setPersonalData()
     * @uses CellContentFotoIdentificationSaveData::setPhotoContentId()
     * @uses CellContentFotoIdentificationSaveData::setShowOnOffButtonEnterPermitMode()
     * @uses CellContentFotoIdentificationSaveData::setShowOnOffButtonExitPermitMode()
     * @uses CellContentFotoIdentificationSaveData::setShowPersonalData()
     * @uses CellContentFotoIdentificationSaveData::setShowPreviousVisitorMode()
     * @param string $accessPointDriverId
     * @param int $autoAllowEntryTime
     * @param int $autoAllowExitTime
     * @param string $colorFieldID
     * @param int $decisionHotKey
     * @param int $decisionHotKeyCancel
     * @param int $decisionHotKeyModifier
     * @param int $decisionHotKeyModifierCancel
     * @param bool $enableOperatorDecisionEntryState
     * @param bool $enableOperatorDecisionExitState
     * @param bool $enableOperatorReactionTimeEntry
     * @param bool $enableOperatorReactionTimeExit
     * @param int $hidePhotoAfterTime
     * @param bool $isAutoAllowEntry
     * @param bool $isAutoAllowExit
     * @param bool $isHidePhotoAfterTime
     * @param \ArrayType\ArrayOfPhotoidentificationPersonalData $personalData
     * @param string $photoContentId
     * @param bool $showOnOffButtonEnterPermitMode
     * @param bool $showOnOffButtonExitPermitMode
     * @param bool $showPersonalData
     * @param string $showPreviousVisitorMode
     */
    public function __construct(?string $accessPointDriverId = null, ?int $autoAllowEntryTime = null, ?int $autoAllowExitTime = null, ?string $colorFieldID = null, ?int $decisionHotKey = null, ?int $decisionHotKeyCancel = null, ?int $decisionHotKeyModifier = null, ?int $decisionHotKeyModifierCancel = null, ?bool $enableOperatorDecisionEntryState = null, ?bool $enableOperatorDecisionExitState = null, ?bool $enableOperatorReactionTimeEntry = null, ?bool $enableOperatorReactionTimeExit = null, ?int $hidePhotoAfterTime = null, ?bool $isAutoAllowEntry = null, ?bool $isAutoAllowExit = null, ?bool $isHidePhotoAfterTime = null, ?\ArrayType\ArrayOfPhotoidentificationPersonalData $personalData = null, ?string $photoContentId = null, ?bool $showOnOffButtonEnterPermitMode = null, ?bool $showOnOffButtonExitPermitMode = null, ?bool $showPersonalData = null, ?string $showPreviousVisitorMode = null)
    {
        $this
            ->setAccessPointDriverId($accessPointDriverId)
            ->setAutoAllowEntryTime($autoAllowEntryTime)
            ->setAutoAllowExitTime($autoAllowExitTime)
            ->setColorFieldID($colorFieldID)
            ->setDecisionHotKey($decisionHotKey)
            ->setDecisionHotKeyCancel($decisionHotKeyCancel)
            ->setDecisionHotKeyModifier($decisionHotKeyModifier)
            ->setDecisionHotKeyModifierCancel($decisionHotKeyModifierCancel)
            ->setEnableOperatorDecisionEntryState($enableOperatorDecisionEntryState)
            ->setEnableOperatorDecisionExitState($enableOperatorDecisionExitState)
            ->setEnableOperatorReactionTimeEntry($enableOperatorReactionTimeEntry)
            ->setEnableOperatorReactionTimeExit($enableOperatorReactionTimeExit)
            ->setHidePhotoAfterTime($hidePhotoAfterTime)
            ->setIsAutoAllowEntry($isAutoAllowEntry)
            ->setIsAutoAllowExit($isAutoAllowExit)
            ->setIsHidePhotoAfterTime($isHidePhotoAfterTime)
            ->setPersonalData($personalData)
            ->setPhotoContentId($photoContentId)
            ->setShowOnOffButtonEnterPermitMode($showOnOffButtonEnterPermitMode)
            ->setShowOnOffButtonExitPermitMode($showOnOffButtonExitPermitMode)
            ->setShowPersonalData($showPersonalData)
            ->setShowPreviousVisitorMode($showPreviousVisitorMode);
    }
    /**
     * Get AccessPointDriverId value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getAccessPointDriverId(): ?string
    {
        return isset($this->AccessPointDriverId) ? $this->AccessPointDriverId : null;
    }
    /**
     * Set AccessPointDriverId value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $accessPointDriverId
     * @return \StructType\CellContentFotoIdentificationSaveData
     */
    public function setAccessPointDriverId(?string $accessPointDriverId = null): self
    {
        // validation for constraint: string
        if (!is_null($accessPointDriverId) && !is_string($accessPointDriverId)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($accessPointDriverId, true), gettype($accessPointDriverId)), __LINE__);
        }
        // validation for constraint: pattern([\da-fA-F]{8}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{12})
        if (!is_null($accessPointDriverId) && !preg_match('/[\\da-fA-F]{8}-[\\da-fA-F]{4}-[\\da-fA-F]{4}-[\\da-fA-F]{4}-[\\da-fA-F]{12}/', $accessPointDriverId)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a literal that is among the set of character sequences denoted by the regular expression /[\\da-fA-F]{8}-[\\da-fA-F]{4}-[\\da-fA-F]{4}-[\\da-fA-F]{4}-[\\da-fA-F]{12}/', var_export($accessPointDriverId, true)), __LINE__);
        }
        if (is_null($accessPointDriverId) || (is_array($accessPointDriverId) && empty($accessPointDriverId))) {
            unset($this->AccessPointDriverId);
        } else {
            $this->AccessPointDriverId = $accessPointDriverId;
        }
        
        return $this;
    }
    /**
     * Get AutoAllowEntryTime value
     * @return int|null
     */
    public function getAutoAllowEntryTime(): ?int
    {
        return $this->AutoAllowEntryTime;
    }
    /**
     * Set AutoAllowEntryTime value
     * @param int $autoAllowEntryTime
     * @return \StructType\CellContentFotoIdentificationSaveData
     */
    public function setAutoAllowEntryTime(?int $autoAllowEntryTime = null): self
    {
        // validation for constraint: int
        if (!is_null($autoAllowEntryTime) && !(is_int($autoAllowEntryTime) || ctype_digit($autoAllowEntryTime))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($autoAllowEntryTime, true), gettype($autoAllowEntryTime)), __LINE__);
        }
        $this->AutoAllowEntryTime = $autoAllowEntryTime;
        
        return $this;
    }
    /**
     * Get AutoAllowExitTime value
     * @return int|null
     */
    public function getAutoAllowExitTime(): ?int
    {
        return $this->AutoAllowExitTime;
    }
    /**
     * Set AutoAllowExitTime value
     * @param int $autoAllowExitTime
     * @return \StructType\CellContentFotoIdentificationSaveData
     */
    public function setAutoAllowExitTime(?int $autoAllowExitTime = null): self
    {
        // validation for constraint: int
        if (!is_null($autoAllowExitTime) && !(is_int($autoAllowExitTime) || ctype_digit($autoAllowExitTime))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($autoAllowExitTime, true), gettype($autoAllowExitTime)), __LINE__);
        }
        $this->AutoAllowExitTime = $autoAllowExitTime;
        
        return $this;
    }
    /**
     * Get ColorFieldID value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getColorFieldID(): ?string
    {
        return isset($this->ColorFieldID) ? $this->ColorFieldID : null;
    }
    /**
     * Set ColorFieldID value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $colorFieldID
     * @return \StructType\CellContentFotoIdentificationSaveData
     */
    public function setColorFieldID(?string $colorFieldID = null): self
    {
        // validation for constraint: string
        if (!is_null($colorFieldID) && !is_string($colorFieldID)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($colorFieldID, true), gettype($colorFieldID)), __LINE__);
        }
        // validation for constraint: pattern([\da-fA-F]{8}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{12})
        if (!is_null($colorFieldID) && !preg_match('/[\\da-fA-F]{8}-[\\da-fA-F]{4}-[\\da-fA-F]{4}-[\\da-fA-F]{4}-[\\da-fA-F]{12}/', $colorFieldID)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a literal that is among the set of character sequences denoted by the regular expression /[\\da-fA-F]{8}-[\\da-fA-F]{4}-[\\da-fA-F]{4}-[\\da-fA-F]{4}-[\\da-fA-F]{12}/', var_export($colorFieldID, true)), __LINE__);
        }
        if (is_null($colorFieldID) || (is_array($colorFieldID) && empty($colorFieldID))) {
            unset($this->ColorFieldID);
        } else {
            $this->ColorFieldID = $colorFieldID;
        }
        
        return $this;
    }
    /**
     * Get DecisionHotKey value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return int|null
     */
    public function getDecisionHotKey(): ?int
    {
        return isset($this->DecisionHotKey) ? $this->DecisionHotKey : null;
    }
    /**
     * Set DecisionHotKey value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param int $decisionHotKey
     * @return \StructType\CellContentFotoIdentificationSaveData
     */
    public function setDecisionHotKey(?int $decisionHotKey = null): self
    {
        // validation for constraint: int
        if (!is_null($decisionHotKey) && !(is_int($decisionHotKey) || ctype_digit($decisionHotKey))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($decisionHotKey, true), gettype($decisionHotKey)), __LINE__);
        }
        if (is_null($decisionHotKey) || (is_array($decisionHotKey) && empty($decisionHotKey))) {
            unset($this->DecisionHotKey);
        } else {
            $this->DecisionHotKey = $decisionHotKey;
        }
        
        return $this;
    }
    /**
     * Get DecisionHotKeyCancel value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return int|null
     */
    public function getDecisionHotKeyCancel(): ?int
    {
        return isset($this->DecisionHotKeyCancel) ? $this->DecisionHotKeyCancel : null;
    }
    /**
     * Set DecisionHotKeyCancel value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param int $decisionHotKeyCancel
     * @return \StructType\CellContentFotoIdentificationSaveData
     */
    public function setDecisionHotKeyCancel(?int $decisionHotKeyCancel = null): self
    {
        // validation for constraint: int
        if (!is_null($decisionHotKeyCancel) && !(is_int($decisionHotKeyCancel) || ctype_digit($decisionHotKeyCancel))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($decisionHotKeyCancel, true), gettype($decisionHotKeyCancel)), __LINE__);
        }
        if (is_null($decisionHotKeyCancel) || (is_array($decisionHotKeyCancel) && empty($decisionHotKeyCancel))) {
            unset($this->DecisionHotKeyCancel);
        } else {
            $this->DecisionHotKeyCancel = $decisionHotKeyCancel;
        }
        
        return $this;
    }
    /**
     * Get DecisionHotKeyModifier value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return int|null
     */
    public function getDecisionHotKeyModifier(): ?int
    {
        return isset($this->DecisionHotKeyModifier) ? $this->DecisionHotKeyModifier : null;
    }
    /**
     * Set DecisionHotKeyModifier value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param int $decisionHotKeyModifier
     * @return \StructType\CellContentFotoIdentificationSaveData
     */
    public function setDecisionHotKeyModifier(?int $decisionHotKeyModifier = null): self
    {
        // validation for constraint: int
        if (!is_null($decisionHotKeyModifier) && !(is_int($decisionHotKeyModifier) || ctype_digit($decisionHotKeyModifier))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($decisionHotKeyModifier, true), gettype($decisionHotKeyModifier)), __LINE__);
        }
        if (is_null($decisionHotKeyModifier) || (is_array($decisionHotKeyModifier) && empty($decisionHotKeyModifier))) {
            unset($this->DecisionHotKeyModifier);
        } else {
            $this->DecisionHotKeyModifier = $decisionHotKeyModifier;
        }
        
        return $this;
    }
    /**
     * Get DecisionHotKeyModifierCancel value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return int|null
     */
    public function getDecisionHotKeyModifierCancel(): ?int
    {
        return isset($this->DecisionHotKeyModifierCancel) ? $this->DecisionHotKeyModifierCancel : null;
    }
    /**
     * Set DecisionHotKeyModifierCancel value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param int $decisionHotKeyModifierCancel
     * @return \StructType\CellContentFotoIdentificationSaveData
     */
    public function setDecisionHotKeyModifierCancel(?int $decisionHotKeyModifierCancel = null): self
    {
        // validation for constraint: int
        if (!is_null($decisionHotKeyModifierCancel) && !(is_int($decisionHotKeyModifierCancel) || ctype_digit($decisionHotKeyModifierCancel))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($decisionHotKeyModifierCancel, true), gettype($decisionHotKeyModifierCancel)), __LINE__);
        }
        if (is_null($decisionHotKeyModifierCancel) || (is_array($decisionHotKeyModifierCancel) && empty($decisionHotKeyModifierCancel))) {
            unset($this->DecisionHotKeyModifierCancel);
        } else {
            $this->DecisionHotKeyModifierCancel = $decisionHotKeyModifierCancel;
        }
        
        return $this;
    }
    /**
     * Get EnableOperatorDecisionEntryState value
     * @return bool|null
     */
    public function getEnableOperatorDecisionEntryState(): ?bool
    {
        return $this->EnableOperatorDecisionEntryState;
    }
    /**
     * Set EnableOperatorDecisionEntryState value
     * @param bool $enableOperatorDecisionEntryState
     * @return \StructType\CellContentFotoIdentificationSaveData
     */
    public function setEnableOperatorDecisionEntryState(?bool $enableOperatorDecisionEntryState = null): self
    {
        // validation for constraint: boolean
        if (!is_null($enableOperatorDecisionEntryState) && !is_bool($enableOperatorDecisionEntryState)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($enableOperatorDecisionEntryState, true), gettype($enableOperatorDecisionEntryState)), __LINE__);
        }
        $this->EnableOperatorDecisionEntryState = $enableOperatorDecisionEntryState;
        
        return $this;
    }
    /**
     * Get EnableOperatorDecisionExitState value
     * @return bool|null
     */
    public function getEnableOperatorDecisionExitState(): ?bool
    {
        return $this->EnableOperatorDecisionExitState;
    }
    /**
     * Set EnableOperatorDecisionExitState value
     * @param bool $enableOperatorDecisionExitState
     * @return \StructType\CellContentFotoIdentificationSaveData
     */
    public function setEnableOperatorDecisionExitState(?bool $enableOperatorDecisionExitState = null): self
    {
        // validation for constraint: boolean
        if (!is_null($enableOperatorDecisionExitState) && !is_bool($enableOperatorDecisionExitState)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($enableOperatorDecisionExitState, true), gettype($enableOperatorDecisionExitState)), __LINE__);
        }
        $this->EnableOperatorDecisionExitState = $enableOperatorDecisionExitState;
        
        return $this;
    }
    /**
     * Get EnableOperatorReactionTimeEntry value
     * @return bool|null
     */
    public function getEnableOperatorReactionTimeEntry(): ?bool
    {
        return $this->EnableOperatorReactionTimeEntry;
    }
    /**
     * Set EnableOperatorReactionTimeEntry value
     * @param bool $enableOperatorReactionTimeEntry
     * @return \StructType\CellContentFotoIdentificationSaveData
     */
    public function setEnableOperatorReactionTimeEntry(?bool $enableOperatorReactionTimeEntry = null): self
    {
        // validation for constraint: boolean
        if (!is_null($enableOperatorReactionTimeEntry) && !is_bool($enableOperatorReactionTimeEntry)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($enableOperatorReactionTimeEntry, true), gettype($enableOperatorReactionTimeEntry)), __LINE__);
        }
        $this->EnableOperatorReactionTimeEntry = $enableOperatorReactionTimeEntry;
        
        return $this;
    }
    /**
     * Get EnableOperatorReactionTimeExit value
     * @return bool|null
     */
    public function getEnableOperatorReactionTimeExit(): ?bool
    {
        return $this->EnableOperatorReactionTimeExit;
    }
    /**
     * Set EnableOperatorReactionTimeExit value
     * @param bool $enableOperatorReactionTimeExit
     * @return \StructType\CellContentFotoIdentificationSaveData
     */
    public function setEnableOperatorReactionTimeExit(?bool $enableOperatorReactionTimeExit = null): self
    {
        // validation for constraint: boolean
        if (!is_null($enableOperatorReactionTimeExit) && !is_bool($enableOperatorReactionTimeExit)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($enableOperatorReactionTimeExit, true), gettype($enableOperatorReactionTimeExit)), __LINE__);
        }
        $this->EnableOperatorReactionTimeExit = $enableOperatorReactionTimeExit;
        
        return $this;
    }
    /**
     * Get HidePhotoAfterTime value
     * @return int|null
     */
    public function getHidePhotoAfterTime(): ?int
    {
        return $this->HidePhotoAfterTime;
    }
    /**
     * Set HidePhotoAfterTime value
     * @param int $hidePhotoAfterTime
     * @return \StructType\CellContentFotoIdentificationSaveData
     */
    public function setHidePhotoAfterTime(?int $hidePhotoAfterTime = null): self
    {
        // validation for constraint: int
        if (!is_null($hidePhotoAfterTime) && !(is_int($hidePhotoAfterTime) || ctype_digit($hidePhotoAfterTime))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($hidePhotoAfterTime, true), gettype($hidePhotoAfterTime)), __LINE__);
        }
        $this->HidePhotoAfterTime = $hidePhotoAfterTime;
        
        return $this;
    }
    /**
     * Get IsAutoAllowEntry value
     * @return bool|null
     */
    public function getIsAutoAllowEntry(): ?bool
    {
        return $this->IsAutoAllowEntry;
    }
    /**
     * Set IsAutoAllowEntry value
     * @param bool $isAutoAllowEntry
     * @return \StructType\CellContentFotoIdentificationSaveData
     */
    public function setIsAutoAllowEntry(?bool $isAutoAllowEntry = null): self
    {
        // validation for constraint: boolean
        if (!is_null($isAutoAllowEntry) && !is_bool($isAutoAllowEntry)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($isAutoAllowEntry, true), gettype($isAutoAllowEntry)), __LINE__);
        }
        $this->IsAutoAllowEntry = $isAutoAllowEntry;
        
        return $this;
    }
    /**
     * Get IsAutoAllowExit value
     * @return bool|null
     */
    public function getIsAutoAllowExit(): ?bool
    {
        return $this->IsAutoAllowExit;
    }
    /**
     * Set IsAutoAllowExit value
     * @param bool $isAutoAllowExit
     * @return \StructType\CellContentFotoIdentificationSaveData
     */
    public function setIsAutoAllowExit(?bool $isAutoAllowExit = null): self
    {
        // validation for constraint: boolean
        if (!is_null($isAutoAllowExit) && !is_bool($isAutoAllowExit)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($isAutoAllowExit, true), gettype($isAutoAllowExit)), __LINE__);
        }
        $this->IsAutoAllowExit = $isAutoAllowExit;
        
        return $this;
    }
    /**
     * Get IsHidePhotoAfterTime value
     * @return bool|null
     */
    public function getIsHidePhotoAfterTime(): ?bool
    {
        return $this->IsHidePhotoAfterTime;
    }
    /**
     * Set IsHidePhotoAfterTime value
     * @param bool $isHidePhotoAfterTime
     * @return \StructType\CellContentFotoIdentificationSaveData
     */
    public function setIsHidePhotoAfterTime(?bool $isHidePhotoAfterTime = null): self
    {
        // validation for constraint: boolean
        if (!is_null($isHidePhotoAfterTime) && !is_bool($isHidePhotoAfterTime)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($isHidePhotoAfterTime, true), gettype($isHidePhotoAfterTime)), __LINE__);
        }
        $this->IsHidePhotoAfterTime = $isHidePhotoAfterTime;
        
        return $this;
    }
    /**
     * Get PersonalData value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \ArrayType\ArrayOfPhotoidentificationPersonalData|null
     */
    public function getPersonalData(): ?\ArrayType\ArrayOfPhotoidentificationPersonalData
    {
        return isset($this->PersonalData) ? $this->PersonalData : null;
    }
    /**
     * Set PersonalData value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \ArrayType\ArrayOfPhotoidentificationPersonalData $personalData
     * @return \StructType\CellContentFotoIdentificationSaveData
     */
    public function setPersonalData(?\ArrayType\ArrayOfPhotoidentificationPersonalData $personalData = null): self
    {
        if (is_null($personalData) || (is_array($personalData) && empty($personalData))) {
            unset($this->PersonalData);
        } else {
            $this->PersonalData = $personalData;
        }
        
        return $this;
    }
    /**
     * Get PhotoContentId value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getPhotoContentId(): ?string
    {
        return isset($this->PhotoContentId) ? $this->PhotoContentId : null;
    }
    /**
     * Set PhotoContentId value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $photoContentId
     * @return \StructType\CellContentFotoIdentificationSaveData
     */
    public function setPhotoContentId(?string $photoContentId = null): self
    {
        // validation for constraint: string
        if (!is_null($photoContentId) && !is_string($photoContentId)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($photoContentId, true), gettype($photoContentId)), __LINE__);
        }
        // validation for constraint: pattern([\da-fA-F]{8}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{12})
        if (!is_null($photoContentId) && !preg_match('/[\\da-fA-F]{8}-[\\da-fA-F]{4}-[\\da-fA-F]{4}-[\\da-fA-F]{4}-[\\da-fA-F]{12}/', $photoContentId)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a literal that is among the set of character sequences denoted by the regular expression /[\\da-fA-F]{8}-[\\da-fA-F]{4}-[\\da-fA-F]{4}-[\\da-fA-F]{4}-[\\da-fA-F]{12}/', var_export($photoContentId, true)), __LINE__);
        }
        if (is_null($photoContentId) || (is_array($photoContentId) && empty($photoContentId))) {
            unset($this->PhotoContentId);
        } else {
            $this->PhotoContentId = $photoContentId;
        }
        
        return $this;
    }
    /**
     * Get ShowOnOffButtonEnterPermitMode value
     * @return bool|null
     */
    public function getShowOnOffButtonEnterPermitMode(): ?bool
    {
        return $this->ShowOnOffButtonEnterPermitMode;
    }
    /**
     * Set ShowOnOffButtonEnterPermitMode value
     * @param bool $showOnOffButtonEnterPermitMode
     * @return \StructType\CellContentFotoIdentificationSaveData
     */
    public function setShowOnOffButtonEnterPermitMode(?bool $showOnOffButtonEnterPermitMode = null): self
    {
        // validation for constraint: boolean
        if (!is_null($showOnOffButtonEnterPermitMode) && !is_bool($showOnOffButtonEnterPermitMode)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($showOnOffButtonEnterPermitMode, true), gettype($showOnOffButtonEnterPermitMode)), __LINE__);
        }
        $this->ShowOnOffButtonEnterPermitMode = $showOnOffButtonEnterPermitMode;
        
        return $this;
    }
    /**
     * Get ShowOnOffButtonExitPermitMode value
     * @return bool|null
     */
    public function getShowOnOffButtonExitPermitMode(): ?bool
    {
        return $this->ShowOnOffButtonExitPermitMode;
    }
    /**
     * Set ShowOnOffButtonExitPermitMode value
     * @param bool $showOnOffButtonExitPermitMode
     * @return \StructType\CellContentFotoIdentificationSaveData
     */
    public function setShowOnOffButtonExitPermitMode(?bool $showOnOffButtonExitPermitMode = null): self
    {
        // validation for constraint: boolean
        if (!is_null($showOnOffButtonExitPermitMode) && !is_bool($showOnOffButtonExitPermitMode)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($showOnOffButtonExitPermitMode, true), gettype($showOnOffButtonExitPermitMode)), __LINE__);
        }
        $this->ShowOnOffButtonExitPermitMode = $showOnOffButtonExitPermitMode;
        
        return $this;
    }
    /**
     * Get ShowPersonalData value
     * @return bool|null
     */
    public function getShowPersonalData(): ?bool
    {
        return $this->ShowPersonalData;
    }
    /**
     * Set ShowPersonalData value
     * @param bool $showPersonalData
     * @return \StructType\CellContentFotoIdentificationSaveData
     */
    public function setShowPersonalData(?bool $showPersonalData = null): self
    {
        // validation for constraint: boolean
        if (!is_null($showPersonalData) && !is_bool($showPersonalData)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($showPersonalData, true), gettype($showPersonalData)), __LINE__);
        }
        $this->ShowPersonalData = $showPersonalData;
        
        return $this;
    }
    /**
     * Get ShowPreviousVisitorMode value
     * @return string|null
     */
    public function getShowPreviousVisitorMode(): ?string
    {
        return $this->ShowPreviousVisitorMode;
    }
    /**
     * Set ShowPreviousVisitorMode value
     * @uses \EnumType\ShowPreviousVisitorMode::valueIsValid()
     * @uses \EnumType\ShowPreviousVisitorMode::getValidValues()
     * @throws InvalidArgumentException
     * @param string $showPreviousVisitorMode
     * @return \StructType\CellContentFotoIdentificationSaveData
     */
    public function setShowPreviousVisitorMode(?string $showPreviousVisitorMode = null): self
    {
        // validation for constraint: enumeration
        if (!\EnumType\ShowPreviousVisitorMode::valueIsValid($showPreviousVisitorMode)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \EnumType\ShowPreviousVisitorMode', is_array($showPreviousVisitorMode) ? implode(', ', $showPreviousVisitorMode) : var_export($showPreviousVisitorMode, true), implode(', ', \EnumType\ShowPreviousVisitorMode::getValidValues())), __LINE__);
        }
        $this->ShowPreviousVisitorMode = $showPreviousVisitorMode;
        
        return $this;
    }
}
