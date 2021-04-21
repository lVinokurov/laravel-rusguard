<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetAllBranchResponse StructType
 * @subpackage Structs
 */
class GetAllBranchResponse extends AbstractStructBase
{
    /**
     * The GetAllBranchResult
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \StructType\BranchData|null
     */
    protected ?\StructType\BranchData $GetAllBranchResult = null;
    /**
     * Constructor method for GetAllBranchResponse
     * @uses GetAllBranchResponse::setGetAllBranchResult()
     * @param \StructType\BranchData $getAllBranchResult
     */
    public function __construct(?\StructType\BranchData $getAllBranchResult = null)
    {
        $this
            ->setGetAllBranchResult($getAllBranchResult);
    }
    /**
     * Get GetAllBranchResult value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \StructType\BranchData|null
     */
    public function getGetAllBranchResult(): ?\StructType\BranchData
    {
        return isset($this->GetAllBranchResult) ? $this->GetAllBranchResult : null;
    }
    /**
     * Set GetAllBranchResult value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \StructType\BranchData $getAllBranchResult
     * @return \StructType\GetAllBranchResponse
     */
    public function setGetAllBranchResult(?\StructType\BranchData $getAllBranchResult = null): self
    {
        if (is_null($getAllBranchResult) || (is_array($getAllBranchResult) && empty($getAllBranchResult))) {
            unset($this->GetAllBranchResult);
        } else {
            $this->GetAllBranchResult = $getAllBranchResult;
        }
        
        return $this;
    }
}
