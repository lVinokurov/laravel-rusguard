<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for LServerInfo StructType
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:LServerInfo
 * @subpackage Structs
 */
class LServerInfo extends AbstractStructBase
{
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
     * The IdNet
     * Meta information extracted from the WSDL
     * - base: xs:string
     * - minOccurs: 0
     * - nillable: true
     * - pattern: [\da-fA-F]{8}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{12}
     * - type: tns:guid
     * @var string|null
     */
    protected ?string $IdNet = null;
    /**
     * The IsAttached
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var bool|null
     */
    protected ?bool $IsAttached = null;
    /**
     * The ServerType
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $ServerType = null;
    /**
     * The Url
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $Url = null;
    /**
     * Constructor method for LServerInfo
     * @uses LServerInfo::setId()
     * @uses LServerInfo::setIdNet()
     * @uses LServerInfo::setIsAttached()
     * @uses LServerInfo::setServerType()
     * @uses LServerInfo::setUrl()
     * @param string $id
     * @param string $idNet
     * @param bool $isAttached
     * @param string $serverType
     * @param string $url
     */
    public function __construct(?string $id = null, ?string $idNet = null, ?bool $isAttached = null, ?string $serverType = null, ?string $url = null)
    {
        $this
            ->setId($id)
            ->setIdNet($idNet)
            ->setIsAttached($isAttached)
            ->setServerType($serverType)
            ->setUrl($url);
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
     * @return \StructType\LServerInfo
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
     * Get IdNet value
     * @return string|null
     */
    public function getIdNet(): ?string
    {
        return $this->IdNet;
    }
    /**
     * Set IdNet value
     * @param string $idNet
     * @return \StructType\LServerInfo
     */
    public function setIdNet(?string $idNet = null): self
    {
        // validation for constraint: string
        if (!is_null($idNet) && !is_string($idNet)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($idNet, true), gettype($idNet)), __LINE__);
        }
        // validation for constraint: pattern([\da-fA-F]{8}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{12})
        if (!is_null($idNet) && !preg_match('/[\\da-fA-F]{8}-[\\da-fA-F]{4}-[\\da-fA-F]{4}-[\\da-fA-F]{4}-[\\da-fA-F]{12}/', $idNet)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a literal that is among the set of character sequences denoted by the regular expression /[\\da-fA-F]{8}-[\\da-fA-F]{4}-[\\da-fA-F]{4}-[\\da-fA-F]{4}-[\\da-fA-F]{12}/', var_export($idNet, true)), __LINE__);
        }
        $this->IdNet = $idNet;
        
        return $this;
    }
    /**
     * Get IsAttached value
     * @return bool|null
     */
    public function getIsAttached(): ?bool
    {
        return $this->IsAttached;
    }
    /**
     * Set IsAttached value
     * @param bool $isAttached
     * @return \StructType\LServerInfo
     */
    public function setIsAttached(?bool $isAttached = null): self
    {
        // validation for constraint: boolean
        if (!is_null($isAttached) && !is_bool($isAttached)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($isAttached, true), gettype($isAttached)), __LINE__);
        }
        $this->IsAttached = $isAttached;
        
        return $this;
    }
    /**
     * Get ServerType value
     * @return string|null
     */
    public function getServerType(): ?string
    {
        return $this->ServerType;
    }
    /**
     * Set ServerType value
     * @uses \EnumType\ServerType::valueIsValid()
     * @uses \EnumType\ServerType::getValidValues()
     * @throws InvalidArgumentException
     * @param string $serverType
     * @return \StructType\LServerInfo
     */
    public function setServerType(?string $serverType = null): self
    {
        // validation for constraint: enumeration
        if (!\EnumType\ServerType::valueIsValid($serverType)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \EnumType\ServerType', is_array($serverType) ? implode(', ', $serverType) : var_export($serverType, true), implode(', ', \EnumType\ServerType::getValidValues())), __LINE__);
        }
        $this->ServerType = $serverType;
        
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
     * @return \StructType\LServerInfo
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
