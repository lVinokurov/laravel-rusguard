<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetAcsBoxAccessElementsResponse StructType
 * @subpackage Structs
 */
class GetAcsBoxAccessElementsResponse extends AbstractStructBase
{
    /**
     * The GetAcsBoxAccessElementsResult
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \ArrayType\ArrayOfAcsBoxAccessLevelElementSlimInfo|null
     */
    protected ?\ArrayType\ArrayOfAcsBoxAccessLevelElementSlimInfo $GetAcsBoxAccessElementsResult = null;
    /**
     * Constructor method for GetAcsBoxAccessElementsResponse
     * @uses GetAcsBoxAccessElementsResponse::setGetAcsBoxAccessElementsResult()
     * @param \ArrayType\ArrayOfAcsBoxAccessLevelElementSlimInfo $getAcsBoxAccessElementsResult
     */
    public function __construct(?\ArrayType\ArrayOfAcsBoxAccessLevelElementSlimInfo $getAcsBoxAccessElementsResult = null)
    {
        $this
            ->setGetAcsBoxAccessElementsResult($getAcsBoxAccessElementsResult);
    }
    /**
     * Get GetAcsBoxAccessElementsResult value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \ArrayType\ArrayOfAcsBoxAccessLevelElementSlimInfo|null
     */
    public function getGetAcsBoxAccessElementsResult(): ?\ArrayType\ArrayOfAcsBoxAccessLevelElementSlimInfo
    {
        return isset($this->GetAcsBoxAccessElementsResult) ? $this->GetAcsBoxAccessElementsResult : null;
    }
    /**
     * Set GetAcsBoxAccessElementsResult value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \ArrayType\ArrayOfAcsBoxAccessLevelElementSlimInfo $getAcsBoxAccessElementsResult
     * @return \StructType\GetAcsBoxAccessElementsResponse
     */
    public function setGetAcsBoxAccessElementsResult(?\ArrayType\ArrayOfAcsBoxAccessLevelElementSlimInfo $getAcsBoxAccessElementsResult = null): self
    {
        if (is_null($getAcsBoxAccessElementsResult) || (is_array($getAcsBoxAccessElementsResult) && empty($getAcsBoxAccessElementsResult))) {
            unset($this->GetAcsBoxAccessElementsResult);
        } else {
            $this->GetAcsBoxAccessElementsResult = $getAcsBoxAccessElementsResult;
        }
        
        return $this;
    }
}
