const search = document.getElementById('search');
const matchlist = document.getElementById('list1');

const searchFood = async searchText => {
    const res = await fetch('food.json');
    const foods = await res.json();

    // Get matches to current text input
    let matches = foods.filter(food => {
        const regex = new RegExp(`^${searchText}`, 'gi');
        return food.name.match(regex) || food.abbr.match(regex);
    });

    if (searchText.length === 0) {
        matches = [];
        matchlist.innerHTML = '';
    }

    console.log("hi", matches);
    outputHtml(matches);
};
// Show results in HTML

const outputHtml = matches => {
    if (matches.length > 0) {
        const html = matches.map(match => `
        
        <option>
        <div class="card card-body mb-1">
            <h4>${match.name} <small><span class="text-primary">${match.category}</span></small></h4>
        </div>
        </option>
        `).join('');

        matchlist.innerHTML = html;
    }
}

search.addEventListener('input', () => searchFood(search.value));

// (${match.abbr}) 

var form = document.querySelector("form");

form.addEventListener("submit", function (e) {
    e.preventDefault();
    var search = form.querySelector("input[type=search]");
    search.value = "" + search.value;
    form.submit();
});