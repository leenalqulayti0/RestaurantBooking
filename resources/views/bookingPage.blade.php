<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width,initial-scale=1" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" 
  crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.css" />
<script src="https://cdn.jsdelivr.net/npm/jquery@3.6.4/dist/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/momentjs/latest/moment.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.min.js"></script>
  <title>Restaurant Booking</title>
  @vite(['resources/css/BookingPage.css', 'resources/js/BookingPage.js'])
</head>
<body>
  <main id="container" class="container">
    <article class="booking">
      <div class="hero">
        <img src="images/Rest.jpg" alt="Restaurant Dish">
      </div>
      <header class="head">
        <h2><span class="brand">Golden Fork</span> Restaurant</h2>
        <hr>
      </header>
      <section class="details">
        <div class="detail">
          <div class="icon"><i class="fa-solid fa-location-dot"></i></div>
          <div class="text">
            King Fahd Road, Al Olaya District, Riyadh, Saudi Arabia
          </div>
        </div>
        <div class="detail">
          <div class="icon"><i class="fa-solid fa-clock"></i></div>
          <div class="text">10:30 AM – 11:00 PM</div>
        </div>
        <div class="detail">
          <div class="icon"><i class="fa-solid fa-utensils"></i></div>
          <div class="text">
            Located in the heart of Riyadh, Golden Fork is one of the city’s top dining destinations. The restaurant combines modern design with a warm atmosphere, offering a diverse menu of international dishes and fresh seafood prepared daily with the finest ingredients. Whether you’re looking for a quick business lunch or a sophisticated family dinner, Golden Fork promises an exceptional dining experience that satisfies every taste.
          </div>
        </div>
      </section>
      <section class="filters">
       <div class="control custom-input">
  <label for="datePicker">Date</label>
  <div class="position-relative" style="width:220px;">
    <input type="text" id="datePicker" class="form-control form-control-sm pe-5 ps-4 text-start"
      placeholder="Select date"
      style="background-color: #F6F7F9; cursor: pointer;" readonly>
  </div>
</div>
      </section>
      <section class="slots">
        <h4>Available Time Slots</h4>
        <div class="slot-list">
          <button class="slot disabled">10:30 AM</button>
          <button class="slot active">11:30 PM</button>
          <button class="slot disabled">12:30 AM</button>
          <button class="slot disabled">01:30 AM</button>
          <button class="slot available">02:30 PM</button>
          <button class="slot available">03:30 PM</button>
          <button class="slot disabled">04:30 PM</button>
          <button class="slot available">05:30 PM</button>
        </div>
      </section>
      <button class="confirm-btn">Confirm Booking</button>
    </article>
  </main>
</body>
</html>
