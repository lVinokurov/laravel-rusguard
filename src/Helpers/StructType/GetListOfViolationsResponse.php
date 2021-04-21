<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetListOfViolationsResponse StructType
 * @subpackage Structs
 */
class GetListOfViolationsResponse extends AbstractStructBase
{
    /**
     * The GetListOfViolationsResult
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \ArrayType\ArrayOfViolator|null
     */
    protected ?\ArrayType\ArrayOfViolator $GetListOfViolationsResult = null;
    /**
     * Constructor method for GetListOfViolationsResponse
     * @uses GetListOfViolationsResponse::setGetListOfViolationsResult()
     * @param \ArrayType\ArrayOfViolator $getListOfViolationsResult
     */
    public function __construct(?\ArrayType\ArrayOfViolator $getListOfViolationsResult = null)
    {
        $this
            ->setGetListOfViolationsResult($getListOfViolationsResult);
    }
    /**
     * Get GetListOfViolationsResult value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \ArrayType\ArrayOfViolator|null
     */
    public function getGetListOfViolationsResult(): ?\ArrayType\ArrayOfViolator
    {
        return isset($this->GetListOfViolationsResult) ? $this->GetListOfViolationsResult : null;
    }
    /**
     * Set GetListOfViolationsResult value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \ArrayType\ArrayOfViolator $getListOfViolationsResult
     * @return \StructType\GetListOfViolationsResponse
     */
    public function setGetListOfViolationsResult(?\ArrayType\ArrayOfViolator $getListOfViolationsResult = null): self
    {
        if (is_null($getListOfViolationsResult) || (is_array($getListOfViolationsResult) && empty($getListOfViolationsResult))) {
            unset($this->GetListOfViolationsResult);
        } else {
            $this->GetListOfViolationsResult = $getListOfViolationsResult;
        }
        
        return $this;
    }
}
