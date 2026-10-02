<?php

declare(strict_types=1);

namespace Scraper\ScraperChronopostTracking\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for resultTrackSkybill StructType.
 */
#[\AllowDynamicProperties]
class ResultTrackSkybill extends AbstractStructBase
{
    /** The errorCode */
    protected int $errorCode;

    /**
     * The errorMessage
     * Meta information extracted from the WSDL
     * - minOccurs: 0.
     */
    protected ?string $errorMessage = null;

    /**
     * The listEvents
     * Meta information extracted from the WSDL
     * - minOccurs: 0.
     */
    protected ?ListEvents $listEvents = null;

    /**
     * Constructor method for resultTrackSkybill.
     *
     * @uses ResultTrackSkybill::setErrorCode()
     * @uses ResultTrackSkybill::setErrorMessage()
     * @uses ResultTrackSkybill::setListEvents()
     */
    public function __construct(int $errorCode, ?string $errorMessage = null, ?ListEvents $listEvents = null)
    {
        $this
            ->setErrorCode($errorCode)
            ->setErrorMessage($errorMessage)
            ->setListEvents($listEvents)
        ;
    }

    /**
     * Get errorCode value.
     */
    public function getErrorCode(): int
    {
        return $this->errorCode;
    }

    /**
     * Set errorCode value.
     */
    public function setErrorCode(int $errorCode): self
    {
        // validation for constraint: int
        if (!is_null($errorCode) && !(is_int($errorCode) || ctype_digit($errorCode))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($errorCode, true), gettype($errorCode)), __LINE__);
        }
        $this->errorCode = $errorCode;

        return $this;
    }

    /**
     * Get errorMessage value.
     */
    public function getErrorMessage(): ?string
    {
        return $this->errorMessage;
    }

    /**
     * Set errorMessage value.
     */
    public function setErrorMessage(?string $errorMessage = null): self
    {
        // validation for constraint: string
        if (!is_null($errorMessage) && !is_string($errorMessage)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($errorMessage, true), gettype($errorMessage)), __LINE__);
        }
        $this->errorMessage = $errorMessage;

        return $this;
    }

    /**
     * Get listEvents value.
     */
    public function getListEvents(): ?ListEvents
    {
        return $this->listEvents;
    }

    /**
     * Set listEvents value.
     */
    public function setListEvents(?ListEvents $listEvents = null): self
    {
        $this->listEvents = $listEvents;

        return $this;
    }
}
