<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetAcsBoxAccessLevelsSlimInfoResponse StructType
 * @subpackage Structs
 */
class GetAcsBoxAccessLevelsSlimInfoResponse extends AbstractStructBase
{
    /**
     * The GetAcsBoxAccessLevelsSlimInfoResult
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \ArrayType\ArrayOfAcsBoxAccessLevelSlimInfo|null
     */
    protected ?\ArrayType\ArrayOfAcsBoxAccessLevelSlimInfo $GetAcsBoxAccessLevelsSlimInfoResult = null;
    /**
     * Constructor method for GetAcsBoxAccessLevelsSlimInfoResponse
     * @uses GetAcsBoxAccessLevelsSlimInfoResponse::setGetAcsBoxAccessLevelsSlimInfoResult()
     * @param \ArrayType\ArrayOfAcsBoxAccessLevelSlimInfo $getAcsBoxAccessLevelsSlimInfoResult
     */
    public function __construct(?\ArrayType\ArrayOfAcsBoxAccessLevelSlimInfo $getAcsBoxAccessLevelsSlimInfoResult = null)
    {
        $this
            ->setGetAcsBoxAccessLevelsSlimInfoResult($getAcsBoxAccessLevelsSlimInfoResult);
    }
    /**
     * Get GetAcsBoxAccessLevelsSlimInfoResult value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \ArrayType\ArrayOfAcsBoxAccessLevelSlimInfo|null
     */
    public function getGetAcsBoxAccessLevelsSlimInfoResult(): ?\ArrayType\ArrayOfAcsBoxAccessLevelSlimInfo
    {
        return isset($this->GetAcsBoxAccessLevelsSlimInfoResult) ? $this->GetAcsBoxAccessLevelsSlimInfoResult : null;
    }
    /**
     * Set GetAcsBoxAccessLevelsSlimInfoResult value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \ArrayType\ArrayOfAcsBoxAccessLevelSlimInfo $getAcsBoxAccessLevelsSlimInfoResult
     * @return \StructType\GetAcsBoxAccessLevelsSlimInfoResponse
     */
    public function setGetAcsBoxAccessLevelsSlimInfoResult(?\ArrayType\ArrayOfAcsBoxAccessLevelSlimInfo $getAcsBoxAccessLevelsSlimInfoResult = null): self
    {
        if (is_null($getAcsBoxAccessLevelsSlimInfoResult) || (is_array($getAcsBoxAccessLevelsSlimInfoResult) && empty($getAcsBoxAccessLevelsSlimInfoResult))) {
            unset($this->GetAcsBoxAccessLevelsSlimInfoResult);
        } else {
            $this->GetAcsBoxAccessLevelsSlimInfoResult = $getAcsBoxAccessLevelsSlimInfoResult;
        }
        
        return $this;
    }
}
