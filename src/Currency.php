<?php

/**
 * This file is part of the Ulabox Money library.
 *
 * Copyright (c) 2011-2015 Ulabox SL
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Money;

final class Currency
{
    /**
     * Currency code
     *
     * @var string
     */
    private $code;

    /**
     * @param string $code
     */
    private function __construct($code)
    {
        if (!is_string($code)) {
            throw new \InvalidArgumentException('Currency code should be a string');
        }

        $this->code = $code;
    }

    /**
     * Creates a Currency from its code
     *
     * @param string $code
     *
     * @return Currency
     */
    public static function fromCode($code)
    {
        return new self($code);
    }

    /**
     * Returns the currency code
     *
     * @return string
     */
    public function code()
    {
        return $this->code;
    }

    /**
     * Checks whether this currency is the same as an other
     *
     * @param Currency $other
     *
     * @return boolean
     */
    public function equals(Currency $other)
    {
        return $this->code === $other->code;
    }

    public function __toString() {
        return $this->code();
    }
}