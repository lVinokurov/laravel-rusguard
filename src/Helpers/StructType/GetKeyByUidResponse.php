<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetKeyByUidResponse StructType
 * @subpackage Structs
 */
class GetKeyByUidResponse extends AbstractStructBase
{
    /**
     * The GetKeyByUidResult
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \StructType\UidKeyInfo|null
     */
    protected ?\StructType\UidKeyInfo $GetKeyByUidResult = null;
    /**
     * Constructor method for GetKeyByUidResponse
     * @uses GetKeyByUidResponse::setGetKeyByUidResult()
     * @param \StructType\UidKeyInfo $getKeyByUidResult
     */
    public function __construct(?\StructType\UidKeyInfo $getKeyByUidResult = null)
    {
        $this
            ->setGetKeyByUidResult($getKeyByUidResult);
    }
    /**
     * Get GetKeyByUidResult value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \StructType\UidKeyInfo|null
     */
    public function getGetKeyByUidResult(): ?\StructType\UidKeyInfo
    {
        return isset($this->GetKeyByUidResult) ? $this->GetKeyByUidResult : null;
    }
    /**
     * Set GetKeyByUidResult value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \StructType\UidKeyInfo $getKeyByUidResult
     * @return \StructType\GetKeyByUidResponse
     */
    public function setGetKeyByUidResult(?\StructType\UidKeyInfo $getKeyByUidResult = null): self
    {
        if (is_null($getKeyByUidResult) || (is_array($getKeyByUidResult) && empty($getKeyByUidResult))) {
            unset($this->GetKeyByUidResult);
        } else {
            $this->GetKeyByUidResult = $getKeyByUidResult;
        }
        
        return $this;
    }
}
