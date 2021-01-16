# codekandis/base64-codec

[![Version][xtlink-version-badge]][srclink-changelog]
[![License][xtlink-license-badge]][srclink-license]
[![Minimum PHP Version][xtlink-php-version-badge]][xtlink-php-net]
![Code Coverage][xtlink-code-coverage-badge]

With the Base64 codec you will be able to encode into and decode from Base64 data in an object oriented way. It wraps PHP's functions [`base64_encode()`][xtlink-php-net-base64-encode] and [`base64_decode()`][xtlink-php-net-base64-decode].

## Index

* [Installation](#installation)
* [How to use](#how-to-use)

## Installation

Install the latest version with

```bash
$ composer require codekandis/base64-codec

```

## How to use

### Encoding values

The following examples show how to encode a value.

```php
$value = '8ÇÂ<Ç<ï¯ñ×78B>ïAË¡4Wïc§ÿPîXø4\Êá¡t7?/SµÚ²·x}0¤¯ç»M';

( new Base64Encoder() )->encode( $value );           // OMOHw4I8w4c8w6/Cr8Oxw5c3OEI+w69Bw4vCoTRXw69jwqfDv1DDrljDuDRcw4rDocKhdDc/L1PCtcOawrLCt3h9MMKkwq/Dp8K7TQ==
( new Base64Encoder() )->encodeUriSafe( $value );    // OMOHw4I8w4c8w6_Cr8Oxw5c3OEI-w69Bw4vCoTRXw69jwqfDv1DDrljDuDRcw4rDocKhdDc_L1PCtcOawrLCt3h9MMKkwq_Dp8K7TQ
```

### Decoding values

The following examples show how to decode a value.

```php
$value = 'OMOHw4I8w4c8w6/Cr8Oxw5c3OEI+w69Bw4vCoTRXw69jwqfDv1DDrljDuDRcw4rDocKhdDc/L1PCtcOawrLCt3h9MMKkwq/Dp8K7TQ==';

( new Base64Decoder() )->decode( $value );    // 8ÇÂ<Ç<ï¯ñ×78B>ïAË¡4Wïc§ÿPîXø4\Êá¡t7?/SµÚ²·x}0¤¯ç»M 

$valueUriSafe = 'OMOHw4I8w4c8w6_Cr8Oxw5c3OEI-w69Bw4vCoTRXw69jwqfDv1DDrljDuDRcw4rDocKhdDc_L1PCtcOawrLCt3h9MMKkwq_Dp8K7TQ';

( new Base64Decoder() )->decodeUriSafe( $valueUriSafe );    // 8ÇÂ<Ç<ï¯ñ×78B>ïAË¡4Wïc§ÿPîXø4\Êá¡t7?/SµÚ²·x}0¤¯ç»M
```

## Differences to PHP's Base64 functions

[`base64_decode()`][xtlink-php-net-base64-encode] accepts an additional argument [`$strict`][xtlink-php-net-base64-decode-arguments] to specify if it's forced to decode into an associative array. This argument is omitted in the [`Base64DecoderInterface`][srclink-base64-decoder-interface] while it's intended to always decode in strict mode.



[xtlink-version-badge]: https://img.shields.io/badge/version-2.0.0-blue.svg
[xtlink-license-badge]: https://img.shields.io/badge/license-MIT-yellow.svg
[xtlink-php-version-badge]: https://img.shields.io/badge/php-%3E%3D%207.4-8892BF.svg
[xtlink-code-coverage-badge]: https://img.shields.io/badge/coverage-100%25-green.svg
[xtlink-php-net]: https://php.net
[xtlink-php-net-base64-encode]: https://www.php.net/manual/en/function.base64-encode.php
[xtlink-php-net-base64-decode]: https://www.php.net/manual/en/function.base64-decode.php
[xtlink-php-net-base64-decode-arguments]: https://www.php.net/manual/en/function.base64-decode.php#refsect1-function.base64-decode-parameters

[srclink-changelog]: ./CHANGELOG.md
[srclink-license]: ./LICENSE
[srclink-base64-decoder-interface]: ./src/Base64DecoderInterface.php
[srclink-base64-decoder-options]: ./src/Base64DecoderOptions.php
