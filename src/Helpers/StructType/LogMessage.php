<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for LogMessage StructType
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:LogMessage
 * @subpackage Structs
 */
class LogMessage extends AbstractStructBase
{
    /**
     * The AlcoholCheckState
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $AlcoholCheckState = null;
    /**
     * The AlcoholResult
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var int|null
     */
    protected ?int $AlcoholResult = null;
    /**
     * The ContentData
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $ContentData = null;
    /**
     * The ContentType
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $ContentType = null;
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
     * The DriverID
     * Meta information extracted from the WSDL
     * - base: xs:string
     * - minOccurs: 0
     * - nillable: true
     * - pattern: [\da-fA-F]{8}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{12}
     * - type: tns:guid
     * @var string|null
     */
    protected ?string $DriverID = null;
    /**
     * The DriverName
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $DriverName = null;
    /**
     * The EmployeeFirstName
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $EmployeeFirstName = null;
    /**
     * The EmployeeGroupFullName
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $EmployeeGroupFullName = null;
    /**
     * The EmployeeGroupId
     * Meta information extracted from the WSDL
     * - base: xs:string
     * - minOccurs: 0
     * - nillable: true
     * - pattern: [\da-fA-F]{8}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{12}
     * - type: tns:guid
     * @var string|null
     */
    protected ?string $EmployeeGroupId = null;
    /**
     * The EmployeeGroupName
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $EmployeeGroupName = null;
    /**
     * The EmployeeID
     * Meta information extracted from the WSDL
     * - base: xs:string
     * - minOccurs: 0
     * - nillable: true
     * - pattern: [\da-fA-F]{8}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{12}
     * - type: tns:guid
     * @var string|null
     */
    protected ?string $EmployeeID = null;
    /**
     * The EmployeeLastName
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $EmployeeLastName = null;
    /**
     * The EmployeeSecondName
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $EmployeeSecondName = null;
    /**
     * The EmployeeTableNumber
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var int|null
     */
    protected ?int $EmployeeTableNumber = null;
    /**
     * The FaceRecognitionCheckState
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $FaceRecognitionCheckState = null;
    /**
     * The Id
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var int|null
     */
    protected ?int $Id = null;
    /**
     * The LivenessResult
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var bool|null
     */
    protected ?bool $LivenessResult = null;
    /**
     * The LogMessageSubType
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $LogMessageSubType = null;
    /**
     * The LogMessageType
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $LogMessageType = null;
    /**
     * The Message
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $Message = null;
    /**
     * The OperatorFullName
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $OperatorFullName = null;
    /**
     * The OperatorID
     * Meta information extracted from the WSDL
     * - base: xs:string
     * - minOccurs: 0
     * - nillable: true
     * - pattern: [\da-fA-F]{8}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{12}
     * - type: tns:guid
     * @var string|null
     */
    protected ?string $OperatorID = null;
    /**
     * The OperatorLogin
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $OperatorLogin = null;
    /**
     * The ServerId
     * Meta information extracted from the WSDL
     * - base: xs:string
     * - minOccurs: 0
     * - nillable: true
     * - pattern: [\da-fA-F]{8}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{12}
     * - type: tns:guid
     * @var string|null
     */
    protected ?string $ServerId = null;
    /**
     * The ServerName
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $ServerName = null;
    /**
     * The TemperatureResult
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var int|null
     */
    protected ?int $TemperatureResult = null;
    /**
     * The VehicleBrand
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $VehicleBrand = null;
    /**
     * The VehicleID
     * Meta information extracted from the WSDL
     * - base: xs:string
     * - minOccurs: 0
     * - nillable: true
     * - pattern: [\da-fA-F]{8}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{12}
     * - type: tns:guid
     * @var string|null
     */
    protected ?string $VehicleID = null;
    /**
     * The VehicleRegistrationNumber
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $VehicleRegistrationNumber = null;
    /**
     * Constructor method for LogMessage
     * @uses LogMessage::setAlcoholCheckState()
     * @uses LogMessage::setAlcoholResult()
     * @uses LogMessage::setContentData()
     * @uses LogMessage::setContentType()
     * @uses LogMessage::setDateTime()
     * @uses LogMessage::setDetails()
     * @uses LogMessage::setDriverID()
     * @uses LogMessage::setDriverName()
     * @uses LogMessage::setEmployeeFirstName()
     * @uses LogMessage::setEmployeeGroupFullName()
     * @uses LogMessage::setEmployeeGroupId()
     * @uses LogMessage::setEmployeeGroupName()
     * @uses LogMessage::setEmployeeID()
     * @uses LogMessage::setEmployeeLastName()
     * @uses LogMessage::setEmployeeSecondName()
     * @uses LogMessage::setEmployeeTableNumber()
     * @uses LogMessage::setFaceRecognitionCheckState()
     * @uses LogMessage::setId()
     * @uses LogMessage::setLivenessResult()
     * @uses LogMessage::setLogMessageSubType()
     * @uses LogMessage::setLogMessageType()
     * @uses LogMessage::setMessage()
     * @uses LogMessage::setOperatorFullName()
     * @uses LogMessage::setOperatorID()
     * @uses LogMessage::setOperatorLogin()
     * @uses LogMessage::setServerId()
     * @uses LogMessage::setServerName()
     * @uses LogMessage::setTemperatureResult()
     * @uses LogMessage::setVehicleBrand()
     * @uses LogMessage::setVehicleID()
     * @uses LogMessage::setVehicleRegistrationNumber()
     * @param string $alcoholCheckState
     * @param int $alcoholResult
     * @param string $contentData
     * @param string $contentType
     * @param string $dateTime
     * @param string $details
     * @param string $driverID
     * @param string $driverName
     * @param string $employeeFirstName
     * @param string $employeeGroupFullName
     * @param string $employeeGroupId
     * @param string $employeeGroupName
     * @param string $employeeID
     * @param string $employeeLastName
     * @param string $employeeSecondName
     * @param int $employeeTableNumber
     * @param string $faceRecognitionCheckState
     * @param int $id
     * @param bool $livenessResult
     * @param string $logMessageSubType
     * @param string $logMessageType
     * @param string $message
     * @param string $operatorFullName
     * @param string $operatorID
     * @param string $operatorLogin
     * @param string $serverId
     * @param string $serverName
     * @param int $temperatureResult
     * @param string $vehicleBrand
     * @param string $vehicleID
     * @param string $vehicleRegistrationNumber
     */
    public function __construct(?string $alcoholCheckState = null, ?int $alcoholResult = null, ?string $contentData = null, ?string $contentType = null, ?string $dateTime = null, ?string $details = null, ?string $driverID = null, ?string $driverName = null, ?string $employeeFirstName = null, ?string $employeeGroupFullName = null, ?string $employeeGroupId = null, ?string $employeeGroupName = null, ?string $employeeID = null, ?string $employeeLastName = null, ?string $employeeSecondName = null, ?int $employeeTableNumber = null, ?string $faceRecognitionCheckState = null, ?int $id = null, ?bool $livenessResult = null, ?string $logMessageSubType = null, ?string $logMessageType = null, ?string $message = null, ?string $operatorFullName = null, ?string $operatorID = null, ?string $operatorLogin = null, ?string $serverId = null, ?string $serverName = null, ?int $temperatureResult = null, ?string $vehicleBrand = null, ?string $vehicleID = null, ?string $vehicleRegistrationNumber = null)
    {
        $this
            ->setAlcoholCheckState($alcoholCheckState)
            ->setAlcoholResult($alcoholResult)
            ->setContentData($contentData)
            ->setContentType($contentType)
            ->setDateTime($dateTime)
            ->setDetails($details)
            ->setDriverID($driverID)
            ->setDriverName($driverName)
            ->setEmployeeFirstName($employeeFirstName)
            ->setEmployeeGroupFullName($employeeGroupFullName)
            ->setEmployeeGroupId($employeeGroupId)
            ->setEmployeeGroupName($employeeGroupName)
            ->setEmployeeID($employeeID)
            ->setEmployeeLastName($employeeLastName)
            ->setEmployeeSecondName($employeeSecondName)
            ->setEmployeeTableNumber($employeeTableNumber)
            ->setFaceRecognitionCheckState($faceRecognitionCheckState)
            ->setId($id)
            ->setLivenessResult($livenessResult)
            ->setLogMessageSubType($logMessageSubType)
            ->setLogMessageType($logMessageType)
            ->setMessage($message)
            ->setOperatorFullName($operatorFullName)
            ->setOperatorID($operatorID)
            ->setOperatorLogin($operatorLogin)
            ->setServerId($serverId)
            ->setServerName($serverName)
            ->setTemperatureResult($temperatureResult)
            ->setVehicleBrand($vehicleBrand)
            ->setVehicleID($vehicleID)
            ->setVehicleRegistrationNumber($vehicleRegistrationNumber);
    }
    /**
     * Get AlcoholCheckState value
     * @return string|null
     */
    public function getAlcoholCheckState(): ?string
    {
        return $this->AlcoholCheckState;
    }
    /**
     * Set AlcoholCheckState value
     * @uses \EnumType\AlcoCheckState::valueIsValid()
     * @uses \EnumType\AlcoCheckState::getValidValues()
     * @throws InvalidArgumentException
     * @param string $alcoholCheckState
     * @return \StructType\LogMessage
     */
    public function setAlcoholCheckState(?string $alcoholCheckState = null): self
    {
        // validation for constraint: enumeration
        if (!\EnumType\AlcoCheckState::valueIsValid($alcoholCheckState)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \EnumType\AlcoCheckState', is_array($alcoholCheckState) ? implode(', ', $alcoholCheckState) : var_export($alcoholCheckState, true), implode(', ', \EnumType\AlcoCheckState::getValidValues())), __LINE__);
        }
        $this->AlcoholCheckState = $alcoholCheckState;
        
        return $this;
    }
    /**
     * Get AlcoholResult value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return int|null
     */
    public function getAlcoholResult(): ?int
    {
        return isset($this->AlcoholResult) ? $this->AlcoholResult : null;
    }
    /**
     * Set AlcoholResult value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param int $alcoholResult
     * @return \StructType\LogMessage
     */
    public function setAlcoholResult(?int $alcoholResult = null): self
    {
        // validation for constraint: int
        if (!is_null($alcoholResult) && !(is_int($alcoholResult) || ctype_digit($alcoholResult))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($alcoholResult, true), gettype($alcoholResult)), __LINE__);
        }
        if (is_null($alcoholResult) || (is_array($alcoholResult) && empty($alcoholResult))) {
            unset($this->AlcoholResult);
        } else {
            $this->AlcoholResult = $alcoholResult;
        }
        
        return $this;
    }
    /**
     * Get ContentData value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getContentData(): ?string
    {
        return isset($this->ContentData) ? $this->ContentData : null;
    }
    /**
     * Set ContentData value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $contentData
     * @return \StructType\LogMessage
     */
    public function setContentData(?string $contentData = null): self
    {
        // validation for constraint: string
        if (!is_null($contentData) && !is_string($contentData)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($contentData, true), gettype($contentData)), __LINE__);
        }
        if (is_null($contentData) || (is_array($contentData) && empty($contentData))) {
            unset($this->ContentData);
        } else {
            $this->ContentData = $contentData;
        }
        
        return $this;
    }
    /**
     * Get ContentType value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getContentType(): ?string
    {
        return isset($this->ContentType) ? $this->ContentType : null;
    }
    /**
     * Set ContentType value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @uses \EnumType\LogMessageContentDataType::valueIsValid()
     * @uses \EnumType\LogMessageContentDataType::getValidValues()
     * @throws InvalidArgumentException
     * @param string $contentType
     * @return \StructType\LogMessage
     */
    public function setContentType(?string $contentType = null): self
    {
        // validation for constraint: enumeration
        if (!\EnumType\LogMessageContentDataType::valueIsValid($contentType)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \EnumType\LogMessageContentDataType', is_array($contentType) ? implode(', ', $contentType) : var_export($contentType, true), implode(', ', \EnumType\LogMessageContentDataType::getValidValues())), __LINE__);
        }
        if (is_null($contentType) || (is_array($contentType) && empty($contentType))) {
            unset($this->ContentType);
        } else {
            $this->ContentType = $contentType;
        }
        
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
     * @return \StructType\LogMessage
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
     * @return \StructType\LogMessage
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
     * Get DriverID value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getDriverID(): ?string
    {
        return isset($this->DriverID) ? $this->DriverID : null;
    }
    /**
     * Set DriverID value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $driverID
     * @return \StructType\LogMessage
     */
    public function setDriverID(?string $driverID = null): self
    {
        // validation for constraint: string
        if (!is_null($driverID) && !is_string($driverID)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($driverID, true), gettype($driverID)), __LINE__);
        }
        // validation for constraint: pattern([\da-fA-F]{8}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{12})
        if (!is_null($driverID) && !preg_match('/[\\da-fA-F]{8}-[\\da-fA-F]{4}-[\\da-fA-F]{4}-[\\da-fA-F]{4}-[\\da-fA-F]{12}/', $driverID)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a literal that is among the set of character sequences denoted by the regular expression /[\\da-fA-F]{8}-[\\da-fA-F]{4}-[\\da-fA-F]{4}-[\\da-fA-F]{4}-[\\da-fA-F]{12}/', var_export($driverID, true)), __LINE__);
        }
        if (is_null($driverID) || (is_array($driverID) && empty($driverID))) {
            unset($this->DriverID);
        } else {
            $this->DriverID = $driverID;
        }
        
        return $this;
    }
    /**
     * Get DriverName value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getDriverName(): ?string
    {
        return isset($this->DriverName) ? $this->DriverName : null;
    }
    /**
     * Set DriverName value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $driverName
     * @return \StructType\LogMessage
     */
    public function setDriverName(?string $driverName = null): self
    {
        // validation for constraint: string
        if (!is_null($driverName) && !is_string($driverName)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($driverName, true), gettype($driverName)), __LINE__);
        }
        if (is_null($driverName) || (is_array($driverName) && empty($driverName))) {
            unset($this->DriverName);
        } else {
            $this->DriverName = $driverName;
        }
        
        return $this;
    }
    /**
     * Get EmployeeFirstName value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getEmployeeFirstName(): ?string
    {
        return isset($this->EmployeeFirstName) ? $this->EmployeeFirstName : null;
    }
    /**
     * Set EmployeeFirstName value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $employeeFirstName
     * @return \StructType\LogMessage
     */
    public function setEmployeeFirstName(?string $employeeFirstName = null): self
    {
        // validation for constraint: string
        if (!is_null($employeeFirstName) && !is_string($employeeFirstName)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($employeeFirstName, true), gettype($employeeFirstName)), __LINE__);
        }
        if (is_null($employeeFirstName) || (is_array($employeeFirstName) && empty($employeeFirstName))) {
            unset($this->EmployeeFirstName);
        } else {
            $this->EmployeeFirstName = $employeeFirstName;
        }
        
        return $this;
    }
    /**
     * Get EmployeeGroupFullName value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getEmployeeGroupFullName(): ?string
    {
        return isset($this->EmployeeGroupFullName) ? $this->EmployeeGroupFullName : null;
    }
    /**
     * Set EmployeeGroupFullName value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $employeeGroupFullName
     * @return \StructType\LogMessage
     */
    public function setEmployeeGroupFullName(?string $employeeGroupFullName = null): self
    {
        // validation for constraint: string
        if (!is_null($employeeGroupFullName) && !is_string($employeeGroupFullName)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($employeeGroupFullName, true), gettype($employeeGroupFullName)), __LINE__);
        }
        if (is_null($employeeGroupFullName) || (is_array($employeeGroupFullName) && empty($employeeGroupFullName))) {
            unset($this->EmployeeGroupFullName);
        } else {
            $this->EmployeeGroupFullName = $employeeGroupFullName;
        }
        
        return $this;
    }
    /**
     * Get EmployeeGroupId value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getEmployeeGroupId(): ?string
    {
        return isset($this->EmployeeGroupId) ? $this->EmployeeGroupId : null;
    }
    /**
     * Set EmployeeGroupId value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $employeeGroupId
     * @return \StructType\LogMessage
     */
    public function setEmployeeGroupId(?string $employeeGroupId = null): self
    {
        // validation for constraint: string
        if (!is_null($employeeGroupId) && !is_string($employeeGroupId)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($employeeGroupId, true), gettype($employeeGroupId)), __LINE__);
        }
        // validation for constraint: pattern([\da-fA-F]{8}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{12})
        if (!is_null($employeeGroupId) && !preg_match('/[\\da-fA-F]{8}-[\\da-fA-F]{4}-[\\da-fA-F]{4}-[\\da-fA-F]{4}-[\\da-fA-F]{12}/', $employeeGroupId)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a literal that is among the set of character sequences denoted by the regular expression /[\\da-fA-F]{8}-[\\da-fA-F]{4}-[\\da-fA-F]{4}-[\\da-fA-F]{4}-[\\da-fA-F]{12}/', var_export($employeeGroupId, true)), __LINE__);
        }
        if (is_null($employeeGroupId) || (is_array($employeeGroupId) && empty($employeeGroupId))) {
            unset($this->EmployeeGroupId);
        } else {
            $this->EmployeeGroupId = $employeeGroupId;
        }
        
        return $this;
    }
    /**
     * Get EmployeeGroupName value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getEmployeeGroupName(): ?string
    {
        return isset($this->EmployeeGroupName) ? $this->EmployeeGroupName : null;
    }
    /**
     * Set EmployeeGroupName value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $employeeGroupName
     * @return \StructType\LogMessage
     */
    public function setEmployeeGroupName(?string $employeeGroupName = null): self
    {
        // validation for constraint: string
        if (!is_null($employeeGroupName) && !is_string($employeeGroupName)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($employeeGroupName, true), gettype($employeeGroupName)), __LINE__);
        }
        if (is_null($employeeGroupName) || (is_array($employeeGroupName) && empty($employeeGroupName))) {
            unset($this->EmployeeGroupName);
        } else {
            $this->EmployeeGroupName = $employeeGroupName;
        }
        
        return $this;
    }
    /**
     * Get EmployeeID value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getEmployeeID(): ?string
    {
        return isset($this->EmployeeID) ? $this->EmployeeID : null;
    }
    /**
     * Set EmployeeID value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $employeeID
     * @return \StructType\LogMessage
     */
    public function setEmployeeID(?string $employeeID = null): self
    {
        // validation for constraint: string
        if (!is_null($employeeID) && !is_string($employeeID)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($employeeID, true), gettype($employeeID)), __LINE__);
        }
        // validation for constraint: pattern([\da-fA-F]{8}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{12})
        if (!is_null($employeeID) && !preg_match('/[\\da-fA-F]{8}-[\\da-fA-F]{4}-[\\da-fA-F]{4}-[\\da-fA-F]{4}-[\\da-fA-F]{12}/', $employeeID)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a literal that is among the set of character sequences denoted by the regular expression /[\\da-fA-F]{8}-[\\da-fA-F]{4}-[\\da-fA-F]{4}-[\\da-fA-F]{4}-[\\da-fA-F]{12}/', var_export($employeeID, true)), __LINE__);
        }
        if (is_null($employeeID) || (is_array($employeeID) && empty($employeeID))) {
            unset($this->EmployeeID);
        } else {
            $this->EmployeeID = $employeeID;
        }
        
        return $this;
    }
    /**
     * Get EmployeeLastName value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getEmployeeLastName(): ?string
    {
        return isset($this->EmployeeLastName) ? $this->EmployeeLastName : null;
    }
    /**
     * Set EmployeeLastName value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $employeeLastName
     * @return \StructType\LogMessage
     */
    public function setEmployeeLastName(?string $employeeLastName = null): self
    {
        // validation for constraint: string
        if (!is_null($employeeLastName) && !is_string($employeeLastName)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($employeeLastName, true), gettype($employeeLastName)), __LINE__);
        }
        if (is_null($employeeLastName) || (is_array($employeeLastName) && empty($employeeLastName))) {
            unset($this->EmployeeLastName);
        } else {
            $this->EmployeeLastName = $employeeLastName;
        }
        
        return $this;
    }
    /**
     * Get EmployeeSecondName value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getEmployeeSecondName(): ?string
    {
        return isset($this->EmployeeSecondName) ? $this->EmployeeSecondName : null;
    }
    /**
     * Set EmployeeSecondName value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $employeeSecondName
     * @return \StructType\LogMessage
     */
    public function setEmployeeSecondName(?string $employeeSecondName = null): self
    {
        // validation for constraint: string
        if (!is_null($employeeSecondName) && !is_string($employeeSecondName)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($employeeSecondName, true), gettype($employeeSecondName)), __LINE__);
        }
        if (is_null($employeeSecondName) || (is_array($employeeSecondName) && empty($employeeSecondName))) {
            unset($this->EmployeeSecondName);
        } else {
            $this->EmployeeSecondName = $employeeSecondName;
        }
        
        return $this;
    }
    /**
     * Get EmployeeTableNumber value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return int|null
     */
    public function getEmployeeTableNumber(): ?int
    {
        return isset($this->EmployeeTableNumber) ? $this->EmployeeTableNumber : null;
    }
    /**
     * Set EmployeeTableNumber value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param int $employeeTableNumber
     * @return \StructType\LogMessage
     */
    public function setEmployeeTableNumber(?int $employeeTableNumber = null): self
    {
        // validation for constraint: int
        if (!is_null($employeeTableNumber) && !(is_int($employeeTableNumber) || ctype_digit($employeeTableNumber))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($employeeTableNumber, true), gettype($employeeTableNumber)), __LINE__);
        }
        if (is_null($employeeTableNumber) || (is_array($employeeTableNumber) && empty($employeeTableNumber))) {
            unset($this->EmployeeTableNumber);
        } else {
            $this->EmployeeTableNumber = $employeeTableNumber;
        }
        
        return $this;
    }
    /**
     * Get FaceRecognitionCheckState value
     * @return string|null
     */
    public function getFaceRecognitionCheckState(): ?string
    {
        return $this->FaceRecognitionCheckState;
    }
    /**
     * Set FaceRecognitionCheckState value
     * @uses \EnumType\FaceCheckState::valueIsValid()
     * @uses \EnumType\FaceCheckState::getValidValues()
     * @throws InvalidArgumentException
     * @param string $faceRecognitionCheckState
     * @return \StructType\LogMessage
     */
    public function setFaceRecognitionCheckState(?string $faceRecognitionCheckState = null): self
    {
        // validation for constraint: enumeration
        if (!\EnumType\FaceCheckState::valueIsValid($faceRecognitionCheckState)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \EnumType\FaceCheckState', is_array($faceRecognitionCheckState) ? implode(', ', $faceRecognitionCheckState) : var_export($faceRecognitionCheckState, true), implode(', ', \EnumType\FaceCheckState::getValidValues())), __LINE__);
        }
        $this->FaceRecognitionCheckState = $faceRecognitionCheckState;
        
        return $this;
    }
    /**
     * Get Id value
     * @return int|null
     */
    public function getId(): ?int
    {
        return $this->Id;
    }
    /**
     * Set Id value
     * @param int $id
     * @return \StructType\LogMessage
     */
    public function setId(?int $id = null): self
    {
        // validation for constraint: int
        if (!is_null($id) && !(is_int($id) || ctype_digit($id))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($id, true), gettype($id)), __LINE__);
        }
        $this->Id = $id;
        
        return $this;
    }
    /**
     * Get LivenessResult value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return bool|null
     */
    public function getLivenessResult(): ?bool
    {
        return isset($this->LivenessResult) ? $this->LivenessResult : null;
    }
    /**
     * Set LivenessResult value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param bool $livenessResult
     * @return \StructType\LogMessage
     */
    public function setLivenessResult(?bool $livenessResult = null): self
    {
        // validation for constraint: boolean
        if (!is_null($livenessResult) && !is_bool($livenessResult)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($livenessResult, true), gettype($livenessResult)), __LINE__);
        }
        if (is_null($livenessResult) || (is_array($livenessResult) && empty($livenessResult))) {
            unset($this->LivenessResult);
        } else {
            $this->LivenessResult = $livenessResult;
        }
        
        return $this;
    }
    /**
     * Get LogMessageSubType value
     * @return string|null
     */
    public function getLogMessageSubType(): ?string
    {
        return $this->LogMessageSubType;
    }
    /**
     * Set LogMessageSubType value
     * @uses \EnumType\LogMsgSubType::valueIsValid()
     * @uses \EnumType\LogMsgSubType::getValidValues()
     * @throws InvalidArgumentException
     * @param string $logMessageSubType
     * @return \StructType\LogMessage
     */
    public function setLogMessageSubType(?string $logMessageSubType = null): self
    {
        // validation for constraint: enumeration
        if (!\EnumType\LogMsgSubType::valueIsValid($logMessageSubType)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \EnumType\LogMsgSubType', is_array($logMessageSubType) ? implode(', ', $logMessageSubType) : var_export($logMessageSubType, true), implode(', ', \EnumType\LogMsgSubType::getValidValues())), __LINE__);
        }
        $this->LogMessageSubType = $logMessageSubType;
        
        return $this;
    }
    /**
     * Get LogMessageType value
     * @return string|null
     */
    public function getLogMessageType(): ?string
    {
        return $this->LogMessageType;
    }
    /**
     * Set LogMessageType value
     * @uses \EnumType\LogMsgType::valueIsValid()
     * @uses \EnumType\LogMsgType::getValidValues()
     * @throws InvalidArgumentException
     * @param string $logMessageType
     * @return \StructType\LogMessage
     */
    public function setLogMessageType(?string $logMessageType = null): self
    {
        // validation for constraint: enumeration
        if (!\EnumType\LogMsgType::valueIsValid($logMessageType)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \EnumType\LogMsgType', is_array($logMessageType) ? implode(', ', $logMessageType) : var_export($logMessageType, true), implode(', ', \EnumType\LogMsgType::getValidValues())), __LINE__);
        }
        $this->LogMessageType = $logMessageType;
        
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
     * @return \StructType\LogMessage
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
     * Get OperatorFullName value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getOperatorFullName(): ?string
    {
        return isset($this->OperatorFullName) ? $this->OperatorFullName : null;
    }
    /**
     * Set OperatorFullName value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $operatorFullName
     * @return \StructType\LogMessage
     */
    public function setOperatorFullName(?string $operatorFullName = null): self
    {
        // validation for constraint: string
        if (!is_null($operatorFullName) && !is_string($operatorFullName)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($operatorFullName, true), gettype($operatorFullName)), __LINE__);
        }
        if (is_null($operatorFullName) || (is_array($operatorFullName) && empty($operatorFullName))) {
            unset($this->OperatorFullName);
        } else {
            $this->OperatorFullName = $operatorFullName;
        }
        
        return $this;
    }
    /**
     * Get OperatorID value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getOperatorID(): ?string
    {
        return isset($this->OperatorID) ? $this->OperatorID : null;
    }
    /**
     * Set OperatorID value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $operatorID
     * @return \StructType\LogMessage
     */
    public function setOperatorID(?string $operatorID = null): self
    {
        // validation for constraint: string
        if (!is_null($operatorID) && !is_string($operatorID)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($operatorID, true), gettype($operatorID)), __LINE__);
        }
        // validation for constraint: pattern([\da-fA-F]{8}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{12})
        if (!is_null($operatorID) && !preg_match('/[\\da-fA-F]{8}-[\\da-fA-F]{4}-[\\da-fA-F]{4}-[\\da-fA-F]{4}-[\\da-fA-F]{12}/', $operatorID)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a literal that is among the set of character sequences denoted by the regular expression /[\\da-fA-F]{8}-[\\da-fA-F]{4}-[\\da-fA-F]{4}-[\\da-fA-F]{4}-[\\da-fA-F]{12}/', var_export($operatorID, true)), __LINE__);
        }
        if (is_null($operatorID) || (is_array($operatorID) && empty($operatorID))) {
            unset($this->OperatorID);
        } else {
            $this->OperatorID = $operatorID;
        }
        
        return $this;
    }
    /**
     * Get OperatorLogin value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getOperatorLogin(): ?string
    {
        return isset($this->OperatorLogin) ? $this->OperatorLogin : null;
    }
    /**
     * Set OperatorLogin value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $operatorLogin
     * @return \StructType\LogMessage
     */
    public function setOperatorLogin(?string $operatorLogin = null): self
    {
        // validation for constraint: string
        if (!is_null($operatorLogin) && !is_string($operatorLogin)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($operatorLogin, true), gettype($operatorLogin)), __LINE__);
        }
        if (is_null($operatorLogin) || (is_array($operatorLogin) && empty($operatorLogin))) {
            unset($this->OperatorLogin);
        } else {
            $this->OperatorLogin = $operatorLogin;
        }
        
        return $this;
    }
    /**
     * Get ServerId value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getServerId(): ?string
    {
        return isset($this->ServerId) ? $this->ServerId : null;
    }
    /**
     * Set ServerId value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $serverId
     * @return \StructType\LogMessage
     */
    public function setServerId(?string $serverId = null): self
    {
        // validation for constraint: string
        if (!is_null($serverId) && !is_string($serverId)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($serverId, true), gettype($serverId)), __LINE__);
        }
        // validation for constraint: pattern([\da-fA-F]{8}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{12})
        if (!is_null($serverId) && !preg_match('/[\\da-fA-F]{8}-[\\da-fA-F]{4}-[\\da-fA-F]{4}-[\\da-fA-F]{4}-[\\da-fA-F]{12}/', $serverId)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a literal that is among the set of character sequences denoted by the regular expression /[\\da-fA-F]{8}-[\\da-fA-F]{4}-[\\da-fA-F]{4}-[\\da-fA-F]{4}-[\\da-fA-F]{12}/', var_export($serverId, true)), __LINE__);
        }
        if (is_null($serverId) || (is_array($serverId) && empty($serverId))) {
            unset($this->ServerId);
        } else {
            $this->ServerId = $serverId;
        }
        
        return $this;
    }
    /**
     * Get ServerName value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getServerName(): ?string
    {
        return isset($this->ServerName) ? $this->ServerName : null;
    }
    /**
     * Set ServerName value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $serverName
     * @return \StructType\LogMessage
     */
    public function setServerName(?string $serverName = null): self
    {
        // validation for constraint: string
        if (!is_null($serverName) && !is_string($serverName)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($serverName, true), gettype($serverName)), __LINE__);
        }
        if (is_null($serverName) || (is_array($serverName) && empty($serverName))) {
            unset($this->ServerName);
        } else {
            $this->ServerName = $serverName;
        }
        
        return $this;
    }
    /**
     * Get TemperatureResult value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return int|null
     */
    public function getTemperatureResult(): ?int
    {
        return isset($this->TemperatureResult) ? $this->TemperatureResult : null;
    }
    /**
     * Set TemperatureResult value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param int $temperatureResult
     * @return \StructType\LogMessage
     */
    public function setTemperatureResult(?int $temperatureResult = null): self
    {
        // validation for constraint: int
        if (!is_null($temperatureResult) && !(is_int($temperatureResult) || ctype_digit($temperatureResult))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($temperatureResult, true), gettype($temperatureResult)), __LINE__);
        }
        if (is_null($temperatureResult) || (is_array($temperatureResult) && empty($temperatureResult))) {
            unset($this->TemperatureResult);
        } else {
            $this->TemperatureResult = $temperatureResult;
        }
        
        return $this;
    }
    /**
     * Get VehicleBrand value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getVehicleBrand(): ?string
    {
        return isset($this->VehicleBrand) ? $this->VehicleBrand : null;
    }
    /**
     * Set VehicleBrand value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $vehicleBrand
     * @return \StructType\LogMessage
     */
    public function setVehicleBrand(?string $vehicleBrand = null): self
    {
        // validation for constraint: string
        if (!is_null($vehicleBrand) && !is_string($vehicleBrand)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($vehicleBrand, true), gettype($vehicleBrand)), __LINE__);
        }
        if (is_null($vehicleBrand) || (is_array($vehicleBrand) && empty($vehicleBrand))) {
            unset($this->VehicleBrand);
        } else {
            $this->VehicleBrand = $vehicleBrand;
        }
        
        return $this;
    }
    /**
     * Get VehicleID value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getVehicleID(): ?string
    {
        return isset($this->VehicleID) ? $this->VehicleID : null;
    }
    /**
     * Set VehicleID value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $vehicleID
     * @return \StructType\LogMessage
     */
    public function setVehicleID(?string $vehicleID = null): self
    {
        // validation for constraint: string
        if (!is_null($vehicleID) && !is_string($vehicleID)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($vehicleID, true), gettype($vehicleID)), __LINE__);
        }
        // validation for constraint: pattern([\da-fA-F]{8}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{12})
        if (!is_null($vehicleID) && !preg_match('/[\\da-fA-F]{8}-[\\da-fA-F]{4}-[\\da-fA-F]{4}-[\\da-fA-F]{4}-[\\da-fA-F]{12}/', $vehicleID)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a literal that is among the set of character sequences denoted by the regular expression /[\\da-fA-F]{8}-[\\da-fA-F]{4}-[\\da-fA-F]{4}-[\\da-fA-F]{4}-[\\da-fA-F]{12}/', var_export($vehicleID, true)), __LINE__);
        }
        if (is_null($vehicleID) || (is_array($vehicleID) && empty($vehicleID))) {
            unset($this->VehicleID);
        } else {
            $this->VehicleID = $vehicleID;
        }
        
        return $this;
    }
    /**
     * Get VehicleRegistrationNumber value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getVehicleRegistrationNumber(): ?string
    {
        return isset($this->VehicleRegistrationNumber) ? $this->VehicleRegistrationNumber : null;
    }
    /**
     * Set VehicleRegistrationNumber value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $vehicleRegistrationNumber
     * @return \StructType\LogMessage
     */
    public function setVehicleRegistrationNumber(?string $vehicleRegistrationNumber = null): self
    {
        // validation for constraint: string
        if (!is_null($vehicleRegistrationNumber) && !is_string($vehicleRegistrationNumber)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($vehicleRegistrationNumber, true), gettype($vehicleRegistrationNumber)), __LINE__);
        }
        if (is_null($vehicleRegistrationNumber) || (is_array($vehicleRegistrationNumber) && empty($vehicleRegistrationNumber))) {
            unset($this->VehicleRegistrationNumber);
        } else {
            $this->VehicleRegistrationNumber = $vehicleRegistrationNumber;
        }
        
        return $this;
    }
}
