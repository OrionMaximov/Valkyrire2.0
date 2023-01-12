    const photos = document.querySelector(".mangas");
    const tabPhotos = [
        "assets/image/covers/Mangas/Archdemon's Dilemma.jpg",
        "assets/image/covers/Mangas/Baki the Grappler.jpg",
        "assets/image/covers/Mangas/Dragon Ball.jpg",
        "assets/image/covers/Mangas/Jujutsu Kaisen.jpg",
        "assets/image/covers/Mangas/one-piece.jpeg",
        "assets/image/covers/Mangas/spy x family.jpg",
        "assets/image/covers/Mangas/Valkyrie Apocalypse.jpg",
        "assets/image/covers/Mangas/Assassination classroom.jpg",
         

    ];
    
    const imgFull = [];
    const frameImg = document.createElement("div");
    frameImg.style.width = "100vw";
    frameImg.style.height = "100vh";
    frameImg.style.backdropFilter = "blur(18px)";
    frameImg.style.backgroundColor = "rgba(0,0,0,0.7)";
    frameImg.style.display = "none";
    frameImg.style.justifyContent = "center";
    frameImg.style.alignItems = "center";
    frameImg.style.position = "fixed";
    document.body.prepend(frameImg);
    photos.style.display = "flex";
    photos.style.flexWrap = "wrap";
    photos.style.justifyContent = "space-between";

    //document.write(tabPhotos[2]);
    let index = 0;
    while (index < tabPhotos.length ) {
        // créer mes ElementHTML
        let divImg = document.createElement("div");
        divImg.classList.add("divImg");
        divImg.style.width = "23%";
        divImg.style.marginBottom = "2%";
        divImg.style.padding = "1.5%";
        photos.append(divImg);
        let imgPhotos = document.createElement("img");
        imgPhotos.alt = "description photo p" + (index + 1);
        imgPhotos.src = tabPhotos[index];
        imgPhotos.style.width = "100%";
        divImg.append(imgPhotos);
        // detection click
        let n = index;


        imgPhotos.addEventListener(
            "click",
            () => {
                frameImg.style.display = "flex";

                imgFull[n] = document.createElement("img");
                imgFull[n].width = 500;
                imgFull[n].height = 700;
                imgFull[n].src = tabPhotos[n];
                frameImg.append(imgFull[n]);
            }
        )
        //incrémentation de l'index
        index++;
    }
    frameImg.addEventListener("click", function (event) {
        if (!frameImg.querySelector("img").contains(event.target)) {
            frameImg.style.display = "none";
            frameImg.innerHTML = "";
        }
    })

