<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetViolationPlanResponse StructType
 * @subpackage Structs
 */
class GetViolationPlanResponse extends AbstractStructBase
{
    /**
     * The GetViolationPlanResult
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \ArrayType\ArrayOfPlanModel|null
     */
    protected ?\ArrayType\ArrayOfPlanModel $GetViolationPlanResult = null;
    /**
     * Constructor method for GetViolationPlanResponse
     * @uses GetViolationPlanResponse::setGetViolationPlanResult()
     * @param \ArrayType\ArrayOfPlanModel $getViolationPlanResult
     */
    public function __construct(?\ArrayType\ArrayOfPlanModel $getViolationPlanResult = null)
    {
        $this
            ->setGetViolationPlanResult($getViolationPlanResult);
    }
    /**
     * Get GetViolationPlanResult value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \ArrayType\ArrayOfPlanModel|null
     */
    public function getGetViolationPlanResult(): ?\ArrayType\ArrayOfPlanModel
    {
        return isset($this->GetViolationPlanResult) ? $this->GetViolationPlanResult : null;
    }
    /**
     * Set GetViolationPlanResult value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \ArrayType\ArrayOfPlanModel $getViolationPlanResult
     * @return \StructType\GetViolationPlanResponse
     */
    public function setGetViolationPlanResult(?\ArrayType\ArrayOfPlanModel $getViolationPlanResult = null): self
    {
        if (is_null($getViolationPlanResult) || (is_array($getViolationPlanResult) && empty($getViolationPlanResult))) {
            unset($this->GetViolationPlanResult);
        } else {
            $this->GetViolationPlanResult = $getViolationPlanResult;
        }
        
        return $this;
    }
}
