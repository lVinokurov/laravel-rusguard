<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetMapByIdResponse StructType
 * @subpackage Structs
 */
class GetMapByIdResponse extends AbstractStructBase
{
    /**
     * The GetMapByIdResult
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \StructType\MapInfo|null
     */
    protected ?\StructType\MapInfo $GetMapByIdResult = null;
    /**
     * Constructor method for GetMapByIdResponse
     * @uses GetMapByIdResponse::setGetMapByIdResult()
     * @param \StructType\MapInfo $getMapByIdResult
     */
    public function __construct(?\StructType\MapInfo $getMapByIdResult = null)
    {
        $this
            ->setGetMapByIdResult($getMapByIdResult);
    }
    /**
     * Get GetMapByIdResult value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \StructType\MapInfo|null
     */
    public function getGetMapByIdResult(): ?\StructType\MapInfo
    {
        return isset($this->GetMapByIdResult) ? $this->GetMapByIdResult : null;
    }
    /**
     * Set GetMapByIdResult value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \StructType\MapInfo $getMapByIdResult
     * @return \StructType\GetMapByIdResponse
     */
    public function setGetMapByIdResult(?\StructType\MapInfo $getMapByIdResult = null): self
    {
        if (is_null($getMapByIdResult) || (is_array($getMapByIdResult) && empty($getMapByIdResult))) {
            unset($this->GetMapByIdResult);
        } else {
            $this->GetMapByIdResult = $getMapByIdResult;
        }
        
        return $this;
    }
}
