<?php declare( strict_types = 1 );
namespace CodeKandis\Base64Codec\Tests\UnitTests;

use CodeKandis\Base64Codec\Base64DecoderInterface;
use CodeKandis\Base64Codec\InvalidStandardBase64PaddingExceptionInterface;
use CodeKandis\Base64Codec\InvalidStandardBase64ValueExceptionInterface;
use CodeKandis\Base64Codec\InvalidUriSafeBase64ValueExceptionInterface;
use CodeKandis\Base64Codec\Tests\DataProviders\UnitTests\Base64DecoderInterfaceTest\Base64DecodersWithInvalidStandardBase64PaddedValueExpectedThrowableClassNameAndExpectedThrowableMessageDataProvider;
use CodeKandis\Base64Codec\Tests\DataProviders\UnitTests\Base64DecoderInterfaceTest\Base64DecodersWithInvalidStandardBase64ValueExpectedThrowableClassNameAndExpectedThrowableMessageDataProvider;
use CodeKandis\Base64Codec\Tests\DataProviders\UnitTests\Base64DecoderInterfaceTest\Base64DecodersWithInvalidUriSafeBase64ValueExpectedThrowableClassNameAndExpectedThrowableMessageDataProvider;
use CodeKandis\Base64Codec\Tests\DataProviders\UnitTests\Base64DecoderInterfaceTest\Base64DecodersWithValidStandardBase64PaddedValueAndExpectedDecodedValueDataProvider;
use CodeKandis\Base64Codec\Tests\DataProviders\UnitTests\Base64DecoderInterfaceTest\Base64DecodersWithValidStandardBase64ValueAndExpectedDecodedValueDataProvider;
use CodeKandis\Base64Codec\Tests\DataProviders\UnitTests\Base64DecoderInterfaceTest\Base64DecodersWithValidUriSafeBase64ValueAndExpectedDecodedValueDataProvider;
use CodeKandis\PhpUnit\TestCase;
use PHPUnit\Framework\Attributes\DataProviderExternal;
use Throwable;

/**
 * Represents the test case of `CodeKandis\Base64Codec\Base64DecoderInterface`.
 * @package codekandis/base64-codec
 * @author Christian Ramelow <info@codekandis.net>
 */
class Base64DecoderInterfaceTest extends TestCase
{
	/**
	 * Tests if the method `Base64DecoderInterface::decodeFromStandard()` throws a `CodeKandis\Base64Codec\InvalidStandardBase64ValueExceptionInterface` if a value is not a standard Base64 value.
	 * @param Base64DecoderInterface $base64Decoder The Base64 decoder to test.
	 * @param string $invalidStandardBase64Value The invalid standard Base64 value to pass.
	 * @param string $expectedThrowableClassName The class name of the expected throwable.
	 * @param string $expectedThrowableMessage The message of the expected throwable.
	 */
	#[DataProviderExternal( Base64DecodersWithInvalidStandardBase64ValueExpectedThrowableClassNameAndExpectedThrowableMessageDataProvider::class, 'provideData' )]
	public function testIfMethodDecodeFromStandardThrowsInvalidStandardBase64ValueExceptionInterfaceOnInvalidStandardBase64Value( Base64DecoderInterface $base64Decoder, string $invalidStandardBase64Value, string $expectedThrowableClassName, string $expectedThrowableMessage ): void
	{
		try
		{
			$base64Decoder->decodeFromStandard( $invalidStandardBase64Value );
		}
		catch ( Throwable $throwable )
		{
			static::assertInstanceOf( InvalidStandardBase64ValueExceptionInterface::class, $throwable );
			static::assertInstanceOf( $expectedThrowableClassName, $throwable );
			static::assertSame(
				$expectedThrowableMessage,
				$throwable->getMessage()
			);
		}
	}

	/**
	 * Tests if the method `Base64DecoderInterface::decodeFromStandard()` throws a `CodeKandis\Base64Codec\InvalidStandardBase64PaddingExceptionInterface` if a value is not a standard Base64 padded value.
	 * @param Base64DecoderInterface $base64Decoder The Base64 decoder to test.
	 * @param string $invalidStandardBase64PaddedValue The invalid standard Base64 padded value to pass.
	 * @param string $expectedThrowableClassName The class name of the expected throwable.
	 * @param string $expectedThrowableMessage The message of the expected throwable.
	 */
	#[DataProviderExternal( Base64DecodersWithInvalidStandardBase64PaddedValueExpectedThrowableClassNameAndExpectedThrowableMessageDataProvider::class, 'provideData' )]
	public function testIfMethodDecodeFromStandardThrowsInvalidStandardBase64PaddingExceptionInterfaceOnInvalidStandardBase64PaddedValue( Base64DecoderInterface $base64Decoder, string $invalidStandardBase64PaddedValue, string $expectedThrowableClassName, string $expectedThrowableMessage ): void
	{
		try
		{
			$base64Decoder->decodeFromStandard( $invalidStandardBase64PaddedValue );
		}
		catch ( Throwable $throwable )
		{
			static::assertInstanceOf( InvalidStandardBase64PaddingExceptionInterface::class, $throwable );
			static::assertInstanceOf( $expectedThrowableClassName, $throwable );
			static::assertSame(
				$expectedThrowableMessage,
				$throwable->getMessage()
			);
		}
	}

