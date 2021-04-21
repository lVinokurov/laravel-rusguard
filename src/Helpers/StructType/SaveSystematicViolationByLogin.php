<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SaveSystematicViolationByLogin StructType
 * @subpackage Structs
 */
class SaveSystematicViolationByLogin extends AbstractStructBase
{
    /**
     * The login
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $login = null;
    /**
     * The percentValue
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var float|null
     */
    protected ?float $percentValue = null;
    /**
     * Constructor method for SaveSystematicViolationByLogin
     * @uses SaveSystematicViolationByLogin::setLogin()
     * @uses SaveSystematicViolationByLogin::setPercentValue()
     * @param string $login
     * @param float $percentValue
     */
    public function __construct(?string $login = null, ?float $percentValue = null)
    {
        $this
            ->setLogin($login)
            ->setPercentValue($percentValue);
    }
    /**
     * Get login value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getLogin(): ?string
    {
        return isset($this->login) ? $this->login : null;
    }
    /**
     * Set login value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $login
     * @return \StructType\SaveSystematicViolationByLogin
     */
    public function setLogin(?string $login = null): self
    {
        // validation for constraint: string
        if (!is_null($login) && !is_string($login)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($login, true), gettype($login)), __LINE__);
        }
        if (is_null($login) || (is_array($login) && empty($login))) {
            unset($this->login);
        } else {
            $this->login = $login;
        }
        
        return $this;
    }
    /**
     * Get percentValue value
     * @return float|null
     */
    public function getPercentValue(): ?float
    {
        return $this->percentValue;
    }
    /**
     * Set percentValue value
     * @param float $percentValue
     * @return \StructType\SaveSystematicViolationByLogin
     */
    public function setPercentValue(?float $percentValue = null): self
    {
        // validation for constraint: float
        if (!is_null($percentValue) && !(is_float($percentValue) || is_numeric($percentValue))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($percentValue, true), gettype($percentValue)), __LINE__);
        }
        $this->percentValue = $percentValue;
        
        return $this;
    }
}
