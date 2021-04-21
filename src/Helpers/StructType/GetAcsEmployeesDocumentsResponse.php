<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetAcsEmployeesDocumentsResponse StructType
 * @subpackage Structs
 */
class GetAcsEmployeesDocumentsResponse extends AbstractStructBase
{
    /**
     * The GetAcsEmployeesDocumentsResult
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \StructType\AcsEmployeeDocumentsData|null
     */
    protected ?\StructType\AcsEmployeeDocumentsData $GetAcsEmployeesDocumentsResult = null;
    /**
     * Constructor method for GetAcsEmployeesDocumentsResponse
     * @uses GetAcsEmployeesDocumentsResponse::setGetAcsEmployeesDocumentsResult()
     * @param \StructType\AcsEmployeeDocumentsData $getAcsEmployeesDocumentsResult
     */
    public function __construct(?\StructType\AcsEmployeeDocumentsData $getAcsEmployeesDocumentsResult = null)
    {
        $this
            ->setGetAcsEmployeesDocumentsResult($getAcsEmployeesDocumentsResult);
    }
    /**
     * Get GetAcsEmployeesDocumentsResult value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \StructType\AcsEmployeeDocumentsData|null
     */
    public function getGetAcsEmployeesDocumentsResult(): ?\StructType\AcsEmployeeDocumentsData
    {
        return isset($this->GetAcsEmployeesDocumentsResult) ? $this->GetAcsEmployeesDocumentsResult : null;
    }
    /**
     * Set GetAcsEmployeesDocumentsResult value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \StructType\AcsEmployeeDocumentsData $getAcsEmployeesDocumentsResult
     * @return \StructType\GetAcsEmployeesDocumentsResponse
     */
    public function setGetAcsEmployeesDocumentsResult(?\StructType\AcsEmployeeDocumentsData $getAcsEmployeesDocumentsResult = null): self
    {
        if (is_null($getAcsEmployeesDocumentsResult) || (is_array($getAcsEmployeesDocumentsResult) && empty($getAcsEmployeesDocumentsResult))) {
            unset($this->GetAcsEmployeesDocumentsResult);
        } else {
            $this->GetAcsEmployeesDocumentsResult = $getAcsEmployeesDocumentsResult;
        }
        
        return $this;
    }
}
