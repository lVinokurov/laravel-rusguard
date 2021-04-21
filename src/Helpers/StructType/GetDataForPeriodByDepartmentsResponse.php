<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetDataForPeriodByDepartmentsResponse StructType
 * @subpackage Structs
 */
class GetDataForPeriodByDepartmentsResponse extends AbstractStructBase
{
    /**
     * The GetDataForPeriodByDepartmentsResult
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \ArrayType\ArrayOfDataForPeriodModel|null
     */
    protected ?\ArrayType\ArrayOfDataForPeriodModel $GetDataForPeriodByDepartmentsResult = null;
    /**
     * Constructor method for GetDataForPeriodByDepartmentsResponse
     * @uses GetDataForPeriodByDepartmentsResponse::setGetDataForPeriodByDepartmentsResult()
     * @param \ArrayType\ArrayOfDataForPeriodModel $getDataForPeriodByDepartmentsResult
     */
    public function __construct(?\ArrayType\ArrayOfDataForPeriodModel $getDataForPeriodByDepartmentsResult = null)
    {
        $this
            ->setGetDataForPeriodByDepartmentsResult($getDataForPeriodByDepartmentsResult);
    }
    /**
     * Get GetDataForPeriodByDepartmentsResult value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \ArrayType\ArrayOfDataForPeriodModel|null
     */
    public function getGetDataForPeriodByDepartmentsResult(): ?\ArrayType\ArrayOfDataForPeriodModel
    {
        return isset($this->GetDataForPeriodByDepartmentsResult) ? $this->GetDataForPeriodByDepartmentsResult : null;
    }
    /**
     * Set GetDataForPeriodByDepartmentsResult value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \ArrayType\ArrayOfDataForPeriodModel $getDataForPeriodByDepartmentsResult
     * @return \StructType\GetDataForPeriodByDepartmentsResponse
     */
    public function setGetDataForPeriodByDepartmentsResult(?\ArrayType\ArrayOfDataForPeriodModel $getDataForPeriodByDepartmentsResult = null): self
    {
        if (is_null($getDataForPeriodByDepartmentsResult) || (is_array($getDataForPeriodByDepartmentsResult) && empty($getDataForPeriodByDepartmentsResult))) {
            unset($this->GetDataForPeriodByDepartmentsResult);
        } else {
            $this->GetDataForPeriodByDepartmentsResult = $getDataForPeriodByDepartmentsResult;
        }
        
        return $this;
    }
}
