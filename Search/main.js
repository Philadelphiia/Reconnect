const params = new URLSearchParams(window.location.search);
let search = params.get('search');
let readView = document.querySelector("#read");
const Data = [{
        img: 'img11.jpg',
        title: "Schooling in nigeria burna boy",
        content: "Burna boy won a grammy  and FG is a scam",
        main: `<div class="img-con">
        <img id="img1" src="images.png" alt="Green chain">
    </div>
    <p>A chain is a metallic obeject shaped in a rectangular form and linked together to form one. hdbdhd hbnsndhd sbsbg s  sh dnd hbjd hdbs shdbdhd shssbdgs shssfshsh shsh ttk titnf ryrhggn h, gnfnjf hdhbdhbh</p>
    <div class="cont-ad-con">
        <div class="cont-ad">
            <p>Ad go here</p>
        </div>
    </div>
    <p>A chain is a metallic obeject shaped in a rectangular form and linked together to form one. hdbdhd hbnsndhd sbsbg s  sh dnd hbjd hdbs shdbdhd shssbdgs shssfshsh shsh ttk titnf ryrhggn h, gnfnjf hdhbdhbh</p>
    <p>A chain is a metallic obeject shaped in a rectangular form and linked together to form one. hdbdhd hbnsndhd sbsbg s  sh dnd hbjd hdbs shdbdhd shssbdgs shssfshsh shsh ttk titnf ryrhggn h, gnfnjf hdhbdhbh</p>
    <div class="cont-ad-con">
        <div class="cont-ad">
            <p>Ad go here</p>
        </div>
    </div>
    <p>A chain is a metallic obeject shaped in a rectangular form and linked together to form one. hdbdhd hbnsndhd sbsbg s  sh dnd hbjd hdbs shdbdhd shssbdgs shssfshsh shsh ttk titnf ryrhggn h, gnfnjf hdhbdhbh</p>
    <div class="follow">
        <p>Follow us on <a href="#">Instagram</a> to get updated on your feeds</p>
    </div>`
    },
    {
        img: 'images.png',
        title: "Aaron likes burna boy",
        content: "aaron actually likes NF"
    }
];

let result = [...Data.filter(dat => dat.title.toLowerCase().includes(search.toLowerCase()))];
Data.filter(dat => dat.content.toLowerCase().includes(search.toLowerCase())).forEach(dat => {
    if (result.filter(res => res.title === dat.title).length === 0) {
        result.push(dat);
    }
});

document.querySelector("#searchValue").textContent = search;
document.title = `${search} - Search - ReconnectNaija`;
if (result.length > 0) {

    readView.innerHTML = result.map((res, index) => `<div class="s-result">
<img src="${res.img}">
<div>
    <h3><a href="/content/index.html/?id=${index}">${res.title}</a></h3>
    <p>${res.content}</p>
</div>
</div>`)
} else {
    readView.textContent = 'Result not found'
}