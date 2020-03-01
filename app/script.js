const searchInput = document.getElementById('search');

const data = () => {
    const searchData = [];
    const entries = document.getElementById('entry-wrapper');
    Array.from(entries.children).forEach(entry=>{
        let entryA = Array.from(entry.children);
        entryA.pop();
        searchData.push(entryA.map(e=> {
            return e.innerHTML;
        }));
    });
    return searchData;
}

const search = (arr, searchTerm) => {
    if(!searchTerm){
        return arr;
    }else{
        return arr.filter(content => {
            return content.find(item => item.toLowerCase().includes(searchTerm.toLowerCase()));
        });
    }
}

const refreshEntries = (data) => {
    const entries = document.getElementsByClassName('card');
    Array.from(entries).forEach(entry =>{
        entry.style.display = 'none';
    });
    console.log(data);
    data.forEach(row =>{
        row.style.display = 'inline';
    });
}

//Init ---
const initalData = data();

searchInput.addEventListener('keyup', (e) => {
    console.log(search(initalData,e.target.value));
    refreshEntries(search(initalData,e.target.value));
});