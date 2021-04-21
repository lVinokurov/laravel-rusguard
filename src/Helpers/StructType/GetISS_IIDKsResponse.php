<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetISS_IIDKsResponse StructType
 * @subpackage Structs
 */
class GetISS_IIDKsResponse extends AbstractStructBase
{
    /**
     * The GetISS_IIDKsResult
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \ArrayType\ArrayOfISS_IIDK_SlimInfo|null
     */
    protected ?\ArrayType\ArrayOfISS_IIDK_SlimInfo $GetISS_IIDKsResult = null;
    /**
     * Constructor method for GetISS_IIDKsResponse
     * @uses GetISS_IIDKsResponse::setGetISS_IIDKsResult()
     * @param \ArrayType\ArrayOfISS_IIDK_SlimInfo $getISS_IIDKsResult
     */
    public function __construct(?\ArrayType\ArrayOfISS_IIDK_SlimInfo $getISS_IIDKsResult = null)
    {
        $this
            ->setGetISS_IIDKsResult($getISS_IIDKsResult);
    }
    /**
     * Get GetISS_IIDKsResult value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \ArrayType\ArrayOfISS_IIDK_SlimInfo|null
     */
    public function getGetISS_IIDKsResult(): ?\ArrayType\ArrayOfISS_IIDK_SlimInfo
    {
        return isset($this->GetISS_IIDKsResult) ? $this->GetISS_IIDKsResult : null;
    }
    /**
     * Set GetISS_IIDKsResult value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \ArrayType\ArrayOfISS_IIDK_SlimInfo $getISS_IIDKsResult
     * @return \StructType\GetISS_IIDKsResponse
     */
    public function setGetISS_IIDKsResult(?\ArrayType\ArrayOfISS_IIDK_SlimInfo $getISS_IIDKsResult = null): self
    {
        if (is_null($getISS_IIDKsResult) || (is_array($getISS_IIDKsResult) && empty($getISS_IIDKsResult))) {
            unset($this->GetISS_IIDKsResult);
        } else {
            $this->GetISS_IIDKsResult = $getISS_IIDKsResult;
        }
        
        return $this;
    }
}
