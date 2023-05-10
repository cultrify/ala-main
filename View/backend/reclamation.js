
var recList = []

window.onload = async (e) => {
    const USERNAME = "CLIENT"

    cln = document.getElementById("cname")
    cln.innerHTML = "HELLO, " + USERNAME;

    const res = await fetch("../../Controller/Reclamation/findAll.php", {
        method: "GET"
        
    }).then(r => r.json())

    recList = res;
    ObjectToHtml(recList)

}


ObjectToHtml = (list) => {
    const l = document.getElementById("recList");
    val = list.map((v) => {
        return `
        <tr  >
      
        <td> ${v.id}  </td> 
        <td> ${v.client} </td> 
        <td> ${v.created_at} </td> 
        <td>  ${v.subject} </td> 
        <td>  ${v.content} </td> 
        <td> 
            <div>
                <button onclick='open_update("${v.id}")' class='up'>UPDATE</button>
                <button onclick='delete_rec("${v.id}")' class='dl'>DELETE</button>
                <button onclick='open_rep("${v.id}")' class='vi'>REPONSE</button>
                <button onclick='block("${v.client}")' class='vi'>BLOCK</button>
            </div>
            </th> 
         
            </tr  >
  
    
            `
    }).join('')

    l.innerHTML = val
}


const AddWidgetToggle = () => {
    c = document.getElementById("AddNewRec")
    c.classList.toggle("shown")
}

const UpWidgetToggle = () => {
    c = document.getElementById("updateRec")
    c.classList.toggle("shown")
}

const open_rep = (id) => {
    location.replace("./reponse.php?id=" + id)
}
const open_blc = () => {
    location.replace("./blocked.php")
}

document.getElementById("AddForm").addEventListener("submit",
    async (event) => {
        event.preventDefault();

        const data = Object.fromEntries(new FormData(event.currentTarget))
        if (data.client == "") {
            alert("CLIENT FIELD EMPTY")
            return;
        }
        else if (data.subject == "") {
            alert("SUBJECT FIELD EMPTY")
            return;
        }
        else if (data.content == "") {
            alert("CONTENT FIELD EMPTY")
            return;
        }

        const res = await fetch("../../Controller/Reclamation/insert.php", {
            method: "POST",
            body: JSON.stringify(data)
        })

        if (res.status != 200) {
            // error happened
            const val = await res.text();
            alert(val);
            return;
        }
        location.reload()
    }
);
const block = async ($username) => {
    const url = `../../Controller/Blocked/insert.php?id=${$username}`
    const res = await fetch(url, {
        method: "GET",
    })
    if (res.status != 200) {
        const val = await res.text();
        alert(val);
        return;
    }
    location.reload()
}
const delete_rec = async (id) => {
    const url = `../../Controller/Reclamation/delete.php?id=${id}`
    const res = await fetch(url, {
        method: "GET",
    })
    if (res.status != 200) {
        const val = await res.text();
        alert(val);
        return;
    }
    location.reload()
}

const open_update = async (id) => {
    const url = `../../Controller/Reclamation/findOne.php?id=${id}`
    const res = await fetch(url, {
        method: "GET",
    })
    if (res.status != 200) {
        const val = await res.text();
        alert(val);
        return;
    }
    UpWidgetToggle()
    const val = await res.json();
    document.getElementById("uprc_ID").value = (val.id);
    document.getElementById("uprc_client").value = (val.client);
    document.getElementById("uprc_subject").value = (val.subject);
    document.getElementById("uprc_content").value = (val.content);
}


document.getElementById("UpdateForm").addEventListener("submit",
    async (event) => {
        event.preventDefault();
        const data = Object.fromEntries(new FormData(event.currentTarget))

        if (data.client == "") {
            alert("CLIENT FIELD EMPTY")
            return;
        }
        else if (data.subject == "") {
            alert("SUBJECT FIELD EMPTY")
            return;
        }
        else if (data.content == "") {
            alert("CONTENT FIELD EMPTY")
            return;
        }
        else if (data.id == "") {
            alert("ID FIELD EMPTY")
            return;
        }
        // validation
        const res = await fetch("../../Controller/Reclamation/update.php", {
            method: "POST",
            body: JSON.stringify(data)
        })

        if (res.status != 200) {
            // error happened
            const val = await res.text();
            alert(val);
            return;
        }
        location.reload()
    }
);

document.getElementById("search").addEventListener("keyup", (f) => {
    var val = f.currentTarget.value
    nl = recList.filter((v) => v.client.includes(val));
    ObjectToHtml(nl)
})

document.getElementById("filters").addEventListener("change", (f) => {
    var c = f.currentTarget.value
    if (c == "dc") {
        filter = (a, b) => Date.parse(a.created_at) - Date.parse(b.created_at);
    } else if (c == "dd") {
        filter = (a, b) => Date.parse(b.created_at) - Date.parse(a.created_at);
    } else if (c == "az") {
        filter = (a, b) => {
            if (a.client < b.client)
                return -1
            if (b.client < a.client) {
                return 1
            }
            return 0
        };
    } else if (c == "za") {
        filter = (a, b) => {
            if (a.client > b.client)
                return -1
            if (b.client > a.client) {
                return 1
            }
            return 0
        };
    }
    ObjectToHtml(recList.sort(filter))
})
