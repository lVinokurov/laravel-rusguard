<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetLogMessageSubtypesResponse StructType
 * @subpackage Structs
 */
class GetLogMessageSubtypesResponse extends AbstractStructBase
{
    /**
     * The GetLogMessageSubtypesResult
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \ArrayType\ArrayOfLogMessageSubtypeSlimInfo|null
     */
    protected ?\ArrayType\ArrayOfLogMessageSubtypeSlimInfo $GetLogMessageSubtypesResult = null;
    /**
     * Constructor method for GetLogMessageSubtypesResponse
     * @uses GetLogMessageSubtypesResponse::setGetLogMessageSubtypesResult()
     * @param \ArrayType\ArrayOfLogMessageSubtypeSlimInfo $getLogMessageSubtypesResult
     */
    public function __construct(?\ArrayType\ArrayOfLogMessageSubtypeSlimInfo $getLogMessageSubtypesResult = null)
    {
        $this
            ->setGetLogMessageSubtypesResult($getLogMessageSubtypesResult);
    }
    /**
     * Get GetLogMessageSubtypesResult value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \ArrayType\ArrayOfLogMessageSubtypeSlimInfo|null
     */
    public function getGetLogMessageSubtypesResult(): ?\ArrayType\ArrayOfLogMessageSubtypeSlimInfo
    {
        return isset($this->GetLogMessageSubtypesResult) ? $this->GetLogMessageSubtypesResult : null;
    }
    /**
     * Set GetLogMessageSubtypesResult value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \ArrayType\ArrayOfLogMessageSubtypeSlimInfo $getLogMessageSubtypesResult
     * @return \StructType\GetLogMessageSubtypesResponse
     */
    public function setGetLogMessageSubtypesResult(?\ArrayType\ArrayOfLogMessageSubtypeSlimInfo $getLogMessageSubtypesResult = null): self
    {
        if (is_null($getLogMessageSubtypesResult) || (is_array($getLogMessageSubtypesResult) && empty($getLogMessageSubtypesResult))) {
            unset($this->GetLogMessageSubtypesResult);
        } else {
            $this->GetLogMessageSubtypesResult = $getLogMessageSubtypesResult;
        }
        
        return $this;
    }
}
