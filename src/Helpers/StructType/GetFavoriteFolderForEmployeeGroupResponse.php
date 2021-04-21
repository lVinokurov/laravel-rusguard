<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetFavoriteFolderForEmployeeGroupResponse StructType
 * @subpackage Structs
 */
class GetFavoriteFolderForEmployeeGroupResponse extends AbstractStructBase
{
    /**
     * The GetFavoriteFolderForEmployeeGroupResult
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \StructType\FavoriteFolderInfo|null
     */
    protected ?\StructType\FavoriteFolderInfo $GetFavoriteFolderForEmployeeGroupResult = null;
    /**
     * Constructor method for GetFavoriteFolderForEmployeeGroupResponse
     * @uses GetFavoriteFolderForEmployeeGroupResponse::setGetFavoriteFolderForEmployeeGroupResult()
     * @param \StructType\FavoriteFolderInfo $getFavoriteFolderForEmployeeGroupResult
     */
    public function __construct(?\StructType\FavoriteFolderInfo $getFavoriteFolderForEmployeeGroupResult = null)
    {
        $this
            ->setGetFavoriteFolderForEmployeeGroupResult($getFavoriteFolderForEmployeeGroupResult);
    }
    /**
     * Get GetFavoriteFolderForEmployeeGroupResult value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \StructType\FavoriteFolderInfo|null
     */
    public function getGetFavoriteFolderForEmployeeGroupResult(): ?\StructType\FavoriteFolderInfo
    {
        return isset($this->GetFavoriteFolderForEmployeeGroupResult) ? $this->GetFavoriteFolderForEmployeeGroupResult : null;
    }
    /**
     * Set GetFavoriteFolderForEmployeeGroupResult value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \StructType\FavoriteFolderInfo $getFavoriteFolderForEmployeeGroupResult
     * @return \StructType\GetFavoriteFolderForEmployeeGroupResponse
     */
    public function setGetFavoriteFolderForEmployeeGroupResult(?\StructType\FavoriteFolderInfo $getFavoriteFolderForEmployeeGroupResult = null): self
    {
        if (is_null($getFavoriteFolderForEmployeeGroupResult) || (is_array($getFavoriteFolderForEmployeeGroupResult) && empty($getFavoriteFolderForEmployeeGroupResult))) {
            unset($this->GetFavoriteFolderForEmployeeGroupResult);
        } else {
            $this->GetFavoriteFolderForEmployeeGroupResult = $getFavoriteFolderForEmployeeGroupResult;
        }
        
        return $this;
    }
}
