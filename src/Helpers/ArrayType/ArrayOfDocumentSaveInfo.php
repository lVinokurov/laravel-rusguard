<?php

declare(strict_types=1);

namespace ArrayType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfDocumentSaveInfo ArrayType
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:ArrayOfDocumentSaveInfo
 * @subpackage Arrays
 */
class ArrayOfDocumentSaveInfo extends AbstractStructArrayBase
{
    /**
     * The DocumentSaveInfo
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: true
     * @var \StructType\DocumentSaveInfo[]
     */
    protected array $DocumentSaveInfo = [];
    /**
     * Constructor method for ArrayOfDocumentSaveInfo
     * @uses ArrayOfDocumentSaveInfo::setDocumentSaveInfo()
     * @param \StructType\DocumentSaveInfo[] $documentSaveInfo
     */
    public function __construct(array $documentSaveInfo = [])
    {
        $this
            ->setDocumentSaveInfo($documentSaveInfo);
    }
    /**
     * Get DocumentSaveInfo value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \StructType\DocumentSaveInfo[]
     */
    public function getDocumentSaveInfo(): ?array
    {
        return isset($this->DocumentSaveInfo) ? $this->DocumentSaveInfo : null;
    }
    /**
     * This method is responsible for validating the values passed to the setDocumentSaveInfo method
     * This method is willingly generated in order to preserve the one-line inline validation within the setDocumentSaveInfo method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateDocumentSaveInfoForArrayConstraintsFromSetDocumentSaveInfo(array $values = []): string
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $arrayOfDocumentSaveInfoDocumentSaveInfoItem) {
            // validation for constraint: itemType
            if (!$arrayOfDocumentSaveInfoDocumentSaveInfoItem instanceof \StructType\DocumentSaveInfo) {
                $invalidValues[] = is_object($arrayOfDocumentSaveInfoDocumentSaveInfoItem) ? get_class($arrayOfDocumentSaveInfoDocumentSaveInfoItem) : sprintf('%s(%s)', gettype($arrayOfDocumentSaveInfoDocumentSaveInfoItem), var_export($arrayOfDocumentSaveInfoDocumentSaveInfoItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The DocumentSaveInfo property can only contain items of type \StructType\DocumentSaveInfo, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set DocumentSaveInfo value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @throws InvalidArgumentException
     * @param \StructType\DocumentSaveInfo[] $documentSaveInfo
     * @return \ArrayType\ArrayOfDocumentSaveInfo
     */
    public function setDocumentSaveInfo(array $documentSaveInfo = []): self
    {
        // validation for constraint: array
        if ('' !== ($documentSaveInfoArrayErrorMessage = self::validateDocumentSaveInfoForArrayConstraintsFromSetDocumentSaveInfo($documentSaveInfo))) {
            throw new InvalidArgumentException($documentSaveInfoArrayErrorMessage, __LINE__);
        }
        if (is_null($documentSaveInfo) || (is_array($documentSaveInfo) && empty($documentSaveInfo))) {
            unset($this->DocumentSaveInfo);
        } else {
            $this->DocumentSaveInfo = $documentSaveInfo;
        }
        
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \StructType\DocumentSaveInfo|null
     */
    public function current(): ?\StructType\DocumentSaveInfo
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \StructType\DocumentSaveInfo|null
     */
    public function item($index): ?\StructType\DocumentSaveInfo
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \StructType\DocumentSaveInfo|null
     */
    public function first(): ?\StructType\DocumentSaveInfo
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \StructType\DocumentSaveInfo|null
     */
    public function last(): ?\StructType\DocumentSaveInfo
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \StructType\DocumentSaveInfo|null
     */
    public function offsetGet($offset): ?\StructType\DocumentSaveInfo
    {
        return parent::offsetGet($offset);
    }
    /**
     * Add element to array
     * @see AbstractStructArrayBase::add()
     * @throws InvalidArgumentException
     * @param \StructType\DocumentSaveInfo $item
     * @return \ArrayType\ArrayOfDocumentSaveInfo
     */
    public function add($item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\DocumentSaveInfo) {
            throw new InvalidArgumentException(sprintf('The DocumentSaveInfo property can only contain items of type \StructType\DocumentSaveInfo, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        return parent::add($item);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string DocumentSaveInfo
     */
    public function getAttributeName(): string
    {
        return 'DocumentSaveInfo';
    }
}
