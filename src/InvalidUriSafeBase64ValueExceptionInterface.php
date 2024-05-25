<?php declare( strict_types = 1 );
namespace CodeKandis\Base64Codec;

/**
 * Represents the interface of any exception if a value is not a URI safe Base64 value.
 * @package codekandis/base64-codec
 * @author Christian Ramelow <info@codekandis.net>
 */
interface InvalidUriSafeBase64ValueExceptionInterface extends Base64ExceptionInterface
{
	/**
	 * Static constructor method.
	 */
	public static function with_defaultMessage(): static;
}
