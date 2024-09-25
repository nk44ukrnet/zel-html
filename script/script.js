window.addEventListener('DOMContentLoaded', () => {
    //loading words
    try {
        let phrases = [
            `Analyzing your bio`,
            `Analyzing your audience engagement`,
            `Analyzing your talking videos`,
            `Creating your recommendations`,
        ];
        let currentPhrase = 0;

        let loadingHeading = document.querySelector('.hb-loading__text');
        if (loadingHeading && phrases.length > 0) {
            setInterval(() => {
                if ((currentPhrase + 1) < (phrases.length)) {
                    currentPhrase += 1;
                    loadingHeading.textContent = phrases[currentPhrase];
                } else {
                    currentPhrase = 0;
                    loadingHeading.textContent = phrases[currentPhrase];
                }
            }, 2500)
        }
    } catch (e) {
        console.log(e);
    }

    //shadow scroll right side on pagination
    try {
        let scrollableContainer = document.querySelector('.swiper-pagination1');
        const gradientOverlay = document.querySelector('.gradient-overlay');
        // Adjust the gradient position on scroll
        scrollableContainer.addEventListener('scroll', () => {
            const maxScrollLeft = scrollableContainer.scrollWidth - scrollableContainer.clientWidth;
            const scrollPercentage = scrollableContainer.scrollLeft / maxScrollLeft;

            // Adjust the position of the gradient based on horizontal scroll
            gradientOverlay.style.transform = `translateX(${scrollableContainer.scrollLeft}px)`;
        });
    } catch (e) {
        console.log(e)
    }

    //slide change logic
    try {
        let bullet = document.querySelectorAll('.swiper-pagination-bullet');
        let bulletActiveCSSClass = 'swiper-pagination-bullet-active';
        let slide = document.querySelectorAll('.swiper-slide');
        let slideActiveCSSClass = 'active';
        let nextSlide = document.querySelector('.swiper-button-next1');
        let nextSlideDisabledCSSClass = 'swiper-button-disabled';
        let currentSlide = 0;

        function removeSlidesActiveCSSClass() {
            slide.forEach(slide => {
                slide.classList.remove(slideActiveCSSClass);
            })
        }

        function removeBulletsActiveCSSClass() {
            bullet.forEach(item => {
                item.classList.remove(bulletActiveCSSClass);
            })
        }

        function scrollToTop() {
            window.scrollTo({
                top: 0,
                behavior: 'smooth'
            });
        }

        function centerActiveDot() {
            const paginationContainer = document.querySelector('.swiper-pagination1');
            const activeDot = paginationContainer.querySelector('.swiper-pagination-bullet-active');

            if (activeDot) {
                const containerRect = paginationContainer.getBoundingClientRect();
                const activeDotRect = activeDot.getBoundingClientRect();

                // Calculate the scroll position to center the active dot
                const scrollLeft = activeDotRect.left - containerRect.left + (activeDotRect.width / 2) - (containerRect.width / 2);

                paginationContainer.scrollBy({
                    left: scrollLeft,
                    behavior: 'smooth'
                });
            }
        }

        function nextSlideAttempt() {
            if ((currentSlide + 1) == slide.length - 1) {
                nextSlide.classList.add(nextSlideDisabledCSSClass);
            } else {
                nextSlide.classList.remove(nextSlideDisabledCSSClass);
            }
            currentSlide += 1;
            removeSlidesActiveCSSClass()
            removeBulletsActiveCSSClass()
            slide[currentSlide].classList.add(slideActiveCSSClass);
            bullet[currentSlide].classList.add(bulletActiveCSSClass);
            centerActiveDot();
            scrollToTop();
        }

        nextSlide.addEventListener('click', nextSlideAttempt);

        bullet.forEach((item, index) => {
            item.addEventListener('click', (e) => {
                let dataIndex = Number(e.target.closest('.swiper-pagination-bullet').dataset.index);
                let currentClass = e.target.closest('.swiper-pagination-bullet');
                let isLast = currentClass.classList.contains('last-child');
                if (isLast) {
                    nextSlide.classList.add(nextSlideDisabledCSSClass);
                } else {
                    nextSlide.classList.remove(nextSlideDisabledCSSClass);
                }
                removeSlidesActiveCSSClass();
                removeBulletsActiveCSSClass();
                slide[index].classList.add(slideActiveCSSClass);
                item.classList.add(bulletActiveCSSClass);
                currentSlide = dataIndex;
                centerActiveDot();
                scrollToTop();
            });
        });

    } catch (e) {
        console.log(e)
    }

    //test navigation code
    try {
        let hbScreenTest = document.querySelectorAll('.hb-screen-test');
        let activeCSSClass = 'active';
        let aTrigger = document.querySelectorAll('a[data-to-screen]');
        function deselect(){
            hbScreenTest.forEach(item => {
                item.classList.remove(activeCSSClass);
            })
        }
        aTrigger.forEach(item => {
            item.addEventListener('click', (e) => {
                let dataset = e.target.dataset.toScreen;
                deselect();
                let targetElement = document.querySelector(`#${dataset}`);
                targetElement.classList.add(activeCSSClass);
            })
        })

    } catch (e) {
        console.log(e)
    }
})