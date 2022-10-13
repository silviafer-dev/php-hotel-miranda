 @extends('layout')
@section('content')

 
 <section class="head-main">
      <h4 class="section">THE ULTIMATE LUXURY</h4>
      <h2 class="title">Ultimate Room</h2>
      <div class="head-main__buttons">
        <a href="./index.html">Home</a>
        <span>|</span>
        <a class="head-main__buttons--sepia" href="">Room Details</a>
      </div>
    </section>
    <div class="details-section">
    <div >
      <h4 class="section section--grey">DOUBLE BED</h4>
      <h2 class="title title--resize">Luxury Double Bed</h2>
      <p class="block-center__price">
        $345<span class="block-center__price--night">/Night</span>
      </p>
      <img class="image" src="./images/photos/duplex.jpg" alt="" />
    </div>
    <section class="check-availability">
      <h4>Check Availability</h4>
      <form action="" class="check-availability__form">
        <label for="" class="check-availability__form check-availability__form--title ">Check In</label>
        <input type="date" name="" id="" />
        <label for="" class="check-availability__form check-availability__form--title ">Check Out</label>
        <input type="date" name="" id="" />
        <button class="button-page button-page__sepia">
          CHECK AVAILABILITY
        </button>
      </form>

      <p class="paragraph">
        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
        tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim
        veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea
        commodo consequat. Duis aute irure dolor in reprehenderit in voluptate
        velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint
        occaecat cupidatat non proident, sunt in culpa qui officia deserunt
        mollit anim id est laborum. Sed ut perspiciatis unde omnis iste natus
        error sit voluptatem accusantium doloremque laudantium, totam rem
        aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto
        beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia
        voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni
        dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam
        est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit,
        sed quia non numquam eius modi tempora incidunt ut labore et dolore
        magnam aliquam quaerat voluptatem.
      </p>
    </section>
    <section class="amenities">
      <h3 class="sub-title">Amenities</h3>
      <hr />
      <div class="amenities-offers">
      <div class="amenities-offers__block">
        <img src="./images/icons-room/air-conditioner.svg" alt="" />
        <p class="amenities-offers__block amenities-offers__block--title">Air conditioner</p>
      </div>
      <div class="amenities-offers__block">
        <img src="./images/icons-room/breakfast-icons.svg" alt="" />
        <p class="amenities-offers__block amenities-offers__block--title">Breakfast</p>
      </div>
      <div class="amenities-offers__block">
        <img src="./images/icons-room/cleaning.svg" alt="" />
        <p class="amenities-offers__block amenities-offers__block--title">Cleaning</p>
      </div>
      <div class="amenities-offers__block">
        <img src="./images/icons-room/grocery.svg" alt="" />
        <p class="amenities-offers__block amenities-offers__block--title">Grocery</p>
      </div>
      <div class="amenities-offers__block">
        <img src="./images/icons-room/shop.svg" alt="" />
        <p class="amenities-offers__block amenities-offers__block--title">Shop near</p>
      </div>
      <div class="amenities-offers__block">
        <img src="./images/icons-room/support.svg" alt="" />
        <p class="amenities-offers__block amenities-offers__block--title">24/7 Online Support</p>
      </div>
      <div class="amenities-offers__block">
        <img src="./images/icons-room/air-conditioner.svg" alt="" />
        <p class="amenities-offers__block amenities-offers__block--title">Air conditioner</p>
      </div>
      <div class="amenities-offers__block">
        <img src="./images/icons-room/locker.svg" alt="" />
        <p class="amenities-offers__block amenities-offers__block--title">Smart Security</p>
      </div>
      <div class="amenities-offers__block">
        <img src="./images/icons-room/wifi.svg" alt="" />
        <p class="amenities-offers__block amenities-offers__block--title">High speed WiFi</p>
      </div>
      <div class="amenities-offers__block">
        <img src="./images/icons-room/kitchen.svg" alt="" />
        <p class="amenities-offers__block amenities-offers__block--title">Kitchen</p>
      </div>
      <div class="amenities-offers__block">
        <img src="./images/icons-room/shower.svg" alt="" />
        <p class="amenities-offers__block amenities-offers__block--title">Shower</p>
      </div>
      <div class="amenities-offers__block">
        <img src="./images/icons-room/single-bed.svg" alt="" />
        <p class="amenities-offers__block amenities-offers__block--title">Single bed</p>
      </div>
      <div class="amenities-offers__block">
        <img src="./images/icons-room/towels.svg" alt="" />
        <p class="amenities-offers__block amenities-offers__block--title">Towels</p>
      </div>
      <div class="amenities-offers__block">
        <img src="./images/icons-room/key.svg" alt="" />
        <p class="amenities-offers__block amenities-offers__block--title">Strong Locker</p>
      </div>
      <div class="amenities-offers__block">
        <img src="./images/icons-room/expert.svg" alt="" />
        <p class="amenities-offers__block amenities-offers__block--title">Expert Team</p>
      </div>
      </div>
    </section>
    <section class="founder">
      <img src="" alt="" />
      <h3 class="sub-title">Rosalina D. William</h3>
      <h4 class="section section--sepia">FOUNDER QUX CO.</h4>
      <p class="founder__paragraph">
        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
        tempor incididunt ut labore et dolore.
      </p>
    </section>
    <section class="cancellation">
      <h3 class="sub-title">Cancellation</h3>
      <hr />
      <p class="paragraph">
        Phasellus volutpat neque a tellus venenatis, a euismod augue facilisis.
        Fusce ut metus mattis, consequat metus nec, luctus lectus. Pellentesque
        orci quis hendrerit sed eu dolor. Cancel up to 14 days to get a full
        refund.
      </p>
    </section>
    <section class="related">
      <h3 class="sub-title">Related Rooms</h3>
      </div>
      <hr />
      <div class="carousel-slider">
        <input type="radio" name="control" id="slide1" checked />
        <input type="radio" name="control" id="slide2" />
        <input type="radio" name="control" id="slide3" />

        <label for="slide1" class="next next-1"></label>
        <label for="slide2" class="next next-2"></label>
        <label for="slide3" class="next next-3"></label>

        <label for="slide1" class="prev prev-1"></label>
        <label for="slide2" class="prev prev-2"></label>
        <label for="slide3" class="prev prev-3"></label>

        <div class="slides">
          <div id="slide-1" class="slide">
            <div class="container-duplex-room">
              <img class="image" src="./images/photos/duplex.jpg" alt="" />
              <div class="icons-group-room">
                <img
                  class="icon-rooms"
                  src="./images/bed.svg"
                  alt="no-smoking"
                />
                <img
                  class="icon-rooms"
                  src="./images/wifi.svg"
                  alt="no-smoking"
                />
                <img
                  class="icon-rooms"
                  src="./images/car.svg"
                  alt="no-smoking"
                />
                <img
                  class="icon-rooms"
                  src="./images/snowflake.svg"
                  alt="no-smoking"
                />
                <img
                  class="icon-rooms"
                  src="./images/dumbbell.svg"
                  alt="no-smoking"
                />
                <img
                  class="icon-rooms"
                  src="./images/cocktail.svg"
                  alt="cocktail"
                />
              </div>
            </div>
            <div class="block-center">
              <h3 class="sub-title">Minimal Duplex Room</h3>
              <p class="paragraph">
                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do
                eiusmod tempor incididunt ut labore et dolore.
              </p>
              <p class="block-center__price inline">
                $345<span class="block-center__price--night">/Night</span>
              </p>
              <p class="booking inline">Booking Now</p>
            </div>
          </div>
          <div id="slide-2" class="slide">
            <div class="container-duplex-room">
              <img class="image" src="./images/photos/duplex2.jpg" alt="" />
              <div class="icons-group-room">
                <img
                  class="icon-rooms"
                  src="./images/bed.svg"
                  alt="no-smoking"
                />
                <img
                  class="icon-rooms"
                  src="./images/wifi.svg"
                  alt="no-smoking"
                />
                <img
                  class="icon-rooms"
                  src="./images/car.svg"
                  alt="no-smoking"
                />
                <img
                  class="icon-rooms"
                  src="./images/snowflake.svg"
                  alt="no-smoking"
                />
                <img
                  class="icon-rooms"
                  src="./images/dumbbell.svg"
                  alt="no-smoking"
                />
                <img
                  class="icon-rooms"
                  src="./images/cocktail.svg"
                  alt="cocktail"
                />
              </div>
            </div>
            <div class="block-center">
              <h3 class="sub-title">Minimal Duplex Room</h3>
              <p class="paragraph">
                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do
                eiusmod tempor incididunt ut labore et dolore.
              </p>
              <p class="block-center__price">
                $345<span class="block-center__price--night">/Night</span>
              </p>
            </div>
          </div>
          <div id="slide-3" class="slide">
            <div class="container-duplex-room">
              <img class="image" src="./images/photos/duplex3.jpg" alt="" />
              <div class="icons-group-room">
                <img
                  class="icon-rooms"
                  src="./images/bed.svg"
                  alt="no-smoking"
                />
                <img
                  class="icon-rooms"
                  src="./images/wifi.svg"
                  alt="no-smoking"
                />
                <img
                  class="icon-rooms"
                  src="./images/car.svg"
                  alt="no-smoking"
                />
                <img
                  class="icon-rooms"
                  src="./images/snowflake.svg"
                  alt="no-smoking"
                />
                <img
                  class="icon-rooms"
                  src="./images/dumbbell.svg"
                  alt="no-smoking"
                />
                <img
                  class="icon-rooms"
                  src="./images/cocktail.svg"
                  alt="cocktail"
                />
              </div>
            </div>
            <div class="block-center">
              <h3 class="sub-title">Minimal Duplex Room</h3>
              <p class="paragraph">
                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do
                eiusmod tempor incididunt ut labore et dolore.
              </p>
              <p class="block-center__price">
                $345<span class="block-center__price--night">/Night</span>
              </p>
            </div>
          </div>
        </div>
      </div>
    </section>
    @stop