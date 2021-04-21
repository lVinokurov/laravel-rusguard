<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SendEmail StructType
 * @subpackage Structs
 */
class SendEmail extends AbstractStructBase
{
    /**
     * The emailDistributionAddressId
     * Meta information extracted from the WSDL
     * - base: xs:string
     * - minOccurs: 0
     * - nillable: true
     * - pattern: [\da-fA-F]{8}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{12}
     * - type: tns:guid
     * @var string|null
     */
    protected ?string $emailDistributionAddressId = null;
    /**
     * The subject
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $subject = null;
    /**
     * The message
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $message = null;
    /**
     * The toEmailAddress
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $toEmailAddress = null;
    /**
     * Constructor method for SendEmail
     * @uses SendEmail::setEmailDistributionAddressId()
     * @uses SendEmail::setSubject()
     * @uses SendEmail::setMessage()
     * @uses SendEmail::setToEmailAddress()
     * @param string $emailDistributionAddressId
     * @param string $subject
     * @param string $message
     * @param string $toEmailAddress
     */
    public function __construct(?string $emailDistributionAddressId = null, ?string $subject = null, ?string $message = null, ?string $toEmailAddress = null)
    {
        $this
            ->setEmailDistributionAddressId($emailDistributionAddressId)
            ->setSubject($subject)
            ->setMessage($message)
            ->setToEmailAddress($toEmailAddress);
    }
    /**
     * Get emailDistributionAddressId value
     * @return string|null
     */
    public function getEmailDistributionAddressId(): ?string
    {
        return $this->emailDistributionAddressId;
    }
    /**
     * Set emailDistributionAddressId value
     * @param string $emailDistributionAddressId
     * @return \StructType\SendEmail
     */
    public function setEmailDistributionAddressId(?string $emailDistributionAddressId = null): self
    {
        // validation for constraint: string
        if (!is_null($emailDistributionAddressId) && !is_string($emailDistributionAddressId)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($emailDistributionAddressId, true), gettype($emailDistributionAddressId)), __LINE__);
        }
        // validation for constraint: pattern([\da-fA-F]{8}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{12})
        if (!is_null($emailDistributionAddressId) && !preg_match('/[\\da-fA-F]{8}-[\\da-fA-F]{4}-[\\da-fA-F]{4}-[\\da-fA-F]{4}-[\\da-fA-F]{12}/', $emailDistributionAddressId)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a literal that is among the set of character sequences denoted by the regular expression /[\\da-fA-F]{8}-[\\da-fA-F]{4}-[\\da-fA-F]{4}-[\\da-fA-F]{4}-[\\da-fA-F]{12}/', var_export($emailDistributionAddressId, true)), __LINE__);
        }
        $this->emailDistributionAddressId = $emailDistributionAddressId;
        
        return $this;
    }
    /**
     * Get subject value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getSubject(): ?string
    {
        return isset($this->subject) ? $this->subject : null;
    }
    /**
     * Set subject value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $subject
     * @return \StructType\SendEmail
     */
    public function setSubject(?string $subject = null): self
    {
        // validation for constraint: string
        if (!is_null($subject) && !is_string($subject)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($subject, true), gettype($subject)), __LINE__);
        }
        if (is_null($subject) || (is_array($subject) && empty($subject))) {
            unset($this->subject);
        } else {
            $this->subject = $subject;
        }
        
        return $this;
    }
    /**
     * Get message value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getMessage(): ?string
    {
        return isset($this->message) ? $this->message : null;
    }
    /**
     * Set message value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $message
     * @return \StructType\SendEmail
     */
    public function setMessage(?string $message = null): self
    {
        // validation for constraint: string
        if (!is_null($message) && !is_string($message)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($message, true), gettype($message)), __LINE__);
        }
        if (is_null($message) || (is_array($message) && empty($message))) {
            unset($this->message);
        } else {
            $this->message = $message;
        }
        
        return $this;
    }
    /**
     * Get toEmailAddress value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getToEmailAddress(): ?string
    {
        return isset($this->toEmailAddress) ? $this->toEmailAddress : null;
    }
    /**
     * Set toEmailAddress value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $toEmailAddress
     * @return \StructType\SendEmail
     */
    public function setToEmailAddress(?string $toEmailAddress = null): self
    {
        // validation for constraint: string
        if (!is_null($toEmailAddress) && !is_string($toEmailAddress)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($toEmailAddress, true), gettype($toEmailAddress)), __LINE__);
        }
        if (is_null($toEmailAddress) || (is_array($toEmailAddress) && empty($toEmailAddress))) {
            unset($this->toEmailAddress);
        } else {
            $this->toEmailAddress = $toEmailAddress;
        }
        
        return $this;
    }
}
