/**
 * Copyright 2016 Google Inc. All rights reserved.
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *     http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */

// This generated service worker JavaScript will precache your site's resources.
// The code needs to be saved in a .js file at the top-level of your site, and registered
// from your pages in order to be used. See
// https://github.com/googlechrome/sw-precache/blob/master/demo/app/js/service-worker-registration.js
// for an example of how you can register this script and handle various service worker events.

/* eslint-env worker, serviceworker */
/* eslint-disable indent, no-unused-vars, no-multiple-empty-lines, max-nested-callbacks, space-before-function-paren */
'use strict';





/* eslint-disable quotes, comma-spacing */
var PrecacheConfig = [["/bower_components/font-roboto/roboto.html","09500fd5adfad056ff5aa05e2aae0ec5"],["/bower_components/iron-a11y-announcer/iron-a11y-announcer.html","96e46dc8d74ac2bb15f2307f702f865f"],["/bower_components/iron-a11y-keys-behavior/iron-a11y-keys-behavior.html","a0c2b2c4ffca79579be5326d724e328f"],["/bower_components/iron-ajax/iron-ajax.html","34b837742ac3be5f6f6c36ff87af8805"],["/bower_components/iron-ajax/iron-request.html","2ffa060e220d0fae74a46f47191e711c"],["/bower_components/iron-behaviors/iron-button-state.html","6565a80d1af09299c1201f8286849c3b"],["/bower_components/iron-behaviors/iron-control-state.html","a6579c6eb14545a76fac151509524459"],["/bower_components/iron-checked-element-behavior/iron-checked-element-behavior.html","52203f1040958d419175fa7112377286"],["/bower_components/iron-dropdown/iron-dropdown-scroll-manager.html","6b414a091c0c9ab8eb590714295b3591"],["/bower_components/iron-dropdown/iron-dropdown.html","c0f1ef1427a0189d2a12dd6d1ab2f9c3"],["/bower_components/iron-fit-behavior/iron-fit-behavior.html","c2e0a218089e270eca21c71607f3716d"],["/bower_components/iron-flex-layout/iron-flex-layout.html","c53fb48b1f3ed386bb81cfc0ec24fc23"],["/bower_components/iron-form-element-behavior/iron-form-element-behavior.html","a64177311979fc6a6aae454cb85ea2be"],["/bower_components/iron-form/iron-form.html","63397dadfeb0861b349c37ad9a59d628"],["/bower_components/iron-icon/iron-icon.html","29e32c4afa02bd5cf3bba5916d1dac0a"],["/bower_components/iron-icons/iron-icons.html","c8f9154ae89b94e658e4a52eee690a16"],["/bower_components/iron-iconset-svg/iron-iconset-svg.html","8fb45b1b4668dae069f5efb5004c2af4"],["/bower_components/iron-input/iron-input.html","03a3da8b43519c14035808af12891809"],["/bower_components/iron-list/iron-list.html","bbd1deba533cb2b61d467789076fb1d7"],["/bower_components/iron-media-query/iron-media-query.html","7436f9608ebd2d31e4b346921651f84b"],["/bower_components/iron-menu-behavior/iron-menu-behavior.html","caaef4ec4b4116aad5c1ff0ae5c9dc7f"],["/bower_components/iron-menu-behavior/iron-menubar-behavior.html","5c51268aaae82b72301210f9d6ae7065"],["/bower_components/iron-meta/iron-meta.html","dd4ef14e09c5771e70292d70963f6718"],["/bower_components/iron-overlay-behavior/iron-overlay-backdrop.html","a6568ac2408a26e2dd2098821adbbbfa"],["/bower_components/iron-overlay-behavior/iron-overlay-behavior.html","5fbe9a3df3528b2e36ad58f8586e7c69"],["/bower_components/iron-overlay-behavior/iron-overlay-manager.html","7c86727e4267f15e730526f318b40da1"],["/bower_components/iron-pages/iron-pages.html","7a6d22c52eed03ffb21adddae9f7a88f"],["/bower_components/iron-resizable-behavior/iron-resizable-behavior.html","e93449ccd4312e4e30060c87bd52ed25"],["/bower_components/iron-selector/iron-multi-selectable.html","b668a5cc50dbcd20a84c39b794c8f6a2"],["/bower_components/iron-selector/iron-selectable.html","f7e31513a401e181531df61db481bf20"],["/bower_components/iron-selector/iron-selection.html","3529d98c294d9b4dd4fd5d9ccc28d9a7"],["/bower_components/iron-selector/iron-selector.html","4d2657550768bec0788eba5190cddc66"],["/bower_components/iron-validatable-behavior/iron-validatable-behavior.html","3d8e91dc222d880fd2a0c5269bab48ed"],["/bower_components/neon-animation/animations/cascaded-animation.html","2e284fad7b8e3fa58f0f2270bd412ad2"],["/bower_components/neon-animation/animations/fade-in-animation.html","b814c818dbcffe2bb50563e1406497df"],["/bower_components/neon-animation/animations/fade-out-animation.html","44988226230af0e6d92f0988fc8688e2"],["/bower_components/neon-animation/animations/hero-animation.html","7dbb08601e80a0a7e315a9838b897f46"],["/bower_components/neon-animation/animations/opaque-animation.html","9b0622a0a34f5f6668a7d999667e2253"],["/bower_components/neon-animation/animations/reverse-ripple-animation.html","36149de1ffd7d170d6fa955d02ace50a"],["/bower_components/neon-animation/animations/ripple-animation.html","ad821f14d68b012262b52ae43be9aa9c"],["/bower_components/neon-animation/animations/scale-down-animation.html","a5110cf0929631fb0d26b8991db1f3c7"],["/bower_components/neon-animation/animations/scale-up-animation.html","06949ba8a539bbe6ae2afba5f2d1b498"],["/bower_components/neon-animation/animations/slide-down-animation.html","048725ad61f5a82472733398ed40c992"],["/bower_components/neon-animation/animations/slide-from-bottom-animation.html","2aa43b2b3d68318a2cfd62c2fe23e600"],["/bower_components/neon-animation/animations/slide-from-left-animation.html","3716bfbb51014561201f40090fe419d5"],["/bower_components/neon-animation/animations/slide-from-right-animation.html","9ae577d7d8b1f6ad168eb504cd6266b6"],["/bower_components/neon-animation/animations/slide-from-top-animation.html","72d6ed1472e22d5b61fbc628f1301d68"],["/bower_components/neon-animation/animations/slide-left-animation.html","eced2050f5eac839b2af88bb96d6a8ab"],["/bower_components/neon-animation/animations/slide-right-animation.html","b4fb98f9e210c851949f3de09bbe3d1b"],["/bower_components/neon-animation/animations/slide-up-animation.html","37e14716ac461e06316ec80d336e7458"],["/bower_components/neon-animation/animations/transform-animation.html","5bebe34e064690173a1366e736c94272"],["/bower_components/neon-animation/neon-animatable-behavior.html","4d88d7371cf3cf2b595d2be91bf75f0e"],["/bower_components/neon-animation/neon-animatable.html","c09ddf6a9f93b84a8bf0d4fd3466b2c4"],["/bower_components/neon-animation/neon-animated-pages.html","c01ba1fee507296c35468b760ab02c7f"],["/bower_components/neon-animation/neon-animation-behavior.html","19f03e30fda7c2ed0fb131504e67f77b"],["/bower_components/neon-animation/neon-animation-runner-behavior.html","285df69e59c328768699fd03eb310168"],["/bower_components/neon-animation/neon-animations.html","3b6524b3cc95f27b4b6d7821a7097137"],["/bower_components/neon-animation/neon-shared-element-animation-behavior.html","59b343c52eef4ff93901a3cba99577d6"],["/bower_components/neon-animation/web-animations.html","b310811179297697d51eac3659df7776"],["/bower_components/page/page.js","ea1a99aaf561a60eca2c87f3c38d6c35"],["/bower_components/paper-behaviors/paper-button-behavior.html","4e6bddc0279107956e9a36b13cb99d02"],["/bower_components/paper-behaviors/paper-checked-element-behavior.html","59702db25efd385b161ad862b8027819"],["/bower_components/paper-behaviors/paper-inky-focus-behavior.html","51a1c5ccd2aae4c1a0258680dcb3e1ea"],["/bower_components/paper-behaviors/paper-ripple-behavior.html","b6ee8dd59ffb46ca57e81311abd2eca0"],["/bower_components/paper-button/paper-button.html","05ffb58158551aaf204a85bebf0716bd"],["/bower_components/paper-checkbox/paper-checkbox.html","65ae4b5391e2d7a2349832b9a7f52cc6"],["/bower_components/paper-drawer-panel/paper-drawer-panel.html","20ac8d9e64524a36c0bb125b59abd4cb"],["/bower_components/paper-dropdown-menu/paper-dropdown-menu.html","ec5a6cef574ef514114e749104122f38"],["/bower_components/paper-icon-button/paper-icon-button.html","fbdf3b9f3375ea5cc2867a05d9dbe2d8"],["/bower_components/paper-input/paper-input-addon-behavior.html","de7b482dc1fb01847efba9016db16206"],["/bower_components/paper-input/paper-input-behavior.html","eef9be01037b9fe197e2da9d5831c86c"],["/bower_components/paper-input/paper-input-char-counter.html","2679c3f4a9c38b57987854c3aa90d2de"],["/bower_components/paper-input/paper-input-container.html","0742787402464a579631fc0a374fd27b"],["/bower_components/paper-input/paper-input-error.html","88e258e8681f9b20003da80e187b28a4"],["/bower_components/paper-input/paper-input.html","737b79937115a23c3550323a7ce63f87"],["/bower_components/paper-item/paper-item-behavior.html","82636a7562fd8b0be5b15646ee461588"],["/bower_components/paper-item/paper-item-shared-styles.html","d8089801dd5e3940fa0f3fed71730268"],["/bower_components/paper-item/paper-item.html","e614731572c425b144aa8a9da24ee3ea"],["/bower_components/paper-material/paper-material-shared-styles.html","d0eeeb696e55702f3a38ef1ad0058f59"],["/bower_components/paper-material/paper-material.html","47301784c93c3d9989abfbab68ec9859"],["/bower_components/paper-menu-button/paper-menu-button-animations.html","a6d6ed67a145ca00d4487c40c4b06273"],["/bower_components/paper-menu-button/paper-menu-button.html","729d0a944c96f622bbfd87092439ffeb"],["/bower_components/paper-menu/paper-menu-shared-styles.html","9b2ae6e8b26011a37194ea3b4bdd043d"],["/bower_components/paper-menu/paper-menu.html","5270d7b4b603d9fdfcfdb079c750a3cd"],["/bower_components/paper-ripple/paper-ripple.html","3a7c149ed915a4606188e6938e3dcfe5"],["/bower_components/paper-scroll-header-panel/paper-scroll-header-panel.html","24cda41accf73eac558825f3fa4295da"],["/bower_components/paper-styles/color.html","430305db311431da78c0a6e1236f9ebe"],["/bower_components/paper-styles/default-theme.html","e397459488cdbd1d3c6261d96f9738a1"],["/bower_components/paper-styles/shadow.html","c2eb050f8def9e0cb9d061b312079f3b"],["/bower_components/paper-styles/typography.html","bdd7f31bb85f116ce97061c4135b74c9"],["/bower_components/paper-toast/paper-toast.html","ceecd6c764901ab16699d812cd4ac36c"],["/bower_components/paper-toolbar/paper-toolbar.html","7b90c0710ef5a8dd0546b0f5d6797df4"],["/bower_components/polymer/polymer-micro.html","a974b07d8c653117cccffd4afdcd9939"],["/bower_components/polymer/polymer-mini.html","cb930fa587b6d854fa77274530e84c6e"],["/bower_components/polymer/polymer.html","236f78466077036a9ff2b2d4495f7d1f"],["/bower_components/promise-polyfill/Promise.js","5afb14fd81497aca81bf25929d65b02d"],["/bower_components/promise-polyfill/promise-polyfill-lite.html","06470312beff013fc54695e0bdda2cb3"],["/bower_components/web-animations-js/web-animations-next-lite.min.js","1c80fca0b514bbfddbb3a107dc90d2a7"],["/bower_components/webcomponentsjs/webcomponents-lite.js","da2065b0f11ddcf8902ed734a7411f57"],["/elements/elements.html","d115973247f5bed8ec627a5c07a3620b"],["/elements/my-greeting/my-greeting.html","195831092baa9747593e302512ae163c"],["/elements/my-list/my-list.html","9e6be4aacd09addb9a39b460001471dc"],["/elements/routing.html","828df349d07c1da4cdd38419d00909b0"],["/elements/wc-aroma-value-input/wc-aroma-value-input.html","2e97c6a66756f72a1a31128bd430110d"],["/elements/wc-assess/wc-assess.html","b6520aa18c06d44124b4d2ef31fdec9f"],["/elements/wc-button-select-input/wc-button-select-input.html","7c36e8bdafc1f1ea878e0541a8e643bc"],["/elements/wc-long-menu/wc-long-menu.html","924e7bbd8380a5364acc2cd1655c760b"],["/elements/wc-multi-select-input/wc-multi-select-input.html","c7d59ee1ef91e9d3226cdae18c7c5ddf"],["/index.html","93098c7fd0a983daa75c65f31e4f65be"],["/scripts/app.js","7e3900cd89c2db6abb446ada12eaf3b5"],["/styles/app-theme.html","4e0a91b679cf7ff9bb38c22f6c2350fc"],["/styles/main.css","e023747d467ddf3456cc8a4cb1de4a34"],["/styles/shared-styles.html","b4cab8a37c1adba0a6728032a453ebb8"]];
/* eslint-enable quotes, comma-spacing */
var CacheNamePrefix = 'sw-precache-v1--' + (self.registration ? self.registration.scope : '') + '-';


