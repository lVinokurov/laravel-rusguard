<?php

declare(strict_types=1);

namespace ArrayType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfReportSlimInfo ArrayType
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:ArrayOfReportSlimInfo
 * @subpackage Arrays
 */
class ArrayOfReportSlimInfo extends AbstractStructArrayBase
{
    /**
     * The ReportSlimInfo
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: true
     * @var \StructType\ReportSlimInfo[]
     */
    protected array $ReportSlimInfo = [];
    /**
     * Constructor method for ArrayOfReportSlimInfo
     * @uses ArrayOfReportSlimInfo::setReportSlimInfo()
     * @param \StructType\ReportSlimInfo[] $reportSlimInfo
     */
    public function __construct(array $reportSlimInfo = [])
    {
        $this
            ->setReportSlimInfo($reportSlimInfo);
    }
    /**
     * Get ReportSlimInfo value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \StructType\ReportSlimInfo[]
     */
    public function getReportSlimInfo(): ?array
    {
        return isset($this->ReportSlimInfo) ? $this->ReportSlimInfo : null;
    }
    /**
     * This method is responsible for validating the values passed to the setReportSlimInfo method
     * This method is willingly generated in order to preserve the one-line inline validation within the setReportSlimInfo method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateReportSlimInfoForArrayConstraintsFromSetReportSlimInfo(array $values = []): string
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $arrayOfReportSlimInfoReportSlimInfoItem) {
            // validation for constraint: itemType
            if (!$arrayOfReportSlimInfoReportSlimInfoItem instanceof \StructType\ReportSlimInfo) {
                $invalidValues[] = is_object($arrayOfReportSlimInfoReportSlimInfoItem) ? get_class($arrayOfReportSlimInfoReportSlimInfoItem) : sprintf('%s(%s)', gettype($arrayOfReportSlimInfoReportSlimInfoItem), var_export($arrayOfReportSlimInfoReportSlimInfoItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The ReportSlimInfo property can only contain items of type \StructType\ReportSlimInfo, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set ReportSlimInfo value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @throws InvalidArgumentException
     * @param \StructType\ReportSlimInfo[] $reportSlimInfo
     * @return \ArrayType\ArrayOfReportSlimInfo
     */
    public function setReportSlimInfo(array $reportSlimInfo = []): self
    {
        // validation for constraint: array
        if ('' !== ($reportSlimInfoArrayErrorMessage = self::validateReportSlimInfoForArrayConstraintsFromSetReportSlimInfo($reportSlimInfo))) {
            throw new InvalidArgumentException($reportSlimInfoArrayErrorMessage, __LINE__);
        }
        if (is_null($reportSlimInfo) || (is_array($reportSlimInfo) && empty($reportSlimInfo))) {
            unset($this->ReportSlimInfo);
        } else {
            $this->ReportSlimInfo = $reportSlimInfo;
        }
        
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \StructType\ReportSlimInfo|null
     */
    public function current(): ?\StructType\ReportSlimInfo
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \StructType\ReportSlimInfo|null
     */
    public function item($index): ?\StructType\ReportSlimInfo
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \StructType\ReportSlimInfo|null
     */
    public function first(): ?\StructType\ReportSlimInfo
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \StructType\ReportSlimInfo|null
     */
    public function last(): ?\StructType\ReportSlimInfo
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \StructType\ReportSlimInfo|null
     */
    public function offsetGet($offset): ?\StructType\ReportSlimInfo
    {
        return parent::offsetGet($offset);
    }
    /**
     * Add element to array
     * @see AbstractStructArrayBase::add()
     * @throws InvalidArgumentException
     * @param \StructType\ReportSlimInfo $item
     * @return \ArrayType\ArrayOfReportSlimInfo
     */
    public function add($item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\ReportSlimInfo) {
            throw new InvalidArgumentException(sprintf('The ReportSlimInfo property can only contain items of type \StructType\ReportSlimInfo, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        return parent::add($item);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string ReportSlimInfo
     */
    public function getAttributeName(): string
    {
        return 'ReportSlimInfo';
    }
}
