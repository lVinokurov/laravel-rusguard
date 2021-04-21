<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ReactionSendSMSActionSaveData StructType
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:ReactionSendSMSActionSaveData
 * @subpackage Structs
 */
class ReactionSendSMSActionSaveData extends AbstractStructBase
{
    /**
     * The CustomText
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $CustomText = null;
    /**
     * The GsmModemDriverId
     * Meta information extracted from the WSDL
     * - base: xs:string
     * - minOccurs: 0
     * - nillable: true
     * - pattern: [\da-fA-F]{8}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{12}
     * - type: tns:guid
     * @var string|null
     */
    protected ?string $GsmModemDriverId = null;
    /**
     * The NumbersToSendSMSForEmployeesFromEvents
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \ArrayType\ArrayOfint|null
     */
    protected ?\ArrayType\ArrayOfint $NumbersToSendSMSForEmployeesFromEvents = null;
    /**
     * The NumbersToSendSMSForEmployeesFromList
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \ArrayType\ArrayOfint|null
     */
    protected ?\ArrayType\ArrayOfint $NumbersToSendSMSForEmployeesFromList = null;
    /**
     * The SendCustomText
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var bool|null
     */
    protected ?bool $SendCustomText = null;
    /**
     * The SendToAllPhoneNumbersOfEmployeesFromEvents
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var bool|null
     */
    protected ?bool $SendToAllPhoneNumbersOfEmployeesFromEvents = null;
    /**
     * The SendToAllPhoneNumbersOfEmployeesFromList
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var bool|null
     */
    protected ?bool $SendToAllPhoneNumbersOfEmployeesFromList = null;
    /**
     * The WhetherToSendEmployeesFromEvents
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var bool|null
     */
    protected ?bool $WhetherToSendEmployeesFromEvents = null;
    /**
     * The WhetherToSendEmployeesFromList
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var bool|null
     */
    protected ?bool $WhetherToSendEmployeesFromList = null;
    /**
     * Constructor method for ReactionSendSMSActionSaveData
     * @uses ReactionSendSMSActionSaveData::setCustomText()
     * @uses ReactionSendSMSActionSaveData::setGsmModemDriverId()
     * @uses ReactionSendSMSActionSaveData::setNumbersToSendSMSForEmployeesFromEvents()
     * @uses ReactionSendSMSActionSaveData::setNumbersToSendSMSForEmployeesFromList()
     * @uses ReactionSendSMSActionSaveData::setSendCustomText()
     * @uses ReactionSendSMSActionSaveData::setSendToAllPhoneNumbersOfEmployeesFromEvents()
     * @uses ReactionSendSMSActionSaveData::setSendToAllPhoneNumbersOfEmployeesFromList()
     * @uses ReactionSendSMSActionSaveData::setWhetherToSendEmployeesFromEvents()
     * @uses ReactionSendSMSActionSaveData::setWhetherToSendEmployeesFromList()
     * @param string $customText
     * @param string $gsmModemDriverId
     * @param \ArrayType\ArrayOfint $numbersToSendSMSForEmployeesFromEvents
     * @param \ArrayType\ArrayOfint $numbersToSendSMSForEmployeesFromList
     * @param bool $sendCustomText
     * @param bool $sendToAllPhoneNumbersOfEmployeesFromEvents
     * @param bool $sendToAllPhoneNumbersOfEmployeesFromList
     * @param bool $whetherToSendEmployeesFromEvents
     * @param bool $whetherToSendEmployeesFromList
     */
    public function __construct(?string $customText = null, ?string $gsmModemDriverId = null, ?\ArrayType\ArrayOfint $numbersToSendSMSForEmployeesFromEvents = null, ?\ArrayType\ArrayOfint $numbersToSendSMSForEmployeesFromList = null, ?bool $sendCustomText = null, ?bool $sendToAllPhoneNumbersOfEmployeesFromEvents = null, ?bool $sendToAllPhoneNumbersOfEmployeesFromList = null, ?bool $whetherToSendEmployeesFromEvents = null, ?bool $whetherToSendEmployeesFromList = null)
    {
        $this
            ->setCustomText($customText)
            ->setGsmModemDriverId($gsmModemDriverId)
            ->setNumbersToSendSMSForEmployeesFromEvents($numbersToSendSMSForEmployeesFromEvents)
            ->setNumbersToSendSMSForEmployeesFromList($numbersToSendSMSForEmployeesFromList)
            ->setSendCustomText($sendCustomText)
            ->setSendToAllPhoneNumbersOfEmployeesFromEvents($sendToAllPhoneNumbersOfEmployeesFromEvents)
            ->setSendToAllPhoneNumbersOfEmployeesFromList($sendToAllPhoneNumbersOfEmployeesFromList)
            ->setWhetherToSendEmployeesFromEvents($whetherToSendEmployeesFromEvents)
            ->setWhetherToSendEmployeesFromList($whetherToSendEmployeesFromList);
    }
    /**
     * Get CustomText value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getCustomText(): ?string
    {
        return isset($this->CustomText) ? $this->CustomText : null;
    }
    /**
     * Set CustomText value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $customText
     * @return \StructType\ReactionSendSMSActionSaveData
     */
    public function setCustomText(?string $customText = null): self
    {
        // validation for constraint: string
        if (!is_null($customText) && !is_string($customText)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($customText, true), gettype($customText)), __LINE__);
        }
        if (is_null($customText) || (is_array($customText) && empty($customText))) {
            unset($this->CustomText);
        } else {
            $this->CustomText = $customText;
        }
        
        return $this;
    }
    /**
     * Get GsmModemDriverId value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getGsmModemDriverId(): ?string
    {
        return isset($this->GsmModemDriverId) ? $this->GsmModemDriverId : null;
    }
    /**
     * Set GsmModemDriverId value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $gsmModemDriverId
     * @return \StructType\ReactionSendSMSActionSaveData
     */
    public function setGsmModemDriverId(?string $gsmModemDriverId = null): self
    {
        // validation for constraint: string
        if (!is_null($gsmModemDriverId) && !is_string($gsmModemDriverId)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($gsmModemDriverId, true), gettype($gsmModemDriverId)), __LINE__);
        }
        // validation for constraint: pattern([\da-fA-F]{8}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{12})
        if (!is_null($gsmModemDriverId) && !preg_match('/[\\da-fA-F]{8}-[\\da-fA-F]{4}-[\\da-fA-F]{4}-[\\da-fA-F]{4}-[\\da-fA-F]{12}/', $gsmModemDriverId)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a literal that is among the set of character sequences denoted by the regular expression /[\\da-fA-F]{8}-[\\da-fA-F]{4}-[\\da-fA-F]{4}-[\\da-fA-F]{4}-[\\da-fA-F]{12}/', var_export($gsmModemDriverId, true)), __LINE__);
        }
        if (is_null($gsmModemDriverId) || (is_array($gsmModemDriverId) && empty($gsmModemDriverId))) {
            unset($this->GsmModemDriverId);
        } else {
            $this->GsmModemDriverId = $gsmModemDriverId;
        }
        
        return $this;
    }
    /**
     * Get NumbersToSendSMSForEmployeesFromEvents value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \ArrayType\ArrayOfint|null
     */
    public function getNumbersToSendSMSForEmployeesFromEvents(): ?\ArrayType\ArrayOfint
    {
        return isset($this->NumbersToSendSMSForEmployeesFromEvents) ? $this->NumbersToSendSMSForEmployeesFromEvents : null;
    }
    /**
     * Set NumbersToSendSMSForEmployeesFromEvents value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \ArrayType\ArrayOfint $numbersToSendSMSForEmployeesFromEvents
     * @return \StructType\ReactionSendSMSActionSaveData
     */
    public function setNumbersToSendSMSForEmployeesFromEvents(?\ArrayType\ArrayOfint $numbersToSendSMSForEmployeesFromEvents = null): self
    {
        if (is_null($numbersToSendSMSForEmployeesFromEvents) || (is_array($numbersToSendSMSForEmployeesFromEvents) && empty($numbersToSendSMSForEmployeesFromEvents))) {
            unset($this->NumbersToSendSMSForEmployeesFromEvents);
        } else {
            $this->NumbersToSendSMSForEmployeesFromEvents = $numbersToSendSMSForEmployeesFromEvents;
        }
        
        return $this;
    }
    /**
     * Get NumbersToSendSMSForEmployeesFromList value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \ArrayType\ArrayOfint|null
     */
    public function getNumbersToSendSMSForEmployeesFromList(): ?\ArrayType\ArrayOfint
    {
        return isset($this->NumbersToSendSMSForEmployeesFromList) ? $this->NumbersToSendSMSForEmployeesFromList : null;
    }
    /**
     * Set NumbersToSendSMSForEmployeesFromList value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \ArrayType\ArrayOfint $numbersToSendSMSForEmployeesFromList
     * @return \StructType\ReactionSendSMSActionSaveData
     */
    public function setNumbersToSendSMSForEmployeesFromList(?\ArrayType\ArrayOfint $numbersToSendSMSForEmployeesFromList = null): self
    {
        if (is_null($numbersToSendSMSForEmployeesFromList) || (is_array($numbersToSendSMSForEmployeesFromList) && empty($numbersToSendSMSForEmployeesFromList))) {
            unset($this->NumbersToSendSMSForEmployeesFromList);
        } else {
            $this->NumbersToSendSMSForEmployeesFromList = $numbersToSendSMSForEmployeesFromList;
        }
        
        return $this;
    }
    /**
     * Get SendCustomText value
     * @return bool|null
     */
    public function getSendCustomText(): ?bool
    {
        return $this->SendCustomText;
    }
    /**
     * Set SendCustomText value
     * @param bool $sendCustomText
     * @return \StructType\ReactionSendSMSActionSaveData
     */
    public function setSendCustomText(?bool $sendCustomText = null): self
    {
        // validation for constraint: boolean
        if (!is_null($sendCustomText) && !is_bool($sendCustomText)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($sendCustomText, true), gettype($sendCustomText)), __LINE__);
        }
        $this->SendCustomText = $sendCustomText;
        
        return $this;
    }
    /**
     * Get SendToAllPhoneNumbersOfEmployeesFromEvents value
     * @return bool|null
     */
    public function getSendToAllPhoneNumbersOfEmployeesFromEvents(): ?bool
    {
        return $this->SendToAllPhoneNumbersOfEmployeesFromEvents;
    }
    /**
     * Set SendToAllPhoneNumbersOfEmployeesFromEvents value
     * @param bool $sendToAllPhoneNumbersOfEmployeesFromEvents
     * @return \StructType\ReactionSendSMSActionSaveData
     */
    public function setSendToAllPhoneNumbersOfEmployeesFromEvents(?bool $sendToAllPhoneNumbersOfEmployeesFromEvents = null): self
    {
        // validation for constraint: boolean
        if (!is_null($sendToAllPhoneNumbersOfEmployeesFromEvents) && !is_bool($sendToAllPhoneNumbersOfEmployeesFromEvents)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($sendToAllPhoneNumbersOfEmployeesFromEvents, true), gettype($sendToAllPhoneNumbersOfEmployeesFromEvents)), __LINE__);
        }
        $this->SendToAllPhoneNumbersOfEmployeesFromEvents = $sendToAllPhoneNumbersOfEmployeesFromEvents;
        
        return $this;
    }
    /**
     * Get SendToAllPhoneNumbersOfEmployeesFromList value
     * @return bool|null
     */
    public function getSendToAllPhoneNumbersOfEmployeesFromList(): ?bool
    {
        return $this->SendToAllPhoneNumbersOfEmployeesFromList;
    }
    /**
     * Set SendToAllPhoneNumbersOfEmployeesFromList value
     * @param bool $sendToAllPhoneNumbersOfEmployeesFromList
     * @return \StructType\ReactionSendSMSActionSaveData
     */
    public function setSendToAllPhoneNumbersOfEmployeesFromList(?bool $sendToAllPhoneNumbersOfEmployeesFromList = null): self
    {
        // validation for constraint: boolean
        if (!is_null($sendToAllPhoneNumbersOfEmployeesFromList) && !is_bool($sendToAllPhoneNumbersOfEmployeesFromList)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($sendToAllPhoneNumbersOfEmployeesFromList, true), gettype($sendToAllPhoneNumbersOfEmployeesFromList)), __LINE__);
        }
        $this->SendToAllPhoneNumbersOfEmployeesFromList = $sendToAllPhoneNumbersOfEmployeesFromList;
        
        return $this;
    }
    /**
     * Get WhetherToSendEmployeesFromEvents value
     * @return bool|null
     */
    public function getWhetherToSendEmployeesFromEvents(): ?bool
    {
        return $this->WhetherToSendEmployeesFromEvents;
    }
    /**
     * Set WhetherToSendEmployeesFromEvents value
     * @param bool $whetherToSendEmployeesFromEvents
     * @return \StructType\ReactionSendSMSActionSaveData
     */
    public function setWhetherToSendEmployeesFromEvents(?bool $whetherToSendEmployeesFromEvents = null): self
    {
        // validation for constraint: boolean
        if (!is_null($whetherToSendEmployeesFromEvents) && !is_bool($whetherToSendEmployeesFromEvents)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($whetherToSendEmployeesFromEvents, true), gettype($whetherToSendEmployeesFromEvents)), __LINE__);
        }
        $this->WhetherToSendEmployeesFromEvents = $whetherToSendEmployeesFromEvents;
        
        return $this;
    }
    /**
     * Get WhetherToSendEmployeesFromList value
     * @return bool|null
     */
    public function getWhetherToSendEmployeesFromList(): ?bool
    {
        return $this->WhetherToSendEmployeesFromList;
    }
    /**
     * Set WhetherToSendEmployeesFromList value
     * @param bool $whetherToSendEmployeesFromList
     * @return \StructType\ReactionSendSMSActionSaveData
     */
    public function setWhetherToSendEmployeesFromList(?bool $whetherToSendEmployeesFromList = null): self
    {
        // validation for constraint: boolean
        if (!is_null($whetherToSendEmployeesFromList) && !is_bool($whetherToSendEmployeesFromList)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($whetherToSendEmployeesFromList, true), gettype($whetherToSendEmployeesFromList)), __LINE__);
        }
        $this->WhetherToSendEmployeesFromList = $whetherToSendEmployeesFromList;
        
        return $this;
    }
}