var IgnoreUrlParametersMatching = [/^utm_/];



var addDirectoryIndex = function (originalUrl, index) {
    var url = new URL(originalUrl);
    if (url.pathname.slice(-1) === '/') {
      url.pathname += index;
    }
    return url.toString();
  };

var getCacheBustedUrl = function (url, param) {
    param = param || Date.now();

    var urlWithCacheBusting = new URL(url);
    urlWithCacheBusting.search += (urlWithCacheBusting.search ? '&' : '') +
      'sw-precache=' + param;

    return urlWithCacheBusting.toString();
  };

var isPathWhitelisted = function (whitelist, absoluteUrlString) {
    // If the whitelist is empty, then consider all URLs to be whitelisted.
    if (whitelist.length === 0) {
      return true;
    }

    // Otherwise compare each path regex to the path of the URL passed in.
    var path = (new URL(absoluteUrlString)).pathname;
    return whitelist.some(function(whitelistedPathRegex) {
      return path.match(whitelistedPathRegex);
    });
  };

var populateCurrentCacheNames = function (precacheConfig,
    cacheNamePrefix, baseUrl) {
    var absoluteUrlToCacheName = {};
    var currentCacheNamesToAbsoluteUrl = {};

    precacheConfig.forEach(function(cacheOption) {
      var absoluteUrl = new URL(cacheOption[0], baseUrl).toString();
      var cacheName = cacheNamePrefix + absoluteUrl + '-' + cacheOption[1];
      currentCacheNamesToAbsoluteUrl[cacheName] = absoluteUrl;
      absoluteUrlToCacheName[absoluteUrl] = cacheName;
    });

    return {
      absoluteUrlToCacheName: absoluteUrlToCacheName,
      currentCacheNamesToAbsoluteUrl: currentCacheNamesToAbsoluteUrl
    };
  };

