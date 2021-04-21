<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GeEmployeesViewResponse StructType
 * @subpackage Structs
 */
class GeEmployeesViewResponse extends AbstractStructBase
{
    /**
     * The GeEmployeesViewResult
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \StructType\GeEmployeesViewResult|null
     */
    protected ?\StructType\GeEmployeesViewResult $GeEmployeesViewResult = null;
    /**
     * Constructor method for GeEmployeesViewResponse
     * @uses GeEmployeesViewResponse::setGeEmployeesViewResult()
     * @param \StructType\GeEmployeesViewResult $geEmployeesViewResult
     */
    public function __construct(?\StructType\GeEmployeesViewResult $geEmployeesViewResult = null)
    {
        $this
            ->setGeEmployeesViewResult($geEmployeesViewResult);
    }
    /**
     * Get GeEmployeesViewResult value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \StructType\GeEmployeesViewResult|null
     */
    public function getGeEmployeesViewResult(): ?\StructType\GeEmployeesViewResult
    {
        return isset($this->GeEmployeesViewResult) ? $this->GeEmployeesViewResult : null;
    }
    /**
     * Set GeEmployeesViewResult value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \StructType\GeEmployeesViewResult $geEmployeesViewResult
     * @return \StructType\GeEmployeesViewResponse
     */
    public function setGeEmployeesViewResult(?\StructType\GeEmployeesViewResult $geEmployeesViewResult = null): self
    {
        if (is_null($geEmployeesViewResult) || (is_array($geEmployeesViewResult) && empty($geEmployeesViewResult))) {
            unset($this->GeEmployeesViewResult);
        } else {
            $this->GeEmployeesViewResult = $geEmployeesViewResult;
        }
        
        return $this;
    }
}
