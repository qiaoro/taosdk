<?php
/**
 * TOP API: taobao.ebook.giftpkg.search request
 * 
 * @author auto create
 * @since 1.0, 2014-04-15 00:00:00
 */
class EbookGiftpkgSearchRequest
{
	
	private $apiParas = array();
	
	public function getApiMethodName()
	{
		return "taobao.ebook.giftpkg.search";
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
