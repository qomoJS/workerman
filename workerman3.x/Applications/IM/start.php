<?php
	// 引入Workerman命名空间
	// use Workerman\Worker;
	// // 初始化一个worker
	// $httpWorker = new Worker("websocket://0.0.0.0:2558");
	// // 设置进程数量
	// $httpWorker->count = 4;

	// // 接收到浏览器数据时原路返回
	// $httpWorker->onMessage = function($connection,$data){
	// 	$return = "";
	// 	switch ($data) {
	// 		case '你好':
	// 			$return = "hello,小可爱";
	// 			break;
	// 		case '吃饭了没?':
	// 			$return = "还没，你请我吃吧！";
	// 			break;
	// 		default:
	// 			$return = "呵呵，你说什么鸟语呢？";
	// 			break;
	// 	}
	// 	$connection->send($return);
	// };


	use \GatewayWorker\Gateway;

	// 指定websocket协议
	$gateway = new Gateway("websocket://0.0.0.0:2558");

	$gateway->onMessage = function ($clientId,$message){

		// Gateway::sendToCurrentClient($clientId.'----'.$message);

		echo($clientId.'----'.$message)

	};







