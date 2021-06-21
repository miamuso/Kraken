// let buttonTag = document.querySelector('header a.stamps');

// // adding the stamp images as an array that get added on click

// let number = 0;
// const stamps = [
//     "circles.svg", 
//   "moon.svg",
//   "rainbow.svg",
//   "waves.svg"
// ]

// const stampsTag = document.querySelector("div.stamps");

// // using two arguments, x and y, for the position of the page click to add the stamp
// const addStamp = function(x, y){
//     const img = document.createElement("img");

//     img.setAttribute("src", stamps[number]);

//     // this is where the stamps will go, on the x access, cutting the window width in half instead of the whole page from the top:0
//     img.style.left = (x - window.innerWidth / 2) + "px"
//     img.style.top = y + "px"


//   stampsTag.appendChild(img)


//   number = number + 1
//   if (number > stamps.length - 1) {
//     number = 0
//   }

// }

// // adding stamp on the click event, then removing it if the accessibility button in the header is clicked
// function stampFunc(event) {
//     addStamp(event.pageX, event.pageY)
  
//     buttonTag.addEventListener("click", function(){
//     document.removeEventListener("click", stampFunc)
//   })
//   }
  
//   document.addEventListener("click", stampFunc)



