<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for CardTypeBiometricPermission StructType
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:CardTypeBiometricPermission
 * @subpackage Structs
 */
class CardTypeBiometricPermission extends AbstractStructBase
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
     * Constructor method for CardTypeBiometricPermission
     * @uses CardTypeBiometricPermission::setCardTypeID()
     * @uses CardTypeBiometricPermission::setCardTypeName()
     * @param string $cardTypeID
     * @param string $cardTypeName
     */
    public function __construct(?string $cardTypeID = null, ?string $cardTypeName = null)
    {
        $this
            ->setCardTypeID($cardTypeID)
            ->setCardTypeName($cardTypeName);
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
     * @return \StructType\CardTypeBiometricPermission
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
     * @return \StructType\CardTypeBiometricPermission
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
}
