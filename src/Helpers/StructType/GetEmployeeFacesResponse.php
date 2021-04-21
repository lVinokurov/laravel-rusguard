<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetEmployeeFacesResponse StructType
 * @subpackage Structs
 */
class GetEmployeeFacesResponse extends AbstractStructBase
{
    /**
     * The GetEmployeeFacesResult
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \ArrayType\ArrayOfAcsEmployeeFaceVector|null
     */
    protected ?\ArrayType\ArrayOfAcsEmployeeFaceVector $GetEmployeeFacesResult = null;
    /**
     * Constructor method for GetEmployeeFacesResponse
     * @uses GetEmployeeFacesResponse::setGetEmployeeFacesResult()
     * @param \ArrayType\ArrayOfAcsEmployeeFaceVector $getEmployeeFacesResult
     */
    public function __construct(?\ArrayType\ArrayOfAcsEmployeeFaceVector $getEmployeeFacesResult = null)
    {
        $this
            ->setGetEmployeeFacesResult($getEmployeeFacesResult);
    }
    /**
     * Get GetEmployeeFacesResult value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \ArrayType\ArrayOfAcsEmployeeFaceVector|null
     */
    public function getGetEmployeeFacesResult(): ?\ArrayType\ArrayOfAcsEmployeeFaceVector
    {
        return isset($this->GetEmployeeFacesResult) ? $this->GetEmployeeFacesResult : null;
    }
    /**
     * Set GetEmployeeFacesResult value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \ArrayType\ArrayOfAcsEmployeeFaceVector $getEmployeeFacesResult
     * @return \StructType\GetEmployeeFacesResponse
     */
    public function setGetEmployeeFacesResult(?\ArrayType\ArrayOfAcsEmployeeFaceVector $getEmployeeFacesResult = null): self
    {
        if (is_null($getEmployeeFacesResult) || (is_array($getEmployeeFacesResult) && empty($getEmployeeFacesResult))) {
            unset($this->GetEmployeeFacesResult);
        } else {
            $this->GetEmployeeFacesResult = $getEmployeeFacesResult;
        }
        
        return $this;
    }
}
