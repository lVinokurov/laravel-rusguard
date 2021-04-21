<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetDictionaryElementsResponse StructType
 * @subpackage Structs
 */
class GetDictionaryElementsResponse extends AbstractStructBase
{
    /**
     * The GetDictionaryElementsResult
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \StructType\DictionaryElementsInfoData|null
     */
    protected ?\StructType\DictionaryElementsInfoData $GetDictionaryElementsResult = null;
    /**
     * Constructor method for GetDictionaryElementsResponse
     * @uses GetDictionaryElementsResponse::setGetDictionaryElementsResult()
     * @param \StructType\DictionaryElementsInfoData $getDictionaryElementsResult
     */
    public function __construct(?\StructType\DictionaryElementsInfoData $getDictionaryElementsResult = null)
    {
        $this
            ->setGetDictionaryElementsResult($getDictionaryElementsResult);
    }
    /**
     * Get GetDictionaryElementsResult value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \StructType\DictionaryElementsInfoData|null
     */
    public function getGetDictionaryElementsResult(): ?\StructType\DictionaryElementsInfoData
    {
        return isset($this->GetDictionaryElementsResult) ? $this->GetDictionaryElementsResult : null;
    }
    /**
     * Set GetDictionaryElementsResult value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \StructType\DictionaryElementsInfoData $getDictionaryElementsResult
     * @return \StructType\GetDictionaryElementsResponse
     */
    public function setGetDictionaryElementsResult(?\StructType\DictionaryElementsInfoData $getDictionaryElementsResult = null): self
    {
        if (is_null($getDictionaryElementsResult) || (is_array($getDictionaryElementsResult) && empty($getDictionaryElementsResult))) {
            unset($this->GetDictionaryElementsResult);
        } else {
            $this->GetDictionaryElementsResult = $getDictionaryElementsResult;
        }
        
        return $this;
    }
}
