<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for UpdateAcsKeyEndTime StructType
 * @subpackage Structs
 */
class UpdateAcsKeyEndTime extends AbstractStructBase
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
     * The data
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var int|null
     */
    protected ?int $data = null;
    /**
     * The indexNumber
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var int|null
     */
    protected ?int $indexNumber = null;
    /**
     * The endDate
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $endDate = null;
    /**
     * Constructor method for UpdateAcsKeyEndTime
     * @uses UpdateAcsKeyEndTime::setEmployeeId()
     * @uses UpdateAcsKeyEndTime::setData()
     * @uses UpdateAcsKeyEndTime::setIndexNumber()
     * @uses UpdateAcsKeyEndTime::setEndDate()
     * @param string $employeeId
     * @param int $data
     * @param int $indexNumber
     * @param string $endDate
     */
    public function __construct(?string $employeeId = null, ?int $data = null, ?int $indexNumber = null, ?string $endDate = null)
    {
        $this
            ->setEmployeeId($employeeId)
            ->setData($data)
            ->setIndexNumber($indexNumber)
            ->setEndDate($endDate);
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
     * @return \StructType\UpdateAcsKeyEndTime
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
     * Get data value
     * @return int|null
     */
    public function getData(): ?int
    {
        return $this->data;
    }
    /**
     * Set data value
     * @param int $data
     * @return \StructType\UpdateAcsKeyEndTime
     */
    public function setData(?int $data = null): self
    {
        // validation for constraint: int
        if (!is_null($data) && !(is_int($data) || ctype_digit($data))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($data, true), gettype($data)), __LINE__);
        }
        $this->data = $data;
        
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
     * @return \StructType\UpdateAcsKeyEndTime
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
     * Get endDate value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getEndDate(): ?string
    {
        return isset($this->endDate) ? $this->endDate : null;
    }
    /**
     * Set endDate value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $endDate
     * @return \StructType\UpdateAcsKeyEndTime
     */
    public function setEndDate(?string $endDate = null): self
    {
        // validation for constraint: string
        if (!is_null($endDate) && !is_string($endDate)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($endDate, true), gettype($endDate)), __LINE__);
        }
        if (is_null($endDate) || (is_array($endDate) && empty($endDate))) {
            unset($this->endDate);
        } else {
            $this->endDate = $endDate;
        }
        
        return $this;
    }
}
