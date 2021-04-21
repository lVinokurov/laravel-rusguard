<?php

declare(strict_types=1);

namespace ArrayType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfCardTypeBiometricPermission ArrayType
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:ArrayOfCardTypeBiometricPermission
 * @subpackage Arrays
 */
class ArrayOfCardTypeBiometricPermission extends AbstractStructArrayBase
{
    /**
     * The CardTypeBiometricPermission
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: true
     * @var \StructType\CardTypeBiometricPermission[]
     */
    protected array $CardTypeBiometricPermission = [];
    /**
     * Constructor method for ArrayOfCardTypeBiometricPermission
     * @uses ArrayOfCardTypeBiometricPermission::setCardTypeBiometricPermission()
     * @param \StructType\CardTypeBiometricPermission[] $cardTypeBiometricPermission
     */
    public function __construct(array $cardTypeBiometricPermission = [])
    {
        $this
            ->setCardTypeBiometricPermission($cardTypeBiometricPermission);
    }
    /**
     * Get CardTypeBiometricPermission value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \StructType\CardTypeBiometricPermission[]
     */
    public function getCardTypeBiometricPermission(): ?array
    {
        return isset($this->CardTypeBiometricPermission) ? $this->CardTypeBiometricPermission : null;
    }
    /**
     * This method is responsible for validating the values passed to the setCardTypeBiometricPermission method
     * This method is willingly generated in order to preserve the one-line inline validation within the setCardTypeBiometricPermission method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateCardTypeBiometricPermissionForArrayConstraintsFromSetCardTypeBiometricPermission(array $values = []): string
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $arrayOfCardTypeBiometricPermissionCardTypeBiometricPermissionItem) {
            // validation for constraint: itemType
            if (!$arrayOfCardTypeBiometricPermissionCardTypeBiometricPermissionItem instanceof \StructType\CardTypeBiometricPermission) {
                $invalidValues[] = is_object($arrayOfCardTypeBiometricPermissionCardTypeBiometricPermissionItem) ? get_class($arrayOfCardTypeBiometricPermissionCardTypeBiometricPermissionItem) : sprintf('%s(%s)', gettype($arrayOfCardTypeBiometricPermissionCardTypeBiometricPermissionItem), var_export($arrayOfCardTypeBiometricPermissionCardTypeBiometricPermissionItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The CardTypeBiometricPermission property can only contain items of type \StructType\CardTypeBiometricPermission, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set CardTypeBiometricPermission value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @throws InvalidArgumentException
     * @param \StructType\CardTypeBiometricPermission[] $cardTypeBiometricPermission
     * @return \ArrayType\ArrayOfCardTypeBiometricPermission
     */
    public function setCardTypeBiometricPermission(array $cardTypeBiometricPermission = []): self
    {
        // validation for constraint: array
        if ('' !== ($cardTypeBiometricPermissionArrayErrorMessage = self::validateCardTypeBiometricPermissionForArrayConstraintsFromSetCardTypeBiometricPermission($cardTypeBiometricPermission))) {
            throw new InvalidArgumentException($cardTypeBiometricPermissionArrayErrorMessage, __LINE__);
        }
        if (is_null($cardTypeBiometricPermission) || (is_array($cardTypeBiometricPermission) && empty($cardTypeBiometricPermission))) {
            unset($this->CardTypeBiometricPermission);
        } else {
            $this->CardTypeBiometricPermission = $cardTypeBiometricPermission;
        }
        
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \StructType\CardTypeBiometricPermission|null
     */
    public function current(): ?\StructType\CardTypeBiometricPermission
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \StructType\CardTypeBiometricPermission|null
     */
    public function item($index): ?\StructType\CardTypeBiometricPermission
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \StructType\CardTypeBiometricPermission|null
     */
    public function first(): ?\StructType\CardTypeBiometricPermission
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \StructType\CardTypeBiometricPermission|null
     */
    public function last(): ?\StructType\CardTypeBiometricPermission
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \StructType\CardTypeBiometricPermission|null
     */
    public function offsetGet($offset): ?\StructType\CardTypeBiometricPermission
    {
        return parent::offsetGet($offset);
    }
    /**
     * Add element to array
     * @see AbstractStructArrayBase::add()
     * @throws InvalidArgumentException
     * @param \StructType\CardTypeBiometricPermission $item
     * @return \ArrayType\ArrayOfCardTypeBiometricPermission
     */
    public function add($item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\CardTypeBiometricPermission) {
            throw new InvalidArgumentException(sprintf('The CardTypeBiometricPermission property can only contain items of type \StructType\CardTypeBiometricPermission, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        return parent::add($item);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string CardTypeBiometricPermission
     */
    public function getAttributeName(): string
    {
        return 'CardTypeBiometricPermission';
    }
}
