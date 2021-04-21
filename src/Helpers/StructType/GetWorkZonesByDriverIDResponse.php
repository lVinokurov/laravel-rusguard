<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetWorkZonesByDriverIDResponse StructType
 * @subpackage Structs
 */
class GetWorkZonesByDriverIDResponse extends AbstractStructBase
{
    /**
     * The GetWorkZonesByDriverIDResult
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \ArrayType\ArrayOfWorkZoneSlimInfo|null
     */
    protected ?\ArrayType\ArrayOfWorkZoneSlimInfo $GetWorkZonesByDriverIDResult = null;
    /**
     * Constructor method for GetWorkZonesByDriverIDResponse
     * @uses GetWorkZonesByDriverIDResponse::setGetWorkZonesByDriverIDResult()
     * @param \ArrayType\ArrayOfWorkZoneSlimInfo $getWorkZonesByDriverIDResult
     */
    public function __construct(?\ArrayType\ArrayOfWorkZoneSlimInfo $getWorkZonesByDriverIDResult = null)
    {
        $this
            ->setGetWorkZonesByDriverIDResult($getWorkZonesByDriverIDResult);
    }
    /**
     * Get GetWorkZonesByDriverIDResult value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \ArrayType\ArrayOfWorkZoneSlimInfo|null
     */
    public function getGetWorkZonesByDriverIDResult(): ?\ArrayType\ArrayOfWorkZoneSlimInfo
    {
        return isset($this->GetWorkZonesByDriverIDResult) ? $this->GetWorkZonesByDriverIDResult : null;
    }
    /**
     * Set GetWorkZonesByDriverIDResult value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \ArrayType\ArrayOfWorkZoneSlimInfo $getWorkZonesByDriverIDResult
     * @return \StructType\GetWorkZonesByDriverIDResponse
     */
    public function setGetWorkZonesByDriverIDResult(?\ArrayType\ArrayOfWorkZoneSlimInfo $getWorkZonesByDriverIDResult = null): self
    {
        if (is_null($getWorkZonesByDriverIDResult) || (is_array($getWorkZonesByDriverIDResult) && empty($getWorkZonesByDriverIDResult))) {
            unset($this->GetWorkZonesByDriverIDResult);
        } else {
            $this->GetWorkZonesByDriverIDResult = $getWorkZonesByDriverIDResult;
        }
        
        return $this;
    }
}
