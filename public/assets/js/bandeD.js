const photos2 = document.querySelector(".bandeD");
    const tabphotos2 = [
        "assets/image/covers/BandeD/Conquêtes.jpg",
        "assets/image/covers/BandeD/Miss Shaolin.jpg",
        "assets/image/covers/BandeD/Elfes.jpg",
        "assets/image/covers/BandeD/Hawkmoon.jpg",
        "assets/image/covers/BandeD/Lanfeust de troy.jpg",
        "assets/image/covers/BandeD/Thorgal.jpg",
        "assets/image/covers/BandeD/Le donjon de Naheulbeuk.jpg",
        "assets/image/covers/BandeD/Le scrameustache.jpg",
    ];
    const imgFull2 = [];
    const frameimg2 = document.createElement("div");
    frameimg2.style.width = "100vw";
    frameimg2.style.height = "100vh";
    frameimg2.style.backdropFilter = "blur(18px)";
    frameimg2.style.backgroundColor = "rgba(0,0,0,0.7)";
    frameimg2.style.display = "none";
    frameimg2.style.justifyContent = "center";
    frameimg2.style.alignItems = "center";
    frameimg2.style.position = "fixed";
    document.body.prepend(frameimg2);
    photos2.style.display = "flex";
    photos2.style.flexWrap = "wrap";
    photos2.style.justifyContent = "space-between";

    //document.write(tabphotos2[2]);
    let index2 = 0;
    while (index2 < tabphotos2.length) {
        // créer mes ElementHTML
        let divImg = document.createElement("div");
        divImg.classList.add("divImg");
        divImg.style.width = "23%";
        divImg.style.marginBottom = "2%";
        divImg.style.padding = "1.5%";
        photos2.append(divImg);
        let imgphotos2 = document.createElement("img");
        imgphotos2.alt = "description photo p" + (index2 + 1);
        imgphotos2.src = tabphotos2[index2];
        imgphotos2.style.width = "100%";
        divImg.append(imgphotos2);
        // detection click
        let n = index2;


        imgphotos2.addEventListener(
            "click",
            () => {
                frameimg2.style.display = "flex";
                
                imgFull2[n] = document.createElement("img");
                imgFull2[n].width = 500;
                imgFull2[n].height = 700;
                imgFull2[n].src = tabphotos2[n];
                frameimg2.append(imgFull2[n]);
            }
        )
        //incrémentation de l'index2
        index2++;
    }
    frameimg2.addEventListener("click", function (event) {
        if (!frameimg2.querySelector("img").contains(event.target)) {
            frameimg2.style.display = "none";
            frameimg2.innerHTML = "";
        }
    })

