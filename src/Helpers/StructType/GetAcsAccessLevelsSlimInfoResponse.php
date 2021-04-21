<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetAcsAccessLevelsSlimInfoResponse StructType
 * @subpackage Structs
 */
class GetAcsAccessLevelsSlimInfoResponse extends AbstractStructBase
{
    /**
     * The GetAcsAccessLevelsSlimInfoResult
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \ArrayType\ArrayOfAcsAccessLevelSlimInfo|null
     */
    protected ?\ArrayType\ArrayOfAcsAccessLevelSlimInfo $GetAcsAccessLevelsSlimInfoResult = null;
    /**
     * Constructor method for GetAcsAccessLevelsSlimInfoResponse
     * @uses GetAcsAccessLevelsSlimInfoResponse::setGetAcsAccessLevelsSlimInfoResult()
     * @param \ArrayType\ArrayOfAcsAccessLevelSlimInfo $getAcsAccessLevelsSlimInfoResult
     */
    public function __construct(?\ArrayType\ArrayOfAcsAccessLevelSlimInfo $getAcsAccessLevelsSlimInfoResult = null)
    {
        $this
            ->setGetAcsAccessLevelsSlimInfoResult($getAcsAccessLevelsSlimInfoResult);
    }
    /**
     * Get GetAcsAccessLevelsSlimInfoResult value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \ArrayType\ArrayOfAcsAccessLevelSlimInfo|null
     */
    public function getGetAcsAccessLevelsSlimInfoResult(): ?\ArrayType\ArrayOfAcsAccessLevelSlimInfo
    {
        return isset($this->GetAcsAccessLevelsSlimInfoResult) ? $this->GetAcsAccessLevelsSlimInfoResult : null;
    }
    /**
     * Set GetAcsAccessLevelsSlimInfoResult value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \ArrayType\ArrayOfAcsAccessLevelSlimInfo $getAcsAccessLevelsSlimInfoResult
     * @return \StructType\GetAcsAccessLevelsSlimInfoResponse
     */
    public function setGetAcsAccessLevelsSlimInfoResult(?\ArrayType\ArrayOfAcsAccessLevelSlimInfo $getAcsAccessLevelsSlimInfoResult = null): self
    {
        if (is_null($getAcsAccessLevelsSlimInfoResult) || (is_array($getAcsAccessLevelsSlimInfoResult) && empty($getAcsAccessLevelsSlimInfoResult))) {
            unset($this->GetAcsAccessLevelsSlimInfoResult);
        } else {
            $this->GetAcsAccessLevelsSlimInfoResult = $getAcsAccessLevelsSlimInfoResult;
        }
        
        return $this;
    }
}
