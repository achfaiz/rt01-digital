window.addEventListener("load", () => {

    console.log("Loader jalan");

    const loader = document.getElementById("loader");

    if(loader){

        loader.style.opacity = "0";

        setTimeout(() => {
            loader.style.display = "none";
        }, 800);

    }

});

const counters =
document.querySelectorAll('.card-stat h2');

counters.forEach(counter=>{

    let start = 0;

    let end =
    parseInt(
        counter.innerText.replace(/\D/g,'')
    );

    let speed = end / 100;

    const update = ()=>{

        start += speed;

        if(start < end){

            counter.innerText =
            Math.floor(start);

            requestAnimationFrame(update);

        }else{

            counter.innerText = end;

        }

    }

    update();

});

particlesJS("particles-js",{
particles:{
number:{value:60},
size:{value:3},
move:{speed:2},
line_linked:{enable:true}
}
});