function generateCompanyName()
{
    $.ajax({
        url: 'api/words.php?companyName',
        success: writeCompanyName
    });
}

function writeCompanyName(data)
{
    var companyNameH1 = $('#top-hook > h1');

    companyNameH1.text('');

    for (var i = 0; i < data.words.length; i++)
    {
        let word = data.words[i];

        if (i !== 2) {
            let wordArr = word.toLowerCase().split('');

            for (var x = 0; x < wordArr.length; x++) {
                if (x === 0) {
                    word = wordArr[x].toUpperCase();
                } else {
                    word += wordArr[x];
                }
            }
        }

        let text = companyNameH1.text();

        if (companyNameH1.text() === '') {
            companyNameH1.text(word);
        } else {
            companyNameH1.text(text + ' ' + word);
        }
    }
}

function colourCompanyName()
{
    var hex = randomHex();

    $('#top-hook > h1').css('color', hex);
}


function generateRandomPolys()
{
    $.ajax({
        url: 'api/polys.php?randomPolys',
        success: drawRandomPolys,
    });
}

function drawRandomPolys(data)
{
    var count = data.polygons.length; //gets how many shapes
    var parent = document.getElementById('top-hook'); //lets us know it's going into the top div.

    for (i = 0; i < count; i++)
    {
        var canvas = document.createElement("canvas");
        canvas.id = "canvas" + i;
        canvas.height = "100";
        canvas.width = "100";
        parent.appendChild(canvas); //This creates a canvas tag per shape dynamically.
        var context = canvas.getContext('2d');
        var originX = Math.floor(data.polygons[i][0].x / 10);
        var originY = Math.floor(data.polygons[i][0].y / 10);

        for (i2 = 0; i2 < data.polygons[i].length ; i2++)
            {
                if (i2 === 0) {continue;}

                var x = Math.floor(data.polygons[i][i2].x / 10);
                var y = Math.floor(data.polygons[i][i2].y / 10);
                var previousX = Math.floor(data.polygons[i][i2 - 1].x / 10);
                var previousY = Math.floor(data.polygons[i][i2 - 1].y / 10);

                context.moveTo(previousX, previousY);
                context.lineTo(x, y);
                context.stroke();
            }
        context.moveTo(x, y);
        context.lineTo(originX, originY);
        context.stroke();

    }
}
