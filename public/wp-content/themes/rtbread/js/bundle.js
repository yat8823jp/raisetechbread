(function(){function r(e,n,t){function o(i,f){if(!n[i]){if(!e[i]){var c="function"==typeof require&&require;if(!f&&c)return c(i,!0);if(u)return u(i,!0);var a=new Error("Cannot find module '"+i+"'");throw a.code="MODULE_NOT_FOUND",a}var p=n[i]={exports:{}};e[i][0].call(p.exports,function(r){var n=e[i][1][r];return o(n||r)},p,p.exports,r,e,n,t)}return n[i].exports}for(var u="function"==typeof require&&require,i=0;i<t.length;i++)o(t[i]);return o}return r})()({1:[function(require,module,exports){
"use strict";

jQuery(function ($) {
	var timer = 0;
	jQuery("#sidebar-bt--open").on("click", function () {
		$("#sidebar").addClass("is-open");
		$("#sidebar").after('<div class="l-sidebar__bg js-sidebar-bg is-open"></div>');
		$("body").addClass("is-open");
	});
	jQuery("#sidebar-bt--close").on('click', function () {
		$("#sidebar").removeClass("is-open");
		$(".js-sidebar-bg").remove();
		$("body").removeClass("is-open");
	});
	$(window).on("resize", function () {
		var pcWidth = 961;
		if (timer > 0) {
			clearTimeout(timer);
		}
		timer = setTimeout(function () {
			var resizedWidth = window.innerWidth || document.documentElement.clientWidth || document.body.clientWidth;
			if (resizedWidth >= pcWidth) {
				$("body").removeClass("is-open");
				$(".js-sidebar-bg").remove();
				$("#sidebar").removeClass("is-open");
			}
		}, 200);
	});
});

},{}],2:[function(require,module,exports){
'use strict';

jQuery(function ($) {
	var config = require('./config.js');
});

},{"./config.js":1}]},{},[2])
//# sourceMappingURL=data:application/json;charset=utf-8;base64,eyJ2ZXJzaW9uIjozLCJzb3VyY2VzIjpbIm5vZGVfbW9kdWxlcy9icm93c2VyLXBhY2svX3ByZWx1ZGUuanMiLCJzcmMvc2NyaXB0cy9jb25maWcuanMiLCJzcmMvc2NyaXB0cy9tYWluLmpzIl0sIm5hbWVzIjpbXSwibWFwcGluZ3MiOiJBQUFBOzs7QUNBQSxPQUFRLFVBQVUsQ0FBVixFQUFjO0FBQ3JCLEtBQUksUUFBUSxDQUFaO0FBQ0EsUUFBUSxtQkFBUixFQUE4QixFQUE5QixDQUFrQyxPQUFsQyxFQUEyQyxZQUFXO0FBQ3JELElBQUcsVUFBSCxFQUFnQixRQUFoQixDQUEwQixTQUExQjtBQUNBLElBQUcsVUFBSCxFQUFnQixLQUFoQixDQUF1Qix5REFBdkI7QUFDQSxJQUFHLE1BQUgsRUFBWSxRQUFaLENBQXNCLFNBQXRCO0FBQ0EsRUFKRDtBQUtBLFFBQVEsb0JBQVIsRUFBK0IsRUFBL0IsQ0FBbUMsT0FBbkMsRUFBNEMsWUFBVztBQUN0RCxJQUFHLFVBQUgsRUFBZ0IsV0FBaEIsQ0FBNkIsU0FBN0I7QUFDQSxJQUFHLGdCQUFILEVBQXNCLE1BQXRCO0FBQ0EsSUFBRyxNQUFILEVBQVksV0FBWixDQUF5QixTQUF6QjtBQUNBLEVBSkQ7QUFLQSxHQUFHLE1BQUgsRUFBWSxFQUFaLENBQWdCLFFBQWhCLEVBQTBCLFlBQVc7QUFDcEMsTUFBSSxVQUFVLEdBQWQ7QUFDQSxNQUFJLFFBQVEsQ0FBWixFQUFnQjtBQUNmLGdCQUFjLEtBQWQ7QUFDQTtBQUNELFVBQVEsV0FBWSxZQUFXO0FBQzlCLE9BQUksZUFBZSxPQUFPLFVBQVAsSUFBcUIsU0FBUyxlQUFULENBQXlCLFdBQTlDLElBQTZELFNBQVMsSUFBVCxDQUFjLFdBQTlGO0FBQ0EsT0FBSSxnQkFBZ0IsT0FBcEIsRUFBOEI7QUFDN0IsTUFBRyxNQUFILEVBQVksV0FBWixDQUF5QixTQUF6QjtBQUNBLE1BQUcsZ0JBQUgsRUFBc0IsTUFBdEI7QUFDQSxNQUFHLFVBQUgsRUFBZ0IsV0FBaEIsQ0FBNkIsU0FBN0I7QUFDQTtBQUNELEdBUE8sRUFPTCxHQVBLLENBQVI7QUFRQSxFQWJEO0FBY0EsQ0ExQkQ7Ozs7O0FDQUEsT0FBUSxVQUFVLENBQVYsRUFBYztBQUNyQixLQUFJLFNBQVMsUUFBUyxhQUFULENBQWI7QUFDQSxDQUZEIiwiZmlsZSI6ImdlbmVyYXRlZC5qcyIsInNvdXJjZVJvb3QiOiIiLCJzb3VyY2VzQ29udGVudCI6WyIoZnVuY3Rpb24oKXtmdW5jdGlvbiByKGUsbix0KXtmdW5jdGlvbiBvKGksZil7aWYoIW5baV0pe2lmKCFlW2ldKXt2YXIgYz1cImZ1bmN0aW9uXCI9PXR5cGVvZiByZXF1aXJlJiZyZXF1aXJlO2lmKCFmJiZjKXJldHVybiBjKGksITApO2lmKHUpcmV0dXJuIHUoaSwhMCk7dmFyIGE9bmV3IEVycm9yKFwiQ2Fubm90IGZpbmQgbW9kdWxlICdcIitpK1wiJ1wiKTt0aHJvdyBhLmNvZGU9XCJNT0RVTEVfTk9UX0ZPVU5EXCIsYX12YXIgcD1uW2ldPXtleHBvcnRzOnt9fTtlW2ldWzBdLmNhbGwocC5leHBvcnRzLGZ1bmN0aW9uKHIpe3ZhciBuPWVbaV1bMV1bcl07cmV0dXJuIG8obnx8cil9LHAscC5leHBvcnRzLHIsZSxuLHQpfXJldHVybiBuW2ldLmV4cG9ydHN9Zm9yKHZhciB1PVwiZnVuY3Rpb25cIj09dHlwZW9mIHJlcXVpcmUmJnJlcXVpcmUsaT0wO2k8dC5sZW5ndGg7aSsrKW8odFtpXSk7cmV0dXJuIG99cmV0dXJuIHJ9KSgpIiwialF1ZXJ5KCBmdW5jdGlvbiggJCApIHtcblx0bGV0IHRpbWVyID0gMDtcblx0alF1ZXJ5KCBcIiNzaWRlYmFyLWJ0LS1vcGVuXCIgKS5vbiggXCJjbGlja1wiLCBmdW5jdGlvbigpIHtcblx0XHQkKCBcIiNzaWRlYmFyXCIgKS5hZGRDbGFzcyggXCJpcy1vcGVuXCIgKTtcblx0XHQkKCBcIiNzaWRlYmFyXCIgKS5hZnRlciggJzxkaXYgY2xhc3M9XCJsLXNpZGViYXJfX2JnIGpzLXNpZGViYXItYmcgaXMtb3BlblwiPjwvZGl2PicgKVxuXHRcdCQoIFwiYm9keVwiICkuYWRkQ2xhc3MoIFwiaXMtb3BlblwiICk7XG5cdH0gKTtcblx0alF1ZXJ5KCBcIiNzaWRlYmFyLWJ0LS1jbG9zZVwiICkub24oICdjbGljaycsIGZ1bmN0aW9uKCkge1xuXHRcdCQoIFwiI3NpZGViYXJcIiApLnJlbW92ZUNsYXNzKCBcImlzLW9wZW5cIiApO1xuXHRcdCQoIFwiLmpzLXNpZGViYXItYmdcIiApLnJlbW92ZSgpO1xuXHRcdCQoIFwiYm9keVwiICkucmVtb3ZlQ2xhc3MoIFwiaXMtb3BlblwiICk7XG5cdH0gKTtcblx0JCggd2luZG93ICkub24oIFwicmVzaXplXCIsIGZ1bmN0aW9uKCkge1xuXHRcdGxldCBwY1dpZHRoID0gOTYxO1xuXHRcdGlmKCB0aW1lciA+IDAgKSB7XG5cdFx0XHRjbGVhclRpbWVvdXQoIHRpbWVyICk7XG5cdFx0fVxuXHRcdHRpbWVyID0gc2V0VGltZW91dCggZnVuY3Rpb24oKSB7XG5cdFx0XHRsZXQgcmVzaXplZFdpZHRoID0gd2luZG93LmlubmVyV2lkdGggfHwgZG9jdW1lbnQuZG9jdW1lbnRFbGVtZW50LmNsaWVudFdpZHRoIHx8IGRvY3VtZW50LmJvZHkuY2xpZW50V2lkdGg7XG5cdFx0XHRpZiggcmVzaXplZFdpZHRoID49IHBjV2lkdGggKSB7XG5cdFx0XHRcdCQoIFwiYm9keVwiICkucmVtb3ZlQ2xhc3MoIFwiaXMtb3BlblwiICk7XG5cdFx0XHRcdCQoIFwiLmpzLXNpZGViYXItYmdcIiApLnJlbW92ZSgpO1xuXHRcdFx0XHQkKCBcIiNzaWRlYmFyXCIgKS5yZW1vdmVDbGFzcyggXCJpcy1vcGVuXCIgKTtcblx0XHRcdH1cblx0XHR9LCAyMDAgKTtcblx0fSApO1xufSApO1xuIiwialF1ZXJ5KCBmdW5jdGlvbiggJCApIHtcblx0dmFyIGNvbmZpZyA9IHJlcXVpcmUoICcuL2NvbmZpZy5qcycgKTtcbn0gKTtcbiJdfQ==
