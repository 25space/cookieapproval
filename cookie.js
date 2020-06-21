function cookieOk() {
  var now = new Date(); // Current date
  var lifetime = now.getTime(); // Set variable of date (1970 to today)
  var deleteCookie = lifetime + 23668200000; // Lifetime in microseconds (9 month)
   
  now.setTime(deleteCookie);
  var enddate = now.toUTCString();
     
  document.cookie = "yourwebsitecookieinfo = 0120_nothing_to_see_here; path=/; secure; expires=" + enddate;
  location.reload();
  document.getElementById("cookie-popup").classList.add("hidden");
}
