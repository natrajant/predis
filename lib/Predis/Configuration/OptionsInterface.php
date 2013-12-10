<?php

/*
 * This file is part of the Predis package.
 *
 * (c) Daniele Alessandri <suppakilla@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Predis\Configuration;

/**
 * Defines an options container class.
 *
 * @author Daniele Alessandri <suppakilla@gmail.com>
 */
interface OptionsInterface
{
    /**
     * Returns the default value for the given option.
     *
     * @param string $option Name of the option.
     * @return mixed
     */
    public function getDefault($option);

    /**
     * Checks if the given option has been set by the user upon initialization.
     *
     * @param string $option Name of the option.
     * @return bool
     */
    public function defined($option);

    /**
     * Checks if the given option has been set and does not evaluate to NULL.
     *
     * @param string $option Name of the option.
     * @return bool
     */
    public function __isset($option);

    /**
     * Returns the value of the given option.
     *
     * @param string $option Name of the option.
     * @return mixed
     */
    public function __get($option);
}
