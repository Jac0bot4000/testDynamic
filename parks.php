<?php
    $pageTitle = "Home";
    require_once('./assets/inc/header.inc.php');
?>

    <main id="content">
        <h1>Parks</h1>
        <h2 id="nickerson">Nickerson State Park</h2>
            <p class="address">3488 Main St, Brewster, MA 02631</p>
            <p>Nickerson State Park is one of the largest parks on the Cape, with offerings for both short hikes and multi-night campouts. The park features its own lakes and trails for visitors to explore and take in the sights. Additionally, situated right along the <a href="biking.html">Cape Cod Rail Trail</a>, you can bike to and from the park from a large portion of the Cape connected by the CCRT.</p>
            <p>If you are interested in camping, sites can be reserved on the <a href="https://massdcrcamping.reserveamerica.com/camping/nickerson-state-park/r/campgroundDetails.do?contractCode=MA&parkId=32601" target="_blank">park website</a>; otherwise, parking is available for day trips, with MA residents paying $8, and all others paying $30—residency is determined by license plate registration <a href="references.html#27">(27)</a>.</p>
            <div class="locationImages">
                <figure class="imgContent">
                    <img src="assets/images/nickersonBeach.jpeg" alt="Lake beach at Nickerson State Park" onclick="spotlight(this);">
                    <figcaption><a href="references.html#28">(28)</a></figcaption>
                </figure>
                <figure class="imgContent">
                    <img src="assets/images/nickersonTrail.jpeg" alt="Trail through Nickerson State Park" onclick="spotlight(this);">
                    <figcaption><a href="references.html#28">(28)</a></figcaption>
                </figure>
            </div>

        <h2 id="gardens">Heritage Museums & Gardens</h2>
            <p class="address">67 Grove St, Sandwich, MA 02563</p>
            <p>If you are looking for a unique activity on the Cape, a must-visit spot is that Heritage Museums and Gardens. Of all the attractions here, a cool centerpiece is the automotive museum, which features more than 40 historic and classic cars, dating back to the Ford Model-T. Beyond the historic cars, there are gardens that span the 100 acre property with beautiful flowers and trees that bloom throughout different times of the summer; take your time walking the paths to fully take in all of the sights, as there is truly more to see than can be accomplished in one day.</p>
            <p>Additionally, check their website for special events, as they have a variety of activities that happen every now and then, from concerts and art exhibitions, to family activities and holiday specials.</p>
            <p>Beyond the museums and gardens, they also feature one of the best activities courses Massachusetts has to offer. Take your kids to try out their high adventure ropes course that leads you on an excursion through the trees. </p>
            <div class="locationImages">
                <figure class="imgContent">
                    <img src="assets/images/gardenStairs.png" alt="Flower-lined stairs" onclick="spotlight(this);">
                    <figcaption>Jacob Brodeur</figcaption>
                </figure>
                <figure class="imgContent">
                    <img src="assets/images/gardenFountain.png" alt="Water fountain in a garden pond" onclick="spotlight(this);">
                    <figcaption>Jacob Brodeur</figcaption>
                </figure>
                <figure class="imgContent">
                    <img src="assets/images/gardenSculpture.png" alt="Mosaic bird sculpture in a garden" onclick="spotlight(this);">
                    <figcaption>Jacob Brodeur</figcaption>
                </figure>
                <figure class="imgContent">
                    <img src="assets/images/gardenCars.png" alt="Old classic cars" onclick="spotlight(this);">
                    <figcaption>Jacob Brodeur</figcaption>
                </figure>
            </div>
<?php
    require_once('./assets/inc/footer.inc.php');
?>