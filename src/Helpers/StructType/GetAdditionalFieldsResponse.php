<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetAdditionalFieldsResponse StructType
 * @subpackage Structs
 */
class GetAdditionalFieldsResponse extends AbstractStructBase
{
    /**
     * The GetAdditionalFieldsResult
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \ArrayType\ArrayOfAdditionalFieldValue|null
     */
    protected ?\ArrayType\ArrayOfAdditionalFieldValue $GetAdditionalFieldsResult = null;
    /**
     * Constructor method for GetAdditionalFieldsResponse
     * @uses GetAdditionalFieldsResponse::setGetAdditionalFieldsResult()
     * @param \ArrayType\ArrayOfAdditionalFieldValue $getAdditionalFieldsResult
     */
    public function __construct(?\ArrayType\ArrayOfAdditionalFieldValue $getAdditionalFieldsResult = null)
    {
        $this
            ->setGetAdditionalFieldsResult($getAdditionalFieldsResult);
    }
    /**
     * Get GetAdditionalFieldsResult value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \ArrayType\ArrayOfAdditionalFieldValue|null
     */
    public function getGetAdditionalFieldsResult(): ?\ArrayType\ArrayOfAdditionalFieldValue
    {
        return isset($this->GetAdditionalFieldsResult) ? $this->GetAdditionalFieldsResult : null;
    }
    /**
     * Set GetAdditionalFieldsResult value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \ArrayType\ArrayOfAdditionalFieldValue $getAdditionalFieldsResult
     * @return \StructType\GetAdditionalFieldsResponse
     */
    public function setGetAdditionalFieldsResult(?\ArrayType\ArrayOfAdditionalFieldValue $getAdditionalFieldsResult = null): self
    {
        if (is_null($getAdditionalFieldsResult) || (is_array($getAdditionalFieldsResult) && empty($getAdditionalFieldsResult))) {
            unset($this->GetAdditionalFieldsResult);
        } else {
            $this->GetAdditionalFieldsResult = $getAdditionalFieldsResult;
        }
        
        return $this;
    }
}
