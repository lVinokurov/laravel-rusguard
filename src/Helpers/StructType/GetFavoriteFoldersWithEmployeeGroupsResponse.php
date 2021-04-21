<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetFavoriteFoldersWithEmployeeGroupsResponse StructType
 * @subpackage Structs
 */
class GetFavoriteFoldersWithEmployeeGroupsResponse extends AbstractStructBase
{
    /**
     * The GetFavoriteFoldersWithEmployeeGroupsResult
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \ArrayType\ArrayOfFavoriteFolderInfoWithEmployeeGroup|null
     */
    protected ?\ArrayType\ArrayOfFavoriteFolderInfoWithEmployeeGroup $GetFavoriteFoldersWithEmployeeGroupsResult = null;
    /**
     * Constructor method for GetFavoriteFoldersWithEmployeeGroupsResponse
     * @uses GetFavoriteFoldersWithEmployeeGroupsResponse::setGetFavoriteFoldersWithEmployeeGroupsResult()
     * @param \ArrayType\ArrayOfFavoriteFolderInfoWithEmployeeGroup $getFavoriteFoldersWithEmployeeGroupsResult
     */
    public function __construct(?\ArrayType\ArrayOfFavoriteFolderInfoWithEmployeeGroup $getFavoriteFoldersWithEmployeeGroupsResult = null)
    {
        $this
            ->setGetFavoriteFoldersWithEmployeeGroupsResult($getFavoriteFoldersWithEmployeeGroupsResult);
    }
    /**
     * Get GetFavoriteFoldersWithEmployeeGroupsResult value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \ArrayType\ArrayOfFavoriteFolderInfoWithEmployeeGroup|null
     */
    public function getGetFavoriteFoldersWithEmployeeGroupsResult(): ?\ArrayType\ArrayOfFavoriteFolderInfoWithEmployeeGroup
    {
        return isset($this->GetFavoriteFoldersWithEmployeeGroupsResult) ? $this->GetFavoriteFoldersWithEmployeeGroupsResult : null;
    }
    /**
     * Set GetFavoriteFoldersWithEmployeeGroupsResult value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \ArrayType\ArrayOfFavoriteFolderInfoWithEmployeeGroup $getFavoriteFoldersWithEmployeeGroupsResult
     * @return \StructType\GetFavoriteFoldersWithEmployeeGroupsResponse
     */
    public function setGetFavoriteFoldersWithEmployeeGroupsResult(?\ArrayType\ArrayOfFavoriteFolderInfoWithEmployeeGroup $getFavoriteFoldersWithEmployeeGroupsResult = null): self
    {
        if (is_null($getFavoriteFoldersWithEmployeeGroupsResult) || (is_array($getFavoriteFoldersWithEmployeeGroupsResult) && empty($getFavoriteFoldersWithEmployeeGroupsResult))) {
            unset($this->GetFavoriteFoldersWithEmployeeGroupsResult);
        } else {
            $this->GetFavoriteFoldersWithEmployeeGroupsResult = $getFavoriteFoldersWithEmployeeGroupsResult;
        }
        
        return $this;
    }
}
