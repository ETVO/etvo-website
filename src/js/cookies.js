document.addEventListener('DOMContentLoaded', function () {
  gtag('consent', 'default', {
    'ad_storage': 'denied',
    'ad_user_data': 'denied',
    'ad_personalization': 'denied',
    'analytics_storage': 'denied'
  });

  if (document.cookie.includes('cookieConsent=true')) {
    console.log('You have consented the use of cookies.');
    facebookAPI()
    googleAPI()
  }
  else if (localStorage.getItem('userHasRejectedCookies')) {
    console.log('You have not consented the use of cookies.');
  }
  else {
    showCookieBanner();
  }

})


function facebookAPI() {
  //  Meta Pixel Code
  !function (f, b, e, v, n, t, s) {
    if (f.fbq) return; n = f.fbq = function () {
      n.callMethod ?
        n.callMethod.apply(n, arguments) : n.queue.push(arguments)
    };
    if (!f._fbq) f._fbq = n; n.push = n; n.loaded = !0; n.version = '2.0';
    n.queue = []; t = b.createElement(e); t.async = !0;
    t.src = v; s = b.getElementsByTagName(e)[0];
    s.parentNode.insertBefore(t, s)
  }(window, document, 'script',
    'https://connect.facebook.net/en_US/fbevents.js');
  fbq('init', '1169154777590374');
  fbq('track', 'PageView');
}
function googleAPI() {
  gtag('consent', 'update', {
    'ad_user_data': 'granted',
    'ad_personalization': 'granted',
    'ad_storage': 'granted',
    'analytics_storage': 'granted'
  });
}

function cookies() {
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
  document.cookie = 'cookieConsent=true; samesite=lax; expires=Fri, 31 Dec 9999 23:59:59 GMT; path=/; timestamp=' + timestamp;

  // Additional logic for handling cookie consent (e.g., loading tracking scripts)
  console.log('User has consented to the use of cookies at: ' + timestamp);

  gtag('consent', 'update', {
    'ad_user_data': 'granted',
    'ad_personalization': 'granted',
    'ad_storage': 'granted',
    'analytics_storage': 'granted'
  });
}

// Function to handle user's rejection of cookies
function cookiesReject() {
  var timestamp = getCurrentTimestamp();
  localStorage.setItem('userHasRejectedCookies', 'yes :( at this time: ' + timestamp);
  // document.cookie = 'cookieConsent=false; samesite=lax; expires=Thu, 31 Dec 9999 23:59:59 GMT; path=/; timestamp=' + timestamp;
  // // Additional logic for handling rejection of cookies (e.g., disabling tracking scripts)
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
  let delay = 200;
  cookieBanner.animate({ opacity: [1, 0] }, {
    duration: delay, iterations: 1,
    easing: "ease"
  });
  setTimeout(() => {
    cookieBanner.style = '';
  }, delay)
}

const cookieBanner = document.getElementById('cookieBanner');
const collapseLearnMore = document.getElementById('collapse-learnMoreCookies');
const learnMoreCookiesBtn = document.getElementById('learnMoreCookies');
const rejectCookiesBtn = document.getElementById('rejectCookies');
const acceptCookiesBtn = document.getElementById('acceptCookies');

collapseLearnMore.addEventListener('shown.bs.collapse', event => {
  learnMoreCookiesBtn.style = 'display: none';
  rejectCookiesBtn.style = 'display: block';
  acceptCookiesBtn.innerHTML = 'Accept';
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
