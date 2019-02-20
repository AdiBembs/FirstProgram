<?php
/**
 * Created by PhpStorm.
 * User: Lola
 * Date: 2/13/2019
 * Time: 9:51 PM
 */


declare(strict_types=1);

use FirstProgram\FourLetterWord\TestCase;

final class FourLetterWordTest extends TestCase
{
    public function testCanBeCreatedFromValidFourLetterWordString(): void
    {
        $this->assertInstanceOf(
            FourLetterWord::class,
            FourLetterWord::fromString('abcdefghijklmnopqrstuvwx'), ('ABCDEFGHIJKLMNOPQRSTUVWXYZ')
        );
    }

    public function testCannotBeCreatedFromInvalidFourLetterWordString(): void
    {
        $this->expectException(InvalidArgumentException::class);
        FourLetterWord::fromString('invalid');
    }

    public function testCanBeUsedAsString(): void
    {
        $this->assertEquals(
            ('abcdefghijklmnopqrstuvwx'), ('ABCDEFGHIJKLMNOPQRSTUVWXYZ'),
            FourLetterWord::fromString('abcdefghijklmnopqrstuvwx'), ('ABCDEFGHIJKLMNOPQRSTUVWXYZ')
        );
    }
}
