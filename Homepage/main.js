/*creating an event listener to open menu*/

var btn = document.getElementById('btn');
var menu = document.getElementById('nav-id');
// let searchBtn = document.querySelector('#searchBtn');
let searchContent = document.getElementById('search');

let searchResult;



function myFunc() {
    var show = menu;
    show.classList.toggle("active");
}

btn.addEventListener("click", myFunc);




function myFunction() {
    document.getElementById("subs").submit();
}



// searchBtn.addEventListener('click', (e) => {
//     e.preventDefault();
//     console.log(searchContent.value);
//     let result = [...Data.filter(dat => dat.title.toLowerCase().includes(searchContent.value.toLowerCase()))];
//     Data.filter(dat => dat.content.toLowerCase().includes(searchContent.value.toLowerCase())).forEach(dat => {
//         if (result.filter(res => res.title === dat.title).length === 0) {
//             result.push(dat);
//         }
//     })

//     console.log(result);
//     console.log('working');
// });