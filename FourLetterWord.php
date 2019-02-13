<?php
/**
 * Created by PhpStorm.
 * User: Aditya
 * Date: 2/13/2019
 * Time: 6:02 PM
 */
declare(strict_types=1);

class FourLetterWord
{
    private $UserWord;

    private function __construct(string $UserWord)
    {
        $this->ensureIsValidEmail($UserWord);

        $this->UserWord = $UserWord;
    }

    public static function fromString(string $UserWord): self
    {
        return new self($UserWord);
    }

    public function __toString(): string
    {
        return $this->UserWord;
    }

    private function ensureIsValidEmail(string $UserWord): void
    {
        if (!filter_var($UserWord, FILTER_VALIDATE_EMAIL)) {
            throw new InvalidArgumentException(
                sprintf(
                    '"%s" is not a valid email address',
                    $UserWord
                )
            );
        }
    }
}