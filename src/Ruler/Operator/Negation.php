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
use Ruler\VariableOperand;

/**
 * Class Ceil
 * @author Jordan Raub <jordan@raub.me>
 * @package Ruler\Operator
 */
class Negation extends VariableOperator implements VariableOperand
{
    public function prepareValue(Context $context)
    {
        /** @var VariableOperand $operand */
        list($operand) = $this->getOperands();
        return $operand->prepareValue($context)->negate();
    }

    protected function getOperandCardinality()
    {
        return static::UNARY;
    }
}