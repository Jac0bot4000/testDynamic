<?php
    $pageTitle = "Biking";
    require_once('./assets/inc/header.inc.php');
?>    

    <main id="content">
        <h1>Biking</h1>
        <p class="overview">Biking on the Cape is a great form of exercise, as well as a means of transportation in certain areas. The Cape Cod Rail Trail (CCRT) stretches 25 miles from Yarmouth to Wellfleet with a smooth, paved path that passes through Nickerson State Park, and many other attractions. Due to the geography of Cape Cod, much of the path is very flat so there are not many difficult hills, making it a pleasant experience for all levels of cyclists. During summer months, expect to see many other users, so make sure to read up on <a href="https://www.mass.gov/locations/cape-cod-rail-trail#:~:text=Trail%20etiquette,trash%20and%20belongings." target="_blank">trail etiquette</a>. There is plenty of free parking at various trailheads across the Cape, with a few locations even offering bike rentals.</p>

        <h2 id="rentals">Bike Rentals</h2>
        <a href="references.html#24">(24)</a>
            <div class="rentals">
                <div class="rental">
                    <h3>Barb's Bike Shop</h3>
                    <p class="address">3454, 430 MA-134, South Dennis, MA 02660</p>
                </div>
                <div class="rental">
                    <h3>Dennis Cycle Center</h3>
                    <p class="address">249 Great Western Rd, South Dennis, MA 02660</p>
                </div>
                <div class="rental">
                    <h3>Brewster Bike</h3>
                    <p class="address">442 Underpass Rd, Brewster, MA 02631</p>
                </div>
                <div class="rental">
                    <h3>Idle Times Bike Shop</h3>
                    <p class="address">188 Bracket Road, Eastham, MA 02651</p>
                </div>
                <div class="rental">
                    <h3>Orleans Cycle</h3>
                    <p class="address">26 Main St, Orleans, MA 02653</p>
                </div>
            </div>
        
        <div id="trailMap">
            <h2>Trail Map</h2>
                <figure>
                    <img src="assets/images/CCRT_KioskMap2023_0-1.png" alt="Cape Cod Rail Trail Map" onclick="spotlight(this);">
                    <figcaption><a href="references.html#23">(23)</a></figcaption>
                </figure>
        </div>
<?php
    require_once('./assets/inc/footer.inc.php');
?>