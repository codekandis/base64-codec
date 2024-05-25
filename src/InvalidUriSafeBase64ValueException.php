<?php declare( strict_types = 1 );
namespace CodeKandis\Base64Codec;

use Override;

/**
 * Represents an exception if a value is not a URI safe Base64 value.
 * @package codekandis/base64-codec
 * @author Christian Ramelow <info@codekandis.net>
 */
class InvalidUriSafeBase64ValueException extends Base64Exception implements InvalidUriSafeBase64ValueExceptionInterface
{
	/**
	 * Represents the exception message if a value is not a URI safe Base64 value.
	 */
	public const string EXCEPTION_INVALID_URI_SAFE_BASE64_VALUE = 'The value is not a URI safe Base64 value.';

	/**
	 * @inheritDoc
	 */
	#[Override]
	public static function with_defaultMessage(): static
	{
		return new static( static::EXCEPTION_INVALID_URI_SAFE_BASE64_VALUE );
	}
}
