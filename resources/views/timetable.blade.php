@extends('layouts.front')

@section('content')
<style>
    @import url(https://fonts.googleapis.com/css?family=Open+Sans:300,400,600);

html, body { height: 100%; margin: 0; }
body {
  font-family: 'Open Sans', sans-serif;
  color: #efefef;
  overflow: hidden;
}

.day {
  width: 18%;
  height: 100vh;
  float: left;
  background-color: #fff;
  background-image: linear-gradient(rgba(0,0,0,.08) 50%, transparent 50%);
  background-size: 1px 20%;
}

.day.time { width: 10%; }

.day_title {
  height: 10%;
  background-color: #34495e;
  font-size: 12px;
  font-weight: 600;
  text-transform: uppercase;
  text-align: center;
  line-height: 10vh;
}

.hour {
  height: 10%;
  background-color: rgba(52, 73, 94,0.9);
  font-size: 12px;
  text-align: center;
  line-height: 10vh;
}

.class {
  width: 100%;
  height: 15vh; /*90min*/
  line-height: 15vh;
  background-color: magenta;
  font-size: 2vw;
  font-weight: 300;
  padding-left: 10px;
}

.class.short { height: 7.5vh; line-height: 7.5vh; } /* 45min class */
.class.b15 { margin-top: 2.5vh; } /* after 15 min break */
.class.b45 { margin-top: 7.5vh; } /* after 45 min break */
.class.b90 { margin-top: 15vh; } /* after 2x45 min break */
.class.b135 { margin-top: 22.5vh; } /* after 3x45 min break */

.green { background-color: #2ecc71; }
.turquoise { background-color: #1abc9c; }
.navy { background-color: #34495e; }
.blue { background-color: #3498db; }
.purple { background-color: #9b59b6; }
.grey { background-color: #bdc3c7; color: #202020; }
.gray { background-color: #7f8c8d; }
.red { background-color: #e74c3c; }
.orange { background-color: #f39c12; }
.yellow { background-color: #f1c40f; color: #303030; }

.spacing { background-color: transparent; }



/* Add this attribute to the element that needs a tooltip */
[data-tooltip] {
  position: relative;
  z-index: 2;
  cursor: pointer;
  width: initial;
}

/* Hide the tooltip content by default */
[data-tooltip]:before,
[data-tooltip]:after {
  visibility: hidden;
  pointer-events: none;
}

/* Position tooltip above the element */
[data-tooltip]:before {
  position: absolute;
  bottom: 110%;
  left: 50%;
  margin-bottom: 10px;
  margin-left: -75px;
  padding: 7px 5px;
  width: 140px;
  background-color: black;
  color: #fff;
  content: attr(data-tooltip);
  text-align: center;
  font-size: 14px;
  line-height: 1.2;
}

/* Triangle hack to make tooltip look like a speech bubble */
[data-tooltip]:after {
  position: absolute;
  bottom: 110%;
  left: 50%;
  margin-left: -7px;
  margin-bottom: 3px;
  width: 0;
  border-top: 7px solid black;
  border-right: 7px solid transparent;
  border-left: 7px solid transparent;
  content: " ";
  font-size: 0;
  line-height: 0;
}

/* Show tooltip content on hover */
[data-tooltip]:hover:before,
[data-tooltip]:hover:after {
  visibility: visible;
  bottom: 90%;
}
</style>
<div class="container">
    <div class="day time">
        <div class="day_title">Time</div>
        <div class="hour">8:00</div>
        <div class="hour">9:00</div>
        <div class="hour">10:00</div>
        <div class="hour">11:00</div>
        <div class="hour">12:00</div>
        <div class="hour">13:00</div>
        <div class="hour">14:00</div>
        <div class="hour">15:00</div>
        <div class="hour">16:00</div>
    </div>

    <div class="day monday">
        <div class="day_title">Monday</div>
        <div class="class red" data-tooltip="StayHome">StayHome</div>
        <div class="class b15 blue" data-tooltip="Get Supplies">Grocery </div>
        <div class="class b15 red" data-tooltip="Stay Home">StayHome</div>
    </div>

    <div class="day tuesday">
        <div class="day_title">Tuesday</div>
        <div class="class red" data-tooltip="Stay Home">StayHome</div>
        <div class="class b15 orange" data-tooltip="Walmart">Walmart</div>
        <div class="class b15 red" data-tooltip="Stay Home">StayHome</div>
        <div class="class b15 red" data-tooltip="Stay Home">StayHome</div>
        <div class="class b15 red" data-tooltip="Stay Home">StayHome</div>
    </div>

    <div class="day wednesday">
        <div class="day_title">Wednesday</div>
        <div class="class spacing"></div>
        <div class="class b15 red" data-tooltip="Stay Home">StayHome</div>
    </div>

    <div class="day thursday">
        <div class="day_title">Thursday</div>
        <!-- <div class="class grey" data-tooltip="German">2GER1 [C1]</div> -->
        <div class="class b15 red" data-tooltip="Stay Home">StayHome</div>
        <div class="class b15 red" data-tooltip="Stay Home">StayHome</div>
        <div class="class b15 red" data-tooltip="Stay Home">StayHome</div>
        <!-- <div class="class green" data-tooltip="Media Studies">2MDS2 [A1]</div> -->
    </div>

    <div class="day friday">
        <div class="day_title">Friday</div>
        <div class="class spacing"></div>
        <div class="class b15 red" data-tooltip="Stay Home">StayHome</div>
        <div class="class b15 navy" data-tooltip="Physics">Grocery</div>
    </div>
</div>
@endsection('content')