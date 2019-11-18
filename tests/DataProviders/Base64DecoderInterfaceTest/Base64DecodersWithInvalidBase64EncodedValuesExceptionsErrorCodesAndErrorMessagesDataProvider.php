<?php declare( strict_types = 1 );
namespace CodeKandis\Base64Codec\Tests\DataProviders\Base64DecoderInterfaceTest;

use ArrayIterator;
use CodeKandis\Base64Codec\Base64Decoder;
use CodeKandis\Base64Codec\Base64DecoderErrorCodes;
use CodeKandis\Base64Codec\Base64DecoderErrorMessages;
use CodeKandis\Base64Codec\Base64Exception;

/**
 * Represents a data provider providing initiated Base64 decoders with invalid Base64 encoded values and expected exceptions, error codes and error messages.
 * @package codekandis/base64-codec
 * @author Christian Ramelow <info@codekandis.net>
 */
class Base64DecodersWithInvalidBase64EncodedValuesExceptionsErrorCodesAndErrorMessagesDataProvider extends ArrayIterator
{
	/**
	 * Constructor method.
	 */
	public function __construct()
	{
		parent::__construct(
			[
				0 => [
					'base64Decoder'          => new Base64Decoder(),
					'invalidEncodedValue'    => 'OMOHw4I8w4c8w6_Cr8Oxw5c3OEI-w69Bw4vCoTRXw69jwqfDv1DDrljDuDRcw4rDocKhdDc_L1PCtcOawrLCt3h9MMKkwq_Dp8K7TQ',
					'expectedExceptionClass' => Base64Exception::class,
					'expectedErrorCode'      => Base64DecoderErrorCodes::BAD_BASE64_FORMAT,
					'expectedErrorMessage'   => Base64DecoderErrorMessages::BAD_BASE64_FORMAT
				],
				1 => [
					'base64Decoder'          => new Base64Decoder(),
					'invalidEncodedValue'    => '~!"§$%&/()?',
					'expectedExceptionClass' => Base64Exception::class,
					'expectedErrorCode'      => Base64DecoderErrorCodes::BAD_BASE64_FORMAT,
					'expectedErrorMessage'   => Base64DecoderErrorMessages::BAD_BASE64_FORMAT
				],
				2 => [
					'base64Decoder'          => new Base64Decoder(),
					'invalidEncodedValue'    => 'OMOHw4I8w4c8w6/Cr8Oxw5c3OEI+w69Bw4vCoTRXw69jwqfDv1DDrljDuDRcw4rDocKhdDc/L1PCtcOawrLCt3h9MMKkwq/Dp8K7TQ===',
					'expectedExceptionClass' => Base64Exception::class,
					'expectedErrorCode'      => Base64DecoderErrorCodes::BAD_BASE64_PADDING,
					'expectedErrorMessage'   => Base64DecoderErrorMessages::BAD_BASE64_PADDING
				]
			]
		);
	}
}
