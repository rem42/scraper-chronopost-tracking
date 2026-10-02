<?php

declare(strict_types=1);

namespace Scraper\ScraperChronopostTracking\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for cancelListSkybill StructType
 * Meta information extracted from the WSDL
 * - type: tns:cancelListSkybill.
 */
#[\AllowDynamicProperties]
class CancelListSkybill extends AbstractStructBase
{
    /**
     * The accountNumber
     * Meta information extracted from the WSDL
     * - minOccurs: 0.
     */
    protected ?string $accountNumber = null;

    /**
     * The password
     * Meta information extracted from the WSDL
     * - minOccurs: 0.
     */
    protected ?string $password = null;

    /**
     * The language
     * Meta information extracted from the WSDL
     * - minOccurs: 0.
     */
    protected ?string $language = null;

    /**
     * The skybillNumber
     * Meta information extracted from the WSDL
     * - minOccurs: 0.
     */
    protected ?string $skybillNumber = null;

    /**
     * Constructor method for cancelListSkybill.
     *
     * @uses CancelListSkybill::setAccountNumber()
     * @uses CancelListSkybill::setPassword()
     * @uses CancelListSkybill::setLanguage()
     * @uses CancelListSkybill::setSkybillNumber()
     */
    public function __construct(?string $accountNumber = null, ?string $password = null, ?string $language = null, ?string $skybillNumber = null)
    {
        $this
            ->setAccountNumber($accountNumber)
            ->setPassword($password)
            ->setLanguage($language)
            ->setSkybillNumber($skybillNumber)
        ;
    }

    /**
     * Get accountNumber value.
     */
    public function getAccountNumber(): ?string
    {
        return $this->accountNumber;
    }

    /**
     * Set accountNumber value.
     */
    public function setAccountNumber(?string $accountNumber = null): self
    {
        // validation for constraint: string
        if (!is_null($accountNumber) && !is_string($accountNumber)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($accountNumber, true), gettype($accountNumber)), __LINE__);
        }
        $this->accountNumber = $accountNumber;

        return $this;
    }

    /**
     * Get password value.
     */
    public function getPassword(): ?string
    {
        return $this->password;
    }

    /**
     * Set password value.
     */
    public function setPassword(?string $password = null): self
    {
        // validation for constraint: string
        if (!is_null($password) && !is_string($password)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($password, true), gettype($password)), __LINE__);
        }
        $this->password = $password;

        return $this;
    }

    /**
     * Get language value.
     */
    public function getLanguage(): ?string
    {
        return $this->language;
    }

    /**
     * Set language value.
     */
    public function setLanguage(?string $language = null): self
    {
        // validation for constraint: string
        if (!is_null($language) && !is_string($language)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($language, true), gettype($language)), __LINE__);
        }
        $this->language = $language;

        return $this;
    }

    /**
     * Get skybillNumber value.
     */
    public function getSkybillNumber(): ?string
    {
        return $this->skybillNumber;
    }

    /**
     * Set skybillNumber value.
     */
    public function setSkybillNumber(?string $skybillNumber = null): self
    {
        // validation for constraint: string
        if (!is_null($skybillNumber) && !is_string($skybillNumber)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($skybillNumber, true), gettype($skybillNumber)), __LINE__);
        }
        $this->skybillNumber = $skybillNumber;

        return $this;
    }
}
