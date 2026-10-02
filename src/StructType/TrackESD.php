<?php

declare(strict_types=1);

namespace Scraper\ScraperChronopostTracking\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for trackESD StructType
 * Meta information extracted from the WSDL
 * - type: tns:trackESD.
 */
#[\AllowDynamicProperties]
class TrackESD extends AbstractStructBase
{
    /**
     * The language
     * Meta information extracted from the WSDL
     * - minOccurs: 0.
     */
    protected ?string $language = null;

    /**
     * The esdNumber
     * Meta information extracted from the WSDL
     * - minOccurs: 0.
     */
    protected ?string $esdNumber = null;

    /**
     * Constructor method for trackESD.
     *
     * @uses TrackESD::setLanguage()
     * @uses TrackESD::setEsdNumber()
     */
    public function __construct(?string $language = null, ?string $esdNumber = null)
    {
        $this
            ->setLanguage($language)
            ->setEsdNumber($esdNumber)
        ;
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
     * Get esdNumber value.
     */
    public function getEsdNumber(): ?string
    {
        return $this->esdNumber;
    }

    /**
     * Set esdNumber value.
     */
    public function setEsdNumber(?string $esdNumber = null): self
    {
        // validation for constraint: string
        if (!is_null($esdNumber) && !is_string($esdNumber)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($esdNumber, true), gettype($esdNumber)), __LINE__);
        }
        $this->esdNumber = $esdNumber;

        return $this;
    }
}
