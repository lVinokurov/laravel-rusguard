<?php

declare(strict_types=1);

namespace ServiceType;

use SoapFault;
use lVinokurov\RusGuard\Helpers\Base\AbstractSoapClientBase;

/**
 * This class stands for Delete ServiceType
 * @subpackage Services
 */
class Delete extends AbstractSoapClientBase
{
    /**
     * Method to call the operation originally named DeleteWorkTimetable
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\DeleteWorkTimetable $parameters
     * @return \StructType\DeleteWorkTimetableResponse|bool
     */
    public function DeleteWorkTimetable(\StructType\DeleteWorkTimetable $parameters)
    {
        try {
            $this->setResult($resultDeleteWorkTimetable = $this->getSoapClient()->__soapCall('DeleteWorkTimetable', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultDeleteWorkTimetable;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named DeleteEmployeeTimetable
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\DeleteEmployeeTimetable $parameters
     * @return \StructType\DeleteEmployeeTimetableResponse|bool
     */
    public function DeleteEmployeeTimetable(\StructType\DeleteEmployeeTimetable $parameters)
    {
        try {
            $this->setResult($resultDeleteEmployeeTimetable = $this->getSoapClient()->__soapCall('DeleteEmployeeTimetable', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultDeleteEmployeeTimetable;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named DeleteFields
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\DeleteFields $parameters
     * @return \StructType\DeleteFieldsResponse|bool
     */
    public function DeleteFields(\StructType\DeleteFields $parameters)
    {
        try {
            $this->setResult($resultDeleteFields = $this->getSoapClient()->__soapCall('DeleteFields', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultDeleteFields;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named DeletePhotoFields
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\DeletePhotoFields $parameters
     * @return \StructType\DeletePhotoFieldsResponse|bool
     */
    public function DeletePhotoFields(\StructType\DeletePhotoFields $parameters)
    {
        try {
            $this->setResult($resultDeletePhotoFields = $this->getSoapClient()->__soapCall('DeletePhotoFields', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultDeletePhotoFields;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Returns the result
     * @see AbstractSoapClientBase::getResult()
     * @return \StructType\DeleteEmployeeTimetableResponse|\StructType\DeleteFieldsResponse|\StructType\DeletePhotoFieldsResponse|\StructType\DeleteWorkTimetableResponse
     */
    public function getResult()
    {
        return parent::getResult();
    }
}
