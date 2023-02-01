@extends('errors::minimal')

@section('title', __('Not Found'))
@section('status_code', '401')
@section('status_text', '对不起，您需要登录才能访问该页面。')


@section('btn_link', route('front.index'))
@section('btn_text', 'Back Home')


@section('svg_url', asset('svg/401.svg'))
