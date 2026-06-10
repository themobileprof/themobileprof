(function () {
  var API_BASE =
    window.TMP_API_BASE ||
    (window.location.hostname === 'localhost' || window.location.hostname === '127.0.0.1'
      ? 'http://localhost:3000/api'
      : 'https://api.themobileprof.com/api');

  var form = document.getElementById('ngo-interest-form');
  if (!form) return;

  var alertEl = document.getElementById('ngo-form-alert');
  var submitBtn = document.getElementById('ngo-submit-btn');

  function showAlert(message, type) {
    alertEl.textContent = message;
    alertEl.className = 'alert alert-' + type;
    alertEl.classList.remove('d-none');
    alertEl.scrollIntoView({ behavior: 'smooth', block: 'nearest' });
  }

  function collectTopics() {
    var boxes = form.querySelectorAll('input[name="trainingTopics"]:checked');
    var topics = [];
    for (var i = 0; i < boxes.length; i++) {
      topics.push(boxes[i].value);
    }
    return topics;
  }

  form.addEventListener('submit', function (e) {
    e.preventDefault();

    if (!form.checkValidity()) {
      form.reportValidity();
      return;
    }

    var payload = {
      organizationName: form.organizationName.value.trim(),
      contactName: form.contactName.value.trim(),
      contactEmail: form.contactEmail.value.trim(),
      contactPhone: form.contactPhone.value.trim() || undefined,
      country: form.country.value.trim(),
      city: form.city.value.trim() || undefined,
      website: form.website.value.trim() || undefined,
      organizationType: form.organizationType.value,
      missionSummary: form.missionSummary.value.trim(),
      beneficiariesEstimate: form.beneficiariesEstimate.value
        ? parseInt(form.beneficiariesEstimate.value, 10)
        : undefined,
      trainingTopics: collectTopics(),
      availabilityNotes: form.availabilityNotes.value.trim() || undefined,
      message: form.message.value.trim() || undefined,
      websiteUrl: form.websiteUrl.value,
    };

    submitBtn.disabled = true;
    submitBtn.innerHTML = '<i class="fa fa-spinner fa-spin"></i> Sending...';

    fetch(API_BASE + '/ngo-submissions', {
      method: 'POST',
      headers: { 'Content-Type': 'application/json', Accept: 'application/json' },
      body: JSON.stringify(payload),
    })
      .then(function (res) {
        return res.json().then(function (data) {
          return { ok: res.ok, data: data };
        });
      })
      .then(function (result) {
        if (result.ok && result.data.success) {
          showAlert(result.data.message || 'Thank you! We will be in touch soon.', 'success');
          form.reset();
        } else {
          var msg =
            result.data.message ||
            result.data.error ||
            'Something went wrong. Please email info@themobileprof.com instead.';
          showAlert(msg, 'danger');
        }
      })
      .catch(function () {
        showAlert(
          'Could not reach our server. Please try again or email info@themobileprof.com directly.',
          'danger'
        );
      })
      .finally(function () {
        submitBtn.disabled = false;
        submitBtn.innerHTML = 'Submit interest <i class="fa fa-paper-plane" aria-hidden="true"></i>';
      });
  });
})();
