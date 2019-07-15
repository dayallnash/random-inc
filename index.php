<html>
    <head>
        <?php include 'head.php'; ?>
        <script src="js/index.js"></script>
    </head>

    <body>

        <img src="assets/img/placeholderimg.jpg" width="50%" height="50%"></img>
        <div id="top-hook">
            <h1>We are a company that money</h1>
            <p>We make the money.</p>
        </div>

        <div id="block1">
            <h2>We value the thing</h2>
            <p>Because that's what our customers love.</p>
        </div>

        <div id="block2">
            <h2>We do the thing right</h2>
            <p>Because we check things like:</p>
            <ul>
                <li>Water pressure</li>
                <li>House prices</li>
                <li>Car alarms</li>
                <li>Halal meat</li>
            </ul>
        </div>

        <div id="block3">
            <h2>In a variety of different styles</h2>
            <p>Handmade using real ink</p>
            <!-- Maybe slideshow of pictures?       -->
        </div>

        <div id="block4">
            <h2>But don't just take our word for it</h2>
            <p>Here's something they said.</p>
            <div class="testimonials">
                <h3>I sawed this boat in half!</h3>
                <h3>I'm now in <em>less</em> debt!</h3>
                <h3>I couldn't be happier where I work now.</h3>
            </div>
        </div>

    </body>

    <footer>
        <script>
            $(document).ready(
                function()
                {
                    generateCompanyName();
                    colourCompanyName();
                }
            );
        </script>
    </footer>
</html>
