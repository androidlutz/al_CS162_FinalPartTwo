<div id="mySidenav" class="sidenav">
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
  <a href="home">Home</a>
  <a href="employees">Employees</a>
  <a href="rooms">Rooms</a>
  <a href="customers">Customers</a>
  <a href="booking">Booking</a>
</div>

<br>

<span style="font-size:30px;cursor:pointer" onclick="openNav()">&#9776; Navigation</span>

<script>
function openNav() {
  document.getElementById("mySidenav").style.width = "250px";
}

function closeNav() {
  document.getElementById("mySidenav").style.width = "0";
}
</script>
   