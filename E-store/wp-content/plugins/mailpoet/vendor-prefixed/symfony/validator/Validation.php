<?php
 namespace MailPoetVendor\Symfony\Component\Validator; if (!defined('ABSPATH')) exit; use MailPoetVendor\Symfony\Component\Validator\Validator\ValidatorInterface; final class Validation { public static function createValidator() : \MailPoetVendor\Symfony\Component\Validator\Validator\ValidatorInterface { return self::createValidatorBuilder()->getValidator(); } public static function createValidatorBuilder() : \MailPoetVendor\Symfony\Component\Validator\ValidatorBuilder { return new \MailPoetVendor\Symfony\Component\Validator\ValidatorBuilder(); } private function __construct() { } } 