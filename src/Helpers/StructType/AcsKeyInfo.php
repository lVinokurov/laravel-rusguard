<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for AcsKeyInfo StructType
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:AcsKeyInfo
 * @subpackage Structs
 */
class AcsKeyInfo extends AcsKeySaveData
{
    /**
     * The AcsEmployeeId
     * Meta information extracted from the WSDL
     * - base: xs:string
     * - minOccurs: 0
     * - nillable: true
     * - pattern: [\da-fA-F]{8}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{12}
     * - type: tns:guid
     * @var string|null
     */
    protected ?string $AcsEmployeeId = null;
    /**
     * The AssignmentModificationDateTime
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $AssignmentModificationDateTime = null;
    /**
     * The IndexNumber
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var int|null
     */
    protected ?int $IndexNumber = null;
    /**
     * The IsLost
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var bool|null
     */
    protected ?bool $IsLost = null;
    /**
     * Constructor method for AcsKeyInfo
     * @uses AcsKeyInfo::setAcsEmployeeId()
     * @uses AcsKeyInfo::setAssignmentModificationDateTime()
     * @uses AcsKeyInfo::setIndexNumber()
     * @uses AcsKeyInfo::setIsLost()
     * @param string $acsEmployeeId
     * @param string $assignmentModificationDateTime
     * @param int $indexNumber
     * @param bool $isLost
     */
    public function __construct(?string $acsEmployeeId = null, ?string $assignmentModificationDateTime = null, ?int $indexNumber = null, ?bool $isLost = null)
    {
        $this
            ->setAcsEmployeeId($acsEmployeeId)
            ->setAssignmentModificationDateTime($assignmentModificationDateTime)
            ->setIndexNumber($indexNumber)
            ->setIsLost($isLost);
    }
    /**
     * Get AcsEmployeeId value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getAcsEmployeeId(): ?string
    {
        return isset($this->AcsEmployeeId) ? $this->AcsEmployeeId : null;
    }
    /**
     * Set AcsEmployeeId value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $acsEmployeeId
     * @return \StructType\AcsKeyInfo
     */
    public function setAcsEmployeeId(?string $acsEmployeeId = null): self
    {
        // validation for constraint: string
        if (!is_null($acsEmployeeId) && !is_string($acsEmployeeId)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($acsEmployeeId, true), gettype($acsEmployeeId)), __LINE__);
        }
        // validation for constraint: pattern([\da-fA-F]{8}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{12})
        if (!is_null($acsEmployeeId) && !preg_match('/[\\da-fA-F]{8}-[\\da-fA-F]{4}-[\\da-fA-F]{4}-[\\da-fA-F]{4}-[\\da-fA-F]{12}/', $acsEmployeeId)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a literal that is among the set of character sequences denoted by the regular expression /[\\da-fA-F]{8}-[\\da-fA-F]{4}-[\\da-fA-F]{4}-[\\da-fA-F]{4}-[\\da-fA-F]{12}/', var_export($acsEmployeeId, true)), __LINE__);
        }
        if (is_null($acsEmployeeId) || (is_array($acsEmployeeId) && empty($acsEmployeeId))) {
            unset($this->AcsEmployeeId);
        } else {
            $this->AcsEmployeeId = $acsEmployeeId;
        }
        
        return $this;
    }
    /**
     * Get AssignmentModificationDateTime value
     * @return string|null
     */
    public function getAssignmentModificationDateTime(): ?string
    {
        return $this->AssignmentModificationDateTime;
    }
    /**
     * Set AssignmentModificationDateTime value
     * @param string $assignmentModificationDateTime
     * @return \StructType\AcsKeyInfo
     */
    public function setAssignmentModificationDateTime(?string $assignmentModificationDateTime = null): self
    {
        // validation for constraint: string
        if (!is_null($assignmentModificationDateTime) && !is_string($assignmentModificationDateTime)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($assignmentModificationDateTime, true), gettype($assignmentModificationDateTime)), __LINE__);
        }
        $this->AssignmentModificationDateTime = $assignmentModificationDateTime;
        
        return $this;
    }
    /**
     * Get IndexNumber value
     * @return int|null
     */
    public function getIndexNumber(): ?int
    {
        return $this->IndexNumber;
    }
    /**
     * Set IndexNumber value
     * @param int $indexNumber
     * @return \StructType\AcsKeyInfo
     */
    public function setIndexNumber(?int $indexNumber = null): self
    {
        // validation for constraint: int
        if (!is_null($indexNumber) && !(is_int($indexNumber) || ctype_digit($indexNumber))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($indexNumber, true), gettype($indexNumber)), __LINE__);
        }
        $this->IndexNumber = $indexNumber;
        
        return $this;
    }
    /**
     * Get IsLost value
     * @return bool|null
     */
    public function getIsLost(): ?bool
    {
        return $this->IsLost;
    }
    /**
     * Set IsLost value
     * @param bool $isLost
     * @return \StructType\AcsKeyInfo
     */
    public function setIsLost(?bool $isLost = null): self
    {
        // validation for constraint: boolean
        if (!is_null($isLost) && !is_bool($isLost)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($isLost, true), gettype($isLost)), __LINE__);
        }
        $this->IsLost = $isLost;
        
        return $this;
    }
}
