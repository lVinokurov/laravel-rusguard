<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for NotificationInfo StructType
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:NotificationInfo
 * @subpackage Structs
 */
class NotificationInfo extends AbstractStructBase
{
    /**
     * The EmployeePassageNotifications
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \ArrayType\ArrayOfEmployeePassageNotification|null
     */
    protected ?\ArrayType\ArrayOfEmployeePassageNotification $EmployeePassageNotifications = null;
    /**
     * Constructor method for NotificationInfo
     * @uses NotificationInfo::setEmployeePassageNotifications()
     * @param \ArrayType\ArrayOfEmployeePassageNotification $employeePassageNotifications
     */
    public function __construct(?\ArrayType\ArrayOfEmployeePassageNotification $employeePassageNotifications = null)
    {
        $this
            ->setEmployeePassageNotifications($employeePassageNotifications);
    }
    /**
     * Get EmployeePassageNotifications value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \ArrayType\ArrayOfEmployeePassageNotification|null
     */
    public function getEmployeePassageNotifications(): ?\ArrayType\ArrayOfEmployeePassageNotification
    {
        return isset($this->EmployeePassageNotifications) ? $this->EmployeePassageNotifications : null;
    }
    /**
     * Set EmployeePassageNotifications value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \ArrayType\ArrayOfEmployeePassageNotification $employeePassageNotifications
     * @return \StructType\NotificationInfo
     */
    public function setEmployeePassageNotifications(?\ArrayType\ArrayOfEmployeePassageNotification $employeePassageNotifications = null): self
    {
        if (is_null($employeePassageNotifications) || (is_array($employeePassageNotifications) && empty($employeePassageNotifications))) {
            unset($this->EmployeePassageNotifications);
        } else {
            $this->EmployeePassageNotifications = $employeePassageNotifications;
        }
        
        return $this;
    }
}
