@extends('layout')
@section('content')


<section class="head-main">
      <h4 class="section">THE ULTIMATE LUXURY</h4>
      <h2 class="title">Ultimate Room</h2>
      <div class="head-main__buttons">
      <a href="./index.php">Home</a>
        <span>|</span>
        <a class="head-main__buttons--sepia" href="">Rooms</a>
      </div>
      <div>
        <h1>title</h1>
        <h1>{{$data}}</h1>
<table border = "1">
<tr>
<td>Id</td>
<td>Room Type</td>
<td>Room number</td>
<td>Status</td>
<td>Request</td>
</tr>
@foreach ($data as $room)
<tr>
<td>{{ $room->id }}</td>
<td>{{ $room->room_type }}</td>
<td>{{ $room->room_number }}</td>
<td>{{ $room->status }}</td>
<td>{{ $room->special_request }}</td>
</tr>
@endforeach
</table>
   

    </div>
    </section>
    <section class="rooms-list">
      <div>
        <div class="container-duplex-room">
            <a href="room-details.html">
          <img class="image" src="./images/photos/duplex.jpg" alt="" />
          </a>
          <div class="icons-group-room">
            <img class="icon-rooms" src="./images/bed.svg" alt="bed" />
            <img class="icon-rooms" src="./images/wifi.svg" alt="wifi" />
            <img class="icon-rooms" src="./images/car.svg" alt="car" />
            <img
              class="icon-rooms"
              src="./images/snowflake.svg"
              alt="snowflake"
            />
            <img
              class="icon-rooms"
              src="./images/dumbbell.svg"
              alt="dumbbell"
            />
            <img
              class="icon-rooms"
              src="./images/cocktail.svg"
              alt="cocktail"
            />
          </div>
        </div>
        <div class="block-center-room">
    

          <h3 class="sub-title">Minimal Duplex Room</h3>
          <p class="paragraph">
            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do
            eiusmod tempor incididunt ut labore et dolore.
          </p>
         
          <p class="block-center__price inline">
            $345<span class="block-center__price--night">/Night</span> 
        </p>
        <p class="booking inline"><a href="./room-details.html">Booking Now</a></p>
          
        
      </div>
      <div>
        <div class="container-duplex-room">
          <img class="image" src="./images/photos/duplex2.jpg" alt="" />
          <div class="icons-group-room">
            <img class="icon-rooms" src="./images/bed.svg" alt="bed" />
            <img class="icon-rooms" src="./images/wifi.svg" alt="wifi" />
            <img class="icon-rooms" src="./images/car.svg" alt="car" />
            <img
              class="icon-rooms"
              src="./images/snowflake.svg"
              alt="snowflake"
            />
            <img
              class="icon-rooms"
              src="./images/dumbbell.svg"
              alt="dumbbell"
            />
            <img
              class="icon-rooms"
              src="./images/cocktail.svg"
              alt="cocktail"
            />
          </div>
        </div>
        <div class="block-center-room">
          <h3 class="sub-title">Minimal Duplex Room</h3>
          <p class="paragraph">
            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do
            eiusmod tempor incididunt ut labore et dolore.
          </p>
          <p class="block-center__price inline">
            $345<span class="block-center__price--night">/Night</span>
        </p>
        <p class="booking inline"><a href="./room-details.html">Booking Now</a></p>
        </div>
      </div>
      <div>
        <div class="container-duplex-room">
          <img class="image" src="./images/photos/duplex3.jpg" alt="" />
          <div class="icons-group-room">
            <img class="icon-rooms" src="./images/bed.svg" alt="bed" />
            <img class="icon-rooms" src="./images/wifi.svg" alt="wifi" />
            <img class="icon-rooms" src="./images/car.svg" alt="car" />
            <img
              class="icon-rooms"
              src="./images/snowflake.svg"
              alt="snowflake"
            />
            <img
              class="icon-rooms"
              src="./images/dumbbell.svg"
              alt="dumbbell"
            />
            <img
              class="icon-rooms"
              src="./images/cocktail.svg"
              alt="cocktail"
            />
          </div>
        </div>
        <div class="block-center-room">
          <h3 class="sub-title">Minimal Duplex Room</h3>
          <p class="paragraph">
            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do
            eiusmod tempor incididunt ut labore et dolore.
          </p>
          <p class="block-center__price inline">
            $345<span class="block-center__price--night">/Night</span>
          </p>
           <p class="booking inline"><a href="./room-details.html">Booking Now</a></p>
        </div>
      </div>
      <div>
        <div class="container-duplex-room">
          <img class="image" src="./images/photos/duplex4.jpg" alt="" />
          <div class="icons-group-room">
            <img class="icon-rooms" src="./images/bed.svg" alt="bed" />
            <img class="icon-rooms" src="./images/wifi.svg" alt="wifi" />
            <img class="icon-rooms" src="./images/car.svg" alt="car" />
            <img
              class="icon-rooms"
              src="./images/snowflake.svg"
              alt="snowflake"
            />
            <img
              class="icon-rooms"
              src="./images/dumbbell.svg"
              alt="dumbbell"
            />
            <img
              class="icon-rooms"
              src="./images/cocktail.svg"
              alt="cocktail"
            />
          </div>
        </div>
        <div class="block-center-room">
          <h3 class="sub-title">Minimal Duplex Room</h3>
          <p class="paragraph">
            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do
            eiusmod tempor incididunt ut labore et dolore.
          </p>
          <p class="block-center__price inline">
            $345<span class="block-center__price--night">/Night</span>
          </p>
           <p class="booking inline"><a href="./room-details.html">Booking Now</a></p>
        </div>
      </div>
      <div>
        <div class="container-duplex-room">
          <img class="image" src="./images/photos/duplex5.jpg" alt="" />
          <div class="icons-group-room">
            <img class="icon-rooms" src="./images/bed.svg" alt="bed" />
            <img class="icon-rooms" src="./images/wifi.svg" alt="wifi" />
            <img class="icon-rooms" src="./images/car.svg" alt="car" />
            <img
              class="icon-rooms"
              src="./images/snowflake.svg"
              alt="snowflake"
            />
            <img
              class="icon-rooms"
              src="./images/dumbbell.svg"
              alt="dumbbell"
            />
            <img
              class="icon-rooms"
              src="./images/cocktail.svg"
              alt="cocktail"
            />
          </div>
        </div>
        <div class="block-center-room">
          <h3 class="sub-title">Minimal Duplex Room</h3>
          <p class="paragraph">
            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do
            eiusmod tempor incididunt ut labore et dolore.
          </p>
          <p class="block-center__price inline">
            $345<span class="block-center__price--night">/Night</span>
          </p>
           <p class="booking inline"><a href="./room-details.html">Booking Now</a></p>
        </div>
      </div>
      <div>
        <div class="container-duplex-room">
          <img class="image" src="./images/photos/duplex6.jpg" alt="" />
          <div class="icons-group-room">
            <img class="icon-rooms" src="./images/bed.svg" alt="bed" />
            <img class="icon-rooms" src="./images/wifi.svg" alt="wifi" />
            <img class="icon-rooms" src="./images/car.svg" alt="car" />
            <img
              class="icon-rooms"
              src="./images/snowflake.svg"
              alt="snowflake"
            />
            <img
              class="icon-rooms"
              src="./images/dumbbell.svg"
              alt="dumbbell"
            />
            <img
              class="icon-rooms"
              src="./images/cocktail.svg"
              alt="cocktail"
            />
          </div>
        </div>
        <div class="block-center-room">
          <h3 class="sub-title">Minimal Duplex Room</h3>
          <p class="paragraph">
            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do
            eiusmod tempor incididunt ut labore et dolore.
          </p>
          <p class="block-center__price inline">
            $345<span class="block-center__price--night">/Night</span>
          </p>
          

              <p class="booking inline"><a href="./room-details.html">Booking Now</a></p>
          
        </div>
      </div>
    </section>
    @stop