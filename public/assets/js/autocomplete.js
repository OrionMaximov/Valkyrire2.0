  jQuery(document).ready(function($) {
    $("#searchBar").submit(function(e) {
        e.preventDefault();
        var query = $(".form-control").val();
        $.ajax({
            type: "POST",
            url: "/search",
            data: JSON.stringify({ query: query }),
            success: function(response) {
                let books = response;
                let results = $("#results");
                results.html("");
                $("#results").insertAfter("#searchBar");
                
                for (var i = 0; i < books.length; i++) {
                    var book = books[i];
                    results.append("<p class='book-result' data-id='"+ book.id + "'>" + book.titre + " par " + book.auteur + "</p>");
                } 
                $(".book-result").on("click", function() {
                    var bookId = $(this).data("id");
                    window.location.href = "/livres/" + bookId;
                });
            },
            error: function(error) {
                console.log(error);
            }
        });
    });
});

