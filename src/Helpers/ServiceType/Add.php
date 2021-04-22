<?php

declare(strict_types=1);

namespace ServiceType;

use SoapFault;
use lVinokurov\RusGuard\Helpers\Base\AbstractSoapClientBase;

/**
 * This class stands for Add ServiceType
 * @subpackage Services
 */
class Add extends AbstractSoapClientBase
{
    /**
     * Method to call the operation originally named AddBranch
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\AddBranch $parameters
     * @return \StructType\AddBranchResponse|bool
     */
    public function AddBranch(\StructType\AddBranch $parameters)
    {
        try {
            $this->setResult($resultAddBranch = $this->getSoapClient()->__soapCall('AddBranch', [
                $parameters,
            ], [], [], $this->outputHeaders));

            return $resultAddBranch;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);

            return false;
        }
    }
    /**
     * Method to call the operation originally named AddPhoneNumber
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\AddPhoneNumber $parameters
     * @return \StructType\AddPhoneNumberResponse|bool
     */
    public function AddPhoneNumber(\StructType\AddPhoneNumber $parameters)
    {
        try {
            $this->setResult($resultAddPhoneNumber = $this->getSoapClient()->__soapCall('AddPhoneNumber', [
                $parameters,
            ], [], [], $this->outputHeaders));

            return $resultAddPhoneNumber;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);

            return false;
        }
    }
    /**
     * Method to call the operation originally named AddEmailDistributionAddress
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\AddEmailDistributionAddress $parameters
     * @return \StructType\AddEmailDistributionAddressResponse|bool
     */
    public function AddEmailDistributionAddress(\StructType\AddEmailDistributionAddress $parameters)
    {
        try {
            $this->setResult($resultAddEmailDistributionAddress = $this->getSoapClient()->__soapCall('AddEmailDistributionAddress', [
                $parameters,
            ], [], [], $this->outputHeaders));

            return $resultAddEmailDistributionAddress;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);

            return false;
        }
    }
    /**
     * Method to call the operation originally named AddFavoriteFolder
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\AddFavoriteFolder $parameters
     * @return \StructType\AddFavoriteFolderResponse|bool
     */
    public function AddFavoriteFolder(\StructType\AddFavoriteFolder $parameters)
    {
        try {
            $this->setResult($resultAddFavoriteFolder = $this->getSoapClient()->__soapCall('AddFavoriteFolder', [
                $parameters,
            ], [], [], $this->outputHeaders));

            return $resultAddFavoriteFolder;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);

            return false;
        }
    }
    /**
     * Method to call the operation originally named AddFavoriteFolderByWorplace
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\AddFavoriteFolderByWorplace $parameters
     * @return \StructType\AddFavoriteFolderByWorplaceResponse|bool
     */
    public function AddFavoriteFolderByWorplace(\StructType\AddFavoriteFolderByWorplace $parameters)
    {
        try {
            $this->setResult($resultAddFavoriteFolderByWorplace = $this->getSoapClient()->__soapCall('AddFavoriteFolderByWorplace', [
                $parameters,
            ], [], [], $this->outputHeaders));

            return $resultAddFavoriteFolderByWorplace;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);

            return false;
        }
    }
    /**
     * Method to call the operation originally named AddTag
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\AddTag $parameters
     * @return \StructType\AddTagResponse|bool
     */
    public function AddTag(\StructType\AddTag $parameters)
    {
        try {
            $this->setResult($resultAddTag = $this->getSoapClient()->__soapCall('AddTag', [
                $parameters,
            ], [], [], $this->outputHeaders));

            return $resultAddTag;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);

            return false;
        }
    }
    /**
     * Method to call the operation originally named AddFilterTag
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\AddFilterTag $parameters
     * @return \StructType\AddFilterTagResponse|bool
     */
    public function AddFilterTag(\StructType\AddFilterTag $parameters)
    {
        try {
            $this->setResult($resultAddFilterTag = $this->getSoapClient()->__soapCall('AddFilterTag', [
                $parameters,
            ], [], [], $this->outputHeaders));

            return $resultAddFilterTag;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);

            return false;
        }
    }
    /**
     * Method to call the operation originally named AddUserPass
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\AddUserPass $parameters
     * @return \StructType\AddUserPassResponse|bool
     */
    public function AddUserPass(\StructType\AddUserPass $parameters)
    {
        try {
            $this->setResult($resultAddUserPass = $this->getSoapClient()->__soapCall('AddUserPass', [
                $parameters,
            ], [], [], $this->outputHeaders));

            return $resultAddUserPass;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);

            return false;
        }
    }
    /**
     * Method to call the operation originally named AddReaction
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\AddReaction $parameters
     * @return \StructType\AddReactionResponse|bool
     */
    public function AddReaction(\StructType\AddReaction $parameters)
    {
        try {
            $this->setResult($resultAddReaction = $this->getSoapClient()->__soapCall('AddReaction', [
                $parameters,
            ], [], [], $this->outputHeaders));

            return $resultAddReaction;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);

            return false;
        }
    }
    /**
     * Method to call the operation originally named AddReactionAction
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\AddReactionAction $parameters
     * @return \StructType\AddReactionActionResponse|bool
     */
    public function AddReactionAction(\StructType\AddReactionAction $parameters)
    {
        try {
            $this->setResult($resultAddReactionAction = $this->getSoapClient()->__soapCall('AddReactionAction', [
                $parameters,
            ], [], [], $this->outputHeaders));

            return $resultAddReactionAction;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);

            return false;
        }
    }
    /**
     * Method to call the operation originally named AddEmployeesToReactionAction
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\AddEmployeesToReactionAction $parameters
     * @return \StructType\AddEmployeesToReactionActionResponse|bool
     */
    public function AddEmployeesToReactionAction(\StructType\AddEmployeesToReactionAction $parameters)
    {
        try {
            $this->setResult($resultAddEmployeesToReactionAction = $this->getSoapClient()->__soapCall('AddEmployeesToReactionAction', [
                $parameters,
            ], [], [], $this->outputHeaders));

            return $resultAddEmployeesToReactionAction;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);

            return false;
        }
    }
    /**
     * Method to call the operation originally named AddEmployeeGroupsToReactionAction
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\AddEmployeeGroupsToReactionAction $parameters
     * @return \StructType\AddEmployeeGroupsToReactionActionResponse|bool
     */
    public function AddEmployeeGroupsToReactionAction(\StructType\AddEmployeeGroupsToReactionAction $parameters)
    {
        try {
            $this->setResult($resultAddEmployeeGroupsToReactionAction = $this->getSoapClient()->__soapCall('AddEmployeeGroupsToReactionAction', [
                $parameters,
            ], [], [], $this->outputHeaders));

            return $resultAddEmployeeGroupsToReactionAction;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);

            return false;
        }
    }
    /**
     * Method to call the operation originally named
     * AddEmployeesToReactionActionByGroups
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\AddEmployeesToReactionActionByGroups $parameters
     * @return \StructType\AddEmployeesToReactionActionByGroupsResponse|bool
     */
    public function AddEmployeesToReactionActionByGroups(\StructType\AddEmployeesToReactionActionByGroups $parameters)
    {
        try {
            $this->setResult($resultAddEmployeesToReactionActionByGroups = $this->getSoapClient()->__soapCall('AddEmployeesToReactionActionByGroups', [
                $parameters,
            ], [], [], $this->outputHeaders));

            return $resultAddEmployeesToReactionActionByGroups;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);

            return false;
        }
    }
    /**
     * Method to call the operation originally named AddReport
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\AddReport $parameters
     * @return \StructType\AddReportResponse|bool
     */
    public function AddReport(\StructType\AddReport $parameters)
    {
        try {
            $this->setResult($resultAddReport = $this->getSoapClient()->__soapCall('AddReport', [
                $parameters,
            ], [], [], $this->outputHeaders));

            return $resultAddReport;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);

            return false;
        }
    }
    /**
     * Method to call the operation originally named AddDriversToReportParameters
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\AddDriversToReportParameters $parameters
     * @return \StructType\AddDriversToReportParametersResponse|bool
     */
    public function AddDriversToReportParameters(\StructType\AddDriversToReportParameters $parameters)
    {
        try {
            $this->setResult($resultAddDriversToReportParameters = $this->getSoapClient()->__soapCall('AddDriversToReportParameters', [
                $parameters,
            ], [], [], $this->outputHeaders));

            return $resultAddDriversToReportParameters;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);

            return false;
        }
    }
    /**
     * Method to call the operation originally named
     * AddLogMessageSubtypesToReportParameters
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\AddLogMessageSubtypesToReportParameters $parameters
     * @return \StructType\AddLogMessageSubtypesToReportParametersResponse|bool
     */
    public function AddLogMessageSubtypesToReportParameters(\StructType\AddLogMessageSubtypesToReportParameters $parameters)
    {
        try {
            $this->setResult($resultAddLogMessageSubtypesToReportParameters = $this->getSoapClient()->__soapCall('AddLogMessageSubtypesToReportParameters', [
                $parameters,
            ], [], [], $this->outputHeaders));

            return $resultAddLogMessageSubtypesToReportParameters;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);

            return false;
        }
    }
    /**
     * Method to call the operation originally named
     * AddEmployeeGroupsToReportParameters
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\AddEmployeeGroupsToReportParameters $parameters
     * @return \StructType\AddEmployeeGroupsToReportParametersResponse|bool
     */
    public function AddEmployeeGroupsToReportParameters(\StructType\AddEmployeeGroupsToReportParameters $parameters)
    {
        try {
            $this->setResult($resultAddEmployeeGroupsToReportParameters = $this->getSoapClient()->__soapCall('AddEmployeeGroupsToReportParameters', [
                $parameters,
            ], [], [], $this->outputHeaders));

            return $resultAddEmployeeGroupsToReportParameters;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);

            return false;
        }
    }
    /**
     * Method to call the operation originally named
     * AddEmployeesToReportParametersByGroups
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\AddEmployeesToReportParametersByGroups $parameters
     * @return \StructType\AddEmployeesToReportParametersByGroupsResponse|bool
     */
    public function AddEmployeesToReportParametersByGroups(\StructType\AddEmployeesToReportParametersByGroups $parameters)
    {
        try {
            $this->setResult($resultAddEmployeesToReportParametersByGroups = $this->getSoapClient()->__soapCall('AddEmployeesToReportParametersByGroups', [
                $parameters,
            ], [], [], $this->outputHeaders));

            return $resultAddEmployeesToReportParametersByGroups;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);

            return false;
        }
    }
    /**
     * Method to call the operation originally named
     * AddEmployeesToReportParametersByTabNumbers
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\AddEmployeesToReportParametersByTabNumbers $parameters
     * @return \StructType\AddEmployeesToReportParametersByTabNumbersResponse|bool
     */
    public function AddEmployeesToReportParametersByTabNumbers(\StructType\AddEmployeesToReportParametersByTabNumbers $parameters)
    {
        try {
            $this->setResult($resultAddEmployeesToReportParametersByTabNumbers = $this->getSoapClient()->__soapCall('AddEmployeesToReportParametersByTabNumbers', [
                $parameters,
            ], [], [], $this->outputHeaders));

            return $resultAddEmployeesToReportParametersByTabNumbers;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);

            return false;
        }
    }
    /**
     * Method to call the operation originally named AddEmployeesToReportParameters
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\AddEmployeesToReportParameters $parameters
     * @return \StructType\AddEmployeesToReportParametersResponse|bool
     */
    public function AddEmployeesToReportParameters(\StructType\AddEmployeesToReportParameters $parameters)
    {
        try {
            $this->setResult($resultAddEmployeesToReportParameters = $this->getSoapClient()->__soapCall('AddEmployeesToReportParameters', [
                $parameters,
            ], [], [], $this->outputHeaders));

            return $resultAddEmployeesToReportParameters;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);

            return false;
        }
    }
    /**
     * Method to call the operation originally named AddWorkZonesToReportParameters
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\AddWorkZonesToReportParameters $parameters
     * @return \StructType\AddWorkZonesToReportParametersResponse|bool
     */
    public function AddWorkZonesToReportParameters(\StructType\AddWorkZonesToReportParameters $parameters)
    {
        try {
            $this->setResult($resultAddWorkZonesToReportParameters = $this->getSoapClient()->__soapCall('AddWorkZonesToReportParameters', [
                $parameters,
            ], [], [], $this->outputHeaders));

            return $resultAddWorkZonesToReportParameters;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);

            return false;
        }
    }
    /**
     * Method to call the operation originally named AddVehicleTypesToReportParameters
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\AddVehicleTypesToReportParameters $parameters
     * @return \StructType\AddVehicleTypesToReportParametersResponse|bool
     */
    public function AddVehicleTypesToReportParameters(\StructType\AddVehicleTypesToReportParameters $parameters)
    {
        try {
            $this->setResult($resultAddVehicleTypesToReportParameters = $this->getSoapClient()->__soapCall('AddVehicleTypesToReportParameters', [
                $parameters,
            ], [], [], $this->outputHeaders));

            return $resultAddVehicleTypesToReportParameters;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);

            return false;
        }
    }
    /**
     * Method to call the operation originally named AddVehiclesToReportParameters
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\AddVehiclesToReportParameters $parameters
     * @return \StructType\AddVehiclesToReportParametersResponse|bool
     */
    public function AddVehiclesToReportParameters(\StructType\AddVehiclesToReportParameters $parameters)
    {
        try {
            $this->setResult($resultAddVehiclesToReportParameters = $this->getSoapClient()->__soapCall('AddVehiclesToReportParameters', [
                $parameters,
            ], [], [], $this->outputHeaders));

            return $resultAddVehiclesToReportParameters;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);

            return false;
        }
    }
    /**
     * Method to call the operation originally named AddReactionEvent
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\AddReactionEvent $parameters
     * @return \StructType\AddReactionEventResponse|bool
     */
    public function AddReactionEvent(\StructType\AddReactionEvent $parameters)
    {
        try {
            $this->setResult($resultAddReactionEvent = $this->getSoapClient()->__soapCall('AddReactionEvent', [
                $parameters,
            ], [], [], $this->outputHeaders));

            return $resultAddReactionEvent;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);

            return false;
        }
    }
    /**
     * Method to call the operation originally named AddEmployeesToReactionEvent
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\AddEmployeesToReactionEvent $parameters
     * @return \StructType\AddEmployeesToReactionEventResponse|bool
     */
    public function AddEmployeesToReactionEvent(\StructType\AddEmployeesToReactionEvent $parameters)
    {
        try {
            $this->setResult($resultAddEmployeesToReactionEvent = $this->getSoapClient()->__soapCall('AddEmployeesToReactionEvent', [
                $parameters,
            ], [], [], $this->outputHeaders));

            return $resultAddEmployeesToReactionEvent;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);

            return false;
        }
    }
    /**
     * Method to call the operation originally named AddEmployeeGroupsToReactionEvent
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\AddEmployeeGroupsToReactionEvent $parameters
     * @return \StructType\AddEmployeeGroupsToReactionEventResponse|bool
     */
    public function AddEmployeeGroupsToReactionEvent(\StructType\AddEmployeeGroupsToReactionEvent $parameters)
    {
        try {
            $this->setResult($resultAddEmployeeGroupsToReactionEvent = $this->getSoapClient()->__soapCall('AddEmployeeGroupsToReactionEvent', [
                $parameters,
            ], [], [], $this->outputHeaders));

            return $resultAddEmployeeGroupsToReactionEvent;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);

            return false;
        }
    }
    /**
     * Method to call the operation originally named
     * AddEmployeesToReactionEventByGroups
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\AddEmployeesToReactionEventByGroups $parameters
     * @return \StructType\AddEmployeesToReactionEventByGroupsResponse|bool
     */
    public function AddEmployeesToReactionEventByGroups(\StructType\AddEmployeesToReactionEventByGroups $parameters)
    {
        try {
            $this->setResult($resultAddEmployeesToReactionEventByGroups = $this->getSoapClient()->__soapCall('AddEmployeesToReactionEventByGroups', [
                $parameters,
            ], [], [], $this->outputHeaders));

            return $resultAddEmployeesToReactionEventByGroups;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);

            return false;
        }
    }
    /**
     * Method to call the operation originally named AddDriversToReactionEvent
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\AddDriversToReactionEvent $parameters
     * @return \StructType\AddDriversToReactionEventResponse|bool
     */
    public function AddDriversToReactionEvent(\StructType\AddDriversToReactionEvent $parameters)
    {
        try {
            $this->setResult($resultAddDriversToReactionEvent = $this->getSoapClient()->__soapCall('AddDriversToReactionEvent', [
                $parameters,
            ], [], [], $this->outputHeaders));

            return $resultAddDriversToReactionEvent;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);

            return false;
        }
    }
    /**
     * Method to call the operation originally named
     * AddLogMessageSubtypesToReactionEvent
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\AddLogMessageSubtypesToReactionEvent $parameters
     * @return \StructType\AddLogMessageSubtypesToReactionEventResponse|bool
     */
    public function AddLogMessageSubtypesToReactionEvent(\StructType\AddLogMessageSubtypesToReactionEvent $parameters)
    {
        try {
            $this->setResult($resultAddLogMessageSubtypesToReactionEvent = $this->getSoapClient()->__soapCall('AddLogMessageSubtypesToReactionEvent', [
                $parameters,
            ], [], [], $this->outputHeaders));

            return $resultAddLogMessageSubtypesToReactionEvent;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);

            return false;
        }
    }
    /**
     * Method to call the operation originally named
     * AddSwitchedOffLogMessageSubtypesToWorkplace
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\AddSwitchedOffLogMessageSubtypesToWorkplace $parameters
     * @return \StructType\AddSwitchedOffLogMessageSubtypesToWorkplaceResponse|bool
     */
    public function AddSwitchedOffLogMessageSubtypesToWorkplace(\StructType\AddSwitchedOffLogMessageSubtypesToWorkplace $parameters)
    {
        try {
            $this->setResult($resultAddSwitchedOffLogMessageSubtypesToWorkplace = $this->getSoapClient()->__soapCall('AddSwitchedOffLogMessageSubtypesToWorkplace', [
                $parameters,
            ], [], [], $this->outputHeaders));

            return $resultAddSwitchedOffLogMessageSubtypesToWorkplace;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);

            return false;
        }
    }
    /**
     * Method to call the operation originally named
     * AddSwitchedOffLogDriversToWorkplace
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\AddSwitchedOffLogDriversToWorkplace $parameters
     * @return \StructType\AddSwitchedOffLogDriversToWorkplaceResponse|bool
     */
    public function AddSwitchedOffLogDriversToWorkplace(\StructType\AddSwitchedOffLogDriversToWorkplace $parameters)
    {
        try {
            $this->setResult($resultAddSwitchedOffLogDriversToWorkplace = $this->getSoapClient()->__soapCall('AddSwitchedOffLogDriversToWorkplace', [
                $parameters,
            ], [], [], $this->outputHeaders));

            return $resultAddSwitchedOffLogDriversToWorkplace;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);

            return false;
        }
    }
    /**
     * Method to call the operation originally named AddDriverFigureToMap
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\AddDriverFigureToMap $parameters
     * @return \StructType\AddDriverFigureToMapResponse|bool
     */
    public function AddDriverFigureToMap(\StructType\AddDriverFigureToMap $parameters)
    {
        try {
            $this->setResult($resultAddDriverFigureToMap = $this->getSoapClient()->__soapCall('AddDriverFigureToMap', [
                $parameters,
            ], [], [], $this->outputHeaders));

            return $resultAddDriverFigureToMap;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);

            return false;
        }
    }
    /**
     * Method to call the operation originally named AddWorkSchedulesToEmployee
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\AddWorkSchedulesToEmployee $parameters
     * @return \StructType\AddWorkSchedulesToEmployeeResponse|bool
     */
    public function AddWorkSchedulesToEmployee(\StructType\AddWorkSchedulesToEmployee $parameters)
    {
        try {
            $this->setResult($resultAddWorkSchedulesToEmployee = $this->getSoapClient()->__soapCall('AddWorkSchedulesToEmployee', [
                $parameters,
            ], [], [], $this->outputHeaders));

            return $resultAddWorkSchedulesToEmployee;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);

            return false;
        }
    }
    /**
     * Method to call the operation originally named AddWorkSchedulesToEmployeeGroup
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\AddWorkSchedulesToEmployeeGroup $parameters
     * @return \StructType\AddWorkSchedulesToEmployeeGroupResponse|bool
     */
    public function AddWorkSchedulesToEmployeeGroup(\StructType\AddWorkSchedulesToEmployeeGroup $parameters)
    {
        try {
            $this->setResult($resultAddWorkSchedulesToEmployeeGroup = $this->getSoapClient()->__soapCall('AddWorkSchedulesToEmployeeGroup', [
                $parameters,
            ], [], [], $this->outputHeaders));

            return $resultAddWorkSchedulesToEmployeeGroup;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);

            return false;
        }
    }
    /**
     * Method to call the operation originally named AddWorkZonesToEmployee
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\AddWorkZonesToEmployee $parameters
     * @return \StructType\AddWorkZonesToEmployeeResponse|bool
     */
    public function AddWorkZonesToEmployee(\StructType\AddWorkZonesToEmployee $parameters)
    {
        try {
            $this->setResult($resultAddWorkZonesToEmployee = $this->getSoapClient()->__soapCall('AddWorkZonesToEmployee', [
                $parameters,
            ], [], [], $this->outputHeaders));

            return $resultAddWorkZonesToEmployee;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);

            return false;
        }
    }
    /**
     * Method to call the operation originally named AddWorkZonesToEmployeeGroup
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\AddWorkZonesToEmployeeGroup $parameters
     * @return \StructType\AddWorkZonesToEmployeeGroupResponse|bool
     */
    public function AddWorkZonesToEmployeeGroup(\StructType\AddWorkZonesToEmployeeGroup $parameters)
    {
        try {
            $this->setResult($resultAddWorkZonesToEmployeeGroup = $this->getSoapClient()->__soapCall('AddWorkZonesToEmployeeGroup', [
                $parameters,
            ], [], [], $this->outputHeaders));

            return $resultAddWorkZonesToEmployeeGroup;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);

            return false;
        }
    }
    /**
     * Method to call the operation originally named AddDayType
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\AddDayType $parameters
     * @return \StructType\AddDayTypeResponse|bool
     */
    public function AddDayType(\StructType\AddDayType $parameters)
    {
        try {
            $this->setResult($resultAddDayType = $this->getSoapClient()->__soapCall('AddDayType', [
                $parameters,
            ], [], [], $this->outputHeaders));

            return $resultAddDayType;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);

            return false;
        }
    }
    /**
     * Method to call the operation originally named AddWorkSchedule
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\AddWorkSchedule $parameters
     * @return \StructType\AddWorkScheduleResponse|bool
     */
    public function AddWorkSchedule(\StructType\AddWorkSchedule $parameters)
    {
        try {
            $this->setResult($resultAddWorkSchedule = $this->getSoapClient()->__soapCall('AddWorkSchedule', [
                $parameters,
            ], [], [], $this->outputHeaders));

            return $resultAddWorkSchedule;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);

            return false;
        }
    }
    /**
     * Method to call the operation originally named AddWorkZone
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\AddWorkZone $parameters
     * @return \StructType\AddWorkZoneResponse|bool
     */
    public function AddWorkZone(\StructType\AddWorkZone $parameters)
    {
        try {
            $this->setResult($resultAddWorkZone = $this->getSoapClient()->__soapCall('AddWorkZone', [
                $parameters,
            ], [], [], $this->outputHeaders));

            return $resultAddWorkZone;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);

            return false;
        }
    }
    /**
     * Method to call the operation originally named AddWorkZonesAccessPoint
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\AddWorkZonesAccessPoint $parameters
     * @return \StructType\AddWorkZonesAccessPointResponse|bool
     */
    public function AddWorkZonesAccessPoint(\StructType\AddWorkZonesAccessPoint $parameters)
    {
        try {
            $this->setResult($resultAddWorkZonesAccessPoint = $this->getSoapClient()->__soapCall('AddWorkZonesAccessPoint', [
                $parameters,
            ], [], [], $this->outputHeaders));

            return $resultAddWorkZonesAccessPoint;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);

            return false;
        }
    }
    /**
     * Method to call the operation originally named Add_ISS_IIDK
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\Add_ISS_IIDK $parameters
     * @return \StructType\Add_ISS_IIDKResponse|bool
     */
    public function Add_ISS_IIDK(\StructType\Add_ISS_IIDK $parameters)
    {
        try {
            $this->setResult($resultAdd_ISS_IIDK = $this->getSoapClient()->__soapCall('Add_ISS_IIDK', [
                $parameters,
            ], [], [], $this->outputHeaders));

            return $resultAdd_ISS_IIDK;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);

            return false;
        }
    }
    /**
     * Method to call the operation originally named Add_ISS_Recognition
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\Add_ISS_Recognition $parameters
     * @return \StructType\Add_ISS_RecognitionResponse|bool
     */
    public function Add_ISS_Recognition(\StructType\Add_ISS_Recognition $parameters)
    {
        try {
            $this->setResult($resultAdd_ISS_Recognition = $this->getSoapClient()->__soapCall('Add_ISS_Recognition', [
                $parameters,
            ], [], [], $this->outputHeaders));

            return $resultAdd_ISS_Recognition;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);

            return false;
        }
    }
    /**
     * Method to call the operation originally named Add_ISS_Driver
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\Add_ISS_Driver $parameters
     * @return \StructType\Add_ISS_DriverResponse|bool
     */
    public function Add_ISS_Driver(\StructType\Add_ISS_Driver $parameters)
    {
        try {
            $this->setResult($resultAdd_ISS_Driver = $this->getSoapClient()->__soapCall('Add_ISS_Driver', [
                $parameters,
            ], [], [], $this->outputHeaders));

            return $resultAdd_ISS_Driver;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);

            return false;
        }
    }
    /**
     * Method to call the operation originally named Add_ISS_DriverEventPlayback
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\Add_ISS_DriverEventPlayback $parameters
     * @return \StructType\Add_ISS_DriverEventPlaybackResponse|bool
     */
    public function Add_ISS_DriverEventPlayback(\StructType\Add_ISS_DriverEventPlayback $parameters)
    {
        try {
            $this->setResult($resultAdd_ISS_DriverEventPlayback = $this->getSoapClient()->__soapCall('Add_ISS_DriverEventPlayback', [
                $parameters,
            ], [], [], $this->outputHeaders));

            return $resultAdd_ISS_DriverEventPlayback;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);

            return false;
        }
    }
    /**
     * Method to call the operation originally named AddNestedCell
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\AddNestedCell $parameters
     * @return \StructType\AddNestedCellResponse|bool
     */
    public function AddNestedCell(\StructType\AddNestedCell $parameters)
    {
        try {
            $this->setResult($resultAddNestedCell = $this->getSoapClient()->__soapCall('AddNestedCell', [
                $parameters,
            ], [], [], $this->outputHeaders));

            return $resultAddNestedCell;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);

            return false;
        }
    }
    /**
     * Method to call the operation originally named AddEmailAddress
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\AddEmailAddress $parameters
     * @return \StructType\AddEmailAddressResponse|bool
     */
    public function AddEmailAddress(\StructType\AddEmailAddress $parameters)
    {
        try {
            $this->setResult($resultAddEmailAddress = $this->getSoapClient()->__soapCall('AddEmailAddress', [
                $parameters,
            ], [], [], $this->outputHeaders));

            return $resultAddEmailAddress;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);

            return false;
        }
    }
    /**
     * Method to call the operation originally named AddAccessPoint2CameraChain
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\AddAccessPoint2CameraChain $parameters
     * @return \StructType\AddAccessPoint2CameraChainResponse|bool
     */
    public function AddAccessPoint2CameraChain(\StructType\AddAccessPoint2CameraChain $parameters)
    {
        try {
            $this->setResult($resultAddAccessPoint2CameraChain = $this->getSoapClient()->__soapCall('AddAccessPoint2CameraChain', [
                $parameters,
            ], [], [], $this->outputHeaders));

            return $resultAddAccessPoint2CameraChain;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);

            return false;
        }
    }
    /**
     * Method to call the operation originally named AddAcsVehicle
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\AddAcsVehicle $parameters
     * @return \StructType\AddAcsVehicleResponse|bool
     */
    public function AddAcsVehicle(\StructType\AddAcsVehicle $parameters)
    {
        try {
            $this->setResult($resultAddAcsVehicle = $this->getSoapClient()->__soapCall('AddAcsVehicle', [
                $parameters,
            ], [], [], $this->outputHeaders));

            return $resultAddAcsVehicle;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);

            return false;
        }
    }
    /**
     * Method to call the operation originally named AddEmployee2VehicleChain
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\AddEmployee2VehicleChain $parameters
     * @return \StructType\AddEmployee2VehicleChainResponse|bool
     */
    public function AddEmployee2VehicleChain(\StructType\AddEmployee2VehicleChain $parameters)
    {
        try {
            $this->setResult($resultAddEmployee2VehicleChain = $this->getSoapClient()->__soapCall('AddEmployee2VehicleChain', [
                $parameters,
            ], [], [], $this->outputHeaders));

            return $resultAddEmployee2VehicleChain;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);

            return false;
        }
    }
    /**
     * Method to call the operation originally named AddLogMessageForAccessPoint
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\AddLogMessageForAccessPoint $parameters
     * @return \StructType\AddLogMessageForAccessPointResponse|bool
     */
    public function AddLogMessageForAccessPoint(\StructType\AddLogMessageForAccessPoint $parameters)
    {
        try {
            $this->setResult($resultAddLogMessageForAccessPoint = $this->getSoapClient()->__soapCall('AddLogMessageForAccessPoint', [
                $parameters,
            ], [], [], $this->outputHeaders));

            return $resultAddLogMessageForAccessPoint;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);

            return false;
        }
    }
    /**
     * Method to call the operation originally named AddField
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\AddField $parameters
     * @return \StructType\AddFieldResponse|bool
     */
    public function AddField(\StructType\AddField $parameters)
    {
        try {
            $this->setResult($resultAddField = $this->getSoapClient()->__soapCall('AddField', [
                $parameters,
            ], [], [], $this->outputHeaders));

            return $resultAddField;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);

            return false;
        }
    }
    /**
     * Method to call the operation originally named AddPhotoOrder
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\AddPhotoOrder $parameters
     * @return \StructType\AddPhotoOrderResponse|bool
     */
    public function AddPhotoOrder(\StructType\AddPhotoOrder $parameters)
    {
        try {
            $this->setResult($resultAddPhotoOrder = $this->getSoapClient()->__soapCall('AddPhotoOrder', [
                $parameters,
            ], [], [], $this->outputHeaders));

            return $resultAddPhotoOrder;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);

            return false;
        }
    }
    /**
     * Method to call the operation originally named AddAcsBoxAccessLevel
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\AddAcsBoxAccessLevel $parameters
     * @return \StructType\AddAcsBoxAccessLevelResponse|bool
     */
    public function AddAcsBoxAccessLevel(\StructType\AddAcsBoxAccessLevel $parameters)
    {
        try {
            $this->setResult($resultAddAcsBoxAccessLevel = $this->getSoapClient()->__soapCall('AddAcsBoxAccessLevel', [
                $parameters,
            ], [], [], $this->outputHeaders));

            return $resultAddAcsBoxAccessLevel;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);

            return false;
        }
    }
    /**
     * Method to call the operation originally named AddAcsAccessLevel
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\AddAcsAccessLevel $parameters
     * @return \StructType\AddAcsAccessLevelResponse|bool
     */
    public function AddAcsAccessLevel(\StructType\AddAcsAccessLevel $parameters)
    {
        try {
            $this->setResult($resultAddAcsAccessLevel = $this->getSoapClient()->__soapCall('AddAcsAccessLevel', [
                $parameters,
            ], [], [], $this->outputHeaders));

            return $resultAddAcsAccessLevel;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);

            return false;
        }
    }
    /**
     * Method to call the operation originally named AddAlcoGroup
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\AddAlcoGroup $parameters
     * @return \StructType\AddAlcoGroupResponse|bool
     */
    public function AddAlcoGroup(\StructType\AddAlcoGroup $parameters)
    {
        try {
            $this->setResult($resultAddAlcoGroup = $this->getSoapClient()->__soapCall('AddAlcoGroup', [
                $parameters,
            ], [], [], $this->outputHeaders));

            return $resultAddAlcoGroup;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);

            return false;
        }
    }
    /**
     * Method to call the operation originally named AddEmployeePositionsToAlcoGroup
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\AddEmployeePositionsToAlcoGroup $parameters
     * @return \StructType\AddEmployeePositionsToAlcoGroupResponse|bool
     */
    public function AddEmployeePositionsToAlcoGroup(\StructType\AddEmployeePositionsToAlcoGroup $parameters)
    {
        try {
            $this->setResult($resultAddEmployeePositionsToAlcoGroup = $this->getSoapClient()->__soapCall('AddEmployeePositionsToAlcoGroup', [
                $parameters,
            ], [], [], $this->outputHeaders));

            return $resultAddEmployeePositionsToAlcoGroup;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);

            return false;
        }
    }
    /**
     * Method to call the operation originally named AddEmployeeGroupsToAlcoGroup
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\AddEmployeeGroupsToAlcoGroup $parameters
     * @return \StructType\AddEmployeeGroupsToAlcoGroupResponse|bool
     */
    public function AddEmployeeGroupsToAlcoGroup(\StructType\AddEmployeeGroupsToAlcoGroup $parameters)
    {
        try {
            $this->setResult($resultAddEmployeeGroupsToAlcoGroup = $this->getSoapClient()->__soapCall('AddEmployeeGroupsToAlcoGroup', [
                $parameters,
            ], [], [], $this->outputHeaders));

            return $resultAddEmployeeGroupsToAlcoGroup;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);

            return false;
        }
    }
    /**
     * Method to call the operation originally named AddAcsAccessPoint
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\AddAcsAccessPoint $parameters
     * @return \StructType\AddAcsAccessPointResponse|bool
     */
    public function AddAcsAccessPoint(\StructType\AddAcsAccessPoint $parameters)
    {
        try {
            $this->setResult($resultAddAcsAccessPoint = $this->getSoapClient()->__soapCall('AddAcsAccessPoint', [
                $parameters,
            ], [], [], $this->outputHeaders));

            return $resultAddAcsAccessPoint;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);

            return false;
        }
    }
    /**
     * Method to call the operation originally named AddEmployeesToSecurityGroup
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\AddEmployeesToSecurityGroup $parameters
     * @return \StructType\AddEmployeesToSecurityGroupResponse|bool
     */
    public function AddEmployeesToSecurityGroup(\StructType\AddEmployeesToSecurityGroup $parameters)
    {
        try {
            $this->setResult($resultAddEmployeesToSecurityGroup = $this->getSoapClient()->__soapCall('AddEmployeesToSecurityGroup', [
                $parameters,
            ], [], [], $this->outputHeaders));

            return $resultAddEmployeesToSecurityGroup;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);

            return false;
        }
    }
    /**
     * Method to call the operation originally named
     * AddAccessLevelsToEmployeeWithPeriod
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\AddAccessLevelsToEmployeeWithPeriod $parameters
     * @return \StructType\AddAccessLevelsToEmployeeWithPeriodResponse|bool
     */
    public function AddAccessLevelsToEmployeeWithPeriod(\StructType\AddAccessLevelsToEmployeeWithPeriod $parameters)
    {
        try {
            $this->setResult($resultAddAccessLevelsToEmployeeWithPeriod = $this->getSoapClient()->__soapCall('AddAccessLevelsToEmployeeWithPeriod', [
                $parameters,
            ], [], [], $this->outputHeaders));

            return $resultAddAccessLevelsToEmployeeWithPeriod;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);

            return false;
        }
    }
    /**
     * Method to call the operation originally named
     * AddAccessLevelsToEmployeeGroupWithPeriod
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\AddAccessLevelsToEmployeeGroupWithPeriod $parameters
     * @return \StructType\AddAccessLevelsToEmployeeGroupWithPeriodResponse|bool
     */
    public function AddAccessLevelsToEmployeeGroupWithPeriod(\StructType\AddAccessLevelsToEmployeeGroupWithPeriod $parameters)
    {
        try {
            $this->setResult($resultAddAccessLevelsToEmployeeGroupWithPeriod = $this->getSoapClient()->__soapCall('AddAccessLevelsToEmployeeGroupWithPeriod', [
                $parameters,
            ], [], [], $this->outputHeaders));

            return $resultAddAccessLevelsToEmployeeGroupWithPeriod;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);

            return false;
        }
    }
    /**
     * Method to call the operation originally named AddAccessLevelsToEmployee
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\AddAccessLevelsToEmployee $parameters
     * @return \StructType\AddAccessLevelsToEmployeeResponse|bool
     */
    public function AddAccessLevelsToEmployee(\StructType\AddAccessLevelsToEmployee $parameters)
    {
        try {
            $this->setResult($resultAddAccessLevelsToEmployee = $this->getSoapClient()->__soapCall('AddAccessLevelsToEmployee', [
                $parameters,
            ], [], [], $this->outputHeaders));

            return $resultAddAccessLevelsToEmployee;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);

            return false;
        }
    }
    /**
     * Method to call the operation originally named AddAccessLevelsToEmployeeGroup
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\AddAccessLevelsToEmployeeGroup $parameters
     * @return \StructType\AddAccessLevelsToEmployeeGroupResponse|bool
     */
    public function AddAccessLevelsToEmployeeGroup(\StructType\AddAccessLevelsToEmployeeGroup $parameters)
    {
        try {
            $this->setResult($resultAddAccessLevelsToEmployeeGroup = $this->getSoapClient()->__soapCall('AddAccessLevelsToEmployeeGroup', [
                $parameters,
            ], [], [], $this->outputHeaders));

            return $resultAddAccessLevelsToEmployeeGroup;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);

            return false;
        }
    }
    /**
     * Method to call the operation originally named AddAccessLevelsToEmployeeForce
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\AddAccessLevelsToEmployeeForce $parameters
     * @return \StructType\AddAccessLevelsToEmployeeForceResponse|bool
     */
    public function AddAccessLevelsToEmployeeForce(\StructType\AddAccessLevelsToEmployeeForce $parameters)
    {
        try {
            $this->setResult($resultAddAccessLevelsToEmployeeForce = $this->getSoapClient()->__soapCall('AddAccessLevelsToEmployeeForce', [
                $parameters,
            ], [], [], $this->outputHeaders));

            return $resultAddAccessLevelsToEmployeeForce;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);

            return false;
        }
    }
    /**
     * Method to call the operation originally named AddWorkplace
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\AddWorkplace $parameters
     * @return \StructType\AddWorkplaceResponse|bool
     */
    public function AddWorkplace(\StructType\AddWorkplace $parameters)
    {
        try {
            $this->setResult($resultAddWorkplace = $this->getSoapClient()->__soapCall('AddWorkplace', [
                $parameters,
            ], [], [], $this->outputHeaders));

            return $resultAddWorkplace;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);

            return false;
        }
    }
    /**
     * Method to call the operation originally named AddWorkplaceModule
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\AddWorkplaceModule $parameters
     * @return \StructType\AddWorkplaceModuleResponse|bool
     */
    public function AddWorkplaceModule(\StructType\AddWorkplaceModule $parameters)
    {
        try {
            $this->setResult($resultAddWorkplaceModule = $this->getSoapClient()->__soapCall('AddWorkplaceModule', [
                $parameters,
            ], [], [], $this->outputHeaders));

            return $resultAddWorkplaceModule;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);

            return false;
        }
    }
    /**
     * Method to call the operation originally named AddRootMap
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\AddRootMap $parameters
     * @return \StructType\AddRootMapResponse|bool
     */
    public function AddRootMap(\StructType\AddRootMap $parameters)
    {
        try {
            $this->setResult($resultAddRootMap = $this->getSoapClient()->__soapCall('AddRootMap', [
                $parameters,
            ], [], [], $this->outputHeaders));

            return $resultAddRootMap;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);

            return false;
        }
    }
    /**
     * Method to call the operation originally named AddMap
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\AddMap $parameters
     * @return \StructType\AddMapResponse|bool
     */
    public function AddMap(\StructType\AddMap $parameters)
    {
        try {
            $this->setResult($resultAddMap = $this->getSoapClient()->__soapCall('AddMap', [
                $parameters,
            ], [], [], $this->outputHeaders));

            return $resultAddMap;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);

            return false;
        }
    }
    /**
     * Method to call the operation originally named AddNetwork
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\AddNetwork $parameters
     * @return \StructType\AddNetworkResponse|bool
     */
    public function AddNetwork(\StructType\AddNetwork $parameters)
    {
        try {
            $this->setResult($resultAddNetwork = $this->getSoapClient()->__soapCall('AddNetwork', [
                $parameters,
            ], [], [], $this->outputHeaders));

            return $resultAddNetwork;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);

            return false;
        }
    }
    /**
     * Method to call the operation originally named AddLocalServer
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\AddLocalServer $parameters
     * @return \StructType\AddLocalServerResponse|bool
     */
    public function AddLocalServer(\StructType\AddLocalServer $parameters)
    {
        try {
            $this->setResult($resultAddLocalServer = $this->getSoapClient()->__soapCall('AddLocalServer', [
                $parameters,
            ], [], [], $this->outputHeaders));

            return $resultAddLocalServer;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);

            return false;
        }
    }
    /**
     * Method to call the operation originally named AddServer
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\AddServer $parameters
     * @return \StructType\AddServerResponse|bool
     */
    public function AddServer(\StructType\AddServer $parameters)
    {
        try {
            $this->setResult($resultAddServer = $this->getSoapClient()->__soapCall('AddServer', [
                $parameters,
            ], [], [], $this->outputHeaders));

            return $resultAddServer;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);

            return false;
        }
    }
    /**
     * Method to call the operation originally named AddRootDriverProps
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\AddRootDriverProps $parameters
     * @return \StructType\AddRootDriverPropsResponse|bool
     */
    public function AddRootDriverProps(\StructType\AddRootDriverProps $parameters)
    {
        try {
            $this->setResult($resultAddRootDriverProps = $this->getSoapClient()->__soapCall('AddRootDriverProps', [
                $parameters,
            ], [], [], $this->outputHeaders));

            return $resultAddRootDriverProps;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);

            return false;
        }
    }
    /**
     * Method to call the operation originally named AddDriverProps
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\AddDriverProps $parameters
     * @return \StructType\AddDriverPropsResponse|bool
     */
    public function AddDriverProps(\StructType\AddDriverProps $parameters)
    {
        try {
            $this->setResult($resultAddDriverProps = $this->getSoapClient()->__soapCall('AddDriverProps', [
                $parameters,
            ], [], [], $this->outputHeaders));

            return $resultAddDriverProps;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);

            return false;
        }
    }
    /**
     * Method to call the operation originally named AddNetworkToSubnetworkLink
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\AddNetworkToSubnetworkLink $parameters
     * @return \StructType\AddNetworkToSubnetworkLinkResponse|bool
     */
    public function AddNetworkToSubnetworkLink(\StructType\AddNetworkToSubnetworkLink $parameters)
    {
        try {
            $this->setResult($resultAddNetworkToSubnetworkLink = $this->getSoapClient()->__soapCall('AddNetworkToSubnetworkLink', [
                $parameters,
            ], [], [], $this->outputHeaders));

            return $resultAddNetworkToSubnetworkLink;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);

            return false;
        }
    }
    /**
     * Method to call the operation originally named AddUser
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\AddUser $parameters
     * @return \StructType\AddUserResponse|bool
     */
    public function AddUser(\StructType\AddUser $parameters)
    {
        try {
            $this->setResult($resultAddUser = $this->getSoapClient()->__soapCall('AddUser', [
                $parameters,
            ], [], [], $this->outputHeaders));

            return $resultAddUser;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);

            return false;
        }
    }
    /**
     * Method to call the operation originally named AddUserGroup
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\AddUserGroup $parameters
     * @return \StructType\AddUserGroupResponse|bool
     */
    public function AddUserGroup(\StructType\AddUserGroup $parameters)
    {
        try {
            $this->setResult($resultAddUserGroup = $this->getSoapClient()->__soapCall('AddUserGroup', [
                $parameters,
            ], [], [], $this->outputHeaders));

            return $resultAddUserGroup;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);

            return false;
        }
    }
    /**
     * Method to call the operation originally named AddUsersToUserGroup
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\AddUsersToUserGroup $parameters
     * @return \StructType\AddUsersToUserGroupResponse|bool
     */
    public function AddUsersToUserGroup(\StructType\AddUsersToUserGroup $parameters)
    {
        try {
            $this->setResult($resultAddUsersToUserGroup = $this->getSoapClient()->__soapCall('AddUsersToUserGroup', [
                $parameters,
            ], [], [], $this->outputHeaders));

            return $resultAddUsersToUserGroup;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);

            return false;
        }
    }
    /**
     * Method to call the operation originally named AddUserGroupsToUser
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\AddUserGroupsToUser $parameters
     * @return \StructType\AddUserGroupsToUserResponse|bool
     */
    public function AddUserGroupsToUser(\StructType\AddUserGroupsToUser $parameters)
    {
        try {
            $this->setResult($resultAddUserGroupsToUser = $this->getSoapClient()->__soapCall('AddUserGroupsToUser', [
                $parameters,
            ], [], [], $this->outputHeaders));

            return $resultAddUserGroupsToUser;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);

            return false;
        }
    }
    /**
     * Method to call the operation originally named AddClaim
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\AddClaim $parameters
     * @return \StructType\AddClaimResponse|bool
     */
    public function AddClaim(\StructType\AddClaim $parameters)
    {
        try {
            $this->setResult($resultAddClaim = $this->getSoapClient()->__soapCall('AddClaim', [
                $parameters,
            ], [], [], $this->outputHeaders));

            return $resultAddClaim;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);

            return false;
        }
    }
    /**
     * Method to call the operation originally named AddAcsDaySchedule
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\AddAcsDaySchedule $parameters
     * @return \StructType\AddAcsDayScheduleResponse|bool
     */
    public function AddAcsDaySchedule(\StructType\AddAcsDaySchedule $parameters)
    {
        try {
            $this->setResult($resultAddAcsDaySchedule = $this->getSoapClient()->__soapCall('AddAcsDaySchedule', [
                $parameters,
            ], [], [], $this->outputHeaders));

            return $resultAddAcsDaySchedule;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);

            return false;
        }
    }
    /**
     * Method to call the operation originally named AddAcsDayScheduleForOwner
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\AddAcsDayScheduleForOwner $parameters
     * @return \StructType\AddAcsDayScheduleForOwnerResponse|bool
     */
    public function AddAcsDayScheduleForOwner(\StructType\AddAcsDayScheduleForOwner $parameters)
    {
        try {
            $this->setResult($resultAddAcsDayScheduleForOwner = $this->getSoapClient()->__soapCall('AddAcsDayScheduleForOwner', [
                $parameters,
            ], [], [], $this->outputHeaders));

            return $resultAddAcsDayScheduleForOwner;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);

            return false;
        }
    }
    /**
     * Method to call the operation originally named AddAcsMultiDaySchedule
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\AddAcsMultiDaySchedule $parameters
     * @return \StructType\AddAcsMultiDayScheduleResponse|bool
     */
    public function AddAcsMultiDaySchedule(\StructType\AddAcsMultiDaySchedule $parameters)
    {
        try {
            $this->setResult($resultAddAcsMultiDaySchedule = $this->getSoapClient()->__soapCall('AddAcsMultiDaySchedule', [
                $parameters,
            ], [], [], $this->outputHeaders));

            return $resultAddAcsMultiDaySchedule;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);

            return false;
        }
    }
    /**
     * Method to call the operation originally named AddAcsWeekSchedule
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\AddAcsWeekSchedule $parameters
     * @return \StructType\AddAcsWeekScheduleResponse|bool
     */
    public function AddAcsWeekSchedule(\StructType\AddAcsWeekSchedule $parameters)
    {
        try {
            $this->setResult($resultAddAcsWeekSchedule = $this->getSoapClient()->__soapCall('AddAcsWeekSchedule', [
                $parameters,
            ], [], [], $this->outputHeaders));

            return $resultAddAcsWeekSchedule;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);

            return false;
        }
    }
    /**
     * Method to call the operation originally named AddAcsCustomDay
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\AddAcsCustomDay $parameters
     * @return \StructType\AddAcsCustomDayResponse|bool
     */
    public function AddAcsCustomDay(\StructType\AddAcsCustomDay $parameters)
    {
        try {
            $this->setResult($resultAddAcsCustomDay = $this->getSoapClient()->__soapCall('AddAcsCustomDay', [
                $parameters,
            ], [], [], $this->outputHeaders));

            return $resultAddAcsCustomDay;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);

            return false;
        }
    }
    /**
     * Method to call the operation originally named AddAcsWorkDayWithTransfer
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\AddAcsWorkDayWithTransfer $parameters
     * @return \StructType\AddAcsWorkDayWithTransferResponse|bool
     */
    public function AddAcsWorkDayWithTransfer(\StructType\AddAcsWorkDayWithTransfer $parameters)
    {
        try {
            $this->setResult($resultAddAcsWorkDayWithTransfer = $this->getSoapClient()->__soapCall('AddAcsWorkDayWithTransfer', [
                $parameters,
            ], [], [], $this->outputHeaders));

            return $resultAddAcsWorkDayWithTransfer;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);

            return false;
        }
    }
    /**
     * Method to call the operation originally named AddEmployeePosition
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\AddEmployeePosition $parameters
     * @return \StructType\AddEmployeePositionResponse|bool
     */
    public function AddEmployeePosition(\StructType\AddEmployeePosition $parameters)
    {
        try {
            $this->setResult($resultAddEmployeePosition = $this->getSoapClient()->__soapCall('AddEmployeePosition', [
                $parameters,
            ], [], [], $this->outputHeaders));

            return $resultAddEmployeePosition;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);

            return false;
        }
    }
    /**
     * Method to call the operation originally named AddEmployeePositionForIncident
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\AddEmployeePositionForIncident $parameters
     * @return \StructType\AddEmployeePositionForIncidentResponse|bool
     */
    public function AddEmployeePositionForIncident(\StructType\AddEmployeePositionForIncident $parameters)
    {
        try {
            $this->setResult($resultAddEmployeePositionForIncident = $this->getSoapClient()->__soapCall('AddEmployeePositionForIncident', [
                $parameters,
            ], [], [], $this->outputHeaders));

            return $resultAddEmployeePositionForIncident;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);

            return false;
        }
    }
    /**
     * Method to call the operation originally named AddIncidentTemplate
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\AddIncidentTemplate $parameters
     * @return \StructType\AddIncidentTemplateResponse|bool
     */
    public function AddIncidentTemplate(\StructType\AddIncidentTemplate $parameters)
    {
        try {
            $this->setResult($resultAddIncidentTemplate = $this->getSoapClient()->__soapCall('AddIncidentTemplate', [
                $parameters,
            ], [], [], $this->outputHeaders));

            return $resultAddIncidentTemplate;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);

            return false;
        }
    }
    /**
     * Method to call the operation originally named AddIncident
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\AddIncident $parameters
     * @return \StructType\AddIncidentResponse|bool
     */
    public function AddIncident(\StructType\AddIncident $parameters)
    {
        try {
            $this->setResult($resultAddIncident = $this->getSoapClient()->__soapCall('AddIncident', [
                $parameters,
            ], [], [], $this->outputHeaders));

            return $resultAddIncident;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);

            return false;
        }
    }
    /**
     * Method to call the operation originally named AddDictionaryElement
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\AddDictionaryElement $parameters
     * @return \StructType\AddDictionaryElementResponse|bool
     */
    public function AddDictionaryElement(\StructType\AddDictionaryElement $parameters)
    {
        try {
            $this->setResult($resultAddDictionaryElement = $this->getSoapClient()->__soapCall('AddDictionaryElement', [
                $parameters,
            ], [], [], $this->outputHeaders));

            return $resultAddDictionaryElement;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);

            return false;
        }
    }
    /**
     * Method to call the operation originally named AddCardType
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\AddCardType $parameters
     * @return \StructType\AddCardTypeResponse|bool
     */
    public function AddCardType(\StructType\AddCardType $parameters)
    {
        try {
            $this->setResult($resultAddCardType = $this->getSoapClient()->__soapCall('AddCardType', [
                $parameters,
            ], [], [], $this->outputHeaders));

            return $resultAddCardType;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);

            return false;
        }
    }
    /**
     * Method to call the operation originally named AddMifareProfile
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\AddMifareProfile $parameters
     * @return \StructType\AddMifareProfileResponse|bool
     */
    public function AddMifareProfile(\StructType\AddMifareProfile $parameters)
    {
        try {
            $this->setResult($resultAddMifareProfile = $this->getSoapClient()->__soapCall('AddMifareProfile', [
                $parameters,
            ], [], [], $this->outputHeaders));

            return $resultAddMifareProfile;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);

            return false;
        }
    }
    /**
     * Method to call the operation originally named AddAcsEmployeeGroup
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\AddAcsEmployeeGroup $parameters
     * @return \StructType\AddAcsEmployeeGroupResponse|bool
     */
    public function AddAcsEmployeeGroup(\StructType\AddAcsEmployeeGroup $parameters)
    {
        try {
            $this->setResult($resultAddAcsEmployeeGroup = $this->getSoapClient()->__soapCall('AddAcsEmployeeGroup', [
                $parameters,
            ], [], [], $this->outputHeaders));

            return $resultAddAcsEmployeeGroup;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);

            return false;
        }
    }
    /**
     * Method to call the operation originally named AddAcsEmployeeGroupWithGroupType
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\AddAcsEmployeeGroupWithGroupType $parameters
     * @return \StructType\AddAcsEmployeeGroupWithGroupTypeResponse|bool
     */
    public function AddAcsEmployeeGroupWithGroupType(\StructType\AddAcsEmployeeGroupWithGroupType $parameters)
    {
        try {
            $this->setResult($resultAddAcsEmployeeGroupWithGroupType = $this->getSoapClient()->__soapCall('AddAcsEmployeeGroupWithGroupType', [
                $parameters,
            ], [], [], $this->outputHeaders));

            return $resultAddAcsEmployeeGroupWithGroupType;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);

            return false;
        }
    }
    /**
     * Method to call the operation originally named AddAcsEmployee
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\AddAcsEmployee $parameters
     * @return \StructType\AddAcsEmployeeResponse|bool
     */
    public function AddAcsEmployee(\StructType\AddAcsEmployee $parameters)
    {
        try {
            $this->setResult($resultAddAcsEmployee = $this->getSoapClient()->__soapCall('AddAcsEmployee', [
                $parameters,
            ], [], [], $this->outputHeaders));

            return $resultAddAcsEmployee;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);

            return false;
        }
    }
    /**
     * Method to call the operation originally named AddEmployeeSchedule
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\AddEmployeeSchedule $parameters
     * @return \StructType\AddEmployeeScheduleResponse|bool
     */
    public function AddEmployeeSchedule(\StructType\AddEmployeeSchedule $parameters)
    {
        try {
            $this->setResult($resultAddEmployeeSchedule = $this->getSoapClient()->__soapCall('AddEmployeeSchedule', [
                $parameters,
            ], [], [], $this->outputHeaders));

            return $resultAddEmployeeSchedule;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);

            return false;
        }
    }
    /**
     * Returns the result
     * @see AbstractSoapClientBase::getResult()
     * @return \StructType\AddAccessLevelsToEmployeeForceResponse|\StructType\AddAccessLevelsToEmployeeGroupResponse|\StructType\AddAccessLevelsToEmployeeGroupWithPeriodResponse|\StructType\AddAccessLevelsToEmployeeResponse|\StructType\AddAccessLevelsToEmployeeWithPeriodResponse|\StructType\AddAccessPoint2CameraChainResponse|\StructType\AddAcsAccessLevelResponse|\StructType\AddAcsAccessPointResponse|\StructType\AddAcsBoxAccessLevelResponse|\StructType\AddAcsCustomDayResponse|\StructType\AddAcsDayScheduleForOwnerResponse|\StructType\AddAcsDayScheduleResponse|\StructType\AddAcsEmployeeGroupResponse|\StructType\AddAcsEmployeeGroupWithGroupTypeResponse|\StructType\AddAcsEmployeeResponse|\StructType\AddAcsMultiDayScheduleResponse|\StructType\AddAcsVehicleResponse|\StructType\AddAcsWeekScheduleResponse|\StructType\AddAcsWorkDayWithTransferResponse|\StructType\AddAlcoGroupResponse|\StructType\AddBranchResponse|\StructType\AddCardTypeResponse|\StructType\AddClaimResponse|\StructType\AddDayTypeResponse|\StructType\AddDictionaryElementResponse|\StructType\AddDriverFigureToMapResponse|\StructType\AddDriverPropsResponse|\StructType\AddDriversToReactionEventResponse|\StructType\AddDriversToReportParametersResponse|\StructType\AddEmailAddressResponse|\StructType\AddEmailDistributionAddressResponse|\StructType\AddEmployee2VehicleChainResponse|\StructType\AddEmployeeGroupsToAlcoGroupResponse|\StructType\AddEmployeeGroupsToReactionActionResponse|\StructType\AddEmployeeGroupsToReactionEventResponse|\StructType\AddEmployeeGroupsToReportParametersResponse|\StructType\AddEmployeePositionForIncidentResponse|\StructType\AddEmployeePositionResponse|\StructType\AddEmployeePositionsToAlcoGroupResponse|\StructType\AddEmployeeScheduleResponse|\StructType\AddEmployeesToReactionActionByGroupsResponse|\StructType\AddEmployeesToReactionActionResponse|\StructType\AddEmployeesToReactionEventByGroupsResponse|\StructType\AddEmployeesToReactionEventResponse|\StructType\AddEmployeesToReportParametersByGroupsResponse|\StructType\AddEmployeesToReportParametersByTabNumbersResponse|\StructType\AddEmployeesToReportParametersResponse|\StructType\AddEmployeesToSecurityGroupResponse|\StructType\AddFavoriteFolderByWorplaceResponse|\StructType\AddFavoriteFolderResponse|\StructType\AddFieldResponse|\StructType\AddFilterTagResponse|\StructType\AddIncidentResponse|\StructType\AddIncidentTemplateResponse|\StructType\AddLocalServerResponse|\StructType\AddLogMessageForAccessPointResponse|\StructType\AddLogMessageSubtypesToReactionEventResponse|\StructType\AddLogMessageSubtypesToReportParametersResponse|\StructType\AddMapResponse|\StructType\AddMifareProfileResponse|\StructType\AddNestedCellResponse|\StructType\AddNetworkResponse|\StructType\AddNetworkToSubnetworkLinkResponse|\StructType\AddPhoneNumberResponse|\StructType\AddPhotoOrderResponse|\StructType\AddReactionActionResponse|\StructType\AddReactionEventResponse|\StructType\AddReactionResponse|\StructType\AddReportResponse|\StructType\AddRootDriverPropsResponse|\StructType\AddRootMapResponse|\StructType\AddServerResponse|\StructType\AddSwitchedOffLogDriversToWorkplaceResponse|\StructType\AddSwitchedOffLogMessageSubtypesToWorkplaceResponse|\StructType\AddTagResponse|\StructType\AddUserGroupResponse|\StructType\AddUserGroupsToUserResponse|\StructType\AddUserPassResponse|\StructType\AddUserResponse|\StructType\AddUsersToUserGroupResponse|\StructType\AddVehiclesToReportParametersResponse|\StructType\AddVehicleTypesToReportParametersResponse|\StructType\AddWorkplaceModuleResponse|\StructType\AddWorkplaceResponse|\StructType\AddWorkScheduleResponse|\StructType\AddWorkSchedulesToEmployeeGroupResponse|\StructType\AddWorkSchedulesToEmployeeResponse|\StructType\AddWorkZoneResponse|\StructType\AddWorkZonesAccessPointResponse|\StructType\AddWorkZonesToEmployeeGroupResponse|\StructType\AddWorkZonesToEmployeeResponse|\StructType\AddWorkZonesToReportParametersResponse|\StructType\Add_ISS_DriverEventPlaybackResponse|\StructType\Add_ISS_DriverResponse|\StructType\Add_ISS_IIDKResponse|\StructType\Add_ISS_RecognitionResponse
     */
    public function getResult()
    {
        return parent::getResult();
    }
}
