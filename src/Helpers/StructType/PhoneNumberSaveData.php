<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for PhoneNumberSaveData StructType
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:PhoneNumberSaveData
 * @subpackage Structs
 */
class PhoneNumberSaveData extends AbstractStructBase
{
    /**
     * The CityCode
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $CityCode = null;
    /**
     * The CountryCode
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $CountryCode = null;
    /**
     * The Description
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $Description = null;
    /**
     * The PhoneNumber
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $PhoneNumber = null;
    /**
     * The PhoneOrder
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var int|null
     */
    protected ?int $PhoneOrder = null;
    /**
     * Constructor method for PhoneNumberSaveData
     * @uses PhoneNumberSaveData::setCityCode()
     * @uses PhoneNumberSaveData::setCountryCode()
     * @uses PhoneNumberSaveData::setDescription()
     * @uses PhoneNumberSaveData::setPhoneNumber()
     * @uses PhoneNumberSaveData::setPhoneOrder()
     * @param string $cityCode
     * @param string $countryCode
     * @param string $description
     * @param string $phoneNumber
     * @param int $phoneOrder
     */
    public function __construct(?string $cityCode = null, ?string $countryCode = null, ?string $description = null, ?string $phoneNumber = null, ?int $phoneOrder = null)
    {
        $this
            ->setCityCode($cityCode)
            ->setCountryCode($countryCode)
            ->setDescription($description)
            ->setPhoneNumber($phoneNumber)
            ->setPhoneOrder($phoneOrder);
    }
    /**
     * Get CityCode value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getCityCode(): ?string
    {
        return isset($this->CityCode) ? $this->CityCode : null;
    }
    /**
     * Set CityCode value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $cityCode
     * @return \StructType\PhoneNumberSaveData
     */
    public function setCityCode(?string $cityCode = null): self
    {
        // validation for constraint: string
        if (!is_null($cityCode) && !is_string($cityCode)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($cityCode, true), gettype($cityCode)), __LINE__);
        }
        if (is_null($cityCode) || (is_array($cityCode) && empty($cityCode))) {
            unset($this->CityCode);
        } else {
            $this->CityCode = $cityCode;
        }
        
        return $this;
    }
    /**
     * Get CountryCode value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getCountryCode(): ?string
    {
        return isset($this->CountryCode) ? $this->CountryCode : null;
    }
    /**
     * Set CountryCode value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $countryCode
     * @return \StructType\PhoneNumberSaveData
     */
    public function setCountryCode(?string $countryCode = null): self
    {
        // validation for constraint: string
        if (!is_null($countryCode) && !is_string($countryCode)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($countryCode, true), gettype($countryCode)), __LINE__);
        }
        if (is_null($countryCode) || (is_array($countryCode) && empty($countryCode))) {
            unset($this->CountryCode);
        } else {
            $this->CountryCode = $countryCode;
        }
        
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
     * @return \StructType\PhoneNumberSaveData
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
     * Get PhoneNumber value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getPhoneNumber(): ?string
    {
        return isset($this->PhoneNumber) ? $this->PhoneNumber : null;
    }
    /**
     * Set PhoneNumber value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $phoneNumber
     * @return \StructType\PhoneNumberSaveData
     */
    public function setPhoneNumber(?string $phoneNumber = null): self
    {
        // validation for constraint: string
        if (!is_null($phoneNumber) && !is_string($phoneNumber)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($phoneNumber, true), gettype($phoneNumber)), __LINE__);
        }
        if (is_null($phoneNumber) || (is_array($phoneNumber) && empty($phoneNumber))) {
            unset($this->PhoneNumber);
        } else {
            $this->PhoneNumber = $phoneNumber;
        }
        
        return $this;
    }
    /**
     * Get PhoneOrder value
     * @return int|null
     */
    public function getPhoneOrder(): ?int
    {
        return $this->PhoneOrder;
    }
    /**
     * Set PhoneOrder value
     * @param int $phoneOrder
     * @return \StructType\PhoneNumberSaveData
     */
    public function setPhoneOrder(?int $phoneOrder = null): self
    {
        // validation for constraint: int
        if (!is_null($phoneOrder) && !(is_int($phoneOrder) || ctype_digit($phoneOrder))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($phoneOrder, true), gettype($phoneOrder)), __LINE__);
        }
        $this->PhoneOrder = $phoneOrder;
        
        return $this;
    }
}
