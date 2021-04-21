<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for AddWorkplaceResponse StructType
 * @subpackage Structs
 */
class AddWorkplaceResponse extends AbstractStructBase
{
    /**
     * The AddWorkplaceResult
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \StructType\WorkplaceInfo|null
     */
    protected ?\StructType\WorkplaceInfo $AddWorkplaceResult = null;
    /**
     * Constructor method for AddWorkplaceResponse
     * @uses AddWorkplaceResponse::setAddWorkplaceResult()
     * @param \StructType\WorkplaceInfo $addWorkplaceResult
     */
    public function __construct(?\StructType\WorkplaceInfo $addWorkplaceResult = null)
    {
        $this
            ->setAddWorkplaceResult($addWorkplaceResult);
    }
    /**
     * Get AddWorkplaceResult value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \StructType\WorkplaceInfo|null
     */
    public function getAddWorkplaceResult(): ?\StructType\WorkplaceInfo
    {
        return isset($this->AddWorkplaceResult) ? $this->AddWorkplaceResult : null;
    }
    /**
     * Set AddWorkplaceResult value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \StructType\WorkplaceInfo $addWorkplaceResult
     * @return \StructType\AddWorkplaceResponse
     */
    public function setAddWorkplaceResult(?\StructType\WorkplaceInfo $addWorkplaceResult = null): self
    {
        if (is_null($addWorkplaceResult) || (is_array($addWorkplaceResult) && empty($addWorkplaceResult))) {
            unset($this->AddWorkplaceResult);
        } else {
            $this->AddWorkplaceResult = $addWorkplaceResult;
        }
        
        return $this;
    }
}
