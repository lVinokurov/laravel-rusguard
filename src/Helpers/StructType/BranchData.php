<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for BranchData StructType
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:BranchData
 * @subpackage Structs
 */
class BranchData extends AbstractStructBase
{
    /**
     * The Branches
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \ArrayType\ArrayOfBranchInfo|null
     */
    protected ?\ArrayType\ArrayOfBranchInfo $Branches = null;
    /**
     * The Count
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var int|null
     */
    protected ?int $Count = null;
    /**
     * Constructor method for BranchData
     * @uses BranchData::setBranches()
     * @uses BranchData::setCount()
     * @param \ArrayType\ArrayOfBranchInfo $branches
     * @param int $count
     */
    public function __construct(?\ArrayType\ArrayOfBranchInfo $branches = null, ?int $count = null)
    {
        $this
            ->setBranches($branches)
            ->setCount($count);
    }
    /**
     * Get Branches value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \ArrayType\ArrayOfBranchInfo|null
     */
    public function getBranches(): ?\ArrayType\ArrayOfBranchInfo
    {
        return isset($this->Branches) ? $this->Branches : null;
    }
    /**
     * Set Branches value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \ArrayType\ArrayOfBranchInfo $branches
     * @return \StructType\BranchData
     */
    public function setBranches(?\ArrayType\ArrayOfBranchInfo $branches = null): self
    {
        if (is_null($branches) || (is_array($branches) && empty($branches))) {
            unset($this->Branches);
        } else {
            $this->Branches = $branches;
        }
        
        return $this;
    }
    /**
     * Get Count value
     * @return int|null
     */
    public function getCount(): ?int
    {
        return $this->Count;
    }
    /**
     * Set Count value
     * @param int $count
     * @return \StructType\BranchData
     */
    public function setCount(?int $count = null): self
    {
        // validation for constraint: int
        if (!is_null($count) && !(is_int($count) || ctype_digit($count))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($count, true), gettype($count)), __LINE__);
        }
        $this->Count = $count;
        
        return $this;
    }
}
