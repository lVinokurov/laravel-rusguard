<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SetStatusOfAcsKeyAsLost StructType
 * @subpackage Structs
 */
class SetStatusOfAcsKeyAsLost extends AbstractStructBase
{
    /**
     * The keyNumber
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var int|null
     */
    protected ?int $keyNumber = null;
    /**
     * The indexNumber
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var int|null
     */
    protected ?int $indexNumber = null;
    /**
     * The employeeID
     * Meta information extracted from the WSDL
     * - base: xs:string
     * - minOccurs: 0
     * - nillable: true
     * - pattern: [\da-fA-F]{8}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{12}
     * - type: tns:guid
     * @var string|null
     */
    protected ?string $employeeID = null;
    /**
     * The partOfCreateOperation
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var bool|null
     */
    protected ?bool $partOfCreateOperation = null;
    /**
     * Constructor method for SetStatusOfAcsKeyAsLost
     * @uses SetStatusOfAcsKeyAsLost::setKeyNumber()
     * @uses SetStatusOfAcsKeyAsLost::setIndexNumber()
     * @uses SetStatusOfAcsKeyAsLost::setEmployeeID()
     * @uses SetStatusOfAcsKeyAsLost::setPartOfCreateOperation()
     * @param int $keyNumber
     * @param int $indexNumber
     * @param string $employeeID
     * @param bool $partOfCreateOperation
     */
    public function __construct(?int $keyNumber = null, ?int $indexNumber = null, ?string $employeeID = null, ?bool $partOfCreateOperation = null)
    {
        $this
            ->setKeyNumber($keyNumber)
            ->setIndexNumber($indexNumber)
            ->setEmployeeID($employeeID)
            ->setPartOfCreateOperation($partOfCreateOperation);
    }
    /**
     * Get keyNumber value
     * @return int|null
     */
    public function getKeyNumber(): ?int
    {
        return $this->keyNumber;
    }
    /**
     * Set keyNumber value
     * @param int $keyNumber
     * @return \StructType\SetStatusOfAcsKeyAsLost
     */
    public function setKeyNumber(?int $keyNumber = null): self
    {
        // validation for constraint: int
        if (!is_null($keyNumber) && !(is_int($keyNumber) || ctype_digit($keyNumber))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($keyNumber, true), gettype($keyNumber)), __LINE__);
        }
        $this->keyNumber = $keyNumber;
        
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
     * @return \StructType\SetStatusOfAcsKeyAsLost
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
     * Get employeeID value
     * @return string|null
     */
    public function getEmployeeID(): ?string
    {
        return $this->employeeID;
    }
    /**
     * Set employeeID value
     * @param string $employeeID
     * @return \StructType\SetStatusOfAcsKeyAsLost
     */
    public function setEmployeeID(?string $employeeID = null): self
    {
        // validation for constraint: string
        if (!is_null($employeeID) && !is_string($employeeID)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($employeeID, true), gettype($employeeID)), __LINE__);
        }
        // validation for constraint: pattern([\da-fA-F]{8}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{12})
        if (!is_null($employeeID) && !preg_match('/[\\da-fA-F]{8}-[\\da-fA-F]{4}-[\\da-fA-F]{4}-[\\da-fA-F]{4}-[\\da-fA-F]{12}/', $employeeID)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a literal that is among the set of character sequences denoted by the regular expression /[\\da-fA-F]{8}-[\\da-fA-F]{4}-[\\da-fA-F]{4}-[\\da-fA-F]{4}-[\\da-fA-F]{12}/', var_export($employeeID, true)), __LINE__);
        }
        $this->employeeID = $employeeID;
        
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
     * @return \StructType\SetStatusOfAcsKeyAsLost
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
