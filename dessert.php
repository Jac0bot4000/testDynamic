<?php
    $pageTitle = "Dessert";
    require_once('./assets/inc/header.inc.php');
?>  

    <main id="content">
        <h1>Dessert</h1>
        <h2 id="capeCodCreamery">Cape Cod Creamery</h2>
            <p class="address">Locations all around The Cape</p>
            <p>Cape Cod Creamery is a typical ice cream parlor with an interesting twist on their flavors: they are Cape Cod themed. They offer a wide variety of interesting flavors, from Sandbar Swirl to Orleans Oreo, that are hard to find anywhere else. All of their ice cream is made in house, and has a creamy, delicious taste. Beyond their ice cream, most locations feature a lovely patio area with cozy lights and themed Adirondack chairs for you to sit and enjoy your treat. Open late into the evening, this is the perfect spot to sit back and enjoy a fresh cone after a long day on the Cape.</p>
            <div class="locationImages">
                <figure class="imgContent">
                    <img src="assets/images/capeCodCreamerySign.png" alt="Cape Cod Creamery Sign" onclick="spotlight(this);">
                    <figcaption>Jacob Brodeur</figcaption>
                </figure>
                <figure class="imgContent">
                    <img src="assets/images/capeCodCreameryIceCream.jpg" alt="Cape Cod Creamery ice cream selection" onclick="spotlight(this);">
                    <figcaption><a href="references.html#22">(22)</a></figcaption>
                </figure>
            </div>

        <h2 id="sundaeSchool">Sundae School</h2>
            <p class="address">381 Lower County Rd, Dennis Port, MA 02639; 606 Main St #28, Harwich Port, MA 02646</p>
            <p>Sundae School is a must-visit spot for ice cream if you visit the Cape. Its retro atmosphere only adds to the ice cream experience. With old cast-iron chairs and tables, and glass sundae cups for your ice cream, it really makes you feel as if you traveled back in time. They make all of their ice cream—and delicious whipped cream—in house, so its all deliciously light and fluffy. During the evenings especially, there can be quite a line for a cone, but this moves pretty quickly as the staff are able to memorize an entire families order in one go. The real challenge is parking, as cars will line up around the block since their lot is very cramped. If you are lucky, the police will not be there to tell you to keep driving.</p>
            <div class="locationImages">
                <figure class="imgContent">
                    <img src="assets/images/sundaeSchoolSign.png" alt="Sundae School sign" onclick="spotlight(this);">
                    <figcaption>Jacob Brodeur</figcaption>
                </figure>
                <figure class="imgContent">
                    <img src="assets/images/sundaeSchoolInterior.png" alt="Interior of Sundae School" onclick="spotlight(this);">
                    <figcaption>Jacob Brodeur</figcaption>
                </figure>
                <figure class="imgContent">
                    <img src="assets/images/sundaeSchoolCrowd.png" alt="Crowd of people waiting for ice cream" onclick="spotlight(this);">
                    <figcaption>Jacob Brodeur</figcaption>
                </figure>
            </div>
<?php
    require_once('./assets/inc/footer.inc.php');
?>