var stripIgnoredUrlParameters = function (originalUrl,
    ignoreUrlParametersMatching) {
    var url = new URL(originalUrl);

    url.search = url.search.slice(1) // Exclude initial '?'
      .split('&') // Split into an array of 'key=value' strings
      .map(function(kv) {
        return kv.split('='); // Split each 'key=value' string into a [key, value] array
      })
      .filter(function(kv) {
        return ignoreUrlParametersMatching.every(function(ignoredRegex) {
          return !ignoredRegex.test(kv[0]); // Return true iff the key doesn't match any of the regexes.
        });
      })
      .map(function(kv) {
        return kv.join('='); // Join each [key, value] array into a 'key=value' string
      })
      .join('&'); // Join the array of 'key=value' strings into a string with '&' in between each

    return url.toString();
  };


var mappings = populateCurrentCacheNames(PrecacheConfig, CacheNamePrefix, self.location);
var AbsoluteUrlToCacheName = mappings.absoluteUrlToCacheName;
var CurrentCacheNamesToAbsoluteUrl = mappings.currentCacheNamesToAbsoluteUrl;

function deleteAllCaches() {
  return caches.keys().then(function(cacheNames) {
    return Promise.all(
      cacheNames.map(function(cacheName) {
        return caches.delete(cacheName);
      })
    );
  });
}

