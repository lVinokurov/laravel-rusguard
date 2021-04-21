<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetPositionCodesResponse StructType
 * @subpackage Structs
 */
class GetPositionCodesResponse extends AbstractStructBase
{
    /**
     * The GetPositionCodesResult
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \ArrayType\ArrayOfstring|null
     */
    protected ?\ArrayType\ArrayOfstring $GetPositionCodesResult = null;
    /**
     * Constructor method for GetPositionCodesResponse
     * @uses GetPositionCodesResponse::setGetPositionCodesResult()
     * @param \ArrayType\ArrayOfstring $getPositionCodesResult
     */
    public function __construct(?\ArrayType\ArrayOfstring $getPositionCodesResult = null)
    {
        $this
            ->setGetPositionCodesResult($getPositionCodesResult);
    }
    /**
     * Get GetPositionCodesResult value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \ArrayType\ArrayOfstring|null
     */
    public function getGetPositionCodesResult(): ?\ArrayType\ArrayOfstring
    {
        return isset($this->GetPositionCodesResult) ? $this->GetPositionCodesResult : null;
    }
    /**
     * Set GetPositionCodesResult value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \ArrayType\ArrayOfstring $getPositionCodesResult
     * @return \StructType\GetPositionCodesResponse
     */
    public function setGetPositionCodesResult(?\ArrayType\ArrayOfstring $getPositionCodesResult = null): self
    {
        if (is_null($getPositionCodesResult) || (is_array($getPositionCodesResult) && empty($getPositionCodesResult))) {
            unset($this->GetPositionCodesResult);
        } else {
            $this->GetPositionCodesResult = $getPositionCodesResult;
        }
        
        return $this;
    }
}
