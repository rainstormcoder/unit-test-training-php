<?php
/** \author Alexandra Arnoux */
/** \date 29/04/2020 */
use PHPUnit\Framework\TestCase;

final class EmailTest extends TestCase
{/** \fn Cette fonction permet de tester la fonction de validation de l'email */
    public function testCanBeCreatedFromValidEmailAddress(): void
    {
        $this->assertInstanceOf(
            Email::class,
            Email::fromString('user@example.com')
        );
    }
    /** \fn Cette fonction permet de tester la fonction de validation de l'email */
    public function testCannotBeCreatedFromInvalidEmailAddress(): void
    {
        $this->expectException(InvalidArgumentException::class);

        Email::fromString('invalid');
    }
    /** \fn Cette fonction permet de tester la fonction peut etre utiliser comme une String */
    public function testCanBeUsedAsString(): void
    {
        $this->assertEquals(
            'user@example.com',
            Email::fromString('user@example.com')
        );
    }
}

