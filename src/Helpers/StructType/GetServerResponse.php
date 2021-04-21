<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetServerResponse StructType
 * @subpackage Structs
 */
class GetServerResponse extends AbstractStructBase
{
    /**
     * The GetServerResult
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \StructType\LServerInfo|null
     */
    protected ?\StructType\LServerInfo $GetServerResult = null;
    /**
     * Constructor method for GetServerResponse
     * @uses GetServerResponse::setGetServerResult()
     * @param \StructType\LServerInfo $getServerResult
     */
    public function __construct(?\StructType\LServerInfo $getServerResult = null)
    {
        $this
            ->setGetServerResult($getServerResult);
    }
    /**
     * Get GetServerResult value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \StructType\LServerInfo|null
     */
    public function getGetServerResult(): ?\StructType\LServerInfo
    {
        return isset($this->GetServerResult) ? $this->GetServerResult : null;
    }
    /**
     * Set GetServerResult value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \StructType\LServerInfo $getServerResult
     * @return \StructType\GetServerResponse
     */
    public function setGetServerResult(?\StructType\LServerInfo $getServerResult = null): self
    {
        if (is_null($getServerResult) || (is_array($getServerResult) && empty($getServerResult))) {
            unset($this->GetServerResult);
        } else {
            $this->GetServerResult = $getServerResult;
        }
        
        return $this;
    }
}
