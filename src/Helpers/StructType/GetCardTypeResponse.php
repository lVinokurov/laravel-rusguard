<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetCardTypeResponse StructType
 * @subpackage Structs
 */
class GetCardTypeResponse extends AbstractStructBase
{
    /**
     * The GetCardTypeResult
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \StructType\CardTypeInfo|null
     */
    protected ?\StructType\CardTypeInfo $GetCardTypeResult = null;
    /**
     * Constructor method for GetCardTypeResponse
     * @uses GetCardTypeResponse::setGetCardTypeResult()
     * @param \StructType\CardTypeInfo $getCardTypeResult
     */
    public function __construct(?\StructType\CardTypeInfo $getCardTypeResult = null)
    {
        $this
            ->setGetCardTypeResult($getCardTypeResult);
    }
    /**
     * Get GetCardTypeResult value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \StructType\CardTypeInfo|null
     */
    public function getGetCardTypeResult(): ?\StructType\CardTypeInfo
    {
        return isset($this->GetCardTypeResult) ? $this->GetCardTypeResult : null;
    }
    /**
     * Set GetCardTypeResult value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \StructType\CardTypeInfo $getCardTypeResult
     * @return \StructType\GetCardTypeResponse
     */
    public function setGetCardTypeResult(?\StructType\CardTypeInfo $getCardTypeResult = null): self
    {
        if (is_null($getCardTypeResult) || (is_array($getCardTypeResult) && empty($getCardTypeResult))) {
            unset($this->GetCardTypeResult);
        } else {
            $this->GetCardTypeResult = $getCardTypeResult;
        }
        
        return $this;
    }
}
