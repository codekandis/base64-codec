<?php declare( strict_types = 1 );
namespace CodeKandis\Base64Codec;

use Override;

/**
 * Represents an exception thrown if a value is not Base64 URI safe formatted.
 * @package codekandis/base64-codec
 * @author Christian Ramelow <info@codekandis.net>
 */
class InvalidStandardBase64PaddingException extends Base64Exception implements InvalidStandardBase64PaddingExceptionInterface
{
	/**
	 * Represents the exception message if the padding of a standard Base64 value is invalid.
	 * @var string
	 */
	public const string EXCEPTION_INVALID_STANDARD_BASE64_PADDING = 'The padding of the standard Base64 value is invalid.';

	/**
	 * @inheritDoc
	 */
	#[Override]
	public static function with_defaultMessage(): static
	{
		return new static( static::EXCEPTION_INVALID_STANDARD_BASE64_PADDING );
	}
}
