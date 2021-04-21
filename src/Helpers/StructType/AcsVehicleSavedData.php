<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for AcsVehicleSavedData StructType
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:AcsVehicleSavedData
 * @subpackage Structs
 */
class AcsVehicleSavedData extends AbstractStructBase
{
    /**
     * The Brand
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $Brand = null;
    /**
     * The Color
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $Color = null;
    /**
     * The Comment
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $Comment = null;
    /**
     * The CreationDateTime
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $CreationDateTime = null;
    /**
     * The EndDateTime
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $EndDateTime = null;
    /**
     * The GroupId
     * Meta information extracted from the WSDL
     * - base: xs:string
     * - minOccurs: 0
     * - nillable: true
     * - pattern: [\da-fA-F]{8}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{12}
     * - type: tns:guid
     * @var string|null
     */
    protected ?string $GroupId = null;
    /**
     * The IsLock
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var bool|null
     */
    protected ?bool $IsLock = null;
    /**
     * The ModificationDateTime
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $ModificationDateTime = null;
    /**
     * The Name
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $Name = null;
    /**
     * The RegistrationNumber
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $RegistrationNumber = null;
    /**
     * The StartDateTime
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $StartDateTime = null;
    /**
     * The VehicleType
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \StructType\DictionaryElementInfo|null
     */
    protected ?\StructType\DictionaryElementInfo $VehicleType = null;
    /**
     * The VehicleTypeID
     * Meta information extracted from the WSDL
     * - base: xs:string
     * - minOccurs: 0
     * - nillable: true
     * - pattern: [\da-fA-F]{8}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{12}
     * - type: tns:guid
     * @var string|null
     */
    protected ?string $VehicleTypeID = null;
    /**
     * Constructor method for AcsVehicleSavedData
     * @uses AcsVehicleSavedData::setBrand()
     * @uses AcsVehicleSavedData::setColor()
     * @uses AcsVehicleSavedData::setComment()
     * @uses AcsVehicleSavedData::setCreationDateTime()
     * @uses AcsVehicleSavedData::setEndDateTime()
     * @uses AcsVehicleSavedData::setGroupId()
     * @uses AcsVehicleSavedData::setIsLock()
     * @uses AcsVehicleSavedData::setModificationDateTime()
     * @uses AcsVehicleSavedData::setName()
     * @uses AcsVehicleSavedData::setRegistrationNumber()
     * @uses AcsVehicleSavedData::setStartDateTime()
     * @uses AcsVehicleSavedData::setVehicleType()
     * @uses AcsVehicleSavedData::setVehicleTypeID()
     * @param string $brand
     * @param string $color
     * @param string $comment
     * @param string $creationDateTime
     * @param string $endDateTime
     * @param string $groupId
     * @param bool $isLock
     * @param string $modificationDateTime
     * @param string $name
     * @param string $registrationNumber
     * @param string $startDateTime
     * @param \StructType\DictionaryElementInfo $vehicleType
     * @param string $vehicleTypeID
     */
    public function __construct(?string $brand = null, ?string $color = null, ?string $comment = null, ?string $creationDateTime = null, ?string $endDateTime = null, ?string $groupId = null, ?bool $isLock = null, ?string $modificationDateTime = null, ?string $name = null, ?string $registrationNumber = null, ?string $startDateTime = null, ?\StructType\DictionaryElementInfo $vehicleType = null, ?string $vehicleTypeID = null)
    {
        $this
            ->setBrand($brand)
            ->setColor($color)
            ->setComment($comment)
            ->setCreationDateTime($creationDateTime)
            ->setEndDateTime($endDateTime)
            ->setGroupId($groupId)
            ->setIsLock($isLock)
            ->setModificationDateTime($modificationDateTime)
            ->setName($name)
            ->setRegistrationNumber($registrationNumber)
            ->setStartDateTime($startDateTime)
            ->setVehicleType($vehicleType)
            ->setVehicleTypeID($vehicleTypeID);
    }
    /**
     * Get Brand value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getBrand(): ?string
    {
        return isset($this->Brand) ? $this->Brand : null;
    }
    /**
     * Set Brand value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $brand
     * @return \StructType\AcsVehicleSavedData
     */
    public function setBrand(?string $brand = null): self
    {
        // validation for constraint: string
        if (!is_null($brand) && !is_string($brand)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($brand, true), gettype($brand)), __LINE__);
        }
        if (is_null($brand) || (is_array($brand) && empty($brand))) {
            unset($this->Brand);
        } else {
            $this->Brand = $brand;
        }
        
        return $this;
    }
    /**
     * Get Color value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getColor(): ?string
    {
        return isset($this->Color) ? $this->Color : null;
    }
    /**
     * Set Color value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $color
     * @return \StructType\AcsVehicleSavedData
     */
    public function setColor(?string $color = null): self
    {
        // validation for constraint: string
        if (!is_null($color) && !is_string($color)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($color, true), gettype($color)), __LINE__);
        }
        if (is_null($color) || (is_array($color) && empty($color))) {
            unset($this->Color);
        } else {
            $this->Color = $color;
        }
        
        return $this;
    }
    /**
     * Get Comment value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getComment(): ?string
    {
        return isset($this->Comment) ? $this->Comment : null;
    }
    /**
     * Set Comment value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $comment
     * @return \StructType\AcsVehicleSavedData
     */
    public function setComment(?string $comment = null): self
    {
        // validation for constraint: string
        if (!is_null($comment) && !is_string($comment)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($comment, true), gettype($comment)), __LINE__);
        }
        if (is_null($comment) || (is_array($comment) && empty($comment))) {
            unset($this->Comment);
        } else {
            $this->Comment = $comment;
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
     * @return \StructType\AcsVehicleSavedData
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
     * Get EndDateTime value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getEndDateTime(): ?string
    {
        return isset($this->EndDateTime) ? $this->EndDateTime : null;
    }
    /**
     * Set EndDateTime value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $endDateTime
     * @return \StructType\AcsVehicleSavedData
     */
    public function setEndDateTime(?string $endDateTime = null): self
    {
        // validation for constraint: string
        if (!is_null($endDateTime) && !is_string($endDateTime)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($endDateTime, true), gettype($endDateTime)), __LINE__);
        }
        if (is_null($endDateTime) || (is_array($endDateTime) && empty($endDateTime))) {
            unset($this->EndDateTime);
        } else {
            $this->EndDateTime = $endDateTime;
        }
        
        return $this;
    }
    /**
     * Get GroupId value
     * @return string|null
     */
    public function getGroupId(): ?string
    {
        return $this->GroupId;
    }
    /**
     * Set GroupId value
     * @param string $groupId
     * @return \StructType\AcsVehicleSavedData
     */
    public function setGroupId(?string $groupId = null): self
    {
        // validation for constraint: string
        if (!is_null($groupId) && !is_string($groupId)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($groupId, true), gettype($groupId)), __LINE__);
        }
        // validation for constraint: pattern([\da-fA-F]{8}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{12})
        if (!is_null($groupId) && !preg_match('/[\\da-fA-F]{8}-[\\da-fA-F]{4}-[\\da-fA-F]{4}-[\\da-fA-F]{4}-[\\da-fA-F]{12}/', $groupId)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a literal that is among the set of character sequences denoted by the regular expression /[\\da-fA-F]{8}-[\\da-fA-F]{4}-[\\da-fA-F]{4}-[\\da-fA-F]{4}-[\\da-fA-F]{12}/', var_export($groupId, true)), __LINE__);
        }
        $this->GroupId = $groupId;
        
        return $this;
    }
    /**
     * Get IsLock value
     * @return bool|null
     */
    public function getIsLock(): ?bool
    {
        return $this->IsLock;
    }
    /**
     * Set IsLock value
     * @param bool $isLock
     * @return \StructType\AcsVehicleSavedData
     */
    public function setIsLock(?bool $isLock = null): self
    {
        // validation for constraint: boolean
        if (!is_null($isLock) && !is_bool($isLock)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($isLock, true), gettype($isLock)), __LINE__);
        }
        $this->IsLock = $isLock;
        
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
     * @return \StructType\AcsVehicleSavedData
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
     * Get Name value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getName(): ?string
    {
        return isset($this->Name) ? $this->Name : null;
    }
    /**
     * Set Name value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $name
     * @return \StructType\AcsVehicleSavedData
     */
    public function setName(?string $name = null): self
    {
        // validation for constraint: string
        if (!is_null($name) && !is_string($name)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($name, true), gettype($name)), __LINE__);
        }
        if (is_null($name) || (is_array($name) && empty($name))) {
            unset($this->Name);
        } else {
            $this->Name = $name;
        }
        
        return $this;
    }
    /**
     * Get RegistrationNumber value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getRegistrationNumber(): ?string
    {
        return isset($this->RegistrationNumber) ? $this->RegistrationNumber : null;
    }
    /**
     * Set RegistrationNumber value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $registrationNumber
     * @return \StructType\AcsVehicleSavedData
     */
    public function setRegistrationNumber(?string $registrationNumber = null): self
    {
        // validation for constraint: string
        if (!is_null($registrationNumber) && !is_string($registrationNumber)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($registrationNumber, true), gettype($registrationNumber)), __LINE__);
        }
        if (is_null($registrationNumber) || (is_array($registrationNumber) && empty($registrationNumber))) {
            unset($this->RegistrationNumber);
        } else {
            $this->RegistrationNumber = $registrationNumber;
        }
        
        return $this;
    }
    /**
     * Get StartDateTime value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getStartDateTime(): ?string
    {
        return isset($this->StartDateTime) ? $this->StartDateTime : null;
    }
    /**
     * Set StartDateTime value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $startDateTime
     * @return \StructType\AcsVehicleSavedData
     */
    public function setStartDateTime(?string $startDateTime = null): self
    {
        // validation for constraint: string
        if (!is_null($startDateTime) && !is_string($startDateTime)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($startDateTime, true), gettype($startDateTime)), __LINE__);
        }
        if (is_null($startDateTime) || (is_array($startDateTime) && empty($startDateTime))) {
            unset($this->StartDateTime);
        } else {
            $this->StartDateTime = $startDateTime;
        }
        
        return $this;
    }
    /**
     * Get VehicleType value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \StructType\DictionaryElementInfo|null
     */
    public function getVehicleType(): ?\StructType\DictionaryElementInfo
    {
        return isset($this->VehicleType) ? $this->VehicleType : null;
    }
    /**
     * Set VehicleType value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \StructType\DictionaryElementInfo $vehicleType
     * @return \StructType\AcsVehicleSavedData
     */
    public function setVehicleType(?\StructType\DictionaryElementInfo $vehicleType = null): self
    {
        if (is_null($vehicleType) || (is_array($vehicleType) && empty($vehicleType))) {
            unset($this->VehicleType);
        } else {
            $this->VehicleType = $vehicleType;
        }
        
        return $this;
    }
    /**
     * Get VehicleTypeID value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getVehicleTypeID(): ?string
    {
        return isset($this->VehicleTypeID) ? $this->VehicleTypeID : null;
    }
    /**
     * Set VehicleTypeID value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $vehicleTypeID
     * @return \StructType\AcsVehicleSavedData
     */
    public function setVehicleTypeID(?string $vehicleTypeID = null): self
    {
        // validation for constraint: string
        if (!is_null($vehicleTypeID) && !is_string($vehicleTypeID)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($vehicleTypeID, true), gettype($vehicleTypeID)), __LINE__);
        }
        // validation for constraint: pattern([\da-fA-F]{8}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{12})
        if (!is_null($vehicleTypeID) && !preg_match('/[\\da-fA-F]{8}-[\\da-fA-F]{4}-[\\da-fA-F]{4}-[\\da-fA-F]{4}-[\\da-fA-F]{12}/', $vehicleTypeID)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a literal that is among the set of character sequences denoted by the regular expression /[\\da-fA-F]{8}-[\\da-fA-F]{4}-[\\da-fA-F]{4}-[\\da-fA-F]{4}-[\\da-fA-F]{12}/', var_export($vehicleTypeID, true)), __LINE__);
        }
        if (is_null($vehicleTypeID) || (is_array($vehicleTypeID) && empty($vehicleTypeID))) {
            unset($this->VehicleTypeID);
        } else {
            $this->VehicleTypeID = $vehicleTypeID;
        }
        
        return $this;
    }
}
