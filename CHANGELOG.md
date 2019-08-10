# Changelog

All notable changes to this project will be documented in this file.

The format is based on [keep a changelog][xtlink-keep-a-changelog]
and this project adheres to [Semantic Versioning 2.0.0][xtlink-semantic-versioning].

## 1.0.0 - 2019-08-11

### Added

* `Base64DecoderErrorCodesInterpreter` interpretes the error code of a `Base64Exception` into its corresponding error message
* `Base64Converter` converts between Base64 and Base64 URI safe values
* `Base64FormatGuard` guards the valid charsets and the padding of the Base64 and Base64 URI safe values
* `Base64Encoder` encoding values into a Base64 or Base64 URI safe string
* `Base64Decoder` decoding values from a Base64 or Base64 URI safe string
* `PHPUnit` tests
* `README.md`



[xtlink-keep-a-changelog]: http://keepachangelog.com/en/1.0.0/
[xtlink-semantic-versioning]: http://semver.org/spec/v2.0.0.html
