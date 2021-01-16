<?php declare( strict_types = 1 );
namespace CodeKandis\Base64Codec\Tests\UnitTests;

use CodeKandis\Base64Codec\Tests\DataProviders\UnitTests\Base64DecoderErrorCodesTranslatorTest\Base64DecoderErrorCodesTranslatorClassNamesDataProvider;
use CodeKandis\PhpUnit\TestCase;
use Iterator;

class Base64DecoderErrorCodesTranslatorTest extends TestCase
{
	/**
	 * Provides Base64 decoder error codes translators class names with expected Base64 decoder error codes translators class names.
	 * @return Iterator The Base64 decoder error codes translators class names with expected Base64 decoder error codes translators class names.
	 */
	public function Base64DecoderErrorCodesTranslatorClassNamesDataProvider(): Iterator
	{
		return new Base64DecoderErrorCodesTranslatorClassNamesDataProvider();
	}

	/**
	 * Tests if the instantiation of the Base64 decoder error codes translator passes.
	 * @param string $base64DecoderErrorCodesTranslatorClassName The class name of the Base64 decoder error codes translator to instantiate.
	 * @param string $expectedBase64DecoderErrorCodesTranslatorClassName The expected class name the Base64 decoder error codes translator is an instance of.
	 * @dataProvider Base64DecoderErrorCodesTranslatorClassNamesDataProvider
	 */
	public function testIfInstantiationReturnsCorrectly( string $base64DecoderErrorCodesTranslatorClassName, string $expectedBase64DecoderErrorCodesTranslatorClassName ): void
	{
		$base64DecoderErrorCodesTranslator = new $base64DecoderErrorCodesTranslatorClassName();

		static::assertInstanceOf( $expectedBase64DecoderErrorCodesTranslatorClassName, $base64DecoderErrorCodesTranslator );
	}
}
