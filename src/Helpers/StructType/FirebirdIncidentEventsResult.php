<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for FirebirdIncidentEventsResult StructType
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:FirebirdIncidentEventsResult
 * @subpackage Structs
 */
class FirebirdIncidentEventsResult extends AbstractStructBase
{
    /**
     * The Apartm
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $Apartm = null;
    /**
     * The Area
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $Area = null;
    /**
     * The BirthDay
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $BirthDay = null;
    /**
     * The Cases
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $Cases = null;
    /**
     * The City
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $City = null;
    /**
     * The Country
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $Country = null;
    /**
     * The DateEvent
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $DateEvent = null;
    /**
     * The Firm
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $Firm = null;
    /**
     * The House
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $House = null;
    /**
     * The Name
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $Name = null;
    /**
     * The NameDoc
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $NameDoc = null;
    /**
     * The NumDoc
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $NumDoc = null;
    /**
     * The Patronomic
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $Patronomic = null;
    /**
     * The Significance
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $Significance = null;
    /**
     * The Street
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $Street = null;
    /**
     * The Surname
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $Surname = null;
    /**
     * The Violation
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $Violation = null;
    /**
     * The WayOfPlunder
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $WayOfPlunder = null;
    /**
     * The WayOfPlunderInfo
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $WayOfPlunderInfo = null;
    /**
     * Constructor method for FirebirdIncidentEventsResult
     * @uses FirebirdIncidentEventsResult::setApartm()
     * @uses FirebirdIncidentEventsResult::setArea()
     * @uses FirebirdIncidentEventsResult::setBirthDay()
     * @uses FirebirdIncidentEventsResult::setCases()
     * @uses FirebirdIncidentEventsResult::setCity()
     * @uses FirebirdIncidentEventsResult::setCountry()
     * @uses FirebirdIncidentEventsResult::setDateEvent()
     * @uses FirebirdIncidentEventsResult::setFirm()
     * @uses FirebirdIncidentEventsResult::setHouse()
     * @uses FirebirdIncidentEventsResult::setName()
     * @uses FirebirdIncidentEventsResult::setNameDoc()
     * @uses FirebirdIncidentEventsResult::setNumDoc()
     * @uses FirebirdIncidentEventsResult::setPatronomic()
     * @uses FirebirdIncidentEventsResult::setSignificance()
     * @uses FirebirdIncidentEventsResult::setStreet()
     * @uses FirebirdIncidentEventsResult::setSurname()
     * @uses FirebirdIncidentEventsResult::setViolation()
     * @uses FirebirdIncidentEventsResult::setWayOfPlunder()
     * @uses FirebirdIncidentEventsResult::setWayOfPlunderInfo()
     * @param string $apartm
     * @param string $area
     * @param string $birthDay
     * @param string $cases
     * @param string $city
     * @param string $country
     * @param string $dateEvent
     * @param string $firm
     * @param string $house
     * @param string $name
     * @param string $nameDoc
     * @param string $numDoc
     * @param string $patronomic
     * @param string $significance
     * @param string $street
     * @param string $surname
     * @param string $violation
     * @param string $wayOfPlunder
     * @param string $wayOfPlunderInfo
     */
    public function __construct(?string $apartm = null, ?string $area = null, ?string $birthDay = null, ?string $cases = null, ?string $city = null, ?string $country = null, ?string $dateEvent = null, ?string $firm = null, ?string $house = null, ?string $name = null, ?string $nameDoc = null, ?string $numDoc = null, ?string $patronomic = null, ?string $significance = null, ?string $street = null, ?string $surname = null, ?string $violation = null, ?string $wayOfPlunder = null, ?string $wayOfPlunderInfo = null)
    {
        $this
            ->setApartm($apartm)
            ->setArea($area)
            ->setBirthDay($birthDay)
            ->setCases($cases)
            ->setCity($city)
            ->setCountry($country)
            ->setDateEvent($dateEvent)
            ->setFirm($firm)
            ->setHouse($house)
            ->setName($name)
            ->setNameDoc($nameDoc)
            ->setNumDoc($numDoc)
            ->setPatronomic($patronomic)
            ->setSignificance($significance)
            ->setStreet($street)
            ->setSurname($surname)
            ->setViolation($violation)
            ->setWayOfPlunder($wayOfPlunder)
            ->setWayOfPlunderInfo($wayOfPlunderInfo);
    }
    /**
     * Get Apartm value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getApartm(): ?string
    {
        return isset($this->Apartm) ? $this->Apartm : null;
    }
    /**
     * Set Apartm value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $apartm
     * @return \StructType\FirebirdIncidentEventsResult
     */
    public function setApartm(?string $apartm = null): self
    {
        // validation for constraint: string
        if (!is_null($apartm) && !is_string($apartm)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($apartm, true), gettype($apartm)), __LINE__);
        }
        if (is_null($apartm) || (is_array($apartm) && empty($apartm))) {
            unset($this->Apartm);
        } else {
            $this->Apartm = $apartm;
        }
        
        return $this;
    }
    /**
     * Get Area value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getArea(): ?string
    {
        return isset($this->Area) ? $this->Area : null;
    }
    /**
     * Set Area value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $area
     * @return \StructType\FirebirdIncidentEventsResult
     */
    public function setArea(?string $area = null): self
    {
        // validation for constraint: string
        if (!is_null($area) && !is_string($area)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($area, true), gettype($area)), __LINE__);
        }
        if (is_null($area) || (is_array($area) && empty($area))) {
            unset($this->Area);
        } else {
            $this->Area = $area;
        }
        
        return $this;
    }
    /**
     * Get BirthDay value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getBirthDay(): ?string
    {
        return isset($this->BirthDay) ? $this->BirthDay : null;
    }
    /**
     * Set BirthDay value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $birthDay
     * @return \StructType\FirebirdIncidentEventsResult
     */
    public function setBirthDay(?string $birthDay = null): self
    {
        // validation for constraint: string
        if (!is_null($birthDay) && !is_string($birthDay)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($birthDay, true), gettype($birthDay)), __LINE__);
        }
        if (is_null($birthDay) || (is_array($birthDay) && empty($birthDay))) {
            unset($this->BirthDay);
        } else {
            $this->BirthDay = $birthDay;
        }
        
        return $this;
    }
    /**
     * Get Cases value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getCases(): ?string
    {
        return isset($this->Cases) ? $this->Cases : null;
    }
    /**
     * Set Cases value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $cases
     * @return \StructType\FirebirdIncidentEventsResult
     */
    public function setCases(?string $cases = null): self
    {
        // validation for constraint: string
        if (!is_null($cases) && !is_string($cases)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($cases, true), gettype($cases)), __LINE__);
        }
        if (is_null($cases) || (is_array($cases) && empty($cases))) {
            unset($this->Cases);
        } else {
            $this->Cases = $cases;
        }
        
        return $this;
    }
    /**
     * Get City value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getCity(): ?string
    {
        return isset($this->City) ? $this->City : null;
    }
    /**
     * Set City value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $city
     * @return \StructType\FirebirdIncidentEventsResult
     */
    public function setCity(?string $city = null): self
    {
        // validation for constraint: string
        if (!is_null($city) && !is_string($city)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($city, true), gettype($city)), __LINE__);
        }
        if (is_null($city) || (is_array($city) && empty($city))) {
            unset($this->City);
        } else {
            $this->City = $city;
        }
        
        return $this;
    }
    /**
     * Get Country value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getCountry(): ?string
    {
        return isset($this->Country) ? $this->Country : null;
    }
    /**
     * Set Country value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $country
     * @return \StructType\FirebirdIncidentEventsResult
     */
    public function setCountry(?string $country = null): self
    {
        // validation for constraint: string
        if (!is_null($country) && !is_string($country)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($country, true), gettype($country)), __LINE__);
        }
        if (is_null($country) || (is_array($country) && empty($country))) {
            unset($this->Country);
        } else {
            $this->Country = $country;
        }
        
        return $this;
    }
    /**
     * Get DateEvent value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getDateEvent(): ?string
    {
        return isset($this->DateEvent) ? $this->DateEvent : null;
    }
    /**
     * Set DateEvent value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $dateEvent
     * @return \StructType\FirebirdIncidentEventsResult
     */
    public function setDateEvent(?string $dateEvent = null): self
    {
        // validation for constraint: string
        if (!is_null($dateEvent) && !is_string($dateEvent)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($dateEvent, true), gettype($dateEvent)), __LINE__);
        }
        if (is_null($dateEvent) || (is_array($dateEvent) && empty($dateEvent))) {
            unset($this->DateEvent);
        } else {
            $this->DateEvent = $dateEvent;
        }
        
        return $this;
    }
    /**
     * Get Firm value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getFirm(): ?string
    {
        return isset($this->Firm) ? $this->Firm : null;
    }
    /**
     * Set Firm value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $firm
     * @return \StructType\FirebirdIncidentEventsResult
     */
    public function setFirm(?string $firm = null): self
    {
        // validation for constraint: string
        if (!is_null($firm) && !is_string($firm)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($firm, true), gettype($firm)), __LINE__);
        }
        if (is_null($firm) || (is_array($firm) && empty($firm))) {
            unset($this->Firm);
        } else {
            $this->Firm = $firm;
        }
        
        return $this;
    }
    /**
     * Get House value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getHouse(): ?string
    {
        return isset($this->House) ? $this->House : null;
    }
    /**
     * Set House value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $house
     * @return \StructType\FirebirdIncidentEventsResult
     */
    public function setHouse(?string $house = null): self
    {
        // validation for constraint: string
        if (!is_null($house) && !is_string($house)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($house, true), gettype($house)), __LINE__);
        }
        if (is_null($house) || (is_array($house) && empty($house))) {
            unset($this->House);
        } else {
            $this->House = $house;
        }
        
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
     * @return \StructType\FirebirdIncidentEventsResult
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
     * Get NameDoc value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getNameDoc(): ?string
    {
        return isset($this->NameDoc) ? $this->NameDoc : null;
    }
    /**
     * Set NameDoc value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $nameDoc
     * @return \StructType\FirebirdIncidentEventsResult
     */
    public function setNameDoc(?string $nameDoc = null): self
    {
        // validation for constraint: string
        if (!is_null($nameDoc) && !is_string($nameDoc)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($nameDoc, true), gettype($nameDoc)), __LINE__);
        }
        if (is_null($nameDoc) || (is_array($nameDoc) && empty($nameDoc))) {
            unset($this->NameDoc);
        } else {
            $this->NameDoc = $nameDoc;
        }
        
        return $this;
    }
    /**
     * Get NumDoc value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getNumDoc(): ?string
    {
        return isset($this->NumDoc) ? $this->NumDoc : null;
    }
    /**
     * Set NumDoc value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $numDoc
     * @return \StructType\FirebirdIncidentEventsResult
     */
    public function setNumDoc(?string $numDoc = null): self
    {
        // validation for constraint: string
        if (!is_null($numDoc) && !is_string($numDoc)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($numDoc, true), gettype($numDoc)), __LINE__);
        }
        if (is_null($numDoc) || (is_array($numDoc) && empty($numDoc))) {
            unset($this->NumDoc);
        } else {
            $this->NumDoc = $numDoc;
        }
        
        return $this;
    }
    /**
     * Get Patronomic value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getPatronomic(): ?string
    {
        return isset($this->Patronomic) ? $this->Patronomic : null;
    }
    /**
     * Set Patronomic value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $patronomic
     * @return \StructType\FirebirdIncidentEventsResult
     */
    public function setPatronomic(?string $patronomic = null): self
    {
        // validation for constraint: string
        if (!is_null($patronomic) && !is_string($patronomic)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($patronomic, true), gettype($patronomic)), __LINE__);
        }
        if (is_null($patronomic) || (is_array($patronomic) && empty($patronomic))) {
            unset($this->Patronomic);
        } else {
            $this->Patronomic = $patronomic;
        }
        
        return $this;
    }
    /**
     * Get Significance value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getSignificance(): ?string
    {
        return isset($this->Significance) ? $this->Significance : null;
    }
    /**
     * Set Significance value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $significance
     * @return \StructType\FirebirdIncidentEventsResult
     */
    public function setSignificance(?string $significance = null): self
    {
        // validation for constraint: string
        if (!is_null($significance) && !is_string($significance)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($significance, true), gettype($significance)), __LINE__);
        }
        if (is_null($significance) || (is_array($significance) && empty($significance))) {
            unset($this->Significance);
        } else {
            $this->Significance = $significance;
        }
        
        return $this;
    }
    /**
     * Get Street value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getStreet(): ?string
    {
        return isset($this->Street) ? $this->Street : null;
    }
    /**
     * Set Street value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $street
     * @return \StructType\FirebirdIncidentEventsResult
     */
    public function setStreet(?string $street = null): self
    {
        // validation for constraint: string
        if (!is_null($street) && !is_string($street)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($street, true), gettype($street)), __LINE__);
        }
        if (is_null($street) || (is_array($street) && empty($street))) {
            unset($this->Street);
        } else {
            $this->Street = $street;
        }
        
        return $this;
    }
    /**
     * Get Surname value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getSurname(): ?string
    {
        return isset($this->Surname) ? $this->Surname : null;
    }
    /**
     * Set Surname value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $surname
     * @return \StructType\FirebirdIncidentEventsResult
     */
    public function setSurname(?string $surname = null): self
    {
        // validation for constraint: string
        if (!is_null($surname) && !is_string($surname)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($surname, true), gettype($surname)), __LINE__);
        }
        if (is_null($surname) || (is_array($surname) && empty($surname))) {
            unset($this->Surname);
        } else {
            $this->Surname = $surname;
        }
        
        return $this;
    }
    /**
     * Get Violation value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getViolation(): ?string
    {
        return isset($this->Violation) ? $this->Violation : null;
    }
    /**
     * Set Violation value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $violation
     * @return \StructType\FirebirdIncidentEventsResult
     */
    public function setViolation(?string $violation = null): self
    {
        // validation for constraint: string
        if (!is_null($violation) && !is_string($violation)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($violation, true), gettype($violation)), __LINE__);
        }
        if (is_null($violation) || (is_array($violation) && empty($violation))) {
            unset($this->Violation);
        } else {
            $this->Violation = $violation;
        }
        
        return $this;
    }
    /**
     * Get WayOfPlunder value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getWayOfPlunder(): ?string
    {
        return isset($this->WayOfPlunder) ? $this->WayOfPlunder : null;
    }
    /**
     * Set WayOfPlunder value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $wayOfPlunder
     * @return \StructType\FirebirdIncidentEventsResult
     */
    public function setWayOfPlunder(?string $wayOfPlunder = null): self
    {
        // validation for constraint: string
        if (!is_null($wayOfPlunder) && !is_string($wayOfPlunder)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($wayOfPlunder, true), gettype($wayOfPlunder)), __LINE__);
        }
        if (is_null($wayOfPlunder) || (is_array($wayOfPlunder) && empty($wayOfPlunder))) {
            unset($this->WayOfPlunder);
        } else {
            $this->WayOfPlunder = $wayOfPlunder;
        }
        
        return $this;
    }
    /**
     * Get WayOfPlunderInfo value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getWayOfPlunderInfo(): ?string
    {
        return isset($this->WayOfPlunderInfo) ? $this->WayOfPlunderInfo : null;
    }
    /**
     * Set WayOfPlunderInfo value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $wayOfPlunderInfo
     * @return \StructType\FirebirdIncidentEventsResult
     */
    public function setWayOfPlunderInfo(?string $wayOfPlunderInfo = null): self
    {
        // validation for constraint: string
        if (!is_null($wayOfPlunderInfo) && !is_string($wayOfPlunderInfo)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($wayOfPlunderInfo, true), gettype($wayOfPlunderInfo)), __LINE__);
        }
        if (is_null($wayOfPlunderInfo) || (is_array($wayOfPlunderInfo) && empty($wayOfPlunderInfo))) {
            unset($this->WayOfPlunderInfo);
        } else {
            $this->WayOfPlunderInfo = $wayOfPlunderInfo;
        }
        
        return $this;
    }
}
