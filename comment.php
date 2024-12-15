<?php
    $pageTitle = "Comment";
    require_once('./assets/inc/header.inc.php');
?>

    <main id="content">
        <div id="commentContent">
            <h1>Chat about your trip!</h1>
            <div id="commentForm" class="darkerBackground">
                <h3>Submit a comment!</h3>
                <div class="indent">
                    <!-- Form to submit a comment                              Runs javascript validation vvv -->
                    <form action="submitComment.php" method="POST" id="myForm" onsubmit="return validateForm();">
                        <label for="userName">Name </label>
                        <div id="nameValidation"></div>
                        <input type="text" id="userName" name="userName"> <br>

                        <label for="message">Message </label>
                        <div id="messageValidation"></div>
                        <textarea id="message" name="message" placeholder="How was your trip?"></textarea> <br>

                        <input id="sendButton" type="submit" value="Chat!">
                    </form>
                </div>
            </div>

            <div id="comments">
                <?php
                    // SQL select statement to gather all fields
                    $sql = 'SELECT * FROM `travelchat` ORDER BY timestamp DESC';
                    if ($result = $mysqli -> query($sql)) {
                        // For each result, echos a new list item with proper formating via divs
                        while ($row = $result -> fetch_assoc()) {
                            echo '<div class="message darkerBackground"><div class="name">' . $row['from'] . '</div><div class="date">' . $row['timestamp'] . '</div> <div class="chat">' . $row['message'] . '</div></div>';
                        }
                        $result -> free_result();
                    }
                ?>
            </div>
        </div>

<?php
    require_once('./assets/inc/footer.inc.php');
?>