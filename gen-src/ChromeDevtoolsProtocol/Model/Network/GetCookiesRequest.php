<?php
namespace ChromeDevtoolsProtocol\Model\Network;

/**
 * Request for Network.getCookies command.
 *
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class GetCookiesRequest implements \JsonSerializable
{
	/**
	 * The list of URLs for which applicable cookies will be fetched
	 *
	 * @var string[]|null
	 */
	public $urls;


	public static function fromJson($data)
	{
		$instance = new static();
		if (isset($data->urls)) {
			$instance->urls = [];
			foreach ($data->urls as $item) {
				$instance->urls[] = (string)$item;
			}
		}
		return $instance;
	}


	public function jsonSerialize()
	{
		$data = new \stdClass();
		if ($this->urls !== null) {
			$data->urls = [];
			foreach ($this->urls as $item) {
				$data->urls[] = $item;
			}
		}
		return $data;
	}


	/**
	 * Create new instance using builder.
	 *
	 * @return GetCookiesRequestBuilder
	 */
	public static function builder(): GetCookiesRequestBuilder
	{
		return new GetCookiesRequestBuilder();
	}


	/**
	 * Create new empty instance.
	 *
	 * @return self
	 */
	public static function make(): self
	{
		return static::builder()->build();
	}
}
