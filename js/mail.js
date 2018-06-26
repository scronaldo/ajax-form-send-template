$(document).ready(function() {
    $("#forma").submit(function() {
        $.ajax({
            type: "POST",
            url: "mail.php",
            data: $(this).serialize()
        }).done(function() {
            $(this).find("input").val("");
            $("#done").fadeIn(1000);
            setTimeout(function() {
                $("#done").fadeOut(1000)
            }, 3000);
            $("#forma").trigger("reset");
        });
        return false;
    });
});