
jQuery(document).ready(function($) {
	var jssor_1_SlideshowTransitions = [{
		$Duration: 1200,
		x: 0.3,
		$During: {
			$Left: [0.3, 0.7]
		},
		$Easing: {
			$Left: $Jease$.$InCubic,
			$Opacity: $Jease$.$Linear
		},
		$Opacity: 2
	}, {
		$Duration: 1200,
		x: -0.3,
		$SlideOut: true,
		$Easing: {
			$Left: $Jease$.$InCubic,
			$Opacity: $Jease$.$Linear
		},
		$Opacity: 2
	}, {
		$Duration: 1200,
		x: -0.3,
		$During: {
			$Left: [0.3, 0.7]
		},
		$Easing: {
			$Left: $Jease$.$InCubic,
			$Opacity: $Jease$.$Linear
		},
		$Opacity: 2
	}, {
		$Duration: 1200,
		x: 0.3,
		$SlideOut: true,
		$Easing: {
			$Left: $Jease$.$InCubic,
			$Opacity: $Jease$.$Linear
		},
		$Opacity: 2
	}, {
		$Duration: 1200,
		y: 0.3,
		$During: {
			$Top: [0.3, 0.7]
		},
		$Easing: {
			$Top: $Jease$.$InCubic,
			$Opacity: $Jease$.$Linear
		},
		$Opacity: 2
	}, {
		$Duration: 1200,
		y: -0.3,
		$SlideOut: true,
		$Easing: {
			$Top: $Jease$.$InCubic,
			$Opacity: $Jease$.$Linear
		},
		$Opacity: 2
	}, {
		$Duration: 1200,
		y: -0.3,
		$During: {
			$Top: [0.3, 0.7]
		},
		$Easing: {
			$Top: $Jease$.$InCubic,
			$Opacity: $Jease$.$Linear
		},
		$Opacity: 2
	}, {
		$Duration: 1200,
		y: 0.3,
		$SlideOut: true,
		$Easing: {
			$Top: $Jease$.$InCubic,
			$Opacity: $Jease$.$Linear
		},
		$Opacity: 2
	}, {
		$Duration: 1200,
		x: 0.3,
		$Cols: 2,
		$During: {
			$Left: [0.3, 0.7]
		},
		$ChessMode: {
			$Column: 3
		},
		$Easing: {
			$Left: $Jease$.$InCubic,
			$Opacity: $Jease$.$Linear
		},
		$Opacity: 2
	}, {
		$Duration: 1200,
		x: 0.3,
		$Cols: 2,
		$SlideOut: true,
		$ChessMode: {
			$Column: 3
		},
		$Easing: {
			$Left: $Jease$.$InCubic,
			$Opacity: $Jease$.$Linear
		},
		$Opacity: 2
	}, {
		$Duration: 1200,
		y: 0.3,
		$Rows: 2,
		$During: {
			$Top: [0.3, 0.7]
		},
		$ChessMode: {
			$Row: 12
		},
		$Easing: {
			$Top: $Jease$.$InCubic,
			$Opacity: $Jease$.$Linear
		},
		$Opacity: 2
	}, {
		$Duration: 1200,
		y: 0.3,
		$Rows: 2,
		$SlideOut: true,
		$ChessMode: {
			$Row: 12
		},
		$Easing: {
			$Top: $Jease$.$InCubic,
			$Opacity: $Jease$.$Linear
		},
		$Opacity: 2
	}, {
		$Duration: 1200,
		y: 0.3,
		$Cols: 2,
		$During: {
			$Top: [0.3, 0.7]
		},
		$ChessMode: {
			$Column: 12
		},
		$Easing: {
			$Top: $Jease$.$InCubic,
			$Opacity: $Jease$.$Linear
		},
		$Opacity: 2
	}, {
		$Duration: 1200,
		y: -0.3,
		$Cols: 2,
		$SlideOut: true,
		$ChessMode: {
			$Column: 12
		},
		$Easing: {
			$Top: $Jease$.$InCubic,
			$Opacity: $Jease$.$Linear
		},
		$Opacity: 2
	}, {
		$Duration: 1200,
		x: 0.3,
		$Rows: 2,
		$During: {
			$Left: [0.3, 0.7]
		},
		$ChessMode: {
			$Row: 3
		},
		$Easing: {
			$Left: $Jease$.$InCubic,
			$Opacity: $Jease$.$Linear
		},
		$Opacity: 2
	}, {
		$Duration: 1200,
		x: -0.3,
		$Rows: 2,
		$SlideOut: true,
		$ChessMode: {
			$Row: 3
		},
		$Easing: {
			$Left: $Jease$.$InCubic,
			$Opacity: $Jease$.$Linear
		},
		$Opacity: 2
	}, {
		$Duration: 1200,
		x: 0.3,
		y: 0.3,
		$Cols: 2,
		$Rows: 2,
		$During: {
			$Left: [0.3, 0.7],
			$Top: [0.3, 0.7]
		},
		$ChessMode: {
			$Column: 3,
			$Row: 12
		},
		$Easing: {
			$Left: $Jease$.$InCubic,
			$Top: $Jease$.$InCubic,
			$Opacity: $Jease$.$Linear
		},
		$Opacity: 2
	}, {
		$Duration: 1200,
		x: 0.3,
		y: 0.3,
		$Cols: 2,
		$Rows: 2,
		$During: {
			$Left: [0.3, 0.7],
			$Top: [0.3, 0.7]
		},
		$SlideOut: true,
		$ChessMode: {
			$Column: 3,
			$Row: 12
		},
		$Easing: {
			$Left: $Jease$.$InCubic,
			$Top: $Jease$.$InCubic,
			$Opacity: $Jease$.$Linear
		},
		$Opacity: 2
	}, {
		$Duration: 1200,
		$Delay: 20,
		$Clip: 3,
		$Assembly: 260,
		$Easing: {
			$Clip: $Jease$.$InCubic,
			$Opacity: $Jease$.$Linear
		},
		$Opacity: 2
	}, {
		$Duration: 1200,
		$Delay: 20,
		$Clip: 3,
		$SlideOut: true,
		$Assembly: 260,
		$Easing: {
			$Clip: $Jease$.$OutCubic,
			$Opacity: $Jease$.$Linear
		},
		$Opacity: 2
	}, {
		$Duration: 1200,
		$Delay: 20,
		$Clip: 12,
		$Assembly: 260,
		$Easing: {
			$Clip: $Jease$.$InCubic,
			$Opacity: $Jease$.$Linear
		},
		$Opacity: 2
	}, {
		$Duration: 1200,
		$Delay: 20,
		$Clip: 12,
		$SlideOut: true,
		$Assembly: 260,
		$Easing: {
			$Clip: $Jease$.$OutCubic,
			$Opacity: $Jease$.$Linear
		},
		$Opacity: 2
	}];
	var jssor_1_options = {
		$AutoPlay: true,
		$SlideshowOptions: {
			$Class: $JssorSlideshowRunner$,
			$Transitions: jssor_1_SlideshowTransitions,
			$TransitionsOrder: 1
		},
		$ArrowNavigatorOptions: {
			$Class: $JssorArrowNavigator$
		},
		$ThumbnailNavigatorOptions: {
			$Class: $JssorThumbnailNavigator$,
			$Cols: 8,
			$SpacingX: 8,
			$SpacingY: 8,
			$Align: 360
		}
	};
	var jssor_1_slider = new $JssorSlider$("jssor_1", jssor_1_options);
	//responsive code begin
	//you can remove responsive code if you don't want the slider scales while window resizes
	function ScaleSlider() {
		var refSize = jssor_1_slider.$Elmt.parentNode.clientWidth;
		if (refSize) {
			refSize = Math.min(refSize, 1200);
			jssor_1_slider.$ScaleWidth(refSize);
		} else {
			window.setTimeout(ScaleSlider, 30);
		}
	}
	ScaleSlider();
	$(window).bind("load", ScaleSlider);
	$(window).bind("resize", ScaleSlider);
	$(window).bind("orientationchange", ScaleSlider);
	//responsive code end
	//jsor_2
	var jssor_2_options = {
		$AutoPlay: true,
		$SlideshowOptions: {
			$Class: $JssorSlideshowRunner$,
			$Transitions: jssor_1_SlideshowTransitions,
			$TransitionsOrder: 1
		},
		$ArrowNavigatorOptions: {
			$Class: $JssorArrowNavigator$
		},
		$ThumbnailNavigatorOptions: {
			$Class: $JssorThumbnailNavigator$,
			$Cols: 8,
			$SpacingX: 8,
			$SpacingY: 8,
			$Align: 360
		}
	};
	var jssor_2_slider = new $JssorSlider$("jssor_2", jssor_2_options);
	//responsive code begin
	//you can remove responsive code if you don't want the slider scales while window resizes
	function ScaleSlider2() {
		var refSize = jssor_2_slider.$Elmt.parentNode.clientWidth;
		if (refSize) {
			refSize = Math.min(refSize, 1200);
			jssor_2_slider.$ScaleWidth(refSize);
		} else {
			window.setTimeout(ScaleSlider2, 30);
		}
	}
	ScaleSlider2();
	$(window).bind("load", ScaleSlider2);
	$(window).bind("resize", ScaleSlider2);
	$(window).bind("orientationchange", ScaleSlider2);
	//responsive code end

	//jsor_3
	var jssor_3_options = {
		$AutoPlay: true,
		$SlideshowOptions: {
			$Class: $JssorSlideshowRunner$,
			$Transitions: jssor_1_SlideshowTransitions,
			$TransitionsOrder: 1
		},
		$ArrowNavigatorOptions: {
			$Class: $JssorArrowNavigator$
		},
		$ThumbnailNavigatorOptions: {
			$Class: $JssorThumbnailNavigator$,
			$Cols: 8,
			$SpacingX: 8,
			$SpacingY: 8,
			$Align: 360
		}
	};
	var jssor_3_slider = new $JssorSlider$("jssor_3", jssor_3_options);
	//responsive code begin
	//you can remove responsive code if you don't want the slider scales while window resizes
	function ScaleSlider3() {
		var refSize = jssor_3_slider.$Elmt.parentNode.clientWidth;
		if (refSize) {
			refSize = Math.min(refSize, 1200);
			jssor_3_slider.$ScaleWidth(refSize);
		} else {
			window.setTimeout(ScaleSlider3, 30);
		}
	}
	ScaleSlider3();
	$(window).bind("load", ScaleSlider3);
	$(window).bind("resize", ScaleSlider3);
	$(window).bind("orientationchange", ScaleSlider3);
	//responsive code end

	//jsor_4
	var jssor_4_options = {
		$AutoPlay: true,
		$SlideshowOptions: {
			$Class: $JssorSlideshowRunner$,
			$Transitions: jssor_1_SlideshowTransitions,
			$TransitionsOrder: 1
		},
		$ArrowNavigatorOptions: {
			$Class: $JssorArrowNavigator$
		},
		$ThumbnailNavigatorOptions: {
			$Class: $JssorThumbnailNavigator$,
			$Cols: 8,
			$SpacingX: 8,
			$SpacingY: 8,
			$Align: 360
		}
	};
	var jssor_4_slider = new $JssorSlider$("jssor_4", jssor_4_options);
	//responsive code begin
	//you can remove responsive code if you don't want the slider scales while window resizes
	function ScaleSlider4() {
		var refSize = jssor_4_slider.$Elmt.parentNode.clientWidth;
		if (refSize) {
			refSize = Math.min(refSize, 1200);
			jssor_4_slider.$ScaleWidth(refSize);
		} else {
			window.setTimeout(ScaleSlider4, 30);
		}
	}
	ScaleSlider4();
	$(window).bind("load", ScaleSlider4);
	$(window).bind("resize", ScaleSlider4);
	$(window).bind("orientationchange", ScaleSlider4);
	//responsive code end

	//jsor_5
	var jssor_5_options = {
		$AutoPlay: true,
		$SlideshowOptions: {
			$Class: $JssorSlideshowRunner$,
			$Transitions: jssor_1_SlideshowTransitions,
			$TransitionsOrder: 1
		},
		$ArrowNavigatorOptions: {
			$Class: $JssorArrowNavigator$
		},
		$ThumbnailNavigatorOptions: {
			$Class: $JssorThumbnailNavigator$,
			$Cols: 8,
			$SpacingX: 8,
			$SpacingY: 8,
			$Align: 360
		}
	};

	var jssor_5_slider = new $JssorSlider$("jssor_5", jssor_5_options);
	//responsive code begin
	//you can remove responsive code if you don't want the slider scales while window resizes
	function ScaleSlider5() {
		var refSize = jssor_5_slider.$Elmt.parentNode.clientWidth;
		if (refSize) {
			refSize = Math.min(refSize, 1200);
			jssor_5_slider.$ScaleWidth(refSize);
		} else {
			window.setTimeout(ScaleSlider5, 30);
		}
	}
	ScaleSlider5();
	$(window).bind("load", ScaleSlider5);
	$(window).bind("resize", ScaleSlider5);
	$(window).bind("orientationchange", ScaleSlider5);
	//responsive code end

	//jsor_6
	var jssor_6_options = {
		$AutoPlay: true,
		$SlideshowOptions: {
			$Class: $JssorSlideshowRunner$,
			$Transitions: jssor_1_SlideshowTransitions,
			$TransitionsOrder: 1
		},
		$ArrowNavigatorOptions: {
			$Class: $JssorArrowNavigator$
		},
		$ThumbnailNavigatorOptions: {
			$Class: $JssorThumbnailNavigator$,
			$Cols: 8,
			$SpacingX: 8,
			$SpacingY: 8,
			$Align: 360
		}
	};

	var jssor_6_slider = new $JssorSlider$("jssor_6", jssor_6_options);
	//responsive code begin
	//you can remove responsive code if you don't want the slider scales while window resizes
	function ScaleSlider6() {
		var refSize = jssor_6_slider.$Elmt.parentNode.clientWidth;
		if (refSize) {
			refSize = Math.min(refSize, 1200);
			jssor_6_slider.$ScaleWidth(refSize);
		} else {
			window.setTimeout(ScaleSlider6, 30);
		}
	}
	ScaleSlider6();
	$(window).bind("load", ScaleSlider6);
	$(window).bind("resize", ScaleSlider6);
	$(window).bind("orientationchange", ScaleSlider6);
	//responsive code end

});