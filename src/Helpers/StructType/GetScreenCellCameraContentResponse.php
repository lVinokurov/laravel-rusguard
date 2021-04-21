<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetScreenCellCameraContentResponse StructType
 * @subpackage Structs
 */
class GetScreenCellCameraContentResponse extends AbstractStructBase
{
    /**
     * The GetScreenCellCameraContentResult
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \StructType\CellContentCameraInfo|null
     */
    protected ?\StructType\CellContentCameraInfo $GetScreenCellCameraContentResult = null;
    /**
     * Constructor method for GetScreenCellCameraContentResponse
     * @uses GetScreenCellCameraContentResponse::setGetScreenCellCameraContentResult()
     * @param \StructType\CellContentCameraInfo $getScreenCellCameraContentResult
     */
    public function __construct(?\StructType\CellContentCameraInfo $getScreenCellCameraContentResult = null)
    {
        $this
            ->setGetScreenCellCameraContentResult($getScreenCellCameraContentResult);
    }
    /**
     * Get GetScreenCellCameraContentResult value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \StructType\CellContentCameraInfo|null
     */
    public function getGetScreenCellCameraContentResult(): ?\StructType\CellContentCameraInfo
    {
        return isset($this->GetScreenCellCameraContentResult) ? $this->GetScreenCellCameraContentResult : null;
    }
    /**
     * Set GetScreenCellCameraContentResult value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \StructType\CellContentCameraInfo $getScreenCellCameraContentResult
     * @return \StructType\GetScreenCellCameraContentResponse
     */
    public function setGetScreenCellCameraContentResult(?\StructType\CellContentCameraInfo $getScreenCellCameraContentResult = null): self
    {
        if (is_null($getScreenCellCameraContentResult) || (is_array($getScreenCellCameraContentResult) && empty($getScreenCellCameraContentResult))) {
            unset($this->GetScreenCellCameraContentResult);
        } else {
            $this->GetScreenCellCameraContentResult = $getScreenCellCameraContentResult;
        }
        
        return $this;
    }
}
