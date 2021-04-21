<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for NTechLabCameraInfo StructType
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:NTechLabCameraInfo
 * @subpackage Structs
 */
class NTechLabCameraInfo extends AbstractStructBase
{
    /**
     * The Comment
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $Comment = null;
    /**
     * The CreationDate
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $CreationDate = null;
    /**
     * The Id
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var int|null
     */
    protected ?int $Id = null;
    /**
     * The ModificationDate
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $ModificationDate = null;
    /**
     * The Name
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $Name = null;
    /**
     * The Url
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $Url = null;
    /**
     * Constructor method for NTechLabCameraInfo
     * @uses NTechLabCameraInfo::setComment()
     * @uses NTechLabCameraInfo::setCreationDate()
     * @uses NTechLabCameraInfo::setId()
     * @uses NTechLabCameraInfo::setModificationDate()
     * @uses NTechLabCameraInfo::setName()
     * @uses NTechLabCameraInfo::setUrl()
     * @param string $comment
     * @param string $creationDate
     * @param int $id
     * @param string $modificationDate
     * @param string $name
     * @param string $url
     */
    public function __construct(?string $comment = null, ?string $creationDate = null, ?int $id = null, ?string $modificationDate = null, ?string $name = null, ?string $url = null)
    {
        $this
            ->setComment($comment)
            ->setCreationDate($creationDate)
            ->setId($id)
            ->setModificationDate($modificationDate)
            ->setName($name)
            ->setUrl($url);
    }
    /**
     * Get Comment value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getComment(): ?string
    {
        return isset($this->Comment) ? $this->Comment : null;
    }
    /**
     * Set Comment value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $comment
     * @return \StructType\NTechLabCameraInfo
     */
    public function setComment(?string $comment = null): self
    {
        // validation for constraint: string
        if (!is_null($comment) && !is_string($comment)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($comment, true), gettype($comment)), __LINE__);
        }
        if (is_null($comment) || (is_array($comment) && empty($comment))) {
            unset($this->Comment);
        } else {
            $this->Comment = $comment;
        }
        
        return $this;
    }
    /**
     * Get CreationDate value
     * @return string|null
     */
    public function getCreationDate(): ?string
    {
        return $this->CreationDate;
    }
    /**
     * Set CreationDate value
     * @param string $creationDate
     * @return \StructType\NTechLabCameraInfo
     */
    public function setCreationDate(?string $creationDate = null): self
    {
        // validation for constraint: string
        if (!is_null($creationDate) && !is_string($creationDate)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($creationDate, true), gettype($creationDate)), __LINE__);
        }
        $this->CreationDate = $creationDate;
        
        return $this;
    }
    /**
     * Get Id value
     * @return int|null
     */
    public function getId(): ?int
    {
        return $this->Id;
    }
    /**
     * Set Id value
     * @param int $id
     * @return \StructType\NTechLabCameraInfo
     */
    public function setId(?int $id = null): self
    {
        // validation for constraint: int
        if (!is_null($id) && !(is_int($id) || ctype_digit($id))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($id, true), gettype($id)), __LINE__);
        }
        $this->Id = $id;
        
        return $this;
    }
    /**
     * Get ModificationDate value
     * @return string|null
     */
    public function getModificationDate(): ?string
    {
        return $this->ModificationDate;
    }
    /**
     * Set ModificationDate value
     * @param string $modificationDate
     * @return \StructType\NTechLabCameraInfo
     */
    public function setModificationDate(?string $modificationDate = null): self
    {
        // validation for constraint: string
        if (!is_null($modificationDate) && !is_string($modificationDate)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($modificationDate, true), gettype($modificationDate)), __LINE__);
        }
        $this->ModificationDate = $modificationDate;
        
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
     * @return \StructType\NTechLabCameraInfo
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
     * Get Url value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getUrl(): ?string
    {
        return isset($this->Url) ? $this->Url : null;
    }
    /**
     * Set Url value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $url
     * @return \StructType\NTechLabCameraInfo
     */
    public function setUrl(?string $url = null): self
    {
        // validation for constraint: string
        if (!is_null($url) && !is_string($url)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($url, true), gettype($url)), __LINE__);
        }
        if (is_null($url) || (is_array($url) && empty($url))) {
            unset($this->Url);
        } else {
            $this->Url = $url;
        }
        
        return $this;
    }
}
