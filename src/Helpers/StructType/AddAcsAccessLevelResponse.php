<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for AddAcsAccessLevelResponse StructType
 * @subpackage Structs
 */
class AddAcsAccessLevelResponse extends AbstractStructBase
{
    /**
     * The AddAcsAccessLevelResult
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \StructType\AcsAccessLevelSlimInfo|null
     */
    protected ?\StructType\AcsAccessLevelSlimInfo $AddAcsAccessLevelResult = null;
    /**
     * Constructor method for AddAcsAccessLevelResponse
     * @uses AddAcsAccessLevelResponse::setAddAcsAccessLevelResult()
     * @param \StructType\AcsAccessLevelSlimInfo $addAcsAccessLevelResult
     */
    public function __construct(?\StructType\AcsAccessLevelSlimInfo $addAcsAccessLevelResult = null)
    {
        $this
            ->setAddAcsAccessLevelResult($addAcsAccessLevelResult);
    }
    /**
     * Get AddAcsAccessLevelResult value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \StructType\AcsAccessLevelSlimInfo|null
     */
    public function getAddAcsAccessLevelResult(): ?\StructType\AcsAccessLevelSlimInfo
    {
        return isset($this->AddAcsAccessLevelResult) ? $this->AddAcsAccessLevelResult : null;
    }
    /**
     * Set AddAcsAccessLevelResult value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \StructType\AcsAccessLevelSlimInfo $addAcsAccessLevelResult
     * @return \StructType\AddAcsAccessLevelResponse
     */
    public function setAddAcsAccessLevelResult(?\StructType\AcsAccessLevelSlimInfo $addAcsAccessLevelResult = null): self
    {
        if (is_null($addAcsAccessLevelResult) || (is_array($addAcsAccessLevelResult) && empty($addAcsAccessLevelResult))) {
            unset($this->AddAcsAccessLevelResult);
        } else {
            $this->AddAcsAccessLevelResult = $addAcsAccessLevelResult;
        }
        
        return $this;
    }
}
