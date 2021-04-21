<?php

declare(strict_types=1);

namespace ArrayType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfPlanModel ArrayType
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:ArrayOfPlanModel
 * @subpackage Arrays
 */
class ArrayOfPlanModel extends AbstractStructArrayBase
{
    /**
     * The PlanModel
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: true
     * @var \StructType\PlanModel[]
     */
    protected array $PlanModel = [];
    /**
     * Constructor method for ArrayOfPlanModel
     * @uses ArrayOfPlanModel::setPlanModel()
     * @param \StructType\PlanModel[] $planModel
     */
    public function __construct(array $planModel = [])
    {
        $this
            ->setPlanModel($planModel);
    }
    /**
     * Get PlanModel value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \StructType\PlanModel[]
     */
    public function getPlanModel(): ?array
    {
        return isset($this->PlanModel) ? $this->PlanModel : null;
    }
    /**
     * This method is responsible for validating the values passed to the setPlanModel method
     * This method is willingly generated in order to preserve the one-line inline validation within the setPlanModel method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validatePlanModelForArrayConstraintsFromSetPlanModel(array $values = []): string
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $arrayOfPlanModelPlanModelItem) {
            // validation for constraint: itemType
            if (!$arrayOfPlanModelPlanModelItem instanceof \StructType\PlanModel) {
                $invalidValues[] = is_object($arrayOfPlanModelPlanModelItem) ? get_class($arrayOfPlanModelPlanModelItem) : sprintf('%s(%s)', gettype($arrayOfPlanModelPlanModelItem), var_export($arrayOfPlanModelPlanModelItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The PlanModel property can only contain items of type \StructType\PlanModel, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set PlanModel value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @throws InvalidArgumentException
     * @param \StructType\PlanModel[] $planModel
     * @return \ArrayType\ArrayOfPlanModel
     */
    public function setPlanModel(array $planModel = []): self
    {
        // validation for constraint: array
        if ('' !== ($planModelArrayErrorMessage = self::validatePlanModelForArrayConstraintsFromSetPlanModel($planModel))) {
            throw new InvalidArgumentException($planModelArrayErrorMessage, __LINE__);
        }
        if (is_null($planModel) || (is_array($planModel) && empty($planModel))) {
            unset($this->PlanModel);
        } else {
            $this->PlanModel = $planModel;
        }
        
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \StructType\PlanModel|null
     */
    public function current(): ?\StructType\PlanModel
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \StructType\PlanModel|null
     */
    public function item($index): ?\StructType\PlanModel
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \StructType\PlanModel|null
     */
    public function first(): ?\StructType\PlanModel
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \StructType\PlanModel|null
     */
    public function last(): ?\StructType\PlanModel
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \StructType\PlanModel|null
     */
    public function offsetGet($offset): ?\StructType\PlanModel
    {
        return parent::offsetGet($offset);
    }
    /**
     * Add element to array
     * @see AbstractStructArrayBase::add()
     * @throws InvalidArgumentException
     * @param \StructType\PlanModel $item
     * @return \ArrayType\ArrayOfPlanModel
     */
    public function add($item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\PlanModel) {
            throw new InvalidArgumentException(sprintf('The PlanModel property can only contain items of type \StructType\PlanModel, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        return parent::add($item);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string PlanModel
     */
    public function getAttributeName(): string
    {
        return 'PlanModel';
    }
}
