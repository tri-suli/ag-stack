<?php declare(strict_types=1);

namespace Stack\Tests\Unit;

use Stack\Stack\Lifo;
use PHPUnit\Framework\TestCase;

class LifoTest extends TestCase
{   
    /**
     * Test initialization of stack items.
     *
     * @test
     * @return Lifo
     */
    public function shouldAddAllStringItemsIntoStackAndReturnedAsAnArray(): Lifo
    {
        $stack = new Lifo('abcde');

        $stackItems = $stack->all();
        $totalItems = $stack->count();

        $this->assertIsArray($stackItems);
        $this->assertEquals(5, $totalItems);
        $this->assertSame(['a', 'b', 'c', 'd', 'e'], $stackItems);

        return $stack;
    }

    /**
     * Undocumented function
     *
     * @test
     * @depends shouldAddAllStringItemsIntoStackAndReturnedAsAnArray
     * @param Lifo $stack
     * @return Lifo
     */
    public function shouldAppendNewItemIntoStackItems(Lifo $stack): Lifo
    {
        $stack->push('5');
        $stack->push(4);
        $stack->push('23');
        $stack->push(1);

        $this->assertEquals(10, $stack->count());
        $this->assertSame(
            [1, '2', '3', 4, '5', 'a', 'b', 'c', 'd', 'e'],
            $stack->all()
        );

        return $stack;
    }

    /**
     * Undocumented function
     *
     * @test
     * @depends shouldAddAllStringItemsIntoStackAndReturnedAsAnArray
     * @depends shouldAppendNewItemIntoStackItems
     * @param Lifo $stack
     * @return Lifo
     */
    public function shouldRemoveTheLastItems(Lifo $stack): Lifo
    {
        $stack->pop();
        $stack->pop();
        $stack->pop();

        $this->assertEquals(7, $stack->count());
        $this->assertSame(
            [4, '5', 'a', 'b', 'c', 'd', 'e'],
            $stack->all()
        );

        return $stack;
    }

    /**
     * Test initialization of stack items.
     *
     * @test
     * @return void
     */
    public function shouldAddAllArrayValuesIntoStackAndReturnedAsAnArray(): void
    {
        $stack = new Lifo([1, 2, 3, 4, 5]);

        $stackItems = $stack->all();
        $totalItems = $stack->count();

        $this->assertIsArray($stackItems);
        $this->assertEquals(5, $totalItems);
        $this->assertSame([1, 2, 3, 4, 5], $stackItems);
    }
}