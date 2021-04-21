<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetWorkplacesResponse StructType
 * @subpackage Structs
 */
class GetWorkplacesResponse extends AbstractStructBase
{
    /**
     * The GetWorkplacesResult
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \ArrayType\ArrayOfWorkplaceInfo|null
     */
    protected ?\ArrayType\ArrayOfWorkplaceInfo $GetWorkplacesResult = null;
    /**
     * Constructor method for GetWorkplacesResponse
     * @uses GetWorkplacesResponse::setGetWorkplacesResult()
     * @param \ArrayType\ArrayOfWorkplaceInfo $getWorkplacesResult
     */
    public function __construct(?\ArrayType\ArrayOfWorkplaceInfo $getWorkplacesResult = null)
    {
        $this
            ->setGetWorkplacesResult($getWorkplacesResult);
    }
    /**
     * Get GetWorkplacesResult value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \ArrayType\ArrayOfWorkplaceInfo|null
     */
    public function getGetWorkplacesResult(): ?\ArrayType\ArrayOfWorkplaceInfo
    {
        return isset($this->GetWorkplacesResult) ? $this->GetWorkplacesResult : null;
    }
    /**
     * Set GetWorkplacesResult value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \ArrayType\ArrayOfWorkplaceInfo $getWorkplacesResult
     * @return \StructType\GetWorkplacesResponse
     */
    public function setGetWorkplacesResult(?\ArrayType\ArrayOfWorkplaceInfo $getWorkplacesResult = null): self
    {
        if (is_null($getWorkplacesResult) || (is_array($getWorkplacesResult) && empty($getWorkplacesResult))) {
            unset($this->GetWorkplacesResult);
        } else {
            $this->GetWorkplacesResult = $getWorkplacesResult;
        }
        
        return $this;
    }
}
