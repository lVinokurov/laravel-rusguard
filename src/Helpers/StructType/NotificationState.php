<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for NotificationState StructType
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:NotificationState
 * @subpackage Structs
 */
class NotificationState extends AbstractStructBase
{
    /**
     * The Error
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var int|null
     */
    protected ?int $Error = null;
    /**
     * The ModificationTime
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $ModificationTime = null;
    /**
     * The NotifyName
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $NotifyName = null;
    /**
     * The State
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $State = null;
    /**
     * The Value
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $Value = null;
    /**
     * Constructor method for NotificationState
     * @uses NotificationState::setError()
     * @uses NotificationState::setModificationTime()
     * @uses NotificationState::setNotifyName()
     * @uses NotificationState::setState()
     * @uses NotificationState::setValue()
     * @param int $error
     * @param string $modificationTime
     * @param string $notifyName
     * @param string $state
     * @param string $value
     */
    public function __construct(?int $error = null, ?string $modificationTime = null, ?string $notifyName = null, ?string $state = null, ?string $value = null)
    {
        $this
            ->setError($error)
            ->setModificationTime($modificationTime)
            ->setNotifyName($notifyName)
            ->setState($state)
            ->setValue($value);
    }
    /**
     * Get Error value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return int|null
     */
    public function getError(): ?int
    {
        return isset($this->Error) ? $this->Error : null;
    }
    /**
     * Set Error value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param int $error
     * @return \StructType\NotificationState
     */
    public function setError(?int $error = null): self
    {
        // validation for constraint: int
        if (!is_null($error) && !(is_int($error) || ctype_digit($error))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($error, true), gettype($error)), __LINE__);
        }
        if (is_null($error) || (is_array($error) && empty($error))) {
            unset($this->Error);
        } else {
            $this->Error = $error;
        }
        
        return $this;
    }
    /**
     * Get ModificationTime value
     * @return string|null
     */
    public function getModificationTime(): ?string
    {
        return $this->ModificationTime;
    }
    /**
     * Set ModificationTime value
     * @param string $modificationTime
     * @return \StructType\NotificationState
     */
    public function setModificationTime(?string $modificationTime = null): self
    {
        // validation for constraint: string
        if (!is_null($modificationTime) && !is_string($modificationTime)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($modificationTime, true), gettype($modificationTime)), __LINE__);
        }
        $this->ModificationTime = $modificationTime;
        
        return $this;
    }
    /**
     * Get NotifyName value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getNotifyName(): ?string
    {
        return isset($this->NotifyName) ? $this->NotifyName : null;
    }
    /**
     * Set NotifyName value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $notifyName
     * @return \StructType\NotificationState
     */
    public function setNotifyName(?string $notifyName = null): self
    {
        // validation for constraint: string
        if (!is_null($notifyName) && !is_string($notifyName)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($notifyName, true), gettype($notifyName)), __LINE__);
        }
        if (is_null($notifyName) || (is_array($notifyName) && empty($notifyName))) {
            unset($this->NotifyName);
        } else {
            $this->NotifyName = $notifyName;
        }
        
        return $this;
    }
    /**
     * Get State value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getState(): ?string
    {
        return isset($this->State) ? $this->State : null;
    }
    /**
     * Set State value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $state
     * @return \StructType\NotificationState
     */
    public function setState(?string $state = null): self
    {
        // validation for constraint: string
        if (!is_null($state) && !is_string($state)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($state, true), gettype($state)), __LINE__);
        }
        if (is_null($state) || (is_array($state) && empty($state))) {
            unset($this->State);
        } else {
            $this->State = $state;
        }
        
        return $this;
    }
    /**
     * Get Value value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getValue(): ?string
    {
        return isset($this->Value) ? $this->Value : null;
    }
    /**
     * Set Value value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $value
     * @return \StructType\NotificationState
     */
    public function setValue(?string $value = null): self
    {
        // validation for constraint: string
        if (!is_null($value) && !is_string($value)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($value, true), gettype($value)), __LINE__);
        }
        if (is_null($value) || (is_array($value) && empty($value))) {
            unset($this->Value);
        } else {
            $this->Value = $value;
        }
        
        return $this;
    }
}
