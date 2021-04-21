<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetEmployeesOfReactionEventResponse StructType
 * @subpackage Structs
 */
class GetEmployeesOfReactionEventResponse extends AbstractStructBase
{
    /**
     * The GetEmployeesOfReactionEventResult
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \ArrayType\ArrayOfguid|null
     */
    protected ?\ArrayType\ArrayOfguid $GetEmployeesOfReactionEventResult = null;
    /**
     * Constructor method for GetEmployeesOfReactionEventResponse
     * @uses GetEmployeesOfReactionEventResponse::setGetEmployeesOfReactionEventResult()
     * @param \ArrayType\ArrayOfguid $getEmployeesOfReactionEventResult
     */
    public function __construct(?\ArrayType\ArrayOfguid $getEmployeesOfReactionEventResult = null)
    {
        $this
            ->setGetEmployeesOfReactionEventResult($getEmployeesOfReactionEventResult);
    }
    /**
     * Get GetEmployeesOfReactionEventResult value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \ArrayType\ArrayOfguid|null
     */
    public function getGetEmployeesOfReactionEventResult(): ?\ArrayType\ArrayOfguid
    {
        return isset($this->GetEmployeesOfReactionEventResult) ? $this->GetEmployeesOfReactionEventResult : null;
    }
    /**
     * Set GetEmployeesOfReactionEventResult value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \ArrayType\ArrayOfguid $getEmployeesOfReactionEventResult
     * @return \StructType\GetEmployeesOfReactionEventResponse
     */
    public function setGetEmployeesOfReactionEventResult(?\ArrayType\ArrayOfguid $getEmployeesOfReactionEventResult = null): self
    {
        if (is_null($getEmployeesOfReactionEventResult) || (is_array($getEmployeesOfReactionEventResult) && empty($getEmployeesOfReactionEventResult))) {
            unset($this->GetEmployeesOfReactionEventResult);
        } else {
            $this->GetEmployeesOfReactionEventResult = $getEmployeesOfReactionEventResult;
        }
        
        return $this;
    }
}
