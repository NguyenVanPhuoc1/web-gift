$('.news-list').slick({
    slidesToShow: 3,
    slidesToScroll: 1,
    autoplay: true,
    autoplaySpeed: 2000,
    arrows: false, // Ẩn cả hai nút điều hướng
    responsive: [
      {
        breakpoint: 576, // Kích thước màn hình dưới 768px (điện thoại di động)
        settings: {
          slidesToShow: 1 // Hiển thị 1 slide trên mobile
        }
      },
      {
        breakpoint: 768, // Kích thước màn hình dưới 768px (điện thoại di động)
        settings: {
          slidesToShow: 2 // Hiển thị 1 slide trên mobile
        }
      }
      // Các điều kiện điều chỉnh khác cho các kích thước màn hình khác
    ]
  });

  //
  $('.owl-thumb-pro').slick({
    slidesToShow: 4,
    slidesToScroll: 1,
    autoplay: true,
    autoplaySpeed: 3000,
    prevArrow: '<button type="button" class="slick-prev"></button>',
    nextArrow: '<button type="button" class="slick-next"></button>'
  });
