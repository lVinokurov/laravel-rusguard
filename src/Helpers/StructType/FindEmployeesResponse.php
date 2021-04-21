<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for FindEmployeesResponse StructType
 * @subpackage Structs
 */
class FindEmployeesResponse extends AbstractStructBase
{
    /**
     * The FindEmployeesResult
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \ArrayType\ArrayOfAcsEmployee|null
     */
    protected ?\ArrayType\ArrayOfAcsEmployee $FindEmployeesResult = null;
    /**
     * Constructor method for FindEmployeesResponse
     * @uses FindEmployeesResponse::setFindEmployeesResult()
     * @param \ArrayType\ArrayOfAcsEmployee $findEmployeesResult
     */
    public function __construct(?\ArrayType\ArrayOfAcsEmployee $findEmployeesResult = null)
    {
        $this
            ->setFindEmployeesResult($findEmployeesResult);
    }
    /**
     * Get FindEmployeesResult value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \ArrayType\ArrayOfAcsEmployee|null
     */
    public function getFindEmployeesResult(): ?\ArrayType\ArrayOfAcsEmployee
    {
        return isset($this->FindEmployeesResult) ? $this->FindEmployeesResult : null;
    }
    /**
     * Set FindEmployeesResult value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \ArrayType\ArrayOfAcsEmployee $findEmployeesResult
     * @return \StructType\FindEmployeesResponse
     */
    public function setFindEmployeesResult(?\ArrayType\ArrayOfAcsEmployee $findEmployeesResult = null): self
    {
        if (is_null($findEmployeesResult) || (is_array($findEmployeesResult) && empty($findEmployeesResult))) {
            unset($this->FindEmployeesResult);
        } else {
            $this->FindEmployeesResult = $findEmployeesResult;
        }
        
        return $this;
    }
}
