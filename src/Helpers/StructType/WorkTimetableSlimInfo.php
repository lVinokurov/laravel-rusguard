<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for WorkTimetableSlimInfo StructType
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:WorkTimetableSlimInfo
 * @subpackage Structs
 */
class WorkTimetableSlimInfo extends AbstractStructBase
{
    /**
     * The Absence
     * Meta information extracted from the WSDL
     * - base: xs:duration
     * - maxInclusive: P10675199DT2H48M5.4775807S
     * - minInclusive: -P10675199DT2H48M5.4775808S
     * - minOccurs: 0
     * - nillable: true
     * - pattern: \-?P(\d*D)?(T(\d*H)?(\d*M)?(\d*(\.\d*)?S)?)?
     * - type: tns:duration
     * @var string|null
     */
    protected ?string $Absence = null;
    /**
     * The BreakBeginTime
     * Meta information extracted from the WSDL
     * - base: xs:duration
     * - maxInclusive: P10675199DT2H48M5.4775807S
     * - minInclusive: -P10675199DT2H48M5.4775808S
     * - minOccurs: 0
     * - nillable: true
     * - pattern: \-?P(\d*D)?(T(\d*H)?(\d*M)?(\d*(\.\d*)?S)?)?
     * - type: tns:duration
     * @var string|null
     */
    protected ?string $BreakBeginTime = null;
    /**
     * The BreakEndTime
     * Meta information extracted from the WSDL
     * - base: xs:duration
     * - maxInclusive: P10675199DT2H48M5.4775807S
     * - minInclusive: -P10675199DT2H48M5.4775808S
     * - minOccurs: 0
     * - nillable: true
     * - pattern: \-?P(\d*D)?(T(\d*H)?(\d*M)?(\d*(\.\d*)?S)?)?
     * - type: tns:duration
     * @var string|null
     */
    protected ?string $BreakEndTime = null;
    /**
     * The Comment
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $Comment = null;
    /**
     * The Date
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $Date = null;
    /**
     * The DayForm
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $DayForm = null;
    /**
     * The DayMode
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \StructType\DayTypeSlimInfo|null
     */
    protected ?\StructType\DayTypeSlimInfo $DayMode = null;
    /**
     * The EarlyArrival
     * Meta information extracted from the WSDL
     * - base: xs:duration
     * - maxInclusive: P10675199DT2H48M5.4775807S
     * - minInclusive: -P10675199DT2H48M5.4775808S
     * - minOccurs: 0
     * - nillable: true
     * - pattern: \-?P(\d*D)?(T(\d*H)?(\d*M)?(\d*(\.\d*)?S)?)?
     * - type: tns:duration
     * @var string|null
     */
    protected ?string $EarlyArrival = null;
    /**
     * The EarlyDeparture
     * Meta information extracted from the WSDL
     * - base: xs:duration
     * - maxInclusive: P10675199DT2H48M5.4775807S
     * - minInclusive: -P10675199DT2H48M5.4775808S
     * - minOccurs: 0
     * - nillable: true
     * - pattern: \-?P(\d*D)?(T(\d*H)?(\d*M)?(\d*(\.\d*)?S)?)?
     * - type: tns:duration
     * @var string|null
     */
    protected ?string $EarlyDeparture = null;
    /**
     * The EntryTime
     * Meta information extracted from the WSDL
     * - base: xs:duration
     * - maxInclusive: P10675199DT2H48M5.4775807S
     * - minInclusive: -P10675199DT2H48M5.4775808S
     * - minOccurs: 0
     * - nillable: true
     * - pattern: \-?P(\d*D)?(T(\d*H)?(\d*M)?(\d*(\.\d*)?S)?)?
     * - type: tns:duration
     * @var string|null
     */
    protected ?string $EntryTime = null;
    /**
     * The ExitTime
     * Meta information extracted from the WSDL
     * - base: xs:duration
     * - maxInclusive: P10675199DT2H48M5.4775807S
     * - minInclusive: -P10675199DT2H48M5.4775808S
     * - minOccurs: 0
     * - nillable: true
     * - pattern: \-?P(\d*D)?(T(\d*H)?(\d*M)?(\d*(\.\d*)?S)?)?
     * - type: tns:duration
     * @var string|null
     */
    protected ?string $ExitTime = null;
    /**
     * The IsEveningOvertime
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var bool|null
     */
    protected ?bool $IsEveningOvertime = null;
    /**
     * The IsMoningOvertime
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var bool|null
     */
    protected ?bool $IsMoningOvertime = null;
    /**
     * The IsNightShift
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var bool|null
     */
    protected ?bool $IsNightShift = null;
    /**
     * The LateArrival
     * Meta information extracted from the WSDL
     * - base: xs:duration
     * - maxInclusive: P10675199DT2H48M5.4775807S
     * - minInclusive: -P10675199DT2H48M5.4775808S
     * - minOccurs: 0
     * - nillable: true
     * - pattern: \-?P(\d*D)?(T(\d*H)?(\d*M)?(\d*(\.\d*)?S)?)?
     * - type: tns:duration
     * @var string|null
     */
    protected ?string $LateArrival = null;
    /**
     * The LateDeparture
     * Meta information extracted from the WSDL
     * - base: xs:duration
     * - maxInclusive: P10675199DT2H48M5.4775807S
     * - minInclusive: -P10675199DT2H48M5.4775808S
     * - minOccurs: 0
     * - nillable: true
     * - pattern: \-?P(\d*D)?(T(\d*H)?(\d*M)?(\d*(\.\d*)?S)?)?
     * - type: tns:duration
     * @var string|null
     */
    protected ?string $LateDeparture = null;
    /**
     * The MaxAbsence
     * Meta information extracted from the WSDL
     * - base: xs:duration
     * - maxInclusive: P10675199DT2H48M5.4775807S
     * - minInclusive: -P10675199DT2H48M5.4775808S
     * - minOccurs: 0
     * - nillable: true
     * - pattern: \-?P(\d*D)?(T(\d*H)?(\d*M)?(\d*(\.\d*)?S)?)?
     * - type: tns:duration
     * @var string|null
     */
    protected ?string $MaxAbsence = null;
    /**
     * The Order
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var int|null
     */
    protected ?int $Order = null;
    /**
     * The WorkBreak
     * Meta information extracted from the WSDL
     * - base: xs:duration
     * - maxInclusive: P10675199DT2H48M5.4775807S
     * - minInclusive: -P10675199DT2H48M5.4775808S
     * - minOccurs: 0
     * - nillable: true
     * - pattern: \-?P(\d*D)?(T(\d*H)?(\d*M)?(\d*(\.\d*)?S)?)?
     * - type: tns:duration
     * @var string|null
     */
    protected ?string $WorkBreak = null;
    /**
     * The WorkTime
     * Meta information extracted from the WSDL
     * - base: xs:duration
     * - maxInclusive: P10675199DT2H48M5.4775807S
     * - minInclusive: -P10675199DT2H48M5.4775808S
     * - minOccurs: 0
     * - nillable: true
     * - pattern: \-?P(\d*D)?(T(\d*H)?(\d*M)?(\d*(\.\d*)?S)?)?
     * - type: tns:duration
     * @var string|null
     */
    protected ?string $WorkTime = null;
    /**
     * Constructor method for WorkTimetableSlimInfo
     * @uses WorkTimetableSlimInfo::setAbsence()
     * @uses WorkTimetableSlimInfo::setBreakBeginTime()
     * @uses WorkTimetableSlimInfo::setBreakEndTime()
     * @uses WorkTimetableSlimInfo::setComment()
     * @uses WorkTimetableSlimInfo::setDate()
     * @uses WorkTimetableSlimInfo::setDayForm()
     * @uses WorkTimetableSlimInfo::setDayMode()
     * @uses WorkTimetableSlimInfo::setEarlyArrival()
     * @uses WorkTimetableSlimInfo::setEarlyDeparture()
     * @uses WorkTimetableSlimInfo::setEntryTime()
     * @uses WorkTimetableSlimInfo::setExitTime()
     * @uses WorkTimetableSlimInfo::setIsEveningOvertime()
     * @uses WorkTimetableSlimInfo::setIsMoningOvertime()
     * @uses WorkTimetableSlimInfo::setIsNightShift()
     * @uses WorkTimetableSlimInfo::setLateArrival()
     * @uses WorkTimetableSlimInfo::setLateDeparture()
     * @uses WorkTimetableSlimInfo::setMaxAbsence()
     * @uses WorkTimetableSlimInfo::setOrder()
     * @uses WorkTimetableSlimInfo::setWorkBreak()
     * @uses WorkTimetableSlimInfo::setWorkTime()
     * @param string $absence
     * @param string $breakBeginTime
     * @param string $breakEndTime
     * @param string $comment
     * @param string $date
     * @param string $dayForm
     * @param \StructType\DayTypeSlimInfo $dayMode
     * @param string $earlyArrival
     * @param string $earlyDeparture
     * @param string $entryTime
     * @param string $exitTime
     * @param bool $isEveningOvertime
     * @param bool $isMoningOvertime
     * @param bool $isNightShift
     * @param string $lateArrival
     * @param string $lateDeparture
     * @param string $maxAbsence
     * @param int $order
     * @param string $workBreak
     * @param string $workTime
     */
    public function __construct(?string $absence = null, ?string $breakBeginTime = null, ?string $breakEndTime = null, ?string $comment = null, ?string $date = null, ?string $dayForm = null, ?\StructType\DayTypeSlimInfo $dayMode = null, ?string $earlyArrival = null, ?string $earlyDeparture = null, ?string $entryTime = null, ?string $exitTime = null, ?bool $isEveningOvertime = null, ?bool $isMoningOvertime = null, ?bool $isNightShift = null, ?string $lateArrival = null, ?string $lateDeparture = null, ?string $maxAbsence = null, ?int $order = null, ?string $workBreak = null, ?string $workTime = null)
    {
        $this
            ->setAbsence($absence)
            ->setBreakBeginTime($breakBeginTime)
            ->setBreakEndTime($breakEndTime)
            ->setComment($comment)
            ->setDate($date)
            ->setDayForm($dayForm)
            ->setDayMode($dayMode)
            ->setEarlyArrival($earlyArrival)
            ->setEarlyDeparture($earlyDeparture)
            ->setEntryTime($entryTime)
            ->setExitTime($exitTime)
            ->setIsEveningOvertime($isEveningOvertime)
            ->setIsMoningOvertime($isMoningOvertime)
            ->setIsNightShift($isNightShift)
            ->setLateArrival($lateArrival)
            ->setLateDeparture($lateDeparture)
            ->setMaxAbsence($maxAbsence)
            ->setOrder($order)
            ->setWorkBreak($workBreak)
            ->setWorkTime($workTime);
    }
    /**
     * Get Absence value
     * @return string|null
     */
    public function getAbsence(): ?string
    {
        return $this->Absence;
    }
    /**
     * Set Absence value
     * @param string $absence
     * @return \StructType\WorkTimetableSlimInfo
     */
    public function setAbsence(?string $absence = null): self
    {
        // validation for constraint: string
        if (!is_null($absence) && !is_string($absence)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($absence, true), gettype($absence)), __LINE__);
        }
        // validation for constraint: maxInclusive(P10675199DT2H48M5.4775807S)
        if (!is_null($absence) && false === mb_strpos((string) $absence, '-') && ($time = (string) time()) && \DateTime::createFromFormat('U', $time)->add(new \DateInterval(preg_replace('/(.*)(\.[0-9]*S)/', '$1S', str_replace('-', '', $absence)))) > \DateTime::createFromFormat('U', $time)->add(new \DateInterval(preg_replace('/(.*)(\.[0-9]*S)/', '$1S', 'P10675199DT2H48M5.4775807S')))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, the value must be chronologically less than or equal to P10675199DT2H48M5.4775807S', var_export($absence, true)), __LINE__);
        }
        // validation for constraint: minInclusive(-P10675199DT2H48M5.4775808S)
        if (!is_null($absence) && false !== mb_strpos((string) $absence, '-') && ($time = (string) time()) && \DateTime::createFromFormat('U', $time)->sub(new \DateInterval(preg_replace('/(.*)(\.[0-9]*S)/', '$1S', str_replace('-', '', $absence)))) < \DateTime::createFromFormat('U', $time)->sub(new \DateInterval(preg_replace('/(.*)(\.[0-9]*S)/', '$1S', 'P10675199DT2H48M5.4775808S')))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, the value must be chronologically greater than or equal to -P10675199DT2H48M5.4775808S', var_export($absence, true)), __LINE__);
        }
        // validation for constraint: pattern(\-?P(\d*D)?(T(\d*H)?(\d*M)?(\d*(\.\d*)?S)?)?)
        if (!is_null($absence) && !preg_match('/\\-?P(\\d*D)?(T(\\d*H)?(\\d*M)?(\\d*(\\.\\d*)?S)?)?/', $absence)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a literal that is among the set of character sequences denoted by the regular expression /\\-?P(\\d*D)?(T(\\d*H)?(\\d*M)?(\\d*(\\.\\d*)?S)?)?/', var_export($absence, true)), __LINE__);
        }
        $this->Absence = $absence;
        
        return $this;
    }
    /**
     * Get BreakBeginTime value
     * @return string|null
     */
    public function getBreakBeginTime(): ?string
    {
        return $this->BreakBeginTime;
    }
    /**
     * Set BreakBeginTime value
     * @param string $breakBeginTime
     * @return \StructType\WorkTimetableSlimInfo
     */
    public function setBreakBeginTime(?string $breakBeginTime = null): self
    {
        // validation for constraint: string
        if (!is_null($breakBeginTime) && !is_string($breakBeginTime)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($breakBeginTime, true), gettype($breakBeginTime)), __LINE__);
        }
        // validation for constraint: maxInclusive(P10675199DT2H48M5.4775807S)
        if (!is_null($breakBeginTime) && false === mb_strpos((string) $breakBeginTime, '-') && ($time = (string) time()) && \DateTime::createFromFormat('U', $time)->add(new \DateInterval(preg_replace('/(.*)(\.[0-9]*S)/', '$1S', str_replace('-', '', $breakBeginTime)))) > \DateTime::createFromFormat('U', $time)->add(new \DateInterval(preg_replace('/(.*)(\.[0-9]*S)/', '$1S', 'P10675199DT2H48M5.4775807S')))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, the value must be chronologically less than or equal to P10675199DT2H48M5.4775807S', var_export($breakBeginTime, true)), __LINE__);
        }
        // validation for constraint: minInclusive(-P10675199DT2H48M5.4775808S)
        if (!is_null($breakBeginTime) && false !== mb_strpos((string) $breakBeginTime, '-') && ($time = (string) time()) && \DateTime::createFromFormat('U', $time)->sub(new \DateInterval(preg_replace('/(.*)(\.[0-9]*S)/', '$1S', str_replace('-', '', $breakBeginTime)))) < \DateTime::createFromFormat('U', $time)->sub(new \DateInterval(preg_replace('/(.*)(\.[0-9]*S)/', '$1S', 'P10675199DT2H48M5.4775808S')))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, the value must be chronologically greater than or equal to -P10675199DT2H48M5.4775808S', var_export($breakBeginTime, true)), __LINE__);
        }
        // validation for constraint: pattern(\-?P(\d*D)?(T(\d*H)?(\d*M)?(\d*(\.\d*)?S)?)?)
        if (!is_null($breakBeginTime) && !preg_match('/\\-?P(\\d*D)?(T(\\d*H)?(\\d*M)?(\\d*(\\.\\d*)?S)?)?/', $breakBeginTime)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a literal that is among the set of character sequences denoted by the regular expression /\\-?P(\\d*D)?(T(\\d*H)?(\\d*M)?(\\d*(\\.\\d*)?S)?)?/', var_export($breakBeginTime, true)), __LINE__);
        }
        $this->BreakBeginTime = $breakBeginTime;
        
        return $this;
    }
    /**
     * Get BreakEndTime value
     * @return string|null
     */
    public function getBreakEndTime(): ?string
    {
        return $this->BreakEndTime;
    }
    /**
     * Set BreakEndTime value
     * @param string $breakEndTime
     * @return \StructType\WorkTimetableSlimInfo
     */
    public function setBreakEndTime(?string $breakEndTime = null): self
    {
        // validation for constraint: string
        if (!is_null($breakEndTime) && !is_string($breakEndTime)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($breakEndTime, true), gettype($breakEndTime)), __LINE__);
        }
        // validation for constraint: maxInclusive(P10675199DT2H48M5.4775807S)
        if (!is_null($breakEndTime) && false === mb_strpos((string) $breakEndTime, '-') && ($time = (string) time()) && \DateTime::createFromFormat('U', $time)->add(new \DateInterval(preg_replace('/(.*)(\.[0-9]*S)/', '$1S', str_replace('-', '', $breakEndTime)))) > \DateTime::createFromFormat('U', $time)->add(new \DateInterval(preg_replace('/(.*)(\.[0-9]*S)/', '$1S', 'P10675199DT2H48M5.4775807S')))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, the value must be chronologically less than or equal to P10675199DT2H48M5.4775807S', var_export($breakEndTime, true)), __LINE__);
        }
        // validation for constraint: minInclusive(-P10675199DT2H48M5.4775808S)
        if (!is_null($breakEndTime) && false !== mb_strpos((string) $breakEndTime, '-') && ($time = (string) time()) && \DateTime::createFromFormat('U', $time)->sub(new \DateInterval(preg_replace('/(.*)(\.[0-9]*S)/', '$1S', str_replace('-', '', $breakEndTime)))) < \DateTime::createFromFormat('U', $time)->sub(new \DateInterval(preg_replace('/(.*)(\.[0-9]*S)/', '$1S', 'P10675199DT2H48M5.4775808S')))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, the value must be chronologically greater than or equal to -P10675199DT2H48M5.4775808S', var_export($breakEndTime, true)), __LINE__);
        }
        // validation for constraint: pattern(\-?P(\d*D)?(T(\d*H)?(\d*M)?(\d*(\.\d*)?S)?)?)
        if (!is_null($breakEndTime) && !preg_match('/\\-?P(\\d*D)?(T(\\d*H)?(\\d*M)?(\\d*(\\.\\d*)?S)?)?/', $breakEndTime)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a literal that is among the set of character sequences denoted by the regular expression /\\-?P(\\d*D)?(T(\\d*H)?(\\d*M)?(\\d*(\\.\\d*)?S)?)?/', var_export($breakEndTime, true)), __LINE__);
        }
        $this->BreakEndTime = $breakEndTime;
        
        return $this;
    }
    /**
     * Get Comment value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getComment(): ?string
    {
        return isset($this->Comment) ? $this->Comment : null;
    }
    /**
     * Set Comment value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $comment
     * @return \StructType\WorkTimetableSlimInfo
     */
    public function setComment(?string $comment = null): self
    {
        // validation for constraint: string
        if (!is_null($comment) && !is_string($comment)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($comment, true), gettype($comment)), __LINE__);
        }
        if (is_null($comment) || (is_array($comment) && empty($comment))) {
            unset($this->Comment);
        } else {
            $this->Comment = $comment;
        }
        
        return $this;
    }
    /**
     * Get Date value
     * @return string|null
     */
    public function getDate(): ?string
    {
        return $this->Date;
    }
    /**
     * Set Date value
     * @param string $date
     * @return \StructType\WorkTimetableSlimInfo
     */
    public function setDate(?string $date = null): self
    {
        // validation for constraint: string
        if (!is_null($date) && !is_string($date)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($date, true), gettype($date)), __LINE__);
        }
        $this->Date = $date;
        
        return $this;
    }
    /**
     * Get DayForm value
     * @return string|null
     */
    public function getDayForm(): ?string
    {
        return $this->DayForm;
    }
    /**
     * Set DayForm value
     * @uses \EnumType\DayForm::valueIsValid()
     * @uses \EnumType\DayForm::getValidValues()
     * @throws InvalidArgumentException
     * @param string $dayForm
     * @return \StructType\WorkTimetableSlimInfo
     */
    public function setDayForm(?string $dayForm = null): self
    {
        // validation for constraint: enumeration
        if (!\EnumType\DayForm::valueIsValid($dayForm)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \EnumType\DayForm', is_array($dayForm) ? implode(', ', $dayForm) : var_export($dayForm, true), implode(', ', \EnumType\DayForm::getValidValues())), __LINE__);
        }
        $this->DayForm = $dayForm;
        
        return $this;
    }
    /**
     * Get DayMode value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \StructType\DayTypeSlimInfo|null
     */
    public function getDayMode(): ?\StructType\DayTypeSlimInfo
    {
        return isset($this->DayMode) ? $this->DayMode : null;
    }
    /**
     * Set DayMode value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \StructType\DayTypeSlimInfo $dayMode
     * @return \StructType\WorkTimetableSlimInfo
     */
    public function setDayMode(?\StructType\DayTypeSlimInfo $dayMode = null): self
    {
        if (is_null($dayMode) || (is_array($dayMode) && empty($dayMode))) {
            unset($this->DayMode);
        } else {
            $this->DayMode = $dayMode;
        }
        
        return $this;
    }
    /**
     * Get EarlyArrival value
     * @return string|null
     */
    public function getEarlyArrival(): ?string
    {
        return $this->EarlyArrival;
    }
    /**
     * Set EarlyArrival value
     * @param string $earlyArrival
     * @return \StructType\WorkTimetableSlimInfo
     */
    public function setEarlyArrival(?string $earlyArrival = null): self
    {
        // validation for constraint: string
        if (!is_null($earlyArrival) && !is_string($earlyArrival)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($earlyArrival, true), gettype($earlyArrival)), __LINE__);
        }
        // validation for constraint: maxInclusive(P10675199DT2H48M5.4775807S)
        if (!is_null($earlyArrival) && false === mb_strpos((string) $earlyArrival, '-') && ($time = (string) time()) && \DateTime::createFromFormat('U', $time)->add(new \DateInterval(preg_replace('/(.*)(\.[0-9]*S)/', '$1S', str_replace('-', '', $earlyArrival)))) > \DateTime::createFromFormat('U', $time)->add(new \DateInterval(preg_replace('/(.*)(\.[0-9]*S)/', '$1S', 'P10675199DT2H48M5.4775807S')))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, the value must be chronologically less than or equal to P10675199DT2H48M5.4775807S', var_export($earlyArrival, true)), __LINE__);
        }
        // validation for constraint: minInclusive(-P10675199DT2H48M5.4775808S)
        if (!is_null($earlyArrival) && false !== mb_strpos((string) $earlyArrival, '-') && ($time = (string) time()) && \DateTime::createFromFormat('U', $time)->sub(new \DateInterval(preg_replace('/(.*)(\.[0-9]*S)/', '$1S', str_replace('-', '', $earlyArrival)))) < \DateTime::createFromFormat('U', $time)->sub(new \DateInterval(preg_replace('/(.*)(\.[0-9]*S)/', '$1S', 'P10675199DT2H48M5.4775808S')))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, the value must be chronologically greater than or equal to -P10675199DT2H48M5.4775808S', var_export($earlyArrival, true)), __LINE__);
        }
        // validation for constraint: pattern(\-?P(\d*D)?(T(\d*H)?(\d*M)?(\d*(\.\d*)?S)?)?)
        if (!is_null($earlyArrival) && !preg_match('/\\-?P(\\d*D)?(T(\\d*H)?(\\d*M)?(\\d*(\\.\\d*)?S)?)?/', $earlyArrival)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a literal that is among the set of character sequences denoted by the regular expression /\\-?P(\\d*D)?(T(\\d*H)?(\\d*M)?(\\d*(\\.\\d*)?S)?)?/', var_export($earlyArrival, true)), __LINE__);
        }
        $this->EarlyArrival = $earlyArrival;
        
        return $this;
    }
    /**
     * Get EarlyDeparture value
     * @return string|null
     */
    public function getEarlyDeparture(): ?string
    {
        return $this->EarlyDeparture;
    }
    /**
     * Set EarlyDeparture value
     * @param string $earlyDeparture
     * @return \StructType\WorkTimetableSlimInfo
     */
    public function setEarlyDeparture(?string $earlyDeparture = null): self
    {
        // validation for constraint: string
        if (!is_null($earlyDeparture) && !is_string($earlyDeparture)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($earlyDeparture, true), gettype($earlyDeparture)), __LINE__);
        }
        // validation for constraint: maxInclusive(P10675199DT2H48M5.4775807S)
        if (!is_null($earlyDeparture) && false === mb_strpos((string) $earlyDeparture, '-') && ($time = (string) time()) && \DateTime::createFromFormat('U', $time)->add(new \DateInterval(preg_replace('/(.*)(\.[0-9]*S)/', '$1S', str_replace('-', '', $earlyDeparture)))) > \DateTime::createFromFormat('U', $time)->add(new \DateInterval(preg_replace('/(.*)(\.[0-9]*S)/', '$1S', 'P10675199DT2H48M5.4775807S')))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, the value must be chronologically less than or equal to P10675199DT2H48M5.4775807S', var_export($earlyDeparture, true)), __LINE__);
        }
        // validation for constraint: minInclusive(-P10675199DT2H48M5.4775808S)
        if (!is_null($earlyDeparture) && false !== mb_strpos((string) $earlyDeparture, '-') && ($time = (string) time()) && \DateTime::createFromFormat('U', $time)->sub(new \DateInterval(preg_replace('/(.*)(\.[0-9]*S)/', '$1S', str_replace('-', '', $earlyDeparture)))) < \DateTime::createFromFormat('U', $time)->sub(new \DateInterval(preg_replace('/(.*)(\.[0-9]*S)/', '$1S', 'P10675199DT2H48M5.4775808S')))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, the value must be chronologically greater than or equal to -P10675199DT2H48M5.4775808S', var_export($earlyDeparture, true)), __LINE__);
        }
        // validation for constraint: pattern(\-?P(\d*D)?(T(\d*H)?(\d*M)?(\d*(\.\d*)?S)?)?)
        if (!is_null($earlyDeparture) && !preg_match('/\\-?P(\\d*D)?(T(\\d*H)?(\\d*M)?(\\d*(\\.\\d*)?S)?)?/', $earlyDeparture)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a literal that is among the set of character sequences denoted by the regular expression /\\-?P(\\d*D)?(T(\\d*H)?(\\d*M)?(\\d*(\\.\\d*)?S)?)?/', var_export($earlyDeparture, true)), __LINE__);
        }
        $this->EarlyDeparture = $earlyDeparture;
        
        return $this;
    }
    /**
     * Get EntryTime value
     * @return string|null
     */
    public function getEntryTime(): ?string
    {
        return $this->EntryTime;
    }
    /**
     * Set EntryTime value
     * @param string $entryTime
     * @return \StructType\WorkTimetableSlimInfo
     */
    public function setEntryTime(?string $entryTime = null): self
    {
        // validation for constraint: string
        if (!is_null($entryTime) && !is_string($entryTime)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($entryTime, true), gettype($entryTime)), __LINE__);
        }
        // validation for constraint: maxInclusive(P10675199DT2H48M5.4775807S)
        if (!is_null($entryTime) && false === mb_strpos((string) $entryTime, '-') && ($time = (string) time()) && \DateTime::createFromFormat('U', $time)->add(new \DateInterval(preg_replace('/(.*)(\.[0-9]*S)/', '$1S', str_replace('-', '', $entryTime)))) > \DateTime::createFromFormat('U', $time)->add(new \DateInterval(preg_replace('/(.*)(\.[0-9]*S)/', '$1S', 'P10675199DT2H48M5.4775807S')))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, the value must be chronologically less than or equal to P10675199DT2H48M5.4775807S', var_export($entryTime, true)), __LINE__);
        }
        // validation for constraint: minInclusive(-P10675199DT2H48M5.4775808S)
        if (!is_null($entryTime) && false !== mb_strpos((string) $entryTime, '-') && ($time = (string) time()) && \DateTime::createFromFormat('U', $time)->sub(new \DateInterval(preg_replace('/(.*)(\.[0-9]*S)/', '$1S', str_replace('-', '', $entryTime)))) < \DateTime::createFromFormat('U', $time)->sub(new \DateInterval(preg_replace('/(.*)(\.[0-9]*S)/', '$1S', 'P10675199DT2H48M5.4775808S')))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, the value must be chronologically greater than or equal to -P10675199DT2H48M5.4775808S', var_export($entryTime, true)), __LINE__);
        }
        // validation for constraint: pattern(\-?P(\d*D)?(T(\d*H)?(\d*M)?(\d*(\.\d*)?S)?)?)
        if (!is_null($entryTime) && !preg_match('/\\-?P(\\d*D)?(T(\\d*H)?(\\d*M)?(\\d*(\\.\\d*)?S)?)?/', $entryTime)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a literal that is among the set of character sequences denoted by the regular expression /\\-?P(\\d*D)?(T(\\d*H)?(\\d*M)?(\\d*(\\.\\d*)?S)?)?/', var_export($entryTime, true)), __LINE__);
        }
        $this->EntryTime = $entryTime;
        
        return $this;
    }
    /**
     * Get ExitTime value
     * @return string|null
     */
    public function getExitTime(): ?string
    {
        return $this->ExitTime;
    }
    /**
     * Set ExitTime value
     * @param string $exitTime
     * @return \StructType\WorkTimetableSlimInfo
     */
    public function setExitTime(?string $exitTime = null): self
    {
        // validation for constraint: string
        if (!is_null($exitTime) && !is_string($exitTime)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($exitTime, true), gettype($exitTime)), __LINE__);
        }
        // validation for constraint: maxInclusive(P10675199DT2H48M5.4775807S)
        if (!is_null($exitTime) && false === mb_strpos((string) $exitTime, '-') && ($time = (string) time()) && \DateTime::createFromFormat('U', $time)->add(new \DateInterval(preg_replace('/(.*)(\.[0-9]*S)/', '$1S', str_replace('-', '', $exitTime)))) > \DateTime::createFromFormat('U', $time)->add(new \DateInterval(preg_replace('/(.*)(\.[0-9]*S)/', '$1S', 'P10675199DT2H48M5.4775807S')))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, the value must be chronologically less than or equal to P10675199DT2H48M5.4775807S', var_export($exitTime, true)), __LINE__);
        }
        // validation for constraint: minInclusive(-P10675199DT2H48M5.4775808S)
        if (!is_null($exitTime) && false !== mb_strpos((string) $exitTime, '-') && ($time = (string) time()) && \DateTime::createFromFormat('U', $time)->sub(new \DateInterval(preg_replace('/(.*)(\.[0-9]*S)/', '$1S', str_replace('-', '', $exitTime)))) < \DateTime::createFromFormat('U', $time)->sub(new \DateInterval(preg_replace('/(.*)(\.[0-9]*S)/', '$1S', 'P10675199DT2H48M5.4775808S')))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, the value must be chronologically greater than or equal to -P10675199DT2H48M5.4775808S', var_export($exitTime, true)), __LINE__);
        }
        // validation for constraint: pattern(\-?P(\d*D)?(T(\d*H)?(\d*M)?(\d*(\.\d*)?S)?)?)
        if (!is_null($exitTime) && !preg_match('/\\-?P(\\d*D)?(T(\\d*H)?(\\d*M)?(\\d*(\\.\\d*)?S)?)?/', $exitTime)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a literal that is among the set of character sequences denoted by the regular expression /\\-?P(\\d*D)?(T(\\d*H)?(\\d*M)?(\\d*(\\.\\d*)?S)?)?/', var_export($exitTime, true)), __LINE__);
        }
        $this->ExitTime = $exitTime;
        
        return $this;
    }
    /**
     * Get IsEveningOvertime value
     * @return bool|null
     */
    public function getIsEveningOvertime(): ?bool
    {
        return $this->IsEveningOvertime;
    }
    /**
     * Set IsEveningOvertime value
     * @param bool $isEveningOvertime
     * @return \StructType\WorkTimetableSlimInfo
     */
    public function setIsEveningOvertime(?bool $isEveningOvertime = null): self
    {
        // validation for constraint: boolean
        if (!is_null($isEveningOvertime) && !is_bool($isEveningOvertime)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($isEveningOvertime, true), gettype($isEveningOvertime)), __LINE__);
        }
        $this->IsEveningOvertime = $isEveningOvertime;
        
        return $this;
    }
    /**
     * Get IsMoningOvertime value
     * @return bool|null
     */
    public function getIsMoningOvertime(): ?bool
    {
        return $this->IsMoningOvertime;
    }
    /**
     * Set IsMoningOvertime value
     * @param bool $isMoningOvertime
     * @return \StructType\WorkTimetableSlimInfo
     */
    public function setIsMoningOvertime(?bool $isMoningOvertime = null): self
    {
        // validation for constraint: boolean
        if (!is_null($isMoningOvertime) && !is_bool($isMoningOvertime)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($isMoningOvertime, true), gettype($isMoningOvertime)), __LINE__);
        }
        $this->IsMoningOvertime = $isMoningOvertime;
        
        return $this;
    }
    /**
     * Get IsNightShift value
     * @return bool|null
     */
    public function getIsNightShift(): ?bool
    {
        return $this->IsNightShift;
    }
    /**
     * Set IsNightShift value
     * @param bool $isNightShift
     * @return \StructType\WorkTimetableSlimInfo
     */
    public function setIsNightShift(?bool $isNightShift = null): self
    {
        // validation for constraint: boolean
        if (!is_null($isNightShift) && !is_bool($isNightShift)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($isNightShift, true), gettype($isNightShift)), __LINE__);
        }
        $this->IsNightShift = $isNightShift;
        
        return $this;
    }
    /**
     * Get LateArrival value
     * @return string|null
     */
    public function getLateArrival(): ?string
    {
        return $this->LateArrival;
    }
    /**
     * Set LateArrival value
     * @param string $lateArrival
     * @return \StructType\WorkTimetableSlimInfo
     */
    public function setLateArrival(?string $lateArrival = null): self
    {
        // validation for constraint: string
        if (!is_null($lateArrival) && !is_string($lateArrival)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($lateArrival, true), gettype($lateArrival)), __LINE__);
        }
        // validation for constraint: maxInclusive(P10675199DT2H48M5.4775807S)
        if (!is_null($lateArrival) && false === mb_strpos((string) $lateArrival, '-') && ($time = (string) time()) && \DateTime::createFromFormat('U', $time)->add(new \DateInterval(preg_replace('/(.*)(\.[0-9]*S)/', '$1S', str_replace('-', '', $lateArrival)))) > \DateTime::createFromFormat('U', $time)->add(new \DateInterval(preg_replace('/(.*)(\.[0-9]*S)/', '$1S', 'P10675199DT2H48M5.4775807S')))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, the value must be chronologically less than or equal to P10675199DT2H48M5.4775807S', var_export($lateArrival, true)), __LINE__);
        }
        // validation for constraint: minInclusive(-P10675199DT2H48M5.4775808S)
        if (!is_null($lateArrival) && false !== mb_strpos((string) $lateArrival, '-') && ($time = (string) time()) && \DateTime::createFromFormat('U', $time)->sub(new \DateInterval(preg_replace('/(.*)(\.[0-9]*S)/', '$1S', str_replace('-', '', $lateArrival)))) < \DateTime::createFromFormat('U', $time)->sub(new \DateInterval(preg_replace('/(.*)(\.[0-9]*S)/', '$1S', 'P10675199DT2H48M5.4775808S')))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, the value must be chronologically greater than or equal to -P10675199DT2H48M5.4775808S', var_export($lateArrival, true)), __LINE__);
        }
        // validation for constraint: pattern(\-?P(\d*D)?(T(\d*H)?(\d*M)?(\d*(\.\d*)?S)?)?)
        if (!is_null($lateArrival) && !preg_match('/\\-?P(\\d*D)?(T(\\d*H)?(\\d*M)?(\\d*(\\.\\d*)?S)?)?/', $lateArrival)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a literal that is among the set of character sequences denoted by the regular expression /\\-?P(\\d*D)?(T(\\d*H)?(\\d*M)?(\\d*(\\.\\d*)?S)?)?/', var_export($lateArrival, true)), __LINE__);
        }
        $this->LateArrival = $lateArrival;
        
        return $this;
    }
    /**
     * Get LateDeparture value
     * @return string|null
     */
    public function getLateDeparture(): ?string
    {
        return $this->LateDeparture;
    }
    /**
     * Set LateDeparture value
     * @param string $lateDeparture
     * @return \StructType\WorkTimetableSlimInfo
     */
    public function setLateDeparture(?string $lateDeparture = null): self
    {
        // validation for constraint: string
        if (!is_null($lateDeparture) && !is_string($lateDeparture)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($lateDeparture, true), gettype($lateDeparture)), __LINE__);
        }
        // validation for constraint: maxInclusive(P10675199DT2H48M5.4775807S)
        if (!is_null($lateDeparture) && false === mb_strpos((string) $lateDeparture, '-') && ($time = (string) time()) && \DateTime::createFromFormat('U', $time)->add(new \DateInterval(preg_replace('/(.*)(\.[0-9]*S)/', '$1S', str_replace('-', '', $lateDeparture)))) > \DateTime::createFromFormat('U', $time)->add(new \DateInterval(preg_replace('/(.*)(\.[0-9]*S)/', '$1S', 'P10675199DT2H48M5.4775807S')))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, the value must be chronologically less than or equal to P10675199DT2H48M5.4775807S', var_export($lateDeparture, true)), __LINE__);
        }
        // validation for constraint: minInclusive(-P10675199DT2H48M5.4775808S)
        if (!is_null($lateDeparture) && false !== mb_strpos((string) $lateDeparture, '-') && ($time = (string) time()) && \DateTime::createFromFormat('U', $time)->sub(new \DateInterval(preg_replace('/(.*)(\.[0-9]*S)/', '$1S', str_replace('-', '', $lateDeparture)))) < \DateTime::createFromFormat('U', $time)->sub(new \DateInterval(preg_replace('/(.*)(\.[0-9]*S)/', '$1S', 'P10675199DT2H48M5.4775808S')))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, the value must be chronologically greater than or equal to -P10675199DT2H48M5.4775808S', var_export($lateDeparture, true)), __LINE__);
        }
        // validation for constraint: pattern(\-?P(\d*D)?(T(\d*H)?(\d*M)?(\d*(\.\d*)?S)?)?)
        if (!is_null($lateDeparture) && !preg_match('/\\-?P(\\d*D)?(T(\\d*H)?(\\d*M)?(\\d*(\\.\\d*)?S)?)?/', $lateDeparture)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a literal that is among the set of character sequences denoted by the regular expression /\\-?P(\\d*D)?(T(\\d*H)?(\\d*M)?(\\d*(\\.\\d*)?S)?)?/', var_export($lateDeparture, true)), __LINE__);
        }
        $this->LateDeparture = $lateDeparture;
        
        return $this;
    }
    /**
     * Get MaxAbsence value
     * @return string|null
     */
    public function getMaxAbsence(): ?string
    {
        return $this->MaxAbsence;
    }
    /**
     * Set MaxAbsence value
     * @param string $maxAbsence
     * @return \StructType\WorkTimetableSlimInfo
     */
    public function setMaxAbsence(?string $maxAbsence = null): self
    {
        // validation for constraint: string
        if (!is_null($maxAbsence) && !is_string($maxAbsence)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($maxAbsence, true), gettype($maxAbsence)), __LINE__);
        }
        // validation for constraint: maxInclusive(P10675199DT2H48M5.4775807S)
        if (!is_null($maxAbsence) && false === mb_strpos((string) $maxAbsence, '-') && ($time = (string) time()) && \DateTime::createFromFormat('U', $time)->add(new \DateInterval(preg_replace('/(.*)(\.[0-9]*S)/', '$1S', str_replace('-', '', $maxAbsence)))) > \DateTime::createFromFormat('U', $time)->add(new \DateInterval(preg_replace('/(.*)(\.[0-9]*S)/', '$1S', 'P10675199DT2H48M5.4775807S')))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, the value must be chronologically less than or equal to P10675199DT2H48M5.4775807S', var_export($maxAbsence, true)), __LINE__);
        }
        // validation for constraint: minInclusive(-P10675199DT2H48M5.4775808S)
        if (!is_null($maxAbsence) && false !== mb_strpos((string) $maxAbsence, '-') && ($time = (string) time()) && \DateTime::createFromFormat('U', $time)->sub(new \DateInterval(preg_replace('/(.*)(\.[0-9]*S)/', '$1S', str_replace('-', '', $maxAbsence)))) < \DateTime::createFromFormat('U', $time)->sub(new \DateInterval(preg_replace('/(.*)(\.[0-9]*S)/', '$1S', 'P10675199DT2H48M5.4775808S')))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, the value must be chronologically greater than or equal to -P10675199DT2H48M5.4775808S', var_export($maxAbsence, true)), __LINE__);
        }
        // validation for constraint: pattern(\-?P(\d*D)?(T(\d*H)?(\d*M)?(\d*(\.\d*)?S)?)?)
        if (!is_null($maxAbsence) && !preg_match('/\\-?P(\\d*D)?(T(\\d*H)?(\\d*M)?(\\d*(\\.\\d*)?S)?)?/', $maxAbsence)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a literal that is among the set of character sequences denoted by the regular expression /\\-?P(\\d*D)?(T(\\d*H)?(\\d*M)?(\\d*(\\.\\d*)?S)?)?/', var_export($maxAbsence, true)), __LINE__);
        }
        $this->MaxAbsence = $maxAbsence;
        
        return $this;
    }
    /**
     * Get Order value
     * @return int|null
     */
    public function getOrder(): ?int
    {
        return $this->Order;
    }
    /**
     * Set Order value
     * @param int $order
     * @return \StructType\WorkTimetableSlimInfo
     */
    public function setOrder(?int $order = null): self
    {
        // validation for constraint: int
        if (!is_null($order) && !(is_int($order) || ctype_digit($order))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($order, true), gettype($order)), __LINE__);
        }
        $this->Order = $order;
        
        return $this;
    }
    /**
     * Get WorkBreak value
     * @return string|null
     */
    public function getWorkBreak(): ?string
    {
        return $this->WorkBreak;
    }
    /**
     * Set WorkBreak value
     * @param string $workBreak
     * @return \StructType\WorkTimetableSlimInfo
     */
    public function setWorkBreak(?string $workBreak = null): self
    {
        // validation for constraint: string
        if (!is_null($workBreak) && !is_string($workBreak)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($workBreak, true), gettype($workBreak)), __LINE__);
        }
        // validation for constraint: maxInclusive(P10675199DT2H48M5.4775807S)
        if (!is_null($workBreak) && false === mb_strpos((string) $workBreak, '-') && ($time = (string) time()) && \DateTime::createFromFormat('U', $time)->add(new \DateInterval(preg_replace('/(.*)(\.[0-9]*S)/', '$1S', str_replace('-', '', $workBreak)))) > \DateTime::createFromFormat('U', $time)->add(new \DateInterval(preg_replace('/(.*)(\.[0-9]*S)/', '$1S', 'P10675199DT2H48M5.4775807S')))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, the value must be chronologically less than or equal to P10675199DT2H48M5.4775807S', var_export($workBreak, true)), __LINE__);
        }
        // validation for constraint: minInclusive(-P10675199DT2H48M5.4775808S)
        if (!is_null($workBreak) && false !== mb_strpos((string) $workBreak, '-') && ($time = (string) time()) && \DateTime::createFromFormat('U', $time)->sub(new \DateInterval(preg_replace('/(.*)(\.[0-9]*S)/', '$1S', str_replace('-', '', $workBreak)))) < \DateTime::createFromFormat('U', $time)->sub(new \DateInterval(preg_replace('/(.*)(\.[0-9]*S)/', '$1S', 'P10675199DT2H48M5.4775808S')))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, the value must be chronologically greater than or equal to -P10675199DT2H48M5.4775808S', var_export($workBreak, true)), __LINE__);
        }
        // validation for constraint: pattern(\-?P(\d*D)?(T(\d*H)?(\d*M)?(\d*(\.\d*)?S)?)?)
        if (!is_null($workBreak) && !preg_match('/\\-?P(\\d*D)?(T(\\d*H)?(\\d*M)?(\\d*(\\.\\d*)?S)?)?/', $workBreak)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a literal that is among the set of character sequences denoted by the regular expression /\\-?P(\\d*D)?(T(\\d*H)?(\\d*M)?(\\d*(\\.\\d*)?S)?)?/', var_export($workBreak, true)), __LINE__);
        }
        $this->WorkBreak = $workBreak;
        
        return $this;
    }
    /**
     * Get WorkTime value
     * @return string|null
     */
    public function getWorkTime(): ?string
    {
        return $this->WorkTime;
    }
    /**
     * Set WorkTime value
     * @param string $workTime
     * @return \StructType\WorkTimetableSlimInfo
     */
    public function setWorkTime(?string $workTime = null): self
    {
        // validation for constraint: string
        if (!is_null($workTime) && !is_string($workTime)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($workTime, true), gettype($workTime)), __LINE__);
        }
        // validation for constraint: maxInclusive(P10675199DT2H48M5.4775807S)
        if (!is_null($workTime) && false === mb_strpos((string) $workTime, '-') && ($time = (string) time()) && \DateTime::createFromFormat('U', $time)->add(new \DateInterval(preg_replace('/(.*)(\.[0-9]*S)/', '$1S', str_replace('-', '', $workTime)))) > \DateTime::createFromFormat('U', $time)->add(new \DateInterval(preg_replace('/(.*)(\.[0-9]*S)/', '$1S', 'P10675199DT2H48M5.4775807S')))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, the value must be chronologically less than or equal to P10675199DT2H48M5.4775807S', var_export($workTime, true)), __LINE__);
        }
        // validation for constraint: minInclusive(-P10675199DT2H48M5.4775808S)
        if (!is_null($workTime) && false !== mb_strpos((string) $workTime, '-') && ($time = (string) time()) && \DateTime::createFromFormat('U', $time)->sub(new \DateInterval(preg_replace('/(.*)(\.[0-9]*S)/', '$1S', str_replace('-', '', $workTime)))) < \DateTime::createFromFormat('U', $time)->sub(new \DateInterval(preg_replace('/(.*)(\.[0-9]*S)/', '$1S', 'P10675199DT2H48M5.4775808S')))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, the value must be chronologically greater than or equal to -P10675199DT2H48M5.4775808S', var_export($workTime, true)), __LINE__);
        }
        // validation for constraint: pattern(\-?P(\d*D)?(T(\d*H)?(\d*M)?(\d*(\.\d*)?S)?)?)
        if (!is_null($workTime) && !preg_match('/\\-?P(\\d*D)?(T(\\d*H)?(\\d*M)?(\\d*(\\.\\d*)?S)?)?/', $workTime)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a literal that is among the set of character sequences denoted by the regular expression /\\-?P(\\d*D)?(T(\\d*H)?(\\d*M)?(\\d*(\\.\\d*)?S)?)?/', var_export($workTime, true)), __LINE__);
        }
        $this->WorkTime = $workTime;
        
        return $this;
    }
}
