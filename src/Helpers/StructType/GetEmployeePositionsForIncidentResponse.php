<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetEmployeePositionsForIncidentResponse StructType
 * @subpackage Structs
 */
class GetEmployeePositionsForIncidentResponse extends AbstractStructBase
{
    /**
     * The GetEmployeePositionsForIncidentResult
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \StructType\LEmployeePositionsData|null
     */
    protected ?\StructType\LEmployeePositionsData $GetEmployeePositionsForIncidentResult = null;
    /**
     * Constructor method for GetEmployeePositionsForIncidentResponse
     * @uses GetEmployeePositionsForIncidentResponse::setGetEmployeePositionsForIncidentResult()
     * @param \StructType\LEmployeePositionsData $getEmployeePositionsForIncidentResult
     */
    public function __construct(?\StructType\LEmployeePositionsData $getEmployeePositionsForIncidentResult = null)
    {
        $this
            ->setGetEmployeePositionsForIncidentResult($getEmployeePositionsForIncidentResult);
    }
    /**
     * Get GetEmployeePositionsForIncidentResult value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \StructType\LEmployeePositionsData|null
     */
    public function getGetEmployeePositionsForIncidentResult(): ?\StructType\LEmployeePositionsData
    {
        return isset($this->GetEmployeePositionsForIncidentResult) ? $this->GetEmployeePositionsForIncidentResult : null;
    }
    /**
     * Set GetEmployeePositionsForIncidentResult value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \StructType\LEmployeePositionsData $getEmployeePositionsForIncidentResult
     * @return \StructType\GetEmployeePositionsForIncidentResponse
     */
    public function setGetEmployeePositionsForIncidentResult(?\StructType\LEmployeePositionsData $getEmployeePositionsForIncidentResult = null): self
    {
        if (is_null($getEmployeePositionsForIncidentResult) || (is_array($getEmployeePositionsForIncidentResult) && empty($getEmployeePositionsForIncidentResult))) {
            unset($this->GetEmployeePositionsForIncidentResult);
        } else {
            $this->GetEmployeePositionsForIncidentResult = $getEmployeePositionsForIncidentResult;
        }
        
        return $this;
    }
}
