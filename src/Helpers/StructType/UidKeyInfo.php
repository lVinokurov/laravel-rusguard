<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for UidKeyInfo StructType
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:UidKeyInfo
 * @subpackage Structs
 */
class UidKeyInfo extends AbstractStructBase
{
    /**
     * The ICCID
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $ICCID = null;
    /**
     * The Key
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $Key = null;
    /**
     * The Uid
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $Uid = null;
    /**
     * Constructor method for UidKeyInfo
     * @uses UidKeyInfo::setICCID()
     * @uses UidKeyInfo::setKey()
     * @uses UidKeyInfo::setUid()
     * @param string $iCCID
     * @param string $key
     * @param string $uid
     */
    public function __construct(?string $iCCID = null, ?string $key = null, ?string $uid = null)
    {
        $this
            ->setICCID($iCCID)
            ->setKey($key)
            ->setUid($uid);
    }
    /**
     * Get ICCID value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getICCID(): ?string
    {
        return isset($this->ICCID) ? $this->ICCID : null;
    }
    /**
     * Set ICCID value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $iCCID
     * @return \StructType\UidKeyInfo
     */
    public function setICCID(?string $iCCID = null): self
    {
        // validation for constraint: string
        if (!is_null($iCCID) && !is_string($iCCID)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($iCCID, true), gettype($iCCID)), __LINE__);
        }
        if (is_null($iCCID) || (is_array($iCCID) && empty($iCCID))) {
            unset($this->ICCID);
        } else {
            $this->ICCID = $iCCID;
        }
        
        return $this;
    }
    /**
     * Get Key value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getKey(): ?string
    {
        return isset($this->Key) ? $this->Key : null;
    }
    /**
     * Set Key value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $key
     * @return \StructType\UidKeyInfo
     */
    public function setKey(?string $key = null): self
    {
        // validation for constraint: string
        if (!is_null($key) && !is_string($key)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($key, true), gettype($key)), __LINE__);
        }
        if (is_null($key) || (is_array($key) && empty($key))) {
            unset($this->Key);
        } else {
            $this->Key = $key;
        }
        
        return $this;
    }
    /**
     * Get Uid value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getUid(): ?string
    {
        return isset($this->Uid) ? $this->Uid : null;
    }
    /**
     * Set Uid value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $uid
     * @return \StructType\UidKeyInfo
     */
    public function setUid(?string $uid = null): self
    {
        // validation for constraint: string
        if (!is_null($uid) && !is_string($uid)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($uid, true), gettype($uid)), __LINE__);
        }
        if (is_null($uid) || (is_array($uid) && empty($uid))) {
            unset($this->Uid);
        } else {
            $this->Uid = $uid;
        }
        
        return $this;
    }
}
