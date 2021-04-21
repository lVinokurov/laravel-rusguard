<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for LCustomizableDayInfo StructType
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:LCustomizableDayInfo
 * @subpackage Structs
 */
class LCustomizableDayInfo extends AbstractStructBase
{
    /**
     * The Date
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $Date = null;
    /**
     * The DayType
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $DayType = null;
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
     * The Name
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $Name = null;
    /**
     * The TransferedDate
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $TransferedDate = null;
    /**
     * Constructor method for LCustomizableDayInfo
     * @uses LCustomizableDayInfo::setDate()
     * @uses LCustomizableDayInfo::setDayType()
     * @uses LCustomizableDayInfo::setId()
     * @uses LCustomizableDayInfo::setName()
     * @uses LCustomizableDayInfo::setTransferedDate()
     * @param string $date
     * @param string $dayType
     * @param string $id
     * @param string $name
     * @param string $transferedDate
     */
    public function __construct(?string $date = null, ?string $dayType = null, ?string $id = null, ?string $name = null, ?string $transferedDate = null)
    {
        $this
            ->setDate($date)
            ->setDayType($dayType)
            ->setId($id)
            ->setName($name)
            ->setTransferedDate($transferedDate);
    }
    /**
     * Get Date value
     * @return string|null
     */
    public function getDate(): ?string
    {
        return $this->Date;
    }
    /**
     * Set Date value
     * @param string $date
     * @return \StructType\LCustomizableDayInfo
     */
    public function setDate(?string $date = null): self
    {
        // validation for constraint: string
        if (!is_null($date) && !is_string($date)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($date, true), gettype($date)), __LINE__);
        }
        $this->Date = $date;
        
        return $this;
    }
    /**
     * Get DayType value
     * @return string|null
     */
    public function getDayType(): ?string
    {
        return $this->DayType;
    }
    /**
     * Set DayType value
     * @uses \EnumType\CustomizableDayType::valueIsValid()
     * @uses \EnumType\CustomizableDayType::getValidValues()
     * @throws InvalidArgumentException
     * @param string $dayType
     * @return \StructType\LCustomizableDayInfo
     */
    public function setDayType(?string $dayType = null): self
    {
        // validation for constraint: enumeration
        if (!\EnumType\CustomizableDayType::valueIsValid($dayType)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \EnumType\CustomizableDayType', is_array($dayType) ? implode(', ', $dayType) : var_export($dayType, true), implode(', ', \EnumType\CustomizableDayType::getValidValues())), __LINE__);
        }
        $this->DayType = $dayType;
        
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
     * @return \StructType\LCustomizableDayInfo
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
     * Get Name value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getName(): ?string
    {
        return isset($this->Name) ? $this->Name : null;
    }
    /**
     * Set Name value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $name
     * @return \StructType\LCustomizableDayInfo
     */
    public function setName(?string $name = null): self
    {
        // validation for constraint: string
        if (!is_null($name) && !is_string($name)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($name, true), gettype($name)), __LINE__);
        }
        if (is_null($name) || (is_array($name) && empty($name))) {
            unset($this->Name);
        } else {
            $this->Name = $name;
        }
        
        return $this;
    }
    /**
     * Get TransferedDate value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getTransferedDate(): ?string
    {
        return isset($this->TransferedDate) ? $this->TransferedDate : null;
    }
    /**
     * Set TransferedDate value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $transferedDate
     * @return \StructType\LCustomizableDayInfo
     */
    public function setTransferedDate(?string $transferedDate = null): self
    {
        // validation for constraint: string
        if (!is_null($transferedDate) && !is_string($transferedDate)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($transferedDate, true), gettype($transferedDate)), __LINE__);
        }
        if (is_null($transferedDate) || (is_array($transferedDate) && empty($transferedDate))) {
            unset($this->TransferedDate);
        } else {
            $this->TransferedDate = $transferedDate;
        }
        
        return $this;
    }
}
