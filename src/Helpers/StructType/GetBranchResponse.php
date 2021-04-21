<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetBranchResponse StructType
 * @subpackage Structs
 */
class GetBranchResponse extends AbstractStructBase
{
    /**
     * The GetBranchResult
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \StructType\BranchInfo|null
     */
    protected ?\StructType\BranchInfo $GetBranchResult = null;
    /**
     * Constructor method for GetBranchResponse
     * @uses GetBranchResponse::setGetBranchResult()
     * @param \StructType\BranchInfo $getBranchResult
     */
    public function __construct(?\StructType\BranchInfo $getBranchResult = null)
    {
        $this
            ->setGetBranchResult($getBranchResult);
    }
    /**
     * Get GetBranchResult value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \StructType\BranchInfo|null
     */
    public function getGetBranchResult(): ?\StructType\BranchInfo
    {
        return isset($this->GetBranchResult) ? $this->GetBranchResult : null;
    }
    /**
     * Set GetBranchResult value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \StructType\BranchInfo $getBranchResult
     * @return \StructType\GetBranchResponse
     */
    public function setGetBranchResult(?\StructType\BranchInfo $getBranchResult = null): self
    {
        if (is_null($getBranchResult) || (is_array($getBranchResult) && empty($getBranchResult))) {
            unset($this->GetBranchResult);
        } else {
            $this->GetBranchResult = $getBranchResult;
        }
        
        return $this;
    }
}
