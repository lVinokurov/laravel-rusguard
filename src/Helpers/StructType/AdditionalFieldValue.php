<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for AdditionalFieldValue StructType
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:AdditionalFieldValue
 * @subpackage Structs
 */
class AdditionalFieldValue extends AbstractStructBase
{
    /**
     * The AdditionalFieldInfo
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \StructType\AdditionalFieldBase|null
     */
    protected ?\StructType\AdditionalFieldBase $AdditionalFieldInfo = null;
    /**
     * The OwnerValue
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \StructType\OwnerValueBase|null
     */
    protected ?\StructType\OwnerValueBase $OwnerValue = null;
    /**
     * Constructor method for AdditionalFieldValue
     * @uses AdditionalFieldValue::setAdditionalFieldInfo()
     * @uses AdditionalFieldValue::setOwnerValue()
     * @param \StructType\AdditionalFieldBase $additionalFieldInfo
     * @param \StructType\OwnerValueBase $ownerValue
     */
    public function __construct(?\StructType\AdditionalFieldBase $additionalFieldInfo = null, ?\StructType\OwnerValueBase $ownerValue = null)
    {
        $this
            ->setAdditionalFieldInfo($additionalFieldInfo)
            ->setOwnerValue($ownerValue);
    }
    /**
     * Get AdditionalFieldInfo value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \StructType\AdditionalFieldBase|null
     */
    public function getAdditionalFieldInfo(): ?\StructType\AdditionalFieldBase
    {
        return isset($this->AdditionalFieldInfo) ? $this->AdditionalFieldInfo : null;
    }
    /**
     * Set AdditionalFieldInfo value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \StructType\AdditionalFieldBase $additionalFieldInfo
     * @return \StructType\AdditionalFieldValue
     */
    public function setAdditionalFieldInfo(?\StructType\AdditionalFieldBase $additionalFieldInfo = null): self
    {
        if (is_null($additionalFieldInfo) || (is_array($additionalFieldInfo) && empty($additionalFieldInfo))) {
            unset($this->AdditionalFieldInfo);
        } else {
            $this->AdditionalFieldInfo = $additionalFieldInfo;
        }
        
        return $this;
    }
    /**
     * Get OwnerValue value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \StructType\OwnerValueBase|null
     */
    public function getOwnerValue(): ?\StructType\OwnerValueBase
    {
        return isset($this->OwnerValue) ? $this->OwnerValue : null;
    }
    /**
     * Set OwnerValue value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \StructType\OwnerValueBase $ownerValue
     * @return \StructType\AdditionalFieldValue
     */
    public function setOwnerValue(?\StructType\OwnerValueBase $ownerValue = null): self
    {
        if (is_null($ownerValue) || (is_array($ownerValue) && empty($ownerValue))) {
            unset($this->OwnerValue);
        } else {
            $this->OwnerValue = $ownerValue;
        }
        
        return $this;
    }
}
