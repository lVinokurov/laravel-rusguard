<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetWorkZonesAccessPointsResponse StructType
 * @subpackage Structs
 */
class GetWorkZonesAccessPointsResponse extends AbstractStructBase
{
    /**
     * The GetWorkZonesAccessPointsResult
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \ArrayType\ArrayOfWorkZonesAccessPointSlimInfo|null
     */
    protected ?\ArrayType\ArrayOfWorkZonesAccessPointSlimInfo $GetWorkZonesAccessPointsResult = null;
    /**
     * Constructor method for GetWorkZonesAccessPointsResponse
     * @uses GetWorkZonesAccessPointsResponse::setGetWorkZonesAccessPointsResult()
     * @param \ArrayType\ArrayOfWorkZonesAccessPointSlimInfo $getWorkZonesAccessPointsResult
     */
    public function __construct(?\ArrayType\ArrayOfWorkZonesAccessPointSlimInfo $getWorkZonesAccessPointsResult = null)
    {
        $this
            ->setGetWorkZonesAccessPointsResult($getWorkZonesAccessPointsResult);
    }
    /**
     * Get GetWorkZonesAccessPointsResult value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \ArrayType\ArrayOfWorkZonesAccessPointSlimInfo|null
     */
    public function getGetWorkZonesAccessPointsResult(): ?\ArrayType\ArrayOfWorkZonesAccessPointSlimInfo
    {
        return isset($this->GetWorkZonesAccessPointsResult) ? $this->GetWorkZonesAccessPointsResult : null;
    }
    /**
     * Set GetWorkZonesAccessPointsResult value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \ArrayType\ArrayOfWorkZonesAccessPointSlimInfo $getWorkZonesAccessPointsResult
     * @return \StructType\GetWorkZonesAccessPointsResponse
     */
    public function setGetWorkZonesAccessPointsResult(?\ArrayType\ArrayOfWorkZonesAccessPointSlimInfo $getWorkZonesAccessPointsResult = null): self
    {
        if (is_null($getWorkZonesAccessPointsResult) || (is_array($getWorkZonesAccessPointsResult) && empty($getWorkZonesAccessPointsResult))) {
            unset($this->GetWorkZonesAccessPointsResult);
        } else {
            $this->GetWorkZonesAccessPointsResult = $getWorkZonesAccessPointsResult;
        }
        
        return $this;
    }
}
