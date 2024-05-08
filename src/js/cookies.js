document.addEventListener('DOMContentLoaded', function () {

  if (document.cookie.includes('cookieConsent=true')) {
    console.log('yes :)');
    cookies();
  }
  else if (document.cookie.includes('cookieConsent=')) {
    console.log('no :(');
  }
  else {
    console.log('let\'s see!');
    showCookieBanner();
  }

})


function facebookAPI() {
}
function googleAPI() {

}
function hubspotAPI() {

}

function cookies() {
  facebookAPI()
  googleAPI()
  hubspotAPI()
}

// Check if user has consented to the use of cookies
function didUserConsentCookies() {
  return document.cookie.includes('cookieConsent=true');
}

// Function to get the current timestamp in UTC format
function getCurrentTimestamp() {
  return new Date().toUTCString();
}

// Function to handle user's consent to cookies
function cookiesConsent() {
  var timestamp = getCurrentTimestamp();
  document.cookie = 'cookieConsent=true; expires=Fri, 31 Dec 9999 23:59:59 GMT; path=/; timestamp=' + timestamp;
  // Additional logic for handling cookie consent (e.g., loading tracking scripts)
  console.log('User has consented to the use of cookies at: ' + timestamp);
}

// Function to handle user's rejection of cookies
function cookiesReject() {
  var timestamp = getCurrentTimestamp();
  document.cookie = 'cookieConsent=; expires=Thu, 01 Jan 1970 00:00:00 GMT; path=/; timestamp=' + timestamp;
  // Additional logic for handling rejection of cookies (e.g., disabling tracking scripts)
  console.log('User has rejected the use of cookies at: ' + timestamp);
}


function showCookieBanner() {
  cookieBanner.style = 'display: block;';
  cookieBanner.animate({ opacity: [0, 1] }, {
    duration: 400, iterations: 1,
    easing: "ease"
  });
  cookieBanner.style = 'display:block; opacity: 1;';
}

function hideCookieBanner() {
  cookieBanner.animate({ opacity: [1, 0] }, {
    duration: 400, iterations: 1,
    easing: "ease"
  });
  setTimeout(()=> {
    cookieBanner.style = '';
  }, 400)
}

const cookieBanner = document.getElementById('cookieBanner');
const collapseLearnMore = document.getElementById('collapse-learnMoreCookies');
const learnMoreCookiesBtn = document.getElementById('learnMoreCookies');
const rejectCookiesBtn = document.getElementById('rejectCookies');
const acceptCookiesBtn = document.getElementById('acceptCookies');

collapseLearnMore.addEventListener('shown.bs.collapse', event => {
  learnMoreCookiesBtn.style = 'display: none';
  rejectCookiesBtn.style = 'display: block';
})

rejectCookiesBtn.addEventListener('click', function () {
  cookiesReject();
  hideCookieBanner();
});

acceptCookiesBtn.addEventListener('click', function () {
  cookiesConsent();
  cookies();
  hideCookieBanner();
});
