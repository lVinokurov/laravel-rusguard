<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetCardTypesResponse StructType
 * @subpackage Structs
 */
class GetCardTypesResponse extends AbstractStructBase
{
    /**
     * The GetCardTypesResult
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \StructType\CardTypesInfoData|null
     */
    protected ?\StructType\CardTypesInfoData $GetCardTypesResult = null;
    /**
     * Constructor method for GetCardTypesResponse
     * @uses GetCardTypesResponse::setGetCardTypesResult()
     * @param \StructType\CardTypesInfoData $getCardTypesResult
     */
    public function __construct(?\StructType\CardTypesInfoData $getCardTypesResult = null)
    {
        $this
            ->setGetCardTypesResult($getCardTypesResult);
    }
    /**
     * Get GetCardTypesResult value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \StructType\CardTypesInfoData|null
     */
    public function getGetCardTypesResult(): ?\StructType\CardTypesInfoData
    {
        return isset($this->GetCardTypesResult) ? $this->GetCardTypesResult : null;
    }
    /**
     * Set GetCardTypesResult value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \StructType\CardTypesInfoData $getCardTypesResult
     * @return \StructType\GetCardTypesResponse
     */
    public function setGetCardTypesResult(?\StructType\CardTypesInfoData $getCardTypesResult = null): self
    {
        if (is_null($getCardTypesResult) || (is_array($getCardTypesResult) && empty($getCardTypesResult))) {
            unset($this->GetCardTypesResult);
        } else {
            $this->GetCardTypesResult = $getCardTypesResult;
        }
        
        return $this;
    }
}
