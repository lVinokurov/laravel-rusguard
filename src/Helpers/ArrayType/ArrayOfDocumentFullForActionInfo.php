<?php

declare(strict_types=1);

namespace ArrayType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfDocumentFullForActionInfo ArrayType
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:ArrayOfDocumentFullForActionInfo
 * @subpackage Arrays
 */
class ArrayOfDocumentFullForActionInfo extends AbstractStructArrayBase
{
    /**
     * The DocumentFullForActionInfo
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: true
     * @var \StructType\DocumentFullForActionInfo[]
     */
    protected array $DocumentFullForActionInfo = [];
    /**
     * Constructor method for ArrayOfDocumentFullForActionInfo
     * @uses ArrayOfDocumentFullForActionInfo::setDocumentFullForActionInfo()
     * @param \StructType\DocumentFullForActionInfo[] $documentFullForActionInfo
     */
    public function __construct(array $documentFullForActionInfo = [])
    {
        $this
            ->setDocumentFullForActionInfo($documentFullForActionInfo);
    }
    /**
     * Get DocumentFullForActionInfo value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \StructType\DocumentFullForActionInfo[]
     */
    public function getDocumentFullForActionInfo(): ?array
    {
        return isset($this->DocumentFullForActionInfo) ? $this->DocumentFullForActionInfo : null;
    }
    /**
     * This method is responsible for validating the values passed to the setDocumentFullForActionInfo method
     * This method is willingly generated in order to preserve the one-line inline validation within the setDocumentFullForActionInfo method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateDocumentFullForActionInfoForArrayConstraintsFromSetDocumentFullForActionInfo(array $values = []): string
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $arrayOfDocumentFullForActionInfoDocumentFullForActionInfoItem) {
            // validation for constraint: itemType
            if (!$arrayOfDocumentFullForActionInfoDocumentFullForActionInfoItem instanceof \StructType\DocumentFullForActionInfo) {
                $invalidValues[] = is_object($arrayOfDocumentFullForActionInfoDocumentFullForActionInfoItem) ? get_class($arrayOfDocumentFullForActionInfoDocumentFullForActionInfoItem) : sprintf('%s(%s)', gettype($arrayOfDocumentFullForActionInfoDocumentFullForActionInfoItem), var_export($arrayOfDocumentFullForActionInfoDocumentFullForActionInfoItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The DocumentFullForActionInfo property can only contain items of type \StructType\DocumentFullForActionInfo, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set DocumentFullForActionInfo value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @throws InvalidArgumentException
     * @param \StructType\DocumentFullForActionInfo[] $documentFullForActionInfo
     * @return \ArrayType\ArrayOfDocumentFullForActionInfo
     */
    public function setDocumentFullForActionInfo(array $documentFullForActionInfo = []): self
    {
        // validation for constraint: array
        if ('' !== ($documentFullForActionInfoArrayErrorMessage = self::validateDocumentFullForActionInfoForArrayConstraintsFromSetDocumentFullForActionInfo($documentFullForActionInfo))) {
            throw new InvalidArgumentException($documentFullForActionInfoArrayErrorMessage, __LINE__);
        }
        if (is_null($documentFullForActionInfo) || (is_array($documentFullForActionInfo) && empty($documentFullForActionInfo))) {
            unset($this->DocumentFullForActionInfo);
        } else {
            $this->DocumentFullForActionInfo = $documentFullForActionInfo;
        }
        
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \StructType\DocumentFullForActionInfo|null
     */
    public function current(): ?\StructType\DocumentFullForActionInfo
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \StructType\DocumentFullForActionInfo|null
     */
    public function item($index): ?\StructType\DocumentFullForActionInfo
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \StructType\DocumentFullForActionInfo|null
     */
    public function first(): ?\StructType\DocumentFullForActionInfo
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \StructType\DocumentFullForActionInfo|null
     */
    public function last(): ?\StructType\DocumentFullForActionInfo
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \StructType\DocumentFullForActionInfo|null
     */
    public function offsetGet($offset): ?\StructType\DocumentFullForActionInfo
    {
        return parent::offsetGet($offset);
    }
    /**
     * Add element to array
     * @see AbstractStructArrayBase::add()
     * @throws InvalidArgumentException
     * @param \StructType\DocumentFullForActionInfo $item
     * @return \ArrayType\ArrayOfDocumentFullForActionInfo
     */
    public function add($item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\DocumentFullForActionInfo) {
            throw new InvalidArgumentException(sprintf('The DocumentFullForActionInfo property can only contain items of type \StructType\DocumentFullForActionInfo, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        return parent::add($item);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string DocumentFullForActionInfo
     */
    public function getAttributeName(): string
    {
        return 'DocumentFullForActionInfo';
    }
}
