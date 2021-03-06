<?php declare( strict_types = 1 );
namespace CodeKandis\Base64Codec\Tests\DataProviders\UnitTests\Base64FormatGuardInterfaceTest;

use ArrayIterator;
use CodeKandis\Base64Codec\Base64DecoderErrorCodes;
use CodeKandis\Base64Codec\Base64DecoderErrorMessages;
use CodeKandis\Base64Codec\Base64Exception;
use CodeKandis\Base64Codec\Base64FormatGuard;
use CodeKandis\Base64Codec\InvalidBase64PaddingException;
use CodeKandis\Base64Codec\ValueIsNotBase64FormattedException;

/**
 * Represents a data provider providing initiated Base64 format guards with invalid Base64 encoded values, expected exceptions, error codes and error messages.
 * @package codekandis/base64-codec
 * @author Christian Ramelow <info@codekandis.net>
 */
class Base64FormatGuardsWithInvalidBase64EncodedValuesExpectedExceptionsErrorCodesAndErrorMessagesDataProvider extends ArrayIterator
{
	public function __construct()
	{
		parent::__construct(
			[
				0 => [
					'base64FormatGuard'      => new Base64FormatGuard(),
					'invalidEncodedValue'    => 'OMOHw4I8w4c8w6_Cr8Oxw5c3OEI-w69Bw4vCoTRXw69jwqfDv1DDrljDuDRcw4rDocKhdDc_L1PCtcOawrLCt3h9MMKkwq_Dp8K7TQ',
					'expectedExceptionClass' => Base64Exception::class,
					'expectedErrorCode'      => Base64DecoderErrorCodes::BAD_BASE64_FORMAT,
					'expectedErrorMessage'   => Base64DecoderErrorMessages::BAD_BASE64_FORMAT
				],
				1 => [
					'base64FormatGuard'      => new Base64FormatGuard(),
					'invalidEncodedValue'    => 'OMOHw4I8w4c8w6_Cr8Oxw5c3OEI-w69Bw4vCoTRXw69jwqfDv1DDrljDuDRcw4rDocKhdDc_L1PCtcOawrLCt3h9MMKkwq_Dp8K7TQ',
					'expectedExceptionClass' => ValueIsNotBase64FormattedException::class,
					'expectedErrorCode'      => Base64DecoderErrorCodes::BAD_BASE64_FORMAT,
					'expectedErrorMessage'   => Base64DecoderErrorMessages::BAD_BASE64_FORMAT
				],
				2 => [
					'base64FormatGuard'      => new Base64FormatGuard(),
					'invalidEncodedValue'    => 'OMOHw4I8w4c8w6/Cr8Oxw5c3OEI+w69Bw4vCoTRXw69jwqfDv1DDrljDuDRcw4rDocKhdDc/L1PCtcOawrLCt3h9MMKkwq/Dp8K7TQ===',
					'expectedExceptionClass' => Base64Exception::class,
					'expectedErrorCode'      => Base64DecoderErrorCodes::BAD_BASE64_PADDING,
					'expectedErrorMessage'   => Base64DecoderErrorMessages::BAD_BASE64_PADDING
				],
				3 => [
					'base64FormatGuard'      => new Base64FormatGuard(),
					'invalidEncodedValue'    => 'OMOHw4I8w4c8w6/Cr8Oxw5c3OEI+w69Bw4vCoTRXw69jwqfDv1DDrljDuDRcw4rDocKhdDc/L1PCtcOawrLCt3h9MMKkwq/Dp8K7TQ===',
					'expectedExceptionClass' => InvalidBase64PaddingException::class,
					'expectedErrorCode'      => Base64DecoderErrorCodes::BAD_BASE64_PADDING,
					'expectedErrorMessage'   => Base64DecoderErrorMessages::BAD_BASE64_PADDING
				]
			]
		);
	}
}
