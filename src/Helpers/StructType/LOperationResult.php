<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for LOperationResult StructType
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:LOperationResult
 * @subpackage Structs
 */
class LOperationResult extends AbstractStructBase
{
    /**
     * The ConnectionId
     * Meta information extracted from the WSDL
     * - base: xs:string
     * - minOccurs: 0
     * - nillable: true
     * - pattern: [\da-fA-F]{8}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{12}
     * - type: tns:guid
     * @var string|null
     */
    protected ?string $ConnectionId = null;
    /**
     * The Context
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $Context = null;
    /**
     * The Details
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $Details = null;
    /**
     * The MemberSignature
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $MemberSignature = null;
    /**
     * The OperationType
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $OperationType = null;
    /**
     * The ResourceId
     * Meta information extracted from the WSDL
     * - base: xs:string
     * - minOccurs: 0
     * - nillable: true
     * - pattern: [\da-fA-F]{8}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{12}
     * - type: tns:guid
     * @var string|null
     */
    protected ?string $ResourceId = null;
    /**
     * The ResourceType
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $ResourceType = null;
    /**
     * The ResultType
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $ResultType = null;
    /**
     * Constructor method for LOperationResult
     * @uses LOperationResult::setConnectionId()
     * @uses LOperationResult::setContext()
     * @uses LOperationResult::setDetails()
     * @uses LOperationResult::setMemberSignature()
     * @uses LOperationResult::setOperationType()
     * @uses LOperationResult::setResourceId()
     * @uses LOperationResult::setResourceType()
     * @uses LOperationResult::setResultType()
     * @param string $connectionId
     * @param string $context
     * @param string $details
     * @param string $memberSignature
     * @param string $operationType
     * @param string $resourceId
     * @param string $resourceType
     * @param string $resultType
     */
    public function __construct(?string $connectionId = null, ?string $context = null, ?string $details = null, ?string $memberSignature = null, ?string $operationType = null, ?string $resourceId = null, ?string $resourceType = null, ?string $resultType = null)
    {
        $this
            ->setConnectionId($connectionId)
            ->setContext($context)
            ->setDetails($details)
            ->setMemberSignature($memberSignature)
            ->setOperationType($operationType)
            ->setResourceId($resourceId)
            ->setResourceType($resourceType)
            ->setResultType($resultType);
    }
    /**
     * Get ConnectionId value
     * @return string|null
     */
    public function getConnectionId(): ?string
    {
        return $this->ConnectionId;
    }
    /**
     * Set ConnectionId value
     * @param string $connectionId
     * @return \StructType\LOperationResult
     */
    public function setConnectionId(?string $connectionId = null): self
    {
        // validation for constraint: string
        if (!is_null($connectionId) && !is_string($connectionId)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($connectionId, true), gettype($connectionId)), __LINE__);
        }
        // validation for constraint: pattern([\da-fA-F]{8}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{12})
        if (!is_null($connectionId) && !preg_match('/[\\da-fA-F]{8}-[\\da-fA-F]{4}-[\\da-fA-F]{4}-[\\da-fA-F]{4}-[\\da-fA-F]{12}/', $connectionId)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a literal that is among the set of character sequences denoted by the regular expression /[\\da-fA-F]{8}-[\\da-fA-F]{4}-[\\da-fA-F]{4}-[\\da-fA-F]{4}-[\\da-fA-F]{12}/', var_export($connectionId, true)), __LINE__);
        }
        $this->ConnectionId = $connectionId;
        
        return $this;
    }
    /**
     * Get Context value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getContext(): ?string
    {
        return isset($this->Context) ? $this->Context : null;
    }
    /**
     * Set Context value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $context
     * @return \StructType\LOperationResult
     */
    public function setContext(?string $context = null): self
    {
        // validation for constraint: string
        if (!is_null($context) && !is_string($context)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($context, true), gettype($context)), __LINE__);
        }
        if (is_null($context) || (is_array($context) && empty($context))) {
            unset($this->Context);
        } else {
            $this->Context = $context;
        }
        
        return $this;
    }
    /**
     * Get Details value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getDetails(): ?string
    {
        return isset($this->Details) ? $this->Details : null;
    }
    /**
     * Set Details value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $details
     * @return \StructType\LOperationResult
     */
    public function setDetails(?string $details = null): self
    {
        // validation for constraint: string
        if (!is_null($details) && !is_string($details)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($details, true), gettype($details)), __LINE__);
        }
        if (is_null($details) || (is_array($details) && empty($details))) {
            unset($this->Details);
        } else {
            $this->Details = $details;
        }
        
        return $this;
    }
    /**
     * Get MemberSignature value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getMemberSignature(): ?string
    {
        return isset($this->MemberSignature) ? $this->MemberSignature : null;
    }
    /**
     * Set MemberSignature value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $memberSignature
     * @return \StructType\LOperationResult
     */
    public function setMemberSignature(?string $memberSignature = null): self
    {
        // validation for constraint: string
        if (!is_null($memberSignature) && !is_string($memberSignature)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($memberSignature, true), gettype($memberSignature)), __LINE__);
        }
        if (is_null($memberSignature) || (is_array($memberSignature) && empty($memberSignature))) {
            unset($this->MemberSignature);
        } else {
            $this->MemberSignature = $memberSignature;
        }
        
        return $this;
    }
    /**
     * Get OperationType value
     * @return string|null
     */
    public function getOperationType(): ?string
    {
        return $this->OperationType;
    }
    /**
     * Set OperationType value
     * @uses \EnumType\OperationType::valueIsValid()
     * @uses \EnumType\OperationType::getValidValues()
     * @throws InvalidArgumentException
     * @param string $operationType
     * @return \StructType\LOperationResult
     */
    public function setOperationType(?string $operationType = null): self
    {
        // validation for constraint: enumeration
        if (!\EnumType\OperationType::valueIsValid($operationType)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \EnumType\OperationType', is_array($operationType) ? implode(', ', $operationType) : var_export($operationType, true), implode(', ', \EnumType\OperationType::getValidValues())), __LINE__);
        }
        $this->OperationType = $operationType;
        
        return $this;
    }
    /**
     * Get ResourceId value
     * @return string|null
     */
    public function getResourceId(): ?string
    {
        return $this->ResourceId;
    }
    /**
     * Set ResourceId value
     * @param string $resourceId
     * @return \StructType\LOperationResult
     */
    public function setResourceId(?string $resourceId = null): self
    {
        // validation for constraint: string
        if (!is_null($resourceId) && !is_string($resourceId)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($resourceId, true), gettype($resourceId)), __LINE__);
        }
        // validation for constraint: pattern([\da-fA-F]{8}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{12})
        if (!is_null($resourceId) && !preg_match('/[\\da-fA-F]{8}-[\\da-fA-F]{4}-[\\da-fA-F]{4}-[\\da-fA-F]{4}-[\\da-fA-F]{12}/', $resourceId)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a literal that is among the set of character sequences denoted by the regular expression /[\\da-fA-F]{8}-[\\da-fA-F]{4}-[\\da-fA-F]{4}-[\\da-fA-F]{4}-[\\da-fA-F]{12}/', var_export($resourceId, true)), __LINE__);
        }
        $this->ResourceId = $resourceId;
        
        return $this;
    }
    /**
     * Get ResourceType value
     * @return string|null
     */
    public function getResourceType(): ?string
    {
        return $this->ResourceType;
    }
    /**
     * Set ResourceType value
     * @uses \EnumType\ResourceType::valueIsValid()
     * @uses \EnumType\ResourceType::getValidValues()
     * @throws InvalidArgumentException
     * @param string $resourceType
     * @return \StructType\LOperationResult
     */
    public function setResourceType(?string $resourceType = null): self
    {
        // validation for constraint: enumeration
        if (!\EnumType\ResourceType::valueIsValid($resourceType)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \EnumType\ResourceType', is_array($resourceType) ? implode(', ', $resourceType) : var_export($resourceType, true), implode(', ', \EnumType\ResourceType::getValidValues())), __LINE__);
        }
        $this->ResourceType = $resourceType;
        
        return $this;
    }
    /**
     * Get ResultType value
     * @return string|null
     */
    public function getResultType(): ?string
    {
        return $this->ResultType;
    }
    /**
     * Set ResultType value
     * @uses \EnumType\OperationResultType::valueIsValid()
     * @uses \EnumType\OperationResultType::getValidValues()
     * @throws InvalidArgumentException
     * @param string $resultType
     * @return \StructType\LOperationResult
     */
    public function setResultType(?string $resultType = null): self
    {
        // validation for constraint: enumeration
        if (!\EnumType\OperationResultType::valueIsValid($resultType)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \EnumType\OperationResultType', is_array($resultType) ? implode(', ', $resultType) : var_export($resultType, true), implode(', ', \EnumType\OperationResultType::getValidValues())), __LINE__);
        }
        $this->ResultType = $resultType;
        
        return $this;
    }
}
