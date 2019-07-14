function generateCompanyName()
{
    $.ajax({
        url: 'api/words.php?companyName', //url for API to ask for new words
        success: writeCompanyName //execute the function if you get through
    });
}

function writeCompanyName(data)
{
    var companyNameH1 = $('#top-hook > h1'); //make the heading a variable. This allows you to reinitialise

    companyNameH1.text(''); //returns the contents of the tag as a string? Not seen this method

    for (var i = 0; i < data.words.length; i++)
    {
        let word = data.words[i]; //iterate the word array

        if (i !== 2) {
            let wordArr = word.toLowerCase().split('');

            for (var x = 0; x < wordArr.length; x++) {
                if (x === 0) {
                    word = wordArr[x].toUpperCase();
                } else {
                    word += wordArr[x]; //this whole block capitalises the first letter of the word right?
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
