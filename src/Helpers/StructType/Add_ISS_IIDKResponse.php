<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Add_ISS_IIDKResponse StructType
 * @subpackage Structs
 */
class Add_ISS_IIDKResponse extends AbstractStructBase
{
    /**
     * The Add_ISS_IIDKResult
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \StructType\ISS_IIDK_SlimInfo|null
     */
    protected ?\StructType\ISS_IIDK_SlimInfo $Add_ISS_IIDKResult = null;
    /**
     * Constructor method for Add_ISS_IIDKResponse
     * @uses Add_ISS_IIDKResponse::setAdd_ISS_IIDKResult()
     * @param \StructType\ISS_IIDK_SlimInfo $add_ISS_IIDKResult
     */
    public function __construct(?\StructType\ISS_IIDK_SlimInfo $add_ISS_IIDKResult = null)
    {
        $this
            ->setAdd_ISS_IIDKResult($add_ISS_IIDKResult);
    }
    /**
     * Get Add_ISS_IIDKResult value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \StructType\ISS_IIDK_SlimInfo|null
     */
    public function getAdd_ISS_IIDKResult(): ?\StructType\ISS_IIDK_SlimInfo
    {
        return isset($this->Add_ISS_IIDKResult) ? $this->Add_ISS_IIDKResult : null;
    }
    /**
     * Set Add_ISS_IIDKResult value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \StructType\ISS_IIDK_SlimInfo $add_ISS_IIDKResult
     * @return \StructType\Add_ISS_IIDKResponse
     */
    public function setAdd_ISS_IIDKResult(?\StructType\ISS_IIDK_SlimInfo $add_ISS_IIDKResult = null): self
    {
        if (is_null($add_ISS_IIDKResult) || (is_array($add_ISS_IIDKResult) && empty($add_ISS_IIDKResult))) {
            unset($this->Add_ISS_IIDKResult);
        } else {
            $this->Add_ISS_IIDKResult = $add_ISS_IIDKResult;
        }
        
        return $this;
    }
}
