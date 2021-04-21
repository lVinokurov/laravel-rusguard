<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ForceAssignAcsKeyForEmployeeResponse StructType
 * @subpackage Structs
 */
class ForceAssignAcsKeyForEmployeeResponse extends AbstractStructBase
{
    /**
     * The ForceAssignAcsKeyForEmployeeResult
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \StructType\AcsKeyInfo|null
     */
    protected ?\StructType\AcsKeyInfo $ForceAssignAcsKeyForEmployeeResult = null;
    /**
     * Constructor method for ForceAssignAcsKeyForEmployeeResponse
     * @uses ForceAssignAcsKeyForEmployeeResponse::setForceAssignAcsKeyForEmployeeResult()
     * @param \StructType\AcsKeyInfo $forceAssignAcsKeyForEmployeeResult
     */
    public function __construct(?\StructType\AcsKeyInfo $forceAssignAcsKeyForEmployeeResult = null)
    {
        $this
            ->setForceAssignAcsKeyForEmployeeResult($forceAssignAcsKeyForEmployeeResult);
    }
    /**
     * Get ForceAssignAcsKeyForEmployeeResult value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \StructType\AcsKeyInfo|null
     */
    public function getForceAssignAcsKeyForEmployeeResult(): ?\StructType\AcsKeyInfo
    {
        return isset($this->ForceAssignAcsKeyForEmployeeResult) ? $this->ForceAssignAcsKeyForEmployeeResult : null;
    }
    /**
     * Set ForceAssignAcsKeyForEmployeeResult value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \StructType\AcsKeyInfo $forceAssignAcsKeyForEmployeeResult
     * @return \StructType\ForceAssignAcsKeyForEmployeeResponse
     */
    public function setForceAssignAcsKeyForEmployeeResult(?\StructType\AcsKeyInfo $forceAssignAcsKeyForEmployeeResult = null): self
    {
        if (is_null($forceAssignAcsKeyForEmployeeResult) || (is_array($forceAssignAcsKeyForEmployeeResult) && empty($forceAssignAcsKeyForEmployeeResult))) {
            unset($this->ForceAssignAcsKeyForEmployeeResult);
        } else {
            $this->ForceAssignAcsKeyForEmployeeResult = $forceAssignAcsKeyForEmployeeResult;
        }
        
        return $this;
    }
}
