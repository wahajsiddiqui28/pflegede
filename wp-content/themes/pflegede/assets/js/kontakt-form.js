(function () {
  'use strict';

  var form      = document.getElementById('pflegedeKontaktForm');
  var msgBox    = document.getElementById('kontaktFormMessage');
  var submitBtn = document.getElementById('kontaktSubmitBtn');

  if (!form) return;

  function showMessage(text, type) {
    var cls = type === 'success' ? 'pf-kontakt-alert--success' : 'pf-kontakt-alert--error';
    var icon = type === 'success' ? 'bi-check-circle-fill' : 'bi-exclamation-triangle-fill';
    msgBox.className = 'pf-kontakt-alert ' + cls;
    msgBox.innerHTML = '<i class="bi ' + icon + '"></i><span>' + text + '</span>';
    msgBox.style.display = 'flex';
    msgBox.scrollIntoView({ behavior: 'smooth', block: 'nearest' });
  }

  function setLoading(loading) {
    if (loading) {
      submitBtn.disabled = true;
      submitBtn.dataset.orig = submitBtn.innerHTML;
      submitBtn.innerHTML = '<span class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span><span>' +
        ((typeof pflegedeKontakt !== 'undefined' && pflegedeKontakt.sending) || 'Wird gesendet ...') + '</span>';
    } else {
      submitBtn.disabled = false;
      if (submitBtn.dataset.orig) submitBtn.innerHTML = submitBtn.dataset.orig;
    }
  }

  form.addEventListener('submit', function (e) {
    e.preventDefault();

    // Client-side required field check
    var valid = true;
    form.querySelectorAll('[required]').forEach(function (field) {
      var empty = field.type === 'checkbox' ? !field.checked : !field.value.trim();
      if (empty) {
        field.classList.add('is-invalid');
        valid = false;
        var evt = field.type === 'checkbox' ? 'change' : 'input';
        field.addEventListener(evt, function () { field.classList.remove('is-invalid'); }, { once: true });
      }
    });

    if (!valid) {
      showMessage('Bitte füllen Sie alle Pflichtfelder aus.', 'error');
      return;
    }

    setLoading(true);
    msgBox.style.display = 'none';

    var data = new FormData(form);
    if (!data.get('action')) data.set('action', 'pflegede_kontakt');

    var ajaxUrl = (typeof pflegedeKontakt !== 'undefined' && pflegedeKontakt.ajaxurl)
      || '/wp-admin/admin-ajax.php';

    fetch(ajaxUrl, { method: 'POST', body: data, credentials: 'same-origin' })
      .then(function (res) { if (!res.ok) throw new Error('Network error'); return res.json(); })
      .then(function (json) {
        setLoading(false);
        if (json.success) {
          showMessage(json.data.message || 'Ihre Nachricht wurde erfolgreich gesendet!', 'success');
          form.reset();
        } else {
          showMessage(json.data.message || 'Etwas ist schiefgelaufen. Bitte versuchen Sie es erneut.', 'error');
        }
      })
      .catch(function () {
        setLoading(false);
        showMessage('Etwas ist schiefgelaufen. Bitte versuchen Sie es erneut oder schreiben Sie uns direkt an info@pflegede.com.', 'error');
      });
  });

})();
