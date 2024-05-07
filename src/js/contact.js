document.addEventListener("DOMContentLoaded", function () {
    var contactForm = document.getElementById('contact-form');

    contactForm.addEventListener('submit', function (e) {
        e.preventDefault(); // Prevent form submission

        var formData = new FormData(contactForm); // Get form data

        var formMessage = document.getElementById('form-message');
        var spinner = document.getElementById('spinner');

        fadeOut(formMessage);
        fadeIn(spinner);

        var xhr = new XMLHttpRequest();
        xhr.onreadystatechange = function () {
            if (xhr.readyState === XMLHttpRequest.DONE) {
                if (xhr.status === 200) {
                    var response = xhr.responseText;
                    console.log(response);

                    fadeOut(spinner);
                    clearControlFeedback();

                    var fields = document.querySelectorAll('.fields');
                    fields.forEach(function (field) {
                        fadeOut(field);
                    });

                    showFormMessage('success', response);

                    contactForm.reset(); // Reset form fields
                } else {
                    console.error(xhr.status, xhr.statusText);
                    fadeOut(spinner);
                    clearControlFeedback();

                    if (isJSONObject(xhr.responseText)) {
                        var errors = JSON.parse(xhr.responseText);
                        Object.keys(errors).forEach(function (key) {
                            var inputField = document.querySelector('[name="' + key + '"]');
                            inputField.classList.add('is-invalid');
                            var invalidFeedback = inputField.nextElementSibling;
                            invalidFeedback.textContent = errors[key];
                            fadeIn(invalidFeedback);
                        });
                    } else {
                        showFormMessage('error', xhr.responseText);
                    }
                }
            }
        };

        xhr.open('POST', contactForm.getAttribute('action') + '?ajax=true', true);
        xhr.send(formData);
    });

    function fadeOut(element) {
        element.style.opacity = 0;
        setTimeout(function () {
            element.style.display = 'none';
        }, 200);
    }

    function fadeIn(element) {
        element.style.opacity = 1;
        element.style.display = 'block';
    }

    function clearControlFeedback() {
        var formControls = document.querySelectorAll('.form-control');
        formControls.forEach(function (control) {
            control.classList.remove('is-invalid');
        });
    }

    function showFormMessage(type, message) {
        var formMessage = document.getElementById('form-message');
        formMessage.classList.add(type);
        formMessage.style.display = 'block';
        formMessage.querySelector('.message').innerHTML = message;
    }

    function isJSONObject(strData) {
        try {
            JSON.parse(strData);
        } catch (e) {
            return false;
        }
        return true;
    }

    var selects = document.querySelectorAll("select");
    var borderOpacity = .25;
    var placeholderOpacity = .7;

    selects.forEach(function (selectElement) {
        var defaultOption = selectElement.querySelector("option[selected]");

        if (defaultOption) {
            selectElement.style.opacity = placeholderOpacity; // Change general opacity
            selectElement.style.borderColor = "rgba(0, 21, 20, " + borderOpacity / placeholderOpacity + ")"; // Change border opacity   
        }

        selectElement.addEventListener("change", function () {
            var selectedOption = this.options[this.selectedIndex];
            if (selectedOption != defaultOption) {
                selectElement.style.opacity = "1"; // Change general opacity
                selectElement.style.borderColor = "rgba(0, 21, 20, " + borderOpacity + ")"; // Change border color
            }
        });
    });
});
