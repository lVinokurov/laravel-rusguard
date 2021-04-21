<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ListItem StructType
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:ListItem
 * @subpackage Structs
 */
class ListItem extends AbstractStructBase
{
    /**
     * The ID
     * Meta information extracted from the WSDL
     * - base: xs:string
     * - minOccurs: 0
     * - nillable: true
     * - pattern: [\da-fA-F]{8}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{12}
     * - type: tns:guid
     * @var string|null
     */
    protected ?string $ID = null;
    /**
     * The ItemValue
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $ItemValue = null;
    /**
     * The Order
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var int|null
     */
    protected ?int $Order = null;
    /**
     * Constructor method for ListItem
     * @uses ListItem::setID()
     * @uses ListItem::setItemValue()
     * @uses ListItem::setOrder()
     * @param string $iD
     * @param string $itemValue
     * @param int $order
     */
    public function __construct(?string $iD = null, ?string $itemValue = null, ?int $order = null)
    {
        $this
            ->setID($iD)
            ->setItemValue($itemValue)
            ->setOrder($order);
    }
    /**
     * Get ID value
     * @return string|null
     */
    public function getID(): ?string
    {
        return $this->ID;
    }
    /**
     * Set ID value
     * @param string $iD
     * @return \StructType\ListItem
     */
    public function setID(?string $iD = null): self
    {
        // validation for constraint: string
        if (!is_null($iD) && !is_string($iD)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($iD, true), gettype($iD)), __LINE__);
        }
        // validation for constraint: pattern([\da-fA-F]{8}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{12})
        if (!is_null($iD) && !preg_match('/[\\da-fA-F]{8}-[\\da-fA-F]{4}-[\\da-fA-F]{4}-[\\da-fA-F]{4}-[\\da-fA-F]{12}/', $iD)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a literal that is among the set of character sequences denoted by the regular expression /[\\da-fA-F]{8}-[\\da-fA-F]{4}-[\\da-fA-F]{4}-[\\da-fA-F]{4}-[\\da-fA-F]{12}/', var_export($iD, true)), __LINE__);
        }
        $this->ID = $iD;
        
        return $this;
    }
    /**
     * Get ItemValue value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getItemValue(): ?string
    {
        return isset($this->ItemValue) ? $this->ItemValue : null;
    }
    /**
     * Set ItemValue value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $itemValue
     * @return \StructType\ListItem
     */
    public function setItemValue(?string $itemValue = null): self
    {
        // validation for constraint: string
        if (!is_null($itemValue) && !is_string($itemValue)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($itemValue, true), gettype($itemValue)), __LINE__);
        }
        if (is_null($itemValue) || (is_array($itemValue) && empty($itemValue))) {
            unset($this->ItemValue);
        } else {
            $this->ItemValue = $itemValue;
        }
        
        return $this;
    }
    /**
     * Get Order value
     * @return int|null
     */
    public function getOrder(): ?int
    {
        return $this->Order;
    }
    /**
     * Set Order value
     * @param int $order
     * @return \StructType\ListItem
     */
    public function setOrder(?int $order = null): self
    {
        // validation for constraint: int
        if (!is_null($order) && !(is_int($order) || ctype_digit($order))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($order, true), gettype($order)), __LINE__);
        }
        $this->Order = $order;
        
        return $this;
    }
}
