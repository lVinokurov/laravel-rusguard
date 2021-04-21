<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetDepartmentTreeResponse StructType
 * @subpackage Structs
 */
class GetDepartmentTreeResponse extends AbstractStructBase
{
    /**
     * The GetDepartmentTreeResult
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \ArrayType\ArrayOfDepartmentTreeModel|null
     */
    protected ?\ArrayType\ArrayOfDepartmentTreeModel $GetDepartmentTreeResult = null;
    /**
     * Constructor method for GetDepartmentTreeResponse
     * @uses GetDepartmentTreeResponse::setGetDepartmentTreeResult()
     * @param \ArrayType\ArrayOfDepartmentTreeModel $getDepartmentTreeResult
     */
    public function __construct(?\ArrayType\ArrayOfDepartmentTreeModel $getDepartmentTreeResult = null)
    {
        $this
            ->setGetDepartmentTreeResult($getDepartmentTreeResult);
    }
    /**
     * Get GetDepartmentTreeResult value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \ArrayType\ArrayOfDepartmentTreeModel|null
     */
    public function getGetDepartmentTreeResult(): ?\ArrayType\ArrayOfDepartmentTreeModel
    {
        return isset($this->GetDepartmentTreeResult) ? $this->GetDepartmentTreeResult : null;
    }
    /**
     * Set GetDepartmentTreeResult value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \ArrayType\ArrayOfDepartmentTreeModel $getDepartmentTreeResult
     * @return \StructType\GetDepartmentTreeResponse
     */
    public function setGetDepartmentTreeResult(?\ArrayType\ArrayOfDepartmentTreeModel $getDepartmentTreeResult = null): self
    {
        if (is_null($getDepartmentTreeResult) || (is_array($getDepartmentTreeResult) && empty($getDepartmentTreeResult))) {
            unset($this->GetDepartmentTreeResult);
        } else {
            $this->GetDepartmentTreeResult = $getDepartmentTreeResult;
        }
        
        return $this;
    }
}
