<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ReactionSendEmailActionSaveData StructType
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:ReactionSendEmailActionSaveData
 * @subpackage Structs
 */
class ReactionSendEmailActionSaveData extends AbstractStructBase
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
     * The EmailDistributionAddressId
     * Meta information extracted from the WSDL
     * - base: xs:string
     * - minOccurs: 0
     * - nillable: true
     * - pattern: [\da-fA-F]{8}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{12}
     * - type: tns:guid
     * @var string|null
     */
    protected ?string $EmailDistributionAddressId = null;
    /**
     * The NumbersToSendEmailForEmployeesFromEvents
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \ArrayType\ArrayOfint|null
     */
    protected ?\ArrayType\ArrayOfint $NumbersToSendEmailForEmployeesFromEvents = null;
    /**
     * The NumbersToSendEmailForEmployeesFromList
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \ArrayType\ArrayOfint|null
     */
    protected ?\ArrayType\ArrayOfint $NumbersToSendEmailForEmployeesFromList = null;
    /**
     * The SendCustomText
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var bool|null
     */
    protected ?bool $SendCustomText = null;
    /**
     * The SendToAllEmailAddressesOfEmployeesFromEvents
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var bool|null
     */
    protected ?bool $SendToAllEmailAddressesOfEmployeesFromEvents = null;
    /**
     * The SendToAllEmailAddressesOfEmployeesFromList
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var bool|null
     */
    protected ?bool $SendToAllEmailAddressesOfEmployeesFromList = null;
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
     * Constructor method for ReactionSendEmailActionSaveData
     * @uses ReactionSendEmailActionSaveData::setCustomText()
     * @uses ReactionSendEmailActionSaveData::setEmailDistributionAddressId()
     * @uses ReactionSendEmailActionSaveData::setNumbersToSendEmailForEmployeesFromEvents()
     * @uses ReactionSendEmailActionSaveData::setNumbersToSendEmailForEmployeesFromList()
     * @uses ReactionSendEmailActionSaveData::setSendCustomText()
     * @uses ReactionSendEmailActionSaveData::setSendToAllEmailAddressesOfEmployeesFromEvents()
     * @uses ReactionSendEmailActionSaveData::setSendToAllEmailAddressesOfEmployeesFromList()
     * @uses ReactionSendEmailActionSaveData::setWhetherToSendEmployeesFromEvents()
     * @uses ReactionSendEmailActionSaveData::setWhetherToSendEmployeesFromList()
     * @param string $customText
     * @param string $emailDistributionAddressId
     * @param \ArrayType\ArrayOfint $numbersToSendEmailForEmployeesFromEvents
     * @param \ArrayType\ArrayOfint $numbersToSendEmailForEmployeesFromList
     * @param bool $sendCustomText
     * @param bool $sendToAllEmailAddressesOfEmployeesFromEvents
     * @param bool $sendToAllEmailAddressesOfEmployeesFromList
     * @param bool $whetherToSendEmployeesFromEvents
     * @param bool $whetherToSendEmployeesFromList
     */
    public function __construct(?string $customText = null, ?string $emailDistributionAddressId = null, ?\ArrayType\ArrayOfint $numbersToSendEmailForEmployeesFromEvents = null, ?\ArrayType\ArrayOfint $numbersToSendEmailForEmployeesFromList = null, ?bool $sendCustomText = null, ?bool $sendToAllEmailAddressesOfEmployeesFromEvents = null, ?bool $sendToAllEmailAddressesOfEmployeesFromList = null, ?bool $whetherToSendEmployeesFromEvents = null, ?bool $whetherToSendEmployeesFromList = null)
    {
        $this
            ->setCustomText($customText)
            ->setEmailDistributionAddressId($emailDistributionAddressId)
            ->setNumbersToSendEmailForEmployeesFromEvents($numbersToSendEmailForEmployeesFromEvents)
            ->setNumbersToSendEmailForEmployeesFromList($numbersToSendEmailForEmployeesFromList)
            ->setSendCustomText($sendCustomText)
            ->setSendToAllEmailAddressesOfEmployeesFromEvents($sendToAllEmailAddressesOfEmployeesFromEvents)
            ->setSendToAllEmailAddressesOfEmployeesFromList($sendToAllEmailAddressesOfEmployeesFromList)
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
     * @return \StructType\ReactionSendEmailActionSaveData
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
     * Get EmailDistributionAddressId value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getEmailDistributionAddressId(): ?string
    {
        return isset($this->EmailDistributionAddressId) ? $this->EmailDistributionAddressId : null;
    }
    /**
     * Set EmailDistributionAddressId value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $emailDistributionAddressId
     * @return \StructType\ReactionSendEmailActionSaveData
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
        if (is_null($emailDistributionAddressId) || (is_array($emailDistributionAddressId) && empty($emailDistributionAddressId))) {
            unset($this->EmailDistributionAddressId);
        } else {
            $this->EmailDistributionAddressId = $emailDistributionAddressId;
        }
        
        return $this;
    }
    /**
     * Get NumbersToSendEmailForEmployeesFromEvents value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \ArrayType\ArrayOfint|null
     */
    public function getNumbersToSendEmailForEmployeesFromEvents(): ?\ArrayType\ArrayOfint
    {
        return isset($this->NumbersToSendEmailForEmployeesFromEvents) ? $this->NumbersToSendEmailForEmployeesFromEvents : null;
    }
    /**
     * Set NumbersToSendEmailForEmployeesFromEvents value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \ArrayType\ArrayOfint $numbersToSendEmailForEmployeesFromEvents
     * @return \StructType\ReactionSendEmailActionSaveData
     */
    public function setNumbersToSendEmailForEmployeesFromEvents(?\ArrayType\ArrayOfint $numbersToSendEmailForEmployeesFromEvents = null): self
    {
        if (is_null($numbersToSendEmailForEmployeesFromEvents) || (is_array($numbersToSendEmailForEmployeesFromEvents) && empty($numbersToSendEmailForEmployeesFromEvents))) {
            unset($this->NumbersToSendEmailForEmployeesFromEvents);
        } else {
            $this->NumbersToSendEmailForEmployeesFromEvents = $numbersToSendEmailForEmployeesFromEvents;
        }
        
        return $this;
    }
    /**
     * Get NumbersToSendEmailForEmployeesFromList value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \ArrayType\ArrayOfint|null
     */
    public function getNumbersToSendEmailForEmployeesFromList(): ?\ArrayType\ArrayOfint
    {
        return isset($this->NumbersToSendEmailForEmployeesFromList) ? $this->NumbersToSendEmailForEmployeesFromList : null;
    }
    /**
     * Set NumbersToSendEmailForEmployeesFromList value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \ArrayType\ArrayOfint $numbersToSendEmailForEmployeesFromList
     * @return \StructType\ReactionSendEmailActionSaveData
     */
    public function setNumbersToSendEmailForEmployeesFromList(?\ArrayType\ArrayOfint $numbersToSendEmailForEmployeesFromList = null): self
    {
        if (is_null($numbersToSendEmailForEmployeesFromList) || (is_array($numbersToSendEmailForEmployeesFromList) && empty($numbersToSendEmailForEmployeesFromList))) {
            unset($this->NumbersToSendEmailForEmployeesFromList);
        } else {
            $this->NumbersToSendEmailForEmployeesFromList = $numbersToSendEmailForEmployeesFromList;
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
     * @return \StructType\ReactionSendEmailActionSaveData
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
     * Get SendToAllEmailAddressesOfEmployeesFromEvents value
     * @return bool|null
     */
    public function getSendToAllEmailAddressesOfEmployeesFromEvents(): ?bool
    {
        return $this->SendToAllEmailAddressesOfEmployeesFromEvents;
    }
    /**
     * Set SendToAllEmailAddressesOfEmployeesFromEvents value
     * @param bool $sendToAllEmailAddressesOfEmployeesFromEvents
     * @return \StructType\ReactionSendEmailActionSaveData
     */
    public function setSendToAllEmailAddressesOfEmployeesFromEvents(?bool $sendToAllEmailAddressesOfEmployeesFromEvents = null): self
    {
        // validation for constraint: boolean
        if (!is_null($sendToAllEmailAddressesOfEmployeesFromEvents) && !is_bool($sendToAllEmailAddressesOfEmployeesFromEvents)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($sendToAllEmailAddressesOfEmployeesFromEvents, true), gettype($sendToAllEmailAddressesOfEmployeesFromEvents)), __LINE__);
        }
        $this->SendToAllEmailAddressesOfEmployeesFromEvents = $sendToAllEmailAddressesOfEmployeesFromEvents;
        
        return $this;
    }
    /**
     * Get SendToAllEmailAddressesOfEmployeesFromList value
     * @return bool|null
     */
    public function getSendToAllEmailAddressesOfEmployeesFromList(): ?bool
    {
        return $this->SendToAllEmailAddressesOfEmployeesFromList;
    }
    /**
     * Set SendToAllEmailAddressesOfEmployeesFromList value
     * @param bool $sendToAllEmailAddressesOfEmployeesFromList
     * @return \StructType\ReactionSendEmailActionSaveData
     */
    public function setSendToAllEmailAddressesOfEmployeesFromList(?bool $sendToAllEmailAddressesOfEmployeesFromList = null): self
    {
        // validation for constraint: boolean
        if (!is_null($sendToAllEmailAddressesOfEmployeesFromList) && !is_bool($sendToAllEmailAddressesOfEmployeesFromList)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($sendToAllEmailAddressesOfEmployeesFromList, true), gettype($sendToAllEmailAddressesOfEmployeesFromList)), __LINE__);
        }
        $this->SendToAllEmailAddressesOfEmployeesFromList = $sendToAllEmailAddressesOfEmployeesFromList;
        
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
     * @return \StructType\ReactionSendEmailActionSaveData
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
     * @return \StructType\ReactionSendEmailActionSaveData
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
