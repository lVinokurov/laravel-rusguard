<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for AcsConfiguratorSaveData StructType
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:AcsConfiguratorSaveData
 * @subpackage Structs
 */
class AcsConfiguratorSaveData extends AbstractStructBase
{
    /**
     * The DriverLicensePhoto
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \StructType\PhotoOrder|null
     */
    protected ?\StructType\PhotoOrder $DriverLicensePhoto = null;
    /**
     * The ForeignPassportPhoto
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \StructType\PhotoOrder|null
     */
    protected ?\StructType\PhotoOrder $ForeignPassportPhoto = null;
    /**
     * The IsShowPinCode
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var bool|null
     */
    protected ?bool $IsShowPinCode = null;
    /**
     * The PassportPhoto
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \StructType\PhotoOrder|null
     */
    protected ?\StructType\PhotoOrder $PassportPhoto = null;
    /**
     * The UseDefaultFIODocumentType
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $UseDefaultFIODocumentType = null;
    /**
     * Constructor method for AcsConfiguratorSaveData
     * @uses AcsConfiguratorSaveData::setDriverLicensePhoto()
     * @uses AcsConfiguratorSaveData::setForeignPassportPhoto()
     * @uses AcsConfiguratorSaveData::setIsShowPinCode()
     * @uses AcsConfiguratorSaveData::setPassportPhoto()
     * @uses AcsConfiguratorSaveData::setUseDefaultFIODocumentType()
     * @param \StructType\PhotoOrder $driverLicensePhoto
     * @param \StructType\PhotoOrder $foreignPassportPhoto
     * @param bool $isShowPinCode
     * @param \StructType\PhotoOrder $passportPhoto
     * @param string $useDefaultFIODocumentType
     */
    public function __construct(?\StructType\PhotoOrder $driverLicensePhoto = null, ?\StructType\PhotoOrder $foreignPassportPhoto = null, ?bool $isShowPinCode = null, ?\StructType\PhotoOrder $passportPhoto = null, ?string $useDefaultFIODocumentType = null)
    {
        $this
            ->setDriverLicensePhoto($driverLicensePhoto)
            ->setForeignPassportPhoto($foreignPassportPhoto)
            ->setIsShowPinCode($isShowPinCode)
            ->setPassportPhoto($passportPhoto)
            ->setUseDefaultFIODocumentType($useDefaultFIODocumentType);
    }
    /**
     * Get DriverLicensePhoto value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \StructType\PhotoOrder|null
     */
    public function getDriverLicensePhoto(): ?\StructType\PhotoOrder
    {
        return isset($this->DriverLicensePhoto) ? $this->DriverLicensePhoto : null;
    }
    /**
     * Set DriverLicensePhoto value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \StructType\PhotoOrder $driverLicensePhoto
     * @return \StructType\AcsConfiguratorSaveData
     */
    public function setDriverLicensePhoto(?\StructType\PhotoOrder $driverLicensePhoto = null): self
    {
        if (is_null($driverLicensePhoto) || (is_array($driverLicensePhoto) && empty($driverLicensePhoto))) {
            unset($this->DriverLicensePhoto);
        } else {
            $this->DriverLicensePhoto = $driverLicensePhoto;
        }
        
        return $this;
    }
    /**
     * Get ForeignPassportPhoto value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \StructType\PhotoOrder|null
     */
    public function getForeignPassportPhoto(): ?\StructType\PhotoOrder
    {
        return isset($this->ForeignPassportPhoto) ? $this->ForeignPassportPhoto : null;
    }
    /**
     * Set ForeignPassportPhoto value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \StructType\PhotoOrder $foreignPassportPhoto
     * @return \StructType\AcsConfiguratorSaveData
     */
    public function setForeignPassportPhoto(?\StructType\PhotoOrder $foreignPassportPhoto = null): self
    {
        if (is_null($foreignPassportPhoto) || (is_array($foreignPassportPhoto) && empty($foreignPassportPhoto))) {
            unset($this->ForeignPassportPhoto);
        } else {
            $this->ForeignPassportPhoto = $foreignPassportPhoto;
        }
        
        return $this;
    }
    /**
     * Get IsShowPinCode value
     * @return bool|null
     */
    public function getIsShowPinCode(): ?bool
    {
        return $this->IsShowPinCode;
    }
    /**
     * Set IsShowPinCode value
     * @param bool $isShowPinCode
     * @return \StructType\AcsConfiguratorSaveData
     */
    public function setIsShowPinCode(?bool $isShowPinCode = null): self
    {
        // validation for constraint: boolean
        if (!is_null($isShowPinCode) && !is_bool($isShowPinCode)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($isShowPinCode, true), gettype($isShowPinCode)), __LINE__);
        }
        $this->IsShowPinCode = $isShowPinCode;
        
        return $this;
    }
    /**
     * Get PassportPhoto value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \StructType\PhotoOrder|null
     */
    public function getPassportPhoto(): ?\StructType\PhotoOrder
    {
        return isset($this->PassportPhoto) ? $this->PassportPhoto : null;
    }
    /**
     * Set PassportPhoto value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \StructType\PhotoOrder $passportPhoto
     * @return \StructType\AcsConfiguratorSaveData
     */
    public function setPassportPhoto(?\StructType\PhotoOrder $passportPhoto = null): self
    {
        if (is_null($passportPhoto) || (is_array($passportPhoto) && empty($passportPhoto))) {
            unset($this->PassportPhoto);
        } else {
            $this->PassportPhoto = $passportPhoto;
        }
        
        return $this;
    }
    /**
     * Get UseDefaultFIODocumentType value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getUseDefaultFIODocumentType(): ?string
    {
        return isset($this->UseDefaultFIODocumentType) ? $this->UseDefaultFIODocumentType : null;
    }
    /**
     * Set UseDefaultFIODocumentType value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @uses \EnumType\DocumentType::valueIsValid()
     * @uses \EnumType\DocumentType::getValidValues()
     * @throws InvalidArgumentException
     * @param string $useDefaultFIODocumentType
     * @return \StructType\AcsConfiguratorSaveData
     */
    public function setUseDefaultFIODocumentType(?string $useDefaultFIODocumentType = null): self
    {
        // validation for constraint: enumeration
        if (!\EnumType\DocumentType::valueIsValid($useDefaultFIODocumentType)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \EnumType\DocumentType', is_array($useDefaultFIODocumentType) ? implode(', ', $useDefaultFIODocumentType) : var_export($useDefaultFIODocumentType, true), implode(', ', \EnumType\DocumentType::getValidValues())), __LINE__);
        }
        if (is_null($useDefaultFIODocumentType) || (is_array($useDefaultFIODocumentType) && empty($useDefaultFIODocumentType))) {
            unset($this->UseDefaultFIODocumentType);
        } else {
            $this->UseDefaultFIODocumentType = $useDefaultFIODocumentType;
        }
        
        return $this;
    }
}
