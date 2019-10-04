@extends('errors::minimal')

@section('title', __('Interdite'))
@section('code', '403')
@section('message', __($exception->getMessage() ?: 'Interdite'))
