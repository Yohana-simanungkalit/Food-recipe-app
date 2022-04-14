const moonPath = "M47 85.5C47 132.72 85.5 171 85.5 171C38.2797 171 0 132.72 0 85.5C0 38.2797 38.2797 0 85.5 0C85.5 0 47 38.2797 47 85.5Z";

const sunPath = "M171 85.5C171 132.72 132.72 171 85.5 171C38.2797 171 0 132.72 0 85.5C0 38.2797 38.2797 0 85.5 0C132.72 0 171 38.2797 171 85.5Z";

const darkMode = document.querySelector('#darkMode');

let toggle = false;

//clik sun
darkMode.addEventListener('click', () => {
    const timeline = anime.timeline({
        duration : 750,

        easing : "easeOutExpo"
    });
    //menambah animasi ke timeline
    timeline.add({
        targets: ".sun",
        d: [
            {value: toggle ? sunPath : moonPath}
        ]
    })

    .add({
        targets: '#darkMode',
        rotate: 320
    }, "-= 350"
    
    )
    .add({
        targets: "section.satu,section#beranda, section#resep, section#artikel, section#tentang",
        backgroundColor: toggle ? "rgb(250,250,250)" : "rgb(22,22,22)",
        color: toggle ? "rgb(22,22,22)" : "rgb(250,250,250)"
    },
    "-= 700"

    )
    .add({
        targets: "header",
        color: toggle ? "rgb(22,22,22)" : "rgb(255,255,255)"
    },
    "-= 700"
    )

    .add({
        targets: ".teks",
        color: toggle ? "rgb(170, 0, 28);;" : "rgb(255,255,255)"
    },
    "-= 700"
    )

    .add({
        targets: "nav#nav-menu",
        color: toggle ? "rgb(22,22,22);" : "rgb(255,255,255)"
    },
    "-= 700"
    )
    ; 

    //Pengembalian
    if(!toggle){
        toggle = true;
    }else{
        toggle = false;
    }

});