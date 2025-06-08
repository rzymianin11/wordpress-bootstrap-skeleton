/******/ (function(modules) { // webpackBootstrap
/******/ 	// The module cache
/******/ 	var installedModules = {};
/******/
/******/ 	// The require function
/******/ 	function __webpack_require__(moduleId) {
/******/
/******/ 		// Check if module is in cache
/******/ 		if(installedModules[moduleId]) {
/******/ 			return installedModules[moduleId].exports;
/******/ 		}
/******/ 		// Create a new module (and put it into the cache)
/******/ 		var module = installedModules[moduleId] = {
/******/ 			i: moduleId,
/******/ 			l: false,
/******/ 			exports: {}
/******/ 		};
/******/
/******/ 		// Execute the module function
/******/ 		modules[moduleId].call(module.exports, module, module.exports, __webpack_require__);
/******/
/******/ 		// Flag the module as loaded
/******/ 		module.l = true;
/******/
/******/ 		// Return the exports of the module
/******/ 		return module.exports;
/******/ 	}
/******/
/******/
/******/ 	// expose the modules object (__webpack_modules__)
/******/ 	__webpack_require__.m = modules;
/******/
/******/ 	// expose the module cache
/******/ 	__webpack_require__.c = installedModules;
/******/
/******/ 	// define getter function for harmony exports
/******/ 	__webpack_require__.d = function(exports, name, getter) {
/******/ 		if(!__webpack_require__.o(exports, name)) {
/******/ 			Object.defineProperty(exports, name, { enumerable: true, get: getter });
/******/ 		}
/******/ 	};
/******/
/******/ 	// define __esModule on exports
/******/ 	__webpack_require__.r = function(exports) {
/******/ 		if(typeof Symbol !== 'undefined' && Symbol.toStringTag) {
/******/ 			Object.defineProperty(exports, Symbol.toStringTag, { value: 'Module' });
/******/ 		}
/******/ 		Object.defineProperty(exports, '__esModule', { value: true });
/******/ 	};
/******/
/******/ 	// create a fake namespace object
/******/ 	// mode & 1: value is a module id, require it
/******/ 	// mode & 2: merge all properties of value into the ns
/******/ 	// mode & 4: return value when already ns object
/******/ 	// mode & 8|1: behave like require
/******/ 	__webpack_require__.t = function(value, mode) {
/******/ 		if(mode & 1) value = __webpack_require__(value);
/******/ 		if(mode & 8) return value;
/******/ 		if((mode & 4) && typeof value === 'object' && value && value.__esModule) return value;
/******/ 		var ns = Object.create(null);
/******/ 		__webpack_require__.r(ns);
/******/ 		Object.defineProperty(ns, 'default', { enumerable: true, value: value });
/******/ 		if(mode & 2 && typeof value != 'string') for(var key in value) __webpack_require__.d(ns, key, function(key) { return value[key]; }.bind(null, key));
/******/ 		return ns;
/******/ 	};
/******/
/******/ 	// getDefaultExport function for compatibility with non-harmony modules
/******/ 	__webpack_require__.n = function(module) {
/******/ 		var getter = module && module.__esModule ?
/******/ 			function getDefault() { return module['default']; } :
/******/ 			function getModuleExports() { return module; };
/******/ 		__webpack_require__.d(getter, 'a', getter);
/******/ 		return getter;
/******/ 	};
/******/
/******/ 	// Object.prototype.hasOwnProperty.call
/******/ 	__webpack_require__.o = function(object, property) { return Object.prototype.hasOwnProperty.call(object, property); };
/******/
/******/ 	// __webpack_public_path__
/******/ 	__webpack_require__.p = "";
/******/
/******/
/******/ 	// Load entry module and return exports
/******/ 	return __webpack_require__(__webpack_require__.s = "./src/scss/style.scss");
/******/ })
/************************************************************************/
/******/ ({

/***/ "./src/scss/style.scss":
/*!*****************************!*\
  !*** ./src/scss/style.scss ***!
  \*****************************/
/*! no static exports found */
/***/ (function(module, exports) {

eval("throw new Error(\"Module build failed (from ./node_modules/mini-css-extract-plugin/dist/loader.js):\\nModuleBuildError: Module build failed (from ./node_modules/sass-loader/dist/cjs.js):\\nSassError: 2 arguments required, but only 1 was passed.\\n   ╷\\n32 │     font-weight: rem(14px);\\r\\n   │                  ^^^^^^^^^\\n   ╵\\n  src/scss/_footer.scss 32:18  @forward\\n  src/scss/style.scss 36:1     root stylesheet\\n    at /Users/lukaszdrozdz/Praca/psw/wordpress-docker-compose/wordpress/wp-content/themes/pws/node_modules/webpack/lib/NormalModule.js:316:20\\n    at /Users/lukaszdrozdz/Praca/psw/wordpress-docker-compose/wordpress/wp-content/themes/pws/node_modules/loader-runner/lib/LoaderRunner.js:367:11\\n    at /Users/lukaszdrozdz/Praca/psw/wordpress-docker-compose/wordpress/wp-content/themes/pws/node_modules/loader-runner/lib/LoaderRunner.js:233:18\\n    at context.callback (/Users/lukaszdrozdz/Praca/psw/wordpress-docker-compose/wordpress/wp-content/themes/pws/node_modules/loader-runner/lib/LoaderRunner.js:111:13)\\n    at /Users/lukaszdrozdz/Praca/psw/wordpress-docker-compose/wordpress/wp-content/themes/pws/node_modules/sass-loader/dist/index.js:62:7\\n    at Function.call$2 (/Users/lukaszdrozdz/Praca/psw/wordpress-docker-compose/wordpress/wp-content/themes/pws/node_modules/sass/sass.dart.js:127297:16)\\n    at render_closure1.call$2 (/Users/lukaszdrozdz/Praca/psw/wordpress-docker-compose/wordpress/wp-content/themes/pws/node_modules/sass/sass.dart.js:108431:12)\\n    at _RootZone.runBinary$3$3 (/Users/lukaszdrozdz/Praca/psw/wordpress-docker-compose/wordpress/wp-content/themes/pws/node_modules/sass/sass.dart.js:39692:18)\\n    at _FutureListener.handleError$1 (/Users/lukaszdrozdz/Praca/psw/wordpress-docker-compose/wordpress/wp-content/themes/pws/node_modules/sass/sass.dart.js:38222:21)\\n    at _Future__propagateToListeners_handleError.call$0 (/Users/lukaszdrozdz/Praca/psw/wordpress-docker-compose/wordpress/wp-content/themes/pws/node_modules/sass/sass.dart.js:38524:49)\\n    at Object._Future__propagateToListeners (/Users/lukaszdrozdz/Praca/psw/wordpress-docker-compose/wordpress/wp-content/themes/pws/node_modules/sass/sass.dart.js:5133:77)\\n    at _Future._completeErrorObject$1 (/Users/lukaszdrozdz/Praca/psw/wordpress-docker-compose/wordpress/wp-content/themes/pws/node_modules/sass/sass.dart.js:38384:9)\\n    at _AsyncAwaitCompleter.completeError$2 (/Users/lukaszdrozdz/Praca/psw/wordpress-docker-compose/wordpress/wp-content/themes/pws/node_modules/sass/sass.dart.js:37993:12)\\n    at Object._asyncRethrow (/Users/lukaszdrozdz/Praca/psw/wordpress-docker-compose/wordpress/wp-content/themes/pws/node_modules/sass/sass.dart.js:4896:17)\\n    at /Users/lukaszdrozdz/Praca/psw/wordpress-docker-compose/wordpress/wp-content/themes/pws/node_modules/sass/sass.dart.js:28569:20\\n    at _wrapJsFunctionForAsync_closure.$protected (/Users/lukaszdrozdz/Praca/psw/wordpress-docker-compose/wordpress/wp-content/themes/pws/node_modules/sass/sass.dart.js:4921:15)\\n    at _wrapJsFunctionForAsync_closure.call$2 (/Users/lukaszdrozdz/Praca/psw/wordpress-docker-compose/wordpress/wp-content/themes/pws/node_modules/sass/sass.dart.js:38012:12)\\n    at _awaitOnObject_closure0.call$2 (/Users/lukaszdrozdz/Praca/psw/wordpress-docker-compose/wordpress/wp-content/themes/pws/node_modules/sass/sass.dart.js:38006:25)\\n    at _RootZone.runBinary$3$3 (/Users/lukaszdrozdz/Praca/psw/wordpress-docker-compose/wordpress/wp-content/themes/pws/node_modules/sass/sass.dart.js:39692:18)\\n    at _FutureListener.handleError$1 (/Users/lukaszdrozdz/Praca/psw/wordpress-docker-compose/wordpress/wp-content/themes/pws/node_modules/sass/sass.dart.js:38222:21)\\n    at _Future__propagateToListeners_handleError.call$0 (/Users/lukaszdrozdz/Praca/psw/wordpress-docker-compose/wordpress/wp-content/themes/pws/node_modules/sass/sass.dart.js:38524:49)\\n    at Object._Future__propagateToListeners (/Users/lukaszdrozdz/Praca/psw/wordpress-docker-compose/wordpress/wp-content/themes/pws/node_modules/sass/sass.dart.js:5133:77)\\n    at _Future._completeErrorObject$1 (/Users/lukaszdrozdz/Praca/psw/wordpress-docker-compose/wordpress/wp-content/themes/pws/node_modules/sass/sass.dart.js:38384:9)\\n    at _AsyncAwaitCompleter.completeError$2 (/Users/lukaszdrozdz/Praca/psw/wordpress-docker-compose/wordpress/wp-content/themes/pws/node_modules/sass/sass.dart.js:37993:12)\\n    at Object._asyncRethrow (/Users/lukaszdrozdz/Praca/psw/wordpress-docker-compose/wordpress/wp-content/themes/pws/node_modules/sass/sass.dart.js:4896:17)\\n    at /Users/lukaszdrozdz/Praca/psw/wordpress-docker-compose/wordpress/wp-content/themes/pws/node_modules/sass/sass.dart.js:20605:20\\n    at _wrapJsFunctionForAsync_closure.$protected (/Users/lukaszdrozdz/Praca/psw/wordpress-docker-compose/wordpress/wp-content/themes/pws/node_modules/sass/sass.dart.js:4921:15)\\n    at _wrapJsFunctionForAsync_closure.call$2 (/Users/lukaszdrozdz/Praca/psw/wordpress-docker-compose/wordpress/wp-content/themes/pws/node_modules/sass/sass.dart.js:38012:12)\\n    at _awaitOnObject_closure0.call$2 (/Users/lukaszdrozdz/Praca/psw/wordpress-docker-compose/wordpress/wp-content/themes/pws/node_modules/sass/sass.dart.js:38006:25)\\n    at _RootZone.runBinary$3$3 (/Users/lukaszdrozdz/Praca/psw/wordpress-docker-compose/wordpress/wp-content/themes/pws/node_modules/sass/sass.dart.js:39692:18)\\n    at _FutureListener.handleError$1 (/Users/lukaszdrozdz/Praca/psw/wordpress-docker-compose/wordpress/wp-content/themes/pws/node_modules/sass/sass.dart.js:38222:21)\\n    at _Future__propagateToListeners_handleError.call$0 (/Users/lukaszdrozdz/Praca/psw/wordpress-docker-compose/wordpress/wp-content/themes/pws/node_modules/sass/sass.dart.js:38524:49)\\n    at Object._Future__propagateToListeners (/Users/lukaszdrozdz/Praca/psw/wordpress-docker-compose/wordpress/wp-content/themes/pws/node_modules/sass/sass.dart.js:5133:77)\\n    at _Future._completeErrorObject$1 (/Users/lukaszdrozdz/Praca/psw/wordpress-docker-compose/wordpress/wp-content/themes/pws/node_modules/sass/sass.dart.js:38384:9)\\n    at _AsyncAwaitCompleter.completeError$2 (/Users/lukaszdrozdz/Praca/psw/wordpress-docker-compose/wordpress/wp-content/themes/pws/node_modules/sass/sass.dart.js:37993:12)\\n    at Object._asyncRethrow (/Users/lukaszdrozdz/Praca/psw/wordpress-docker-compose/wordpress/wp-content/themes/pws/node_modules/sass/sass.dart.js:4896:17)\\n    at /Users/lukaszdrozdz/Praca/psw/wordpress-docker-compose/wordpress/wp-content/themes/pws/node_modules/sass/sass.dart.js:20656:20\\n    at _wrapJsFunctionForAsync_closure.$protected (/Users/lukaszdrozdz/Praca/psw/wordpress-docker-compose/wordpress/wp-content/themes/pws/node_modules/sass/sass.dart.js:4921:15)\\n    at _wrapJsFunctionForAsync_closure.call$2 (/Users/lukaszdrozdz/Praca/psw/wordpress-docker-compose/wordpress/wp-content/themes/pws/node_modules/sass/sass.dart.js:38012:12)\\n    at _awaitOnObject_closure0.call$2 (/Users/lukaszdrozdz/Praca/psw/wordpress-docker-compose/wordpress/wp-content/themes/pws/node_modules/sass/sass.dart.js:38006:25)\\n    at _RootZone.runBinary$3$3 (/Users/lukaszdrozdz/Praca/psw/wordpress-docker-compose/wordpress/wp-content/themes/pws/node_modules/sass/sass.dart.js:39692:18)\\n    at _FutureListener.handleError$1 (/Users/lukaszdrozdz/Praca/psw/wordpress-docker-compose/wordpress/wp-content/themes/pws/node_modules/sass/sass.dart.js:38222:21)\\n    at _Future__propagateToListeners_handleError.call$0 (/Users/lukaszdrozdz/Praca/psw/wordpress-docker-compose/wordpress/wp-content/themes/pws/node_modules/sass/sass.dart.js:38524:49)\\n    at Object._Future__propagateToListeners (/Users/lukaszdrozdz/Praca/psw/wordpress-docker-compose/wordpress/wp-content/themes/pws/node_modules/sass/sass.dart.js:5133:77)\\n    at _Future._completeErrorObject$1 (/Users/lukaszdrozdz/Praca/psw/wordpress-docker-compose/wordpress/wp-content/themes/pws/node_modules/sass/sass.dart.js:38384:9)\\n    at _AsyncAwaitCompleter.completeError$2 (/Users/lukaszdrozdz/Praca/psw/wordpress-docker-compose/wordpress/wp-content/themes/pws/node_modules/sass/sass.dart.js:37993:12)\\n    at Object._asyncRethrow (/Users/lukaszdrozdz/Praca/psw/wordpress-docker-compose/wordpress/wp-content/themes/pws/node_modules/sass/sass.dart.js:4896:17)\\n    at /Users/lukaszdrozdz/Praca/psw/wordpress-docker-compose/wordpress/wp-content/themes/pws/node_modules/sass/sass.dart.js:86186:24\\n    at _wrapJsFunctionForAsync_closure.$protected (/Users/lukaszdrozdz/Praca/psw/wordpress-docker-compose/wordpress/wp-content/themes/pws/node_modules/sass/sass.dart.js:4921:15)\\n    at _wrapJsFunctionForAsync_closure.call$2 (/Users/lukaszdrozdz/Praca/psw/wordpress-docker-compose/wordpress/wp-content/themes/pws/node_modules/sass/sass.dart.js:38012:12)\");\n\n//# sourceURL=webpack:///./src/scss/style.scss?");

/***/ })

/******/ });