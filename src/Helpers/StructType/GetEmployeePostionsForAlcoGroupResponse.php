<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetEmployeePostionsForAlcoGroupResponse StructType
 * @subpackage Structs
 */
class GetEmployeePostionsForAlcoGroupResponse extends AbstractStructBase
{
    /**
     * The GetEmployeePostionsForAlcoGroupResult
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \ArrayType\ArrayOfEmployeePositionSlimInfo|null
     */
    protected ?\ArrayType\ArrayOfEmployeePositionSlimInfo $GetEmployeePostionsForAlcoGroupResult = null;
    /**
     * Constructor method for GetEmployeePostionsForAlcoGroupResponse
     * @uses GetEmployeePostionsForAlcoGroupResponse::setGetEmployeePostionsForAlcoGroupResult()
     * @param \ArrayType\ArrayOfEmployeePositionSlimInfo $getEmployeePostionsForAlcoGroupResult
     */
    public function __construct(?\ArrayType\ArrayOfEmployeePositionSlimInfo $getEmployeePostionsForAlcoGroupResult = null)
    {
        $this
            ->setGetEmployeePostionsForAlcoGroupResult($getEmployeePostionsForAlcoGroupResult);
    }
    /**
     * Get GetEmployeePostionsForAlcoGroupResult value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \ArrayType\ArrayOfEmployeePositionSlimInfo|null
     */
    public function getGetEmployeePostionsForAlcoGroupResult(): ?\ArrayType\ArrayOfEmployeePositionSlimInfo
    {
        return isset($this->GetEmployeePostionsForAlcoGroupResult) ? $this->GetEmployeePostionsForAlcoGroupResult : null;
    }
    /**
     * Set GetEmployeePostionsForAlcoGroupResult value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \ArrayType\ArrayOfEmployeePositionSlimInfo $getEmployeePostionsForAlcoGroupResult
     * @return \StructType\GetEmployeePostionsForAlcoGroupResponse
     */
    public function setGetEmployeePostionsForAlcoGroupResult(?\ArrayType\ArrayOfEmployeePositionSlimInfo $getEmployeePostionsForAlcoGroupResult = null): self
    {
        if (is_null($getEmployeePostionsForAlcoGroupResult) || (is_array($getEmployeePostionsForAlcoGroupResult) && empty($getEmployeePostionsForAlcoGroupResult))) {
            unset($this->GetEmployeePostionsForAlcoGroupResult);
        } else {
            $this->GetEmployeePostionsForAlcoGroupResult = $getEmployeePostionsForAlcoGroupResult;
        }
        
        return $this;
    }
}
