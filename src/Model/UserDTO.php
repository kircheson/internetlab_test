<?php

namespace App\Model;

use Symfony\Component\Validator\Constraints as Assert;

class UserDTO
{
    #[Assert\NotBlank(message: "Email не должен быть пустым")]
    #[Assert\Email(message: "The email '{{ value }}' is not a valid email.")]
    public string $email;

    #[Assert\NotBlank(message: "Пароль не должен быть пустым")]
    #[Assert\Length(min: 6, minMessage: "Пароль должен содержать минимум {{ limit }} символов.")]
    public string $password;

    public function getEmail(): string
    {
        return $this->email;
    }

    public function setEmail(string $email): void
    {
        $this->email = $email;
    }

    public function getPassword(): string
    {
        return $this->password;
    }

    public function setPassword(string $password): void
    {
        $this->password = $password;
    }
}