<?php declare( strict_types = 1 );
namespace CodeKandis\Base64Codec\Tests\DataProviders\UnitTests\Base64DecoderInterfaceTest;

use ArrayIterator;
use CodeKandis\Base64Codec\Base64Decoder;
use CodeKandis\Base64Codec\Base64DecoderErrorCodes;
use CodeKandis\Base64Codec\Base64DecoderErrorMessages;
use CodeKandis\Base64Codec\Base64Exception;
use CodeKandis\Base64Codec\ValueIsNotBase64UriSafeFormattedException;

/**
 * Represents a data provider providing initiated Base64 decoders with invalid Base64 URI safe encoded values and expected exceptions, error codes and error messages.
 * @package codekandis/base64-codec
 * @author Christian Ramelow <info@codekandis.net>
 */
class Base64DecodersWithInvalidBase64UriSafeEncodedValuesExceptionsErrorCodesAndErrorMessagesDataProvider extends ArrayIterator
{
	/**
	 * Constructor method.
	 */
	public function __construct()
	{
		parent::__construct(
			[
				0 => [
					'base64Decoder'              => new Base64Decoder(),
					'invalidUriSafeEncodedValue' => 'OMOHw4I8w4c8w6/Cr8Oxw5c3OEI+w69Bw4vCoTRXw69jwqfDv1DDrljDuDRcw4rDocKhdDc/L1PCtcOawrLCt3h9MMKkwq/Dp8K7TQ==',
					'expectedExceptionClass'     => Base64Exception::class,
					'expectedErrorCode'          => Base64DecoderErrorCodes::BAD_BASE64_URI_SAFE_FORMAT,
					'expectedErrorMessage'       => Base64DecoderErrorMessages::BAD_BASE64_URI_SAFE_FORMAT
				],
				1 => [
					'base64Decoder'              => new Base64Decoder(),
					'invalidUriSafeEncodedValue' => 'OMOHw4I8w4c8w6/Cr8Oxw5c3OEI+w69Bw4vCoTRXw69jwqfDv1DDrljDuDRcw4rDocKhdDc/L1PCtcOawrLCt3h9MMKkwq/Dp8K7TQ==',
					'expectedExceptionClass'     => ValueIsNotBase64UriSafeFormattedException::class,
					'expectedErrorCode'          => Base64DecoderErrorCodes::BAD_BASE64_URI_SAFE_FORMAT,
					'expectedErrorMessage'       => Base64DecoderErrorMessages::BAD_BASE64_URI_SAFE_FORMAT
				],
				2 => [
					'base64Decoder'              => new Base64Decoder(),
					'invalidUriSafeEncodedValue' => '~!"§$%&/()?',
					'expectedExceptionClass'     => Base64Exception::class,
					'expectedErrorCode'          => Base64DecoderErrorCodes::BAD_BASE64_URI_SAFE_FORMAT,
					'expectedErrorMessage'       => Base64DecoderErrorMessages::BAD_BASE64_URI_SAFE_FORMAT
				],
				3 => [
					'base64Decoder'              => new Base64Decoder(),
					'invalidUriSafeEncodedValue' => '~!"§$%&/()?',
					'expectedExceptionClass'     => ValueIsNotBase64UriSafeFormattedException::class,
					'expectedErrorCode'          => Base64DecoderErrorCodes::BAD_BASE64_URI_SAFE_FORMAT,
					'expectedErrorMessage'       => Base64DecoderErrorMessages::BAD_BASE64_URI_SAFE_FORMAT
				]
			]
		);
	}
}
