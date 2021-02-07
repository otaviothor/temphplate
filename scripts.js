// utilities
const get = (selector, scope) => {
  scope = scope ? scope : document;
  return scope.querySelector(selector);
};

const getAll = (selector, scope) => {
  scope = scope ? scope : document;
  return scope.querySelectorAll(selector);
};

// toggle tabs on codeblock
window.addEventListener("load", () => {
  // get all tab_containers in the document
  const tabContainers = getAll(".tab__container");

  // bind click event to each tab container
  for (var i = 0; i < tabContainers.length; i++) {
    get(".tab__menu", tabContainers[i]).addEventListener("click", tabClick);
  }

  // each click event is scoped to the tab_container
  const tabClick = (event) => {
    const scope = event.currentTarget.parentNode;
    const clickedTab = event.target;
    const tabs = getAll(".tab", scope);
    const panes = getAll(".tab__pane", scope);
    const activePane = get(`.${clickedTab.getAttribute("data-tab")}`, scope);

    // remove all active tab classes
    for (let i = 0; i < tabs.length; i++) {
      tabs[i].classList.remove("active");
    }

    // remove all active pane classes
    for (let i = 0; i < panes.length; i++) {
      panes[i].classList.remove("active");
    }

    // apply active classes on desired tab and pane
    clickedTab.classList.add("active");
    activePane.classList.add("active");
  };
});

//in page scrolling for documentaiton page
const btns = getAll(".js-btn");
const sections = getAll(".js-section");

const setActiveLink = (event) => {
  // remove all active tab classes
  for (let i = 0; i < btns.length; i++) {
    btns[i].classList.remove("selected");
  }

  event.target.classList.add("selected");
};

smoothScrollTo = (element, event) => {
  setActiveLink(event);

  window.scrollTo({
    behavior: "smooth",
    top: element.offsetTop - 20,
    left: 0,
  });
};

if (btns.length && sections.length > 0) {
  // for (var i = 0; i<btns.length; i++) {
  //   btns[i].addEventListener('click', function(event) {
  //     smoothScrollTo(sections[i], event);
  //   });
  // }
  btns[0].addEventListener("click", (event) => {
    smoothScrollTo(sections[0], event);
  });

  btns[1].addEventListener("click", (event) => {
    smoothScrollTo(sections[1], event);
  });

  btns[2].addEventListener("click", (event) => {
    smoothScrollTo(sections[2], event);
  });

  btns[3].addEventListener("click", (event) => {
    smoothScrollTo(sections[3], event);
  });

  btns[4].addEventListener("click", (event) => {
    smoothScrollTo(sections[4], event);
  });

  btns[5].addEventListener("click", (event) => {
    smoothScrollTo(sections[5], event);
  });

  btns[6].addEventListener("click", (event) => {
    smoothScrollTo(sections[6], event);
  });

  btns[7].addEventListener("click", (event) => {
    smoothScrollTo(sections[7], event);
  });

  btns[8].addEventListener("click", (event) => {
    smoothScrollTo(sections[8], event);
  });
}

// fix menu to page-top once user starts scrolling
window.addEventListener("scroll", () => {
  const docNav = get(".doc__nav > ul");

  if (docNav) {
    if (window.pageYOffset > 63) {
      docNav.classList.add("fixed");
    } else {
      docNav.classList.remove("fixed");
    }
  }
});

// responsive navigation
const topNav = get(".menu");
const icon = get(".toggle");

window.addEventListener("load", () => {
  const showNav = () => {
    if (topNav.className === "menu") {
      topNav.className += " responsive";
      icon.className += " open";
    } else {
      topNav.className = "menu";
      icon.classList.remove("open");
    }
  };
  icon.addEventListener("click", showNav);
});
