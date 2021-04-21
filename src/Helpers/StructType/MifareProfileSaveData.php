<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for MifareProfileSaveData StructType
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:MifareProfileSaveData
 * @subpackage Structs
 */
class MifareProfileSaveData extends AbstractStructBase
{
    /**
     * The AuthenticationMode
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $AuthenticationMode = null;
    /**
     * The Description
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $Description = null;
    /**
     * The Name
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $Name = null;
    /**
     * The ProfileType
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $ProfileType = null;
    /**
     * The SectorNumber
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var int|null
     */
    protected ?int $SectorNumber = null;
    /**
     * Constructor method for MifareProfileSaveData
     * @uses MifareProfileSaveData::setAuthenticationMode()
     * @uses MifareProfileSaveData::setDescription()
     * @uses MifareProfileSaveData::setName()
     * @uses MifareProfileSaveData::setProfileType()
     * @uses MifareProfileSaveData::setSectorNumber()
     * @param string $authenticationMode
     * @param string $description
     * @param string $name
     * @param string $profileType
     * @param int $sectorNumber
     */
    public function __construct(?string $authenticationMode = null, ?string $description = null, ?string $name = null, ?string $profileType = null, ?int $sectorNumber = null)
    {
        $this
            ->setAuthenticationMode($authenticationMode)
            ->setDescription($description)
            ->setName($name)
            ->setProfileType($profileType)
            ->setSectorNumber($sectorNumber);
    }
    /**
     * Get AuthenticationMode value
     * @return string|null
     */
    public function getAuthenticationMode(): ?string
    {
        return $this->AuthenticationMode;
    }
    /**
     * Set AuthenticationMode value
     * @uses \EnumType\SectorAuthentication::valueIsValid()
     * @uses \EnumType\SectorAuthentication::getValidValues()
     * @throws InvalidArgumentException
     * @param string $authenticationMode
     * @return \StructType\MifareProfileSaveData
     */
    public function setAuthenticationMode(?string $authenticationMode = null): self
    {
        // validation for constraint: enumeration
        if (!\EnumType\SectorAuthentication::valueIsValid($authenticationMode)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \EnumType\SectorAuthentication', is_array($authenticationMode) ? implode(', ', $authenticationMode) : var_export($authenticationMode, true), implode(', ', \EnumType\SectorAuthentication::getValidValues())), __LINE__);
        }
        $this->AuthenticationMode = $authenticationMode;
        
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
     * @return \StructType\MifareProfileSaveData
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
     * @return \StructType\MifareProfileSaveData
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
     * Get ProfileType value
     * @return string|null
     */
    public function getProfileType(): ?string
    {
        return $this->ProfileType;
    }
    /**
     * Set ProfileType value
     * @uses \EnumType\ProfileType::valueIsValid()
     * @uses \EnumType\ProfileType::getValidValues()
     * @throws InvalidArgumentException
     * @param string $profileType
     * @return \StructType\MifareProfileSaveData
     */
    public function setProfileType(?string $profileType = null): self
    {
        // validation for constraint: enumeration
        if (!\EnumType\ProfileType::valueIsValid($profileType)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \EnumType\ProfileType', is_array($profileType) ? implode(', ', $profileType) : var_export($profileType, true), implode(', ', \EnumType\ProfileType::getValidValues())), __LINE__);
        }
        $this->ProfileType = $profileType;
        
        return $this;
    }
    /**
     * Get SectorNumber value
     * @return int|null
     */
    public function getSectorNumber(): ?int
    {
        return $this->SectorNumber;
    }
    /**
     * Set SectorNumber value
     * @param int $sectorNumber
     * @return \StructType\MifareProfileSaveData
     */
    public function setSectorNumber(?int $sectorNumber = null): self
    {
        // validation for constraint: int
        if (!is_null($sectorNumber) && !(is_int($sectorNumber) || ctype_digit($sectorNumber))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($sectorNumber, true), gettype($sectorNumber)), __LINE__);
        }
        $this->SectorNumber = $sectorNumber;
        
        return $this;
    }
}
