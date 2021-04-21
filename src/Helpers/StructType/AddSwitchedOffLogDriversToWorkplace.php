<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for AddSwitchedOffLogDriversToWorkplace StructType
 * @subpackage Structs
 */
class AddSwitchedOffLogDriversToWorkplace extends AbstractStructBase
{
    /**
     * The workplaceId
     * Meta information extracted from the WSDL
     * - base: xs:string
     * - minOccurs: 0
     * - nillable: true
     * - pattern: [\da-fA-F]{8}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{12}
     * - type: tns:guid
     * @var string|null
     */
    protected ?string $workplaceId = null;
    /**
     * The driverIds
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \ArrayType\ArrayOfguid|null
     */
    protected ?\ArrayType\ArrayOfguid $driverIds = null;
    /**
     * Constructor method for AddSwitchedOffLogDriversToWorkplace
     * @uses AddSwitchedOffLogDriversToWorkplace::setWorkplaceId()
     * @uses AddSwitchedOffLogDriversToWorkplace::setDriverIds()
     * @param string $workplaceId
     * @param \ArrayType\ArrayOfguid $driverIds
     */
    public function __construct(?string $workplaceId = null, ?\ArrayType\ArrayOfguid $driverIds = null)
    {
        $this
            ->setWorkplaceId($workplaceId)
            ->setDriverIds($driverIds);
    }
    /**
     * Get workplaceId value
     * @return string|null
     */
    public function getWorkplaceId(): ?string
    {
        return $this->workplaceId;
    }
    /**
     * Set workplaceId value
     * @param string $workplaceId
     * @return \StructType\AddSwitchedOffLogDriversToWorkplace
     */
    public function setWorkplaceId(?string $workplaceId = null): self
    {
        // validation for constraint: string
        if (!is_null($workplaceId) && !is_string($workplaceId)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($workplaceId, true), gettype($workplaceId)), __LINE__);
        }
        // validation for constraint: pattern([\da-fA-F]{8}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{12})
        if (!is_null($workplaceId) && !preg_match('/[\\da-fA-F]{8}-[\\da-fA-F]{4}-[\\da-fA-F]{4}-[\\da-fA-F]{4}-[\\da-fA-F]{12}/', $workplaceId)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a literal that is among the set of character sequences denoted by the regular expression /[\\da-fA-F]{8}-[\\da-fA-F]{4}-[\\da-fA-F]{4}-[\\da-fA-F]{4}-[\\da-fA-F]{12}/', var_export($workplaceId, true)), __LINE__);
        }
        $this->workplaceId = $workplaceId;
        
        return $this;
    }
    /**
     * Get driverIds value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \ArrayType\ArrayOfguid|null
     */
    public function getDriverIds(): ?\ArrayType\ArrayOfguid
    {
        return isset($this->driverIds) ? $this->driverIds : null;
    }
    /**
     * Set driverIds value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \ArrayType\ArrayOfguid $driverIds
     * @return \StructType\AddSwitchedOffLogDriversToWorkplace
     */
    public function setDriverIds(?\ArrayType\ArrayOfguid $driverIds = null): self
    {
        if (is_null($driverIds) || (is_array($driverIds) && empty($driverIds))) {
            unset($this->driverIds);
        } else {
            $this->driverIds = $driverIds;
        }
        
        return $this;
    }
}
