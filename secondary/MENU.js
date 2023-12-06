function SetUp() {
  document.querySelectorAll(".tablinks").forEach((btn) => {
    btn.addEventListener("click", () => {
      const _list = btn.parentElement;
      const menu = _list.parentElement;
      const NombreDeMenu = btn.dataset.forTab;
      const Activar = menu.querySelector(
        `.tabcontent[data-tab="${NombreDeMenu}"]`
      );
      console.log(NombreDeMenu);
      console.log(Activar);
      _list.querySelectorAll(".tablinks").forEach((btn3) => {
        btn3.classList.remove("active_tab");
      });
      menu.querySelectorAll(".tabcontent").forEach((contents) => {
        contents.classList.remove("activecontent");
      });
      s;
      Activar.classList.add("activecontent");
      s;
      btn.classList.add("active_tab");
    });
  });
}
document.addEventListener("DOMContentLoaded", () => {
  SetUp();
  document.querySelectorAll(".menu").forEach((tab) => {
    tab.querySelector("._list .tablinks").click();
  });
});
$(document).ready(function () {
  $("<br>").insertAfter("em");
});
fetch("../images/Images.json")
  .then((res) => {
    res.json().then((res) => {
      let image1 = res.images;
      console.log(image1);
      GetImage(image1);
    });
  })
  .catch((res) => console.log("Erro message", res));

fetch("./Entrantes.json")
  .then((res) => {
    res
      .json()
      .then((res) => {
        let body = res.Entrantes;
        GetEntaranted(body);
      })
      .catch((res) => console.log("Error" + res));
  })
  .catch((res) => console.log("Error" + res));

fetch(
  "https://mybusiness.googleapis.com/v4/accounts/AIzaSyDuld5PTG8Dz1SBCr-SJouV_sPEK57tcMA/locations/ChIJSwjkQMIuQg0RbJcBMIQBduU/reviews"
)
  .then((res) => {
    console.log(res);
    res
      .json()
      .then((data) => {
        console.log(data);
      })
      .catch((error) => console.log("Error" + error));
  })
  .catch((error1) => console.log("Error" + error1));

const getReview = (res) => {
  console.log(res);
};
function GetEntaranted(res) {
  for (let i = 0; i < res.length; i++) {
    // console.log(res[i]);
    let info_details = document.querySelector(".info-details-Entrantes");
    // console.log(info_details);
    var dl = document.createElement("dl");
    var div = document.createElement("div");
    div.className = "dlName";
    var dd = document.createElement("dd");
    var dt = document.createElement("dt");
    dt.innerHTML = res[i].nombre;
    dl.appendChild(div);
    dl.appendChild(dd);
    dd.innerHTML = res[i].description;
    div.appendChild(dt);
    let span = document.createElement("span");
    div.appendChild(span);
    span.innerHTML = res[i].price + " €";
    info_details.appendChild(dl);
  }

  // <dl>
  //   <div class="dlName">
  //     <dt>Samosa Vegetal (2 Unds)</dt> <span> eruos</span>
  //   </div>
  //   <dd>
  //     {" "}
  //     Empanadillas de masa crujiente rellenas de patata y especias.(ALERGENOS:
  //     Gluten, frutos secos)
  //   </dd>
  // </dl>;
}

function GetImage(image, key) {
  let id;
  let obj;
  document.querySelectorAll(".obj_image").forEach((element) => {
    id = element.getAttribute("alt");
    for (let i = 0; i < image.length; i++) {
      let obj = image[i];
      const arr = Object.keys(image[i]);
      if (arr.length > 0) {
        for (let j = 0; j < arr.length; j++) {
          if (arr[j] === id) {
            let imageurl = obj[id];
            element.setAttribute("src", imageurl);
            element.setAttribute("style", "height:50px");
          }
        }
      }
    }
  });
  // console.log(json.attributes[1].src.value+"Values");
  // json.setAttribute('src',image);
  // json.setAttribute('id',key);
  // json.setAttribute('style','height:50px');
}
