<?php

namespace MailChecker;

class RegexpValidator implements ValidatorInterface
{
    public function validate(string $email): bool
    {
        return ! ! filter_var($email, FILTER_VALIDATE_EMAIL, FILTER_FLAG_EMAIL_UNICODE);
    }
}