<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ISS_IIDK_SlimInfo StructType
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:ISS_IIDK_SlimInfo
 * @subpackage Structs
 */
class ISS_IIDK_SlimInfo extends ISS_IIDK_SaveData
{
    /**
     * The Id
     * Meta information extracted from the WSDL
     * - base: xs:string
     * - minOccurs: 0
     * - nillable: true
     * - pattern: [\da-fA-F]{8}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{12}
     * - type: tns:guid
     * @var string|null
     */
    protected ?string $Id = null;
    /**
     * The Slaves
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \ArrayType\ArrayOfISS_Slave_SlimInfo|null
     */
    protected ?\ArrayType\ArrayOfISS_Slave_SlimInfo $Slaves = null;
    /**
     * Constructor method for ISS_IIDK_SlimInfo
     * @uses ISS_IIDK_SlimInfo::setId()
     * @uses ISS_IIDK_SlimInfo::setSlaves()
     * @param string $id
     * @param \ArrayType\ArrayOfISS_Slave_SlimInfo $slaves
     */
    public function __construct(?string $id = null, ?\ArrayType\ArrayOfISS_Slave_SlimInfo $slaves = null)
    {
        $this
            ->setId($id)
            ->setSlaves($slaves);
    }
    /**
     * Get Id value
     * @return string|null
     */
    public function getId(): ?string
    {
        return $this->Id;
    }
    /**
     * Set Id value
     * @param string $id
     * @return \StructType\ISS_IIDK_SlimInfo
     */
    public function setId(?string $id = null): self
    {
        // validation for constraint: string
        if (!is_null($id) && !is_string($id)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($id, true), gettype($id)), __LINE__);
        }
        // validation for constraint: pattern([\da-fA-F]{8}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{12})
        if (!is_null($id) && !preg_match('/[\\da-fA-F]{8}-[\\da-fA-F]{4}-[\\da-fA-F]{4}-[\\da-fA-F]{4}-[\\da-fA-F]{12}/', $id)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a literal that is among the set of character sequences denoted by the regular expression /[\\da-fA-F]{8}-[\\da-fA-F]{4}-[\\da-fA-F]{4}-[\\da-fA-F]{4}-[\\da-fA-F]{12}/', var_export($id, true)), __LINE__);
        }
        $this->Id = $id;
        
        return $this;
    }
    /**
     * Get Slaves value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \ArrayType\ArrayOfISS_Slave_SlimInfo|null
     */
    public function getSlaves(): ?\ArrayType\ArrayOfISS_Slave_SlimInfo
    {
        return isset($this->Slaves) ? $this->Slaves : null;
    }
    /**
     * Set Slaves value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \ArrayType\ArrayOfISS_Slave_SlimInfo $slaves
     * @return \StructType\ISS_IIDK_SlimInfo
     */
    public function setSlaves(?\ArrayType\ArrayOfISS_Slave_SlimInfo $slaves = null): self
    {
        if (is_null($slaves) || (is_array($slaves) && empty($slaves))) {
            unset($this->Slaves);
        } else {
            $this->Slaves = $slaves;
        }
        
        return $this;
    }
}
