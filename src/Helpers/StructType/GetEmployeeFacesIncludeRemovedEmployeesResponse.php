<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetEmployeeFacesIncludeRemovedEmployeesResponse StructType
 * @subpackage Structs
 */
class GetEmployeeFacesIncludeRemovedEmployeesResponse extends AbstractStructBase
{
    /**
     * The GetEmployeeFacesIncludeRemovedEmployeesResult
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \ArrayType\ArrayOfAcsEmployeeFaceVector|null
     */
    protected ?\ArrayType\ArrayOfAcsEmployeeFaceVector $GetEmployeeFacesIncludeRemovedEmployeesResult = null;
    /**
     * Constructor method for GetEmployeeFacesIncludeRemovedEmployeesResponse
     * @uses GetEmployeeFacesIncludeRemovedEmployeesResponse::setGetEmployeeFacesIncludeRemovedEmployeesResult()
     * @param \ArrayType\ArrayOfAcsEmployeeFaceVector $getEmployeeFacesIncludeRemovedEmployeesResult
     */
    public function __construct(?\ArrayType\ArrayOfAcsEmployeeFaceVector $getEmployeeFacesIncludeRemovedEmployeesResult = null)
    {
        $this
            ->setGetEmployeeFacesIncludeRemovedEmployeesResult($getEmployeeFacesIncludeRemovedEmployeesResult);
    }
    /**
     * Get GetEmployeeFacesIncludeRemovedEmployeesResult value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \ArrayType\ArrayOfAcsEmployeeFaceVector|null
     */
    public function getGetEmployeeFacesIncludeRemovedEmployeesResult(): ?\ArrayType\ArrayOfAcsEmployeeFaceVector
    {
        return isset($this->GetEmployeeFacesIncludeRemovedEmployeesResult) ? $this->GetEmployeeFacesIncludeRemovedEmployeesResult : null;
    }
    /**
     * Set GetEmployeeFacesIncludeRemovedEmployeesResult value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \ArrayType\ArrayOfAcsEmployeeFaceVector $getEmployeeFacesIncludeRemovedEmployeesResult
     * @return \StructType\GetEmployeeFacesIncludeRemovedEmployeesResponse
     */
    public function setGetEmployeeFacesIncludeRemovedEmployeesResult(?\ArrayType\ArrayOfAcsEmployeeFaceVector $getEmployeeFacesIncludeRemovedEmployeesResult = null): self
    {
        if (is_null($getEmployeeFacesIncludeRemovedEmployeesResult) || (is_array($getEmployeeFacesIncludeRemovedEmployeesResult) && empty($getEmployeeFacesIncludeRemovedEmployeesResult))) {
            unset($this->GetEmployeeFacesIncludeRemovedEmployeesResult);
        } else {
            $this->GetEmployeeFacesIncludeRemovedEmployeesResult = $getEmployeeFacesIncludeRemovedEmployeesResult;
        }
        
        return $this;
    }
}
