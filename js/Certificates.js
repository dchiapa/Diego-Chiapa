class Certificates {
  constructor() {
    this.container = document.querySelector(".cert");
    this.cert__items = document.querySelectorAll(".cursos__item");
    this.cert__items.forEach((cert__item) => {
      cert__item.addEventListener(
        "click",
        (e) => {
          this.createCert(e.target);
          this.showCert(e.target);
        },
        false
      );
    });
    this.cert__close = this.container.querySelector(".cert__close");
    this.cert__close.addEventListener(
      "click",
      () => {
        this.hideCert();
      },
      false
    );
  }
  createCert(cert__item) {
    this.cert__img = document.createElement("img");
    this.cert__img.src = "img/cert/" + cert__item.dataset.target + ".png";
    this.cert__img.className = "cert__image";
  }
  showCert() {
    this.container.insertBefore(this.cert__img, this.cert__close);
    this.container.style.display = "flex";
  }
  hideCert() {
    this.container.removeChild(this.container.childNodes[1]);
    this.container.style.display = "none";
  }
}
