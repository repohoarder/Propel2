<?php

/**
 * MIT License. This file is part of the Propel package.
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Propel\Tests\Generator\Behavior\Sortable;

use Propel\Tests\Bookstore\Behavior\SortableTable14Query;

/**
 * Tests for SortableBehavior class
 *
 * @author Arnaud Lejosne
 *
 * @group database
 */
class SortableBehaviorWithSetScopeTest extends TestCase
{
    /**
     * @return void
     */
    public function setUp(): void
    {
        parent::setUp();

        $this->populateTable14();
    }

    /**
     * @return void
     */
    public function testEnumRank()
    {
        $entries = SortableTable14Query::create()->find();
        $this->assertEquals($entries[0]->getRank(), 1);
        $this->assertEquals($entries[1]->getRank(), 2);
        $this->assertEquals($entries[2]->getRank(), 1);
        $this->assertEquals($entries[3]->getRank(), 2);
    }
}
