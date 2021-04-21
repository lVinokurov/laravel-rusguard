<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetDictionaryElementResponse StructType
 * @subpackage Structs
 */
class GetDictionaryElementResponse extends AbstractStructBase
{
    /**
     * The GetDictionaryElementResult
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \StructType\DictionaryElementInfo|null
     */
    protected ?\StructType\DictionaryElementInfo $GetDictionaryElementResult = null;
    /**
     * Constructor method for GetDictionaryElementResponse
     * @uses GetDictionaryElementResponse::setGetDictionaryElementResult()
     * @param \StructType\DictionaryElementInfo $getDictionaryElementResult
     */
    public function __construct(?\StructType\DictionaryElementInfo $getDictionaryElementResult = null)
    {
        $this
            ->setGetDictionaryElementResult($getDictionaryElementResult);
    }
    /**
     * Get GetDictionaryElementResult value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \StructType\DictionaryElementInfo|null
     */
    public function getGetDictionaryElementResult(): ?\StructType\DictionaryElementInfo
    {
        return isset($this->GetDictionaryElementResult) ? $this->GetDictionaryElementResult : null;
    }
    /**
     * Set GetDictionaryElementResult value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \StructType\DictionaryElementInfo $getDictionaryElementResult
     * @return \StructType\GetDictionaryElementResponse
     */
    public function setGetDictionaryElementResult(?\StructType\DictionaryElementInfo $getDictionaryElementResult = null): self
    {
        if (is_null($getDictionaryElementResult) || (is_array($getDictionaryElementResult) && empty($getDictionaryElementResult))) {
            unset($this->GetDictionaryElementResult);
        } else {
            $this->GetDictionaryElementResult = $getDictionaryElementResult;
        }
        
        return $this;
    }
}
