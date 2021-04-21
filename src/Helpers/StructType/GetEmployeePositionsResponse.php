<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetEmployeePositionsResponse StructType
 * @subpackage Structs
 */
class GetEmployeePositionsResponse extends AbstractStructBase
{
    /**
     * The GetEmployeePositionsResult
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \StructType\LEmployeePositionsData|null
     */
    protected ?\StructType\LEmployeePositionsData $GetEmployeePositionsResult = null;
    /**
     * Constructor method for GetEmployeePositionsResponse
     * @uses GetEmployeePositionsResponse::setGetEmployeePositionsResult()
     * @param \StructType\LEmployeePositionsData $getEmployeePositionsResult
     */
    public function __construct(?\StructType\LEmployeePositionsData $getEmployeePositionsResult = null)
    {
        $this
            ->setGetEmployeePositionsResult($getEmployeePositionsResult);
    }
    /**
     * Get GetEmployeePositionsResult value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \StructType\LEmployeePositionsData|null
     */
    public function getGetEmployeePositionsResult(): ?\StructType\LEmployeePositionsData
    {
        return isset($this->GetEmployeePositionsResult) ? $this->GetEmployeePositionsResult : null;
    }
    /**
     * Set GetEmployeePositionsResult value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \StructType\LEmployeePositionsData $getEmployeePositionsResult
     * @return \StructType\GetEmployeePositionsResponse
     */
    public function setGetEmployeePositionsResult(?\StructType\LEmployeePositionsData $getEmployeePositionsResult = null): self
    {
        if (is_null($getEmployeePositionsResult) || (is_array($getEmployeePositionsResult) && empty($getEmployeePositionsResult))) {
            unset($this->GetEmployeePositionsResult);
        } else {
            $this->GetEmployeePositionsResult = $getEmployeePositionsResult;
        }
        
        return $this;
    }
}
