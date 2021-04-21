<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetIsPresentInWorkplace StructType
 * @subpackage Structs
 */
class GetIsPresentInWorkplace extends AbstractStructBase
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
     * Constructor method for GetIsPresentInWorkplace
     * @uses GetIsPresentInWorkplace::setDepartmentsIds()
     * @uses GetIsPresentInWorkplace::setStartedOn()
     * @param \ArrayType\ArrayOfguid $departmentsIds
     * @param string $startedOn
     */
    public function __construct(?\ArrayType\ArrayOfguid $departmentsIds = null, ?string $startedOn = null)
    {
        $this
            ->setDepartmentsIds($departmentsIds)
            ->setStartedOn($startedOn);
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
     * @return \StructType\GetIsPresentInWorkplace
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
     * @return \StructType\GetIsPresentInWorkplace
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
}
