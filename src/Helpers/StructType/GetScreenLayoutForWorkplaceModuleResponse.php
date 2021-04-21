<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetScreenLayoutForWorkplaceModuleResponse StructType
 * @subpackage Structs
 */
class GetScreenLayoutForWorkplaceModuleResponse extends AbstractStructBase
{
    /**
     * The GetScreenLayoutForWorkplaceModuleResult
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \StructType\ScreenLayoutInfo|null
     */
    protected ?\StructType\ScreenLayoutInfo $GetScreenLayoutForWorkplaceModuleResult = null;
    /**
     * Constructor method for GetScreenLayoutForWorkplaceModuleResponse
     * @uses GetScreenLayoutForWorkplaceModuleResponse::setGetScreenLayoutForWorkplaceModuleResult()
     * @param \StructType\ScreenLayoutInfo $getScreenLayoutForWorkplaceModuleResult
     */
    public function __construct(?\StructType\ScreenLayoutInfo $getScreenLayoutForWorkplaceModuleResult = null)
    {
        $this
            ->setGetScreenLayoutForWorkplaceModuleResult($getScreenLayoutForWorkplaceModuleResult);
    }
    /**
     * Get GetScreenLayoutForWorkplaceModuleResult value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \StructType\ScreenLayoutInfo|null
     */
    public function getGetScreenLayoutForWorkplaceModuleResult(): ?\StructType\ScreenLayoutInfo
    {
        return isset($this->GetScreenLayoutForWorkplaceModuleResult) ? $this->GetScreenLayoutForWorkplaceModuleResult : null;
    }
    /**
     * Set GetScreenLayoutForWorkplaceModuleResult value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \StructType\ScreenLayoutInfo $getScreenLayoutForWorkplaceModuleResult
     * @return \StructType\GetScreenLayoutForWorkplaceModuleResponse
     */
    public function setGetScreenLayoutForWorkplaceModuleResult(?\StructType\ScreenLayoutInfo $getScreenLayoutForWorkplaceModuleResult = null): self
    {
        if (is_null($getScreenLayoutForWorkplaceModuleResult) || (is_array($getScreenLayoutForWorkplaceModuleResult) && empty($getScreenLayoutForWorkplaceModuleResult))) {
            unset($this->GetScreenLayoutForWorkplaceModuleResult);
        } else {
            $this->GetScreenLayoutForWorkplaceModuleResult = $getScreenLayoutForWorkplaceModuleResult;
        }
        
        return $this;
    }
}
