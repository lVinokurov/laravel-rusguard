<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetOrganizationAssignmentsForVehicleResponse StructType
 * @subpackage Structs
 */
class GetOrganizationAssignmentsForVehicleResponse extends AbstractStructBase
{
    /**
     * The GetOrganizationAssignmentsForVehicleResult
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \ArrayType\ArrayOfEmployee2OrganizationAssignmentFull|null
     */
    protected ?\ArrayType\ArrayOfEmployee2OrganizationAssignmentFull $GetOrganizationAssignmentsForVehicleResult = null;
    /**
     * Constructor method for GetOrganizationAssignmentsForVehicleResponse
     * @uses GetOrganizationAssignmentsForVehicleResponse::setGetOrganizationAssignmentsForVehicleResult()
     * @param \ArrayType\ArrayOfEmployee2OrganizationAssignmentFull $getOrganizationAssignmentsForVehicleResult
     */
    public function __construct(?\ArrayType\ArrayOfEmployee2OrganizationAssignmentFull $getOrganizationAssignmentsForVehicleResult = null)
    {
        $this
            ->setGetOrganizationAssignmentsForVehicleResult($getOrganizationAssignmentsForVehicleResult);
    }
    /**
     * Get GetOrganizationAssignmentsForVehicleResult value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \ArrayType\ArrayOfEmployee2OrganizationAssignmentFull|null
     */
    public function getGetOrganizationAssignmentsForVehicleResult(): ?\ArrayType\ArrayOfEmployee2OrganizationAssignmentFull
    {
        return isset($this->GetOrganizationAssignmentsForVehicleResult) ? $this->GetOrganizationAssignmentsForVehicleResult : null;
    }
    /**
     * Set GetOrganizationAssignmentsForVehicleResult value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \ArrayType\ArrayOfEmployee2OrganizationAssignmentFull $getOrganizationAssignmentsForVehicleResult
     * @return \StructType\GetOrganizationAssignmentsForVehicleResponse
     */
    public function setGetOrganizationAssignmentsForVehicleResult(?\ArrayType\ArrayOfEmployee2OrganizationAssignmentFull $getOrganizationAssignmentsForVehicleResult = null): self
    {
        if (is_null($getOrganizationAssignmentsForVehicleResult) || (is_array($getOrganizationAssignmentsForVehicleResult) && empty($getOrganizationAssignmentsForVehicleResult))) {
            unset($this->GetOrganizationAssignmentsForVehicleResult);
        } else {
            $this->GetOrganizationAssignmentsForVehicleResult = $getOrganizationAssignmentsForVehicleResult;
        }
        
        return $this;
    }
}
