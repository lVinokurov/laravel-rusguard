<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for AcsKeySaveData StructType
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:AcsKeySaveData
 * @subpackage Structs
 */
class AcsKeySaveData extends AbstractStructBase
{
    /**
     * The CardTypeID
     * Meta information extracted from the WSDL
     * - base: xs:string
     * - minOccurs: 0
     * - nillable: true
     * - pattern: [\da-fA-F]{8}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{12}
     * - type: tns:guid
     * @var string|null
     */
    protected ?string $CardTypeID = null;
    /**
     * The CardTypeName
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $CardTypeName = null;
    /**
     * The Description
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $Description = null;
    /**
     * The EndDate
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $EndDate = null;
    /**
     * The Finger1_Image
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $Finger1_Image = null;
    /**
     * The Finger1_Template
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $Finger1_Template = null;
    /**
     * The Finger2_Image
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $Finger2_Image = null;
    /**
     * The Finger2_Template
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $Finger2_Template = null;
    /**
     * The Finger3_Image
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $Finger3_Image = null;
    /**
     * The Finger3_Template
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $Finger3_Template = null;
    /**
     * The Finger4_Image
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $Finger4_Image = null;
    /**
     * The Finger4_Template
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $Finger4_Template = null;
    /**
     * The Finger5_Image
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $Finger5_Image = null;
    /**
     * The Finger5_Template
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $Finger5_Template = null;
    /**
     * The KeyNumber
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var int|null
     */
    protected ?int $KeyNumber = null;
    /**
     * The Name
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $Name = null;
    /**
     * The StartDate
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $StartDate = null;
    /**
     * Constructor method for AcsKeySaveData
     * @uses AcsKeySaveData::setCardTypeID()
     * @uses AcsKeySaveData::setCardTypeName()
     * @uses AcsKeySaveData::setDescription()
     * @uses AcsKeySaveData::setEndDate()
     * @uses AcsKeySaveData::setFinger1_Image()
     * @uses AcsKeySaveData::setFinger1_Template()
     * @uses AcsKeySaveData::setFinger2_Image()
     * @uses AcsKeySaveData::setFinger2_Template()
     * @uses AcsKeySaveData::setFinger3_Image()
     * @uses AcsKeySaveData::setFinger3_Template()
     * @uses AcsKeySaveData::setFinger4_Image()
     * @uses AcsKeySaveData::setFinger4_Template()
     * @uses AcsKeySaveData::setFinger5_Image()
     * @uses AcsKeySaveData::setFinger5_Template()
     * @uses AcsKeySaveData::setKeyNumber()
     * @uses AcsKeySaveData::setName()
     * @uses AcsKeySaveData::setStartDate()
     * @param string $cardTypeID
     * @param string $cardTypeName
     * @param string $description
     * @param string $endDate
     * @param string $finger1_Image
     * @param string $finger1_Template
     * @param string $finger2_Image
     * @param string $finger2_Template
     * @param string $finger3_Image
     * @param string $finger3_Template
     * @param string $finger4_Image
     * @param string $finger4_Template
     * @param string $finger5_Image
     * @param string $finger5_Template
     * @param int $keyNumber
     * @param string $name
     * @param string $startDate
     */
    public function __construct(?string $cardTypeID = null, ?string $cardTypeName = null, ?string $description = null, ?string $endDate = null, ?string $finger1_Image = null, ?string $finger1_Template = null, ?string $finger2_Image = null, ?string $finger2_Template = null, ?string $finger3_Image = null, ?string $finger3_Template = null, ?string $finger4_Image = null, ?string $finger4_Template = null, ?string $finger5_Image = null, ?string $finger5_Template = null, ?int $keyNumber = null, ?string $name = null, ?string $startDate = null)
    {
        $this
            ->setCardTypeID($cardTypeID)
            ->setCardTypeName($cardTypeName)
            ->setDescription($description)
            ->setEndDate($endDate)
            ->setFinger1_Image($finger1_Image)
            ->setFinger1_Template($finger1_Template)
            ->setFinger2_Image($finger2_Image)
            ->setFinger2_Template($finger2_Template)
            ->setFinger3_Image($finger3_Image)
            ->setFinger3_Template($finger3_Template)
            ->setFinger4_Image($finger4_Image)
            ->setFinger4_Template($finger4_Template)
            ->setFinger5_Image($finger5_Image)
            ->setFinger5_Template($finger5_Template)
            ->setKeyNumber($keyNumber)
            ->setName($name)
            ->setStartDate($startDate);
    }
    /**
     * Get CardTypeID value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getCardTypeID(): ?string
    {
        return isset($this->CardTypeID) ? $this->CardTypeID : null;
    }
    /**
     * Set CardTypeID value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $cardTypeID
     * @return \StructType\AcsKeySaveData
     */
    public function setCardTypeID(?string $cardTypeID = null): self
    {
        // validation for constraint: string
        if (!is_null($cardTypeID) && !is_string($cardTypeID)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($cardTypeID, true), gettype($cardTypeID)), __LINE__);
        }
        // validation for constraint: pattern([\da-fA-F]{8}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{12})
        if (!is_null($cardTypeID) && !preg_match('/[\\da-fA-F]{8}-[\\da-fA-F]{4}-[\\da-fA-F]{4}-[\\da-fA-F]{4}-[\\da-fA-F]{12}/', $cardTypeID)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a literal that is among the set of character sequences denoted by the regular expression /[\\da-fA-F]{8}-[\\da-fA-F]{4}-[\\da-fA-F]{4}-[\\da-fA-F]{4}-[\\da-fA-F]{12}/', var_export($cardTypeID, true)), __LINE__);
        }
        if (is_null($cardTypeID) || (is_array($cardTypeID) && empty($cardTypeID))) {
            unset($this->CardTypeID);
        } else {
            $this->CardTypeID = $cardTypeID;
        }
        
        return $this;
    }
    /**
     * Get CardTypeName value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getCardTypeName(): ?string
    {
        return isset($this->CardTypeName) ? $this->CardTypeName : null;
    }
    /**
     * Set CardTypeName value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $cardTypeName
     * @return \StructType\AcsKeySaveData
     */
    public function setCardTypeName(?string $cardTypeName = null): self
    {
        // validation for constraint: string
        if (!is_null($cardTypeName) && !is_string($cardTypeName)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($cardTypeName, true), gettype($cardTypeName)), __LINE__);
        }
        if (is_null($cardTypeName) || (is_array($cardTypeName) && empty($cardTypeName))) {
            unset($this->CardTypeName);
        } else {
            $this->CardTypeName = $cardTypeName;
        }
        
        return $this;
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
     * @return \StructType\AcsKeySaveData
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
     * @return \StructType\AcsKeySaveData
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
     * Get Finger1_Image value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getFinger1_Image(): ?string
    {
        return isset($this->Finger1_Image) ? $this->Finger1_Image : null;
    }
    /**
     * Set Finger1_Image value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $finger1_Image
     * @return \StructType\AcsKeySaveData
     */
    public function setFinger1_Image(?string $finger1_Image = null): self
    {
        // validation for constraint: string
        if (!is_null($finger1_Image) && !is_string($finger1_Image)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($finger1_Image, true), gettype($finger1_Image)), __LINE__);
        }
        if (is_null($finger1_Image) || (is_array($finger1_Image) && empty($finger1_Image))) {
            unset($this->Finger1_Image);
        } else {
            $this->Finger1_Image = $finger1_Image;
        }
        
        return $this;
    }
    /**
     * Get Finger1_Template value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getFinger1_Template(): ?string
    {
        return isset($this->Finger1_Template) ? $this->Finger1_Template : null;
    }
    /**
     * Set Finger1_Template value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $finger1_Template
     * @return \StructType\AcsKeySaveData
     */
    public function setFinger1_Template(?string $finger1_Template = null): self
    {
        // validation for constraint: string
        if (!is_null($finger1_Template) && !is_string($finger1_Template)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($finger1_Template, true), gettype($finger1_Template)), __LINE__);
        }
        if (is_null($finger1_Template) || (is_array($finger1_Template) && empty($finger1_Template))) {
            unset($this->Finger1_Template);
        } else {
            $this->Finger1_Template = $finger1_Template;
        }
        
        return $this;
    }
    /**
     * Get Finger2_Image value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getFinger2_Image(): ?string
    {
        return isset($this->Finger2_Image) ? $this->Finger2_Image : null;
    }
    /**
     * Set Finger2_Image value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $finger2_Image
     * @return \StructType\AcsKeySaveData
     */
    public function setFinger2_Image(?string $finger2_Image = null): self
    {
        // validation for constraint: string
        if (!is_null($finger2_Image) && !is_string($finger2_Image)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($finger2_Image, true), gettype($finger2_Image)), __LINE__);
        }
        if (is_null($finger2_Image) || (is_array($finger2_Image) && empty($finger2_Image))) {
            unset($this->Finger2_Image);
        } else {
            $this->Finger2_Image = $finger2_Image;
        }
        
        return $this;
    }
    /**
     * Get Finger2_Template value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getFinger2_Template(): ?string
    {
        return isset($this->Finger2_Template) ? $this->Finger2_Template : null;
    }
    /**
     * Set Finger2_Template value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $finger2_Template
     * @return \StructType\AcsKeySaveData
     */
    public function setFinger2_Template(?string $finger2_Template = null): self
    {
        // validation for constraint: string
        if (!is_null($finger2_Template) && !is_string($finger2_Template)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($finger2_Template, true), gettype($finger2_Template)), __LINE__);
        }
        if (is_null($finger2_Template) || (is_array($finger2_Template) && empty($finger2_Template))) {
            unset($this->Finger2_Template);
        } else {
            $this->Finger2_Template = $finger2_Template;
        }
        
        return $this;
    }
    /**
     * Get Finger3_Image value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getFinger3_Image(): ?string
    {
        return isset($this->Finger3_Image) ? $this->Finger3_Image : null;
    }
    /**
     * Set Finger3_Image value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $finger3_Image
     * @return \StructType\AcsKeySaveData
     */
    public function setFinger3_Image(?string $finger3_Image = null): self
    {
        // validation for constraint: string
        if (!is_null($finger3_Image) && !is_string($finger3_Image)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($finger3_Image, true), gettype($finger3_Image)), __LINE__);
        }
        if (is_null($finger3_Image) || (is_array($finger3_Image) && empty($finger3_Image))) {
            unset($this->Finger3_Image);
        } else {
            $this->Finger3_Image = $finger3_Image;
        }
        
        return $this;
    }
    /**
     * Get Finger3_Template value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getFinger3_Template(): ?string
    {
        return isset($this->Finger3_Template) ? $this->Finger3_Template : null;
    }
    /**
     * Set Finger3_Template value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $finger3_Template
     * @return \StructType\AcsKeySaveData
     */
    public function setFinger3_Template(?string $finger3_Template = null): self
    {
        // validation for constraint: string
        if (!is_null($finger3_Template) && !is_string($finger3_Template)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($finger3_Template, true), gettype($finger3_Template)), __LINE__);
        }
        if (is_null($finger3_Template) || (is_array($finger3_Template) && empty($finger3_Template))) {
            unset($this->Finger3_Template);
        } else {
            $this->Finger3_Template = $finger3_Template;
        }
        
        return $this;
    }
    /**
     * Get Finger4_Image value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getFinger4_Image(): ?string
    {
        return isset($this->Finger4_Image) ? $this->Finger4_Image : null;
    }
    /**
     * Set Finger4_Image value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $finger4_Image
     * @return \StructType\AcsKeySaveData
     */
    public function setFinger4_Image(?string $finger4_Image = null): self
    {
        // validation for constraint: string
        if (!is_null($finger4_Image) && !is_string($finger4_Image)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($finger4_Image, true), gettype($finger4_Image)), __LINE__);
        }
        if (is_null($finger4_Image) || (is_array($finger4_Image) && empty($finger4_Image))) {
            unset($this->Finger4_Image);
        } else {
            $this->Finger4_Image = $finger4_Image;
        }
        
        return $this;
    }
    /**
     * Get Finger4_Template value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getFinger4_Template(): ?string
    {
        return isset($this->Finger4_Template) ? $this->Finger4_Template : null;
    }
    /**
     * Set Finger4_Template value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $finger4_Template
     * @return \StructType\AcsKeySaveData
     */
    public function setFinger4_Template(?string $finger4_Template = null): self
    {
        // validation for constraint: string
        if (!is_null($finger4_Template) && !is_string($finger4_Template)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($finger4_Template, true), gettype($finger4_Template)), __LINE__);
        }
        if (is_null($finger4_Template) || (is_array($finger4_Template) && empty($finger4_Template))) {
            unset($this->Finger4_Template);
        } else {
            $this->Finger4_Template = $finger4_Template;
        }
        
        return $this;
    }
    /**
     * Get Finger5_Image value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getFinger5_Image(): ?string
    {
        return isset($this->Finger5_Image) ? $this->Finger5_Image : null;
    }
    /**
     * Set Finger5_Image value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $finger5_Image
     * @return \StructType\AcsKeySaveData
     */
    public function setFinger5_Image(?string $finger5_Image = null): self
    {
        // validation for constraint: string
        if (!is_null($finger5_Image) && !is_string($finger5_Image)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($finger5_Image, true), gettype($finger5_Image)), __LINE__);
        }
        if (is_null($finger5_Image) || (is_array($finger5_Image) && empty($finger5_Image))) {
            unset($this->Finger5_Image);
        } else {
            $this->Finger5_Image = $finger5_Image;
        }
        
        return $this;
    }
    /**
     * Get Finger5_Template value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getFinger5_Template(): ?string
    {
        return isset($this->Finger5_Template) ? $this->Finger5_Template : null;
    }
    /**
     * Set Finger5_Template value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $finger5_Template
     * @return \StructType\AcsKeySaveData
     */
    public function setFinger5_Template(?string $finger5_Template = null): self
    {
        // validation for constraint: string
        if (!is_null($finger5_Template) && !is_string($finger5_Template)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($finger5_Template, true), gettype($finger5_Template)), __LINE__);
        }
        if (is_null($finger5_Template) || (is_array($finger5_Template) && empty($finger5_Template))) {
            unset($this->Finger5_Template);
        } else {
            $this->Finger5_Template = $finger5_Template;
        }
        
        return $this;
    }
    /**
     * Get KeyNumber value
     * @return int|null
     */
    public function getKeyNumber(): ?int
    {
        return $this->KeyNumber;
    }
    /**
     * Set KeyNumber value
     * @param int $keyNumber
     * @return \StructType\AcsKeySaveData
     */
    public function setKeyNumber(?int $keyNumber = null): self
    {
        // validation for constraint: int
        if (!is_null($keyNumber) && !(is_int($keyNumber) || ctype_digit($keyNumber))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($keyNumber, true), gettype($keyNumber)), __LINE__);
        }
        $this->KeyNumber = $keyNumber;
        
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
     * @return \StructType\AcsKeySaveData
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
     * Get StartDate value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getStartDate(): ?string
    {
        return isset($this->StartDate) ? $this->StartDate : null;
    }
    /**
     * Set StartDate value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $startDate
     * @return \StructType\AcsKeySaveData
     */
    public function setStartDate(?string $startDate = null): self
    {
        // validation for constraint: string
        if (!is_null($startDate) && !is_string($startDate)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($startDate, true), gettype($startDate)), __LINE__);
        }
        if (is_null($startDate) || (is_array($startDate) && empty($startDate))) {
            unset($this->StartDate);
        } else {
            $this->StartDate = $startDate;
        }
        
        return $this;
    }
}
