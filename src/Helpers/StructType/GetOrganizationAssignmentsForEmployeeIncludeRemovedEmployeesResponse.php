<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for
 * GetOrganizationAssignmentsForEmployeeIncludeRemovedEmployeesResponse StructType
 * @subpackage Structs
 */
class GetOrganizationAssignmentsForEmployeeIncludeRemovedEmployeesResponse extends AbstractStructBase
{
    /**
     * The GetOrganizationAssignmentsForEmployeeIncludeRemovedEmployeesResult
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \ArrayType\ArrayOfEmployee2OrganizationAssignmentFull|null
     */
    protected ?\ArrayType\ArrayOfEmployee2OrganizationAssignmentFull $GetOrganizationAssignmentsForEmployeeIncludeRemovedEmployeesResult = null;
    /**
     * Constructor method for
     * GetOrganizationAssignmentsForEmployeeIncludeRemovedEmployeesResponse
     * @uses GetOrganizationAssignmentsForEmployeeIncludeRemovedEmployeesResponse::setGetOrganizationAssignmentsForEmployeeIncludeRemovedEmployeesResult()
     * @param \ArrayType\ArrayOfEmployee2OrganizationAssignmentFull $getOrganizationAssignmentsForEmployeeIncludeRemovedEmployeesResult
     */
    public function __construct(?\ArrayType\ArrayOfEmployee2OrganizationAssignmentFull $getOrganizationAssignmentsForEmployeeIncludeRemovedEmployeesResult = null)
    {
        $this
            ->setGetOrganizationAssignmentsForEmployeeIncludeRemovedEmployeesResult($getOrganizationAssignmentsForEmployeeIncludeRemovedEmployeesResult);
    }
    /**
     * Get GetOrganizationAssignmentsForEmployeeIncludeRemovedEmployeesResult value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \ArrayType\ArrayOfEmployee2OrganizationAssignmentFull|null
     */
    public function getGetOrganizationAssignmentsForEmployeeIncludeRemovedEmployeesResult(): ?\ArrayType\ArrayOfEmployee2OrganizationAssignmentFull
    {
        return isset($this->GetOrganizationAssignmentsForEmployeeIncludeRemovedEmployeesResult) ? $this->GetOrganizationAssignmentsForEmployeeIncludeRemovedEmployeesResult : null;
    }
    /**
     * Set GetOrganizationAssignmentsForEmployeeIncludeRemovedEmployeesResult value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \ArrayType\ArrayOfEmployee2OrganizationAssignmentFull $getOrganizationAssignmentsForEmployeeIncludeRemovedEmployeesResult
     * @return \StructType\GetOrganizationAssignmentsForEmployeeIncludeRemovedEmployeesResponse
     */
    public function setGetOrganizationAssignmentsForEmployeeIncludeRemovedEmployeesResult(?\ArrayType\ArrayOfEmployee2OrganizationAssignmentFull $getOrganizationAssignmentsForEmployeeIncludeRemovedEmployeesResult = null): self
    {
        if (is_null($getOrganizationAssignmentsForEmployeeIncludeRemovedEmployeesResult) || (is_array($getOrganizationAssignmentsForEmployeeIncludeRemovedEmployeesResult) && empty($getOrganizationAssignmentsForEmployeeIncludeRemovedEmployeesResult))) {
            unset($this->GetOrganizationAssignmentsForEmployeeIncludeRemovedEmployeesResult);
        } else {
            $this->GetOrganizationAssignmentsForEmployeeIncludeRemovedEmployeesResult = $getOrganizationAssignmentsForEmployeeIncludeRemovedEmployeesResult;
        }
        
        return $this;
    }
}
