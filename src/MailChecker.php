<?php

namespace MailChecker;

class MailChecker
{

    private $validators = [
        RegexpValidator::class,
        MxRecordValidator::class
    ];

    public function check(string $email): bool
    {
        foreach ($this->validators as $validator) {
            $v = new $validator;
            if (!$v->validate($email)) {
                return false;
            }
        }
        return true;


    }
}