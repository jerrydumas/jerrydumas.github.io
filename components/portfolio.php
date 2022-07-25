<section class="portfolio" id="portfolio">
    <div class="heading">
        <h2>Portfolio</h2>
    </div>
    <div class='pcards'>
        <script>
        const pItems = CardItems.map((item) => {
            return `
                <div class='vcard'>
                <img src=${item.img} alt=${item.desc} class='vimg ${item.class}' />
                <div class='vcardContent'>
                    <h2>
                    ${item.title}
                    </h2>
                    <p>${item.about}</p>
                    <ul>
                    <li>
                    <a href=${item.link}> Go To Site</a>
                    </li>
                    </ul>
                </div>
                </div>
`
        }).join('')
        const result = document.querySelector('.pcards')
        result.innerHTML = pItems;
        </script>
    </div>
</section>