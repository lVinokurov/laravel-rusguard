<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for AcsScheduleSlimInfo StructType
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:AcsScheduleSlimInfo
 * @subpackage Structs
 */
class AcsScheduleSlimInfo extends AbstractStructBase
{
    /**
     * The AcsScheduleType
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $AcsScheduleType = null;
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
     * Constructor method for AcsScheduleSlimInfo
     * @uses AcsScheduleSlimInfo::setAcsScheduleType()
     * @uses AcsScheduleSlimInfo::setId()
     * @uses AcsScheduleSlimInfo::setName()
     * @param string $acsScheduleType
     * @param string $id
     * @param string $name
     */
    public function __construct(?string $acsScheduleType = null, ?string $id = null, ?string $name = null)
    {
        $this
            ->setAcsScheduleType($acsScheduleType)
            ->setId($id)
            ->setName($name);
    }
    /**
     * Get AcsScheduleType value
     * @return string|null
     */
    public function getAcsScheduleType(): ?string
    {
        return $this->AcsScheduleType;
    }
    /**
     * Set AcsScheduleType value
     * @uses \EnumType\AcsScheduleType::valueIsValid()
     * @uses \EnumType\AcsScheduleType::getValidValues()
     * @throws InvalidArgumentException
     * @param string $acsScheduleType
     * @return \StructType\AcsScheduleSlimInfo
     */
    public function setAcsScheduleType(?string $acsScheduleType = null): self
    {
        // validation for constraint: enumeration
        if (!\EnumType\AcsScheduleType::valueIsValid($acsScheduleType)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \EnumType\AcsScheduleType', is_array($acsScheduleType) ? implode(', ', $acsScheduleType) : var_export($acsScheduleType, true), implode(', ', \EnumType\AcsScheduleType::getValidValues())), __LINE__);
        }
        $this->AcsScheduleType = $acsScheduleType;
        
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
     * @return \StructType\AcsScheduleSlimInfo
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
     * @return \StructType\AcsScheduleSlimInfo
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
}
