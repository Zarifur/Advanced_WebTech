import React, {useState, useEffect} from "react";
import axios from "axios";
import Client from './StudentCall';

const Student = ()=>{
    const [clients, setClients] = useState([]);

    useEffect(()=>{
        axios.get("http://127.0.0.1:8000/api/student/list")
            .then(resp=>{
                console.log(resp.data);
                setClients(resp.data);
            }).catch(err=>{
            console.log(err);
        });
    },[]);

    return(
        <div className={'bg-light'}>
            <table className="table" id="customers">
                <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Name</th>
                    <th scope="col">Email</th>
                    <th scope="col">Phone</th>
                </tr>
                </thead>
                <tbody>
                {
                    clients.map(client=>(
                        <Client id={client.id} name={client.name} email={client.email} phone={client.phone}></Client>
                    ))
                }
                </tbody>
            </table>
        </div>
    )

}
export default Student;