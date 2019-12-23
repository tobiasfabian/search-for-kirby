<?php

namespace Kirby\Search;

/**
 * Search provider
 *
 * @author Nico Hoffmann <nico@getkirby.com>
 * @license MIT
 * @link https://getkirby.com
 */
abstract class Provider
{

    /**
     * Config settings
     *
     * @var array
     */
    protected $options;

    public function __construct(array $options = [])
    {
        $this->options = $options;
    }

    abstract public function search(string $query, array $options): array;

    abstract public function replace(array $objects): void;
    abstract public function insert(array $object): void;
    abstract public function update(array $object): void;
    abstract public function delete(string $id): void;
}
