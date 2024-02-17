<?php declare( strict_types = 1 );
namespace CodeKandis\Base64Codec;

/**
 * Represents the interface of any exception if the padding of a standard Base64 value is invalid.
 * @package codekandis/base64-codec
 * @author Christian Ramelow <info@codekandis.net>
 */
interface InvalidStandardBase64PaddingExceptionInterface extends Base64ExceptionInterface
{
	/**
	 * Static constructor method.
	 * @return static
	 */
	public static function with_defaultMessage(): static;
}
