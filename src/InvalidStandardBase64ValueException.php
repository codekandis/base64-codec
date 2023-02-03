<?php declare( strict_types = 1 );
namespace CodeKandis\Base64Codec;

use Override;

/**
 * Represents an exception thrown if the padding of a Base64 value is invalid.
 * @package codekandis/base64-codec
 * @author Christian Ramelow <info@codekandis.net>
 */
class InvalidStandardBase64ValueException extends Base64Exception implements InvalidStandardBase64ValueExceptionInterface
{
	/**
	 * Represents the error message if a value is not a standard Base64 value.
	 * @var string
	 */
	public const string ERROR_INVALID_STANDARD_BASE64_VALUE = 'The value is not a standard Base64 value.';

	/**
	 * @inheritDoc
	 */
	#[Override]
	public static function with_defaultMessage(): static
	{
		return new static( static::ERROR_INVALID_STANDARD_BASE64_VALUE );
	}
}
