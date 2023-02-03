<?php declare( strict_types = 1 );
namespace CodeKandis\Base64Codec;

use CodeKandis\Types\InvalidValueException;

/**
 * Represents an exception thrown if a value is not Base64 formatted.
 * @package codekandis/base64-codec
 * @author Christian Ramelow <info@codekandis.net>
 */
class InvalidUriSafeBase64ValueException extends InvalidValueException implements InvalidUriSafeBase64ValueExceptionInterface
{
	/**
	 * @inheritDoc
	 */
	public const string EXCEPTION_MESSAGE_DEFAULT = 'The value is not a URI safe Base64 value.';
}