self.addEventListener('install', function(event) {
  event.waitUntil(
    // Take a look at each of the cache names we expect for this version.
    Promise.all(Object.keys(CurrentCacheNamesToAbsoluteUrl).map(function(cacheName) {
      return caches.open(cacheName).then(function(cache) {
        // Get a list of all the entries in the specific named cache.
        // For caches that are already populated for a given version of a
        // resource, there should be 1 entry.
        return cache.keys().then(function(keys) {
          // If there are 0 entries, either because this is a brand new version
          // of a resource or because the install step was interrupted the
          // last time it ran, then we need to populate the cache.
          if (keys.length === 0) {
            // Use the last bit of the cache name, which contains the hash,
            // as the cache-busting parameter.
            // See https://github.com/GoogleChrome/sw-precache/issues/100
            var cacheBustParam = cacheName.split('-').pop();
            var urlWithCacheBusting = getCacheBustedUrl(
              CurrentCacheNamesToAbsoluteUrl[cacheName], cacheBustParam);

            var request = new Request(urlWithCacheBusting,
              {credentials: 'same-origin'});
            return fetch(request).then(function(response) {
              if (response.ok) {
                return cache.put(CurrentCacheNamesToAbsoluteUrl[cacheName],
                  response);
              }

              console.error('Request for %s returned a response status %d, ' +
                'so not attempting to cache it.',
                urlWithCacheBusting, response.status);
              // Get rid of the empty cache if we can't add a successful response to it.
              return caches.delete(cacheName);
            });
          }
        });
      });
    })).then(function() {
      return caches.keys().then(function(allCacheNames) {
        return Promise.all(allCacheNames.filter(function(cacheName) {
          return cacheName.indexOf(CacheNamePrefix) === 0 &&
            !(cacheName in CurrentCacheNamesToAbsoluteUrl);
          }).map(function(cacheName) {
            return caches.delete(cacheName);
          })
        );
      });
    }).then(function() {
      if (typeof self.skipWaiting === 'function') {
        // Force the SW to transition from installing -> active state
        self.skipWaiting();
      }
    })
  );
});