	/**
	 * Tests if the method `Base64DecoderInterface::decodeFromStandard()` decodes a standard Base64 value correctly.
	 * @param Base64DecoderInterface $base64Decoder The Base64 decoder to test.
	 * @param string $validStandardBase64Value The valid standard Base64 value to pass.
	 * @param string $expectedDecodedValue The expected decoded value.
	 */
	#[DataProviderExternal( Base64DecodersWithValidStandardBase64ValueAndExpectedDecodedValueDataProvider::class, 'provideData' )]
	public function testIfMethodDecodeFromStandardDecodesValidStandardBase64ValueCorrectly( Base64DecoderInterface $base64Decoder, string $validStandardBase64Value, string $expectedDecodedValue ): void
	{
		$resultedDecodedValue = $base64Decoder->decodeFromStandard( $validStandardBase64Value );

		static::assertEquals( $expectedDecodedValue, $resultedDecodedValue );
	}

	/**
	 * Tests if the method `Base64DecoderInterface::decodeFromStandard()` decodes a standard Base64 padded value correctly.
	 * @param Base64DecoderInterface $base64Decoder The Base64 decoder to test.
	 * @param string $validStandardBase64PaddedValue The valid standard Base64 padded value to pass.
	 * @param string $expectedDecodedValue The expected decoded value.
	 */
	#[DataProviderExternal( Base64DecodersWithValidStandardBase64PaddedValueAndExpectedDecodedValueDataProvider::class, 'provideData' )]
	public function testIfMethodDecodeFromStandardDecodesValidStandardBase64PaddedValueCorrectly( Base64DecoderInterface $base64Decoder, string $validStandardBase64PaddedValue, string $expectedDecodedValue ): void
	{
		$resultedDecodedValue = $base64Decoder->decodeFromStandard( $validStandardBase64PaddedValue );

		static::assertEquals( $expectedDecodedValue, $resultedDecodedValue );
	}

	/**
	 * Tests if the method `Base64DecoderInterface::decodeFromUriSafe()` throws a `CodeKandis\Base64Codec\InvalidUriSafeBase64ValueExceptionInterface` if a value is not a URI safe Base64 value.
	 * @param Base64DecoderInterface $base64Decoder The Base64 decoder to test.
	 * @param string $invalidUriSafeBase64Value The invalid URI safe Base64 value to pass.
	 * @param string $expectedThrowableClassName The class name of the expected throwable.
	 * @param string $expectedThrowableMessage The message of the expected throwable.
	 */
	#[DataProviderExternal( Base64DecodersWithInvalidUriSafeBase64ValueExpectedThrowableClassNameAndExpectedThrowableMessageDataProvider::class, 'provideData' )]
	public function testIfMethodDecodeFromUriSafeThrowsInvalidUriSafeBase64ValueExceptionInterfaceOnInvalidUriSafeBase64Value( Base64DecoderInterface $base64Decoder, string $invalidUriSafeBase64Value, string $expectedThrowableClassName, string $expectedThrowableMessage ): void
	{
		try
		{
			$base64Decoder->decodeFromUriSafe( $invalidUriSafeBase64Value );
		}
		catch ( Throwable $throwable )
		{
			static::assertInstanceOf( InvalidUriSafeBase64ValueExceptionInterface::class, $throwable );
			static::assertInstanceOf( $expectedThrowableClassName, $throwable );
			static::assertSame(
				$expectedThrowableMessage,
				$throwable->getMessage()
			);
		}
	}

	/**
	 * Tests if the method `Base64DecoderInterface::decodeFromUriSafe()` decodes a URI safe Base64 value correctly.
	 * @param Base64DecoderInterface $base64Decoder The Base64 decoder to test.
	 * @param string $validUriSafeBase64Value The valid URI safe Base64 value to pass.
	 * @param string $expectedDecodedValue The expected decoded value.
	 */
	#[DataProviderExternal( Base64DecodersWithValidUriSafeBase64ValueAndExpectedDecodedValueDataProvider::class, 'provideData' )]
	public function testIfMethodDecodeUriSafeDecodesValidUriSafeBase64ValuesCorrectly( Base64DecoderInterface $base64Decoder, string $validUriSafeBase64Value, string $expectedDecodedValue ): void
	{
		$resultedDecodedValue = $base64Decoder->decodeFromUriSafe( $validUriSafeBase64Value );

		static::assertEquals( $expectedDecodedValue, $resultedDecodedValue );
	}
}
