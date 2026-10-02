<?php

declare(strict_types=1);

namespace Scraper\ScraperChronopostTracking\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for infoComp StructType.
 */
#[\AllowDynamicProperties]
class InfoComp extends AbstractStructBase
{
    /**
     * The name
     * Meta information extracted from the WSDL
     * - minOccurs: 0.
     */
    protected ?string $name = null;

    /**
     * The value
     * Meta information extracted from the WSDL
     * - minOccurs: 0.
     */
    protected ?string $value = null;

    /**
     * Constructor method for infoComp.
     *
     * @uses InfoComp::setName()
     * @uses InfoComp::setValue()
     */
    public function __construct(?string $name = null, ?string $value = null)
    {
        $this
            ->setName($name)
            ->setValue($value)
        ;
    }

    /**
     * Get name value.
     */
    public function getName(): ?string
    {
        return $this->name;
    }

    /**
     * Set name value.
     */
    public function setName(?string $name = null): self
    {
        // validation for constraint: string
        if (!is_null($name) && !is_string($name)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($name, true), gettype($name)), __LINE__);
        }
        $this->name = $name;

        return $this;
    }

    /**
     * Get value value.
     */
    public function getValue(): ?string
    {
        return $this->value;
    }

    /**
     * Set value value.
     */
    public function setValue(?string $value = null): self
    {
        // validation for constraint: string
        if (!is_null($value) && !is_string($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($value, true), gettype($value)), __LINE__);
        }
        $this->value = $value;

        return $this;
    }
}
