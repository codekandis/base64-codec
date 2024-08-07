# Changelog

All notable changes to this project will be documented in this file.

The format is based on [keep a changelog 1.1.0][xtlink-keep-a-changelog]
and this project adheres to [Semantic Versioning 2.0.0][xtlink-semantic-versioning].

## [3.0.0] - 2024-07-14

### Fixed

* encoding
* method naming
* PHPDoc

### Changed

* composer package
  * changed
    * description
    * keywords
    * require
      * `php` [>=8.3]
    * require-dev
      * `codekandis/phpunit` [^5.0.0]
  * added
    * version
    * require-dev
      * `rector/rector` [^1.0.5]
    * autoload-dev
      * psr-4
        * `CodeKandis\Base64Codec\Build\`
          * `build/`
* PHPUnit tests
  * configuration
  * externalized data providers
* error and exception handling
* `CODE_OF_CONDUCT.md`
* `README.md`
  * PHP version `8.3`
  * documentation

### Added

* type hints
* `Override` attributes
* rector
  * configuration script
  * shell script
* `.gitattributes` to ignore dev-assets

[3.0.0]: https://github.com/codekandis/json-codec/compare/2.1.0...3.0.0

---
## [2.1.0] - 2021-01-18

### Added

* meaningful exceptions for every exceptional case

### Updated

* all data providers to test against the new exceptions

[2.1.0]: https://github.com/codekandis/base64-codec/compare/2.0.0...2.1.0

---
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



[xtlink-keep-a-changelog]: http://keepachangelog.com/en/1.1.0/
[xtlink-semantic-versioning]: http://semver.org/spec/v2.0.0.html
