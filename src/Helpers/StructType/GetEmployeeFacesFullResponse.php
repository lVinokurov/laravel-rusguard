<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetEmployeeFacesFullResponse StructType
 * @subpackage Structs
 */
class GetEmployeeFacesFullResponse extends AbstractStructBase
{
    /**
     * The GetEmployeeFacesFullResult
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \ArrayType\ArrayOfAcsEmployeeFaceVectorFull|null
     */
    protected ?\ArrayType\ArrayOfAcsEmployeeFaceVectorFull $GetEmployeeFacesFullResult = null;
    /**
     * Constructor method for GetEmployeeFacesFullResponse
     * @uses GetEmployeeFacesFullResponse::setGetEmployeeFacesFullResult()
     * @param \ArrayType\ArrayOfAcsEmployeeFaceVectorFull $getEmployeeFacesFullResult
     */
    public function __construct(?\ArrayType\ArrayOfAcsEmployeeFaceVectorFull $getEmployeeFacesFullResult = null)
    {
        $this
            ->setGetEmployeeFacesFullResult($getEmployeeFacesFullResult);
    }
    /**
     * Get GetEmployeeFacesFullResult value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \ArrayType\ArrayOfAcsEmployeeFaceVectorFull|null
     */
    public function getGetEmployeeFacesFullResult(): ?\ArrayType\ArrayOfAcsEmployeeFaceVectorFull
    {
        return isset($this->GetEmployeeFacesFullResult) ? $this->GetEmployeeFacesFullResult : null;
    }
    /**
     * Set GetEmployeeFacesFullResult value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \ArrayType\ArrayOfAcsEmployeeFaceVectorFull $getEmployeeFacesFullResult
     * @return \StructType\GetEmployeeFacesFullResponse
     */
    public function setGetEmployeeFacesFullResult(?\ArrayType\ArrayOfAcsEmployeeFaceVectorFull $getEmployeeFacesFullResult = null): self
    {
        if (is_null($getEmployeeFacesFullResult) || (is_array($getEmployeeFacesFullResult) && empty($getEmployeeFacesFullResult))) {
            unset($this->GetEmployeeFacesFullResult);
        } else {
            $this->GetEmployeeFacesFullResult = $getEmployeeFacesFullResult;
        }
        
        return $this;
    }
}
