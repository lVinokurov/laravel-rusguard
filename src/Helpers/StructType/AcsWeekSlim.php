<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for AcsWeekSlim StructType
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:AcsWeekSlim
 * @subpackage Structs
 */
class AcsWeekSlim extends AbstractStructBase
{
    /**
     * The Friday
     * Meta information extracted from the WSDL
     * - base: xs:string
     * - minOccurs: 0
     * - nillable: true
     * - pattern: [\da-fA-F]{8}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{12}
     * - type: tns:guid
     * @var string|null
     */
    protected ?string $Friday = null;
    /**
     * The Monday
     * Meta information extracted from the WSDL
     * - base: xs:string
     * - minOccurs: 0
     * - nillable: true
     * - pattern: [\da-fA-F]{8}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{12}
     * - type: tns:guid
     * @var string|null
     */
    protected ?string $Monday = null;
    /**
     * The Saturday
     * Meta information extracted from the WSDL
     * - base: xs:string
     * - minOccurs: 0
     * - nillable: true
     * - pattern: [\da-fA-F]{8}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{12}
     * - type: tns:guid
     * @var string|null
     */
    protected ?string $Saturday = null;
    /**
     * The Sunday
     * Meta information extracted from the WSDL
     * - base: xs:string
     * - minOccurs: 0
     * - nillable: true
     * - pattern: [\da-fA-F]{8}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{12}
     * - type: tns:guid
     * @var string|null
     */
    protected ?string $Sunday = null;
    /**
     * The Thursday
     * Meta information extracted from the WSDL
     * - base: xs:string
     * - minOccurs: 0
     * - nillable: true
     * - pattern: [\da-fA-F]{8}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{12}
     * - type: tns:guid
     * @var string|null
     */
    protected ?string $Thursday = null;
    /**
     * The Tuesday
     * Meta information extracted from the WSDL
     * - base: xs:string
     * - minOccurs: 0
     * - nillable: true
     * - pattern: [\da-fA-F]{8}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{12}
     * - type: tns:guid
     * @var string|null
     */
    protected ?string $Tuesday = null;
    /**
     * The Wednesday
     * Meta information extracted from the WSDL
     * - base: xs:string
     * - minOccurs: 0
     * - nillable: true
     * - pattern: [\da-fA-F]{8}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{12}
     * - type: tns:guid
     * @var string|null
     */
    protected ?string $Wednesday = null;
    /**
     * Constructor method for AcsWeekSlim
     * @uses AcsWeekSlim::setFriday()
     * @uses AcsWeekSlim::setMonday()
     * @uses AcsWeekSlim::setSaturday()
     * @uses AcsWeekSlim::setSunday()
     * @uses AcsWeekSlim::setThursday()
     * @uses AcsWeekSlim::setTuesday()
     * @uses AcsWeekSlim::setWednesday()
     * @param string $friday
     * @param string $monday
     * @param string $saturday
     * @param string $sunday
     * @param string $thursday
     * @param string $tuesday
     * @param string $wednesday
     */
    public function __construct(?string $friday = null, ?string $monday = null, ?string $saturday = null, ?string $sunday = null, ?string $thursday = null, ?string $tuesday = null, ?string $wednesday = null)
    {
        $this
            ->setFriday($friday)
            ->setMonday($monday)
            ->setSaturday($saturday)
            ->setSunday($sunday)
            ->setThursday($thursday)
            ->setTuesday($tuesday)
            ->setWednesday($wednesday);
    }
    /**
     * Get Friday value
     * @return string|null
     */
    public function getFriday(): ?string
    {
        return $this->Friday;
    }
    /**
     * Set Friday value
     * @param string $friday
     * @return \StructType\AcsWeekSlim
     */
    public function setFriday(?string $friday = null): self
    {
        // validation for constraint: string
        if (!is_null($friday) && !is_string($friday)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($friday, true), gettype($friday)), __LINE__);
        }
        // validation for constraint: pattern([\da-fA-F]{8}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{12})
        if (!is_null($friday) && !preg_match('/[\\da-fA-F]{8}-[\\da-fA-F]{4}-[\\da-fA-F]{4}-[\\da-fA-F]{4}-[\\da-fA-F]{12}/', $friday)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a literal that is among the set of character sequences denoted by the regular expression /[\\da-fA-F]{8}-[\\da-fA-F]{4}-[\\da-fA-F]{4}-[\\da-fA-F]{4}-[\\da-fA-F]{12}/', var_export($friday, true)), __LINE__);
        }
        $this->Friday = $friday;
        
        return $this;
    }
    /**
     * Get Monday value
     * @return string|null
     */
    public function getMonday(): ?string
    {
        return $this->Monday;
    }
    /**
     * Set Monday value
     * @param string $monday
     * @return \StructType\AcsWeekSlim
     */
    public function setMonday(?string $monday = null): self
    {
        // validation for constraint: string
        if (!is_null($monday) && !is_string($monday)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($monday, true), gettype($monday)), __LINE__);
        }
        // validation for constraint: pattern([\da-fA-F]{8}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{12})
        if (!is_null($monday) && !preg_match('/[\\da-fA-F]{8}-[\\da-fA-F]{4}-[\\da-fA-F]{4}-[\\da-fA-F]{4}-[\\da-fA-F]{12}/', $monday)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a literal that is among the set of character sequences denoted by the regular expression /[\\da-fA-F]{8}-[\\da-fA-F]{4}-[\\da-fA-F]{4}-[\\da-fA-F]{4}-[\\da-fA-F]{12}/', var_export($monday, true)), __LINE__);
        }
        $this->Monday = $monday;
        
        return $this;
    }
    /**
     * Get Saturday value
     * @return string|null
     */
    public function getSaturday(): ?string
    {
        return $this->Saturday;
    }
    /**
     * Set Saturday value
     * @param string $saturday
     * @return \StructType\AcsWeekSlim
     */
    public function setSaturday(?string $saturday = null): self
    {
        // validation for constraint: string
        if (!is_null($saturday) && !is_string($saturday)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($saturday, true), gettype($saturday)), __LINE__);
        }
        // validation for constraint: pattern([\da-fA-F]{8}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{12})
        if (!is_null($saturday) && !preg_match('/[\\da-fA-F]{8}-[\\da-fA-F]{4}-[\\da-fA-F]{4}-[\\da-fA-F]{4}-[\\da-fA-F]{12}/', $saturday)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a literal that is among the set of character sequences denoted by the regular expression /[\\da-fA-F]{8}-[\\da-fA-F]{4}-[\\da-fA-F]{4}-[\\da-fA-F]{4}-[\\da-fA-F]{12}/', var_export($saturday, true)), __LINE__);
        }
        $this->Saturday = $saturday;
        
        return $this;
    }
    /**
     * Get Sunday value
     * @return string|null
     */
    public function getSunday(): ?string
    {
        return $this->Sunday;
    }
    /**
     * Set Sunday value
     * @param string $sunday
     * @return \StructType\AcsWeekSlim
     */
    public function setSunday(?string $sunday = null): self
    {
        // validation for constraint: string
        if (!is_null($sunday) && !is_string($sunday)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($sunday, true), gettype($sunday)), __LINE__);
        }
        // validation for constraint: pattern([\da-fA-F]{8}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{12})
        if (!is_null($sunday) && !preg_match('/[\\da-fA-F]{8}-[\\da-fA-F]{4}-[\\da-fA-F]{4}-[\\da-fA-F]{4}-[\\da-fA-F]{12}/', $sunday)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a literal that is among the set of character sequences denoted by the regular expression /[\\da-fA-F]{8}-[\\da-fA-F]{4}-[\\da-fA-F]{4}-[\\da-fA-F]{4}-[\\da-fA-F]{12}/', var_export($sunday, true)), __LINE__);
        }
        $this->Sunday = $sunday;
        
        return $this;
    }
    /**
     * Get Thursday value
     * @return string|null
     */
    public function getThursday(): ?string
    {
        return $this->Thursday;
    }
    /**
     * Set Thursday value
     * @param string $thursday
     * @return \StructType\AcsWeekSlim
     */
    public function setThursday(?string $thursday = null): self
    {
        // validation for constraint: string
        if (!is_null($thursday) && !is_string($thursday)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($thursday, true), gettype($thursday)), __LINE__);
        }
        // validation for constraint: pattern([\da-fA-F]{8}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{12})
        if (!is_null($thursday) && !preg_match('/[\\da-fA-F]{8}-[\\da-fA-F]{4}-[\\da-fA-F]{4}-[\\da-fA-F]{4}-[\\da-fA-F]{12}/', $thursday)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a literal that is among the set of character sequences denoted by the regular expression /[\\da-fA-F]{8}-[\\da-fA-F]{4}-[\\da-fA-F]{4}-[\\da-fA-F]{4}-[\\da-fA-F]{12}/', var_export($thursday, true)), __LINE__);
        }
        $this->Thursday = $thursday;
        
        return $this;
    }
    /**
     * Get Tuesday value
     * @return string|null
     */
    public function getTuesday(): ?string
    {
        return $this->Tuesday;
    }
    /**
     * Set Tuesday value
     * @param string $tuesday
     * @return \StructType\AcsWeekSlim
     */
    public function setTuesday(?string $tuesday = null): self
    {
        // validation for constraint: string
        if (!is_null($tuesday) && !is_string($tuesday)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($tuesday, true), gettype($tuesday)), __LINE__);
        }
        // validation for constraint: pattern([\da-fA-F]{8}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{12})
        if (!is_null($tuesday) && !preg_match('/[\\da-fA-F]{8}-[\\da-fA-F]{4}-[\\da-fA-F]{4}-[\\da-fA-F]{4}-[\\da-fA-F]{12}/', $tuesday)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a literal that is among the set of character sequences denoted by the regular expression /[\\da-fA-F]{8}-[\\da-fA-F]{4}-[\\da-fA-F]{4}-[\\da-fA-F]{4}-[\\da-fA-F]{12}/', var_export($tuesday, true)), __LINE__);
        }
        $this->Tuesday = $tuesday;
        
        return $this;
    }
    /**
     * Get Wednesday value
     * @return string|null
     */
    public function getWednesday(): ?string
    {
        return $this->Wednesday;
    }
    /**
     * Set Wednesday value
     * @param string $wednesday
     * @return \StructType\AcsWeekSlim
     */
    public function setWednesday(?string $wednesday = null): self
    {
        // validation for constraint: string
        if (!is_null($wednesday) && !is_string($wednesday)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($wednesday, true), gettype($wednesday)), __LINE__);
        }
        // validation for constraint: pattern([\da-fA-F]{8}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{12})
        if (!is_null($wednesday) && !preg_match('/[\\da-fA-F]{8}-[\\da-fA-F]{4}-[\\da-fA-F]{4}-[\\da-fA-F]{4}-[\\da-fA-F]{12}/', $wednesday)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a literal that is among the set of character sequences denoted by the regular expression /[\\da-fA-F]{8}-[\\da-fA-F]{4}-[\\da-fA-F]{4}-[\\da-fA-F]{4}-[\\da-fA-F]{12}/', var_export($wednesday, true)), __LINE__);
        }
        $this->Wednesday = $wednesday;
        
        return $this;
    }
}
