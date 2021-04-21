<?php

declare(strict_types=1);

namespace ArrayType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfDocumentForActionSaveInfo ArrayType
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:ArrayOfDocumentForActionSaveInfo
 * @subpackage Arrays
 */
class ArrayOfDocumentForActionSaveInfo extends AbstractStructArrayBase
{
    /**
     * The DocumentForActionSaveInfo
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: true
     * @var \StructType\DocumentForActionSaveInfo[]
     */
    protected array $DocumentForActionSaveInfo = [];
    /**
     * Constructor method for ArrayOfDocumentForActionSaveInfo
     * @uses ArrayOfDocumentForActionSaveInfo::setDocumentForActionSaveInfo()
     * @param \StructType\DocumentForActionSaveInfo[] $documentForActionSaveInfo
     */
    public function __construct(array $documentForActionSaveInfo = [])
    {
        $this
            ->setDocumentForActionSaveInfo($documentForActionSaveInfo);
    }
    /**
     * Get DocumentForActionSaveInfo value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \StructType\DocumentForActionSaveInfo[]
     */
    public function getDocumentForActionSaveInfo(): ?array
    {
        return isset($this->DocumentForActionSaveInfo) ? $this->DocumentForActionSaveInfo : null;
    }
    /**
     * This method is responsible for validating the values passed to the setDocumentForActionSaveInfo method
     * This method is willingly generated in order to preserve the one-line inline validation within the setDocumentForActionSaveInfo method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateDocumentForActionSaveInfoForArrayConstraintsFromSetDocumentForActionSaveInfo(array $values = []): string
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $arrayOfDocumentForActionSaveInfoDocumentForActionSaveInfoItem) {
            // validation for constraint: itemType
            if (!$arrayOfDocumentForActionSaveInfoDocumentForActionSaveInfoItem instanceof \StructType\DocumentForActionSaveInfo) {
                $invalidValues[] = is_object($arrayOfDocumentForActionSaveInfoDocumentForActionSaveInfoItem) ? get_class($arrayOfDocumentForActionSaveInfoDocumentForActionSaveInfoItem) : sprintf('%s(%s)', gettype($arrayOfDocumentForActionSaveInfoDocumentForActionSaveInfoItem), var_export($arrayOfDocumentForActionSaveInfoDocumentForActionSaveInfoItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The DocumentForActionSaveInfo property can only contain items of type \StructType\DocumentForActionSaveInfo, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set DocumentForActionSaveInfo value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @throws InvalidArgumentException
     * @param \StructType\DocumentForActionSaveInfo[] $documentForActionSaveInfo
     * @return \ArrayType\ArrayOfDocumentForActionSaveInfo
     */
    public function setDocumentForActionSaveInfo(array $documentForActionSaveInfo = []): self
    {
        // validation for constraint: array
        if ('' !== ($documentForActionSaveInfoArrayErrorMessage = self::validateDocumentForActionSaveInfoForArrayConstraintsFromSetDocumentForActionSaveInfo($documentForActionSaveInfo))) {
            throw new InvalidArgumentException($documentForActionSaveInfoArrayErrorMessage, __LINE__);
        }
        if (is_null($documentForActionSaveInfo) || (is_array($documentForActionSaveInfo) && empty($documentForActionSaveInfo))) {
            unset($this->DocumentForActionSaveInfo);
        } else {
            $this->DocumentForActionSaveInfo = $documentForActionSaveInfo;
        }
        
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \StructType\DocumentForActionSaveInfo|null
     */
    public function current(): ?\StructType\DocumentForActionSaveInfo
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \StructType\DocumentForActionSaveInfo|null
     */
    public function item($index): ?\StructType\DocumentForActionSaveInfo
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \StructType\DocumentForActionSaveInfo|null
     */
    public function first(): ?\StructType\DocumentForActionSaveInfo
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \StructType\DocumentForActionSaveInfo|null
     */
    public function last(): ?\StructType\DocumentForActionSaveInfo
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \StructType\DocumentForActionSaveInfo|null
     */
    public function offsetGet($offset): ?\StructType\DocumentForActionSaveInfo
    {
        return parent::offsetGet($offset);
    }
    /**
     * Add element to array
     * @see AbstractStructArrayBase::add()
     * @throws InvalidArgumentException
     * @param \StructType\DocumentForActionSaveInfo $item
     * @return \ArrayType\ArrayOfDocumentForActionSaveInfo
     */
    public function add($item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\DocumentForActionSaveInfo) {
            throw new InvalidArgumentException(sprintf('The DocumentForActionSaveInfo property can only contain items of type \StructType\DocumentForActionSaveInfo, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        return parent::add($item);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string DocumentForActionSaveInfo
     */
    public function getAttributeName(): string
    {
        return 'DocumentForActionSaveInfo';
    }
}
