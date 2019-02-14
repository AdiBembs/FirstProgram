<?php
/**
 * Created by PhpStorm.
 * User: Lola
 * Date: 2/13/2019
 * Time: 9:51 PM
 */


declare(strict_types=1);

use FirstProgram\FourLetterWord\Test;

final class FourLetterWord extends Test
{
    public function testCanBeCreatedFromValidEmailAddress(): void
    {
        $this->assertInstanceOf(
            Email::class,
            Email::fromString('user@example.com')
        );
    }

    public function testCannotBeCreatedFromInvalidEmailAddress(): void
    {
        $this->expectException(InvalidArgumentException::class);

        Email::fromString('invalid');
    }

    public function testCanBeUsedAsString(): void
    {
        $this->assertEquals(
            'user@example.com',
            Email::fromString('user@example.com')
        );
    }
}
