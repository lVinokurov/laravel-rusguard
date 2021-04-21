<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for AddAlcoGroupResponse StructType
 * @subpackage Structs
 */
class AddAlcoGroupResponse extends AbstractStructBase
{
    /**
     * The AddAlcoGroupResult
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \StructType\AcsAlcoGroupSlimInfo|null
     */
    protected ?\StructType\AcsAlcoGroupSlimInfo $AddAlcoGroupResult = null;
    /**
     * Constructor method for AddAlcoGroupResponse
     * @uses AddAlcoGroupResponse::setAddAlcoGroupResult()
     * @param \StructType\AcsAlcoGroupSlimInfo $addAlcoGroupResult
     */
    public function __construct(?\StructType\AcsAlcoGroupSlimInfo $addAlcoGroupResult = null)
    {
        $this
            ->setAddAlcoGroupResult($addAlcoGroupResult);
    }
    /**
     * Get AddAlcoGroupResult value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \StructType\AcsAlcoGroupSlimInfo|null
     */
    public function getAddAlcoGroupResult(): ?\StructType\AcsAlcoGroupSlimInfo
    {
        return isset($this->AddAlcoGroupResult) ? $this->AddAlcoGroupResult : null;
    }
    /**
     * Set AddAlcoGroupResult value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \StructType\AcsAlcoGroupSlimInfo $addAlcoGroupResult
     * @return \StructType\AddAlcoGroupResponse
     */
    public function setAddAlcoGroupResult(?\StructType\AcsAlcoGroupSlimInfo $addAlcoGroupResult = null): self
    {
        if (is_null($addAlcoGroupResult) || (is_array($addAlcoGroupResult) && empty($addAlcoGroupResult))) {
            unset($this->AddAlcoGroupResult);
        } else {
            $this->AddAlcoGroupResult = $addAlcoGroupResult;
        }
        
        return $this;
    }
}
