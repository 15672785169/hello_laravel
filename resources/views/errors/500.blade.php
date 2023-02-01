@extends('errors::minimal')

@section('title', __('Server Error'))
@section('status_code', '500')
@section('status_text', '对不起，服务器错误。')


@section('btn_link', route('front.index'))
@section('btn_text', 'Back Home')


@section('svg_url', asset('svg/500.svg'))
