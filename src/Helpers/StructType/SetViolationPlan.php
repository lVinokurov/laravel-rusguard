<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SetViolationPlan StructType
 * @subpackage Structs
 */
class SetViolationPlan extends AbstractStructBase
{
    /**
     * The group
     * Meta information extracted from the WSDL
     * - base: xs:string
     * - minOccurs: 0
     * - nillable: true
     * - pattern: [\da-fA-F]{8}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{12}
     * - type: tns:guid
     * @var string|null
     */
    protected ?string $group = null;
    /**
     * The plan
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \ArrayType\ArrayOfPlanModel|null
     */
    protected ?\ArrayType\ArrayOfPlanModel $plan = null;
    /**
     * Constructor method for SetViolationPlan
     * @uses SetViolationPlan::setGroup()
     * @uses SetViolationPlan::setPlan()
     * @param string $group
     * @param \ArrayType\ArrayOfPlanModel $plan
     */
    public function __construct(?string $group = null, ?\ArrayType\ArrayOfPlanModel $plan = null)
    {
        $this
            ->setGroup($group)
            ->setPlan($plan);
    }
    /**
     * Get group value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getGroup(): ?string
    {
        return isset($this->group) ? $this->group : null;
    }
    /**
     * Set group value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $group
     * @return \StructType\SetViolationPlan
     */
    public function setGroup(?string $group = null): self
    {
        // validation for constraint: string
        if (!is_null($group) && !is_string($group)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($group, true), gettype($group)), __LINE__);
        }
        // validation for constraint: pattern([\da-fA-F]{8}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{12})
        if (!is_null($group) && !preg_match('/[\\da-fA-F]{8}-[\\da-fA-F]{4}-[\\da-fA-F]{4}-[\\da-fA-F]{4}-[\\da-fA-F]{12}/', $group)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a literal that is among the set of character sequences denoted by the regular expression /[\\da-fA-F]{8}-[\\da-fA-F]{4}-[\\da-fA-F]{4}-[\\da-fA-F]{4}-[\\da-fA-F]{12}/', var_export($group, true)), __LINE__);
        }
        if (is_null($group) || (is_array($group) && empty($group))) {
            unset($this->group);
        } else {
            $this->group = $group;
        }
        
        return $this;
    }
    /**
     * Get plan value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \ArrayType\ArrayOfPlanModel|null
     */
    public function getPlan(): ?\ArrayType\ArrayOfPlanModel
    {
        return isset($this->plan) ? $this->plan : null;
    }
    /**
     * Set plan value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \ArrayType\ArrayOfPlanModel $plan
     * @return \StructType\SetViolationPlan
     */
    public function setPlan(?\ArrayType\ArrayOfPlanModel $plan = null): self
    {
        if (is_null($plan) || (is_array($plan) && empty($plan))) {
            unset($this->plan);
        } else {
            $this->plan = $plan;
        }
        
        return $this;
    }
}
