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