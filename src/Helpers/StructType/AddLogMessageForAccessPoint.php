<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for AddLogMessageForAccessPoint StructType
 * @subpackage Structs
 */
class AddLogMessageForAccessPoint extends AbstractStructBase
{
    /**
     * The accessPointID
     * Meta information extracted from the WSDL
     * - base: xs:string
     * - minOccurs: 0
     * - nillable: true
     * - pattern: [\da-fA-F]{8}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{12}
     * - type: tns:guid
     * @var string|null
     */
    protected ?string $accessPointID = null;
    /**
     * The keyNumber
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var int|null
     */
    protected ?int $keyNumber = null;
    /**
     * The subType
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $subType = null;
    /**
     * The dateTime
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $dateTime = null;
    /**
     * The message
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $message = null;
    /**
     * The details
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $details = null;
    /**
     * The operatorID
     * Meta information extracted from the WSDL
     * - base: xs:string
     * - minOccurs: 0
     * - nillable: true
     * - pattern: [\da-fA-F]{8}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{12}
     * - type: tns:guid
     * @var string|null
     */
    protected ?string $operatorID = null;
    /**
     * The vehicleID
     * Meta information extracted from the WSDL
     * - base: xs:string
     * - minOccurs: 0
     * - nillable: true
     * - pattern: [\da-fA-F]{8}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{12}
     * - type: tns:guid
     * @var string|null
     */
    protected ?string $vehicleID = null;
    /**
     * Constructor method for AddLogMessageForAccessPoint
     * @uses AddLogMessageForAccessPoint::setAccessPointID()
     * @uses AddLogMessageForAccessPoint::setKeyNumber()
     * @uses AddLogMessageForAccessPoint::setSubType()
     * @uses AddLogMessageForAccessPoint::setDateTime()
     * @uses AddLogMessageForAccessPoint::setMessage()
     * @uses AddLogMessageForAccessPoint::setDetails()
     * @uses AddLogMessageForAccessPoint::setOperatorID()
     * @uses AddLogMessageForAccessPoint::setVehicleID()
     * @param string $accessPointID
     * @param int $keyNumber
     * @param string $subType
     * @param string $dateTime
     * @param string $message
     * @param string $details
     * @param string $operatorID
     * @param string $vehicleID
     */
    public function __construct(?string $accessPointID = null, ?int $keyNumber = null, ?string $subType = null, ?string $dateTime = null, ?string $message = null, ?string $details = null, ?string $operatorID = null, ?string $vehicleID = null)
    {
        $this
            ->setAccessPointID($accessPointID)
            ->setKeyNumber($keyNumber)
            ->setSubType($subType)
            ->setDateTime($dateTime)
            ->setMessage($message)
            ->setDetails($details)
            ->setOperatorID($operatorID)
            ->setVehicleID($vehicleID);
    }
    /**
     * Get accessPointID value
     * @return string|null
     */
    public function getAccessPointID(): ?string
    {
        return $this->accessPointID;
    }
    /**
     * Set accessPointID value
     * @param string $accessPointID
     * @return \StructType\AddLogMessageForAccessPoint
     */
    public function setAccessPointID(?string $accessPointID = null): self
    {
        // validation for constraint: string
        if (!is_null($accessPointID) && !is_string($accessPointID)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($accessPointID, true), gettype($accessPointID)), __LINE__);
        }
        // validation for constraint: pattern([\da-fA-F]{8}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{12})
        if (!is_null($accessPointID) && !preg_match('/[\\da-fA-F]{8}-[\\da-fA-F]{4}-[\\da-fA-F]{4}-[\\da-fA-F]{4}-[\\da-fA-F]{12}/', $accessPointID)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a literal that is among the set of character sequences denoted by the regular expression /[\\da-fA-F]{8}-[\\da-fA-F]{4}-[\\da-fA-F]{4}-[\\da-fA-F]{4}-[\\da-fA-F]{12}/', var_export($accessPointID, true)), __LINE__);
        }
        $this->accessPointID = $accessPointID;
        
        return $this;
    }
    /**
     * Get keyNumber value
     * @return int|null
     */
    public function getKeyNumber(): ?int
    {
        return $this->keyNumber;
    }
    /**
     * Set keyNumber value
     * @param int $keyNumber
     * @return \StructType\AddLogMessageForAccessPoint
     */
    public function setKeyNumber(?int $keyNumber = null): self
    {
        // validation for constraint: int
        if (!is_null($keyNumber) && !(is_int($keyNumber) || ctype_digit($keyNumber))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($keyNumber, true), gettype($keyNumber)), __LINE__);
        }
        $this->keyNumber = $keyNumber;
        
        return $this;
    }
    /**
     * Get subType value
     * @return string|null
     */
    public function getSubType(): ?string
    {
        return $this->subType;
    }
    /**
     * Set subType value
     * @uses \EnumType\LogMsgSubType::valueIsValid()
     * @uses \EnumType\LogMsgSubType::getValidValues()
     * @throws InvalidArgumentException
     * @param string $subType
     * @return \StructType\AddLogMessageForAccessPoint
     */
    public function setSubType(?string $subType = null): self
    {
        // validation for constraint: enumeration
        if (!\EnumType\LogMsgSubType::valueIsValid($subType)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \EnumType\LogMsgSubType', is_array($subType) ? implode(', ', $subType) : var_export($subType, true), implode(', ', \EnumType\LogMsgSubType::getValidValues())), __LINE__);
        }
        $this->subType = $subType;
        
        return $this;
    }
    /**
     * Get dateTime value
     * @return string|null
     */
    public function getDateTime(): ?string
    {
        return $this->dateTime;
    }
    /**
     * Set dateTime value
     * @param string $dateTime
     * @return \StructType\AddLogMessageForAccessPoint
     */
    public function setDateTime(?string $dateTime = null): self
    {
        // validation for constraint: string
        if (!is_null($dateTime) && !is_string($dateTime)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($dateTime, true), gettype($dateTime)), __LINE__);
        }
        $this->dateTime = $dateTime;
        
        return $this;
    }
    /**
     * Get message value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getMessage(): ?string
    {
        return isset($this->message) ? $this->message : null;
    }
    /**
     * Set message value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $message
     * @return \StructType\AddLogMessageForAccessPoint
     */
    public function setMessage(?string $message = null): self
    {
        // validation for constraint: string
        if (!is_null($message) && !is_string($message)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($message, true), gettype($message)), __LINE__);
        }
        if (is_null($message) || (is_array($message) && empty($message))) {
            unset($this->message);
        } else {
            $this->message = $message;
        }
        
        return $this;
    }
    /**
     * Get details value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getDetails(): ?string
    {
        return isset($this->details) ? $this->details : null;
    }
    /**
     * Set details value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $details
     * @return \StructType\AddLogMessageForAccessPoint
     */
    public function setDetails(?string $details = null): self
    {
        // validation for constraint: string
        if (!is_null($details) && !is_string($details)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($details, true), gettype($details)), __LINE__);
        }
        if (is_null($details) || (is_array($details) && empty($details))) {
            unset($this->details);
        } else {
            $this->details = $details;
        }
        
        return $this;
    }
    /**
     * Get operatorID value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getOperatorID(): ?string
    {
        return isset($this->operatorID) ? $this->operatorID : null;
    }
    /**
     * Set operatorID value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $operatorID
     * @return \StructType\AddLogMessageForAccessPoint
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
            unset($this->operatorID);
        } else {
            $this->operatorID = $operatorID;
        }
        
        return $this;
    }
    /**
     * Get vehicleID value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getVehicleID(): ?string
    {
        return isset($this->vehicleID) ? $this->vehicleID : null;
    }
    /**
     * Set vehicleID value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $vehicleID
     * @return \StructType\AddLogMessageForAccessPoint
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
            unset($this->vehicleID);
        } else {
            $this->vehicleID = $vehicleID;
        }
        
        return $this;
    }
}
