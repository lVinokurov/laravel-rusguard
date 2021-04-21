<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for DataForPeriodModel StructType
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:DataForPeriodModel
 * @subpackage Structs
 */
class DataForPeriodModel extends AbstractStructBase
{
    /**
     * The ActualNumberEmployee
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var int|null
     */
    protected ?int $ActualNumberEmployee = null;
    /**
     * The ActualPercentValue
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var float|null
     */
    protected ?float $ActualPercentValue = null;
    /**
     * The DeparmentGuid
     * Meta information extracted from the WSDL
     * - base: xs:string
     * - minOccurs: 0
     * - nillable: true
     * - pattern: [\da-fA-F]{8}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{12}
     * - type: tns:guid
     * @var string|null
     */
    protected ?string $DeparmentGuid = null;
    /**
     * The EvaluationSystem
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var int|null
     */
    protected ?int $EvaluationSystem = null;
    /**
     * The MessageError
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $MessageError = null;
    /**
     * The NumberOfEmployees
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var int|null
     */
    protected ?int $NumberOfEmployees = null;
    /**
     * The PlanNumberEmployee
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var int|null
     */
    protected ?int $PlanNumberEmployee = null;
    /**
     * The PlanPercentValue
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var float|null
     */
    protected ?float $PlanPercentValue = null;
    /**
     * The VType
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $VType = null;
    /**
     * Constructor method for DataForPeriodModel
     * @uses DataForPeriodModel::setActualNumberEmployee()
     * @uses DataForPeriodModel::setActualPercentValue()
     * @uses DataForPeriodModel::setDeparmentGuid()
     * @uses DataForPeriodModel::setEvaluationSystem()
     * @uses DataForPeriodModel::setMessageError()
     * @uses DataForPeriodModel::setNumberOfEmployees()
     * @uses DataForPeriodModel::setPlanNumberEmployee()
     * @uses DataForPeriodModel::setPlanPercentValue()
     * @uses DataForPeriodModel::setVType()
     * @param int $actualNumberEmployee
     * @param float $actualPercentValue
     * @param string $deparmentGuid
     * @param int $evaluationSystem
     * @param string $messageError
     * @param int $numberOfEmployees
     * @param int $planNumberEmployee
     * @param float $planPercentValue
     * @param string $vType
     */
    public function __construct(?int $actualNumberEmployee = null, ?float $actualPercentValue = null, ?string $deparmentGuid = null, ?int $evaluationSystem = null, ?string $messageError = null, ?int $numberOfEmployees = null, ?int $planNumberEmployee = null, ?float $planPercentValue = null, ?string $vType = null)
    {
        $this
            ->setActualNumberEmployee($actualNumberEmployee)
            ->setActualPercentValue($actualPercentValue)
            ->setDeparmentGuid($deparmentGuid)
            ->setEvaluationSystem($evaluationSystem)
            ->setMessageError($messageError)
            ->setNumberOfEmployees($numberOfEmployees)
            ->setPlanNumberEmployee($planNumberEmployee)
            ->setPlanPercentValue($planPercentValue)
            ->setVType($vType);
    }
    /**
     * Get ActualNumberEmployee value
     * @return int|null
     */
    public function getActualNumberEmployee(): ?int
    {
        return $this->ActualNumberEmployee;
    }
    /**
     * Set ActualNumberEmployee value
     * @param int $actualNumberEmployee
     * @return \StructType\DataForPeriodModel
     */
    public function setActualNumberEmployee(?int $actualNumberEmployee = null): self
    {
        // validation for constraint: int
        if (!is_null($actualNumberEmployee) && !(is_int($actualNumberEmployee) || ctype_digit($actualNumberEmployee))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($actualNumberEmployee, true), gettype($actualNumberEmployee)), __LINE__);
        }
        $this->ActualNumberEmployee = $actualNumberEmployee;
        
        return $this;
    }
    /**
     * Get ActualPercentValue value
     * @return float|null
     */
    public function getActualPercentValue(): ?float
    {
        return $this->ActualPercentValue;
    }
    /**
     * Set ActualPercentValue value
     * @param float $actualPercentValue
     * @return \StructType\DataForPeriodModel
     */
    public function setActualPercentValue(?float $actualPercentValue = null): self
    {
        // validation for constraint: float
        if (!is_null($actualPercentValue) && !(is_float($actualPercentValue) || is_numeric($actualPercentValue))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($actualPercentValue, true), gettype($actualPercentValue)), __LINE__);
        }
        $this->ActualPercentValue = $actualPercentValue;
        
        return $this;
    }
    /**
     * Get DeparmentGuid value
     * @return string|null
     */
    public function getDeparmentGuid(): ?string
    {
        return $this->DeparmentGuid;
    }
    /**
     * Set DeparmentGuid value
     * @param string $deparmentGuid
     * @return \StructType\DataForPeriodModel
     */
    public function setDeparmentGuid(?string $deparmentGuid = null): self
    {
        // validation for constraint: string
        if (!is_null($deparmentGuid) && !is_string($deparmentGuid)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($deparmentGuid, true), gettype($deparmentGuid)), __LINE__);
        }
        // validation for constraint: pattern([\da-fA-F]{8}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{12})
        if (!is_null($deparmentGuid) && !preg_match('/[\\da-fA-F]{8}-[\\da-fA-F]{4}-[\\da-fA-F]{4}-[\\da-fA-F]{4}-[\\da-fA-F]{12}/', $deparmentGuid)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a literal that is among the set of character sequences denoted by the regular expression /[\\da-fA-F]{8}-[\\da-fA-F]{4}-[\\da-fA-F]{4}-[\\da-fA-F]{4}-[\\da-fA-F]{12}/', var_export($deparmentGuid, true)), __LINE__);
        }
        $this->DeparmentGuid = $deparmentGuid;
        
        return $this;
    }
    /**
     * Get EvaluationSystem value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return int|null
     */
    public function getEvaluationSystem(): ?int
    {
        return isset($this->EvaluationSystem) ? $this->EvaluationSystem : null;
    }
    /**
     * Set EvaluationSystem value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param int $evaluationSystem
     * @return \StructType\DataForPeriodModel
     */
    public function setEvaluationSystem(?int $evaluationSystem = null): self
    {
        // validation for constraint: int
        if (!is_null($evaluationSystem) && !(is_int($evaluationSystem) || ctype_digit($evaluationSystem))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($evaluationSystem, true), gettype($evaluationSystem)), __LINE__);
        }
        if (is_null($evaluationSystem) || (is_array($evaluationSystem) && empty($evaluationSystem))) {
            unset($this->EvaluationSystem);
        } else {
            $this->EvaluationSystem = $evaluationSystem;
        }
        
        return $this;
    }
    /**
     * Get MessageError value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getMessageError(): ?string
    {
        return isset($this->MessageError) ? $this->MessageError : null;
    }
    /**
     * Set MessageError value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $messageError
     * @return \StructType\DataForPeriodModel
     */
    public function setMessageError(?string $messageError = null): self
    {
        // validation for constraint: string
        if (!is_null($messageError) && !is_string($messageError)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($messageError, true), gettype($messageError)), __LINE__);
        }
        if (is_null($messageError) || (is_array($messageError) && empty($messageError))) {
            unset($this->MessageError);
        } else {
            $this->MessageError = $messageError;
        }
        
        return $this;
    }
    /**
     * Get NumberOfEmployees value
     * @return int|null
     */
    public function getNumberOfEmployees(): ?int
    {
        return $this->NumberOfEmployees;
    }
    /**
     * Set NumberOfEmployees value
     * @param int $numberOfEmployees
     * @return \StructType\DataForPeriodModel
     */
    public function setNumberOfEmployees(?int $numberOfEmployees = null): self
    {
        // validation for constraint: int
        if (!is_null($numberOfEmployees) && !(is_int($numberOfEmployees) || ctype_digit($numberOfEmployees))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($numberOfEmployees, true), gettype($numberOfEmployees)), __LINE__);
        }
        $this->NumberOfEmployees = $numberOfEmployees;
        
        return $this;
    }
    /**
     * Get PlanNumberEmployee value
     * @return int|null
     */
    public function getPlanNumberEmployee(): ?int
    {
        return $this->PlanNumberEmployee;
    }
    /**
     * Set PlanNumberEmployee value
     * @param int $planNumberEmployee
     * @return \StructType\DataForPeriodModel
     */
    public function setPlanNumberEmployee(?int $planNumberEmployee = null): self
    {
        // validation for constraint: int
        if (!is_null($planNumberEmployee) && !(is_int($planNumberEmployee) || ctype_digit($planNumberEmployee))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($planNumberEmployee, true), gettype($planNumberEmployee)), __LINE__);
        }
        $this->PlanNumberEmployee = $planNumberEmployee;
        
        return $this;
    }
    /**
     * Get PlanPercentValue value
     * @return float|null
     */
    public function getPlanPercentValue(): ?float
    {
        return $this->PlanPercentValue;
    }
    /**
     * Set PlanPercentValue value
     * @param float $planPercentValue
     * @return \StructType\DataForPeriodModel
     */
    public function setPlanPercentValue(?float $planPercentValue = null): self
    {
        // validation for constraint: float
        if (!is_null($planPercentValue) && !(is_float($planPercentValue) || is_numeric($planPercentValue))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($planPercentValue, true), gettype($planPercentValue)), __LINE__);
        }
        $this->PlanPercentValue = $planPercentValue;
        
        return $this;
    }
    /**
     * Get VType value
     * @return string|null
     */
    public function getVType(): ?string
    {
        return $this->VType;
    }
    /**
     * Set VType value
     * @uses \EnumType\ViolationType::valueIsValid()
     * @uses \EnumType\ViolationType::getValidValues()
     * @throws InvalidArgumentException
     * @param string $vType
     * @return \StructType\DataForPeriodModel
     */
    public function setVType(?string $vType = null): self
    {
        // validation for constraint: enumeration
        if (!\EnumType\ViolationType::valueIsValid($vType)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \EnumType\ViolationType', is_array($vType) ? implode(', ', $vType) : var_export($vType, true), implode(', ', \EnumType\ViolationType::getValidValues())), __LINE__);
        }
        $this->VType = $vType;
        
        return $this;
    }
}
