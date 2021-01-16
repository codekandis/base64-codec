<?php declare( strict_types = 1 );
namespace CodeKandis\Base64Codec\Tests\DataProviders\UnitTests\Base64FormatConverterInterfaceTest;

use ArrayIterator;
use CodeKandis\Base64Codec\Base64FormatConverter;

/**
 * Represents a data provider providing initiated Base64 format converters with Base64 encoded values and expected Base64 URI safe encoded values.
 * @package codekandis/base64-codec
 * @author Christian Ramelow <info@codekandis.net>
 */
class Base64FormatConvertersWithBase64EncodedValuesAndExpectedBase64UriSafeEncodedValuesDataProvider extends ArrayIterator
{
	public function __construct()
	{
		parent::__construct(
			[
				0 => [
					'base64FormatConverter' => new Base64FormatConverter(),
					'value'                 => 'OMOHw4I8w4c8w6/Cr8Oxw5c3OEI+w69Bw4vCoTRXw69jwqfDv1DDrljDuDRcw4rDocKhdDc+L1PCtcOawrLCt3h9MMKkwq/Dp8K7TQ==',
					'expectedUriSafeValue'  => 'OMOHw4I8w4c8w6_Cr8Oxw5c3OEI-w69Bw4vCoTRXw69jwqfDv1DDrljDuDRcw4rDocKhdDc-L1PCtcOawrLCt3h9MMKkwq_Dp8K7TQ'
				]
			]
		);
	}
}
