<?php

declare(strict_types=1);

namespace ServiceType;

use SoapFault;
use lVinokurov\RusGuard\Helpers\Base\AbstractSoapClientBase;

/**
 * This class stands for Set ServiceType
 * @subpackage Services
 */
class Set extends AbstractSoapClientBase
{
    /**
     * Method to call the operation originally named
     * SetVisitorsScoreboardSettingsByWorkplaceModuleId
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\SetVisitorsScoreboardSettingsByWorkplaceModuleId $parameters
     * @return \StructType\SetVisitorsScoreboardSettingsByWorkplaceModuleIdResponse|bool
     */
    public function SetVisitorsScoreboardSettingsByWorkplaceModuleId(\StructType\SetVisitorsScoreboardSettingsByWorkplaceModuleId $parameters)
    {
        try {
            $this->setResult($resultSetVisitorsScoreboardSettingsByWorkplaceModuleId = $this->getSoapClient()->__soapCall('SetVisitorsScoreboardSettingsByWorkplaceModuleId', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultSetVisitorsScoreboardSettingsByWorkplaceModuleId;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named SetEmployeeGroupToFavoriteFolder
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\SetEmployeeGroupToFavoriteFolder $parameters
     * @return \StructType\SetEmployeeGroupToFavoriteFolderResponse|bool
     */
    public function SetEmployeeGroupToFavoriteFolder(\StructType\SetEmployeeGroupToFavoriteFolder $parameters)
    {
        try {
            $this->setResult($resultSetEmployeeGroupToFavoriteFolder = $this->getSoapClient()->__soapCall('SetEmployeeGroupToFavoriteFolder', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultSetEmployeeGroupToFavoriteFolder;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named
     * SetEmployeeGroupToFavoriteFolderByWorkplace
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\SetEmployeeGroupToFavoriteFolderByWorkplace $parameters
     * @return \StructType\SetEmployeeGroupToFavoriteFolderByWorkplaceResponse|bool
     */
    public function SetEmployeeGroupToFavoriteFolderByWorkplace(\StructType\SetEmployeeGroupToFavoriteFolderByWorkplace $parameters)
    {
        try {
            $this->setResult($resultSetEmployeeGroupToFavoriteFolderByWorkplace = $this->getSoapClient()->__soapCall('SetEmployeeGroupToFavoriteFolderByWorkplace', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultSetEmployeeGroupToFavoriteFolderByWorkplace;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named SetUserPassEditor
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\SetUserPassEditor $parameters
     * @return \StructType\SetUserPassEditorResponse|bool
     */
    public function SetUserPassEditor(\StructType\SetUserPassEditor $parameters)
    {
        try {
            $this->setResult($resultSetUserPassEditor = $this->getSoapClient()->__soapCall('SetUserPassEditor', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultSetUserPassEditor;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named
     * SetRemoteTerminalSettingsByWorkplaceModuleId
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\SetRemoteTerminalSettingsByWorkplaceModuleId $parameters
     * @return \StructType\SetRemoteTerminalSettingsByWorkplaceModuleIdResponse|bool
     */
    public function SetRemoteTerminalSettingsByWorkplaceModuleId(\StructType\SetRemoteTerminalSettingsByWorkplaceModuleId $parameters)
    {
        try {
            $this->setResult($resultSetRemoteTerminalSettingsByWorkplaceModuleId = $this->getSoapClient()->__soapCall('SetRemoteTerminalSettingsByWorkplaceModuleId', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultSetRemoteTerminalSettingsByWorkplaceModuleId;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named SetViolationPlan
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\SetViolationPlan $parameters
     * @return \StructType\SetViolationPlanResponse|bool
     */
    public function SetViolationPlan(\StructType\SetViolationPlan $parameters)
    {
        try {
            $this->setResult($resultSetViolationPlan = $this->getSoapClient()->__soapCall('SetViolationPlan', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultSetViolationPlan;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named
     * SetAcsConfiguratorSettingsByWorkplaceModule
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\SetAcsConfiguratorSettingsByWorkplaceModule $parameters
     * @return \StructType\SetAcsConfiguratorSettingsByWorkplaceModuleResponse|bool
     */
    public function SetAcsConfiguratorSettingsByWorkplaceModule(\StructType\SetAcsConfiguratorSettingsByWorkplaceModule $parameters)
    {
        try {
            $this->setResult($resultSetAcsConfiguratorSettingsByWorkplaceModule = $this->getSoapClient()->__soapCall('SetAcsConfiguratorSettingsByWorkplaceModule', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultSetAcsConfiguratorSettingsByWorkplaceModule;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named SetIncidentTypeToReportParameters
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\SetIncidentTypeToReportParameters $parameters
     * @return \StructType\SetIncidentTypeToReportParametersResponse|bool
     */
    public function SetIncidentTypeToReportParameters(\StructType\SetIncidentTypeToReportParameters $parameters)
    {
        try {
            $this->setResult($resultSetIncidentTypeToReportParameters = $this->getSoapClient()->__soapCall('SetIncidentTypeToReportParameters', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultSetIncidentTypeToReportParameters;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named SetBranchToReportParameters
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\SetBranchToReportParameters $parameters
     * @return \StructType\SetBranchToReportParametersResponse|bool
     */
    public function SetBranchToReportParameters(\StructType\SetBranchToReportParameters $parameters)
    {
        try {
            $this->setResult($resultSetBranchToReportParameters = $this->getSoapClient()->__soapCall('SetBranchToReportParameters', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultSetBranchToReportParameters;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named SetUseEmployeeParentWorkSchedule
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\SetUseEmployeeParentWorkSchedule $parameters
     * @return \StructType\SetUseEmployeeParentWorkScheduleResponse|bool
     */
    public function SetUseEmployeeParentWorkSchedule(\StructType\SetUseEmployeeParentWorkSchedule $parameters)
    {
        try {
            $this->setResult($resultSetUseEmployeeParentWorkSchedule = $this->getSoapClient()->__soapCall('SetUseEmployeeParentWorkSchedule', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultSetUseEmployeeParentWorkSchedule;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named
     * SetUseEmployeeGroupParentWorkSchedule
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\SetUseEmployeeGroupParentWorkSchedule $parameters
     * @return \StructType\SetUseEmployeeGroupParentWorkScheduleResponse|bool
     */
    public function SetUseEmployeeGroupParentWorkSchedule(\StructType\SetUseEmployeeGroupParentWorkSchedule $parameters)
    {
        try {
            $this->setResult($resultSetUseEmployeeGroupParentWorkSchedule = $this->getSoapClient()->__soapCall('SetUseEmployeeGroupParentWorkSchedule', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultSetUseEmployeeGroupParentWorkSchedule;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named SetUseEmployeeParentWorkZone
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\SetUseEmployeeParentWorkZone $parameters
     * @return \StructType\SetUseEmployeeParentWorkZoneResponse|bool
     */
    public function SetUseEmployeeParentWorkZone(\StructType\SetUseEmployeeParentWorkZone $parameters)
    {
        try {
            $this->setResult($resultSetUseEmployeeParentWorkZone = $this->getSoapClient()->__soapCall('SetUseEmployeeParentWorkZone', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultSetUseEmployeeParentWorkZone;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named SetUseEmployeeGroupParentWorkZone
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\SetUseEmployeeGroupParentWorkZone $parameters
     * @return \StructType\SetUseEmployeeGroupParentWorkZoneResponse|bool
     */
    public function SetUseEmployeeGroupParentWorkZone(\StructType\SetUseEmployeeGroupParentWorkZone $parameters)
    {
        try {
            $this->setResult($resultSetUseEmployeeGroupParentWorkZone = $this->getSoapClient()->__soapCall('SetUseEmployeeGroupParentWorkZone', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultSetUseEmployeeGroupParentWorkZone;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named
     * SetDevicesAddressBySidViaCanConverter
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\SetDevicesAddressBySidViaCanConverter $parameters
     * @return \StructType\SetDevicesAddressBySidViaCanConverterResponse|bool
     */
    public function SetDevicesAddressBySidViaCanConverter(\StructType\SetDevicesAddressBySidViaCanConverter $parameters)
    {
        try {
            $this->setResult($resultSetDevicesAddressBySidViaCanConverter = $this->getSoapClient()->__soapCall('SetDevicesAddressBySidViaCanConverter', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultSetDevicesAddressBySidViaCanConverter;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named SetNetworkConfigurationToDevice
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\SetNetworkConfigurationToDevice $parameters
     * @return \StructType\SetNetworkConfigurationToDeviceResponse|bool
     */
    public function SetNetworkConfigurationToDevice(\StructType\SetNetworkConfigurationToDevice $parameters)
    {
        try {
            $this->setResult($resultSetNetworkConfigurationToDevice = $this->getSoapClient()->__soapCall('SetNetworkConfigurationToDevice', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultSetNetworkConfigurationToDevice;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named SetScreenCellContentToNone
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\SetScreenCellContentToNone $parameters
     * @return \StructType\SetScreenCellContentToNoneResponse|bool
     */
    public function SetScreenCellContentToNone(\StructType\SetScreenCellContentToNone $parameters)
    {
        try {
            $this->setResult($resultSetScreenCellContentToNone = $this->getSoapClient()->__soapCall('SetScreenCellContentToNone', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultSetScreenCellContentToNone;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named
     * SetScreenCellContentToPhotoIdentification
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\SetScreenCellContentToPhotoIdentification $parameters
     * @return \StructType\SetScreenCellContentToPhotoIdentificationResponse|bool
     */
    public function SetScreenCellContentToPhotoIdentification(\StructType\SetScreenCellContentToPhotoIdentification $parameters)
    {
        try {
            $this->setResult($resultSetScreenCellContentToPhotoIdentification = $this->getSoapClient()->__soapCall('SetScreenCellContentToPhotoIdentification', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultSetScreenCellContentToPhotoIdentification;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named SetScreenCellContentToCamera
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\SetScreenCellContentToCamera $parameters
     * @return \StructType\SetScreenCellContentToCameraResponse|bool
     */
    public function SetScreenCellContentToCamera(\StructType\SetScreenCellContentToCamera $parameters)
    {
        try {
            $this->setResult($resultSetScreenCellContentToCamera = $this->getSoapClient()->__soapCall('SetScreenCellContentToCamera', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultSetScreenCellContentToCamera;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named SetStatusOfAcsKeyAsLost
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\SetStatusOfAcsKeyAsLost $parameters
     * @return \StructType\SetStatusOfAcsKeyAsLostResponse|bool
     */
    public function SetStatusOfAcsKeyAsLost(\StructType\SetStatusOfAcsKeyAsLost $parameters)
    {
        try {
            $this->setResult($resultSetStatusOfAcsKeyAsLost = $this->getSoapClient()->__soapCall('SetStatusOfAcsKeyAsLost', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultSetStatusOfAcsKeyAsLost;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named SetStatusOfAcsKeyAsClear
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\SetStatusOfAcsKeyAsClear $parameters
     * @return \StructType\SetStatusOfAcsKeyAsClearResponse|bool
     */
    public function SetStatusOfAcsKeyAsClear(\StructType\SetStatusOfAcsKeyAsClear $parameters)
    {
        try {
            $this->setResult($resultSetStatusOfAcsKeyAsClear = $this->getSoapClient()->__soapCall('SetStatusOfAcsKeyAsClear', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultSetStatusOfAcsKeyAsClear;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named SetAdditionalDateTimeValue
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\SetAdditionalDateTimeValue $parameters
     * @return \StructType\SetAdditionalDateTimeValueResponse|bool
     */
    public function SetAdditionalDateTimeValue(\StructType\SetAdditionalDateTimeValue $parameters)
    {
        try {
            $this->setResult($resultSetAdditionalDateTimeValue = $this->getSoapClient()->__soapCall('SetAdditionalDateTimeValue', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultSetAdditionalDateTimeValue;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named SetAdditionalIntValue
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\SetAdditionalIntValue $parameters
     * @return \StructType\SetAdditionalIntValueResponse|bool
     */
    public function SetAdditionalIntValue(\StructType\SetAdditionalIntValue $parameters)
    {
        try {
            $this->setResult($resultSetAdditionalIntValue = $this->getSoapClient()->__soapCall('SetAdditionalIntValue', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultSetAdditionalIntValue;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named SetAdditionalDoubleValue
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\SetAdditionalDoubleValue $parameters
     * @return \StructType\SetAdditionalDoubleValueResponse|bool
     */
    public function SetAdditionalDoubleValue(\StructType\SetAdditionalDoubleValue $parameters)
    {
        try {
            $this->setResult($resultSetAdditionalDoubleValue = $this->getSoapClient()->__soapCall('SetAdditionalDoubleValue', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultSetAdditionalDoubleValue;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named SetAdditionalColorValue
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\SetAdditionalColorValue $parameters
     * @return \StructType\SetAdditionalColorValueResponse|bool
     */
    public function SetAdditionalColorValue(\StructType\SetAdditionalColorValue $parameters)
    {
        try {
            $this->setResult($resultSetAdditionalColorValue = $this->getSoapClient()->__soapCall('SetAdditionalColorValue', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultSetAdditionalColorValue;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named SetAdditionalListValue
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\SetAdditionalListValue $parameters
     * @return \StructType\SetAdditionalListValueResponse|bool
     */
    public function SetAdditionalListValue(\StructType\SetAdditionalListValue $parameters)
    {
        try {
            $this->setResult($resultSetAdditionalListValue = $this->getSoapClient()->__soapCall('SetAdditionalListValue', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultSetAdditionalListValue;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named SetAdditionalStringValue
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\SetAdditionalStringValue $parameters
     * @return \StructType\SetAdditionalStringValueResponse|bool
     */
    public function SetAdditionalStringValue(\StructType\SetAdditionalStringValue $parameters)
    {
        try {
            $this->setResult($resultSetAdditionalStringValue = $this->getSoapClient()->__soapCall('SetAdditionalStringValue', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultSetAdditionalStringValue;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named SetAdditionalFieldsVlaues
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\SetAdditionalFieldsVlaues $parameters
     * @return \StructType\SetAdditionalFieldsVlauesResponse|bool
     */
    public function SetAdditionalFieldsVlaues(\StructType\SetAdditionalFieldsVlaues $parameters)
    {
        try {
            $this->setResult($resultSetAdditionalFieldsVlaues = $this->getSoapClient()->__soapCall('SetAdditionalFieldsVlaues', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultSetAdditionalFieldsVlaues;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named SetEmployees2AlcoGroup
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\SetEmployees2AlcoGroup $parameters
     * @return \StructType\SetEmployees2AlcoGroupResponse|bool
     */
    public function SetEmployees2AlcoGroup(\StructType\SetEmployees2AlcoGroup $parameters)
    {
        try {
            $this->setResult($resultSetEmployees2AlcoGroup = $this->getSoapClient()->__soapCall('SetEmployees2AlcoGroup', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultSetEmployees2AlcoGroup;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named SetPositionCodesToAlcoGroup
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\SetPositionCodesToAlcoGroup $parameters
     * @return \StructType\SetPositionCodesToAlcoGroupResponse|bool
     */
    public function SetPositionCodesToAlcoGroup(\StructType\SetPositionCodesToAlcoGroup $parameters)
    {
        try {
            $this->setResult($resultSetPositionCodesToAlcoGroup = $this->getSoapClient()->__soapCall('SetPositionCodesToAlcoGroup', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultSetPositionCodesToAlcoGroup;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named SetBiometricPermissions
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\SetBiometricPermissions $parameters
     * @return \StructType\SetBiometricPermissionsResponse|bool
     */
    public function SetBiometricPermissions(\StructType\SetBiometricPermissions $parameters)
    {
        try {
            $this->setResult($resultSetBiometricPermissions = $this->getSoapClient()->__soapCall('SetBiometricPermissions', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultSetBiometricPermissions;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named SetUseEmployeeParentAccessLevel
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\SetUseEmployeeParentAccessLevel $parameters
     * @return \StructType\SetUseEmployeeParentAccessLevelResponse|bool
     */
    public function SetUseEmployeeParentAccessLevel(\StructType\SetUseEmployeeParentAccessLevel $parameters)
    {
        try {
            $this->setResult($resultSetUseEmployeeParentAccessLevel = $this->getSoapClient()->__soapCall('SetUseEmployeeParentAccessLevel', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultSetUseEmployeeParentAccessLevel;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named
     * SetUseEmployeeGroupParentAccessLevel
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\SetUseEmployeeGroupParentAccessLevel $parameters
     * @return \StructType\SetUseEmployeeGroupParentAccessLevelResponse|bool
     */
    public function SetUseEmployeeGroupParentAccessLevel(\StructType\SetUseEmployeeGroupParentAccessLevel $parameters)
    {
        try {
            $this->setResult($resultSetUseEmployeeGroupParentAccessLevel = $this->getSoapClient()->__soapCall('SetUseEmployeeGroupParentAccessLevel', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultSetUseEmployeeGroupParentAccessLevel;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named SetMapImage
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\SetMapImage $parameters
     * @return \StructType\SetMapImageResponse|bool
     */
    public function SetMapImage(\StructType\SetMapImage $parameters)
    {
        try {
            $this->setResult($resultSetMapImage = $this->getSoapClient()->__soapCall('SetMapImage', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultSetMapImage;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named SetVariable
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\SetVariable $parameters
     * @return \StructType\SetVariableResponse|bool
     */
    public function SetVariable(\StructType\SetVariable $parameters)
    {
        try {
            $this->setResult($resultSetVariable = $this->getSoapClient()->__soapCall('SetVariable', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultSetVariable;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named SetProperty
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\SetProperty $parameters
     * @return \StructType\SetPropertyResponse|bool
     */
    public function SetProperty(\StructType\SetProperty $parameters)
    {
        try {
            $this->setResult($resultSetProperty = $this->getSoapClient()->__soapCall('SetProperty', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultSetProperty;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named SetPropertyValues
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\SetPropertyValues $parameters
     * @return \StructType\SetPropertyValuesResponse|bool
     */
    public function SetPropertyValues(\StructType\SetPropertyValues $parameters)
    {
        try {
            $this->setResult($resultSetPropertyValues = $this->getSoapClient()->__soapCall('SetPropertyValues', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultSetPropertyValues;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named SetOrganization2EmployeeChain
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\SetOrganization2EmployeeChain $parameters
     * @return \StructType\SetOrganization2EmployeeChainResponse|bool
     */
    public function SetOrganization2EmployeeChain(\StructType\SetOrganization2EmployeeChain $parameters)
    {
        try {
            $this->setResult($resultSetOrganization2EmployeeChain = $this->getSoapClient()->__soapCall('SetOrganization2EmployeeChain', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultSetOrganization2EmployeeChain;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named SetOrganization2VehicleChain
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\SetOrganization2VehicleChain $parameters
     * @return \StructType\SetOrganization2VehicleChainResponse|bool
     */
    public function SetOrganization2VehicleChain(\StructType\SetOrganization2VehicleChain $parameters)
    {
        try {
            $this->setResult($resultSetOrganization2VehicleChain = $this->getSoapClient()->__soapCall('SetOrganization2VehicleChain', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultSetOrganization2VehicleChain;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named SetUidsKeys
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\SetUidsKeys $parameters
     * @return \StructType\SetUidsKeysResponse|bool
     */
    public function SetUidsKeys(\StructType\SetUidsKeys $parameters)
    {
        try {
            $this->setResult($resultSetUidsKeys = $this->getSoapClient()->__soapCall('SetUidsKeys', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultSetUidsKeys;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named SetEmployeeFaces
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\SetEmployeeFaces $parameters
     * @return \StructType\SetEmployeeFacesResponse|bool
     */
    public function SetEmployeeFaces(\StructType\SetEmployeeFaces $parameters)
    {
        try {
            $this->setResult($resultSetEmployeeFaces = $this->getSoapClient()->__soapCall('SetEmployeeFaces', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultSetEmployeeFaces;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named SetAcsEmployeePhoto
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\SetAcsEmployeePhoto $parameters
     * @return \StructType\SetAcsEmployeePhotoResponse|bool
     */
    public function SetAcsEmployeePhoto(\StructType\SetAcsEmployeePhoto $parameters)
    {
        try {
            $this->setResult($resultSetAcsEmployeePhoto = $this->getSoapClient()->__soapCall('SetAcsEmployeePhoto', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultSetAcsEmployeePhoto;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named SetAcsEmployeePhotoByType
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\SetAcsEmployeePhotoByType $parameters
     * @return \StructType\SetAcsEmployeePhotoByTypeResponse|bool
     */
    public function SetAcsEmployeePhotoByType(\StructType\SetAcsEmployeePhotoByType $parameters)
    {
        try {
            $this->setResult($resultSetAcsEmployeePhotoByType = $this->getSoapClient()->__soapCall('SetAcsEmployeePhotoByType', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultSetAcsEmployeePhotoByType;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Returns the result
     * @see AbstractSoapClientBase::getResult()
     * @return \StructType\SetAcsConfiguratorSettingsByWorkplaceModuleResponse|\StructType\SetAcsEmployeePhotoByTypeResponse|\StructType\SetAcsEmployeePhotoResponse|\StructType\SetAdditionalColorValueResponse|\StructType\SetAdditionalDateTimeValueResponse|\StructType\SetAdditionalDoubleValueResponse|\StructType\SetAdditionalFieldsVlauesResponse|\StructType\SetAdditionalIntValueResponse|\StructType\SetAdditionalListValueResponse|\StructType\SetAdditionalStringValueResponse|\StructType\SetBiometricPermissionsResponse|\StructType\SetBranchToReportParametersResponse|\StructType\SetDevicesAddressBySidViaCanConverterResponse|\StructType\SetEmployeeFacesResponse|\StructType\SetEmployeeGroupToFavoriteFolderByWorkplaceResponse|\StructType\SetEmployeeGroupToFavoriteFolderResponse|\StructType\SetEmployees2AlcoGroupResponse|\StructType\SetIncidentTypeToReportParametersResponse|\StructType\SetMapImageResponse|\StructType\SetNetworkConfigurationToDeviceResponse|\StructType\SetOrganization2EmployeeChainResponse|\StructType\SetOrganization2VehicleChainResponse|\StructType\SetPositionCodesToAlcoGroupResponse|\StructType\SetPropertyResponse|\StructType\SetPropertyValuesResponse|\StructType\SetRemoteTerminalSettingsByWorkplaceModuleIdResponse|\StructType\SetScreenCellContentToCameraResponse|\StructType\SetScreenCellContentToNoneResponse|\StructType\SetScreenCellContentToPhotoIdentificationResponse|\StructType\SetStatusOfAcsKeyAsClearResponse|\StructType\SetStatusOfAcsKeyAsLostResponse|\StructType\SetUidsKeysResponse|\StructType\SetUseEmployeeGroupParentAccessLevelResponse|\StructType\SetUseEmployeeGroupParentWorkScheduleResponse|\StructType\SetUseEmployeeGroupParentWorkZoneResponse|\StructType\SetUseEmployeeParentAccessLevelResponse|\StructType\SetUseEmployeeParentWorkScheduleResponse|\StructType\SetUseEmployeeParentWorkZoneResponse|\StructType\SetUserPassEditorResponse|\StructType\SetVariableResponse|\StructType\SetViolationPlanResponse|\StructType\SetVisitorsScoreboardSettingsByWorkplaceModuleIdResponse
     */
    public function getResult()
    {
        return parent::getResult();
    }
}
