@extends('main')

@section('content')

<style>

.menu-body {
  max-width: 680px;
  margin: 0 auto;
  display: block;
  color: rgb(92, 92, 92);
}
 
.menu-section {
  margin-bottom: 80px;
}
 
.menu-section-title {
  font-family: georgia;
  font-size: 50px;
  display: block;
  font-weight:normal;
  margin: 20px 0; 
  text-align: Center;
}
 
.menu-item {
  margin: 35px 0;
  font-size: 18px;
}
 
.menu-item-name{
  font-family: helvetica;
  font-weight: bold;
  border-bottom: 2px dotted rgb(213, 213, 213);
}
 
.menu-item-description {
  font-style: italic;
  font-size: .9em;
  line-height: 1.5em;
}
 
.menu-item-price{
  float: right;
  font-weight: bold;
  font-family: arial;
  margin-top: -22px;
}

</style>
<br><br>
<div class="menu-body">
 
    

<div class="menu-body">

   @foreach($sections as $section)


      <div class="menu-section">
         <h2 class="menu-section-title">{{$section->name}}</h2>

         @foreach($section->items as $item)
         <!-- Item starts -->
         <div class="menu-item">
            <div class="menu-item-name">
               {{$item->name}}
            </div>
            <div class="menu-item-price">
               {{$item->price}}
            </div>
            <div class="menu-item-description">
               {{$item->description}}
            </div>
         </div>
         <!-- Item ends -->
         @endforeach
      </div>

   @endforeach
   <!-- Section starts: Appetizers -->


   <!-- Section ends: Drinks -->
</div>

    
      