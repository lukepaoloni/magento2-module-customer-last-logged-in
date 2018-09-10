<?php
	
	namespace LTP\CustomerLastLoggedIn\Model\ResourceModel\Grid;
	
	use Magento\Framework\View\Element\UiComponent\DataProvider\SearchResult;
	
	class Collection extends SearchResult
	{
		/**
		 * Init collection select
		 *
		 * @return $this
		 */
		protected function _initSelect()
		{
			parent::_initSelect();
			$this->getSelect()->join(
				['customer_log' => $this->getTable('customer_log')],
				'customer_log.customer_id = main_table.entity_id',
				['last_login_at']
			);
			return $this;
		}
	}