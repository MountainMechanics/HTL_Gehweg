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
    let entryArr = Array.from(entries);
    entryArr.forEach(e=>{
        e.style.display = 'inline';
    });
    let i = 0;
    let counter = 0;
    entryArr.forEach(entry =>{
        data.forEach(e=>{
            if(initalData[i][0] !== e[0]){
                entry.style.display = 'none';
            }else{
                counter ++;
            }
        });
        i++;
    });
    if(counter == 0 && searchInput.innerText().trim() === ""){
        entryArr.forEach(e=>{
            e.style.display = 'inline';
        });
    }
    console.log(initalData[0]);
    console.log(data);
}

//Init ---
const initalData = data();

searchInput.addEventListener('keyup', (e) => {
    refreshEntries(search(initalData,e.target.value));
});