<?php

declare(strict_types=1);

namespace ArrayType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfDataForPeriodModel ArrayType
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:ArrayOfDataForPeriodModel
 * @subpackage Arrays
 */
class ArrayOfDataForPeriodModel extends AbstractStructArrayBase
{
    /**
     * The DataForPeriodModel
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: true
     * @var \StructType\DataForPeriodModel[]
     */
    protected array $DataForPeriodModel = [];
    /**
     * Constructor method for ArrayOfDataForPeriodModel
     * @uses ArrayOfDataForPeriodModel::setDataForPeriodModel()
     * @param \StructType\DataForPeriodModel[] $dataForPeriodModel
     */
    public function __construct(array $dataForPeriodModel = [])
    {
        $this
            ->setDataForPeriodModel($dataForPeriodModel);
    }
    /**
     * Get DataForPeriodModel value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \StructType\DataForPeriodModel[]
     */
    public function getDataForPeriodModel(): ?array
    {
        return isset($this->DataForPeriodModel) ? $this->DataForPeriodModel : null;
    }
    /**
     * This method is responsible for validating the values passed to the setDataForPeriodModel method
     * This method is willingly generated in order to preserve the one-line inline validation within the setDataForPeriodModel method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateDataForPeriodModelForArrayConstraintsFromSetDataForPeriodModel(array $values = []): string
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $arrayOfDataForPeriodModelDataForPeriodModelItem) {
            // validation for constraint: itemType
            if (!$arrayOfDataForPeriodModelDataForPeriodModelItem instanceof \StructType\DataForPeriodModel) {
                $invalidValues[] = is_object($arrayOfDataForPeriodModelDataForPeriodModelItem) ? get_class($arrayOfDataForPeriodModelDataForPeriodModelItem) : sprintf('%s(%s)', gettype($arrayOfDataForPeriodModelDataForPeriodModelItem), var_export($arrayOfDataForPeriodModelDataForPeriodModelItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The DataForPeriodModel property can only contain items of type \StructType\DataForPeriodModel, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set DataForPeriodModel value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @throws InvalidArgumentException
     * @param \StructType\DataForPeriodModel[] $dataForPeriodModel
     * @return \ArrayType\ArrayOfDataForPeriodModel
     */
    public function setDataForPeriodModel(array $dataForPeriodModel = []): self
    {
        // validation for constraint: array
        if ('' !== ($dataForPeriodModelArrayErrorMessage = self::validateDataForPeriodModelForArrayConstraintsFromSetDataForPeriodModel($dataForPeriodModel))) {
            throw new InvalidArgumentException($dataForPeriodModelArrayErrorMessage, __LINE__);
        }
        if (is_null($dataForPeriodModel) || (is_array($dataForPeriodModel) && empty($dataForPeriodModel))) {
            unset($this->DataForPeriodModel);
        } else {
            $this->DataForPeriodModel = $dataForPeriodModel;
        }
        
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \StructType\DataForPeriodModel|null
     */
    public function current(): ?\StructType\DataForPeriodModel
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \StructType\DataForPeriodModel|null
     */
    public function item($index): ?\StructType\DataForPeriodModel
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \StructType\DataForPeriodModel|null
     */
    public function first(): ?\StructType\DataForPeriodModel
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \StructType\DataForPeriodModel|null
     */
    public function last(): ?\StructType\DataForPeriodModel
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \StructType\DataForPeriodModel|null
     */
    public function offsetGet($offset): ?\StructType\DataForPeriodModel
    {
        return parent::offsetGet($offset);
    }
    /**
     * Add element to array
     * @see AbstractStructArrayBase::add()
     * @throws InvalidArgumentException
     * @param \StructType\DataForPeriodModel $item
     * @return \ArrayType\ArrayOfDataForPeriodModel
     */
    public function add($item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\DataForPeriodModel) {
            throw new InvalidArgumentException(sprintf('The DataForPeriodModel property can only contain items of type \StructType\DataForPeriodModel, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        return parent::add($item);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string DataForPeriodModel
     */
    public function getAttributeName(): string
    {
        return 'DataForPeriodModel';
    }
}