if (self.clients && (typeof self.clients.claim === 'function')) {
  self.addEventListener('activate', function(event) {
    event.waitUntil(self.clients.claim());
  });
}

self.addEventListener('message', function(event) {
  if (event.data.command === 'delete_all') {
    console.log('About to delete all caches...');
    deleteAllCaches().then(function() {
      console.log('Caches deleted.');
      event.ports[0].postMessage({
        error: null
      });
    }).catch(function(error) {
      console.log('Caches not deleted:', error);
      event.ports[0].postMessage({
        error: error
      });
    });
  }
});


self.addEventListener('fetch', function(event) {
  if (event.request.method === 'GET') {
    var urlWithoutIgnoredParameters = stripIgnoredUrlParameters(event.request.url,
      IgnoreUrlParametersMatching);

    var cacheName = AbsoluteUrlToCacheName[urlWithoutIgnoredParameters];
    var directoryIndex = 'index.html';
    if (!cacheName && directoryIndex) {
      urlWithoutIgnoredParameters = addDirectoryIndex(urlWithoutIgnoredParameters, directoryIndex);
      cacheName = AbsoluteUrlToCacheName[urlWithoutIgnoredParameters];
    }

    var navigateFallback = '';
    // Ideally, this would check for event.request.mode === 'navigate', but that is not widely
    // supported yet:
    // https://code.google.com/p/chromium/issues/detail?id=540967
    // https://bugzilla.mozilla.org/show_bug.cgi?id=1209081
    if (!cacheName && navigateFallback && event.request.headers.has('accept') &&
        event.request.headers.get('accept').includes('text/html') &&
        /* eslint-disable quotes, comma-spacing */
        isPathWhitelisted([], event.request.url)) {
        /* eslint-enable quotes, comma-spacing */
      var navigateFallbackUrl = new URL(navigateFallback, self.location);
      cacheName = AbsoluteUrlToCacheName[navigateFallbackUrl.toString()];
    }

    if (cacheName) {
      event.respondWith(
        // Rely on the fact that each cache we manage should only have one entry, and return that.
        caches.open(cacheName).then(function(cache) {
          return cache.keys().then(function(keys) {
            return cache.match(keys[0]).then(function(response) {
              if (response) {
                return response;
              }
              // If for some reason the response was deleted from the cache,
              // raise and exception and fall back to the fetch() triggered in the catch().
              throw Error('The cache ' + cacheName + ' is empty.');
            });
          });
        }).catch(function(e) {
          console.warn('Couldn\'t serve response for "%s" from cache: %O', event.request.url, e);
          return fetch(event.request);
        })
      );
    }
  }
});




