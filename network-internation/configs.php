<?php
return [
    'sandbox'   => [
        'api_key'      =>  '',
        'outlet_ref'   =>  '',
        'access_token' =>  '',
        'token_url'    =>  "/identity/auth/access-token",
        'outlets'      =>  "/transactions/outlets",
    ],
    'live'      => [
        'api_key'      =>  '',
        'outlet_ref'   =>  '',
        'access_token' =>  '',
        'token_url'    =>  "/identity/auth/access-token",
        'outlets'      =>  "/transactions/outlets",
    ],
    'default_erros' => [
        '0'     =>	'Approved or completed successfully',
        '1'     =>	'Refer to card issuer',
        '2'     =>	'Refer to card issuers special conditions',
        '3'     =>	'Invalid merchant',
        '4'     =>	'Pick-up',
        '5'     =>	'Do not honor',
        '6'     =>	'Error',
        '7'     =>	'Pick-up card, special conditions',
        '8'     =>	'Honor with identification',
        '9'     =>	'Request in progress',
        '10'    =>	'Approved for partial amount',
        '11'    =>	'Approved (VIP)',
        '12'    =>	'Invalid transaction',
        '13'    =>	'Invalid amount',
        '14'    =>	'Invalid card number (no such number)',
        '15'    =>	'No such issuer',
        '16'    =>	'Approved, update track 3',
        '17'    =>	'Customer cancellation, reversal (unsupported)',
        '18'    =>	'Customer dispute, chargeback (future)',
        '19'    =>	'Re-enter transaction',
        '20'    =>	'Invalid response',
        '21'    =>	'No action taken, reversal (unsupported)',
        '22'    =>	'Suspected malfunction, reversal (unsupported)',
        '23'    =>	'Unacceptable transaction fee',
        '24'    =>	'File update not supported by receiver (only in 03xx)',
        '25'    =>	'Unable to locate record on file (only in 03xx)',
        '26'    =>	'Duplicate file update record, no action (only in 03xx)',
        '27'    =>	'File update field edit error (only in 03xx)',
        '28'    =>	'File update record locked out (only in 03xx)',
        '29'    =>	'File update not successful, contact acquirer (only in 03xx)',
        '30'    =>	'Format error',
        '31'    =>	'Bank not supported by switch',
        '32'    =>	'Completed partially, reversal (unsupported)',
        '33'    =>	'Expired card, pick-up',
        '34'    =>	'Suspected fraud, pick-up',
        '35'    =>	'Card acceptor contact acquirer, pick-up',
        '36'    =>	'Restricted card, pick-up',
        '37'    =>	'Card acceptor call acquirer security, pick-up',
        '38'    =>	'Allowable PIN tries exceeded, pick-up',
        '39'    =>	'No credit account',
        '40'    =>	'Requested function not supported',
        '41'    =>	'Lost card, pick-up',
        '42'    =>	'No universal account',
        '43'    =>	'Stolen card, pick-up',
        '44'    =>	'No investment account',
        '45'    =>	'Reserved for ISO use',
        '46'    =>	'Reserved for ISO use',
        '47'    =>	'Reserved for ISO use',
        '48'    =>	'Reserved for ISO use',
        '49'    =>	'Reserved for ISO use',
        '50'    =>	'Reserved for ISO use',
        '51'    =>	'Insufficient funds',
        '52'    =>	'No checking account',
        '53'    =>	'No savings account',
        '54'    =>	'Expired card',
        '55'    =>	'Incorrect PIN',
        '56'    =>	'No card record',
        '57'    =>	'Transaction not permitted to cardholder',
        '58'    =>	'Transaction not permitted to terminal (may also be a chargeback)',
        '59'    =>	'Suspected fraud',
        '60'    =>	'Card acceptor contact acquirer',
        '61'    =>	'Exceeds withdrawal amount limit',
        '62'    =>	'Restricted card',
        '63'    =>	'Security violation (may also be a chargeback)',
        '64'    =>	'Original amount incorrect, reversal (unsupported)',
        '65'    =>	'Exceeds withdrawal frequency limit',
        '66'    =>	'Card acceptor call acquirer security',
        '67'    =>	'Hard capture, pick-up',
        '68'    =>	'Response received too late, reversal (unsupported)',
        '69'    =>	'Reserved for ISO',
        '70'    =>	'Reserved for ISO',
        '71'    =>	'Reserved for ISO',
        '72'    =>	'Reserved for ISO',
        '73'    =>	'Reserved for ISO',
        '74'    =>	'Reserved for ISO',
        '75'    =>	'Allowable number of PIN tries exceeded',
        '76'    =>	'Key synchronization error',
        '77'    =>	'Reserved for private use',
        '78'    =>	'Customer not eligible for POS (Star SM)',
        '79'    =>	'Invalid digital signature',
        '80'    =>	'Stale dated transaction (Star SM)',
        '81'    =>	'Issuer requested standin',
        '82'    =>	'Count exceeds limit (VISANet)',
        '83'    =>	'Reserved for private use',
        '84'    =>	'Time limit for pre-authorization reached (VISANet)',
        '85'    =>	'Issuer has no reason to decline the transaction (Account Verification)',
        '86'    =>	'Cannot verify PIN (VISANet)',
        '87'    =>	'Check already posted',
        '88'    =>	'Information not on file',
        '89'    =>	'Card verification value (CVV) verification failed (no pickup)',
        '90'    =>	'Cutoff is in progress',
        '91'    =>	'Issuer or switch is inoperative',
        '92'    =>	'Financial institution or intermediate network unknown for routing',
        '93'    =>	'Transaction cannot be completed, violation of law',
        '94'    =>	'Duplication transaction',
        '95'    =>	'Reconcile error',
        '96'    =>	'System malfunction',
        '97'    =>	'Reserved for national use',
        '98'    =>	'Reserved for national use',
        '99'    =>	'Card network fault error'
    ]
];
