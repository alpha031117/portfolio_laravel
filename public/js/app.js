document.addEventListener("mousemove", (e) => {
    document.body.style.setProperty("--cursorX", `${e.clientX}px`);
    document.body.style.setProperty("--cursorY", `${e.clientY}px`);
});

document.addEventListener("DOMContentLoaded", function () {
    // Smooth scrolling
    document.querySelectorAll('a[href^="#"]').forEach((anchor) => {
        anchor.addEventListener("click", function (e) {
            e.preventDefault();
            document.querySelector(this.getAttribute("href")).scrollIntoView({
                behavior: "smooth",
            });
        });
    });

    // Navigation buttons visibility
    window.addEventListener("scroll", function () {
        const alphaSection = document.getElementById("alpha-section");
        const alanSection = document.getElementById("alan-section");
        const toAlphaBtn = document.getElementById("to-alpha");
        const toAlanBtn = document.getElementById("to-alan");
        const scrollPosition = window.scrollY + window.innerHeight / 2;

        if (scrollPosition >= alanSection.offsetTop) {
            toAlphaBtn.style.display = "block";
            toAlanBtn.style.display = "none";
        } else {
            toAlphaBtn.style.display = "none";
            toAlanBtn.style.display = "block";
        }
    });

    // Counter animation
    const startCounterAnimation = (counter) => {
        const updateCount = () => {
            const target = +counter.getAttribute("data-target");
            let count = +counter.innerText;
            const increment = 1;

            if (count < target) {
                counter.innerText = count + increment;
                setTimeout(updateCount, 100);
            } else {
                counter.innerText = target;
            }
        };
        updateCount();
    };

    // Progress bar animation
    const startProgressBarAnimation = (progressBar) => {
        progressBar.style.width =
            progressBar.getAttribute("aria-valuenow") + "%";
        setTimeout(() => {
            progressBar.classList.add("progress-bar-animated");
        }, 4000);
    };

    // Timeline animation
    const startTimelineAnimation = (element) => {
        element.classList.add("show");
    };

    // Intersection Observer for all animations
    const observerOptions = {
        threshold: 0.2, // 20% of the element needs to be visible
        rootMargin: "0px", // No margin
    };

    const observer = new IntersectionObserver((entries) => {
        entries.forEach((entry) => {
            if (entry.isIntersecting) {
                // Counter section
                if (entry.target.classList.contains("counter-section")) {
                    entry.target
                        .querySelectorAll(".count")
                        .forEach((counter) => {
                            if (!counter.classList.contains("animated")) {
                                counter.classList.add("animated");
                                startCounterAnimation(counter);
                            }
                        });
                }

                // Progress bar section
                if (entry.target.classList.contains("skills-section")) {
                    entry.target
                        .querySelectorAll(".progress-bar")
                        .forEach((progressBar) => {
                            if (!progressBar.classList.contains("animated")) {
                                progressBar.classList.add("animated");
                                startProgressBarAnimation(progressBar);
                            }
                        });
                }

                // Timeline section
                if (entry.target.classList.contains("timeline")) {
                    if (!entry.target.classList.contains("animated")) {
                        entry.target.classList.add("animated");
                        startTimelineAnimation(entry.target);
                    }
                }

                // Unobserve after animation starts
                observer.unobserve(entry.target);
            }
        });
    }, observerOptions);

    // Select all progress bars with the 'progress-bar' class
    const progressBars = document.querySelectorAll(".progress-bar");

    // Loop through each progress bar
    progressBars.forEach((progressBar) => {
        // Wait for the width animation to end (4 seconds duration)
        setTimeout(function () {
            // Add the 'progress-bar-animated' class after the width animation
            progressBar.classList.add("progress-bar-animated");
        }, 4000); // 4000ms = 4 seconds (the duration of the animation)
    });

    // Observe sections
    document.querySelectorAll(".counter-section").forEach((section) => {
        observer.observe(section);
    });

    document.querySelectorAll(".skills-section").forEach((section) => {
        observer.observe(section);
    });

    document.querySelectorAll(".timeline").forEach((element) => {
        observer.observe(element);
    });
});
