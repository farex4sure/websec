const showMenu = () => {
  const menu = document.querySelector(".link");

  if (menu.className === "link") {
    menu.className += " responsive";
  } else {
    menu.className = "link";
  }
};
