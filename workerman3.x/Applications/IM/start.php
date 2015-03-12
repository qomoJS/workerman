<?php
	// 引入Workerman命名空间
	use Workerman\Worker;
	// 初始化一个worker
	$httpWorker = new Worker("websocket://0.0.0.0:2558");
	// 设置进程数量
	$httpWorker->count = 4;

	// 接收到浏览器数据时原路返回
	$httpWorker->onMessage = function($connection,$data){
		$connection->send(var_dump($connection));
		$connection->send($data);
	};




