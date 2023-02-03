<?php declare( strict_types = 1 );
namespace CodeKandis\Base64Codec;

/**
 * Represents the interface of any Base64 decoder.
 * @package codekandis/base64-codec
 * @author Christian Ramelow <info@codekandis.net>
 */
interface Base64DecoderInterface
{
	/**
	 * Decodes a value from a Base64 string.
	 * @param string $value The Base64 string to decode.
	 * @return string The decoded value.
	 * @throws InvalidStandardBase64ValueExceptionInterface The value is not Base64 formatted.
	 * @throws InvalidStandardBase64PaddingExceptionInterface The padding of the value is invalid.
	 */
	public function decode( string $value ): string;

	/**
	 * Decodes a value from an URI safe Base64 string.
	 * @param string $value The URL safe Base64 string to decode.
	 * @return string The decoded value.
	 * @throws InvalidUriSafeBase64ValueExceptionInterface The value is not Base64 URI safe formatted.
	 */
	public function decodeUriSafe( string $value ): string;
}
