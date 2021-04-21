<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetVariableResponse StructType
 * @subpackage Structs
 */
class GetVariableResponse extends AbstractStructBase
{
    /**
     * The GetVariableResult
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \StructType\VariableInfo|null
     */
    protected ?\StructType\VariableInfo $GetVariableResult = null;
    /**
     * Constructor method for GetVariableResponse
     * @uses GetVariableResponse::setGetVariableResult()
     * @param \StructType\VariableInfo $getVariableResult
     */
    public function __construct(?\StructType\VariableInfo $getVariableResult = null)
    {
        $this
            ->setGetVariableResult($getVariableResult);
    }
    /**
     * Get GetVariableResult value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \StructType\VariableInfo|null
     */
    public function getGetVariableResult(): ?\StructType\VariableInfo
    {
        return isset($this->GetVariableResult) ? $this->GetVariableResult : null;
    }
    /**
     * Set GetVariableResult value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \StructType\VariableInfo $getVariableResult
     * @return \StructType\GetVariableResponse
     */
    public function setGetVariableResult(?\StructType\VariableInfo $getVariableResult = null): self
    {
        if (is_null($getVariableResult) || (is_array($getVariableResult) && empty($getVariableResult))) {
            unset($this->GetVariableResult);
        } else {
            $this->GetVariableResult = $getVariableResult;
        }
        
        return $this;
    }
}
