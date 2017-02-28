"use strict";

function blogPosts(){
    var blog = $.get("/data/blog.json").done(function(posts){
        console.log(posts);

        $.each(posts, function(index, post){
            var content = '';
            content += '<h1>' + post.title + '</h1>';
            content += '<p class="text-justify">' + post.content + '</p>';
            content += '<p id="date">' + post.date + '</p>';
            content += '<button type="button" class="btn btn-default btn-md" id="category" style="float: right;">' + "Categories: " + post.categories + '</button>';
            content += '';
           $("#blog").append(content);
           console.log(content);
        });
    });
    
}

blogPosts();
$("#refresh").click(function(){
    $("#blog").html("");
    blogPosts();

});


var url = "data/blog.json";

var request = $.get(url);

request.fail(function(){
	console.log("error");
});

request.done(function(){
	console.log("success");
});

console.log("JS is asynchronous");


$(".more").toggle(function(){
	$(this).text("less...").sibilings(".complete").show();
}, function(){
	$(this).text("more...").sibilings(".complete").hide();
});