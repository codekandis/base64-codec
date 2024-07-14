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
	 * Decodes a value from a standard Base64 value.
	 * @param string $value The standard Base64 value to decode.
	 * @return string The decoded value.
	 * @throws InvalidStandardBase64ValueExceptionInterface The value is not a standard Base64 value.
	 * @throws InvalidStandardBase64PaddingExceptionInterface The padding of the standard Base64 value is invalid.
	 */
	public function decodeFromStandard( string $value ): string;

	/**
	 * Decodes a value from a URI safe Base64 value.
	 * @param string $value The URI safe Base64 value to decode.
	 * @return string The decoded value.
	 * @throws InvalidUriSafeBase64ValueExceptionInterface The value is not a URI safe Base64 value.
	 */
	public function decodeFromUriSafe( string $value ): string;
}
