<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetRootServerDriversResponse StructType
 * @subpackage Structs
 */
class GetRootServerDriversResponse extends AbstractStructBase
{
    /**
     * The GetRootServerDriversResult
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \ArrayType\ArrayOfLDriverFullInfo|null
     */
    protected ?\ArrayType\ArrayOfLDriverFullInfo $GetRootServerDriversResult = null;
    /**
     * Constructor method for GetRootServerDriversResponse
     * @uses GetRootServerDriversResponse::setGetRootServerDriversResult()
     * @param \ArrayType\ArrayOfLDriverFullInfo $getRootServerDriversResult
     */
    public function __construct(?\ArrayType\ArrayOfLDriverFullInfo $getRootServerDriversResult = null)
    {
        $this
            ->setGetRootServerDriversResult($getRootServerDriversResult);
    }
    /**
     * Get GetRootServerDriversResult value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \ArrayType\ArrayOfLDriverFullInfo|null
     */
    public function getGetRootServerDriversResult(): ?\ArrayType\ArrayOfLDriverFullInfo
    {
        return isset($this->GetRootServerDriversResult) ? $this->GetRootServerDriversResult : null;
    }
    /**
     * Set GetRootServerDriversResult value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \ArrayType\ArrayOfLDriverFullInfo $getRootServerDriversResult
     * @return \StructType\GetRootServerDriversResponse
     */
    public function setGetRootServerDriversResult(?\ArrayType\ArrayOfLDriverFullInfo $getRootServerDriversResult = null): self
    {
        if (is_null($getRootServerDriversResult) || (is_array($getRootServerDriversResult) && empty($getRootServerDriversResult))) {
            unset($this->GetRootServerDriversResult);
        } else {
            $this->GetRootServerDriversResult = $getRootServerDriversResult;
        }
        
        return $this;
    }
}
