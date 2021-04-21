<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SaveMifareProfile StructType
 * @subpackage Structs
 */
class SaveMifareProfile extends AbstractStructBase
{
    /**
     * The id
     * Meta information extracted from the WSDL
     * - base: xs:string
     * - minOccurs: 0
     * - nillable: true
     * - pattern: [\da-fA-F]{8}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{12}
     * - type: tns:guid
     * @var string|null
     */
    protected ?string $id = null;
    /**
     * The data
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \StructType\MifareProfileFullSaveData|null
     */
    protected ?\StructType\MifareProfileFullSaveData $data = null;
    /**
     * The connectionId
     * Meta information extracted from the WSDL
     * - base: xs:string
     * - minOccurs: 0
     * - nillable: true
     * - pattern: [\da-fA-F]{8}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{12}
     * - type: tns:guid
     * @var string|null
     */
    protected ?string $connectionId = null;
    /**
     * The tagIDs
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \ArrayType\ArrayOfguid|null
     */
    protected ?\ArrayType\ArrayOfguid $tagIDs = null;
    /**
     * Constructor method for SaveMifareProfile
     * @uses SaveMifareProfile::setId()
     * @uses SaveMifareProfile::setData()
     * @uses SaveMifareProfile::setConnectionId()
     * @uses SaveMifareProfile::setTagIDs()
     * @param string $id
     * @param \StructType\MifareProfileFullSaveData $data
     * @param string $connectionId
     * @param \ArrayType\ArrayOfguid $tagIDs
     */
    public function __construct(?string $id = null, ?\StructType\MifareProfileFullSaveData $data = null, ?string $connectionId = null, ?\ArrayType\ArrayOfguid $tagIDs = null)
    {
        $this
            ->setId($id)
            ->setData($data)
            ->setConnectionId($connectionId)
            ->setTagIDs($tagIDs);
    }
    /**
     * Get id value
     * @return string|null
     */
    public function getId(): ?string
    {
        return $this->id;
    }
    /**
     * Set id value
     * @param string $id
     * @return \StructType\SaveMifareProfile
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
        $this->id = $id;
        
        return $this;
    }
    /**
     * Get data value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \StructType\MifareProfileFullSaveData|null
     */
    public function getData(): ?\StructType\MifareProfileFullSaveData
    {
        return isset($this->data) ? $this->data : null;
    }
    /**
     * Set data value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \StructType\MifareProfileFullSaveData $data
     * @return \StructType\SaveMifareProfile
     */
    public function setData(?\StructType\MifareProfileFullSaveData $data = null): self
    {
        if (is_null($data) || (is_array($data) && empty($data))) {
            unset($this->data);
        } else {
            $this->data = $data;
        }
        
        return $this;
    }
    /**
     * Get connectionId value
     * @return string|null
     */
    public function getConnectionId(): ?string
    {
        return $this->connectionId;
    }
    /**
     * Set connectionId value
     * @param string $connectionId
     * @return \StructType\SaveMifareProfile
     */
    public function setConnectionId(?string $connectionId = null): self
    {
        // validation for constraint: string
        if (!is_null($connectionId) && !is_string($connectionId)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($connectionId, true), gettype($connectionId)), __LINE__);
        }
        // validation for constraint: pattern([\da-fA-F]{8}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{12})
        if (!is_null($connectionId) && !preg_match('/[\\da-fA-F]{8}-[\\da-fA-F]{4}-[\\da-fA-F]{4}-[\\da-fA-F]{4}-[\\da-fA-F]{12}/', $connectionId)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a literal that is among the set of character sequences denoted by the regular expression /[\\da-fA-F]{8}-[\\da-fA-F]{4}-[\\da-fA-F]{4}-[\\da-fA-F]{4}-[\\da-fA-F]{12}/', var_export($connectionId, true)), __LINE__);
        }
        $this->connectionId = $connectionId;
        
        return $this;
    }
    /**
     * Get tagIDs value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \ArrayType\ArrayOfguid|null
     */
    public function getTagIDs(): ?\ArrayType\ArrayOfguid
    {
        return isset($this->tagIDs) ? $this->tagIDs : null;
    }
    /**
     * Set tagIDs value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \ArrayType\ArrayOfguid $tagIDs
     * @return \StructType\SaveMifareProfile
     */
    public function setTagIDs(?\ArrayType\ArrayOfguid $tagIDs = null): self
    {
        if (is_null($tagIDs) || (is_array($tagIDs) && empty($tagIDs))) {
            unset($this->tagIDs);
        } else {
            $this->tagIDs = $tagIDs;
        }
        
        return $this;
    }
}
