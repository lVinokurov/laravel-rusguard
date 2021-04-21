<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for AddRootMapResponse StructType
 * @subpackage Structs
 */
class AddRootMapResponse extends AbstractStructBase
{
    /**
     * The AddRootMapResult
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \StructType\MapInfo|null
     */
    protected ?\StructType\MapInfo $AddRootMapResult = null;
    /**
     * Constructor method for AddRootMapResponse
     * @uses AddRootMapResponse::setAddRootMapResult()
     * @param \StructType\MapInfo $addRootMapResult
     */
    public function __construct(?\StructType\MapInfo $addRootMapResult = null)
    {
        $this
            ->setAddRootMapResult($addRootMapResult);
    }
    /**
     * Get AddRootMapResult value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \StructType\MapInfo|null
     */
    public function getAddRootMapResult(): ?\StructType\MapInfo
    {
        return isset($this->AddRootMapResult) ? $this->AddRootMapResult : null;
    }
    /**
     * Set AddRootMapResult value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \StructType\MapInfo $addRootMapResult
     * @return \StructType\AddRootMapResponse
     */
    public function setAddRootMapResult(?\StructType\MapInfo $addRootMapResult = null): self
    {
        if (is_null($addRootMapResult) || (is_array($addRootMapResult) && empty($addRootMapResult))) {
            unset($this->AddRootMapResult);
        } else {
            $this->AddRootMapResult = $addRootMapResult;
        }
        
        return $this;
    }
}
