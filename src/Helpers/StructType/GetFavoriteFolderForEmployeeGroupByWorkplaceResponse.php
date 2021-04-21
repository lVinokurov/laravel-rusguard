<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetFavoriteFolderForEmployeeGroupByWorkplaceResponse
 * StructType
 * @subpackage Structs
 */
class GetFavoriteFolderForEmployeeGroupByWorkplaceResponse extends AbstractStructBase
{
    /**
     * The GetFavoriteFolderForEmployeeGroupByWorkplaceResult
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \StructType\FavoriteFolderInfo|null
     */
    protected ?\StructType\FavoriteFolderInfo $GetFavoriteFolderForEmployeeGroupByWorkplaceResult = null;
    /**
     * Constructor method for GetFavoriteFolderForEmployeeGroupByWorkplaceResponse
     * @uses GetFavoriteFolderForEmployeeGroupByWorkplaceResponse::setGetFavoriteFolderForEmployeeGroupByWorkplaceResult()
     * @param \StructType\FavoriteFolderInfo $getFavoriteFolderForEmployeeGroupByWorkplaceResult
     */
    public function __construct(?\StructType\FavoriteFolderInfo $getFavoriteFolderForEmployeeGroupByWorkplaceResult = null)
    {
        $this
            ->setGetFavoriteFolderForEmployeeGroupByWorkplaceResult($getFavoriteFolderForEmployeeGroupByWorkplaceResult);
    }
    /**
     * Get GetFavoriteFolderForEmployeeGroupByWorkplaceResult value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \StructType\FavoriteFolderInfo|null
     */
    public function getGetFavoriteFolderForEmployeeGroupByWorkplaceResult(): ?\StructType\FavoriteFolderInfo
    {
        return isset($this->GetFavoriteFolderForEmployeeGroupByWorkplaceResult) ? $this->GetFavoriteFolderForEmployeeGroupByWorkplaceResult : null;
    }
    /**
     * Set GetFavoriteFolderForEmployeeGroupByWorkplaceResult value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \StructType\FavoriteFolderInfo $getFavoriteFolderForEmployeeGroupByWorkplaceResult
     * @return \StructType\GetFavoriteFolderForEmployeeGroupByWorkplaceResponse
     */
    public function setGetFavoriteFolderForEmployeeGroupByWorkplaceResult(?\StructType\FavoriteFolderInfo $getFavoriteFolderForEmployeeGroupByWorkplaceResult = null): self
    {
        if (is_null($getFavoriteFolderForEmployeeGroupByWorkplaceResult) || (is_array($getFavoriteFolderForEmployeeGroupByWorkplaceResult) && empty($getFavoriteFolderForEmployeeGroupByWorkplaceResult))) {
            unset($this->GetFavoriteFolderForEmployeeGroupByWorkplaceResult);
        } else {
            $this->GetFavoriteFolderForEmployeeGroupByWorkplaceResult = $getFavoriteFolderForEmployeeGroupByWorkplaceResult;
        }
        
        return $this;
    }
}
