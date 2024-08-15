import { gsap } from "gsap";
import { ScrollTrigger } from "gsap/ScrollTrigger";
gsap.registerPlugin(ScrollTrigger);
(function (document, window, $) {
	//
	// 		jQuery is ready as $
	//

	if( !$('body').hasClass('home') ){
		return;
	}

	// console.clear();
	/* The encoding is super important here to enable frame-by-frame scrubbing. */
	//--- Credit to @shshaw for orginal video scroll code - https://codepen.io/shshaw/pen/vYKBPbv/9e810322d70c306de2d18237d0cb2d78
	// ffmpeg -i ~/Downloads/Toshiba\ video/original.mov -movflags faststart -vcodec libx264 -crf 23 -g 1 -pix_fmt yuv420p output.mp4
	// ffmpeg -i ~/Downloads/Toshiba\ video/original.mov -vf scale=960:-1 -movflags faststart -vcodec libx264 -crf 20 -g 1 -pix_fmt yuv420p output_960.mp4


	// Check if the browser is Firefox
	var isFirefox = navigator.userAgent.toLowerCase().indexOf("firefox") > -1;

	// If the browser is Firefox we have to use another methodology for this
	if (isFirefox) {
		return;
	}

	let videoScroll = document.querySelector(".video-container video"),
		frameNumber = 0,
		src = videoScroll.currentSrc || videoScroll.src;

	let scrollRunway = document.querySelectorAll(".is-motion-column");

	let videoScrollTL = gsap.timeline({
		defaults: { duration: 1 },
		scrollTrigger: {
			trigger: "#container",
			start: "top top",
			end: "+=" + scrollRunway[0].clientHeight,
			scrub: true,
			// markers: true,
			onUpdate: (self) => {
				frameNumber = (self.progress / 14) * 100 - 1; //this takes fine tuning divide your videos FPS by two. My video's FPS was 30, 14 was the sweet spot. -1 fixes an issue on safari where the video disappears at the end of the scrollTrigger
				videoScroll.currentTime = frameNumber;
			},
		},
	});

	/* Make sure the video is 'activated' on iOS */
	function once(el, event, fn, opts) {
		var onceFn = function (e) {
			el.removeEventListener(event, onceFn);
			fn.apply(this, arguments);
		};
		el.addEventListener(event, onceFn, opts);
		return onceFn;
	}

	once(document.documentElement, "touchstart", function (e) {
		videoScroll.play();
		videoScroll.pause();
	});

	//make sure video has loaded
	once(videoScroll, "loadedmetadata", function () {
		videoScrollTL.fromTo(
			videoScroll,
			{ currentTime: 0 },
			{ currentTime: videoScroll.duration - 0.1 }
		);
	});

	//When first coded, the Blobbing was important to ensure the browser wasn't dropping previously played segments, but it doesn't seem to be a problem now. Possibly based on memory availability?
	setTimeout(function () {
		if (window["fetch"]) {
			fetch(src)
				.then(function (response) {
					return response.blob();
				})
				.then(function (response) {
					var blobURL = URL.createObjectURL(response);
					var t = videoScroll.currentTime;
					once(document.documentElement, "touchstart", function (e) {
						videoScroll.setAttribute("src", blobURL);
						videoScroll.currentTime = t + 0.01;
					});
				});
		}
	}, 0);

	//
	//
	//
})(document, window, jQuery);
