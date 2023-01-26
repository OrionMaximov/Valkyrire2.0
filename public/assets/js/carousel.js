const carousel = document.getElementById("carousel");
const sliderImg = carousel.getElementsByTagName("img");
const firstImg = document.querySelector("#carousel #slider img");
const secondImg = document.querySelector("#carousel #slider2 img");
const thirdImg = document.querySelector("#carousel #slider3 img");
const prev = document.getElementById("prev");
const next = document.getElementById("next");
const prev2 = document.getElementById("prev2");
const next2 = document.getElementById("next2");
const prev3 = document.getElementById("prev3");
const next3 = document.getElementById("next3");

const urlImg = [
    "assets/image/covers/Comic/Spawn.jpg",
    "assets/image/covers/BandeD/Elfes.jpg",
    "assets/image/covers/Mangas/one-piece.jpeg",
];
const urlImg2 = [
    "assets/image/covers/BandeD/Elfes.jpg",
    "assets/image/covers/Mangas/one-piece.jpeg",
    "assets/image/covers/Comic/Spawn.jpg",
];
const urlImg3 = [
    
    "assets/image/covers/Mangas/one-piece.jpeg",
    "assets/image/covers/Comic/Spawn.jpg",
    "assets/image/covers/BandeD/Elfes.jpg",
    
]; 
// 1ere étape : je déclare un index
let i = 0;
let j = 0;
let k = 0;
firstImg.src = urlImg[0];
secondImg.src = urlImg[1];
thirdImg.src = urlImg[2];

next.addEventListener(
    "click",
    function () {
        
        // 3eme étape : limité index à la taille de mon tableau -1
        if(i === urlImg.length-1){
            i = 0;
            firstImg.src = urlImg[i];
        }else{
            // 2nd étape : j'incrémente mon index
        //i = i+1;
        i++; //incrémentation
        // je dois réaffecter src avec la nouvelle valeur de i
            firstImg.src = urlImg[i];
    }
}
)
prev.addEventListener(
    "click",
    function() {
        if (i === 0) {
            i = urlImg.length-1;
            firstImg.src = urlImg[i];
        }else{
            i--;
            firstImg.src = urlImg[i];
        }
    }
)
setInterval(
    function(){
        if(i === urlImg.length-1){
            i = 0;

            firstImg.src = urlImg[i];
        }else{
        i++; 
            firstImg.src = urlImg[i];
    }
    },
    4000
)
setInterval(
    function(){
        if(j === urlImg2.length-1){
            j = 0;
            
            secondImg.src = urlImg2[j];
        }else{
        j++; 
            secondImg.src = urlImg2[j];
    }
    },
    4000
)
setInterval(
    function(){
        if(k === urlImg3.length-1){
            k = 0;
            
            thirdImg.src = urlImg3[k];
        }else{
        k++; 
            thirdImg.src = urlImg3[k];
    }
    },
    4000
)