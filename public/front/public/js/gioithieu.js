// hướng dẫn loading
window.addEventListener('load', function() {

  var loadingOverlay = document.querySelector('.loading-overlay');
  var load = document.querySelector('.lds-ring')
  var content = document.querySelector('#page');

  loadingOverlay.style.display = 'none'; // Ẩn overlay loading
  load.style.display = 'none';
  content.style.display = 'block'; // Hiển thị nội dung sau khi tải xong
});

// Lắng nghe sự kiện cuộn của trang
document.addEventListener('DOMContentLoaded', function() {
  var banner = document.querySelector('.banner-header');
  banner.classList.remove('fixed');
  window.addEventListener('scroll', function() {
    var scrollPosition = window.scrollY || window.pageYOffset;

    if (scrollPosition > 100) { // Thêm lớp chỉ khi chưa thêm và vị trí scroll đủ điều kiện
      banner.classList.add('fixed');
    } else if (scrollPosition <= 100 ) { // Loại bỏ lớp khi scroll lên đầu trang
      banner.classList.remove('fixed');
    }
  });
});


new Mmenu(document.querySelector("#menu"));
// const menu_tab = document.querySelector('#menu');
// khi mà tạo menu thì tự động tạo class mm-wrapper--position-left
var bodyElement = document.body;

if (window.innerWidth > 1000) {
    bodyElement.classList.remove("mm-wrapper--position-left");
}

const backToTopBtn = document.querySelector('.scrollToTop');

window.addEventListener("scroll", () => {
    if (window.scrollY > 200) {
        backToTopBtn.classList.add("show");
    } else {
        backToTopBtn.classList.remove("show");
    }
});

backToTopBtn.addEventListener("click", () => {
    window.scrollTo({
        top: 0,
        behavior: "smooth"
    });
});

 // Lấy danh sách tất cả các thẻ a trong menu-bar
const menuLinks = document.querySelectorAll('.menu-bar>li ');

// Lấy địa chỉ URL hiện tại
const currentURL = window.location.href;

// Lặp qua từng thẻ a
menuLinks.forEach(item => {
  if (currentURL.includes(item.id)) {
    // Thêm class "active" cho thẻ a nếu liên kết trùng với địa chỉ URL
    item.classList.add('action');
  }else{
    item.classList.remove('action');
  }
});


  // Sử dụng JavaScript để ẩn thẻ <a> dựa trên nội dung văn bản
  document.addEventListener('DOMContentLoaded', function() {
    var magicZoomLinks = document.querySelectorAll('a'); // Lấy tất cả các thẻ <a> trên trang
  
    magicZoomLinks.forEach(function(link) {
        if (link.textContent === "Magic Zoom Plus™ trial version") {
            link.style.display = 'none';
        }
    });
  });

  document.addEventListener("DOMContentLoaded", function () {
    const tabs = document.querySelectorAll(".ul-tabs-pro-detail li");
    const tabContents = document.querySelectorAll(".content-tabs-pro-detail");

    tabs.forEach(tab => {
        tab.addEventListener("click", function () {
            tabs.forEach(t => t.classList.remove("active"));
            // this.classList.add("active");

            const tabId = this.getAttribute("data-tabs");
            tabContents.forEach(content => {
                content.classList.remove("active");
                if (content.classList.contains(tabId)) {
                    // content.classList.add("commentfb-pro-detail");
                }
            });
        });
    });
});