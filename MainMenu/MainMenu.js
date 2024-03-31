middle = {
    trang1: [

    product = {
        imgphim: "./Images/anime1.jpg",
        namephim: "Conan",
        linkimg:'/MainMenu/SubPage/SubPage1.php',
        linkname:'',
    },
    
    {
        imgphim: "./Images/anime2.jpg",
        namephim: "One Piece",
        linkimg:'/MainMenu/SubPage/SubPage2.php',
        linkname:'',
    },
    
    {
        imgphim: "./Images/anime3.jpg",
        namephim: "MASHLE",
        linkimg:'/MainMenu/SubPage/SubPage3.php',
        linkname:'',
    },
    
    {
        imgphim: "./Images/anime4.jpg",
        namephim: "Solo Leveling",
        linkimg:'/MainMenu/SubPage/SubPage4.php',
        linkname:'',
    },
    
    {
        imgphim: "./Images/anime5.jpg",
        namephim: "Blue Exorcist",
        linkimg:'/MainMenu/SubPage/SubPage5.php',
        linkname:'',
    },
    
    {
        imgphim: "./Images/anime6.jpg",
        namephim: "Dragon Ball",
        linkimg:'/MainMenu/SubPage/SubPage6.php',
        linkname:'',
    },
    
    {
        imgphim: "./Images/anime7.jpg",
        namephim: "Black Clover",
        linkimg:'/MainMenu/SubPage/SubPage7.php',
        linkname:'',
    },
    
    {
        imgphim: "./Images/anime8.jpg",
        namephim: "Moonlit Fantasy",
        linkimg:'/MainMenu/SubPage/SubPage8.php',
        linkname:'',
    },
    
    {
        imgphim: "./Images/anime9.jpg",
        namephim: "Frieren, Funeral Wizard",
        linkimg:'/MainMenu/SubPage/SubPage9.php',
        linkname:'',
    },

    {
        imgphim: "./Images/anime10.jpg",
        namephim: "Shangri - LA Frontier",
        linkimg:'/MainMenu/SubPage/SubPage10.php',
        linkname:'',
    },

    {
        imgphim: "./Images/anime11.jpg",
        namephim: "Fate / Stay night",
        linkimg:'/MainMenu/SubPage/SubPage11.php',
        linkname:'',
    },

],
}

for(let i of middle.trang1){



let image = document.createElement('img')
image.classList.add("imgphim")
image.setAttribute('src',i.imgphim)

//let divanh = document.createElement('div')
//divanh.classList.add('divanh')
//divanh.appendChild(image) 

let linkimg = document.createElement('a')
linkimg.setAttribute('href',i.linkimg)
linkimg.appendChild(image)

let name = document.createElement('div')
name.classList.add("divnho")
name.innerText = i.namephim

let linkname = document.createElement('a')
linkname.setAttribute('href',i.linkname)
linkname.appendChild(name)
linkname.classList.add("divnho")

let divlon = document.createElement("div")
divlon.classList.add("divlon")
divlon.appendChild(linkimg)
divlon.appendChild(linkname)


document.getElementById("middle").appendChild(divlon)
}