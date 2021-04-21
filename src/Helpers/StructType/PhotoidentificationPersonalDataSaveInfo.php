<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for PhotoidentificationPersonalDataSaveInfo StructType
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:PhotoidentificationPersonalDataSaveInfo
 * @subpackage Structs
 */
class PhotoidentificationPersonalDataSaveInfo extends AbstractStructBase
{
    /**
     * The AdditionalFieldId
     * Meta information extracted from the WSDL
     * - base: xs:string
     * - minOccurs: 0
     * - nillable: true
     * - pattern: [\da-fA-F]{8}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{12}
     * - type: tns:guid
     * @var string|null
     */
    protected ?string $AdditionalFieldId = null;
    /**
     * The AdditionalFieldName
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $AdditionalFieldName = null;
    /**
     * The FieldName
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $FieldName = null;
    /**
     * The Order
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var int|null
     */
    protected ?int $Order = null;
    /**
     * Constructor method for PhotoidentificationPersonalDataSaveInfo
     * @uses PhotoidentificationPersonalDataSaveInfo::setAdditionalFieldId()
     * @uses PhotoidentificationPersonalDataSaveInfo::setAdditionalFieldName()
     * @uses PhotoidentificationPersonalDataSaveInfo::setFieldName()
     * @uses PhotoidentificationPersonalDataSaveInfo::setOrder()
     * @param string $additionalFieldId
     * @param string $additionalFieldName
     * @param string $fieldName
     * @param int $order
     */
    public function __construct(?string $additionalFieldId = null, ?string $additionalFieldName = null, ?string $fieldName = null, ?int $order = null)
    {
        $this
            ->setAdditionalFieldId($additionalFieldId)
            ->setAdditionalFieldName($additionalFieldName)
            ->setFieldName($fieldName)
            ->setOrder($order);
    }
    /**
     * Get AdditionalFieldId value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getAdditionalFieldId(): ?string
    {
        return isset($this->AdditionalFieldId) ? $this->AdditionalFieldId : null;
    }
    /**
     * Set AdditionalFieldId value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $additionalFieldId
     * @return \StructType\PhotoidentificationPersonalDataSaveInfo
     */
    public function setAdditionalFieldId(?string $additionalFieldId = null): self
    {
        // validation for constraint: string
        if (!is_null($additionalFieldId) && !is_string($additionalFieldId)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($additionalFieldId, true), gettype($additionalFieldId)), __LINE__);
        }
        // validation for constraint: pattern([\da-fA-F]{8}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{12})
        if (!is_null($additionalFieldId) && !preg_match('/[\\da-fA-F]{8}-[\\da-fA-F]{4}-[\\da-fA-F]{4}-[\\da-fA-F]{4}-[\\da-fA-F]{12}/', $additionalFieldId)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a literal that is among the set of character sequences denoted by the regular expression /[\\da-fA-F]{8}-[\\da-fA-F]{4}-[\\da-fA-F]{4}-[\\da-fA-F]{4}-[\\da-fA-F]{12}/', var_export($additionalFieldId, true)), __LINE__);
        }
        if (is_null($additionalFieldId) || (is_array($additionalFieldId) && empty($additionalFieldId))) {
            unset($this->AdditionalFieldId);
        } else {
            $this->AdditionalFieldId = $additionalFieldId;
        }
        
        return $this;
    }
    /**
     * Get AdditionalFieldName value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getAdditionalFieldName(): ?string
    {
        return isset($this->AdditionalFieldName) ? $this->AdditionalFieldName : null;
    }
    /**
     * Set AdditionalFieldName value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $additionalFieldName
     * @return \StructType\PhotoidentificationPersonalDataSaveInfo
     */
    public function setAdditionalFieldName(?string $additionalFieldName = null): self
    {
        // validation for constraint: string
        if (!is_null($additionalFieldName) && !is_string($additionalFieldName)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($additionalFieldName, true), gettype($additionalFieldName)), __LINE__);
        }
        if (is_null($additionalFieldName) || (is_array($additionalFieldName) && empty($additionalFieldName))) {
            unset($this->AdditionalFieldName);
        } else {
            $this->AdditionalFieldName = $additionalFieldName;
        }
        
        return $this;
    }
    /**
     * Get FieldName value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getFieldName(): ?string
    {
        return isset($this->FieldName) ? $this->FieldName : null;
    }
    /**
     * Set FieldName value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $fieldName
     * @return \StructType\PhotoidentificationPersonalDataSaveInfo
     */
    public function setFieldName(?string $fieldName = null): self
    {
        // validation for constraint: string
        if (!is_null($fieldName) && !is_string($fieldName)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($fieldName, true), gettype($fieldName)), __LINE__);
        }
        if (is_null($fieldName) || (is_array($fieldName) && empty($fieldName))) {
            unset($this->FieldName);
        } else {
            $this->FieldName = $fieldName;
        }
        
        return $this;
    }
    /**
     * Get Order value
     * @return int|null
     */
    public function getOrder(): ?int
    {
        return $this->Order;
    }
    /**
     * Set Order value
     * @param int $order
     * @return \StructType\PhotoidentificationPersonalDataSaveInfo
     */
    public function setOrder(?int $order = null): self
    {
        // validation for constraint: int
        if (!is_null($order) && !(is_int($order) || ctype_digit($order))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($order, true), gettype($order)), __LINE__);
        }
        $this->Order = $order;
        
        return $this;
    }
}
