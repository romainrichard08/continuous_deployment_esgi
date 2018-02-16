<?php
declare(strict_types=1);

require_once 'src/Email.php';

use PHPUnit\Framework\TestCase;

final class EmailTest extends TestCase
{

    public function testCannotBeCreatedFromInvalidEmailAddress(): void
    {
        $this->expectException(InvalidArgumentException::class);

        Email::fromString('invalid');
    }
}