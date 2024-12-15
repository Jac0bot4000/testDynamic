<?php
    $pageTitle = "Grading";
    require_once('./assets/inc/header.inc.php');
?>

    <main id="content">
        <h1>Grading</h1>
            <div id="criteria">
                <section id="finalHeader">
                    <h2>Final Rubric Criteria</h2>
                </section>
                <section class="gradingElement">
                    <h3>Rubric Criteria</h3>
                    <p>Explanation as to how it was met.</p>
                </section>
                <section class="gradingElement">
                    <h3>All pages validate</h3>
                    <p>All code for this website validates correctly and uses standard features across all mainstream browsers.</p>
                </section>
                <section class="gradingElement">
                    <h3>All pages display properly in all browsers</h3>
                    <p>Semantic tags and standard features are utilized so that maximum cross-combatibility can be achieved.</p>
                </section>
                <section class="gradingElement">
                    <h3>Design principles (CRAP, color, etc)</h3>
                    <p>Proper colors and accesibility features have been used to ensure equal access and good design principles.</p>
                </section>
                <section class="gradingElement">
                    <h3>Organization / Navigation</h3>
                    <p>A strong hierarchy has been established to easily guide the user through content, its importance, and purpose. Additionally,
                        navigation is both prevalent in a top navigation bar and a navigation menu in the footer. The page title in the tab bar
                        also indicates where the user is.
                    </p>
                </section>
                <section class="gradingElement">
                    <h3>Corrections from the midterm project</h3>
                    <p>I have increased the line height from its original value to ensure greater readability of larger blocks of text.
                        Additionally, I have improved the functionality of the mobile navigation hamburger menu.
                    </p>
                </section>
                <section class="gradingElement">
                    <h3>Original JavaScript</h3>
                    <p>There are various javascript functions implemented, some from class, others specifically designed for this project. For example,
                        form validation has been altered slightly, the functionality of showing and hiding the mobile navigation page, as well as a back-to-top
                        scroll button.
                    </p>
                </section>
                <section class="gradingElement">
                    <h3>DHTML component (this could be combined with the JS component above)</h3>
                    <p>A few things satisfy this requirement, such as the animated back-to-top scroll button that fades in and smoothly scrolls the user
                        to the top of the page. Also, the form validation inserts text into the DOM with any errors encountered. Finally, the comments are inserted
                        into and displayed on the same page.
                    </p>
                </section>
                <section class="gradingElement">
                    <h3>PHP Includes on every page (no repeated code except unique content on each page)</h3>
                    <p>Each page utilizes a PHP include for the header and footer, as well as external php files to run things such as form sanitization and 
                        comment processing—inserting into the database and selecting to display on screen.
                    </p>
                </section>
                <section class="gradingElement">
                    <h3>Some sort of form like trip rating or comment. INSERT and SELECT Works</h3>
                    <p>The comment page serves as a forum for users of the site to share information and feedback about their trip. It takes in a name and
                        message, as well as records and displays the timestamp it was sent. These are inserted into and selected from a database so it is
                        the same experience for all users.
                    </p>
                </section>
                <section class="gradingElement">
                    <h3>Form validation with JavaScript (not HTML 5 form validation) & PHP Sanizitzes</h3>
                    <p>Javascript form validation ensures that a value is present for both name and message fields; if one is not, the field changes
                        color and a message appears detailing the issue. PHP validation sanitizes the message to make sure no scripts are injected, and it ensures
                        names are of proper datatype.
                    </p>
                </section>
                <section class="gradingElement">
                    <h3>PHP validates data and sanitizes it before INSERT</h3>
                    <p>In the event form data does not validate, the program will not insert into the database; instead, an error message is displayed
                        and the user is prompted to try again. Once all data validates, it is then sanitized to prevent injection attacks.
                    </p>
                </section>
                <section class="gradingElement">
                    <h3>These vary, will document this in feedback individually. Extras should be documented in grading page!</h3>
                    <div>
                        <p>The extras are as follows:</p>
                        <div class="indent">
                            <ul>
                                <li>The comment page uses a different SQL select statement from class to order them by most recent at the top.</li>
                                <li>The back-to-top button fades in and has a smooth scroll animation to return to the top of the page.</li>
                                <li>Set a max width for the entire site so on large displays, content does not get too stretched.</li>
                                <li>Used a custom reg-ex for form validation on the comment page.</li>
                                <li>On click, images will spotlight and fill the screen.</li>
                                <li>Images now how proper aspect ratios, rather than all being cropped to a square.</li>
                            </ul>
                        </div>
                            
                    </div>
                    
                </section>

                <section id="midtermHeader">
                    <h2>Midterm Rubric Criteria</h2>
                </section>
                <section class="gradingElement">
                    <h3>Rubric Criteria</h3>
                    <p>Explanation as to how it was met.</p>
                </section>
                <section class="gradingElement">
                    <h3>Good Design Techniques - CRAP</h3>
                    <p>To satisfy this requirement, each of the following was utilized. For Contrast, all text in all states was colored so that it would be readable against the background colors; additionally, different values were used to work with colorblindness. For repetition, the entire site follows the same style guide, making it all feel coherent. For alignment, the majority of content is left-aligned for readability purposes, where the only deviation is to draw attention. Finally, for proximity, appropriate gaps were left to determine what is its own content, but similar materials were grouped together.</p>
                </section>
                <section class="gradingElement">
                    <h3>Organization of information - text and graphics make sense, Chunked content</h3>
                    <p>Each new form of content is divided with a heading to describe it. To ensure these are noticed, they are both sized and colored differently from the rest of the body text.</p>
                </section>
                <section class="gradingElement">
                    <h3>Content - interesting read, excellent grammar, perfect spelling, map that is relevant to content included (quality of content)</h3>
                    <p>All content has been proofread multiple times to check for spelling and grammatical errors. Additionally, the map and content provided is relevant to the purpose of the section.</p>
                </section>
                <section class="gradingElement">
                    <h3>10 Content Pages w/ sufficient content - points deducted if pages missing (quantity of content). the references and about page are not included in these 10!</h3>
                    <p>This site has a total of 11 pages, only one of which serves as an index page. As a result, each of these has quite a bit of content, meeting this criteria.</p>
                </section>
                <section class="gradingElement">
                    <h3>Code Design Requirements - Code indented, global CSS file, well thought out selectors, comments in CSS/html, HTML semantic tags used, hand written code), no inline styles used</h3>
                    <p>Each html page has standardized indentation to follow the code easily; additionally, they each reference the same style sheet so that a change in styles affects the site globally. Moreover, each purposeful addition to the code was explained via comments.</p>
                </section>
                <section class="gradingElement">
                    <h3>Interaction Design & Navigation – easy to get around, global nav, unique title on each page. You are here indicator</h3>
                    <p>The navigation bar is the same of every page, and is included in both the top and bottom of the site. Additionally, each page tells you where you are in both the tab title and the h1 of the page.</p>
                </section>
                <section class="gradingElement">
                    <h3>HTML & CSS Validates / Cross Browser Compatibility</h3>
                    <p>All code for this website validates correctly and uses standard features across all mainstream browsers.</p>
                </section>
                <section class="gradingElement">
                    <h3>Reference Page - a separate linked page (in addition to the 10)</h3>
                    <p>My reference page links all sources used for this site, and includes their date, the description of content used, and a link to where in the website it was used. Additionally, each time a source was used in content, a linked citation will bring the user to the appropriate reference in the reference page.</p>
                </section>
                <section class="gradingElement">
                    <h3>Grading Page Document what you have done linked from your homepage</h3>
                    <p>This page serves as the grading page, and each element of the rubric is explained in detail as to how it was met.</p>
                </section>
                <section class="gradingElement">
                    <h3>Responsive Web Design - mobile users were considered</h3>
                    <p>In this initial version of the website, mobile users will have a slightly different layout to fit better on a narrow, vertical screen. Additionally, the navigation switches to a menu versus a bar.</p>
                </section>
            </div>
<?php
    require_once('./assets/inc/footer.inc.php');
?>