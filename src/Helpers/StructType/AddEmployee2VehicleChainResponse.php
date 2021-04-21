<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for AddEmployee2VehicleChainResponse StructType
 * @subpackage Structs
 */
class AddEmployee2VehicleChainResponse extends AbstractStructBase
{
    /**
     * The AddEmployee2VehicleChainResult
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \StructType\TupleOfArrayOfguidArrayOfguid0dMmj3_Sh|null
     */
    protected ?\StructType\TupleOfArrayOfguidArrayOfguid0dMmj3_Sh $AddEmployee2VehicleChainResult = null;
    /**
     * Constructor method for AddEmployee2VehicleChainResponse
     * @uses AddEmployee2VehicleChainResponse::setAddEmployee2VehicleChainResult()
     * @param \StructType\TupleOfArrayOfguidArrayOfguid0dMmj3_Sh $addEmployee2VehicleChainResult
     */
    public function __construct(?\StructType\TupleOfArrayOfguidArrayOfguid0dMmj3_Sh $addEmployee2VehicleChainResult = null)
    {
        $this
            ->setAddEmployee2VehicleChainResult($addEmployee2VehicleChainResult);
    }
    /**
     * Get AddEmployee2VehicleChainResult value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \StructType\TupleOfArrayOfguidArrayOfguid0dMmj3_Sh|null
     */
    public function getAddEmployee2VehicleChainResult(): ?\StructType\TupleOfArrayOfguidArrayOfguid0dMmj3_Sh
    {
        return isset($this->AddEmployee2VehicleChainResult) ? $this->AddEmployee2VehicleChainResult : null;
    }
    /**
     * Set AddEmployee2VehicleChainResult value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \StructType\TupleOfArrayOfguidArrayOfguid0dMmj3_Sh $addEmployee2VehicleChainResult
     * @return \StructType\AddEmployee2VehicleChainResponse
     */
    public function setAddEmployee2VehicleChainResult(?\StructType\TupleOfArrayOfguidArrayOfguid0dMmj3_Sh $addEmployee2VehicleChainResult = null): self
    {
        if (is_null($addEmployee2VehicleChainResult) || (is_array($addEmployee2VehicleChainResult) && empty($addEmployee2VehicleChainResult))) {
            unset($this->AddEmployee2VehicleChainResult);
        } else {
            $this->AddEmployee2VehicleChainResult = $addEmployee2VehicleChainResult;
        }
        
        return $this;
    }
}
