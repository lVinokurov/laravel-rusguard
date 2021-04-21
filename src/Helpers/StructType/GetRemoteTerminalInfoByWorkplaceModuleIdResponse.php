<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetRemoteTerminalInfoByWorkplaceModuleIdResponse
 * StructType
 * @subpackage Structs
 */
class GetRemoteTerminalInfoByWorkplaceModuleIdResponse extends AbstractStructBase
{
    /**
     * The GetRemoteTerminalInfoByWorkplaceModuleIdResult
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \StructType\RemoteTerminalInfo|null
     */
    protected ?\StructType\RemoteTerminalInfo $GetRemoteTerminalInfoByWorkplaceModuleIdResult = null;
    /**
     * Constructor method for GetRemoteTerminalInfoByWorkplaceModuleIdResponse
     * @uses GetRemoteTerminalInfoByWorkplaceModuleIdResponse::setGetRemoteTerminalInfoByWorkplaceModuleIdResult()
     * @param \StructType\RemoteTerminalInfo $getRemoteTerminalInfoByWorkplaceModuleIdResult
     */
    public function __construct(?\StructType\RemoteTerminalInfo $getRemoteTerminalInfoByWorkplaceModuleIdResult = null)
    {
        $this
            ->setGetRemoteTerminalInfoByWorkplaceModuleIdResult($getRemoteTerminalInfoByWorkplaceModuleIdResult);
    }
    /**
     * Get GetRemoteTerminalInfoByWorkplaceModuleIdResult value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \StructType\RemoteTerminalInfo|null
     */
    public function getGetRemoteTerminalInfoByWorkplaceModuleIdResult(): ?\StructType\RemoteTerminalInfo
    {
        return isset($this->GetRemoteTerminalInfoByWorkplaceModuleIdResult) ? $this->GetRemoteTerminalInfoByWorkplaceModuleIdResult : null;
    }
    /**
     * Set GetRemoteTerminalInfoByWorkplaceModuleIdResult value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \StructType\RemoteTerminalInfo $getRemoteTerminalInfoByWorkplaceModuleIdResult
     * @return \StructType\GetRemoteTerminalInfoByWorkplaceModuleIdResponse
     */
    public function setGetRemoteTerminalInfoByWorkplaceModuleIdResult(?\StructType\RemoteTerminalInfo $getRemoteTerminalInfoByWorkplaceModuleIdResult = null): self
    {
        if (is_null($getRemoteTerminalInfoByWorkplaceModuleIdResult) || (is_array($getRemoteTerminalInfoByWorkplaceModuleIdResult) && empty($getRemoteTerminalInfoByWorkplaceModuleIdResult))) {
            unset($this->GetRemoteTerminalInfoByWorkplaceModuleIdResult);
        } else {
            $this->GetRemoteTerminalInfoByWorkplaceModuleIdResult = $getRemoteTerminalInfoByWorkplaceModuleIdResult;
        }
        
        return $this;
    }
}
