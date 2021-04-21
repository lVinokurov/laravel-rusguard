<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for
 * TupleOfArrayOfAcsBoxAccessLevelElementSlimInfoArrayOfAcsBoxAccessLevelElementSli
 * mInfoArrayOfAcsBoxAccessLevelElementSlimInfoZNgA9GgH StructType
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:TupleOfArrayOfAcsBoxAccessLevelElementSlimInfoArrayOfAcsBoxAccessLevelElementSlimInfoArrayOfAcsBoxAccessLevelElementSlimInfoZNgA9GgH
 * @subpackage Structs
 */
class TupleOfArrayOfAcsBoxAccessLevelElementSlimInfoArrayOfAcsBoxAccessLevelElementSlimInfoArrayOfAcsBoxAccessLevelElementSlimInfoZNgA9GgH extends AbstractStructBase
{
    /**
     * The m_Item1
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var \ArrayType\ArrayOfAcsBoxAccessLevelElementSlimInfo|null
     */
    protected ?\ArrayType\ArrayOfAcsBoxAccessLevelElementSlimInfo $m_Item1 = null;
    /**
     * The m_Item2
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var \ArrayType\ArrayOfAcsBoxAccessLevelElementSlimInfo|null
     */
    protected ?\ArrayType\ArrayOfAcsBoxAccessLevelElementSlimInfo $m_Item2 = null;
    /**
     * The m_Item3
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var \ArrayType\ArrayOfAcsBoxAccessLevelElementSlimInfo|null
     */
    protected ?\ArrayType\ArrayOfAcsBoxAccessLevelElementSlimInfo $m_Item3 = null;
    /**
     * Constructor method for
     * TupleOfArrayOfAcsBoxAccessLevelElementSlimInfoArrayOfAcsBoxAccessLevelElementSli
     * mInfoArrayOfAcsBoxAccessLevelElementSlimInfoZNgA9GgH
     * @uses TupleOfArrayOfAcsBoxAccessLevelElementSlimInfoArrayOfAcsBoxAccessLevelElementSlimInfoArrayOfAcsBoxAccessLevelElementSlimInfoZNgA9GgH::setM_Item1()
     * @uses TupleOfArrayOfAcsBoxAccessLevelElementSlimInfoArrayOfAcsBoxAccessLevelElementSlimInfoArrayOfAcsBoxAccessLevelElementSlimInfoZNgA9GgH::setM_Item2()
     * @uses TupleOfArrayOfAcsBoxAccessLevelElementSlimInfoArrayOfAcsBoxAccessLevelElementSlimInfoArrayOfAcsBoxAccessLevelElementSlimInfoZNgA9GgH::setM_Item3()
     * @param \ArrayType\ArrayOfAcsBoxAccessLevelElementSlimInfo $m_Item1
     * @param \ArrayType\ArrayOfAcsBoxAccessLevelElementSlimInfo $m_Item2
     * @param \ArrayType\ArrayOfAcsBoxAccessLevelElementSlimInfo $m_Item3
     */
    public function __construct(?\ArrayType\ArrayOfAcsBoxAccessLevelElementSlimInfo $m_Item1 = null, ?\ArrayType\ArrayOfAcsBoxAccessLevelElementSlimInfo $m_Item2 = null, ?\ArrayType\ArrayOfAcsBoxAccessLevelElementSlimInfo $m_Item3 = null)
    {
        $this
            ->setM_Item1($m_Item1)
            ->setM_Item2($m_Item2)
            ->setM_Item3($m_Item3);
    }
    /**
     * Get m_Item1 value
     * @return \ArrayType\ArrayOfAcsBoxAccessLevelElementSlimInfo|null
     */
    public function getM_Item1(): ?\ArrayType\ArrayOfAcsBoxAccessLevelElementSlimInfo
    {
        return $this->m_Item1;
    }
    /**
     * Set m_Item1 value
     * @param \ArrayType\ArrayOfAcsBoxAccessLevelElementSlimInfo $m_Item1
     * @return \StructType\TupleOfArrayOfAcsBoxAccessLevelElementSlimInfoArrayOfAcsBoxAccessLevelElementSlimInfoArrayOfAcsBoxAccessLevelElementSlimInfoZNgA9GgH
     */
    public function setM_Item1(?\ArrayType\ArrayOfAcsBoxAccessLevelElementSlimInfo $m_Item1 = null): self
    {
        $this->m_Item1 = $m_Item1;
        
        return $this;
    }
    /**
     * Get m_Item2 value
     * @return \ArrayType\ArrayOfAcsBoxAccessLevelElementSlimInfo|null
     */
    public function getM_Item2(): ?\ArrayType\ArrayOfAcsBoxAccessLevelElementSlimInfo
    {
        return $this->m_Item2;
    }
    /**
     * Set m_Item2 value
     * @param \ArrayType\ArrayOfAcsBoxAccessLevelElementSlimInfo $m_Item2
     * @return \StructType\TupleOfArrayOfAcsBoxAccessLevelElementSlimInfoArrayOfAcsBoxAccessLevelElementSlimInfoArrayOfAcsBoxAccessLevelElementSlimInfoZNgA9GgH
     */
    public function setM_Item2(?\ArrayType\ArrayOfAcsBoxAccessLevelElementSlimInfo $m_Item2 = null): self
    {
        $this->m_Item2 = $m_Item2;
        
        return $this;
    }
    /**
     * Get m_Item3 value
     * @return \ArrayType\ArrayOfAcsBoxAccessLevelElementSlimInfo|null
     */
    public function getM_Item3(): ?\ArrayType\ArrayOfAcsBoxAccessLevelElementSlimInfo
    {
        return $this->m_Item3;
    }
    /**
     * Set m_Item3 value
     * @param \ArrayType\ArrayOfAcsBoxAccessLevelElementSlimInfo $m_Item3
     * @return \StructType\TupleOfArrayOfAcsBoxAccessLevelElementSlimInfoArrayOfAcsBoxAccessLevelElementSlimInfoArrayOfAcsBoxAccessLevelElementSlimInfoZNgA9GgH
     */
    public function setM_Item3(?\ArrayType\ArrayOfAcsBoxAccessLevelElementSlimInfo $m_Item3 = null): self
    {
        $this->m_Item3 = $m_Item3;
        
        return $this;
    }
}
