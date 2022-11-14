<?php

namespace Spatie\LaravelEventSauce\Tests\TestClasses;

use EventSauce\EventSourcing\AggregateRootId;

class Identifier implements AggregateRootId
{
    /** @var string */
    protected $id;

    public function __construct(string $id)
    {
        $this->id = $id;
    }

    public function toString(): string
    {
        return $this->id;
    }

    public static function fromString(string $aggregateRootId): static
    {
        return new static($aggregateRootId);
    }
}
