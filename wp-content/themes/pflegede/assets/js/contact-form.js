(function () {
  'use strict';

  var form      = document.getElementById('pflegedeContactForm');
  var msgBox    = document.getElementById('contactFormMessage');
  var submitBtn = document.getElementById('contactSubmitBtn');

  if (!form) return;

  function showMessage(text, type) {
    var alertClass = type === 'success' ? 'alert-success' : 'alert-danger';
    msgBox.className   = 'alert ' + alertClass + ' d-flex align-items-center gap-2';
    msgBox.innerHTML   = text;
    msgBox.style.display = 'flex';
    msgBox.scrollIntoView({ behavior: 'smooth', block: 'nearest' });
  }

  function setLoading(loading) {
    if (loading) {
      submitBtn.disabled    = true;
      submitBtn.dataset.orig = submitBtn.innerHTML;
      submitBtn.innerHTML   = '<span class="spinner-border spinner-border-sm me-2" role="status" aria-hidden="true"></span>' +
        ((typeof pflegedeContact !== 'undefined' && pflegedeContact.sending) || 'Sending...');
    } else {
      submitBtn.disabled  = false;
      if (submitBtn.dataset.orig) submitBtn.innerHTML = submitBtn.dataset.orig;
    }
  }

  form.addEventListener('submit', function (e) {
    e.preventDefault();

    // Client-side required field check
    var valid = true;
    form.querySelectorAll('[required]').forEach(function (field) {
      if (!field.value.trim()) {
        field.classList.add('is-invalid');
        valid = false;
        field.addEventListener('input', function () { field.classList.remove('is-invalid'); }, { once: true });
      }
    });

    if (!valid) {
      showMessage('Please fill in all required fields.', 'error');
      return;
    }

    setLoading(true);
    msgBox.style.display = 'none';

    var data = new FormData(form);
    if (!data.get('action')) data.set('action', 'pflegede_contact');

    var ajaxUrl = (typeof pflegedeContact !== 'undefined' && pflegedeContact.ajaxurl)
      || '/wp-admin/admin-ajax.php';

    fetch(ajaxUrl, { method: 'POST', body: data, credentials: 'same-origin' })
      .then(function (res) { if (!res.ok) throw new Error('Network error'); return res.json(); })
      .then(function (json) {
        setLoading(false);
        if (json.success) {
          showMessage(json.data.message || 'Sent successfully!', 'success');
          form.reset();
        } else {
          showMessage(json.data.message || 'Something went wrong.', 'error');
        }
      })
      .catch(function () {
        setLoading(false);
        showMessage('Something went wrong. Please try again or contact us directly.', 'error');
      });
  });

})();
