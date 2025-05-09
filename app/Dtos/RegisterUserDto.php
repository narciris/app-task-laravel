<?php

namespace App\Dtos;

class RegisterUserDto
{

    private ?string $name;
    private ?string $email;
    private ?string $password;

    private ?string $password_confirmation;

    public function getPasswordConfirmation(): ?string
    {
        return $this->password_confirmation;
    }

    public function setPasswordConfirmation(?string $password_confirmation): void
    {
        $this->password_confirmation = $password_confirmation;
    }


    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(?string $name): void
    {
        $this->name = $name;
    }

    public function getEmail(): ?string
    {
        return $this->email;
    }

    public function setEmail(?string $email): void
    {
        $this->email = $email;
    }

    public function getPassword(): ?string
    {
        return $this->password;
    }

    public function setPassword(?string $password): void
    {
        $this->password = $password;
    }




}
