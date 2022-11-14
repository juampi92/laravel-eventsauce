<?php

namespace Spatie\LaravelEventSauce\Tests\TestClasses;

use EventSauce\EventSourcing\Message;
use EventSauce\EventSourcing\MessageConsumer;
use PHPUnit\Framework\Assert;

class TestConsumer implements MessageConsumer
{
    /** @var Message[] */
    protected array $handledMessages = [];

    public function handle(Message $message): void
    {
        $this->handledMessages[] = $message;
    }

    public function assertHandledMessageCount(int $expectedCount)
    {
        $actualCount = count($this->handledMessages);

        Assert::assertCount($expectedCount, $this->handledMessages, "Expected {$expectedCount} handled messages, but {$actualCount} were actually handled.");
    }
}
