import "@images/favicon.ico";
import "@styles/theme";
import "airbnb-browser-shims";
import "./pages/*.js";
import Swup from 'swup';
import { gsap } from "gsap";
import { ScrollTrigger } from "gsap/ScrollTrigger";
import AOS from "aos/dist/aos";
import 'jquery.easing';

jQuery(document).ready(function () {
  const swup = new Swup();
  initializePageFeatures();

  swup.hooks.on('content:replace', () => {
    initializePageFeatures();
  });

});

function initializePageFeatures() {
  initAnimations();
  setupBackToTopButton();
  setupMenuFixedBehavior();
  setupMobileMenuHandling();
  setupSubmenuToggleHandling();
  setupHideHeaderOnScroll();
  setupAjaxSendMail();
}
/**
 * Khởi tạo hoạt ảnh GSAP và AOS
 */
function initAnimations() {
  // GSAP
  gsap.registerPlugin(ScrollTrigger);
  gsap.from(".welcome-aiot", {
    x: '50%',
    duration: 2,
    opacity: 0.3,
    scrollTrigger: {
      trigger: ".welcome-aiot",
      start: "top 80%",
      end: "bottom 20%",
      scrub: true,
    }
  });

  // AOS
  AOS.init({
    duration: 400,
  });
}

/**
 * Back to top button with hide on scroll and footer detection
 */
function setupBackToTopButton() {
  const backToTopBtn = $('#back-to-top');
  const footerOffsetTop = $('#footer').offset().top;
  const windowHeight = $(window).height();
  let scrollTimeout;
  const pageHeight = $(document).height();
  const scrollThreshold = pageHeight * 0.1; // 10% chiều cao trang

  // Sự kiện scroll để xử lý nút "Back to top"
  $(window).on('scroll', function () {
    const scrollTop = $(this).scrollTop();

    // Kiểm tra nếu người dùng đã scroll quá 10% chiều cao trang để hiện nút "Back to top"
    if (scrollTop > scrollThreshold) {
      backToTopBtn.addClass('fixed'); // Thêm class fixed
    } else {
      backToTopBtn.removeClass('fixed show hidden'); // Xóa tất cả các class nếu cuộn lên trên ngưỡng
    }

    // Ẩn nút "Back to top" khi scroll (cả cuộn lên và cuộn xuống đều ẩn)
    backToTopBtn.addClass('hidden').removeClass('show'); // Ẩn nút khi có cuộn

    // Kiểm tra nếu gần tới footer thì xóa cả `fixed` và `hidden`
    if (scrollTop + windowHeight >= footerOffsetTop) {
      backToTopBtn.removeClass('fixed hidden').addClass('show'); // Xóa `fixed`, hiện lại nút khi gần footer
    }

    // Xác định khi người dùng dừng cuộn
    clearTimeout(scrollTimeout); // Xóa timeout cũ
    scrollTimeout = setTimeout(function () {
      if (scrollTop + windowHeight < footerOffsetTop) {
        backToTopBtn.removeClass('hidden').addClass('show'); // Khi dừng cuộn, hiện lại nút nếu không gần footer
      }
    }, 500); // Thời gian chờ để xác định ngừng cuộn (200ms)
  });

  // Xử lý sự kiện click vào nút "Back to top"
  backToTopBtn.on('click', function (e) {
    e.preventDefault();
    $('html, body').animate({ scrollTop: 0 }, 500, 'easeInOutCubic');
  });
}


/**
 * Menu fixed behavior
 */
function setupMenuFixedBehavior() {
  const navbar = document.querySelector('#header');

  $(window).on('scroll', () => {
    const isMobile = window.innerWidth <= 768;
    const scrollThreshold = isMobile ? 90 : 106;

    if (window.scrollY > scrollThreshold) {
      navbar.classList.add('fixed');
    } else {
      navbar.classList.remove('fixed');
    }
  });
}

/**
 * Menu mobile handling
 */
