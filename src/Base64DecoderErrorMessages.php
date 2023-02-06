<?php declare( strict_types = 1 );
namespace CodeKandis\Base64Codec;

/**
 * Represents the error messages of the Base64 decoder.
 * @package codekandis/base64-codec
 * @author Christian Ramelow <info@codekandis.net>
 */
abstract class Base64DecoderErrorMessages
{
	/**
	 * The value is not Base64 formatted.
	 * @var string
	 */
	public const string BAD_BASE64_FORMAT = 'The value is not Base64 formatted.';

	/**
	 * The value is not Base64 URI safe formatted.
	 * @var string
	 */
	public const string BAD_BASE64_URI_SAFE_FORMAT = 'The value is not Base64 URI safe formatted.';

	/**
	 * The padding of the value is invalid.
	 * @int string
	 */
	public const string BAD_BASE64_PADDING = 'The padding of the value is invalid.';
}
