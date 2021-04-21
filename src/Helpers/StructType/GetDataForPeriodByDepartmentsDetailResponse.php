<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetDataForPeriodByDepartmentsDetailResponse StructType
 * @subpackage Structs
 */
class GetDataForPeriodByDepartmentsDetailResponse extends AbstractStructBase
{
    /**
     * The GetDataForPeriodByDepartmentsDetailResult
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \ArrayType\ArrayOfDataForPeriodModel|null
     */
    protected ?\ArrayType\ArrayOfDataForPeriodModel $GetDataForPeriodByDepartmentsDetailResult = null;
    /**
     * Constructor method for GetDataForPeriodByDepartmentsDetailResponse
     * @uses GetDataForPeriodByDepartmentsDetailResponse::setGetDataForPeriodByDepartmentsDetailResult()
     * @param \ArrayType\ArrayOfDataForPeriodModel $getDataForPeriodByDepartmentsDetailResult
     */
    public function __construct(?\ArrayType\ArrayOfDataForPeriodModel $getDataForPeriodByDepartmentsDetailResult = null)
    {
        $this
            ->setGetDataForPeriodByDepartmentsDetailResult($getDataForPeriodByDepartmentsDetailResult);
    }
    /**
     * Get GetDataForPeriodByDepartmentsDetailResult value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \ArrayType\ArrayOfDataForPeriodModel|null
     */
    public function getGetDataForPeriodByDepartmentsDetailResult(): ?\ArrayType\ArrayOfDataForPeriodModel
    {
        return isset($this->GetDataForPeriodByDepartmentsDetailResult) ? $this->GetDataForPeriodByDepartmentsDetailResult : null;
    }
    /**
     * Set GetDataForPeriodByDepartmentsDetailResult value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \ArrayType\ArrayOfDataForPeriodModel $getDataForPeriodByDepartmentsDetailResult
     * @return \StructType\GetDataForPeriodByDepartmentsDetailResponse
     */
    public function setGetDataForPeriodByDepartmentsDetailResult(?\ArrayType\ArrayOfDataForPeriodModel $getDataForPeriodByDepartmentsDetailResult = null): self
    {
        if (is_null($getDataForPeriodByDepartmentsDetailResult) || (is_array($getDataForPeriodByDepartmentsDetailResult) && empty($getDataForPeriodByDepartmentsDetailResult))) {
            unset($this->GetDataForPeriodByDepartmentsDetailResult);
        } else {
            $this->GetDataForPeriodByDepartmentsDetailResult = $getDataForPeriodByDepartmentsDetailResult;
        }
        
        return $this;
    }
}
