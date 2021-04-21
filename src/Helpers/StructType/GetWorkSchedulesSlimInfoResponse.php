<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetWorkSchedulesSlimInfoResponse StructType
 * @subpackage Structs
 */
class GetWorkSchedulesSlimInfoResponse extends AbstractStructBase
{
    /**
     * The GetWorkSchedulesSlimInfoResult
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \ArrayType\ArrayOfWorkScheduleSlimInfo|null
     */
    protected ?\ArrayType\ArrayOfWorkScheduleSlimInfo $GetWorkSchedulesSlimInfoResult = null;
    /**
     * Constructor method for GetWorkSchedulesSlimInfoResponse
     * @uses GetWorkSchedulesSlimInfoResponse::setGetWorkSchedulesSlimInfoResult()
     * @param \ArrayType\ArrayOfWorkScheduleSlimInfo $getWorkSchedulesSlimInfoResult
     */
    public function __construct(?\ArrayType\ArrayOfWorkScheduleSlimInfo $getWorkSchedulesSlimInfoResult = null)
    {
        $this
            ->setGetWorkSchedulesSlimInfoResult($getWorkSchedulesSlimInfoResult);
    }
    /**
     * Get GetWorkSchedulesSlimInfoResult value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \ArrayType\ArrayOfWorkScheduleSlimInfo|null
     */
    public function getGetWorkSchedulesSlimInfoResult(): ?\ArrayType\ArrayOfWorkScheduleSlimInfo
    {
        return isset($this->GetWorkSchedulesSlimInfoResult) ? $this->GetWorkSchedulesSlimInfoResult : null;
    }
    /**
     * Set GetWorkSchedulesSlimInfoResult value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \ArrayType\ArrayOfWorkScheduleSlimInfo $getWorkSchedulesSlimInfoResult
     * @return \StructType\GetWorkSchedulesSlimInfoResponse
     */
    public function setGetWorkSchedulesSlimInfoResult(?\ArrayType\ArrayOfWorkScheduleSlimInfo $getWorkSchedulesSlimInfoResult = null): self
    {
        if (is_null($getWorkSchedulesSlimInfoResult) || (is_array($getWorkSchedulesSlimInfoResult) && empty($getWorkSchedulesSlimInfoResult))) {
            unset($this->GetWorkSchedulesSlimInfoResult);
        } else {
            $this->GetWorkSchedulesSlimInfoResult = $getWorkSchedulesSlimInfoResult;
        }
        
        return $this;
    }
}
