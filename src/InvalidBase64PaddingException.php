<?php declare( strict_types = 1 );
namespace CodeKandis\Base64Codec;

/**
 * Represents an exception thrown if the padding of a Base64 value is invalid.
 * @package codekandis/base64-codec
 * @author Christian Ramelow <info@codekandis.net>
 */
class InvalidBase64PaddingException extends Base64Exception
{
}
