<?php declare(strict_types=1);

namespace Stack\Contracts;

interface StackContract
{
    /**
     * Get stack items
     *
     * @return array
     */
    public function all(): array;

    /**
     * Adding a new items into stack
     *
     * @param any $values
     * @return void
     */
    public function push($values): void;

    /**
     * Remove the first or last items from
     * the stack collection
     *
     * @return void
     */
    public function pop(): void;

    /**
     * Checks if there are no items in the stack
     *
     * @return boolean
     */
    public function isEmpty(): bool;

    /**
     * Checks if there are items in the stack
     *
     * @param int|string|array $values
     * @return boolean
     */
    public function has($values): bool;

    /**
     * Get the total items of stack
     *
     * @return integer
     */
    public function count(): int;
}