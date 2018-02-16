<?php
declare(strict_types=1);

require_once 'src/Email.php';

use PHPUnit\Framework\TestCase;

final class EmailTest extends TestCase
{
    public function testCanBeCreatedFromValidEmailAddress()    
    {
        $email = new Email("aa@bb.fr");
        $this->assertInstanceOf(
            Email::class,
            $email->fromString('bb.fr')
        );
    }

}