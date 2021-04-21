<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetOperatorResponse StructType
 * @subpackage Structs
 */
class GetOperatorResponse extends AbstractStructBase
{
    /**
     * The GetOperatorResult
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \StructType\LUser|null
     */
    protected ?\StructType\LUser $GetOperatorResult = null;
    /**
     * Constructor method for GetOperatorResponse
     * @uses GetOperatorResponse::setGetOperatorResult()
     * @param \StructType\LUser $getOperatorResult
     */
    public function __construct(?\StructType\LUser $getOperatorResult = null)
    {
        $this
            ->setGetOperatorResult($getOperatorResult);
    }
    /**
     * Get GetOperatorResult value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \StructType\LUser|null
     */
    public function getGetOperatorResult(): ?\StructType\LUser
    {
        return isset($this->GetOperatorResult) ? $this->GetOperatorResult : null;
    }
    /**
     * Set GetOperatorResult value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \StructType\LUser $getOperatorResult
     * @return \StructType\GetOperatorResponse
     */
    public function setGetOperatorResult(?\StructType\LUser $getOperatorResult = null): self
    {
        if (is_null($getOperatorResult) || (is_array($getOperatorResult) && empty($getOperatorResult))) {
            unset($this->GetOperatorResult);
        } else {
            $this->GetOperatorResult = $getOperatorResult;
        }
        
        return $this;
    }
}
