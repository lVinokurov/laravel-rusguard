<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetUidsKeysResponse StructType
 * @subpackage Structs
 */
class GetUidsKeysResponse extends AbstractStructBase
{
    /**
     * The GetUidsKeysResult
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \ArrayType\ArrayOfUidKeyInfo|null
     */
    protected ?\ArrayType\ArrayOfUidKeyInfo $GetUidsKeysResult = null;
    /**
     * Constructor method for GetUidsKeysResponse
     * @uses GetUidsKeysResponse::setGetUidsKeysResult()
     * @param \ArrayType\ArrayOfUidKeyInfo $getUidsKeysResult
     */
    public function __construct(?\ArrayType\ArrayOfUidKeyInfo $getUidsKeysResult = null)
    {
        $this
            ->setGetUidsKeysResult($getUidsKeysResult);
    }
    /**
     * Get GetUidsKeysResult value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \ArrayType\ArrayOfUidKeyInfo|null
     */
    public function getGetUidsKeysResult(): ?\ArrayType\ArrayOfUidKeyInfo
    {
        return isset($this->GetUidsKeysResult) ? $this->GetUidsKeysResult : null;
    }
    /**
     * Set GetUidsKeysResult value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \ArrayType\ArrayOfUidKeyInfo $getUidsKeysResult
     * @return \StructType\GetUidsKeysResponse
     */
    public function setGetUidsKeysResult(?\ArrayType\ArrayOfUidKeyInfo $getUidsKeysResult = null): self
    {
        if (is_null($getUidsKeysResult) || (is_array($getUidsKeysResult) && empty($getUidsKeysResult))) {
            unset($this->GetUidsKeysResult);
        } else {
            $this->GetUidsKeysResult = $getUidsKeysResult;
        }
        
        return $this;
    }
}
