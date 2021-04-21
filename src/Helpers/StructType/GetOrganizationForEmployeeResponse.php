<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetOrganizationForEmployeeResponse StructType
 * @subpackage Structs
 */
class GetOrganizationForEmployeeResponse extends AbstractStructBase
{
    /**
     * The GetOrganizationForEmployeeResult
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \ArrayType\ArrayOfDictionaryElementInfo|null
     */
    protected ?\ArrayType\ArrayOfDictionaryElementInfo $GetOrganizationForEmployeeResult = null;
    /**
     * Constructor method for GetOrganizationForEmployeeResponse
     * @uses GetOrganizationForEmployeeResponse::setGetOrganizationForEmployeeResult()
     * @param \ArrayType\ArrayOfDictionaryElementInfo $getOrganizationForEmployeeResult
     */
    public function __construct(?\ArrayType\ArrayOfDictionaryElementInfo $getOrganizationForEmployeeResult = null)
    {
        $this
            ->setGetOrganizationForEmployeeResult($getOrganizationForEmployeeResult);
    }
    /**
     * Get GetOrganizationForEmployeeResult value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \ArrayType\ArrayOfDictionaryElementInfo|null
     */
    public function getGetOrganizationForEmployeeResult(): ?\ArrayType\ArrayOfDictionaryElementInfo
    {
        return isset($this->GetOrganizationForEmployeeResult) ? $this->GetOrganizationForEmployeeResult : null;
    }
    /**
     * Set GetOrganizationForEmployeeResult value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \ArrayType\ArrayOfDictionaryElementInfo $getOrganizationForEmployeeResult
     * @return \StructType\GetOrganizationForEmployeeResponse
     */
    public function setGetOrganizationForEmployeeResult(?\ArrayType\ArrayOfDictionaryElementInfo $getOrganizationForEmployeeResult = null): self
    {
        if (is_null($getOrganizationForEmployeeResult) || (is_array($getOrganizationForEmployeeResult) && empty($getOrganizationForEmployeeResult))) {
            unset($this->GetOrganizationForEmployeeResult);
        } else {
            $this->GetOrganizationForEmployeeResult = $getOrganizationForEmployeeResult;
        }
        
        return $this;
    }
}
