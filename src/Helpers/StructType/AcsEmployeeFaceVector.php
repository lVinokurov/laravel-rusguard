<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for AcsEmployeeFaceVector StructType
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:AcsEmployeeFaceVector
 * @subpackage Structs
 */
class AcsEmployeeFaceVector extends AbstractStructBase
{
    /**
     * The EmployeeID
     * Meta information extracted from the WSDL
     * - base: xs:string
     * - minOccurs: 0
     * - nillable: true
     * - pattern: [\da-fA-F]{8}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{12}
     * - type: tns:guid
     * @var string|null
     */
    protected ?string $EmployeeID = null;
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
     * The Name
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $Name = null;
    /**
     * The SourceName
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $SourceName = null;
    /**
     * The SourcePath
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $SourcePath = null;
    /**
     * The SourceType
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $SourceType = null;
    /**
     * Constructor method for AcsEmployeeFaceVector
     * @uses AcsEmployeeFaceVector::setEmployeeID()
     * @uses AcsEmployeeFaceVector::setID()
     * @uses AcsEmployeeFaceVector::setName()
     * @uses AcsEmployeeFaceVector::setSourceName()
     * @uses AcsEmployeeFaceVector::setSourcePath()
     * @uses AcsEmployeeFaceVector::setSourceType()
     * @param string $employeeID
     * @param string $iD
     * @param string $name
     * @param string $sourceName
     * @param string $sourcePath
     * @param string $sourceType
     */
    public function __construct(?string $employeeID = null, ?string $iD = null, ?string $name = null, ?string $sourceName = null, ?string $sourcePath = null, ?string $sourceType = null)
    {
        $this
            ->setEmployeeID($employeeID)
            ->setID($iD)
            ->setName($name)
            ->setSourceName($sourceName)
            ->setSourcePath($sourcePath)
            ->setSourceType($sourceType);
    }
    /**
     * Get EmployeeID value
     * @return string|null
     */
    public function getEmployeeID(): ?string
    {
        return $this->EmployeeID;
    }
    /**
     * Set EmployeeID value
     * @param string $employeeID
     * @return \StructType\AcsEmployeeFaceVector
     */
    public function setEmployeeID(?string $employeeID = null): self
    {
        // validation for constraint: string
        if (!is_null($employeeID) && !is_string($employeeID)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($employeeID, true), gettype($employeeID)), __LINE__);
        }
        // validation for constraint: pattern([\da-fA-F]{8}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{12})
        if (!is_null($employeeID) && !preg_match('/[\\da-fA-F]{8}-[\\da-fA-F]{4}-[\\da-fA-F]{4}-[\\da-fA-F]{4}-[\\da-fA-F]{12}/', $employeeID)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a literal that is among the set of character sequences denoted by the regular expression /[\\da-fA-F]{8}-[\\da-fA-F]{4}-[\\da-fA-F]{4}-[\\da-fA-F]{4}-[\\da-fA-F]{12}/', var_export($employeeID, true)), __LINE__);
        }
        $this->EmployeeID = $employeeID;
        
        return $this;
    }
    /**
     * Get ID value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getID(): ?string
    {
        return isset($this->ID) ? $this->ID : null;
    }
    /**
     * Set ID value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $iD
     * @return \StructType\AcsEmployeeFaceVector
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
        if (is_null($iD) || (is_array($iD) && empty($iD))) {
            unset($this->ID);
        } else {
            $this->ID = $iD;
        }
        
        return $this;
    }
    /**
     * Get Name value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getName(): ?string
    {
        return isset($this->Name) ? $this->Name : null;
    }
    /**
     * Set Name value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $name
     * @return \StructType\AcsEmployeeFaceVector
     */
    public function setName(?string $name = null): self
    {
        // validation for constraint: string
        if (!is_null($name) && !is_string($name)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($name, true), gettype($name)), __LINE__);
        }
        if (is_null($name) || (is_array($name) && empty($name))) {
            unset($this->Name);
        } else {
            $this->Name = $name;
        }
        
        return $this;
    }
    /**
     * Get SourceName value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getSourceName(): ?string
    {
        return isset($this->SourceName) ? $this->SourceName : null;
    }
    /**
     * Set SourceName value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $sourceName
     * @return \StructType\AcsEmployeeFaceVector
     */
    public function setSourceName(?string $sourceName = null): self
    {
        // validation for constraint: string
        if (!is_null($sourceName) && !is_string($sourceName)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($sourceName, true), gettype($sourceName)), __LINE__);
        }
        if (is_null($sourceName) || (is_array($sourceName) && empty($sourceName))) {
            unset($this->SourceName);
        } else {
            $this->SourceName = $sourceName;
        }
        
        return $this;
    }
    /**
     * Get SourcePath value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getSourcePath(): ?string
    {
        return isset($this->SourcePath) ? $this->SourcePath : null;
    }
    /**
     * Set SourcePath value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $sourcePath
     * @return \StructType\AcsEmployeeFaceVector
     */
    public function setSourcePath(?string $sourcePath = null): self
    {
        // validation for constraint: string
        if (!is_null($sourcePath) && !is_string($sourcePath)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($sourcePath, true), gettype($sourcePath)), __LINE__);
        }
        if (is_null($sourcePath) || (is_array($sourcePath) && empty($sourcePath))) {
            unset($this->SourcePath);
        } else {
            $this->SourcePath = $sourcePath;
        }
        
        return $this;
    }
    /**
     * Get SourceType value
     * @return string|null
     */
    public function getSourceType(): ?string
    {
        return $this->SourceType;
    }
    /**
     * Set SourceType value
     * @uses \EnumType\FaceSourceType::valueIsValid()
     * @uses \EnumType\FaceSourceType::getValidValues()
     * @throws InvalidArgumentException
     * @param string $sourceType
     * @return \StructType\AcsEmployeeFaceVector
     */
    public function setSourceType(?string $sourceType = null): self
    {
        // validation for constraint: enumeration
        if (!\EnumType\FaceSourceType::valueIsValid($sourceType)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \EnumType\FaceSourceType', is_array($sourceType) ? implode(', ', $sourceType) : var_export($sourceType, true), implode(', ', \EnumType\FaceSourceType::getValidValues())), __LINE__);
        }
        $this->SourceType = $sourceType;
        
        return $this;
    }
}
