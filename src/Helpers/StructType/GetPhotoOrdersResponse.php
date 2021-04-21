<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetPhotoOrdersResponse StructType
 * @subpackage Structs
 */
class GetPhotoOrdersResponse extends AbstractStructBase
{
    /**
     * The GetPhotoOrdersResult
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \ArrayType\ArrayOfPhotoOrder|null
     */
    protected ?\ArrayType\ArrayOfPhotoOrder $GetPhotoOrdersResult = null;
    /**
     * Constructor method for GetPhotoOrdersResponse
     * @uses GetPhotoOrdersResponse::setGetPhotoOrdersResult()
     * @param \ArrayType\ArrayOfPhotoOrder $getPhotoOrdersResult
     */
    public function __construct(?\ArrayType\ArrayOfPhotoOrder $getPhotoOrdersResult = null)
    {
        $this
            ->setGetPhotoOrdersResult($getPhotoOrdersResult);
    }
    /**
     * Get GetPhotoOrdersResult value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \ArrayType\ArrayOfPhotoOrder|null
     */
    public function getGetPhotoOrdersResult(): ?\ArrayType\ArrayOfPhotoOrder
    {
        return isset($this->GetPhotoOrdersResult) ? $this->GetPhotoOrdersResult : null;
    }
    /**
     * Set GetPhotoOrdersResult value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \ArrayType\ArrayOfPhotoOrder $getPhotoOrdersResult
     * @return \StructType\GetPhotoOrdersResponse
     */
    public function setGetPhotoOrdersResult(?\ArrayType\ArrayOfPhotoOrder $getPhotoOrdersResult = null): self
    {
        if (is_null($getPhotoOrdersResult) || (is_array($getPhotoOrdersResult) && empty($getPhotoOrdersResult))) {
            unset($this->GetPhotoOrdersResult);
        } else {
            $this->GetPhotoOrdersResult = $getPhotoOrdersResult;
        }
        
        return $this;
    }
}
