const sliderImg = document.querySelector("#slider img");
const sliderImg2 = document.querySelector("#slider2 img");
const sliderImg3 = document.querySelector("#slider3 img");
const prev = document.getElementById("prev");
const next = document.getElementById("next");
const prev2 = document.getElementById("prev2");
const next2 = document.getElementById("next2");
const prev3 = document.getElementById("prev3");
const next3 = document.getElementById("next3");

const urlImg = [
    "./assets/image/covers/comic/spawn.jpg",
    "./assets/image/covers/bandeD/Elfes.jpg",
    "./assets/image/covers/mangas/one-piece.jpeg",
];
const urlImg2 = [
    "./assets/image/covers/bandeD/Elfes.jpg",
    "./assets/image/covers/mangas/one-piece.jpeg",
    "./assets/image/covers/comic/spawn.jpg",
];
const urlImg3 = [
    
    "./assets/image/covers/mangas/one-piece.jpeg",
    "./assets/image/covers/comic/spawn.jpg",
    "./assets/image/covers/bandeD/Elfes.jpg",
    
];
// 1ere étape : je déclare un index
let i = 0;
let j = 0;
let k = 0;
sliderImg.src = urlImg[i] ;
sliderImg2.src= urlImg2[j];
sliderImg3.src= urlImg3[k];

next.addEventListener(
    "click",
    function () {
        
        // 3eme étape : limité index à la taille de mon tableau -1
        if(i === urlImg.length-1){
            i = 0;
            sliderImg.src = urlImg[i];
        }else{
            // 2nd étape : j'incrémente mon index
        //i = i+1;
        i++; //incrémentation
        // je dois réaffecter src avec la nouvelle valeur de i
            sliderImg.src = urlImg[i];
    }
}
)
prev.addEventListener(
    "click",
    function() {
        if (i === 0) {
            i = urlImg.length-1;
            sliderImg.src = urlImg[i];
        }else{
            i--;
            sliderImg.src = urlImg[i];
        }
    }
)
setInterval(
    function(){
        if(i === urlImg.length-1){
            i = 0;

            sliderImg.src = urlImg[i];
        }else{
        i++; 
            sliderImg.src = urlImg[i];
    }
    },
    4000
)
setInterval(
    function(){
        if(j === urlImg2.length-1){
            j = 0;
            
            sliderImg2.src = urlImg2[j];
        }else{
        j++; 
            sliderImg2.src = urlImg2[j];
    }
    },
    4000
)
setInterval(
    function(){
        if(k === urlImg3.length-1){
            k = 0;
            
            sliderImg3.src = urlImg3[k];
        }else{
        k++; 
            sliderImg3.src = urlImg3[k];
    }
    },
    4000
)