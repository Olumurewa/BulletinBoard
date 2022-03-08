var prev = document.getElementById("prev");
            var next = document.getElementById("next");
            var thumb =document.getElementsByClassName("thumb");
            var background = document.getElementById("background");

            var backgroundImg = new Array(
                     "Babcock-University-Distance.png",
                     "BABCOCK.jpg",
                      "library.jpg", 
                      "maxresdefault.jpg",
                     "Backok.jpg",
                     "babcock-university.jpg", 
            );
            let i = 0;
            next.onclick = function(){
                if(i< 5){
                background.style .backgroundImage = 'url("'+backgroundImg[i+1]+'")';
                thumb[i+1].classList.add("active");
                thumb[i].classList.remove("active");
                i++;
                
                 }
           }
           prev.onclick = function(){
            if(i> 0){
            background.style .backgroundImage = 'url("'+backgroundImg[i-1]+'")';
            thumb[i-1].classList.add("active");
                thumb[i].classList.remove("active");
            i--;
             }
       }
