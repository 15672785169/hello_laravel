@extends('errors.minimal')

@section('title', __('Not Found'))
@section('status_code', '404')
@section('status_text', '对不起，未找到该页面。')


@section('btn_link', route('front.index'))
@section('btn_text', 'Back Home')


@section('svg_url', asset('svg/404.svg'))
