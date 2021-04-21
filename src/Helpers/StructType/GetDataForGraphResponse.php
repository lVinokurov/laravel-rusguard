<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetDataForGraphResponse StructType
 * @subpackage Structs
 */
class GetDataForGraphResponse extends AbstractStructBase
{
    /**
     * The GetDataForGraphResult
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \ArrayType\ArrayOfDataForViolator|null
     */
    protected ?\ArrayType\ArrayOfDataForViolator $GetDataForGraphResult = null;
    /**
     * Constructor method for GetDataForGraphResponse
     * @uses GetDataForGraphResponse::setGetDataForGraphResult()
     * @param \ArrayType\ArrayOfDataForViolator $getDataForGraphResult
     */
    public function __construct(?\ArrayType\ArrayOfDataForViolator $getDataForGraphResult = null)
    {
        $this
            ->setGetDataForGraphResult($getDataForGraphResult);
    }
    /**
     * Get GetDataForGraphResult value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \ArrayType\ArrayOfDataForViolator|null
     */
    public function getGetDataForGraphResult(): ?\ArrayType\ArrayOfDataForViolator
    {
        return isset($this->GetDataForGraphResult) ? $this->GetDataForGraphResult : null;
    }
    /**
     * Set GetDataForGraphResult value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \ArrayType\ArrayOfDataForViolator $getDataForGraphResult
     * @return \StructType\GetDataForGraphResponse
     */
    public function setGetDataForGraphResult(?\ArrayType\ArrayOfDataForViolator $getDataForGraphResult = null): self
    {
        if (is_null($getDataForGraphResult) || (is_array($getDataForGraphResult) && empty($getDataForGraphResult))) {
            unset($this->GetDataForGraphResult);
        } else {
            $this->GetDataForGraphResult = $getDataForGraphResult;
        }
        
        return $this;
    }
}
