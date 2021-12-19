<?php

declare(strict_types=1);

namespace ServiceType;

use SoapFault;
use lVinokurov\RusGuard\Helpers\Base\AbstractSoapClientBase;

/**
 * This class stands for Get ServiceType
 * @subpackage Services
 */
class Get extends AbstractSoapClientBase
{
    /**
     * Method to call the operation originally named GetFields
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\GetFields $parameters
     * @return \StructType\GetFieldsResponse|bool
     */
    public function GetFields(\StructType\GetFields $parameters)
    {
        try {
            $this->setResult($resultGetFields = $this->getSoapClient()->__soapCall('GetFields', [
                $parameters,
            ], [], [], $this->outputHeaders));

            return $resultGetFields;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);

            return false;
        }
    }
    /**
     * Method to call the operation originally named GetAdditionalFieldsValue
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\GetAdditionalFieldsValue $parameters
     * @return \StructType\GetAdditionalFieldsValueResponse|bool
     */
    public function GetAdditionalFieldsValue(\StructType\GetAdditionalFieldsValue $parameters)
    {
        try {
            $this->setResult($resultGetAdditionalFieldsValue = $this->getSoapClient()->__soapCall('GetAdditionalFieldsValue', [
                $parameters,
            ], [], [], $this->outputHeaders));

            return $resultGetAdditionalFieldsValue;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);

            return false;
        }
    }
    /**
     * Method to call the operation originally named GetAdditionalFields
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\GetAdditionalFields $parameters
     * @return \StructType\GetAdditionalFieldsResponse|bool
     */
    public function GetAdditionalFields(\StructType\GetAdditionalFields $parameters)
    {
        try {
            $this->setResult($resultGetAdditionalFields = $this->getSoapClient()->__soapCall('GetAdditionalFields', [
                $parameters,
            ], [], [], $this->outputHeaders));

            return $resultGetAdditionalFields;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);

            return false;
        }
    }
    /**
     * Method to call the operation originally named GetAdditionalFieldsValueForOwners
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\GetAdditionalFieldsValueForOwners $parameters
     * @return \StructType\GetAdditionalFieldsValueForOwnersResponse|bool
     */
    public function GetAdditionalFieldsValueForOwners(\StructType\GetAdditionalFieldsValueForOwners $parameters)
    {
        try {
            $this->setResult($resultGetAdditionalFieldsValueForOwners = $this->getSoapClient()->__soapCall('GetAdditionalFieldsValueForOwners', [
                $parameters,
            ], [], [], $this->outputHeaders));

            return $resultGetAdditionalFieldsValueForOwners;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);

            return false;
        }
    }
    /**
     * Method to call the operation originally named GetAdditionalFieldsForOwners
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\GetAdditionalFieldsForOwners $parameters
     * @return \StructType\GetAdditionalFieldsForOwnersResponse|bool
     */
    public function GetAdditionalFieldsForOwners(\StructType\GetAdditionalFieldsForOwners $parameters)
    {
        try {
            $this->setResult($resultGetAdditionalFieldsForOwners = $this->getSoapClient()->__soapCall('GetAdditionalFieldsForOwners', [
                $parameters,
            ], [], [], $this->outputHeaders));

            return $resultGetAdditionalFieldsForOwners;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);

            return false;
        }
    }
    /**
     * Method to call the operation originally named GetPhotoOrders
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\GetPhotoOrders $parameters
     * @return \StructType\GetPhotoOrdersResponse|bool
     */
    public function GetPhotoOrders(\StructType\GetPhotoOrders $parameters)
    {
        try {
            $this->setResult($resultGetPhotoOrders = $this->getSoapClient()->__soapCall('GetPhotoOrders', [
                $parameters,
            ], [], [], $this->outputHeaders));

            return $resultGetPhotoOrders;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);

            return false;
        }
    }
    /**
     * Method to call the operation originally named GetTagsByMifareProfileID
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\GetTagsByMifareProfileID $parameters
     * @return \StructType\GetTagsByMifareProfileIDResponse|bool
     */
    public function GetTagsByMifareProfileID(\StructType\GetTagsByMifareProfileID $parameters)
    {
        try {
            $this->setResult($resultGetTagsByMifareProfileID = $this->getSoapClient()->__soapCall('GetTagsByMifareProfileID', [
                $parameters,
            ], [], [], $this->outputHeaders));

            return $resultGetTagsByMifareProfileID;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);

            return false;
        }
    }
    /**
     * Method to call the operation originally named GetTagsByReportID
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\GetTagsByReportID $parameters
     * @return \StructType\GetTagsByReportIDResponse|bool
     */
    public function GetTagsByReportID(\StructType\GetTagsByReportID $parameters)
    {
        try {
            $this->setResult($resultGetTagsByReportID = $this->getSoapClient()->__soapCall('GetTagsByReportID', [
                $parameters,
            ], [], [], $this->outputHeaders));

            return $resultGetTagsByReportID;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);

            return false;
        }
    }
    /**
     * Method to call the operation originally named GetTagsByEmployeeGroupID
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\GetTagsByEmployeeGroupID $parameters
     * @return \StructType\GetTagsByEmployeeGroupIDResponse|bool
     */
    public function GetTagsByEmployeeGroupID(\StructType\GetTagsByEmployeeGroupID $parameters)
    {
        try {
            $this->setResult($resultGetTagsByEmployeeGroupID = $this->getSoapClient()->__soapCall('GetTagsByEmployeeGroupID', [
                $parameters,
            ], [], [], $this->outputHeaders));

            return $resultGetTagsByEmployeeGroupID;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);

            return false;
        }
    }
    /**
     * Method to call the operation originally named GetTagsByAccessLevelID
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\GetTagsByAccessLevelID $parameters
     * @return \StructType\GetTagsByAccessLevelIDResponse|bool
     */
    public function GetTagsByAccessLevelID(\StructType\GetTagsByAccessLevelID $parameters)
    {
        try {
            $this->setResult($resultGetTagsByAccessLevelID = $this->getSoapClient()->__soapCall('GetTagsByAccessLevelID', [
                $parameters,
            ], [], [], $this->outputHeaders));

            return $resultGetTagsByAccessLevelID;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);

            return false;
        }
    }
    /**
     * Method to call the operation originally named GetTagsByBoxAccessLevelID
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\GetTagsByBoxAccessLevelID $parameters
     * @return \StructType\GetTagsByBoxAccessLevelIDResponse|bool
     */
    public function GetTagsByBoxAccessLevelID(\StructType\GetTagsByBoxAccessLevelID $parameters)
    {
        try {
            $this->setResult($resultGetTagsByBoxAccessLevelID = $this->getSoapClient()->__soapCall('GetTagsByBoxAccessLevelID', [
                $parameters,
            ], [], [], $this->outputHeaders));

            return $resultGetTagsByBoxAccessLevelID;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);

            return false;
        }
    }
    /**
     * Method to call the operation originally named GetTagsByResourceID
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\GetTagsByResourceID $parameters
     * @return \StructType\GetTagsByResourceIDResponse|bool
     */
    public function GetTagsByResourceID(\StructType\GetTagsByResourceID $parameters)
    {
        try {
            $this->setResult($resultGetTagsByResourceID = $this->getSoapClient()->__soapCall('GetTagsByResourceID', [
                $parameters,
            ], [], [], $this->outputHeaders));

            return $resultGetTagsByResourceID;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);

            return false;
        }
    }
    /**
     * Method to call the operation originally named GetFilterTagsByResourceID
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\GetFilterTagsByResourceID $parameters
     * @return \StructType\GetFilterTagsByResourceIDResponse|bool
     */
    public function GetFilterTagsByResourceID(\StructType\GetFilterTagsByResourceID $parameters)
    {
        try {
            $this->setResult($resultGetFilterTagsByResourceID = $this->getSoapClient()->__soapCall('GetFilterTagsByResourceID', [
                $parameters,
            ], [], [], $this->outputHeaders));

            return $resultGetFilterTagsByResourceID;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);

            return false;
        }
    }
    /**
     * Method to call the operation originally named GetFilterTagsForResources
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\GetFilterTagsForResources $parameters
     * @return \StructType\GetFilterTagsForResourcesResponse|bool
     */
    public function GetFilterTagsForResources(\StructType\GetFilterTagsForResources $parameters)
    {
        try {
            $this->setResult($resultGetFilterTagsForResources = $this->getSoapClient()->__soapCall('GetFilterTagsForResources', [
                $parameters,
            ], [], [], $this->outputHeaders));

            return $resultGetFilterTagsForResources;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);

            return false;
        }
    }
    /**
     * Method to call the operation originally named GetTags
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\GetTags $parameters
     * @return \StructType\GetTagsResponse|bool
     */
    public function GetTags(\StructType\GetTags $parameters)
    {
        try {
            $this->setResult($resultGetTags = $this->getSoapClient()->__soapCall('GetTags', [
                $parameters,
            ], [], [], $this->outputHeaders));

            return $resultGetTags;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);

            return false;
        }
    }
    /**
     * Method to call the operation originally named GetFilterTags
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\GetFilterTags $parameters
     * @return \StructType\GetFilterTagsResponse|bool
     */
    public function GetFilterTags(\StructType\GetFilterTags $parameters)
    {
        try {
            $this->setResult($resultGetFilterTags = $this->getSoapClient()->__soapCall('GetFilterTags', [
                $parameters,
            ], [], [], $this->outputHeaders));

            return $resultGetFilterTags;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);

            return false;
        }
    }
    /**
     * Method to call the operation originally named GetFavoriteFolders
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\GetFavoriteFolders $parameters
     * @return \StructType\GetFavoriteFoldersResponse|bool
     */
    public function GetFavoriteFolders(\StructType\GetFavoriteFolders $parameters)
    {
        try {
            $this->setResult($resultGetFavoriteFolders = $this->getSoapClient()->__soapCall('GetFavoriteFolders', [
                $parameters,
            ], [], [], $this->outputHeaders));

            return $resultGetFavoriteFolders;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);

            return false;
        }
    }
    /**
     * Method to call the operation originally named GetFavoriteFoldersByWorkplace
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\GetFavoriteFoldersByWorkplace $parameters
     * @return \StructType\GetFavoriteFoldersByWorkplaceResponse|bool
     */
    public function GetFavoriteFoldersByWorkplace(\StructType\GetFavoriteFoldersByWorkplace $parameters)
    {
        try {
            $this->setResult($resultGetFavoriteFoldersByWorkplace = $this->getSoapClient()->__soapCall('GetFavoriteFoldersByWorkplace', [
                $parameters,
            ], [], [], $this->outputHeaders));

            return $resultGetFavoriteFoldersByWorkplace;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);

            return false;
        }
    }
    /**
     * Method to call the operation originally named
     * GetFavoriteFoldersWithEmployeeGroups
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\GetFavoriteFoldersWithEmployeeGroups $parameters
     * @return \StructType\GetFavoriteFoldersWithEmployeeGroupsResponse|bool
     */
    public function GetFavoriteFoldersWithEmployeeGroups(\StructType\GetFavoriteFoldersWithEmployeeGroups $parameters)
    {
        try {
            $this->setResult($resultGetFavoriteFoldersWithEmployeeGroups = $this->getSoapClient()->__soapCall('GetFavoriteFoldersWithEmployeeGroups', [
                $parameters,
            ], [], [], $this->outputHeaders));

            return $resultGetFavoriteFoldersWithEmployeeGroups;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);

            return false;
        }
    }
    /**
     * Method to call the operation originally named
     * GetFavoriteFoldersWithEmployeeGroupsByWorkplace
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\GetFavoriteFoldersWithEmployeeGroupsByWorkplace $parameters
     * @return \StructType\GetFavoriteFoldersWithEmployeeGroupsByWorkplaceResponse|bool
     */
    public function GetFavoriteFoldersWithEmployeeGroupsByWorkplace(\StructType\GetFavoriteFoldersWithEmployeeGroupsByWorkplace $parameters)
    {
        try {
            $this->setResult($resultGetFavoriteFoldersWithEmployeeGroupsByWorkplace = $this->getSoapClient()->__soapCall('GetFavoriteFoldersWithEmployeeGroupsByWorkplace', [
                $parameters,
            ], [], [], $this->outputHeaders));

            return $resultGetFavoriteFoldersWithEmployeeGroupsByWorkplace;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);

            return false;
        }
    }
    /**
     * Method to call the operation originally named GetFavoriteFolderForEmployeeGroup
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\GetFavoriteFolderForEmployeeGroup $parameters
     * @return \StructType\GetFavoriteFolderForEmployeeGroupResponse|bool
     */
    public function GetFavoriteFolderForEmployeeGroup(\StructType\GetFavoriteFolderForEmployeeGroup $parameters)
    {
        try {
            $this->setResult($resultGetFavoriteFolderForEmployeeGroup = $this->getSoapClient()->__soapCall('GetFavoriteFolderForEmployeeGroup', [
                $parameters,
            ], [], [], $this->outputHeaders));

            return $resultGetFavoriteFolderForEmployeeGroup;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);

            return false;
        }
    }
    /**
     * Method to call the operation originally named
     * GetFavoriteFolderForEmployeeGroupByWorkplace
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\GetFavoriteFolderForEmployeeGroupByWorkplace $parameters
     * @return \StructType\GetFavoriteFolderForEmployeeGroupByWorkplaceResponse|bool
     */
    public function GetFavoriteFolderForEmployeeGroupByWorkplace(\StructType\GetFavoriteFolderForEmployeeGroupByWorkplace $parameters)
    {
        try {
            $this->setResult($resultGetFavoriteFolderForEmployeeGroupByWorkplace = $this->getSoapClient()->__soapCall('GetFavoriteFolderForEmployeeGroupByWorkplace', [
                $parameters,
            ], [], [], $this->outputHeaders));

            return $resultGetFavoriteFolderForEmployeeGroupByWorkplace;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);

            return false;
        }
    }
    /**
     * Method to call the operation originally named GetUserPasses
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\GetUserPasses $parameters
     * @return \StructType\GetUserPassesResponse|bool
     */
    public function GetUserPasses(\StructType\GetUserPasses $parameters)
    {
        try {
            $this->setResult($resultGetUserPasses = $this->getSoapClient()->__soapCall('GetUserPasses', [
                $parameters,
            ], [], [], $this->outputHeaders));

            return $resultGetUserPasses;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);

            return false;
        }
    }
    /**
     * Method to call the operation originally named GetReactions
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\GetReactions $parameters
     * @return \StructType\GetReactionsResponse|bool
     */
    public function GetReactions(\StructType\GetReactions $parameters)
    {
        try {
            $this->setResult($resultGetReactions = $this->getSoapClient()->__soapCall('GetReactions', [
                $parameters,
            ], [], [], $this->outputHeaders));

            return $resultGetReactions;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);

            return false;
        }
    }
    /**
     * Method to call the operation originally named GetReactionFullInfo
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\GetReactionFullInfo $parameters
     * @return \StructType\GetReactionFullInfoResponse|bool
     */
    public function GetReactionFullInfo(\StructType\GetReactionFullInfo $parameters)
    {
        try {
            $this->setResult($resultGetReactionFullInfo = $this->getSoapClient()->__soapCall('GetReactionFullInfo', [
                $parameters,
            ], [], [], $this->outputHeaders));

            return $resultGetReactionFullInfo;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);

            return false;
        }
    }
    /**
     * Method to call the operation originally named GetEmployeesOfReactionAction
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\GetEmployeesOfReactionAction $parameters
     * @return \StructType\GetEmployeesOfReactionActionResponse|bool
     */
    public function GetEmployeesOfReactionAction(\StructType\GetEmployeesOfReactionAction $parameters)
    {
        try {
            $this->setResult($resultGetEmployeesOfReactionAction = $this->getSoapClient()->__soapCall('GetEmployeesOfReactionAction', [
                $parameters,
            ], [], [], $this->outputHeaders));

            return $resultGetEmployeesOfReactionAction;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);

            return false;
        }
    }
    /**
     * Method to call the operation originally named GetEmployeeGroupsOfReactionAction
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\GetEmployeeGroupsOfReactionAction $parameters
     * @return \StructType\GetEmployeeGroupsOfReactionActionResponse|bool
     */
    public function GetEmployeeGroupsOfReactionAction(\StructType\GetEmployeeGroupsOfReactionAction $parameters)
    {
        try {
            $this->setResult($resultGetEmployeeGroupsOfReactionAction = $this->getSoapClient()->__soapCall('GetEmployeeGroupsOfReactionAction', [
                $parameters,
            ], [], [], $this->outputHeaders));

            return $resultGetEmployeeGroupsOfReactionAction;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);

            return false;
        }
    }
    /**
     * Method to call the operation originally named GetReactionSendSMSAction
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\GetReactionSendSMSAction $parameters
     * @return \StructType\GetReactionSendSMSActionResponse|bool
     */
    public function GetReactionSendSMSAction(\StructType\GetReactionSendSMSAction $parameters)
    {
        try {
            $this->setResult($resultGetReactionSendSMSAction = $this->getSoapClient()->__soapCall('GetReactionSendSMSAction', [
                $parameters,
            ], [], [], $this->outputHeaders));

            return $resultGetReactionSendSMSAction;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);

            return false;
        }
    }
    /**
     * Method to call the operation originally named GetReactionSendEmailAction
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\GetReactionSendEmailAction $parameters
     * @return \StructType\GetReactionSendEmailActionResponse|bool
     */
    public function GetReactionSendEmailAction(\StructType\GetReactionSendEmailAction $parameters)
    {
        try {
            $this->setResult($resultGetReactionSendEmailAction = $this->getSoapClient()->__soapCall('GetReactionSendEmailAction', [
                $parameters,
            ], [], [], $this->outputHeaders));

            return $resultGetReactionSendEmailAction;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);

            return false;
        }
    }
    /**
     * Method to call the operation originally named GetReactionExecuteProgramAction
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\GetReactionExecuteProgramAction $parameters
     * @return \StructType\GetReactionExecuteProgramActionResponse|bool
     */
    public function GetReactionExecuteProgramAction(\StructType\GetReactionExecuteProgramAction $parameters)
    {
        try {
            $this->setResult($resultGetReactionExecuteProgramAction = $this->getSoapClient()->__soapCall('GetReactionExecuteProgramAction', [
                $parameters,
            ], [], [], $this->outputHeaders));

            return $resultGetReactionExecuteProgramAction;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);

            return false;
        }
    }
    /**
     * Method to call the operation originally named GetReactionRecordVideoAction
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\GetReactionRecordVideoAction $parameters
     * @return \StructType\GetReactionRecordVideoActionResponse|bool
     */
    public function GetReactionRecordVideoAction(\StructType\GetReactionRecordVideoAction $parameters)
    {
        try {
            $this->setResult($resultGetReactionRecordVideoAction = $this->getSoapClient()->__soapCall('GetReactionRecordVideoAction', [
                $parameters,
            ], [], [], $this->outputHeaders));

            return $resultGetReactionRecordVideoAction;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);

            return false;
        }
    }
    /**
     * Method to call the operation originally named GetReports
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\GetReports $parameters
     * @return \StructType\GetReportsResponse|bool
     */
    public function GetReports(\StructType\GetReports $parameters)
    {
        try {
            $this->setResult($resultGetReports = $this->getSoapClient()->__soapCall('GetReports', [
                $parameters,
            ], [], [], $this->outputHeaders));

            return $resultGetReports;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);

            return false;
        }
    }
    /**
     * Method to call the operation originally named GetDriversOfReportParameters
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\GetDriversOfReportParameters $parameters
     * @return \StructType\GetDriversOfReportParametersResponse|bool
     */
    public function GetDriversOfReportParameters(\StructType\GetDriversOfReportParameters $parameters)
    {
        try {
            $this->setResult($resultGetDriversOfReportParameters = $this->getSoapClient()->__soapCall('GetDriversOfReportParameters', [
                $parameters,
            ], [], [], $this->outputHeaders));

            return $resultGetDriversOfReportParameters;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);

            return false;
        }
    }
    /**
     * Method to call the operation originally named
     * GetLogMessageSubtypesOfReportParameters
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\GetLogMessageSubtypesOfReportParameters $parameters
     * @return \StructType\GetLogMessageSubtypesOfReportParametersResponse|bool
     */
    public function GetLogMessageSubtypesOfReportParameters(\StructType\GetLogMessageSubtypesOfReportParameters $parameters)
    {
        try {
            $this->setResult($resultGetLogMessageSubtypesOfReportParameters = $this->getSoapClient()->__soapCall('GetLogMessageSubtypesOfReportParameters', [
                $parameters,
            ], [], [], $this->outputHeaders));

            return $resultGetLogMessageSubtypesOfReportParameters;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);

            return false;
        }
    }
    /**
     * Method to call the operation originally named GetEmployeesOfReportParameters
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\GetEmployeesOfReportParameters $parameters
     * @return \StructType\GetEmployeesOfReportParametersResponse|bool
     */
    public function GetEmployeesOfReportParameters(\StructType\GetEmployeesOfReportParameters $parameters)
    {
        try {
            $this->setResult($resultGetEmployeesOfReportParameters = $this->getSoapClient()->__soapCall('GetEmployeesOfReportParameters', [
                $parameters,
            ], [], [], $this->outputHeaders));

            return $resultGetEmployeesOfReportParameters;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);

            return false;
        }
    }
    /**
     * Method to call the operation originally named
     * GetEmployeeGroupsOfReportParameters
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\GetEmployeeGroupsOfReportParameters $parameters
     * @return \StructType\GetEmployeeGroupsOfReportParametersResponse|bool
     */
    public function GetEmployeeGroupsOfReportParameters(\StructType\GetEmployeeGroupsOfReportParameters $parameters)
    {
        try {
            $this->setResult($resultGetEmployeeGroupsOfReportParameters = $this->getSoapClient()->__soapCall('GetEmployeeGroupsOfReportParameters', [
                $parameters,
            ], [], [], $this->outputHeaders));

            return $resultGetEmployeeGroupsOfReportParameters;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);

            return false;
        }
    }
    /**
     * Method to call the operation originally named GetWorkZonesOfReportParameters
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\GetWorkZonesOfReportParameters $parameters
     * @return \StructType\GetWorkZonesOfReportParametersResponse|bool
     */
    public function GetWorkZonesOfReportParameters(\StructType\GetWorkZonesOfReportParameters $parameters)
    {
        try {
            $this->setResult($resultGetWorkZonesOfReportParameters = $this->getSoapClient()->__soapCall('GetWorkZonesOfReportParameters', [
                $parameters,
            ], [], [], $this->outputHeaders));

            return $resultGetWorkZonesOfReportParameters;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);

            return false;
        }
    }
    /**
     * Method to call the operation originally named GetIncidentTypeOfReportParameters
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\GetIncidentTypeOfReportParameters $parameters
     * @return \StructType\GetIncidentTypeOfReportParametersResponse|bool
     */
    public function GetIncidentTypeOfReportParameters(\StructType\GetIncidentTypeOfReportParameters $parameters)
    {
        try {
            $this->setResult($resultGetIncidentTypeOfReportParameters = $this->getSoapClient()->__soapCall('GetIncidentTypeOfReportParameters', [
                $parameters,
            ], [], [], $this->outputHeaders));

            return $resultGetIncidentTypeOfReportParameters;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);

            return false;
        }
    }
    /**
     * Method to call the operation originally named GetVehicleTypesOfReportParameters
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\GetVehicleTypesOfReportParameters $parameters
     * @return \StructType\GetVehicleTypesOfReportParametersResponse|bool
     */
    public function GetVehicleTypesOfReportParameters(\StructType\GetVehicleTypesOfReportParameters $parameters)
    {
        try {
            $this->setResult($resultGetVehicleTypesOfReportParameters = $this->getSoapClient()->__soapCall('GetVehicleTypesOfReportParameters', [
                $parameters,
            ], [], [], $this->outputHeaders));

            return $resultGetVehicleTypesOfReportParameters;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);

            return false;
        }
    }
    /**
     * Method to call the operation originally named GetVehiclesOfReportParameters
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\GetVehiclesOfReportParameters $parameters
     * @return \StructType\GetVehiclesOfReportParametersResponse|bool
     */
    public function GetVehiclesOfReportParameters(\StructType\GetVehiclesOfReportParameters $parameters)
    {
        try {
            $this->setResult($resultGetVehiclesOfReportParameters = $this->getSoapClient()->__soapCall('GetVehiclesOfReportParameters', [
                $parameters,
            ], [], [], $this->outputHeaders));

            return $resultGetVehiclesOfReportParameters;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);

            return false;
        }
    }
    /**
     * Method to call the operation originally named GetBranchOfReportParameters
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\GetBranchOfReportParameters $parameters
     * @return \StructType\GetBranchOfReportParametersResponse|bool
     */
    public function GetBranchOfReportParameters(\StructType\GetBranchOfReportParameters $parameters)
    {
        try {
            $this->setResult($resultGetBranchOfReportParameters = $this->getSoapClient()->__soapCall('GetBranchOfReportParameters', [
                $parameters,
            ], [], [], $this->outputHeaders));

            return $resultGetBranchOfReportParameters;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);

            return false;
        }
    }
    /**
     * Method to call the operation originally named GetEmployeesOfReactionEvent
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\GetEmployeesOfReactionEvent $parameters
     * @return \StructType\GetEmployeesOfReactionEventResponse|bool
     */
    public function GetEmployeesOfReactionEvent(\StructType\GetEmployeesOfReactionEvent $parameters)
    {
        try {
            $this->setResult($resultGetEmployeesOfReactionEvent = $this->getSoapClient()->__soapCall('GetEmployeesOfReactionEvent', [
                $parameters,
            ], [], [], $this->outputHeaders));

            return $resultGetEmployeesOfReactionEvent;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);

            return false;
        }
    }
    /**
     * Method to call the operation originally named GetEmployeeGroupsOfReactionEvent
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\GetEmployeeGroupsOfReactionEvent $parameters
     * @return \StructType\GetEmployeeGroupsOfReactionEventResponse|bool
     */
    public function GetEmployeeGroupsOfReactionEvent(\StructType\GetEmployeeGroupsOfReactionEvent $parameters)
    {
        try {
            $this->setResult($resultGetEmployeeGroupsOfReactionEvent = $this->getSoapClient()->__soapCall('GetEmployeeGroupsOfReactionEvent', [
                $parameters,
            ], [], [], $this->outputHeaders));

            return $resultGetEmployeeGroupsOfReactionEvent;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);

            return false;
        }
    }
    /**
     * Method to call the operation originally named GetDriversOfReactionEvent
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\GetDriversOfReactionEvent $parameters
     * @return \StructType\GetDriversOfReactionEventResponse|bool
     */
    public function GetDriversOfReactionEvent(\StructType\GetDriversOfReactionEvent $parameters)
    {
        try {
            $this->setResult($resultGetDriversOfReactionEvent = $this->getSoapClient()->__soapCall('GetDriversOfReactionEvent', [
                $parameters,
            ], [], [], $this->outputHeaders));

            return $resultGetDriversOfReactionEvent;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);

            return false;
        }
    }
    /**
     * Method to call the operation originally named
     * GetLogMessageSubtypesOfReactionEvent
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\GetLogMessageSubtypesOfReactionEvent $parameters
     * @return \StructType\GetLogMessageSubtypesOfReactionEventResponse|bool
     */
    public function GetLogMessageSubtypesOfReactionEvent(\StructType\GetLogMessageSubtypesOfReactionEvent $parameters)
    {
        try {
            $this->setResult($resultGetLogMessageSubtypesOfReactionEvent = $this->getSoapClient()->__soapCall('GetLogMessageSubtypesOfReactionEvent', [
                $parameters,
            ], [], [], $this->outputHeaders));

            return $resultGetLogMessageSubtypesOfReactionEvent;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);

            return false;
        }
    }
    /**
     * Method to call the operation originally named
     * GetSwitchedOffLogMessageSubtypesOfWorkplace
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\GetSwitchedOffLogMessageSubtypesOfWorkplace $parameters
     * @return \StructType\GetSwitchedOffLogMessageSubtypesOfWorkplaceResponse|bool
     */
    public function GetSwitchedOffLogMessageSubtypesOfWorkplace(\StructType\GetSwitchedOffLogMessageSubtypesOfWorkplace $parameters)
    {
        try {
            $this->setResult($resultGetSwitchedOffLogMessageSubtypesOfWorkplace = $this->getSoapClient()->__soapCall('GetSwitchedOffLogMessageSubtypesOfWorkplace', [
                $parameters,
            ], [], [], $this->outputHeaders));

            return $resultGetSwitchedOffLogMessageSubtypesOfWorkplace;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);

            return false;
        }
    }
    /**
     * Method to call the operation originally named
     * GetSwitchedOffLogDriversOfWorkplace
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\GetSwitchedOffLogDriversOfWorkplace $parameters
     * @return \StructType\GetSwitchedOffLogDriversOfWorkplaceResponse|bool
     */
    public function GetSwitchedOffLogDriversOfWorkplace(\StructType\GetSwitchedOffLogDriversOfWorkplace $parameters)
    {
        try {
            $this->setResult($resultGetSwitchedOffLogDriversOfWorkplace = $this->getSoapClient()->__soapCall('GetSwitchedOffLogDriversOfWorkplace', [
                $parameters,
            ], [], [], $this->outputHeaders));

            return $resultGetSwitchedOffLogDriversOfWorkplace;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);

            return false;
        }
    }
    /**
     * Method to call the operation originally named
     * GetRemoteTerminalInfoByWorkplaceModuleId
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\GetRemoteTerminalInfoByWorkplaceModuleId $parameters
     * @return \StructType\GetRemoteTerminalInfoByWorkplaceModuleIdResponse|bool
     */
    public function GetRemoteTerminalInfoByWorkplaceModuleId(\StructType\GetRemoteTerminalInfoByWorkplaceModuleId $parameters)
    {
        try {
            $this->setResult($resultGetRemoteTerminalInfoByWorkplaceModuleId = $this->getSoapClient()->__soapCall('GetRemoteTerminalInfoByWorkplaceModuleId', [
                $parameters,
            ], [], [], $this->outputHeaders));

            return $resultGetRemoteTerminalInfoByWorkplaceModuleId;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);

            return false;
        }
    }
    /**
     * Method to call the operation originally named GetReactionEventsFromDevices
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\GetReactionEventsFromDevices $parameters
     * @return \StructType\GetReactionEventsFromDevicesResponse|bool
     */
    public function GetReactionEventsFromDevices(\StructType\GetReactionEventsFromDevices $parameters)
    {
        try {
            $this->setResult($resultGetReactionEventsFromDevices = $this->getSoapClient()->__soapCall('GetReactionEventsFromDevices', [
                $parameters,
            ], [], [], $this->outputHeaders));

            return $resultGetReactionEventsFromDevices;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);

            return false;
        }
    }
    /**
     * Method to call the operation originally named GetLicense
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\GetLicense $parameters
     * @return \StructType\GetLicenseResponse|bool
     */
    public function GetLicense(\StructType\GetLicense $parameters)
    {
        try {
            $this->setResult($resultGetLicense = $this->getSoapClient()->__soapCall('GetLicense', [
                $parameters,
            ], [], [], $this->outputHeaders));

            return $resultGetLicense;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);

            return false;
        }
    }
    /**
     * Method to call the operation originally named GetPageFilteredEmployeesByGroup
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\GetPageFilteredEmployeesByGroup $parameters
     * @return \StructType\GetPageFilteredEmployeesByGroupResponse|bool
     */
    public function GetPageFilteredEmployeesByGroup(\StructType\GetPageFilteredEmployeesByGroup $parameters)
    {
        try {
            $this->setResult($resultGetPageFilteredEmployeesByGroup = $this->getSoapClient()->__soapCall('GetPageFilteredEmployeesByGroup', [
                $parameters,
            ], [], [], $this->outputHeaders));

            return $resultGetPageFilteredEmployeesByGroup;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);

            return false;
        }
    }
    /**
     * Method to call the operation originally named GetPageFilterredIncidents
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\GetPageFilterredIncidents $parameters
     * @return \StructType\GetPageFilterredIncidentsResponse|bool
     */
    public function GetPageFilterredIncidents(\StructType\GetPageFilterredIncidents $parameters)
    {
        try {
            $this->setResult($resultGetPageFilterredIncidents = $this->getSoapClient()->__soapCall('GetPageFilterredIncidents', [
                $parameters,
            ], [], [], $this->outputHeaders));

            return $resultGetPageFilterredIncidents;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);

            return false;
        }
    }
    /**
     * Method to call the operation originally named GetAcsEmployeesGuidsByGroups
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\GetAcsEmployeesGuidsByGroups $parameters
     * @return \StructType\GetAcsEmployeesGuidsByGroupsResponse|bool
     */
    public function GetAcsEmployeesGuidsByGroups(\StructType\GetAcsEmployeesGuidsByGroups $parameters)
    {
        try {
            $this->setResult($resultGetAcsEmployeesGuidsByGroups = $this->getSoapClient()->__soapCall('GetAcsEmployeesGuidsByGroups', [
                $parameters,
            ], [], [], $this->outputHeaders));

            return $resultGetAcsEmployeesGuidsByGroups;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);

            return false;
        }
    }
    /**
     * Method to call the operation originally named GetAcsEmployee
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\GetAcsEmployee $parameters
     * @return \StructType\GetAcsEmployeeResponse|bool
     */
    public function GetAcsEmployee(\StructType\GetAcsEmployee $parameters)
    {
        try {
            $this->setResult($resultGetAcsEmployee = $this->getSoapClient()->__soapCall('GetAcsEmployee', [
                $parameters,
            ], [], [], $this->outputHeaders));

            return $resultGetAcsEmployee;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);

            return false;
        }
    }
    /**
     * Method to call the operation originally named GetAcsEmployeeForRemoteTerminal
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\GetAcsEmployeeForRemoteTerminal $parameters
     * @return \StructType\GetAcsEmployeeForRemoteTerminalResponse|bool
     */
    public function GetAcsEmployeeForRemoteTerminal(\StructType\GetAcsEmployeeForRemoteTerminal $parameters)
    {
        try {
            $this->setResult($resultGetAcsEmployeeForRemoteTerminal = $this->getSoapClient()->__soapCall('GetAcsEmployeeForRemoteTerminal', [
                $parameters,
            ], [], [], $this->outputHeaders));

            return $resultGetAcsEmployeeForRemoteTerminal;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);

            return false;
        }
    }
    /**
     * Method to call the operation originally named GetAcsEmployeesByTableNumbers
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\GetAcsEmployeesByTableNumbers $parameters
     * @return \StructType\GetAcsEmployeesByTableNumbersResponse|bool
     */
    public function GetAcsEmployeesByTableNumbers(\StructType\GetAcsEmployeesByTableNumbers $parameters)
    {
        try {
            $this->setResult($resultGetAcsEmployeesByTableNumbers = $this->getSoapClient()->__soapCall('GetAcsEmployeesByTableNumbers', [
                $parameters,
            ], [], [], $this->outputHeaders));

            return $resultGetAcsEmployeesByTableNumbers;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);

            return false;
        }
    }
    /**
     * Method to call the operation originally named GetAcsEmployeeIDsByTableNumbers
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\GetAcsEmployeeIDsByTableNumbers $parameters
     * @return \StructType\GetAcsEmployeeIDsByTableNumbersResponse|bool
     */
    public function GetAcsEmployeeIDsByTableNumbers(\StructType\GetAcsEmployeeIDsByTableNumbers $parameters)
    {
        try {
            $this->setResult($resultGetAcsEmployeeIDsByTableNumbers = $this->getSoapClient()->__soapCall('GetAcsEmployeeIDsByTableNumbers', [
                $parameters,
            ], [], [], $this->outputHeaders));

            return $resultGetAcsEmployeeIDsByTableNumbers;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);

            return false;
        }
    }
    /**
     * Method to call the operation originally named GetAcsEmployeesDocuments
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\GetAcsEmployeesDocuments $parameters
     * @return \StructType\GetAcsEmployeesDocumentsResponse|bool
     */
    public function GetAcsEmployeesDocuments(\StructType\GetAcsEmployeesDocuments $parameters)
    {
        try {
            $this->setResult($resultGetAcsEmployeesDocuments = $this->getSoapClient()->__soapCall('GetAcsEmployeesDocuments', [
                $parameters,
            ], [], [], $this->outputHeaders));

            return $resultGetAcsEmployeesDocuments;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);

            return false;
        }
    }
    /**
     * Method to call the operation originally named GetAcsEmployeePhotoInfos
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\GetAcsEmployeePhotoInfos $parameters
     * @return \StructType\GetAcsEmployeePhotoInfosResponse|bool
     */
    public function GetAcsEmployeePhotoInfos(\StructType\GetAcsEmployeePhotoInfos $parameters)
    {
        try {
            $this->setResult($resultGetAcsEmployeePhotoInfos = $this->getSoapClient()->__soapCall('GetAcsEmployeePhotoInfos', [
                $parameters,
            ], [], [], $this->outputHeaders));

            return $resultGetAcsEmployeePhotoInfos;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);

            return false;
        }
    }
    /**
     * Method to call the operation originally named GetAcsEmployeePhoto
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\GetAcsEmployeePhoto $parameters
     * @return \StructType\GetAcsEmployeePhotoResponse|bool
     */
    public function GetAcsEmployeePhoto(\StructType\GetAcsEmployeePhoto $parameters)
    {
        try {
            $this->setResult($resultGetAcsEmployeePhoto = $this->getSoapClient()->__soapCall('GetAcsEmployeePhoto', [
                $parameters,
            ], [], [], $this->outputHeaders));

            return $resultGetAcsEmployeePhoto;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);

            return false;
        }
    }
    /**
     * Method to call the operation originally named GetAcsEmployeePhotoByType
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\GetAcsEmployeePhotoByType $parameters
     * @return \StructType\GetAcsEmployeePhotoByTypeResponse|bool
     */
    public function GetAcsEmployeePhotoByType(\StructType\GetAcsEmployeePhotoByType $parameters)
    {
        try {
            $this->setResult($resultGetAcsEmployeePhotoByType = $this->getSoapClient()->__soapCall('GetAcsEmployeePhotoByType', [
                $parameters,
            ], [], [], $this->outputHeaders));

            return $resultGetAcsEmployeePhotoByType;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);

            return false;
        }
    }
    /**
     * Method to call the operation originally named GetEmployeesByAccessLevel
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\GetEmployeesByAccessLevel $parameters
     * @return \StructType\GetEmployeesByAccessLevelResponse|bool
     */
    public function GetEmployeesByAccessLevel(\StructType\GetEmployeesByAccessLevel $parameters)
    {
        try {
            $this->setResult($resultGetEmployeesByAccessLevel = $this->getSoapClient()->__soapCall('GetEmployeesByAccessLevel', [
                $parameters,
            ], [], [], $this->outputHeaders));

            return $resultGetEmployeesByAccessLevel;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);

            return false;
        }
    }
    /**
     * Method to call the operation originally named GetAcsKeysForEmployee
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\GetAcsKeysForEmployee $parameters
     * @return \StructType\GetAcsKeysForEmployeeResponse|bool
     */
    public function GetAcsKeysForEmployee(\StructType\GetAcsKeysForEmployee $parameters)
    {
        try {
            $this->setResult($resultGetAcsKeysForEmployee = $this->getSoapClient()->__soapCall('GetAcsKeysForEmployee', [
                $parameters,
            ], [], [], $this->outputHeaders));

            return $resultGetAcsKeysForEmployee;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);

            return false;
        }
    }
    /**
     * Method to call the operation originally named GetEmployeesByCardType
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\GetEmployeesByCardType $parameters
     * @return \StructType\GetEmployeesByCardTypeResponse|bool
     */
    public function GetEmployeesByCardType(\StructType\GetEmployeesByCardType $parameters)
    {
        try {
            $this->setResult($resultGetEmployeesByCardType = $this->getSoapClient()->__soapCall('GetEmployeesByCardType', [
                $parameters,
            ], [], [], $this->outputHeaders));

            return $resultGetEmployeesByCardType;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);

            return false;
        }
    }
    /**
     * Method to call the operation originally named GetAssignedAcsKeyByKeyNumber
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\GetAssignedAcsKeyByKeyNumber $parameters
     * @return \StructType\GetAssignedAcsKeyByKeyNumberResponse|bool
     */
    public function GetAssignedAcsKeyByKeyNumber(\StructType\GetAssignedAcsKeyByKeyNumber $parameters)
    {
        try {
            $this->setResult($resultGetAssignedAcsKeyByKeyNumber = $this->getSoapClient()->__soapCall('GetAssignedAcsKeyByKeyNumber', [
                $parameters,
            ], [], [], $this->outputHeaders));

            return $resultGetAssignedAcsKeyByKeyNumber;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);

            return false;
        }
    }
    /**
     * Method to call the operation originally named GetAcsKeysForEmployeeWithLost
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\GetAcsKeysForEmployeeWithLost $parameters
     * @return \StructType\GetAcsKeysForEmployeeWithLostResponse|bool
     */
    public function GetAcsKeysForEmployeeWithLost(\StructType\GetAcsKeysForEmployeeWithLost $parameters)
    {
        try {
            $this->setResult($resultGetAcsKeysForEmployeeWithLost = $this->getSoapClient()->__soapCall('GetAcsKeysForEmployeeWithLost', [
                $parameters,
            ], [], [], $this->outputHeaders));

            return $resultGetAcsKeysForEmployeeWithLost;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);

            return false;
        }
    }
    /**
     * Method to call the operation originally named
     * GetAcsKeysForEmployeeWithLostIncludeRemovedEmployees
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\GetAcsKeysForEmployeeWithLostIncludeRemovedEmployees $parameters
     * @return \StructType\GetAcsKeysForEmployeeWithLostIncludeRemovedEmployeesResponse|bool
     */
    public function GetAcsKeysForEmployeeWithLostIncludeRemovedEmployees(\StructType\GetAcsKeysForEmployeeWithLostIncludeRemovedEmployees $parameters)
    {
        try {
            $this->setResult($resultGetAcsKeysForEmployeeWithLostIncludeRemovedEmployees = $this->getSoapClient()->__soapCall('GetAcsKeysForEmployeeWithLostIncludeRemovedEmployees', [
                $parameters,
            ], [], [], $this->outputHeaders));

            return $resultGetAcsKeysForEmployeeWithLostIncludeRemovedEmployees;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);

            return false;
        }
    }
    /**
     * Method to call the operation originally named GetUnResolvedPhotoBankDetails
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\GetUnResolvedPhotoBankDetails $parameters
     * @return \StructType\GetUnResolvedPhotoBankDetailsResponse|bool
     */
    public function GetUnResolvedPhotoBankDetails(\StructType\GetUnResolvedPhotoBankDetails $parameters)
    {
        try {
            $this->setResult($resultGetUnResolvedPhotoBankDetails = $this->getSoapClient()->__soapCall('GetUnResolvedPhotoBankDetails', [
                $parameters,
            ], [], [], $this->outputHeaders));

            return $resultGetUnResolvedPhotoBankDetails;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);

            return false;
        }
    }
    /**
     * Method to call the operation originally named GetPhoto
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\GetPhoto $parameters
     * @return \StructType\GetPhotoResponse|bool
     */
    public function GetPhoto(\StructType\GetPhoto $parameters)
    {
        try {
            $this->setResult($resultGetPhoto = $this->getSoapClient()->__soapCall('GetPhoto', [
                $parameters,
            ], [], [], $this->outputHeaders));

            return $resultGetPhoto;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);

            return false;
        }
    }
    /**
     * Method to call the operation originally named GetAcsVehiclesByGroup
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\GetAcsVehiclesByGroup $parameters
     * @return \StructType\GetAcsVehiclesByGroupResponse|bool
     */
    public function GetAcsVehiclesByGroup(\StructType\GetAcsVehiclesByGroup $parameters)
    {
        try {
            $this->setResult($resultGetAcsVehiclesByGroup = $this->getSoapClient()->__soapCall('GetAcsVehiclesByGroup', [
                $parameters,
            ], [], [], $this->outputHeaders));

            return $resultGetAcsVehiclesByGroup;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);

            return false;
        }
    }
    /**
     * Method to call the operation originally named GetAcsVehiclesGuidsByGroups
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\GetAcsVehiclesGuidsByGroups $parameters
     * @return \StructType\GetAcsVehiclesGuidsByGroupsResponse|bool
     */
    public function GetAcsVehiclesGuidsByGroups(\StructType\GetAcsVehiclesGuidsByGroups $parameters)
    {
        try {
            $this->setResult($resultGetAcsVehiclesGuidsByGroups = $this->getSoapClient()->__soapCall('GetAcsVehiclesGuidsByGroups', [
                $parameters,
            ], [], [], $this->outputHeaders));

            return $resultGetAcsVehiclesGuidsByGroups;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);

            return false;
        }
    }
    /**
     * Method to call the operation originally named GetAcsVehicle
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\GetAcsVehicle $parameters
     * @return \StructType\GetAcsVehicleResponse|bool
     */
    public function GetAcsVehicle(\StructType\GetAcsVehicle $parameters)
    {
        try {
            $this->setResult($resultGetAcsVehicle = $this->getSoapClient()->__soapCall('GetAcsVehicle', [
                $parameters,
            ], [], [], $this->outputHeaders));

            return $resultGetAcsVehicle;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);

            return false;
        }
    }
    /**
     * Method to call the operation originally named GetWorkTimeTable
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\GetWorkTimeTable $parameters
     * @return \StructType\GetWorkTimeTableResponse|bool
     */
    public function GetWorkTimeTable(\StructType\GetWorkTimeTable $parameters)
    {
        try {
            $this->setResult($resultGetWorkTimeTable = $this->getSoapClient()->__soapCall('GetWorkTimeTable', [
                $parameters,
            ], [], [], $this->outputHeaders));

            return $resultGetWorkTimeTable;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);

            return false;
        }
    }
    /**
     * Method to call the operation originally named GetEmployeeTimeTable
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\GetEmployeeTimeTable $parameters
     * @return \StructType\GetEmployeeTimeTableResponse|bool
     */
    public function GetEmployeeTimeTable(\StructType\GetEmployeeTimeTable $parameters)
    {
        try {
            $this->setResult($resultGetEmployeeTimeTable = $this->getSoapClient()->__soapCall('GetEmployeeTimeTable', [
                $parameters,
            ], [], [], $this->outputHeaders));

            return $resultGetEmployeeTimeTable;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);

            return false;
        }
    }
    /**
     * Method to call the operation originally named GetDayTypesSlimInfo
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\GetDayTypesSlimInfo $parameters
     * @return \StructType\GetDayTypesSlimInfoResponse|bool
     */
    public function GetDayTypesSlimInfo(\StructType\GetDayTypesSlimInfo $parameters)
    {
        try {
            $this->setResult($resultGetDayTypesSlimInfo = $this->getSoapClient()->__soapCall('GetDayTypesSlimInfo', [
                $parameters,
            ], [], [], $this->outputHeaders));

            return $resultGetDayTypesSlimInfo;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);

            return false;
        }
    }
    /**
     * Method to call the operation originally named GetWorkSchedulesSlimInfo
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\GetWorkSchedulesSlimInfo $parameters
     * @return \StructType\GetWorkSchedulesSlimInfoResponse|bool
     */
    public function GetWorkSchedulesSlimInfo(\StructType\GetWorkSchedulesSlimInfo $parameters)
    {
        try {
            $this->setResult($resultGetWorkSchedulesSlimInfo = $this->getSoapClient()->__soapCall('GetWorkSchedulesSlimInfo', [
                $parameters,
            ], [], [], $this->outputHeaders));

            return $resultGetWorkSchedulesSlimInfo;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);

            return false;
        }
    }
    /**
     * Method to call the operation originally named GetWorkZonesSlimInfo
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\GetWorkZonesSlimInfo $parameters
     * @return \StructType\GetWorkZonesSlimInfoResponse|bool
     */
    public function GetWorkZonesSlimInfo(\StructType\GetWorkZonesSlimInfo $parameters)
    {
        try {
            $this->setResult($resultGetWorkZonesSlimInfo = $this->getSoapClient()->__soapCall('GetWorkZonesSlimInfo', [
                $parameters,
            ], [], [], $this->outputHeaders));

            return $resultGetWorkZonesSlimInfo;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);

            return false;
        }
    }
    /**
     * Method to call the operation originally named GetWorkZonesAccessPoints
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\GetWorkZonesAccessPoints $parameters
     * @return \StructType\GetWorkZonesAccessPointsResponse|bool
     */
    public function GetWorkZonesAccessPoints(\StructType\GetWorkZonesAccessPoints $parameters)
    {
        try {
            $this->setResult($resultGetWorkZonesAccessPoints = $this->getSoapClient()->__soapCall('GetWorkZonesAccessPoints', [
                $parameters,
            ], [], [], $this->outputHeaders));

            return $resultGetWorkZonesAccessPoints;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);

            return false;
        }
    }
    /**
     * Method to call the operation originally named GetAcsBoxAccessElements
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\GetAcsBoxAccessElements $parameters
     * @return \StructType\GetAcsBoxAccessElementsResponse|bool
     */
    public function GetAcsBoxAccessElements(\StructType\GetAcsBoxAccessElements $parameters)
    {
        try {
            $this->setResult($resultGetAcsBoxAccessElements = $this->getSoapClient()->__soapCall('GetAcsBoxAccessElements', [
                $parameters,
            ], [], [], $this->outputHeaders));

            return $resultGetAcsBoxAccessElements;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);

            return false;
        }
    }
    /**
     * Method to call the operation originally named GetAcsBoxAccessLevelsSlimInfo
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\GetAcsBoxAccessLevelsSlimInfo $parameters
     * @return \StructType\GetAcsBoxAccessLevelsSlimInfoResponse|bool
     */
    public function GetAcsBoxAccessLevelsSlimInfo(\StructType\GetAcsBoxAccessLevelsSlimInfo $parameters)
    {
        try {
            $this->setResult($resultGetAcsBoxAccessLevelsSlimInfo = $this->getSoapClient()->__soapCall('GetAcsBoxAccessLevelsSlimInfo', [
                $parameters,
            ], [], [], $this->outputHeaders));

            return $resultGetAcsBoxAccessLevelsSlimInfo;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);

            return false;
        }
    }
    /**
     * Method to call the operation originally named GetAcsAccessLevelsSlimInfo
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\GetAcsAccessLevelsSlimInfo $parameters
     * @return \StructType\GetAcsAccessLevelsSlimInfoResponse|bool
     */
    public function GetAcsAccessLevelsSlimInfo(\StructType\GetAcsAccessLevelsSlimInfo $parameters)
    {
        try {
            $this->setResult($resultGetAcsAccessLevelsSlimInfo = $this->getSoapClient()->__soapCall('GetAcsAccessLevelsSlimInfo', [
                $parameters,
            ], [], [], $this->outputHeaders));

            return $resultGetAcsAccessLevelsSlimInfo;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);

            return false;
        }
    }
    /**
     * Method to call the operation originally named GetAlcoGroupsSlimInfo
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\GetAlcoGroupsSlimInfo $parameters
     * @return \StructType\GetAlcoGroupsSlimInfoResponse|bool
     */
    public function GetAlcoGroupsSlimInfo(\StructType\GetAlcoGroupsSlimInfo $parameters)
    {
        try {
            $this->setResult($resultGetAlcoGroupsSlimInfo = $this->getSoapClient()->__soapCall('GetAlcoGroupsSlimInfo', [
                $parameters,
            ], [], [], $this->outputHeaders));

            return $resultGetAlcoGroupsSlimInfo;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);

            return false;
        }
    }
    /**
     * Method to call the operation originally named GetEmployeePostionsForAlcoGroup
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\GetEmployeePostionsForAlcoGroup $parameters
     * @return \StructType\GetEmployeePostionsForAlcoGroupResponse|bool
     */
    public function GetEmployeePostionsForAlcoGroup(\StructType\GetEmployeePostionsForAlcoGroup $parameters)
    {
        try {
            $this->setResult($resultGetEmployeePostionsForAlcoGroup = $this->getSoapClient()->__soapCall('GetEmployeePostionsForAlcoGroup', [
                $parameters,
            ], [], [], $this->outputHeaders));

            return $resultGetEmployeePostionsForAlcoGroup;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);

            return false;
        }
    }
    /**
     * Method to call the operation originally named GetPositionCodes
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\GetPositionCodes $parameters
     * @return \StructType\GetPositionCodesResponse|bool
     */
    public function GetPositionCodes(\StructType\GetPositionCodes $parameters)
    {
        try {
            $this->setResult($resultGetPositionCodes = $this->getSoapClient()->__soapCall('GetPositionCodes', [
                $parameters,
            ], [], [], $this->outputHeaders));

            return $resultGetPositionCodes;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);

            return false;
        }
    }
    /**
     * Method to call the operation originally named GetEmployeeGroupsForAlcoGroup
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\GetEmployeeGroupsForAlcoGroup $parameters
     * @return \StructType\GetEmployeeGroupsForAlcoGroupResponse|bool
     */
    public function GetEmployeeGroupsForAlcoGroup(\StructType\GetEmployeeGroupsForAlcoGroup $parameters)
    {
        try {
            $this->setResult($resultGetEmployeeGroupsForAlcoGroup = $this->getSoapClient()->__soapCall('GetEmployeeGroupsForAlcoGroup', [
                $parameters,
            ], [], [], $this->outputHeaders));

            return $resultGetEmployeeGroupsForAlcoGroup;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);

            return false;
        }
    }
    /**
     * Method to call the operation originally named GetAcsAccessPointDrivers
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\GetAcsAccessPointDrivers $parameters
     * @return \StructType\GetAcsAccessPointDriversResponse|bool
     */
    public function GetAcsAccessPointDrivers(\StructType\GetAcsAccessPointDrivers $parameters)
    {
        try {
            $this->setResult($resultGetAcsAccessPointDrivers = $this->getSoapClient()->__soapCall('GetAcsAccessPointDrivers', [
                $parameters,
            ], [], [], $this->outputHeaders));

            return $resultGetAcsAccessPointDrivers;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);

            return false;
        }
    }
    /**
     * Method to call the operation originally named GetAcsAccessPoints
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\GetAcsAccessPoints $parameters
     * @return \StructType\GetAcsAccessPointsResponse|bool
     */
    public function GetAcsAccessPoints(\StructType\GetAcsAccessPoints $parameters)
    {
        try {
            $this->setResult($resultGetAcsAccessPoints = $this->getSoapClient()->__soapCall('GetAcsAccessPoints', [
                $parameters,
            ], [], [], $this->outputHeaders));

            return $resultGetAcsAccessPoints;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);

            return false;
        }
    }
    /**
     * Method to call the operation originally named GetWorkZonesByDriverID
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\GetWorkZonesByDriverID $parameters
     * @return \StructType\GetWorkZonesByDriverIDResponse|bool
     */
    public function GetWorkZonesByDriverID(\StructType\GetWorkZonesByDriverID $parameters)
    {
        try {
            $this->setResult($resultGetWorkZonesByDriverID = $this->getSoapClient()->__soapCall('GetWorkZonesByDriverID', [
                $parameters,
            ], [], [], $this->outputHeaders));

            return $resultGetWorkZonesByDriverID;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);

            return false;
        }
    }
    /**
     * Method to call the operation originally named GetWorkZonesByEmployeeID
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\GetWorkZonesByEmployeeID $parameters
     * @return \StructType\GetWorkZonesByEmployeeIDResponse|bool
     */
    public function GetWorkZonesByEmployeeID(\StructType\GetWorkZonesByEmployeeID $parameters)
    {
        try {
            $this->setResult($resultGetWorkZonesByEmployeeID = $this->getSoapClient()->__soapCall('GetWorkZonesByEmployeeID', [
                $parameters,
            ], [], [], $this->outputHeaders));

            return $resultGetWorkZonesByEmployeeID;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);

            return false;
        }
    }
    /**
     * Method to call the operation originally named
     * GetWorkZonesByEmployeeIDIncludeRemovedEmployees
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\GetWorkZonesByEmployeeIDIncludeRemovedEmployees $parameters
     * @return \StructType\GetWorkZonesByEmployeeIDIncludeRemovedEmployeesResponse|bool
     */
    public function GetWorkZonesByEmployeeIDIncludeRemovedEmployees(\StructType\GetWorkZonesByEmployeeIDIncludeRemovedEmployees $parameters)
    {
        try {
            $this->setResult($resultGetWorkZonesByEmployeeIDIncludeRemovedEmployees = $this->getSoapClient()->__soapCall('GetWorkZonesByEmployeeIDIncludeRemovedEmployees', [
                $parameters,
            ], [], [], $this->outputHeaders));

            return $resultGetWorkZonesByEmployeeIDIncludeRemovedEmployees;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);

            return false;
        }
    }
    /**
     * Method to call the operation originally named GetWorkZonesByEmployeeGroupID
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\GetWorkZonesByEmployeeGroupID $parameters
     * @return \StructType\GetWorkZonesByEmployeeGroupIDResponse|bool
     */
    public function GetWorkZonesByEmployeeGroupID(\StructType\GetWorkZonesByEmployeeGroupID $parameters)
    {
        try {
            $this->setResult($resultGetWorkZonesByEmployeeGroupID = $this->getSoapClient()->__soapCall('GetWorkZonesByEmployeeGroupID', [
                $parameters,
            ], [], [], $this->outputHeaders));

            return $resultGetWorkZonesByEmployeeGroupID;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);

            return false;
        }
    }
    /**
     * Method to call the operation originally named GetWorkSchedulesByEmployeeID
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\GetWorkSchedulesByEmployeeID $parameters
     * @return \StructType\GetWorkSchedulesByEmployeeIDResponse|bool
     */
    public function GetWorkSchedulesByEmployeeID(\StructType\GetWorkSchedulesByEmployeeID $parameters)
    {
        try {
            $this->setResult($resultGetWorkSchedulesByEmployeeID = $this->getSoapClient()->__soapCall('GetWorkSchedulesByEmployeeID', [
                $parameters,
            ], [], [], $this->outputHeaders));

            return $resultGetWorkSchedulesByEmployeeID;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);

            return false;
        }
    }
    /**
     * Method to call the operation originally named
     * GetWorkSchedulesByEmployeeIDIncludeRemovedEmployees
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\GetWorkSchedulesByEmployeeIDIncludeRemovedEmployees $parameters
     * @return \StructType\GetWorkSchedulesByEmployeeIDIncludeRemovedEmployeesResponse|bool
     */
    public function GetWorkSchedulesByEmployeeIDIncludeRemovedEmployees(\StructType\GetWorkSchedulesByEmployeeIDIncludeRemovedEmployees $parameters)
    {
        try {
            $this->setResult($resultGetWorkSchedulesByEmployeeIDIncludeRemovedEmployees = $this->getSoapClient()->__soapCall('GetWorkSchedulesByEmployeeIDIncludeRemovedEmployees', [
                $parameters,
            ], [], [], $this->outputHeaders));

            return $resultGetWorkSchedulesByEmployeeIDIncludeRemovedEmployees;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);

            return false;
        }
    }
    /**
     * Method to call the operation originally named GetWorkSchedulesByEmployeeGroupID
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\GetWorkSchedulesByEmployeeGroupID $parameters
     * @return \StructType\GetWorkSchedulesByEmployeeGroupIDResponse|bool
     */
    public function GetWorkSchedulesByEmployeeGroupID(\StructType\GetWorkSchedulesByEmployeeGroupID $parameters)
    {
        try {
            $this->setResult($resultGetWorkSchedulesByEmployeeGroupID = $this->getSoapClient()->__soapCall('GetWorkSchedulesByEmployeeGroupID', [
                $parameters,
            ], [], [], $this->outputHeaders));

            return $resultGetWorkSchedulesByEmployeeGroupID;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);

            return false;
        }
    }
    /**
     * Method to call the operation originally named GetEmployeeForAlcoGroup
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\GetEmployeeForAlcoGroup $parameters
     * @return \StructType\GetEmployeeForAlcoGroupResponse|bool
     */
    public function GetEmployeeForAlcoGroup(\StructType\GetEmployeeForAlcoGroup $parameters)
    {
        try {
            $this->setResult($resultGetEmployeeForAlcoGroup = $this->getSoapClient()->__soapCall('GetEmployeeForAlcoGroup', [
                $parameters,
            ], [], [], $this->outputHeaders));

            return $resultGetEmployeeForAlcoGroup;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);

            return false;
        }
    }
    /**
     * Method to call the operation originally named GetEmployeePageForAlcoGroup
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\GetEmployeePageForAlcoGroup $parameters
     * @return \StructType\GetEmployeePageForAlcoGroupResponse|bool
     */
    public function GetEmployeePageForAlcoGroup(\StructType\GetEmployeePageForAlcoGroup $parameters)
    {
        try {
            $this->setResult($resultGetEmployeePageForAlcoGroup = $this->getSoapClient()->__soapCall('GetEmployeePageForAlcoGroup', [
                $parameters,
            ], [], [], $this->outputHeaders));

            return $resultGetEmployeePageForAlcoGroup;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);

            return false;
        }
    }
    /**
     * Method to call the operation originally named GetWorkplaces
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\GetWorkplaces $parameters
     * @return \StructType\GetWorkplacesResponse|bool
     */
    public function GetWorkplaces(\StructType\GetWorkplaces $parameters)
    {
        try {
            $this->setResult($resultGetWorkplaces = $this->getSoapClient()->__soapCall('GetWorkplaces', [
                $parameters,
            ], [], [], $this->outputHeaders));

            return $resultGetWorkplaces;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);

            return false;
        }
    }
    /**
     * Method to call the operation originally named GetISS_IIDKs
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\GetISS_IIDKs $parameters
     * @return \StructType\GetISS_IIDKsResponse|bool
     */
    public function GetISS_IIDKs(\StructType\GetISS_IIDKs $parameters)
    {
        try {
            $this->setResult($resultGetISS_IIDKs = $this->getSoapClient()->__soapCall('GetISS_IIDKs', [
                $parameters,
            ], [], [], $this->outputHeaders));

            return $resultGetISS_IIDKs;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);

            return false;
        }
    }
    /**
     * Method to call the operation originally named GetISS_Recognition
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\GetISS_Recognition $parameters
     * @return \StructType\GetISS_RecognitionResponse|bool
     */
    public function GetISS_Recognition(\StructType\GetISS_Recognition $parameters)
    {
        try {
            $this->setResult($resultGetISS_Recognition = $this->getSoapClient()->__soapCall('GetISS_Recognition', [
                $parameters,
            ], [], [], $this->outputHeaders));

            return $resultGetISS_Recognition;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);

            return false;
        }
    }
    /**
     * Method to call the operation originally named GetISS_Drivers
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\GetISS_Drivers $parameters
     * @return \StructType\GetISS_DriversResponse|bool
     */
    public function GetISS_Drivers(\StructType\GetISS_Drivers $parameters)
    {
        try {
            $this->setResult($resultGetISS_Drivers = $this->getSoapClient()->__soapCall('GetISS_Drivers', [
                $parameters,
            ], [], [], $this->outputHeaders));

            return $resultGetISS_Drivers;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);

            return false;
        }
    }
    /**
     * Method to call the operation originally named GetISS_IIDK_Slaves
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\GetISS_IIDK_Slaves $parameters
     * @return \StructType\GetISS_IIDK_SlavesResponse|bool
     */
    public function GetISS_IIDK_Slaves(\StructType\GetISS_IIDK_Slaves $parameters)
    {
        try {
            $this->setResult($resultGetISS_IIDK_Slaves = $this->getSoapClient()->__soapCall('GetISS_IIDK_Slaves', [
                $parameters,
            ], [], [], $this->outputHeaders));

            return $resultGetISS_IIDK_Slaves;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);

            return false;
        }
    }
    /**
     * Method to call the operation originally named Get_ISS_DriverEventsPlayback
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\Get_ISS_DriverEventsPlayback $parameters
     * @return \StructType\Get_ISS_DriverEventsPlaybackResponse|bool
     */
    public function Get_ISS_DriverEventsPlayback(\StructType\Get_ISS_DriverEventsPlayback $parameters)
    {
        try {
            $this->setResult($resultGet_ISS_DriverEventsPlayback = $this->getSoapClient()->__soapCall('Get_ISS_DriverEventsPlayback', [
                $parameters,
            ], [], [], $this->outputHeaders));

            return $resultGet_ISS_DriverEventsPlayback;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);

            return false;
        }
    }
    /**
     * Method to call the operation originally named GetAllMaps
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\GetAllMaps $parameters
     * @return \StructType\GetAllMapsResponse|bool
     */
    public function GetAllMaps(\StructType\GetAllMaps $parameters)
    {
        try {
            $this->setResult($resultGetAllMaps = $this->getSoapClient()->__soapCall('GetAllMaps', [
                $parameters,
            ], [], [], $this->outputHeaders));

            return $resultGetAllMaps;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);

            return false;
        }
    }
    /**
     * Method to call the operation originally named GetMapById
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\GetMapById $parameters
     * @return \StructType\GetMapByIdResponse|bool
     */
    public function GetMapById(\StructType\GetMapById $parameters)
    {
        try {
            $this->setResult($resultGetMapById = $this->getSoapClient()->__soapCall('GetMapById', [
                $parameters,
            ], [], [], $this->outputHeaders));

            return $resultGetMapById;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);

            return false;
        }
    }
    /**
     * Method to call the operation originally named GetMapImage
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\GetMapImage $parameters
     * @return \StructType\GetMapImageResponse|bool
     */
    public function GetMapImage(\StructType\GetMapImage $parameters)
    {
        try {
            $this->setResult($resultGetMapImage = $this->getSoapClient()->__soapCall('GetMapImage', [
                $parameters,
            ], [], [], $this->outputHeaders));

            return $resultGetMapImage;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);

            return false;
        }
    }
    /**
     * Method to call the operation originally named
     * GetAcsConfiguratorSettingsByWorkplaceModule
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\GetAcsConfiguratorSettingsByWorkplaceModule $parameters
     * @return \StructType\GetAcsConfiguratorSettingsByWorkplaceModuleResponse|bool
     */
    public function GetAcsConfiguratorSettingsByWorkplaceModule(\StructType\GetAcsConfiguratorSettingsByWorkplaceModule $parameters)
    {
        try {
            $this->setResult($resultGetAcsConfiguratorSettingsByWorkplaceModule = $this->getSoapClient()->__soapCall('GetAcsConfiguratorSettingsByWorkplaceModule', [
                $parameters,
            ], [], [], $this->outputHeaders));

            return $resultGetAcsConfiguratorSettingsByWorkplaceModule;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);

            return false;
        }
    }
    /**
     * Method to call the operation originally named
     * GetVisitorsScoreboardSettingsByWorkplaceModuleId
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\GetVisitorsScoreboardSettingsByWorkplaceModuleId $parameters
     * @return \StructType\GetVisitorsScoreboardSettingsByWorkplaceModuleIdResponse|bool
     */
    public function GetVisitorsScoreboardSettingsByWorkplaceModuleId(\StructType\GetVisitorsScoreboardSettingsByWorkplaceModuleId $parameters)
    {
        try {
            $this->setResult($resultGetVisitorsScoreboardSettingsByWorkplaceModuleId = $this->getSoapClient()->__soapCall('GetVisitorsScoreboardSettingsByWorkplaceModuleId', [
                $parameters,
            ], [], [], $this->outputHeaders));

            return $resultGetVisitorsScoreboardSettingsByWorkplaceModuleId;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);

            return false;
        }
    }
    /**
     * Method to call the operation originally named GetWorkZoneVisitorsCount
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\GetWorkZoneVisitorsCount $parameters
     * @return \StructType\GetWorkZoneVisitorsCountResponse|bool
     */
    public function GetWorkZoneVisitorsCount(\StructType\GetWorkZoneVisitorsCount $parameters)
    {
        try {
            $this->setResult($resultGetWorkZoneVisitorsCount = $this->getSoapClient()->__soapCall('GetWorkZoneVisitorsCount', [
                $parameters,
            ], [], [], $this->outputHeaders));

            return $resultGetWorkZoneVisitorsCount;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);

            return false;
        }
    }
    /**
     * Method to call the operation originally named GetUidsKeys
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\GetUidsKeys $parameters
     * @return \StructType\GetUidsKeysResponse|bool
     */
    public function GetUidsKeys(\StructType\GetUidsKeys $parameters)
    {
        try {
            $this->setResult($resultGetUidsKeys = $this->getSoapClient()->__soapCall('GetUidsKeys', [
                $parameters,
            ], [], [], $this->outputHeaders));

            return $resultGetUidsKeys;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);

            return false;
        }
    }
    /**
     * Method to call the operation originally named GetKeyByUid
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\GetKeyByUid $parameters
     * @return \StructType\GetKeyByUidResponse|bool
     */
    public function GetKeyByUid(\StructType\GetKeyByUid $parameters)
    {
        try {
            $this->setResult($resultGetKeyByUid = $this->getSoapClient()->__soapCall('GetKeyByUid', [
                $parameters,
            ], [], [], $this->outputHeaders));

            return $resultGetKeyByUid;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);

            return false;
        }
    }
    /**
     * Method to call the operation originally named GetMifareProfiles
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\GetMifareProfiles $parameters
     * @return \StructType\GetMifareProfilesResponse|bool
     */
    public function GetMifareProfiles(\StructType\GetMifareProfiles $parameters)
    {
        try {
            $this->setResult($resultGetMifareProfiles = $this->getSoapClient()->__soapCall('GetMifareProfiles', [
                $parameters,
            ], [], [], $this->outputHeaders));

            return $resultGetMifareProfiles;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);

            return false;
        }
    }
    /**
     * Method to call the operation originally named GetMifareProfilesFullInfo
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\GetMifareProfilesFullInfo $parameters
     * @return \StructType\GetMifareProfilesFullInfoResponse|bool
     */
    public function GetMifareProfilesFullInfo(\StructType\GetMifareProfilesFullInfo $parameters)
    {
        try {
            $this->setResult($resultGetMifareProfilesFullInfo = $this->getSoapClient()->__soapCall('GetMifareProfilesFullInfo', [
                $parameters,
            ], [], [], $this->outputHeaders));

            return $resultGetMifareProfilesFullInfo;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);

            return false;
        }
    }
    /**
     * Method to call the operation originally named GetScreenLayoutForWorkplaceModule
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\GetScreenLayoutForWorkplaceModule $parameters
     * @return \StructType\GetScreenLayoutForWorkplaceModuleResponse|bool
     */
    public function GetScreenLayoutForWorkplaceModule(\StructType\GetScreenLayoutForWorkplaceModule $parameters)
    {
        try {
            $this->setResult($resultGetScreenLayoutForWorkplaceModule = $this->getSoapClient()->__soapCall('GetScreenLayoutForWorkplaceModule', [
                $parameters,
            ], [], [], $this->outputHeaders));

            return $resultGetScreenLayoutForWorkplaceModule;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);

            return false;
        }
    }
    /**
     * Method to call the operation originally named
     * GetScreenCellPhotoIdentificationContent
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\GetScreenCellPhotoIdentificationContent $parameters
     * @return \StructType\GetScreenCellPhotoIdentificationContentResponse|bool
     */
    public function GetScreenCellPhotoIdentificationContent(\StructType\GetScreenCellPhotoIdentificationContent $parameters)
    {
        try {
            $this->setResult($resultGetScreenCellPhotoIdentificationContent = $this->getSoapClient()->__soapCall('GetScreenCellPhotoIdentificationContent', [
                $parameters,
            ], [], [], $this->outputHeaders));

            return $resultGetScreenCellPhotoIdentificationContent;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);

            return false;
        }
    }
    /**
     * Method to call the operation originally named GetScreenCellCameraContent
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\GetScreenCellCameraContent $parameters
     * @return \StructType\GetScreenCellCameraContentResponse|bool
     */
    public function GetScreenCellCameraContent(\StructType\GetScreenCellCameraContent $parameters)
    {
        try {
            $this->setResult($resultGetScreenCellCameraContent = $this->getSoapClient()->__soapCall('GetScreenCellCameraContent', [
                $parameters,
            ], [], [], $this->outputHeaders));

            return $resultGetScreenCellCameraContent;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);

            return false;
        }
    }
    /**
     * Method to call the operation originally named GetIvideonCameraDrivers
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\GetIvideonCameraDrivers $parameters
     * @return \StructType\GetIvideonCameraDriversResponse|bool
     */
    public function GetIvideonCameraDrivers(\StructType\GetIvideonCameraDrivers $parameters)
    {
        try {
            $this->setResult($resultGetIvideonCameraDrivers = $this->getSoapClient()->__soapCall('GetIvideonCameraDrivers', [
                $parameters,
            ], [], [], $this->outputHeaders));

            return $resultGetIvideonCameraDrivers;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);

            return false;
        }
    }
    /**
     * Method to call the operation originally named GetPhotoidentificationPersonalData
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\GetPhotoidentificationPersonalData $parameters
     * @return \StructType\GetPhotoidentificationPersonalDataResponse|bool
     */
    public function GetPhotoidentificationPersonalData(\StructType\GetPhotoidentificationPersonalData $parameters)
    {
        try {
            $this->setResult($resultGetPhotoidentificationPersonalData = $this->getSoapClient()->__soapCall('GetPhotoidentificationPersonalData', [
                $parameters,
            ], [], [], $this->outputHeaders));

            return $resultGetPhotoidentificationPersonalData;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);

            return false;
        }
    }
    /**
     * Method to call the operation originally named GetEmailAddresses
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\GetEmailAddresses $parameters
     * @return \StructType\GetEmailAddressesResponse|bool
     */
    public function GetEmailAddresses(\StructType\GetEmailAddresses $parameters)
    {
        try {
            $this->setResult($resultGetEmailAddresses = $this->getSoapClient()->__soapCall('GetEmailAddresses', [
                $parameters,
            ], [], [], $this->outputHeaders));

            return $resultGetEmailAddresses;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);

            return false;
        }
    }
    /**
     * Method to call the operation originally named
     * GetEmailAddressesIncludeRemovedEmployees
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\GetEmailAddressesIncludeRemovedEmployees $parameters
     * @return \StructType\GetEmailAddressesIncludeRemovedEmployeesResponse|bool
     */
    public function GetEmailAddressesIncludeRemovedEmployees(\StructType\GetEmailAddressesIncludeRemovedEmployees $parameters)
    {
        try {
            $this->setResult($resultGetEmailAddressesIncludeRemovedEmployees = $this->getSoapClient()->__soapCall('GetEmailAddressesIncludeRemovedEmployees', [
                $parameters,
            ], [], [], $this->outputHeaders));

            return $resultGetEmailAddressesIncludeRemovedEmployees;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);

            return false;
        }
    }
    /**
     * Method to call the operation originally named GetPhoneNumbers
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\GetPhoneNumbers $parameters
     * @return \StructType\GetPhoneNumbersResponse|bool
     */
    public function GetPhoneNumbers(\StructType\GetPhoneNumbers $parameters)
    {
        try {
            $this->setResult($resultGetPhoneNumbers = $this->getSoapClient()->__soapCall('GetPhoneNumbers', [
                $parameters,
            ], [], [], $this->outputHeaders));

            return $resultGetPhoneNumbers;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);

            return false;
        }
    }
    /**
     * Method to call the operation originally named
     * GetPhoneNumbersIncludeRemovedEmployees
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\GetPhoneNumbersIncludeRemovedEmployees $parameters
     * @return \StructType\GetPhoneNumbersIncludeRemovedEmployeesResponse|bool
     */
    public function GetPhoneNumbersIncludeRemovedEmployees(\StructType\GetPhoneNumbersIncludeRemovedEmployees $parameters)
    {
        try {
            $this->setResult($resultGetPhoneNumbersIncludeRemovedEmployees = $this->getSoapClient()->__soapCall('GetPhoneNumbersIncludeRemovedEmployees', [
                $parameters,
            ], [], [], $this->outputHeaders));

            return $resultGetPhoneNumbersIncludeRemovedEmployees;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);

            return false;
        }
    }
    /**
     * Method to call the operation originally named GetEmployeeSchedules
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\GetEmployeeSchedules $parameters
     * @return \StructType\GetEmployeeSchedulesResponse|bool
     */
    public function GetEmployeeSchedules(\StructType\GetEmployeeSchedules $parameters)
    {
        try {
            $this->setResult($resultGetEmployeeSchedules = $this->getSoapClient()->__soapCall('GetEmployeeSchedules', [
                $parameters,
            ], [], [], $this->outputHeaders));

            return $resultGetEmployeeSchedules;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);

            return false;
        }
    }
    /**
     * Method to call the operation originally named
     * GetEmployeeSchedulesIncludeRemovedEmployees
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\GetEmployeeSchedulesIncludeRemovedEmployees $parameters
     * @return \StructType\GetEmployeeSchedulesIncludeRemovedEmployeesResponse|bool
     */
    public function GetEmployeeSchedulesIncludeRemovedEmployees(\StructType\GetEmployeeSchedulesIncludeRemovedEmployees $parameters)
    {
        try {
            $this->setResult($resultGetEmployeeSchedulesIncludeRemovedEmployees = $this->getSoapClient()->__soapCall('GetEmployeeSchedulesIncludeRemovedEmployees', [
                $parameters,
            ], [], [], $this->outputHeaders));

            return $resultGetEmployeeSchedulesIncludeRemovedEmployees;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);

            return false;
        }
    }
    /**
     * Method to call the operation originally named GetEmailDistributionAddresses
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\GetEmailDistributionAddresses $parameters
     * @return \StructType\GetEmailDistributionAddressesResponse|bool
     */
    public function GetEmailDistributionAddresses(\StructType\GetEmailDistributionAddresses $parameters)
    {
        try {
            $this->setResult($resultGetEmailDistributionAddresses = $this->getSoapClient()->__soapCall('GetEmailDistributionAddresses', [
                $parameters,
            ], [], [], $this->outputHeaders));

            return $resultGetEmailDistributionAddresses;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);

            return false;
        }
    }
    /**
     * Method to call the operation originally named GetVariable
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\GetVariable $parameters
     * @return \StructType\GetVariableResponse|bool
     */
    public function GetVariable(\StructType\GetVariable $parameters)
    {
        try {
            $this->setResult($resultGetVariable = $this->getSoapClient()->__soapCall('GetVariable', [
                $parameters,
            ], [], [], $this->outputHeaders));

            return $resultGetVariable;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);

            return false;
        }
    }
    /**
     * Method to call the operation originally named GetChildrenNets
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\GetChildrenNets $parameters
     * @return \StructType\GetChildrenNetsResponse|bool
     */
    public function GetChildrenNets(\StructType\GetChildrenNets $parameters)
    {
        try {
            $this->setResult($resultGetChildrenNets = $this->getSoapClient()->__soapCall('GetChildrenNets', [
                $parameters,
            ], [], [], $this->outputHeaders));

            return $resultGetChildrenNets;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);

            return false;
        }
    }
    /**
     * Method to call the operation originally named GetAllNets
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\GetAllNets $parameters
     * @return \StructType\GetAllNetsResponse|bool
     */
    public function GetAllNets(\StructType\GetAllNets $parameters)
    {
        try {
            $this->setResult($resultGetAllNets = $this->getSoapClient()->__soapCall('GetAllNets', [
                $parameters,
            ], [], [], $this->outputHeaders));

            return $resultGetAllNets;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);

            return false;
        }
    }
    /**
     * Method to call the operation originally named GetLocalNet
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\GetLocalNet $parameters
     * @return \StructType\GetLocalNetResponse|bool
     */
    public function GetLocalNet(\StructType\GetLocalNet $parameters)
    {
        try {
            $this->setResult($resultGetLocalNet = $this->getSoapClient()->__soapCall('GetLocalNet', [
                $parameters,
            ], [], [], $this->outputHeaders));

            return $resultGetLocalNet;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);

            return false;
        }
    }
    /**
     * Method to call the operation originally named GetNetServers
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\GetNetServers $parameters
     * @return \StructType\GetNetServersResponse|bool
     */
    public function GetNetServers(\StructType\GetNetServers $parameters)
    {
        try {
            $this->setResult($resultGetNetServers = $this->getSoapClient()->__soapCall('GetNetServers', [
                $parameters,
            ], [], [], $this->outputHeaders));

            return $resultGetNetServers;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);

            return false;
        }
    }
    /**
     * Method to call the operation originally named GetServer
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\GetServer $parameters
     * @return \StructType\GetServerResponse|bool
     */
    public function GetServer(\StructType\GetServer $parameters)
    {
        try {
            $this->setResult($resultGetServer = $this->getSoapClient()->__soapCall('GetServer', [
                $parameters,
            ], [], [], $this->outputHeaders));

            return $resultGetServer;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);

            return false;
        }
    }
    /**
     * Method to call the operation originally named GetRootServerDrivers
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\GetRootServerDrivers $parameters
     * @return \StructType\GetRootServerDriversResponse|bool
     */
    public function GetRootServerDrivers(\StructType\GetRootServerDrivers $parameters)
    {
        try {
            $this->setResult($resultGetRootServerDrivers = $this->getSoapClient()->__soapCall('GetRootServerDrivers', [
                $parameters,
            ], [], [], $this->outputHeaders));

            return $resultGetRootServerDrivers;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);

            return false;
        }
    }
    /**
     * Method to call the operation originally named GetDriversByType
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\GetDriversByType $parameters
     * @return \StructType\GetDriversByTypeResponse|bool
     */
    public function GetDriversByType(\StructType\GetDriversByType $parameters)
    {
        try {
            $this->setResult($resultGetDriversByType = $this->getSoapClient()->__soapCall('GetDriversByType', [
                $parameters,
            ], [], [], $this->outputHeaders));

            return $resultGetDriversByType;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);

            return false;
        }
    }
    /**
     * Method to call the operation originally named GetServerDriversFullInfo
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\GetServerDriversFullInfo $parameters
     * @return \StructType\GetServerDriversFullInfoResponse|bool
     */
    public function GetServerDriversFullInfo(\StructType\GetServerDriversFullInfo $parameters)
    {
        try {
            $this->setResult($resultGetServerDriversFullInfo = $this->getSoapClient()->__soapCall('GetServerDriversFullInfo', [
                $parameters,
            ], [], [], $this->outputHeaders));

            return $resultGetServerDriversFullInfo;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);

            return false;
        }
    }
    /**
     * Method to call the operation originally named GetNetworkChanges
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\GetNetworkChanges $parameters
     * @return \StructType\GetNetworkChangesResponse|bool
     */
    public function GetNetworkChanges(\StructType\GetNetworkChanges $parameters)
    {
        try {
            $this->setResult($resultGetNetworkChanges = $this->getSoapClient()->__soapCall('GetNetworkChanges', [
                $parameters,
            ], [], [], $this->outputHeaders));

            return $resultGetNetworkChanges;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);

            return false;
        }
    }
    /**
     * Method to call the operation originally named GetNotify
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\GetNotify $parameters
     * @return \StructType\GetNotifyResponse|bool
     */
    public function GetNotify(\StructType\GetNotify $parameters)
    {
        try {
            $this->setResult($resultGetNotify = $this->getSoapClient()->__soapCall('GetNotify', [
                $parameters,
            ], [], [], $this->outputHeaders));

            return $resultGetNotify;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);

            return false;
        }
    }
    /**
     * Method to call the operation originally named GetDriver
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\GetDriver $parameters
     * @return \StructType\GetDriverResponse|bool
     */
    public function GetDriver(\StructType\GetDriver $parameters)
    {
        try {
            $this->setResult($resultGetDriver = $this->getSoapClient()->__soapCall('GetDriver', [
                $parameters,
            ], [], [], $this->outputHeaders));

            return $resultGetDriver;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);

            return false;
        }
    }
    /**
     * Method to call the operation originally named GetLogMessageTypes
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\GetLogMessageTypes $parameters
     * @return \StructType\GetLogMessageTypesResponse|bool
     */
    public function GetLogMessageTypes(\StructType\GetLogMessageTypes $parameters)
    {
        try {
            $this->setResult($resultGetLogMessageTypes = $this->getSoapClient()->__soapCall('GetLogMessageTypes', [
                $parameters,
            ], [], [], $this->outputHeaders));

            return $resultGetLogMessageTypes;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);

            return false;
        }
    }
    /**
     * Method to call the operation originally named GetLogMessageSubtypes
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\GetLogMessageSubtypes $parameters
     * @return \StructType\GetLogMessageSubtypesResponse|bool
     */
    public function GetLogMessageSubtypes(\StructType\GetLogMessageSubtypes $parameters)
    {
        try {
            $this->setResult($resultGetLogMessageSubtypes = $this->getSoapClient()->__soapCall('GetLogMessageSubtypes', [
                $parameters,
            ], [], [], $this->outputHeaders));

            return $resultGetLogMessageSubtypes;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);

            return false;
        }
    }
    /**
     * Method to call the operation originally named GetEvents
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\GetEvents $parameters
     * @return \StructType\GetEventsResponse|bool
     */
    public function GetEvents(\StructType\GetEvents $parameters)
    {
        try {
            $this->setResult($resultGetEvents = $this->getSoapClient()->__soapCall('GetEvents', [
                $parameters,
            ], [], [], $this->outputHeaders));

            return $resultGetEvents;
        } catch (SoapFault $soapFault) {
          dd($soapFault->getMessage());
            $this->saveLastError(__METHOD__, $soapFault);

            return false;
        }
    }
    /**
     * Method to call the operation originally named GetLastEvent
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\GetLastEvent $parameters
     * @return \StructType\GetLastEventResponse|bool
     */
    public function GetLastEvent(\StructType\GetLastEvent $parameters)
    {
        try {
            $this->setResult($resultGetLastEvent = $this->getSoapClient()->__soapCall('GetLastEvent', [
                $parameters,
            ], [], [], $this->outputHeaders));

            return $resultGetLastEvent;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);

            return false;
        }
    }
    /**
     * Method to call the operation originally named GetEventsByDeviceIDs
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\GetEventsByDeviceIDs $parameters
     * @return \StructType\GetEventsByDeviceIDsResponse|bool
     */
    public function GetEventsByDeviceIDs(\StructType\GetEventsByDeviceIDs $parameters)
    {
        try {
            $this->setResult($resultGetEventsByDeviceIDs = $this->getSoapClient()->__soapCall('GetEventsByDeviceIDs', [
                $parameters,
            ], [], [], $this->outputHeaders));

            return $resultGetEventsByDeviceIDs;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);

            return false;
        }
    }
    /**
     * Method to call the operation originally named GetFilteredEvents
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\GetFilteredEvents $parameters
     * @return \StructType\GetFilteredEventsResponse|bool
     */
    public function GetFilteredEvents(\StructType\GetFilteredEvents $parameters)
    {
        try {
            $this->setResult($resultGetFilteredEvents = $this->getSoapClient()->__soapCall('GetFilteredEvents', [
                $parameters,
            ], [], [], $this->outputHeaders));

            return $resultGetFilteredEvents;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);

            return false;
        }
    }
    /**
     * Method to call the operation originally named GetLastEventByDeviceIDs
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\GetLastEventByDeviceIDs $parameters
     * @return \StructType\GetLastEventByDeviceIDsResponse|bool
     */
    public function GetLastEventByDeviceIDs(\StructType\GetLastEventByDeviceIDs $parameters)
    {
        try {
            $this->setResult($resultGetLastEventByDeviceIDs = $this->getSoapClient()->__soapCall('GetLastEventByDeviceIDs', [
                $parameters,
            ], [], [], $this->outputHeaders));

            return $resultGetLastEventByDeviceIDs;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);

            return false;
        }
    }
    /**
     * Method to call the operation originally named GetEventsByDeviceTypes
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\GetEventsByDeviceTypes $parameters
     * @return \StructType\GetEventsByDeviceTypesResponse|bool
     */
    public function GetEventsByDeviceTypes(\StructType\GetEventsByDeviceTypes $parameters)
    {
        try {
            $this->setResult($resultGetEventsByDeviceTypes = $this->getSoapClient()->__soapCall('GetEventsByDeviceTypes', [
                $parameters,
            ], [], [], $this->outputHeaders));

            return $resultGetEventsByDeviceTypes;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);

            return false;
        }
    }
    /**
     * Method to call the operation originally named GetLastEventByDeviceTypes
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\GetLastEventByDeviceTypes $parameters
     * @return \StructType\GetLastEventByDeviceTypesResponse|bool
     */
    public function GetLastEventByDeviceTypes(\StructType\GetLastEventByDeviceTypes $parameters)
    {
        try {
            $this->setResult($resultGetLastEventByDeviceTypes = $this->getSoapClient()->__soapCall('GetLastEventByDeviceTypes', [
                $parameters,
            ], [], [], $this->outputHeaders));

            return $resultGetLastEventByDeviceTypes;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);

            return false;
        }
    }
    /**
     * Method to call the operation originally named GetUser
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\GetUser $parameters
     * @return \StructType\GetUserResponse|bool
     */
    public function GetUser(\StructType\GetUser $parameters)
    {
        try {
            $this->setResult($resultGetUser = $this->getSoapClient()->__soapCall('GetUser', [
                $parameters,
            ], [], [], $this->outputHeaders));

            return $resultGetUser;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);

            return false;
        }
    }
    /**
     * Method to call the operation originally named GetOperator
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\GetOperator $parameters
     * @return \StructType\GetOperatorResponse|bool
     */
    public function GetOperator(\StructType\GetOperator $parameters)
    {
        try {
            $this->setResult($resultGetOperator = $this->getSoapClient()->__soapCall('GetOperator', [
                $parameters,
            ], [], [], $this->outputHeaders));

            return $resultGetOperator;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);

            return false;
        }
    }
    /**
     * Method to call the operation originally named GetUsers
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\GetUsers $parameters
     * @return \StructType\GetUsersResponse|bool
     */
    public function GetUsers(\StructType\GetUsers $parameters)
    {
        try {
            $this->setResult($resultGetUsers = $this->getSoapClient()->__soapCall('GetUsers', [
                $parameters,
            ], [], [], $this->outputHeaders));

            return $resultGetUsers;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);

            return false;
        }
    }
    /**
     * Method to call the operation originally named GetUserGroup
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\GetUserGroup $parameters
     * @return \StructType\GetUserGroupResponse|bool
     */
    public function GetUserGroup(\StructType\GetUserGroup $parameters)
    {
        try {
            $this->setResult($resultGetUserGroup = $this->getSoapClient()->__soapCall('GetUserGroup', [
                $parameters,
            ], [], [], $this->outputHeaders));

            return $resultGetUserGroup;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);

            return false;
        }
    }
    /**
     * Method to call the operation originally named GetUserGroups
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\GetUserGroups $parameters
     * @return \StructType\GetUserGroupsResponse|bool
     */
    public function GetUserGroups(\StructType\GetUserGroups $parameters)
    {
        try {
            $this->setResult($resultGetUserGroups = $this->getSoapClient()->__soapCall('GetUserGroups', [
                $parameters,
            ], [], [], $this->outputHeaders));

            return $resultGetUserGroups;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);

            return false;
        }
    }
    /**
     * Method to call the operation originally named GetUserGroupsByUserID
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\GetUserGroupsByUserID $parameters
     * @return \StructType\GetUserGroupsByUserIDResponse|bool
     */
    public function GetUserGroupsByUserID(\StructType\GetUserGroupsByUserID $parameters)
    {
        try {
            $this->setResult($resultGetUserGroupsByUserID = $this->getSoapClient()->__soapCall('GetUserGroupsByUserID', [
                $parameters,
            ], [], [], $this->outputHeaders));

            return $resultGetUserGroupsByUserID;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);

            return false;
        }
    }
    /**
     * Method to call the operation originally named GetUsersByUserGroupID
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\GetUsersByUserGroupID $parameters
     * @return \StructType\GetUsersByUserGroupIDResponse|bool
     */
    public function GetUsersByUserGroupID(\StructType\GetUsersByUserGroupID $parameters)
    {
        try {
            $this->setResult($resultGetUsersByUserGroupID = $this->getSoapClient()->__soapCall('GetUsersByUserGroupID', [
                $parameters,
            ], [], [], $this->outputHeaders));

            return $resultGetUsersByUserGroupID;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);

            return false;
        }
    }
    /**
     * Method to call the operation originally named GetClaim
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\GetClaim $parameters
     * @return \StructType\GetClaimResponse|bool
     */
    public function GetClaim(\StructType\GetClaim $parameters)
    {
        try {
            $this->setResult($resultGetClaim = $this->getSoapClient()->__soapCall('GetClaim', [
                $parameters,
            ], [], [], $this->outputHeaders));

            return $resultGetClaim;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);

            return false;
        }
    }
    /**
     * Method to call the operation originally named GetClaimsForUserGroup
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\GetClaimsForUserGroup $parameters
     * @return \StructType\GetClaimsForUserGroupResponse|bool
     */
    public function GetClaimsForUserGroup(\StructType\GetClaimsForUserGroup $parameters)
    {
        try {
            $this->setResult($resultGetClaimsForUserGroup = $this->getSoapClient()->__soapCall('GetClaimsForUserGroup', [
                $parameters,
            ], [], [], $this->outputHeaders));

            return $resultGetClaimsForUserGroup;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);

            return false;
        }
    }
    /**
     * Method to call the operation originally named GetClaimsForUserByUserId
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\GetClaimsForUserByUserId $parameters
     * @return \StructType\GetClaimsForUserByUserIdResponse|bool
     */
    public function GetClaimsForUserByUserId(\StructType\GetClaimsForUserByUserId $parameters)
    {
        try {
            $this->setResult($resultGetClaimsForUserByUserId = $this->getSoapClient()->__soapCall('GetClaimsForUserByUserId', [
                $parameters,
            ], [], [], $this->outputHeaders));

            return $resultGetClaimsForUserByUserId;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);

            return false;
        }
    }
    /**
     * Method to call the operation originally named GetClaimsForUserByUserLogin
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\GetClaimsForUserByUserLogin $parameters
     * @return \StructType\GetClaimsForUserByUserLoginResponse|bool
     */
    public function GetClaimsForUserByUserLogin(\StructType\GetClaimsForUserByUserLogin $parameters)
    {
        try {
            $this->setResult($resultGetClaimsForUserByUserLogin = $this->getSoapClient()->__soapCall('GetClaimsForUserByUserLogin', [
                $parameters,
            ], [], [], $this->outputHeaders));

            return $resultGetClaimsForUserByUserLogin;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);

            return false;
        }
    }
    /**
     * Method to call the operation originally named GetAcsDaySchedules
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\GetAcsDaySchedules $parameters
     * @return \StructType\GetAcsDaySchedulesResponse|bool
     */
    public function GetAcsDaySchedules(\StructType\GetAcsDaySchedules $parameters)
    {
        try {
            $this->setResult($resultGetAcsDaySchedules = $this->getSoapClient()->__soapCall('GetAcsDaySchedules', [
                $parameters,
            ], [], [], $this->outputHeaders));

            return $resultGetAcsDaySchedules;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);

            return false;
        }
    }
    /**
     * Method to call the operation originally named GetAcsDaySchedulesByOwner
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\GetAcsDaySchedulesByOwner $parameters
     * @return \StructType\GetAcsDaySchedulesByOwnerResponse|bool
     */
    public function GetAcsDaySchedulesByOwner(\StructType\GetAcsDaySchedulesByOwner $parameters)
    {
        try {
            $this->setResult($resultGetAcsDaySchedulesByOwner = $this->getSoapClient()->__soapCall('GetAcsDaySchedulesByOwner', [
                $parameters,
            ], [], [], $this->outputHeaders));

            return $resultGetAcsDaySchedulesByOwner;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);

            return false;
        }
    }
    /**
     * Method to call the operation originally named GetAcsDaySchedule
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\GetAcsDaySchedule $parameters
     * @return \StructType\GetAcsDayScheduleResponse|bool
     */
    public function GetAcsDaySchedule(\StructType\GetAcsDaySchedule $parameters)
    {
        try {
            $this->setResult($resultGetAcsDaySchedule = $this->getSoapClient()->__soapCall('GetAcsDaySchedule', [
                $parameters,
            ], [], [], $this->outputHeaders));

            return $resultGetAcsDaySchedule;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);

            return false;
        }
    }
    /**
     * Method to call the operation originally named GetAcsDayScheduleByOwner
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\GetAcsDayScheduleByOwner $parameters
     * @return \StructType\GetAcsDayScheduleByOwnerResponse|bool
     */
    public function GetAcsDayScheduleByOwner(\StructType\GetAcsDayScheduleByOwner $parameters)
    {
        try {
            $this->setResult($resultGetAcsDayScheduleByOwner = $this->getSoapClient()->__soapCall('GetAcsDayScheduleByOwner', [
                $parameters,
            ], [], [], $this->outputHeaders));

            return $resultGetAcsDayScheduleByOwner;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);

            return false;
        }
    }
    /**
     * Method to call the operation originally named GetAcsMultiDaySchedules
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\GetAcsMultiDaySchedules $parameters
     * @return \StructType\GetAcsMultiDaySchedulesResponse|bool
     */
    public function GetAcsMultiDaySchedules(\StructType\GetAcsMultiDaySchedules $parameters)
    {
        try {
            $this->setResult($resultGetAcsMultiDaySchedules = $this->getSoapClient()->__soapCall('GetAcsMultiDaySchedules', [
                $parameters,
            ], [], [], $this->outputHeaders));

            return $resultGetAcsMultiDaySchedules;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);

            return false;
        }
    }
    /**
     * Method to call the operation originally named GetAcsMultiDaySchedule
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\GetAcsMultiDaySchedule $parameters
     * @return \StructType\GetAcsMultiDayScheduleResponse|bool
     */
    public function GetAcsMultiDaySchedule(\StructType\GetAcsMultiDaySchedule $parameters)
    {
        try {
            $this->setResult($resultGetAcsMultiDaySchedule = $this->getSoapClient()->__soapCall('GetAcsMultiDaySchedule', [
                $parameters,
            ], [], [], $this->outputHeaders));

            return $resultGetAcsMultiDaySchedule;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);

            return false;
        }
    }
    /**
     * Method to call the operation originally named GetAcsWeekSlimSchedules
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\GetAcsWeekSlimSchedules $parameters
     * @return \StructType\GetAcsWeekSlimSchedulesResponse|bool
     */
    public function GetAcsWeekSlimSchedules(\StructType\GetAcsWeekSlimSchedules $parameters)
    {
        try {
            $this->setResult($resultGetAcsWeekSlimSchedules = $this->getSoapClient()->__soapCall('GetAcsWeekSlimSchedules', [
                $parameters,
            ], [], [], $this->outputHeaders));

            return $resultGetAcsWeekSlimSchedules;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);

            return false;
        }
    }
    /**
     * Method to call the operation originally named GetAcsWeekFullSchedules
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\GetAcsWeekFullSchedules $parameters
     * @return \StructType\GetAcsWeekFullSchedulesResponse|bool
     */
    public function GetAcsWeekFullSchedules(\StructType\GetAcsWeekFullSchedules $parameters)
    {
        try {
            $this->setResult($resultGetAcsWeekFullSchedules = $this->getSoapClient()->__soapCall('GetAcsWeekFullSchedules', [
                $parameters,
            ], [], [], $this->outputHeaders));

            return $resultGetAcsWeekFullSchedules;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);

            return false;
        }
    }
    /**
     * Method to call the operation originally named GetAcsWeekSchedule
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\GetAcsWeekSchedule $parameters
     * @return \StructType\GetAcsWeekScheduleResponse|bool
     */
    public function GetAcsWeekSchedule(\StructType\GetAcsWeekSchedule $parameters)
    {
        try {
            $this->setResult($resultGetAcsWeekSchedule = $this->getSoapClient()->__soapCall('GetAcsWeekSchedule', [
                $parameters,
            ], [], [], $this->outputHeaders));

            return $resultGetAcsWeekSchedule;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);

            return false;
        }
    }
    /**
     * Method to call the operation originally named GetAcsCustomDays
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\GetAcsCustomDays $parameters
     * @return \StructType\GetAcsCustomDaysResponse|bool
     */
    public function GetAcsCustomDays(\StructType\GetAcsCustomDays $parameters)
    {
        try {
            $this->setResult($resultGetAcsCustomDays = $this->getSoapClient()->__soapCall('GetAcsCustomDays', [
                $parameters,
            ], [], [], $this->outputHeaders));

            return $resultGetAcsCustomDays;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);

            return false;
        }
    }
    /**
     * Method to call the operation originally named GetAcsCustomDay
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\GetAcsCustomDay $parameters
     * @return \StructType\GetAcsCustomDayResponse|bool
     */
    public function GetAcsCustomDay(\StructType\GetAcsCustomDay $parameters)
    {
        try {
            $this->setResult($resultGetAcsCustomDay = $this->getSoapClient()->__soapCall('GetAcsCustomDay', [
                $parameters,
            ], [], [], $this->outputHeaders));

            return $resultGetAcsCustomDay;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);

            return false;
        }
    }
    /**
     * Method to call the operation originally named GetAcsWorkDaysWithTransfer
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\GetAcsWorkDaysWithTransfer $parameters
     * @return \StructType\GetAcsWorkDaysWithTransferResponse|bool
     */
    public function GetAcsWorkDaysWithTransfer(\StructType\GetAcsWorkDaysWithTransfer $parameters)
    {
        try {
            $this->setResult($resultGetAcsWorkDaysWithTransfer = $this->getSoapClient()->__soapCall('GetAcsWorkDaysWithTransfer', [
                $parameters,
            ], [], [], $this->outputHeaders));

            return $resultGetAcsWorkDaysWithTransfer;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);

            return false;
        }
    }
    /**
     * Method to call the operation originally named GetAcsWorkDayWithTransfer
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\GetAcsWorkDayWithTransfer $parameters
     * @return \StructType\GetAcsWorkDayWithTransferResponse|bool
     */
    public function GetAcsWorkDayWithTransfer(\StructType\GetAcsWorkDayWithTransfer $parameters)
    {
        try {
            $this->setResult($resultGetAcsWorkDayWithTransfer = $this->getSoapClient()->__soapCall('GetAcsWorkDayWithTransfer', [
                $parameters,
            ], [], [], $this->outputHeaders));

            return $resultGetAcsWorkDayWithTransfer;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);

            return false;
        }
    }
    /**
     * Method to call the operation originally named GetDictionaryElement
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\GetDictionaryElement $parameters
     * @return \StructType\GetDictionaryElementResponse|bool
     */
    public function GetDictionaryElement(\StructType\GetDictionaryElement $parameters)
    {
        try {
            $this->setResult($resultGetDictionaryElement = $this->getSoapClient()->__soapCall('GetDictionaryElement', [
                $parameters,
            ], [], [], $this->outputHeaders));

            return $resultGetDictionaryElement;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);

            return false;
        }
    }
    /**
     * Method to call the operation originally named GetDictionaryElements
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\GetDictionaryElements $parameters
     * @return \StructType\GetDictionaryElementsResponse|bool
     */
    public function GetDictionaryElements(\StructType\GetDictionaryElements $parameters)
    {
        try {
            $this->setResult($resultGetDictionaryElements = $this->getSoapClient()->__soapCall('GetDictionaryElements', [
                $parameters,
            ], [], [], $this->outputHeaders));

            return $resultGetDictionaryElements;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);

            return false;
        }
    }
    /**
     * Method to call the operation originally named GetCardType
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\GetCardType $parameters
     * @return \StructType\GetCardTypeResponse|bool
     */
    public function GetCardType(\StructType\GetCardType $parameters)
    {
        try {
            $this->setResult($resultGetCardType = $this->getSoapClient()->__soapCall('GetCardType', [
                $parameters,
            ], [], [], $this->outputHeaders));

            return $resultGetCardType;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);

            return false;
        }
    }
    /**
     * Method to call the operation originally named GetAllBranch
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\GetAllBranch $parameters
     * @return \StructType\GetAllBranchResponse|bool
     */
    public function GetAllBranch(\StructType\GetAllBranch $parameters)
    {
        try {
            $this->setResult($resultGetAllBranch = $this->getSoapClient()->__soapCall('GetAllBranch', [
                $parameters,
            ], [], [], $this->outputHeaders));

            return $resultGetAllBranch;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);

            return false;
        }
    }
    /**
     * Method to call the operation originally named GetBranch
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\GetBranch $parameters
     * @return \StructType\GetBranchResponse|bool
     */
    public function GetBranch(\StructType\GetBranch $parameters)
    {
        try {
            $this->setResult($resultGetBranch = $this->getSoapClient()->__soapCall('GetBranch', [
                $parameters,
            ], [], [], $this->outputHeaders));

            return $resultGetBranch;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);

            return false;
        }
    }
    /**
     * Method to call the operation originally named GetIncidents
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\GetIncidents $parameters
     * @return \StructType\GetIncidentsResponse|bool
     */
    public function GetIncidents(\StructType\GetIncidents $parameters)
    {
        try {
            $this->setResult($resultGetIncidents = $this->getSoapClient()->__soapCall('GetIncidents', [
                $parameters,
            ], [], [], $this->outputHeaders));

            return $resultGetIncidents;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);

            return false;
        }
    }
    /**
     * Method to call the operation originally named GetIncident
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\GetIncident $parameters
     * @return \StructType\GetIncidentResponse|bool
     */
    public function GetIncident(\StructType\GetIncident $parameters)
    {
        try {
            $this->setResult($resultGetIncident = $this->getSoapClient()->__soapCall('GetIncident', [
                $parameters,
            ], [], [], $this->outputHeaders));

            return $resultGetIncident;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);

            return false;
        }
    }
    /**
     * Method to call the operation originally named GetIncidentTemplates
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\GetIncidentTemplates $parameters
     * @return \StructType\GetIncidentTemplatesResponse|bool
     */
    public function GetIncidentTemplates(\StructType\GetIncidentTemplates $parameters)
    {
        try {
            $this->setResult($resultGetIncidentTemplates = $this->getSoapClient()->__soapCall('GetIncidentTemplates', [
                $parameters,
            ], [], [], $this->outputHeaders));

            return $resultGetIncidentTemplates;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);

            return false;
        }
    }
    /**
     * Method to call the operation originally named GetOrganizationForEmployee
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\GetOrganizationForEmployee $parameters
     * @return \StructType\GetOrganizationForEmployeeResponse|bool
     */
    public function GetOrganizationForEmployee(\StructType\GetOrganizationForEmployee $parameters)
    {
        try {
            $this->setResult($resultGetOrganizationForEmployee = $this->getSoapClient()->__soapCall('GetOrganizationForEmployee', [
                $parameters,
            ], [], [], $this->outputHeaders));

            return $resultGetOrganizationForEmployee;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);

            return false;
        }
    }
    /**
     * Method to call the operation originally named GetSubdivisionsForEmployee
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\GetSubdivisionsForEmployee $parameters
     * @return \StructType\GetSubdivisionsForEmployeeResponse|bool
     */
    public function GetSubdivisionsForEmployee(\StructType\GetSubdivisionsForEmployee $parameters)
    {
        try {
            $this->setResult($resultGetSubdivisionsForEmployee = $this->getSoapClient()->__soapCall('GetSubdivisionsForEmployee', [
                $parameters,
            ], [], [], $this->outputHeaders));

            return $resultGetSubdivisionsForEmployee;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);

            return false;
        }
    }
    /**
     * Method to call the operation originally named
     * GetOrganizationAssignmentsForEmployee
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\GetOrganizationAssignmentsForEmployee $parameters
     * @return \StructType\GetOrganizationAssignmentsForEmployeeResponse|bool
     */
    public function GetOrganizationAssignmentsForEmployee(\StructType\GetOrganizationAssignmentsForEmployee $parameters)
    {
        try {
            $this->setResult($resultGetOrganizationAssignmentsForEmployee = $this->getSoapClient()->__soapCall('GetOrganizationAssignmentsForEmployee', [
                $parameters,
            ], [], [], $this->outputHeaders));

            return $resultGetOrganizationAssignmentsForEmployee;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);

            return false;
        }
    }
    /**
     * Method to call the operation originally named
     * GetOrganizationAssignmentsForEmployeeIncludeRemovedEmployees
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\GetOrganizationAssignmentsForEmployeeIncludeRemovedEmployees $parameters
     * @return \StructType\GetOrganizationAssignmentsForEmployeeIncludeRemovedEmployeesResponse|bool
     */
    public function GetOrganizationAssignmentsForEmployeeIncludeRemovedEmployees(\StructType\GetOrganizationAssignmentsForEmployeeIncludeRemovedEmployees $parameters)
    {
        try {
            $this->setResult($resultGetOrganizationAssignmentsForEmployeeIncludeRemovedEmployees = $this->getSoapClient()->__soapCall('GetOrganizationAssignmentsForEmployeeIncludeRemovedEmployees', [
                $parameters,
            ], [], [], $this->outputHeaders));

            return $resultGetOrganizationAssignmentsForEmployeeIncludeRemovedEmployees;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);

            return false;
        }
    }
    /**
     * Method to call the operation originally named GetOrganizationForVehicle
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\GetOrganizationForVehicle $parameters
     * @return \StructType\GetOrganizationForVehicleResponse|bool
     */
    public function GetOrganizationForVehicle(\StructType\GetOrganizationForVehicle $parameters)
    {
        try {
            $this->setResult($resultGetOrganizationForVehicle = $this->getSoapClient()->__soapCall('GetOrganizationForVehicle', [
                $parameters,
            ], [], [], $this->outputHeaders));

            return $resultGetOrganizationForVehicle;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);

            return false;
        }
    }
    /**
     * Method to call the operation originally named GetSubdivisionsForVehicle
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\GetSubdivisionsForVehicle $parameters
     * @return \StructType\GetSubdivisionsForVehicleResponse|bool
     */
    public function GetSubdivisionsForVehicle(\StructType\GetSubdivisionsForVehicle $parameters)
    {
        try {
            $this->setResult($resultGetSubdivisionsForVehicle = $this->getSoapClient()->__soapCall('GetSubdivisionsForVehicle', [
                $parameters,
            ], [], [], $this->outputHeaders));

            return $resultGetSubdivisionsForVehicle;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);

            return false;
        }
    }
    /**
     * Method to call the operation originally named
     * GetOrganizationAssignmentsForVehicle
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\GetOrganizationAssignmentsForVehicle $parameters
     * @return \StructType\GetOrganizationAssignmentsForVehicleResponse|bool
     */
    public function GetOrganizationAssignmentsForVehicle(\StructType\GetOrganizationAssignmentsForVehicle $parameters)
    {
        try {
            $this->setResult($resultGetOrganizationAssignmentsForVehicle = $this->getSoapClient()->__soapCall('GetOrganizationAssignmentsForVehicle', [
                $parameters,
            ], [], [], $this->outputHeaders));

            return $resultGetOrganizationAssignmentsForVehicle;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);

            return false;
        }
    }
    /**
     * Method to call the operation originally named GetCardTypes
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\GetCardTypes $parameters
     * @return \StructType\GetCardTypesResponse|bool
     */
    public function GetCardTypes(\StructType\GetCardTypes $parameters)
    {
        try {
            $this->setResult($resultGetCardTypes = $this->getSoapClient()->__soapCall('GetCardTypes', [
                $parameters,
            ], [], [], $this->outputHeaders));

            return $resultGetCardTypes;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);

            return false;
        }
    }
    /**
     * Method to call the operation originally named GetEmployeePosition
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\GetEmployeePosition $parameters
     * @return \StructType\GetEmployeePositionResponse|bool
     */
    public function GetEmployeePosition(\StructType\GetEmployeePosition $parameters)
    {
        try {
            $this->setResult($resultGetEmployeePosition = $this->getSoapClient()->__soapCall('GetEmployeePosition', [
                $parameters,
            ], [], [], $this->outputHeaders));

            return $resultGetEmployeePosition;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);

            return false;
        }
    }
    /**
     * Method to call the operation originally named GetEmployeePositions
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\GetEmployeePositions $parameters
     * @return \StructType\GetEmployeePositionsResponse|bool
     */
    public function GetEmployeePositions(\StructType\GetEmployeePositions $parameters)
    {
        try {
            $this->setResult($resultGetEmployeePositions = $this->getSoapClient()->__soapCall('GetEmployeePositions', [
                $parameters,
            ], [], [], $this->outputHeaders));

            return $resultGetEmployeePositions;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);

            return false;
        }
    }
    /**
     * Method to call the operation originally named GetEmployeePositionsForIncident
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\GetEmployeePositionsForIncident $parameters
     * @return \StructType\GetEmployeePositionsForIncidentResponse|bool
     */
    public function GetEmployeePositionsForIncident(\StructType\GetEmployeePositionsForIncident $parameters)
    {
        try {
            $this->setResult($resultGetEmployeePositionsForIncident = $this->getSoapClient()->__soapCall('GetEmployeePositionsForIncident', [
                $parameters,
            ], [], [], $this->outputHeaders));

            return $resultGetEmployeePositionsForIncident;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);

            return false;
        }
    }
    /**
     * Method to call the operation originally named GetAcsEmployeeGroupsFull
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\GetAcsEmployeeGroupsFull $parameters
     * @return \StructType\GetAcsEmployeeGroupsFullResponse|bool
     */
    public function GetAcsEmployeeGroupsFull(\StructType\GetAcsEmployeeGroupsFull $parameters)
    {
        try {
            $this->setResult($resultGetAcsEmployeeGroupsFull = $this->getSoapClient()->__soapCall('GetAcsEmployeeGroupsFull', [
                $parameters,
            ], [], [], $this->outputHeaders));

            return $resultGetAcsEmployeeGroupsFull;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);

            return false;
        }
    }
    /**
     * Method to call the operation originally named GetAcsEmployeeGroups
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\GetAcsEmployeeGroups $parameters
     * @return \StructType\GetAcsEmployeeGroupsResponse|bool
     */
    public function GetAcsEmployeeGroups(\StructType\GetAcsEmployeeGroups $parameters)
    {
        try {
            $this->setResult($resultGetAcsEmployeeGroups = $this->getSoapClient()->__soapCall('GetAcsEmployeeGroups', [
                $parameters,
            ], [], [], $this->outputHeaders));

            return $resultGetAcsEmployeeGroups;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);

            return false;
        }
    }
    /**
     * Method to call the operation originally named GetViolatorAcsEmployeeGroup
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\GetViolatorAcsEmployeeGroup $parameters
     * @return \StructType\GetViolatorAcsEmployeeGroupResponse|bool
     */
    public function GetViolatorAcsEmployeeGroup(\StructType\GetViolatorAcsEmployeeGroup $parameters)
    {
        try {
            $this->setResult($resultGetViolatorAcsEmployeeGroup = $this->getSoapClient()->__soapCall('GetViolatorAcsEmployeeGroup', [
                $parameters,
            ], [], [], $this->outputHeaders));

            return $resultGetViolatorAcsEmployeeGroup;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);

            return false;
        }
    }
    /**
     * Method to call the operation originally named GetAcsEmployeeGroupsByTags
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\GetAcsEmployeeGroupsByTags $parameters
     * @return \StructType\GetAcsEmployeeGroupsByTagsResponse|bool
     */
    public function GetAcsEmployeeGroupsByTags(\StructType\GetAcsEmployeeGroupsByTags $parameters)
    {
        try {
            $this->setResult($resultGetAcsEmployeeGroupsByTags = $this->getSoapClient()->__soapCall('GetAcsEmployeeGroupsByTags', [
                $parameters,
            ], [], [], $this->outputHeaders));

            return $resultGetAcsEmployeeGroupsByTags;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);

            return false;
        }
    }
    /**
     * Method to call the operation originally named GetAcsEmployeeGroup
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\GetAcsEmployeeGroup $parameters
     * @return \StructType\GetAcsEmployeeGroupResponse|bool
     */
    public function GetAcsEmployeeGroup(\StructType\GetAcsEmployeeGroup $parameters)
    {
        try {
            $this->setResult($resultGetAcsEmployeeGroup = $this->getSoapClient()->__soapCall('GetAcsEmployeeGroup', [
                $parameters,
            ], [], [], $this->outputHeaders));

            return $resultGetAcsEmployeeGroup;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);

            return false;
        }
    }
    /**
     * Method to call the operation originally named
     * GetAcsEmployeeGroupsForReportParameters
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\GetAcsEmployeeGroupsForReportParameters $parameters
     * @return \StructType\GetAcsEmployeeGroupsForReportParametersResponse|bool
     */
    public function GetAcsEmployeeGroupsForReportParameters(\StructType\GetAcsEmployeeGroupsForReportParameters $parameters)
    {
        try {
            $this->setResult($resultGetAcsEmployeeGroupsForReportParameters = $this->getSoapClient()->__soapCall('GetAcsEmployeeGroupsForReportParameters', [
                $parameters,
            ], [], [], $this->outputHeaders));

            return $resultGetAcsEmployeeGroupsForReportParameters;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);

            return false;
        }
    }
    /**
     * Method to call the operation originally named
     * GetAcsEmployeeGroupsForReactionEvent
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\GetAcsEmployeeGroupsForReactionEvent $parameters
     * @return \StructType\GetAcsEmployeeGroupsForReactionEventResponse|bool
     */
    public function GetAcsEmployeeGroupsForReactionEvent(\StructType\GetAcsEmployeeGroupsForReactionEvent $parameters)
    {
        try {
            $this->setResult($resultGetAcsEmployeeGroupsForReactionEvent = $this->getSoapClient()->__soapCall('GetAcsEmployeeGroupsForReactionEvent', [
                $parameters,
            ], [], [], $this->outputHeaders));

            return $resultGetAcsEmployeeGroupsForReactionEvent;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);

            return false;
        }
    }
    /**
     * Method to call the operation originally named
     * GetAcsEmployeeGroupsForReactionAction
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\GetAcsEmployeeGroupsForReactionAction $parameters
     * @return \StructType\GetAcsEmployeeGroupsForReactionActionResponse|bool
     */
    public function GetAcsEmployeeGroupsForReactionAction(\StructType\GetAcsEmployeeGroupsForReactionAction $parameters)
    {
        try {
            $this->setResult($resultGetAcsEmployeeGroupsForReactionAction = $this->getSoapClient()->__soapCall('GetAcsEmployeeGroupsForReactionAction', [
                $parameters,
            ], [], [], $this->outputHeaders));

            return $resultGetAcsEmployeeGroupsForReactionAction;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);

            return false;
        }
    }
    /**
     * Method to call the operation originally named GetAcsEmployeesByGroup
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\GetAcsEmployeesByGroup $parameters
     * @return \StructType\GetAcsEmployeesByGroupResponse|bool
     */
    public function GetAcsEmployeesByGroup(\StructType\GetAcsEmployeesByGroup $parameters)
    {
        try {
            $this->setResult($resultGetAcsEmployeesByGroup = $this->getSoapClient()->__soapCall('GetAcsEmployeesByGroup', [
                $parameters,
            ], [], [], $this->outputHeaders));

            return $resultGetAcsEmployeesByGroup;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);

            return false;
        }
    }
    /**
     * Method to call the operation originally named GetAcsEmployees
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\GetAcsEmployees $parameters
     * @return \StructType\GetAcsEmployeesResponse|bool
     */
    public function GetAcsEmployees(\StructType\GetAcsEmployees $parameters)
    {
        try {
            $this->setResult($resultGetAcsEmployees = $this->getSoapClient()->__soapCall('GetAcsEmployees', [
                $parameters,
            ], [], [], $this->outputHeaders));

            return $resultGetAcsEmployees;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);

            return false;
        }
    }
    /**
     * Method to call the operation originally named GetEmployeeFaceById
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\GetEmployeeFaceById $parameters
     * @return \StructType\GetEmployeeFaceByIdResponse|bool
     */
    public function GetEmployeeFaceById(\StructType\GetEmployeeFaceById $parameters)
    {
        try {
            $this->setResult($resultGetEmployeeFaceById = $this->getSoapClient()->__soapCall('GetEmployeeFaceById', [
                $parameters,
            ], [], [], $this->outputHeaders));

            return $resultGetEmployeeFaceById;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);

            return false;
        }
    }
    /**
     * Method to call the operation originally named GetEmployeeFaces
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\GetEmployeeFaces $parameters
     * @return \StructType\GetEmployeeFacesResponse|bool
     */
    public function GetEmployeeFaces(\StructType\GetEmployeeFaces $parameters)
    {
        try {
            $this->setResult($resultGetEmployeeFaces = $this->getSoapClient()->__soapCall('GetEmployeeFaces', [
                $parameters,
            ], [], [], $this->outputHeaders));

            return $resultGetEmployeeFaces;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);

            return false;
        }
    }
    /**
     * Method to call the operation originally named
     * GetEmployeeFacesIncludeRemovedEmployees
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\GetEmployeeFacesIncludeRemovedEmployees $parameters
     * @return \StructType\GetEmployeeFacesIncludeRemovedEmployeesResponse|bool
     */
    public function GetEmployeeFacesIncludeRemovedEmployees(\StructType\GetEmployeeFacesIncludeRemovedEmployees $parameters)
    {
        try {
            $this->setResult($resultGetEmployeeFacesIncludeRemovedEmployees = $this->getSoapClient()->__soapCall('GetEmployeeFacesIncludeRemovedEmployees', [
                $parameters,
            ], [], [], $this->outputHeaders));

            return $resultGetEmployeeFacesIncludeRemovedEmployees;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);

            return false;
        }
    }
    /**
     * Method to call the operation originally named GetEmployeeFacesFull
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\GetEmployeeFacesFull $parameters
     * @return \StructType\GetEmployeeFacesFullResponse|bool
     */
    public function GetEmployeeFacesFull(\StructType\GetEmployeeFacesFull $parameters)
    {
        try {
            $this->setResult($resultGetEmployeeFacesFull = $this->getSoapClient()->__soapCall('GetEmployeeFacesFull', [
                $parameters,
            ], [], [], $this->outputHeaders));

            return $resultGetEmployeeFacesFull;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);

            return false;
        }
    }
    /**
     * Method to call the operation originally named GetAcsEmployeesByGroups
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\GetAcsEmployeesByGroups $parameters
     * @return \StructType\GetAcsEmployeesByGroupsResponse|bool
     */
    public function GetAcsEmployeesByGroups(\StructType\GetAcsEmployeesByGroups $parameters)
    {
        try {
            $this->setResult($resultGetAcsEmployeesByGroups = $this->getSoapClient()->__soapCall('GetAcsEmployeesByGroups', [
                $parameters,
            ], [], [], $this->outputHeaders));

            return $resultGetAcsEmployeesByGroups;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);

            return false;
        }
    }
    /**
     * Method to call the operation originally named GetListAcsEmployeesByGroup
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\GetListAcsEmployeesByGroup $parameters
     * @return \StructType\GetListAcsEmployeesByGroupResponse|bool
     */
    public function GetListAcsEmployeesByGroup(\StructType\GetListAcsEmployeesByGroup $parameters)
    {
        try {
            $this->setResult($resultGetListAcsEmployeesByGroup = $this->getSoapClient()->__soapCall('GetListAcsEmployeesByGroup', [
                $parameters,
            ], [], [], $this->outputHeaders));

            return $resultGetListAcsEmployeesByGroup;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);

            return false;
        }
    }
    /**
     * Method to call the operation originally named GetNotification
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\GetNotification $parameters
     * @return \StructType\GetNotificationResponse|bool
     */
    public function GetNotification(\StructType\GetNotification $parameters)
    {
        try {
            $this->setResult($resultGetNotification = $this->getSoapClient()->__soapCall('GetNotification', [
                $parameters,
            ], [], [], $this->outputHeaders));

            return $resultGetNotification;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);

            return false;
        }
    }
    /**
     * Method to call the operation originally named GetViolationPlan
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\GetViolationPlan $parameters
     * @return \StructType\GetViolationPlanResponse|bool
     */
    public function GetViolationPlan(\StructType\GetViolationPlan $parameters)
    {
        try {
            $this->setResult($resultGetViolationPlan = $this->getSoapClient()->__soapCall('GetViolationPlan', [
                $parameters,
            ], [], [], $this->outputHeaders));

            return $resultGetViolationPlan;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);

            return false;
        }
    }
    /**
     * Method to call the operation originally named GetReportingServicesUrl
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\GetReportingServicesUrl $parameters
     * @return \StructType\GetReportingServicesUrlResponse|bool
     */
    public function GetReportingServicesUrl(\StructType\GetReportingServicesUrl $parameters)
    {
        try {
            $this->setResult($resultGetReportingServicesUrl = $this->getSoapClient()->__soapCall('GetReportingServicesUrl', [
                $parameters,
            ], [], [], $this->outputHeaders));

            return $resultGetReportingServicesUrl;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);

            return false;
        }
    }
    /**
     * Method to call the operation originally named GetIncidentArchiveReport
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\GetIncidentArchiveReport $parameters
     * @return \StructType\GetIncidentArchiveReportResponse|bool
     */
    public function GetIncidentArchiveReport(\StructType\GetIncidentArchiveReport $parameters)
    {
        try {
            $this->setResult($resultGetIncidentArchiveReport = $this->getSoapClient()->__soapCall('GetIncidentArchiveReport', [
                $parameters,
            ], [], [], $this->outputHeaders));

            return $resultGetIncidentArchiveReport;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);

            return false;
        }
    }
    /**
     * Method to call the operation originally named GetIncidentStatisticReport
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\GetIncidentStatisticReport $parameters
     * @return \StructType\GetIncidentStatisticReportResponse|bool
     */
    public function GetIncidentStatisticReport(\StructType\GetIncidentStatisticReport $parameters)
    {
        try {
            $this->setResult($resultGetIncidentStatisticReport = $this->getSoapClient()->__soapCall('GetIncidentStatisticReport', [
                $parameters,
            ], [], [], $this->outputHeaders));

            return $resultGetIncidentStatisticReport;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);

            return false;
        }
    }
    /**
     * Method to call the operation originally named GetIncidentStatisticReportByWeek
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\GetIncidentStatisticReportByWeek $parameters
     * @return \StructType\GetIncidentStatisticReportByWeekResponse|bool
     */
    public function GetIncidentStatisticReportByWeek(\StructType\GetIncidentStatisticReportByWeek $parameters)
    {
        try {
            $this->setResult($resultGetIncidentStatisticReportByWeek = $this->getSoapClient()->__soapCall('GetIncidentStatisticReportByWeek', [
                $parameters,
            ], [], [], $this->outputHeaders));

            return $resultGetIncidentStatisticReportByWeek;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);

            return false;
        }
    }
    /**
     * Method to call the operation originally named GetSecureOSCameras
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\GetSecureOSCameras $parameters
     * @return \StructType\GetSecureOSCamerasResponse|bool
     */
    public function GetSecureOSCameras(\StructType\GetSecureOSCameras $parameters)
    {
        try {
            $this->setResult($resultGetSecureOSCameras = $this->getSoapClient()->__soapCall('GetSecureOSCameras', [
                $parameters,
            ], [], [], $this->outputHeaders));

            return $resultGetSecureOSCameras;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);

            return false;
        }
    }
    /**
     * Method to call the operation originally named GetKeyKeeperSlotsStatus
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\GetKeyKeeperSlotsStatus $parameters
     * @return \StructType\GetKeyKeeperSlotsStatusResponse|bool
     */
    public function GetKeyKeeperSlotsStatus(\StructType\GetKeyKeeperSlotsStatus $parameters)
    {
        try {
            $this->setResult($resultGetKeyKeeperSlotsStatus = $this->getSoapClient()->__soapCall('GetKeyKeeperSlotsStatus', [
                $parameters,
            ], [], [], $this->outputHeaders));

            return $resultGetKeyKeeperSlotsStatus;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);

            return false;
        }
    }
    /**
     * Method to call the operation originally named GetKeyLocation
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\GetKeyLocation $parameters
     * @return \StructType\GetKeyLocationResponse|bool
     */
    public function GetKeyLocation(\StructType\GetKeyLocation $parameters)
    {
        try {
            $this->setResult($resultGetKeyLocation = $this->getSoapClient()->__soapCall('GetKeyLocation', [
                $parameters,
            ], [], [], $this->outputHeaders));

            return $resultGetKeyLocation;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);

            return false;
        }
    }
    /**
     * Method to call the operation originally named
     * GetControllerConfigurationsViaCanConverter
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\GetControllerConfigurationsViaCanConverter $parameters
     * @return \StructType\GetControllerConfigurationsViaCanConverterResponse|bool
     */
    public function GetControllerConfigurationsViaCanConverter(\StructType\GetControllerConfigurationsViaCanConverter $parameters)
    {
        try {
            $this->setResult($resultGetControllerConfigurationsViaCanConverter = $this->getSoapClient()->__soapCall('GetControllerConfigurationsViaCanConverter', [
                $parameters,
            ], [], [], $this->outputHeaders));

            return $resultGetControllerConfigurationsViaCanConverter;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);

            return false;
        }
    }
    /**
     * Method to call the operation originally named
     * GetAccessPoint2CameraForAccessPoint
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\GetAccessPoint2CameraForAccessPoint $parameters
     * @return \StructType\GetAccessPoint2CameraForAccessPointResponse|bool
     */
    public function GetAccessPoint2CameraForAccessPoint(\StructType\GetAccessPoint2CameraForAccessPoint $parameters)
    {
        try {
            $this->setResult($resultGetAccessPoint2CameraForAccessPoint = $this->getSoapClient()->__soapCall('GetAccessPoint2CameraForAccessPoint', [
                $parameters,
            ], [], [], $this->outputHeaders));

            return $resultGetAccessPoint2CameraForAccessPoint;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);

            return false;
        }
    }
    /**
     * Method to call the operation originally named GetVehicleForEmployee
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\GetVehicleForEmployee $parameters
     * @return \StructType\GetVehicleForEmployeeResponse|bool
     */
    public function GetVehicleForEmployee(\StructType\GetVehicleForEmployee $parameters)
    {
        try {
            $this->setResult($resultGetVehicleForEmployee = $this->getSoapClient()->__soapCall('GetVehicleForEmployee', [
                $parameters,
            ], [], [], $this->outputHeaders));

            return $resultGetVehicleForEmployee;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);

            return false;
        }
    }
    /**
     * Method to call the operation originally named
     * GetVehicleForEmployeeIncludeRemovedEmployees
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\GetVehicleForEmployeeIncludeRemovedEmployees $parameters
     * @return \StructType\GetVehicleForEmployeeIncludeRemovedEmployeesResponse|bool
     */
    public function GetVehicleForEmployeeIncludeRemovedEmployees(\StructType\GetVehicleForEmployeeIncludeRemovedEmployees $parameters)
    {
        try {
            $this->setResult($resultGetVehicleForEmployeeIncludeRemovedEmployees = $this->getSoapClient()->__soapCall('GetVehicleForEmployeeIncludeRemovedEmployees', [
                $parameters,
            ], [], [], $this->outputHeaders));

            return $resultGetVehicleForEmployeeIncludeRemovedEmployees;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);

            return false;
        }
    }
    /**
     * Method to call the operation originally named GetEmployeesForVehicle
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\GetEmployeesForVehicle $parameters
     * @return \StructType\GetEmployeesForVehicleResponse|bool
     */
    public function GetEmployeesForVehicle(\StructType\GetEmployeesForVehicle $parameters)
    {
        try {
            $this->setResult($resultGetEmployeesForVehicle = $this->getSoapClient()->__soapCall('GetEmployeesForVehicle', [
                $parameters,
            ], [], [], $this->outputHeaders));

            return $resultGetEmployeesForVehicle;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);

            return false;
        }
    }
    /**
     * Method to call the operation originally named GetAccessLevelsByEmployeeID
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\GetAccessLevelsByEmployeeID $parameters
     * @return \StructType\GetAccessLevelsByEmployeeIDResponse|bool
     */
    public function GetAccessLevelsByEmployeeID(\StructType\GetAccessLevelsByEmployeeID $parameters)
    {
        try {
            $this->setResult($resultGetAccessLevelsByEmployeeID = $this->getSoapClient()->__soapCall('GetAccessLevelsByEmployeeID', [
                $parameters,
            ], [], [], $this->outputHeaders));

            return $resultGetAccessLevelsByEmployeeID;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);

            return false;
        }
    }
    /**
     * Method to call the operation originally named
     * GetAccessLevelsByEmployeeIDIncludeRemovedEmployees
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\GetAccessLevelsByEmployeeIDIncludeRemovedEmployees $parameters
     * @return \StructType\GetAccessLevelsByEmployeeIDIncludeRemovedEmployeesResponse|bool
     */
    public function GetAccessLevelsByEmployeeIDIncludeRemovedEmployees(\StructType\GetAccessLevelsByEmployeeIDIncludeRemovedEmployees $parameters)
    {
        try {
            $this->setResult($resultGetAccessLevelsByEmployeeIDIncludeRemovedEmployees = $this->getSoapClient()->__soapCall('GetAccessLevelsByEmployeeIDIncludeRemovedEmployees', [
                $parameters,
            ], [], [], $this->outputHeaders));

            return $resultGetAccessLevelsByEmployeeIDIncludeRemovedEmployees;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);

            return false;
        }
    }
    /**
     * Method to call the operation originally named GetAccessLevelsByDriverID
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\GetAccessLevelsByDriverID $parameters
     * @return \StructType\GetAccessLevelsByDriverIDResponse|bool
     */
    public function GetAccessLevelsByDriverID(\StructType\GetAccessLevelsByDriverID $parameters)
    {
        try {
            $this->setResult($resultGetAccessLevelsByDriverID = $this->getSoapClient()->__soapCall('GetAccessLevelsByDriverID', [
                $parameters,
            ], [], [], $this->outputHeaders));

            return $resultGetAccessLevelsByDriverID;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);

            return false;
        }
    }
    /**
     * Method to call the operation originally named GetBiometricPermissions
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\GetBiometricPermissions $parameters
     * @return \StructType\GetBiometricPermissionsResponse|bool
     */
    public function GetBiometricPermissions(\StructType\GetBiometricPermissions $parameters)
    {
        try {
            $this->setResult($resultGetBiometricPermissions = $this->getSoapClient()->__soapCall('GetBiometricPermissions', [
                $parameters,
            ], [], [], $this->outputHeaders));

            return $resultGetBiometricPermissions;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);

            return false;
        }
    }
    /**
     * Method to call the operation originally named GetAccessLevelsByEmployeeGroupID
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\GetAccessLevelsByEmployeeGroupID $parameters
     * @return \StructType\GetAccessLevelsByEmployeeGroupIDResponse|bool
     */
    public function GetAccessLevelsByEmployeeGroupID(\StructType\GetAccessLevelsByEmployeeGroupID $parameters)
    {
        try {
            $this->setResult($resultGetAccessLevelsByEmployeeGroupID = $this->getSoapClient()->__soapCall('GetAccessLevelsByEmployeeGroupID', [
                $parameters,
            ], [], [], $this->outputHeaders));

            return $resultGetAccessLevelsByEmployeeGroupID;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);

            return false;
        }
    }
    /**
     * Method to call the operation originally named
     * GetAllAccessLevelsByEmployeeGroupID
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\GetAllAccessLevelsByEmployeeGroupID $parameters
     * @return \StructType\GetAllAccessLevelsByEmployeeGroupIDResponse|bool
     */
    public function GetAllAccessLevelsByEmployeeGroupID(\StructType\GetAllAccessLevelsByEmployeeGroupID $parameters)
    {
        try {
            $this->setResult($resultGetAllAccessLevelsByEmployeeGroupID = $this->getSoapClient()->__soapCall('GetAllAccessLevelsByEmployeeGroupID', [
                $parameters,
            ], [], [], $this->outputHeaders));

            return $resultGetAllAccessLevelsByEmployeeGroupID;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);

            return false;
        }
    }
    /**
     * Method to call the operation originally named GetKeysChanges
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\GetKeysChanges $parameters
     * @return \StructType\GetKeysChangesResponse|bool
     */
    public function GetKeysChanges(\StructType\GetKeysChanges $parameters)
    {
        try {
            $this->setResult($resultGetKeysChanges = $this->getSoapClient()->__soapCall('GetKeysChanges', [
                $parameters,
            ], [], [], $this->outputHeaders));

            return $resultGetKeysChanges;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);

            return false;
        }
    }
    /**
     * Method to call the operation originally named GetCustomizableDaysChanges
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\GetCustomizableDaysChanges $parameters
     * @return \StructType\GetCustomizableDaysChangesResponse|bool
     */
    public function GetCustomizableDaysChanges(\StructType\GetCustomizableDaysChanges $parameters)
    {
        try {
            $this->setResult($resultGetCustomizableDaysChanges = $this->getSoapClient()->__soapCall('GetCustomizableDaysChanges', [
                $parameters,
            ], [], [], $this->outputHeaders));

            return $resultGetCustomizableDaysChanges;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);

            return false;
        }
    }
    /**
     * Method to call the operation originally named GetTagsByClaim
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\GetTagsByClaim $parameters
     * @return \StructType\GetTagsByClaimResponse|bool
     */
    public function GetTagsByClaim(\StructType\GetTagsByClaim $parameters)
    {
        try {
            $this->setResult($resultGetTagsByClaim = $this->getSoapClient()->__soapCall('GetTagsByClaim', [
                $parameters,
            ], [], [], $this->outputHeaders));

            return $resultGetTagsByClaim;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);

            return false;
        }
    }
    /**
     * Method to call the operation originally named GetFilteredEmployees
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\GetFilteredEmployees $parameters
     * @return \StructType\GetFilteredEmployeesResponse|bool
     */
    public function GetFilteredEmployees(\StructType\GetFilteredEmployees $parameters)
    {
        try {
            $this->setResult($resultGetFilteredEmployees = $this->getSoapClient()->__soapCall('GetFilteredEmployees', [
                $parameters,
            ], [], [], $this->outputHeaders));

            return $resultGetFilteredEmployees;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);

            return false;
        }
    }
    /**
     * Method to call the operation originally named GetDepartmentTree
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\GetDepartmentTree $parameters
     * @return \StructType\GetDepartmentTreeResponse|bool
     */
    public function GetDepartmentTree(\StructType\GetDepartmentTree $parameters)
    {
        try {
            $this->setResult($resultGetDepartmentTree = $this->getSoapClient()->__soapCall('GetDepartmentTree', [
                $parameters,
            ], [], [], $this->outputHeaders));

            return $resultGetDepartmentTree;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);

            return false;
        }
    }
    /**
     * Method to call the operation originally named GetDataForPeriodByDepartments
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\GetDataForPeriodByDepartments $parameters
     * @return \StructType\GetDataForPeriodByDepartmentsResponse|bool
     */
    public function GetDataForPeriodByDepartments(\StructType\GetDataForPeriodByDepartments $parameters)
    {
        try {
            $this->setResult($resultGetDataForPeriodByDepartments = $this->getSoapClient()->__soapCall('GetDataForPeriodByDepartments', [
                $parameters,
            ], [], [], $this->outputHeaders));

            return $resultGetDataForPeriodByDepartments;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);

            return false;
        }
    }
    /**
     * Method to call the operation originally named
     * GetDataForPeriodByDepartmentsDetail
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\GetDataForPeriodByDepartmentsDetail $parameters
     * @return \StructType\GetDataForPeriodByDepartmentsDetailResponse|bool
     */
    public function GetDataForPeriodByDepartmentsDetail(\StructType\GetDataForPeriodByDepartmentsDetail $parameters)
    {
        try {
            $this->setResult($resultGetDataForPeriodByDepartmentsDetail = $this->getSoapClient()->__soapCall('GetDataForPeriodByDepartmentsDetail', [
                $parameters,
            ], [], [], $this->outputHeaders));

            return $resultGetDataForPeriodByDepartmentsDetail;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);

            return false;
        }
    }
    /**
     * Method to call the operation originally named GetIsPresentInWorkplace
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\GetIsPresentInWorkplace $parameters
     * @return \StructType\GetIsPresentInWorkplaceResponse|bool
     */
    public function GetIsPresentInWorkplace(\StructType\GetIsPresentInWorkplace $parameters)
    {
        try {
            $this->setResult($resultGetIsPresentInWorkplace = $this->getSoapClient()->__soapCall('GetIsPresentInWorkplace', [
                $parameters,
            ], [], [], $this->outputHeaders));

            return $resultGetIsPresentInWorkplace;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);

            return false;
        }
    }
    /**
     * Method to call the operation originally named GetAbscenceInWorkplace
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\GetAbscenceInWorkplace $parameters
     * @return \StructType\GetAbscenceInWorkplaceResponse|bool
     */
    public function GetAbscenceInWorkplace(\StructType\GetAbscenceInWorkplace $parameters)
    {
        try {
            $this->setResult($resultGetAbscenceInWorkplace = $this->getSoapClient()->__soapCall('GetAbscenceInWorkplace', [
                $parameters,
            ], [], [], $this->outputHeaders));

            return $resultGetAbscenceInWorkplace;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);

            return false;
        }
    }
    /**
     * Method to call the operation originally named GetDataForGraph
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\GetDataForGraph $parameters
     * @return \StructType\GetDataForGraphResponse|bool
     */
    public function GetDataForGraph(\StructType\GetDataForGraph $parameters)
    {
        try {
            $this->setResult($resultGetDataForGraph = $this->getSoapClient()->__soapCall('GetDataForGraph', [
                $parameters,
            ], [], [], $this->outputHeaders));

            return $resultGetDataForGraph;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);

            return false;
        }
    }
    /**
     * Method to call the operation originally named GetProblemDates
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\GetProblemDates $parameters
     * @return \StructType\GetProblemDatesResponse|bool
     */
    public function GetProblemDates(\StructType\GetProblemDates $parameters)
    {
        try {
            $this->setResult($resultGetProblemDates = $this->getSoapClient()->__soapCall('GetProblemDates', [
                $parameters,
            ], [], [], $this->outputHeaders));

            return $resultGetProblemDates;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);

            return false;
        }
    }
    /**
     * Method to call the operation originally named GetSystematicViolation
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\GetSystematicViolation $parameters
     * @return \StructType\GetSystematicViolationResponse|bool
     */
    public function GetSystematicViolation(\StructType\GetSystematicViolation $parameters)
    {
        try {
            $this->setResult($resultGetSystematicViolation = $this->getSoapClient()->__soapCall('GetSystematicViolation', [
                $parameters,
            ], [], [], $this->outputHeaders));

            return $resultGetSystematicViolation;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);

            return false;
        }
    }
    /**
     * Method to call the operation originally named GetSystematicViolationByLogin
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\GetSystematicViolationByLogin $parameters
     * @return \StructType\GetSystematicViolationByLoginResponse|bool
     */
    public function GetSystematicViolationByLogin(\StructType\GetSystematicViolationByLogin $parameters)
    {
        try {
            $this->setResult($resultGetSystematicViolationByLogin = $this->getSoapClient()->__soapCall('GetSystematicViolationByLogin', [
                $parameters,
            ], [], [], $this->outputHeaders));

            return $resultGetSystematicViolationByLogin;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);

            return false;
        }
    }
    /**
     * Method to call the operation originally named GetListOfViolations
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\GetListOfViolations $parameters
     * @return \StructType\GetListOfViolationsResponse|bool
     */
    public function GetListOfViolations(\StructType\GetListOfViolations $parameters)
    {
        try {
            $this->setResult($resultGetListOfViolations = $this->getSoapClient()->__soapCall('GetListOfViolations', [
                $parameters,
            ], [], [], $this->outputHeaders));

            return $resultGetListOfViolations;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);

            return false;
        }
    }
    /**
     * Method to call the operation originally named GetListOfViolationsByLogin
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\GetListOfViolationsByLogin $parameters
     * @return \StructType\GetListOfViolationsByLoginResponse|bool
     */
    public function GetListOfViolationsByLogin(\StructType\GetListOfViolationsByLogin $parameters)
    {
        try {
            $this->setResult($resultGetListOfViolationsByLogin = $this->getSoapClient()->__soapCall('GetListOfViolationsByLogin', [
                $parameters,
            ], [], [], $this->outputHeaders));

            return $resultGetListOfViolationsByLogin;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);

            return false;
        }
    }
    /**
     * Returns the result
     * @see AbstractSoapClientBase::getResult()
     * @return \StructType\GetAbscenceInWorkplaceResponse|\StructType\GetAccessLevelsByDriverIDResponse|\StructType\GetAccessLevelsByEmployeeGroupIDResponse|\StructType\GetAccessLevelsByEmployeeIDIncludeRemovedEmployeesResponse|\StructType\GetAccessLevelsByEmployeeIDResponse|\StructType\GetAccessPoint2CameraForAccessPointResponse|\StructType\GetAcsAccessLevelsSlimInfoResponse|\StructType\GetAcsAccessPointDriversResponse|\StructType\GetAcsAccessPointsResponse|\StructType\GetAcsBoxAccessElementsResponse|\StructType\GetAcsBoxAccessLevelsSlimInfoResponse|\StructType\GetAcsConfiguratorSettingsByWorkplaceModuleResponse|\StructType\GetAcsCustomDayResponse|\StructType\GetAcsCustomDaysResponse|\StructType\GetAcsDayScheduleByOwnerResponse|\StructType\GetAcsDayScheduleResponse|\StructType\GetAcsDaySchedulesByOwnerResponse|\StructType\GetAcsDaySchedulesResponse|\StructType\GetAcsEmployeeForRemoteTerminalResponse|\StructType\GetAcsEmployeeGroupResponse|\StructType\GetAcsEmployeeGroupsByTagsResponse|\StructType\GetAcsEmployeeGroupsForReactionActionResponse|\StructType\GetAcsEmployeeGroupsForReactionEventResponse|\StructType\GetAcsEmployeeGroupsForReportParametersResponse|\StructType\GetAcsEmployeeGroupsFullResponse|\StructType\GetAcsEmployeeGroupsResponse|\StructType\GetAcsEmployeeIDsByTableNumbersResponse|\StructType\GetAcsEmployeePhotoByTypeResponse|\StructType\GetAcsEmployeePhotoInfosResponse|\StructType\GetAcsEmployeePhotoResponse|\StructType\GetAcsEmployeeResponse|\StructType\GetAcsEmployeesByGroupResponse|\StructType\GetAcsEmployeesByGroupsResponse|\StructType\GetAcsEmployeesByTableNumbersResponse|\StructType\GetAcsEmployeesDocumentsResponse|\StructType\GetAcsEmployeesGuidsByGroupsResponse|\StructType\GetAcsEmployeesResponse|\StructType\GetAcsKeysForEmployeeResponse|\StructType\GetAcsKeysForEmployeeWithLostIncludeRemovedEmployeesResponse|\StructType\GetAcsKeysForEmployeeWithLostResponse|\StructType\GetAcsMultiDayScheduleResponse|\StructType\GetAcsMultiDaySchedulesResponse|\StructType\GetAcsVehicleResponse|\StructType\GetAcsVehiclesByGroupResponse|\StructType\GetAcsVehiclesGuidsByGroupsResponse|\StructType\GetAcsWeekFullSchedulesResponse|\StructType\GetAcsWeekScheduleResponse|\StructType\GetAcsWeekSlimSchedulesResponse|\StructType\GetAcsWorkDaysWithTransferResponse|\StructType\GetAcsWorkDayWithTransferResponse|\StructType\GetAdditionalFieldsForOwnersResponse|\StructType\GetAdditionalFieldsResponse|\StructType\GetAdditionalFieldsValueForOwnersResponse|\StructType\GetAdditionalFieldsValueResponse|\StructType\GetAlcoGroupsSlimInfoResponse|\StructType\GetAllAccessLevelsByEmployeeGroupIDResponse|\StructType\GetAllBranchResponse|\StructType\GetAllMapsResponse|\StructType\GetAllNetsResponse|\StructType\GetAssignedAcsKeyByKeyNumberResponse|\StructType\GetBiometricPermissionsResponse|\StructType\GetBranchOfReportParametersResponse|\StructType\GetBranchResponse|\StructType\GetCardTypeResponse|\StructType\GetCardTypesResponse|\StructType\GetChildrenNetsResponse|\StructType\GetClaimResponse|\StructType\GetClaimsForUserByUserIdResponse|\StructType\GetClaimsForUserByUserLoginResponse|\StructType\GetClaimsForUserGroupResponse|\StructType\GetControllerConfigurationsViaCanConverterResponse|\StructType\GetCustomizableDaysChangesResponse|\StructType\GetDataForGraphResponse|\StructType\GetDataForPeriodByDepartmentsDetailResponse|\StructType\GetDataForPeriodByDepartmentsResponse|\StructType\GetDayTypesSlimInfoResponse|\StructType\GetDepartmentTreeResponse|\StructType\GetDictionaryElementResponse|\StructType\GetDictionaryElementsResponse|\StructType\GetDriverResponse|\StructType\GetDriversByTypeResponse|\StructType\GetDriversOfReactionEventResponse|\StructType\GetDriversOfReportParametersResponse|\StructType\GetEmailAddressesIncludeRemovedEmployeesResponse|\StructType\GetEmailAddressesResponse|\StructType\GetEmailDistributionAddressesResponse|\StructType\GetEmployeeFaceByIdResponse|\StructType\GetEmployeeFacesFullResponse|\StructType\GetEmployeeFacesIncludeRemovedEmployeesResponse|\StructType\GetEmployeeFacesResponse|\StructType\GetEmployeeForAlcoGroupResponse|\StructType\GetEmployeeGroupsForAlcoGroupResponse|\StructType\GetEmployeeGroupsOfReactionActionResponse|\StructType\GetEmployeeGroupsOfReactionEventResponse|\StructType\GetEmployeeGroupsOfReportParametersResponse|\StructType\GetEmployeePageForAlcoGroupResponse|\StructType\GetEmployeePositionResponse|\StructType\GetEmployeePositionsForIncidentResponse|\StructType\GetEmployeePositionsResponse|\StructType\GetEmployeePostionsForAlcoGroupResponse|\StructType\GetEmployeesByAccessLevelResponse|\StructType\GetEmployeesByCardTypeResponse|\StructType\GetEmployeeSchedulesIncludeRemovedEmployeesResponse|\StructType\GetEmployeeSchedulesResponse|\StructType\GetEmployeesForVehicleResponse|\StructType\GetEmployeesOfReactionActionResponse|\StructType\GetEmployeesOfReactionEventResponse|\StructType\GetEmployeesOfReportParametersResponse|\StructType\GetEmployeeTimeTableResponse|\StructType\GetEventsByDeviceIDsResponse|\StructType\GetEventsByDeviceTypesResponse|\StructType\GetEventsResponse|\StructType\GetFavoriteFolderForEmployeeGroupByWorkplaceResponse|\StructType\GetFavoriteFolderForEmployeeGroupResponse|\StructType\GetFavoriteFoldersByWorkplaceResponse|\StructType\GetFavoriteFoldersResponse|\StructType\GetFavoriteFoldersWithEmployeeGroupsByWorkplaceResponse|\StructType\GetFavoriteFoldersWithEmployeeGroupsResponse|\StructType\GetFieldsResponse|\StructType\GetFilteredEmployeesResponse|\StructType\GetFilteredEventsResponse|\StructType\GetFilterTagsByResourceIDResponse|\StructType\GetFilterTagsForResourcesResponse|\StructType\GetFilterTagsResponse|\StructType\GetIncidentArchiveReportResponse|\StructType\GetIncidentResponse|\StructType\GetIncidentsResponse|\StructType\GetIncidentStatisticReportByWeekResponse|\StructType\GetIncidentStatisticReportResponse|\StructType\GetIncidentTemplatesResponse|\StructType\GetIncidentTypeOfReportParametersResponse|\StructType\GetIsPresentInWorkplaceResponse|\StructType\GetISS_DriversResponse|\StructType\GetISS_IIDKsResponse|\StructType\GetISS_IIDK_SlavesResponse|\StructType\GetISS_RecognitionResponse|\StructType\GetIvideonCameraDriversResponse|\StructType\GetKeyByUidResponse|\StructType\GetKeyKeeperSlotsStatusResponse|\StructType\GetKeyLocationResponse|\StructType\GetKeysChangesResponse|\StructType\GetLastEventByDeviceIDsResponse|\StructType\GetLastEventByDeviceTypesResponse|\StructType\GetLastEventResponse|\StructType\GetLicenseResponse|\StructType\GetListAcsEmployeesByGroupResponse|\StructType\GetListOfViolationsByLoginResponse|\StructType\GetListOfViolationsResponse|\StructType\GetLocalNetResponse|\StructType\GetLogMessageSubtypesOfReactionEventResponse|\StructType\GetLogMessageSubtypesOfReportParametersResponse|\StructType\GetLogMessageSubtypesResponse|\StructType\GetLogMessageTypesResponse|\StructType\GetMapByIdResponse|\StructType\GetMapImageResponse|\StructType\GetMifareProfilesFullInfoResponse|\StructType\GetMifareProfilesResponse|\StructType\GetNetServersResponse|\StructType\GetNetworkChangesResponse|\StructType\GetNotificationResponse|\StructType\GetNotifyResponse|\StructType\GetOperatorResponse|\StructType\GetOrganizationAssignmentsForEmployeeIncludeRemovedEmployeesResponse|\StructType\GetOrganizationAssignmentsForEmployeeResponse|\StructType\GetOrganizationAssignmentsForVehicleResponse|\StructType\GetOrganizationForEmployeeResponse|\StructType\GetOrganizationForVehicleResponse|\StructType\GetPageFilteredEmployeesByGroupResponse|\StructType\GetPageFilterredIncidentsResponse|\StructType\GetPhoneNumbersIncludeRemovedEmployeesResponse|\StructType\GetPhoneNumbersResponse|\StructType\GetPhotoidentificationPersonalDataResponse|\StructType\GetPhotoOrdersResponse|\StructType\GetPhotoResponse|\StructType\GetPositionCodesResponse|\StructType\GetProblemDatesResponse|\StructType\GetReactionEventsFromDevicesResponse|\StructType\GetReactionExecuteProgramActionResponse|\StructType\GetReactionFullInfoResponse|\StructType\GetReactionRecordVideoActionResponse|\StructType\GetReactionSendEmailActionResponse|\StructType\GetReactionSendSMSActionResponse|\StructType\GetReactionsResponse|\StructType\GetRemoteTerminalInfoByWorkplaceModuleIdResponse|\StructType\GetReportingServicesUrlResponse|\StructType\GetReportsResponse|\StructType\GetRootServerDriversResponse|\StructType\GetScreenCellCameraContentResponse|\StructType\GetScreenCellPhotoIdentificationContentResponse|\StructType\GetScreenLayoutForWorkplaceModuleResponse|\StructType\GetSecureOSCamerasResponse|\StructType\GetServerDriversFullInfoResponse|\StructType\GetServerResponse|\StructType\GetSubdivisionsForEmployeeResponse|\StructType\GetSubdivisionsForVehicleResponse|\StructType\GetSwitchedOffLogDriversOfWorkplaceResponse|\StructType\GetSwitchedOffLogMessageSubtypesOfWorkplaceResponse|\StructType\GetSystematicViolationByLoginResponse|\StructType\GetSystematicViolationResponse|\StructType\GetTagsByAccessLevelIDResponse|\StructType\GetTagsByBoxAccessLevelIDResponse|\StructType\GetTagsByClaimResponse|\StructType\GetTagsByEmployeeGroupIDResponse|\StructType\GetTagsByMifareProfileIDResponse|\StructType\GetTagsByReportIDResponse|\StructType\GetTagsByResourceIDResponse|\StructType\GetTagsResponse|\StructType\GetUidsKeysResponse|\StructType\GetUnResolvedPhotoBankDetailsResponse|\StructType\GetUserGroupResponse|\StructType\GetUserGroupsByUserIDResponse|\StructType\GetUserGroupsResponse|\StructType\GetUserPassesResponse|\StructType\GetUserResponse|\StructType\GetUsersByUserGroupIDResponse|\StructType\GetUsersResponse|\StructType\GetVariableResponse|\StructType\GetVehicleForEmployeeIncludeRemovedEmployeesResponse|\StructType\GetVehicleForEmployeeResponse|\StructType\GetVehiclesOfReportParametersResponse|\StructType\GetVehicleTypesOfReportParametersResponse|\StructType\GetViolationPlanResponse|\StructType\GetViolatorAcsEmployeeGroupResponse|\StructType\GetVisitorsScoreboardSettingsByWorkplaceModuleIdResponse|\StructType\GetWorkplacesResponse|\StructType\GetWorkSchedulesByEmployeeGroupIDResponse|\StructType\GetWorkSchedulesByEmployeeIDIncludeRemovedEmployeesResponse|\StructType\GetWorkSchedulesByEmployeeIDResponse|\StructType\GetWorkSchedulesSlimInfoResponse|\StructType\GetWorkTimeTableResponse|\StructType\GetWorkZonesAccessPointsResponse|\StructType\GetWorkZonesByDriverIDResponse|\StructType\GetWorkZonesByEmployeeGroupIDResponse|\StructType\GetWorkZonesByEmployeeIDIncludeRemovedEmployeesResponse|\StructType\GetWorkZonesByEmployeeIDResponse|\StructType\GetWorkZonesOfReportParametersResponse|\StructType\GetWorkZonesSlimInfoResponse|\StructType\GetWorkZoneVisitorsCountResponse|\StructType\Get_ISS_DriverEventsPlaybackResponse
     */
    public function getResult()
    {
        return parent::getResult();
    }
}
