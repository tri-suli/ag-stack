<?php declare(strict_types=1);

namespace Stack\Stack;

use Stack\Contracts\StackContract;

class Filo implements StackContract
{
    /**
     * The stack items
     *
     * @var array
     */
    protected $items = [];

    /**
     * Create a new instance of stack
     *
     * @param any $items
     */
    public function __construct($items)
    {
        $this->items = $items;
    }

    /**
     * Get stack items
     *
     * @return array
     */
    public function all(): array
    {
        return $this->items;
    }

    /**
     * Adding a new items into stack
     *
     * @param any $values
     * @return void
     */
    public function push($values): void
    {
        //
    }

    /**
     * Remove the first or last items from
     * the stack collection
     *
     * @return void
     */
    public function pop(): void
    {
        //
    }

    /**
     * Checks if there are no items in the stack
     *
     * @return boolean
     */
    public function isEmpty(): bool
    {
        return $this->count() === 0;
    }

    /**
     * Checks if there are items in the stack
     *
     * @param int|string|array $values
     * @return boolean
     */
    public function has($values): bool
    {
        return true;
    }

    /**
     * Get the total items of stack
     *
     * @return integer
     */
    public function count(): int
    {
        return count($this->items);
    }
}