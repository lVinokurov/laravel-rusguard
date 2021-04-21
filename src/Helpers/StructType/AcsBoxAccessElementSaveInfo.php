<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for AcsBoxAccessElementSaveInfo StructType
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:AcsBoxAccessElementSaveInfo
 * @subpackage Structs
 */
class AcsBoxAccessElementSaveInfo extends AbstractStructBase
{
    /**
     * The Access
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var bool|null
     */
    protected ?bool $Access = null;
    /**
     * The AcsBoxAccessLevelId
     * Meta information extracted from the WSDL
     * - base: xs:string
     * - minOccurs: 0
     * - nillable: true
     * - pattern: [\da-fA-F]{8}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{12}
     * - type: tns:guid
     * @var string|null
     */
    protected ?string $AcsBoxAccessLevelId = null;
    /**
     * The Name
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $Name = null;
    /**
     * The Position
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var int|null
     */
    protected ?int $Position = null;
    /**
     * Constructor method for AcsBoxAccessElementSaveInfo
     * @uses AcsBoxAccessElementSaveInfo::setAccess()
     * @uses AcsBoxAccessElementSaveInfo::setAcsBoxAccessLevelId()
     * @uses AcsBoxAccessElementSaveInfo::setName()
     * @uses AcsBoxAccessElementSaveInfo::setPosition()
     * @param bool $access
     * @param string $acsBoxAccessLevelId
     * @param string $name
     * @param int $position
     */
    public function __construct(?bool $access = null, ?string $acsBoxAccessLevelId = null, ?string $name = null, ?int $position = null)
    {
        $this
            ->setAccess($access)
            ->setAcsBoxAccessLevelId($acsBoxAccessLevelId)
            ->setName($name)
            ->setPosition($position);
    }
    /**
     * Get Access value
     * @return bool|null
     */
    public function getAccess(): ?bool
    {
        return $this->Access;
    }
    /**
     * Set Access value
     * @param bool $access
     * @return \StructType\AcsBoxAccessElementSaveInfo
     */
    public function setAccess(?bool $access = null): self
    {
        // validation for constraint: boolean
        if (!is_null($access) && !is_bool($access)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($access, true), gettype($access)), __LINE__);
        }
        $this->Access = $access;
        
        return $this;
    }
    /**
     * Get AcsBoxAccessLevelId value
     * @return string|null
     */
    public function getAcsBoxAccessLevelId(): ?string
    {
        return $this->AcsBoxAccessLevelId;
    }
    /**
     * Set AcsBoxAccessLevelId value
     * @param string $acsBoxAccessLevelId
     * @return \StructType\AcsBoxAccessElementSaveInfo
     */
    public function setAcsBoxAccessLevelId(?string $acsBoxAccessLevelId = null): self
    {
        // validation for constraint: string
        if (!is_null($acsBoxAccessLevelId) && !is_string($acsBoxAccessLevelId)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($acsBoxAccessLevelId, true), gettype($acsBoxAccessLevelId)), __LINE__);
        }
        // validation for constraint: pattern([\da-fA-F]{8}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{12})
        if (!is_null($acsBoxAccessLevelId) && !preg_match('/[\\da-fA-F]{8}-[\\da-fA-F]{4}-[\\da-fA-F]{4}-[\\da-fA-F]{4}-[\\da-fA-F]{12}/', $acsBoxAccessLevelId)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a literal that is among the set of character sequences denoted by the regular expression /[\\da-fA-F]{8}-[\\da-fA-F]{4}-[\\da-fA-F]{4}-[\\da-fA-F]{4}-[\\da-fA-F]{12}/', var_export($acsBoxAccessLevelId, true)), __LINE__);
        }
        $this->AcsBoxAccessLevelId = $acsBoxAccessLevelId;
        
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
     * @return \StructType\AcsBoxAccessElementSaveInfo
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
     * Get Position value
     * @return int|null
     */
    public function getPosition(): ?int
    {
        return $this->Position;
    }
    /**
     * Set Position value
     * @param int $position
     * @return \StructType\AcsBoxAccessElementSaveInfo
     */
    public function setPosition(?int $position = null): self
    {
        // validation for constraint: int
        if (!is_null($position) && !(is_int($position) || ctype_digit($position))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($position, true), gettype($position)), __LINE__);
        }
        $this->Position = $position;
        
        return $this;
    }
}
