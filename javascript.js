//ここに追加したいJavaScript、jQueryを記入してください。
//このJavaScriptファイルは、親テーマのJavaScriptファイルのあとに呼び出されます。
//JavaScriptやjQueryで親テーマのjavascript.jsに加えて関数を記入したい時に使用します。
document.addEventListener('DOMContentLoaded', function () {
  const targets = [
    ".mycover-text01", ".mycover-text02", ".inquire-cover",
    ".section-title",
    ".about-textbox",
    ".about02-content-left", ".about02-content-right",
    ".game-content", ".service-content",
    ".ceo-h3", ".ceo", ".ceo-introduce", ".office-info-left", ".office-info-right", ".map", ".office-photo",
    ".link-list",
    ".contact-h2", ".contact-title-p", ".contact-button", ".contact-p2", ".contact-detail",
    ".main-work-h3", ".detail-title", ".detail-text-box"
  ];

  const elements = document.querySelectorAll(targets.join(', '));

  if (elements.length > 0) {
    const observer = new IntersectionObserver((entries, observer) => {
      entries.forEach(entry => {
        if (entry.isIntersecting) {
          entry.target.classList.add("fade-in");
          observer.unobserve(entry.target);
        }
      });
    }, {
      threshold: 0.1
    });

    elements.forEach(element => observer.observe(element));
  }
});