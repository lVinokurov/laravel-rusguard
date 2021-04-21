<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetFavoriteFoldersWithEmployeeGroupsByWorkplaceResponse
 * StructType
 * @subpackage Structs
 */
class GetFavoriteFoldersWithEmployeeGroupsByWorkplaceResponse extends AbstractStructBase
{
    /**
     * The GetFavoriteFoldersWithEmployeeGroupsByWorkplaceResult
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \ArrayType\ArrayOfFavoriteFolderInfoWithEmployeeGroup|null
     */
    protected ?\ArrayType\ArrayOfFavoriteFolderInfoWithEmployeeGroup $GetFavoriteFoldersWithEmployeeGroupsByWorkplaceResult = null;
    /**
     * Constructor method for GetFavoriteFoldersWithEmployeeGroupsByWorkplaceResponse
     * @uses GetFavoriteFoldersWithEmployeeGroupsByWorkplaceResponse::setGetFavoriteFoldersWithEmployeeGroupsByWorkplaceResult()
     * @param \ArrayType\ArrayOfFavoriteFolderInfoWithEmployeeGroup $getFavoriteFoldersWithEmployeeGroupsByWorkplaceResult
     */
    public function __construct(?\ArrayType\ArrayOfFavoriteFolderInfoWithEmployeeGroup $getFavoriteFoldersWithEmployeeGroupsByWorkplaceResult = null)
    {
        $this
            ->setGetFavoriteFoldersWithEmployeeGroupsByWorkplaceResult($getFavoriteFoldersWithEmployeeGroupsByWorkplaceResult);
    }
    /**
     * Get GetFavoriteFoldersWithEmployeeGroupsByWorkplaceResult value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \ArrayType\ArrayOfFavoriteFolderInfoWithEmployeeGroup|null
     */
    public function getGetFavoriteFoldersWithEmployeeGroupsByWorkplaceResult(): ?\ArrayType\ArrayOfFavoriteFolderInfoWithEmployeeGroup
    {
        return isset($this->GetFavoriteFoldersWithEmployeeGroupsByWorkplaceResult) ? $this->GetFavoriteFoldersWithEmployeeGroupsByWorkplaceResult : null;
    }
    /**
     * Set GetFavoriteFoldersWithEmployeeGroupsByWorkplaceResult value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \ArrayType\ArrayOfFavoriteFolderInfoWithEmployeeGroup $getFavoriteFoldersWithEmployeeGroupsByWorkplaceResult
     * @return \StructType\GetFavoriteFoldersWithEmployeeGroupsByWorkplaceResponse
     */
    public function setGetFavoriteFoldersWithEmployeeGroupsByWorkplaceResult(?\ArrayType\ArrayOfFavoriteFolderInfoWithEmployeeGroup $getFavoriteFoldersWithEmployeeGroupsByWorkplaceResult = null): self
    {
        if (is_null($getFavoriteFoldersWithEmployeeGroupsByWorkplaceResult) || (is_array($getFavoriteFoldersWithEmployeeGroupsByWorkplaceResult) && empty($getFavoriteFoldersWithEmployeeGroupsByWorkplaceResult))) {
            unset($this->GetFavoriteFoldersWithEmployeeGroupsByWorkplaceResult);
        } else {
            $this->GetFavoriteFoldersWithEmployeeGroupsByWorkplaceResult = $getFavoriteFoldersWithEmployeeGroupsByWorkplaceResult;
        }
        
        return $this;
    }
}
