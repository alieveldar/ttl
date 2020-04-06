<?php
//change TTL for YOU
EchoText();
echoNewTtl();
changeTTL();
function EchoText()
{
	$file = file_get_contents("/proc/sys/net/ipv4/ip_default_ttl");
	echo "TTL is  ";
	echo $file;
}

function echoNewTtl(){
	global $argv;
	echo "\n";
	echo "Now we change TTL to  " . $argv[1] . "\n";
	sleep(1);
}

function changeTTL(){
	global $argv;
	$file = file_put_contents("/proc/sys/net/ipv4/ip_default_ttl", $argv[1]);
	if($file){
		echo "\n TTL chaned \n";
	}else{
		echo " \n Error!!! try with sudo \n";
	}
}