<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for AcsAccessLevelSlimInfo StructType
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:AcsAccessLevelSlimInfo
 * @subpackage Structs
 */
class AcsAccessLevelSlimInfo extends AcsAccessLevelSaveData
{
    /**
     * The EndDate
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $EndDate = null;
    /**
     * The Id
     * Meta information extracted from the WSDL
     * - base: xs:string
     * - minOccurs: 0
     * - nillable: true
     * - pattern: [\da-fA-F]{8}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{12}
     * - type: tns:guid
     * @var string|null
     */
    protected ?string $Id = null;
    /**
     * The IsRemoved
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var bool|null
     */
    protected ?bool $IsRemoved = null;
    /**
     * The NumberOfAccessPoints
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var int|null
     */
    protected ?int $NumberOfAccessPoints = null;
    /**
     * The ReadRightDisabled
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var bool|null
     */
    protected ?bool $ReadRightDisabled = null;
    /**
     * Constructor method for AcsAccessLevelSlimInfo
     * @uses AcsAccessLevelSlimInfo::setEndDate()
     * @uses AcsAccessLevelSlimInfo::setId()
     * @uses AcsAccessLevelSlimInfo::setIsRemoved()
     * @uses AcsAccessLevelSlimInfo::setNumberOfAccessPoints()
     * @uses AcsAccessLevelSlimInfo::setReadRightDisabled()
     * @param string $endDate
     * @param string $id
     * @param bool $isRemoved
     * @param int $numberOfAccessPoints
     * @param bool $readRightDisabled
     */
    public function __construct(?string $endDate = null, ?string $id = null, ?bool $isRemoved = null, ?int $numberOfAccessPoints = null, ?bool $readRightDisabled = null)
    {
        $this
            ->setEndDate($endDate)
            ->setId($id)
            ->setIsRemoved($isRemoved)
            ->setNumberOfAccessPoints($numberOfAccessPoints)
            ->setReadRightDisabled($readRightDisabled);
    }
    /**
     * Get EndDate value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getEndDate(): ?string
    {
        return isset($this->EndDate) ? $this->EndDate : null;
    }
    /**
     * Set EndDate value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $endDate
     * @return \StructType\AcsAccessLevelSlimInfo
     */
    public function setEndDate(?string $endDate = null): self
    {
        // validation for constraint: string
        if (!is_null($endDate) && !is_string($endDate)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($endDate, true), gettype($endDate)), __LINE__);
        }
        if (is_null($endDate) || (is_array($endDate) && empty($endDate))) {
            unset($this->EndDate);
        } else {
            $this->EndDate = $endDate;
        }
        
        return $this;
    }
    /**
     * Get Id value
     * @return string|null
     */
    public function getId(): ?string
    {
        return $this->Id;
    }
    /**
     * Set Id value
     * @param string $id
     * @return \StructType\AcsAccessLevelSlimInfo
     */
    public function setId(?string $id = null): self
    {
        // validation for constraint: string
        if (!is_null($id) && !is_string($id)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($id, true), gettype($id)), __LINE__);
        }
        // validation for constraint: pattern([\da-fA-F]{8}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{12})
        if (!is_null($id) && !preg_match('/[\\da-fA-F]{8}-[\\da-fA-F]{4}-[\\da-fA-F]{4}-[\\da-fA-F]{4}-[\\da-fA-F]{12}/', $id)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a literal that is among the set of character sequences denoted by the regular expression /[\\da-fA-F]{8}-[\\da-fA-F]{4}-[\\da-fA-F]{4}-[\\da-fA-F]{4}-[\\da-fA-F]{12}/', var_export($id, true)), __LINE__);
        }
        $this->Id = $id;
        
        return $this;
    }
    /**
     * Get IsRemoved value
     * @return bool|null
     */
    public function getIsRemoved(): ?bool
    {
        return $this->IsRemoved;
    }
    /**
     * Set IsRemoved value
     * @param bool $isRemoved
     * @return \StructType\AcsAccessLevelSlimInfo
     */
    public function setIsRemoved(?bool $isRemoved = null): self
    {
        // validation for constraint: boolean
        if (!is_null($isRemoved) && !is_bool($isRemoved)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($isRemoved, true), gettype($isRemoved)), __LINE__);
        }
        $this->IsRemoved = $isRemoved;
        
        return $this;
    }
    /**
     * Get NumberOfAccessPoints value
     * @return int|null
     */
    public function getNumberOfAccessPoints(): ?int
    {
        return $this->NumberOfAccessPoints;
    }
    /**
     * Set NumberOfAccessPoints value
     * @param int $numberOfAccessPoints
     * @return \StructType\AcsAccessLevelSlimInfo
     */
    public function setNumberOfAccessPoints(?int $numberOfAccessPoints = null): self
    {
        // validation for constraint: int
        if (!is_null($numberOfAccessPoints) && !(is_int($numberOfAccessPoints) || ctype_digit($numberOfAccessPoints))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($numberOfAccessPoints, true), gettype($numberOfAccessPoints)), __LINE__);
        }
        $this->NumberOfAccessPoints = $numberOfAccessPoints;
        
        return $this;
    }
    /**
     * Get ReadRightDisabled value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return bool|null
     */
    public function getReadRightDisabled(): ?bool
    {
        return isset($this->ReadRightDisabled) ? $this->ReadRightDisabled : null;
    }
    /**
     * Set ReadRightDisabled value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param bool $readRightDisabled
     * @return \StructType\AcsAccessLevelSlimInfo
     */
    public function setReadRightDisabled(?bool $readRightDisabled = null): self
    {
        // validation for constraint: boolean
        if (!is_null($readRightDisabled) && !is_bool($readRightDisabled)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($readRightDisabled, true), gettype($readRightDisabled)), __LINE__);
        }
        if (is_null($readRightDisabled) || (is_array($readRightDisabled) && empty($readRightDisabled))) {
            unset($this->ReadRightDisabled);
        } else {
            $this->ReadRightDisabled = $readRightDisabled;
        }
        
        return $this;
    }
}
