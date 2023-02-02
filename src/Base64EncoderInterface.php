<?php declare( strict_types = 1 );
namespace CodeKandis\Base64Codec;

/**
 * Represents the interface of any Base64 encoder.
 * @package codekandis/base64-codec
 * @author Christian Ramelow <info@codekandis.net>
 */
interface Base64EncoderInterface
{
	/**
	 * Encodes a value into a standard Base64 value.
	 * @param string $value The value to encode.
	 * @return string The encoded standard Base64 value.
	 */
	public function encodeToStandard( string $value ): string;

	/**
	 * Encodes a value into a URI safe Base64 value.
	 * @param string $value The value to encode.
	 * @return string The encoded URI safe Base64 value.
	 */
	public function encodeToUriSafe( string $value ): string;
}
