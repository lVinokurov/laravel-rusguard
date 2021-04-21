<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetAllNetsResponse StructType
 * @subpackage Structs
 */
class GetAllNetsResponse extends AbstractStructBase
{
    /**
     * The GetAllNetsResult
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \ArrayType\ArrayOfLNetInfo|null
     */
    protected ?\ArrayType\ArrayOfLNetInfo $GetAllNetsResult = null;
    /**
     * Constructor method for GetAllNetsResponse
     * @uses GetAllNetsResponse::setGetAllNetsResult()
     * @param \ArrayType\ArrayOfLNetInfo $getAllNetsResult
     */
    public function __construct(?\ArrayType\ArrayOfLNetInfo $getAllNetsResult = null)
    {
        $this
            ->setGetAllNetsResult($getAllNetsResult);
    }
    /**
     * Get GetAllNetsResult value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \ArrayType\ArrayOfLNetInfo|null
     */
    public function getGetAllNetsResult(): ?\ArrayType\ArrayOfLNetInfo
    {
        return isset($this->GetAllNetsResult) ? $this->GetAllNetsResult : null;
    }
    /**
     * Set GetAllNetsResult value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \ArrayType\ArrayOfLNetInfo $getAllNetsResult
     * @return \StructType\GetAllNetsResponse
     */
    public function setGetAllNetsResult(?\ArrayType\ArrayOfLNetInfo $getAllNetsResult = null): self
    {
        if (is_null($getAllNetsResult) || (is_array($getAllNetsResult) && empty($getAllNetsResult))) {
            unset($this->GetAllNetsResult);
        } else {
            $this->GetAllNetsResult = $getAllNetsResult;
        }
        
        return $this;
    }
}
