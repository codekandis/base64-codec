<?php declare( strict_types = 1 );
namespace CodeKandis\Base64Codec;

use CodeKandis\Types\InvalidValueException;

/**
 * Represents an exception if the padding of a standard Base64 value is invalid.
 * @package codekandis/base64-codec
 * @author Christian Ramelow <info@codekandis.net>
 */
class InvalidStandardBase64PaddingException extends InvalidValueException implements InvalidStandardBase64PaddingExceptionInterface
{
	/**
	 * @inheritDoc
	 */
	public const string EXCEPTION_MESSAGE_DEFAULT = 'The padding of the standard Base64 value is invalid.';
}
