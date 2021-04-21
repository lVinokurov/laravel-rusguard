<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetOrganizationAssignmentsForEmployeeResponse StructType
 * @subpackage Structs
 */
class GetOrganizationAssignmentsForEmployeeResponse extends AbstractStructBase
{
    /**
     * The GetOrganizationAssignmentsForEmployeeResult
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \ArrayType\ArrayOfEmployee2OrganizationAssignmentFull|null
     */
    protected ?\ArrayType\ArrayOfEmployee2OrganizationAssignmentFull $GetOrganizationAssignmentsForEmployeeResult = null;
    /**
     * Constructor method for GetOrganizationAssignmentsForEmployeeResponse
     * @uses GetOrganizationAssignmentsForEmployeeResponse::setGetOrganizationAssignmentsForEmployeeResult()
     * @param \ArrayType\ArrayOfEmployee2OrganizationAssignmentFull $getOrganizationAssignmentsForEmployeeResult
     */
    public function __construct(?\ArrayType\ArrayOfEmployee2OrganizationAssignmentFull $getOrganizationAssignmentsForEmployeeResult = null)
    {
        $this
            ->setGetOrganizationAssignmentsForEmployeeResult($getOrganizationAssignmentsForEmployeeResult);
    }
    /**
     * Get GetOrganizationAssignmentsForEmployeeResult value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \ArrayType\ArrayOfEmployee2OrganizationAssignmentFull|null
     */
    public function getGetOrganizationAssignmentsForEmployeeResult(): ?\ArrayType\ArrayOfEmployee2OrganizationAssignmentFull
    {
        return isset($this->GetOrganizationAssignmentsForEmployeeResult) ? $this->GetOrganizationAssignmentsForEmployeeResult : null;
    }
    /**
     * Set GetOrganizationAssignmentsForEmployeeResult value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \ArrayType\ArrayOfEmployee2OrganizationAssignmentFull $getOrganizationAssignmentsForEmployeeResult
     * @return \StructType\GetOrganizationAssignmentsForEmployeeResponse
     */
    public function setGetOrganizationAssignmentsForEmployeeResult(?\ArrayType\ArrayOfEmployee2OrganizationAssignmentFull $getOrganizationAssignmentsForEmployeeResult = null): self
    {
        if (is_null($getOrganizationAssignmentsForEmployeeResult) || (is_array($getOrganizationAssignmentsForEmployeeResult) && empty($getOrganizationAssignmentsForEmployeeResult))) {
            unset($this->GetOrganizationAssignmentsForEmployeeResult);
        } else {
            $this->GetOrganizationAssignmentsForEmployeeResult = $getOrganizationAssignmentsForEmployeeResult;
        }
        
        return $this;
    }
}
