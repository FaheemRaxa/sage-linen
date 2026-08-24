(function () {
  var toggle = document.querySelector('.sl-menu-toggle');
  var mobile = document.getElementById('sl-mobile-nav');
  var searchToggle = document.querySelector('.sl-search-toggle');
  var searchPanel = document.getElementById('sl-search-panel');
  if (toggle && mobile) {
    toggle.addEventListener('click', function () {
      var open = toggle.getAttribute('aria-expanded') === 'true';
      toggle.setAttribute('aria-expanded', String(!open));
      mobile.hidden = open;
      document.body.classList.toggle('sl-menu-open', !open);
    });
  }
  if (searchToggle && searchPanel) {
    searchToggle.addEventListener('click', function () {
      var open = searchToggle.getAttribute('aria-expanded') === 'true';
      searchToggle.setAttribute('aria-expanded', String(!open));
      searchPanel.hidden = open;
      if (!open) {
        var input = searchPanel.querySelector('input[type="search"]');
        if (input) input.focus();
      }
    });
  }
}());
