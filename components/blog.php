<section class="blog" id="blog">
    <div class='heading'>
        <h2>Blog</h2>
    </div>
    <div class='hcards'>
        <script>
        const bItems = BlogItems.map((bitem) => {
            return `
<div class='hcard'>
<div class="hcardImg">
<img src=${bitem.img} alt=${bitem.alt} class='himg' />
</div>

<div class="hcardContent">
    <h2>${bitem.title}</h2>
    <h3>${bitem.desc}</h3>
    <ul>
    <li>
    <a href='#'>Read More</a>
    </li>
    </ul>
</div>

</div>
</div>
`
        }).join('')
        const bresult = document.querySelector('.hcards')
        bresult.innerHTML = bItems;
        </script>
    </div>
</section>