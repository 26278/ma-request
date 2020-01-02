const sections = document.querySelectorAll('.div');

sections.forEach(section => {
    const observer = new IntersectionObserver(entries => {
        entries.forEach(entry => (entry.isIntersecting) ? section.classList.add('fadein') : '')
    }, { rootMargin: "0px 0px 0px 0px", threshold: .7 })
    observer.observe(section)
})