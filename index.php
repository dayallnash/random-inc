<html>
    <head>
        <?php include 'head.php'; ?>
        <script src="js/index.js"></script>
    </head>

    <body>

        <img src="assets/img/placeholderimg.jpg" width="50%" height="50%"></img>
        <div id="top-hook">
            <h1 id="top-hook-heading">We are a company that money</h1>
            <p id="top-hook-p">We make the money.</p>
        </div>

        <div id="block1">
            <h2 id="block1-h">We value the thing</h2>
            <p id="block1-p">Because that's what our customers love.</p>
        </div>

        <div id="block2">
            <h2 id="block2-h">We do the thing right</h2>
            <p id="block2-p">Because we check things like:</p>
            <ul>
                <li id="block2-ul1">Water pressure</li>
                <li id="block2-ul2">House prices</li>
                <li id="block2-ul3">Car alarms</li>
                <li id="block2-ul4">Halal meat</li>
            </ul>
        </div>

        <div id="block3">
            <h2 id="block3-h">In a variety of different styles</h2>
            <p id="block3-p">Handmade using real ink</p>
            <!-- Maybe slideshow of pictures?       -->
        </div>

        <div id="block4">
            <h2 id="block4-h">But don't just take our word for it</h2>
            <p id="block4-p">Here's something they said.</p>
            <div class="testimonials">
                <h3 id="testimonial1">I sawed this boat in half!</h3>
                <h3 id="testimonial2">I'm now in <em>less</em> debt!</h3>
                <h3 id="testimonial3">I couldn't be happier where I work now.</h3>
            </div>
        </div>

    </body>

    <footer>
        <script>
            $(document).ready(
                function()
                {
                    generateCompanyName();
                    generateRandomPolys();
                    colourCompanyName();
                }
            );
        </script>
    </footer>
</html>
