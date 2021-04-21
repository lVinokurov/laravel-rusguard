<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for TangiblesFullInfo StructType
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:TangiblesFullInfo
 * @subpackage Structs
 */
class TangiblesFullInfo extends TangiblesSaveInfo
{
    /**
     * The ID
     * Meta information extracted from the WSDL
     * - base: xs:string
     * - minOccurs: 0
     * - nillable: true
     * - pattern: [\da-fA-F]{8}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{12}
     * - type: tns:guid
     * @var string|null
     */
    protected ?string $ID = null;
    /**
     * The MeasureName
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $MeasureName = null;
    /**
     * The TangiblesName
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $TangiblesName = null;
    /**
     * The WhoTransferedName
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $WhoTransferedName = null;
    /**
     * Constructor method for TangiblesFullInfo
     * @uses TangiblesFullInfo::setID()
     * @uses TangiblesFullInfo::setMeasureName()
     * @uses TangiblesFullInfo::setTangiblesName()
     * @uses TangiblesFullInfo::setWhoTransferedName()
     * @param string $iD
     * @param string $measureName
     * @param string $tangiblesName
     * @param string $whoTransferedName
     */
    public function __construct(?string $iD = null, ?string $measureName = null, ?string $tangiblesName = null, ?string $whoTransferedName = null)
    {
        $this
            ->setID($iD)
            ->setMeasureName($measureName)
            ->setTangiblesName($tangiblesName)
            ->setWhoTransferedName($whoTransferedName);
    }
    /**
     * Get ID value
     * @return string|null
     */
    public function getID(): ?string
    {
        return $this->ID;
    }
    /**
     * Set ID value
     * @param string $iD
     * @return \StructType\TangiblesFullInfo
     */
    public function setID(?string $iD = null): self
    {
        // validation for constraint: string
        if (!is_null($iD) && !is_string($iD)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($iD, true), gettype($iD)), __LINE__);
        }
        // validation for constraint: pattern([\da-fA-F]{8}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{12})
        if (!is_null($iD) && !preg_match('/[\\da-fA-F]{8}-[\\da-fA-F]{4}-[\\da-fA-F]{4}-[\\da-fA-F]{4}-[\\da-fA-F]{12}/', $iD)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a literal that is among the set of character sequences denoted by the regular expression /[\\da-fA-F]{8}-[\\da-fA-F]{4}-[\\da-fA-F]{4}-[\\da-fA-F]{4}-[\\da-fA-F]{12}/', var_export($iD, true)), __LINE__);
        }
        $this->ID = $iD;
        
        return $this;
    }
    /**
     * Get MeasureName value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getMeasureName(): ?string
    {
        return isset($this->MeasureName) ? $this->MeasureName : null;
    }
    /**
     * Set MeasureName value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $measureName
     * @return \StructType\TangiblesFullInfo
     */
    public function setMeasureName(?string $measureName = null): self
    {
        // validation for constraint: string
        if (!is_null($measureName) && !is_string($measureName)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($measureName, true), gettype($measureName)), __LINE__);
        }
        if (is_null($measureName) || (is_array($measureName) && empty($measureName))) {
            unset($this->MeasureName);
        } else {
            $this->MeasureName = $measureName;
        }
        
        return $this;
    }
    /**
     * Get TangiblesName value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getTangiblesName(): ?string
    {
        return isset($this->TangiblesName) ? $this->TangiblesName : null;
    }
    /**
     * Set TangiblesName value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $tangiblesName
     * @return \StructType\TangiblesFullInfo
     */
    public function setTangiblesName(?string $tangiblesName = null): self
    {
        // validation for constraint: string
        if (!is_null($tangiblesName) && !is_string($tangiblesName)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($tangiblesName, true), gettype($tangiblesName)), __LINE__);
        }
        if (is_null($tangiblesName) || (is_array($tangiblesName) && empty($tangiblesName))) {
            unset($this->TangiblesName);
        } else {
            $this->TangiblesName = $tangiblesName;
        }
        
        return $this;
    }
    /**
     * Get WhoTransferedName value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getWhoTransferedName(): ?string
    {
        return isset($this->WhoTransferedName) ? $this->WhoTransferedName : null;
    }
    /**
     * Set WhoTransferedName value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $whoTransferedName
     * @return \StructType\TangiblesFullInfo
     */
    public function setWhoTransferedName(?string $whoTransferedName = null): self
    {
        // validation for constraint: string
        if (!is_null($whoTransferedName) && !is_string($whoTransferedName)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($whoTransferedName, true), gettype($whoTransferedName)), __LINE__);
        }
        if (is_null($whoTransferedName) || (is_array($whoTransferedName) && empty($whoTransferedName))) {
            unset($this->WhoTransferedName);
        } else {
            $this->WhoTransferedName = $whoTransferedName;
        }
        
        return $this;
    }
}
