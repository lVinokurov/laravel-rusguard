<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetAcsEmployeesByTableNumbers StructType
 * @subpackage Structs
 */
class GetAcsEmployeesByTableNumbers extends AbstractStructBase
{
    /**
     * The tableNumbers
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \ArrayType\ArrayOfint|null
     */
    protected ?\ArrayType\ArrayOfint $tableNumbers = null;
    /**
     * Constructor method for GetAcsEmployeesByTableNumbers
     * @uses GetAcsEmployeesByTableNumbers::setTableNumbers()
     * @param \ArrayType\ArrayOfint $tableNumbers
     */
    public function __construct(?\ArrayType\ArrayOfint $tableNumbers = null)
    {
        $this
            ->setTableNumbers($tableNumbers);
    }
    /**
     * Get tableNumbers value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \ArrayType\ArrayOfint|null
     */
    public function getTableNumbers(): ?\ArrayType\ArrayOfint
    {
        return isset($this->tableNumbers) ? $this->tableNumbers : null;
    }
    /**
     * Set tableNumbers value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \ArrayType\ArrayOfint $tableNumbers
     * @return \StructType\GetAcsEmployeesByTableNumbers
     */
    public function setTableNumbers(?\ArrayType\ArrayOfint $tableNumbers = null): self
    {
        if (is_null($tableNumbers) || (is_array($tableNumbers) && empty($tableNumbers))) {
            unset($this->tableNumbers);
        } else {
            $this->tableNumbers = $tableNumbers;
        }
        
        return $this;
    }
}
