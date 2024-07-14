<?php declare( strict_types = 1 );
namespace CodeKandis\Base64Codec;

/**
 * Represents the interface of any Base64 format converter.
 * @package codekandis/base64-codec
 * @author Christian Ramelow <info@codekandis.net>
 */
interface Base64FormatConverterInterface
{
	/**
	 * Converts a Base64 URI safe value into a Base64 standard format and guards if the value to convert is a URI safe Base64 value.
	 * @param string $value The URI safe Base64 value to convert.
	 * @return string The converted standard Base64 value.
	 * @throws InvalidUriSafeBase64ValueExceptionInterface The value is not URI safe Base64 formatted.
	 */
	public function convertGuardedToStandard( string $value ): string;

	/**
	 * Converts a URI safe Base64 value into a standard Base64 value.
	 * @param string $value The URI safe Base64 value to convert.
	 * @return string The converted standard Base64 value.
	 */
	public function convertToStandard( string $value ): string;

	/**
	 * Converts a Base64 standard value into a Base64 URI safe format and guards if the value to convert is a standard Base64 value
	 * @param string $value The standard Base64 value to convert.
	 * @return string The converted URI safe Base64 value.
	 * @throws InvalidStandardBase64ValueExceptionInterface The value is not standard Base64 formatted.
	 * @throws InvalidStandardBase64PaddingExceptionInterface The padding of the standard Base64 value is invalid.
	 */
	public function convertGuardedToUriSafe( string $value ): string;

	/**
	 * Converts a standard Base64 value into a URI safe Base64 value.
	 * @param string $value The standard Base64 value to convert.
	 * @return string The converted URI safe Base64 value.
	 */
	public function convertToUriSafe( string $value ): string;
}
