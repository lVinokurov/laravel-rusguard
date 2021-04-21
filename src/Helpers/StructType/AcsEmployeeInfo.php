<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for AcsEmployeeInfo StructType
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:AcsEmployeeInfo
 * @subpackage Structs
 */
class AcsEmployeeInfo extends AcsEmployeeSlimBase
{
    /**
     * The GroupCode
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $GroupCode = null;
    /**
     * The GroupID
     * Meta information extracted from the WSDL
     * - base: xs:string
     * - minOccurs: 0
     * - nillable: true
     * - pattern: [\da-fA-F]{8}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{12}
     * - type: tns:guid
     * @var string|null
     */
    protected ?string $GroupID = null;
    /**
     * The GroupName
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $GroupName = null;
    /**
     * The GroupPath
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $GroupPath = null;
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
     * The PositionCode
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $PositionCode = null;
    /**
     * The PositionName
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $PositionName = null;
    /**
     * The SecurityGroupID
     * Meta information extracted from the WSDL
     * - base: xs:string
     * - minOccurs: 0
     * - nillable: true
     * - pattern: [\da-fA-F]{8}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{12}
     * - type: tns:guid
     * @var string|null
     */
    protected ?string $SecurityGroupID = null;
    /**
     * The SecurityGroupName
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $SecurityGroupName = null;
    /**
     * Constructor method for AcsEmployeeInfo
     * @uses AcsEmployeeInfo::setGroupCode()
     * @uses AcsEmployeeInfo::setGroupID()
     * @uses AcsEmployeeInfo::setGroupName()
     * @uses AcsEmployeeInfo::setGroupPath()
     * @uses AcsEmployeeInfo::setID()
     * @uses AcsEmployeeInfo::setPositionCode()
     * @uses AcsEmployeeInfo::setPositionName()
     * @uses AcsEmployeeInfo::setSecurityGroupID()
     * @uses AcsEmployeeInfo::setSecurityGroupName()
     * @param string $groupCode
     * @param string $groupID
     * @param string $groupName
     * @param string $groupPath
     * @param string $iD
     * @param string $positionCode
     * @param string $positionName
     * @param string $securityGroupID
     * @param string $securityGroupName
     */
    public function __construct(?string $groupCode = null, ?string $groupID = null, ?string $groupName = null, ?string $groupPath = null, ?string $iD = null, ?string $positionCode = null, ?string $positionName = null, ?string $securityGroupID = null, ?string $securityGroupName = null)
    {
        $this
            ->setGroupCode($groupCode)
            ->setGroupID($groupID)
            ->setGroupName($groupName)
            ->setGroupPath($groupPath)
            ->setID($iD)
            ->setPositionCode($positionCode)
            ->setPositionName($positionName)
            ->setSecurityGroupID($securityGroupID)
            ->setSecurityGroupName($securityGroupName);
    }
    /**
     * Get GroupCode value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getGroupCode(): ?string
    {
        return isset($this->GroupCode) ? $this->GroupCode : null;
    }
    /**
     * Set GroupCode value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $groupCode
     * @return \StructType\AcsEmployeeInfo
     */
    public function setGroupCode(?string $groupCode = null): self
    {
        // validation for constraint: string
        if (!is_null($groupCode) && !is_string($groupCode)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($groupCode, true), gettype($groupCode)), __LINE__);
        }
        if (is_null($groupCode) || (is_array($groupCode) && empty($groupCode))) {
            unset($this->GroupCode);
        } else {
            $this->GroupCode = $groupCode;
        }
        
        return $this;
    }
    /**
     * Get GroupID value
     * @return string|null
     */
    public function getGroupID(): ?string
    {
        return $this->GroupID;
    }
    /**
     * Set GroupID value
     * @param string $groupID
     * @return \StructType\AcsEmployeeInfo
     */
    public function setGroupID(?string $groupID = null): self
    {
        // validation for constraint: string
        if (!is_null($groupID) && !is_string($groupID)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($groupID, true), gettype($groupID)), __LINE__);
        }
        // validation for constraint: pattern([\da-fA-F]{8}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{12})
        if (!is_null($groupID) && !preg_match('/[\\da-fA-F]{8}-[\\da-fA-F]{4}-[\\da-fA-F]{4}-[\\da-fA-F]{4}-[\\da-fA-F]{12}/', $groupID)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a literal that is among the set of character sequences denoted by the regular expression /[\\da-fA-F]{8}-[\\da-fA-F]{4}-[\\da-fA-F]{4}-[\\da-fA-F]{4}-[\\da-fA-F]{12}/', var_export($groupID, true)), __LINE__);
        }
        $this->GroupID = $groupID;
        
        return $this;
    }
    /**
     * Get GroupName value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getGroupName(): ?string
    {
        return isset($this->GroupName) ? $this->GroupName : null;
    }
    /**
     * Set GroupName value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $groupName
     * @return \StructType\AcsEmployeeInfo
     */
    public function setGroupName(?string $groupName = null): self
    {
        // validation for constraint: string
        if (!is_null($groupName) && !is_string($groupName)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($groupName, true), gettype($groupName)), __LINE__);
        }
        if (is_null($groupName) || (is_array($groupName) && empty($groupName))) {
            unset($this->GroupName);
        } else {
            $this->GroupName = $groupName;
        }
        
        return $this;
    }
    /**
     * Get GroupPath value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getGroupPath(): ?string
    {
        return isset($this->GroupPath) ? $this->GroupPath : null;
    }
    /**
     * Set GroupPath value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $groupPath
     * @return \StructType\AcsEmployeeInfo
     */
    public function setGroupPath(?string $groupPath = null): self
    {
        // validation for constraint: string
        if (!is_null($groupPath) && !is_string($groupPath)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($groupPath, true), gettype($groupPath)), __LINE__);
        }
        if (is_null($groupPath) || (is_array($groupPath) && empty($groupPath))) {
            unset($this->GroupPath);
        } else {
            $this->GroupPath = $groupPath;
        }
        
        return $this;
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
     * @return \StructType\AcsEmployeeInfo
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
     * Get PositionCode value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getPositionCode(): ?string
    {
        return isset($this->PositionCode) ? $this->PositionCode : null;
    }
    /**
     * Set PositionCode value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $positionCode
     * @return \StructType\AcsEmployeeInfo
     */
    public function setPositionCode(?string $positionCode = null): self
    {
        // validation for constraint: string
        if (!is_null($positionCode) && !is_string($positionCode)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($positionCode, true), gettype($positionCode)), __LINE__);
        }
        if (is_null($positionCode) || (is_array($positionCode) && empty($positionCode))) {
            unset($this->PositionCode);
        } else {
            $this->PositionCode = $positionCode;
        }
        
        return $this;
    }
    /**
     * Get PositionName value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getPositionName(): ?string
    {
        return isset($this->PositionName) ? $this->PositionName : null;
    }
    /**
     * Set PositionName value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $positionName
     * @return \StructType\AcsEmployeeInfo
     */
    public function setPositionName(?string $positionName = null): self
    {
        // validation for constraint: string
        if (!is_null($positionName) && !is_string($positionName)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($positionName, true), gettype($positionName)), __LINE__);
        }
        if (is_null($positionName) || (is_array($positionName) && empty($positionName))) {
            unset($this->PositionName);
        } else {
            $this->PositionName = $positionName;
        }
        
        return $this;
    }
    /**
     * Get SecurityGroupID value
     * @return string|null
     */
    public function getSecurityGroupID(): ?string
    {
        return $this->SecurityGroupID;
    }
    /**
     * Set SecurityGroupID value
     * @param string $securityGroupID
     * @return \StructType\AcsEmployeeInfo
     */
    public function setSecurityGroupID(?string $securityGroupID = null): self
    {
        // validation for constraint: string
        if (!is_null($securityGroupID) && !is_string($securityGroupID)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($securityGroupID, true), gettype($securityGroupID)), __LINE__);
        }
        // validation for constraint: pattern([\da-fA-F]{8}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{12})
        if (!is_null($securityGroupID) && !preg_match('/[\\da-fA-F]{8}-[\\da-fA-F]{4}-[\\da-fA-F]{4}-[\\da-fA-F]{4}-[\\da-fA-F]{12}/', $securityGroupID)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a literal that is among the set of character sequences denoted by the regular expression /[\\da-fA-F]{8}-[\\da-fA-F]{4}-[\\da-fA-F]{4}-[\\da-fA-F]{4}-[\\da-fA-F]{12}/', var_export($securityGroupID, true)), __LINE__);
        }
        $this->SecurityGroupID = $securityGroupID;
        
        return $this;
    }
    /**
     * Get SecurityGroupName value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getSecurityGroupName(): ?string
    {
        return isset($this->SecurityGroupName) ? $this->SecurityGroupName : null;
    }
    /**
     * Set SecurityGroupName value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $securityGroupName
     * @return \StructType\AcsEmployeeInfo
     */
    public function setSecurityGroupName(?string $securityGroupName = null): self
    {
        // validation for constraint: string
        if (!is_null($securityGroupName) && !is_string($securityGroupName)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($securityGroupName, true), gettype($securityGroupName)), __LINE__);
        }
        if (is_null($securityGroupName) || (is_array($securityGroupName) && empty($securityGroupName))) {
            unset($this->SecurityGroupName);
        } else {
            $this->SecurityGroupName = $securityGroupName;
        }
        
        return $this;
    }
}
