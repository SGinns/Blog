(window["webpackJsonp"] = window["webpackJsonp"] || []).push([["javascriptTest"],{

/***/ "./assets/js/JSBookCh01Ex01.js":
/*!*************************************!*\
  !*** ./assets/js/JSBookCh01Ex01.js ***!
  \*************************************/
/*! no static exports found */
/***/ (function(module, exports) {

var today = new Date();
var hourNow = today.getHours();
var greeting;

if (hourNow > 18) {
  greeting = "Good evening!";
} else if (hourNow > 12) {
  greeting = "Good afternoon!";
} else if (hourNow >= 0) {
  greeting = "Good morning!";
} else {
  greeting = "Welcome";
}

var element = document.getElementById('WelcomeMessage');
element.textContent = greeting;

/***/ })

},[["./assets/js/JSBookCh01Ex01.js","runtime"]]]);
//# sourceMappingURL=data:application/json;charset=utf-8;base64,eyJ2ZXJzaW9uIjozLCJzb3VyY2VzIjpbIndlYnBhY2s6Ly8vLi9hc3NldHMvanMvSlNCb29rQ2gwMUV4MDEuanMiXSwibmFtZXMiOlsidG9kYXkiLCJEYXRlIiwiaG91ck5vdyIsImdldEhvdXJzIiwiZ3JlZXRpbmciLCJlbGVtZW50IiwiZG9jdW1lbnQiLCJnZXRFbGVtZW50QnlJZCIsInRleHRDb250ZW50Il0sIm1hcHBpbmdzIjoiOzs7Ozs7Ozs7QUFBQSxJQUFJQSxLQUFLLEdBQUcsSUFBSUMsSUFBSixFQUFaO0FBQ0EsSUFBSUMsT0FBTyxHQUFHRixLQUFLLENBQUNHLFFBQU4sRUFBZDtBQUNBLElBQUlDLFFBQUo7O0FBRUEsSUFBR0YsT0FBTyxHQUFHLEVBQWIsRUFBZ0I7QUFDWkUsVUFBUSxHQUFHLGVBQVg7QUFDSCxDQUZELE1BRU8sSUFBSUYsT0FBTyxHQUFHLEVBQWQsRUFBa0I7QUFDckJFLFVBQVEsR0FBRyxpQkFBWDtBQUNILENBRk0sTUFFQSxJQUFJRixPQUFPLElBQUksQ0FBZixFQUFrQjtBQUNyQkUsVUFBUSxHQUFHLGVBQVg7QUFDSCxDQUZNLE1BRUE7QUFDSEEsVUFBUSxHQUFHLFNBQVg7QUFDSDs7QUFFRCxJQUFJQyxPQUFPLEdBQUdDLFFBQVEsQ0FBQ0MsY0FBVCxDQUF3QixnQkFBeEIsQ0FBZDtBQUNBRixPQUFPLENBQUNHLFdBQVIsR0FBc0JKLFFBQXRCLEMiLCJmaWxlIjoiamF2YXNjcmlwdFRlc3QuanMiLCJzb3VyY2VzQ29udGVudCI6WyJ2YXIgdG9kYXkgPSBuZXcgRGF0ZSgpO1xyXG52YXIgaG91ck5vdyA9IHRvZGF5LmdldEhvdXJzKCk7XHJcbnZhciBncmVldGluZztcclxuXHJcbmlmKGhvdXJOb3cgPiAxOCl7XHJcbiAgICBncmVldGluZyA9IFwiR29vZCBldmVuaW5nIVwiO1xyXG59IGVsc2UgaWYgKGhvdXJOb3cgPiAxMikge1xyXG4gICAgZ3JlZXRpbmcgPSBcIkdvb2QgYWZ0ZXJub29uIVwiXHJcbn0gZWxzZSBpZiAoaG91ck5vdyA+PSAwKSB7XHJcbiAgICBncmVldGluZyA9IFwiR29vZCBtb3JuaW5nIVwiXHJcbn0gZWxzZSB7XHJcbiAgICBncmVldGluZyA9IFwiV2VsY29tZVwiO1xyXG59XHJcblxyXG52YXIgZWxlbWVudCA9IGRvY3VtZW50LmdldEVsZW1lbnRCeUlkKCdXZWxjb21lTWVzc2FnZScpO1xyXG5lbGVtZW50LnRleHRDb250ZW50ID0gZ3JlZXRpbmc7Il0sInNvdXJjZVJvb3QiOiIifQ==