<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetNetServersResponse StructType
 * @subpackage Structs
 */
class GetNetServersResponse extends AbstractStructBase
{
    /**
     * The GetNetServersResult
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \ArrayType\ArrayOfLServerInfo|null
     */
    protected ?\ArrayType\ArrayOfLServerInfo $GetNetServersResult = null;
    /**
     * Constructor method for GetNetServersResponse
     * @uses GetNetServersResponse::setGetNetServersResult()
     * @param \ArrayType\ArrayOfLServerInfo $getNetServersResult
     */
    public function __construct(?\ArrayType\ArrayOfLServerInfo $getNetServersResult = null)
    {
        $this
            ->setGetNetServersResult($getNetServersResult);
    }
    /**
     * Get GetNetServersResult value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \ArrayType\ArrayOfLServerInfo|null
     */
    public function getGetNetServersResult(): ?\ArrayType\ArrayOfLServerInfo
    {
        return isset($this->GetNetServersResult) ? $this->GetNetServersResult : null;
    }
    /**
     * Set GetNetServersResult value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \ArrayType\ArrayOfLServerInfo $getNetServersResult
     * @return \StructType\GetNetServersResponse
     */
    public function setGetNetServersResult(?\ArrayType\ArrayOfLServerInfo $getNetServersResult = null): self
    {
        if (is_null($getNetServersResult) || (is_array($getNetServersResult) && empty($getNetServersResult))) {
            unset($this->GetNetServersResult);
        } else {
            $this->GetNetServersResult = $getNetServersResult;
        }
        
        return $this;
    }
}
