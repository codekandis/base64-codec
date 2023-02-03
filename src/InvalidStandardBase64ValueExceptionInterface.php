<?php declare( strict_types = 1 );
namespace CodeKandis\Base64Codec;

/**
 * Represents the interface of any exception if a value is not standard Base64 formatted.
 * @package codekandis/base64-codec
 * @author Christian Ramelow <info@codekandis.net>
 */
interface InvalidStandardBase64ValueExceptionInterface extends Base64ExceptionInterface
{
	/**
	 * Static constructor method.
	 * @return static
	 */
	public static function with_defaultMessage(): static;
}
