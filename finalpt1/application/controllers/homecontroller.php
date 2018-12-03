<?php

class HomeController extends Controller{


	public function index(){
		$feed = "http://fox59.com/feed";
		$rss=new RssDisplay($feed);
		$feed_data = $rss->getFeedItems(8);
		$this->set('numItems', 8);
		$this->set('feed_data', $feed_data);
		$channel_info = $rss->getChannelInfo();
		$this->set('channel_title', $channel_info['title']);
		$this->set('channel_link', $channel_info['link']);
		$this->set('channel_desc', $channel_info['desc']);
	}

}

?>
