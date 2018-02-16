<?php
declare(strict_types=1);

require_once 'src/Email.php';

use PHPUnit\Framework\TestCase;

final class EmailTest extends TestCase
{
    public function testCanBeCreatedFromValidEmailAddress()    
    {
        $email = new Email("toto@gmail.com");
        $this->assertInstanceOf(
            Email::class,
                    $email->fromString('bb.fr')
        );
    }

}