<?php declare( strict_types = 1 );
namespace CodeKandis\Base64Codec;

/**
 * Represents the interface of all Base64 encoders.
 * @package codekandis/base64-codec
 * @author Christian Ramelow <info@codekandis.net>
 */
interface Base64EncoderInterface
{
	/**
	 * Encodes a value into a Base64 string.
	 * @param string $value The value to encode.
	 * @param ?JsonEncoderOptions $options The encoding options.
	 * @return string The encoded Base64 string.
	 */
	public function encode( string $value ): string;

	/**
	 * Encodes a value into an URI safe Base64 string.
	 * @param string $value The value to encode.
	 * @param ?JsonEncoderOptions $options The encoding options.
	 * @return string The encoded Base64 string.
	 */
	public function encodeUriSafe( string $value ): string;
}
