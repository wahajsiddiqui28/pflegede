(function () {
  'use strict';

  // Bootstrap handles navbar toggle automatically via data-bs-toggle
  // Below: extra UX enhancements only

  // Auto-submit filter selects on change
  document.querySelectorAll('.filter-select').forEach(function (select) {
    select.addEventListener('change', function () {
      var form = select.closest('form');
      if (form) form.submit();
    });
  });

  // Make entire listing card clickable (click anywhere → go to detail)
  document.querySelectorAll('.listing-card').forEach(function (card) {
    var titleLink = card.querySelector('.card-title a');
    if (!titleLink) return;
    card.addEventListener('click', function (e) {
      if (e.target.closest('a') || e.target.closest('button')) return;
      titleLink.click();
    });
  });

})();
