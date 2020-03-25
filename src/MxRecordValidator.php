<?php

namespace MailChecker;

class MxRecordValidator implements ValidatorInterface
{
    public function validate(string $email): bool
    {
        $emailArray = explode('@', $email);
        if (count($emailArray) !== 2) {
            return false;
        }
        return checkdnsrr($emailArray[1], 'MX');
    }
}