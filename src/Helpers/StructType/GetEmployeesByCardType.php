<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetEmployeesByCardType StructType
 * @subpackage Structs
 */
class GetEmployeesByCardType extends AbstractStructBase
{
    /**
     * The cardType
     * Meta information extracted from the WSDL
     * - base: xs:string
     * - minOccurs: 0
     * - nillable: true
     * - pattern: [\da-fA-F]{8}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{12}
     * - type: tns:guid
     * @var string|null
     */
    protected ?string $cardType = null;
    /**
     * The moficationDateTime
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $moficationDateTime = null;
    /**
     * Constructor method for GetEmployeesByCardType
     * @uses GetEmployeesByCardType::setCardType()
     * @uses GetEmployeesByCardType::setMoficationDateTime()
     * @param string $cardType
     * @param string $moficationDateTime
     */
    public function __construct(?string $cardType = null, ?string $moficationDateTime = null)
    {
        $this
            ->setCardType($cardType)
            ->setMoficationDateTime($moficationDateTime);
    }
    /**
     * Get cardType value
     * @return string|null
     */
    public function getCardType(): ?string
    {
        return $this->cardType;
    }
    /**
     * Set cardType value
     * @param string $cardType
     * @return \StructType\GetEmployeesByCardType
     */
    public function setCardType(?string $cardType = null): self
    {
        // validation for constraint: string
        if (!is_null($cardType) && !is_string($cardType)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($cardType, true), gettype($cardType)), __LINE__);
        }
        // validation for constraint: pattern([\da-fA-F]{8}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{12})
        if (!is_null($cardType) && !preg_match('/[\\da-fA-F]{8}-[\\da-fA-F]{4}-[\\da-fA-F]{4}-[\\da-fA-F]{4}-[\\da-fA-F]{12}/', $cardType)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a literal that is among the set of character sequences denoted by the regular expression /[\\da-fA-F]{8}-[\\da-fA-F]{4}-[\\da-fA-F]{4}-[\\da-fA-F]{4}-[\\da-fA-F]{12}/', var_export($cardType, true)), __LINE__);
        }
        $this->cardType = $cardType;
        
        return $this;
    }
    /**
     * Get moficationDateTime value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getMoficationDateTime(): ?string
    {
        return isset($this->moficationDateTime) ? $this->moficationDateTime : null;
    }
    /**
     * Set moficationDateTime value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $moficationDateTime
     * @return \StructType\GetEmployeesByCardType
     */
    public function setMoficationDateTime(?string $moficationDateTime = null): self
    {
        // validation for constraint: string
        if (!is_null($moficationDateTime) && !is_string($moficationDateTime)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($moficationDateTime, true), gettype($moficationDateTime)), __LINE__);
        }
        if (is_null($moficationDateTime) || (is_array($moficationDateTime) && empty($moficationDateTime))) {
            unset($this->moficationDateTime);
        } else {
            $this->moficationDateTime = $moficationDateTime;
        }
        
        return $this;
    }
}
