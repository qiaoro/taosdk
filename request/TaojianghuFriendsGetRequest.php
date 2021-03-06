<?php
/**
 * TOP API: taobao.taojianghu.friends.get request
 * 
 * @author auto create
 * @since 1.0, 2012-11-26 00:00:00
 */
class TaojianghuFriendsGetRequest
{
	/** 
	 * 是否要取用户的好友总数,默认不取.设置为true的时候,返回好友总数.否则好友总数始终返回0
	 **/
	private $getTotal;
	
	/** 
	 * 页码.传入值为1代表第一页,传入值为2代表第二页,依此类推.默认返回的数据是从第一页开始
	 **/
	private $pageNo;
	
	/** 
	 * 每页数量默认10条，最大1000条
	 **/
	private $pageSize;
	
	private $apiParas = array();
	
	public function setGetTotal($getTotal)
	{
		$this->getTotal = $getTotal;
		$this->apiParas["get_total"] = $getTotal;
	}

	public function getGetTotal()
	{
		return $this->getTotal;
	}

	public function setPageNo($pageNo)
	{
		$this->pageNo = $pageNo;
		$this->apiParas["page_no"] = $pageNo;
	}

	public function getPageNo()
	{
		return $this->pageNo;
	}

	public function setPageSize($pageSize)
	{
		$this->pageSize = $pageSize;
		$this->apiParas["page_size"] = $pageSize;
	}

	public function getPageSize()
	{
		return $this->pageSize;
	}

	public function getApiMethodName()
	{
		return "taobao.taojianghu.friends.get";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkMaxValue($this->pageSize,1000,"pageSize");
		RequestCheckUtil::checkMinValue($this->pageSize,1,"pageSize");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
