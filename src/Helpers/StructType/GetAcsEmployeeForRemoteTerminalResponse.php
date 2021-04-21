<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetAcsEmployeeForRemoteTerminalResponse StructType
 * @subpackage Structs
 */
class GetAcsEmployeeForRemoteTerminalResponse extends AbstractStructBase
{
    /**
     * The GetAcsEmployeeForRemoteTerminalResult
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \StructType\EmployeeInfo|null
     */
    protected ?\StructType\EmployeeInfo $GetAcsEmployeeForRemoteTerminalResult = null;
    /**
     * Constructor method for GetAcsEmployeeForRemoteTerminalResponse
     * @uses GetAcsEmployeeForRemoteTerminalResponse::setGetAcsEmployeeForRemoteTerminalResult()
     * @param \StructType\EmployeeInfo $getAcsEmployeeForRemoteTerminalResult
     */
    public function __construct(?\StructType\EmployeeInfo $getAcsEmployeeForRemoteTerminalResult = null)
    {
        $this
            ->setGetAcsEmployeeForRemoteTerminalResult($getAcsEmployeeForRemoteTerminalResult);
    }
    /**
     * Get GetAcsEmployeeForRemoteTerminalResult value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \StructType\EmployeeInfo|null
     */
    public function getGetAcsEmployeeForRemoteTerminalResult(): ?\StructType\EmployeeInfo
    {
        return isset($this->GetAcsEmployeeForRemoteTerminalResult) ? $this->GetAcsEmployeeForRemoteTerminalResult : null;
    }
    /**
     * Set GetAcsEmployeeForRemoteTerminalResult value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \StructType\EmployeeInfo $getAcsEmployeeForRemoteTerminalResult
     * @return \StructType\GetAcsEmployeeForRemoteTerminalResponse
     */
    public function setGetAcsEmployeeForRemoteTerminalResult(?\StructType\EmployeeInfo $getAcsEmployeeForRemoteTerminalResult = null): self
    {
        if (is_null($getAcsEmployeeForRemoteTerminalResult) || (is_array($getAcsEmployeeForRemoteTerminalResult) && empty($getAcsEmployeeForRemoteTerminalResult))) {
            unset($this->GetAcsEmployeeForRemoteTerminalResult);
        } else {
            $this->GetAcsEmployeeForRemoteTerminalResult = $getAcsEmployeeForRemoteTerminalResult;
        }
        
        return $this;
    }
}
