<?php

/*
 * This file is part of Composer.
 *
 * (c) Nils Adermann <naderman@naderman.de>
 *     Jordi Boggiano <j.boggiano@seld.be>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Composer\Package;

use Composer\Package\Version\VersionParser;

/**
 * The root package represents the project's composer.json and contains additional metadata
 *
 * @author Jordi Boggiano <j.boggiano@seld.be>
 */
class RootPackage extends CompletePackage implements RootPackageInterface
{
    protected $minimumStability = 'stable';
    protected $stabilityFlags = array();
    protected $references = array();

    /**
     * Set the minimumStability
     *
     * @param string $minimumStability
     */
    public function setMinimumStability($minimumStability)
    {
        $this->minimumStability = $minimumStability;
    }

    /**
     * {@inheritDoc}
     */
    public function getMinimumStability()
    {
        return $this->minimumStability;
    }

    /**
     * Set the stabilityFlags
     *
     * @param array $stabilityFlags
     */
    public function setStabilityFlags(array $stabilityFlags)
    {
        $this->stabilityFlags = $stabilityFlags;
    }

    /**
     * {@inheritDoc}
     */
    public function getStabilityFlags()
    {
        return $this->stabilityFlags;
    }

    /**
     * Set the references
     *
     * @param array $references
     */
    public function setReferences(array $references)
    {
        $this->references = $references;
    }

    /**
     * {@inheritDoc}
     */
    public function getReferences()
    {
        return $this->references;
    }
}
