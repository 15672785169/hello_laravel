@extends('errors::minimal')

@section('title', __('Service Unavailable'))
@section('status_code', '500')
@section('status_text', '对不起，服务不可用。')


@section('btn_link', route('front.index'))
@section('btn_text', 'Back Home')


@section('svg_url', asset('svg/503.svg'))
