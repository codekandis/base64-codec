<?php declare( strict_types = 1 );
namespace CodeKandis\Base64Codec;

use CodeKandis\Types\InvalidValueExceptionInterface;

/**
 * Represents the interface of any exception if the padding of a standard Base64 value is invalid.
 * @package codekandis/base64-codec
 * @author Christian Ramelow <info@codekandis.net>
 */
interface InvalidStandardBase64PaddingExceptionInterface extends InvalidValueExceptionInterface
{
}
