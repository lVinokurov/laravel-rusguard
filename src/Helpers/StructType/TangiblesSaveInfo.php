<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for TangiblesSaveInfo StructType
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:TangiblesSaveInfo
 * @subpackage Structs
 */
class TangiblesSaveInfo extends AbstractStructBase
{
    /**
     * The Description
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $Description = null;
    /**
     * The MeasureID
     * Meta information extracted from the WSDL
     * - base: xs:string
     * - minOccurs: 0
     * - nillable: true
     * - pattern: [\da-fA-F]{8}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{12}
     * - type: tns:guid
     * @var string|null
     */
    protected ?string $MeasureID = null;
    /**
     * The Number
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var float|null
     */
    protected ?float $Number = null;
    /**
     * The NumberAndDateOfReturn
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $NumberAndDateOfReturn = null;
    /**
     * The Price
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var float|null
     */
    protected ?float $Price = null;
    /**
     * The TangiblesID
     * Meta information extracted from the WSDL
     * - base: xs:string
     * - minOccurs: 0
     * - nillable: true
     * - pattern: [\da-fA-F]{8}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{12}
     * - type: tns:guid
     * @var string|null
     */
    protected ?string $TangiblesID = null;
    /**
     * The WhoTransferedID
     * Meta information extracted from the WSDL
     * - base: xs:string
     * - minOccurs: 0
     * - nillable: true
     * - pattern: [\da-fA-F]{8}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{12}
     * - type: tns:guid
     * @var string|null
     */
    protected ?string $WhoTransferedID = null;
    /**
     * Constructor method for TangiblesSaveInfo
     * @uses TangiblesSaveInfo::setDescription()
     * @uses TangiblesSaveInfo::setMeasureID()
     * @uses TangiblesSaveInfo::setNumber()
     * @uses TangiblesSaveInfo::setNumberAndDateOfReturn()
     * @uses TangiblesSaveInfo::setPrice()
     * @uses TangiblesSaveInfo::setTangiblesID()
     * @uses TangiblesSaveInfo::setWhoTransferedID()
     * @param string $description
     * @param string $measureID
     * @param float $number
     * @param string $numberAndDateOfReturn
     * @param float $price
     * @param string $tangiblesID
     * @param string $whoTransferedID
     */
    public function __construct(?string $description = null, ?string $measureID = null, ?float $number = null, ?string $numberAndDateOfReturn = null, ?float $price = null, ?string $tangiblesID = null, ?string $whoTransferedID = null)
    {
        $this
            ->setDescription($description)
            ->setMeasureID($measureID)
            ->setNumber($number)
            ->setNumberAndDateOfReturn($numberAndDateOfReturn)
            ->setPrice($price)
            ->setTangiblesID($tangiblesID)
            ->setWhoTransferedID($whoTransferedID);
    }
    /**
     * Get Description value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getDescription(): ?string
    {
        return isset($this->Description) ? $this->Description : null;
    }
    /**
     * Set Description value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $description
     * @return \StructType\TangiblesSaveInfo
     */
    public function setDescription(?string $description = null): self
    {
        // validation for constraint: string
        if (!is_null($description) && !is_string($description)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($description, true), gettype($description)), __LINE__);
        }
        if (is_null($description) || (is_array($description) && empty($description))) {
            unset($this->Description);
        } else {
            $this->Description = $description;
        }
        
        return $this;
    }
    /**
     * Get MeasureID value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getMeasureID(): ?string
    {
        return isset($this->MeasureID) ? $this->MeasureID : null;
    }
    /**
     * Set MeasureID value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $measureID
     * @return \StructType\TangiblesSaveInfo
     */
    public function setMeasureID(?string $measureID = null): self
    {
        // validation for constraint: string
        if (!is_null($measureID) && !is_string($measureID)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($measureID, true), gettype($measureID)), __LINE__);
        }
        // validation for constraint: pattern([\da-fA-F]{8}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{12})
        if (!is_null($measureID) && !preg_match('/[\\da-fA-F]{8}-[\\da-fA-F]{4}-[\\da-fA-F]{4}-[\\da-fA-F]{4}-[\\da-fA-F]{12}/', $measureID)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a literal that is among the set of character sequences denoted by the regular expression /[\\da-fA-F]{8}-[\\da-fA-F]{4}-[\\da-fA-F]{4}-[\\da-fA-F]{4}-[\\da-fA-F]{12}/', var_export($measureID, true)), __LINE__);
        }
        if (is_null($measureID) || (is_array($measureID) && empty($measureID))) {
            unset($this->MeasureID);
        } else {
            $this->MeasureID = $measureID;
        }
        
        return $this;
    }
    /**
     * Get Number value
     * @return float|null
     */
    public function getNumber(): ?float
    {
        return $this->Number;
    }
    /**
     * Set Number value
     * @param float $number
     * @return \StructType\TangiblesSaveInfo
     */
    public function setNumber(?float $number = null): self
    {
        // validation for constraint: float
        if (!is_null($number) && !(is_float($number) || is_numeric($number))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($number, true), gettype($number)), __LINE__);
        }
        $this->Number = $number;
        
        return $this;
    }
    /**
     * Get NumberAndDateOfReturn value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getNumberAndDateOfReturn(): ?string
    {
        return isset($this->NumberAndDateOfReturn) ? $this->NumberAndDateOfReturn : null;
    }
    /**
     * Set NumberAndDateOfReturn value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $numberAndDateOfReturn
     * @return \StructType\TangiblesSaveInfo
     */
    public function setNumberAndDateOfReturn(?string $numberAndDateOfReturn = null): self
    {
        // validation for constraint: string
        if (!is_null($numberAndDateOfReturn) && !is_string($numberAndDateOfReturn)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($numberAndDateOfReturn, true), gettype($numberAndDateOfReturn)), __LINE__);
        }
        if (is_null($numberAndDateOfReturn) || (is_array($numberAndDateOfReturn) && empty($numberAndDateOfReturn))) {
            unset($this->NumberAndDateOfReturn);
        } else {
            $this->NumberAndDateOfReturn = $numberAndDateOfReturn;
        }
        
        return $this;
    }
    /**
     * Get Price value
     * @return float|null
     */
    public function getPrice(): ?float
    {
        return $this->Price;
    }
    /**
     * Set Price value
     * @param float $price
     * @return \StructType\TangiblesSaveInfo
     */
    public function setPrice(?float $price = null): self
    {
        // validation for constraint: float
        if (!is_null($price) && !(is_float($price) || is_numeric($price))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($price, true), gettype($price)), __LINE__);
        }
        $this->Price = $price;
        
        return $this;
    }
    /**
     * Get TangiblesID value
     * @return string|null
     */
    public function getTangiblesID(): ?string
    {
        return $this->TangiblesID;
    }
    /**
     * Set TangiblesID value
     * @param string $tangiblesID
     * @return \StructType\TangiblesSaveInfo
     */
    public function setTangiblesID(?string $tangiblesID = null): self
    {
        // validation for constraint: string
        if (!is_null($tangiblesID) && !is_string($tangiblesID)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($tangiblesID, true), gettype($tangiblesID)), __LINE__);
        }
        // validation for constraint: pattern([\da-fA-F]{8}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{12})
        if (!is_null($tangiblesID) && !preg_match('/[\\da-fA-F]{8}-[\\da-fA-F]{4}-[\\da-fA-F]{4}-[\\da-fA-F]{4}-[\\da-fA-F]{12}/', $tangiblesID)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a literal that is among the set of character sequences denoted by the regular expression /[\\da-fA-F]{8}-[\\da-fA-F]{4}-[\\da-fA-F]{4}-[\\da-fA-F]{4}-[\\da-fA-F]{12}/', var_export($tangiblesID, true)), __LINE__);
        }
        $this->TangiblesID = $tangiblesID;
        
        return $this;
    }
    /**
     * Get WhoTransferedID value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getWhoTransferedID(): ?string
    {
        return isset($this->WhoTransferedID) ? $this->WhoTransferedID : null;
    }
    /**
     * Set WhoTransferedID value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $whoTransferedID
     * @return \StructType\TangiblesSaveInfo
     */
    public function setWhoTransferedID(?string $whoTransferedID = null): self
    {
        // validation for constraint: string
        if (!is_null($whoTransferedID) && !is_string($whoTransferedID)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($whoTransferedID, true), gettype($whoTransferedID)), __LINE__);
        }
        // validation for constraint: pattern([\da-fA-F]{8}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{12})
        if (!is_null($whoTransferedID) && !preg_match('/[\\da-fA-F]{8}-[\\da-fA-F]{4}-[\\da-fA-F]{4}-[\\da-fA-F]{4}-[\\da-fA-F]{12}/', $whoTransferedID)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a literal that is among the set of character sequences denoted by the regular expression /[\\da-fA-F]{8}-[\\da-fA-F]{4}-[\\da-fA-F]{4}-[\\da-fA-F]{4}-[\\da-fA-F]{12}/', var_export($whoTransferedID, true)), __LINE__);
        }
        if (is_null($whoTransferedID) || (is_array($whoTransferedID) && empty($whoTransferedID))) {
            unset($this->WhoTransferedID);
        } else {
            $this->WhoTransferedID = $whoTransferedID;
        }
        
        return $this;
    }
}
