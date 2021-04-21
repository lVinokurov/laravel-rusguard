<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for FindGroupsResponse StructType
 * @subpackage Structs
 */
class FindGroupsResponse extends AbstractStructBase
{
    /**
     * The FindGroupsResult
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \ArrayType\ArrayOfguid|null
     */
    protected ?\ArrayType\ArrayOfguid $FindGroupsResult = null;
    /**
     * Constructor method for FindGroupsResponse
     * @uses FindGroupsResponse::setFindGroupsResult()
     * @param \ArrayType\ArrayOfguid $findGroupsResult
     */
    public function __construct(?\ArrayType\ArrayOfguid $findGroupsResult = null)
    {
        $this
            ->setFindGroupsResult($findGroupsResult);
    }
    /**
     * Get FindGroupsResult value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \ArrayType\ArrayOfguid|null
     */
    public function getFindGroupsResult(): ?\ArrayType\ArrayOfguid
    {
        return isset($this->FindGroupsResult) ? $this->FindGroupsResult : null;
    }
    /**
     * Set FindGroupsResult value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \ArrayType\ArrayOfguid $findGroupsResult
     * @return \StructType\FindGroupsResponse
     */
    public function setFindGroupsResult(?\ArrayType\ArrayOfguid $findGroupsResult = null): self
    {
        if (is_null($findGroupsResult) || (is_array($findGroupsResult) && empty($findGroupsResult))) {
            unset($this->FindGroupsResult);
        } else {
            $this->FindGroupsResult = $findGroupsResult;
        }
        
        return $this;
    }
}
