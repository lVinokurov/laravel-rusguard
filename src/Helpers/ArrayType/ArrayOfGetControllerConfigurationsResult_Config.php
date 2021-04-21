<?php

declare(strict_types=1);

namespace ArrayType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfGetControllerConfigurationsResult.Config ArrayType
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:ArrayOfGetControllerConfigurationsResult.Config
 * @subpackage Arrays
 */
class ArrayOfGetControllerConfigurationsResult_Config extends AbstractStructArrayBase
{
    /**
     * The GetControllerConfigurationsResult_Config
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: true
     * @var \StructType\GetControllerConfigurationsResult_Config[]
     */
    protected array $GetControllerConfigurationsResult_Config = [];
    /**
     * Constructor method for ArrayOfGetControllerConfigurationsResult.Config
     * @uses ArrayOfGetControllerConfigurationsResult_Config::setGetControllerConfigurationsResult_Config()
     * @param \StructType\GetControllerConfigurationsResult_Config[] $getControllerConfigurationsResult_Config
     */
    public function __construct(array $getControllerConfigurationsResult_Config = [])
    {
        $this
            ->setGetControllerConfigurationsResult_Config($getControllerConfigurationsResult_Config);
    }
    /**
     * Get GetControllerConfigurationsResult_Config value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \StructType\GetControllerConfigurationsResult_Config[]
     */
    public function getGetControllerConfigurationsResult_Config(): ?array
    {
        return isset($this->{'GetControllerConfigurationsResult.Config'}) ? $this->{'GetControllerConfigurationsResult.Config'} : null;
    }
    /**
     * This method is responsible for validating the values passed to the setGetControllerConfigurationsResult_Config method
     * This method is willingly generated in order to preserve the one-line inline validation within the setGetControllerConfigurationsResult_Config method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateGetControllerConfigurationsResult_ConfigForArrayConstraintsFromSetGetControllerConfigurationsResult_Config(array $values = []): string
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $arrayOfGetControllerConfigurationsResult_ConfigGetControllerConfigurationsResult_ConfigItem) {
            // validation for constraint: itemType
            if (!$arrayOfGetControllerConfigurationsResult_ConfigGetControllerConfigurationsResult_ConfigItem instanceof \StructType\GetControllerConfigurationsResult_Config) {
                $invalidValues[] = is_object($arrayOfGetControllerConfigurationsResult_ConfigGetControllerConfigurationsResult_ConfigItem) ? get_class($arrayOfGetControllerConfigurationsResult_ConfigGetControllerConfigurationsResult_ConfigItem) : sprintf('%s(%s)', gettype($arrayOfGetControllerConfigurationsResult_ConfigGetControllerConfigurationsResult_ConfigItem), var_export($arrayOfGetControllerConfigurationsResult_ConfigGetControllerConfigurationsResult_ConfigItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The GetControllerConfigurationsResult_Config property can only contain items of type \StructType\GetControllerConfigurationsResult_Config, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set GetControllerConfigurationsResult_Config value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @throws InvalidArgumentException
     * @param \StructType\GetControllerConfigurationsResult_Config[] $getControllerConfigurationsResult_Config
     * @return \ArrayType\ArrayOfGetControllerConfigurationsResult_Config
     */
    public function setGetControllerConfigurationsResult_Config(array $getControllerConfigurationsResult_Config = []): self
    {
        // validation for constraint: array
        if ('' !== ($getControllerConfigurationsResult_ConfigArrayErrorMessage = self::validateGetControllerConfigurationsResult_ConfigForArrayConstraintsFromSetGetControllerConfigurationsResult_Config($getControllerConfigurationsResult_Config))) {
            throw new InvalidArgumentException($getControllerConfigurationsResult_ConfigArrayErrorMessage, __LINE__);
        }
        if (is_null($getControllerConfigurationsResult_Config) || (is_array($getControllerConfigurationsResult_Config) && empty($getControllerConfigurationsResult_Config))) {
            unset($this->GetControllerConfigurationsResult_Config, $this->{'GetControllerConfigurationsResult.Config'});
        } else {
            $this->GetControllerConfigurationsResult_Config = $this->{'GetControllerConfigurationsResult.Config'} = $getControllerConfigurationsResult_Config;
        }
        
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \StructType\GetControllerConfigurationsResult_Config|null
     */
    public function current(): ?\StructType\GetControllerConfigurationsResult_Config
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \StructType\GetControllerConfigurationsResult_Config|null
     */
    public function item($index): ?\StructType\GetControllerConfigurationsResult_Config
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \StructType\GetControllerConfigurationsResult_Config|null
     */
    public function first(): ?\StructType\GetControllerConfigurationsResult_Config
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \StructType\GetControllerConfigurationsResult_Config|null
     */
    public function last(): ?\StructType\GetControllerConfigurationsResult_Config
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \StructType\GetControllerConfigurationsResult_Config|null
     */
    public function offsetGet($offset): ?\StructType\GetControllerConfigurationsResult_Config
    {
        return parent::offsetGet($offset);
    }
    /**
     * Add element to array
     * @see AbstractStructArrayBase::add()
     * @throws InvalidArgumentException
     * @param \StructType\GetControllerConfigurationsResult_Config $item
     * @return \ArrayType\ArrayOfGetControllerConfigurationsResult_Config
     */
    public function add($item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\GetControllerConfigurationsResult_Config) {
            throw new InvalidArgumentException(sprintf('The GetControllerConfigurationsResult_Config property can only contain items of type \StructType\GetControllerConfigurationsResult_Config, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        return parent::add($item);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string GetControllerConfigurationsResult.Config
     */
    public function getAttributeName(): string
    {
        return 'GetControllerConfigurationsResult.Config';
    }
}
