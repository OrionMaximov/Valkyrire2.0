const photos1 = document.querySelector(".comic");
    const tabphotos1 = [
        "assets/image/covers/Comic/A Walk Through Hell T1 - L'Entrepôt.jpg",
        "assets/image/covers/Comic/Batman Death Metal.jpg",
        "assets/image/covers/Comic/Batman Imposter.jpg",
        "assets/image/covers/Comic/Batman One Dark Knight.jpg",
        "assets/image/covers/Comic/Incognito.jpg",
        "assets/image/covers/Comic/Justice Society of America.jpg",
        "assets/image/covers/Comic/La legende de Dark Vador.jpg",
        "assets/image/covers/Comic/Madman T1','Mike Allred.jpg",


    ];
    const imgFull1 = [];
    const frameimg1 = document.createElement("div");
    frameimg1.style.width = "100vw";
    frameimg1.style.height = "100vh";
    frameimg1.style.backdropFilter = "blur(18px)";
    frameimg1.style.backgroundColor = "rgba(0,0,0,0.7)";
    frameimg1.style.display = "none";
    frameimg1.style.justifyContent = "center";
    frameimg1.style.alignItems = "center";
    frameimg1.style.position = "fixed";
    document.body.prepend(frameimg1);
    photos1.style.display = "flex";
    photos1.style.flexWrap = "wrap";
    photos1.style.justifyContent = "space-between";

    //document.write(tabphotos1[2]);
    let index1 = 0;
    while (index1 < tabphotos1.length) {
        // créer mes ElementHTML
        let divImg = document.createElement("div");
        divImg.classList.add("divImg");
        divImg.style.width = "23%";
        divImg.style.marginBottom = "2%";
        photos1.append(divImg);
        let imgphotos1 = document.createElement("img");
        imgphotos1.alt = "description photo p" + (index1 + 1);
        imgphotos1.src = tabphotos1[index1];
        imgphotos1.style.width = "100%";
        divImg.append(imgphotos1);
        // detection click
        let n = index1;


        imgphotos1.addEventListener(
            "click",
            () => {
                frameimg1.style.display = "flex";

                imgFull1[n] = document.createElement("img");
                imgFull1[n].width = 700;
                imgFull1[n].height = 500;
                imgFull1[n].src = tabphotos1[n];
                frameimg1.append(imgFull1[n]);
            }
        )
        //incrémentation de l'index1
        index1++;
    }
    frameimg1.addEventListener("click", function (event) {
        if (!frameimg1.querySelector("img").contains(event.target)) {
            frameimg1.style.display = "none";
            frameimg1.innerHTML = "";
        }
    })

