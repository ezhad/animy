document.addEventListener('DOMContentLoaded', () => {
    const links = document.querySelectorAll('.nav-link');
    const content = document.getElementById('content');

    links.forEach(link => {
        link.addEventListener('click', async (e) => {
            e.preventDefault(); // stop normal page reload
            const url = link.getAttribute('href');

            // Fetch new content
            const response = await fetch(url);
            const data = await response.text();

            // Replace content area
            content.innerHTML = data;
        });
    });
});
