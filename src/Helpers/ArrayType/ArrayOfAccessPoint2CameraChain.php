<?php

declare(strict_types=1);

namespace ArrayType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfAccessPoint2CameraChain ArrayType
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:ArrayOfAccessPoint2CameraChain
 * @subpackage Arrays
 */
class ArrayOfAccessPoint2CameraChain extends AbstractStructArrayBase
{
    /**
     * The AccessPoint2CameraChain
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: true
     * @var \StructType\AccessPoint2CameraChain[]
     */
    protected array $AccessPoint2CameraChain = [];
    /**
     * Constructor method for ArrayOfAccessPoint2CameraChain
     * @uses ArrayOfAccessPoint2CameraChain::setAccessPoint2CameraChain()
     * @param \StructType\AccessPoint2CameraChain[] $accessPoint2CameraChain
     */
    public function __construct(array $accessPoint2CameraChain = [])
    {
        $this
            ->setAccessPoint2CameraChain($accessPoint2CameraChain);
    }
    /**
     * Get AccessPoint2CameraChain value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \StructType\AccessPoint2CameraChain[]
     */
    public function getAccessPoint2CameraChain(): ?array
    {
        return isset($this->AccessPoint2CameraChain) ? $this->AccessPoint2CameraChain : null;
    }
    /**
     * This method is responsible for validating the values passed to the setAccessPoint2CameraChain method
     * This method is willingly generated in order to preserve the one-line inline validation within the setAccessPoint2CameraChain method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateAccessPoint2CameraChainForArrayConstraintsFromSetAccessPoint2CameraChain(array $values = []): string
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $arrayOfAccessPoint2CameraChainAccessPoint2CameraChainItem) {
            // validation for constraint: itemType
            if (!$arrayOfAccessPoint2CameraChainAccessPoint2CameraChainItem instanceof \StructType\AccessPoint2CameraChain) {
                $invalidValues[] = is_object($arrayOfAccessPoint2CameraChainAccessPoint2CameraChainItem) ? get_class($arrayOfAccessPoint2CameraChainAccessPoint2CameraChainItem) : sprintf('%s(%s)', gettype($arrayOfAccessPoint2CameraChainAccessPoint2CameraChainItem), var_export($arrayOfAccessPoint2CameraChainAccessPoint2CameraChainItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The AccessPoint2CameraChain property can only contain items of type \StructType\AccessPoint2CameraChain, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set AccessPoint2CameraChain value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @throws InvalidArgumentException
     * @param \StructType\AccessPoint2CameraChain[] $accessPoint2CameraChain
     * @return \ArrayType\ArrayOfAccessPoint2CameraChain
     */
    public function setAccessPoint2CameraChain(array $accessPoint2CameraChain = []): self
    {
        // validation for constraint: array
        if ('' !== ($accessPoint2CameraChainArrayErrorMessage = self::validateAccessPoint2CameraChainForArrayConstraintsFromSetAccessPoint2CameraChain($accessPoint2CameraChain))) {
            throw new InvalidArgumentException($accessPoint2CameraChainArrayErrorMessage, __LINE__);
        }
        if (is_null($accessPoint2CameraChain) || (is_array($accessPoint2CameraChain) && empty($accessPoint2CameraChain))) {
            unset($this->AccessPoint2CameraChain);
        } else {
            $this->AccessPoint2CameraChain = $accessPoint2CameraChain;
        }
        
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \StructType\AccessPoint2CameraChain|null
     */
    public function current(): ?\StructType\AccessPoint2CameraChain
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \StructType\AccessPoint2CameraChain|null
     */
    public function item($index): ?\StructType\AccessPoint2CameraChain
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \StructType\AccessPoint2CameraChain|null
     */
    public function first(): ?\StructType\AccessPoint2CameraChain
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \StructType\AccessPoint2CameraChain|null
     */
    public function last(): ?\StructType\AccessPoint2CameraChain
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \StructType\AccessPoint2CameraChain|null
     */
    public function offsetGet($offset): ?\StructType\AccessPoint2CameraChain
    {
        return parent::offsetGet($offset);
    }
    /**
     * Add element to array
     * @see AbstractStructArrayBase::add()
     * @throws InvalidArgumentException
     * @param \StructType\AccessPoint2CameraChain $item
     * @return \ArrayType\ArrayOfAccessPoint2CameraChain
     */
    public function add($item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\AccessPoint2CameraChain) {
            throw new InvalidArgumentException(sprintf('The AccessPoint2CameraChain property can only contain items of type \StructType\AccessPoint2CameraChain, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        return parent::add($item);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string AccessPoint2CameraChain
     */
    public function getAttributeName(): string
    {
        return 'AccessPoint2CameraChain';
    }
}
