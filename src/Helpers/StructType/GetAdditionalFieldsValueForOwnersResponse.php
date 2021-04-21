<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetAdditionalFieldsValueForOwnersResponse StructType
 * @subpackage Structs
 */
class GetAdditionalFieldsValueForOwnersResponse extends AbstractStructBase
{
    /**
     * The GetAdditionalFieldsValueForOwnersResult
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \ArrayType\ArrayOfOwnerAdditionalFieldsValue|null
     */
    protected ?\ArrayType\ArrayOfOwnerAdditionalFieldsValue $GetAdditionalFieldsValueForOwnersResult = null;
    /**
     * Constructor method for GetAdditionalFieldsValueForOwnersResponse
     * @uses GetAdditionalFieldsValueForOwnersResponse::setGetAdditionalFieldsValueForOwnersResult()
     * @param \ArrayType\ArrayOfOwnerAdditionalFieldsValue $getAdditionalFieldsValueForOwnersResult
     */
    public function __construct(?\ArrayType\ArrayOfOwnerAdditionalFieldsValue $getAdditionalFieldsValueForOwnersResult = null)
    {
        $this
            ->setGetAdditionalFieldsValueForOwnersResult($getAdditionalFieldsValueForOwnersResult);
    }
    /**
     * Get GetAdditionalFieldsValueForOwnersResult value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \ArrayType\ArrayOfOwnerAdditionalFieldsValue|null
     */
    public function getGetAdditionalFieldsValueForOwnersResult(): ?\ArrayType\ArrayOfOwnerAdditionalFieldsValue
    {
        return isset($this->GetAdditionalFieldsValueForOwnersResult) ? $this->GetAdditionalFieldsValueForOwnersResult : null;
    }
    /**
     * Set GetAdditionalFieldsValueForOwnersResult value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \ArrayType\ArrayOfOwnerAdditionalFieldsValue $getAdditionalFieldsValueForOwnersResult
     * @return \StructType\GetAdditionalFieldsValueForOwnersResponse
     */
    public function setGetAdditionalFieldsValueForOwnersResult(?\ArrayType\ArrayOfOwnerAdditionalFieldsValue $getAdditionalFieldsValueForOwnersResult = null): self
    {
        if (is_null($getAdditionalFieldsValueForOwnersResult) || (is_array($getAdditionalFieldsValueForOwnersResult) && empty($getAdditionalFieldsValueForOwnersResult))) {
            unset($this->GetAdditionalFieldsValueForOwnersResult);
        } else {
            $this->GetAdditionalFieldsValueForOwnersResult = $getAdditionalFieldsValueForOwnersResult;
        }
        
        return $this;
    }
}
