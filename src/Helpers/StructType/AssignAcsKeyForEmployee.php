<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for AssignAcsKeyForEmployee StructType
 * @subpackage Structs
 */
class AssignAcsKeyForEmployee extends AbstractStructBase
{
    /**
     * The employeeId
     * Meta information extracted from the WSDL
     * - base: xs:string
     * - minOccurs: 0
     * - nillable: true
     * - pattern: [\da-fA-F]{8}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{12}
     * - type: tns:guid
     * @var string|null
     */
    protected ?string $employeeId = null;
    /**
     * The indexNumber
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var int|null
     */
    protected ?int $indexNumber = null;
    /**
     * The keyData
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \StructType\AcsKeySaveData|null
     */
    protected ?\StructType\AcsKeySaveData $keyData = null;
    /**
     * The partOfCreateOperation
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var bool|null
     */
    protected ?bool $partOfCreateOperation = null;
    /**
     * Constructor method for AssignAcsKeyForEmployee
     * @uses AssignAcsKeyForEmployee::setEmployeeId()
     * @uses AssignAcsKeyForEmployee::setIndexNumber()
     * @uses AssignAcsKeyForEmployee::setKeyData()
     * @uses AssignAcsKeyForEmployee::setPartOfCreateOperation()
     * @param string $employeeId
     * @param int $indexNumber
     * @param \StructType\AcsKeySaveData $keyData
     * @param bool $partOfCreateOperation
     */
    public function __construct(?string $employeeId = null, ?int $indexNumber = null, ?\StructType\AcsKeySaveData $keyData = null, ?bool $partOfCreateOperation = null)
    {
        $this
            ->setEmployeeId($employeeId)
            ->setIndexNumber($indexNumber)
            ->setKeyData($keyData)
            ->setPartOfCreateOperation($partOfCreateOperation);
    }
    /**
     * Get employeeId value
     * @return string|null
     */
    public function getEmployeeId(): ?string
    {
        return $this->employeeId;
    }
    /**
     * Set employeeId value
     * @param string $employeeId
     * @return \StructType\AssignAcsKeyForEmployee
     */
    public function setEmployeeId(?string $employeeId = null): self
    {
        // validation for constraint: string
        if (!is_null($employeeId) && !is_string($employeeId)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($employeeId, true), gettype($employeeId)), __LINE__);
        }
        // validation for constraint: pattern([\da-fA-F]{8}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{12})
        if (!is_null($employeeId) && !preg_match('/[\\da-fA-F]{8}-[\\da-fA-F]{4}-[\\da-fA-F]{4}-[\\da-fA-F]{4}-[\\da-fA-F]{12}/', $employeeId)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a literal that is among the set of character sequences denoted by the regular expression /[\\da-fA-F]{8}-[\\da-fA-F]{4}-[\\da-fA-F]{4}-[\\da-fA-F]{4}-[\\da-fA-F]{12}/', var_export($employeeId, true)), __LINE__);
        }
        $this->employeeId = $employeeId;
        
        return $this;
    }
    /**
     * Get indexNumber value
     * @return int|null
     */
    public function getIndexNumber(): ?int
    {
        return $this->indexNumber;
    }
    /**
     * Set indexNumber value
     * @param int $indexNumber
     * @return \StructType\AssignAcsKeyForEmployee
     */
    public function setIndexNumber(?int $indexNumber = null): self
    {
        // validation for constraint: int
        if (!is_null($indexNumber) && !(is_int($indexNumber) || ctype_digit($indexNumber))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($indexNumber, true), gettype($indexNumber)), __LINE__);
        }
        $this->indexNumber = $indexNumber;
        
        return $this;
    }
    /**
     * Get keyData value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \StructType\AcsKeySaveData|null
     */
    public function getKeyData(): ?\StructType\AcsKeySaveData
    {
        return isset($this->keyData) ? $this->keyData : null;
    }
    /**
     * Set keyData value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \StructType\AcsKeySaveData $keyData
     * @return \StructType\AssignAcsKeyForEmployee
     */
    public function setKeyData(?\StructType\AcsKeySaveData $keyData = null): self
    {
        if (is_null($keyData) || (is_array($keyData) && empty($keyData))) {
            unset($this->keyData);
        } else {
            $this->keyData = $keyData;
        }
        
        return $this;
    }
    /**
     * Get partOfCreateOperation value
     * @return bool|null
     */
    public function getPartOfCreateOperation(): ?bool
    {
        return $this->partOfCreateOperation;
    }
    /**
     * Set partOfCreateOperation value
     * @param bool $partOfCreateOperation
     * @return \StructType\AssignAcsKeyForEmployee
     */
    public function setPartOfCreateOperation(?bool $partOfCreateOperation = null): self
    {
        // validation for constraint: boolean
        if (!is_null($partOfCreateOperation) && !is_bool($partOfCreateOperation)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($partOfCreateOperation, true), gettype($partOfCreateOperation)), __LINE__);
        }
        $this->partOfCreateOperation = $partOfCreateOperation;
        
        return $this;
    }
}
