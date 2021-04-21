<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for LNetworkAdded StructType
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:LNetworkAdded
 * @subpackage Structs
 */
class LNetworkAdded extends AbstractStructBase
{
    /**
     * The NetInfo
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \StructType\LNetInfo|null
     */
    protected ?\StructType\LNetInfo $NetInfo = null;
    /**
     * Constructor method for LNetworkAdded
     * @uses LNetworkAdded::setNetInfo()
     * @param \StructType\LNetInfo $netInfo
     */
    public function __construct(?\StructType\LNetInfo $netInfo = null)
    {
        $this
            ->setNetInfo($netInfo);
    }
    /**
     * Get NetInfo value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \StructType\LNetInfo|null
     */
    public function getNetInfo(): ?\StructType\LNetInfo
    {
        return isset($this->NetInfo) ? $this->NetInfo : null;
    }
    /**
     * Set NetInfo value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \StructType\LNetInfo $netInfo
     * @return \StructType\LNetworkAdded
     */
    public function setNetInfo(?\StructType\LNetInfo $netInfo = null): self
    {
        if (is_null($netInfo) || (is_array($netInfo) && empty($netInfo))) {
            unset($this->NetInfo);
        } else {
            $this->NetInfo = $netInfo;
        }
        
        return $this;
    }
}
