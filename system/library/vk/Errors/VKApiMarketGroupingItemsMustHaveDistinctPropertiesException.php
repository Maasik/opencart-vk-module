<?php


/**
 */
class VKApiMarketGroupingItemsMustHaveDistinctPropertiesException extends VKApiException {

	/**
	 * VKApiMarketGroupingItemsMustHaveDistinctPropertiesException constructor.
	 *
	 * @param VkApiError $error
	 */
	public function __construct(VkApiError $error) {
		parent::__construct(1426, 'Item must have distinct properties', $error);
	}
}