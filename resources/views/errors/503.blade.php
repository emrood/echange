@extends('errors::minimal')

@section('title', __('Service indisponible'))
@section('code', '503')
@section('message', __($exception->getMessage() ?: 'Service indisponible'))
