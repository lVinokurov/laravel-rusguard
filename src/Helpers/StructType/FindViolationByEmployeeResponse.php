<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for FindViolationByEmployeeResponse StructType
 * @subpackage Structs
 */
class FindViolationByEmployeeResponse extends AbstractStructBase
{
    /**
     * The FindViolationByEmployeeResult
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \ArrayType\ArrayOfViolation|null
     */
    protected ?\ArrayType\ArrayOfViolation $FindViolationByEmployeeResult = null;
    /**
     * Constructor method for FindViolationByEmployeeResponse
     * @uses FindViolationByEmployeeResponse::setFindViolationByEmployeeResult()
     * @param \ArrayType\ArrayOfViolation $findViolationByEmployeeResult
     */
    public function __construct(?\ArrayType\ArrayOfViolation $findViolationByEmployeeResult = null)
    {
        $this
            ->setFindViolationByEmployeeResult($findViolationByEmployeeResult);
    }
    /**
     * Get FindViolationByEmployeeResult value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \ArrayType\ArrayOfViolation|null
     */
    public function getFindViolationByEmployeeResult(): ?\ArrayType\ArrayOfViolation
    {
        return isset($this->FindViolationByEmployeeResult) ? $this->FindViolationByEmployeeResult : null;
    }
    /**
     * Set FindViolationByEmployeeResult value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \ArrayType\ArrayOfViolation $findViolationByEmployeeResult
     * @return \StructType\FindViolationByEmployeeResponse
     */
    public function setFindViolationByEmployeeResult(?\ArrayType\ArrayOfViolation $findViolationByEmployeeResult = null): self
    {
        if (is_null($findViolationByEmployeeResult) || (is_array($findViolationByEmployeeResult) && empty($findViolationByEmployeeResult))) {
            unset($this->FindViolationByEmployeeResult);
        } else {
            $this->FindViolationByEmployeeResult = $findViolationByEmployeeResult;
        }
        
        return $this;
    }
}
