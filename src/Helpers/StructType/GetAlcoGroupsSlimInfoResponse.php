<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetAlcoGroupsSlimInfoResponse StructType
 * @subpackage Structs
 */
class GetAlcoGroupsSlimInfoResponse extends AbstractStructBase
{
    /**
     * The GetAlcoGroupsSlimInfoResult
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \ArrayType\ArrayOfAcsAlcoGroupSlimInfo|null
     */
    protected ?\ArrayType\ArrayOfAcsAlcoGroupSlimInfo $GetAlcoGroupsSlimInfoResult = null;
    /**
     * Constructor method for GetAlcoGroupsSlimInfoResponse
     * @uses GetAlcoGroupsSlimInfoResponse::setGetAlcoGroupsSlimInfoResult()
     * @param \ArrayType\ArrayOfAcsAlcoGroupSlimInfo $getAlcoGroupsSlimInfoResult
     */
    public function __construct(?\ArrayType\ArrayOfAcsAlcoGroupSlimInfo $getAlcoGroupsSlimInfoResult = null)
    {
        $this
            ->setGetAlcoGroupsSlimInfoResult($getAlcoGroupsSlimInfoResult);
    }
    /**
     * Get GetAlcoGroupsSlimInfoResult value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \ArrayType\ArrayOfAcsAlcoGroupSlimInfo|null
     */
    public function getGetAlcoGroupsSlimInfoResult(): ?\ArrayType\ArrayOfAcsAlcoGroupSlimInfo
    {
        return isset($this->GetAlcoGroupsSlimInfoResult) ? $this->GetAlcoGroupsSlimInfoResult : null;
    }
    /**
     * Set GetAlcoGroupsSlimInfoResult value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \ArrayType\ArrayOfAcsAlcoGroupSlimInfo $getAlcoGroupsSlimInfoResult
     * @return \StructType\GetAlcoGroupsSlimInfoResponse
     */
    public function setGetAlcoGroupsSlimInfoResult(?\ArrayType\ArrayOfAcsAlcoGroupSlimInfo $getAlcoGroupsSlimInfoResult = null): self
    {
        if (is_null($getAlcoGroupsSlimInfoResult) || (is_array($getAlcoGroupsSlimInfoResult) && empty($getAlcoGroupsSlimInfoResult))) {
            unset($this->GetAlcoGroupsSlimInfoResult);
        } else {
            $this->GetAlcoGroupsSlimInfoResult = $getAlcoGroupsSlimInfoResult;
        }
        
        return $this;
    }
}
