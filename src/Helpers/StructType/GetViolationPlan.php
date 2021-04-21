<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetViolationPlan StructType
 * @subpackage Structs
 */
class GetViolationPlan extends AbstractStructBase
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
     * Constructor method for GetViolationPlan
     * @uses GetViolationPlan::setGroup()
     * @param string $group
     */
    public function __construct(?string $group = null)
    {
        $this
            ->setGroup($group);
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
     * @return \StructType\GetViolationPlan
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
}
