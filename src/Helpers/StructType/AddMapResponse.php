<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for AddMapResponse StructType
 * @subpackage Structs
 */
class AddMapResponse extends AbstractStructBase
{
    /**
     * The AddMapResult
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \StructType\MapInfo|null
     */
    protected ?\StructType\MapInfo $AddMapResult = null;
    /**
     * Constructor method for AddMapResponse
     * @uses AddMapResponse::setAddMapResult()
     * @param \StructType\MapInfo $addMapResult
     */
    public function __construct(?\StructType\MapInfo $addMapResult = null)
    {
        $this
            ->setAddMapResult($addMapResult);
    }
    /**
     * Get AddMapResult value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \StructType\MapInfo|null
     */
    public function getAddMapResult(): ?\StructType\MapInfo
    {
        return isset($this->AddMapResult) ? $this->AddMapResult : null;
    }
    /**
     * Set AddMapResult value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \StructType\MapInfo $addMapResult
     * @return \StructType\AddMapResponse
     */
    public function setAddMapResult(?\StructType\MapInfo $addMapResult = null): self
    {
        if (is_null($addMapResult) || (is_array($addMapResult) && empty($addMapResult))) {
            unset($this->AddMapResult);
        } else {
            $this->AddMapResult = $addMapResult;
        }
        
        return $this;
    }
}
