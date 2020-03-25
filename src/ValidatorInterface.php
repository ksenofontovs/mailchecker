<?php

namespace MailChecker;

interface ValidatorInterface
{
    public function validate(string $email): bool;
}