<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for CardTypesInfoData StructType
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:CardTypesInfoData
 * @subpackage Structs
 */
class CardTypesInfoData extends AbstractStructBase
{
    /**
     * The CardTypes
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \ArrayType\ArrayOfCardTypeInfo|null
     */
    protected ?\ArrayType\ArrayOfCardTypeInfo $CardTypes = null;
    /**
     * The Count
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var int|null
     */
    protected ?int $Count = null;
    /**
     * Constructor method for CardTypesInfoData
     * @uses CardTypesInfoData::setCardTypes()
     * @uses CardTypesInfoData::setCount()
     * @param \ArrayType\ArrayOfCardTypeInfo $cardTypes
     * @param int $count
     */
    public function __construct(?\ArrayType\ArrayOfCardTypeInfo $cardTypes = null, ?int $count = null)
    {
        $this
            ->setCardTypes($cardTypes)
            ->setCount($count);
    }
    /**
     * Get CardTypes value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \ArrayType\ArrayOfCardTypeInfo|null
     */
    public function getCardTypes(): ?\ArrayType\ArrayOfCardTypeInfo
    {
        return isset($this->CardTypes) ? $this->CardTypes : null;
    }
    /**
     * Set CardTypes value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \ArrayType\ArrayOfCardTypeInfo $cardTypes
     * @return \StructType\CardTypesInfoData
     */
    public function setCardTypes(?\ArrayType\ArrayOfCardTypeInfo $cardTypes = null): self
    {
        if (is_null($cardTypes) || (is_array($cardTypes) && empty($cardTypes))) {
            unset($this->CardTypes);
        } else {
            $this->CardTypes = $cardTypes;
        }
        
        return $this;
    }
    /**
     * Get Count value
     * @return int|null
     */
    public function getCount(): ?int
    {
        return $this->Count;
    }
    /**
     * Set Count value
     * @param int $count
     * @return \StructType\CardTypesInfoData
     */
    public function setCount(?int $count = null): self
    {
        // validation for constraint: int
        if (!is_null($count) && !(is_int($count) || ctype_digit($count))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($count, true), gettype($count)), __LINE__);
        }
        $this->Count = $count;
        
        return $this;
    }
}
