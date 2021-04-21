<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for AddAcsBoxAccessLevelResponse StructType
 * @subpackage Structs
 */
class AddAcsBoxAccessLevelResponse extends AbstractStructBase
{
    /**
     * The AddAcsBoxAccessLevelResult
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \StructType\AcsBoxAccessLevelSlimInfo|null
     */
    protected ?\StructType\AcsBoxAccessLevelSlimInfo $AddAcsBoxAccessLevelResult = null;
    /**
     * Constructor method for AddAcsBoxAccessLevelResponse
     * @uses AddAcsBoxAccessLevelResponse::setAddAcsBoxAccessLevelResult()
     * @param \StructType\AcsBoxAccessLevelSlimInfo $addAcsBoxAccessLevelResult
     */
    public function __construct(?\StructType\AcsBoxAccessLevelSlimInfo $addAcsBoxAccessLevelResult = null)
    {
        $this
            ->setAddAcsBoxAccessLevelResult($addAcsBoxAccessLevelResult);
    }
    /**
     * Get AddAcsBoxAccessLevelResult value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \StructType\AcsBoxAccessLevelSlimInfo|null
     */
    public function getAddAcsBoxAccessLevelResult(): ?\StructType\AcsBoxAccessLevelSlimInfo
    {
        return isset($this->AddAcsBoxAccessLevelResult) ? $this->AddAcsBoxAccessLevelResult : null;
    }
    /**
     * Set AddAcsBoxAccessLevelResult value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \StructType\AcsBoxAccessLevelSlimInfo $addAcsBoxAccessLevelResult
     * @return \StructType\AddAcsBoxAccessLevelResponse
     */
    public function setAddAcsBoxAccessLevelResult(?\StructType\AcsBoxAccessLevelSlimInfo $addAcsBoxAccessLevelResult = null): self
    {
        if (is_null($addAcsBoxAccessLevelResult) || (is_array($addAcsBoxAccessLevelResult) && empty($addAcsBoxAccessLevelResult))) {
            unset($this->AddAcsBoxAccessLevelResult);
        } else {
            $this->AddAcsBoxAccessLevelResult = $addAcsBoxAccessLevelResult;
        }
        
        return $this;
    }
}
