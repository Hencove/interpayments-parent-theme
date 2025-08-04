import { gsap } from "gsap";
import { ScrollTrigger } from "gsap/ScrollTrigger";
gsap.registerPlugin(ScrollTrigger);
(function (document, window, $) {
  //
  //

  const QueryBlockItems = gsap.utils.toArray(".wp-block-query .wp-block-post");
  const MediaTextBlocks = gsap.utils.toArray([".wp-block-media-text"]);

  if (QueryBlockItems.length) {
    // set the initial state of the elements to faded-out and nudged-down
    gsap.set(QueryBlockItems, { opacity: 0, y: 30 });

    // batch animation for all elements
    ScrollTrigger.batch(QueryBlockItems, {
      start: "top 90%",
      end: "bottom 10%",
      duration: 1,
      onEnter: (batch) => gsap.to(batch, { y: 0, autoAlpha: 1, stagger: 0.2 }),
    });
  }

  if (MediaTextBlocks.length) {
    //
    // set the initial state of the elements to faded-out and nudged-down
    gsap.set(".wp-block-media-text__media", { y: 40, opacity: 0 });
    gsap.set(".wp-block-media-text__content", { x: 40, opacity: 0 });

    ScrollTrigger.batch(MediaTextBlocks, {
      start: "top 85%",
      end: "bottom 15%",
      onEnter: (batch) =>
        batch.forEach((block, index) => {
          let figure = block.querySelectorAll(".wp-block-media-text__media");
          let content = block.querySelectorAll(".wp-block-media-text__content");
          //
          gsap.to(figure, {
            duration: 1.3,
            opacity: 1,
            y: 0,
            delay: 0.3,
          });
          gsap.to(content, { duration: 1.3, opacity: 1, x: 0 });
        }),
    });
  }

  //
  //
})(document, window, jQuery);