function setupMobileMenuHandling() {
  let menuType = 'desktop';

  $(window).on('load resize', function () {
    const currMenuType = matchMedia('only screen and (max-width: 991px)').matches ? 'mobile' : 'desktop';

    if (currMenuType !== menuType) {
      menuType = currMenuType;
      if (currMenuType === 'mobile') {
        enableMobileMenu();
      } else {
        enableDesktopMenu();
      }
    }
  });

  // Toggle mobile menu
  $('.btn-menu').on('click', function () {
    $('#mainnav-mobi').slideToggle(300);
    $(this).toggleClass('active');
  });

  // Handle submenu in mobile menu
  $(document).on('click', '#mainnav-mobi li .btn-submenu', function (e) {
    $(this).toggleClass('active').next('ul').slideToggle(300);
    e.stopImmediatePropagation();
  });
}

/**
 * Enable mobile menu
 */
function enableMobileMenu() {
  const $mobileMenu = $('#mainnav').attr('id', 'mainnav-mobi').hide();
  const hasChildMenu = $('#mainnav-mobi').find('li:has(ul)');

  $('#header .container').after($mobileMenu);
  hasChildMenu.children('ul').hide();
  hasChildMenu.children('a').after('<span class="btn-submenu"></span>');
  $('.btn-menu').removeClass('active');
}

/**
 * Enable desktop menu
 */
function enableDesktopMenu() {
  const $desktopMenu = $('#mainnav-mobi').attr('id', 'mainnav').removeAttr('style');

  $desktopMenu.find('.submenu').removeAttr('style');
  $('#header').find('.nav-wrap').append($desktopMenu);
  $('.btn-submenu').remove();
}

// document.addEventListener('DOMContentLoaded', function () {
//   const submenuToggles = document.querySelectorAll('.submenu-toggle');

//   submenuToggles.forEach(function (toggle) {
//     toggle.addEventListener('click', function () {
//       const isExpanded = this.getAttribute('aria-expanded') === 'true';
//       this.setAttribute('aria-expanded', !isExpanded);
//       this.classList.toggle('is-active');
//       const submenu = this.nextElementSibling;
//       if (submenu && submenu.tagName === 'UL') {
//         submenu.classList.toggle('is-active');
//       }
//     });
//   });
// });

/**
 * Setup submenu toggle handling (JS mới của bạn)
 */
function setupSubmenuToggleHandling() {
  document.addEventListener('DOMContentLoaded', function () {
    const submenuToggles = document.querySelectorAll('.submenu-toggle');

    submenuToggles.forEach(function (toggle) {
      toggle.addEventListener('click', function () {
        const isExpanded = this.getAttribute('aria-expanded') === 'true';
        this.setAttribute('aria-expanded', !isExpanded);
        this.classList.toggle('is-active');
        const submenu = this.nextElementSibling;
        if (submenu && submenu.tagName === 'UL') {
          submenu.classList.toggle('is-active');
        }
      });
    });
  });
}

/**
 * Ẩn/hiện header khi scroll
 */
function setupHideHeaderOnScroll() {
  let lastScrollTop = 0;
  let header = document.getElementById('header');
  let scrollTimeout;

  window.addEventListener('scroll', function () {
    clearTimeout(scrollTimeout); // Clear timeout khi có sự kiện scroll xảy ra

    let currentScrollTop = window.pageYOffset || document.documentElement.scrollTop;

    if (currentScrollTop > lastScrollTop) {
      // Khi scroll xuống, ẩn header
      header.classList.add('hidden');
    } else {
      // Khi scroll lên, hiện header
      header.classList.add('hidden');
    }

    lastScrollTop = currentScrollTop <= 0 ? 0 : currentScrollTop; // Ngăn việc giá trị scrollTop là âm

    // Chờ một khoảng thời gian sau khi cuộn để hiện lại header nếu người dùng ngừng cuộn
    scrollTimeout = setTimeout(() => {
      header.classList.remove('hidden');
    }, 500);
  });
}

function setupAjaxSendMail() {
  $('#contactForm').on('submit', function (e) {
    e.preventDefault();
    var formData = $(this).serialize();
    $.ajax({
      url: ajaxurl, // Sử dụng biến ajaxurl
      type: 'POST',
      dataType: 'json',
      data: formData + '&action=send_contact_form',
      success: function (response) {
        if (response.success) {
          $('#formMessage').html('<p>' + response.data.message + '</p>');
          $('#contactForm')[0].reset();
        } else {
          $('#formMessage').html('<p>' + response.data.message + '</p>');
        }
      },
      error: function () {
        $('#formMessage').html('<p>Đã xảy ra lỗi. Vui lòng thử lại.</p>');
      }
    });
  });
}
