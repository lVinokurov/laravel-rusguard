<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetAcsVehiclesByGroup StructType
 * @subpackage Structs
 */
class GetAcsVehiclesByGroup extends AbstractStructBase
{
    /**
     * The groupIds
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \ArrayType\ArrayOfguid|null
     */
    protected ?\ArrayType\ArrayOfguid $groupIds = null;
    /**
     * The isShowRemoved
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var bool|null
     */
    protected ?bool $isShowRemoved = null;
    /**
     * Constructor method for GetAcsVehiclesByGroup
     * @uses GetAcsVehiclesByGroup::setGroupIds()
     * @uses GetAcsVehiclesByGroup::setIsShowRemoved()
     * @param \ArrayType\ArrayOfguid $groupIds
     * @param bool $isShowRemoved
     */
    public function __construct(?\ArrayType\ArrayOfguid $groupIds = null, ?bool $isShowRemoved = null)
    {
        $this
            ->setGroupIds($groupIds)
            ->setIsShowRemoved($isShowRemoved);
    }
    /**
     * Get groupIds value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \ArrayType\ArrayOfguid|null
     */
    public function getGroupIds(): ?\ArrayType\ArrayOfguid
    {
        return isset($this->groupIds) ? $this->groupIds : null;
    }
    /**
     * Set groupIds value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \ArrayType\ArrayOfguid $groupIds
     * @return \StructType\GetAcsVehiclesByGroup
     */
    public function setGroupIds(?\ArrayType\ArrayOfguid $groupIds = null): self
    {
        if (is_null($groupIds) || (is_array($groupIds) && empty($groupIds))) {
            unset($this->groupIds);
        } else {
            $this->groupIds = $groupIds;
        }
        
        return $this;
    }
    /**
     * Get isShowRemoved value
     * @return bool|null
     */
    public function getIsShowRemoved(): ?bool
    {
        return $this->isShowRemoved;
    }
    /**
     * Set isShowRemoved value
     * @param bool $isShowRemoved
     * @return \StructType\GetAcsVehiclesByGroup
     */
    public function setIsShowRemoved(?bool $isShowRemoved = null): self
    {
        // validation for constraint: boolean
        if (!is_null($isShowRemoved) && !is_bool($isShowRemoved)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($isShowRemoved, true), gettype($isShowRemoved)), __LINE__);
        }
        $this->isShowRemoved = $isShowRemoved;
        
        return $this;
    }
}
