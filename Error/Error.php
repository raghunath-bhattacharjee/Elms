<?php
$errorText = null;
class CodeError
{

    // Sign Up Related Errors
    const USER_ALREADY_EXISTS = 100;

    const ALL_FIELD_IS_REQUIRED = 1;
    const PHONE_MUST_BE_TEN_CHAR = 2;
    const PASSWORD_AND_CONFIRM_PASSWORD_NOT_SAME = 3;
    const PASSWORD_MUST_BE_EIGHT_CHAR = 4;

    // Sign In Related Errors
    const INVALID_INFORMATION = 5;

    //Forgit Password Errors
    const EMAIL_NOT_FOUND = 6;

    // Course Related Errors
    const INVALID_COURSE_INFO = 7;

    // Server Errors
    const TRY_TO_PROCESS_DATA_AT_THIS_MOMENT = 1000;

    public static function hasError($errorCode)
    {
        switch ($errorCode) {
            case self::ALL_FIELD_IS_REQUIRED:
                $errorText = '<span> All Field Is Required </span>';
                break;

            case self::USER_ALREADY_EXISTS:
                $errorText = '<span> Email Is Already Exists. Please try another email address.</span>';
                break;

            case self::PASSWORD_AND_CONFIRM_PASSWORD_NOT_SAME:
                $errorText = '<span> Password and confirm password must be same</span>';
                break;

            case self::PASSWORD_MUST_BE_EIGHT_CHAR:
                $errorText = '<span> Password must be 8 characters long. </span>';
                break;

            case self::PHONE_MUST_BE_TEN_CHAR:
                $errorText = '<span> Phone must be 10 characters long. </span>';
                break;

            case self::TRY_TO_PROCESS_DATA_AT_THIS_MOMENT:
                $errorText = '<span> Try to process data at this moment. </span>';
                break;

            case self::INVALID_INFORMATION:
                $errorText = '<span> Invalid information';
                break;

            case self::EMAIL_NOT_FOUND:
                $errorText = '<span> Email not found</span>';
                break;

            case self::INVALID_COURSE_INFO:
                $errorText = '<span> Invalid course information</span>';
                break;

            default:
                $errorText = null;
                break;
        }
        return $errorText;
    }
}
