<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetEmployeeGroupsOfReactionActionResponse StructType
 * @subpackage Structs
 */
class GetEmployeeGroupsOfReactionActionResponse extends AbstractStructBase
{
    /**
     * The GetEmployeeGroupsOfReactionActionResult
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \ArrayType\ArrayOfguid|null
     */
    protected ?\ArrayType\ArrayOfguid $GetEmployeeGroupsOfReactionActionResult = null;
    /**
     * Constructor method for GetEmployeeGroupsOfReactionActionResponse
     * @uses GetEmployeeGroupsOfReactionActionResponse::setGetEmployeeGroupsOfReactionActionResult()
     * @param \ArrayType\ArrayOfguid $getEmployeeGroupsOfReactionActionResult
     */
    public function __construct(?\ArrayType\ArrayOfguid $getEmployeeGroupsOfReactionActionResult = null)
    {
        $this
            ->setGetEmployeeGroupsOfReactionActionResult($getEmployeeGroupsOfReactionActionResult);
    }
    /**
     * Get GetEmployeeGroupsOfReactionActionResult value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \ArrayType\ArrayOfguid|null
     */
    public function getGetEmployeeGroupsOfReactionActionResult(): ?\ArrayType\ArrayOfguid
    {
        return isset($this->GetEmployeeGroupsOfReactionActionResult) ? $this->GetEmployeeGroupsOfReactionActionResult : null;
    }
    /**
     * Set GetEmployeeGroupsOfReactionActionResult value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \ArrayType\ArrayOfguid $getEmployeeGroupsOfReactionActionResult
     * @return \StructType\GetEmployeeGroupsOfReactionActionResponse
     */
    public function setGetEmployeeGroupsOfReactionActionResult(?\ArrayType\ArrayOfguid $getEmployeeGroupsOfReactionActionResult = null): self
    {
        if (is_null($getEmployeeGroupsOfReactionActionResult) || (is_array($getEmployeeGroupsOfReactionActionResult) && empty($getEmployeeGroupsOfReactionActionResult))) {
            unset($this->GetEmployeeGroupsOfReactionActionResult);
        } else {
            $this->GetEmployeeGroupsOfReactionActionResult = $getEmployeeGroupsOfReactionActionResult;
        }
        
        return $this;
    }
}
