<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetEmployeeGroupsOfReactionEventResponse StructType
 * @subpackage Structs
 */
class GetEmployeeGroupsOfReactionEventResponse extends AbstractStructBase
{
    /**
     * The GetEmployeeGroupsOfReactionEventResult
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \ArrayType\ArrayOfguid|null
     */
    protected ?\ArrayType\ArrayOfguid $GetEmployeeGroupsOfReactionEventResult = null;
    /**
     * Constructor method for GetEmployeeGroupsOfReactionEventResponse
     * @uses GetEmployeeGroupsOfReactionEventResponse::setGetEmployeeGroupsOfReactionEventResult()
     * @param \ArrayType\ArrayOfguid $getEmployeeGroupsOfReactionEventResult
     */
    public function __construct(?\ArrayType\ArrayOfguid $getEmployeeGroupsOfReactionEventResult = null)
    {
        $this
            ->setGetEmployeeGroupsOfReactionEventResult($getEmployeeGroupsOfReactionEventResult);
    }
    /**
     * Get GetEmployeeGroupsOfReactionEventResult value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \ArrayType\ArrayOfguid|null
     */
    public function getGetEmployeeGroupsOfReactionEventResult(): ?\ArrayType\ArrayOfguid
    {
        return isset($this->GetEmployeeGroupsOfReactionEventResult) ? $this->GetEmployeeGroupsOfReactionEventResult : null;
    }
    /**
     * Set GetEmployeeGroupsOfReactionEventResult value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \ArrayType\ArrayOfguid $getEmployeeGroupsOfReactionEventResult
     * @return \StructType\GetEmployeeGroupsOfReactionEventResponse
     */
    public function setGetEmployeeGroupsOfReactionEventResult(?\ArrayType\ArrayOfguid $getEmployeeGroupsOfReactionEventResult = null): self
    {
        if (is_null($getEmployeeGroupsOfReactionEventResult) || (is_array($getEmployeeGroupsOfReactionEventResult) && empty($getEmployeeGroupsOfReactionEventResult))) {
            unset($this->GetEmployeeGroupsOfReactionEventResult);
        } else {
            $this->GetEmployeeGroupsOfReactionEventResult = $getEmployeeGroupsOfReactionEventResult;
        }
        
        return $this;
    }
}
