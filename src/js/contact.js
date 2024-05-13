document.addEventListener("DOMContentLoaded", function () {
    var contactForm = document.getElementById('contact-form');

    const formMessage = document.getElementById('form-message');
    const spinner = document.getElementById('spinner');

    contactForm.addEventListener('submit', function (e) {
        e.preventDefault(); // Prevent form submission

        fadeOut(formMessage);
        fadeIn(spinner);

        var formData = new FormData(contactForm); // Get form data

        var xhr = new XMLHttpRequest();
        xhr.onreadystatechange = function () {
            if (xhr.readyState === XMLHttpRequest.DONE) {
                fadeOut(spinner);
                clearControlFeedback();
                if (xhr.status === 200) {
                    var response = xhr.responseText;

                    var fields = document.querySelectorAll('.fields');
                    fields.forEach(function (field) {
                        fadeOut(field);
                    });

                    showFormMessage('success', response);

                    contactForm.reset(); // Reset form fields
                } else {

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
        var intervalId = setInterval(function () {
            element.style.display = 'none';
            clearInterval(intervalId);
        }, 200);
    }

    function fadeIn(element) {
        element.style.display = 'block';
        element.style.opacity = 1;
    }

    function clearControlFeedback() {
        var formControls = document.querySelectorAll('.form-control');
        formControls.forEach(function (control) {
            control.classList.remove('is-invalid');
        });
    }

    function showFormMessage(type, message) {
        formMessage.setAttribute('class', type);
        formMessage.querySelector('.message').innerHTML = message;
        fadeIn(formMessage)
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

        // watch for a specific class change
        let classWatcher = new ClassWatcher(selectElement, 'is-invalid', setBorderInvalid, unsetBorderInvalid);

        function setBorderInvalid() {
            selectElement.style.borderColor = "#dc3545"; // Change border color
        }
        function unsetBorderInvalid() {
            var selectedOption = selectElement.options[selectElement.selectedIndex];
            if (selectedOption != defaultOption) {
                selectElement.style.borderColor = "rgba(0, 21, 20, " + borderOpacity + ")"; // Change border color
            }
            else {
                selectElement.style.borderColor = "rgba(0, 21, 20, " + borderOpacity / placeholderOpacity + ")"; // Change border opacity   
            }
        }
    });
});

class ClassWatcher {

    constructor(targetNode, classToWatch, classAddedCallback, classRemovedCallback) {
        this.targetNode = targetNode
        this.classToWatch = classToWatch
        this.classAddedCallback = classAddedCallback
        this.classRemovedCallback = classRemovedCallback
        this.observer = null
        this.lastClassState = targetNode.classList.contains(this.classToWatch)

        this.init()
    }

    init() {
        this.observer = new MutationObserver(this.mutationCallback)
        this.observe()
    }

    observe() {
        this.observer.observe(this.targetNode, { attributes: true })
    }

    disconnect() {
        this.observer.disconnect()
    }

    mutationCallback = mutationsList => {
        for (let mutation of mutationsList) {
            if (mutation.type === 'attributes' && mutation.attributeName === 'class') {
                let currentClassState = mutation.target.classList.contains(this.classToWatch)
                if (this.lastClassState !== currentClassState) {
                    this.lastClassState = currentClassState
                    if (currentClassState) {
                        this.classAddedCallback()
                    }
                    else {
                        this.classRemovedCallback()
                    }
                }
            }
        }
    }
}
