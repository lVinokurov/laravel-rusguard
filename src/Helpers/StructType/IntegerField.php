<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for IntegerField StructType
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:IntegerField
 * @subpackage Structs
 */
class IntegerField extends AdditionalFieldBase
{
    /**
     * The DefaultValue
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var int|null
     */
    protected ?int $DefaultValue = null;
    /**
     * Constructor method for IntegerField
     * @uses IntegerField::setDefaultValue()
     * @param int $defaultValue
     */
    public function __construct(?int $defaultValue = null)
    {
        $this
            ->setDefaultValue($defaultValue);
    }
    /**
     * Get DefaultValue value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return int|null
     */
    public function getDefaultValue(): ?int
    {
        return isset($this->DefaultValue) ? $this->DefaultValue : null;
    }
    /**
     * Set DefaultValue value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param int $defaultValue
     * @return \StructType\IntegerField
     */
    public function setDefaultValue(?int $defaultValue = null): self
    {
        // validation for constraint: int
        if (!is_null($defaultValue) && !(is_int($defaultValue) || ctype_digit($defaultValue))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($defaultValue, true), gettype($defaultValue)), __LINE__);
        }
        if (is_null($defaultValue) || (is_array($defaultValue) && empty($defaultValue))) {
            unset($this->DefaultValue);
        } else {
            $this->DefaultValue = $defaultValue;
        }
        
        return $this;
    }
}
