<?php

declare(strict_types=1);

namespace ArrayType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfGetControllerConfigurationsResult.FailedConfig
 * ArrayType
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:ArrayOfGetControllerConfigurationsResult.FailedConfig
 * @subpackage Arrays
 */
class ArrayOfGetControllerConfigurationsResult_FailedConfig extends AbstractStructArrayBase
{
    /**
     * The GetControllerConfigurationsResult_FailedConfig
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: true
     * @var \StructType\GetControllerConfigurationsResult_FailedConfig[]
     */
    protected array $GetControllerConfigurationsResult_FailedConfig = [];
    /**
     * Constructor method for ArrayOfGetControllerConfigurationsResult.FailedConfig
     * @uses ArrayOfGetControllerConfigurationsResult_FailedConfig::setGetControllerConfigurationsResult_FailedConfig()
     * @param \StructType\GetControllerConfigurationsResult_FailedConfig[] $getControllerConfigurationsResult_FailedConfig
     */
    public function __construct(array $getControllerConfigurationsResult_FailedConfig = [])
    {
        $this
            ->setGetControllerConfigurationsResult_FailedConfig($getControllerConfigurationsResult_FailedConfig);
    }
    /**
     * Get GetControllerConfigurationsResult_FailedConfig value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \StructType\GetControllerConfigurationsResult_FailedConfig[]
     */
    public function getGetControllerConfigurationsResult_FailedConfig(): ?array
    {
        return isset($this->{'GetControllerConfigurationsResult.FailedConfig'}) ? $this->{'GetControllerConfigurationsResult.FailedConfig'} : null;
    }
    /**
     * This method is responsible for validating the values passed to the setGetControllerConfigurationsResult_FailedConfig method
     * This method is willingly generated in order to preserve the one-line inline validation within the setGetControllerConfigurationsResult_FailedConfig method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateGetControllerConfigurationsResult_FailedConfigForArrayConstraintsFromSetGetControllerConfigurationsResult_FailedConfig(array $values = []): string
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $arrayOfGetControllerConfigurationsResult_FailedConfigGetControllerConfigurationsResult_FailedConfigItem) {
            // validation for constraint: itemType
            if (!$arrayOfGetControllerConfigurationsResult_FailedConfigGetControllerConfigurationsResult_FailedConfigItem instanceof \StructType\GetControllerConfigurationsResult_FailedConfig) {
                $invalidValues[] = is_object($arrayOfGetControllerConfigurationsResult_FailedConfigGetControllerConfigurationsResult_FailedConfigItem) ? get_class($arrayOfGetControllerConfigurationsResult_FailedConfigGetControllerConfigurationsResult_FailedConfigItem) : sprintf('%s(%s)', gettype($arrayOfGetControllerConfigurationsResult_FailedConfigGetControllerConfigurationsResult_FailedConfigItem), var_export($arrayOfGetControllerConfigurationsResult_FailedConfigGetControllerConfigurationsResult_FailedConfigItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The GetControllerConfigurationsResult_FailedConfig property can only contain items of type \StructType\GetControllerConfigurationsResult_FailedConfig, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set GetControllerConfigurationsResult_FailedConfig value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @throws InvalidArgumentException
     * @param \StructType\GetControllerConfigurationsResult_FailedConfig[] $getControllerConfigurationsResult_FailedConfig
     * @return \ArrayType\ArrayOfGetControllerConfigurationsResult_FailedConfig
     */
    public function setGetControllerConfigurationsResult_FailedConfig(array $getControllerConfigurationsResult_FailedConfig = []): self
    {
        // validation for constraint: array
        if ('' !== ($getControllerConfigurationsResult_FailedConfigArrayErrorMessage = self::validateGetControllerConfigurationsResult_FailedConfigForArrayConstraintsFromSetGetControllerConfigurationsResult_FailedConfig($getControllerConfigurationsResult_FailedConfig))) {
            throw new InvalidArgumentException($getControllerConfigurationsResult_FailedConfigArrayErrorMessage, __LINE__);
        }
        if (is_null($getControllerConfigurationsResult_FailedConfig) || (is_array($getControllerConfigurationsResult_FailedConfig) && empty($getControllerConfigurationsResult_FailedConfig))) {
            unset($this->GetControllerConfigurationsResult_FailedConfig, $this->{'GetControllerConfigurationsResult.FailedConfig'});
        } else {
            $this->GetControllerConfigurationsResult_FailedConfig = $this->{'GetControllerConfigurationsResult.FailedConfig'} = $getControllerConfigurationsResult_FailedConfig;
        }
        
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \StructType\GetControllerConfigurationsResult_FailedConfig|null
     */
    public function current(): ?\StructType\GetControllerConfigurationsResult_FailedConfig
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \StructType\GetControllerConfigurationsResult_FailedConfig|null
     */
    public function item($index): ?\StructType\GetControllerConfigurationsResult_FailedConfig
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \StructType\GetControllerConfigurationsResult_FailedConfig|null
     */
    public function first(): ?\StructType\GetControllerConfigurationsResult_FailedConfig
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \StructType\GetControllerConfigurationsResult_FailedConfig|null
     */
    public function last(): ?\StructType\GetControllerConfigurationsResult_FailedConfig
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \StructType\GetControllerConfigurationsResult_FailedConfig|null
     */
    public function offsetGet($offset): ?\StructType\GetControllerConfigurationsResult_FailedConfig
    {
        return parent::offsetGet($offset);
    }
    /**
     * Add element to array
     * @see AbstractStructArrayBase::add()
     * @throws InvalidArgumentException
     * @param \StructType\GetControllerConfigurationsResult_FailedConfig $item
     * @return \ArrayType\ArrayOfGetControllerConfigurationsResult_FailedConfig
     */
    public function add($item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\GetControllerConfigurationsResult_FailedConfig) {
            throw new InvalidArgumentException(sprintf('The GetControllerConfigurationsResult_FailedConfig property can only contain items of type \StructType\GetControllerConfigurationsResult_FailedConfig, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        return parent::add($item);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string GetControllerConfigurationsResult.FailedConfig
     */
    public function getAttributeName(): string
    {
        return 'GetControllerConfigurationsResult.FailedConfig';
    }
}
