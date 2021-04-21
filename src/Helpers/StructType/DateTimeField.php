<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for DateTimeField StructType
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:DateTimeField
 * @subpackage Structs
 */
class DateTimeField extends AdditionalFieldBase
{
    /**
     * The DefaultValue
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $DefaultValue = null;
    /**
     * The Format
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $Format = null;
    /**
     * The IsCurrent
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var bool|null
     */
    protected ?bool $IsCurrent = null;
    /**
     * Constructor method for DateTimeField
     * @uses DateTimeField::setDefaultValue()
     * @uses DateTimeField::setFormat()
     * @uses DateTimeField::setIsCurrent()
     * @param string $defaultValue
     * @param string $format
     * @param bool $isCurrent
     */
    public function __construct(?string $defaultValue = null, ?string $format = null, ?bool $isCurrent = null)
    {
        $this
            ->setDefaultValue($defaultValue)
            ->setFormat($format)
            ->setIsCurrent($isCurrent);
    }
    /**
     * Get DefaultValue value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getDefaultValue(): ?string
    {
        return isset($this->DefaultValue) ? $this->DefaultValue : null;
    }
    /**
     * Set DefaultValue value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $defaultValue
     * @return \StructType\DateTimeField
     */
    public function setDefaultValue(?string $defaultValue = null): self
    {
        // validation for constraint: string
        if (!is_null($defaultValue) && !is_string($defaultValue)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($defaultValue, true), gettype($defaultValue)), __LINE__);
        }
        if (is_null($defaultValue) || (is_array($defaultValue) && empty($defaultValue))) {
            unset($this->DefaultValue);
        } else {
            $this->DefaultValue = $defaultValue;
        }
        
        return $this;
    }
    /**
     * Get Format value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getFormat(): ?string
    {
        return isset($this->Format) ? $this->Format : null;
    }
    /**
     * Set Format value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $format
     * @return \StructType\DateTimeField
     */
    public function setFormat(?string $format = null): self
    {
        // validation for constraint: string
        if (!is_null($format) && !is_string($format)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($format, true), gettype($format)), __LINE__);
        }
        if (is_null($format) || (is_array($format) && empty($format))) {
            unset($this->Format);
        } else {
            $this->Format = $format;
        }
        
        return $this;
    }
    /**
     * Get IsCurrent value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return bool|null
     */
    public function getIsCurrent(): ?bool
    {
        return isset($this->IsCurrent) ? $this->IsCurrent : null;
    }
    /**
     * Set IsCurrent value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param bool $isCurrent
     * @return \StructType\DateTimeField
     */
    public function setIsCurrent(?bool $isCurrent = null): self
    {
        // validation for constraint: boolean
        if (!is_null($isCurrent) && !is_bool($isCurrent)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($isCurrent, true), gettype($isCurrent)), __LINE__);
        }
        if (is_null($isCurrent) || (is_array($isCurrent) && empty($isCurrent))) {
            unset($this->IsCurrent);
        } else {
            $this->IsCurrent = $isCurrent;
        }
        
        return $this;
    }
}
