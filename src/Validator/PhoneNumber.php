<?php

namespace App\Validator;
use Symfony\Component\Validator\Constraint;

#[\Attribute]
class PhoneNumber extends Constraint
{
    public $message = "Ce numéro de téléphone n'est pas valide.";
}