<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetPhotoResponse StructType
 * @subpackage Structs
 */
class GetPhotoResponse extends AbstractStructBase
{
    /**
     * The GetPhotoResult
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \StructType\PhotoBank|null
     */
    protected ?\StructType\PhotoBank $GetPhotoResult = null;
    /**
     * Constructor method for GetPhotoResponse
     * @uses GetPhotoResponse::setGetPhotoResult()
     * @param \StructType\PhotoBank $getPhotoResult
     */
    public function __construct(?\StructType\PhotoBank $getPhotoResult = null)
    {
        $this
            ->setGetPhotoResult($getPhotoResult);
    }
    /**
     * Get GetPhotoResult value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \StructType\PhotoBank|null
     */
    public function getGetPhotoResult(): ?\StructType\PhotoBank
    {
        return isset($this->GetPhotoResult) ? $this->GetPhotoResult : null;
    }
    /**
     * Set GetPhotoResult value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \StructType\PhotoBank $getPhotoResult
     * @return \StructType\GetPhotoResponse
     */
    public function setGetPhotoResult(?\StructType\PhotoBank $getPhotoResult = null): self
    {
        if (is_null($getPhotoResult) || (is_array($getPhotoResult) && empty($getPhotoResult))) {
            unset($this->GetPhotoResult);
        } else {
            $this->GetPhotoResult = $getPhotoResult;
        }
        
        return $this;
    }
}
