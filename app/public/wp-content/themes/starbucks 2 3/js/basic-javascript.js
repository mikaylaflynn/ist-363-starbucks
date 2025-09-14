//console.log("Basic JavaScript file has been loaded!");

// vocabulary: variables, methods, functions, conditional statements, objects, and arrays

const myName = "Mikayla Flynn";
console.log(myName);
const myAge = 21;
if (myAge > 30) {
    console.log("You're old and you're going to die soon");
} else {
    console.log("You're still young and have your entire life in front of you");
}

const redBtn = document.getElementById('redBtn');
const showcase = document.getElementById('showcase');
const orangeBtn = document.getElementById('orangeBtn');
const yellowBtn = document.getElementById('yellowBtn');
//console.log(redBtn);
const colorHeadline = document.createElement('h3');
showcase.append(colorHeadline);


// event name, callback function
redBtn.addEventListener("click", function() {
    //console.log("Clicked");
    showcase.style.backgroundColor = 'red';
    colorHeadline.innerText = 'Red';
}); // click event end
orangeBtn.addEventListener("click", function() {
    //console.log("Clicked");
    showcase.style.backgroundColor = 'orange';
    colorHeadline.innerText = 'Orange';
}); // click event end
yellowBtn.addEventListener("click", function() {
    //console.log("Clicked");
    showcase.style.backgroundColor = 'yellow';
    colorHeadline.innerText = 'Yellow';
}); // click event end