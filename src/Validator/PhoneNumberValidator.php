<?php

namespace App\Validator;
use Symfony\Component\Validator\Constraint;
use Symfony\Component\Validator\ConstraintValidator;

class PhoneNumberValidator extends ConstraintValidator
{
    public function validate($value, Constraint $constraint) {

        $phoneNumberUtil = \libphonenumber\PhoneNumberUtil::getInstance();

        if(!empty($value)){
            try {
                $phoneNumberObject = $phoneNumberUtil->parse($value, 'FR');

                if ($phoneNumberUtil->isValidNumber($phoneNumberObject) === false ){
                    return $this->context
                        ->buildViolation($constraint->message)
                        ->addViolation()
                        ;
                }
            }
            catch(\Exception $e){
                return $this->context
                    ->buildViolation($constraint->message)
                    ->addViolation()
                    ;
            }
        }
    }
}