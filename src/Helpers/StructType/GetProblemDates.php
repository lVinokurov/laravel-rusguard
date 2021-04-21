<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetProblemDates StructType
 * @subpackage Structs
 */
class GetProblemDates extends AbstractStructBase
{
    /**
     * The departmentsIds
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \ArrayType\ArrayOfguid|null
     */
    protected ?\ArrayType\ArrayOfguid $departmentsIds = null;
    /**
     * The startedOn
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $startedOn = null;
    /**
     * The endedOn
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $endedOn = null;
    /**
     * Constructor method for GetProblemDates
     * @uses GetProblemDates::setDepartmentsIds()
     * @uses GetProblemDates::setStartedOn()
     * @uses GetProblemDates::setEndedOn()
     * @param \ArrayType\ArrayOfguid $departmentsIds
     * @param string $startedOn
     * @param string $endedOn
     */
    public function __construct(?\ArrayType\ArrayOfguid $departmentsIds = null, ?string $startedOn = null, ?string $endedOn = null)
    {
        $this
            ->setDepartmentsIds($departmentsIds)
            ->setStartedOn($startedOn)
            ->setEndedOn($endedOn);
    }
    /**
     * Get departmentsIds value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \ArrayType\ArrayOfguid|null
     */
    public function getDepartmentsIds(): ?\ArrayType\ArrayOfguid
    {
        return isset($this->departmentsIds) ? $this->departmentsIds : null;
    }
    /**
     * Set departmentsIds value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \ArrayType\ArrayOfguid $departmentsIds
     * @return \StructType\GetProblemDates
     */
    public function setDepartmentsIds(?\ArrayType\ArrayOfguid $departmentsIds = null): self
    {
        if (is_null($departmentsIds) || (is_array($departmentsIds) && empty($departmentsIds))) {
            unset($this->departmentsIds);
        } else {
            $this->departmentsIds = $departmentsIds;
        }
        
        return $this;
    }
    /**
     * Get startedOn value
     * @return string|null
     */
    public function getStartedOn(): ?string
    {
        return $this->startedOn;
    }
    /**
     * Set startedOn value
     * @param string $startedOn
     * @return \StructType\GetProblemDates
     */
    public function setStartedOn(?string $startedOn = null): self
    {
        // validation for constraint: string
        if (!is_null($startedOn) && !is_string($startedOn)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($startedOn, true), gettype($startedOn)), __LINE__);
        }
        $this->startedOn = $startedOn;
        
        return $this;
    }
    /**
     * Get endedOn value
     * @return string|null
     */
    public function getEndedOn(): ?string
    {
        return $this->endedOn;
    }
    /**
     * Set endedOn value
     * @param string $endedOn
     * @return \StructType\GetProblemDates
     */
    public function setEndedOn(?string $endedOn = null): self
    {
        // validation for constraint: string
        if (!is_null($endedOn) && !is_string($endedOn)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($endedOn, true), gettype($endedOn)), __LINE__);
        }
        $this->endedOn = $endedOn;
        
        return $this;
    }
}
