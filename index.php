<?php

if(isset($_POST['submit']) == ''){

}
else{
    $to = "hana@brandedspiritsusa.com"; // this is your Email address
    $from = $_POST['email']; // this is the sender's Email address
    $name = $_POST['name'];
    $company = $_POST['company'];
    $companytype = $_POST['companytype'];
    $phone = $_POST['phone'];
    $subject = "Form submission For Hana Gin";
    $subject2 = "Copy of your Hana Gin form submission";
    $message = "Full Name: " . $name ."\n\n".
     "Company Name: " . $company ."\n\n".
     "Company Type: ". $companytype ."\n\n".
     "Phone Number: " . $phone . "\n\n" .
     " Message: " . "\n\n" . $_POST['message'];
    $message2 = "Here is a copy of your message " . $first_name . "\n\n" . $_POST['message'];

    $headers = "From:" . $from;
    $headers2 = "From:" . $to;
    mail($to,$subject,$message,$headers);
    mail($from,$subject2,$message2,$headers2); // sends a copy of the message to the sender
    echo "Mail Sent. Thank you " . $firstname . ", we will contact you shortly.";
    // You can also use header('Location: thank_you.php'); to redirect to another page.
    // You cannot use header and echo together. It's one or the other.
    }

?>


<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="css/app.min.css">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    <!-- scripts necessary for store locator -->
    <script
      src="https://maps.googleapis.com/maps/api/js?libraries=places&key=AIzaSyAQpg38og1BS2K1lEWm7TVPSwq-DgWbsLU"></script>
    <script
      src="https://ajax.googleapis.com/ajax/libs/jquery/1.6/jquery.min.js">
    </script>
    <script src="store-locator/store-locator.min.js"></script>
    <script src="store-locator/bevmo-store-locator.js"></script>
    <script src="store-locator/panel.js"></script>
    <script>
      var _gaq = _gaq || [];
      _gaq.push(['_setAccount', 'UA-12846745-20']);
      _gaq.push(['_trackPageview']);

      (function() {
        var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
        ga.src = ('https:' === document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
        var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
      })();
    </script>
    <!-- end of store locator scripts -->

    <title>Hana Gin</title>
  </head>
  <body>

    <div class="page-container">



    <!-- age gate modal -->
    <div id="agemodal" class="agemodal">
      <div class="overlay"></div>
        <div class="message">
          <div class="message-inner">
            <h1>Welcome</h1>
            <p>You have to be over 21 to enter this site</p>
            <form id="agegate" method="post" action="">
            <div class="birthday">
                <!-- <label class="day" for="day">Birthday:</label> -->
                <select id="day" name="day">
                    <option value="notset">DD</option>
                    <option value="1">01</option>
                    <option value="2">02</option>
                    <option value="3">03</option>
                    <option value="4">04</option>
                    <option value="5">05</option>
                    <option value="6">06</option>
                    <option value="7">07</option>
                    <option value="8">08</option>
                    <option value="9">09</option>
                    <option value="10">10</option>
                    <option value="11">11</option>
                    <option value="12">12</option>
                    <option value="13">13</option>
                    <option value="14">14</option>
                    <option value="15">15</option>
                    <option value="16">16</option>
                    <option value="17">17</option>
                    <option value="18">18</option>
                    <option value="19">19</option>
                    <option value="20">20</option>
                    <option value="21">21</option>
                    <option value="22">22</option>
                    <option value="23">23</option>
                    <option value="24">24</option>
                    <option value="25">25</option>
                    <option value="26">26</option>
                    <option value="27">27</option>
                    <option value="28">28</option>
                    <option value="29">29</option>
                    <option value="30">30</option>
                    <option value="31">31</option>
                </select>
                <select id="month" name="month">
                    <option value="notset">MM</option>
                    <option value="1">01</option>
                    <option value="2">02</option>
                    <option value="3">03</option>
                    <option value="4">04</option>
                    <option value="5">05</option>
                    <option value="6">06</option>
                    <option value="7">07</option>
                    <option value="8">08</option>
                    <option value="9">09</option>
                    <option value="10">10</option>
                    <option value="11">11</option>
                    <option value="12">12</option>
                </select>
                <select id="year" name="year">
                    <option value="notset">YYYY</option>
                    <option value="2013">2013</option>
                    <option value="2012">2012</option>
                    <option value="2011">2011</option>
                    <option value="2010">2010</option>
                    <option value="2009">2009</option>
                    <option value="2008">2008</option>
                    <option value="2007">2007</option>
                    <option value="2006">2006</option>
                    <option value="2005">2005</option>
                    <option value="2004">2004</option>
                    <option value="2003">2003</option>
                    <option value="2002">2002</option>
                    <option value="2001">2001</option>
                    <option value="2000">2000</option>
                    <option value="1999">1999</option>
                    <option value="1998">1998</option>
                    <option value="1997">1997</option>
                    <option value="1996">1996</option>
                    <option value="1995">1995</option>
                    <option value="1994">1994</option>
                    <option value="1993">1993</option>
                    <option value="1992">1992</option>
                    <option value="1991">1991</option>
                    <option value="1990">1990</option>
                    <option value="1989">1989</option>
                    <option value="1988">1988</option>
                    <option value="1987">1987</option>
                    <option value="1986">1986</option>
                    <option value="1985">1985</option>
                    <option value="1984">1984</option>
                    <option value="1983">1983</option>
                    <option value="1982">1982</option>
                    <option value="1981">1981</option>
                    <option value="1980">1980</option>
                    <option value="1979">1979</option>
                    <option value="1978">1978</option>
                    <option value="1977">1977</option>
                    <option value="1976">1976</option>
                    <option value="1975">1975</option>
                    <option value="1974">1974</option>
                    <option value="1973">1973</option>
                    <option value="1972">1972</option>
                    <option value="1971">1971</option>
                    <option value="1970">1970</option>
                    <option value="1969">1969</option>
                    <option value="1968">1968</option>
                    <option value="1967">1967</option>
                    <option value="1966">1966</option>
                    <option value="1965">1965</option>
                    <option value="1964">1964</option>
                    <option value="1963">1963</option>
                    <option value="1962">1962</option>
                    <option value="1961">1961</option>
                    <option value="1960">1960</option>
                    <option value="1959">1959</option>
                    <option value="1958">1958</option>
                    <option value="1957">1957</option>
                    <option value="1956">1956</option>
                    <option value="1955">1955</option>
                    <option value="1954">1954</option>
                    <option value="1953">1953</option>
                    <option value="1952">1952</option>
                    <option value="1951">1951</option>
                    <option value="1950">1950</option>
                    <option value="1949">1949</option>
                    <option value="1948">1948</option>
                    <option value="1947">1947</option>
                    <option value="1946">1946</option>
                    <option value="1945">1945</option>
                    <option value="1944">1944</option>
                    <option value="1943">1943</option>
                    <option value="1942">1942</option>
                    <option value="1941">1941</option>
                    <option value="1940">1940</option>
                    <option value="1939">1939</option>
                    <option value="1938">1938</option>
                    <option value="1937">1937</option>
                    <option value="1936">1936</option>
                    <option value="1935">1935</option>
                    <option value="1934">1934</option>
                    <option value="1933">1933</option>
                    <option value="1932">1932</option>
                    <option value="1931">1931</option>
                    <option value="1930">1930</option>
                    <option value="1929">1929</option>
                    <option value="1928">1928</option>
                    <option value="1927">1927</option>
                    <option value="1926">1926</option>
                    <option value="1925">1925</option>
                    <option value="1924">1924</option>
                    <option value="1923">1923</option>
                    <option value="1922">1922</option>
                    <option value="1921">1921</option>
                    <option value="1920">1920</option>
                    <option value="1919">1919</option>
                    <option value="1918">1918</option>
                    <option value="1917">1917</option>
                    <option value="1916">1916</option>
                    <option value="1915">1915</option>
                    <option value="1914">1914</option>
                    <option value="1913">1913</option>
                </select>
            </div>
            <div class="remember">
                <input type="checkbox" id="remember" /><label for="remember">Remember Me</label>
            </div>
            <div class="submit">
                <a id="formsubmit" class="formsubmit" data-submit="post">OK</a>
            </div>
        </form>
        <img src="img/white-logo.png">
      </div>
    </div>
</div>

<!-- Changes text to white after selecting an option -->
<script type="text/javascript">
  var daySelect = document.getElementById('day');
  daySelect.onchange = function () {
    daySelect.className = 'whiteText';
  }

  var monthSelect = document.getElementById('month');
  monthSelect.onchange = function () {
    monthSelect.className = 'whiteText';
  }

  var yearSelect = document.getElementById('year');
  yearSelect.onchange = function () {
    yearSelect.className = 'whiteText';
  }
</script>

<!-- end age modal -->






    <!-- Nav link scroll point -->
    <a name="home"></a>

    <!-- mobile navigation -->
    <!-- <div class="nav-mobile">
      <nav role="navigation">
        <div id="menuToggle">
          <input class ="menu-button" type="checkbox" />

          <span></span>
          <span></span>
          <span></span>

          <ul class="menu" id="menu">
            <li><a href="#home">Home</a></li>
            <li><a href="#our-story">Our Story</a></li>
            <li><a href="#our-craft">Our Craft</a></li>
            <li><a href="#awards">Awards</a></li>
            <li><a href="#cocktails">Cocktails</a></li>
            <li><a href="#buy">Buy</a></li>
            <li><a href="#contact">Contact</a></li>
          </ul>
        </div>
      </nav>
    </div> -->


    <!-- mobile nav -->
    <nav class="site-navbar">
          <input type="checkbox" id="toggle_menu" class="toggle-menu-checkbox" />
          <label for="toggle_menu" class="toggle-menu-label uppercase"></label>
          <input type="checkbox" id="toggle_overlay" class="toggle-overlay-checkbox" />
          <label for="toggle_menu" class="toggle-overlay-label uppercase"></label>
          <ul class="site-menu">
            <li class="site-menu-item"><a href="#home">Home</a></li>
            <li class="site-menu-item"><a href="#our-story">Our Story</a></li>
            <li class="site-menu-item"><a href="#our-craft">Our Craft</a></li>
            <li class="site-menu-item"><a href="#awards">Awards</a></li>
            <li class="site-menu-item"><a href="pages/assets.html" target="_blank">Press</a></li>
            <li class="site-menu-item"><a href="#cocktails">Cocktails</a></li>
            <li class="site-menu-item"><a href="#buy">Buy</a></li>
            <li class="site-menu-item"><a href="#contact">Contact</a></li>
          </ul>

        </nav>









    <!-- desktop nav -->
    <nav class="nav-desktop">
      <!-- <ul> -->
      <div class="row">
        <div class="col-xs-5">
          <ul>
            <li><a href="#home">Home</a></li>
            <li><a href="#our-story">Our Story</a></li>
            <li><a href="#our-craft">Our Craft</a></li>
            <li><a href="#awards">Awards</a></li>
          </ul>
        </div>
        <div class="col-xs-2">
          <ul class="logo-ul">
            <li><a href="index.html"><img src="img/nav-logo.png"></a></li>
          </ul>
        </div>
        <div class="col-xs-5">
          <ul>
            <li><a href="pages/assets.html" target="_blank">Press</a></li>
            <li><a href="#cocktails">Cocktails</a></li>
            <li><a href="#buy">Buy</a></li>
            <li><a href="#contact">Contact</a></li>
          </ul>
        </div>
      </div>
      <!-- </ul> -->
    </nav>

    <!-- hero -->
    <div class="hero">
      <div class="row">
        <div class="col-xs-12 col-sm-6">
          <h1>Distilled <br> to Perfection</h1>
        </div>
      </div>
    </div>

    <!-- scroll to top button and script -->
    <div>
      <a id="toTop" class="scroll-to-top" href="#home"><i class="fa fa-chevron-up" aria-hidden="true"></i></a>
    </div>

    <script>
      $(window).scroll(function() {
          if ($(this).scrollTop()) {
              $('#toTop').fadeIn();
          } else {
              $('#toTop').fadeOut();
          }
      });
    </script>
    <!-- end of scroll to top button and script -->

    <!-- Nav link scroll point -->
    <a name="our-story"></a>

    <!-- our story section -->
    <div class="our-story">
      <div class="row">
        <div class="col-xs-12 title">
          <h2>Our Story</h2>
          <hr>
        </div>
      </div>
      <div class="row">
        <div class="col-xs-12">
          <p>
            <span>"Hana"</span> is the Japanese word for flower,
            and that is our inspiration for our craft gin.
            Hana, made in small batches on Treasure Island in San Francisco,
            is deliberately distilled with only 4 botanicals for simplicity:
            lavender, orange peel, lemon peel, and Albanian juniper.
            We believe that all ingredients should be experienced
            when tasting an excellent spirit,
            so we employ the rare process of vacuum distillation
            to bring out the subtle nuances of our excellent botanicals.
          </p>
          <img src="img/our-story.jpg">
        </div>
      </div>
    </div>

    <!-- Nav link scroll point -->
    <a name="our-craft"></a>

    <!-- mobile our craft section -->
    <div class="our-craft-mobile">
      <div class="row">
        <div class="col-xs-12 title">
          <h2>The Road to Hana: Our Craft</h2>
          <hr>
        </div>
      </div>
      <div class="row">
        <div class="col-xs-6 craft-list-1">
          <ul class="first-list">
            <li class="ingredients-image">
              <img src="img/ingredients.jpg">
            </li>
            <li class="mash">
              <h5>
                Our Mash
              </h5>
              <p>
                The base for Hana Gin is produced by pot distilling
                a fermented grain mash made up of 100% American Corn
                and crystal clear water from the Sierra Nevadas.
              </p>
            </li>
            <li class="vacuum-image">
              <img src="img/bottle-1.jpg">
            </li>
            <li class="mastery">
              <h5>
                Mastery & Approval
              </h5>
              <p>
                We have a tasting panel, including our Master Distiller
                and our family test each production run to ensure that
                our product is consistently excellent.
              </p>
            </li>
            <li class="bottling-image">
              <img src="img/bottling.jpg">
            </li>
          </ul>
          <div class="circle circle-1"></div>
          <div class="circle"></div>
          <div class="circle"></div>
          <div class="circle"></div>
          <div class="circle"></div>
        </div>
        <div class="col-xs-6 craft-list-2">
          <ul class="final-list">
            <li class="ingredients">
              <h5>
                Ingredients
              </h5>
              <p>
                Our mantra is simplicity so we let our excellent ingredients
                speak for themselves. We source juniper berries from a farm
                in Albania that boasts the best and among the most sought
                after berries in the world. To complement the crisp juniper
                we carefully select orange and lemon peels as well as lavender.
              </p>
            </li>
            <li class="mash-image">
              <img src="img/lavender.jpg">
            </li>
            <li class="vacuum">
              <h5>
                Vacuum Distillation
              </h5>
              <p>
                Hana's botanicals are distilled via the nuanced vacuum distillation
                technique. In contrast to how most standard gins are made,
                vacuum distillation uses pressure in the still to extract
                the beautiful floral aromas, hints of crisp juniper and
                 citrus botanicals. This is an important distinction
                because we are able to distill at a slightly lower temperature
                 than is typical, allowing us to get the most out of our core ingredients
              </p>
            </li>
            <li class="mastery-image">
              <img src="img/mastery.jpg">
            </li>
            <li class="bottling">
              <h5>
                Hand Bottling
              </h5>
              <p>
                We hand-bottle the premium spirit into our elegant Hana bottles,
                which are accented with an etched orchid. The result is a modern
                gin of the highest quality, created with care and an unending
                attention to detail. We hope you enjoy drinking Hana gin as much
                as we enjoy making it.
              </p>
            </li>
          </ul>
        </div>
      </div>
    </div>

    <!-- desktop our craft section -->
    <div class="our-craft-desktop">
      <div class="row">
        <div class="col-xs-12 title">
          <h2>The Road to Hana: Our Craft</h2>
          <hr>
        </div>
      </div>
      <div class="row">
        <div class="col-xs-12">
          <ul class="first-list">
            <li>
              <img src="img/ingredients.jpg">
            </li>
            <li>
              <p>
                The base for Hana Gin is produced by pot distilling
                a fermented grain mash made up of 100% American Corn
                and crystal clear water from the Sierra Nevadas.
              </p>
              <h5>
                Our Mash
              </h5>
            </li>
            <li>
              <img src="img/bottle-1.jpg">
            </li>
            <li>
              <p>
                A tasting panel comprised of our Master Distiller and our family,
                test each production run to ensure that Hana Gin
                is consistently excellent.
              </p>
              <h5>
                Mastery & Approval
              </h5>
            </li>
            <li>
              <img src="img/bottling.jpg">
            </li>
          </ul>
          <hr class="green-line">
          <ul class="circle-list">
            <li>
              <div class="circle">

              </div>
            </li>
            <li>
              <div class="circle">

              </div>
            </li>
            <li>
              <div class="circle">

              </div>
            </li>
            <li>
              <div class="circle">

              </div>
            </li>
            <li>
              <div class="circle">

              </div>
            </li>
          </ul>
          <ul class="final-list">
            <li>
              <h5>
                Ingredients
              </h5>
              <p>
                Our mantra is simplicity so we let our excellent ingredients
                speak for themselves. We source juniper berries from a farm
                in Albania that boasts the best and among the most sought
                after berries in the world. To complement the crisp juniper
                we selected orange and lemon peels as well as lavender.
              </p>
            </li>
            <li>
              <img src="img/lavender.jpg">
            </li>
            <li class="vacuum-distillation">
              <h5>
                Vacuum Distillation
              </h5>
              <p>
                Hana's botanicals are then distilled via the nuanced vacuum
                distillation technique. In contrast to standard gin distillation,
                vacuum distillation uses pressure instead of higher temperatures
                to extract the beautiful floral aromas, hints of crisp juniper
                and citrus botanicals. This is an important distinction because
                standard distillation techniques can often over cook the botanicals
                at extremely high temperatures, losing the character of the core
                ingredients.
              </p>
            </li>
            <li>
              <img src="img/mastery.jpg">
            </li>
            <li>
              <h5>
                Hand Bottling
              </h5>
              <p>
                We hand-bottle the premium spirit into our elegant Hana bottles,
                which are accented with an etched orchid. The result is a modern
                gin of the highest quality, created with care and an unending
                attention to detail. We hope you enjoy drinking Hana gin as much
                as we enjoy making it.
              </p>
            </li>
          </ul>
        </div>
      </div>
    </div>

    <!-- Nav link scroll point -->
    <a name="awards"></a>

    <!-- awards section -->
    <div class="awards">
      <div class="row">
        <div class="col-xs-12 title">
          <h2>Awards</h2>
          <hr>
        </div>
      </div>
      <div class="row awards-row">
        <div class="col-xs-12 col-sm-4">
          <img class="points" src="img/award-4.png">
        </div>
        <div class="col-xs-12 col-sm-4">
          <img src="img/award-1.png">
        </div>
        <div class="col-xs-12 col-sm-4">
          <img src="img/award-2.png">
        </div>
      </div>
      <div class="row awards-row awards-row-2">
        <div class="image-container">
          <div class="col-xs-12 col-sm-6">
            <img class="review-of-spirits" src="img/award-3.png">
          </div>
          <div class="col-xs-12 col-sm-6">
            <img class="alcohol-afficionado" src="img/award-5.png">
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-xs-12">
          <div class="button-container">
            <a class="button" href="pages/assets.html" target="_blank">Click Here For Press & Trade Assets</a>
          </div>
        </div>
      </div>
    </div>

    <!-- Nav link scroll point -->
    <a name="cocktails"></a>

    <!-- cocktails section -->
    <div class="cocktails">
      <div class="row">
        <div class="col-xs-12 title">
          <h2>Cocktails</h2>
          <hr>
        </div>
      </div>
      <div class="row cocktail-row">
        <div class="col-xs-6 col-sm-2">
          <div class="cocktail-pic-9" data-toggle="modal" data-target="#kennyGTModal">
            <div class="image-overlay">
              <h6>Kenny G & T</h6>
            </div>
          </div>
          <!-- Modal -->
          <div class="modal fade" id="kennyGTModal" tabindex="-1" role="dialog" aria-labelledby="basicModal" aria-hidden="true">
            <div class="modal-dialog">
              <div class="modal-content">
                <div class="modal-body">
                  <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                  <div class="row">
                    <div class="col-xs-12">
                      <h4>Kenny G & T</h4>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-xs-1">
                      <button class="prev-next prev" type="button" onclick="showModal('magnoliaLaneMartiniModal')"><i class="fa fa-chevron-left" aria-hidden="true"></i></button>
                    </div>
                    <div class="col-xs-10 col-md-5 image">
                      <img src="img/kennygt.jpg">
                    </div>
                    <div class="col-xs-1 prev-next-sm-screens">
                      <button class="prev-next next" type="button" onclick="showModal('negroniModal')"><i class="fa fa-chevron-right" aria-hidden="true"></i></button>
                    </div>
                    <div class="col-xs-10 col-md-5">
                      <h5>Ingredients:</h5>
                      <ul>
                        <li>1¼ oz. hana</li>
                        <li>¼ oz. Solerno Blood Orange liqueur OR Cointreau</li>
                        <li>½ oz orange juice</li>
                        <li>¼ oz. lime juice</li>
                        <li>3 oz tonic water</li>
                      </ul>
                      <h5>Instructions:</h5>
                      <ol>
                        <li>Combine Gin, Orange liqueur, orange juice and lime juice.</li>
                        <li>Stir and add ice.</li>
                        <li>Top with tonic water.</li>
                      </ol>
                    </div>
                    <div class="col-xs-1 prev-next-lg-screens">
                      <button class="prev-next next" type="button" onclick="showModal('negroniModal')"><i class="fa fa-chevron-right" aria-hidden="true"></i></button>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-xs-12">
                      <img class="logo" src="img/black-logo.png">
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- end modal -->
        </div>


        <div class="col-xs-6 col-sm-2">
          <div class="cocktail-pic-10" data-toggle="modal" data-target="#kennyGTModal">
            <div class="image-overlay">
              <h6>Hana Gin Negroni</h6>
            </div>
          </div>
          <!-- Modal -->
          <div class="modal fade" id="negroniModal" tabindex="-1" role="dialog" aria-labelledby="basicModal" aria-hidden="true">
            <div class="modal-dialog">
              <div class="modal-content">
                <div class="modal-body">
                  <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                  <div class="row">
                    <div class="col-xs-12">
                      <h4>Hana Gin Negroni</h4>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-xs-1">
                      <button class="prev-next prev" type="button" onclick="showModal('kennyGTModal')"><i class="fa fa-chevron-left" aria-hidden="true"></i></button>
                    </div>
                    <div class="col-xs-10 col-md-5 image">
                      <img src="img/negroni.jpg">
                    </div>
                    <div class="col-xs-1 prev-next-sm-screens">
                      <button class="prev-next next" type="button" onclick="showModal('cucumberGimletModal')"><i class="fa fa-chevron-right" aria-hidden="true"></i></button>
                    </div>
                    <div class="col-xs-10 col-md-5">
                      <h5>Ingredients:</h5>
                      <ul>
                        <li>1½ oz Hana Gin</li>
                        <li>1 oz Campari</li>
                        <li>1 oz Sweet Vermouth</li>
                        <li>Orange Peel</li>
                      </ul>
                      <h5>Instructions:</h5>
                      <ol>
                        <li>Mix all ingredients in a mixing glass, add ice and stir quickly. Strain into a glass and garnish with orange peel.</li>
                      </ol>
                    </div>
                    <div class="col-xs-1 prev-next-lg-screens">
                      <button class="prev-next next" type="button" onclick="showModal('cucumberGimletModal')"><i class="fa fa-chevron-right" aria-hidden="true"></i></button>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-xs-12">
                      <img class="logo" src="img/black-logo.png">
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- end modal -->
        </div>


        <div class="col-xs-6 col-sm-2">
          <div class="cocktail-pic-1" data-toggle="modal" data-target="#cucumberGimletModal">
            <div class="image-overlay">
              <h6>Cucumber Gimlet</h6>
            </div>
          </div>
          <!-- Modal -->
          <div class="modal fade" id="cucumberGimletModal" tabindex="-1" role="dialog" aria-labelledby="basicModal" aria-hidden="true">
            <div class="modal-dialog">
              <div class="modal-content">
                <div class="modal-body">
                  <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                  <div class="row">
                    <div class="col-xs-12">
                      <h4>Cucumber Gimlet</h4>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-xs-1">
                      <button class="prev-next prev" type="button" onclick="showModal('negroniModal')"><i class="fa fa-chevron-left" aria-hidden="true"></i></button>
                    </div>
                    <div class="col-xs-10 col-md-5 image">
                      <img src="img/cucumber-gimlet.jpg">
                    </div>
                    <div class="col-xs-1 prev-next-sm-screens">
                      <button class="prev-next next" type="button" onclick="showModal('cucumberGinTonicModal')"><i class="fa fa-chevron-right" aria-hidden="true"></i></button>
                    </div>
                    <div class="col-xs-10 col-md-5">
                      <h5>Ingredients:</h5>
                      <ul>
                        <li>2 thin slices of cucumber</li>
                        <li>2 oz. Hana Gin</li>
                        <li>1 oz fresh lime juice</li>
                        <li>½ oz. agave nectar</li>
                        <li>lime slices</li>
                      </ul>
                      <h5>Instructions:</h5>
                      <ol>
                        <li>Muddle cucumber slices in a shaker. Add Hana Gin, lime juice and agave nectar.</li>
                        <li>Fill with ice and set aside.</li>
                        <li>Shake vigorously for 7 seconds, then strain into a Collins glass.</li>
                        <li>Add ice and garnish with lime and cucumber slices and serve.</li>
                      </ol>
                    </div>
                    <div class="col-xs-1 prev-next-lg-screens">
                      <button class="prev-next next" type="button" onclick="showModal('cucumberGinTonicModal')"><i class="fa fa-chevron-right" aria-hidden="true"></i></button>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-xs-12">
                      <img class="logo" src="img/black-logo.png">
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- end modal -->
        </div>


        <div class="col-xs-6 col-sm-2">
          <div class="cocktail-pic-2" data-toggle="modal" data-target="#cucumberGinTonicModal">
            <div class="image-overlay">
              <h6>Cubumber Gin Tonic</h6>
            </div>
          </div>
          <!-- modal -->
          <div class="modal fade" id="cucumberGinTonicModal" tabindex="-1" role="dialog" aria-labelledby="basicModal" aria-hidden="true">
            <div class="modal-dialog">
              <div class="modal-content">
                <div class="modal-body">
                  <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                  <div class="row">
                    <div class="col-xs-12">
                      <h4>Cucumber Gin Tonic</h4>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-xs-1">
                      <button class="prev-next prev" type="button" onclick="showModal('cucumberGimletModal')"><i class="fa fa-chevron-left" aria-hidden="true"></i></button>
                    </div>
                    <div class="col-xs-10 col-md-5">
                      <img src="img/cucumber-gin-tonic.jpg">
                    </div>
                    <div class="col-xs-1 prev-next-sm-screens">
                      <button class="prev-next next" type="button" onclick="showModal('hanaFizzModal')"><i class="fa fa-chevron-right" aria-hidden="true"></i></button>
                    </div>
                    <div class="col-xs-10 col-md-5">
                      <h5>Ingredients:</h5>
                      <ul>
                        <li>Cucumber Slices</li>
                        <li>2 oz. Hana Gin</li>
                        <li>Tonic water</li>
                      </ul>
                      <h5>Instructions:</h5>
                      <ol>
                        <li>Muddle the cucumber.</li>
                        <li>Add ice and Hana gin.</li>
                        <li>Lastly, top off with tonic water. Do not stir.</li>
                      </ol>
                    </div>
                    <div class="col-xs-1 prev-next-lg-screens">
                      <button class="prev-next next" type="button" onclick="showModal('hanaFizzModal')"><i class="fa fa-chevron-right" aria-hidden="true"></i></button>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-xs-12">
                      <img class="logo" src="img/black-logo.png">
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- end modal -->
        </div>
        <div class="col-xs-6 col-sm-2">
          <div class="cocktail-pic-3" data-toggle="modal" data-target="#hanaFizzModal">
            <div class="image-overlay">
              <h6>Hana Fizz</h6>
            </div>
          </div>
          <!-- modal -->
          <div class="modal fade" id="hanaFizzModal" tabindex="-1" role="dialog" aria-labelledby="basicModal" aria-hidden="true">
            <div class="modal-dialog">
              <div class="modal-content">
                <div class="modal-body">
                  <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                  <div class="row">
                    <div class="col-xs-12">
                      <h4>Hana Fizz</h4>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-xs-1">
                      <button class="prev-next prev" type="button" onclick="showModal('cucumberGinTonicModal')"><i class="fa fa-chevron-left" aria-hidden="true"></i></button>
                    </div>
                    <div class="col-xs-10 col-md-5 image">
                      <img src="img/hana-fizz.jpg">
                    </div>
                    <div class="col-xs-1 prev-next-sm-screens">
                      <button class="prev-next next" type="button" onclick="showModal('hanaGinMargaritaModal')"><i class="fa fa-chevron-right" aria-hidden="true"></i></button>
                    </div>
                    <div class="col-xs-10 col-md-5">
                      <h5>Ingredients:</h5>
                      <ul>
                        <li>3 basil leaves</li>
                        <li>Strawberries</li>
                        <li>1 oz. Hana Gin</li>
                        <li>2 oz. fresh lemonade</li>
                        <li>Club soda</li>
                      </ul>
                      <h5>Instructions:</h5>
                      <ol>
                        <li>In a double Old Fashioned glass, muddle the strawberry and basil leaves.</li>
                        <li>Fill with ice and set aside.</li>
                        <li>Add Hana gin and lemonade to a shaker and fill with fresh ice.</li>
                        <li>Shake, and strain into the prepared glass.</li>
                        <li>Top with a splash of club soda and garnish with a strawberry and a basil leaf.</li>
                      </ol>
                    </div>
                    <div class="col-xs-1 prev-next-lg-screens">
                      <button class="prev-next next" type="button" onclick="showModal('hanaGinMargaritaModal')"><i class="fa fa-chevron-right" aria-hidden="true"></i></button>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-xs-12">
                      <img class="logo" src="img/black-logo.png">
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- end modal -->
        </div>
        <div class="col-xs-6 col-sm-2">
          <div class="cocktail-pic-4" data-toggle="modal" data-target="#hanaGinMargaritaModal">
            <div class="image-overlay">
              <h6>Hana Gin Margarita</h6>
            </div>
          </div>
          <!-- modal -->
          <div class="modal fade" id="hanaGinMargaritaModal" tabindex="-1" role="dialog" aria-labelledby="basicModal" aria-hidden="true">
            <div class="modal-dialog">
              <div class="modal-content">
                <div class="modal-body">
                  <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                  <div class="row">
                    <div class="col-xs-12">
                      <h4>Hana Gin Margarita</h4>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-xs-1">
                      <button class="prev-next prev" type="button" onclick="showModal('hanaFizzModal')"><i class="fa fa-chevron-left" aria-hidden="true"></i></button>
                    </div>
                    <div class="col-xs-10 col-md-5 image">
                      <img src="img/hana-gin-margarita.jpg">
                    </div>
                    <div class="col-xs-1 prev-next-sm-screens">
                      <button class="prev-next next" type="button" onclick="showModal('honeyHanaModal')"><i class="fa fa-chevron-right" aria-hidden="true"></i></button>
                    </div>
                    <div class="col-xs-10 col-md-5">
                      <h5>Ingredients:</h5>
                      <ul>
                        <li>2 oz. Hana Gin</li>
                        <li>1 oz. lime juice</li>
                        <li>½ oz. agave nectar</li>
                      </ul>
                      <h5>Instructions:</h5>
                      <ol>
                        <li>Pour Hana Gin, lime juice, and agave nectar into a cocktail shaker filled with ice.</li>
                        <li>Shake until chilled.</li>
                        <li>Strain and serve with a lime wedge.</li>
                      </ol>
                    </div>
                    <div class="col-xs-1 prev-next-lg-screens">
                      <button class="prev-next next" type="button" onclick="showModal('honeyHanaModal')"><i class="fa fa-chevron-right" aria-hidden="true"></i></button>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-xs-12">
                      <img class="logo" src="img/black-logo.png">
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- end modal -->
        </div>
        <div class="col-xs-6 col-sm-2">
          <div class="cocktail-pic-5" data-toggle="modal" data-target="#honeyHanaModal">
            <div class="image-overlay">
              <h6>Honey Hana</h6>
            </div>
          </div>
          <!-- modal -->
          <div class="modal fade" id="honeyHanaModal" tabindex="-1" role="dialog" aria-labelledby="basicModal" aria-hidden="true">
            <div class="modal-dialog">
              <div class="modal-content">
                <div class="modal-body">
                  <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                  <div class="row">
                    <div class="col-xs-12">
                      <h4>Honey Hana</h4>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-xs-1">
                      <button class="prev-next prev" type="button" onclick="showModal('hanaGinMargaritaModal')"><i class="fa fa-chevron-left" aria-hidden="true"></i></button>
                    </div>
                    <div class="col-xs-10 col-md-5 image">
                      <img src="img/honey-hana.jpg">
                    </div>
                    <div class="col-xs-1 prev-next-sm-screens">
                      <button class="prev-next next" type="button" onclick="showModal('pearThymeModal')"><i class="fa fa-chevron-right" aria-hidden="true"></i></button>
                    </div>
                    <div class="col-xs-10 col-md-5">
                      <h5>Ingredients:</h5>
                      <ul>
                        <li>1 (46 fluid oz.) can pineapple juice</li>
                        <li>1 (46 fluid oz.) can grapefruit juice</li>
                        <li>1 (8oz.) jar honey</li>
                        <li>2 cups Hana Gin</li>
                      </ul>
                      <h5>Instructions:</h5>
                      <ol>
                        <li>In a blender combine pineapple juice, grapefruit juice, honey and Hana Gin.</li>
                        <li>Blend until frothy.</li>
                        <li>Pour into a pitcher and serve.</li>
                      </ol>
                    </div>
                    <div class="col-xs-1 prev-next-lg-screens">
                      <button class="prev-next next" type="button" onclick="showModal('pearThymeModal')"><i class="fa fa-chevron-right" aria-hidden="true"></i></button>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-xs-12">
                      <img class="logo" src="img/black-logo.png">
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- end modal -->
        </div>
        <div class="col-xs-6 col-sm-2">
          <div class="cocktail-pic-6" data-toggle="modal" data-target="#pearThymeModal">
            <div class="image-overlay">
              <h6>Pear & Thyme Gin Fizz</h6>
            </div>
          </div>
          <!-- modal -->
          <div class="modal fade" id="pearThymeModal" tabindex="-1" role="dialog" aria-labelledby="basicModal" aria-hidden="true">
            <div class="modal-dialog">
              <div class="modal-content">
                <div class="modal-body">
                  <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                  <div class="row">
                    <div class="col-xs-12">
                      <h4>Pear & Thyme Gin Fizz</h4>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-xs-1">
                      <button class="prev-next prev" type="button" onclick="showModal('honeyHanaModal')"><i class="fa fa-chevron-left" aria-hidden="true"></i></button>
                    </div>
                    <div class="col-xs-10 col-md-5 image">
                      <img src="img/pear-thyme-gin-fizz.jpg">
                    </div>
                    <div class="col-xs-1 prev-next-sm-screens">
                      <button class="prev-next next" type="button" onclick="showModal('raspberryBloomModal')"><i class="fa fa-chevron-right" aria-hidden="true"></i></button>
                    </div>
                    <div class="col-xs-10 col-md-5">
                      <h5>Ingredients:</h5>
                      <ul>
                        <li>2 oz. Hana Gin</li>
                        <li>2 oz. pear juice</li>
                        <li>½ oz. simple syrup</li>
                        <li>½ teaspoon thyme leaves</li>
                        <li>2 oz. club soda</li>
                      </ul>
                      <h5>Instructions:</h5>
                      <ol>
                        <li>Add the gin, pear juice, simple syrup and thyme to a cocktail shaker.</li>
                        <li>Muddle the thyme leaves with a muddler or the back of a wooden spoon.</li>
                        <li>Fill with ice and shake well.</li>
                        <li>Pour into a chilled cocktail glass and top off with the club soda.</li>
                      </ol>
                    </div>
                    <div class="col-xs-1 prev-next-lg-screens">
                      <button class="prev-next next" type="button" onclick="showModal('raspberryBloomModal')"><i class="fa fa-chevron-right" aria-hidden="true"></i></button>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-xs-12">
                      <img class="logo" src="img/black-logo.png">
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- end modal -->
        </div>
        <div class="col-xs-6 col-sm-2">
          <div class="cocktail-pic-7" data-toggle="modal" data-target="#raspberryBloomModal">
            <div class="image-overlay">
              <h6>Rasperry Bloom</h6>
            </div>
          </div>
          <!-- modal -->
          <div class="modal fade" id="raspberryBloomModal" tabindex="-1" role="dialog" aria-labelledby="basicModal" aria-hidden="true">
            <div class="modal-dialog">
              <div class="modal-content">
                <div class="modal-body">
                  <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                  <div class="row">
                    <div class="col-xs-12">
                      <h4>Raspberry Bloom</h4>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-xs-1">
                      <button class="prev-next prev" type="button" onclick="showModal('pearThymeModal')"><i class="fa fa-chevron-left" aria-hidden="true"></i></button>
                    </div>
                    <div class="col-xs-10 col-md-5 image">
                      <img src="img/raspberry-bloom.jpg">
                    </div>
                    <div class="col-xs-1 prev-next-sm-screens">
                      <button class="prev-next next" type="button" onclick="showModal('whitePeachModal')"><i class="fa fa-chevron-right" aria-hidden="true"></i></button>
                    </div>
                    <div class="col-xs-10 col-md-5">
                      <h5>Ingredients:</h5>
                      <ul>
                        <li>7 raspberries</li>
                        <li>1 tablespoon of sugar</li>
                        <li>1 oz. lemon juice</li>
                        <li>¾ oz. Cointreau</li>
                        <li>¾ oz. Cocchi Americano</li>
                        <li>½ oz. dry vermouth</li>
                        <li>2 dashes orange bitters</li>
                        <li>1¾ oz. Hana gin</li>
                        <li>1 oz. prosecco float</li>
                      </ul>
                      <h5>Instructions:</h5>
                      <ol>
                        <li>Muddle raspberries, sugar, and lemon juice vigorously.</li>
                        <li>Add Cointreau, Cocchi, vermouth, bitters, and Hana Gin.</li>
                        <li>Pour in the glass and top with prosecco.</li>
                        <li>Garnish 2 raspberries on a pick.</li>
                        <li>Serve in a rocks glass with one big ice cube.</li>
                      </ol>
                    </div>
                    <div class="col-xs-1 prev-next-lg-screens">
                      <button class="prev-next next" type="button" onclick="showModal('whitePeachModal')"><i class="fa fa-chevron-right" aria-hidden="true"></i></button>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-xs-12">
                      <img class="logo" src="img/black-logo.png">
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- end modal -->
        </div>
        <div class="col-xs-6 col-sm-2">
          <div class="cocktail-pic-8" data-toggle="modal" data-target="#whitePeachModal">
            <div class="image-overlay">
              <h6>White Peach Refresher</h6>
            </div>
          </div>

          <!-- modal -->
          <div class="modal fade" id="whitePeachModal" tabindex="-1" role="dialog" aria-labelledby="basicModal" aria-hidden="true">
            <div class="modal-dialog">
              <div class="modal-content">
                <div class="modal-body">
                  <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                  <div class="row">
                    <div class="col-xs-12">
                      <h4>White Peach Refresher</h4>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-xs-1">
                      <button class="prev-next prev" type="button" onclick="showModal('raspberryBloomModal')"><i class="fa fa-chevron-left" aria-hidden="true"></i></button>
                    </div>
                    <div class="col-xs-10 col-md-5 image">
                      <img src="img/white-peach-refresher.jpg">
                    </div>
                    <div class="col-xs-1 prev-next-sm-screens">
                      <button class="prev-next next" type="button" onclick="showModal('gingerGinGimletModal')"><i class="fa fa-chevron-right" aria-hidden="true"></i></button>
                    </div>
                    <div class="col-xs-10 col-md-5">
                      <h5>Ingredients:</h5>
                      <ul>
                        <li>2 oz. Hana Gin (chilled)</li>
                        <li>2 oz. club soda (chilled)</li>
                        <li>1 oz simple syrup</li>
                        <li>Pinch of sugar</li>
                        <li>4 raspberries (for garnish)</li>
                        <li>2 white peach slices (1 for muddling & 1 for garnish)</li>
                      </ul>
                      <h5>Instructions:</h5>
                      <ol>
                        <li>Muddle 1 of the peach slices in the bottom of a stirring glass.</li>
                        <li>Add the gin, club soda, 3 tablespoons of the simple syrup, and the sugar.</li>
                        <li>Stir until blended. Garnish with the raspberries and the remaining peach slice.</li>
                        <li>Serve immediately.</li>
                      </ol>
                    </div>
                    <div class="col-xs-1 prev-next-lg-screens">
                      <button class="prev-next next" type="button" onclick="showModal('gingerGinGimletModal')"><i class="fa fa-chevron-right" aria-hidden="true"></i></button>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-xs-12">
                      <img class="logo" src="img/black-logo.png">
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- end modal -->
        </div>


        <div class="col-xs-6 col-sm-2">
          <div class="cocktail-pic-11" data-toggle="modal" data-target="#gingerGinGimletModal">
            <div class="image-overlay">
              <h6>Ginger Gin Gimlet</h6>
            </div>
          </div>

          <!-- modal -->
          <div class="modal fade" id="gingerGinGimletModal" tabindex="-1" role="dialog" aria-labelledby="basicModal" aria-hidden="true">
            <div class="modal-dialog">
              <div class="modal-content">
                <div class="modal-body">
                  <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                  <div class="row">
                    <div class="col-xs-12">
                      <h4>Ginger Gin Gimlet</h4>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-xs-1">
                      <button class="prev-next prev" type="button" onclick="showModal('whitePeachModal')"><i class="fa fa-chevron-left" aria-hidden="true"></i></button>
                    </div>
                    <div class="col-xs-10 col-md-5 image">
                      <img src="img/ginger-gin-gimlet.jpg">
                    </div>
                    <div class="col-xs-1 prev-next-sm-screens">
                      <button class="prev-next next" type="button" onclick="showModal('magnoliaLaneMartiniModal')"><i class="fa fa-chevron-right" aria-hidden="true"></i></button>
                    </div>
                    <div class="col-xs-10 col-md-5">
                      <h5>Ingredients:</h5>
                      <ul>
                        <li>1 Lime</li>
                        <li>Sliced Ginger</li>
                        <li>2 oz Hana Gin</li>
                        <li>½ oz Simple Syrup</li>
                      </ul>
                      <h5>Instructions:</h5>
                      <ol>
                        <li>Juice lime into shaker add 3 slices of ginger muddle together.</li>
                        <li>Add Hana Gin and Simple Syrup.</li>
                        <li>Fill with ice and shake.</li>
                        <li>Strain into glass. Garnish with ginger.</li>
                      </ol>
                    </div>
                    <div class="col-xs-1 prev-next-lg-screens">
                      <button class="prev-next next" type="button" onclick="showModal('magnoliaLaneMartiniModal')"><i class="fa fa-chevron-right" aria-hidden="true"></i></button>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-xs-12">
                      <img class="logo" src="img/black-logo.png">
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- end modal -->
        </div>


        <div class="col-xs-6 col-sm-2">
          <div class="cocktail-pic-12" data-toggle="modal" data-target="#magnoliaLaneMartiniModal">
            <div class="image-overlay">
              <h6>Magnolia Lane Martini</h6>
            </div>
          </div>


          <!-- modal -->
          <div class="modal fade" id="magnoliaLaneMartiniModal" tabindex="-1" role="dialog" aria-labelledby="basicModal" aria-hidden="true">
            <div class="modal-dialog">
              <div class="modal-content">
                <div class="modal-body">
                  <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                  <div class="row">
                    <div class="col-xs-12">
                      <h4>Magnolia Lane Martini</h4>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-xs-1">
                      <button class="prev-next prev" type="button" onclick="showModal('gingerGinGimletModal')"><i class="fa fa-chevron-left" aria-hidden="true"></i></button>
                    </div>
                    <div class="col-xs-10 col-md-5 image">
                      <img src="img/magnolia-lane-martini.jpg">
                    </div>
                    <div class="col-xs-1 prev-next-sm-screens">
                      <button class="prev-next next" type="button" onclick="showModal('kennyGTModal')"><i class="fa fa-chevron-right" aria-hidden="true"></i></button>
                    </div>
                    <div class="col-xs-10 col-md-5">
                      <h5>Ingredients:</h5>
                      <ul>
                        <li>2 oz. Hana Gin</li>
                        <li>1/8 oz. agave nectar (not agave juice) or simple syrup</li>
                        <li>1 mint leaf</li>
                        <li>½ oz. Bull & Bush Man Beer</li>
                      </ul>
                      <h5>Instructions:</h5>
                      <ol>
                        <li>Combine Hana Gin and agave nectar.</li>
                        <li>Shake hard with ice and strain into a martini glass</li>
                        <li>Top with ½ oz. Bull & Bush Man Beer (or whatever IPA you have).</li>
                        <li>Garnish with grapefruit wheel/mint leaf</li>
                      </ol>
                    </div>
                    <div class="col-xs-1 prev-next-lg-screens">
                      <button class="prev-next next" type="button" onclick="showModal('kennyGTModal')"><i class="fa fa-chevron-right" aria-hidden="true"></i></button>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-xs-12">
                      <img class="logo" src="img/black-logo.png">
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- end modal -->
        </div>







      </div>
    </div>

    <!-- script for previous and next buttons -->
    <script>
      function showModal(id) {
        $(".modal").modal('hide');
        $("#" + id).modal();
      }
    </script>

    <!-- Nav link scroll point -->
    <a name="buy"></a>

    <!-- location section -->
    <div class="location">
      <div class="row">
        <div class="col-xs-12 title location-title">
          <h2>Where You Can Find Us</h2>
          <hr>
        </div>
      </div>
      <div class="row">
        <div class="col-xs-12 col-sm-6">
          <div id="map-canvas"></div>
        </div>
        <div class="col-xs-12 col-sm-6">
          <div id="panel"></div>
          <div class="show-more">
            <a href="#">Show more</a>
          </div>
        </div>
      </div>
    </div>

    <script>

      $( document ).ready(function() {
        $(document).on("click", ".show-more a", function(e) {
        		e.preventDefault();
            if($(this).text() == "Show more"){
                $(this).text("Show less")
                $('#panel').addClass('tall')
                $('li.store:nth-of-type(4)').addClass('visible')
                $('li.store:nth-of-type(5)').addClass('visible')
                $('li.store:nth-of-type(6)').addClass('visible')
                $('li.store:nth-of-type(7)').addClass('visible')
                $('li.store:nth-of-type(8)').addClass('visible')
                $('li.store:nth-of-type(9)').addClass('visible')
                $('li.store:nth-of-type(10)').addClass('visible')
            } else {
                $(this).text("Show more")
                $('#panel').removeClass('tall')
                $('li.store:nth-of-type(4)').removeClass('visible')
                $('li.store:nth-of-type(5)').removeClass('visible')
                $('li.store:nth-of-type(6)').removeClass('visible')
                $('li.store:nth-of-type(7)').removeClass('visible')
                $('li.store:nth-of-type(8)').removeClass('visible')
                $('li.store:nth-of-type(9)').removeClass('visible')
                $('li.store:nth-of-type(10)').removeClass('visible')
            };

            $this.text(linkText);
        });
      });

      // $(".show-more a").on("click", function() {
      //   if(linkText === "SHOW MORE"){
      //       linkText = "Show less";
      //       // $('li.store:nth-of-type(4)').css('visible', 'visible');
      //       $('li.store:nth-of-type(4)').css('display', 'block');
      //       $('li.store:nth-of-type(5)').css('display', 'block');
      //       $('li.store:nth-of-type(6)').css('display', 'block');
      //       $('li.store:nth-of-type(7)').css('display', 'block');
      //       $('li.store:nth-of-type(8)').css('display', 'block');
      //       $('li.store:nth-of-type(9)').css('display', 'block');
      //       $('li.store:nth-of-type(10)').css('display', 'block');
      //   } else {
      //       linkText = "Show more";
      //       // $('.hidden').css('visible', 'hidden');
      //       $('li.store:nth-of-type(4)').css('display', 'none');
      //       $('li.store:nth-of-type(5)').css('display', 'none');
      //       $('li.store:nth-of-type(6)').css('display', 'none');
      //       $('li.store:nth-of-type(7)').css('display', 'none');
      //       $('li.store:nth-of-type(8)').css('display', 'none');
      //       $('li.store:nth-of-type(9)').css('display', 'none');
      //       $('li.store:nth-of-type(10)').css('display', 'none');
      //   };
      //
      //   $this.text(linkText);
      // });
    </script>

    <!-- Nav link scroll point -->
    <a name="contact"></a>

    <!-- contact section -->
    <div class="contact">
      <div class="row">
        <div class="col-xs-12 title">
          <h2>Contact Us</h2>
          <hr>
        </div>
      </div>
      <div class="row">
        <div class="col-xs-12 col-sm-6">
          <form action="" method="post">
            <h3>Send us a message below...</h3>
            <p>Your Name*</p>
            <input type="text" name="name">
            <p>Company Name*</p>
            <input type="text" name="company">
            <p>Company Type*</p>
            <select class="small-input" name="companytype">
              <option value="" selected="selected">Select</option>
              <option value="Retailer">Retailer</option>
              <option value="Distributor">Distributor</option>
              <option value="Individual/Customer">Individual/Customer</option>
              <option value="Press/Media">Press/Media</option>
              <option value="Other">Other</option>
            </select>
            <p>Email Address*</p>
            <input type="text" name="email">
            <p>Phone Number*</p>
            <input type="tel" name="phone">
            <p>Message*</p>
            <input type="text" name="message">
            <div class="button-container">
              <button class="button" type="submit" name="submit">Submit</button>
            </div>
          </form>
        </div>
        <div class="col-xs-12 col-sm-4 address">
          <h3>Address</h3>
          <p>
            500 Sansome Street #600
            <br>
            San Francisco, CA 94111
            <br>
            +1 415-813-5045
            <br>
            hana@brandedspiritsusa.com
          </p>
          <div class="office-map" style="overflow: hidden;">
              <iframe style="position:relative; top:-50px; border:none;" src="https://www.google.com/maps/d/embed?mid=1MMQhdWelzSPPP1iyYGn66LwRDD4" width="300" height="300"></iframe>
          </div>
        </div>
      </div>
    </div>

    <footer>
      <div class="row">
        <div class="col-xs-12">
          <img src="img/nav-logo.png">
          <br>
          <a class="facebook" href="https://www.facebook.com/TheHanaGin/"><i class="fa fa-facebook" aria-hidden="true"></i></a>
          <a class="facebook" href="https://www.instagram.com/hanaginusa/"><i class="fa fa-instagram" aria-hidden="true"></i></a>
          <a class="facebook" href="https://twitter.com/hanaginusa"><i class="fa fa-twitter" aria-hidden="true"></i></a>
          <a class="facebook" href="https://www.linkedin.com/company/branded-spirits-usa-ltd"><i class="fa fa-linkedin" aria-hidden="true"></i></a>
          <p>Crafted in California</p>
          <p>© 2017 <a href="http://brandedspiritsusa.com/">Branded Spirits USA Ltd.</a></p>
        </div>
      </div>
    </footer>


  </div>

    <!-- javascripts -->
    <script
      src="https://code.jquery.com/jquery-3.2.1.min.js"
      integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4="
      crossorigin="anonymous">
    </script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    <script type="text/javascript" src="js/animateScroll.js"></script>
    <script type="text/javascript" src="js/ageVerify.js"></script>
  </body>
</html>
