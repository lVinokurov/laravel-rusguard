<?php

declare(strict_types=1);

namespace ArrayType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfDepartmentTreeModel ArrayType
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:ArrayOfDepartmentTreeModel
 * @subpackage Arrays
 */
class ArrayOfDepartmentTreeModel extends AbstractStructArrayBase
{
    /**
     * The DepartmentTreeModel
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: true
     * @var \StructType\DepartmentTreeModel[]
     */
    protected array $DepartmentTreeModel = [];
    /**
     * Constructor method for ArrayOfDepartmentTreeModel
     * @uses ArrayOfDepartmentTreeModel::setDepartmentTreeModel()
     * @param \StructType\DepartmentTreeModel[] $departmentTreeModel
     */
    public function __construct(array $departmentTreeModel = [])
    {
        $this
            ->setDepartmentTreeModel($departmentTreeModel);
    }
    /**
     * Get DepartmentTreeModel value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \StructType\DepartmentTreeModel[]
     */
    public function getDepartmentTreeModel(): ?array
    {
        return isset($this->DepartmentTreeModel) ? $this->DepartmentTreeModel : null;
    }
    /**
     * This method is responsible for validating the values passed to the setDepartmentTreeModel method
     * This method is willingly generated in order to preserve the one-line inline validation within the setDepartmentTreeModel method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateDepartmentTreeModelForArrayConstraintsFromSetDepartmentTreeModel(array $values = []): string
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $arrayOfDepartmentTreeModelDepartmentTreeModelItem) {
            // validation for constraint: itemType
            if (!$arrayOfDepartmentTreeModelDepartmentTreeModelItem instanceof \StructType\DepartmentTreeModel) {
                $invalidValues[] = is_object($arrayOfDepartmentTreeModelDepartmentTreeModelItem) ? get_class($arrayOfDepartmentTreeModelDepartmentTreeModelItem) : sprintf('%s(%s)', gettype($arrayOfDepartmentTreeModelDepartmentTreeModelItem), var_export($arrayOfDepartmentTreeModelDepartmentTreeModelItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The DepartmentTreeModel property can only contain items of type \StructType\DepartmentTreeModel, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set DepartmentTreeModel value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @throws InvalidArgumentException
     * @param \StructType\DepartmentTreeModel[] $departmentTreeModel
     * @return \ArrayType\ArrayOfDepartmentTreeModel
     */
    public function setDepartmentTreeModel(array $departmentTreeModel = []): self
    {
        // validation for constraint: array
        if ('' !== ($departmentTreeModelArrayErrorMessage = self::validateDepartmentTreeModelForArrayConstraintsFromSetDepartmentTreeModel($departmentTreeModel))) {
            throw new InvalidArgumentException($departmentTreeModelArrayErrorMessage, __LINE__);
        }
        if (is_null($departmentTreeModel) || (is_array($departmentTreeModel) && empty($departmentTreeModel))) {
            unset($this->DepartmentTreeModel);
        } else {
            $this->DepartmentTreeModel = $departmentTreeModel;
        }
        
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \StructType\DepartmentTreeModel|null
     */
    public function current(): ?\StructType\DepartmentTreeModel
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \StructType\DepartmentTreeModel|null
     */
    public function item($index): ?\StructType\DepartmentTreeModel
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \StructType\DepartmentTreeModel|null
     */
    public function first(): ?\StructType\DepartmentTreeModel
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \StructType\DepartmentTreeModel|null
     */
    public function last(): ?\StructType\DepartmentTreeModel
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \StructType\DepartmentTreeModel|null
     */
    public function offsetGet($offset): ?\StructType\DepartmentTreeModel
    {
        return parent::offsetGet($offset);
    }
    /**
     * Add element to array
     * @see AbstractStructArrayBase::add()
     * @throws InvalidArgumentException
     * @param \StructType\DepartmentTreeModel $item
     * @return \ArrayType\ArrayOfDepartmentTreeModel
     */
    public function add($item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\DepartmentTreeModel) {
            throw new InvalidArgumentException(sprintf('The DepartmentTreeModel property can only contain items of type \StructType\DepartmentTreeModel, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        return parent::add($item);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string DepartmentTreeModel
     */
    public function getAttributeName(): string
    {
        return 'DepartmentTreeModel';
    }
}
