'use strict';

window.addEventListener("DOMContentLoaded", () => {
    // モーダルを取得
    const modal = document.getElementById("modal");
    // モーダルを開く
    const openModalBtns = document.querySelectorAll(".modalOpen");
    // モーダルを閉じる
    const closeModalBtns = document.querySelectorAll(".modalClose");
    // モーダルのボタンクリック
    openModalBtns.forEach((openModalBtn) => {
      openModalBtn.addEventListener("click", () => {
        // data-modalで設定したスライド番号を取得
        const modalIndex = openModalBtn.getAttribute('data-modal');
        slider3.slideTo(modalIndex - 1);
        modal.classList.add("is-active");
      });
    });
  
    // モーダルの閉じるボタンクリック
    closeModalBtns.forEach((closeModalBtn) => {
      closeModalBtn.addEventListener("click", () => {
        modal.classList.remove("is-active");
      });
    });
  });