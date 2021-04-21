<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for AcsAccessPointBase StructType
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:AcsAccessPointBase
 * @subpackage Structs
 */
class AcsAccessPointBase extends AbstractStructBase
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
     * The ControllerIdentification
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    protected ?string $ControllerIdentification = null;
    /**
     * The Description
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $Description = null;
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
     * The OrderedServerIdentification
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \ArrayType\ArrayOfServerIdentificationType|null
     */
    protected ?\ArrayType\ArrayOfServerIdentificationType $OrderedServerIdentification = null;
    /**
     * The OrderedServerIdentificationInString
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $OrderedServerIdentificationInString = null;
    /**
     * The PassageByRuleOfTwoPersonsMode
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $PassageByRuleOfTwoPersonsMode = null;
    /**
     * The ServerAlcoFrame
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var bool|null
     */
    protected ?bool $ServerAlcoFrame = null;
    /**
     * The ServerFace
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var bool|null
     */
    protected ?bool $ServerFace = null;
    /**
     * The ServerVehicle
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var bool|null
     */
    protected ?bool $ServerVehicle = null;
    /**
     * The UseHolidaysAndTransfers
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var bool|null
     */
    protected ?bool $UseHolidaysAndTransfers = null;
    /**
     * Constructor method for AcsAccessPointBase
     * @uses AcsAccessPointBase::setAntipassback()
     * @uses AcsAccessPointBase::setControllerIdentification()
     * @uses AcsAccessPointBase::setDescription()
     * @uses AcsAccessPointBase::setIsGuardOffModeOn()
     * @uses AcsAccessPointBase::setIsGuardOnModeOn()
     * @uses AcsAccessPointBase::setIsLockModeOn()
     * @uses AcsAccessPointBase::setIsMultiIdentification()
     * @uses AcsAccessPointBase::setIsOpenForALongTimeModeOn()
     * @uses AcsAccessPointBase::setMainIdentification()
     * @uses AcsAccessPointBase::setOrderedServerIdentification()
     * @uses AcsAccessPointBase::setOrderedServerIdentificationInString()
     * @uses AcsAccessPointBase::setPassageByRuleOfTwoPersonsMode()
     * @uses AcsAccessPointBase::setServerAlcoFrame()
     * @uses AcsAccessPointBase::setServerFace()
     * @uses AcsAccessPointBase::setServerVehicle()
     * @uses AcsAccessPointBase::setUseHolidaysAndTransfers()
     * @param bool $antipassback
     * @param array|string $controllerIdentification
     * @param string $description
     * @param bool $isGuardOffModeOn
     * @param bool $isGuardOnModeOn
     * @param bool $isLockModeOn
     * @param bool $isMultiIdentification
     * @param bool $isOpenForALongTimeModeOn
     * @param array|string $mainIdentification
     * @param \ArrayType\ArrayOfServerIdentificationType $orderedServerIdentification
     * @param string $orderedServerIdentificationInString
     * @param string $passageByRuleOfTwoPersonsMode
     * @param bool $serverAlcoFrame
     * @param bool $serverFace
     * @param bool $serverVehicle
     * @param bool $useHolidaysAndTransfers
     */
    public function __construct(?bool $antipassback = null, $controllerIdentification = [], ?string $description = null, ?bool $isGuardOffModeOn = null, ?bool $isGuardOnModeOn = null, ?bool $isLockModeOn = null, ?bool $isMultiIdentification = null, ?bool $isOpenForALongTimeModeOn = null, $mainIdentification = [], ?\ArrayType\ArrayOfServerIdentificationType $orderedServerIdentification = null, ?string $orderedServerIdentificationInString = null, ?string $passageByRuleOfTwoPersonsMode = null, ?bool $serverAlcoFrame = null, ?bool $serverFace = null, ?bool $serverVehicle = null, ?bool $useHolidaysAndTransfers = null)
    {
        $this
            ->setAntipassback($antipassback)
            ->setControllerIdentification($controllerIdentification)
            ->setDescription($description)
            ->setIsGuardOffModeOn($isGuardOffModeOn)
            ->setIsGuardOnModeOn($isGuardOnModeOn)
            ->setIsLockModeOn($isLockModeOn)
            ->setIsMultiIdentification($isMultiIdentification)
            ->setIsOpenForALongTimeModeOn($isOpenForALongTimeModeOn)
            ->setMainIdentification($mainIdentification)
            ->setOrderedServerIdentification($orderedServerIdentification)
            ->setOrderedServerIdentificationInString($orderedServerIdentificationInString)
            ->setPassageByRuleOfTwoPersonsMode($passageByRuleOfTwoPersonsMode)
            ->setServerAlcoFrame($serverAlcoFrame)
            ->setServerFace($serverFace)
            ->setServerVehicle($serverVehicle)
            ->setUseHolidaysAndTransfers($useHolidaysAndTransfers);
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
     * @return \StructType\AcsAccessPointBase
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
        foreach ($values as $acsAccessPointBaseControllerIdentificationItem) {
            // validation for constraint: enumeration
            if (!\EnumType\ControllerIdentificationType::valueIsValid($acsAccessPointBaseControllerIdentificationItem)) {
                $invalidValues[] = is_object($acsAccessPointBaseControllerIdentificationItem) ? get_class($acsAccessPointBaseControllerIdentificationItem) : sprintf('%s(%s)', gettype($acsAccessPointBaseControllerIdentificationItem), var_export($acsAccessPointBaseControllerIdentificationItem, true));
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
     * @return \StructType\AcsAccessPointBase
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
     * Get Description value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getDescription(): ?string
    {
        return isset($this->Description) ? $this->Description : null;
    }
    /**
     * Set Description value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $description
     * @return \StructType\AcsAccessPointBase
     */
    public function setDescription(?string $description = null): self
    {
        // validation for constraint: string
        if (!is_null($description) && !is_string($description)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($description, true), gettype($description)), __LINE__);
        }
        if (is_null($description) || (is_array($description) && empty($description))) {
            unset($this->Description);
        } else {
            $this->Description = $description;
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
     * @return \StructType\AcsAccessPointBase
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
     * @return \StructType\AcsAccessPointBase
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
     * @return \StructType\AcsAccessPointBase
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
     * @return \StructType\AcsAccessPointBase
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
     * @return \StructType\AcsAccessPointBase
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
        foreach ($values as $acsAccessPointBaseMainIdentificationItem) {
            // validation for constraint: enumeration
            if (!\EnumType\MainIdentificationType::valueIsValid($acsAccessPointBaseMainIdentificationItem)) {
                $invalidValues[] = is_object($acsAccessPointBaseMainIdentificationItem) ? get_class($acsAccessPointBaseMainIdentificationItem) : sprintf('%s(%s)', gettype($acsAccessPointBaseMainIdentificationItem), var_export($acsAccessPointBaseMainIdentificationItem, true));
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
     * @return \StructType\AcsAccessPointBase
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
     * @return \StructType\AcsAccessPointBase
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
     * Get OrderedServerIdentificationInString value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getOrderedServerIdentificationInString(): ?string
    {
        return isset($this->OrderedServerIdentificationInString) ? $this->OrderedServerIdentificationInString : null;
    }
    /**
     * Set OrderedServerIdentificationInString value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $orderedServerIdentificationInString
     * @return \StructType\AcsAccessPointBase
     */
    public function setOrderedServerIdentificationInString(?string $orderedServerIdentificationInString = null): self
    {
        // validation for constraint: string
        if (!is_null($orderedServerIdentificationInString) && !is_string($orderedServerIdentificationInString)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($orderedServerIdentificationInString, true), gettype($orderedServerIdentificationInString)), __LINE__);
        }
        if (is_null($orderedServerIdentificationInString) || (is_array($orderedServerIdentificationInString) && empty($orderedServerIdentificationInString))) {
            unset($this->OrderedServerIdentificationInString);
        } else {
            $this->OrderedServerIdentificationInString = $orderedServerIdentificationInString;
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
     * @return \StructType\AcsAccessPointBase
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
     * Get ServerAlcoFrame value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return bool|null
     */
    public function getServerAlcoFrame(): ?bool
    {
        return isset($this->ServerAlcoFrame) ? $this->ServerAlcoFrame : null;
    }
    /**
     * Set ServerAlcoFrame value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param bool $serverAlcoFrame
     * @return \StructType\AcsAccessPointBase
     */
    public function setServerAlcoFrame(?bool $serverAlcoFrame = null): self
    {
        // validation for constraint: boolean
        if (!is_null($serverAlcoFrame) && !is_bool($serverAlcoFrame)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($serverAlcoFrame, true), gettype($serverAlcoFrame)), __LINE__);
        }
        if (is_null($serverAlcoFrame) || (is_array($serverAlcoFrame) && empty($serverAlcoFrame))) {
            unset($this->ServerAlcoFrame);
        } else {
            $this->ServerAlcoFrame = $serverAlcoFrame;
        }
        
        return $this;
    }
    /**
     * Get ServerFace value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return bool|null
     */
    public function getServerFace(): ?bool
    {
        return isset($this->ServerFace) ? $this->ServerFace : null;
    }
    /**
     * Set ServerFace value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param bool $serverFace
     * @return \StructType\AcsAccessPointBase
     */
    public function setServerFace(?bool $serverFace = null): self
    {
        // validation for constraint: boolean
        if (!is_null($serverFace) && !is_bool($serverFace)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($serverFace, true), gettype($serverFace)), __LINE__);
        }
        if (is_null($serverFace) || (is_array($serverFace) && empty($serverFace))) {
            unset($this->ServerFace);
        } else {
            $this->ServerFace = $serverFace;
        }
        
        return $this;
    }
    /**
     * Get ServerVehicle value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return bool|null
     */
    public function getServerVehicle(): ?bool
    {
        return isset($this->ServerVehicle) ? $this->ServerVehicle : null;
    }
    /**
     * Set ServerVehicle value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param bool $serverVehicle
     * @return \StructType\AcsAccessPointBase
     */
    public function setServerVehicle(?bool $serverVehicle = null): self
    {
        // validation for constraint: boolean
        if (!is_null($serverVehicle) && !is_bool($serverVehicle)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($serverVehicle, true), gettype($serverVehicle)), __LINE__);
        }
        if (is_null($serverVehicle) || (is_array($serverVehicle) && empty($serverVehicle))) {
            unset($this->ServerVehicle);
        } else {
            $this->ServerVehicle = $serverVehicle;
        }
        
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
     * @return \StructType\AcsAccessPointBase
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
}
