<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for AddBranchResponse StructType
 * @subpackage Structs
 */
class AddBranchResponse extends AbstractStructBase
{
    /**
     * The AddBranchResult
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \StructType\BranchInfo|null
     */
    protected ?\StructType\BranchInfo $AddBranchResult = null;
    /**
     * Constructor method for AddBranchResponse
     * @uses AddBranchResponse::setAddBranchResult()
     * @param \StructType\BranchInfo $addBranchResult
     */
    public function __construct(?\StructType\BranchInfo $addBranchResult = null)
    {
        $this
            ->setAddBranchResult($addBranchResult);
    }
    /**
     * Get AddBranchResult value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \StructType\BranchInfo|null
     */
    public function getAddBranchResult(): ?\StructType\BranchInfo
    {
        return isset($this->AddBranchResult) ? $this->AddBranchResult : null;
    }
    /**
     * Set AddBranchResult value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \StructType\BranchInfo $addBranchResult
     * @return \StructType\AddBranchResponse
     */
    public function setAddBranchResult(?\StructType\BranchInfo $addBranchResult = null): self
    {
        if (is_null($addBranchResult) || (is_array($addBranchResult) && empty($addBranchResult))) {
            unset($this->AddBranchResult);
        } else {
            $this->AddBranchResult = $addBranchResult;
        }
        
        return $this;
    }
}
