<?php declare( strict_types = 1 );
namespace CodeKandis\Base64Codec;

use CodeKandis\Types\InvalidValueExceptionInterface;

/**
 * Represents the interface of any exception if a value is not a URI safe Base64 value.
 * @package codekandis/base64-codec
 * @author Christian Ramelow <info@codekandis.net>
 */
interface InvalidUriSafeBase64ValueExceptionInterface extends InvalidValueExceptionInterface
{
}
