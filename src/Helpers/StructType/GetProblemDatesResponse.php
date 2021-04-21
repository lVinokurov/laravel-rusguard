<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetProblemDatesResponse StructType
 * @subpackage Structs
 */
class GetProblemDatesResponse extends AbstractStructBase
{
    /**
     * The GetProblemDatesResult
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \ArrayType\ArrayOfDataForViolator|null
     */
    protected ?\ArrayType\ArrayOfDataForViolator $GetProblemDatesResult = null;
    /**
     * Constructor method for GetProblemDatesResponse
     * @uses GetProblemDatesResponse::setGetProblemDatesResult()
     * @param \ArrayType\ArrayOfDataForViolator $getProblemDatesResult
     */
    public function __construct(?\ArrayType\ArrayOfDataForViolator $getProblemDatesResult = null)
    {
        $this
            ->setGetProblemDatesResult($getProblemDatesResult);
    }
    /**
     * Get GetProblemDatesResult value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \ArrayType\ArrayOfDataForViolator|null
     */
    public function getGetProblemDatesResult(): ?\ArrayType\ArrayOfDataForViolator
    {
        return isset($this->GetProblemDatesResult) ? $this->GetProblemDatesResult : null;
    }
    /**
     * Set GetProblemDatesResult value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \ArrayType\ArrayOfDataForViolator $getProblemDatesResult
     * @return \StructType\GetProblemDatesResponse
     */
    public function setGetProblemDatesResult(?\ArrayType\ArrayOfDataForViolator $getProblemDatesResult = null): self
    {
        if (is_null($getProblemDatesResult) || (is_array($getProblemDatesResult) && empty($getProblemDatesResult))) {
            unset($this->GetProblemDatesResult);
        } else {
            $this->GetProblemDatesResult = $getProblemDatesResult;
        }
        
        return $this;
    }
}
