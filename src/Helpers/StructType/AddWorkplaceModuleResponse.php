<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for AddWorkplaceModuleResponse StructType
 * @subpackage Structs
 */
class AddWorkplaceModuleResponse extends AbstractStructBase
{
    /**
     * The AddWorkplaceModuleResult
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \StructType\WorkplaceModuleInfo|null
     */
    protected ?\StructType\WorkplaceModuleInfo $AddWorkplaceModuleResult = null;
    /**
     * Constructor method for AddWorkplaceModuleResponse
     * @uses AddWorkplaceModuleResponse::setAddWorkplaceModuleResult()
     * @param \StructType\WorkplaceModuleInfo $addWorkplaceModuleResult
     */
    public function __construct(?\StructType\WorkplaceModuleInfo $addWorkplaceModuleResult = null)
    {
        $this
            ->setAddWorkplaceModuleResult($addWorkplaceModuleResult);
    }
    /**
     * Get AddWorkplaceModuleResult value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \StructType\WorkplaceModuleInfo|null
     */
    public function getAddWorkplaceModuleResult(): ?\StructType\WorkplaceModuleInfo
    {
        return isset($this->AddWorkplaceModuleResult) ? $this->AddWorkplaceModuleResult : null;
    }
    /**
     * Set AddWorkplaceModuleResult value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \StructType\WorkplaceModuleInfo $addWorkplaceModuleResult
     * @return \StructType\AddWorkplaceModuleResponse
     */
    public function setAddWorkplaceModuleResult(?\StructType\WorkplaceModuleInfo $addWorkplaceModuleResult = null): self
    {
        if (is_null($addWorkplaceModuleResult) || (is_array($addWorkplaceModuleResult) && empty($addWorkplaceModuleResult))) {
            unset($this->AddWorkplaceModuleResult);
        } else {
            $this->AddWorkplaceModuleResult = $addWorkplaceModuleResult;
        }
        
        return $this;
    }
}
