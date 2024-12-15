<?php
    $pageTitle = "Beaches";
    require_once('./assets/inc/header.inc.php');
?>

    <main id="content">
        <h1>Beaches</h1>
            <p class="overview">One of the main attractions on the Cape are the beautiful, world-class beaches. There are two main categories of beaches on the cape, classified by location: bay side and sound side. Bay side beaches tend to have calmer surf and massive tides, making it great for families with small children, or those looking for a more relaxing experience. The sound side beaches commonly have bigger, stronger waves which are great for those looking to do various activities on the water such as surfing.</p>

            <h2>Bay Side</h2>
                <h3>Mayflower Beach</h3>
                    <p class="address">14 Horsefoot Path, Dennis, MA 02638</p>
                    <p>One of the perks of Mayflower Beach is that it has updated restroom and dining facilities, making it a favorite for many families with young children. The snack bar serves both hot food and ice cream, as well as delicious frozen lemonade.</p>
                    <p>An important note is that because of the popularity of the beach, it is very difficult to get parking, so you have to be sure to show up really early in the day—usually before 10:30am. If you are close enough, it is recommended that you walk or bike to the beach so that you do not have to wait in line for the parking lot.</p>
                    <p>A cool aspect of Mayflower beach is how far the tide goes out, more than quadrupling the size of the beach as the ocean recedes nearly a mile.</p>
                    <div class="locationImages">
                        <figure class="imgContent">
                            <img src="assets/images/mayflowerBeach.png" alt="A view across the sand and shore of Mayflower Beach" onclick="spotlight(this);">
                            <figcaption>Jacob Brodeur</figcaption>
                        </figure>
                    </div>

                <h3 id="chapin">Chapin Beach</h3>
                    <p class="address">90 Chapin Beach Rd, Dennis, MA 02638</p>
                    <p>Chapin Beach has a more relaxed feel, as there is much more space for visitors to spread out; because of this, it is not as overcrowded as its neighbor, Mayflower. There is limited parking here which also tends to fill up.</p>
                    <p>During low tide, there are many small pools of water that are perfect for little children to splash around it, making it perfect for families <a href="references.html#8">(8)</a>.</p>
                    <p>In the evenings, its is a common spot for many to visit to see the sunset, as it is flat on both sides of the area, and there are beautiful views as the sun sinks below the horizon. A great location to watch it set is along the road leading up to the beach, as there is enough space to pull off and get out, especially during low tide.</p>
                    <div class="locationImages">
                        <figure class="imgContent">
                            <img src="assets/images/chapinSunset.png" alt="Sunset at Chapin beach over the ocean" onclick="spotlight(this);">
                            <figcaption>Jacob Brodeur</figcaption>
                        </figure>
                        <figure class="imgContent">
                            <img src="assets/images/chapinDuneSunset.png" alt="Sunset at Chapin beach over the dunes and water" onclick="spotlight(this);">
                            <figcaption>Jacob Brodeur</figcaption>
                        </figure>
                    </div>
                
                <h3 id="herringCove">Herring Cove Beach</h3>
                    <p class="address">Province Lands Rd, Provincetown, MA 02657</p>
                    <p>Since Herring Cove Beach is on the bay side of the Cape, it has warmer waters and calmer waves than that of the Atlantic. Additionally, it boasts beautiful sunsets and distant views of Race Point Light House <a href="references.html#9">(9)</a>.</p>
                    <p>As a fun fact, it is the only beach part of the Cape Cod National Sea Shore that sits on the bay, whereas all the rest are on the ocean or sound <a href="references.html#9">(9)</a>.</p>
            
            <h2>Sound Side</h2>
                <h3>Race Point Beach</h3>
                    <p class="address">200 Race Point Rd, Provincetown, MA 02657</p>
                    <p>Race Point Beach, located at the northern tip of Cape Cod, is known for its pristine beauty and expansive shoreline. As part of the Cape Cod National Seashore, it offers visitors stunning views of the Atlantic Ocean and is popular for swimming, sunbathing, and fishing. The beach is characterized by its strong surf and occasional sightings of seals and whales offshore. With its picturesque dunes and lighthouse, Race Point Beach provides an amazing Cape Cod experience, attracting both locals and tourists alike. However, visitors should be aware of the strong currents and cooler water temperatures typical of the outer Cape beaches.</p>
                    <div class="locationImages">
                        <figure class="imgContent">
                            <img src="assets/images/racePointBeach.png" alt="Boardwalk out to Race Point Beach" onclick="spotlight(this);">
                            <figcaption>Jacob Brodeur</figcaption>
                        </figure>
                    </div>

                <h3>Nauset Beach</h3>
                    <p class="address">780 Ocean View Dr, Eastham, MA 02642</p>
                    <p>Nauset Beach, stretching for nearly 10 miles along the outer Cape, is renowned for its clean sandy shores and powerful Atlantic waves. This beach is part of the Cape Cod National Seashore and offers visitors a great Cape Cod experience with its scenic beauty, excellent surfing conditions, and opportunities for seal watching. The historic Nauset Light lighthouse adds to its charm. While popular for swimming and sunbathing, visitors should be cautious of strong currents, as it has been known to have some of the largest waves on all of the Cape. The beach also provides amenities such as restrooms, showers, and a snack bar during peak seasons, making it a favorite among locals and tourists alike.</p>
                
                <h3>West Dennis Beach</h3>
                    <p class=address>45 Light House Road, West Dennis, MA 02670</p>
                    <p>West Dennis Beach, stretching for about a mile along Nantucket Sound, is a popular destination for both locals and tourists. Known for its long sandy shoreline and calm waters, it's an ideal spot for families with children. The beach offers excellent conditions for windsurfing and kiteboarding, attracting water sports enthusiasts; additionally, the area is perfect for kite flying in the evenings when the crowds disperse. With ample parking, a snack bar, restrooms, and lifeguards on duty during the summer months, West Dennis Beach provides a comfortable and enjoyable beach experience. Its location on the sound side means warmer water temperatures and gentler waves compared to the outer Cape beaches, making it perfect for swimming and relaxing. Moreover, in the evenings, the flat marsh surrounding the area makes for an amazing view of the sunset, perfect to watch after getting a cone of ice cream nearby from <a href="dessert.html#sundaeSchool">Sundae School</a>.</p>
                    <div class="locationImages">
                        <figure class="imgContent">
                            <img src="assets/images/westDennisSunset.png" alt="Sunset over the marsh behind West Dennis Beach" onclick="spotlight(this);">
                            <figcaption>Jacob Brodeur</figcaption>
                        </figure>
                    </div>
<?php
    require_once('./assets/inc/footer.inc.php');
?>