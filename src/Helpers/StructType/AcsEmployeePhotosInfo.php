<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for AcsEmployeePhotosInfo StructType
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:AcsEmployeePhotosInfo
 * @subpackage Structs
 */
class AcsEmployeePhotosInfo extends AbstractStructBase
{
    /**
     * The FirstName
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $FirstName = null;
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
     * The LastName
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $LastName = null;
    /**
     * The Photos
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \ArrayType\ArrayOfAscEmployeePhotoModificationDateTimeInfo|null
     */
    protected ?\ArrayType\ArrayOfAscEmployeePhotoModificationDateTimeInfo $Photos = null;
    /**
     * The SecondName
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $SecondName = null;
    /**
     * Constructor method for AcsEmployeePhotosInfo
     * @uses AcsEmployeePhotosInfo::setFirstName()
     * @uses AcsEmployeePhotosInfo::setId()
     * @uses AcsEmployeePhotosInfo::setIsRemoved()
     * @uses AcsEmployeePhotosInfo::setLastName()
     * @uses AcsEmployeePhotosInfo::setPhotos()
     * @uses AcsEmployeePhotosInfo::setSecondName()
     * @param string $firstName
     * @param string $id
     * @param bool $isRemoved
     * @param string $lastName
     * @param \ArrayType\ArrayOfAscEmployeePhotoModificationDateTimeInfo $photos
     * @param string $secondName
     */
    public function __construct(?string $firstName = null, ?string $id = null, ?bool $isRemoved = null, ?string $lastName = null, ?\ArrayType\ArrayOfAscEmployeePhotoModificationDateTimeInfo $photos = null, ?string $secondName = null)
    {
        $this
            ->setFirstName($firstName)
            ->setId($id)
            ->setIsRemoved($isRemoved)
            ->setLastName($lastName)
            ->setPhotos($photos)
            ->setSecondName($secondName);
    }
    /**
     * Get FirstName value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getFirstName(): ?string
    {
        return isset($this->FirstName) ? $this->FirstName : null;
    }
    /**
     * Set FirstName value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $firstName
     * @return \StructType\AcsEmployeePhotosInfo
     */
    public function setFirstName(?string $firstName = null): self
    {
        // validation for constraint: string
        if (!is_null($firstName) && !is_string($firstName)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($firstName, true), gettype($firstName)), __LINE__);
        }
        if (is_null($firstName) || (is_array($firstName) && empty($firstName))) {
            unset($this->FirstName);
        } else {
            $this->FirstName = $firstName;
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
     * @return \StructType\AcsEmployeePhotosInfo
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
     * @return \StructType\AcsEmployeePhotosInfo
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
     * Get LastName value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getLastName(): ?string
    {
        return isset($this->LastName) ? $this->LastName : null;
    }
    /**
     * Set LastName value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $lastName
     * @return \StructType\AcsEmployeePhotosInfo
     */
    public function setLastName(?string $lastName = null): self
    {
        // validation for constraint: string
        if (!is_null($lastName) && !is_string($lastName)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($lastName, true), gettype($lastName)), __LINE__);
        }
        if (is_null($lastName) || (is_array($lastName) && empty($lastName))) {
            unset($this->LastName);
        } else {
            $this->LastName = $lastName;
        }
        
        return $this;
    }
    /**
     * Get Photos value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \ArrayType\ArrayOfAscEmployeePhotoModificationDateTimeInfo|null
     */
    public function getPhotos(): ?\ArrayType\ArrayOfAscEmployeePhotoModificationDateTimeInfo
    {
        return isset($this->Photos) ? $this->Photos : null;
    }
    /**
     * Set Photos value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \ArrayType\ArrayOfAscEmployeePhotoModificationDateTimeInfo $photos
     * @return \StructType\AcsEmployeePhotosInfo
     */
    public function setPhotos(?\ArrayType\ArrayOfAscEmployeePhotoModificationDateTimeInfo $photos = null): self
    {
        if (is_null($photos) || (is_array($photos) && empty($photos))) {
            unset($this->Photos);
        } else {
            $this->Photos = $photos;
        }
        
        return $this;
    }
    /**
     * Get SecondName value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getSecondName(): ?string
    {
        return isset($this->SecondName) ? $this->SecondName : null;
    }
    /**
     * Set SecondName value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $secondName
     * @return \StructType\AcsEmployeePhotosInfo
     */
    public function setSecondName(?string $secondName = null): self
    {
        // validation for constraint: string
        if (!is_null($secondName) && !is_string($secondName)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($secondName, true), gettype($secondName)), __LINE__);
        }
        if (is_null($secondName) || (is_array($secondName) && empty($secondName))) {
            unset($this->SecondName);
        } else {
            $this->SecondName = $secondName;
        }
        
        return $this;
    }
}
