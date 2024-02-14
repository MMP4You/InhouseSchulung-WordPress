console.log("JS-Plugin-Names-Ist geladen");





function showHint(str) {
    if (str.length == 0) {
        document.getElementById("txtHint").innerHTML = "";
        return;
    } else {
        $.ajax({
            url: "http://wpschulung.4you-werbeagentur.de/wp-content/plugins/names/api/gethint.php",
            type: "post",
            data:   {q: str},
            success: function (result) {
                console.log("Ajax Success");

                console.log(result);

                document.getElementById("txtHint").innerHTML = result;

            },
            error: function(jqXHR, textStatus, errorThrown) {
                console.log(textStatus, errorThrown);
            }
        });
    }
}