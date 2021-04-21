<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for CellContentFotoIdentificationInfo StructType
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:CellContentFotoIdentificationInfo
 * @subpackage Structs
 */
class CellContentFotoIdentificationInfo extends CellContentFotoIdentificationSaveData
{
    /**
     * The AccessPointDriverName
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $AccessPointDriverName = null;
    /**
     * The AcsAccessPointType
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $AcsAccessPointType = null;
    /**
     * The CellId
     * Meta information extracted from the WSDL
     * - base: xs:string
     * - minOccurs: 0
     * - nillable: true
     * - pattern: [\da-fA-F]{8}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{12}
     * - type: tns:guid
     * @var string|null
     */
    protected ?string $CellId = null;
    /**
     * The ColorField
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $ColorField = null;
    /**
     * The ColorFieldName
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $ColorFieldName = null;
    /**
     * The PhotoNumber
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var int|null
     */
    protected ?int $PhotoNumber = null;
    /**
     * Constructor method for CellContentFotoIdentificationInfo
     * @uses CellContentFotoIdentificationInfo::setAccessPointDriverName()
     * @uses CellContentFotoIdentificationInfo::setAcsAccessPointType()
     * @uses CellContentFotoIdentificationInfo::setCellId()
     * @uses CellContentFotoIdentificationInfo::setColorField()
     * @uses CellContentFotoIdentificationInfo::setColorFieldName()
     * @uses CellContentFotoIdentificationInfo::setPhotoNumber()
     * @param string $accessPointDriverName
     * @param string $acsAccessPointType
     * @param string $cellId
     * @param string $colorField
     * @param string $colorFieldName
     * @param int $photoNumber
     */
    public function __construct(?string $accessPointDriverName = null, ?string $acsAccessPointType = null, ?string $cellId = null, ?string $colorField = null, ?string $colorFieldName = null, ?int $photoNumber = null)
    {
        $this
            ->setAccessPointDriverName($accessPointDriverName)
            ->setAcsAccessPointType($acsAccessPointType)
            ->setCellId($cellId)
            ->setColorField($colorField)
            ->setColorFieldName($colorFieldName)
            ->setPhotoNumber($photoNumber);
    }
    /**
     * Get AccessPointDriverName value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getAccessPointDriverName(): ?string
    {
        return isset($this->AccessPointDriverName) ? $this->AccessPointDriverName : null;
    }
    /**
     * Set AccessPointDriverName value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $accessPointDriverName
     * @return \StructType\CellContentFotoIdentificationInfo
     */
    public function setAccessPointDriverName(?string $accessPointDriverName = null): self
    {
        // validation for constraint: string
        if (!is_null($accessPointDriverName) && !is_string($accessPointDriverName)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($accessPointDriverName, true), gettype($accessPointDriverName)), __LINE__);
        }
        if (is_null($accessPointDriverName) || (is_array($accessPointDriverName) && empty($accessPointDriverName))) {
            unset($this->AccessPointDriverName);
        } else {
            $this->AccessPointDriverName = $accessPointDriverName;
        }
        
        return $this;
    }
    /**
     * Get AcsAccessPointType value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getAcsAccessPointType(): ?string
    {
        return isset($this->AcsAccessPointType) ? $this->AcsAccessPointType : null;
    }
    /**
     * Set AcsAccessPointType value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @uses \EnumType\AcsAccessPointType::valueIsValid()
     * @uses \EnumType\AcsAccessPointType::getValidValues()
     * @throws InvalidArgumentException
     * @param string $acsAccessPointType
     * @return \StructType\CellContentFotoIdentificationInfo
     */
    public function setAcsAccessPointType(?string $acsAccessPointType = null): self
    {
        // validation for constraint: enumeration
        if (!\EnumType\AcsAccessPointType::valueIsValid($acsAccessPointType)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \EnumType\AcsAccessPointType', is_array($acsAccessPointType) ? implode(', ', $acsAccessPointType) : var_export($acsAccessPointType, true), implode(', ', \EnumType\AcsAccessPointType::getValidValues())), __LINE__);
        }
        if (is_null($acsAccessPointType) || (is_array($acsAccessPointType) && empty($acsAccessPointType))) {
            unset($this->AcsAccessPointType);
        } else {
            $this->AcsAccessPointType = $acsAccessPointType;
        }
        
        return $this;
    }
    /**
     * Get CellId value
     * @return string|null
     */
    public function getCellId(): ?string
    {
        return $this->CellId;
    }
    /**
     * Set CellId value
     * @param string $cellId
     * @return \StructType\CellContentFotoIdentificationInfo
     */
    public function setCellId(?string $cellId = null): self
    {
        // validation for constraint: string
        if (!is_null($cellId) && !is_string($cellId)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($cellId, true), gettype($cellId)), __LINE__);
        }
        // validation for constraint: pattern([\da-fA-F]{8}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{12})
        if (!is_null($cellId) && !preg_match('/[\\da-fA-F]{8}-[\\da-fA-F]{4}-[\\da-fA-F]{4}-[\\da-fA-F]{4}-[\\da-fA-F]{12}/', $cellId)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a literal that is among the set of character sequences denoted by the regular expression /[\\da-fA-F]{8}-[\\da-fA-F]{4}-[\\da-fA-F]{4}-[\\da-fA-F]{4}-[\\da-fA-F]{12}/', var_export($cellId, true)), __LINE__);
        }
        $this->CellId = $cellId;
        
        return $this;
    }
    /**
     * Get ColorField value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getColorField(): ?string
    {
        return isset($this->ColorField) ? $this->ColorField : null;
    }
    /**
     * Set ColorField value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $colorField
     * @return \StructType\CellContentFotoIdentificationInfo
     */
    public function setColorField(?string $colorField = null): self
    {
        // validation for constraint: string
        if (!is_null($colorField) && !is_string($colorField)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($colorField, true), gettype($colorField)), __LINE__);
        }
        if (is_null($colorField) || (is_array($colorField) && empty($colorField))) {
            unset($this->ColorField);
        } else {
            $this->ColorField = $colorField;
        }
        
        return $this;
    }
    /**
     * Get ColorFieldName value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getColorFieldName(): ?string
    {
        return isset($this->ColorFieldName) ? $this->ColorFieldName : null;
    }
    /**
     * Set ColorFieldName value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $colorFieldName
     * @return \StructType\CellContentFotoIdentificationInfo
     */
    public function setColorFieldName(?string $colorFieldName = null): self
    {
        // validation for constraint: string
        if (!is_null($colorFieldName) && !is_string($colorFieldName)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($colorFieldName, true), gettype($colorFieldName)), __LINE__);
        }
        if (is_null($colorFieldName) || (is_array($colorFieldName) && empty($colorFieldName))) {
            unset($this->ColorFieldName);
        } else {
            $this->ColorFieldName = $colorFieldName;
        }
        
        return $this;
    }
    /**
     * Get PhotoNumber value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return int|null
     */
    public function getPhotoNumber(): ?int
    {
        return isset($this->PhotoNumber) ? $this->PhotoNumber : null;
    }
    /**
     * Set PhotoNumber value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param int $photoNumber
     * @return \StructType\CellContentFotoIdentificationInfo
     */
    public function setPhotoNumber(?int $photoNumber = null): self
    {
        // validation for constraint: int
        if (!is_null($photoNumber) && !(is_int($photoNumber) || ctype_digit($photoNumber))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($photoNumber, true), gettype($photoNumber)), __LINE__);
        }
        if (is_null($photoNumber) || (is_array($photoNumber) && empty($photoNumber))) {
            unset($this->PhotoNumber);
        } else {
            $this->PhotoNumber = $photoNumber;
        }
        
        return $this;
    }
}
