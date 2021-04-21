<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for AddWorkZonesAccessPointResponse StructType
 * @subpackage Structs
 */
class AddWorkZonesAccessPointResponse extends AbstractStructBase
{
    /**
     * The AddWorkZonesAccessPointResult
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \StructType\WorkZonesAccessPointSlimInfo|null
     */
    protected ?\StructType\WorkZonesAccessPointSlimInfo $AddWorkZonesAccessPointResult = null;
    /**
     * Constructor method for AddWorkZonesAccessPointResponse
     * @uses AddWorkZonesAccessPointResponse::setAddWorkZonesAccessPointResult()
     * @param \StructType\WorkZonesAccessPointSlimInfo $addWorkZonesAccessPointResult
     */
    public function __construct(?\StructType\WorkZonesAccessPointSlimInfo $addWorkZonesAccessPointResult = null)
    {
        $this
            ->setAddWorkZonesAccessPointResult($addWorkZonesAccessPointResult);
    }
    /**
     * Get AddWorkZonesAccessPointResult value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \StructType\WorkZonesAccessPointSlimInfo|null
     */
    public function getAddWorkZonesAccessPointResult(): ?\StructType\WorkZonesAccessPointSlimInfo
    {
        return isset($this->AddWorkZonesAccessPointResult) ? $this->AddWorkZonesAccessPointResult : null;
    }
    /**
     * Set AddWorkZonesAccessPointResult value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \StructType\WorkZonesAccessPointSlimInfo $addWorkZonesAccessPointResult
     * @return \StructType\AddWorkZonesAccessPointResponse
     */
    public function setAddWorkZonesAccessPointResult(?\StructType\WorkZonesAccessPointSlimInfo $addWorkZonesAccessPointResult = null): self
    {
        if (is_null($addWorkZonesAccessPointResult) || (is_array($addWorkZonesAccessPointResult) && empty($addWorkZonesAccessPointResult))) {
            unset($this->AddWorkZonesAccessPointResult);
        } else {
            $this->AddWorkZonesAccessPointResult = $addWorkZonesAccessPointResult;
        }
        
        return $this;
    }
}
