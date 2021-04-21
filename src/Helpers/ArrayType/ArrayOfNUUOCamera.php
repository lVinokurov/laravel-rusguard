<?php

declare(strict_types=1);

namespace ArrayType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfNUUOCamera ArrayType
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:ArrayOfNUUOCamera
 * @subpackage Arrays
 */
class ArrayOfNUUOCamera extends AbstractStructArrayBase
{
    /**
     * The NUUOCamera
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: true
     * @var \StructType\NUUOCamera[]
     */
    protected array $NUUOCamera = [];
    /**
     * Constructor method for ArrayOfNUUOCamera
     * @uses ArrayOfNUUOCamera::setNUUOCamera()
     * @param \StructType\NUUOCamera[] $nUUOCamera
     */
    public function __construct(array $nUUOCamera = [])
    {
        $this
            ->setNUUOCamera($nUUOCamera);
    }
    /**
     * Get NUUOCamera value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \StructType\NUUOCamera[]
     */
    public function getNUUOCamera(): ?array
    {
        return isset($this->NUUOCamera) ? $this->NUUOCamera : null;
    }
    /**
     * This method is responsible for validating the values passed to the setNUUOCamera method
     * This method is willingly generated in order to preserve the one-line inline validation within the setNUUOCamera method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateNUUOCameraForArrayConstraintsFromSetNUUOCamera(array $values = []): string
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $arrayOfNUUOCameraNUUOCameraItem) {
            // validation for constraint: itemType
            if (!$arrayOfNUUOCameraNUUOCameraItem instanceof \StructType\NUUOCamera) {
                $invalidValues[] = is_object($arrayOfNUUOCameraNUUOCameraItem) ? get_class($arrayOfNUUOCameraNUUOCameraItem) : sprintf('%s(%s)', gettype($arrayOfNUUOCameraNUUOCameraItem), var_export($arrayOfNUUOCameraNUUOCameraItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The NUUOCamera property can only contain items of type \StructType\NUUOCamera, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set NUUOCamera value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @throws InvalidArgumentException
     * @param \StructType\NUUOCamera[] $nUUOCamera
     * @return \ArrayType\ArrayOfNUUOCamera
     */
    public function setNUUOCamera(array $nUUOCamera = []): self
    {
        // validation for constraint: array
        if ('' !== ($nUUOCameraArrayErrorMessage = self::validateNUUOCameraForArrayConstraintsFromSetNUUOCamera($nUUOCamera))) {
            throw new InvalidArgumentException($nUUOCameraArrayErrorMessage, __LINE__);
        }
        if (is_null($nUUOCamera) || (is_array($nUUOCamera) && empty($nUUOCamera))) {
            unset($this->NUUOCamera);
        } else {
            $this->NUUOCamera = $nUUOCamera;
        }
        
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \StructType\NUUOCamera|null
     */
    public function current(): ?\StructType\NUUOCamera
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \StructType\NUUOCamera|null
     */
    public function item($index): ?\StructType\NUUOCamera
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \StructType\NUUOCamera|null
     */
    public function first(): ?\StructType\NUUOCamera
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \StructType\NUUOCamera|null
     */
    public function last(): ?\StructType\NUUOCamera
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \StructType\NUUOCamera|null
     */
    public function offsetGet($offset): ?\StructType\NUUOCamera
    {
        return parent::offsetGet($offset);
    }
    /**
     * Add element to array
     * @see AbstractStructArrayBase::add()
     * @throws InvalidArgumentException
     * @param \StructType\NUUOCamera $item
     * @return \ArrayType\ArrayOfNUUOCamera
     */
    public function add($item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\NUUOCamera) {
            throw new InvalidArgumentException(sprintf('The NUUOCamera property can only contain items of type \StructType\NUUOCamera, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        return parent::add($item);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string NUUOCamera
     */
    public function getAttributeName(): string
    {
        return 'NUUOCamera';
    }
}
