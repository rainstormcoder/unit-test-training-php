<?php 
/** @author Alexandra Arnoux */
/** @date 29/04/2020 */
/** @class Email Email.php */
final class Email
{
    private $email; /**@attribut email de type string */

     /** Cette fonction permet de construire l'objet */
    private function __construct(string $email)
    {    /*** @param email */
        $this->ensureIsValidEmail($email);

        $this->email = $email;
    }

    /** La fonction fromString permet de  */
    public static function fromString(string $email): self
    {    /*** @param email */
        return new self($email);
    }

     /** La fonction __toString() permet d'afficher l'objet */
    public function __toString(): string
    {
        return $this->email;
    }

    /**
 * Fonction ensureIsValidEmail retourne l'email
 * @return string email
 */
    private function ensureIsValidEmail(string $email): void
    {  
          if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            throw new InvalidArgumentException(
                sprintf(
                    '"%s" is not a valid email address',
                    $email
                )
            );
        }
    }
}