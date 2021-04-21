<?php

declare(strict_types=1);

namespace ArrayType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfReportTagsData ArrayType
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:ArrayOfReportTagsData
 * @subpackage Arrays
 */
class ArrayOfReportTagsData extends AbstractStructArrayBase
{
    /**
     * The ReportTagsData
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: true
     * @var \StructType\ReportTagsData[]
     */
    protected array $ReportTagsData = [];
    /**
     * Constructor method for ArrayOfReportTagsData
     * @uses ArrayOfReportTagsData::setReportTagsData()
     * @param \StructType\ReportTagsData[] $reportTagsData
     */
    public function __construct(array $reportTagsData = [])
    {
        $this
            ->setReportTagsData($reportTagsData);
    }
    /**
     * Get ReportTagsData value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \StructType\ReportTagsData[]
     */
    public function getReportTagsData(): ?array
    {
        return isset($this->ReportTagsData) ? $this->ReportTagsData : null;
    }
    /**
     * This method is responsible for validating the values passed to the setReportTagsData method
     * This method is willingly generated in order to preserve the one-line inline validation within the setReportTagsData method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateReportTagsDataForArrayConstraintsFromSetReportTagsData(array $values = []): string
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $arrayOfReportTagsDataReportTagsDataItem) {
            // validation for constraint: itemType
            if (!$arrayOfReportTagsDataReportTagsDataItem instanceof \StructType\ReportTagsData) {
                $invalidValues[] = is_object($arrayOfReportTagsDataReportTagsDataItem) ? get_class($arrayOfReportTagsDataReportTagsDataItem) : sprintf('%s(%s)', gettype($arrayOfReportTagsDataReportTagsDataItem), var_export($arrayOfReportTagsDataReportTagsDataItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The ReportTagsData property can only contain items of type \StructType\ReportTagsData, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set ReportTagsData value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @throws InvalidArgumentException
     * @param \StructType\ReportTagsData[] $reportTagsData
     * @return \ArrayType\ArrayOfReportTagsData
     */
    public function setReportTagsData(array $reportTagsData = []): self
    {
        // validation for constraint: array
        if ('' !== ($reportTagsDataArrayErrorMessage = self::validateReportTagsDataForArrayConstraintsFromSetReportTagsData($reportTagsData))) {
            throw new InvalidArgumentException($reportTagsDataArrayErrorMessage, __LINE__);
        }
        if (is_null($reportTagsData) || (is_array($reportTagsData) && empty($reportTagsData))) {
            unset($this->ReportTagsData);
        } else {
            $this->ReportTagsData = $reportTagsData;
        }
        
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \StructType\ReportTagsData|null
     */
    public function current(): ?\StructType\ReportTagsData
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \StructType\ReportTagsData|null
     */
    public function item($index): ?\StructType\ReportTagsData
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \StructType\ReportTagsData|null
     */
    public function first(): ?\StructType\ReportTagsData
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \StructType\ReportTagsData|null
     */
    public function last(): ?\StructType\ReportTagsData
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \StructType\ReportTagsData|null
     */
    public function offsetGet($offset): ?\StructType\ReportTagsData
    {
        return parent::offsetGet($offset);
    }
    /**
     * Add element to array
     * @see AbstractStructArrayBase::add()
     * @throws InvalidArgumentException
     * @param \StructType\ReportTagsData $item
     * @return \ArrayType\ArrayOfReportTagsData
     */
    public function add($item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\ReportTagsData) {
            throw new InvalidArgumentException(sprintf('The ReportTagsData property can only contain items of type \StructType\ReportTagsData, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        return parent::add($item);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string ReportTagsData
     */
    public function getAttributeName(): string
    {
        return 'ReportTagsData';
    }
}
