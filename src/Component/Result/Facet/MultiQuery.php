<?php

/*
 * This file is part of the Solarium package.
 *
 * For the full copyright and license information, please view the COPYING
 * file that was distributed with this source code.
 */

namespace Solarium\Component\Result\Facet;

/**
 * Select multiquery facet result.
 *
 * A multiquery facet will usually return a dataset of multiple rows, in each
 * row a query key and its count. You can access the values as an array using
 * {@link getValues()} or iterate this object.
 */
class MultiQuery extends Field
{
}
