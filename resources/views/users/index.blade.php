<?php
/**
 * Created by PhpStorm.
 * User: daviddell
 * Date: 2/21/19
 * Time: 8:12 PM
 */
?>
@extends('main')

@section('content')

    <br><br><br><br>

    <div id="app">
        <user :title="'{{$title}}'" :author="{{$author}}" :types="{{$types}}"></user>
    </div>
    <script type="text/javascript" src="js/app.js"></script>




@endsection

