@extends('frontEnd.layouts.master')
@section('title','Review Order')
@section('slider')
@endsection
@section('content')
    <div class="container">
        <h3 class="text-center">YOUR ORDER HAS BEEN PLACED</h3>
        <p class="text-center">Your order will be paid by cash upon delivery</p>
        <p class="text-center">We will contact you by your email (<b>{{$user_order->users_email}}</b>) or your phone number (<b>{{$user_order->mobile}}</b>)</p>
    </div>
    <div style="margin-bottom: 20px;"></div>
@endsection
