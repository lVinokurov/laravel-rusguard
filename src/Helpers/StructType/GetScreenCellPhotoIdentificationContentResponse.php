<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetScreenCellPhotoIdentificationContentResponse StructType
 * @subpackage Structs
 */
class GetScreenCellPhotoIdentificationContentResponse extends AbstractStructBase
{
    /**
     * The GetScreenCellPhotoIdentificationContentResult
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \StructType\CellContentFotoIdentificationInfo|null
     */
    protected ?\StructType\CellContentFotoIdentificationInfo $GetScreenCellPhotoIdentificationContentResult = null;
    /**
     * Constructor method for GetScreenCellPhotoIdentificationContentResponse
     * @uses GetScreenCellPhotoIdentificationContentResponse::setGetScreenCellPhotoIdentificationContentResult()
     * @param \StructType\CellContentFotoIdentificationInfo $getScreenCellPhotoIdentificationContentResult
     */
    public function __construct(?\StructType\CellContentFotoIdentificationInfo $getScreenCellPhotoIdentificationContentResult = null)
    {
        $this
            ->setGetScreenCellPhotoIdentificationContentResult($getScreenCellPhotoIdentificationContentResult);
    }
    /**
     * Get GetScreenCellPhotoIdentificationContentResult value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \StructType\CellContentFotoIdentificationInfo|null
     */
    public function getGetScreenCellPhotoIdentificationContentResult(): ?\StructType\CellContentFotoIdentificationInfo
    {
        return isset($this->GetScreenCellPhotoIdentificationContentResult) ? $this->GetScreenCellPhotoIdentificationContentResult : null;
    }
    /**
     * Set GetScreenCellPhotoIdentificationContentResult value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \StructType\CellContentFotoIdentificationInfo $getScreenCellPhotoIdentificationContentResult
     * @return \StructType\GetScreenCellPhotoIdentificationContentResponse
     */
    public function setGetScreenCellPhotoIdentificationContentResult(?\StructType\CellContentFotoIdentificationInfo $getScreenCellPhotoIdentificationContentResult = null): self
    {
        if (is_null($getScreenCellPhotoIdentificationContentResult) || (is_array($getScreenCellPhotoIdentificationContentResult) && empty($getScreenCellPhotoIdentificationContentResult))) {
            unset($this->GetScreenCellPhotoIdentificationContentResult);
        } else {
            $this->GetScreenCellPhotoIdentificationContentResult = $getScreenCellPhotoIdentificationContentResult;
        }
        
        return $this;
    }
}
