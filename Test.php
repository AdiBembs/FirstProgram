<?php
/**
 * Created by PhpStorm.
 * User: Lola
 * Date: 2/13/2019
 * Time: 9:51 PM
 */


declare(strict_types=1);

use FirstProgram\FourLetterWord\TestCase;

final class Test extends TestCase
{
    public function testCanBeCreatedFromValidFourLetterWordString(): void
    {
        $this->assertInstanceOf(
            Test::class,
            Test::fromString('abcdefghijklmnopqrstuvwx', 'ABCDEFGHIJKLMNOPQRSTUVWXYZ')
        );
    }

    public function testCannotBeCreatedFromInvalidFourLetterWordString(): void
    {
        $this->expectException(InvalidArgumentException::class);
        Test::fromString('invalid');
    }

    public function testCanBeUsedAsString(): void
    {
        $this->assertEquals(
            ('abcdefghijklmnopqrstuvwx', 'ABCDEFGHIJKLMNOPQRSTUVWXYZ'),
            Email::fromString('abcdefghijklmnopqrstuvwx', 'ABCDEFGHIJKLMNOPQRSTUVWXYZ')
        );
    }
}
