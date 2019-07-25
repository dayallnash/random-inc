/**
 * Hex code generator
 *
 * @author Dale Nash
 * @returns string
 */
function randomHex() {
    const hexMax = 256 * 256 * 256;
    return '#' + Math.floor(Math.random() * hexMax).toString(16).toUpperCase().padStart(6, '0');
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
