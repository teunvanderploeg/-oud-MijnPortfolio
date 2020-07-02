<?php

use Pecee\SimpleRouter\SimpleRouter as Router;
use Pecee\Http\Url;
use Pecee\Http\Response;
use Pecee\Http\Request;


function url($name = null, $parameters = null, $getParams = null ){
	return Router::getUrl( $name, $parameters, $getParams );
}


function response() {
	return Router::response();
}


function request() {
	return Router::request();
}


function input( $index = null, $defaultValue = null, ...$methods ) {
	if ( $index !== null ) {
		return request()->getInputHandler()->value( $index, $defaultValue, ...$methods );
	}

	return request()->getInputHandler();
}


function redirect($url, $code = null ) {
	if ( $code !== null ) {
		response()->httpCode( $code );
	}

	response()->redirect( $url );
}


function csrf_token() {
	$baseVerifier = Router::router()->getCsrfVerifier();
	if ( $baseVerifier !== null ) {
		return $baseVerifier->getTokenProvider()->getToken();
	}

	return null;
}