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
        $this->ensureIsFourLetters($UserWord);

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

    /**
     * @param string $UserWord
     */
    private function ensureIsFourLetters(string $UserWord): void
    {
        if (strlen($UserWord) != 4) {
            throw new InvalidArgumentException(
                sprintf(
                    '"%s" is not a four letter word',
                    $UserWord
                )
            );
        }
    }
}