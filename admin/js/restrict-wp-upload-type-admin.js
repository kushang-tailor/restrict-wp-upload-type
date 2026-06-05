(function () {
	'use strict';

	document.addEventListener('DOMContentLoaded', function () {
		var selectAll = document.querySelector('.select-all');
		var clearAll = document.querySelector('.clear-all');
		var messageDismiss = document.querySelector('#rwut_message .notice-dismiss');
		var messageBox = document.querySelector('#rwut_message');
		var submitButton = document.querySelector('#restrict_wp_form button.btn-submit');
		var checkboxes = document.querySelectorAll('.container-checkbox input[type="checkbox"]');

		function setCheckboxState(checked) {
			checkboxes.forEach(function (checkbox) {
				checkbox.checked = checked;
			});
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
				messageBox.style.display = 'block';
			});
		}

		if (messageBox) {
			setTimeout(function () {
				messageBox.style.display = 'none';
			}, 8000);
		}

		if (submitButton) {
			submitButton.addEventListener('click', function (event) {
				var form = document.getElementById('restrict_wp_form');
				var checked = form.querySelectorAll('input[type="checkbox"]:checked');

				if (checked.length === 0) {
					event.preventDefault();
					window.alert('Please select any one Mime type!');
					return false;
				}

				var spinner = this.nextElementSibling;

				if (spinner) {
					spinner.style.visibility = 'visible';
					spinner.style.opacity = '1';
				}
			});
		}
	});
})();
