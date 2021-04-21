<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for AssignAcsKeyForEmployeeResponse StructType
 * @subpackage Structs
 */
class AssignAcsKeyForEmployeeResponse extends AbstractStructBase
{
    /**
     * The AssignAcsKeyForEmployeeResult
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \StructType\AcsKeyInfo|null
     */
    protected ?\StructType\AcsKeyInfo $AssignAcsKeyForEmployeeResult = null;
    /**
     * Constructor method for AssignAcsKeyForEmployeeResponse
     * @uses AssignAcsKeyForEmployeeResponse::setAssignAcsKeyForEmployeeResult()
     * @param \StructType\AcsKeyInfo $assignAcsKeyForEmployeeResult
     */
    public function __construct(?\StructType\AcsKeyInfo $assignAcsKeyForEmployeeResult = null)
    {
        $this
            ->setAssignAcsKeyForEmployeeResult($assignAcsKeyForEmployeeResult);
    }
    /**
     * Get AssignAcsKeyForEmployeeResult value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \StructType\AcsKeyInfo|null
     */
    public function getAssignAcsKeyForEmployeeResult(): ?\StructType\AcsKeyInfo
    {
        return isset($this->AssignAcsKeyForEmployeeResult) ? $this->AssignAcsKeyForEmployeeResult : null;
    }
    /**
     * Set AssignAcsKeyForEmployeeResult value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \StructType\AcsKeyInfo $assignAcsKeyForEmployeeResult
     * @return \StructType\AssignAcsKeyForEmployeeResponse
     */
    public function setAssignAcsKeyForEmployeeResult(?\StructType\AcsKeyInfo $assignAcsKeyForEmployeeResult = null): self
    {
        if (is_null($assignAcsKeyForEmployeeResult) || (is_array($assignAcsKeyForEmployeeResult) && empty($assignAcsKeyForEmployeeResult))) {
            unset($this->AssignAcsKeyForEmployeeResult);
        } else {
            $this->AssignAcsKeyForEmployeeResult = $assignAcsKeyForEmployeeResult;
        }
        
        return $this;
    }
}
