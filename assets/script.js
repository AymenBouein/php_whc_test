function submitCommand() {
    const input = $('#command').val();

    $.ajax({
        url: 'src/index.php',
        method: 'POST',
        headers: { 'Content-Type': 'application/x-www-form-urlencoded' },
        data: { input: input },
        success: function(response) {
            $('#result').text(response);
        },
        error: function(xhr, status, error) {
            $('#result').text('Erreur: ' + error);
        }
    });
}