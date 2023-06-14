 
 let buttons = document.querySelector("#buttons");
 
 buttons.addEventListener("click",function(){
    alert("please login")
    // document.querySelector(".card-text").innerHTML = "10000 taka"
});

let naber = document.querySelector(".ul-list").children;
let banner = document.querySelector(".banners").children;

for(let i = 0; i<naber.length; i++){
    naber[i].addEventListener("click",function(){
        for(let j= 0; j<naber.length; j++){
            naber[j].classList.remove("active")
        }
        this.classList.add("active");
        let target =this.getAttribute("data-target");
        for(let k = 0; k<banner.length; k++){
            banner[k].style.display = "none";
            if(target == banner[k].getAttribute("data-id")){
                banner[k].style.display = "block"
            }
            if(target=="all"){
                banner[k].style.display = "block"
            }
        }
 

    })
}
