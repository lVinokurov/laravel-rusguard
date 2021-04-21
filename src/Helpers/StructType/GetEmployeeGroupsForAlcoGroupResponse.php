<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetEmployeeGroupsForAlcoGroupResponse StructType
 * @subpackage Structs
 */
class GetEmployeeGroupsForAlcoGroupResponse extends AbstractStructBase
{
    /**
     * The GetEmployeeGroupsForAlcoGroupResult
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \ArrayType\ArrayOfEmployeeGroupForAlcoGroupFull|null
     */
    protected ?\ArrayType\ArrayOfEmployeeGroupForAlcoGroupFull $GetEmployeeGroupsForAlcoGroupResult = null;
    /**
     * Constructor method for GetEmployeeGroupsForAlcoGroupResponse
     * @uses GetEmployeeGroupsForAlcoGroupResponse::setGetEmployeeGroupsForAlcoGroupResult()
     * @param \ArrayType\ArrayOfEmployeeGroupForAlcoGroupFull $getEmployeeGroupsForAlcoGroupResult
     */
    public function __construct(?\ArrayType\ArrayOfEmployeeGroupForAlcoGroupFull $getEmployeeGroupsForAlcoGroupResult = null)
    {
        $this
            ->setGetEmployeeGroupsForAlcoGroupResult($getEmployeeGroupsForAlcoGroupResult);
    }
    /**
     * Get GetEmployeeGroupsForAlcoGroupResult value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \ArrayType\ArrayOfEmployeeGroupForAlcoGroupFull|null
     */
    public function getGetEmployeeGroupsForAlcoGroupResult(): ?\ArrayType\ArrayOfEmployeeGroupForAlcoGroupFull
    {
        return isset($this->GetEmployeeGroupsForAlcoGroupResult) ? $this->GetEmployeeGroupsForAlcoGroupResult : null;
    }
    /**
     * Set GetEmployeeGroupsForAlcoGroupResult value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \ArrayType\ArrayOfEmployeeGroupForAlcoGroupFull $getEmployeeGroupsForAlcoGroupResult
     * @return \StructType\GetEmployeeGroupsForAlcoGroupResponse
     */
    public function setGetEmployeeGroupsForAlcoGroupResult(?\ArrayType\ArrayOfEmployeeGroupForAlcoGroupFull $getEmployeeGroupsForAlcoGroupResult = null): self
    {
        if (is_null($getEmployeeGroupsForAlcoGroupResult) || (is_array($getEmployeeGroupsForAlcoGroupResult) && empty($getEmployeeGroupsForAlcoGroupResult))) {
            unset($this->GetEmployeeGroupsForAlcoGroupResult);
        } else {
            $this->GetEmployeeGroupsForAlcoGroupResult = $getEmployeeGroupsForAlcoGroupResult;
        }
        
        return $this;
    }
}
