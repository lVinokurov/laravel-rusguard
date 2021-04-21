<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetAcsConfiguratorSettingsByWorkplaceModuleResponse
 * StructType
 * @subpackage Structs
 */
class GetAcsConfiguratorSettingsByWorkplaceModuleResponse extends AbstractStructBase
{
    /**
     * The GetAcsConfiguratorSettingsByWorkplaceModuleResult
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \StructType\AcsConfiguratorInfo|null
     */
    protected ?\StructType\AcsConfiguratorInfo $GetAcsConfiguratorSettingsByWorkplaceModuleResult = null;
    /**
     * Constructor method for GetAcsConfiguratorSettingsByWorkplaceModuleResponse
     * @uses GetAcsConfiguratorSettingsByWorkplaceModuleResponse::setGetAcsConfiguratorSettingsByWorkplaceModuleResult()
     * @param \StructType\AcsConfiguratorInfo $getAcsConfiguratorSettingsByWorkplaceModuleResult
     */
    public function __construct(?\StructType\AcsConfiguratorInfo $getAcsConfiguratorSettingsByWorkplaceModuleResult = null)
    {
        $this
            ->setGetAcsConfiguratorSettingsByWorkplaceModuleResult($getAcsConfiguratorSettingsByWorkplaceModuleResult);
    }
    /**
     * Get GetAcsConfiguratorSettingsByWorkplaceModuleResult value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \StructType\AcsConfiguratorInfo|null
     */
    public function getGetAcsConfiguratorSettingsByWorkplaceModuleResult(): ?\StructType\AcsConfiguratorInfo
    {
        return isset($this->GetAcsConfiguratorSettingsByWorkplaceModuleResult) ? $this->GetAcsConfiguratorSettingsByWorkplaceModuleResult : null;
    }
    /**
     * Set GetAcsConfiguratorSettingsByWorkplaceModuleResult value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \StructType\AcsConfiguratorInfo $getAcsConfiguratorSettingsByWorkplaceModuleResult
     * @return \StructType\GetAcsConfiguratorSettingsByWorkplaceModuleResponse
     */
    public function setGetAcsConfiguratorSettingsByWorkplaceModuleResult(?\StructType\AcsConfiguratorInfo $getAcsConfiguratorSettingsByWorkplaceModuleResult = null): self
    {
        if (is_null($getAcsConfiguratorSettingsByWorkplaceModuleResult) || (is_array($getAcsConfiguratorSettingsByWorkplaceModuleResult) && empty($getAcsConfiguratorSettingsByWorkplaceModuleResult))) {
            unset($this->GetAcsConfiguratorSettingsByWorkplaceModuleResult);
        } else {
            $this->GetAcsConfiguratorSettingsByWorkplaceModuleResult = $getAcsConfiguratorSettingsByWorkplaceModuleResult;
        }
        
        return $this;
    }
}
