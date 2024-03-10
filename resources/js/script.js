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

window.testimonial_keen = testimonial_keen;
