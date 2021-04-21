<?php

declare(strict_types=1);

namespace ServiceType;

use SoapFault;
use WsdlToPhp\PackageBase\AbstractSoapClientBase;

/**
 * This class stands for Save ServiceType
 * @subpackage Services
 */
class Save extends AbstractSoapClientBase
{
    /**
     * Method to call the operation originally named SaveBranch
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\SaveBranch $parameters
     * @return \StructType\SaveBranchResponse|bool
     */
    public function SaveBranch(\StructType\SaveBranch $parameters)
    {
        try {
            $this->setResult($resultSaveBranch = $this->getSoapClient()->__soapCall('SaveBranch', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultSaveBranch;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named SavePhoneNumber
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\SavePhoneNumber $parameters
     * @return \StructType\SavePhoneNumberResponse|bool
     */
    public function SavePhoneNumber(\StructType\SavePhoneNumber $parameters)
    {
        try {
            $this->setResult($resultSavePhoneNumber = $this->getSoapClient()->__soapCall('SavePhoneNumber', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultSavePhoneNumber;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named SaveEmailDistributionAddress
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\SaveEmailDistributionAddress $parameters
     * @return \StructType\SaveEmailDistributionAddressResponse|bool
     */
    public function SaveEmailDistributionAddress(\StructType\SaveEmailDistributionAddress $parameters)
    {
        try {
            $this->setResult($resultSaveEmailDistributionAddress = $this->getSoapClient()->__soapCall('SaveEmailDistributionAddress', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultSaveEmailDistributionAddress;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named SaveFavoriteFolder
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\SaveFavoriteFolder $parameters
     * @return \StructType\SaveFavoriteFolderResponse|bool
     */
    public function SaveFavoriteFolder(\StructType\SaveFavoriteFolder $parameters)
    {
        try {
            $this->setResult($resultSaveFavoriteFolder = $this->getSoapClient()->__soapCall('SaveFavoriteFolder', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultSaveFavoriteFolder;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named SaveTag
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\SaveTag $parameters
     * @return \StructType\SaveTagResponse|bool
     */
    public function SaveTag(\StructType\SaveTag $parameters)
    {
        try {
            $this->setResult($resultSaveTag = $this->getSoapClient()->__soapCall('SaveTag', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultSaveTag;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named SaveFilterTag
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\SaveFilterTag $parameters
     * @return \StructType\SaveFilterTagResponse|bool
     */
    public function SaveFilterTag(\StructType\SaveFilterTag $parameters)
    {
        try {
            $this->setResult($resultSaveFilterTag = $this->getSoapClient()->__soapCall('SaveFilterTag', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultSaveFilterTag;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named SaveUserPass
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\SaveUserPass $parameters
     * @return \StructType\SaveUserPassResponse|bool
     */
    public function SaveUserPass(\StructType\SaveUserPass $parameters)
    {
        try {
            $this->setResult($resultSaveUserPass = $this->getSoapClient()->__soapCall('SaveUserPass', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultSaveUserPass;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named SaveUserPassFull
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\SaveUserPassFull $parameters
     * @return \StructType\SaveUserPassFullResponse|bool
     */
    public function SaveUserPassFull(\StructType\SaveUserPassFull $parameters)
    {
        try {
            $this->setResult($resultSaveUserPassFull = $this->getSoapClient()->__soapCall('SaveUserPassFull', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultSaveUserPassFull;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named SaveReaction
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\SaveReaction $parameters
     * @return \StructType\SaveReactionResponse|bool
     */
    public function SaveReaction(\StructType\SaveReaction $parameters)
    {
        try {
            $this->setResult($resultSaveReaction = $this->getSoapClient()->__soapCall('SaveReaction', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultSaveReaction;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named SaveReactionActionCommonData
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\SaveReactionActionCommonData $parameters
     * @return \StructType\SaveReactionActionCommonDataResponse|bool
     */
    public function SaveReactionActionCommonData(\StructType\SaveReactionActionCommonData $parameters)
    {
        try {
            $this->setResult($resultSaveReactionActionCommonData = $this->getSoapClient()->__soapCall('SaveReactionActionCommonData', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultSaveReactionActionCommonData;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named SaveReactionSendSMSAction
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\SaveReactionSendSMSAction $parameters
     * @return \StructType\SaveReactionSendSMSActionResponse|bool
     */
    public function SaveReactionSendSMSAction(\StructType\SaveReactionSendSMSAction $parameters)
    {
        try {
            $this->setResult($resultSaveReactionSendSMSAction = $this->getSoapClient()->__soapCall('SaveReactionSendSMSAction', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultSaveReactionSendSMSAction;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named SaveReactionSendEmailAction
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\SaveReactionSendEmailAction $parameters
     * @return \StructType\SaveReactionSendEmailActionResponse|bool
     */
    public function SaveReactionSendEmailAction(\StructType\SaveReactionSendEmailAction $parameters)
    {
        try {
            $this->setResult($resultSaveReactionSendEmailAction = $this->getSoapClient()->__soapCall('SaveReactionSendEmailAction', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultSaveReactionSendEmailAction;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named SaveReactionExecuteProgramAction
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\SaveReactionExecuteProgramAction $parameters
     * @return \StructType\SaveReactionExecuteProgramActionResponse|bool
     */
    public function SaveReactionExecuteProgramAction(\StructType\SaveReactionExecuteProgramAction $parameters)
    {
        try {
            $this->setResult($resultSaveReactionExecuteProgramAction = $this->getSoapClient()->__soapCall('SaveReactionExecuteProgramAction', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultSaveReactionExecuteProgramAction;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named SaveReactionRecordVideoAction
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\SaveReactionRecordVideoAction $parameters
     * @return \StructType\SaveReactionRecordVideoActionResponse|bool
     */
    public function SaveReactionRecordVideoAction(\StructType\SaveReactionRecordVideoAction $parameters)
    {
        try {
            $this->setResult($resultSaveReactionRecordVideoAction = $this->getSoapClient()->__soapCall('SaveReactionRecordVideoAction', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultSaveReactionRecordVideoAction;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named SaveReport
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\SaveReport $parameters
     * @return \StructType\SaveReportResponse|bool
     */
    public function SaveReport(\StructType\SaveReport $parameters)
    {
        try {
            $this->setResult($resultSaveReport = $this->getSoapClient()->__soapCall('SaveReport', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultSaveReport;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named SaveReactionEventCommonData
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\SaveReactionEventCommonData $parameters
     * @return \StructType\SaveReactionEventCommonDataResponse|bool
     */
    public function SaveReactionEventCommonData(\StructType\SaveReactionEventCommonData $parameters)
    {
        try {
            $this->setResult($resultSaveReactionEventCommonData = $this->getSoapClient()->__soapCall('SaveReactionEventCommonData', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultSaveReactionEventCommonData;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named SaveReactionEventsFromDevices
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\SaveReactionEventsFromDevices $parameters
     * @return \StructType\SaveReactionEventsFromDevicesResponse|bool
     */
    public function SaveReactionEventsFromDevices(\StructType\SaveReactionEventsFromDevices $parameters)
    {
        try {
            $this->setResult($resultSaveReactionEventsFromDevices = $this->getSoapClient()->__soapCall('SaveReactionEventsFromDevices', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultSaveReactionEventsFromDevices;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named SaveWorkTimtable
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\SaveWorkTimtable $parameters
     * @return \StructType\SaveWorkTimtableResponse|bool
     */
    public function SaveWorkTimtable(\StructType\SaveWorkTimtable $parameters)
    {
        try {
            $this->setResult($resultSaveWorkTimtable = $this->getSoapClient()->__soapCall('SaveWorkTimtable', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultSaveWorkTimtable;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named SaveEmployeeTimtable
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\SaveEmployeeTimtable $parameters
     * @return \StructType\SaveEmployeeTimtableResponse|bool
     */
    public function SaveEmployeeTimtable(\StructType\SaveEmployeeTimtable $parameters)
    {
        try {
            $this->setResult($resultSaveEmployeeTimtable = $this->getSoapClient()->__soapCall('SaveEmployeeTimtable', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultSaveEmployeeTimtable;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named SaveDayType
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\SaveDayType $parameters
     * @return \StructType\SaveDayTypeResponse|bool
     */
    public function SaveDayType(\StructType\SaveDayType $parameters)
    {
        try {
            $this->setResult($resultSaveDayType = $this->getSoapClient()->__soapCall('SaveDayType', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultSaveDayType;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named SaveWorkSchedule
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\SaveWorkSchedule $parameters
     * @return \StructType\SaveWorkScheduleResponse|bool
     */
    public function SaveWorkSchedule(\StructType\SaveWorkSchedule $parameters)
    {
        try {
            $this->setResult($resultSaveWorkSchedule = $this->getSoapClient()->__soapCall('SaveWorkSchedule', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultSaveWorkSchedule;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named SaveWorkZone
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\SaveWorkZone $parameters
     * @return \StructType\SaveWorkZoneResponse|bool
     */
    public function SaveWorkZone(\StructType\SaveWorkZone $parameters)
    {
        try {
            $this->setResult($resultSaveWorkZone = $this->getSoapClient()->__soapCall('SaveWorkZone', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultSaveWorkZone;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named SaveWorkZonesAccessPoint
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\SaveWorkZonesAccessPoint $parameters
     * @return \StructType\SaveWorkZonesAccessPointResponse|bool
     */
    public function SaveWorkZonesAccessPoint(\StructType\SaveWorkZonesAccessPoint $parameters)
    {
        try {
            $this->setResult($resultSaveWorkZonesAccessPoint = $this->getSoapClient()->__soapCall('SaveWorkZonesAccessPoint', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultSaveWorkZonesAccessPoint;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named Save_ISS_IIDK
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\Save_ISS_IIDK $parameters
     * @return \StructType\Save_ISS_IIDKResponse|bool
     */
    public function Save_ISS_IIDK(\StructType\Save_ISS_IIDK $parameters)
    {
        try {
            $this->setResult($resultSave_ISS_IIDK = $this->getSoapClient()->__soapCall('Save_ISS_IIDK', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultSave_ISS_IIDK;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named Save_ISS_Recognition
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\Save_ISS_Recognition $parameters
     * @return \StructType\Save_ISS_RecognitionResponse|bool
     */
    public function Save_ISS_Recognition(\StructType\Save_ISS_Recognition $parameters)
    {
        try {
            $this->setResult($resultSave_ISS_Recognition = $this->getSoapClient()->__soapCall('Save_ISS_Recognition', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultSave_ISS_Recognition;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named Save_ISS_Driver
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\Save_ISS_Driver $parameters
     * @return \StructType\Save_ISS_DriverResponse|bool
     */
    public function Save_ISS_Driver(\StructType\Save_ISS_Driver $parameters)
    {
        try {
            $this->setResult($resultSave_ISS_Driver = $this->getSoapClient()->__soapCall('Save_ISS_Driver', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultSave_ISS_Driver;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named SaveCell
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\SaveCell $parameters
     * @return \StructType\SaveCellResponse|bool
     */
    public function SaveCell(\StructType\SaveCell $parameters)
    {
        try {
            $this->setResult($resultSaveCell = $this->getSoapClient()->__soapCall('SaveCell', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultSaveCell;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named SaveScreen
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\SaveScreen $parameters
     * @return \StructType\SaveScreenResponse|bool
     */
    public function SaveScreen(\StructType\SaveScreen $parameters)
    {
        try {
            $this->setResult($resultSaveScreen = $this->getSoapClient()->__soapCall('SaveScreen', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultSaveScreen;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named SaveEmailAddress
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\SaveEmailAddress $parameters
     * @return \StructType\SaveEmailAddressResponse|bool
     */
    public function SaveEmailAddress(\StructType\SaveEmailAddress $parameters)
    {
        try {
            $this->setResult($resultSaveEmailAddress = $this->getSoapClient()->__soapCall('SaveEmailAddress', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultSaveEmailAddress;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named SaveAcsVehicle
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\SaveAcsVehicle $parameters
     * @return \StructType\SaveAcsVehicleResponse|bool
     */
    public function SaveAcsVehicle(\StructType\SaveAcsVehicle $parameters)
    {
        try {
            $this->setResult($resultSaveAcsVehicle = $this->getSoapClient()->__soapCall('SaveAcsVehicle', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultSaveAcsVehicle;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named SaveField
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\SaveField $parameters
     * @return \StructType\SaveFieldResponse|bool
     */
    public function SaveField(\StructType\SaveField $parameters)
    {
        try {
            $this->setResult($resultSaveField = $this->getSoapClient()->__soapCall('SaveField', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultSaveField;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named SavePhotoOrder
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\SavePhotoOrder $parameters
     * @return \StructType\SavePhotoOrderResponse|bool
     */
    public function SavePhotoOrder(\StructType\SavePhotoOrder $parameters)
    {
        try {
            $this->setResult($resultSavePhotoOrder = $this->getSoapClient()->__soapCall('SavePhotoOrder', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultSavePhotoOrder;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named SaveAcsBoxAccessElements
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\SaveAcsBoxAccessElements $parameters
     * @return \StructType\SaveAcsBoxAccessElementsResponse|bool
     */
    public function SaveAcsBoxAccessElements(\StructType\SaveAcsBoxAccessElements $parameters)
    {
        try {
            $this->setResult($resultSaveAcsBoxAccessElements = $this->getSoapClient()->__soapCall('SaveAcsBoxAccessElements', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultSaveAcsBoxAccessElements;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named SaveAcsBoxAccessLevel
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\SaveAcsBoxAccessLevel $parameters
     * @return \StructType\SaveAcsBoxAccessLevelResponse|bool
     */
    public function SaveAcsBoxAccessLevel(\StructType\SaveAcsBoxAccessLevel $parameters)
    {
        try {
            $this->setResult($resultSaveAcsBoxAccessLevel = $this->getSoapClient()->__soapCall('SaveAcsBoxAccessLevel', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultSaveAcsBoxAccessLevel;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named SaveAlcoGroup
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\SaveAlcoGroup $parameters
     * @return \StructType\SaveAlcoGroupResponse|bool
     */
    public function SaveAlcoGroup(\StructType\SaveAlcoGroup $parameters)
    {
        try {
            $this->setResult($resultSaveAlcoGroup = $this->getSoapClient()->__soapCall('SaveAlcoGroup', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultSaveAlcoGroup;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named SaveAcsAccessLevel
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\SaveAcsAccessLevel $parameters
     * @return \StructType\SaveAcsAccessLevelResponse|bool
     */
    public function SaveAcsAccessLevel(\StructType\SaveAcsAccessLevel $parameters)
    {
        try {
            $this->setResult($resultSaveAcsAccessLevel = $this->getSoapClient()->__soapCall('SaveAcsAccessLevel', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultSaveAcsAccessLevel;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named SaveAcsAccessPoint
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\SaveAcsAccessPoint $parameters
     * @return \StructType\SaveAcsAccessPointResponse|bool
     */
    public function SaveAcsAccessPoint(\StructType\SaveAcsAccessPoint $parameters)
    {
        try {
            $this->setResult($resultSaveAcsAccessPoint = $this->getSoapClient()->__soapCall('SaveAcsAccessPoint', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultSaveAcsAccessPoint;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named SaveWorkplace
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\SaveWorkplace $parameters
     * @return \StructType\SaveWorkplaceResponse|bool
     */
    public function SaveWorkplace(\StructType\SaveWorkplace $parameters)
    {
        try {
            $this->setResult($resultSaveWorkplace = $this->getSoapClient()->__soapCall('SaveWorkplace', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultSaveWorkplace;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named SaveWorkplaceModule
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\SaveWorkplaceModule $parameters
     * @return \StructType\SaveWorkplaceModuleResponse|bool
     */
    public function SaveWorkplaceModule(\StructType\SaveWorkplaceModule $parameters)
    {
        try {
            $this->setResult($resultSaveWorkplaceModule = $this->getSoapClient()->__soapCall('SaveWorkplaceModule', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultSaveWorkplaceModule;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named SaveMap
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\SaveMap $parameters
     * @return \StructType\SaveMapResponse|bool
     */
    public function SaveMap(\StructType\SaveMap $parameters)
    {
        try {
            $this->setResult($resultSaveMap = $this->getSoapClient()->__soapCall('SaveMap', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultSaveMap;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named SaveUser
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\SaveUser $parameters
     * @return \StructType\SaveUserResponse|bool
     */
    public function SaveUser(\StructType\SaveUser $parameters)
    {
        try {
            $this->setResult($resultSaveUser = $this->getSoapClient()->__soapCall('SaveUser', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultSaveUser;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named SaveUserGroup
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\SaveUserGroup $parameters
     * @return \StructType\SaveUserGroupResponse|bool
     */
    public function SaveUserGroup(\StructType\SaveUserGroup $parameters)
    {
        try {
            $this->setResult($resultSaveUserGroup = $this->getSoapClient()->__soapCall('SaveUserGroup', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultSaveUserGroup;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named SaveAcsDaySchedule
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\SaveAcsDaySchedule $parameters
     * @return \StructType\SaveAcsDayScheduleResponse|bool
     */
    public function SaveAcsDaySchedule(\StructType\SaveAcsDaySchedule $parameters)
    {
        try {
            $this->setResult($resultSaveAcsDaySchedule = $this->getSoapClient()->__soapCall('SaveAcsDaySchedule', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultSaveAcsDaySchedule;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named SaveAcsDayScheduleForOwner
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\SaveAcsDayScheduleForOwner $parameters
     * @return \StructType\SaveAcsDayScheduleForOwnerResponse|bool
     */
    public function SaveAcsDayScheduleForOwner(\StructType\SaveAcsDayScheduleForOwner $parameters)
    {
        try {
            $this->setResult($resultSaveAcsDayScheduleForOwner = $this->getSoapClient()->__soapCall('SaveAcsDayScheduleForOwner', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultSaveAcsDayScheduleForOwner;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named SaveAcsMultiDaySchedule
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\SaveAcsMultiDaySchedule $parameters
     * @return \StructType\SaveAcsMultiDayScheduleResponse|bool
     */
    public function SaveAcsMultiDaySchedule(\StructType\SaveAcsMultiDaySchedule $parameters)
    {
        try {
            $this->setResult($resultSaveAcsMultiDaySchedule = $this->getSoapClient()->__soapCall('SaveAcsMultiDaySchedule', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultSaveAcsMultiDaySchedule;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named SaveAcsWeekSchedule
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\SaveAcsWeekSchedule $parameters
     * @return \StructType\SaveAcsWeekScheduleResponse|bool
     */
    public function SaveAcsWeekSchedule(\StructType\SaveAcsWeekSchedule $parameters)
    {
        try {
            $this->setResult($resultSaveAcsWeekSchedule = $this->getSoapClient()->__soapCall('SaveAcsWeekSchedule', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultSaveAcsWeekSchedule;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named SaveAcsCustomDay
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\SaveAcsCustomDay $parameters
     * @return \StructType\SaveAcsCustomDayResponse|bool
     */
    public function SaveAcsCustomDay(\StructType\SaveAcsCustomDay $parameters)
    {
        try {
            $this->setResult($resultSaveAcsCustomDay = $this->getSoapClient()->__soapCall('SaveAcsCustomDay', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultSaveAcsCustomDay;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named SaveAcsWorkDayWithTransfer
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\SaveAcsWorkDayWithTransfer $parameters
     * @return \StructType\SaveAcsWorkDayWithTransferResponse|bool
     */
    public function SaveAcsWorkDayWithTransfer(\StructType\SaveAcsWorkDayWithTransfer $parameters)
    {
        try {
            $this->setResult($resultSaveAcsWorkDayWithTransfer = $this->getSoapClient()->__soapCall('SaveAcsWorkDayWithTransfer', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultSaveAcsWorkDayWithTransfer;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named SaveEmployeePosition
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\SaveEmployeePosition $parameters
     * @return \StructType\SaveEmployeePositionResponse|bool
     */
    public function SaveEmployeePosition(\StructType\SaveEmployeePosition $parameters)
    {
        try {
            $this->setResult($resultSaveEmployeePosition = $this->getSoapClient()->__soapCall('SaveEmployeePosition', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultSaveEmployeePosition;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named SaveEmployeePositionForIncident
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\SaveEmployeePositionForIncident $parameters
     * @return \StructType\SaveEmployeePositionForIncidentResponse|bool
     */
    public function SaveEmployeePositionForIncident(\StructType\SaveEmployeePositionForIncident $parameters)
    {
        try {
            $this->setResult($resultSaveEmployeePositionForIncident = $this->getSoapClient()->__soapCall('SaveEmployeePositionForIncident', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultSaveEmployeePositionForIncident;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named SaveIncidentTemplate
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\SaveIncidentTemplate $parameters
     * @return \StructType\SaveIncidentTemplateResponse|bool
     */
    public function SaveIncidentTemplate(\StructType\SaveIncidentTemplate $parameters)
    {
        try {
            $this->setResult($resultSaveIncidentTemplate = $this->getSoapClient()->__soapCall('SaveIncidentTemplate', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultSaveIncidentTemplate;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named SaveIncident
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\SaveIncident $parameters
     * @return \StructType\SaveIncidentResponse|bool
     */
    public function SaveIncident(\StructType\SaveIncident $parameters)
    {
        try {
            $this->setResult($resultSaveIncident = $this->getSoapClient()->__soapCall('SaveIncident', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultSaveIncident;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named SaveDictionaryElement
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\SaveDictionaryElement $parameters
     * @return \StructType\SaveDictionaryElementResponse|bool
     */
    public function SaveDictionaryElement(\StructType\SaveDictionaryElement $parameters)
    {
        try {
            $this->setResult($resultSaveDictionaryElement = $this->getSoapClient()->__soapCall('SaveDictionaryElement', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultSaveDictionaryElement;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named SaveCardType
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\SaveCardType $parameters
     * @return \StructType\SaveCardTypeResponse|bool
     */
    public function SaveCardType(\StructType\SaveCardType $parameters)
    {
        try {
            $this->setResult($resultSaveCardType = $this->getSoapClient()->__soapCall('SaveCardType', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultSaveCardType;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named SaveMifareProfile
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\SaveMifareProfile $parameters
     * @return \StructType\SaveMifareProfileResponse|bool
     */
    public function SaveMifareProfile(\StructType\SaveMifareProfile $parameters)
    {
        try {
            $this->setResult($resultSaveMifareProfile = $this->getSoapClient()->__soapCall('SaveMifareProfile', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultSaveMifareProfile;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named SaveAcsEmployeeGroup
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\SaveAcsEmployeeGroup $parameters
     * @return \StructType\SaveAcsEmployeeGroupResponse|bool
     */
    public function SaveAcsEmployeeGroup(\StructType\SaveAcsEmployeeGroup $parameters)
    {
        try {
            $this->setResult($resultSaveAcsEmployeeGroup = $this->getSoapClient()->__soapCall('SaveAcsEmployeeGroup', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultSaveAcsEmployeeGroup;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named SaveAcsEmployeeGroupWithGroupType
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\SaveAcsEmployeeGroupWithGroupType $parameters
     * @return \StructType\SaveAcsEmployeeGroupWithGroupTypeResponse|bool
     */
    public function SaveAcsEmployeeGroupWithGroupType(\StructType\SaveAcsEmployeeGroupWithGroupType $parameters)
    {
        try {
            $this->setResult($resultSaveAcsEmployeeGroupWithGroupType = $this->getSoapClient()->__soapCall('SaveAcsEmployeeGroupWithGroupType', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultSaveAcsEmployeeGroupWithGroupType;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named SaveAcsEmployee
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\SaveAcsEmployee $parameters
     * @return \StructType\SaveAcsEmployeeResponse|bool
     */
    public function SaveAcsEmployee(\StructType\SaveAcsEmployee $parameters)
    {
        try {
            $this->setResult($resultSaveAcsEmployee = $this->getSoapClient()->__soapCall('SaveAcsEmployee', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultSaveAcsEmployee;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named SaveAcsEmployeesDocuments
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\SaveAcsEmployeesDocuments $parameters
     * @return \StructType\SaveAcsEmployeesDocumentsResponse|bool
     */
    public function SaveAcsEmployeesDocuments(\StructType\SaveAcsEmployeesDocuments $parameters)
    {
        try {
            $this->setResult($resultSaveAcsEmployeesDocuments = $this->getSoapClient()->__soapCall('SaveAcsEmployeesDocuments', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultSaveAcsEmployeesDocuments;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named SaveEmployeeSchedule
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\SaveEmployeeSchedule $parameters
     * @return \StructType\SaveEmployeeScheduleResponse|bool
     */
    public function SaveEmployeeSchedule(\StructType\SaveEmployeeSchedule $parameters)
    {
        try {
            $this->setResult($resultSaveEmployeeSchedule = $this->getSoapClient()->__soapCall('SaveEmployeeSchedule', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultSaveEmployeeSchedule;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named SaveSystematicViolation
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\SaveSystematicViolation $parameters
     * @return \StructType\SaveSystematicViolationResponse|bool
     */
    public function SaveSystematicViolation(\StructType\SaveSystematicViolation $parameters)
    {
        try {
            $this->setResult($resultSaveSystematicViolation = $this->getSoapClient()->__soapCall('SaveSystematicViolation', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultSaveSystematicViolation;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named SaveSystematicViolationByLogin
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\SaveSystematicViolationByLogin $parameters
     * @return \StructType\SaveSystematicViolationByLoginResponse|bool
     */
    public function SaveSystematicViolationByLogin(\StructType\SaveSystematicViolationByLogin $parameters)
    {
        try {
            $this->setResult($resultSaveSystematicViolationByLogin = $this->getSoapClient()->__soapCall('SaveSystematicViolationByLogin', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultSaveSystematicViolationByLogin;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Returns the result
     * @see AbstractSoapClientBase::getResult()
     * @return \StructType\SaveAcsAccessLevelResponse|\StructType\SaveAcsAccessPointResponse|\StructType\SaveAcsBoxAccessElementsResponse|\StructType\SaveAcsBoxAccessLevelResponse|\StructType\SaveAcsCustomDayResponse|\StructType\SaveAcsDayScheduleForOwnerResponse|\StructType\SaveAcsDayScheduleResponse|\StructType\SaveAcsEmployeeGroupResponse|\StructType\SaveAcsEmployeeGroupWithGroupTypeResponse|\StructType\SaveAcsEmployeeResponse|\StructType\SaveAcsEmployeesDocumentsResponse|\StructType\SaveAcsMultiDayScheduleResponse|\StructType\SaveAcsVehicleResponse|\StructType\SaveAcsWeekScheduleResponse|\StructType\SaveAcsWorkDayWithTransferResponse|\StructType\SaveAlcoGroupResponse|\StructType\SaveBranchResponse|\StructType\SaveCardTypeResponse|\StructType\SaveCellResponse|\StructType\SaveDayTypeResponse|\StructType\SaveDictionaryElementResponse|\StructType\SaveEmailAddressResponse|\StructType\SaveEmailDistributionAddressResponse|\StructType\SaveEmployeePositionForIncidentResponse|\StructType\SaveEmployeePositionResponse|\StructType\SaveEmployeeScheduleResponse|\StructType\SaveEmployeeTimtableResponse|\StructType\SaveFavoriteFolderResponse|\StructType\SaveFieldResponse|\StructType\SaveFilterTagResponse|\StructType\SaveIncidentResponse|\StructType\SaveIncidentTemplateResponse|\StructType\SaveMapResponse|\StructType\SaveMifareProfileResponse|\StructType\SavePhoneNumberResponse|\StructType\SavePhotoOrderResponse|\StructType\SaveReactionActionCommonDataResponse|\StructType\SaveReactionEventCommonDataResponse|\StructType\SaveReactionEventsFromDevicesResponse|\StructType\SaveReactionExecuteProgramActionResponse|\StructType\SaveReactionRecordVideoActionResponse|\StructType\SaveReactionResponse|\StructType\SaveReactionSendEmailActionResponse|\StructType\SaveReactionSendSMSActionResponse|\StructType\SaveReportResponse|\StructType\SaveScreenResponse|\StructType\SaveSystematicViolationByLoginResponse|\StructType\SaveSystematicViolationResponse|\StructType\SaveTagResponse|\StructType\SaveUserGroupResponse|\StructType\SaveUserPassFullResponse|\StructType\SaveUserPassResponse|\StructType\SaveUserResponse|\StructType\SaveWorkplaceModuleResponse|\StructType\SaveWorkplaceResponse|\StructType\SaveWorkScheduleResponse|\StructType\SaveWorkTimtableResponse|\StructType\SaveWorkZoneResponse|\StructType\SaveWorkZonesAccessPointResponse|\StructType\Save_ISS_DriverResponse|\StructType\Save_ISS_IIDKResponse|\StructType\Save_ISS_RecognitionResponse
     */
    public function getResult()
    {
        return parent::getResult();
    }
}
