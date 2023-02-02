<?php declare( strict_types = 1 );
namespace CodeKandis\Base64Codec;

/**
 * Represents the interface of any Base64 format guard.
 * @package codekandis/base64-codec
 * @author Christian Ramelow <info@codekandis.net>
 */
interface Base64FormatGuardInterface
{
	/**
	 * Guards if a value is standard Base64 value and its padding is valid.
	 * @param string $value The value to guard.
	 * @throws InvalidStandardBase64ValueExceptionInterface The value is not a standard Base64 value.
	 * @throws InvalidStandardBase64PaddingExceptionInterface The padding of the standard Base64 value is invalid.
	 */
	public function guardStandard( string $value ): void;

	/**
	 * Guards if a value is a URI safe Base64 value.
	 * @param string $value The value to guard.
	 * @throws InvalidUriSafeBase64ValueExceptionInterface The value is not a URI safe Base64 value.
	 */
	public function guardUriSafe( string $value ): void;
}
