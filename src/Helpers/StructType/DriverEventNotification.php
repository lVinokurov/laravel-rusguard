<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for DriverEventNotification StructType
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:DriverEventNotification
 * @subpackage Structs
 */
class DriverEventNotification extends AbstractStructBase
{
    /**
     * The Data
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var int|null
     */
    protected ?int $Data = null;
    /**
     * The DateTime
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $DateTime = null;
    /**
     * The Details
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $Details = null;
    /**
     * The DriverId
     * Meta information extracted from the WSDL
     * - base: xs:string
     * - minOccurs: 0
     * - nillable: true
     * - pattern: [\da-fA-F]{8}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{12}
     * - type: tns:guid
     * @var string|null
     */
    protected ?string $DriverId = null;
    /**
     * The EmployeeId
     * Meta information extracted from the WSDL
     * - base: xs:string
     * - minOccurs: 0
     * - nillable: true
     * - pattern: [\da-fA-F]{8}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{12}
     * - type: tns:guid
     * @var string|null
     */
    protected ?string $EmployeeId = null;
    /**
     * The FaceRecognitionEnabled
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var bool|null
     */
    protected ?bool $FaceRecognitionEnabled = null;
    /**
     * The FaceRecognitionFailure
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var bool|null
     */
    protected ?bool $FaceRecognitionFailure = null;
    /**
     * The FaceSoftModeEnabled
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var bool|null
     */
    protected ?bool $FaceSoftModeEnabled = null;
    /**
     * The HasIdentificationResult
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var bool|null
     */
    protected ?bool $HasIdentificationResult = null;
    /**
     * The IsKeyEvent
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var bool|null
     */
    protected ?bool $IsKeyEvent = null;
    /**
     * The LogMessageId
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var int|null
     */
    protected ?int $LogMessageId = null;
    /**
     * The Message
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $Message = null;
    /**
     * The MessageSubType
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $MessageSubType = null;
    /**
     * The MessageType
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $MessageType = null;
    /**
     * The OperatorId
     * Meta information extracted from the WSDL
     * - base: xs:string
     * - minOccurs: 0
     * - nillable: true
     * - pattern: [\da-fA-F]{8}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{12}
     * - type: tns:guid
     * @var string|null
     */
    protected ?string $OperatorId = null;
    /**
     * Constructor method for DriverEventNotification
     * @uses DriverEventNotification::setData()
     * @uses DriverEventNotification::setDateTime()
     * @uses DriverEventNotification::setDetails()
     * @uses DriverEventNotification::setDriverId()
     * @uses DriverEventNotification::setEmployeeId()
     * @uses DriverEventNotification::setFaceRecognitionEnabled()
     * @uses DriverEventNotification::setFaceRecognitionFailure()
     * @uses DriverEventNotification::setFaceSoftModeEnabled()
     * @uses DriverEventNotification::setHasIdentificationResult()
     * @uses DriverEventNotification::setIsKeyEvent()
     * @uses DriverEventNotification::setLogMessageId()
     * @uses DriverEventNotification::setMessage()
     * @uses DriverEventNotification::setMessageSubType()
     * @uses DriverEventNotification::setMessageType()
     * @uses DriverEventNotification::setOperatorId()
     * @param int $data
     * @param string $dateTime
     * @param string $details
     * @param string $driverId
     * @param string $employeeId
     * @param bool $faceRecognitionEnabled
     * @param bool $faceRecognitionFailure
     * @param bool $faceSoftModeEnabled
     * @param bool $hasIdentificationResult
     * @param bool $isKeyEvent
     * @param int $logMessageId
     * @param string $message
     * @param string $messageSubType
     * @param string $messageType
     * @param string $operatorId
     */
    public function __construct(?int $data = null, ?string $dateTime = null, ?string $details = null, ?string $driverId = null, ?string $employeeId = null, ?bool $faceRecognitionEnabled = null, ?bool $faceRecognitionFailure = null, ?bool $faceSoftModeEnabled = null, ?bool $hasIdentificationResult = null, ?bool $isKeyEvent = null, ?int $logMessageId = null, ?string $message = null, ?string $messageSubType = null, ?string $messageType = null, ?string $operatorId = null)
    {
        $this
            ->setData($data)
            ->setDateTime($dateTime)
            ->setDetails($details)
            ->setDriverId($driverId)
            ->setEmployeeId($employeeId)
            ->setFaceRecognitionEnabled($faceRecognitionEnabled)
            ->setFaceRecognitionFailure($faceRecognitionFailure)
            ->setFaceSoftModeEnabled($faceSoftModeEnabled)
            ->setHasIdentificationResult($hasIdentificationResult)
            ->setIsKeyEvent($isKeyEvent)
            ->setLogMessageId($logMessageId)
            ->setMessage($message)
            ->setMessageSubType($messageSubType)
            ->setMessageType($messageType)
            ->setOperatorId($operatorId);
    }
    /**
     * Get Data value
     * @return int|null
     */
    public function getData(): ?int
    {
        return $this->Data;
    }
    /**
     * Set Data value
     * @param int $data
     * @return \StructType\DriverEventNotification
     */
    public function setData(?int $data = null): self
    {
        // validation for constraint: int
        if (!is_null($data) && !(is_int($data) || ctype_digit($data))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($data, true), gettype($data)), __LINE__);
        }
        $this->Data = $data;
        
        return $this;
    }
    /**
     * Get DateTime value
     * @return string|null
     */
    public function getDateTime(): ?string
    {
        return $this->DateTime;
    }
    /**
     * Set DateTime value
     * @param string $dateTime
     * @return \StructType\DriverEventNotification
     */
    public function setDateTime(?string $dateTime = null): self
    {
        // validation for constraint: string
        if (!is_null($dateTime) && !is_string($dateTime)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($dateTime, true), gettype($dateTime)), __LINE__);
        }
        $this->DateTime = $dateTime;
        
        return $this;
    }
    /**
     * Get Details value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getDetails(): ?string
    {
        return isset($this->Details) ? $this->Details : null;
    }
    /**
     * Set Details value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $details
     * @return \StructType\DriverEventNotification
     */
    public function setDetails(?string $details = null): self
    {
        // validation for constraint: string
        if (!is_null($details) && !is_string($details)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($details, true), gettype($details)), __LINE__);
        }
        if (is_null($details) || (is_array($details) && empty($details))) {
            unset($this->Details);
        } else {
            $this->Details = $details;
        }
        
        return $this;
    }
    /**
     * Get DriverId value
     * @return string|null
     */
    public function getDriverId(): ?string
    {
        return $this->DriverId;
    }
    /**
     * Set DriverId value
     * @param string $driverId
     * @return \StructType\DriverEventNotification
     */
    public function setDriverId(?string $driverId = null): self
    {
        // validation for constraint: string
        if (!is_null($driverId) && !is_string($driverId)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($driverId, true), gettype($driverId)), __LINE__);
        }
        // validation for constraint: pattern([\da-fA-F]{8}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{12})
        if (!is_null($driverId) && !preg_match('/[\\da-fA-F]{8}-[\\da-fA-F]{4}-[\\da-fA-F]{4}-[\\da-fA-F]{4}-[\\da-fA-F]{12}/', $driverId)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a literal that is among the set of character sequences denoted by the regular expression /[\\da-fA-F]{8}-[\\da-fA-F]{4}-[\\da-fA-F]{4}-[\\da-fA-F]{4}-[\\da-fA-F]{12}/', var_export($driverId, true)), __LINE__);
        }
        $this->DriverId = $driverId;
        
        return $this;
    }
    /**
     * Get EmployeeId value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getEmployeeId(): ?string
    {
        return isset($this->EmployeeId) ? $this->EmployeeId : null;
    }
    /**
     * Set EmployeeId value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $employeeId
     * @return \StructType\DriverEventNotification
     */
    public function setEmployeeId(?string $employeeId = null): self
    {
        // validation for constraint: string
        if (!is_null($employeeId) && !is_string($employeeId)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($employeeId, true), gettype($employeeId)), __LINE__);
        }
        // validation for constraint: pattern([\da-fA-F]{8}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{12})
        if (!is_null($employeeId) && !preg_match('/[\\da-fA-F]{8}-[\\da-fA-F]{4}-[\\da-fA-F]{4}-[\\da-fA-F]{4}-[\\da-fA-F]{12}/', $employeeId)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a literal that is among the set of character sequences denoted by the regular expression /[\\da-fA-F]{8}-[\\da-fA-F]{4}-[\\da-fA-F]{4}-[\\da-fA-F]{4}-[\\da-fA-F]{12}/', var_export($employeeId, true)), __LINE__);
        }
        if (is_null($employeeId) || (is_array($employeeId) && empty($employeeId))) {
            unset($this->EmployeeId);
        } else {
            $this->EmployeeId = $employeeId;
        }
        
        return $this;
    }
    /**
     * Get FaceRecognitionEnabled value
     * @return bool|null
     */
    public function getFaceRecognitionEnabled(): ?bool
    {
        return $this->FaceRecognitionEnabled;
    }
    /**
     * Set FaceRecognitionEnabled value
     * @param bool $faceRecognitionEnabled
     * @return \StructType\DriverEventNotification
     */
    public function setFaceRecognitionEnabled(?bool $faceRecognitionEnabled = null): self
    {
        // validation for constraint: boolean
        if (!is_null($faceRecognitionEnabled) && !is_bool($faceRecognitionEnabled)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($faceRecognitionEnabled, true), gettype($faceRecognitionEnabled)), __LINE__);
        }
        $this->FaceRecognitionEnabled = $faceRecognitionEnabled;
        
        return $this;
    }
    /**
     * Get FaceRecognitionFailure value
     * @return bool|null
     */
    public function getFaceRecognitionFailure(): ?bool
    {
        return $this->FaceRecognitionFailure;
    }
    /**
     * Set FaceRecognitionFailure value
     * @param bool $faceRecognitionFailure
     * @return \StructType\DriverEventNotification
     */
    public function setFaceRecognitionFailure(?bool $faceRecognitionFailure = null): self
    {
        // validation for constraint: boolean
        if (!is_null($faceRecognitionFailure) && !is_bool($faceRecognitionFailure)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($faceRecognitionFailure, true), gettype($faceRecognitionFailure)), __LINE__);
        }
        $this->FaceRecognitionFailure = $faceRecognitionFailure;
        
        return $this;
    }
    /**
     * Get FaceSoftModeEnabled value
     * @return bool|null
     */
    public function getFaceSoftModeEnabled(): ?bool
    {
        return $this->FaceSoftModeEnabled;
    }
    /**
     * Set FaceSoftModeEnabled value
     * @param bool $faceSoftModeEnabled
     * @return \StructType\DriverEventNotification
     */
    public function setFaceSoftModeEnabled(?bool $faceSoftModeEnabled = null): self
    {
        // validation for constraint: boolean
        if (!is_null($faceSoftModeEnabled) && !is_bool($faceSoftModeEnabled)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($faceSoftModeEnabled, true), gettype($faceSoftModeEnabled)), __LINE__);
        }
        $this->FaceSoftModeEnabled = $faceSoftModeEnabled;
        
        return $this;
    }
    /**
     * Get HasIdentificationResult value
     * @return bool|null
     */
    public function getHasIdentificationResult(): ?bool
    {
        return $this->HasIdentificationResult;
    }
    /**
     * Set HasIdentificationResult value
     * @param bool $hasIdentificationResult
     * @return \StructType\DriverEventNotification
     */
    public function setHasIdentificationResult(?bool $hasIdentificationResult = null): self
    {
        // validation for constraint: boolean
        if (!is_null($hasIdentificationResult) && !is_bool($hasIdentificationResult)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($hasIdentificationResult, true), gettype($hasIdentificationResult)), __LINE__);
        }
        $this->HasIdentificationResult = $hasIdentificationResult;
        
        return $this;
    }
    /**
     * Get IsKeyEvent value
     * @return bool|null
     */
    public function getIsKeyEvent(): ?bool
    {
        return $this->IsKeyEvent;
    }
    /**
     * Set IsKeyEvent value
     * @param bool $isKeyEvent
     * @return \StructType\DriverEventNotification
     */
    public function setIsKeyEvent(?bool $isKeyEvent = null): self
    {
        // validation for constraint: boolean
        if (!is_null($isKeyEvent) && !is_bool($isKeyEvent)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($isKeyEvent, true), gettype($isKeyEvent)), __LINE__);
        }
        $this->IsKeyEvent = $isKeyEvent;
        
        return $this;
    }
    /**
     * Get LogMessageId value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return int|null
     */
    public function getLogMessageId(): ?int
    {
        return isset($this->LogMessageId) ? $this->LogMessageId : null;
    }
    /**
     * Set LogMessageId value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param int $logMessageId
     * @return \StructType\DriverEventNotification
     */
    public function setLogMessageId(?int $logMessageId = null): self
    {
        // validation for constraint: int
        if (!is_null($logMessageId) && !(is_int($logMessageId) || ctype_digit($logMessageId))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($logMessageId, true), gettype($logMessageId)), __LINE__);
        }
        if (is_null($logMessageId) || (is_array($logMessageId) && empty($logMessageId))) {
            unset($this->LogMessageId);
        } else {
            $this->LogMessageId = $logMessageId;
        }
        
        return $this;
    }
    /**
     * Get Message value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getMessage(): ?string
    {
        return isset($this->Message) ? $this->Message : null;
    }
    /**
     * Set Message value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $message
     * @return \StructType\DriverEventNotification
     */
    public function setMessage(?string $message = null): self
    {
        // validation for constraint: string
        if (!is_null($message) && !is_string($message)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($message, true), gettype($message)), __LINE__);
        }
        if (is_null($message) || (is_array($message) && empty($message))) {
            unset($this->Message);
        } else {
            $this->Message = $message;
        }
        
        return $this;
    }
    /**
     * Get MessageSubType value
     * @return string|null
     */
    public function getMessageSubType(): ?string
    {
        return $this->MessageSubType;
    }
    /**
     * Set MessageSubType value
     * @uses \EnumType\LogMsgSubType::valueIsValid()
     * @uses \EnumType\LogMsgSubType::getValidValues()
     * @throws InvalidArgumentException
     * @param string $messageSubType
     * @return \StructType\DriverEventNotification
     */
    public function setMessageSubType(?string $messageSubType = null): self
    {
        // validation for constraint: enumeration
        if (!\EnumType\LogMsgSubType::valueIsValid($messageSubType)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \EnumType\LogMsgSubType', is_array($messageSubType) ? implode(', ', $messageSubType) : var_export($messageSubType, true), implode(', ', \EnumType\LogMsgSubType::getValidValues())), __LINE__);
        }
        $this->MessageSubType = $messageSubType;
        
        return $this;
    }
    /**
     * Get MessageType value
     * @return string|null
     */
    public function getMessageType(): ?string
    {
        return $this->MessageType;
    }
    /**
     * Set MessageType value
     * @uses \EnumType\LogMsgType::valueIsValid()
     * @uses \EnumType\LogMsgType::getValidValues()
     * @throws InvalidArgumentException
     * @param string $messageType
     * @return \StructType\DriverEventNotification
     */
    public function setMessageType(?string $messageType = null): self
    {
        // validation for constraint: enumeration
        if (!\EnumType\LogMsgType::valueIsValid($messageType)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \EnumType\LogMsgType', is_array($messageType) ? implode(', ', $messageType) : var_export($messageType, true), implode(', ', \EnumType\LogMsgType::getValidValues())), __LINE__);
        }
        $this->MessageType = $messageType;
        
        return $this;
    }
    /**
     * Get OperatorId value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getOperatorId(): ?string
    {
        return isset($this->OperatorId) ? $this->OperatorId : null;
    }
    /**
     * Set OperatorId value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $operatorId
     * @return \StructType\DriverEventNotification
     */
    public function setOperatorId(?string $operatorId = null): self
    {
        // validation for constraint: string
        if (!is_null($operatorId) && !is_string($operatorId)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($operatorId, true), gettype($operatorId)), __LINE__);
        }
        // validation for constraint: pattern([\da-fA-F]{8}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{12})
        if (!is_null($operatorId) && !preg_match('/[\\da-fA-F]{8}-[\\da-fA-F]{4}-[\\da-fA-F]{4}-[\\da-fA-F]{4}-[\\da-fA-F]{12}/', $operatorId)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a literal that is among the set of character sequences denoted by the regular expression /[\\da-fA-F]{8}-[\\da-fA-F]{4}-[\\da-fA-F]{4}-[\\da-fA-F]{4}-[\\da-fA-F]{12}/', var_export($operatorId, true)), __LINE__);
        }
        if (is_null($operatorId) || (is_array($operatorId) && empty($operatorId))) {
            unset($this->OperatorId);
        } else {
            $this->OperatorId = $operatorId;
        }
        
        return $this;
    }
}
