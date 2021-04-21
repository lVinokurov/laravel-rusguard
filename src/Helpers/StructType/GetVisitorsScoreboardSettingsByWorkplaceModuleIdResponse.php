<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetVisitorsScoreboardSettingsByWorkplaceModuleIdResponse
 * StructType
 * @subpackage Structs
 */
class GetVisitorsScoreboardSettingsByWorkplaceModuleIdResponse extends AbstractStructBase
{
    /**
     * The GetVisitorsScoreboardSettingsByWorkplaceModuleIdResult
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \StructType\VisitorsScoreboardWorkplaceModuleInfo|null
     */
    protected ?\StructType\VisitorsScoreboardWorkplaceModuleInfo $GetVisitorsScoreboardSettingsByWorkplaceModuleIdResult = null;
    /**
     * Constructor method for GetVisitorsScoreboardSettingsByWorkplaceModuleIdResponse
     * @uses GetVisitorsScoreboardSettingsByWorkplaceModuleIdResponse::setGetVisitorsScoreboardSettingsByWorkplaceModuleIdResult()
     * @param \StructType\VisitorsScoreboardWorkplaceModuleInfo $getVisitorsScoreboardSettingsByWorkplaceModuleIdResult
     */
    public function __construct(?\StructType\VisitorsScoreboardWorkplaceModuleInfo $getVisitorsScoreboardSettingsByWorkplaceModuleIdResult = null)
    {
        $this
            ->setGetVisitorsScoreboardSettingsByWorkplaceModuleIdResult($getVisitorsScoreboardSettingsByWorkplaceModuleIdResult);
    }
    /**
     * Get GetVisitorsScoreboardSettingsByWorkplaceModuleIdResult value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \StructType\VisitorsScoreboardWorkplaceModuleInfo|null
     */
    public function getGetVisitorsScoreboardSettingsByWorkplaceModuleIdResult(): ?\StructType\VisitorsScoreboardWorkplaceModuleInfo
    {
        return isset($this->GetVisitorsScoreboardSettingsByWorkplaceModuleIdResult) ? $this->GetVisitorsScoreboardSettingsByWorkplaceModuleIdResult : null;
    }
    /**
     * Set GetVisitorsScoreboardSettingsByWorkplaceModuleIdResult value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \StructType\VisitorsScoreboardWorkplaceModuleInfo $getVisitorsScoreboardSettingsByWorkplaceModuleIdResult
     * @return \StructType\GetVisitorsScoreboardSettingsByWorkplaceModuleIdResponse
     */
    public function setGetVisitorsScoreboardSettingsByWorkplaceModuleIdResult(?\StructType\VisitorsScoreboardWorkplaceModuleInfo $getVisitorsScoreboardSettingsByWorkplaceModuleIdResult = null): self
    {
        if (is_null($getVisitorsScoreboardSettingsByWorkplaceModuleIdResult) || (is_array($getVisitorsScoreboardSettingsByWorkplaceModuleIdResult) && empty($getVisitorsScoreboardSettingsByWorkplaceModuleIdResult))) {
            unset($this->GetVisitorsScoreboardSettingsByWorkplaceModuleIdResult);
        } else {
            $this->GetVisitorsScoreboardSettingsByWorkplaceModuleIdResult = $getVisitorsScoreboardSettingsByWorkplaceModuleIdResult;
        }
        
        return $this;
    }
}
