<?php
/**
 * TOP API: taobao.warehouse.extstores.get request
 * 
 * @author auto create
 * @since 1.0, 2011-05-12 00:00:00
 */
class WarehouseExtstoresGetRequest
{
	
	private $apiParas = array();
	
	public function getApiMethodName()
	{
		return "taobao.warehouse.extstores.get";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
