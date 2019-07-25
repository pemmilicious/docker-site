const activeButton = document.getElementById("active");
const list1 = document.getElementById("list1");

const gamesButton = document.getElementById("games");
const gamesList = document.getElementById("gamesList");

const creativeButton = document.getElementById("creative");
const creativeList = document.getElementById("creativeList");

const langButton = document.getElementById("languages");
const languagesList = document.getElementById("langList");

list1.style.display = "block";
gamesList.style.display = "none";
creativeList.style.display = "none";
langList.style.display = "none";

activeButton.addEventListener("click", (event) => {
  if (list1.style.display == "none"){
    list1.style.display = "block";
  }else{
    list1.style.display = "none";
  }
})

gamesButton.addEventListener("click", (event) => {
  if (gamesList.style.display == "none"){
    gamesList.style.display = "block";
  }else{
    gamesList.style.display = "none";
  }
})

creativeButton.addEventListener("click", (event) => {
  if (creativeList.style.display == "none"){
    creativeList.style.display = "block";
  }else{
    creativeList.style.display = "none";
  }
})

langButton.addEventListener("click", (event) => {
  if (languagesList.style.display == "none"){
    languagesList.style.display = "block";
  }else{
    languagesList.style.display = "none";
  }
})
