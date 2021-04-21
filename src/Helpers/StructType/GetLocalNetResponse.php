<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetLocalNetResponse StructType
 * @subpackage Structs
 */
class GetLocalNetResponse extends AbstractStructBase
{
    /**
     * The GetLocalNetResult
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \StructType\LNetInfo|null
     */
    protected ?\StructType\LNetInfo $GetLocalNetResult = null;
    /**
     * Constructor method for GetLocalNetResponse
     * @uses GetLocalNetResponse::setGetLocalNetResult()
     * @param \StructType\LNetInfo $getLocalNetResult
     */
    public function __construct(?\StructType\LNetInfo $getLocalNetResult = null)
    {
        $this
            ->setGetLocalNetResult($getLocalNetResult);
    }
    /**
     * Get GetLocalNetResult value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \StructType\LNetInfo|null
     */
    public function getGetLocalNetResult(): ?\StructType\LNetInfo
    {
        return isset($this->GetLocalNetResult) ? $this->GetLocalNetResult : null;
    }
    /**
     * Set GetLocalNetResult value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \StructType\LNetInfo $getLocalNetResult
     * @return \StructType\GetLocalNetResponse
     */
    public function setGetLocalNetResult(?\StructType\LNetInfo $getLocalNetResult = null): self
    {
        if (is_null($getLocalNetResult) || (is_array($getLocalNetResult) && empty($getLocalNetResult))) {
            unset($this->GetLocalNetResult);
        } else {
            $this->GetLocalNetResult = $getLocalNetResult;
        }
        
        return $this;
    }
}
