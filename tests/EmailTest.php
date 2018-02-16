<?php
declare(strict_types=1);

require_once 'src/Email.php';

use PHPUnit\Framework\TestCase;

final class EmailTest extends TestCase
{

    public function testCannotBeCreatedFromInvalidEmailAddress(): void
    {
        $email = new Email("toto@hotmail.fr")
        $this->expectException(InvalidArgumentException::class);
        $email->fromString('invalid');
    }
}