<?php

declare(strict_types=1);

namespace ArrayType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfLUser ArrayType
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:ArrayOfLUser
 * @subpackage Arrays
 */
class ArrayOfLUser extends AbstractStructArrayBase
{
    /**
     * The LUser
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: true
     * @var \StructType\LUser[]
     */
    protected array $LUser = [];
    /**
     * Constructor method for ArrayOfLUser
     * @uses ArrayOfLUser::setLUser()
     * @param \StructType\LUser[] $lUser
     */
    public function __construct(array $lUser = [])
    {
        $this
            ->setLUser($lUser);
    }
    /**
     * Get LUser value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \StructType\LUser[]
     */
    public function getLUser(): ?array
    {
        return isset($this->LUser) ? $this->LUser : null;
    }
    /**
     * This method is responsible for validating the values passed to the setLUser method
     * This method is willingly generated in order to preserve the one-line inline validation within the setLUser method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateLUserForArrayConstraintsFromSetLUser(array $values = []): string
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $arrayOfLUserLUserItem) {
            // validation for constraint: itemType
            if (!$arrayOfLUserLUserItem instanceof \StructType\LUser) {
                $invalidValues[] = is_object($arrayOfLUserLUserItem) ? get_class($arrayOfLUserLUserItem) : sprintf('%s(%s)', gettype($arrayOfLUserLUserItem), var_export($arrayOfLUserLUserItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The LUser property can only contain items of type \StructType\LUser, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set LUser value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @throws InvalidArgumentException
     * @param \StructType\LUser[] $lUser
     * @return \ArrayType\ArrayOfLUser
     */
    public function setLUser(array $lUser = []): self
    {
        // validation for constraint: array
        if ('' !== ($lUserArrayErrorMessage = self::validateLUserForArrayConstraintsFromSetLUser($lUser))) {
            throw new InvalidArgumentException($lUserArrayErrorMessage, __LINE__);
        }
        if (is_null($lUser) || (is_array($lUser) && empty($lUser))) {
            unset($this->LUser);
        } else {
            $this->LUser = $lUser;
        }
        
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \StructType\LUser|null
     */
    public function current(): ?\StructType\LUser
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \StructType\LUser|null
     */
    public function item($index): ?\StructType\LUser
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \StructType\LUser|null
     */
    public function first(): ?\StructType\LUser
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \StructType\LUser|null
     */
    public function last(): ?\StructType\LUser
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \StructType\LUser|null
     */
    public function offsetGet($offset): ?\StructType\LUser
    {
        return parent::offsetGet($offset);
    }
    /**
     * Add element to array
     * @see AbstractStructArrayBase::add()
     * @throws InvalidArgumentException
     * @param \StructType\LUser $item
     * @return \ArrayType\ArrayOfLUser
     */
    public function add($item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\LUser) {
            throw new InvalidArgumentException(sprintf('The LUser property can only contain items of type \StructType\LUser, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        return parent::add($item);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string LUser
     */
    public function getAttributeName(): string
    {
        return 'LUser';
    }
}
