(function () {
	'use strict';

	document.addEventListener('DOMContentLoaded', function () {
		var selectAll = document.querySelector('.select-all');
		var clearAll = document.querySelector('.clear-all');
		var messageDismiss = document.querySelector('#rwut_message .notice-dismiss');
		var messageBox = document.querySelector('#rwut_message');
		var submitButton = document.querySelector('#restrict_wp_form button.btn-submit');
		var checkboxes = document.querySelectorAll('.container-checkbox input[type="checkbox"]');
		var searchInput = document.getElementById('rwut-extension-search');
		var statusFilter = document.getElementById('rwut-extension-filter');
		var extensionItems = document.querySelectorAll('.container-checkbox');

		function setCheckboxState(checked) {
			checkboxes.forEach(function (checkbox) {
				checkbox.checked = checked;
			});

			filterExtensions();
		}

		if (selectAll) {
			selectAll.addEventListener('click', function (event) {
				event.preventDefault();
				setCheckboxState(true);
			});
		}

		if (clearAll) {
			clearAll.addEventListener('click', function (event) {
				event.preventDefault();
				setCheckboxState(false);
			});
		}

		if (messageDismiss && messageBox) {
			messageDismiss.addEventListener('click', function () {
				messageBox.style.display = 'none';
			});
		}

		if (messageBox) {
			setTimeout(function () {
				messageBox.style.display = 'none';
			}, 8000);
		}

		function filterExtensions() {
			var query = searchInput ? searchInput.value.toLowerCase().trim() : '';
			var status = statusFilter ? statusFilter.value : 'all';

			extensionItems.forEach(function (item) {
				var text = item.getAttribute('data-extension') || item.textContent.toLowerCase();
				var checkbox = item.querySelector('input[type="checkbox"]');
				var matchesSearch = !query || text.indexOf(query) !== -1;
				var matchesStatus = status === 'all' ||
					(status === 'enabled' && checkbox && checkbox.checked) ||
					(status === 'disabled' && checkbox && !checkbox.checked);

				item.style.display = matchesSearch && matchesStatus ? '' : 'none';
			});
		}

		if (searchInput) {
			searchInput.addEventListener('input', filterExtensions);
		}

		if (statusFilter) {
			statusFilter.addEventListener('change', filterExtensions);
		}

		checkboxes.forEach(function (checkbox) {
			checkbox.addEventListener('change', filterExtensions);
		});

		if (submitButton) {
			submitButton.addEventListener('click', function () {
				var spinner = this.nextElementSibling;

				if (spinner) {
					spinner.style.visibility = 'visible';
					spinner.style.opacity = '1';
				}
			});
		}
	});
})();
