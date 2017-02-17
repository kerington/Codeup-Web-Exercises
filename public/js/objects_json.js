// todo:
// Create an array of objects that represent books.
// Each book should have a title and an author.
// The book author should be an object with a firstName and lastName.
// Be creative and add at least 5 books to the array

// log out the books array

// todo:
// Loop through the array of books using .forEach and print out the specified information about each one.
// start loop here

var books = [
    {
        "title": "Dark Matter",
        "author":
                {
            "firstName": "Blake",
            "lastName": "Crouch"
        }
    },

    {
        "title": "Invisible Monsters",
        "author":
                {
            "firstName": "Chuck",
            "lastName": "Palahniuk"
        }
    },

    {
        "title": "The Possessions",
        "author":
                {
            "firstName": "Sara",
            "lastName": "Flannery Murphy"
        }
    },
    {
        "title": "Perfect Little World",
        "author":
                {
            "firstName": "Kevin",
            "lastName": "Wilson"
        }
    },
    {
        "title": "The Sun Is Also a Star",
        "author":
                {
            "firstName": "Nicola",
            "lastName": "Yoon"
        }
    }
];

console.log(books);

     books.forEach(function (element, index, array){

    console.log("Book #" + index);
    console.log("Title: " + element.title);
    console.log("Author: " + element.author.firstName + " " + element.author.lastName);
    console.log("---");
    });


// end loop here
// for (var i = 0; i < books.length; i++)




