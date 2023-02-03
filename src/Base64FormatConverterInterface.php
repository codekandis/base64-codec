<?php declare( strict_types = 1 );
namespace CodeKandis\Base64Codec;

/**
 * Represents the interface of all Base64 format converters.
 * @package codekandis/base64-codec
 * @author Christian Ramelow <info@codekandis.net>
 */
interface Base64FormatConverterInterface
{
	/**
	 * Converts a Base64 URI safe value into a Base64 standard format.
	 * @param string $value The Base64 URI safe value to convert.
	 * @return string The converted Base64 standard value.
	 */
	public function convertToStandard( string $value ): string;

	/**
	 * Converts a Base64 URI safe value into a Base64 standard format.
	 * * @param string $value The Base64 URI safe value to convert.
	 * * @return string The converted Base64 standard value.
	 * @throws InvalidUriSafeBase64ValueExceptionInterface The value is not URI safe Base64 formatted.
	 */
	public function convertGuardedToStandard( string $value ): string;

	/**
	 * Converts a Base64 standard value into a Base64 URI safe format.
	 * @param string $value The Base64 standard value to convert.
	 * @return string The converted Base64 URI safe value.
	 */
	public function convertToUriSafe( string $value ): string;

	/**
	 * Converts a Base64 standard value into a Base64 URI safe format.
	 * * @param string $value The Base64 standard value to convert.
	 * * @return string The converted Base64 URI safe value.
	 * @throws InvalidStandardBase64ValueExceptionInterface The value is not standard Base64 formatted.
	 * @throws InvalidStandardBase64PaddingExceptionInterface The padding of the standard Base64 value is invalid.
	 */
	public function convertGuardedToUriSafe( string $value ): string;
}
