<?php

declare(strict_types=1);

namespace ArrayType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfDocumentFullInfo ArrayType
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:ArrayOfDocumentFullInfo
 * @subpackage Arrays
 */
class ArrayOfDocumentFullInfo extends AbstractStructArrayBase
{
    /**
     * The DocumentFullInfo
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: true
     * @var \StructType\DocumentFullInfo[]
     */
    protected array $DocumentFullInfo = [];
    /**
     * Constructor method for ArrayOfDocumentFullInfo
     * @uses ArrayOfDocumentFullInfo::setDocumentFullInfo()
     * @param \StructType\DocumentFullInfo[] $documentFullInfo
     */
    public function __construct(array $documentFullInfo = [])
    {
        $this
            ->setDocumentFullInfo($documentFullInfo);
    }
    /**
     * Get DocumentFullInfo value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \StructType\DocumentFullInfo[]
     */
    public function getDocumentFullInfo(): ?array
    {
        return isset($this->DocumentFullInfo) ? $this->DocumentFullInfo : null;
    }
    /**
     * This method is responsible for validating the values passed to the setDocumentFullInfo method
     * This method is willingly generated in order to preserve the one-line inline validation within the setDocumentFullInfo method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateDocumentFullInfoForArrayConstraintsFromSetDocumentFullInfo(array $values = []): string
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $arrayOfDocumentFullInfoDocumentFullInfoItem) {
            // validation for constraint: itemType
            if (!$arrayOfDocumentFullInfoDocumentFullInfoItem instanceof \StructType\DocumentFullInfo) {
                $invalidValues[] = is_object($arrayOfDocumentFullInfoDocumentFullInfoItem) ? get_class($arrayOfDocumentFullInfoDocumentFullInfoItem) : sprintf('%s(%s)', gettype($arrayOfDocumentFullInfoDocumentFullInfoItem), var_export($arrayOfDocumentFullInfoDocumentFullInfoItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The DocumentFullInfo property can only contain items of type \StructType\DocumentFullInfo, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set DocumentFullInfo value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @throws InvalidArgumentException
     * @param \StructType\DocumentFullInfo[] $documentFullInfo
     * @return \ArrayType\ArrayOfDocumentFullInfo
     */
    public function setDocumentFullInfo(array $documentFullInfo = []): self
    {
        // validation for constraint: array
        if ('' !== ($documentFullInfoArrayErrorMessage = self::validateDocumentFullInfoForArrayConstraintsFromSetDocumentFullInfo($documentFullInfo))) {
            throw new InvalidArgumentException($documentFullInfoArrayErrorMessage, __LINE__);
        }
        if (is_null($documentFullInfo) || (is_array($documentFullInfo) && empty($documentFullInfo))) {
            unset($this->DocumentFullInfo);
        } else {
            $this->DocumentFullInfo = $documentFullInfo;
        }
        
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \StructType\DocumentFullInfo|null
     */
    public function current(): ?\StructType\DocumentFullInfo
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \StructType\DocumentFullInfo|null
     */
    public function item($index): ?\StructType\DocumentFullInfo
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \StructType\DocumentFullInfo|null
     */
    public function first(): ?\StructType\DocumentFullInfo
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \StructType\DocumentFullInfo|null
     */
    public function last(): ?\StructType\DocumentFullInfo
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \StructType\DocumentFullInfo|null
     */
    public function offsetGet($offset): ?\StructType\DocumentFullInfo
    {
        return parent::offsetGet($offset);
    }
    /**
     * Add element to array
     * @see AbstractStructArrayBase::add()
     * @throws InvalidArgumentException
     * @param \StructType\DocumentFullInfo $item
     * @return \ArrayType\ArrayOfDocumentFullInfo
     */
    public function add($item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\DocumentFullInfo) {
            throw new InvalidArgumentException(sprintf('The DocumentFullInfo property can only contain items of type \StructType\DocumentFullInfo, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        return parent::add($item);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string DocumentFullInfo
     */
    public function getAttributeName(): string
    {
        return 'DocumentFullInfo';
    }
}
