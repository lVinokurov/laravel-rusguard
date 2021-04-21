<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetDayTypesSlimInfoResponse StructType
 * @subpackage Structs
 */
class GetDayTypesSlimInfoResponse extends AbstractStructBase
{
    /**
     * The GetDayTypesSlimInfoResult
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \ArrayType\ArrayOfDayTypeSlimInfo|null
     */
    protected ?\ArrayType\ArrayOfDayTypeSlimInfo $GetDayTypesSlimInfoResult = null;
    /**
     * Constructor method for GetDayTypesSlimInfoResponse
     * @uses GetDayTypesSlimInfoResponse::setGetDayTypesSlimInfoResult()
     * @param \ArrayType\ArrayOfDayTypeSlimInfo $getDayTypesSlimInfoResult
     */
    public function __construct(?\ArrayType\ArrayOfDayTypeSlimInfo $getDayTypesSlimInfoResult = null)
    {
        $this
            ->setGetDayTypesSlimInfoResult($getDayTypesSlimInfoResult);
    }
    /**
     * Get GetDayTypesSlimInfoResult value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \ArrayType\ArrayOfDayTypeSlimInfo|null
     */
    public function getGetDayTypesSlimInfoResult(): ?\ArrayType\ArrayOfDayTypeSlimInfo
    {
        return isset($this->GetDayTypesSlimInfoResult) ? $this->GetDayTypesSlimInfoResult : null;
    }
    /**
     * Set GetDayTypesSlimInfoResult value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \ArrayType\ArrayOfDayTypeSlimInfo $getDayTypesSlimInfoResult
     * @return \StructType\GetDayTypesSlimInfoResponse
     */
    public function setGetDayTypesSlimInfoResult(?\ArrayType\ArrayOfDayTypeSlimInfo $getDayTypesSlimInfoResult = null): self
    {
        if (is_null($getDayTypesSlimInfoResult) || (is_array($getDayTypesSlimInfoResult) && empty($getDayTypesSlimInfoResult))) {
            unset($this->GetDayTypesSlimInfoResult);
        } else {
            $this->GetDayTypesSlimInfoResult = $getDayTypesSlimInfoResult;
        }
        
        return $this;
    }
}
