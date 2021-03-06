<?php
/**
 * TOP API: taobao.caipiao.jcmatchaward.get request
 * 
 * @author auto create
 * @since 1.0, 2013-10-22 00:00:00
 */
class CaipiaoJcmatchawardGetRequest
{
	/** 
	 * 时间
	 **/
	private $date;
	
	/** 
	 * 彩种编号
	 **/
	private $lotteryTypeId;
	
	/** 
	 * 玩法
	 **/
	private $playType;
	
	private $apiParas = array();
	
	public function setDate($date)
	{
		$this->date = $date;
		$this->apiParas["date"] = $date;
	}

	public function getDate()
	{
		return $this->date;
	}

	public function setLotteryTypeId($lotteryTypeId)
	{
		$this->lotteryTypeId = $lotteryTypeId;
		$this->apiParas["lottery_type_id"] = $lotteryTypeId;
	}

	public function getLotteryTypeId()
	{
		return $this->lotteryTypeId;
	}

	public function setPlayType($playType)
	{
		$this->playType = $playType;
		$this->apiParas["play_type"] = $playType;
	}

	public function getPlayType()
	{
		return $this->playType;
	}

	public function getApiMethodName()
	{
		return "taobao.caipiao.jcmatchaward.get";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->date,"date");
		RequestCheckUtil::checkNotNull($this->lotteryTypeId,"lotteryTypeId");
		RequestCheckUtil::checkNotNull($this->playType,"playType");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
