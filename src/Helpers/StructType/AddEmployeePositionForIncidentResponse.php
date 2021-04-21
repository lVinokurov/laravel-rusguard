<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for AddEmployeePositionForIncidentResponse StructType
 * @subpackage Structs
 */
class AddEmployeePositionForIncidentResponse extends AbstractStructBase
{
    /**
     * The AddEmployeePositionForIncidentResult
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \StructType\LEmployeePositionInfo|null
     */
    protected ?\StructType\LEmployeePositionInfo $AddEmployeePositionForIncidentResult = null;
    /**
     * Constructor method for AddEmployeePositionForIncidentResponse
     * @uses AddEmployeePositionForIncidentResponse::setAddEmployeePositionForIncidentResult()
     * @param \StructType\LEmployeePositionInfo $addEmployeePositionForIncidentResult
     */
    public function __construct(?\StructType\LEmployeePositionInfo $addEmployeePositionForIncidentResult = null)
    {
        $this
            ->setAddEmployeePositionForIncidentResult($addEmployeePositionForIncidentResult);
    }
    /**
     * Get AddEmployeePositionForIncidentResult value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \StructType\LEmployeePositionInfo|null
     */
    public function getAddEmployeePositionForIncidentResult(): ?\StructType\LEmployeePositionInfo
    {
        return isset($this->AddEmployeePositionForIncidentResult) ? $this->AddEmployeePositionForIncidentResult : null;
    }
    /**
     * Set AddEmployeePositionForIncidentResult value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \StructType\LEmployeePositionInfo $addEmployeePositionForIncidentResult
     * @return \StructType\AddEmployeePositionForIncidentResponse
     */
    public function setAddEmployeePositionForIncidentResult(?\StructType\LEmployeePositionInfo $addEmployeePositionForIncidentResult = null): self
    {
        if (is_null($addEmployeePositionForIncidentResult) || (is_array($addEmployeePositionForIncidentResult) && empty($addEmployeePositionForIncidentResult))) {
            unset($this->AddEmployeePositionForIncidentResult);
        } else {
            $this->AddEmployeePositionForIncidentResult = $addEmployeePositionForIncidentResult;
        }
        
        return $this;
    }
}
