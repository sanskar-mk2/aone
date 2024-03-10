import "keen-slider/keen-slider.min.css";
import KeenSlider from "keen-slider";

const testimonial_keen = new KeenSlider("#testimonial-slider", {
    loop: true,
    slides: {
        perView: 1,
    },
    breakpoints: {
        "(min-width: 1280px)": {
            slides: { perView: 3, spacing: 10 },
        },
    },
});

const hero_keen = new KeenSlider(
    "#hero-slider",
    {
        loop: true,
    },
    [
        (slider) => {
            let timeout;
            let mouseOver = false;
            function clearNextTimeout() {
                clearTimeout(timeout);
            }
            function nextTimeout() {
                clearTimeout(timeout);
                if (mouseOver) return;
                timeout = setTimeout(() => {
                    slider.next();
                }, 5000);
            }
            slider.on("created", () => {
                // slider.container.addEventListener("mouseover", () => {
                //     mouseOver = true;
                //     clearNextTimeout();
                // });
                // slider.container.addEventListener("mouseout", () => {
                //     mouseOver = false;
                //     nextTimeout();
                // });
                nextTimeout();
            });
            slider.on("dragStarted", clearNextTimeout);
            slider.on("animationEnded", nextTimeout);
            slider.on("updated", nextTimeout);
        },
    ]
);

window.testimonial_keen = testimonial_keen;
