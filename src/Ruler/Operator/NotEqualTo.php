<?php

/*
 * This file is part of the Ruler package, an OpenSky project.
 *
 * (c) 2011 OpenSky Project Inc
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Ruler\Operator;

use Ruler\Context;

/**
 * A NotEqualTo comparison operator.
 *
 * @author Justin Hileman <justin@shopopensky.com>
 * @extends ComparisonOperator
 */
class NotEqualTo extends ComparisonOperator
{
    /**
     * Evaluate whether the given variables are not equal in the current Context.
     *
     * @param Context $context Context with which to evaluate this ComparisonOperator
     *
     * @return boolean
     */
    public function evaluate(Context $context = null, $return = true)
    {
        $context = $context ?: new Context;

        if ( ! isset($this->evaluated)) {
            $this->evaluated = $this->left->prepareValue($context)->equalTo($this->right->prepareValue($context)) === false;
        }

        return $return ? $this->evaluated : $this;
    }
}