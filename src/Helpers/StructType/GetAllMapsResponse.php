<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetAllMapsResponse StructType
 * @subpackage Structs
 */
class GetAllMapsResponse extends AbstractStructBase
{
    /**
     * The GetAllMapsResult
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \ArrayType\ArrayOfMapInfo|null
     */
    protected ?\ArrayType\ArrayOfMapInfo $GetAllMapsResult = null;
    /**
     * Constructor method for GetAllMapsResponse
     * @uses GetAllMapsResponse::setGetAllMapsResult()
     * @param \ArrayType\ArrayOfMapInfo $getAllMapsResult
     */
    public function __construct(?\ArrayType\ArrayOfMapInfo $getAllMapsResult = null)
    {
        $this
            ->setGetAllMapsResult($getAllMapsResult);
    }
    /**
     * Get GetAllMapsResult value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \ArrayType\ArrayOfMapInfo|null
     */
    public function getGetAllMapsResult(): ?\ArrayType\ArrayOfMapInfo
    {
        return isset($this->GetAllMapsResult) ? $this->GetAllMapsResult : null;
    }
    /**
     * Set GetAllMapsResult value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \ArrayType\ArrayOfMapInfo $getAllMapsResult
     * @return \StructType\GetAllMapsResponse
     */
    public function setGetAllMapsResult(?\ArrayType\ArrayOfMapInfo $getAllMapsResult = null): self
    {
        if (is_null($getAllMapsResult) || (is_array($getAllMapsResult) && empty($getAllMapsResult))) {
            unset($this->GetAllMapsResult);
        } else {
            $this->GetAllMapsResult = $getAllMapsResult;
        }
        
        return $this;
    }
}
