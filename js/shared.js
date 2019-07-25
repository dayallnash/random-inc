/**
 * Hex code generator
 *
 * @author Dale Nash
 * @returns string
 */
function randomHex()
{
    const hexMax = 256 * 256 * 256;
    return '#' + Math.floor(Math.random() * hexMax).toString(16).toUpperCase().padStart(6, '0');
}

function showWarning(warningText)
{
    $('.warning').html('');
    $('.warning').append('<span><p><i class="fas fa-ban"></i> ' + warningText + '</p></span>');

    $('.warning').show();

    setTimeout(fadeWarning, 1000);
}

function fadeWarning()
{
    $('.warning').fadeOut(1000);

}