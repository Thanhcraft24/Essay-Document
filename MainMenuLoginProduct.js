middle = {
    trang1: [

    product = {
        imgphim: "./Images/anime1.jpg",
        namephim: "Conan",
        linkimg:'/MainMenu/Login/LoginPage.php',
        linkname:'/MainMenu/Login/LoginPage.php',
    },
    
    {
        imgphim: "./Images/anime2.jpg",
        namephim: "One Piece",
        linkimg:'/MainMenu/Login/LoginPage.php',
        linkname:'/MainMenu/Login/LoginPage.php',
    },
    
    {
        imgphim: "./Images/anime3.jpg",
        namephim: "MASHLE",
        linkimg:'/MainMenu/Login/LoginPage.php',
        linkname:'/MainMenu/Login/LoginPage.php',
    },
    
    {
        imgphim: "./Images/anime4.jpg",
        namephim: "Solo Leveling",
        linkimg:'/MainMenu/Login/LoginPage.php',
        linkname:'/MainMenu/Login/LoginPage.php',
    },
    
    {
        imgphim: "./Images/anime5.jpg",
        namephim: "Blue Exorcist",
        linkimg:'/MainMenu/Login/LoginPage.php',
        linkname:'/MainMenu/Login/LoginPage.php',
    },
    
    {
        imgphim: "./Images/anime6.jpg",
        namephim: "Dragon Ball",
        linkimg:'/MainMenu/Login/LoginPage.php',
        linkname:'/MainMenu/Login/LoginPage.php',
    },
    
    {
        imgphim: "./Images/anime7.jpg",
        namephim: "Black Clover",
        linkimg:'/MainMenu/Login/LoginPage.php',
        linkname:'/MainMenu/Login/LoginPage.php',
    },
    
    {
        imgphim: "./Images/anime8.jpg",
        namephim: "Moonlit Fantasy",
        linkimg:'/MainMenu/Login/LoginPage.php',
        linkname:'/MainMenu/Login/LoginPage.php',
    },
    
    {
        imgphim: "./Images/anime9.jpg",
        namephim: "Frieren, Funeral Wizard",
        linkimg:'/MainMenu/Login/LoginPage.php',
        linkname:'/MainMenu/Login/LoginPage.php',
    },

    {
        imgphim: "./Images/anime10.jpg",
        namephim: "Shangri - LA Frontier",
        linkimg:'/MainMenu/Login/LoginPage.php',
        linkname:'/MainMenu/Login/LoginPage.php',
    },

    {
        imgphim: "./Images/anime11.jpg",
        namephim: "Fate / Stay night",
        linkimg:'/MainMenu/Login/LoginPage.php',
        linkname:'/MainMenu/Login/LoginPage.php',
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