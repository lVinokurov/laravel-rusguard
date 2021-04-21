<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetSubdivisionsForEmployeeResponse StructType
 * @subpackage Structs
 */
class GetSubdivisionsForEmployeeResponse extends AbstractStructBase
{
    /**
     * The GetSubdivisionsForEmployeeResult
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \ArrayType\ArrayOfDictionaryElementInfo|null
     */
    protected ?\ArrayType\ArrayOfDictionaryElementInfo $GetSubdivisionsForEmployeeResult = null;
    /**
     * Constructor method for GetSubdivisionsForEmployeeResponse
     * @uses GetSubdivisionsForEmployeeResponse::setGetSubdivisionsForEmployeeResult()
     * @param \ArrayType\ArrayOfDictionaryElementInfo $getSubdivisionsForEmployeeResult
     */
    public function __construct(?\ArrayType\ArrayOfDictionaryElementInfo $getSubdivisionsForEmployeeResult = null)
    {
        $this
            ->setGetSubdivisionsForEmployeeResult($getSubdivisionsForEmployeeResult);
    }
    /**
     * Get GetSubdivisionsForEmployeeResult value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \ArrayType\ArrayOfDictionaryElementInfo|null
     */
    public function getGetSubdivisionsForEmployeeResult(): ?\ArrayType\ArrayOfDictionaryElementInfo
    {
        return isset($this->GetSubdivisionsForEmployeeResult) ? $this->GetSubdivisionsForEmployeeResult : null;
    }
    /**
     * Set GetSubdivisionsForEmployeeResult value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \ArrayType\ArrayOfDictionaryElementInfo $getSubdivisionsForEmployeeResult
     * @return \StructType\GetSubdivisionsForEmployeeResponse
     */
    public function setGetSubdivisionsForEmployeeResult(?\ArrayType\ArrayOfDictionaryElementInfo $getSubdivisionsForEmployeeResult = null): self
    {
        if (is_null($getSubdivisionsForEmployeeResult) || (is_array($getSubdivisionsForEmployeeResult) && empty($getSubdivisionsForEmployeeResult))) {
            unset($this->GetSubdivisionsForEmployeeResult);
        } else {
            $this->GetSubdivisionsForEmployeeResult = $getSubdivisionsForEmployeeResult;
        }
        
        return $this;
    }
}
