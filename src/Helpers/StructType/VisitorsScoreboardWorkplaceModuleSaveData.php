<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for VisitorsScoreboardWorkplaceModuleSaveData StructType
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:VisitorsScoreboardWorkplaceModuleSaveData
 * @subpackage Structs
 */
class VisitorsScoreboardWorkplaceModuleSaveData extends AbstractStructBase
{
    /**
     * The BackgroundColor
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $BackgroundColor = null;
    /**
     * The Caption
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $Caption = null;
    /**
     * The CaptionColor
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $CaptionColor = null;
    /**
     * The EmployeesCountColor
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $EmployeesCountColor = null;
    /**
     * The EmployeesCountLabelColor
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $EmployeesCountLabelColor = null;
    /**
     * The GuestsCountColor
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $GuestsCountColor = null;
    /**
     * The GuestsCountLabelColor
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $GuestsCountLabelColor = null;
    /**
     * The TotalVisitorsColor
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $TotalVisitorsColor = null;
    /**
     * The TotalVisitorsLabelColor
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $TotalVisitorsLabelColor = null;
    /**
     * The WorkZoneID
     * Meta information extracted from the WSDL
     * - base: xs:string
     * - minOccurs: 0
     * - nillable: true
     * - pattern: [\da-fA-F]{8}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{12}
     * - type: tns:guid
     * @var string|null
     */
    protected ?string $WorkZoneID = null;
    /**
     * Constructor method for VisitorsScoreboardWorkplaceModuleSaveData
     * @uses VisitorsScoreboardWorkplaceModuleSaveData::setBackgroundColor()
     * @uses VisitorsScoreboardWorkplaceModuleSaveData::setCaption()
     * @uses VisitorsScoreboardWorkplaceModuleSaveData::setCaptionColor()
     * @uses VisitorsScoreboardWorkplaceModuleSaveData::setEmployeesCountColor()
     * @uses VisitorsScoreboardWorkplaceModuleSaveData::setEmployeesCountLabelColor()
     * @uses VisitorsScoreboardWorkplaceModuleSaveData::setGuestsCountColor()
     * @uses VisitorsScoreboardWorkplaceModuleSaveData::setGuestsCountLabelColor()
     * @uses VisitorsScoreboardWorkplaceModuleSaveData::setTotalVisitorsColor()
     * @uses VisitorsScoreboardWorkplaceModuleSaveData::setTotalVisitorsLabelColor()
     * @uses VisitorsScoreboardWorkplaceModuleSaveData::setWorkZoneID()
     * @param string $backgroundColor
     * @param string $caption
     * @param string $captionColor
     * @param string $employeesCountColor
     * @param string $employeesCountLabelColor
     * @param string $guestsCountColor
     * @param string $guestsCountLabelColor
     * @param string $totalVisitorsColor
     * @param string $totalVisitorsLabelColor
     * @param string $workZoneID
     */
    public function __construct(?string $backgroundColor = null, ?string $caption = null, ?string $captionColor = null, ?string $employeesCountColor = null, ?string $employeesCountLabelColor = null, ?string $guestsCountColor = null, ?string $guestsCountLabelColor = null, ?string $totalVisitorsColor = null, ?string $totalVisitorsLabelColor = null, ?string $workZoneID = null)
    {
        $this
            ->setBackgroundColor($backgroundColor)
            ->setCaption($caption)
            ->setCaptionColor($captionColor)
            ->setEmployeesCountColor($employeesCountColor)
            ->setEmployeesCountLabelColor($employeesCountLabelColor)
            ->setGuestsCountColor($guestsCountColor)
            ->setGuestsCountLabelColor($guestsCountLabelColor)
            ->setTotalVisitorsColor($totalVisitorsColor)
            ->setTotalVisitorsLabelColor($totalVisitorsLabelColor)
            ->setWorkZoneID($workZoneID);
    }
    /**
     * Get BackgroundColor value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getBackgroundColor(): ?string
    {
        return isset($this->BackgroundColor) ? $this->BackgroundColor : null;
    }
    /**
     * Set BackgroundColor value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $backgroundColor
     * @return \StructType\VisitorsScoreboardWorkplaceModuleSaveData
     */
    public function setBackgroundColor(?string $backgroundColor = null): self
    {
        // validation for constraint: string
        if (!is_null($backgroundColor) && !is_string($backgroundColor)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($backgroundColor, true), gettype($backgroundColor)), __LINE__);
        }
        if (is_null($backgroundColor) || (is_array($backgroundColor) && empty($backgroundColor))) {
            unset($this->BackgroundColor);
        } else {
            $this->BackgroundColor = $backgroundColor;
        }
        
        return $this;
    }
    /**
     * Get Caption value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getCaption(): ?string
    {
        return isset($this->Caption) ? $this->Caption : null;
    }
    /**
     * Set Caption value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $caption
     * @return \StructType\VisitorsScoreboardWorkplaceModuleSaveData
     */
    public function setCaption(?string $caption = null): self
    {
        // validation for constraint: string
        if (!is_null($caption) && !is_string($caption)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($caption, true), gettype($caption)), __LINE__);
        }
        if (is_null($caption) || (is_array($caption) && empty($caption))) {
            unset($this->Caption);
        } else {
            $this->Caption = $caption;
        }
        
        return $this;
    }
    /**
     * Get CaptionColor value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getCaptionColor(): ?string
    {
        return isset($this->CaptionColor) ? $this->CaptionColor : null;
    }
    /**
     * Set CaptionColor value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $captionColor
     * @return \StructType\VisitorsScoreboardWorkplaceModuleSaveData
     */
    public function setCaptionColor(?string $captionColor = null): self
    {
        // validation for constraint: string
        if (!is_null($captionColor) && !is_string($captionColor)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($captionColor, true), gettype($captionColor)), __LINE__);
        }
        if (is_null($captionColor) || (is_array($captionColor) && empty($captionColor))) {
            unset($this->CaptionColor);
        } else {
            $this->CaptionColor = $captionColor;
        }
        
        return $this;
    }
    /**
     * Get EmployeesCountColor value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getEmployeesCountColor(): ?string
    {
        return isset($this->EmployeesCountColor) ? $this->EmployeesCountColor : null;
    }
    /**
     * Set EmployeesCountColor value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $employeesCountColor
     * @return \StructType\VisitorsScoreboardWorkplaceModuleSaveData
     */
    public function setEmployeesCountColor(?string $employeesCountColor = null): self
    {
        // validation for constraint: string
        if (!is_null($employeesCountColor) && !is_string($employeesCountColor)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($employeesCountColor, true), gettype($employeesCountColor)), __LINE__);
        }
        if (is_null($employeesCountColor) || (is_array($employeesCountColor) && empty($employeesCountColor))) {
            unset($this->EmployeesCountColor);
        } else {
            $this->EmployeesCountColor = $employeesCountColor;
        }
        
        return $this;
    }
    /**
     * Get EmployeesCountLabelColor value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getEmployeesCountLabelColor(): ?string
    {
        return isset($this->EmployeesCountLabelColor) ? $this->EmployeesCountLabelColor : null;
    }
    /**
     * Set EmployeesCountLabelColor value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $employeesCountLabelColor
     * @return \StructType\VisitorsScoreboardWorkplaceModuleSaveData
     */
    public function setEmployeesCountLabelColor(?string $employeesCountLabelColor = null): self
    {
        // validation for constraint: string
        if (!is_null($employeesCountLabelColor) && !is_string($employeesCountLabelColor)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($employeesCountLabelColor, true), gettype($employeesCountLabelColor)), __LINE__);
        }
        if (is_null($employeesCountLabelColor) || (is_array($employeesCountLabelColor) && empty($employeesCountLabelColor))) {
            unset($this->EmployeesCountLabelColor);
        } else {
            $this->EmployeesCountLabelColor = $employeesCountLabelColor;
        }
        
        return $this;
    }
    /**
     * Get GuestsCountColor value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getGuestsCountColor(): ?string
    {
        return isset($this->GuestsCountColor) ? $this->GuestsCountColor : null;
    }
    /**
     * Set GuestsCountColor value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $guestsCountColor
     * @return \StructType\VisitorsScoreboardWorkplaceModuleSaveData
     */
    public function setGuestsCountColor(?string $guestsCountColor = null): self
    {
        // validation for constraint: string
        if (!is_null($guestsCountColor) && !is_string($guestsCountColor)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($guestsCountColor, true), gettype($guestsCountColor)), __LINE__);
        }
        if (is_null($guestsCountColor) || (is_array($guestsCountColor) && empty($guestsCountColor))) {
            unset($this->GuestsCountColor);
        } else {
            $this->GuestsCountColor = $guestsCountColor;
        }
        
        return $this;
    }
    /**
     * Get GuestsCountLabelColor value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getGuestsCountLabelColor(): ?string
    {
        return isset($this->GuestsCountLabelColor) ? $this->GuestsCountLabelColor : null;
    }
    /**
     * Set GuestsCountLabelColor value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $guestsCountLabelColor
     * @return \StructType\VisitorsScoreboardWorkplaceModuleSaveData
     */
    public function setGuestsCountLabelColor(?string $guestsCountLabelColor = null): self
    {
        // validation for constraint: string
        if (!is_null($guestsCountLabelColor) && !is_string($guestsCountLabelColor)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($guestsCountLabelColor, true), gettype($guestsCountLabelColor)), __LINE__);
        }
        if (is_null($guestsCountLabelColor) || (is_array($guestsCountLabelColor) && empty($guestsCountLabelColor))) {
            unset($this->GuestsCountLabelColor);
        } else {
            $this->GuestsCountLabelColor = $guestsCountLabelColor;
        }
        
        return $this;
    }
    /**
     * Get TotalVisitorsColor value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getTotalVisitorsColor(): ?string
    {
        return isset($this->TotalVisitorsColor) ? $this->TotalVisitorsColor : null;
    }
    /**
     * Set TotalVisitorsColor value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $totalVisitorsColor
     * @return \StructType\VisitorsScoreboardWorkplaceModuleSaveData
     */
    public function setTotalVisitorsColor(?string $totalVisitorsColor = null): self
    {
        // validation for constraint: string
        if (!is_null($totalVisitorsColor) && !is_string($totalVisitorsColor)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($totalVisitorsColor, true), gettype($totalVisitorsColor)), __LINE__);
        }
        if (is_null($totalVisitorsColor) || (is_array($totalVisitorsColor) && empty($totalVisitorsColor))) {
            unset($this->TotalVisitorsColor);
        } else {
            $this->TotalVisitorsColor = $totalVisitorsColor;
        }
        
        return $this;
    }
    /**
     * Get TotalVisitorsLabelColor value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getTotalVisitorsLabelColor(): ?string
    {
        return isset($this->TotalVisitorsLabelColor) ? $this->TotalVisitorsLabelColor : null;
    }
    /**
     * Set TotalVisitorsLabelColor value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $totalVisitorsLabelColor
     * @return \StructType\VisitorsScoreboardWorkplaceModuleSaveData
     */
    public function setTotalVisitorsLabelColor(?string $totalVisitorsLabelColor = null): self
    {
        // validation for constraint: string
        if (!is_null($totalVisitorsLabelColor) && !is_string($totalVisitorsLabelColor)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($totalVisitorsLabelColor, true), gettype($totalVisitorsLabelColor)), __LINE__);
        }
        if (is_null($totalVisitorsLabelColor) || (is_array($totalVisitorsLabelColor) && empty($totalVisitorsLabelColor))) {
            unset($this->TotalVisitorsLabelColor);
        } else {
            $this->TotalVisitorsLabelColor = $totalVisitorsLabelColor;
        }
        
        return $this;
    }
    /**
     * Get WorkZoneID value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getWorkZoneID(): ?string
    {
        return isset($this->WorkZoneID) ? $this->WorkZoneID : null;
    }
    /**
     * Set WorkZoneID value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $workZoneID
     * @return \StructType\VisitorsScoreboardWorkplaceModuleSaveData
     */
    public function setWorkZoneID(?string $workZoneID = null): self
    {
        // validation for constraint: string
        if (!is_null($workZoneID) && !is_string($workZoneID)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($workZoneID, true), gettype($workZoneID)), __LINE__);
        }
        // validation for constraint: pattern([\da-fA-F]{8}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{12})
        if (!is_null($workZoneID) && !preg_match('/[\\da-fA-F]{8}-[\\da-fA-F]{4}-[\\da-fA-F]{4}-[\\da-fA-F]{4}-[\\da-fA-F]{12}/', $workZoneID)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a literal that is among the set of character sequences denoted by the regular expression /[\\da-fA-F]{8}-[\\da-fA-F]{4}-[\\da-fA-F]{4}-[\\da-fA-F]{4}-[\\da-fA-F]{12}/', var_export($workZoneID, true)), __LINE__);
        }
        if (is_null($workZoneID) || (is_array($workZoneID) && empty($workZoneID))) {
            unset($this->WorkZoneID);
        } else {
            $this->WorkZoneID = $workZoneID;
        }
        
        return $this;
    }
}
