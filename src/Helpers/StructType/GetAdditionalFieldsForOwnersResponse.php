<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetAdditionalFieldsForOwnersResponse StructType
 * @subpackage Structs
 */
class GetAdditionalFieldsForOwnersResponse extends AbstractStructBase
{
    /**
     * The GetAdditionalFieldsForOwnersResult
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \ArrayType\ArrayOfOwnerAdditionalFieldsValue|null
     */
    protected ?\ArrayType\ArrayOfOwnerAdditionalFieldsValue $GetAdditionalFieldsForOwnersResult = null;
    /**
     * Constructor method for GetAdditionalFieldsForOwnersResponse
     * @uses GetAdditionalFieldsForOwnersResponse::setGetAdditionalFieldsForOwnersResult()
     * @param \ArrayType\ArrayOfOwnerAdditionalFieldsValue $getAdditionalFieldsForOwnersResult
     */
    public function __construct(?\ArrayType\ArrayOfOwnerAdditionalFieldsValue $getAdditionalFieldsForOwnersResult = null)
    {
        $this
            ->setGetAdditionalFieldsForOwnersResult($getAdditionalFieldsForOwnersResult);
    }
    /**
     * Get GetAdditionalFieldsForOwnersResult value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \ArrayType\ArrayOfOwnerAdditionalFieldsValue|null
     */
    public function getGetAdditionalFieldsForOwnersResult(): ?\ArrayType\ArrayOfOwnerAdditionalFieldsValue
    {
        return isset($this->GetAdditionalFieldsForOwnersResult) ? $this->GetAdditionalFieldsForOwnersResult : null;
    }
    /**
     * Set GetAdditionalFieldsForOwnersResult value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \ArrayType\ArrayOfOwnerAdditionalFieldsValue $getAdditionalFieldsForOwnersResult
     * @return \StructType\GetAdditionalFieldsForOwnersResponse
     */
    public function setGetAdditionalFieldsForOwnersResult(?\ArrayType\ArrayOfOwnerAdditionalFieldsValue $getAdditionalFieldsForOwnersResult = null): self
    {
        if (is_null($getAdditionalFieldsForOwnersResult) || (is_array($getAdditionalFieldsForOwnersResult) && empty($getAdditionalFieldsForOwnersResult))) {
            unset($this->GetAdditionalFieldsForOwnersResult);
        } else {
            $this->GetAdditionalFieldsForOwnersResult = $getAdditionalFieldsForOwnersResult;
        }
        
        return $this;
    }
}
