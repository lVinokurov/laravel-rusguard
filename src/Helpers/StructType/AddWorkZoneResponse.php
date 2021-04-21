<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for AddWorkZoneResponse StructType
 * @subpackage Structs
 */
class AddWorkZoneResponse extends AbstractStructBase
{
    /**
     * The AddWorkZoneResult
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \StructType\WorkZoneSlimInfo|null
     */
    protected ?\StructType\WorkZoneSlimInfo $AddWorkZoneResult = null;
    /**
     * Constructor method for AddWorkZoneResponse
     * @uses AddWorkZoneResponse::setAddWorkZoneResult()
     * @param \StructType\WorkZoneSlimInfo $addWorkZoneResult
     */
    public function __construct(?\StructType\WorkZoneSlimInfo $addWorkZoneResult = null)
    {
        $this
            ->setAddWorkZoneResult($addWorkZoneResult);
    }
    /**
     * Get AddWorkZoneResult value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \StructType\WorkZoneSlimInfo|null
     */
    public function getAddWorkZoneResult(): ?\StructType\WorkZoneSlimInfo
    {
        return isset($this->AddWorkZoneResult) ? $this->AddWorkZoneResult : null;
    }
    /**
     * Set AddWorkZoneResult value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \StructType\WorkZoneSlimInfo $addWorkZoneResult
     * @return \StructType\AddWorkZoneResponse
     */
    public function setAddWorkZoneResult(?\StructType\WorkZoneSlimInfo $addWorkZoneResult = null): self
    {
        if (is_null($addWorkZoneResult) || (is_array($addWorkZoneResult) && empty($addWorkZoneResult))) {
            unset($this->AddWorkZoneResult);
        } else {
            $this->AddWorkZoneResult = $addWorkZoneResult;
        }
        
        return $this;
    }
}
