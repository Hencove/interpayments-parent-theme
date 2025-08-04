//
//
//
//
import { gsap } from "gsap";
import { ScrollTrigger } from "gsap/ScrollTrigger";
gsap.registerPlugin(ScrollTrigger);
(function (document, window, $) {
  //
  // 		jQuery is ready as $
  //

  // console.dir(theme_info.templateUrl);

  let isHomePage = $("body").hasClass("page-id-6");
  // Check if the browser is Firefox
  let isFirefox = navigator.userAgent.toLowerCase().indexOf("firefox") > -1;

  if (!isHomePage || !isFirefox) {
    return;
  }

  // If the browser is Firefox, create and append canvas to #container
  if (isFirefox) {
    console.log("firefox browser detected");

    $(".is-motion-column video").hide();

    var container = document.getElementById("container");
    var canvas = document.createElement("canvas");
    // Set canvas attributes
    canvas.id = "image-sequence"; // Set the ID
    // You can set other attributes like width, height, class, etc. as needed
    canvas.width = 720;
    canvas.height = 720;

    container.appendChild(canvas);
  }

  let frameCount = 147,
    urls = new Array(frameCount)
      .fill()
      .map(
        (o, i) =>
          theme_info.templateUrl +
          `/assets/cube-anim-frames/output_${(i + 1)
            .toString()
            .padStart(4, "0")}.png`,
      );

  //
  //
  //
  //
  // document.addEventListener('DOMContentLoaded', function() {
  // });
  // Your canvas sequence script code here
  imageSequence({
    urls, // Array of image URLs
    canvas: "#image-sequence", // <canvas> object to draw images to
    clear: true, // only necessary if your images contain transparency
    //onUpdate: (index, image) => console.log("drew image index", index, ", image:", image),
    scrollTrigger: {
      // markers: true,
      trigger: "#container",
      start: "top 15%", // start at the very top
      end: "+=2000", //
      scrub: true, // important!
    },
  });

  //

  /*
      Helper function that handles scrubbing through a sequence of images, drawing the appropriate one to the provided canvas. 
      Config object properties: 
      - urls [Array]: an Array of image URLs
      - canvas [Canvas]: the <canvas> object to draw to
      - scrollTrigger [Object]: an optional ScrollTrigger configuration object like {trigger: "#trigger", start: "top top", end: "+=1000", scrub: true, pin: true}
      - clear [Boolean]: if true, it'll clear out the canvas before drawing each frame (useful if your images contain transparency)
      - paused [Boolean]: true if you'd like the returned animation to be paused initially (this isn't necessary if you're passing in a ScrollTrigger that's scrubbed, but it is helpful if you just want a normal playback animation)
      - fps [Number]: optional frames per second - this determines the duration of the returned animation. This doesn't matter if you're using a scrubbed ScrollTrigger. Defaults to 30fps.
      - onUpdate [Function]: optional callback for when the Tween updates (probably not used very often). It'll pass two parameters: 1) the index of the image (zero-based), and 2) the Image that was drawn to the canvas
      
      Returns a Tween instance
      */
  function imageSequence(config) {
    let playhead = { frame: 0 },
      canvas =
        gsap.utils.toArray(config.canvas)[0] ||
        console.warn("canvas not defined"),
      ctx = canvas.getContext("2d"),
      curFrame = -1,
      onUpdate = config.onUpdate,
      images,
      updateImage = function () {
        let frame = Math.round(playhead.frame);
        if (frame !== curFrame) {
          // only draw if necessary
          config.clear && ctx.clearRect(0, 0, canvas.width, canvas.height);
          ctx.drawImage(images[Math.round(playhead.frame)], 0, 0);
          curFrame = frame;
          onUpdate && onUpdate.call(this, frame, images[frame]);
        }
      };
    images = config.urls.map((url, i) => {
      let img = new Image();
      img.src = url;
      i || (img.onload = updateImage);
      return img;
    });
    return gsap.to(playhead, {
      frame: images.length - 1,
      ease: "none",
      onUpdate: updateImage,
      duration: images.length / (config.fps || 30),
      paused: !!config.paused,
      scrollTrigger: config.scrollTrigger,
    });
  }

  //
  //
  //
})(document, window, jQuery);
