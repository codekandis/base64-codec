<?php declare( strict_types = 1 );
namespace CodeKandis\Base64Codec;

/**
 * Represents the interface of all Base64 format guards.
 * @package codekandis/base64-codec
 * @author Christian Ramelow <info@codekandis.net>
 */
interface Base64FormatGuardInterface
{
	/**
	 * Guards if a value is Base64 formatted and its padding is valid.
	 * @param string $value The value to guard.
	 * @throws InvalidStandardBase64ValueExceptionInterface The value is not Base64 formatted.
	 * @throws InvalidStandardBase64PaddingExceptionInterface The padding of the value is invalid.
	 */
	public function guardStandard( string $value ): void;

	/**
	 * Guards if a value is Base64 URI safe formatted.
	 * @param string $value The value to guard.
	 * @throws InvalidUriSafeBase64ValueExceptionInterface The value is not Base64 URI safe formatted.
	 */
	public function guardUriSafe( string $value ): void;
}
