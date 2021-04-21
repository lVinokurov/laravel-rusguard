<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for DoubleField StructType
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:DoubleField
 * @subpackage Structs
 */
class DoubleField extends AdditionalFieldBase
{
    /**
     * The DefaultValue
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var float|null
     */
    protected ?float $DefaultValue = null;
    /**
     * Constructor method for DoubleField
     * @uses DoubleField::setDefaultValue()
     * @param float $defaultValue
     */
    public function __construct(?float $defaultValue = null)
    {
        $this
            ->setDefaultValue($defaultValue);
    }
    /**
     * Get DefaultValue value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return float|null
     */
    public function getDefaultValue(): ?float
    {
        return isset($this->DefaultValue) ? $this->DefaultValue : null;
    }
    /**
     * Set DefaultValue value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param float $defaultValue
     * @return \StructType\DoubleField
     */
    public function setDefaultValue(?float $defaultValue = null): self
    {
        // validation for constraint: float
        if (!is_null($defaultValue) && !(is_float($defaultValue) || is_numeric($defaultValue))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($defaultValue, true), gettype($defaultValue)), __LINE__);
        }
        if (is_null($defaultValue) || (is_array($defaultValue) && empty($defaultValue))) {
            unset($this->DefaultValue);
        } else {
            $this->DefaultValue = $defaultValue;
        }
        
        return $this;
    }
}
