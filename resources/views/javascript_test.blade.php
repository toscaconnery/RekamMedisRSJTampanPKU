<p id="zack">This element is on the page <strong>BEFORE</strong> all the scripts. No document ready needed.</p>

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>

  <script type="text/javascript" charset="utf-8">

    // if you include your scripts at the very bottom, you don't need document ready
    (function($) {

      $("#zack").css("color", "green");
      $("#slator").css("color", "red");

    }(jQuery));

  </script>

<p id="slator">This element comes after the scripts and won't be available.</p>