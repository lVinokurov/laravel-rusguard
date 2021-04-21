<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Add_ISS_DriverResponse StructType
 * @subpackage Structs
 */
class Add_ISS_DriverResponse extends AbstractStructBase
{
    /**
     * The Add_ISS_DriverResult
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \StructType\ISS_Driver_SlimInfo|null
     */
    protected ?\StructType\ISS_Driver_SlimInfo $Add_ISS_DriverResult = null;
    /**
     * Constructor method for Add_ISS_DriverResponse
     * @uses Add_ISS_DriverResponse::setAdd_ISS_DriverResult()
     * @param \StructType\ISS_Driver_SlimInfo $add_ISS_DriverResult
     */
    public function __construct(?\StructType\ISS_Driver_SlimInfo $add_ISS_DriverResult = null)
    {
        $this
            ->setAdd_ISS_DriverResult($add_ISS_DriverResult);
    }
    /**
     * Get Add_ISS_DriverResult value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \StructType\ISS_Driver_SlimInfo|null
     */
    public function getAdd_ISS_DriverResult(): ?\StructType\ISS_Driver_SlimInfo
    {
        return isset($this->Add_ISS_DriverResult) ? $this->Add_ISS_DriverResult : null;
    }
    /**
     * Set Add_ISS_DriverResult value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \StructType\ISS_Driver_SlimInfo $add_ISS_DriverResult
     * @return \StructType\Add_ISS_DriverResponse
     */
    public function setAdd_ISS_DriverResult(?\StructType\ISS_Driver_SlimInfo $add_ISS_DriverResult = null): self
    {
        if (is_null($add_ISS_DriverResult) || (is_array($add_ISS_DriverResult) && empty($add_ISS_DriverResult))) {
            unset($this->Add_ISS_DriverResult);
        } else {
            $this->Add_ISS_DriverResult = $add_ISS_DriverResult;
        }
        
        return $this;
    }
}
