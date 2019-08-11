<?php declare( strict_types = 1 );
namespace CodeKandis\Base64Codec;

/**
 * Represents the Base64 decoder error codes.
 * @package codekandis/base64-codec
 * @author Christian Ramelow <info@codekandis.net>
 */
abstract class Base64DecoderErrorCodes
{
	/**
	 * The value is not Base64 formatted.
	 * @var int
	 */
	public const BAD_BASE64_FORMAT = 1;

	/**
	 * The value is not Base64 URI safe formatted.
	 * @var int
	 */
	public const BAD_BASE64_URI_SAFE_FORMAT = 2;

	/**
	 * The padding of the value is invalid.
	 * @int int
	 */
	public const BAD_BASE64_PADDING = 3;
}
