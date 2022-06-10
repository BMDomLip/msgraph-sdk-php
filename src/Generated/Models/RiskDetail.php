<?php

namespace Microsoft\Graph\Generated\Models;

use Microsoft\Kiota\Abstractions\Enum;

class RiskDetail extends Enum {
    public const NONE = 'none';
    public const ADMIN_GENERATED_TEMPORARY_PASSWORD = 'adminGeneratedTemporaryPassword';
    public const USER_PERFORMED_SECURED_PASSWORD_CHANGE = 'userPerformedSecuredPasswordChange';
    public const USER_PERFORMED_SECURED_PASSWORD_RESET = 'userPerformedSecuredPasswordReset';
    public const ADMIN_CONFIRMED_SIGNIN_SAFE = 'adminConfirmedSigninSafe';
    public const AI_CONFIRMED_SIGNIN_SAFE = 'aiConfirmedSigninSafe';
    public const USER_PASSED_M_F_A_DRIVEN_BY_RISK_BASED_POLICY = 'userPassedMFADrivenByRiskBasedPolicy';
    public const ADMIN_DISMISSED_ALL_RISK_FOR_USER = 'adminDismissedAllRiskForUser';
    public const ADMIN_CONFIRMED_SIGNIN_COMPROMISED = 'adminConfirmedSigninCompromised';
    public const HIDDEN = 'hidden';
    public const ADMIN_CONFIRMED_USER_COMPROMISED = 'adminConfirmedUserCompromised';
    public const UNKNOWN_FUTURE_VALUE = 'unknownFutureValue';
}
