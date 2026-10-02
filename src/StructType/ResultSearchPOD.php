<?php

declare(strict_types=1);

namespace Scraper\ScraperChronopostTracking\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for resultSearchPOD StructType.
 */
#[\AllowDynamicProperties]
class ResultSearchPOD extends AbstractStructBase
{
    /** The errorCode */
    protected int $errorCode;

    /** The podPresente */
    protected bool $podPresente;

    /** The statusCode */
    protected int $statusCode;

    /**
     * The errorMessage
     * Meta information extracted from the WSDL
     * - minOccurs: 0.
     */
    protected ?string $errorMessage = null;

    /**
     * The formatPOD
     * Meta information extracted from the WSDL
     * - minOccurs: 0.
     */
    protected ?string $formatPOD = null;

    /**
     * The pod
     * Meta information extracted from the WSDL
     * - minOccurs: 0.
     */
    protected ?string $pod = null;

    /**
     * Constructor method for resultSearchPOD.
     *
     * @uses ResultSearchPOD::setErrorCode()
     * @uses ResultSearchPOD::setPodPresente()
     * @uses ResultSearchPOD::setStatusCode()
     * @uses ResultSearchPOD::setErrorMessage()
     * @uses ResultSearchPOD::setFormatPOD()
     * @uses ResultSearchPOD::setPod()
     */
    public function __construct(int $errorCode, bool $podPresente, int $statusCode, ?string $errorMessage = null, ?string $formatPOD = null, ?string $pod = null)
    {
        $this
            ->setErrorCode($errorCode)
            ->setPodPresente($podPresente)
            ->setStatusCode($statusCode)
            ->setErrorMessage($errorMessage)
            ->setFormatPOD($formatPOD)
            ->setPod($pod)
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
     * Get podPresente value.
     */
    public function getPodPresente(): bool
    {
        return $this->podPresente;
    }

    /**
     * Set podPresente value.
     */
    public function setPodPresente(bool $podPresente): self
    {
        // validation for constraint: boolean
        if (!is_null($podPresente) && !is_bool($podPresente)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($podPresente, true), gettype($podPresente)), __LINE__);
        }
        $this->podPresente = $podPresente;

        return $this;
    }

    /**
     * Get statusCode value.
     */
    public function getStatusCode(): int
    {
        return $this->statusCode;
    }

    /**
     * Set statusCode value.
     */
    public function setStatusCode(int $statusCode): self
    {
        // validation for constraint: int
        if (!is_null($statusCode) && !(is_int($statusCode) || ctype_digit($statusCode))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($statusCode, true), gettype($statusCode)), __LINE__);
        }
        $this->statusCode = $statusCode;

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
     * Get formatPOD value.
     */
    public function getFormatPOD(): ?string
    {
        return $this->formatPOD;
    }

    /**
     * Set formatPOD value.
     */
    public function setFormatPOD(?string $formatPOD = null): self
    {
        // validation for constraint: string
        if (!is_null($formatPOD) && !is_string($formatPOD)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($formatPOD, true), gettype($formatPOD)), __LINE__);
        }
        $this->formatPOD = $formatPOD;

        return $this;
    }

    /**
     * Get pod value.
     */
    public function getPod(): ?string
    {
        return $this->pod;
    }

    /**
     * Set pod value.
     */
    public function setPod(?string $pod = null): self
    {
        // validation for constraint: string
        if (!is_null($pod) && !is_string($pod)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($pod, true), gettype($pod)), __LINE__);
        }
        $this->pod = $pod;

        return $this;
    }
}
