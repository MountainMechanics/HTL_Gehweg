const url = "mongodb://localhost:420";
const {MongoClient} = require('mongodb');

const query = document.getElementsByName("query");

getAllEntries();

async function getAllEntries(){
    const conn = await MongoClient.connect(url);
    const entries = conn.db().collection("entries").find();
    let content = '';

    await entries.forEach(e => {
        content += `
            <br>
            <div class='card col'>
                <div class='font-header entry-name card-center'>
                    ".${e.title}."
                </div>
                <section  class='entry-author'>
                    ".${e.author}."
                </section>
                <p class='entry-description spacer-xs'>
                    ".${e.desc}."
                </p>
                <button class='btn-simple spacer-xs entry-btn'>
                    Download - 5Mb
                </button>
            </div>
            `;
    });
    return `${content}`;
}


