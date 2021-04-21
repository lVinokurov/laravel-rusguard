<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for AddEmployeePositionsToAlcoGroup StructType
 * @subpackage Structs
 */
class AddEmployeePositionsToAlcoGroup extends AbstractStructBase
{
    /**
     * The alcoGroupId
     * Meta information extracted from the WSDL
     * - base: xs:string
     * - minOccurs: 0
     * - nillable: true
     * - pattern: [\da-fA-F]{8}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{12}
     * - type: tns:guid
     * @var string|null
     */
    protected ?string $alcoGroupId = null;
    /**
     * The positionIds
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \ArrayType\ArrayOfguid|null
     */
    protected ?\ArrayType\ArrayOfguid $positionIds = null;
    /**
     * Constructor method for AddEmployeePositionsToAlcoGroup
     * @uses AddEmployeePositionsToAlcoGroup::setAlcoGroupId()
     * @uses AddEmployeePositionsToAlcoGroup::setPositionIds()
     * @param string $alcoGroupId
     * @param \ArrayType\ArrayOfguid $positionIds
     */
    public function __construct(?string $alcoGroupId = null, ?\ArrayType\ArrayOfguid $positionIds = null)
    {
        $this
            ->setAlcoGroupId($alcoGroupId)
            ->setPositionIds($positionIds);
    }
    /**
     * Get alcoGroupId value
     * @return string|null
     */
    public function getAlcoGroupId(): ?string
    {
        return $this->alcoGroupId;
    }
    /**
     * Set alcoGroupId value
     * @param string $alcoGroupId
     * @return \StructType\AddEmployeePositionsToAlcoGroup
     */
    public function setAlcoGroupId(?string $alcoGroupId = null): self
    {
        // validation for constraint: string
        if (!is_null($alcoGroupId) && !is_string($alcoGroupId)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($alcoGroupId, true), gettype($alcoGroupId)), __LINE__);
        }
        // validation for constraint: pattern([\da-fA-F]{8}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{12})
        if (!is_null($alcoGroupId) && !preg_match('/[\\da-fA-F]{8}-[\\da-fA-F]{4}-[\\da-fA-F]{4}-[\\da-fA-F]{4}-[\\da-fA-F]{12}/', $alcoGroupId)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a literal that is among the set of character sequences denoted by the regular expression /[\\da-fA-F]{8}-[\\da-fA-F]{4}-[\\da-fA-F]{4}-[\\da-fA-F]{4}-[\\da-fA-F]{12}/', var_export($alcoGroupId, true)), __LINE__);
        }
        $this->alcoGroupId = $alcoGroupId;
        
        return $this;
    }
    /**
     * Get positionIds value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \ArrayType\ArrayOfguid|null
     */
    public function getPositionIds(): ?\ArrayType\ArrayOfguid
    {
        return isset($this->positionIds) ? $this->positionIds : null;
    }
    /**
     * Set positionIds value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \ArrayType\ArrayOfguid $positionIds
     * @return \StructType\AddEmployeePositionsToAlcoGroup
     */
    public function setPositionIds(?\ArrayType\ArrayOfguid $positionIds = null): self
    {
        if (is_null($positionIds) || (is_array($positionIds) && empty($positionIds))) {
            unset($this->positionIds);
        } else {
            $this->positionIds = $positionIds;
        }
        
        return $this;
    }
}
