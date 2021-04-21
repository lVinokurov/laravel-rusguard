<?php

declare(strict_types=1);

namespace ServiceType;

use SoapFault;
use WsdlToPhp\PackageBase\AbstractSoapClientBase;

/**
 * This class stands for Remove ServiceType
 * @subpackage Services
 */
class Remove extends AbstractSoapClientBase
{
    /**
     * Method to call the operation originally named RemoveNotify
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\RemoveNotify $parameters
     * @return \StructType\RemoveNotifyResponse|bool
     */
    public function RemoveNotify(\StructType\RemoveNotify $parameters)
    {
        try {
            $this->setResult($resultRemoveNotify = $this->getSoapClient()->__soapCall('RemoveNotify', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultRemoveNotify;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named RemoveBranch
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\RemoveBranch $parameters
     * @return \StructType\RemoveBranchResponse|bool
     */
    public function RemoveBranch(\StructType\RemoveBranch $parameters)
    {
        try {
            $this->setResult($resultRemoveBranch = $this->getSoapClient()->__soapCall('RemoveBranch', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultRemoveBranch;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named RemovePhoneNumbers
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\RemovePhoneNumbers $parameters
     * @return \StructType\RemovePhoneNumbersResponse|bool
     */
    public function RemovePhoneNumbers(\StructType\RemovePhoneNumbers $parameters)
    {
        try {
            $this->setResult($resultRemovePhoneNumbers = $this->getSoapClient()->__soapCall('RemovePhoneNumbers', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultRemovePhoneNumbers;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named RemoveEmailDistributionAddresses
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\RemoveEmailDistributionAddresses $parameters
     * @return \StructType\RemoveEmailDistributionAddressesResponse|bool
     */
    public function RemoveEmailDistributionAddresses(\StructType\RemoveEmailDistributionAddresses $parameters)
    {
        try {
            $this->setResult($resultRemoveEmailDistributionAddresses = $this->getSoapClient()->__soapCall('RemoveEmailDistributionAddresses', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultRemoveEmailDistributionAddresses;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named RemoveFavoriteFolder
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\RemoveFavoriteFolder $parameters
     * @return \StructType\RemoveFavoriteFolderResponse|bool
     */
    public function RemoveFavoriteFolder(\StructType\RemoveFavoriteFolder $parameters)
    {
        try {
            $this->setResult($resultRemoveFavoriteFolder = $this->getSoapClient()->__soapCall('RemoveFavoriteFolder', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultRemoveFavoriteFolder;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named RemoveFavoriteFolderByWorkplace
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\RemoveFavoriteFolderByWorkplace $parameters
     * @return \StructType\RemoveFavoriteFolderByWorkplaceResponse|bool
     */
    public function RemoveFavoriteFolderByWorkplace(\StructType\RemoveFavoriteFolderByWorkplace $parameters)
    {
        try {
            $this->setResult($resultRemoveFavoriteFolderByWorkplace = $this->getSoapClient()->__soapCall('RemoveFavoriteFolderByWorkplace', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultRemoveFavoriteFolderByWorkplace;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named
     * RemoveEmployeeGroupFromFavoriteFolder
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\RemoveEmployeeGroupFromFavoriteFolder $parameters
     * @return \StructType\RemoveEmployeeGroupFromFavoriteFolderResponse|bool
     */
    public function RemoveEmployeeGroupFromFavoriteFolder(\StructType\RemoveEmployeeGroupFromFavoriteFolder $parameters)
    {
        try {
            $this->setResult($resultRemoveEmployeeGroupFromFavoriteFolder = $this->getSoapClient()->__soapCall('RemoveEmployeeGroupFromFavoriteFolder', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultRemoveEmployeeGroupFromFavoriteFolder;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named RemoveTag
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\RemoveTag $parameters
     * @return \StructType\RemoveTagResponse|bool
     */
    public function RemoveTag(\StructType\RemoveTag $parameters)
    {
        try {
            $this->setResult($resultRemoveTag = $this->getSoapClient()->__soapCall('RemoveTag', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultRemoveTag;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named RemoveFilterTag
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\RemoveFilterTag $parameters
     * @return \StructType\RemoveFilterTagResponse|bool
     */
    public function RemoveFilterTag(\StructType\RemoveFilterTag $parameters)
    {
        try {
            $this->setResult($resultRemoveFilterTag = $this->getSoapClient()->__soapCall('RemoveFilterTag', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultRemoveFilterTag;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named RemoveUserPass
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\RemoveUserPass $parameters
     * @return \StructType\RemoveUserPassResponse|bool
     */
    public function RemoveUserPass(\StructType\RemoveUserPass $parameters)
    {
        try {
            $this->setResult($resultRemoveUserPass = $this->getSoapClient()->__soapCall('RemoveUserPass', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultRemoveUserPass;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named RemoveUserPassEditor
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\RemoveUserPassEditor $parameters
     * @return \StructType\RemoveUserPassEditorResponse|bool
     */
    public function RemoveUserPassEditor(\StructType\RemoveUserPassEditor $parameters)
    {
        try {
            $this->setResult($resultRemoveUserPassEditor = $this->getSoapClient()->__soapCall('RemoveUserPassEditor', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultRemoveUserPassEditor;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named RemoveReaction
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\RemoveReaction $parameters
     * @return \StructType\RemoveReactionResponse|bool
     */
    public function RemoveReaction(\StructType\RemoveReaction $parameters)
    {
        try {
            $this->setResult($resultRemoveReaction = $this->getSoapClient()->__soapCall('RemoveReaction', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultRemoveReaction;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named RemoveReactionActions
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\RemoveReactionActions $parameters
     * @return \StructType\RemoveReactionActionsResponse|bool
     */
    public function RemoveReactionActions(\StructType\RemoveReactionActions $parameters)
    {
        try {
            $this->setResult($resultRemoveReactionActions = $this->getSoapClient()->__soapCall('RemoveReactionActions', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultRemoveReactionActions;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named RemoveEmployeesFromReactionAction
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\RemoveEmployeesFromReactionAction $parameters
     * @return \StructType\RemoveEmployeesFromReactionActionResponse|bool
     */
    public function RemoveEmployeesFromReactionAction(\StructType\RemoveEmployeesFromReactionAction $parameters)
    {
        try {
            $this->setResult($resultRemoveEmployeesFromReactionAction = $this->getSoapClient()->__soapCall('RemoveEmployeesFromReactionAction', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultRemoveEmployeesFromReactionAction;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named
     * RemoveEmployeeGroupsFromReactionAction
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\RemoveEmployeeGroupsFromReactionAction $parameters
     * @return \StructType\RemoveEmployeeGroupsFromReactionActionResponse|bool
     */
    public function RemoveEmployeeGroupsFromReactionAction(\StructType\RemoveEmployeeGroupsFromReactionAction $parameters)
    {
        try {
            $this->setResult($resultRemoveEmployeeGroupsFromReactionAction = $this->getSoapClient()->__soapCall('RemoveEmployeeGroupsFromReactionAction', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultRemoveEmployeeGroupsFromReactionAction;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named
     * RemoveEmployeeFromReactionActionByGroups
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\RemoveEmployeeFromReactionActionByGroups $parameters
     * @return \StructType\RemoveEmployeeFromReactionActionByGroupsResponse|bool
     */
    public function RemoveEmployeeFromReactionActionByGroups(\StructType\RemoveEmployeeFromReactionActionByGroups $parameters)
    {
        try {
            $this->setResult($resultRemoveEmployeeFromReactionActionByGroups = $this->getSoapClient()->__soapCall('RemoveEmployeeFromReactionActionByGroups', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultRemoveEmployeeFromReactionActionByGroups;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named RemoveReport
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\RemoveReport $parameters
     * @return \StructType\RemoveReportResponse|bool
     */
    public function RemoveReport(\StructType\RemoveReport $parameters)
    {
        try {
            $this->setResult($resultRemoveReport = $this->getSoapClient()->__soapCall('RemoveReport', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultRemoveReport;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named RemoveDriversFromReportParameters
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\RemoveDriversFromReportParameters $parameters
     * @return \StructType\RemoveDriversFromReportParametersResponse|bool
     */
    public function RemoveDriversFromReportParameters(\StructType\RemoveDriversFromReportParameters $parameters)
    {
        try {
            $this->setResult($resultRemoveDriversFromReportParameters = $this->getSoapClient()->__soapCall('RemoveDriversFromReportParameters', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultRemoveDriversFromReportParameters;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named
     * RemoveLogMessageSubtypesFromReportParameters
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\RemoveLogMessageSubtypesFromReportParameters $parameters
     * @return \StructType\RemoveLogMessageSubtypesFromReportParametersResponse|bool
     */
    public function RemoveLogMessageSubtypesFromReportParameters(\StructType\RemoveLogMessageSubtypesFromReportParameters $parameters)
    {
        try {
            $this->setResult($resultRemoveLogMessageSubtypesFromReportParameters = $this->getSoapClient()->__soapCall('RemoveLogMessageSubtypesFromReportParameters', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultRemoveLogMessageSubtypesFromReportParameters;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named
     * RemoveEmployeeGroupsFromReportParameters
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\RemoveEmployeeGroupsFromReportParameters $parameters
     * @return \StructType\RemoveEmployeeGroupsFromReportParametersResponse|bool
     */
    public function RemoveEmployeeGroupsFromReportParameters(\StructType\RemoveEmployeeGroupsFromReportParameters $parameters)
    {
        try {
            $this->setResult($resultRemoveEmployeeGroupsFromReportParameters = $this->getSoapClient()->__soapCall('RemoveEmployeeGroupsFromReportParameters', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultRemoveEmployeeGroupsFromReportParameters;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named
     * RemoveEmployeeFromReportParametersByGroups
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\RemoveEmployeeFromReportParametersByGroups $parameters
     * @return \StructType\RemoveEmployeeFromReportParametersByGroupsResponse|bool
     */
    public function RemoveEmployeeFromReportParametersByGroups(\StructType\RemoveEmployeeFromReportParametersByGroups $parameters)
    {
        try {
            $this->setResult($resultRemoveEmployeeFromReportParametersByGroups = $this->getSoapClient()->__soapCall('RemoveEmployeeFromReportParametersByGroups', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultRemoveEmployeeFromReportParametersByGroups;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named
     * RemoveEmployeesFromReportParameters
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\RemoveEmployeesFromReportParameters $parameters
     * @return \StructType\RemoveEmployeesFromReportParametersResponse|bool
     */
    public function RemoveEmployeesFromReportParameters(\StructType\RemoveEmployeesFromReportParameters $parameters)
    {
        try {
            $this->setResult($resultRemoveEmployeesFromReportParameters = $this->getSoapClient()->__soapCall('RemoveEmployeesFromReportParameters', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultRemoveEmployeesFromReportParameters;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named
     * RemoveWorkZonesFromReportParameters
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\RemoveWorkZonesFromReportParameters $parameters
     * @return \StructType\RemoveWorkZonesFromReportParametersResponse|bool
     */
    public function RemoveWorkZonesFromReportParameters(\StructType\RemoveWorkZonesFromReportParameters $parameters)
    {
        try {
            $this->setResult($resultRemoveWorkZonesFromReportParameters = $this->getSoapClient()->__soapCall('RemoveWorkZonesFromReportParameters', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultRemoveWorkZonesFromReportParameters;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named
     * RemoveVehicleTypesFromReportParameters
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\RemoveVehicleTypesFromReportParameters $parameters
     * @return \StructType\RemoveVehicleTypesFromReportParametersResponse|bool
     */
    public function RemoveVehicleTypesFromReportParameters(\StructType\RemoveVehicleTypesFromReportParameters $parameters)
    {
        try {
            $this->setResult($resultRemoveVehicleTypesFromReportParameters = $this->getSoapClient()->__soapCall('RemoveVehicleTypesFromReportParameters', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultRemoveVehicleTypesFromReportParameters;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named RemoveVehiclesFromReportParameters
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\RemoveVehiclesFromReportParameters $parameters
     * @return \StructType\RemoveVehiclesFromReportParametersResponse|bool
     */
    public function RemoveVehiclesFromReportParameters(\StructType\RemoveVehiclesFromReportParameters $parameters)
    {
        try {
            $this->setResult($resultRemoveVehiclesFromReportParameters = $this->getSoapClient()->__soapCall('RemoveVehiclesFromReportParameters', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultRemoveVehiclesFromReportParameters;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named RemoveReactionEvents
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\RemoveReactionEvents $parameters
     * @return \StructType\RemoveReactionEventsResponse|bool
     */
    public function RemoveReactionEvents(\StructType\RemoveReactionEvents $parameters)
    {
        try {
            $this->setResult($resultRemoveReactionEvents = $this->getSoapClient()->__soapCall('RemoveReactionEvents', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultRemoveReactionEvents;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named RemoveEmployeesFromReactionEvent
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\RemoveEmployeesFromReactionEvent $parameters
     * @return \StructType\RemoveEmployeesFromReactionEventResponse|bool
     */
    public function RemoveEmployeesFromReactionEvent(\StructType\RemoveEmployeesFromReactionEvent $parameters)
    {
        try {
            $this->setResult($resultRemoveEmployeesFromReactionEvent = $this->getSoapClient()->__soapCall('RemoveEmployeesFromReactionEvent', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultRemoveEmployeesFromReactionEvent;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named
     * RemoveEmployeeGroupsFromReactionEvent
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\RemoveEmployeeGroupsFromReactionEvent $parameters
     * @return \StructType\RemoveEmployeeGroupsFromReactionEventResponse|bool
     */
    public function RemoveEmployeeGroupsFromReactionEvent(\StructType\RemoveEmployeeGroupsFromReactionEvent $parameters)
    {
        try {
            $this->setResult($resultRemoveEmployeeGroupsFromReactionEvent = $this->getSoapClient()->__soapCall('RemoveEmployeeGroupsFromReactionEvent', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultRemoveEmployeeGroupsFromReactionEvent;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named
     * RemoveEmployeeFromReactionEventByGroups
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\RemoveEmployeeFromReactionEventByGroups $parameters
     * @return \StructType\RemoveEmployeeFromReactionEventByGroupsResponse|bool
     */
    public function RemoveEmployeeFromReactionEventByGroups(\StructType\RemoveEmployeeFromReactionEventByGroups $parameters)
    {
        try {
            $this->setResult($resultRemoveEmployeeFromReactionEventByGroups = $this->getSoapClient()->__soapCall('RemoveEmployeeFromReactionEventByGroups', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultRemoveEmployeeFromReactionEventByGroups;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named RemoveDriversFromReactionEvent
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\RemoveDriversFromReactionEvent $parameters
     * @return \StructType\RemoveDriversFromReactionEventResponse|bool
     */
    public function RemoveDriversFromReactionEvent(\StructType\RemoveDriversFromReactionEvent $parameters)
    {
        try {
            $this->setResult($resultRemoveDriversFromReactionEvent = $this->getSoapClient()->__soapCall('RemoveDriversFromReactionEvent', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultRemoveDriversFromReactionEvent;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named
     * RemoveLogMessageSubtypesFromReactionEvent
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\RemoveLogMessageSubtypesFromReactionEvent $parameters
     * @return \StructType\RemoveLogMessageSubtypesFromReactionEventResponse|bool
     */
    public function RemoveLogMessageSubtypesFromReactionEvent(\StructType\RemoveLogMessageSubtypesFromReactionEvent $parameters)
    {
        try {
            $this->setResult($resultRemoveLogMessageSubtypesFromReactionEvent = $this->getSoapClient()->__soapCall('RemoveLogMessageSubtypesFromReactionEvent', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultRemoveLogMessageSubtypesFromReactionEvent;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named
     * RemoveSwitchedOffLogMessageSubtypesFromWorkplace
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\RemoveSwitchedOffLogMessageSubtypesFromWorkplace $parameters
     * @return \StructType\RemoveSwitchedOffLogMessageSubtypesFromWorkplaceResponse|bool
     */
    public function RemoveSwitchedOffLogMessageSubtypesFromWorkplace(\StructType\RemoveSwitchedOffLogMessageSubtypesFromWorkplace $parameters)
    {
        try {
            $this->setResult($resultRemoveSwitchedOffLogMessageSubtypesFromWorkplace = $this->getSoapClient()->__soapCall('RemoveSwitchedOffLogMessageSubtypesFromWorkplace', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultRemoveSwitchedOffLogMessageSubtypesFromWorkplace;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named
     * RemoveSwitchedOffLogDriversFromWorkplace
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\RemoveSwitchedOffLogDriversFromWorkplace $parameters
     * @return \StructType\RemoveSwitchedOffLogDriversFromWorkplaceResponse|bool
     */
    public function RemoveSwitchedOffLogDriversFromWorkplace(\StructType\RemoveSwitchedOffLogDriversFromWorkplace $parameters)
    {
        try {
            $this->setResult($resultRemoveSwitchedOffLogDriversFromWorkplace = $this->getSoapClient()->__soapCall('RemoveSwitchedOffLogDriversFromWorkplace', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultRemoveSwitchedOffLogDriversFromWorkplace;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named RemoveDriverFigureFromMap
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\RemoveDriverFigureFromMap $parameters
     * @return \StructType\RemoveDriverFigureFromMapResponse|bool
     */
    public function RemoveDriverFigureFromMap(\StructType\RemoveDriverFigureFromMap $parameters)
    {
        try {
            $this->setResult($resultRemoveDriverFigureFromMap = $this->getSoapClient()->__soapCall('RemoveDriverFigureFromMap', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultRemoveDriverFigureFromMap;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named RemoveWorkSchedulesFromEmployee
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\RemoveWorkSchedulesFromEmployee $parameters
     * @return \StructType\RemoveWorkSchedulesFromEmployeeResponse|bool
     */
    public function RemoveWorkSchedulesFromEmployee(\StructType\RemoveWorkSchedulesFromEmployee $parameters)
    {
        try {
            $this->setResult($resultRemoveWorkSchedulesFromEmployee = $this->getSoapClient()->__soapCall('RemoveWorkSchedulesFromEmployee', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultRemoveWorkSchedulesFromEmployee;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named
     * RemoveWorkSchedulesFromEmployeeGroup
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\RemoveWorkSchedulesFromEmployeeGroup $parameters
     * @return \StructType\RemoveWorkSchedulesFromEmployeeGroupResponse|bool
     */
    public function RemoveWorkSchedulesFromEmployeeGroup(\StructType\RemoveWorkSchedulesFromEmployeeGroup $parameters)
    {
        try {
            $this->setResult($resultRemoveWorkSchedulesFromEmployeeGroup = $this->getSoapClient()->__soapCall('RemoveWorkSchedulesFromEmployeeGroup', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultRemoveWorkSchedulesFromEmployeeGroup;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named RemoveWorkZoneFromEmployee
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\RemoveWorkZoneFromEmployee $parameters
     * @return \StructType\RemoveWorkZoneFromEmployeeResponse|bool
     */
    public function RemoveWorkZoneFromEmployee(\StructType\RemoveWorkZoneFromEmployee $parameters)
    {
        try {
            $this->setResult($resultRemoveWorkZoneFromEmployee = $this->getSoapClient()->__soapCall('RemoveWorkZoneFromEmployee', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultRemoveWorkZoneFromEmployee;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named RemoveWorkZoneFromEmployeeGroup
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\RemoveWorkZoneFromEmployeeGroup $parameters
     * @return \StructType\RemoveWorkZoneFromEmployeeGroupResponse|bool
     */
    public function RemoveWorkZoneFromEmployeeGroup(\StructType\RemoveWorkZoneFromEmployeeGroup $parameters)
    {
        try {
            $this->setResult($resultRemoveWorkZoneFromEmployeeGroup = $this->getSoapClient()->__soapCall('RemoveWorkZoneFromEmployeeGroup', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultRemoveWorkZoneFromEmployeeGroup;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named RemoveDayTypes
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\RemoveDayTypes $parameters
     * @return \StructType\RemoveDayTypesResponse|bool
     */
    public function RemoveDayTypes(\StructType\RemoveDayTypes $parameters)
    {
        try {
            $this->setResult($resultRemoveDayTypes = $this->getSoapClient()->__soapCall('RemoveDayTypes', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultRemoveDayTypes;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named RemoveWorkSchedules
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\RemoveWorkSchedules $parameters
     * @return \StructType\RemoveWorkSchedulesResponse|bool
     */
    public function RemoveWorkSchedules(\StructType\RemoveWorkSchedules $parameters)
    {
        try {
            $this->setResult($resultRemoveWorkSchedules = $this->getSoapClient()->__soapCall('RemoveWorkSchedules', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultRemoveWorkSchedules;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named RemoveWorkZones
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\RemoveWorkZones $parameters
     * @return \StructType\RemoveWorkZonesResponse|bool
     */
    public function RemoveWorkZones(\StructType\RemoveWorkZones $parameters)
    {
        try {
            $this->setResult($resultRemoveWorkZones = $this->getSoapClient()->__soapCall('RemoveWorkZones', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultRemoveWorkZones;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named RemoveWorkZonesAccessPoint
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\RemoveWorkZonesAccessPoint $parameters
     * @return \StructType\RemoveWorkZonesAccessPointResponse|bool
     */
    public function RemoveWorkZonesAccessPoint(\StructType\RemoveWorkZonesAccessPoint $parameters)
    {
        try {
            $this->setResult($resultRemoveWorkZonesAccessPoint = $this->getSoapClient()->__soapCall('RemoveWorkZonesAccessPoint', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultRemoveWorkZonesAccessPoint;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named RemoveISS_IIDKs
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\RemoveISS_IIDKs $parameters
     * @return \StructType\RemoveISS_IIDKsResponse|bool
     */
    public function RemoveISS_IIDKs(\StructType\RemoveISS_IIDKs $parameters)
    {
        try {
            $this->setResult($resultRemoveISS_IIDKs = $this->getSoapClient()->__soapCall('RemoveISS_IIDKs', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultRemoveISS_IIDKs;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named RemoveISS_Recognition
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\RemoveISS_Recognition $parameters
     * @return \StructType\RemoveISS_RecognitionResponse|bool
     */
    public function RemoveISS_Recognition(\StructType\RemoveISS_Recognition $parameters)
    {
        try {
            $this->setResult($resultRemoveISS_Recognition = $this->getSoapClient()->__soapCall('RemoveISS_Recognition', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultRemoveISS_Recognition;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named RemoveISS_Drivers
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\RemoveISS_Drivers $parameters
     * @return \StructType\RemoveISS_DriversResponse|bool
     */
    public function RemoveISS_Drivers(\StructType\RemoveISS_Drivers $parameters)
    {
        try {
            $this->setResult($resultRemoveISS_Drivers = $this->getSoapClient()->__soapCall('RemoveISS_Drivers', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultRemoveISS_Drivers;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named Remove_ISS_DriverEventPlayback
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\Remove_ISS_DriverEventPlayback $parameters
     * @return \StructType\Remove_ISS_DriverEventPlaybackResponse|bool
     */
    public function Remove_ISS_DriverEventPlayback(\StructType\Remove_ISS_DriverEventPlayback $parameters)
    {
        try {
            $this->setResult($resultRemove_ISS_DriverEventPlayback = $this->getSoapClient()->__soapCall('Remove_ISS_DriverEventPlayback', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultRemove_ISS_DriverEventPlayback;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named RemoveCell
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\RemoveCell $parameters
     * @return \StructType\RemoveCellResponse|bool
     */
    public function RemoveCell(\StructType\RemoveCell $parameters)
    {
        try {
            $this->setResult($resultRemoveCell = $this->getSoapClient()->__soapCall('RemoveCell', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultRemoveCell;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named RemoveEmailAddress
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\RemoveEmailAddress $parameters
     * @return \StructType\RemoveEmailAddressResponse|bool
     */
    public function RemoveEmailAddress(\StructType\RemoveEmailAddress $parameters)
    {
        try {
            $this->setResult($resultRemoveEmailAddress = $this->getSoapClient()->__soapCall('RemoveEmailAddress', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultRemoveEmailAddress;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named RemoveAccessPoint2CameraChain
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\RemoveAccessPoint2CameraChain $parameters
     * @return \StructType\RemoveAccessPoint2CameraChainResponse|bool
     */
    public function RemoveAccessPoint2CameraChain(\StructType\RemoveAccessPoint2CameraChain $parameters)
    {
        try {
            $this->setResult($resultRemoveAccessPoint2CameraChain = $this->getSoapClient()->__soapCall('RemoveAccessPoint2CameraChain', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultRemoveAccessPoint2CameraChain;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named RemoveAcsVehicle
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\RemoveAcsVehicle $parameters
     * @return \StructType\RemoveAcsVehicleResponse|bool
     */
    public function RemoveAcsVehicle(\StructType\RemoveAcsVehicle $parameters)
    {
        try {
            $this->setResult($resultRemoveAcsVehicle = $this->getSoapClient()->__soapCall('RemoveAcsVehicle', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultRemoveAcsVehicle;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named
     * RemoveAllEmployee2VehicleChainForEmployee
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\RemoveAllEmployee2VehicleChainForEmployee $parameters
     * @return \StructType\RemoveAllEmployee2VehicleChainForEmployeeResponse|bool
     */
    public function RemoveAllEmployee2VehicleChainForEmployee(\StructType\RemoveAllEmployee2VehicleChainForEmployee $parameters)
    {
        try {
            $this->setResult($resultRemoveAllEmployee2VehicleChainForEmployee = $this->getSoapClient()->__soapCall('RemoveAllEmployee2VehicleChainForEmployee', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultRemoveAllEmployee2VehicleChainForEmployee;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named RemoveAcsBoxAccessLevel
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\RemoveAcsBoxAccessLevel $parameters
     * @return \StructType\RemoveAcsBoxAccessLevelResponse|bool
     */
    public function RemoveAcsBoxAccessLevel(\StructType\RemoveAcsBoxAccessLevel $parameters)
    {
        try {
            $this->setResult($resultRemoveAcsBoxAccessLevel = $this->getSoapClient()->__soapCall('RemoveAcsBoxAccessLevel', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultRemoveAcsBoxAccessLevel;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named RemoveAlcoGroup
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\RemoveAlcoGroup $parameters
     * @return \StructType\RemoveAlcoGroupResponse|bool
     */
    public function RemoveAlcoGroup(\StructType\RemoveAlcoGroup $parameters)
    {
        try {
            $this->setResult($resultRemoveAlcoGroup = $this->getSoapClient()->__soapCall('RemoveAlcoGroup', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultRemoveAlcoGroup;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named RemoveAcsAccessLevel
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\RemoveAcsAccessLevel $parameters
     * @return \StructType\RemoveAcsAccessLevelResponse|bool
     */
    public function RemoveAcsAccessLevel(\StructType\RemoveAcsAccessLevel $parameters)
    {
        try {
            $this->setResult($resultRemoveAcsAccessLevel = $this->getSoapClient()->__soapCall('RemoveAcsAccessLevel', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultRemoveAcsAccessLevel;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named RemoveAcsAccessPoint
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\RemoveAcsAccessPoint $parameters
     * @return \StructType\RemoveAcsAccessPointResponse|bool
     */
    public function RemoveAcsAccessPoint(\StructType\RemoveAcsAccessPoint $parameters)
    {
        try {
            $this->setResult($resultRemoveAcsAccessPoint = $this->getSoapClient()->__soapCall('RemoveAcsAccessPoint', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultRemoveAcsAccessPoint;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named RemoveEmployeesToSecurityGroup
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\RemoveEmployeesToSecurityGroup $parameters
     * @return \StructType\RemoveEmployeesToSecurityGroupResponse|bool
     */
    public function RemoveEmployeesToSecurityGroup(\StructType\RemoveEmployeesToSecurityGroup $parameters)
    {
        try {
            $this->setResult($resultRemoveEmployeesToSecurityGroup = $this->getSoapClient()->__soapCall('RemoveEmployeesToSecurityGroup', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultRemoveEmployeesToSecurityGroup;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named
     * RemoveAccessLevelsFromEmployeeForce
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\RemoveAccessLevelsFromEmployeeForce $parameters
     * @return \StructType\RemoveAccessLevelsFromEmployeeForceResponse|bool
     */
    public function RemoveAccessLevelsFromEmployeeForce(\StructType\RemoveAccessLevelsFromEmployeeForce $parameters)
    {
        try {
            $this->setResult($resultRemoveAccessLevelsFromEmployeeForce = $this->getSoapClient()->__soapCall('RemoveAccessLevelsFromEmployeeForce', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultRemoveAccessLevelsFromEmployeeForce;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named RemoveAccessLevelFromEmployee
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\RemoveAccessLevelFromEmployee $parameters
     * @return \StructType\RemoveAccessLevelFromEmployeeResponse|bool
     */
    public function RemoveAccessLevelFromEmployee(\StructType\RemoveAccessLevelFromEmployee $parameters)
    {
        try {
            $this->setResult($resultRemoveAccessLevelFromEmployee = $this->getSoapClient()->__soapCall('RemoveAccessLevelFromEmployee', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultRemoveAccessLevelFromEmployee;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named RemoveAccessLevelFromEmployeeGroup
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\RemoveAccessLevelFromEmployeeGroup $parameters
     * @return \StructType\RemoveAccessLevelFromEmployeeGroupResponse|bool
     */
    public function RemoveAccessLevelFromEmployeeGroup(\StructType\RemoveAccessLevelFromEmployeeGroup $parameters)
    {
        try {
            $this->setResult($resultRemoveAccessLevelFromEmployeeGroup = $this->getSoapClient()->__soapCall('RemoveAccessLevelFromEmployeeGroup', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultRemoveAccessLevelFromEmployeeGroup;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named RemoveWorkplace
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\RemoveWorkplace $parameters
     * @return \StructType\RemoveWorkplaceResponse|bool
     */
    public function RemoveWorkplace(\StructType\RemoveWorkplace $parameters)
    {
        try {
            $this->setResult($resultRemoveWorkplace = $this->getSoapClient()->__soapCall('RemoveWorkplace', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultRemoveWorkplace;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named RemoveWorkplaceModule
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\RemoveWorkplaceModule $parameters
     * @return \StructType\RemoveWorkplaceModuleResponse|bool
     */
    public function RemoveWorkplaceModule(\StructType\RemoveWorkplaceModule $parameters)
    {
        try {
            $this->setResult($resultRemoveWorkplaceModule = $this->getSoapClient()->__soapCall('RemoveWorkplaceModule', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultRemoveWorkplaceModule;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named RemoveMap
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\RemoveMap $parameters
     * @return \StructType\RemoveMapResponse|bool
     */
    public function RemoveMap(\StructType\RemoveMap $parameters)
    {
        try {
            $this->setResult($resultRemoveMap = $this->getSoapClient()->__soapCall('RemoveMap', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultRemoveMap;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named RemoveNetwork
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\RemoveNetwork $parameters
     * @return \StructType\RemoveNetworkResponse|bool
     */
    public function RemoveNetwork(\StructType\RemoveNetwork $parameters)
    {
        try {
            $this->setResult($resultRemoveNetwork = $this->getSoapClient()->__soapCall('RemoveNetwork', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultRemoveNetwork;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named RemoveServer
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\RemoveServer $parameters
     * @return \StructType\RemoveServerResponse|bool
     */
    public function RemoveServer(\StructType\RemoveServer $parameters)
    {
        try {
            $this->setResult($resultRemoveServer = $this->getSoapClient()->__soapCall('RemoveServer', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultRemoveServer;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named RemoveDriver
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\RemoveDriver $parameters
     * @return \StructType\RemoveDriverResponse|bool
     */
    public function RemoveDriver(\StructType\RemoveDriver $parameters)
    {
        try {
            $this->setResult($resultRemoveDriver = $this->getSoapClient()->__soapCall('RemoveDriver', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultRemoveDriver;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named RemoveNetworkToSubnetworkLink
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\RemoveNetworkToSubnetworkLink $parameters
     * @return \StructType\RemoveNetworkToSubnetworkLinkResponse|bool
     */
    public function RemoveNetworkToSubnetworkLink(\StructType\RemoveNetworkToSubnetworkLink $parameters)
    {
        try {
            $this->setResult($resultRemoveNetworkToSubnetworkLink = $this->getSoapClient()->__soapCall('RemoveNetworkToSubnetworkLink', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultRemoveNetworkToSubnetworkLink;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named RemoveUser
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\RemoveUser $parameters
     * @return \StructType\RemoveUserResponse|bool
     */
    public function RemoveUser(\StructType\RemoveUser $parameters)
    {
        try {
            $this->setResult($resultRemoveUser = $this->getSoapClient()->__soapCall('RemoveUser', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultRemoveUser;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named RemoveUserGroup
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\RemoveUserGroup $parameters
     * @return \StructType\RemoveUserGroupResponse|bool
     */
    public function RemoveUserGroup(\StructType\RemoveUserGroup $parameters)
    {
        try {
            $this->setResult($resultRemoveUserGroup = $this->getSoapClient()->__soapCall('RemoveUserGroup', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultRemoveUserGroup;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named RemoveUsersFromUserGroup
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\RemoveUsersFromUserGroup $parameters
     * @return \StructType\RemoveUsersFromUserGroupResponse|bool
     */
    public function RemoveUsersFromUserGroup(\StructType\RemoveUsersFromUserGroup $parameters)
    {
        try {
            $this->setResult($resultRemoveUsersFromUserGroup = $this->getSoapClient()->__soapCall('RemoveUsersFromUserGroup', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultRemoveUsersFromUserGroup;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named RemoveUserGroupsFromUser
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\RemoveUserGroupsFromUser $parameters
     * @return \StructType\RemoveUserGroupsFromUserResponse|bool
     */
    public function RemoveUserGroupsFromUser(\StructType\RemoveUserGroupsFromUser $parameters)
    {
        try {
            $this->setResult($resultRemoveUserGroupsFromUser = $this->getSoapClient()->__soapCall('RemoveUserGroupsFromUser', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultRemoveUserGroupsFromUser;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named RemoveClaim
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\RemoveClaim $parameters
     * @return \StructType\RemoveClaimResponse|bool
     */
    public function RemoveClaim(\StructType\RemoveClaim $parameters)
    {
        try {
            $this->setResult($resultRemoveClaim = $this->getSoapClient()->__soapCall('RemoveClaim', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultRemoveClaim;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named RemoveAcsSchedule
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\RemoveAcsSchedule $parameters
     * @return \StructType\RemoveAcsScheduleResponse|bool
     */
    public function RemoveAcsSchedule(\StructType\RemoveAcsSchedule $parameters)
    {
        try {
            $this->setResult($resultRemoveAcsSchedule = $this->getSoapClient()->__soapCall('RemoveAcsSchedule', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultRemoveAcsSchedule;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named RemoveAcsDay
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\RemoveAcsDay $parameters
     * @return \StructType\RemoveAcsDayResponse|bool
     */
    public function RemoveAcsDay(\StructType\RemoveAcsDay $parameters)
    {
        try {
            $this->setResult($resultRemoveAcsDay = $this->getSoapClient()->__soapCall('RemoveAcsDay', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultRemoveAcsDay;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named RemoveEmployeePosition
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\RemoveEmployeePosition $parameters
     * @return \StructType\RemoveEmployeePositionResponse|bool
     */
    public function RemoveEmployeePosition(\StructType\RemoveEmployeePosition $parameters)
    {
        try {
            $this->setResult($resultRemoveEmployeePosition = $this->getSoapClient()->__soapCall('RemoveEmployeePosition', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultRemoveEmployeePosition;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named RemoveEmployeePositionForIncident
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\RemoveEmployeePositionForIncident $parameters
     * @return \StructType\RemoveEmployeePositionForIncidentResponse|bool
     */
    public function RemoveEmployeePositionForIncident(\StructType\RemoveEmployeePositionForIncident $parameters)
    {
        try {
            $this->setResult($resultRemoveEmployeePositionForIncident = $this->getSoapClient()->__soapCall('RemoveEmployeePositionForIncident', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultRemoveEmployeePositionForIncident;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named RemoveIncidentTemplate
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\RemoveIncidentTemplate $parameters
     * @return \StructType\RemoveIncidentTemplateResponse|bool
     */
    public function RemoveIncidentTemplate(\StructType\RemoveIncidentTemplate $parameters)
    {
        try {
            $this->setResult($resultRemoveIncidentTemplate = $this->getSoapClient()->__soapCall('RemoveIncidentTemplate', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultRemoveIncidentTemplate;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named RemoveIncidents
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\RemoveIncidents $parameters
     * @return \StructType\RemoveIncidentsResponse|bool
     */
    public function RemoveIncidents(\StructType\RemoveIncidents $parameters)
    {
        try {
            $this->setResult($resultRemoveIncidents = $this->getSoapClient()->__soapCall('RemoveIncidents', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultRemoveIncidents;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named RemoveDectionaryElement
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\RemoveDectionaryElement $parameters
     * @return \StructType\RemoveDectionaryElementResponse|bool
     */
    public function RemoveDectionaryElement(\StructType\RemoveDectionaryElement $parameters)
    {
        try {
            $this->setResult($resultRemoveDectionaryElement = $this->getSoapClient()->__soapCall('RemoveDectionaryElement', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultRemoveDectionaryElement;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named RemoveCardType
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\RemoveCardType $parameters
     * @return \StructType\RemoveCardTypeResponse|bool
     */
    public function RemoveCardType(\StructType\RemoveCardType $parameters)
    {
        try {
            $this->setResult($resultRemoveCardType = $this->getSoapClient()->__soapCall('RemoveCardType', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultRemoveCardType;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named RemoveMifareProfile
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\RemoveMifareProfile $parameters
     * @return \StructType\RemoveMifareProfileResponse|bool
     */
    public function RemoveMifareProfile(\StructType\RemoveMifareProfile $parameters)
    {
        try {
            $this->setResult($resultRemoveMifareProfile = $this->getSoapClient()->__soapCall('RemoveMifareProfile', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultRemoveMifareProfile;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named RemoveAcsEmployeeGroup
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\RemoveAcsEmployeeGroup $parameters
     * @return \StructType\RemoveAcsEmployeeGroupResponse|bool
     */
    public function RemoveAcsEmployeeGroup(\StructType\RemoveAcsEmployeeGroup $parameters)
    {
        try {
            $this->setResult($resultRemoveAcsEmployeeGroup = $this->getSoapClient()->__soapCall('RemoveAcsEmployeeGroup', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultRemoveAcsEmployeeGroup;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named RemoveAcsEmployee
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\RemoveAcsEmployee $parameters
     * @return \StructType\RemoveAcsEmployeeResponse|bool
     */
    public function RemoveAcsEmployee(\StructType\RemoveAcsEmployee $parameters)
    {
        try {
            $this->setResult($resultRemoveAcsEmployee = $this->getSoapClient()->__soapCall('RemoveAcsEmployee', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultRemoveAcsEmployee;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named RemoveEmployeeSchedule
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\RemoveEmployeeSchedule $parameters
     * @return \StructType\RemoveEmployeeScheduleResponse|bool
     */
    public function RemoveEmployeeSchedule(\StructType\RemoveEmployeeSchedule $parameters)
    {
        try {
            $this->setResult($resultRemoveEmployeeSchedule = $this->getSoapClient()->__soapCall('RemoveEmployeeSchedule', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultRemoveEmployeeSchedule;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Returns the result
     * @see AbstractSoapClientBase::getResult()
     * @return \StructType\RemoveAccessLevelFromEmployeeGroupResponse|\StructType\RemoveAccessLevelFromEmployeeResponse|\StructType\RemoveAccessLevelsFromEmployeeForceResponse|\StructType\RemoveAccessPoint2CameraChainResponse|\StructType\RemoveAcsAccessLevelResponse|\StructType\RemoveAcsAccessPointResponse|\StructType\RemoveAcsBoxAccessLevelResponse|\StructType\RemoveAcsDayResponse|\StructType\RemoveAcsEmployeeGroupResponse|\StructType\RemoveAcsEmployeeResponse|\StructType\RemoveAcsScheduleResponse|\StructType\RemoveAcsVehicleResponse|\StructType\RemoveAlcoGroupResponse|\StructType\RemoveAllEmployee2VehicleChainForEmployeeResponse|\StructType\RemoveBranchResponse|\StructType\RemoveCardTypeResponse|\StructType\RemoveCellResponse|\StructType\RemoveClaimResponse|\StructType\RemoveDayTypesResponse|\StructType\RemoveDectionaryElementResponse|\StructType\RemoveDriverFigureFromMapResponse|\StructType\RemoveDriverResponse|\StructType\RemoveDriversFromReactionEventResponse|\StructType\RemoveDriversFromReportParametersResponse|\StructType\RemoveEmailAddressResponse|\StructType\RemoveEmailDistributionAddressesResponse|\StructType\RemoveEmployeeFromReactionActionByGroupsResponse|\StructType\RemoveEmployeeFromReactionEventByGroupsResponse|\StructType\RemoveEmployeeFromReportParametersByGroupsResponse|\StructType\RemoveEmployeeGroupFromFavoriteFolderResponse|\StructType\RemoveEmployeeGroupsFromReactionActionResponse|\StructType\RemoveEmployeeGroupsFromReactionEventResponse|\StructType\RemoveEmployeeGroupsFromReportParametersResponse|\StructType\RemoveEmployeePositionForIncidentResponse|\StructType\RemoveEmployeePositionResponse|\StructType\RemoveEmployeeScheduleResponse|\StructType\RemoveEmployeesFromReactionActionResponse|\StructType\RemoveEmployeesFromReactionEventResponse|\StructType\RemoveEmployeesFromReportParametersResponse|\StructType\RemoveEmployeesToSecurityGroupResponse|\StructType\RemoveFavoriteFolderByWorkplaceResponse|\StructType\RemoveFavoriteFolderResponse|\StructType\RemoveFilterTagResponse|\StructType\RemoveIncidentsResponse|\StructType\RemoveIncidentTemplateResponse|\StructType\RemoveISS_DriversResponse|\StructType\RemoveISS_IIDKsResponse|\StructType\RemoveISS_RecognitionResponse|\StructType\RemoveLogMessageSubtypesFromReactionEventResponse|\StructType\RemoveLogMessageSubtypesFromReportParametersResponse|\StructType\RemoveMapResponse|\StructType\RemoveMifareProfileResponse|\StructType\RemoveNetworkResponse|\StructType\RemoveNetworkToSubnetworkLinkResponse|\StructType\RemoveNotifyResponse|\StructType\RemovePhoneNumbersResponse|\StructType\RemoveReactionActionsResponse|\StructType\RemoveReactionEventsResponse|\StructType\RemoveReactionResponse|\StructType\RemoveReportResponse|\StructType\RemoveServerResponse|\StructType\RemoveSwitchedOffLogDriversFromWorkplaceResponse|\StructType\RemoveSwitchedOffLogMessageSubtypesFromWorkplaceResponse|\StructType\RemoveTagResponse|\StructType\RemoveUserGroupResponse|\StructType\RemoveUserGroupsFromUserResponse|\StructType\RemoveUserPassEditorResponse|\StructType\RemoveUserPassResponse|\StructType\RemoveUserResponse|\StructType\RemoveUsersFromUserGroupResponse|\StructType\RemoveVehiclesFromReportParametersResponse|\StructType\RemoveVehicleTypesFromReportParametersResponse|\StructType\RemoveWorkplaceModuleResponse|\StructType\RemoveWorkplaceResponse|\StructType\RemoveWorkSchedulesFromEmployeeGroupResponse|\StructType\RemoveWorkSchedulesFromEmployeeResponse|\StructType\RemoveWorkSchedulesResponse|\StructType\RemoveWorkZoneFromEmployeeGroupResponse|\StructType\RemoveWorkZoneFromEmployeeResponse|\StructType\RemoveWorkZonesAccessPointResponse|\StructType\RemoveWorkZonesFromReportParametersResponse|\StructType\RemoveWorkZonesResponse|\StructType\Remove_ISS_DriverEventPlaybackResponse
     */
    public function getResult()
    {
        return parent::getResult();
    }
}
