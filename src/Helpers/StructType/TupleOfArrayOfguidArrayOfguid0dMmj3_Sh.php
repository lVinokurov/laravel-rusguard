<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for TupleOfArrayOfguidArrayOfguid0dMmj3_Sh StructType
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:TupleOfArrayOfguidArrayOfguid0dMmj3_Sh
 * @subpackage Structs
 */
class TupleOfArrayOfguidArrayOfguid0dMmj3_Sh extends AbstractStructBase
{
    /**
     * The m_Item1
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var \ArrayType\ArrayOfguid|null
     */
    protected ?\ArrayType\ArrayOfguid $m_Item1 = null;
    /**
     * The m_Item2
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var \ArrayType\ArrayOfguid|null
     */
    protected ?\ArrayType\ArrayOfguid $m_Item2 = null;
    /**
     * Constructor method for TupleOfArrayOfguidArrayOfguid0dMmj3_Sh
     * @uses TupleOfArrayOfguidArrayOfguid0dMmj3_Sh::setM_Item1()
     * @uses TupleOfArrayOfguidArrayOfguid0dMmj3_Sh::setM_Item2()
     * @param \ArrayType\ArrayOfguid $m_Item1
     * @param \ArrayType\ArrayOfguid $m_Item2
     */
    public function __construct(?\ArrayType\ArrayOfguid $m_Item1 = null, ?\ArrayType\ArrayOfguid $m_Item2 = null)
    {
        $this
            ->setM_Item1($m_Item1)
            ->setM_Item2($m_Item2);
    }
    /**
     * Get m_Item1 value
     * @return \ArrayType\ArrayOfguid|null
     */
    public function getM_Item1(): ?\ArrayType\ArrayOfguid
    {
        return $this->m_Item1;
    }
    /**
     * Set m_Item1 value
     * @param \ArrayType\ArrayOfguid $m_Item1
     * @return \StructType\TupleOfArrayOfguidArrayOfguid0dMmj3_Sh
     */
    public function setM_Item1(?\ArrayType\ArrayOfguid $m_Item1 = null): self
    {
        $this->m_Item1 = $m_Item1;
        
        return $this;
    }
    /**
     * Get m_Item2 value
     * @return \ArrayType\ArrayOfguid|null
     */
    public function getM_Item2(): ?\ArrayType\ArrayOfguid
    {
        return $this->m_Item2;
    }
    /**
     * Set m_Item2 value
     * @param \ArrayType\ArrayOfguid $m_Item2
     * @return \StructType\TupleOfArrayOfguidArrayOfguid0dMmj3_Sh
     */
    public function setM_Item2(?\ArrayType\ArrayOfguid $m_Item2 = null): self
    {
        $this->m_Item2 = $m_Item2;
        
        return $this;
    }
}
