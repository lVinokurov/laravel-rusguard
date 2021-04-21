<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetFavoriteFoldersWithEmployeeGroupsByWorkplace StructType
 * @subpackage Structs
 */
class GetFavoriteFoldersWithEmployeeGroupsByWorkplace extends AbstractStructBase
{
    /**
     * The workpplaceId
     * Meta information extracted from the WSDL
     * - base: xs:string
     * - minOccurs: 0
     * - nillable: true
     * - pattern: [\da-fA-F]{8}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{12}
     * - type: tns:guid
     * @var string|null
     */
    protected ?string $workpplaceId = null;
    /**
     * The folderId
     * Meta information extracted from the WSDL
     * - base: xs:string
     * - minOccurs: 0
     * - nillable: true
     * - pattern: [\da-fA-F]{8}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{12}
     * - type: tns:guid
     * @var string|null
     */
    protected ?string $folderId = null;
    /**
     * Constructor method for GetFavoriteFoldersWithEmployeeGroupsByWorkplace
     * @uses GetFavoriteFoldersWithEmployeeGroupsByWorkplace::setWorkpplaceId()
     * @uses GetFavoriteFoldersWithEmployeeGroupsByWorkplace::setFolderId()
     * @param string $workpplaceId
     * @param string $folderId
     */
    public function __construct(?string $workpplaceId = null, ?string $folderId = null)
    {
        $this
            ->setWorkpplaceId($workpplaceId)
            ->setFolderId($folderId);
    }
    /**
     * Get workpplaceId value
     * @return string|null
     */
    public function getWorkpplaceId(): ?string
    {
        return $this->workpplaceId;
    }
    /**
     * Set workpplaceId value
     * @param string $workpplaceId
     * @return \StructType\GetFavoriteFoldersWithEmployeeGroupsByWorkplace
     */
    public function setWorkpplaceId(?string $workpplaceId = null): self
    {
        // validation for constraint: string
        if (!is_null($workpplaceId) && !is_string($workpplaceId)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($workpplaceId, true), gettype($workpplaceId)), __LINE__);
        }
        // validation for constraint: pattern([\da-fA-F]{8}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{12})
        if (!is_null($workpplaceId) && !preg_match('/[\\da-fA-F]{8}-[\\da-fA-F]{4}-[\\da-fA-F]{4}-[\\da-fA-F]{4}-[\\da-fA-F]{12}/', $workpplaceId)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a literal that is among the set of character sequences denoted by the regular expression /[\\da-fA-F]{8}-[\\da-fA-F]{4}-[\\da-fA-F]{4}-[\\da-fA-F]{4}-[\\da-fA-F]{12}/', var_export($workpplaceId, true)), __LINE__);
        }
        $this->workpplaceId = $workpplaceId;
        
        return $this;
    }
    /**
     * Get folderId value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getFolderId(): ?string
    {
        return isset($this->folderId) ? $this->folderId : null;
    }
    /**
     * Set folderId value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $folderId
     * @return \StructType\GetFavoriteFoldersWithEmployeeGroupsByWorkplace
     */
    public function setFolderId(?string $folderId = null): self
    {
        // validation for constraint: string
        if (!is_null($folderId) && !is_string($folderId)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($folderId, true), gettype($folderId)), __LINE__);
        }
        // validation for constraint: pattern([\da-fA-F]{8}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{12})
        if (!is_null($folderId) && !preg_match('/[\\da-fA-F]{8}-[\\da-fA-F]{4}-[\\da-fA-F]{4}-[\\da-fA-F]{4}-[\\da-fA-F]{12}/', $folderId)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a literal that is among the set of character sequences denoted by the regular expression /[\\da-fA-F]{8}-[\\da-fA-F]{4}-[\\da-fA-F]{4}-[\\da-fA-F]{4}-[\\da-fA-F]{12}/', var_export($folderId, true)), __LINE__);
        }
        if (is_null($folderId) || (is_array($folderId) && empty($folderId))) {
            unset($this->folderId);
        } else {
            $this->folderId = $folderId;
        }
        
        return $this;
    }
}
