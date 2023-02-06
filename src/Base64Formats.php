<?php declare( strict_types = 1 );
namespace CodeKandis\Base64Codec;

/**
 * Represents the valid Base64 formats.
 * @package codekandis/base64-codec
 * @author Christian Ramelow <info@codekandis.net>
 */
abstract class Base64Formats
{
	/**
	 * Stores the regular expression of the Base64 standard format.
	 * @var string
	 */
	public const string STANDARD_FORMAT = '^[A-Za-z0-9/\+]+=*$';

	/**
	 * Stores the unique character subset of the Base64 URI standard format in relation to the Base64 URI safe unique character subset.
	 * @var string
	 */
	public const array STANDARD_UNIQUE_CHARACTER_SUBSET = [
		'/',
		'+',
		'='
	];

	/**
	 * Stores the regular expression of the Base64 URI safe format.
	 * @var string
	 */
	public const string URI_SAFE_FORMAT = '^[A-Za-z0-9_\-]+$';

	/**
	 * Stores the unique character subset of the Base64 URI safe format in relation to the Base64 standard unique character subset.
	 * @var string
	 */
	public const array URI_SAFE_UNIQUE_CHARACTER_SUBSET = [
		'_',
		'-',
		''
	];
}
