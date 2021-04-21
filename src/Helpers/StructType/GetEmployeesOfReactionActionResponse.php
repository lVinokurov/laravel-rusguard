<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetEmployeesOfReactionActionResponse StructType
 * @subpackage Structs
 */
class GetEmployeesOfReactionActionResponse extends AbstractStructBase
{
    /**
     * The GetEmployeesOfReactionActionResult
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \ArrayType\ArrayOfguid|null
     */
    protected ?\ArrayType\ArrayOfguid $GetEmployeesOfReactionActionResult = null;
    /**
     * Constructor method for GetEmployeesOfReactionActionResponse
     * @uses GetEmployeesOfReactionActionResponse::setGetEmployeesOfReactionActionResult()
     * @param \ArrayType\ArrayOfguid $getEmployeesOfReactionActionResult
     */
    public function __construct(?\ArrayType\ArrayOfguid $getEmployeesOfReactionActionResult = null)
    {
        $this
            ->setGetEmployeesOfReactionActionResult($getEmployeesOfReactionActionResult);
    }
    /**
     * Get GetEmployeesOfReactionActionResult value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \ArrayType\ArrayOfguid|null
     */
    public function getGetEmployeesOfReactionActionResult(): ?\ArrayType\ArrayOfguid
    {
        return isset($this->GetEmployeesOfReactionActionResult) ? $this->GetEmployeesOfReactionActionResult : null;
    }
    /**
     * Set GetEmployeesOfReactionActionResult value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \ArrayType\ArrayOfguid $getEmployeesOfReactionActionResult
     * @return \StructType\GetEmployeesOfReactionActionResponse
     */
    public function setGetEmployeesOfReactionActionResult(?\ArrayType\ArrayOfguid $getEmployeesOfReactionActionResult = null): self
    {
        if (is_null($getEmployeesOfReactionActionResult) || (is_array($getEmployeesOfReactionActionResult) && empty($getEmployeesOfReactionActionResult))) {
            unset($this->GetEmployeesOfReactionActionResult);
        } else {
            $this->GetEmployeesOfReactionActionResult = $getEmployeesOfReactionActionResult;
        }
        
        return $this;
    }
}
