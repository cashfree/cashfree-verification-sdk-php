# Cashfree Verification PHP SDK
![GitHub](https://img.shields.io/github/license/cashfree/cashfree-verification-sdk-php) ![Discord](https://img.shields.io/discord/931125665669972018?label=discord) ![GitHub last commit (branch)](https://img.shields.io/github/last-commit/cashfree/cashfree-verification-sdk-php/master) ![GitHub release (with filter)](https://img.shields.io/github/v/release/cashfree/cashfree-verification-sdk-php?label=latest) ![GitHub forks](https://img.shields.io/github/forks/cashfree/cashfree-verification-sdk-php)

The Cashfree Verification PHP SDK offers a convenient solution to access [Cashfree Verification APIs](https://docs.cashfree.com/reference/verification-api-overview) from a server-side Go  applications. 



## Documentation

Cashfree's Verification API Documentation - https://docs.cashfree.com/reference/verification-api-overview

Try out our interactive guides at [Cashfree Dev Studio](https://www.cashfree.com/devstudio) !

## Getting Started

`Note:` This README is for the current branch and not necessarily what's released in `Composer`

### Installation
```bash
composer require cashfree/cashfree-verification
```
### Configuration

```php
\Cashfree\CashfreeVrs::$XClientId = "<x-client-id>";
\Cashfree\CashfreeVrs::$XClientSecret = "<x-client-secret>";
\Cashfree\CashfreeVrs::$XEnvironment = Cashfree\CashfreeVrs::$SANDBOX;
```

Generate your API keys (x-client-id , x-client-secret) from [Cashfree Merchant Dashboard](https://merchant.cashfree.com/merchants/login)

```php
$cashfree = new \Cashfree\CashfreeVrs();

$voter_id_request = new \Cashfree\Model\VoterIdRequestSchema();
$voter_id_request->setEpicNumber("UAI4574761");
$voter_id_request->setVerificationId("test12334");


try {
    $result = $cashfree->VrsVoterIdVerification($voter_id_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VrsVoterIdVerification: ', $e->getMessage(), PHP_EOL;
}



## Licence

Apache Licensed. See [LICENSE.md](LICENSE.md) for more details
