<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for AddAcsAccessPointResponse StructType
 * @subpackage Structs
 */
class AddAcsAccessPointResponse extends AbstractStructBase
{
    /**
     * The AddAcsAccessPointResult
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \StructType\AcsAccessPointSlimInfo|null
     */
    protected ?\StructType\AcsAccessPointSlimInfo $AddAcsAccessPointResult = null;
    /**
     * Constructor method for AddAcsAccessPointResponse
     * @uses AddAcsAccessPointResponse::setAddAcsAccessPointResult()
     * @param \StructType\AcsAccessPointSlimInfo $addAcsAccessPointResult
     */
    public function __construct(?\StructType\AcsAccessPointSlimInfo $addAcsAccessPointResult = null)
    {
        $this
            ->setAddAcsAccessPointResult($addAcsAccessPointResult);
    }
    /**
     * Get AddAcsAccessPointResult value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \StructType\AcsAccessPointSlimInfo|null
     */
    public function getAddAcsAccessPointResult(): ?\StructType\AcsAccessPointSlimInfo
    {
        return isset($this->AddAcsAccessPointResult) ? $this->AddAcsAccessPointResult : null;
    }
    /**
     * Set AddAcsAccessPointResult value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \StructType\AcsAccessPointSlimInfo $addAcsAccessPointResult
     * @return \StructType\AddAcsAccessPointResponse
     */
    public function setAddAcsAccessPointResult(?\StructType\AcsAccessPointSlimInfo $addAcsAccessPointResult = null): self
    {
        if (is_null($addAcsAccessPointResult) || (is_array($addAcsAccessPointResult) && empty($addAcsAccessPointResult))) {
            unset($this->AddAcsAccessPointResult);
        } else {
            $this->AddAcsAccessPointResult = $addAcsAccessPointResult;
        }
        
        return $this;
    }
}
