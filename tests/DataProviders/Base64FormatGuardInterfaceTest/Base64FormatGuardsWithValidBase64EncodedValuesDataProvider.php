<?php declare( strict_types = 1 );
namespace CodeKandis\Base64Codec\Tests\DataProviders\Base64FormatGuardInterfaceTest;

use ArrayIterator;
use CodeKandis\Base64Codec\Base64FormatGuard;

/**
 * Represents a data provider providing initiated Base64 format guards with valid Base64 encoded values.
 * @package codekandis/base64-codec
 * @author Christian Ramelow <info@codekandis.net>
 */
class Base64FormatGuardsWithValidBase64EncodedValuesDataProvider extends ArrayIterator
{
	public function __construct()
	{
		parent::__construct(
			[
				0 => [
					'base64FormatGuard' => new Base64FormatGuard(),
					'validEncodedValue' => 'OMOHw4I8w4c8w6/Cr8Oxw5c3OEI+w69Bw4vCoTRXw69jwqfDv1DDrljDuDRcw4rDocKhdDc/L1PCtcOawrLCt3h9MMKkwq/Dp8K7TQ=='
				],
				1 => [
					'base64FormatGuard' => new Base64FormatGuard(),
					'validEncodedValue' => 'OMOHw4I8w4c8w6/Cr8Oxw5c3OEI+w69Bw4vCoTRXw69jwqfDv1DDrljDuDRcw4rDocKhdDc/L1PCtcOawrLCt3h9MMKkwq/Dp8K7TQ'
				]
			]
		);
	}
}
