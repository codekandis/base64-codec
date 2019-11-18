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
	 * @throws Base64Exception The value is not Base64 formatted.
	 * @throws Base64Exception The padding of the value is invalid.
	 */
	public function guard( string $value ): void;

	/**
	 * Guards if a value is Base64 URI safe formatted.
	 * @param string $value The value to guard.
	 * @throws Base64Exception The value is not Base64 URI safe formatted.
	 */
	public function guardUriSafe( string $value ): void;
}
