<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetLogMessageTypesResponse StructType
 * @subpackage Structs
 */
class GetLogMessageTypesResponse extends AbstractStructBase
{
    /**
     * The GetLogMessageTypesResult
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \ArrayType\ArrayOfLogMessageTypeSlimInfo|null
     */
    protected ?\ArrayType\ArrayOfLogMessageTypeSlimInfo $GetLogMessageTypesResult = null;
    /**
     * Constructor method for GetLogMessageTypesResponse
     * @uses GetLogMessageTypesResponse::setGetLogMessageTypesResult()
     * @param \ArrayType\ArrayOfLogMessageTypeSlimInfo $getLogMessageTypesResult
     */
    public function __construct(?\ArrayType\ArrayOfLogMessageTypeSlimInfo $getLogMessageTypesResult = null)
    {
        $this
            ->setGetLogMessageTypesResult($getLogMessageTypesResult);
    }
    /**
     * Get GetLogMessageTypesResult value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \ArrayType\ArrayOfLogMessageTypeSlimInfo|null
     */
    public function getGetLogMessageTypesResult(): ?\ArrayType\ArrayOfLogMessageTypeSlimInfo
    {
        return isset($this->GetLogMessageTypesResult) ? $this->GetLogMessageTypesResult : null;
    }
    /**
     * Set GetLogMessageTypesResult value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \ArrayType\ArrayOfLogMessageTypeSlimInfo $getLogMessageTypesResult
     * @return \StructType\GetLogMessageTypesResponse
     */
    public function setGetLogMessageTypesResult(?\ArrayType\ArrayOfLogMessageTypeSlimInfo $getLogMessageTypesResult = null): self
    {
        if (is_null($getLogMessageTypesResult) || (is_array($getLogMessageTypesResult) && empty($getLogMessageTypesResult))) {
            unset($this->GetLogMessageTypesResult);
        } else {
            $this->GetLogMessageTypesResult = $getLogMessageTypesResult;
        }
        
        return $this;
    }
}
