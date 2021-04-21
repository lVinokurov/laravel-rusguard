<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for FindBasIpIntercomResult StructType
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:FindBasIpIntercomResult
 * @subpackage Structs
 */
class FindBasIpIntercomResult extends AbstractStructBase
{
    /**
     * The FoudIntercoms
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \ArrayType\ArrayOfBasIpIntercomInfo|null
     */
    protected ?\ArrayType\ArrayOfBasIpIntercomInfo $FoudIntercoms = null;
    /**
     * Constructor method for FindBasIpIntercomResult
     * @uses FindBasIpIntercomResult::setFoudIntercoms()
     * @param \ArrayType\ArrayOfBasIpIntercomInfo $foudIntercoms
     */
    public function __construct(?\ArrayType\ArrayOfBasIpIntercomInfo $foudIntercoms = null)
    {
        $this
            ->setFoudIntercoms($foudIntercoms);
    }
    /**
     * Get FoudIntercoms value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \ArrayType\ArrayOfBasIpIntercomInfo|null
     */
    public function getFoudIntercoms(): ?\ArrayType\ArrayOfBasIpIntercomInfo
    {
        return isset($this->FoudIntercoms) ? $this->FoudIntercoms : null;
    }
    /**
     * Set FoudIntercoms value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \ArrayType\ArrayOfBasIpIntercomInfo $foudIntercoms
     * @return \StructType\FindBasIpIntercomResult
     */
    public function setFoudIntercoms(?\ArrayType\ArrayOfBasIpIntercomInfo $foudIntercoms = null): self
    {
        if (is_null($foudIntercoms) || (is_array($foudIntercoms) && empty($foudIntercoms))) {
            unset($this->FoudIntercoms);
        } else {
            $this->FoudIntercoms = $foudIntercoms;
        }
        
        return $this;
    }
}
