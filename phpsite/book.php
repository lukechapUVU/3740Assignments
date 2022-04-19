<?php $title='Book'; include '_top.php';?>
<div id="book-page">
    <h2>Book a Cruise</h2>
    <form>
    <label for="name"><i>Full Name <span style="color: red;">(required)</span></i></label><br>
    <input oninput="checkRequired()" type="text" id="name" class="required-field" name="fullname" required>
    <br><br>
    <label for="address"><i>Address Line</i></label><br>
    <input type="text" id="address" name="addressline">
    <br><br>
    <label for="city"><i>City</i></label><br>
    <input type="text" id="city" name="city">
    <br><br>
    <label for="state"><i>State</i></label><br>
    <select id="state" name="state">
        <option value="" disabled selected hidden>Choose a state</option>
        <option value="al">Alabama</option>
        <option value="ak">Alaska</option>
        <option value="az">Arizona</option>
        <option value="ar">Arkansas</option>
        <option value="ca">California</option>
        <option value="co">Colorado</option>
        <option value="ct">Connecticut</option>
        <option value="de">Delaware</option>
        <option value="fl">Florida</option>
        <option value="ga">Georgia</option>
        <option value="hi">Hawaii</option>
        <option value="id">Idaho</option>
        <option value="il">Illinois</option>
        <option value="in">Indiana</option>
        <option value="ia">Iowa</option>
        <option value="ks">Kansas</option>
        <option value="ky">Kentucky</option>
        <option value="la">Louisiana</option>
        <option value="me">Maine</option>
        <option value="md">Maryland</option>
        <option value="ma">Massachusetts</option>
        <option value="mi">Michigan</option>
        <option value="mn">Minnesota</option>
        <option value="ms">Mississippi</option>
        <option value="mo">Missouri</option>
        <option value="mt">Montana</option>
        <option value="ne">Nebraska</option>
        <option value="nv">Nevada</option>
        <option value="nh">New Hampshire</option>
        <option value="nj">New Jersey</option>
        <option value="nm">New Mexico</option>
        <option value="ny">New York</option>
        <option value="nc">North Carolina</option>
        <option value="nd">North Dakota</option>
        <option value="oh">Ohio</option>
        <option value="ok">Oklahoma</option>
        <option value="or">Oregon</option>
        <option value="pa">Pennsylvania</option>
        <option value="ri">Rhode Island</option>
        <option value="sc">South Carolina</option>
        <option value="sd">South Dakota</option>
        <option value="tn">Tennessee</option>
        <option value="tx">Texas</option>
        <option value="ut">Utah</option>
        <option value="vt">Vermont</option>
        <option value="va">Virginia</option>
        <option value="wa">Washington</option>
        <option value="wv">West Virginia</option>
        <option value="wi">Wisconsin</option>
        <option value="wy">Wyoming</option>
    </select>
    <br><br>
    <label for="zip"><i>Zipcode</i></label><br>
    <input type="text" id="zip" name="zipcode">
    <br><br>
    <label for="phone"><i>Phone Number</i></label><br>
    <input type="tel" id="phone" name="phonenum">
    <br><br>
    <label for="email"><i>Email Address <span style="color: red;">(required)</span></i></label><br>
    <input oninput="checkRequired()" type="email" id="email" class="required-field" name="email" required>
    <br><br>
    <label for="cruise"><i>Cruise Selection</i></label><br>
    <select id="cruise" name="cruise">
        <option value="" disabled selected hidden>Select a cruise</option>
        <option value="aus">Australia & New Zealand</option>
        <option value="cari">Caribbean</option>
        <option value="hai">Hawaii</option>
        <option value="eu">Europe</option>
    </select>
    <br><br>
    <input type="submit" value="Book My Cruise">
  </form>
</div>
<?php include '_bot.php';?>
