<?php

declare(strict_types=1);

namespace Scraper\ScraperChronopostTracking\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for parcelPOD StructType.
 */
#[\AllowDynamicProperties]
class ParcelPOD extends AbstractStructBase
{
    /** The podPresente */
    protected bool $podPresente;

    /** The statusCode */
    protected int $statusCode;

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
     * The skybillNumber
     * Meta information extracted from the WSDL
     * - minOccurs: 0.
     */
    protected ?string $skybillNumber = null;

    /**
     * Constructor method for parcelPOD.
     *
     * @uses ParcelPOD::setPodPresente()
     * @uses ParcelPOD::setStatusCode()
     * @uses ParcelPOD::setFormatPOD()
     * @uses ParcelPOD::setPod()
     * @uses ParcelPOD::setSkybillNumber()
     */
    public function __construct(bool $podPresente, int $statusCode, ?string $formatPOD = null, ?string $pod = null, ?string $skybillNumber = null)
    {
        $this
            ->setPodPresente($podPresente)
            ->setStatusCode($statusCode)
            ->setFormatPOD($formatPOD)
            ->setPod($pod)
            ->setSkybillNumber($skybillNumber)
        ;
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
