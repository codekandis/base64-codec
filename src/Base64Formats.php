<?php declare( strict_types = 1 );
namespace CodeKandis\Base64Codec;

use CodeKandis\Types\BaseObject;

/**
 * Represents an enumeration of valid Base64 formats.
 * @package codekandis/base64-codec
 * @author Christian Ramelow <info@codekandis.net>
 */
abstract class Base64Formats extends BaseObject
{
	/**
	 * Stores the regular expression of the standard Base64 format.
	 */
	public const string STANDARD_FORMAT = '^[A-Za-z0-9/\+]+=*$';

	/**
	 * Stores the unique character subset of the standard Base64 format in relation to the unique character subset of the URI safe Base64 format.
	 * @var string[]
	 */
	public const array STANDARD_UNIQUE_CHARACTER_SUBSET = [
		'/',
		'+',
		'='
	];

	/**
	 * Stores the regular expression of the URI safe Base64 format.
	 */
	public const string URI_SAFE_FORMAT = '^[A-Za-z0-9_\-]+$';

	/**
	 * Stores the unique character subset of the URI safe Base64 format in relation to the unique character subset of the standard Base64 format.
	 * @var string[]
	 */
	public const array URI_SAFE_UNIQUE_CHARACTER_SUBSET = [
		'_',
		'-',
		''
	];
}
