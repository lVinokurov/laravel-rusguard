<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ISS_Driver_SlimInfo StructType
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:ISS_Driver_SlimInfo
 * @subpackage Structs
 */
class ISS_Driver_SlimInfo extends ISS_Driver_SaveData
{
    /**
     * The AccessPointType
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $AccessPointType = null;
    /**
     * The ISS_DriverID
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var int|null
     */
    protected ?int $ISS_DriverID = null;
    /**
     * The Name
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $Name = null;
    /**
     * Constructor method for ISS_Driver_SlimInfo
     * @uses ISS_Driver_SlimInfo::setAccessPointType()
     * @uses ISS_Driver_SlimInfo::setISS_DriverID()
     * @uses ISS_Driver_SlimInfo::setName()
     * @param string $accessPointType
     * @param int $iSS_DriverID
     * @param string $name
     */
    public function __construct(?string $accessPointType = null, ?int $iSS_DriverID = null, ?string $name = null)
    {
        $this
            ->setAccessPointType($accessPointType)
            ->setISS_DriverID($iSS_DriverID)
            ->setName($name);
    }
    /**
     * Get AccessPointType value
     * @return string|null
     */
    public function getAccessPointType(): ?string
    {
        return $this->AccessPointType;
    }
    /**
     * Set AccessPointType value
     * @uses \EnumType\AcsAccessPointType::valueIsValid()
     * @uses \EnumType\AcsAccessPointType::getValidValues()
     * @throws InvalidArgumentException
     * @param string $accessPointType
     * @return \StructType\ISS_Driver_SlimInfo
     */
    public function setAccessPointType(?string $accessPointType = null): self
    {
        // validation for constraint: enumeration
        if (!\EnumType\AcsAccessPointType::valueIsValid($accessPointType)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \EnumType\AcsAccessPointType', is_array($accessPointType) ? implode(', ', $accessPointType) : var_export($accessPointType, true), implode(', ', \EnumType\AcsAccessPointType::getValidValues())), __LINE__);
        }
        $this->AccessPointType = $accessPointType;
        
        return $this;
    }
    /**
     * Get ISS_DriverID value
     * @return int|null
     */
    public function getISS_DriverID(): ?int
    {
        return $this->ISS_DriverID;
    }
    /**
     * Set ISS_DriverID value
     * @param int $iSS_DriverID
     * @return \StructType\ISS_Driver_SlimInfo
     */
    public function setISS_DriverID(?int $iSS_DriverID = null): self
    {
        // validation for constraint: int
        if (!is_null($iSS_DriverID) && !(is_int($iSS_DriverID) || ctype_digit($iSS_DriverID))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($iSS_DriverID, true), gettype($iSS_DriverID)), __LINE__);
        }
        $this->ISS_DriverID = $iSS_DriverID;
        
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
     * @return \StructType\ISS_Driver_SlimInfo
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
}
