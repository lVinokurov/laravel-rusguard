<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for DriverSettings StructType
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:DriverSettings
 * @subpackage Structs
 */
class DriverSettings extends AbstractStructBase
{
    /**
     * The Antipassback
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var bool|null
     */
    protected ?bool $Antipassback = null;
    /**
     * The CardPlusAlcoFrame
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var bool|null
     */
    protected ?bool $CardPlusAlcoFrame = null;
    /**
     * The CardPlusFace
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var bool|null
     */
    protected ?bool $CardPlusFace = null;
    /**
     * The CardPlusVehicle
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var bool|null
     */
    protected ?bool $CardPlusVehicle = null;
    /**
     * The ControllerIdentification
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    protected ?string $ControllerIdentification = null;
    /**
     * The DaySchedule
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \StructType\AcsDaySchedule|null
     */
    protected ?\StructType\AcsDaySchedule $DaySchedule = null;
    /**
     * The DoorRelays
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \StructType\DoorRelays|null
     */
    protected ?\StructType\DoorRelays $DoorRelays = null;
    /**
     * The IsGuardOffModeOn
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var bool|null
     */
    protected ?bool $IsGuardOffModeOn = null;
    /**
     * The IsGuardOnModeOn
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var bool|null
     */
    protected ?bool $IsGuardOnModeOn = null;
    /**
     * The IsLockModeOn
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var bool|null
     */
    protected ?bool $IsLockModeOn = null;
    /**
     * The IsMultiIdentification
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var bool|null
     */
    protected ?bool $IsMultiIdentification = null;
    /**
     * The IsOpenForALongTimeModeOn
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var bool|null
     */
    protected ?bool $IsOpenForALongTimeModeOn = null;
    /**
     * The MainIdentification
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    protected ?string $MainIdentification = null;
    /**
     * The MultiDaySchedule
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \StructType\AcsMultiDaySchedule|null
     */
    protected ?\StructType\AcsMultiDaySchedule $MultiDaySchedule = null;
    /**
     * The OrderedServerIdentification
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \ArrayType\ArrayOfServerIdentificationType|null
     */
    protected ?\ArrayType\ArrayOfServerIdentificationType $OrderedServerIdentification = null;
    /**
     * The PassageByRuleOfTwoPersonsMode
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $PassageByRuleOfTwoPersonsMode = null;
    /**
     * The ScheduleType
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $ScheduleType = null;
    /**
     * The UseHolidaysAndTransfers
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var bool|null
     */
    protected ?bool $UseHolidaysAndTransfers = null;
    /**
     * The WeekSchedule
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \StructType\AcsWeekScheduleFull|null
     */
    protected ?\StructType\AcsWeekScheduleFull $WeekSchedule = null;
    /**
     * Constructor method for DriverSettings
     * @uses DriverSettings::setAntipassback()
     * @uses DriverSettings::setCardPlusAlcoFrame()
     * @uses DriverSettings::setCardPlusFace()
     * @uses DriverSettings::setCardPlusVehicle()
     * @uses DriverSettings::setControllerIdentification()
     * @uses DriverSettings::setDaySchedule()
     * @uses DriverSettings::setDoorRelays()
     * @uses DriverSettings::setIsGuardOffModeOn()
     * @uses DriverSettings::setIsGuardOnModeOn()
     * @uses DriverSettings::setIsLockModeOn()
     * @uses DriverSettings::setIsMultiIdentification()
     * @uses DriverSettings::setIsOpenForALongTimeModeOn()
     * @uses DriverSettings::setMainIdentification()
     * @uses DriverSettings::setMultiDaySchedule()
     * @uses DriverSettings::setOrderedServerIdentification()
     * @uses DriverSettings::setPassageByRuleOfTwoPersonsMode()
     * @uses DriverSettings::setScheduleType()
     * @uses DriverSettings::setUseHolidaysAndTransfers()
     * @uses DriverSettings::setWeekSchedule()
     * @param bool $antipassback
     * @param bool $cardPlusAlcoFrame
     * @param bool $cardPlusFace
     * @param bool $cardPlusVehicle
     * @param array|string $controllerIdentification
     * @param \StructType\AcsDaySchedule $daySchedule
     * @param \StructType\DoorRelays $doorRelays
     * @param bool $isGuardOffModeOn
     * @param bool $isGuardOnModeOn
     * @param bool $isLockModeOn
     * @param bool $isMultiIdentification
     * @param bool $isOpenForALongTimeModeOn
     * @param array|string $mainIdentification
     * @param \StructType\AcsMultiDaySchedule $multiDaySchedule
     * @param \ArrayType\ArrayOfServerIdentificationType $orderedServerIdentification
     * @param string $passageByRuleOfTwoPersonsMode
     * @param string $scheduleType
     * @param bool $useHolidaysAndTransfers
     * @param \StructType\AcsWeekScheduleFull $weekSchedule
     */
    public function __construct(?bool $antipassback = null, ?bool $cardPlusAlcoFrame = null, ?bool $cardPlusFace = null, ?bool $cardPlusVehicle = null, $controllerIdentification = [], ?\StructType\AcsDaySchedule $daySchedule = null, ?\StructType\DoorRelays $doorRelays = null, ?bool $isGuardOffModeOn = null, ?bool $isGuardOnModeOn = null, ?bool $isLockModeOn = null, ?bool $isMultiIdentification = null, ?bool $isOpenForALongTimeModeOn = null, $mainIdentification = [], ?\StructType\AcsMultiDaySchedule $multiDaySchedule = null, ?\ArrayType\ArrayOfServerIdentificationType $orderedServerIdentification = null, ?string $passageByRuleOfTwoPersonsMode = null, ?string $scheduleType = null, ?bool $useHolidaysAndTransfers = null, ?\StructType\AcsWeekScheduleFull $weekSchedule = null)
    {
        $this
            ->setAntipassback($antipassback)
            ->setCardPlusAlcoFrame($cardPlusAlcoFrame)
            ->setCardPlusFace($cardPlusFace)
            ->setCardPlusVehicle($cardPlusVehicle)
            ->setControllerIdentification($controllerIdentification)
            ->setDaySchedule($daySchedule)
            ->setDoorRelays($doorRelays)
            ->setIsGuardOffModeOn($isGuardOffModeOn)
            ->setIsGuardOnModeOn($isGuardOnModeOn)
            ->setIsLockModeOn($isLockModeOn)
            ->setIsMultiIdentification($isMultiIdentification)
            ->setIsOpenForALongTimeModeOn($isOpenForALongTimeModeOn)
            ->setMainIdentification($mainIdentification)
            ->setMultiDaySchedule($multiDaySchedule)
            ->setOrderedServerIdentification($orderedServerIdentification)
            ->setPassageByRuleOfTwoPersonsMode($passageByRuleOfTwoPersonsMode)
            ->setScheduleType($scheduleType)
            ->setUseHolidaysAndTransfers($useHolidaysAndTransfers)
            ->setWeekSchedule($weekSchedule);
    }
    /**
     * Get Antipassback value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return bool|null
     */
    public function getAntipassback(): ?bool
    {
        return isset($this->Antipassback) ? $this->Antipassback : null;
    }
    /**
     * Set Antipassback value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param bool $antipassback
     * @return \StructType\DriverSettings
     */
    public function setAntipassback(?bool $antipassback = null): self
    {
        // validation for constraint: boolean
        if (!is_null($antipassback) && !is_bool($antipassback)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($antipassback, true), gettype($antipassback)), __LINE__);
        }
        if (is_null($antipassback) || (is_array($antipassback) && empty($antipassback))) {
            unset($this->Antipassback);
        } else {
            $this->Antipassback = $antipassback;
        }
        
        return $this;
    }
    /**
     * Get CardPlusAlcoFrame value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return bool|null
     */
    public function getCardPlusAlcoFrame(): ?bool
    {
        return isset($this->CardPlusAlcoFrame) ? $this->CardPlusAlcoFrame : null;
    }
    /**
     * Set CardPlusAlcoFrame value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param bool $cardPlusAlcoFrame
     * @return \StructType\DriverSettings
     */
    public function setCardPlusAlcoFrame(?bool $cardPlusAlcoFrame = null): self
    {
        // validation for constraint: boolean
        if (!is_null($cardPlusAlcoFrame) && !is_bool($cardPlusAlcoFrame)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($cardPlusAlcoFrame, true), gettype($cardPlusAlcoFrame)), __LINE__);
        }
        if (is_null($cardPlusAlcoFrame) || (is_array($cardPlusAlcoFrame) && empty($cardPlusAlcoFrame))) {
            unset($this->CardPlusAlcoFrame);
        } else {
            $this->CardPlusAlcoFrame = $cardPlusAlcoFrame;
        }
        
        return $this;
    }
    /**
     * Get CardPlusFace value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return bool|null
     */
    public function getCardPlusFace(): ?bool
    {
        return isset($this->CardPlusFace) ? $this->CardPlusFace : null;
    }
    /**
     * Set CardPlusFace value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param bool $cardPlusFace
     * @return \StructType\DriverSettings
     */
    public function setCardPlusFace(?bool $cardPlusFace = null): self
    {
        // validation for constraint: boolean
        if (!is_null($cardPlusFace) && !is_bool($cardPlusFace)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($cardPlusFace, true), gettype($cardPlusFace)), __LINE__);
        }
        if (is_null($cardPlusFace) || (is_array($cardPlusFace) && empty($cardPlusFace))) {
            unset($this->CardPlusFace);
        } else {
            $this->CardPlusFace = $cardPlusFace;
        }
        
        return $this;
    }
    /**
     * Get CardPlusVehicle value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return bool|null
     */
    public function getCardPlusVehicle(): ?bool
    {
        return isset($this->CardPlusVehicle) ? $this->CardPlusVehicle : null;
    }
    /**
     * Set CardPlusVehicle value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param bool $cardPlusVehicle
     * @return \StructType\DriverSettings
     */
    public function setCardPlusVehicle(?bool $cardPlusVehicle = null): self
    {
        // validation for constraint: boolean
        if (!is_null($cardPlusVehicle) && !is_bool($cardPlusVehicle)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($cardPlusVehicle, true), gettype($cardPlusVehicle)), __LINE__);
        }
        if (is_null($cardPlusVehicle) || (is_array($cardPlusVehicle) && empty($cardPlusVehicle))) {
            unset($this->CardPlusVehicle);
        } else {
            $this->CardPlusVehicle = $cardPlusVehicle;
        }
        
        return $this;
    }
    /**
     * Get ControllerIdentification value
     * @return string
     */
    public function getControllerIdentification(): ?string
    {
        return $this->ControllerIdentification;
    }
    /**
     * This method is responsible for validating the values passed to the setControllerIdentification method
     * This method is willingly generated in order to preserve the one-line inline validation within the setControllerIdentification method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateControllerIdentificationForArrayConstraintsFromSetControllerIdentification(array $values = []): string
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $driverSettingsControllerIdentificationItem) {
            // validation for constraint: enumeration
            if (!\EnumType\ControllerIdentificationType::valueIsValid($driverSettingsControllerIdentificationItem)) {
                $invalidValues[] = is_object($driverSettingsControllerIdentificationItem) ? get_class($driverSettingsControllerIdentificationItem) : sprintf('%s(%s)', gettype($driverSettingsControllerIdentificationItem), var_export($driverSettingsControllerIdentificationItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \EnumType\ControllerIdentificationType', is_array($invalidValues) ? implode(', ', $invalidValues) : var_export($invalidValues, true), implode(', ', \EnumType\ControllerIdentificationType::getValidValues()));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set ControllerIdentification value
     * @uses \EnumType\ControllerIdentificationType::valueIsValid()
     * @uses \EnumType\ControllerIdentificationType::getValidValues()
     * @throws InvalidArgumentException
     * @param array|string $controllerIdentification
     * @return \StructType\DriverSettings
     */
    public function setControllerIdentification($controllerIdentification = []): self
    {
        // validation for constraint: list
        if ('' !== ($controllerIdentificationArrayErrorMessage = self::validateControllerIdentificationForArrayConstraintsFromSetControllerIdentification(is_string($controllerIdentification) ? explode(' ', $controllerIdentification) : $controllerIdentification))) {
            throw new InvalidArgumentException($controllerIdentificationArrayErrorMessage, __LINE__);
        }
        $this->ControllerIdentification = is_array($controllerIdentification) ? implode(' ', $controllerIdentification) : $controllerIdentification;
        
        return $this;
    }
    /**
     * Get DaySchedule value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \StructType\AcsDaySchedule|null
     */
    public function getDaySchedule(): ?\StructType\AcsDaySchedule
    {
        return isset($this->DaySchedule) ? $this->DaySchedule : null;
    }
    /**
     * Set DaySchedule value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \StructType\AcsDaySchedule $daySchedule
     * @return \StructType\DriverSettings
     */
    public function setDaySchedule(?\StructType\AcsDaySchedule $daySchedule = null): self
    {
        if (is_null($daySchedule) || (is_array($daySchedule) && empty($daySchedule))) {
            unset($this->DaySchedule);
        } else {
            $this->DaySchedule = $daySchedule;
        }
        
        return $this;
    }
    /**
     * Get DoorRelays value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \StructType\DoorRelays|null
     */
    public function getDoorRelays(): ?\StructType\DoorRelays
    {
        return isset($this->DoorRelays) ? $this->DoorRelays : null;
    }
    /**
     * Set DoorRelays value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \StructType\DoorRelays $doorRelays
     * @return \StructType\DriverSettings
     */
    public function setDoorRelays(?\StructType\DoorRelays $doorRelays = null): self
    {
        if (is_null($doorRelays) || (is_array($doorRelays) && empty($doorRelays))) {
            unset($this->DoorRelays);
        } else {
            $this->DoorRelays = $doorRelays;
        }
        
        return $this;
    }
    /**
     * Get IsGuardOffModeOn value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return bool|null
     */
    public function getIsGuardOffModeOn(): ?bool
    {
        return isset($this->IsGuardOffModeOn) ? $this->IsGuardOffModeOn : null;
    }
    /**
     * Set IsGuardOffModeOn value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param bool $isGuardOffModeOn
     * @return \StructType\DriverSettings
     */
    public function setIsGuardOffModeOn(?bool $isGuardOffModeOn = null): self
    {
        // validation for constraint: boolean
        if (!is_null($isGuardOffModeOn) && !is_bool($isGuardOffModeOn)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($isGuardOffModeOn, true), gettype($isGuardOffModeOn)), __LINE__);
        }
        if (is_null($isGuardOffModeOn) || (is_array($isGuardOffModeOn) && empty($isGuardOffModeOn))) {
            unset($this->IsGuardOffModeOn);
        } else {
            $this->IsGuardOffModeOn = $isGuardOffModeOn;
        }
        
        return $this;
    }
    /**
     * Get IsGuardOnModeOn value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return bool|null
     */
    public function getIsGuardOnModeOn(): ?bool
    {
        return isset($this->IsGuardOnModeOn) ? $this->IsGuardOnModeOn : null;
    }
    /**
     * Set IsGuardOnModeOn value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param bool $isGuardOnModeOn
     * @return \StructType\DriverSettings
     */
    public function setIsGuardOnModeOn(?bool $isGuardOnModeOn = null): self
    {
        // validation for constraint: boolean
        if (!is_null($isGuardOnModeOn) && !is_bool($isGuardOnModeOn)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($isGuardOnModeOn, true), gettype($isGuardOnModeOn)), __LINE__);
        }
        if (is_null($isGuardOnModeOn) || (is_array($isGuardOnModeOn) && empty($isGuardOnModeOn))) {
            unset($this->IsGuardOnModeOn);
        } else {
            $this->IsGuardOnModeOn = $isGuardOnModeOn;
        }
        
        return $this;
    }
    /**
     * Get IsLockModeOn value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return bool|null
     */
    public function getIsLockModeOn(): ?bool
    {
        return isset($this->IsLockModeOn) ? $this->IsLockModeOn : null;
    }
    /**
     * Set IsLockModeOn value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param bool $isLockModeOn
     * @return \StructType\DriverSettings
     */
    public function setIsLockModeOn(?bool $isLockModeOn = null): self
    {
        // validation for constraint: boolean
        if (!is_null($isLockModeOn) && !is_bool($isLockModeOn)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($isLockModeOn, true), gettype($isLockModeOn)), __LINE__);
        }
        if (is_null($isLockModeOn) || (is_array($isLockModeOn) && empty($isLockModeOn))) {
            unset($this->IsLockModeOn);
        } else {
            $this->IsLockModeOn = $isLockModeOn;
        }
        
        return $this;
    }
    /**
     * Get IsMultiIdentification value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return bool|null
     */
    public function getIsMultiIdentification(): ?bool
    {
        return isset($this->IsMultiIdentification) ? $this->IsMultiIdentification : null;
    }
    /**
     * Set IsMultiIdentification value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param bool $isMultiIdentification
     * @return \StructType\DriverSettings
     */
    public function setIsMultiIdentification(?bool $isMultiIdentification = null): self
    {
        // validation for constraint: boolean
        if (!is_null($isMultiIdentification) && !is_bool($isMultiIdentification)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($isMultiIdentification, true), gettype($isMultiIdentification)), __LINE__);
        }
        if (is_null($isMultiIdentification) || (is_array($isMultiIdentification) && empty($isMultiIdentification))) {
            unset($this->IsMultiIdentification);
        } else {
            $this->IsMultiIdentification = $isMultiIdentification;
        }
        
        return $this;
    }
    /**
     * Get IsOpenForALongTimeModeOn value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return bool|null
     */
    public function getIsOpenForALongTimeModeOn(): ?bool
    {
        return isset($this->IsOpenForALongTimeModeOn) ? $this->IsOpenForALongTimeModeOn : null;
    }
    /**
     * Set IsOpenForALongTimeModeOn value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param bool $isOpenForALongTimeModeOn
     * @return \StructType\DriverSettings
     */
    public function setIsOpenForALongTimeModeOn(?bool $isOpenForALongTimeModeOn = null): self
    {
        // validation for constraint: boolean
        if (!is_null($isOpenForALongTimeModeOn) && !is_bool($isOpenForALongTimeModeOn)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($isOpenForALongTimeModeOn, true), gettype($isOpenForALongTimeModeOn)), __LINE__);
        }
        if (is_null($isOpenForALongTimeModeOn) || (is_array($isOpenForALongTimeModeOn) && empty($isOpenForALongTimeModeOn))) {
            unset($this->IsOpenForALongTimeModeOn);
        } else {
            $this->IsOpenForALongTimeModeOn = $isOpenForALongTimeModeOn;
        }
        
        return $this;
    }
    /**
     * Get MainIdentification value
     * @return string
     */
    public function getMainIdentification(): ?string
    {
        return $this->MainIdentification;
    }
    /**
     * This method is responsible for validating the values passed to the setMainIdentification method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMainIdentification method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMainIdentificationForArrayConstraintsFromSetMainIdentification(array $values = []): string
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $driverSettingsMainIdentificationItem) {
            // validation for constraint: enumeration
            if (!\EnumType\MainIdentificationType::valueIsValid($driverSettingsMainIdentificationItem)) {
                $invalidValues[] = is_object($driverSettingsMainIdentificationItem) ? get_class($driverSettingsMainIdentificationItem) : sprintf('%s(%s)', gettype($driverSettingsMainIdentificationItem), var_export($driverSettingsMainIdentificationItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \EnumType\MainIdentificationType', is_array($invalidValues) ? implode(', ', $invalidValues) : var_export($invalidValues, true), implode(', ', \EnumType\MainIdentificationType::getValidValues()));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set MainIdentification value
     * @uses \EnumType\MainIdentificationType::valueIsValid()
     * @uses \EnumType\MainIdentificationType::getValidValues()
     * @throws InvalidArgumentException
     * @param array|string $mainIdentification
     * @return \StructType\DriverSettings
     */
    public function setMainIdentification($mainIdentification = []): self
    {
        // validation for constraint: list
        if ('' !== ($mainIdentificationArrayErrorMessage = self::validateMainIdentificationForArrayConstraintsFromSetMainIdentification(is_string($mainIdentification) ? explode(' ', $mainIdentification) : $mainIdentification))) {
            throw new InvalidArgumentException($mainIdentificationArrayErrorMessage, __LINE__);
        }
        $this->MainIdentification = is_array($mainIdentification) ? implode(' ', $mainIdentification) : $mainIdentification;
        
        return $this;
    }
    /**
     * Get MultiDaySchedule value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \StructType\AcsMultiDaySchedule|null
     */
    public function getMultiDaySchedule(): ?\StructType\AcsMultiDaySchedule
    {
        return isset($this->MultiDaySchedule) ? $this->MultiDaySchedule : null;
    }
    /**
     * Set MultiDaySchedule value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \StructType\AcsMultiDaySchedule $multiDaySchedule
     * @return \StructType\DriverSettings
     */
    public function setMultiDaySchedule(?\StructType\AcsMultiDaySchedule $multiDaySchedule = null): self
    {
        if (is_null($multiDaySchedule) || (is_array($multiDaySchedule) && empty($multiDaySchedule))) {
            unset($this->MultiDaySchedule);
        } else {
            $this->MultiDaySchedule = $multiDaySchedule;
        }
        
        return $this;
    }
    /**
     * Get OrderedServerIdentification value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \ArrayType\ArrayOfServerIdentificationType|null
     */
    public function getOrderedServerIdentification(): ?\ArrayType\ArrayOfServerIdentificationType
    {
        return isset($this->OrderedServerIdentification) ? $this->OrderedServerIdentification : null;
    }
    /**
     * Set OrderedServerIdentification value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \ArrayType\ArrayOfServerIdentificationType $orderedServerIdentification
     * @return \StructType\DriverSettings
     */
    public function setOrderedServerIdentification(?\ArrayType\ArrayOfServerIdentificationType $orderedServerIdentification = null): self
    {
        if (is_null($orderedServerIdentification) || (is_array($orderedServerIdentification) && empty($orderedServerIdentification))) {
            unset($this->OrderedServerIdentification);
        } else {
            $this->OrderedServerIdentification = $orderedServerIdentification;
        }
        
        return $this;
    }
    /**
     * Get PassageByRuleOfTwoPersonsMode value
     * @return string|null
     */
    public function getPassageByRuleOfTwoPersonsMode(): ?string
    {
        return $this->PassageByRuleOfTwoPersonsMode;
    }
    /**
     * Set PassageByRuleOfTwoPersonsMode value
     * @uses \EnumType\PassageByRuleOfTwoPersonsMode::valueIsValid()
     * @uses \EnumType\PassageByRuleOfTwoPersonsMode::getValidValues()
     * @throws InvalidArgumentException
     * @param string $passageByRuleOfTwoPersonsMode
     * @return \StructType\DriverSettings
     */
    public function setPassageByRuleOfTwoPersonsMode(?string $passageByRuleOfTwoPersonsMode = null): self
    {
        // validation for constraint: enumeration
        if (!\EnumType\PassageByRuleOfTwoPersonsMode::valueIsValid($passageByRuleOfTwoPersonsMode)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \EnumType\PassageByRuleOfTwoPersonsMode', is_array($passageByRuleOfTwoPersonsMode) ? implode(', ', $passageByRuleOfTwoPersonsMode) : var_export($passageByRuleOfTwoPersonsMode, true), implode(', ', \EnumType\PassageByRuleOfTwoPersonsMode::getValidValues())), __LINE__);
        }
        $this->PassageByRuleOfTwoPersonsMode = $passageByRuleOfTwoPersonsMode;
        
        return $this;
    }
    /**
     * Get ScheduleType value
     * @return string|null
     */
    public function getScheduleType(): ?string
    {
        return $this->ScheduleType;
    }
    /**
     * Set ScheduleType value
     * @uses \EnumType\AcsScheduleType::valueIsValid()
     * @uses \EnumType\AcsScheduleType::getValidValues()
     * @throws InvalidArgumentException
     * @param string $scheduleType
     * @return \StructType\DriverSettings
     */
    public function setScheduleType(?string $scheduleType = null): self
    {
        // validation for constraint: enumeration
        if (!\EnumType\AcsScheduleType::valueIsValid($scheduleType)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \EnumType\AcsScheduleType', is_array($scheduleType) ? implode(', ', $scheduleType) : var_export($scheduleType, true), implode(', ', \EnumType\AcsScheduleType::getValidValues())), __LINE__);
        }
        $this->ScheduleType = $scheduleType;
        
        return $this;
    }
    /**
     * Get UseHolidaysAndTransfers value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return bool|null
     */
    public function getUseHolidaysAndTransfers(): ?bool
    {
        return isset($this->UseHolidaysAndTransfers) ? $this->UseHolidaysAndTransfers : null;
    }
    /**
     * Set UseHolidaysAndTransfers value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param bool $useHolidaysAndTransfers
     * @return \StructType\DriverSettings
     */
    public function setUseHolidaysAndTransfers(?bool $useHolidaysAndTransfers = null): self
    {
        // validation for constraint: boolean
        if (!is_null($useHolidaysAndTransfers) && !is_bool($useHolidaysAndTransfers)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($useHolidaysAndTransfers, true), gettype($useHolidaysAndTransfers)), __LINE__);
        }
        if (is_null($useHolidaysAndTransfers) || (is_array($useHolidaysAndTransfers) && empty($useHolidaysAndTransfers))) {
            unset($this->UseHolidaysAndTransfers);
        } else {
            $this->UseHolidaysAndTransfers = $useHolidaysAndTransfers;
        }
        
        return $this;
    }
    /**
     * Get WeekSchedule value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \StructType\AcsWeekScheduleFull|null
     */
    public function getWeekSchedule(): ?\StructType\AcsWeekScheduleFull
    {
        return isset($this->WeekSchedule) ? $this->WeekSchedule : null;
    }
    /**
     * Set WeekSchedule value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \StructType\AcsWeekScheduleFull $weekSchedule
     * @return \StructType\DriverSettings
     */
    public function setWeekSchedule(?\StructType\AcsWeekScheduleFull $weekSchedule = null): self
    {
        if (is_null($weekSchedule) || (is_array($weekSchedule) && empty($weekSchedule))) {
            unset($this->WeekSchedule);
        } else {
            $this->WeekSchedule = $weekSchedule;
        }
        
        return $this;
    }
}
