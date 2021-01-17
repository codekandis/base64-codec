# Changelog

All notable changes to this project will be documented in this file.

The format is based on [keep a changelog][xtlink-keep-a-changelog]
and this project adheres to [Semantic Versioning 2.0.0][xtlink-semantic-versioning].

## [2.0.0] - 2021-01-17

### Updated

* composer package dependencies
    * removed
        * `sensiolabs/security-checker`
        * `phpunit/phpunit`
        * `codekandis/code-message-interpreter`
    * updated
        * `php` [^7.4]
    * added
        * `codekandis/phpunit` [^2]
        * `codekandis/constants-classes-translator` [^1]
* refactored `Base64DecoderErrorCodesInterpreter` to `Base64DecoderErrorCodesTranslator`

### Added

* `PHPUnit` tests for the `Base64DecoderErrorCodesTranslator`

[2.0.0]: https://github.com/codekandis/base64-codec/compare/1.1.0...2.0.0

---
## [1.1.0] - 2020-10-24

### Updated

* composer package dependencies
    * removed
        * `codekandis/error-messages-interpreter`
    * added
        * `codekandis/code-message-interpreter` [^1]

[1.1.0]: https://github.com/codekandis/base64-codec/compare/1.0.0...1.1.0

---
## [1.0.0] - 2019-08-11

### Added

* `Base64DecoderErrorCodesInterpreter` interpretes the error code of a `Base64Exception` into its corresponding error message
* `Base64Converter` converts between Base64 and Base64 URI safe values
* `Base64FormatGuard` guards the valid charsets and the padding of the Base64 and Base64 URI safe values
* `Base64Encoder` encoding values into a Base64 or Base64 URI safe string
* `Base64Decoder` decoding values from a Base64 or Base64 URI safe string
* `PHPUnit` tests
* `README.md`

[1.0.0]: https://github.com/codekandis/base64-codec/tree/1.0.0



[xtlink-keep-a-changelog]: http://keepachangelog.com/en/1.0.0/
[xtlink-semantic-versioning]: http://semver.org/spec/v2.0.0.html
