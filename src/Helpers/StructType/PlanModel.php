<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for PlanModel StructType
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:PlanModel
 * @subpackage Structs
 */
class PlanModel extends AbstractStructBase
{
    /**
     * The DepartmentGuid
     * Meta information extracted from the WSDL
     * - base: xs:string
     * - minOccurs: 0
     * - nillable: true
     * - pattern: [\da-fA-F]{8}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{12}
     * - type: tns:guid
     * @var string|null
     */
    protected ?string $DepartmentGuid = null;
    /**
     * The DeviationValue
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var float|null
     */
    protected ?float $DeviationValue = null;
    /**
     * The PlanValue
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var float|null
     */
    protected ?float $PlanValue = null;
    /**
     * The VType
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var int|null
     */
    protected ?int $VType = null;
    /**
     * Constructor method for PlanModel
     * @uses PlanModel::setDepartmentGuid()
     * @uses PlanModel::setDeviationValue()
     * @uses PlanModel::setPlanValue()
     * @uses PlanModel::setVType()
     * @param string $departmentGuid
     * @param float $deviationValue
     * @param float $planValue
     * @param int $vType
     */
    public function __construct(?string $departmentGuid = null, ?float $deviationValue = null, ?float $planValue = null, ?int $vType = null)
    {
        $this
            ->setDepartmentGuid($departmentGuid)
            ->setDeviationValue($deviationValue)
            ->setPlanValue($planValue)
            ->setVType($vType);
    }
    /**
     * Get DepartmentGuid value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getDepartmentGuid(): ?string
    {
        return isset($this->DepartmentGuid) ? $this->DepartmentGuid : null;
    }
    /**
     * Set DepartmentGuid value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $departmentGuid
     * @return \StructType\PlanModel
     */
    public function setDepartmentGuid(?string $departmentGuid = null): self
    {
        // validation for constraint: string
        if (!is_null($departmentGuid) && !is_string($departmentGuid)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($departmentGuid, true), gettype($departmentGuid)), __LINE__);
        }
        // validation for constraint: pattern([\da-fA-F]{8}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{12})
        if (!is_null($departmentGuid) && !preg_match('/[\\da-fA-F]{8}-[\\da-fA-F]{4}-[\\da-fA-F]{4}-[\\da-fA-F]{4}-[\\da-fA-F]{12}/', $departmentGuid)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a literal that is among the set of character sequences denoted by the regular expression /[\\da-fA-F]{8}-[\\da-fA-F]{4}-[\\da-fA-F]{4}-[\\da-fA-F]{4}-[\\da-fA-F]{12}/', var_export($departmentGuid, true)), __LINE__);
        }
        if (is_null($departmentGuid) || (is_array($departmentGuid) && empty($departmentGuid))) {
            unset($this->DepartmentGuid);
        } else {
            $this->DepartmentGuid = $departmentGuid;
        }
        
        return $this;
    }
    /**
     * Get DeviationValue value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return float|null
     */
    public function getDeviationValue(): ?float
    {
        return isset($this->DeviationValue) ? $this->DeviationValue : null;
    }
    /**
     * Set DeviationValue value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param float $deviationValue
     * @return \StructType\PlanModel
     */
    public function setDeviationValue(?float $deviationValue = null): self
    {
        // validation for constraint: float
        if (!is_null($deviationValue) && !(is_float($deviationValue) || is_numeric($deviationValue))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($deviationValue, true), gettype($deviationValue)), __LINE__);
        }
        if (is_null($deviationValue) || (is_array($deviationValue) && empty($deviationValue))) {
            unset($this->DeviationValue);
        } else {
            $this->DeviationValue = $deviationValue;
        }
        
        return $this;
    }
    /**
     * Get PlanValue value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return float|null
     */
    public function getPlanValue(): ?float
    {
        return isset($this->PlanValue) ? $this->PlanValue : null;
    }
    /**
     * Set PlanValue value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param float $planValue
     * @return \StructType\PlanModel
     */
    public function setPlanValue(?float $planValue = null): self
    {
        // validation for constraint: float
        if (!is_null($planValue) && !(is_float($planValue) || is_numeric($planValue))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($planValue, true), gettype($planValue)), __LINE__);
        }
        if (is_null($planValue) || (is_array($planValue) && empty($planValue))) {
            unset($this->PlanValue);
        } else {
            $this->PlanValue = $planValue;
        }
        
        return $this;
    }
    /**
     * Get VType value
     * @return int|null
     */
    public function getVType(): ?int
    {
        return $this->VType;
    }
    /**
     * Set VType value
     * @param int $vType
     * @return \StructType\PlanModel
     */
    public function setVType(?int $vType = null): self
    {
        // validation for constraint: int
        if (!is_null($vType) && !(is_int($vType) || ctype_digit($vType))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($vType, true), gettype($vType)), __LINE__);
        }
        $this->VType = $vType;
        
        return $this;
    }
}
